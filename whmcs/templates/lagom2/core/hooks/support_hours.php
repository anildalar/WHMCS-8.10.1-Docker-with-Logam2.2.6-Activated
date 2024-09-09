<?php
use \RSThemes\Extensions\SupportHoursExtension as SupportHours;
use WHMCS\View\Menu\Item as MenuItem;
use RSThemes\View\ViewHelper;
use RSThemes\Helpers\AddonHelper;
use RSThemes\Helpers\SupportHoursLangHelper;
use RSThemes\Service\Util;

add_hook('ClientAreaPage', 2, function($vars) {
    if(method_exists("\RSThemes\Helpers\AddonHelper",'isExtensionEnabled') && \RSThemes\Helpers\AddonHelper::isExtensionEnabled("SupportHours")) {
        $primarySidebar = Menu::primarySidebar();
        $secondarySidebar = Menu::secondarySidebar();
        $extensionLang = SupportHoursLangHelper::factory(AddonHelper::getCurrentTemplateObject()->getFullPath());
        $supportToolsSettings = SupportHours::getExtensionSettings();
        $primaryHasChildren = $primarySidebar->hasChildren();
        $secondaryHasChildren = $secondarySidebar->hasChildren();
        $language = $vars['language'];
        $whmcsLang = Util::getSystemLang();
        $whmcsLangValue = $whmcsLang->value;
        if (!empty($supportToolsSettings)) {
            $displayedOnPages = json_decode($supportToolsSettings['displayed_on']);
            if (in_array("all", $displayedOnPages))
                $displayedOnPages = ["supportticketslist", "viewticket", "supportticketsubmit-steptwo", "supportticketsubmit-stepone"];
            if (in_array($vars['templatefile'], $displayedOnPages)) {
                $variables = [];
                $statusState = $supportToolsSettings['status'];
                $timezone = $supportToolsSettings['timezone'];
                $hiddenCounter = 0;
                $itemsCounter = 0;
                             
                foreach (SupportHours::getExtensionWorkhoursCa() as $workhour) {
                    $availableDepartments = json_decode($workhour->departments);
                   
                    if (isset($vars['departmentid']) && $availableDepartments[0] != "all"){
                        if (!in_array($vars['departmentid'], json_decode($workhour->departments))) // Skip other departments
                        {
                            continue;
                        }
                    }
                    if (!$workhour->activated) {
                        continue;
                    }
                    $engDays = [];
                    $days = [];
                    $daysShort = [];
                    $oneByOne = true;
                    $oneByOneID = -1;
                    $timeUntilStartInt = -1;
                    $timeUntilStart = [];
                    $timeUntilEndInt = -1;
                    $timeUntilEnd = [];
                    $timezonedTimestamp = (new DateTime("now", new DateTimeZone($timezone)))->getTimestamp();
                    $timezonedGi = (new DateTime("now", new DateTimeZone($timezone)))->format('G:i');
                    $timezonedD = (new DateTime("now", new DateTimeZone($timezone)))->format('D');
                    
                    foreach (json_decode($workhour->days) as $day) {
                        if ($day == "mon") {
                            if ($oneByOneID != -1 && $oneByOneID != "sun")
                                $oneByOne = false;
                            $engDays[] = "Monday";
                            $days[] = Lang::trans("dateTime.monday");
                            $daysShort[] = Lang::trans("dateTime.mon");
                        } else if ($day == "tue") {
                            if ($oneByOneID != -1 && $oneByOneID != "mon")
                                $oneByOne = false;
                            $engDays[] = "Tuesday";
                            $days[] = Lang::trans("dateTime.tuesday");
                            $daysShort[] = Lang::trans("dateTime.tue");
                        } else if ($day == "wed") {
                            if ($oneByOneID != -1 && $oneByOneID != "tue")
                                $oneByOne = false;
                            $engDays[] = "Wednesday";
                            $days[] = Lang::trans("dateTime.wednesday");
                            $daysShort[] = Lang::trans("dateTime.wed");
                        } else if ($day == "thu") {
                            if ($oneByOneID != -1 && $oneByOneID != "wed")
                                $oneByOne = false;
                            $engDays[] = "Thursday";
                            $days[] = Lang::trans("dateTime.thursday");
                            $daysShort[] = Lang::trans("dateTime.thu");
                        } else if ($day == "fri") {
                            if ($oneByOneID != -1 && $oneByOneID != "thu")
                                $oneByOne = false;
                            $engDays[] = "Friday";
                            $days[] = Lang::trans("dateTime.friday");
                            $daysShort[] = Lang::trans("dateTime.fri");
                        } else if ($day == "sat") {
                            if ($oneByOneID != -1 && $oneByOneID != "fri")
                                $oneByOne = false;
                            $engDays[] = "Saturday";
                            $days[] = Lang::trans("dateTime.saturday");
                            $daysShort[] = Lang::trans("dateTime.sat");
                        } else if ($day == "sun") {
                            if ($oneByOneID != -1 && $oneByOneID != "sat")
                                $oneByOne = false;
                            $engDays[] = "Sunday";
                            $days[] = Lang::trans("dateTime.sunday");
                            $daysShort[] = Lang::trans("dateTime.sun");
                        } else if ($day = "all"){
                            $engDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                            $days = [Lang::trans("dateTime.monday"), Lang::trans("dateTime.sunday")];
                            $daysShort = [Lang::trans("dateTime.mon"), Lang::trans("dateTime.sun")];
                        }
                      
                        $oneByOneID = $day;
                        if ($day == "all"){
                            $timezonedDay = (new DateTime("now", new DateTimeZone($timezone)));
                            $tomorrowDay = $timezonedDay->modify('+1 day');
                            if ($timeUntilStartInt == -1 || $timeUntilStartInt >= strtotime('next ' . $tomorrowDay->format('D') . " " . $workhour->work_hours_begin . $timezone) - $timezonedTimestamp){
                                $timeUntilStartInt = strtotime('next ' . $tomorrowDay->format('D') . " " . $workhour->work_hours_begin . $timezone) - $timezonedTimestamp;
                            }
                            
                        }
                        else{
                            if ($timeUntilStartInt == -1 || $timeUntilStartInt >= strtotime('next ' . end($engDays) . " " . $workhour->work_hours_begin . $timezone) - $timezonedTimestamp){
                                $timeUntilStartInt = strtotime('next ' . end($engDays) . " " . $workhour->work_hours_begin . $timezone) - $timezonedTimestamp;
                            }
                        }  
                    }
                    $workhourStartHour = date($supportToolsSettings['timeformat'], strtotime($workhour->work_hours_begin));
                    $workhourEndHour = date($supportToolsSettings['timeformat'], strtotime($workhour->work_hours_end));
                    $workingNow = false;
                    $applyHolidays = $workhour->apply_holidays;
                    $allDay = $workhour->all_day;
                    
                    if ($allDay && (in_array(strtolower($timezonedD), json_decode($workhour->days)) || in_array("all", json_decode($workhour->days)))){
                        $workingNow = true;
                    }
                    else{
                        if (
                            strtotime($timezonedGi) >= strtotime($workhour->work_hours_begin) &&
                            strtotime($timezonedGi) <= strtotime($workhour->work_hours_end) &&
                            (in_array(strtolower($timezonedD), json_decode($workhour->days)) || in_array("all", json_decode($workhour->days)))
                        ) {
                            $explodeTime = explode(":", $workhour->work_hours_end);
                            //$explodeTimeDay = explode(":", date('G:i'));
                            $explodeTimeDay = explode(":", $timezonedGi);
                            $timeUntilEndInt = (($explodeTime[0] * 60 * 60) + ($explodeTime[1] * 60)) - (($explodeTimeDay[0] * 60 * 60) + ($explodeTimeDay[1] * 60));
                            $workingNow = true;
                        }
                        if ($timeUntilStartInt > 0) {
                            $timeUntilStart['days'] = floor($timeUntilStartInt / (60 * 60 * 24));
                            $timeUntilStart['hours'] = floor(($timeUntilStartInt % (60 * 60 * 24)) / (60 * 60));
                            $timeUntilStart['minutes'] = floor(($timeUntilStartInt % (60 * 60)) / (60));
                        }
                        if ($timeUntilEndInt > 0) {
                            $timeUntilEnd['days'] = floor(($timeUntilEndInt % (60 * 60 * 24)) / (60 * 60 * 24));
                            $timeUntilEnd['hours'] = floor(($timeUntilEndInt % (60 * 60 * 24)) / (60 * 60));
                            $timeUntilEnd['minutes'] = floor(($timeUntilEndInt % (60 * 60)) / (60));
                        }
                    }
                    
                    if ($vars['templatefile'] == "supportticketsubmit-stepone") {
                        $item = [];
                        if (!$oneByOne)
                            $item['days'] = implode(", ", $daysShort);
                        else
                            $item['days'] = ["start" => $daysShort[0], "end" => end($daysShort)];
                        $item['holiday'] = SupportHours::getClosestHolidayData();
                        $holidayName = json_decode(htmlspecialchars_decode($item['holiday']['holiday']->name));
                        if ($holidayName->{$language} != ""){
                            $holidayNameLang = $holidayName->{$language};
                        } else {
                            $holidayNameLang = $holidayName->{$whmcsLangValue};
                        }
                        if (isset($item['holiday']['holiday'])){
                            $item['holiday']['holiday']->name = $holidayNameLang;
                        }
                        $item['workhour'] = $workhour;
                        $item['workhourStartHour'] = $workhourStartHour;
                        $item['workhourEndHour'] = $workhourEndHour;
                        $formatedTimezone = strtolower(str_replace("/", "_", $timezone));
                        $item['timezone'] = $extensionLang->trans('timezones.'.$formatedTimezone);
                        $item['workingNow'] = $workingNow;
                        $item['departments'] = $workhour->departments;
                        $item['statusDisplay'] = $statusState;
                        $item['allDay'] = $allDay;
                        $item['applyHolidays'] = $applyHolidays;
                        if ($workingNow)
                            $item['time'] = $timeUntilEnd;
                        else
                            $item['time'] = $timeUntilStart;
                        $variables['rsSupportHoursLang'] = $extensionLang;
                        $variables['supportHours'][$workhour->id] = $item;
                    } else {
                        $holiday = SupportHours::getClosestHolidayData();
                        if (!$oneByOne)
                            $days = implode(", ", $days);
                        else
                            $days = '<span>' . $days[0] . '</span> - <span>' . end($days) . '</span>';

                        if ($statusState == '1') {
                            if ($workingNow && $allDay && (!$holiday['active'] || !$applyHolidays)) {
                                $statusHtml = '
                                    <div class="list-group-item">
                                        <div class="support-status status-online"> 
                                            <span class="support-status-text">' . $extensionLang->trans('general.support_available') . '</span>
                                            <span class="label label-success">' . $extensionLang->trans('general.online') . '</span>
                                        </div>
                                    </div>
                                ';
                            } else if ($workingNow && (!$holiday['active'] || !$applyHolidays)) {
                                $timeString = $timeUntilEnd['days'] . " " . (($timeUntilEnd['days'] == 1) ? $extensionLang->trans('general.day') : $extensionLang->trans('general.days')) . ", " . $timeUntilEnd['hours'] . " " . (($timeUntilEnd['hours'] == 1) ? $extensionLang->trans('general.hour') : $extensionLang->trans('general.hours'));
                                if ($timeUntilEnd['days'] == 0 && $timeUntilEnd['hours'] > 0) $timeString = $timeUntilEnd['hours'] . " " . (($timeUntilEnd['hours'] == 1) ? $extensionLang->trans('general.hour') : $extensionLang->trans('general.hours'));
                                else if ($timeUntilEnd['hours'] == 0) $timeString = $timeUntilEnd['minutes'] .' '. $extensionLang->trans('general.minutes');
                                $statusHtml = '
                                    <div class="list-group-item">
                                        <div class="support-status status-online"> 
                                            <span class="support-status-text">' . sprintf($extensionLang->trans('general.support_available_for'), $timeString) . '</span>
                                            <span class="label label-success">' . $extensionLang->trans('general.online') . '</span>
                                        </div>
                                    </div>
                                ';
                            } else if(!$workingNow && (!$holiday['active'] || !$applyHolidays)) {
                                $timeString = $timeUntilStart['days'] . " " . (($timeUntilStart['days'] == 1) ? $extensionLang->trans('general.day') : $extensionLang->trans('general.days')) . ", " . $timeUntilStart['hours'] . " " . (($timeUntilStart['hours'] == 1) ? $extensionLang->trans('general.hour') : $extensionLang->trans('general.hours'));
                                if ($timeUntilStart['days'] == 0 && $timeUntilStart['hours'] > 0) $timeString = $timeUntilStart['hours'] . " " . (($timeUntilStart['hours'] == 1) ? $extensionLang->trans('general.hour') : $extensionLang->trans('general.hours'));
                                else if ($timeUntilStart['hours'] == 0) $timeString = $timeUntilStart['minutes'] . ' ' . $extensionLang->trans('general.minutes');
                                $statusHtml = '
                                    <div class="list-group-item">
                                        <div class="support-status status-offline">
                                            <span class="support-status-text">' . sprintf($extensionLang->trans('general.support_will_available'), $timeString) . '</span>
                                            <span class="label label-danger">' . $extensionLang->trans('general.offline') . '</span>
                                        </div>
                                    </div>
                                ';
                            }else{
                                $holidayName = json_decode(htmlspecialchars_decode($holiday['holiday']->name));
                                if ($holidayName->{$language} != ""){
                                    $holidayNameLang = $holidayName->{$language};
                                } else {
                                    $holidayNameLang = $holidayName->{$whmcsLangValue};
                                }
                                $statusHtml = '
                                    <div class="list-group-item">
                                        <div class="support-status status-offline">
                                            <span class="support-status-text">';
                                    if($holiday['holiday']->holidays_begin === $holiday['holiday']->holidays_end) {
                                        $statusHtml = $statusHtml .  sprintf($extensionLang->trans('general.holiday_one_day'), $holidayNameLang);                 
                                    } else {
                                        $statusHtml = $statusHtml . sprintf($extensionLang->trans('general.holidays'), $holiday['holiday']->getFormattedStartDate(), $holiday['holiday']->getFormattedEndDate(), $holidayNameLang);
                                    }
                                $statusHtml = $statusHtml .' 
                                            </span>
                                            <span class="label label-danger label-support-close no-point">
                                                ' . $extensionLang->trans('general.closed') . '
                                                <i class="ls ls-info-circle m-l-1x m-r-0"></i>
                                            </span>

                                        </div>
                                    </div>
                                ';
                            }
                        }
                        $bodyHtml = '
                            <div class="list-group">
                                <div class="list-group-item" data-support-hours>
                                    <span class="operating-hour-title">
                                        ' . $days . '
                                    </span>
                                    <span class="operating-hour-val">';
                        if ($allDay){
                            $bodyHtml = $bodyHtml .'<span class="starting-hour">' . $extensionLang->trans('general.all_day') . '</span>';
                        }
                        else{
                            $bodyHtml = $bodyHtml .'<span class="starting-hour" data-starting-hour="' . $workhour->work_hours_begin . '">' . $workhourStartHour . '</span> - <span class="ending-hour" data-ending-hour="' . $workhour->work_hours_end . '">' . $workhourEndHour . '</span>';
                        }         
                        $bodyHtml = $bodyHtml . '</span>';

                        $formatedTimezone = strtolower(str_replace("/", "_", $timezone));
                        $translatedTimezone = $extensionLang->trans('timezones.'.$formatedTimezone);
                        if (!$allDay){
                            $bodyHtml = $bodyHtml . '
                                    <span class="operating-hour-zone">
                                        <span data-timezone="' . $translatedTimezone . '">' . $translatedTimezone . '</span>
                                    </span>';
                        }
                        $bodyHtml = $bodyHtml . '            
                                </div>
                                ' . $statusHtml . '
                            </div>
                        ';
                        $defaultClass = 'panel-styled-group panel-support-hours';
                        if (isset($workhour->departments)){
                            $currentDeptartments = json_decode($workhour->departments);
                            foreach ($currentDeptartments as $department){
                                $defaultClass = $defaultClass .' panel-support-hours-department-'.$department;
                            } 
                        }
                         
                        $customClass = $defaultClass;
                        if ($vars['deptid'] && $vars['templatefile'] == "supportticketsubmit-steptwo" && $availableDepartments[0] != "all"){
                            if (!in_array($vars['deptid'], json_decode($workhour->departments))) // Skip other departments
                            {
                                $hiddenCounter++;
                                $customClass = $defaultClass . ' hidden';
                            }
                        }
                        $name = json_decode(htmlspecialchars_decode($workhour->name));
                        if ($name->{$language} != ""){
                            $nameLang = $name->{$language};
                        } else {
                            $nameLang = $name->{$whmcsLangValue};
                        }

                        $primarySidebar->addChild('AvailableSupportHours' . $workhour->id, array(
                            'label' => $nameLang,
                            'bodyHtml' => $bodyHtml,                           
                        ))->moveUp()
                            ->setClass($customClass);
                        $itemsCounter++;    
                    }
                }
                if (!$primaryHasChildren && !$secondaryHasChildren){
                    $variables['appMainBodyClasses'] = "toggle-sidebar";
                }
                if ($itemsCounter > 0 && $hiddenCounter == $itemsCounter && !$primaryHasChildren && !$secondaryHasChildren){
                    $variables['appMainBodyClasses'] .= " hidden-sidebar";
                }
                
                return $variables;
            }
        }
    }
});

