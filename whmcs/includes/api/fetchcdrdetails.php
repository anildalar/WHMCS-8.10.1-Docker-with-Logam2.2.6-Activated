<?php

use WHMCS\Database\Capsule;
use WHMCS\ClientArea;

require_once __DIR__ . '/../../init.php';

// Get the API action
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
$clientArea = new ClientArea();
$clientID = $clientArea->getUserID();

if ($action == 'GetCDRDetails') {
    try {
        // Connect to the database
        $pdo = new PDO('mysql:host=31.220.78.8;dbname=asteriskcdrdb', 'root', 'PleaseCHANGEM3');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Check if accountcode parameter is provided in the request
        if (isset($_REQUEST['accountcode'])) {
            $accountcode = $_REQUEST['accountcode'] ?? '';

            $voipAccountCode = $accountcode + 1; // Account code for VoIP agent
            $aiAccountCode = $accountcode + 2; 

            $responseData = [
                'voipAgent' => [],
                'aiRealEstate' => []
            ];
            // Step 1: Fetch all records for the provided accountcode
            $query = 'SELECT * FROM cdr WHERE accountcode = :accountcode ORDER BY sequence';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':accountcode', $voipAccountCode, PDO::PARAM_STR);
            $stmt->execute();
    
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($records as $record) {
                // Get the current sequence
                $currentSequence = (int) $record['sequence'];
                $nextSequence = $currentSequence + 1;

                $nextQuery = 'SELECT * FROM cdr WHERE sequence = :nextSequence';
                $nextStmt = $pdo->prepare($nextQuery);
                $nextStmt->bindParam(':nextSequence', $nextSequence, PDO::PARAM_INT);
                $nextStmt->execute();
                
                // Fetch the next record
                $nextRecord = $nextStmt->fetch(PDO::FETCH_ASSOC);
                $responseData['voipAgent'][] = $nextRecord; // Add to VoIP agent response
               
            }
             // Fetch records for AI real estate
            $aiQuery = 'SELECT * FROM cdr WHERE accountcode = :accountcode ORDER BY sequence';
            $aiStmt = $pdo->prepare($aiQuery);
            $aiStmt->bindParam(':accountcode', $aiAccountCode, PDO::PARAM_STR);
            $aiStmt->execute();

            // Fetch all records for AI real estate
            $aiRecords = $aiStmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Step 2: Add AI records to the responseData
            foreach ($aiRecords as $record) {
                // Fetch the next record based on the current sequence
                $currentSequence = (int) $record['sequence'];
                $nextSequence = $currentSequence + 1;

                $nextQuery = 'SELECT * FROM cdr WHERE sequence = :nextSequence';
                $nextStmt = $pdo->prepare($nextQuery);
                $nextStmt->bindParam(':nextSequence', $nextSequence, PDO::PARAM_INT);
                $nextStmt->execute();

                // Fetch the next record
                $nextRecord = $nextStmt->fetch(PDO::FETCH_ASSOC);
                $responseData['aiRealEstate'][] = $nextRecord; // Add to AI real estate response
               
            }

            echo json_encode([
                "status" => "success",
                "data" => $responseData
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Accountcode parameter is missing."
            ]);
        }
    } catch (PDOException $e) {
        echo json_encode([
            "status" => "error",
            "message" => "Database connection failed: " . $e->getMessage()
        ]);
    }
} else {
    // Invalid API action
    echo json_encode([
        'result' => 'error',
        'message' => 'Invalid API Action'
    ]);
}

?>
