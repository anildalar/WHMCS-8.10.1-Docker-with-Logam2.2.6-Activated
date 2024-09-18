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

    if ($action === 'updateCustomField') {
        // Get parameters
        $orderId = isset($_REQUEST['orderid']) ? intval($_REQUEST['orderid']) : 0;
        $customFieldId = isset($_REQUEST['customfieldid']) ? intval($_REQUEST['customfieldid']) : 0;
        $value = isset($_REQUEST['value']) ? $_REQUEST['value'] : '';

        if ($orderId > 0 && $customFieldId > 0 && $value !== '') {
            try {
                // Check if the custom field value exists
                $existing = Capsule::table('tblcustomfieldsvalues')
                    ->where('relid', $orderId)
                    ->where('fieldid', $customFieldId)
                    ->first();

                if ($existing) {
                    // Update the existing entry
                    Capsule::table('tblcustomfieldsvalues')
                        ->where('id', $existing->id)
                        ->update(['value' => $value, 'updated_at' => Capsule::raw('NOW()')]);

                    $response = ['result' => 'success', 'message' => 'Custom field updated successfully'];
                } else {
                    // Insert a new entry
                    Capsule::table('tblcustomfieldsvalues')
                        ->insert([
                            'fieldid' => $customFieldId,
                            'value' => $value,
                            'relid' => $orderId,
                            'created_at' => Capsule::raw('NOW()'),
                            'updated_at' => Capsule::raw('NOW()')
                        ]);

                    $response = ['result' => 'success', 'message' => 'Custom field created successfully'];
                }

                echo json_encode($response);
            } catch (Exception $e) {
                echo json_encode(['result' => 'error', 'message' => 'Error updating or creating custom field: ' . $e->getMessage()]);
            }
        } else {
            echo json_encode(['result' => 'error', 'message' => 'Invalid parameters']);
        }
    } else {
        echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
    }
?>

