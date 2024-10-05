<?php

use WHMCS\Database\Capsule;
use Countries\Countries;

require_once __DIR__ . '/../../init.php';
require_once __DIR__ . '/../../ratelimit.php';


$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


if ($action === 'CronCallingAction') {
            
try {
    $countries = new Countries();
    // Get country information by name
    $country = $countries->getByName($countryName);
    // Fetch all pending campaigns
    $pendingCampaigns = Capsule::table('CronJob_For_Calling')
        ->where('camp_status', 'pending')
        ->get();

    foreach ($pendingCampaigns as $campaign) {
        // Update the campaign status to 'running'
        Capsule::table('CronJob_For_Calling')
            ->where('id', $campaign->id)
            ->update(['camp_status' => 'running']);

        // Get the numbers from the LONGTEXT field
        $numbers = $campaign->data__of_numbers;

        // If the delimiter is different, change it accordingly
        $numberArray = array_map('trim', explode(',', $numbers));

        $totalPrice = 0; // Variable to store the total price of all numbers

        foreach ($numberArray as $number) {
            // Trim spaces from the number
                // Trim spaces from the number
            $number = trim($number);
            
            // Initialize the dial code variable
            $dialCode = '';
    
            // Use regular expression to extract dial code (e.g., +1, +44)
            if (preg_match('/^\(\d{1,4})/', $number, $matches)) {
                $dialCode = $matches[1]; // Capture the dial code
            }


            // Debugging output
            echo "Processing number: $number with dial code: $dialCode\n";
            // Fetch the price for the given dial code from the Country_Pricing_Tbl
            $countryPricing = Capsule::table('Country_Pricing_Tbl')
                ->where('dial_code', $dialCode)
                ->first();

            if ($countryPricing) {
                // Add the price to the totalPrice
                $totalPrice += (float)$countryPricing->price;
            } else {
                echo "No pricing found for dial code: $dialCode\n";
            }
        }

        // Print the total price for this campaign
        echo "Total price for campaign ID {$campaign->id}: $totalPrice\n";

        // Update the campaign record with the total price if necessary
        Capsule::table('CronJob_For_Calling')
            ->where('id', $campaign->id)
            ->update(['total_price' => $totalPrice]);

        echo json_encode(['result' => 'success', 'message' => "Processed campaign ID: $campaign->id"]);
    }

} catch (Exception $e) {
    // Log the error message
    echo "Error: " . $e->getMessage();
}
    
}else {
    // Invalid action
    echo json_encode(['result' => 'error', 'message' => 'Invalid API action']);
}