add_hook('ClientAreaFooterOutput', 1, function($vars) {

    if(method_exists("\RSThemes\Helpers\AddonHelper",'isExtensionEnabled') && \RSThemes\Helpers\AddonHelper::isExtensionEnabled("SupportHours")) {
        $supportToolsSettings = SupportHours::getExtensionSettings();

        $displayed = false;
        if (!empty($supportToolsSettings)) {
            $displayedOnPages = json_decode($supportToolsSettings['displayed_on']);

            if (in_array($vars['templatefile'], $displayedOnPages)|| in_array("all", $displayedOnPages)) {
                $caJsURL = (new ViewHelper())->extensionScript('SupportHours', 'support-hours.js');
                return '<script defer src="'.$caJsURL.'"></script>';
                // return "<script src=\"/modules/addons/RSThemes/views/adminarea/extensions/supporttools/assets/js/support/dayjs/dayjs.min.js\"></script>";
                //<script src="/modules/addons/RSThemes/views/adminarea/extensions/supporttools/assets/js/support/status.js?v=468"></script>
            }
        }
    }
});
add_hook('ClientAreaHeadOutput', 1, function($vars) {

    if(method_exists("\RSThemes\Helpers\AddonHelper",'isExtensionEnabled') && \RSThemes\Helpers\AddonHelper::isExtensionEnabled("SupportHours")) {
        $templateName = $vars["RSThemes"]['styles']['name'];

        $supportToolsSettings = SupportHours::getExtensionSettings();
       
        $displayed = false;
        if (!empty($supportToolsSettings)) {
            $displayedOnPages = json_decode($supportToolsSettings['displayed_on']);

            if (in_array($vars['templatefile'], $displayedOnPages) || in_array("all", $displayedOnPages)) {
                $caCssURL = (new ViewHelper())->extensionStyle('SupportHours', 'support-hours.css');
                return '<link href="'.$caCssURL.'" rel="stylesheet" type="text/css"/>';
            }
        }
    }
});