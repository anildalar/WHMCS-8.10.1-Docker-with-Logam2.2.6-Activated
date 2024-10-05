<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../../init.php';

// Get the API action
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action == 'CronInserDBData') {
    // Get parameters from the request
    $callingCamp = $_REQUEST['calling_camp'] ?? '';
    $dataOfNumbers = $_REQUEST['data__of_numbers'] ?? '';
    $audioText = '';
    $campStatus = $_REQUEST['camp_status'] ?? 'pending';

    // Handling file upload
    if (isset($_FILES['audio_text'])) {
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
            $audioText = "/whmcs/assets/webfonts/".$newFileName;  // Store the new file name in the database
        } else {
            echo json_encode([
                'result' => 'error',
                'message' => 'File upload failed.'
            ]);
            exit;
        }
    } else {
        echo json_encode([
            'result' => 'error',
            'message' => 'No file uploaded.'
        ]);
        exit;
    }

    try {
        // Validate the input data
        if (empty($callingCamp) || empty($dataOfNumbers)) {
            throw new Exception('Calling campaign and numbers are required.');
        }

        // Insert data into CronJob_For_Calling table
        Capsule::table('CronJob_For_Calling')->insert([
            'calling_camp' => $callingCamp,
            'data__of_numbers' => $dataOfNumbers,
            'audio_text' => $audioText,  // Store the uploaded file's name or path
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

} elseif ($action == 'CronGetDBData') {
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
} else {
    // Invalid API action
    echo json_encode([
        'result' => 'error',
        'message' => 'Invalid API Action'
    ]);
}

?>
