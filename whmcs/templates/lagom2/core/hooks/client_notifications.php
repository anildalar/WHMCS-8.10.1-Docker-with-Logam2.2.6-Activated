<?php
use RSThemes\Helpers\AddonHelper;
use RSThemes\Models\Hostings;
use RSThemes\View\ViewHelper;
use RSThemes\Models\Page;
use WHMCS\Database\Capsule;
use RSThemes\Helpers\ClientNotificationLangHelper;

add_hook('ClientAreaPage', 2, function($vars) {
    if(method_exists("\RSThemes\Helpers\AddonHelper",'isExtensionEnabled') && \RSThemes\Helpers\AddonHelper::isExtensionEnabled("ClientNotifications")) {
        $showAlerts = [];
        $alerts = RSThemes\Models\ClientNotification::where("enabled", 1)->get();
        $variables = [];
        foreach ($alerts as $alert) {
            $variables[$alert->id]['services'] = [];
            $alertDate = json_decode($alert->date);
            if($alertDate->enabled == 1 && (time()<strtotime($alertDate->start) || (!empty($alertDate->end) && time()>strtotime($alertDate->end))))
                continue;
            $page = false;
            $pageGroupPass=false;
            $cmsPage = false;
            if(isset($_GET['cmsid'])) {
                $cmsPage = Page::where("id", $_GET['cmsid'])->first();
                $pageMatch = $cmsPage->url;
            }else{
                $pageMatch = $vars['templatefile'];
            }
            if($alert->page_filter_enabled && json_decode($alert->page_filters)->filter_type == "selectedCategories") {
                if($vars['isOnePageOrder'] && in_array("order-process",json_decode($alert->page_filters)->categories)){
                    $pageGroupPass = true;
                }else {
                    if(!$cmsPage) {
                        $pageGroup = Page::where("name", $vars['templatefile'])->first();
                    }else{
                        $pageGroup = $cmsPage;
                    }
                    if ($pageGroup) {
                        $pageGroup = $pageGroup->display_type;
                        if (in_array("all", json_decode($alert->page_filters)->categories))
                            $pageGroupPass = true;
                        else if (in_array($pageGroup, json_decode($alert->page_filters)->categories))
                            $pageGroupPass = true;
                    }
                }
            }
            $customUrl = false;
            $customUrlExclude = false;
            if($alert->page_filter_enabled){
                if(is_array(json_decode($alert->page_filters)->pages) &&
                    json_decode($alert->page_filters)->filter_type == "selectedPages" &&
                    in_array('custom_url',json_decode($alert->page_filters)->pages)){
                    $pageFilters=json_decode($alert->page_filters);
                    $pageUrl = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    foreach($pageFilters->custom_url->type as $index=>$type) {
                        if($type=="is_exactly"){
                            if($pageFilters->custom_url->url[$index] == $pageUrl)
                                $customUrl = true;
                        }else{
                            if(strpos($pageUrl, $pageFilters->custom_url->url[$index]) !== false)
                                $customUrl = true;
                        }
                    }
                }
                if(is_array(json_decode($alert->page_filters)->excluded_pages) &&
                    json_decode($alert->page_filters)->filter_type == "excludedPages" &&
                    in_array('custom_url',json_decode($alert->page_filters)->excluded_pages)){
                    $pageFilters=json_decode($alert->page_filters);
                    $pageUrl = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    foreach($pageFilters->excluded_custom_url->type as $index=>$type) {
                        if($type=="is_exactly"){
                            if($pageFilters->excluded_custom_url->url[$index] == $pageUrl)
                                $customUrlExclude = true;
                        }else{
                            if(strpos($pageUrl, $pageFilters->excluded_custom_url->url[$index]) !== false)
                                $customUrlExclude = true;
                        }
                    }
                }
            }
            if (!$alert->page_filter_enabled ||
                $pageGroupPass ||
                (json_decode($alert->page_filters)->filter_type == "selectedPages" &&
                    (in_array("all",json_decode($alert->page_filters)->pages) ||
                        $customUrl ||
                        in_array($pageMatch, json_decode($alert->page_filters)->pages) ||
                        (isset($vars['groupname']) && in_array("whmcsgroup-".$vars['gid'], json_decode($alert->page_filters)->pages)) ||
                        ($pageMatch == "supportticketsubmit-steptwo" && isset($vars['deptid']) && in_array("ticket_department_".$vars['deptid'], json_decode($alert->page_filters)->pages))
                    )
                ) ||
                (json_decode($alert->page_filters)->filter_type == "excludedPages" &&
                    (!is_array(json_decode($alert->page_filters)->excluded_pages) ||
                        (!in_array("all",json_decode($alert->page_filters)->excluded_pages) &&
                        !$customUrlExclude &&
                        !in_array($pageMatch, json_decode($alert->page_filters)->excluded_pages) &&
                        (!isset($vars['groupname']) || !in_array("whmcsgroup-".$vars['gid'], json_decode($alert->page_filters)->excluded_pages)) &&
                        ($pageMatch != "supportticketsubmit-steptwo" || !isset($vars['deptid']) || !in_array("ticket_department_".$vars['deptid'], json_decode($alert->page_filters)->excluded_pages))
                        )
                    )
                )
            ) {
                $clientFilter = json_decode($alert->client_filters);
                if (!$alert->client_filter_enabled ||
                    (
                        (
                            (in_array("loggedin", $clientFilter->user) && $vars['client']->id)||
                            (in_array("loggedout", $clientFilter->user) && !$vars['client']->id)||
                             in_array("all", $clientFilter->user)
                        ) &&
                        (in_array($vars['client']->id, $clientFilter->client) || in_array('all', $clientFilter->client) || count($clientFilter->client) == 0) &&
                        (in_array($vars['client']->groupid, $clientFilter->groups) || in_array('all', $clientFilter->groups) || count($clientFilter->groups) == 0) &&
                        (in_array($vars['client']->country, $clientFilter->country) || in_array('all', $clientFilter->country) || count($clientFilter->country) == 0) &&
                        (floor(time()/60/60/24) - floor(strtotime($vars['client']->created_at)/60/60/24) < $clientFilter->dayssinceregister || $clientFilter->dayssinceregister == 0 || $clientFilter->dayssinceregister == "")
                    )
                ) {
                    $hostingAvailable = false;
                    if ($alert->service_filter_enabled) {
                        $hostings = Hostings::where('userid', $vars['client']->id);
                        $servicefilters = json_decode($alert->service_filters);
                        if (count($servicefilters->services) > 0 && !in_array('all', $servicefilters->services)) {
                            $hostings->where(function ($hostings) use ($servicefilters) {
                                foreach ($servicefilters->services as $service) {
                                    $hostings->orWhere("packageid", $service);
                                }
                            });
                        }
                        if (count($servicefilters->status) > 0 && !in_array('all', $servicefilters->status)) {
                            $hostings->where(function ($hostings) use ($servicefilters) {
                                foreach ($servicefilters->status as $status) {
                                    $hostings->orWhere("domainstatus", $status);
                                }
                            });
                        }
                        if (count($servicefilters->billing) > 0 && !in_array('all', $servicefilters->billing)) {
                            $hostings->where(function ($hostings) use ($servicefilters) {
                                foreach ($servicefilters->billing as $billing) {
                                    $hostings->orWhere("billingcycle", $billing);
                                }
                            });
                        }
                        if (!empty($servicefilters->reg_date->start)) {
                            $hostings->where("regdate", ">=", $servicefilters->reg_date->start);
                        }
                        if (!empty($servicefilters->reg_date->end)) {
                            $hostings->where("regdate", "<=", $servicefilters->reg_date->end);
                        }
                        if (!empty($servicefilters->due_date->start)) {
                            $hostings->where("nextduedate", ">=", $servicefilters->due_date->start);
                        }
                        if (!empty($servicefilters->due_date->end)) {
                            $hostings->where("nextduedate", "<=", $servicefilters->due_date->end);
                        }
                        if (!empty($servicefilters->days_due->start)) {
                            $date = date("Y-m-d", time() + ($servicefilters->days_due->start * 60 * 60 * 24));
                            $hostings->where("nextduedate", ">=", $date);
                        }
                        if (!empty($servicefilters->days_due->end)) {
                            $date = date("Y-m-d", time() + ($servicefilters->days_due->end * 60 * 60 * 24));
                            $hostings->where("nextduedate", "<=", $date);
                        }
                        if (!empty($servicefilters->days_after->start)) {
                            $date = date("Y-m-d", time() - ($servicefilters->days_after->start * 60 * 60 * 24));
                            $hostings->where("nextduedate", "<=", $date);
                        }
                        if (!empty($servicefilters->days_after->end)) {
                            $date = date("Y-m-d", time() - ($servicefilters->days_after->end * 60 * 60 * 24));
                            $hostings->where("nextduedate", ">=", $date);
                        }
                        $hostings = $hostings->get();
                        if ($hostings) {
                            foreach($hostings as $hosting) {
                                $passed = true;
                                if (is_array($servicefilters->options->{$hosting->packageid}) && count($servicefilters->options->{$hosting->packageid}) > 0) {
                                    foreach ($servicefilters->options->{$hosting->packageid} as $optionid => $option) {
                                        $configHosting = RSThemes\Models\HostingConfigOptions::where('relid', $hosting->id)->where("configid", $optionid)->first();
                                        if (!$configHosting) {
                                            $passed = false;
                                            break;
                                        }
                                        elseif (isset($option->min) && isset($option->max)) {
                                            if ($configHosting->qty >= $option->min || $configHosting->qty <= $option->max) {
                                                continue;
                                            }
                                        } elseif (count($option) > 0) {
                                            if (in_array($configHosting->optionid, $option) || in_array("all", $option)) {
                                                continue;
                                            }
                                        }
                                        $passed = false;
                                        break;
                                    }
                                }
                                if ($passed) {
                                    $variables[$alert->id]['services'][] = $hosting;
                                    $hostingAvailable = true;
                                }
                            }
                        }
                    }
                    if (!$alert->service_filter_enabled || $hostingAvailable) {
                        $domainAvailable = false;
                        if ($alert->domain_filter_enabled) {
                            $domains = Capsule::table('tbldomains')->where('userid', $vars['client']->id);
                            $domainfilters = json_decode($alert->domain_filters);
                            if (count($domainfilters->tld) > 0 && !in_array('all', $domainfilters->tld)) {
                                $domains->where(function ($domains) use ($domainfilters) {
                                    foreach ($domainfilters->tld as $tld) {
                                        $domains->orWhere("domain", 'LIKE', "%" . $tld);
                                    }
                                });
                            }
                            if (count($domainfilters->status) > 0 && !in_array('all', $domainfilters->status)) {
                                $domains->where(function ($domains) use ($domainfilters) {
                                    foreach ($domainfilters->status as $status) {
                                        $domains->orWhere("status", $status);
                                    }
                                });
                            }
                            if (is_array($domainfilters->registrars) && count($domainfilters->registrars) > 0 && !in_array('all', $domainfilters->registrars)) {
                                $domains->where(function ($domains) use ($domainfilters) {
                                    foreach ($domainfilters->registrars as $registrar) {
                                        $domains->orWhere("registrar", $registrar);
                                    }
                                });
                            }
                            /*if(count($domainfilters->cycle)>0)
                            {
                                $domain->where(function ($domain) use ($domainfilters)
                                {
                                    foreach($domainfilters->cycle as $registrar){
                                        $domain->orWhere("cycle",???);
                                    }
                                });
                            }*/
                            if (!empty($domainfilters->reg_date->start)) {
                                $domains->where("registrationdate", ">=", $domainfilters->reg_date->start);
                            }
                            if (!empty($domainfilters->reg_date->end)) {
                                $domains->where("registrationdate", "<=", $domainfilters->reg_date->end);
                            }
                            if (!empty($domainfilters->due_date->start)) {
                                $domains->where("nextduedate", ">=", $domainfilters->due_date->start);
                            }
                            if (!empty($domainfilters->due_date->end)) {
                                $domains->where("nextduedate", "<=", $domainfilters->due_date->end);
                            }
                            if (!empty($domainfilters->days_activation->start)) {
                                $date = date("Y-m-d", time() + ($domainfilters->days_activation->start * 60 * 60 * 24));
                                $domains->where("registrationdate", ">=", $date);
                            }
                            if (!empty($domainfilters->days_activation->end)) {
                                $date = date("Y-m-d", time() + ($domainfilters->days_activation->end * 60 * 60 * 24));
                                $domains->where("registrationdate", "<=", $date);
                            }
                            if (!empty($domainfilters->days_due->start)) {
                                $date = date("Y-m-d", time() + ($domainfilters->days_due->start * 60 * 60 * 24));
                                $domains->where("nextduedate", ">=", $date);
                            }
                            if (!empty($domainfilters->days_due->end)) {
                                $date = date("Y-m-d", time() + ($domainfilters->days_due->end * 60 * 60 * 24));
                                $domains->where("nextduedate", "<=", $date);
                            }
                            if (!empty($domainfilters->days_after->start)) {
                                $date = date("Y-m-d", time() - ($domainfilters->days_after->start * 60 * 60 * 24));
                                $domains->where("nextduedate", "<=", $date);
                            }
                            if (!empty($domainfilters->days_after->end)) {
                                $date = date("Y-m-d", time() - ($domainfilters->days_after->end * 60 * 60 * 24));
                                $domains->where("nextduedate", ">=", $date);
                            }
                            $domains = $domains->get();
                            if ($domains && count($domains)>0) {
                                $domainAvailable = true;
                            }
                        }
                        if (!$alert->domain_filter_enabled || $domainAvailable) {
                            $serverAvailable = false;
                            if ($alert->service_filter_enabled) {
                                $hostingsServers = Hostings::where('userid', $vars['client']->id);
                                $servicefilters = json_decode($alert->service_filters);
                                if (isset($servicefilters->server) && count($servicefilters->server) > 0 && !in_array('all', $servicefilters->server)) {
                                    $hostingsServers->where(function ($hostingsServers) use ($servicefilters) {
                                        foreach ($servicefilters->server as $server) {
                                            $hostingsServers->orWhere("server", $server);
                                        }
                                    });
                                }
                                if (isset($servicefilters->group) && count($servicefilters->group) > 0 && !in_array('all', $servicefilters->group)) {
                                    $servicefiltersgroups = [];
                                    foreach($servicefilters->group as $serviceFilter){
                                        $relservers = \WHMCS\Database\Capsule::table('tblservergroupsrel')->where("groupid",$serviceFilter)->get();
                                        foreach($relservers as $relserver){
                                            $servicefiltersgroups[] = $relserver->serverid;
                                        }
                                    }
                                    $hostingsServers->where(function ($hostingsServers) use ($servicefiltersgroups) {
                                        foreach ($servicefiltersgroups as $server) {
                                            $hostingsServers->orWhere("server", $server);
                                        }
                                    });
                                }
                                $hostingsServers = $hostingsServers->get();
                                if ($hostingsServers && count($hostingsServers)>0) {
                                    $serverAvailable = true;
                                }
                            }
                            if (!$alert->service_filter_enabled || $serverAvailable) {
                                $variables[$alert->id]['domains'] = $domains;
                                $showAlerts[] = $alert;/*["alert" => $alert, 'id' => $alert->id, 'isClosed' => $alertClosed, 'content' => json_decode($alert->alertcontent), 'style' => json_decode($alert->alertstyle)]*/;
                            }
                        }
                    }
                }
            }
        }
        $alertHtml = new stdClass();
        foreach($showAlerts as $alert){
            $alertStyleType = json_decode($alert->alertstyle)->type;
            $alertType = false;
            foreach(RSThemes\Extensions\ClientNotificationsExtension::$alertTypes as $index => $key){
                if(in_array($alertStyleType,$key)){
                    if(!isset($alertHtml->$index))$alertHtml->$index = "";
                    $alertType=$index;
                    break;
                }
            }
            if($alertType)
                $alertHtml->$alertType .= RSThemes\Extensions\ClientNotificationsExtension::htmlRender($alert, $variables[$alert->id]);
        }
        return ['lagomClientAlerts' => $alertHtml];
    }
});

add_hook('ClientAreaHeadOutput', 2, function($vars) {
    if(method_exists("\RSThemes\Helpers\AddonHelper",'isExtensionEnabled') && \RSThemes\Helpers\AddonHelper::isExtensionEnabled("ClientNotifications")) {
        $caCssURL = (new ViewHelper())->extensionStyle('ClientNotifications', 'client-notifications.css');
        return '<link href="'.$caCssURL.'" rel="stylesheet" type="text/css"/>';
}});

add_hook('ClientAreaFooterOutput', 2, function($vars) {
    if(method_exists("\RSThemes\Helpers\AddonHelper",'isExtensionEnabled') && \RSThemes\Helpers\AddonHelper::isExtensionEnabled("ClientNotifications")) {
        $caJsURL = (new ViewHelper())->extensionScript('ClientNotifications', 'client-notifications.js');
    return '<script defer src="'.$caJsURL.'"></script>';
}});
