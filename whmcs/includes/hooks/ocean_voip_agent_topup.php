<?php

use WHMCS\Database\Capsule;

add_hook('InvoicePaid', 1, function($vars) {
    // Get invoice ID
    $invoiceId = $vars['invoiceid'];
    // Fetch invoice details using WHMCS API
    $invoice = localAPI('GetInvoice', ['invoiceid' => $invoiceId]);
    
    foreach ($invoice['items']['item'] as $item) {
        // Check if the product matches "Ocean VoIP Agent Topup"
        if (stripos($item['description'], 'Ocean VoIP Agent Topup') !== false) {
            // Retrieve the amount paid
            $newAmount = $item['amount'];
            $userId = $invoice['userid'];
            
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
    }
});
