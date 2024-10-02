<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';
require_once __DIR__ . '/../../ratelimit.php';

// Get API action
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

// Function to get client IP address
function getClientIp() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipAddresses[0]);
    } elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
        return $_SERVER['HTTP_X_REAL_IP'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

if ($action === 'AITEXTTOCALL') {
    // Get client IP address
    $clientIpAddress = getClientIp();
    
    // Capture the required fields from the request
    $text = isset($_REQUEST['text']) ? $_REQUEST['text'] : '';
    $phone_number = isset($_REQUEST['phone_number']) ? $_REQUEST['phone_number'] : '';
    $lang = isset($_REQUEST['lang']) ? $_REQUEST['lang'] : '';
    $accent = isset($_REQUEST['accent']) ? $_REQUEST['accent'] : '';

    // Prepare the external API call data
    $apiUrl = 'https://pbx7.oceanpbx.club/apicall/index.php';
    $apiToken = 'c5b30b648a53d6e57dc4d857dad26189';
    $postData = [
        "tocall" => $phone_number,
        "language" => $lang,
        "accent" => $accent,
        "message" => $text,
        "maxretires" => "30",
        "callerid" => "898989898"
    ];

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
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
    
    // Check for errors in the API call
    if (curl_errno($ch)) {
        $errorMsg = curl_error($ch);
        curl_close($ch);
        echo json_encode(['result' => 'error', 'message' => 'API call failed: ' . $errorMsg]);
        exit;
    }
    
    // Close the cURL session
    curl_close($ch);
    
    // Check the HTTP response code
    if ($httpCode == 200) {
        // Prepare the response for the client
        $responseData = [
            'text' => $text,
            'phone_number' => $phone_number,
            'lang' => $lang,
            'accent' => $accent,
            'incoming_req_ip' => $clientIpAddress,
            'api_response' => json_decode($apiResponse, true)
        ];
        
        // Send the success response accent
        echo json_encode(['result' => 'success', 'data' => $responseData]);
    } else {
        // Handle the failure case for the external API
        echo json_encode(['result' => 'error', 'message' => 'External API returned an error.', 'api_response' => $apiResponse]);
    }
}else if  ($action === 'AIAUDIOCALL'){
    // Get client IP address
    $clientIpAddress = getClientIp();

    // Check if the file is uploaded
    if (isset($_FILES['audio_file'])) {
        $audioFile = $_FILES['audio_file'];
        $phone_number = isset($_REQUEST['phone_number']) ? $_REQUEST['phone_number'] : '';

        // Get the file properties
        $fileName = $audioFile['name'];
        $fileTmpPath = $audioFile['tmp_name'];
        $fileType = $audioFile['type'];


        // Example: Send uploaded file to a remote server via SCP

        // $remoteServerUser = 'admin'; // Remote server username
        // $remoteServerHost = '31.220.78.8'; // Remote server hostname or IP
        // $remoteServerPath = '/path/to/destination/folder/'; // Destination path on the remote server

        // $localFilePath = $audioFile['tmp_name']; // Temporary local path of the uploaded file
        // $destinationFileName = basename($fileName); // File name

        // // Command to send the file via SCP
        // $scpCommand = "scp $localFilePath $remoteServerUser@$remoteServerHost:$remoteServerPath$destinationFileName";


        // $scpResult = shell_exec($scpCommand);

        // if ($scpResult === null) {
        if (true) {

            // Prepare data for external API call
            $apiUrl = 'https://pbx7.oceanpbx.club/apicall/index.php';
            $apiToken = 'c5b30b648a53d6e57dc4d857dad26189';
            $postData = [
                "tocall" => $phone_number,
                "message" => "AUDIO_CALL_OCEANGROUP", // Placeholder message for the audio call
                "accent" => "custome", // You can include the file URL/path if needed by the API
                "maxretires" => "30",
                "callerid" => "898989898"
            ];

            // Initialize cURL session
            $ch = curl_init();

            // Set cURL options
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
            
            // Check for errors in the API call
            if (curl_errno($ch)) {
                $errorMsg = curl_error($ch);
                curl_close($ch);
                echo json_encode(['result' => 'error', 'message' => 'API call failed: ' . $errorMsg]);
                exit;
            }
            
            // Close the cURL session
            curl_close($ch);
            
            // Check the HTTP response code
            if ($httpCode == 200) {
                // Prepare the response for the client
                $responseData = [
                    'file_name' => $fileName,
                    'phone_number' => $phone_number,
                    'incoming_req_ip' => $clientIpAddress,
                    'api_response' => json_decode($apiResponse, true)
                ];
                echo json_encode(['result' => 'success', 'data' => $responseData]);
            } else {
                // Handle the failure case for the external API
                echo json_encode(['result' => 'error', 'message' => 'External API returned an error.', 'api_response' => $apiResponse]);
            }

        } else {
            echo json_encode(['result' => 'error', 'message' => 'Failed to transfer the audio file via SCP.']);
        }
    } else {
        echo json_encode(['result' => 'error', 'message' => 'No file uploaded or file upload error.']);
    }
} else {
    // Invalid action
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}
