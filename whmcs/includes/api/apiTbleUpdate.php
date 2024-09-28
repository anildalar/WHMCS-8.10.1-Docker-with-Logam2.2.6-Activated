<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';

// Get API action
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action == 'TableActionGet') {
    // Get parameters
    $IpAdd = $_REQUEST['ip'];

    try {
        // Check if the IP address exists in the BlacklistIp_tbl
        $existing = Capsule::table('BlacklistIp_tbl')
            ->where('ip', $IpAdd)
            ->first();

        if ($existing) {
            $response = ['result' => 'success', 'message' => 'IP exists', 'data' => $existing];
        } else {
            // If IP doesn't exist
            $response = ['result' => 'error', 'message' => 'IP not found'];
        }

        echo json_encode($response);
    } catch (Exception $e) {
        echo json_encode(['result' => 'error', 'message' => 'Error checking IP: ' . $e->getMessage()]);
    }
} elseif ($action == 'TableActionInsert') {
    // Action to insert IP address into the BlacklistIp_tbl

    // Get the IP address from the request
    $IpAdd = $_REQUEST['ip'];

    try {
        // Check if the IP already exists to prevent duplicates
        $existing = Capsule::table('BlacklistIp_tbl')
            ->where('ip', $IpAdd)
            ->first();

        if (!$existing) {
            // Insert the new IP address
            Capsule::table('BlacklistIp_tbl')->insert(['ip' => $IpAdd]);

            $response = ['result' => 'success', 'message' => 'IP added successfully'];
        } else {
            $response = ['result' => 'error', 'message' => 'IP already exists'];
        }

        echo json_encode($response);
    } catch (Exception $e) {
        echo json_encode(['result' => 'error', 'message' => 'Error inserting IP: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['result' => 'error', 'message' => 'Invalid API Action']);
}

?>
