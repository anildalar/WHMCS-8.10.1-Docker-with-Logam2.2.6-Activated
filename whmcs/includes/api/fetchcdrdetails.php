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

            // Step 1: Fetch all records for the provided accountcode
            $query = 'SELECT * FROM cdr WHERE accountcode = :accountcode ORDER BY sequence';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':accountcode', $accountcode, PDO::PARAM_STR);
            $stmt->execute();
    
            // Fetch all records
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // Initialize an array to hold responses
            $responseData = [];

            // Step 2: Loop through each record and fetch the next one
            foreach ($records as $record) {
                // Get the current sequence
                $currentSequence = (int) $record['sequence'];
                $nextSequence = $currentSequence + 1;

                // Fetch the next record using the next sequence number
                $nextQuery = 'SELECT * FROM cdr WHERE sequence = :nextSequence';
                $nextStmt = $pdo->prepare($nextQuery);
                $nextStmt->bindParam(':nextSequence', $nextSequence, PDO::PARAM_INT);
                $nextStmt->execute();
                
                // Fetch the next record
                $nextRecord = $nextStmt->fetch(PDO::FETCH_ASSOC);
                $responseData[] = $nextRecord;
            }

            // Return the collected data
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
