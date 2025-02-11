<?php

use WHMCS\Database\Capsule;

add_hook('ClientAreaPageProductDetails', 1, function($vars) {
    $userId = $vars['clientsdetails']['userid']; // Get Client I

    $service = Capsule::table('tblhosting')
                ->where('packageid', '16')
                ->where('userid', $userId)
                ->first();

    if (!$service) {
        return [
            'crm_instances' => json_encode(['status' => 'none'])
        ];
    }

    $crmData = Capsule::table('tblcustomfieldsvalues')
        ->where('fieldid', '30')
        ->where('relid', $service->id)
        ->value('value');
    
    if (is_null($crmData) || $crmData === '') {
        return [
            'crm_instances' => json_encode(['status' => 'none'])
        ];
    }

    $decodedCrmData = json_decode($crmData, true);

    // If decoding fails, assume it's a raw string and send as-is
    if (json_last_error() !== JSON_ERROR_NONE || !is_array($decodedCrmData)) {
        $decodedCrmData = $crmData;
    }

    if (empty($decodedCrmData)) {
        return [
            'crm_instances' => json_encode(['status' => 'none'])
        ];
    }
    
    
    // Return as JSON-encoded data
    return [
        'crm_instances' => json_encode($decodedCrmData)
    ];
});
