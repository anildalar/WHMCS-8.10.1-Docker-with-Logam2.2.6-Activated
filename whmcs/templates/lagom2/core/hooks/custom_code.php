<?php
use \RSThemes\Extensions\CustomCodeExtension;
add_hook('ClientAreaHeaderOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ClientAreaHeaderOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ClientAreaHeadOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ClientAreaHeadOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ClientAreaFooterOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ClientAreaFooterOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ClientAreaProductDetailsOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ClientAreaProductDetailsOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ShoppingCartCheckoutOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ShoppingCartCheckoutOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ShoppingCartViewCartOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ShoppingCartViewCartOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ShoppingCartConfigureProductAddonsOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ShoppingCartConfigureProductAddonsOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});
add_hook('ClientAreaDomainDetailsOutput', 2, function($vars) {
    return CustomCodeExtension::getCustomCode(\Auth::user() ,"ClientAreaDomainDetailsOutput",["templatefile"=>$vars["templatefile"],"filename"=>$vars["filename"]]);
});