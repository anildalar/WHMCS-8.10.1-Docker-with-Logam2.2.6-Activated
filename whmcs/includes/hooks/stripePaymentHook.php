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
        
        if (stripos($item['description'], 'Enterprise HostedPBX') !== false) {

            $invoiceData = Capsule::table('tblinvoices')->where('id', $invoiceId)->first();
            $userId = $invoiceData->userid;
            $invoiceId = $invoiceData->id;
            $pbxString = "pbx".$invoiceId;
        
            $clientData = Capsule::table('tblclients')
                ->where('id', $invoiceData->userid)
                ->first();
            $customFields = Capsule::table('tblcustomfieldsvalues')
                ->where('relid', $invoiceData->userid)
                ->get();
            $customHostingId = Capsule::table('tblhosting')
                ->where('orderid', $invoiceData->id)
                ->get();
            $customFieldValues = [];
            foreach ($customFields as $field) {
                $customFieldValues[$field->fieldid] = $field->value;
            }
            // Country code to timezone mapping
            $timezoneMapping = [
                'US' => 'America/New_York',               // United States
                'CA' => 'America/Toronto',               // Canada
                'GB' => 'Europe/London',                 // United Kingdom
                'AU' => 'Australia/Sydney',              // Australia
                'DE' => 'Europe/Berlin',                // Germany
                'FR' => 'Europe/Paris',                 // France
                'IN' => 'Asia/Kolkata',                 // India
                'CN' => 'Asia/Shanghai',                // China
                'JP' => 'Asia/Tokyo',                   // Japan
                'BR' => 'America/Sao_Paulo',            // Brazil
                'ZA' => 'Africa/Johannesburg',          // South Africa
                'MX' => 'America/Mexico_City',          // Mexico
                'IT' => 'Europe/Rome',                  // Italy
                'ES' => 'Europe/Madrid',                // Spain
                'RU' => 'Europe/Moscow',                // Russia
                'SA' => 'Asia/Riyadh',                  // Saudi Arabia
                'AE' => 'Asia/Dubai',                   // United Arab Emirates
                'AR' => 'America/Argentina/Buenos_Aires', // Argentina
                'NG' => 'Africa/Lagos',                 // Nigeria
                'KE' => 'Africa/Nairobi',               // Kenya
                'PH' => 'Asia/Manila',                  // Philippines
                'TH' => 'Asia/Bangkok',                 // Thailand
                'ID' => 'Asia/Jakarta',                 // Indonesia
                'MY' => 'Asia/Kuala_Lumpur',           // Malaysia
                'SG' => 'Asia/Singapore',               // Singapore
                'PK' => 'Asia/Karachi',                 // Pakistan
                'BD' => 'Asia/Dhaka',                   // Bangladesh
                'TW' => 'Asia/Taipei',                  // Taiwan
                'VN' => 'Asia/Ho_Chi_Minh',             // Vietnam
                'TR' => 'Europe/Istanbul',              // Turkey
                'EG' => 'Africa/Cairo',                 // Egypt
                'IL' => 'Asia/Jerusalem',              // Israel
                'QA' => 'Asia/Qatar',                   // Qatar
                'KW' => 'Asia/Kuwait',                  // Kuwait
                'OM' => 'Asia/Muscat',                  // Oman
                'JO' => 'Asia/Amman',                   // Jordan
                'LB' => 'Asia/Beirut',                  // Lebanon
                'SY' => 'Asia/Damascus',                // Syria
                'YE' => 'Asia/Aden',                    // Yemen
                'MA' => 'Africa/Casablanca',            // Morocco
                'DZ' => 'Africa/Algiers',               // Algeria
                'TN' => 'Africa/Tunis',                 // Tunisia
                'LI' => 'Europe/Vaduz',                 // Liechtenstein
                'MC' => 'Europe/Monaco',                // Monaco
                'SM' => 'Europe/San_Marino',            // San Marino
                'AD' => 'Europe/Andorra',               // Andorra
                'VA' => 'Europe/Vatican',               // Vatican City
                'IS' => 'Atlantic/Reykjavik',           // Iceland
                'MT' => 'Europe/Malta',                 // Malta
                'LU' => 'Europe/Luxembourg',            // Luxembourg
                'CY' => 'Asia/Nicosia',                 // Cyprus
                'MD' => 'Europe/Chisinau',              // Moldova
                'UA' => 'Europe/Kiev',                  // Ukraine
                'BY' => 'Europe/Minsk',                 // Belarus
                'AM' => 'Asia/Yerevan',                 // Armenia
                'GE' => 'Asia/Tbilisi',                 // Georgia
                'AZ' => 'Asia/Baku',                    // Azerbaijan
                'KZ' => 'Asia/Almaty',                  // Kazakhstan
                'UZ' => 'Asia/Tashkent',                // Uzbekistan
                'MN' => 'Asia/Ulaanbaatar',             // Mongolia
                'KP' => 'Asia/Pyongyang',               // North Korea
                'KR' => 'Asia/Seoul',                   // South Korea
                'BT' => 'Asia/Thimphu',                 // Bhutan
                'NP' => 'Asia/Kathmandu',               // Nepal
                'LK' => 'Asia/Colombo',                 // Sri Lanka
                'WS' => 'Pacific/Apia',                 // Samoa
                'FJ' => 'Pacific/Fiji',                 // Fiji
                'TO' => 'Pacific/Tongatapu',            // Tonga
                'VU' => 'Pacific/Efate',                // Vanuatu
                'NC' => 'Pacific/Noumea',               // New Caledonia
                'PF' => 'Pacific/Tahiti',               // French Polynesia
                'GU' => 'Pacific/Guam',                 // Guam
                'MP' => 'Pacific/Saipan',               // Northern Mariana Islands
                'AS' => 'Pacific/Pago_Pago',            // American Samoa
                'CK' => 'Pacific/Rarotonga',            // Cook Islands
                'PW' => 'Pacific/Palau',                // Palau
                'TV' => 'Pacific/Tarawa',               // Kiribati
                'MH' => 'Pacific/Majuro',               // Marshall Islands
                'SB' => 'Pacific/Guadalcanal',          // Solomon Islands
                'BT' => 'Asia/Thimphu',                 // Bhutan
                'TL' => 'Asia/Dili',                    // Timor-Leste
                'LC' => 'America/St_Lucia',             // Saint Lucia
                'DM' => 'America/Dominica',             // Dominica
                'GD' => 'America/Grenada',             // Grenada
                'KN' => 'America/St_Kitts',             // Saint Kitts and Nevis
                'MS' => 'America/Montserrat',           // Montserrat
                'VC' => 'America/St_Vincent',           // Saint Vincent and the Grenadines
                'WS' => 'Pacific/Apia',                 // Samoa
                'SX' => 'America/Curacao',              // Sint Maarten (Dutch part)
                'CW' => 'America/Curacao',              // Curaçao
                'BQ' => 'America/Kralendijk',           // Bonaire, Sint Eustatius and Saba
                'SX' => 'America/Curacao',              // Sint Maarten (Dutch part)
                'BL' => 'America/St_Barthelemy',        // Saint Barthélemy
                'MF' => 'America/Marigot',              // Saint Martin (French part)
                'RE' => 'Indian/Reunion',               // Réunion
                'YT' => 'Indian/Mayotte',               // Mayotte
                'ZW' => 'Africa/Harare',                // Zimbabwe
                'SD' => 'Africa/Khartoum',              // Sudan
                'CG' => 'Africa/Brazzaville',           // Congo
                'CD' => 'Africa/Kinshasa',             // Democratic Republic of the Congo
                'ET' => 'Africa/Addis_Ababa',           // Ethiopia
                'GH' => 'Africa/Accra',                 // Ghana
                'RW' => 'Africa/Kigali',                // Rwanda
                'UG' => 'Africa/Kampala',               // Uganda
                'SO' => 'Africa/Mogadishu',             // Somalia
                'SN' => 'Africa/Dakar',                 // Senegal
                'ML' => 'Africa/Bamako',                // Mali
                'NE' => 'Africa/Niamey',                // Niger
                'CI' => 'Africa/Abidjan',               // Ivory Coast
                'BJ' => 'Africa/Porto-Novo',            // Benin
                'TG' => 'Africa/Lome',                  // Togo
                'LR' => 'Africa/Monrovia',              // Liberia
                'SL' => 'Africa/Freetown',              // Sierra Leone
                'GQ' => 'Africa/Malabo',                // Equatorial Guinea
                'GA' => 'Africa/Libreville',            // Gabon
                'ST' => 'Africa/Sao_Tome',              // Sao Tome and Principe
            ];
        
            $timezone = isset($timezoneMapping[$clientData->country]) ? $timezoneMapping[$clientData->country] : 'UTC';
        
            if ($invoiceData && $invoiceData->paymentmethod == 'stripe') {
                // print($customHostingId[0]->id);
                $newSubDomainName = $pbxString; 
                $paymentIntent = $invoiceData->id; 
                $userInfo = Capsule::table('tblclients')->where('id', $invoiceData->userid)->first(); 
                $apiUrl = "https://jenkins.oceanpbx.club/job/PBXDeploye/buildWithParameters";
                $planValueSipUser = intval($invoiceData->total);
                $apiParams = http_build_query([
                    'pbxname' => $newSubDomainName,
                    'Environment' => "Production",
                    'plan_value_sipuser' =>$planValueSipUser,
                    'stripeId' => $paymentIntent,
                    'ClinetId' => $customHostingId[0]->id,
                    'country_code' => $clientData->country, 
                    'country_state' => "MP",//$clientData->state,
                    'ServerTypeProductId' => "V46",
                    'Provider' => "Contabo",
                    'TZ' => $timezone,//$userInfo->timezone, 
                ]);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $apiUrl . '?' . $apiParams);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode('admin:11545aa3dbd28e2db07bdb02a22fe15a55'), 
                ]);
                $response = curl_exec($ch);
                if (curl_errno($ch)) { 
                    $curlError = curl_error($ch);
                    echo $curlError;
                    logActivity("cURL error for Invoice ID #{$invoiceId}: {$curlError}");
                }
                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                logActivity("Jenkins API Response for Invoice ID #{$invoiceId}: HTTP Code - {$httpCode}, Response - {$response}");
                curl_close($ch);
                if ($httpCode == 201) {
                    logActivity("Jenkins Deployment Successful for Invoice ID #{$invoiceId}: Subdomain - {$newSubDomainName}");
                } else {
                    logActivity("Jenkins Deployment Failed for Invoice ID #{$invoiceId}: Response - {$response}");
                }
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
        if (stripos($item['description'], 'OceanCRM') !== false) {
            
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
                        'Authorization: Basic ' . base64_encode('ziyazaga:11426dc270af523df61ebd68ba689528ed'),
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
                        echo "Jenkins Deployment Failed:";
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

    }
});
