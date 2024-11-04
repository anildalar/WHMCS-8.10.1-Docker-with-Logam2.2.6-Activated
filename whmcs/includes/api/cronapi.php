<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';
require_once __DIR__ . '/../../ratelimit.php';

// Example country codes array

$countryCodes = [
    '1' => 'United States',
    '1' => 'Canada',
    '44' => 'United Kingdom',
    '971' => 'United Arab Emirates',
    '91' => 'India',
    '49' => 'Germany',
    '33' => 'France',
    '39' => 'Italy',
    '81' => 'Japan',
    '61' => 'Australia',
    '64' => 'New Zealand',
    '65' => 'Singapore',
    '86' => 'China',
    '34' => 'Spain',
    '55' => 'Brazil',
    '7' => 'Russia',
    '41' => 'Switzerland',
    '30' => 'Greece',
    '32' => 'Belgium',
    '45' => 'Denmark',
    '46' => 'Sweden',
    '43' => 'Austria',
    '36' => 'Hungary',
    '353' => 'Ireland',
    '420' => 'Czech Republic',
    '351' => 'Portugal',
    '358' => 'Finland',
    '372' => 'Estonia',
    '370' => 'Lithuania',
    '371' => 'Latvia',
    '358' => 'Iceland',
    '46' => 'Sweden',
    '353' => 'Ireland',
    '354' => 'Iceland',
    '63' => 'Philippines',
    '62' => 'Indonesia',
    '60' => 'Malaysia',
    '63' => 'Philippines',
    '64' => 'New Zealand',
    '41' => 'Switzerland',
    '82' => 'South Korea',
    '66' => 'Thailand',
    '64' => 'New Zealand',
    '963' => 'Syria',
    '966' => 'Kingdom of Saudi Arabia',
    '90' => 'Turkey',
    '20' => 'Egypt',
    '27' => 'South Africa',
    '30' => 'Greece',
    '41' => 'Switzerland',
];

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action === 'CronCallingAction') {
    try {
        // Fetch all pending campaigns
        $pendingCampaigns = Capsule::table('CronJob_For_Calling')
            ->where('camp_status', 'pending')
            ->get();

        if ($pendingCampaigns->isEmpty()) {
            echo json_encode(['result' => 'error', 'message' => 'No pending campaigns found.']);
            return; // Exit the function early if no campaigns found
        }

        foreach ($pendingCampaigns as $campaign) {
            // Update the campaign status to 'running'
            if ($campaign->check_type_cron === 'realstatecall') {
                Capsule::table('CronJob_For_Calling')
                ->where('id', $campaign->id)
                ->update(['camp_status' => 'running']);

                // Get the numbers from the LONGTEXT field
                $numbers = $campaign->data__of_numbers;
                $numberArray = array_map('trim', explode(',', $numbers));
                $totalPrice = 0; // Variable to store the total price of all numbers

                foreach ($numberArray as $number) {
                    // Trim spaces from the number
                    $number = trim($number);
                    list($countryCode, $country) = getCountryCode($number);
                    // Fetch the price for the given number's country from the Country_Pricing_Tbl
                    $countryPricing = Capsule::table('Country_Pricing_Tbl')
                        ->where('dial_code', $countryCode)
                        ->first();

                    if ($countryPricing) {
                        $totalPrice += (float)$countryPricing->price;
                    } else {
                        echo "No pricing found for country code: $countryCode\n";
                    }
                }

                $updateStatus = Capsule::table('CronJob_For_Calling')
                    ->where('id', $campaign->id)
                    ->update(['total_price' => $totalPrice]);

                $apiUrl = 'https://pbx7.oceanpbx.club/apicall/index.php';
                $apiToken = 'c5b30b648a53d6e57dc4d857dad26189';
                $postData = [
                    "tocall" => $numberArray,
                    "language"=> $campaign->file_type,
                    "accent"=>$campaign->file_new_name, 
                    "message" => $campaign->audio_text, 
                    "campaignId"=>$campaign->calling_camp, 
                    "accountId"=>$campaign->client_id,
                    "agentNumber"=>$campaign->agent_number, 
                    "checkTypeCall"=>"realstatecall",
                    "maxretires" => "30"
                ];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $apiUrl);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    "token: $apiToken"
                ]);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                // Execute the API call
                $apiResponse = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if (curl_errno($ch)) {
                    $errorMsg = curl_error($ch);
                    curl_close($ch);
                    echo json_encode(['result' => 'error', 'message' => 'API call failed: ' . $errorMsg]);
                    exit;
                }
                curl_close($ch);

                if ($httpCode == 200) {
                    $clientId = $campaign->client_id;
                    $clientCustomFields = Capsule::table('tblcustomfieldsvalues')
                        ->where('relid', $clientId)
                        ->where('fieldid', 18)
                        ->first();
                    
                    $currentBalance = (float)$clientCustomFields->value;
                    $newBalance = $currentBalance - $totalPrice;
                    if ($newBalance <= 0) {
                        echo json_encode(['result' => 'error', 'message' => 'Insufficient balance']);
                        exit;
                    }

                    Capsule::table('tblcustomfieldsvalues')
                        ->where('relid', $clientId)
                        ->where('fieldid', 18)
                        ->update(['value' => $newBalance]);

                    Capsule::table('CronJob_For_Calling')
                    ->where('id', $campaign->id)
                    ->update(['camp_status' => 'complete']);

                    $responseData = [
                        'api_response' => json_decode($apiResponse, true)
                    ];
                    echo json_encode(['result' => 'success', 'data' => $responseData]);
                } else {
                    echo json_encode(['result' => 'error', 'message' => 'External API returned an error.', 'api_response' => $apiResponse]);
                }
            }else{
                Capsule::table('CronJob_For_Calling')
                ->where('id', $campaign->id)
                ->update(['camp_status' => 'running']);

                // Get the numbers from the LONGTEXT field
                $numbers = $campaign->data__of_numbers;
                $numberArray = array_map('trim', explode(',', $numbers));
                $totalPrice = 0; // Variable to store the total price of all numbers

                foreach ($numberArray as $number) {
                    // Trim spaces from the number
                    $number = trim($number);
                    list($countryCode, $country) = getCountryCode($number);
                    // Fetch the price for the given number's country from the Country_Pricing_Tbl
                    $countryPricing = Capsule::table('Country_Pricing_Tbl')
                        ->where('dial_code', $countryCode)
                        ->first();

                    if ($countryPricing) {
                        $totalPrice += (float)$countryPricing->price;
                    } else {
                        echo "No pricing found for country code: $countryCode\n";
                    }
                }

                $updateStatus = Capsule::table('CronJob_For_Calling')
                    ->where('id', $campaign->id)
                    ->update(['total_price' => $totalPrice]);

                // Prepare data for external API call
                $apiUrl = 'https://pbx7.oceanpbx.club/apicall/index.php';
                $apiToken = 'c5b30b648a53d6e57dc4d857dad26189';
                $postData = [];
                if($campaign->type_calling == 'audio'){
                    $postData = [
                        "tocall" => $numberArray,
                        "typeOfAudio" => "AUDIO_CALL_OCEANGROUP",
                        "language"=> "hi-IN",
                        "accent"=>"hi-IN-Neural2-B", 
                        "campaignId"=>$campaign->calling_camp, 
                        "accountId"=>$campaign->client_id,
                        "audioFilename" => $campaign->file_new_name, // You can include the file URL/path if needed by the API
                        "maxretires" => "30"
                    ];
                }else{
                    $postData = [
                        "tocall" => $numberArray,
                        "language"=> $campaign->file_type,
                        "accent"=>$campaign->file_new_name, 
                        "message" => $campaign->audio_text, // You can include the file URL/path if needed by the API
                        "campaignId"=>$campaign->calling_camp, 
                        "accountId"=>$campaign->client_id,
                        "maxretires" => "30"
                    ];
                }
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $apiUrl);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    "token: $apiToken"
                ]);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                // Execute the API call
                $apiResponse = curl_exec($ch);
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if (curl_errno($ch)) {
                    $errorMsg = curl_error($ch);
                    curl_close($ch);
                    echo json_encode(['result' => 'error', 'message' => 'API call failed: ' . $errorMsg]);
                    exit;
                }
                curl_close($ch);

                if ($httpCode == 200) {
                    $clientId = $campaign->client_id;
                    $clientCustomFields = Capsule::table('tblcustomfieldsvalues')
                        ->where('relid', $clientId)
                        ->where('fieldid', 14)
                        ->first();
                    
                    $currentBalance = (float)$clientCustomFields->value;
                    $newBalance = $currentBalance - $totalPrice;
                    if ($newBalance <= 0) {
                        echo json_encode(['result' => 'error', 'message' => 'Insufficient balance']);
                        exit;
                    }
                    // Update the wallet balance
                    Capsule::table('tblcustomfieldsvalues')
                        ->where('relid', $clientId)
                        ->where('fieldid', 14)
                        ->update(['value' => $newBalance]);

                    Capsule::table('CronJob_For_Calling')
                    ->where('id', $campaign->id)
                    ->update(['camp_status' => 'complete']);

                    $responseData = [
                        'file_name' => $newFileName,
                        'phone_number' => $phone_number,
                        'incoming_req_ip' => $clientIpAddress,
                        'api_response' => json_decode($apiResponse, true)
                    ];
                    echo json_encode(['result' => 'success', 'data' => $responseData]);
                } else {
                    echo json_encode(['result' => 'error', 'message' => 'External API returned an error.', 'api_response' => $apiResponse]);
                }
            } 
        }
        
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}

// Function to get the country code based on the phone number

function getCountryCode($number) {
    global $countryCodes; 
    // Remove spaces and '+' sign at the beginning
    $number = preg_replace('/\s/', '', $number);
    for ($length = 1; $length <= 4; $length++) {
        $code = substr($number, 0, $length); // Extract country code
        if (isset($countryCodes[$code])) {
            return [$code, $countryCodes[$code]]; // Return country code and country name
        }
    }
    return [null, null]; // No country code found
}
