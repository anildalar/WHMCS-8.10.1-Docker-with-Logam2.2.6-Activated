<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';

// Set response type to JSON
header('Content-Type: application/json');

// Authenticate API request
$apiSecret = 'XQDj9TAZ5zWokbHIW0wJyDg95jSDz16b';

// Read raw JSON input
$jsonInput = file_get_contents("php://input");
$data = json_decode($jsonInput, true);

// Validate API secret
if (!isset($data['secret']) || $data['secret'] !== $apiSecret) {
    echo json_encode(['result' => 'error', 'message' => 'Invalid API secret']);
    exit;
}

// Get API action
$action = isset($data['action']) ? $data['action'] : '';

if ($action === 'UpdateCRMValues') {
    // Get parameters from JSON body
    $userId = $data['userId'] ?? null;
    $ipAdd = $data['ipAdd'] ?? null;
    $crmUrl = $data['crmUrl'] ?? null;
    $crmUser = $data['crmUser'] ?? null;
    $crmPass = $data['crmPass'] ?? null;
    $pmaUrl = $data['pmaUrl'] ?? null;
    $pmaUser = $data['pmaUser'] ?? null;
    $pmaPass = $data['pmaPass'] ?? null;

    // Validate required fields
    if (!$userId || !$ipAdd || !$crmUrl || !$crmUser || !$crmPass || !$pmaUrl || !$pmaUser || !$pmaPass) {
        echo json_encode(['result' => 'error', 'message' => 'Missing required parameters']);
        exit;
    }

    try {
        $service = Capsule::table('tblhosting')
            ->where('packageid', 16)
            ->where('userid', $userId)
            ->first();
    
        if (!$service) {
            echo json_encode([
                'result' => 'error',
                'message' => 'The specified service does not belong to the given user'
            ]);
            exit;
        }
    
        $fieldId = 30; // Static field ID
    
        // Check if an entry already exists
        $existingEntry = Capsule::table('tblcustomfieldsvalues')
            ->where('fieldid', $fieldId)
            ->where('relid', $service->id)
            ->first();
    
        $jsonData = json_encode([
            'ipAdd' => $ipAdd,
            'crmUrl' => $crmUrl,
            'crmUser' => $crmUser,
            'crmPass' => $crmPass,
            'pmaUrl' => $pmaUrl,
            'pmaUser' => $pmaUser,
            'pmaPass' => $pmaPass
        ], JSON_UNESCAPED_SLASHES);
    
        if ($existingEntry) {
            // Update existing entry
            Capsule::table('tblcustomfieldsvalues')
                ->where('fieldid', $fieldId)
                ->where('relid', $service->id)
                ->update(['value' => $jsonData]);
    
            $message = 'CRM values updated successfully';
        } else {
            // Insert new entry
            Capsule::table('tblcustomfieldsvalues')->insert([
                'fieldid' => $fieldId,
                'relid' => $service->id,
                'value' => $jsonData
            ]);
    
            $message = 'CRM values stored successfully';
        }
    
        // Success response
        echo json_encode([
            'result' => 'success',
            'message' => $message,
            'receivedData' => json_decode($jsonData, true)
        ]);
    } catch (\Exception $e) {
        // Error handling
        echo json_encode([
            'result' => 'error',
            'message' => 'Database error: ' . $e->getMessage()
        ]);
    }
    exit;

}

// Invalid action
echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
exit;
