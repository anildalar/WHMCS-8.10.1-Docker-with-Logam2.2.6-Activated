<?php

    use WHMCS\Database\Capsule;

    require_once __DIR__ . '/../../init.php';
    require_once __DIR__ . '/../../ratelimit.php';

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
    if ($action === 'CHECKIFCALLINITIATED') {// Client IP address
            
            $clientIpAddress = getClientIp();
           

            try {

                $response = ['result' => 'success',"data"=>$clientIpAddress];
                
                echo json_encode($response);
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => 'Error updating or creating custom field: ' . $e->getMessage()]);
            }
    } else {
        echo json_encode(['result' => 'error', 'message' => 'Invalid  action']);
    }
?>

