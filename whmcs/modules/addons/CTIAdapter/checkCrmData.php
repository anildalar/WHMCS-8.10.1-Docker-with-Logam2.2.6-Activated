<?php
    // Include necessary files (e.g., database connection, Carbon, etc.)
    use WHMCS\Database\Capsule;
    use Carbon\Carbon;
    require_once __DIR__ . '/../../../init.php';

    // Ensure this script is only called via POST

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the phone number from the POST data
        //        // Get the phone number from the POST data
        // Get the phone number 
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        if (!empty($phone)) { 
            // Call the function to check and store the record
            $result = checkAndStoreCRMResource($phone);
            echo json_encode($result);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid phone number']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    }


    function checkAndStoreCRMResource($phone) {
        $existingRecord = Capsule::table('crm_resources')
            ->where('phone', $phone)
            ->first();

        if (!$existingRecord) {
            // Record does not exist, so insert a new record
            $newId = Capsule::table('crm_resources')->insertGetId([
                'name' => 'Unknown',
                'phone' => $phone,
                'status_id' => 1, 
                'priority' => 1, 
                'type_id' => 1, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            return [
                'status' => 'success',
                'message' => 'Record created',
                'id' => $newId
            ];
        } else {
            return [
                'status' => 'exists',
                'message' => 'Record already exists',
                'id' => $existingRecord->id,
                'fname'=>$existingRecord->name,
                'lname'=>$existingRecord->lastname,
            ];
        }
    }

?>

