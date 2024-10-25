<?php

    use WHMCS\Database\Capsule;
    use WHMCS\ClientArea;

    require_once __DIR__ . '/../../init.php';

    // Get the API action
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
    $clientArea = new ClientArea();
    $clientID = $clientArea->getUserID();

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
    
    if ($action == 'CronInserDBData') {
        // Get parameters from the request 
        $callingCamp = $_REQUEST['calling_camp'] ?? '';
        $dataOfNumbers = $_REQUEST['data__of_numbers'] ?? '';
        $checkValue = $_REQUEST['check_value'] ?? '';
        $textArea = $_REQUEST['text_area'] ?? '';
        $langArea = $_REQUEST['lang_area'] ?? '';
        $accentArea = $_REQUEST['accent_area'] ?? '';
        $audioText = '';
        $fileTye = '';
        $FileNewName = '';
        $campStatus = $_REQUEST['camp_status'] ?? 'pending';

        $numbers = $dataOfNumbers;
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

        $clientCustomFields = Capsule::table('tblcustomfieldsvalues')
            ->where('relid', $clientID)
            ->where('fieldid', 14)
            ->first();
    
        $currentBalance = (float)$clientCustomFields->value;

        if ($currentBalance < $totalPrice) {
            echo json_encode([
                'result' => 'error', 
                'message' => "Our Balance is {$currentBalance} Insufficient balance. Total numbers charges is: {$totalPrice} "
            ]);
            exit;
        }

        if($checkValue == 'audio'){
            $audioFile = $_FILES['audio_text'];
            $fileName = $audioFile['name'];
            $fileTmpPath = $audioFile['tmp_name'];
            $fileType = $audioFile['type'];

            // Define the upload directory inside the WHMCS root
            $whmcsRoot = __DIR__ . '/../../'; 
            $uploadDir = $whmcsRoot . 'assets/webfonts/'; 
            // Check if the directory exists, if not, create it
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            // Rename the file with a timestamp to avoid conflicts
            $timestamp = time();
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFileName = "audio_{$timestamp}.$fileExtension";
            $destinationPath = $uploadDir . $newFileName;

            // Move the file to the upload directory
            if (move_uploaded_file($fileTmpPath, $destinationPath)) {
            
                $apiUrl = 'http://31.220.78.8:3000/upload';
                if ($fileTmpPath) {
                    $ch = curl_init();
                    // Prepare the file for upload
                    $fileData = [
                        'file' => new CURLFile($destinationPath,  $fileType, $newFileName)
                    ];
                    // Set cURL options
                    curl_setopt($ch, CURLOPT_URL, $apiUrl);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fileData);
                    // curl_setopt($ch, CURLOPT_TIMEOUT, 20);  // 120 seconds
                    // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
                    // Execute cURL request
                    $response = curl_exec($ch);
                    if (curl_errno($ch)) {
                        $errorMessage = curl_error($ch);
                        echo "cURL Error: $errorMessage\n";
                    }else{
                        $fileTye =  $fileType;
                        $FileNewName = $newFileName;
                        $audioText = $destinationPath;  
                        unlink($destinationPath);
                    }
                }else {
                    echo "File not found: $fileTmpPath\n";
                }

            } else {
                echo json_encode([
                    'result' => 'error',
                    'message' => 'File upload failed.'
                ]);
                exit;
            }
        }elseif ($checkValue == 'text'){
            $FileNewName = $accentArea;
            $fileTye =  $langArea;
            $audioText = $textArea;  

        }
        
        try {
            // Validate the input data
            if (empty($callingCamp) || empty($dataOfNumbers)) {
                throw new Exception('Calling campaign and numbers are required.');
            }
            // Insert data into CronJob_For_Calling table
            Capsule::table('CronJob_For_Calling')->insert([
                'calling_camp' => $callingCamp,
                'client_id' => $clientID,
                'type_calling' => $checkValue ,
                'data__of_numbers' => $dataOfNumbers,
                'audio_text' => $audioText,
                'file_type' => $fileTye, 
                'file_new_name' => $FileNewName,
                'camp_status' => $campStatus,
            ]);

            // Return success response
            echo json_encode([
                'result' => 'success',
                'message' => 'Data inserted successfully'
            ]);
        } catch (Exception $e) {
            // Return error response
            echo json_encode([
                'result' => 'error',
                'message' => 'Error inserting data: ' . $e->getMessage()
            ]);
        }

    }elseif ($action == 'InsetrRealEstate') {
        $blukNumber = $_REQUEST['bulkNumber'] ?? '';
        $agentNumber = $_REQUEST['agentNumber'] ?? '';
        $callingCamp = $_REQUEST['calling_camp'] ?? ''; 
        $langArea = $_REQUEST['lang_area'] ?? '';
        $accentArea = $_REQUEST['accent_area'] ?? '';
        $audioText =  $_REQUEST['inputTextArea'] ?? '';
        $fileTye = $langArea;
        $FileNewName = $accentArea;

        try {
            // Validate the input data
            if (empty($callingCamp) || empty($blukNumber)) {
                throw new Exception('Calling campaign and numbers are required.');
            }
            
            Capsule::table('CronJob_For_Calling')->insert([
                'calling_camp' => $callingCamp,
                'client_id' => $clientID,
                'type_calling' => 'text' ,
                'data__of_numbers' => $blukNumber,
                'agent_number' => $agentNumber,
                'audio_text' => $audioText,
                'file_type' => $fileTye, 
                'file_new_name' => $FileNewName,
                'camp_status' => 'pending',
                'check_type_cron' => 'realstatecall'
            ]);

            // Return success response
            echo json_encode([
                'result' => 'success',
                'message' => 'Data inserted successfully'
            ]);
        } catch (Exception $e) {
            // Return error response
            echo json_encode([
                'result' => 'error',
                'message' => 'Error inserting data: ' . $e->getMessage()
            ]);
        }

    }elseif ($action == 'CronGetDBData') {
        try {
            // Fetch all data from CronJob_For_Calling table
            $data = Capsule::table('CronJob_For_Calling')->get();
            // Return data
            echo json_encode([
                'result' => 'success',
                'data' => $data
            ]);
        } catch (Exception $e) {
            // Return error response
            echo json_encode([
                'result' => 'error',
                'message' => 'Error fetching data: ' . $e->getMessage()
            ]);
        }
    }else {
        // Invalid API action
        echo json_encode([
            'result' => 'error',
            'message' => 'Invalid API Action'
        ]);
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

?>
