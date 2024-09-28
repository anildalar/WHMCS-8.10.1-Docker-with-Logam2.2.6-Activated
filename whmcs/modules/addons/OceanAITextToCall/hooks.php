<?php

use WHMCS\Module\Addon;

function mycustommodule_hook_example($vars) {
    // Code to execute when the hook is triggered
}

add_hook('ClientAreaPage', 1, 'mycustommodule_hook_example');
