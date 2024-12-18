<?php

use RSThemes\Models\Settings as LagomSettings;
use WHMCS\Database\Capsule;
use RSThemes\View\ViewHelper;
use RSThemes\Models\Configuration;

add_hook('ClientAreaPage', 2, function($vars) {
    if ($vars['templatefile'] == "../supportpal/viewticket"){
        return[
            'mainContentClasses' => 'main-grid flex-wrap',
            'sidebarOnRight' => true
        ];
    }
});

add_hook('ClientAreaPage', 3, function($vars) {
    
    $spTemplates = [
        '../supportpal/supportticketsubmit-stepone',
        '../supportpal/announcements',
        '../supportpal/knowledgebase',
        '../supportpal/knowledgebase_category',
        '../supportpal/viewticket'
    ];

    if (in_array($vars['templatefile'], $spTemplates)){
        $checkData = LagomSettings::where("setting","supportpal_extension_pages")->get('value')->first();
        if ($checkData){
            $data = LagomSettings::where("setting","supportpal_extension_pages")->get('value')->first()->toArray();
            $pages = json_decode($data['value']);

            $supportPal = [];
            
            $supportPal['supportpalPages'] = (array) $pages;

            if (
                ($pages->{'knowledgebase-categories'} == "modern" && ($vars['templatefile'] == '../supportpal/knowledgebase' || ($vars['templatefile'] == '../supportpal/knowledgebase_category'))) 
                || ($pages->{'announcements'} == "modern" && $vars['templatefile'] == '../supportpal/announcements')){
                $supportPal['ignoreHeader'] = true;
                $supportPal['ignoreMainBody'] = true;
            }

            if ($pages->{'knowledgebase-categories'} == "modern"){
                $settings = LagomSettings::where("setting","supportpal_extension_settings")->get('value')->first()->toArray();
                $settings = json_decode($settings['value']);
                if (isset($settings->kbcategories)){
                    $supportPal['kbcategoriesicons'] = $settings->kbcategories;
                }
                if (isset($settings->kbcategoriesCols)){
                    $supportPal['kbcategoriesCols'] = $settings->kbcategoriesCols;
                }
            }

            if ($vars['templatefile'] == '../supportpal/viewticket'){
                $settings = LagomSettings::where("setting","supportpal_extension_settings")->get('value')->first()->toArray();
                $settings = json_decode($settings['value']);
                if (isset($settings->viewticket)){
                    $supportPal['viewTicketSorting'] = $settings->viewticket;
                }

            }

            return $supportPal;
        }
        
    }
});

add_hook('ClientAreaPage', 3, function($vars) {
    if ($vars['templatefile'] == '../supportpal/supporttickets'){
        $button = '<a class="btn btn-primary-faded" href="'.$vars['WEB_ROOT'].'/submitticket.php">'.Lang::trans("navopenticket").'</a>';
        $search = '<input type="text" id="table-search" class="form-control" placeholder="'.Lang::trans('tableentersearchterm').'">';
        return [
            'RSheaderCustomButton' => $button,
            'RSheaderCustomSearch' => $search
        ];
    }
});


add_hook('AdminAreaHeadOutput', 2, function($vars) {
    if ($vars['pagetitle'] == 'RSThemes' || $vars['pagetitle'] == 'RS Themes' && $_GET['extension'] == "SupportPal") {
        if(method_exists("\RSThemes\View\ViewHelper",'extensionAdminStyle')) {
            $adminCssURL = (new ViewHelper())->extensionAdminStyle('supportpal', 'supportpal.css');
            return '<link href="' . $adminCssURL . '" rel="stylesheet" type="text/css"/>';
        }
    }
});