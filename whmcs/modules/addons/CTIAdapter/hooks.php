<?php

use WHMCS\Database\Capsule;

add_hook('OutputContent', 1, function($vars) {
    // Fetch the configured footer text from module settings
    // HTML for footer content
    $footerContent = "<div class='custom-footer'>Tetstst</div>";

    // Inject into the page's footer
    return str_replace('</body>', $footerContent . '</body>', $vars['output']);
});