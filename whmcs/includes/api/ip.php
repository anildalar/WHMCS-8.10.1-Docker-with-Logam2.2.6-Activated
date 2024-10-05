<?php
// This script should be placed in the /includes/api/ folder of WHMCS
use WHMCS\Database\Capsule;
// Required file to include WHMCS environment
require_once(__DIR__ . '/../../init.php');
require_once(__DIR__ . '/../../includes/functions.php');
require_once(__DIR__ . '/../../includes/clientfunctions.php');

// Check for API credentials (optional based on your security requirements)
/* if (!isset($_GET['username']) || $_GET['username'] != 'admin' || !isset($_GET['password']) || $_GET['password'] != 'your-api-password') {
    die('Invalid API Credentials');
} */

// Get query parameters (action, IP)
$action = isset($_GET['action']) ? $_GET['action'] : '';
$ip = isset($_GET['ip']) ? $_GET['ip'] : '';

if (empty($action) || empty($ip)) {
    die(json_encode(['error' => 'Action and IP are required parameters.']));
}

if($action === 'whitelist'){
    try {
        // Check if the IP already exists in the table
        $existing = Capsule::table('BlacklistIp_tbl')
            ->where('ip', $ip)
            ->first();
    
        if ($existing) {
            // IP address already exists
            $response = ['result' => 'success', 'message' => 'IP is already whitelisted'];
            echo json_encode($response);
        } else {
            // Insert the new IP address into the table
            Capsule::table('BlacklistIp_tbl')->insert([
                'ip' => $ip,
                'is_ip_allowed' => 1   
            ]);
            $response = ['result' => 'success', 'message' => 'IP whitelisted successfully'];
            echo json_encode($response);
        }
    } catch (Exception $e) {
        echo json_encode(['result' => 'error', 'message' => 'Error whitelist IP: ' . $e->getMessage()]);
    }
}elseif ($action === 'blacklist'){
    try {
        // Check if the IP already exists in the blacklist (is_ip_allowed = 0)
        $existing = Capsule::table('BlacklistIp_tbl')
            ->where('ip', $ip)
            ->where('is_ip_allowed', 0)
            ->first();
    
        if (!$existing) {
            // Insert or update the IP address as blacklisted (is_ip_allowed = 0)
            Capsule::table('BlacklistIp_tbl')->updateOrInsert(
                ['ip' => $ip], 
                ['is_ip_allowed' => 0]
            );
    
            $response = ['result' => 'success', 'message' => 'IP blacklisted successfully'];
        } else {
            $response = ['result' => 'success', 'message' => 'IP is already blacklisted'];
        }
    
        echo json_encode($response);
    } catch (Exception $e) {
        echo json_encode(['result' => 'error', 'message' => 'Error blacklisting IP: ' . $e->getMessage()]);
    }
}



