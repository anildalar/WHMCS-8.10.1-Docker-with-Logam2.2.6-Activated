<?php

use WHMCS\Database\Capsule;

add_hook('ClientAreaPageProductDetails', 1, function($vars) {
    $clientId = $vars['clientsdetails']['userid']; // Get the client ID from the current page variables
    $serviceId = $vars['serviceid']; // The service ID

    // Fetch the client's wallet balance (assuming fieldid 14 is for wallet balance)
    $clientCustomFields = Capsule::table('tblcustomfieldsvalues')
        ->where('relid', $clientId)
        ->where('fieldid', 14)
        ->first();

    $currentBalance = (float)$clientCustomFields->value;

    // Determine if the service should be marked as "suspended" based on balance
    $isSuspended = $currentBalance <= 0;

    // Pass the suspended status and current balance to the template
    return [
        'isSuspended' => $isSuspended,
        'currentBalance' => $currentBalance,
    ];
});
