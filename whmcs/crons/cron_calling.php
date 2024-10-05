<?php

use WHMCS\Database\Capsule;

require_once __DIR__ . '/../init.php'; // Path to initialize WHMCS environment

try {
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

        // Split the numbers (assuming they are comma-separated)
        // If the delimiter is different, change it accordingly
        $numberArray = array_map('trim', explode(',', $numbers));

        $totalPrice = 0; // Variable to store the total price of all numbers

        // Loop through each number to match with the country pricing table
        foreach ($numberArray as $number) {
            // Trim spaces from the number
            $number = trim($number);

            // Extract dial code (adjust based on your number format)
            // Assuming the first few digits are the dial code
            $dialCode = substr($number, 0, 3); // Adjust based on your dial code format

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

        echo "Processed campaign ID: {$campaign->id}\n";
    }

} catch (Exception $e) {
    // Log the error message
    echo "Error: " . $e->getMessage();
}
