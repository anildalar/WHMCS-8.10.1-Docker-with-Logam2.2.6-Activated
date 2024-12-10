<?php

    use WHMCS\Database\Capsule;

    require_once __DIR__ . '/../../init.php';

    // Authenticate API request
    if (!isset($_REQUEST['secret']) || $_REQUEST['secret'] !== 'XQDj9TAZ5zWokbHIW0wJyDg95jSDz16b') {
        echo json_encode(['result' => 'error', 'message' => 'Invalid API secret']);
        exit;
    }

    // Get API action  Invalid API action
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    if ($action === 'productCustomFieldUpdate') {
        $fieldId = $_REQUEST['fieldid'];
        $userId  = $_REQUEST['userid'];
        $packageId  = $_REQUEST['packageid'];
        $value = isset($_REQUEST['value']) ? $_REQUEST['value'] : '';

            try {
                $service = Capsule::table('tblhosting')
                    ->where('packageid', $packageId)
                    ->where('userid', $userId)
                    ->first();
    
                if (!$service) {
                    echo json_encode(['result' => 'error', 'message' => 'The specified service does not belong to the given user']);
                    exit;
                }
                $existing = Capsule::table('tblcustomfieldsvalues')
                    ->where('relid', $service->id)
                    ->where('fieldid', $fieldId)
                    ->first();

                if ($existing) {

                    $oldAmount = is_numeric($existing->value) ? (float)$existing->value : 0;
                    $totalAmount = $oldAmount - $value;
                    Capsule::table('tblcustomfieldsvalues')
                        ->where('id', $existing->id)
                        ->update(['value' => $totalAmount, 'updated_at' => Capsule::raw('NOW()')]);

                    $response = ['result' => 'success', 'message' => 'Product Custome field updated successfully','amount'=>$totalAmount];
                    echo json_encode($response);
                }else{
                    $response = ['result' => 'failed', 'message' => 'custome field not availble as you give the user id'];
                    echo json_encode($response);
                }
              
            } catch (Exception $e) {
                echo json_encode(['result' => 'error', 'message' => 'Error updating or creating custom field: ' . $e->getMessage()]);
            }
    } else {
        echo json_encode(['result' => 'error', 'message' => 'Invalid API action2']);
    }
?>

