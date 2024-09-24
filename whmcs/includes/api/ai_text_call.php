<?php

    use WHMCS\Database\Capsule;

    require_once __DIR__ . '/../../init.php';
    require_once __DIR__ . '/../../ratelimit.php';


    
    // Get API action  Invalid API action
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
    // Function to get client IP address
    function getClientIp() {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // Check if the X-Forwarded-For header exists, it may contain multiple IPs (client, proxy1, proxy2)
            $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            // The first IP in the list should be the client's public IP
            return trim($ipAddresses[0]);
        } elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) {
            // Check for X-Real-IP header, which also contains the client's real IP
            return $_SERVER['HTTP_X_REAL_IP'];
        } else {
            // Fallback to REMOTE_ADDR if no proxy-related headers are set
            return $_SERVER['REMOTE_ADDR'];
        }
    }
    if ($action === 'AITEXTTOCALL') {// Client IP address
            
            $clientIpAddress = getClientIp();
            // $text =  $_REQUEST['text'];
            // $phone_number = $_REQUEST['phone_number']; //lang //lang
            // $lang = $_REQUEST['lang'];
            // $accent = $_REQUEST['accent'];

            $responseData = [
                'text' => isset($_REQUEST['text']) ? $_REQUEST['text'] : '',
                'phone_number' => isset($_REQUEST['phone_number']) ? $_REQUEST['phone_number'] : '',
                'lang' => isset($_REQUEST['lang']) ? $_REQUEST['lang'] : '',
                'accent' => isset($_REQUEST['accent']) ? $_REQUEST['accent'] : '',
                'incoming_req_ip'=>$clientIpAddress
            ];
            try {
                

                $response = ['result' => 'success',"data"=>$responseData];
                
                echo json_encode($response);
            } catch (Exception $e) {
                echo json_encode(['result' => 'error', 'message' => 'Error updating or creating custom field: ' . $e->getMessage()]);
            }
    } else {
        echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
    }
?>

