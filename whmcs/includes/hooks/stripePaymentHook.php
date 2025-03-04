<?php

use WHMCS\Database\Capsule;

/**
 * Hook to handle successful invoice payment.
 * Hook to handle successful invoice payment.
 */

add_hook('InvoicePaid', 1, function($vars) {
    
    $invoiceId = $vars['invoiceid'];
    $invoiceCheckName = localAPI('GetInvoice', ['invoiceid' => $invoiceId]);
    foreach ($invoiceCheckName['items']['item'] as $item) {

        if (stripos($item['description'], 'HostedPBX+CRM(with Dialer)') !== false) {
            
            $invoice = Capsule::table('tblinvoices')->where('id', $invoiceId)->first();
            $userId = $invoice->userid;
            $newAmount = $item['amount'];
            $fieldId = 108;
            $packageId = 16;

            $service = Capsule::table('tblhosting')
                ->where('packageid', $packageId)
                ->where('userid', $userId)
                ->first();

            if (!$service) {
                echo json_encode(['result' => 'error', 'message' => 'The specified service does not belong to the given user']);
                exit;
            }
            $existingRecord = Capsule::table('tblcustomfieldsvalues')
                ->where('fieldid', $fieldId)
                ->where('relid', $service->id)
                ->first();
            if ($existingRecord) {
                $oldAmount = is_numeric($existingRecord->value) ? (float)$existingRecord->value : 0;
                $totalAmount = $oldAmount + $newAmount;
                Capsule::table('tblcustomfieldsvalues')
                    ->where('fieldid', $fieldId)
                    ->where('relid', $service->id)
                    ->update(['value' => $totalAmount]);

            } else {
                Capsule::table('tblcustomfieldsvalues')
                    ->insert([
                        'fieldid' => $fieldId,
                        'relid' => $service->id,
                        'value' => $newAmount
                    ]);

            
                $customField = Capsule::table('tblcustomfields')
                    ->where('fieldname', 'OceanCRMUrl')
                    ->where('type', 'client')
                    ->first();
        
                if($customField) {
                    preg_match('/crm(\d+)/', $customField->description, $matches);
                    $lastCRMNumber = isset($matches[1]) ? (int)$matches[1] : 0;
                    $newCRMNumber = $lastCRMNumber + 1;
                    $newCRMValue = "crm{$newCRMNumber}";

                    Capsule::table('tblcustomfields')
                        ->where('fieldname', 'OceanCRMUrl')
                        ->update(['description' => $newCRMValue]);


                    // Define dynamic variables
                    $jenkinsUrl = "https://new-jenkins.oceanpbx.club/job/OceanCRM/buildWithParameters";
                    $workerName = "worker-node-crm-{$newCRMNumber}";  // Change dynamically as needed
                    $websiteUrl = "{$newCRMValue}.oceanpbx.club";  // Change dynamically as needed
                    $pmaUrl = "pma.{$newCRMValue}.oceanpbx.club";  // Change dynamically as needed

                    // Construct full URL with parameters
                    $apiUrl = "{$jenkinsUrl}?WORKER_NAME={$workerName}&WEBSITE_URL={$websiteUrl}&PMA_URL={$pmaUrl}&USER_ID={$userId}";

                    // Initialize cURL
                    $ch = curl_init();

                    // Set cURL options
                    curl_setopt($ch, CURLOPT_URL, $apiUrl);
                    curl_setopt($ch, CURLOPT_POST, 1); // POST request
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response
                    curl_setopt($ch, CURLOPT_HTTPHEADER, [
                        'Content-Type: application/json',
                        'Authorization: Basic ' . base64_encode('ziya:110595d18e5f69ce87b927a358f4f11706'),
                    ]);

                    $response = curl_exec($ch);

                    // Handle errors
                    if (curl_errno($ch)) { 
                        $curlError = curl_error($ch);
                        echo $curlError;
                        logActivity("cURL error for Jenkins API: {$curlError}");
                    }

                    // Get the HTTP response code
                    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    logActivity("Jenkins API Response: HTTP Code - {$httpCode}, Response - {$response}");

                    curl_close($ch);

                    // Check the HTTP response code
                    if ($httpCode == 201) {
                        logActivity("Jenkins Deployment Successful.");
                    } else {
                        echo "Jenkins Deployment Failed:{$response}";
                        logActivity("Jenkins Deployment Failed: Response - {$response}");
                    }
                    
                }
                    
            }
            $hostingRecords = Capsule::table('tblhosting')
                ->where('userid', $userId)
                ->where('packageid', $packageId)
                ->orderBy('id', 'asc')
                ->get();

            if ($hostingRecords->count() > 1) {
                $firstRecord = $hostingRecords->shift();
                $idsToDelete = $hostingRecords->pluck('id')->toArray();
                Capsule::table('tblhosting')
                    ->whereIn('id', $idsToDelete)
                    ->delete();
                logActivity("Deleted extra hosting records for User ID: $userId with packageid 8. Kept record ID: {$firstRecord->id}");
            }

        }
        if (stripos($item['description'], 'Ocean VoIP Agent Topup') !== false) {
            // Retrieve the amount paid
            $newAmount = $item['amount'];
            $userId = $invoiceCheckName['userid'];
            
            // Update the custom field value
            $fieldId = 14; // Replace with your actual custom field ID

            // Check if a record exists for this user and custom field
            $existingRecord = Capsule::table('tblcustomfieldsvalues')
                ->where('fieldid', $fieldId)
                ->where('relid', $userId)
                ->first();

            if ($existingRecord) {
                // Parse the old value as a float (default to 0 if not a valid number)
                $oldAmount = is_numeric($existingRecord->value) ? (float)$existingRecord->value : 0;
                
                // Calculate the new total
                $totalAmount = $oldAmount + $newAmount;

                // Update the custom field with the new total amount
                Capsule::table('tblcustomfieldsvalues')
                    ->where('fieldid', $fieldId)
                    ->where('relid', $userId)
                    ->update(['value' => $totalAmount]);

                // Log the update action
                logActivity("Updated Custom Field (ID: $fieldId) for User ID: $userId with new total amount: $totalAmount");
            } else {
                // No existing record, insert the new amount
                Capsule::table('tblcustomfieldsvalues')
                    ->insert([
                        'fieldid' => $fieldId,
                        'relid' => $userId,
                        'value' => $newAmount
                    ]);
                logActivity("Inserted Custom Field (ID: $fieldId) for User ID: $userId with initial amount: $newAmount");
            }
            $hostingRecords = Capsule::table('tblhosting')
                ->where('userid', $userId)
                ->where('packageid', 8)
                ->orderBy('id', 'asc')
                ->get();

            if ($hostingRecords->count() > 1) {
                // Keep the first record, delete the others
                $firstRecord = $hostingRecords->shift(); // Keep this one
                $idsToDelete = $hostingRecords->pluck('id')->toArray();
                Capsule::table('tblhosting')
                    ->whereIn('id', $idsToDelete)
                    ->delete();
                logActivity("Deleted extra hosting records for User ID: $userId with packageid 8. Kept record ID: {$firstRecord->id}");
            }
        }
        if (stripos($item['description'], 'AI Assistant for Real Estate Agent/Broker') !== false) {
            // Retrieve the amount paid
            $newAmount = $item['amount'];
            $userId = $invoiceCheckName['userid'];
            $fieldId = 18; 
            $existingRecord = Capsule::table('tblcustomfieldsvalues')
                ->where('fieldid', $fieldId)
                ->where('relid', $userId)
                ->first();

            if ($existingRecord) {
                // Parse the old value as a float (default to 0 if not a valid number)
                $oldAmount = is_numeric($existingRecord->value) ? (float)$existingRecord->value : 0;
                
                // Calculate the new total
                $totalAmount = $oldAmount + $newAmount;

                // Update the custom field with the new total amount
                Capsule::table('tblcustomfieldsvalues')
                    ->where('fieldid', $fieldId)
                    ->where('relid', $userId)
                    ->update(['value' => $totalAmount]);

                // Log the update action
                logActivity("Updated Custom Field (ID: $fieldId) for User ID: $userId with new total amount: $totalAmount");
            } else {
                // No existing record, insert the new amount
                Capsule::table('tblcustomfieldsvalues')
                    ->insert([
                        'fieldid' => $fieldId,
                        'relid' => $userId,
                        'value' => $newAmount
                    ]);
                logActivity("Inserted Custom Field (ID: $fieldId) for User ID: $userId with initial amount: $newAmount");
            }
            $hostingRecords = Capsule::table('tblhosting')
                ->where('userid', $userId)
                ->where('packageid', 9)
                ->orderBy('id', 'asc')
                ->get();

            if ($hostingRecords->count() > 1) {
                // Keep the first record, delete the others
                $firstRecord = $hostingRecords->shift(); // Keep this one
                $idsToDelete = $hostingRecords->pluck('id')->toArray();
                Capsule::table('tblhosting')
                    ->whereIn('id', $idsToDelete)
                    ->delete();
                logActivity("Deleted extra hosting records for User ID: $userId with packageid 8. Kept record ID: {$firstRecord->id}");
            }
        }
        if (stripos($item['description'], 'PerfexCRM CTI Module') !== false) {
            $invoice = Capsule::table('tblinvoices')->where('id', $invoiceId)->first();
            $userId = $invoice->userid;

            $newAmount = $item['amount'];
            $fieldId = 20;
            $packageId = 10;

            $service = Capsule::table('tblhosting')
                ->where('packageid', $packageId)
                ->where('userid', $userId)
                ->first();

            if (!$service) {
                echo json_encode(['result' => 'error', 'message' => 'The specified service does not belong to the given user']);
                exit;
            }

            $existingRecord = Capsule::table('tblcustomfieldsvalues')
                ->where('fieldid', $fieldId)
                ->where('relid', $service->id)
                ->first();
            if ($existingRecord) {
                $oldAmount = is_numeric($existingRecord->value) ? (float)$existingRecord->value : 0;
                $totalAmount = $oldAmount + $newAmount;
                Capsule::table('tblcustomfieldsvalues')
                    ->where('fieldid', $fieldId)
                    ->where('relid', $service->id)
                    ->update(['value' => $totalAmount]);
            } else {
                Capsule::table('tblcustomfieldsvalues')
                    ->insert([
                        'fieldid' => $fieldId,
                        'relid' => $service->id,
                        'value' => $newAmount
                    ]);
            }
            $hostingRecords = Capsule::table('tblhosting')
                ->where('userid', $userId)
                ->where('packageid', 10)
                ->orderBy('id', 'asc')
                ->get();

            if ($hostingRecords->count() > 1) {
                $firstRecord = $hostingRecords->shift();
                $idsToDelete = $hostingRecords->pluck('id')->toArray();
                Capsule::table('tblhosting')
                    ->whereIn('id', $idsToDelete)
                    ->delete();
                logActivity("Deleted extra hosting records for User ID: $userId with packageid 8. Kept record ID: {$firstRecord->id}");
            }
        }
    }
});
