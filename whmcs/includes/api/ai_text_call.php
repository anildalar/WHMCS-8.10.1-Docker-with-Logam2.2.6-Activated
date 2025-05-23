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
        
        // Send the success response
        echo json_encode(['result' => 'success', 'data' => $responseData]);
    } else {
        // Handle the failure case for the external API
        echo json_encode(['result' => 'error', 'message' => 'External API returned an error.', 'api_response' => $apiResponse]);
    }
} else {
    // Invalid action
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}
