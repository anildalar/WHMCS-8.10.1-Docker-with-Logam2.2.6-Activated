<?php

add_hook('ClientAreaPageProductDetails', 1, function($vars) {
    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['customfield'])) {
        // Get the product ID
        $productId = (int)$_GET['id'];
        
        // Get the custom field value for "domain_for_pbx"
        foreach ($_POST['customfield'] as $fieldId => $value) {
            $customFieldValue = htmlspecialchars($value);
            
            // Assuming field name is "domain_for_pbx"
            // Update the custom field value in the database
            update_query(
                'tblcustomfieldsvalues',
                ['value' => $customFieldValue],
                ['relid' => $productId, 'fieldid' => $fieldId]
            );
        }
        
        // Add success message to notify the user
        $_SESSION['custom_field_saved'] = 'Domain for PBX has been saved successfully.';
    }
});
