<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';
require_once __DIR__ . '/../../ratelimit.php';

// Example country codes array
$countryCodes = [
    '1' => 'United States',
    '1' => 'Canada',
    '44' => 'United Kingdom',
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
    '41' => 'Switzerland',
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
    '64' => 'New Zealand',
    '963' => 'Syria',
    '90' => 'Turkey',
    '20' => 'Egypt',
    '27' => 'South Africa',
    '27' => 'South Africa',
    '30' => 'Greece',
    '41' => 'Switzerland',
    // Add more country codes as necessary
];

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action === 'CronCallingAction') {
    try {
        // Fetch all pending campaigns
        $pendingCampaigns = Capsule::table('CronJob_For_Calling')
            ->where('camp_status', 'pending')
            ->get();

        foreach ($pendingCampaigns as $campaign) {
            // Update the campaign status to 'running'
            Capsule::table('CronJob_For_Calling')
                ->where('id', $campaign->id)
                ->update(['camp_status' => 'running']);

            // Get the numbers from the LONGTEXT field
            $numbers = $campaign->data__of_numbers;

            // If the delimiter is different, change it accordingly
            $numberArray = array_map('trim', explode(',', $numbers));

            $totalPrice = 0; // Variable to store the total price of all numbers

            foreach ($numberArray as $number) {
                // Trim spaces from the number
                $number = trim($number);

                // Debugging output
                echo "Processing number: $number\n";

                // Get the country code and name using the getCountryCode function
                list($countryCode, $country) = getCountryCode($number);
                if ($countryCode) {
                    echo "  Found country code: $countryCode (Country: $country)\n";
                } else {
                    echo "  No country code found for number: $number\n";
                }

                // Fetch the price for the given number's country from the Country_Pricing_Tbl
                $countryPricing = Capsule::table('Country_Pricing_Tbl')
                    ->where('dial_code', $countryCode)
                    ->first();

                if ($countryPricing) {
                    // Add the price to the totalPrice
                    $totalPrice += (float)$countryPricing->price;
                } else {
                    echo "No pricing found for country code: $countryCode\n";
                }
            }

            // Print the total price for this campaign
            echo "Total price for campaign ID {$campaign->id}: $totalPrice\n";

            // Update the campaign record with the total price if necessary
            Capsule::table('CronJob_For_Calling')
                ->where('id', $campaign->id)
                ->update(['total_price' => $totalPrice]);

            echo json_encode(['result' => 'success', 'message' => "Processed campaign ID: $campaign->id"]);
        }
    } catch (Exception $e) {
        // Log the error message
        echo "Error: " . $e->getMessage();
    }
} else {
    // Invalid action
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}

// Function to get the country code based on the phone number
function getCountryCode($number) {
    global $countryCodes; // Access the global countryCodes array
    
    // Remove spaces and '+' sign at the beginning
    $number = preg_replace('/\s+/', '', $number);

    // Check 1-digit, 2-digit, 3-digit, and 4-digit country codes
    for ($length = 1; $length <= 4; $length++) {
        $code = substr($number, 0, $length); // Extract country code
        
        if (isset($countryCodes[$code])) {
            return [$code, $countryCodes[$code]]; // Return country code and country name
        }
    }
    return [null, null]; // No country code found
}
