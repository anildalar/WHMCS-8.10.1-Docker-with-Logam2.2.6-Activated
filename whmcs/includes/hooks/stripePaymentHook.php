<?php

use WHMCS\Database\Capsule;

/**
 * Hook to handle successful invoice payment.
 */
add_hook('InvoicePaid', 1, function($vars) {
    
    
    // Get the invoice details
    $invoiceId = $vars['invoiceid'];
    
    // Retrieve the payment method for the invoice
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
        print("Pyment Successfull");

        // print($customHostingId[0]->id);
        // $newSubDomainName = $pbxString; // Replace with logic to generate subdomain
        // $paymentIntent = $invoiceData->id; // Example, you might have another field for Stripe payment intent
        // $userInfo = Capsule::table('tblclients')->where('id', $invoiceData->userid)->first(); // Get user info from WHMCS
        // $jenkinsUrl = "https://jenkins.oceanpbx.club";
        // $apiUrl = "{$jenkinsUrl}/job/PBXDeploye/buildWithParameters";
        // $planValueSipUser = intval($invoiceData->total);
        // $apiParams = http_build_query([
        //     'pbxname' => $newSubDomainName,
        //     'Environment' => "Production",
        //     'plan_value_sipuser' =>$planValueSipUser,
        //     'stripeId' => $paymentIntent,
        //     'ClinetId' => $customHostingId[0]->id,
        //     'country_code' => $clientData->country, // Adjust according to your database schema
        //     'country_state' => "MP",//$clientData->state,
        //     'TZ' => $timezone,//$userInfo->timezone,           // Adjust according to your database schema
        // ]);
        // echo $apiParams;
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $apiUrl . '?' . $apiParams);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //     'Content-Type: application/json',
        //     'Authorization: Basic ' . base64_encode('admin:11545aa3dbd28e2db07bdb02a22fe15a55'), // Jenkins authentication (replace with your credentials)
        // ]);
        // $response = curl_exec($ch);
        // echo $response;
        // if (curl_errno($ch)) { 
        //     $curlError = curl_error($ch);
        //     echo $curlError;
        //     logActivity("cURL error for Invoice ID #{$invoiceId}: {$curlError}");
        // }
        // $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // logActivity("Jenkins API Response for Invoice ID #{$invoiceId}: HTTP Code - {$httpCode}, Response - {$response}");
        // curl_close($ch);
        // if ($httpCode == 201) {
        //     logActivity("Jenkins Deployment Successful for Invoice ID #{$invoiceId}: Subdomain - {$newSubDomainName}");
        // } else {
        //     logActivity("Jenkins Deployment Failed for Invoice ID #{$invoiceId}: Response - {$response}");
        // }
    }
});
