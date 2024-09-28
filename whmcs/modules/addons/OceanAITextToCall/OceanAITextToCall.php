<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function autotext_config() {
    return [
        'name' => 'AutoText Module',
        'description' => 'A module to manage text automation.',
        'version' => '1.0',
        'author' => 'Your Name',
        'fields' => [
            'remove_table' => [
                'FriendlyName' => 'Remove Table on Deactivation',
                'Type' => 'yesno',
                'Description' => 'Check this to remove the table when the module is deactivated.',
                'Default' => 'no',
            ],
        ],
    ];
}

function autotext_activate() {
    // Create a database table for the module
    $query = "CREATE TABLE IF NOT EXISTS `tbl_autotext` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `text` TEXT NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB;";
    full_query($query);
}

function autotext_deactivate() {
    // Handle the checkbox option for removing the table
    $removeTable = get_option('remove_table');
    
    if ($removeTable) {
        $query = "DROP TABLE IF EXISTS `tbl_autotext`;";
        full_query($query);
    }
}

function autotext_output($vars) {
    echo '<h2>AutoText Module</h2>';
    echo '<p>This module allows for text automation functionality.</p>';
}

// Optional: Add any additional functionality or hooks here

?>
