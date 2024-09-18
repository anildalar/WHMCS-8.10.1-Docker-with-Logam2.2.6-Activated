<?php

// ---------------------------------------------------- BASIC  ---------------------------------------------------------

$_LANG['noDataAvailable']                                      = 'No Data Available';
$_LANG['searchPlacecholder']                                  = 'Search...';
$_LANG['changesHasBeenSaved']                                 = 'Changes have been saved successfully';
$_LANG['actionCannotBeFound']                                 = 'The action cannot be found';
$_LANG['addonCA']['pageNotFound']                             = 'Page not found';
$_LANG['FormValidators']['thisFieldCannotBeEmpty']            = 'This field cannot be empty';
$_LANG['FormValidators']['PleaseProvideANumericValueBetween'] = 'Please provide a number between 0 and 999';
$_LANG['FormValidators']['invalidDomain']                     = 'The domain is invalid';
$_LANG['FormValidators']['invalidIPv6']                       = 'The IP address is invalid';
$_LANG['FormValidators']['InvalidIP']                         = 'The IP address is invalid';
$_LANG['FormValidators']['IpOutside']                         = 'The IP address is outside the selected subnet';
$_LANG['FormValidators']['notBetweenCidr']                    = "Please provide a number between 0 and 32";
$_LANG['FormValidators']['notNumericCidr']                    = "Please enter only numerical digits in the CIDR field.";
$_LANG['FormValidators']['invalidPublicKeyPattern']           = "The public SSH key is invalid";
$_LANG['enabledSystemRescue'] = "The server rescue system has been enabled.";
$_LANG['SSH key with the same fingerprint already exists'] = "An SSH key with the same fingerprint already exists.";

$_LANG['token']                                               = 'Token';
$_LANG['emptyServerGroup']                                    = "You need to select the server group from the dropdown menu first and save product configuration";
$_LANG['serverIsNotEmpty']                                    = "The server ID field is not empty";
$_LANG['serverMustOff']                                       = "If you want to change the type of server, your server must be off.";
$_LANG['downgradeError']                                      = "You cannot downgrade the type of your server.";
$_LANG['auto']                                                = "Auto";
$_LANG['permissionsStorage']                                  = ':storage_path: settings are not sufficient. Please set up permissions to the \'storage\' folder as writable.';
$_LANG['invalidServerType']                                   = "You need to select the server group from the dropdown menu first.";
$_LANG['createBackup'] = "The process of creating a new backup has started successfully. It may take a few minutes.";
$_LANG['backupsLimitExceded'] = 'The backup size limit has been exceeded. Please delete old backup files.';
$_LANG['backupsDisabled'] = "Unable to create a backup image as the backup functionality is disabled.";

$_LANG["Invalid input in fields 'subnets', 'ip_range'"] = 'Invalid input in the IP Range Address or CIDR field.';
$_LANG["Invalid input in field 'ip_range'"] = "Invalid input in the IP Range Address field.";
$_LANG['Invalid IP range'] = 'Invalid input in the IP Range Address or CIDR field.';
$_LANG['Name is already used'] = "This name is already in use.";
$_LANG['SSH key name is already used'] = "This SSH key name is already in use.";



// ---------------------------------------------------- Module Configuration  ---------------------------------------------------------
$_LANG['serverAA']['productPage']['connectionProblem'] = "Server connection problem. Please check the configuration and try again.";
$_LANG['serverAA']['productPage']['configurationForm']  = "Configuration";
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[type]']['packageconfigoption[type]']  = 'Type';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[datacenter]']['packageconfigoption[datacenter]']  = 'Data Center';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[image]']['packageconfigoption[image]'] = 'Image';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[location]']['packageconfigoption[location]'] = 'Location';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[volume]']['packageconfigoption[volume]'] = 'Additional Volume Size [GB]';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[backups]']['packageconfigoption[backups]'] = 'Backups';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[userdata]']['packageconfigoption[userdata]'] = 'User Data';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[floatingIpsNumber]']['packageconfigoption[floatingIpsNumber]'] = 'Number of Floating IPs';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[enableBackups]']['packageconfigoption[enableBackups]'] = 'Enable Backups';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaBackups]']['packageconfigoption[clientAreaBackups]'] = 'Backups';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaGraphs]']['packageconfigoption[clientAreaGraphs]'] = 'Graphs';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaGraphs]']['clientAreaGraphsDescription'] = 'Enable to grant clients the option to access the "Graphs" section in the client area.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaTasksHistory]']['packageconfigoption[clientAreaTasksHistory]'] = "Tasks History";
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaTasksHistory]']['clientAreaTasksHistoryDescription'] = "Enable if you want your clients to have access to the 'Tasks History' section in the client area.";
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[filesystemVolume]']['packageconfigoption[filesystemVolume]'] = "Filesystem for Additional Volume Size";
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[filesystemVolume]']['filesystemVolumeDescription'] = "Choose a preferred filesystem for additional volume size.";
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaSoftReboot]']['packageconfigoption[clientAreaSoftReboot]'] = "Soft Reboot";
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaSoftReboot]']['clientAreaSoftRebootDescription'] = "Enable if you want to allow your clients to use the 'Soft Reboot' functionality. Please note that for the server to reboot successfully, the operating system must support ACPI and respond to the request; otherwise, the reboot will not occur.";


$_LANG['serverAA']['productPage']['doNotUse'] = 'Do Not Use';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[backups]']['backupsDescription'] = 'BackupsDescription';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[location]']['locationDescription']                  = 'Choose a preferred location from the list.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[datacenter]']['datacenterDescription']              = 'Choose a data center region. If you do not select anything in this field, the location will not be considered.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[type]']['typeDescription']                          = 'Choose a type from the available that will be used on the server.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[image]']['imageDescription']                        = 'Select an image of the system that will be installed on the server.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[floatingIpsNumber]']['floatingIpsNumberDescription'] = 'Number of Floating IPs created for your server.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[enableBackups]']['enableBackupsDescription']       = 'Enable creating backups for your server.';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaBackups]']['clientAreaBackupsDescription'] = 'Enable to grant clients the option to access the "Backups" section in the client area.';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaFloatingIPs]']['clientAreaFloatingIPsDescription'] = 'Enable to grant clients the option to access the "Floating IP Addresses" section in the client area.';

$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[backups]']['backupDescription']                    = 'Enables automatic system-level backups.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[volume]']['volumeDescription']                     = 'Allows you to create and attach additional SSD storage volume to your server in the provided size (in GB). If left empty or entered 0, then the volume will not be created or attached.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[userdata]']['userdatadescription']                 = 'Choose the file or Bash script which may be used to configure the server on first boot. The script has to be located in the ".../modules/servers/ HetznerVPS/storage/ userDataFiles/" directory.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[randomDomainPrefix]']['packageconfigoption[randomDomainPrefix]'] = 'Random Domain Prefix';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[randomDomainPrefix]']['randomDomainPrefixDescription'] = 'Enter the domain prefix that will be used when the domain is not provided. Only valid hostname characters are allowed. (a-z, A-Z, 0-9, . and -)';

#---------- ----------#

$_LANG['doNotUse'] = 'Do Not Use';
$_LANG['featuresForm'] = 'Client Area Features';
$_LANG['cronInformation'] = "Cron Commands Information";
$_LANG['connectionProblem'] = "Server connection problem. Please check the configuration and try again.";
$_LANG['configurationForm']  = "Configuration";
$_LANG['configurableOptions'] = 'Configurable Options';
$_LANG['configurableOptionsUpdated'] = 'Configurable options have been updated successfully';
$_LANG['configurableOptionsCreated'] = 'Configurable options have been generated successfully';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[type]']['packageconfigoption[type]']  = 'Type';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[datacenter]']['packageconfigoption[datacenter]']  = 'Data Center';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[image]']['packageconfigoption[image]'] = 'Image';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[location]']['packageconfigoption[location]'] = 'Location';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[volume]']['packageconfigoption[volume]'] = 'Additional Volume Size [GB]';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[backups]']['packageconfigoption[backups]'] = 'Backups';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[userdata]']['packageconfigoption[userdata]'] = 'User Data';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[floatingIpsNumber]']['packageconfigoption[floatingIpsNumber]'] = 'Number of Floating IPv4 Addresses';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[enableBackups]']['packageconfigoption[enableBackups]'] = 'Enable Backups';

$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[backups]']['backupsDescription'] = 'BackupsDescription';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[location]']['locationDescription']                  = 'Choose a preferred location from the list.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[datacenter]']['datacenterDescription']              = 'Choose a data center region. If you do not select anything in this field, the location will not be considered.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[type]']['typeDescription']                          = 'Choose a type from the available that will be used on the server.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[image]']['imageDescription']                        = 'Select an image of the system that will be installed on the server.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[floatingIpsNumber]']['floatingIpsNumberDescription'] = 'Number of Floating IPs created for your server.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[enableBackups]']['enableBackupsDescription']       = 'Enable creating backups for your server.';

$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[backups]']['backupDescription']                    = 'Enables automatic system-level backups.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[volume]']['volumeDescription']                     = 'Allows you to create and attach additional SSD storage volume to your server in the provided size (in GB). If left empty or entered 0, then the volume will not be created or attached.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['leftSection']['packageconfigoption[userdata]']['userdatadescription']                 = 'Choose the file or Bash script which may be used to configure the server on first boot. The script has to be located in the ".../modules/servers/ HetznerVPS/storage/ userDataFiles/" directory.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[randomDomainPrefix]']['packageconfigoption[randomDomainPrefix]'] = 'Random Domain Prefix';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[randomDomainPrefix]']['randomDomainPrefixDescription'] = 'Enter the domain prefix that will be used when the domain is not provided. Only valid hostname characters are allowed. (a-z, A-Z, 0-9, . and -)';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[snapshots]']['packageconfigoption[snapshots]'] = 'Snapshots  Limit [GB]'  ;
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[snapshots]']['snapshotsDescription'] = 'Specify snapshots size limit here. Set -1 for unlimited.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallsLimitNumber]']['packageconfigoption[firewallsLimitNumber]'] = "Firewalls Limit";
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallInboundRulesNumber]']['packageconfigoption[firewallInboundRulesNumber]'] = "Inbound Firewall Rules Limit";
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallOutboundRulesNumber]']['packageconfigoption[firewallOutboundRulesNumber]'] = "Outbound Firewall Rules Limit";
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallTotalRulesLimitNumber]']['packageconfigoption[firewallTotalRulesLimitNumber]'] = "Total Limit of Firewall Rules";
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[reverseDnsTemplate]']['packageconfigoption[reverseDnsTemplate'] = 'Reverse DNS Template';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallInboundRulesNumber]']['firewallInboundRulesNumberDescription'] = 'Enable Inbound Firewall Rules Limit';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallOutboundRulesNumber]']['firewallOutboundRulesNumberDescription'] = 'Enable Outbound Firewall Rules Limit';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[reverseDnsTemplate]']['packageconfigoption[reverseDnsTemplate]'] = 'Reverse DNS Template';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[reverseDnsTemplate]']['reverseDnsTemplateDescription'] = '<p style="word-break: break-all;">Enter the reverse DNS template using available variables:<br><br> &bull; {$ipaddress}.yourdomain.com e.g.: 110.234.52.124.yourdomain.com <br> &bull; {$ipaddressdash}.yourdomain.com e.g.: 110-234-52-124.yourdomain.com <br> &bull; {$ipaddresspart[X]} - where X is the index of IP\'s part (begin from 0), e.g.: {$ipaddresspart[1]}-{$ipaddresspart[2]}.yourdomain.com will generate 234-52.yourdomain.com <br> &bull; If you want to use default reverse DNS leave this field empty</p>';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaBackups]']['packageconfigoption[clientAreaBackups]'] = 'Backups';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaGraphs]']['packageconfigoption[clientAreaGraphs]'] = 'Graphs';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaGraphs]']['clientAreaGraphsDescription'] = 'Enable to grant clients the option to access the "Graphs" section in the client area.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaBackups]']['clientAreaBackupsDescription'] = 'Enable to grant clients the option to access the "Backups" area.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaFloatingIPs]']['packageconfigoption[clientAreaFloatingIPs]']       =  'Floating IP Addresses';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaFloatingIPs]']['clientAreaFloatingIPsDescription'] = 'Enable to grant clients the option to access the "Floating IP Addresses" in the client area.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaRebuild]']['packageconfigoption[clientAreaRebuild]'] = 'Rebuild';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaConsole]']['packageconfigoption[clientAreaConsole]'] = 'Console';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaRebuild]']['clientAreaRebuildDescription'] = 'Enable to grant clients the option to rebuild the virtual machine.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaConsole]']['clientAreaConsoleDescription'] = 'Enable to grant clients the option to open console for the virtual machine.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaAvailableImages][]']['packageconfigoption[clientAreaAvailableImages][]'] = 'Available Images To Rebuild';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaAvailableImages][]']['clientAreaAvailableImagesDescription'] = 'Select OS images from available to allow clients to use when rebuilding a VM. Please note that if you leave this field empty, then all available OS images will be displayed in the client area to rebuild.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaSnapshots]']['packageconfigoption[clientAreaSnapshots]'] = 'Snapshots';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaSnapshots]']['clientAreaSnapshotsDescription'] = 'Enable to grant clients the option to create snapshots.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaReverseDNS]']['packageconfigoption[clientAreaReverseDNS]']       = 'Reverse DNS';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaReverseDNS]']['clientAreaReverseDNSDescription']       = 'Enable if you want clients to access the "Reverse DNS" option.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaNetworkManagement]']['packageconfigoption[clientAreaNetworkManagement]'] = 'Networks';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaNetworkManagement]']['clientAreaNetworkManagementDescription'] = 'Enable if you want your clients to have access to the "Networks" section in the client area.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaBackups]']['packageconfigoption[clientAreaBackups]'] = 'Backups';

$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaRescueMode]']['packageconfigoption[clientAreaRescueMode]'] = "Rescue Mode";
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaRescueMode]']['clientAreaRescueModeDescription'] = "Enable if you want to allow your clients to activate the 'Rescue Mode' functionality. In case a server cannot boot independently, users can utilize this feature to access the server's disks.";


$_LANG['serverAA']['product']['mainContainer']['configurableOptions']['button']['createCOBaseModalButton'] = 'Create Configurable Options';
$_LANG['serverAA']['product']['mainContainer']['configurableOptions']['doNotUse'] = 'Do not use';

$_LANG['serverAA']['product']['createCOConfirmModal']['modal']['createCOConfirmModal'] = 'Create Configurable Options ';
$_LANG['serverAA']['product']['createCOConfirmModal']['baseAcceptButton']['title']     = 'Confirm';
$_LANG['serverAA']['product']['createCOConfirmModal']['baseCancelButton']['title']     = 'Cancel';

$_LANG['serverAA']['product']['configurableOptionExsits'] = "Configurable options have already been created";

$_LANG['serverAA']['product']['mainContainer']['dataTable']['serverinformationTable']                  = "Server Information";

$_LANG['serverAA']['product']['powerOnConfirmModal']['modal']['powerOnConfirmModal']                   = 'Power On';
$_LANG['serverAA']['product']['powerOnConfirmModal']['powerOnActionForm']['conforimPowerOn']           = 'Are you sure that you want to power on this virtual machine?';
$_LANG['serverAA']['product']['powerOnConfirmModal']['baseAcceptButton']['title']                      = 'Confirm';
$_LANG['serverAA']['product']['powerOnConfirmModal']['baseCancelButton']['title']                      = 'Cancel';

$_LANG['serverAA']['product']['powerOffConfirmModal']['modal']['powerOffConfirmModal']                 = 'Power Off';
$_LANG['serverAA']['product']['powerOffConfirmModal']['powerOffActionForm']['confirmPowerOff']         = 'Are you sure that you want to power off this virtual machine?';
$_LANG['serverAA']['product']['powerOffConfirmModal']['baseAcceptButton']['title']                     = 'Confirm';
$_LANG['serverAA']['product']['powerOffConfirmModal']['baseCancelButton']['title']                     = 'Cancel';

$_LANG['serverAA']['product']['shutdownConfirmModal']['modal']['shutdownConfirmModal']                 = 'Shut Down';
$_LANG['serverAA']['product']['shutdownConfirmModal']['shutdownActionForm']['confirmShutodown']        = 'Are you sure that you want to shut down this virtual machine?';
$_LANG['serverAA']['product']['shutdownConfirmModal']['baseAcceptButton']['title']                     = 'Confirm';
$_LANG['serverAA']['product']['shutdownConfirmModal']['baseCancelButton']['title']                     = 'Cancel';

$_LANG['serverAA']['product']['resetConfirmModal']['modal']['resetConfirmModal']                     = 'Reboot';
$_LANG['serverAA']['product']['resetConfirmModal']['resetActionForm']['conforimReboot']              = 'Are you sure that you want to reset this virtual machine?';
$_LANG['serverAA']['product']['resetConfirmModal']['baseAcceptButton']['title']                       = 'Confirm';
$_LANG['serverAA']['product']['resetConfirmModal']['baseCancelButton']['title']                       = 'Cancel';

$_LANG['serverAA']['product']['passwordResetModal']['modal']['passwordResetModal']                     = 'Reset Password';
$_LANG['serverAA']['product']['passwordResetModal']['passwrodResetActionForm']['confirmResetPassword'] = 'Are you sure that you want to reset the password?';
$_LANG['serverAA']['product']['passwordResetModal']['baseAcceptButton']['title']                       = 'Confirm';
$_LANG['serverAA']['product']['passwordResetModal']['baseCancelButton']['title']                       = 'Cancel';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaIsos]']['packageconfigoption[clientAreaIsos]'] = 'ISO Images';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaIsos]']['clientAreaIsosDescription'] = 'Enable to grant clients the option to mount ISO images to a virtual machine.';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaFirewalls]']['packageconfigoption[clientAreaFirewalls]'] = "Firewalls";
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaFirewalls]']['clientAreaFirewallsDescription'] = "Toggle to turn on firewall options on a virtual machine";
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaAvailableIsos][]']['packageconfigoption[clientAreaAvailableIsos][]'] = 'Available ISO Images';
$_LANG['serverAA']['product']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaAvailableIsos][]']['clientAreaAvailableIsosDescription'] = 'Select ISO images from available to allow clients to use when mounting ISO images to a VM. Please note that if you leave this field empty, then all available ISO Images will be displayed in the client area.';

$_LANG['serverAA']['product']['mainContainer']['backupsTable']['backupsTable']                         = "Backups";
$_LANG['serverAA']['product']['mainContainer']['backupsTable']['table']['description']                 = "Description";
$_LANG['serverAA']['product']['mainContainer']['backupsTable']['table']['created']                     = "Created";
$_LANG['serverAA']['product']['mainContainer']['backupsTable']['table']['imageSize']                   = "Image size";
$_LANG['serverAA']['product']['mainContainer']['backupsTable']['table']['status']                      = "Status";
$_LANG['serverAA']['product']['mainContainer']['backupsTable']['restoreButton']['button']['restoreButton'] = 'Restore';

$_LANG['serverAA']['adminServicesTabFields']['restoreModal']['modal']['restoreModal']                              = 'Restore Backup';
$_LANG['serverAA']['adminServicesTabFields']['restoreModal']['restoreForm']['restoreConfirm']                      = 'Are you sure that you want to restore this backup? All previous data on the disk will be lost';
$_LANG['serverAA']['adminServicesTabFields']['restoreModal']['baseAcceptButton']['title']                          = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['restoreModal']['baseCancelButton']['title']                          = 'Cancel';

$_LANG['serverAA']['adminServicesTabFields']['floatingIPsEditModal']['modal']['floatingIPsEditModal'] = 'Edit Floating IP';
$_LANG['serverAA']['adminServicesTabFields']['floatingIPsEditModal']['floatingIPsEditForm']['dns']['dns'] = 'Reverse DNS';
$_LANG['serverAA']['adminServicesTabFields']['floatingIPsEditModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['floatingIPsEditModal']['baseCancelButton']['title'] = 'Cancel';

$_LANG['serverAA']['adminServicesTabFields']['deleteModal']['deleteForm']['deleteConfirm']                      = 'Are you sure that you want to delete this backup?';

$_LANG['serverAA']['product']['no'] = "No";
$_LANG['serverAA']['product']['yes'] = "Yes";
#---------- ----------#


$_LANG['auto']                                                                                                  = "Auto";

$_LANG['serverAA']['productPage']['configurableOptions']                                                       = 'Configurable Options';
$_LANG['serverAA']['productPage']['mainContainer']['configurableOptions']['button']['createCOBaseModalButton'] = 'Create Configurable Options';

$_LANG['serverAA']['productPage']['createCOConfirmModal']['modal']['createCOConfirmModal'] = 'Create Configurable Options ';
$_LANG['serverAA']['productPage']['createCOConfirmModal']['baseAcceptButton']['title']     = 'Confirm';
$_LANG['serverAA']['productPage']['createCOConfirmModal']['baseCancelButton']['title']     = 'Cancel';

$_LANG['configurableOptionsCreate']                           = "Configurable options have been created successfully";
$_LANG['configurableOptionsUpdate']                           = "Configurable options have been updated successfully";
$_LANG['serverAA']['productPage']['configurableOptionExsits'] = "Configurable options have already been created";

$_LANG['serverAA']['productPage']['mainContainer']['configurableOptions']['doNotUse'] = 'Do not use';

$_LANG['serverAA']['product']['featuresForm'] = 'Client Area Features';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaRebuild]']['packageconfigoption[clientAreaRebuild]'] = 'Rebuild';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaConsole]']['packageconfigoption[clientAreaConsole]'] = 'Console';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaRebuild]']['clientAreaRebuildDescription'] = 'Enable to grant clients the option to rebuild the virtual machine.';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaConsole]']['clientAreaConsoleDescription'] = 'Enable to grant clients the option to open console for the virtual machine.';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaAvailableImages][]']['packageconfigoption[clientAreaAvailableImages][]'] = 'Available Images To Rebuild';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaAvailableImages][]']['clientAreaAvailableImagesDescription'] = 'Select OS images from available to allow clients to use when rebuilding a VM. Please note that if you leave this field empty, then all available OS images will be displayed in the client area to rebuild.';
// ---------------------------------------------------- Admin Area  ---------------------------------------------------------
$_LANG['volumeMustBeHigherThanTen'] = "Additional volume size must be higher than 10 GB";
$_LANG['cannotCreateVolume']        = "Cannot create the volume, probably the volume with the same name already exists. Please change the hostname and try again.";
$_LANG['cannotCreateKey']           = "Cannot create the new SSH Key, probably the key with the same name already exists. Please change the hostname and try again.";

$_LANG['serverAA']['productPage']['mainContainer']['dataTable']['serverinformationTable']                               = "Server Information";

$_LANG['serverAA']['product']['mainContainer']['optionsWidget']['optionsWidgetTitle']                                   = 'Configurable Options';
$_LANG['serverAA']['product']['mainContainer']['optionsWidget']['addOptionsButton']['button']['addOptionButtonsTitle']  = 'Create Configurable Options';
$_LANG['serverAA']['configOptions']['createCOConfirmModal']['modal']['createCOConfirmModal']                            = 'Create Configurable Option';
$_LANG['serverAA']['configOptions']['createCOConfirmModal']['createConfigurableAction']['configurableOptionsNameInfo']  = 'Below you can choose which configurable options will be generated for this product. Please note that these options are divided into two parts separated by a | sign, where the part on the left indicates the sent variable and the part on the right the friendly name displayed to customers. After generating these options you can edit the friendly part on the right, but not the variable part on the left. More information about configurable options and their editing can be found :configurableOptionsNameUrl:.';
$_LANG['serverAA']['configOptions']['createCOConfirmModal']['baseAcceptButton']['title']                                = 'Confirm';
$_LANG['serverAA']['configOptions']['createCOConfirmModal']['baseCancelButton']['title']                                = 'Cancel';

$_LANG['serverAA']['configOptions']['addOptionsModal']['modal']['addOptionsModalTitle']                                 = 'Create Configurable Option';
$_LANG['serverAA']['configOptions']['addOptionsModal']['addOptionsForm']['configurableOptionsNameInfo']                 = 'Below you can choose which configurable options will be generated for this product. Please note that these options are divided into two parts separated by a | sign, where the part on the left indicates the sent variable and the part on the right the friendly name displayed to customers. After generating these options you can edit the friendly part on the right, but not the variable part on the left. More information about configurable options and their editing can be found :configurableOptionsNameUrl:.';
$_LANG['serverAA']['configOptions']['addOptionsModal']['baseAcceptButton']['title']                                     = 'Confirm';
$_LANG['serverAA']['configOptions']['addOptionsModal']['baseCancelButton']['title']                                     = 'Cancel';

//--
$_LANG['serverAA']['adminServicesTabFields']['powerOnConfirm']['modal']['powerOnConfirm']                               = 'Power On';
$_LANG['serverAA']['adminServicesTabFields']['powerOnConfirm']['powerOnActionForm']['confirmPowerOn']                   = 'Are you sure that you want to power on this virtual machine?';
$_LANG['serverAA']['adminServicesTabFields']['powerOnConfirm']['baseAcceptButton']['title']                             = 'Power On';
$_LANG['serverAA']['adminServicesTabFields']['powerOnConfirm']['baseCancelButton']['title']                             = 'Cancel';

$_LANG['serverAA']['adminServicesTabFields']['powerOffConfirmModal']['modal']['powerOffConfirmModal']                   = 'Power Off';
$_LANG['serverAA']['adminServicesTabFields']['powerOffConfirmModal']['powerOffActionForm']['confirmPowerOff']           = 'Are you sure that you want to power off this virtual machine?';
$_LANG['serverAA']['adminServicesTabFields']['powerOffConfirmModal']['baseAcceptButton']['title']                       = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['powerOffConfirmModal']['baseCancelButton']['title']                       = 'Cancel';

$_LANG['serverAA']['adminServicesTabFields']['shutdownConfirmModal']['modal']['shutdownConfirmModal']                   = 'Shut Down';
$_LANG['serverAA']['adminServicesTabFields']['shutdownConfirmModal']['shutdownActionForm']['confirmShutodown']          = 'Are you sure that you want to shut down this virtual machine?';
$_LANG['serverAA']['adminServicesTabFields']['shutdownConfirmModal']['baseAcceptButton']['title']                       = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['shutdownConfirmModal']['baseCancelButton']['title']                       = 'Cancel';

$_LANG['serverAA']['adminServicesTabFields']['resetConfirmModal']['modal']['resetConfirmModal']                       = 'Reset Virtual Machine';
$_LANG['serverAA']['adminServicesTabFields']['resetConfirmModal']['resetActionForm']['confirmReset']                 = 'Are you sure that you want to reset this virtual machine?';
$_LANG['serverAA']['adminServicesTabFields']['resetConfirmModal']['baseAcceptButton']['title']                         = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['resetConfirmModal']['baseCancelButton']['title']                         = 'Cancel';

$_LANG['serverAA']['adminServicesTabFields']['passwordResetModal']['modal']['passwordResetModal']                       = 'Reset Password';
$_LANG['serverAA']['adminServicesTabFields']['passwordResetModal']['passwrodResetActionForm']['confirmResetPassword']   = 'Are you sure that you want to reset the password?';
$_LANG['serverAA']['adminServicesTabFields']['passwordResetModal']['baseAcceptButton']['title']                         = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['passwordResetModal']['baseCancelButton']['title']                         = 'Cancel';

$_LANG['serverAA']['home']['mainContainer']['serverinformationTable']['serverinformationTable']                         = 'Server Information';

$_LANG['serverAA']['home']['mainContainer']['rebuildTable']['rebuildTable'] = 'Rebuild Virtual Machine';
$_LANG['serverAA']['home']['mainContainer']['rebuildTable']['table']['distribution'] = 'Distribution';
$_LANG['serverAA']['home']['mainContainer']['rebuildTable']['table']['name'] = 'Name';
$_LANG['serverAA']['home']['mainContainer']['rebuildTable']['confirmRebuildButton']['button']['confirmButton'] = 'Rebuild';

$_LANG['serverAA']['home']['mainContainer']['isosTable']['isosTable'] = 'ISO Images';
$_LANG['serverAA']['home']['mainContainer']['isosTable']['table']['description'] = 'Description';
$_LANG['serverAA']['home']['mainContainer']['isosTable']['mountButton']['button']['mountButton'] = 'Mount ISO Image';
$_LANG['serverAA']['home']['mainContainer']['isosTable']['unmountButton']['button']['unmountButton'] = 'Unmount ISO Image';

$_LANG['serverAA']['home']['mainContainer']['floatingIPsTable']['floatingIPsTable'] = 'Floating IP Addresses';
$_LANG['serverAA']['home']['mainContainer']['floatingIPsTable']['table']['ip'] = 'Ip';
$_LANG['serverAA']['home']['mainContainer']['floatingIPsTable']['table']['dns'] = 'Dns';
$_LANG['serverAA']['home']['mainContainer']['floatingIPsTable']['floatingIPsEditButton']['button']['floatingIPsEditButton'] = 'Edit';

$_LANG['serverAA']['home']['mainContainer']['backupsTable']['backupsTable'] = 'Backups';
$_LANG['serverAA']['home']['mainContainer']['backupsTable']['table']['status'] = 'Status';
$_LANG['serverAA']['home']['mainContainer']['backupsTable']['table']['created'] = 'Created';
$_LANG['serverAA']['home']['mainContainer']['backupsTable']['table']['imageSize'] = 'Image Size';
$_LANG['serverAA']['home']['mainContainer']['backupsTable']['table']['description'] = 'Description';
$_LANG['serverAA']['home']['mainContainer']['backupsTable']['restoreButton']['button']['restoreButton'] = 'Restore';
$_LANG['serverAA']['home']['mainContainer']['backupsTable']['deleteButton']['button']['deleteButton'] = 'Delete Backup';

$_LANG['serverAA']['home']['mainContainer']['serverinformationTable']['table']['name'] = 'Name';
$_LANG['serverAA']['home']['mainContainer']['serverinformationTable']['table']['value'] = 'Value';

$_LANG['serverAA']['adminServicesTabFields']['confirmRebuildModal']['modal']['confirmRebuildModal'] = 'Rebuild Virtual Machine';
$_LANG['serverAA']['adminServicesTabFields']['confirmRebuildModal']['rebuildConfirmForm']['rebuildConfirm'] = 'Are you sure that you want to rebuild this virtual machine?';
$_LANG['serverAA']['adminServicesTabFields']['confirmRebuildModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['confirmRebuildModal']['baseCancelButton']['title'] = 'Cancel';

// ---------------------------------------------------- Client Area  ---------------------------------------------------------
$_LANG['serverCA']['home']['manageHeader']   = "Service Actions";
$_LANG['serverCA']['home']['pagesHeader']    = "Service Management";
$_LANG['serverCA']['iconTitle']['rebuild']   = "Rebuild";
$_LANG['serverCA']['iconTitle']['console']   = "Console";
$_LANG['serverCA']['iconTitle']['reverseDNS']   = "Reverse DNS";
$_LANG['serverCA']['iconTitle']['floatingIPs']  = "Floating IP Addresses";
$_LANG['serverCA']['iconTitle']['firewalls']    = "Firewalls";
$_LANG['serverCA']['iconTitle']['firewall']     = "Firewall";
$_LANG['serverCA']['iconTitle']['networkManagement'] = "Networks";
$_LANG['serverCA']['iconTitle']['tasksHistory'] = 'Tasks History';

$_LANG['wrongConfirmText']         = "Wrong confirmation text";
$_LANG['rebuildFromImageStart']    = "The process of rebuilding a virtual machine has been started successfully. It may take a few minutes.";
$_LANG['softRebootStarted']            = "The virtual machine soft reboot has been successfully completed";
$_LANG['resetStarted'] = "The virtual machine has been reset successfully";
$_LANG['shutdownStarted']          = "The virtual machine has been shut down successfully";
$_LANG['powerOnStarted']           = "The virtual machine has been powered on successfully";
$_LANG['powerOffStarted']          = "The virtual machine has been powered off successfully";
$_LANG['passwordResetStarted']     = "The password has been reset successfully. The new password is available in a password line in the Server Information table.";
$_LANG['editReverseDNSSuccess']    = "The selected reverse DNS has been edited successfully";
$_LANG['addReverseDNSSuccess']     = "The reverse DNS has been created successfully";

$_LANG['addonCA']['errorPage']['error']             = 'Error';
$_LANG['addonCA']['errorPage']['title']             = 'Unexpected Error';
$_LANG['addonCA']['errorPage']['description']       = 'Something went wrong, please contact your administrator';
$_LANG['addonCA']['errorPage']['errorCode']         = 'Error Code';
$_LANG['addonCA']['errorPage']['errorToken']        = 'Error Token';
$_LANG['addonCA']['errorPage']['errorTime']         = 'Error Time';
$_LANG['addonCA']['errorPage']['errorMessage']      = 'Error Message';
$_LANG['addonCA']['errorPage']['button']            = 'Error Button';
$_LANG['errorCodeMessage']                          = 'Error Code Message';
// ---------------------------------------------------- Menu ---------------------------------------------------------
$_LANG['serverCA']['sidebarMenu']['mg-provisioning-module'] = "Manage Server";
$_LANG['serverCA']['sidebarMenu']['rebuild']                = "Rebuild";
$_LANG['serverCA']['sidebarMenu']['console']                = "Console";
$_LANG['serverCA']['sidebarMenu']['graphs']                 = 'Graphs';
$_LANG['serverCA']['sidebarMenu']['networkManagement']      = 'Networks';

$_LANG['managementHetznerVps']                              = 'Additional Tools';
$_LANG['rebuild']                                           = 'Rebuild';
$_LANG['console']                                           = 'Console';
$_LANG['isos']                                              = 'ISO Images';
$_LANG['snapshots']                                         = 'Snapshots';
$_LANG['reverseDNS']                                        = 'Reverse DNS';
$_LANG['floatingIPs']                                       = 'Floating IP Addresses';
$_LANG['backups']                                           = 'Backups';
$_LANG['graphs']                                            = 'Graphs';
$_LANG['firewalls']                                         = 'Firewalls';
$_LANG['firewall']                                          = 'Firewall';
$_LANG['networkManagement']                                 = 'Networks';


// ---------------------------------------------------- Service Information  ---------------------------------------------------------
$_LANG['serverCA']['home']['mainContainer']['dataTable']['serverinformationTable'] = "Server Information";

$_LANG['serviceInformation']['tableField']['status']         = "Status";
$_LANG['serviceInformation']['tableField']['hostname']           = "Hostname";
$_LANG['serviceInformation']['tableField']['memory']         = "Memory";
$_LANG['serviceInformation']['tableField']['disk']           = "Disk Size";
$_LANG['serviceInformation']['tableField']['cpu']            = "CPU Number";
$_LANG['serviceInformation']['tableField']['image']          = "Image";
$_LANG['serviceInformation']['tableField']['backups']        = "Backups";
$_LANG['serviceInformation']['tableField']['volumes']        = "Additional Volume Size";
$_LANG['serviceInformation']['tableField']['ipv4']	         = "IPv4";
$_LANG['serviceInformation']['tableField']['ipv6']	         = "IPv6";
$_LANG['serviceInformation']['tableField']['datacenter']     = "Data Center";
$_LANG['serviceInformation']['tableField']['location']       = "Location";
$_LANG['serviceInformation']['tableField']['password']       = "Password";
$_LANG['serviceInformation']['tableField']['networks']       = "Networks";
$_LANG['serviceInformation']['tableField']['bwusage']        = "Outgoing Bandwidth Usage";

$_LANG['serverCA']['home']['selectFieldsModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverCA']['home']['selectFieldsModal']['baseCancelButton']['title'] = 'Cancel';


$_LANG['serverCA']['home']['no'] = "No";
$_LANG['serverCA']['home']['no'] = "Yes";

$_LANG['serverCA']['home']['mainContainer']['serverinformationTable']['serverinformationTable'] = 'Server Information';
$_LANG['serverCA']['home']['mainContainer']['serverinformationTable']['table']['name'] = '';
$_LANG['serverCA']['home']['mainContainer']['serverinformationTable']['table']['value'] = '';

// ---------------------------------------------------- Service Actions  ---------------------------------------------------------
$_LANG['buttons']['actions']['powerOnButton']       = 'Power On Machine';
$_LANG['buttons']['actions']['powerOffButton']      = 'Power Off Machine';
$_LANG['buttons']['actions']['shutdownButton']      = 'Shut Down Machine';
$_LANG['buttons']['actions']['resetButton']        = 'Reset Machine';
$_LANG['buttons']['actions']['passwordResetButton'] = 'Reset Password';
$_LANG['buttons']['actions']['enableRescueModeButton'] = "Rescue Mode";
$_LANG['buttons']['actions']['softRebootButton'] = "Soft Reboot Machine";

$_LANG['serverCA']['home']['powerOnConfirm']['modal']['powerOnConfirm']                 = 'Power On';
$_LANG['serverCA']['home']['powerOnConfirm']['powerOnActionForm']['confirmPowerOn']     = 'Are you sure that you want to power on this virtual machine?';
$_LANG['serverCA']['home']['powerOnConfirm']['baseAcceptButton']['title']               = 'Confirm';
$_LANG['serverCA']['home']['powerOnConfirm']['baseCancelButton']['title']               = 'Cancel';


$_LANG['serverCA']['home']['powerOffConfirmModal']['modal']['powerOffConfirmModal']         = 'Power Off';
$_LANG['serverCA']['home']['powerOffConfirmModal']['powerOffActionForm']['confirmPowerOff'] = 'Are you sure that you want to power off this virtual machine?';
$_LANG['serverCA']['home']['powerOffConfirmModal']['baseAcceptButton']['title']             = 'Confirm';
$_LANG['serverCA']['home']['powerOffConfirmModal']['baseCancelButton']['title']             = 'Cancel';



$_LANG['serverCA']['home']['passwordResetModal']['modal']['passwordResetModal']                     = 'Reset Password';
$_LANG['serverCA']['home']['passwordResetModal']['passwrodResetActionForm']['confirmResetPassword'] = 'Are you sure that you want to reset the password?';
$_LANG['serverCA']['home']['passwordResetModal']['baseAcceptButton']['title']                       = 'Confirm';
$_LANG['serverCA']['home']['passwordResetModal']['baseCancelButton']['title']                       = 'Cancel';


$_LANG['serverCA']['home']['resetConfirmModal']['modal']['resetConfirmModal']        = 'Reset Virtual Machine';
$_LANG['serverCA']['home']['resetConfirmModal']['resetActionForm']['confirmReset']  = 'Are you sure that you want to reset this virtual machine?';
$_LANG['serverCA']['home']['resetConfirmModal']['baseAcceptButton']['title']          = 'Confirm';
$_LANG['serverCA']['home']['resetConfirmModal']['baseCancelButton']['title']          = 'Cancel';


$_LANG['serverCA']['home']['shutdownConfirmModal']['modal']['shutdownConfirmModal']          = 'Shut Down';
$_LANG['serverCA']['home']['shutdownConfirmModal']['shutdownActionForm']['confirmShutodown'] = 'Are you sure that you want to shut down this virtual machine?';
$_LANG['serverCA']['home']['shutdownConfirmModal']['baseAcceptButton']['title']              = 'Confirm';
$_LANG['serverCA']['home']['shutdownConfirmModal']['baseCancelButton']['title']              = 'Cancel';

$_LANG['serverCA']['home']['softRebootModal']['modal']['softRebootModal'] = "Virtual Machine Soft Reboot";
$_LANG['serverCA']['home']['softRebootModal']['softRebootActionForm']['confirmSoftReboot'] = 'Are you sure that you want to perform a soft reboot on this virtual machine?';
$_LANG['serverCA']['home']['softRebootModal']['baseAcceptButton']['title'] = "Confirm";
$_LANG['serverCA']['home']['softRebootModal']['baseCancelButton']['title'] = "Cancel";

$_LANG['serverAA']['adminServicesTabFields']['softRebootModal']['modal']['softRebootModal'] = 'Virtual Machine Soft Reboot';
$_LANG['serverAA']['adminServicesTabFields']['softRebootModal']['softRebootActionForm']['confirmSoftReboot'] = 'Are you sure that you want to perform a soft reboot this virtual machine?';
$_LANG['serverAA']['adminServicesTabFields']['softRebootModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['softRebootModal']['baseCancelButton']['title'] = 'Cancel';

$_LANG['serverCA']['iconTitle']['powerOnButton']       = "Power On";
$_LANG['serverCA']['iconTitle']['powerOffButton']      = "Power Off";
$_LANG['serverCA']['iconTitle']['shutdownButton']      = "Shut Down";
$_LANG['serverCA']['iconTitle']['resetButton']        = "Reset";
$_LANG['serverCA']['iconTitle']['passwordResetButton'] = "Reset Password";
$_LANG['serverCA']['iconTitle']['enableRescueModeButton'] = "Rescue Mode";
$_LANG['serverCA']['iconTitle']['softRebootButton'] = "Soft Reboot";

$_LANG['serverCA']['home']['enableRescueModeConfirm']['modal']['enableRescueModeConfirm'] = "Rescue Mode on Server";
$_LANG['serverCA']['home']['enableRescueModeConfirm']['enableRescueModeAction']['enableRescueConfirm'] = "The rescue system is a network based environment and can be used to fix issues preventing a regular boot. It is also useful to install custom Linux distributions that are not in the offer. You are able to mount the servers hard drive inside the rescue system. After enabling the rescue system you need to reboot the server in the next 60 minutes to activate it. After another reboot your server will boot from its local disk again.";
$_LANG['serverCA']['home']['enableRescueModeConfirm']['enableRescueModeAction']['public key']['public key'] = "Public SSH Key";
$_LANG['serverCA']['home']['enableRescueModeConfirm']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverCA']['home']['enableRescueModeConfirm']['baseCancelButton']['title'] = 'Cancel';





// ---------------------------------------------------- Client Area Rebuild ---------------------------------------------------------

$_LANG['serverCA']['rebuild']['mainContainer']['rebuildTable']['rebuildTable']          = "Rebuild Virtual Machine";
$_LANG['serverCA']['rebuild']['mainContainer']['rebuildTable']['table']['id']           = "ID";
$_LANG['serverCA']['rebuild']['mainContainer']['rebuildTable']['table']['name']         = "Name";
$_LANG['serverCA']['rebuild']['mainContainer']['rebuildTable']['table']['distribution'] = "Distribution";

$_LANG['serverCA']['rebuild']['mainContainer']['rebuildTable']['confirmRebuildButton']['button']['confirmButton'] = "Rebuild";

$_LANG['serverCA']['rebuild']['confirmRebuildModal']['modal']['confirmRebuildModal']         = 'Rebuild Virtual Machine';
$_LANG['serverCA']['rebuild']['confirmRebuildModal']['rebuildConfirmForm']['rebuildConfirm'] = 'Rebuilding your server will power it down and overwrite its disk with the image you select. All previous data on the disk will be lost!<br /><br />Are you sure that you want to rebuild this virtual machine?';
$_LANG['serverCA']['rebuild']['confirmRebuildModal']['baseAcceptButton']['title']            = 'Confirm';
$_LANG['serverCA']['rebuild']['confirmRebuildModal']['baseCancelButton']['title']            = 'Cancel';


//-------------------------------------------------- Client Area Backups -------------------------------------------------------------
$_LANG['serverCA']['sidebarMenu']['backups']                                                                                                     = "Backups";

$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['backupsTable']                                                                   = "Backups";
$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['table']['description']                                                           = "Description";
$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['table']['created']                                                               = "Created";
$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['table']['imageSize']                                                             = "Image Size";
$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['table']['status']                                                                = "Status";
$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['restoreButton']['button']['restoreButton']                                       = "Restore";

$_LANG['serverCA']['backups']['restoreModal']['modal']['restoreModal']                                                                           = 'Restore Backup';
$_LANG['serverCA']['backups']['restoreModal']['restoreForm']['restoreConfirm']                                                                   = 'Are you sure that you want to restore this backup? All previous data on the disk will be lost';
$_LANG['serverCA']['backups']['restoreModal']['baseAcceptButton']['title']                                                                       = 'Confirm';
$_LANG['serverCA']['backups']['restoreModal']['baseCancelButton']['title']                                                                       = 'Cancel';
$_LANG['serverCA']['backups']['cronInformation']                                                                                                 = '';
$_LANG['serverCA']['backups']['mainContainer']['cronInformation']['cronTaskDescription']['desc']                                                 = 'Backups are everyday copies of the server’s disk. When the feature is enabled, the system will choose the time frame in which backups will be performed. Backups are assigned to a particular server and will be removed once this server is deleted. Please note that there are seven slots for backups within one server. When there are no empty slots and another backup is being created, then the oldest backup is removed.';
$_LANG['serverCA']['iconTitle']['backups']                                                                                                       = 'Backups';

$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['deleteButton']['button']['deleteButton']                                         = "Delete";
$_LANG['serverCA']['backups']['deleteModal']['modal']['deleteModal']                                                                             = 'Delete Backup';
$_LANG['serverCA']['backups']['deleteModal']['deleteForm']['deleteConfirm']                                                                      = 'Are you sure that you want to delete this backup?';
$_LANG['serverCA']['backups']['deleteModal']['baseAcceptButton']['title']                                                                        = 'Delete';
$_LANG['serverCA']['backups']['deleteModal']['baseCancelButton']['title']                                                                        = 'Cancel';

$_LANG['serverCA']['backups']['deleteMassModal']['modal']['deleteMassModal']= 'Delete Backups';
$_LANG['serverCA']['backups']['deleteMassModal']['deleteMassForm']['deleteMassConfirm']= 'Are you sure that you want to delete the selected backups?';
$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['deleteMassButton']['button']['deleteMassButton']= 'Delete';
$_LANG['serverCA']['backups']['deleteMassModal']['baseAcceptButton']['title']= 'Confirm';
$_LANG['serverCA']['backups']['deleteMassModal']['baseCancelButton']['title'] = 'Cancel';

$_LANG['serverAA']['home']['mainContainer']['backupsTable']['deleteMassButton']['button']['deleteMassButton'] = 'Delete';
$_LANG['serverAA']['adminServicesTabFields']['deleteMassModal']['modal']['deleteMassModal'] = 'Delete Backups';
$_LANG['serverAA']['adminServicesTabFields']['deleteMassModal']['deleteMassForm']['deleteMassConfirm'] = 'Are you sure that you want to delete the selected backups?';
$_LANG['serverAA']['adminServicesTabFields']['deleteMassModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['deleteMassModal']['baseCancelButton']['title'] = "Cancel";

$_LANG['serverCA']['backups']['mainContainer']['backupsTable']['createButton']['button']['createButton'] = 'Create Backup';
$_LANG['serverCA']['backups']['createModal']['modal']['createModal'] = 'Create New Backup';
$_LANG['serverCA']['backups']['createModal']['createForm']['createConfirm']= 'Are you sure that you want to create a new backup?<br /><br />';
$_LANG['serverCA']['backups']['createModal']['createForm']['description']['description'] = 'Backup Description';
$_LANG['serverCA']['backups']['createModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverCA']['backups']['createModal']['baseCancelButton']['title'] = 'Cancel';

$_LANG['serverAA']['home']['mainContainer']['backupsTable']['createButton']['button']['createButton'] = 'Create Backup';
$_LANG['serverAA']['adminServicesTabFields']['createModal']['modal']['createModal'] = "Create New Backup";
$_LANG['serverAA']['adminServicesTabFields']['createModal']['createForm']['createConfirm'] = "Are you sure that you want to create a new backup?<br /><br />";
$_LANG['serverAA']['adminServicesTabFields']['createModal']['createForm']['description']['description'] = "Backup Description";
$_LANG['serverAA']['adminServicesTabFields']['createModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['createModal']['baseCancelButton']['title'] = 'Cancel';

$_LANG['restoreBackup']                                                                                                                          = 'The process of restoring backup  :description: has been started successfully. It may take a few minutes.';
$_LANG['errorBackupIsRestoring']                                                                                                                 = "You cannot restore the backup while another one is being restored. The server is locked.";
$_LANG['errorBackupIsCreating']                                                                                                                  = 'The selected backup is being created, please try again later.';
$_LANG['deleteBackup']                                                                                                                           = 'The backup has been deleted successfully';
$_LANG['deleteBackups']                                                                                                                           = 'The selected backups have been deleted successfully';
//-------------------------------------------------- Client Area Floating IPs --------------------------------------------------------
$_LANG['serverCA']['sidebarMenu']['floatingIPs']                                                                                                 = "Floating IP Addresses";

$_LANG['serverCA']['floatingIPs']['mainContainer']['floatingIPsTable']['floatingIPsTable']                                                       = "Floating IP Addresses";
$_LANG['serverCA']['floatingIPs']['mainContainer']['floatingIPsTable']['table']['ip']                                                            = "IP Address";
$_LANG['serverCA']['floatingIPs']['mainContainer']['floatingIPsTable']['table']['dns']                                                           = "Reverse DNS";
$_LANG['serverCA']['floatingIPs']['mainContainer']['floatingIPsTable']['floatingIPsEditButton']['button']['floatingIPsEditButton']               = "Edit Reverse DNS";


$_LANG['serverCA']['floatingIPs']['floatingIPsEditModal']['modal']['floatingIPsEditModal']                                                       = 'Edit Floating IP';
$_LANG['serverCA']['floatingIPs']['floatingIPsEditModal']['floatingIPsEditForm']['dns']['dns']                                                   = 'Reverse DNS';
$_LANG['serverCA']['floatingIPs']['floatingIPsEditModal']['baseAcceptButton']['title']                                                           = 'Save';
$_LANG['serverCA']['floatingIPs']['floatingIPsEditModal']['baseCancelButton']['title']                                                           = 'Cancel';

$_LANG['updateFloatingIP']                                                                                                                       = "The Floating IP :description: has been updated successfully";

$_LANG['serverCA']['floatingIPs']['deleteFloatingIPsModal']['modal']['deleteFloatingIPsModal']                                                   = 'Reset Floating IP';
$_LANG['serverCA']['floatingIPs']['deleteFloatingIPsModal']['deleteFloatingIPsForm']['confirmFloatingIPsDelete']                                 = 'Are you sure that you want to reset this reverse DNS?';
$_LANG['serverCA']['floatingIPs']['deleteFloatingIPsModal']['baseAcceptButton']['title']                                                         = 'Confirm';
$_LANG['serverCA']['floatingIPs']['deleteFloatingIPsModal']['baseCancelButton']['title']                                                         = 'Cancel';

$_LANG['serverAA']['productPage']['mainContainer']['dataTable']['table']['name'] = 'Name';
$_LANG['serverAA']['productPage']['mainContainer']['dataTable']['table']['value'] = 'Value';
$_LANG['serverAA']['productPage']['mainContainer']['floatingIPsTable']['floatingIPsTable'] = 'Floating IP Addreses';
$_LANG['serverAA']['productPage']['mainContainer']['floatingIPsTable']['table']['ip'] = 'IP';
$_LANG['serverAA']['productPage']['mainContainer']['floatingIPsTable']['table']['dns'] = 'REVERSE DNS';
$_LANG['serverAA']['productPage']['mainContainer']['floatingIPsTable']['floatingIPsEditButton']['button']['floatingIPsEditButton'] = 'Edit';
$_LANG['serverAA']['productPage']['mainContainer']['floatingIPsTable']['floatingIPsEditButton']['button']['floatingIPsEditButton'] = 'Edit';
$_LANG['serverAA']['productPage']['floatingIPsEditModal']['modal']['floatingIPsEditModal'] = 'Edit Floating IP';
$_LANG['serverAA']['productPage']['floatingIPsEditModal']['floatingIPsEditForm']['dns']['dns'] = 'Reverse DNS';
$_LANG['serverAA']['productPage']['floatingIPsEditModal']['baseAcceptButton']['title'] = 'Save';
$_LANG['serverAA']['productPage']['floatingIPsEditModal']['baseCancelButton']['title'] = 'Cancel';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaFloatingIPs]']['packageconfigoption[clientAreaFloatingIPs]']       = 'Floating IP Addresses';
//-------------------------------------------------- Client Area Reverse DNS --------------------------------------------------------


$_LANG['serverCA']['sidebarMenu']['reverseDNS']                                                                                                 = "Reverse DNS";

$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['reverseDNSTable']                                                         = "Reverse DNS";
$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['table']['dns']                                                            = "Reverse DNS";
$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['table']['ip']                                                             = "IP";
$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['table']['ipv']                                                            = "IPV";
$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['reverseDNSEditButton']['button']['reverseDNSEditButton']                  = "Edit Reverse DNS";
$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['deleteReverseDNSButton']['button']['deleteReverseDNSButton']              = "Reset Reverse DNS";

$_LANG['serverCA']['reverseDNS']['reverseDNSEditModal']['modal']['reverseDNSEditModal']                                                         = 'Edit Reverse DNS';
$_LANG['serverCA']['reverseDNS']['reverseDNSEditModal']['reverseDNSEditForm']['dns_ptr']['dns_ptr']                                             = 'Reverse DNS';
$_LANG['serverCA']['reverseDNS']['reverseDNSEditModal']['baseAcceptButton']['title']                                                            = 'Save';
$_LANG['serverCA']['reverseDNS']['reverseDNSEditModal']['baseCancelButton']['title']                                                            = 'Cancel';

$_LANG['serverCA']['reverseDNS']['mainContainer']['reverseDNSTable']['addReverseDNSButton']['button']['addReverseDNSButton']                    = 'Create IPv6 Reverse DNS';
$_LANG['serverCA']['reverseDNS']['addReverseDNSModal']['modal']['addReverseDNSModal']                                                           = 'Create IPv6 Reverse DNS';
$_LANG['serverCA']['reverseDNS']['addReverseDNSModal']['reverseDNSAddForm']['ipv6']['ipv6']                                                     = 'IP';
$_LANG['serverCA']['reverseDNS']['addReverseDNSModal']['reverseDNSAddForm']['dns_ptr']['dns_ptr']                                               = 'Reverse DNS';
$_LANG['serverCA']['reverseDNS']['addReverseDNSModal']['baseAcceptButton']['title']                                                             = 'Create';
$_LANG['serverCA']['reverseDNS']['addReverseDNSModal']['baseCancelButton']['title']                                                             = 'Cancel';
$_LANG['ipAlreadyUsed']                                                                                                                         = 'This IPv6 is already used';

$_LANG['serverCA']['reverseDNS']['deleteReverseDNSModal']['modal']['deleteReverseDNSModal']                                                     = 'Reset Reverse DNS';
$_LANG['serverCA']['reverseDNS']['deleteReverseDNSModal']['deleteReverseDNSForm']['confirmReverseDNSDelete']                                    = 'Are you sure that you want to reset this reverse DNS?';
$_LANG['serverCA']['reverseDNS']['deleteReverseDNSModal']['baseAcceptButton']['title']                                                          = 'Confirm';
$_LANG['serverCA']['reverseDNS']['deleteReverseDNSModal']['baseCancelButton']['title']                                                          = 'Cancel';
$_LANG['resetReverseDNSSuccess']                                                                                                                = 'The reverse DNS has been reset successfully';

$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaReverseDNS]']['packageconfigoption[clientAreaReverseDNS]']       = 'Reverse DNS';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['leftSection']['packageconfigoption[clientAreaReverseDNS]']['clientAreaReverseDNSDescription']       = 'Enable if you want clients to access the "Reverse DNS" section.';




// ---------------------------------------------------- Client Area Console ---------------------------------------------------------
$_LANG['serverCA']['console']['mainContainer']['consolePage']['consolePage'] = "Console";


$_LANG['serverAA']['productPage']['cronInformation'] = "Cron Commands Information";

$_LANG['vmIsEmpty'] = "The server ID is empty.";
$_LANG['vmShouldBeRunning'] = "The virtual machine must be running.";

$_LANG['serverCA']['rebuild']['mainContainer']['alertBox']['newVMPassword'] = "Your new, one time password:";


$_LANG['serverAA']['productPage']['mainContainer']['rebuildTable']['rebuildTable']          = "Rebuild Virtual Machine";
$_LANG['serverAA']['productPage']['mainContainer']['rebuildTable']['table']['id']           = "ID";
$_LANG['serverAA']['productPage']['mainContainer']['rebuildTable']['table']['name']         = "Name";
$_LANG['serverAA']['productPage']['mainContainer']['rebuildTable']['table']['distribution'] = "Distribution";

$_LANG['serverAA']['productPage']['mainContainer']['rebuildTable']['confirmRebuildButton']['button']['confirmButton'] = "Rebuild";

$_LANG['serverAA']['productPage']['confirmRebuildModal']['modal']['confirmRebuildModal']         = 'Rebuild Virtual Machine';
$_LANG['serverAA']['productPage']['confirmRebuildModal']['rebuildConfirmForm']['rebuildConfirm'] = 'Rebuilding your server will power it down and overwrite its disk with the image you select. All previous data on the disk will be lost!<br /><br />Are you sure that you want to rebuild this virtual machine?';
$_LANG['serverAA']['productPage']['confirmRebuildModal']['baseAcceptButton']['title']            = 'Confirm';
$_LANG['serverAA']['productPage']['confirmRebuildModal']['baseCancelButton']['title']            = 'Cancel';
$_LANG['serverAA']['productPage']['mainContainer']['alertBox']['newVMPassword'] = "A new, one time password:";

$_LANG['distribution']['centos'] ="CentOS";
$_LANG['distribution']['debian'] = 'Debian';
$_LANG['distribution']['fedora'] = 'Fedora';
$_LANG['distribution']['ubuntu'] = 'Ubuntu';

$_LANG['template']['Ubuntu 16.04'] = 'Ubuntu 16.04';
$_LANG['template']['Ubuntu 18.04'] = 'Ubuntu 18.04';
$_LANG['template']['Ubuntu 20.04'] = 'Ubuntu 20.04';
$_LANG['template']['CentOS 7'] = 'CentOS 7';
$_LANG['template']['CentOS 8'] =  'CentOS 8';
$_LANG['template']['Debian 9'] = 'Debian 9';
$_LANG['template']['Debian 10'] = 'Debian 10';
$_LANG['template']['Fedora 30'] = 'Fedora 30';
$_LANG['template']['Fedora 32'] = 'Fedora 32';

$_LANG['iso']['CentOS-6.10-x86_64-minimal.iso'] = 'CentOS 6.10 x86 64 Minimal';
$_LANG['iso']['Debian 8.10 (amd64/netinstall)'] = 'Debian 8.10 (amd64/netinstall)';
$_LANG['iso']['Windows Server 2016 English'] = 'Windows Server 2016 English';
$_LANG['iso']['Windows Server 2016 German']= 'Windows Server 2016 German';
$_LANG['iso']['Ubuntu 18.04.4 (amd64)'] = 'Ubuntu 18.04.4 (amd64)';
$_LANG['iso']['Ubuntu 20.04.4 Live Server (amd64)'] = 'Ubuntu 20.04.4 Live Server (amd64)';
$_LANG['iso']['AlmaLinux 8.4 (amd64/boot)'] = "AlmaLinux 8.4 (amd64/boot)";
$_LANG['iso']['Alpine Virtual 3.13.1 (amd64)'] = "Alpine Virtual 3.13.1 (amd64)";
$_LANG['iso']['Archlinux 2020.06.01 (amd64)'] = "Archlinux 2020.06.01 (amd64)";
$_LANG['iso']['CentOS 7.9 (amd64/netinstall)'] = "CentOS 7.9 (amd64/netinstall)";
$_LANG['iso']['CentOS 8.2 (amd64/netinstall)'] = "CentOS 8.2 (amd64/netinstall)";
$_LANG['iso']['Clonezilla 2.7.0'] = "Clonezilla 2.7.0";
$_LANG['iso']['Debian 9.13 (amd64/netinstall)'] = "Debian 9.13 (amd64/netinstall)";
$_LANG['iso']['Debian 10.10 (amd64/netinstall)'] = "Debian 10.10 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 11.4 (amd64/netinstall)'] = "FreeBSD 11.4 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 12.1 (amd64/netinstall)'] = "FreeBSD 12.1 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 12.2 (amd64/netinstall)'] = "FreeBSD 12.2 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 13.0 (amd64/netinstall)'] = "FreeBSD 13.0 (amd64/netinstall)";
$_LANG['iso']['FreePBX 2002 (amd64)'] = "FreePBX 2002 (amd64)";
$_LANG['iso']['IPFire 2.23 (amd64)'] = "IPFire 2.23 (amd64)";
$_LANG['iso']['k3OS v0.21.1 (amd64)'] = "k3OS v0.21.1 (amd64)";
$_LANG['iso']['Kali Linux 2020.1b installer (amd64)'] = "Kali Linux 2020.1b installer (amd64)";
$_LANG['iso']['NetBSD 9.1 (amd64)'] = "NetBSD 9.1 (amd64)";
$_LANG['iso']['NixOS 21.05 (amd64/minimal)'] = "NixOS 21.05 (amd64/minimal)";
$_LANG['iso']['OpenBSD 6.9'] = "OpenBSD 6.9";
$_LANG['iso']['openSUSE Leap 15.3'] = "openSUSE Leap 15.3";
$_LANG['iso']['OPNsense 20.7 (amd64)'] = "OPNsense 20.7 (amd64)";
$_LANG['iso']['Oracle Linux 8.4 (amd64/boot)'] = "Oracle Linux 8.4 (amd64/boot)";
$_LANG['iso']['pfSense CE 2.5.0 (amd64)'] = "pfSense CE 2.5.0 (amd64)";
$_LANG['iso']['Proxmox Mail Gateway 6.4 ISO Installer'] = "Proxmox Mail Gateway 6.4 ISO Installer";
$_LANG['iso']['Proxmox Mail Gateway 7.0 ISO Installer'] = "Proxmox Mail Gateway 7.0 ISO Installer";
$_LANG['iso']['Proxmox VE 6.4 ISO Installer'] = "Proxmox VE 6.4 ISO Installer";
$_LANG['iso']['RancherOS 1.5.8'] = "RancherOS 1.5.8";
$_LANG['iso']['Rocky Linux 8.4 (amd64/boot)'] = "Rocky Linux 8.4 (amd64/boot)";
$_LANG['iso']['Securepoint UTM Interactive Installer'] = "Securepoint UTM Interactive Installer";
$_LANG['iso']['Slackware 14.2'] = "Slackware 14.2";
$_LANG['iso']['SystemRescueCD (2018-04-02)'] = "SystemRescueCD (2018-04-02)";
$_LANG['iso']['Ubuntu 20.04 Live Server (amd64)'] = "Ubuntu 20.04 Live Server (amd64)";
$_LANG['iso']['Ubuntu 20.04.1 (amd64)'] = "Ubuntu 20.04.1 (amd64)";
$_LANG['iso']['virtio-win-0.1.185'] = "virtio-win-0.1.185";
$_LANG['iso']['VyOS 1.4 (amd64)'] = "VyOS 1.4 (amd64)";
$_LANG['iso']['CentOS-6.10-x86_64-minimal.iso'] = 'CentOS 6.10 x86 64 Minimal';
$_LANG['iso']['Debian 8.10 (amd64/netinstall)'] = 'Debian 8.10 (amd64/netinstall)';
$_LANG['iso']['Windows Server 2016 English'] = 'Windows Server 2016 English';
$_LANG['iso']['Windows Server 2016 German']= 'Windows Server 2016 German';
$_LANG['iso']['Ubuntu 18.04.4 (amd64)'] = 'Ubuntu 18.04.4 (amd64)';
$_LANG['iso']['AlmaLinux 8.4 (amd64/boot)'] = "AlmaLinux 8.4 (amd64/boot)";
$_LANG['iso']['Alpine Virtual 3.13.1 (amd64)'] = "Alpine Virtual 3.13.1 (amd64)";
$_LANG['iso']['Archlinux 2020.06.01 (amd64)'] = "Archlinux 2020.06.01 (amd64)";
$_LANG['iso']['CentOS 7.9 (amd64/netinstall)'] = "CentOS 7.9 (amd64/netinstall)";
$_LANG['iso']['CentOS 8.2 (amd64/netinstall)'] = "CentOS 8.2 (amd64/netinstall)";
$_LANG['iso']['Clonezilla 2.7.0'] = "Clonezilla 2.7.0";
$_LANG['iso']['Debian 9.13 (amd64/netinstall)'] = "Debian 9.13 (amd64/netinstall)";
$_LANG['iso']['Debian 10.10 (amd64/netinstall)'] = "Debian 10.10 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 11.4 (amd64/netinstall)'] = "FreeBSD 11.4 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 12.1 (amd64/netinstall)'] = "FreeBSD 12.1 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 12.2 (amd64/netinstall)'] = "FreeBSD 12.2 (amd64/netinstall)";
$_LANG['iso']['FreeBSD 13.0 (amd64/netinstall)'] = "FreeBSD 13.0 (amd64/netinstall)";
$_LANG['iso']['FreePBX 2002 (amd64)'] = "FreePBX 2002 (amd64)";
$_LANG['iso']['IPFire 2.23 (amd64)'] = "IPFire 2.23 (amd64)";
$_LANG['iso']['k3OS v0.21.1 (amd64)'] = "k3OS v0.21.1 (amd64)";
$_LANG['iso']['Kali Linux 2020.1b installer (amd64)'] = "Kali Linux 2020.1b installer (amd64)";
$_LANG['iso']['NetBSD 9.1 (amd64)'] = "NetBSD 9.1 (amd64)";
$_LANG['iso']['NixOS 21.05 (amd64/minimal)'] = "NixOS 21.05 (amd64/minimal)";
$_LANG['iso']['OpenBSD 6.9'] = "OpenBSD 6.9";
$_LANG['iso']['openSUSE Leap 15.3'] = "openSUSE Leap 15.3";
$_LANG['iso']['OPNsense 20.7 (amd64)'] = "OPNsense 20.7 (amd64)";
$_LANG['iso']['Oracle Linux 8.4 (amd64/boot)'] = "Oracle Linux 8.4 (amd64/boot)";
$_LANG['iso']['pfSense CE 2.5.0 (amd64)'] = "pfSense CE 2.5.0 (amd64)";
$_LANG['iso']['Proxmox Mail Gateway 6.4 ISO Installer'] = "Proxmox Mail Gateway 6.4 ISO Installer";
$_LANG['iso']['Proxmox Mail Gateway 7.0 ISO Installer'] = "Proxmox Mail Gateway 7.0 ISO Installer";
$_LANG['iso']['Proxmox VE 6.4 ISO Installer'] = "Proxmox VE 6.4 ISO Installer";
$_LANG['iso']['RancherOS 1.5.8'] = "RancherOS 1.5.8";
$_LANG['iso']['Rocky Linux 8.4 (amd64/boot)'] = "Rocky Linux 8.4 (amd64/boot)";
$_LANG['iso']['Securepoint UTM Interactive Installer'] = "Securepoint UTM Interactive Installer";
$_LANG['iso']['Slackware 14.2'] = "Slackware 14.2";
$_LANG['iso']['SystemRescueCD (2018-04-02)'] = "SystemRescueCD (2018-04-02)";
$_LANG['iso']['Ubuntu 20.04 Live Server (amd64)'] = "Ubuntu 20.04 Live Server (amd64)";
$_LANG['iso']['Ubuntu 20.04.1 (amd64)'] = "Ubuntu 20.04.1 (amd64)";
$_LANG['iso']['virtio-win-0.1.185'] = "virtio-win-0.1.185";
$_LANG['iso']['VyOS 1.4 (amd64)'] = "VyOS 1.4 (amd64)";
$_LANG['iso']['Windows Server 2012 R2 English'] = "Windows Server 2012 R2 English";
$_LANG['iso']['Windows Server 2012 R2 German'] = "Windows Server 2012 R2 German";
$_LANG['iso']['Windows Server 2012 R2 Language Pack'] = "Windows Server 2012 R2 Language Pack";
$_LANG['iso']['Windows Server 2012 R2 Russian'] = "Windows Server 2012 R2 Russian";
$_LANG['iso']['Windows Server 2016 Language Pack'] = "Windows Server 2016 Language Pack";
$_LANG['iso']['Windows Server 2016 Russian'] = "Windows Server 2016 Russian";
$_LANG['iso']['Windows Server 2019 English'] = "Windows Server 2019 English";
$_LANG['iso']['Windows Server 2019 German'] = "Windows Server 2019 German";
$_LANG['iso']['Windows Server 2019 Russian'] = "Windows Server 2019 Russian";
$_LANG['iso']['CentOS 8.4 (amd64/netinstall)'] = "CentOS 8.4 (amd64/netinstall)";
$_LANG['iso']['Debian 11.0 (amd64/netinstall)'] = "Debian 11.0 (amd64/netinstall)";
$_LANG['iso']['OpenBSD 7.0'] = "OpenBSD 7.0";
$_LANG['iso']['OPNsense 21.7.1 (amd64)'] = "OPNsense 21.7.1 (amd64)";
$_LANG['iso']['virtio-win-0.1.196.iso'] = "virtio-win-0.1.196.iso";
$_LANG['iso']['Windows Server 2022 English'] = "Windows Server 2022 English";
$_LANG['iso']['Windows Server 2022 German'] = "Windows Server 2022 German";
$_LANG['iso']['Windows Server 2022 Russian'] = "Windows Server 2022 Russian";


$_LANG['serverCA']['iconTitle']['isos'] = "ISO Images";
$_LANG['serverCA']['sidebarMenu']['isos'] ="ISO Images";
$_LANG['serverCA']['isos']['mainContainer']['isosTable']['isosTable']  = "Available ISO Images";
$_LANG['serverCA']['isos']['mainContainer']['isosTable']['table']['description'] = "ISO Image";
$_LANG['mountIso']    = "The process of mounting the :description: ISO Image has started successfully";
$_LANG["invalidArch"] = "The ISO file named :iso: has an incompatible architecture.";
$_LANG['serverCA']['isos']['mainContainer']['isosTable']['unmountButton']['button']['unmountButton'] = 'Unmount';
$_LANG['serverCA']['isos']['mainContainer']['isosTable']['mountButton']['button']['mountButton'] = "Mount ISO Image";
$_LANG['serverCA']['isos']['mountModal']['modal']['mountModal']  = "Mount ISO Image";
$_LANG['serverCA']['isos']['mountModal']['mountForm']['mountConfirm'] = "Are you sure that you want to mount the: :description: ISO Image to this virtual machine?";
$_LANG['serverCA']['isos']['mountModal']['baseAcceptButton']['title'] = "Confirm";
$_LANG['serverCA']['isos']['mountModal']['baseCancelButton']['title'] = "Cancel";
$_LANG['serverCA']['isos']['unmountModal']['modal']['unmountModal']   = "Unmount ISO Image";
$_LANG['serverCA']['isos']['unmountModal']['unmountForm']['unmountConfirm'] = "Are you sure that you want to unmount the: :description:  ISO Image from this virtual machine?";
$_LANG['unmountIso']    = "The process of unmounting the :description: ISO Image has been started successfully";
$_LANG['serverCA']['isos']['unmountModal']['baseAcceptButton']['title'] ="Confirm";
$_LANG['serverCA']['isos']['unmountModal']['baseCancelButton']['title'] ="Cancel";

$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaSnapshots]']['packageconfigoption[clientAreaSnapshots]'] ='Snapshots';
$_LANG['serverAA']['productPage']['mainContainer']['featuresForm']['clientAreaFeatures']['rightSection']['packageconfigoption[clientAreaSnapshots]']['clientAreaSnapshotsDescription'] = 'Enable to grant clients the option to create snapshots.';
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[snapshots]']['packageconfigoption[snapshots]'] ='Snapshots  Limit [GB]'  ;
$_LANG['serverAA']['productPage']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[snapshots]']['snapshotsDescription'] = 'Specify snapshots size limit here. Set -1 for unlimited.';
$_LANG['serverCA']['iconTitle']['snapshots'] = 'Snapshots';
$_LANG['serverCA']['sidebarMenu']['snapshots'] = 'Snapshots';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['snapshotsTable'] = 'Snapshots';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['table']['description'] = 'Description';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['table']['created']  = 'Created';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['table']['imageSize'] = ' Size';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['table']['status'] = 'Status';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['createButton']['button']['createButton'] = 'Create Snapshot';
$_LANG['serverCA']['snapshots']['createModal']['modal']['createModal'] = 'Create New Snapshot';
$_LANG['serverCA']['snapshots']['createModal']['createForm']['createConfirm']= 'Are you sure that you want to create a new snapshot?<br /><br />';
$_LANG['serverCA']['snapshots']['createModal']['createForm']['description']['description'] = 'Snapshot Description';
$_LANG['serverCA']['snapshots']['createModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverCA']['snapshots']['createModal']['baseCancelButton']['title'] = 'Cancel';
$_LANG['createSnapshot']= 'The process of creating a new snapshot has started successfully. It may take a few minutes.';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['deleteMassButton']['button']['deleteMassButton']= 'Delete';
$_LANG['serverCA']['snapshots']['deleteMassModal']['modal']['deleteMassModal']= 'Delete Snapshots';
$_LANG['serverCA']['snapshots']['deleteMassModal']['deleteMassForm']['deleteMassConfirm']= 'Are you sure that you want to delete the selected snapshots?';
$_LANG['serverCA']['snapshots']['deleteMassModal']['baseAcceptButton']['title']= 'Confirm';
$_LANG['serverCA']['snapshots']['deleteMassModal']['baseCancelButton']['title'] = 'Cancel';
$_LANG['deleteMassSnapshot'] = 'The selected snapshots have been deleted successfully';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['restoreButton']['button']['restoreButton']= 'Restore';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['updateButton']['button']['updateButton']= 'Edit';
$_LANG['serverCA']['snapshots']['mainContainer']['snapshotsTable']['deleteButton']['button']['deleteButton'] = 'Delete';
$_LANG['serverCA']['snapshots']['restoreModal']['modal']['restoreModal'] = 'Restore Snapshot';
$_LANG['serverCA']['snapshots']['restoreModal']['restoreForm']['restoreConfirm'] = ' Are you sure that you want to restore the :description: snapshot? All previous data on the disk will be lost!';
$_LANG['serverCA']['snapshots']['restoreModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverCA']['snapshots']['restoreModal']['baseCancelButton']['title'] = 'Cancel';
$_LANG['serverCA']['snapshots']['updateModal']['modal']['updateModal'] = 'Edit Snapshot';
$_LANG['serverCA']['snapshots']['updateModal']['updateForm']['description']['description'] = 'Snapshot Description';
$_LANG['serverCA']['snapshots']['updateModal']['baseAcceptButton']['title']  = 'Confirm';
$_LANG['serverCA']['snapshots']['updateModal']['baseCancelButton']['title'] = 'Cancel';
$_LANG['serverCA']['snapshots']['deleteModal']['modal']['deleteModal'] = 'Delete Snapshot';
$_LANG['serverCA']['snapshots']['deleteModal']['deleteForm']['deleteConfirm'] = ' Are you sure that you want to delete the :description: snapshot? ';
$_LANG['serverCA']['snapshots']['deleteModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverCA']['snapshots']['deleteModal']['baseCancelButton']['title']  = 'Cancel';
$_LANG['updateSnapshot'] = "The :description: snapshot has been updated successfully";
$_LANG['deleteSnapshot'] = "The :description: snapshot has been deleted successfully";
$_LANG['status']['creating'] = 'Creating';
$_LANG['status']['available'] = 'Available';
$_LANG['serverCA']['snapshots']['available'] = 'Available';
$_LANG['serverCA']['snapshots']['creating'] = 'Creating';
$_LANG['restoreSnapshot']= 'The process of restoring the :description: snapshot has been started successfully. It may take a few minutes.';
$_LANG['accessDenied'] = 'Access Denied';
$_LANG['snapshotLimitExceded']= 'The maximum size set for a snapshot has been exceeded. Please remove old snapshot files.';
$_LANG['serverCA']['rebuild']['mainContainer']['alertBox']['sshInfo'] = 'In order to log in to the machine, you will need the SSH Key that you provided while placing the order.';
$_LANG['serverAA']['adminServicesTabFields']['mainContainer']['isosTable']['isosTable'] = 'ISO Images' ;
$_LANG['serverAA']['adminServicesTabFields']['mainContainer']['isosTable']['table']['description'] = "Available ISO Images";
$_LANG['mountIso']    = "The process of mounting ISO :description: has started successfully";
$_LANG['serverAA']['adminServicesTabFields']['mainContainer']['isosTable']['unmountButton']['button']['unmountButton'] = 'Unmount';
$_LANG['serverAA']['adminServicesTabFields']['mainContainer']['isosTable']['mountButton']['button']['mountButton'] = "Mount this ISO Image";
$_LANG['serverAA']['adminServicesTabFields']['mountModal']['modal']['mountModal']  = "Mount ISO Image";
$_LANG['serverAA']['adminServicesTabFields']['mountModal']['mountForm']['mountConfirm'] = "Are you sure that you want to mount the: :description: ISO Image to this virtual machine?";
$_LANG['serverAA']['adminServicesTabFields']['mountModal']['baseAcceptButton']['title'] = "Confirm";
$_LANG['serverAA']['adminServicesTabFields']['mountModal']['baseCancelButton']['title'] = "Cancel";
$_LANG['serverAA']['adminServicesTabFields']['unmountModal']['modal']['unmountModal']   = "Unmount ISO Image";
$_LANG['serverAA']['adminServicesTabFields']['unmountModal']['unmountForm']['unmountConfirm'] = "Are you sure that you want to unmount the: :description:  ISO Image from this virtual machine?";
$_LANG['serverAA']['adminServicesTabFields']['unmountModal']['baseAcceptButton']['title'] = "Confirm";
$_LANG['serverAA']['adminServicesTabFields']['unmountModal']['baseCancelButton']['title'] = "Cancel";
$_LANG['errorSnapshotIsCreating'] = "You cannot take another snapshot until the previous one is completed. The server is locked.";
$_LANG['errorSnapshotIsRestoring'] = "You cannot restore the snapshot while another one is being created. The server is locked.";

$_LANG['serverAA']['adminServicesTabFields']['createCOConfirmModal']['createConfigurableAction']['configurableOptionsNameInfo']  = 'Below you can choose which configurable options will be generated for this product. Please note that these options are divided into two parts separated by a | sign, where the part on the left indicates the sent variable and the part on the right the friendly name displayed to customers. After generating these options you can edit the friendly part on the right, but not the variable part on the left. More information about configurable options and their editing can be found :configurableOptionsNameUrl:.';

// ---------------------------------------------------- Admin Area Graphs ---------------------------------------------------------

$_LANG['serverAA']['adminServicesTabFields']['CPU Use'] = 'Percentage (%)';
$_LANG['serverAA']['home']['mainContainer']['cpuGraph']['cpuGraph'] = 'CPU Usage';
$_LANG['serverAA']['home']['button']['settingButton'] = 'Setting';
$_LANG['serverAA']['home']['mainContainer']['diskIOGraph']['diskIOGraph'] = 'Memory IO Operation Usage';
$_LANG['serverAA']['home']['mainContainer']['diskBandwidthGraph']['diskBandwidthGraph'] = 'Memory Usage';
$_LANG['serverAA']['home']['mainContainer']['networkPackageGraph']['networkPackageGraph'] = 'Network Package Traffic';
$_LANG['serverAA']['home']['mainContainer']['networkBandwidthGraph']['networkBandwidthGraph'] = 'Network Traffic';

$_LANG['serverAA']['adminServicesTabFields']['CPU Usage'] = 'CPU Usage';
$_LANG['serverAA']['adminServicesTabFields']['Disk Read'] = 'Read';
$_LANG['serverAA']['adminServicesTabFields']['Disk Write'] = 'Write';

$_LANG['serverAA']['adminServicesTabFields']['settingModal']['modal']['settingModal'] = 'Settings';
$_LANG['serverAA']['adminServicesTabFields']['settingModal']['settingForm']['timeframe']['timeframe'] = 'Time Frame';
$_LANG['serverAA']['adminServicesTabFields']['settingModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['serverAA']['adminServicesTabFields']['settingModal']['baseCancelButton']['title'] = 'Cancel';


// ---------------------------------------------------- Client Area Graphs ---------------------------------------------------------
$_LANG['addonCA']['breadcrumbs']['MG Demo']                                                                             = 'addonCA breadcrumbs MG Demo';
$_LANG['serverCA']['iconTitle']['graphs']                                                                               = 'Graphs';
$_LANG['serverCA']['graphs']['Bytes/s']                                                                                 = 'Bytes/s';
$_LANG['serverCA']['graphs']['CPU Use']                                                                                 = 'Percentage (%)';
$_LANG['serverCA']['graphs']['CPU Usage']                                                                               = 'CPU Usage';
$_LANG['serverCA']['graphs']['Bandwidth Disk Usage']                                                                    = 'Bytes/s';
$_LANG['serverCA']['graphs']['IO Disk Usage']                                                                           = 'iop/s';
$_LANG['serverCA']['graphs']['Disk Read']                                                                               = 'Read';
$_LANG['serverCA']['graphs']['Disk Write']                                                                              = 'Write';
$_LANG['serverCA']['graphs']['button']['settingButton']                                                                 = 'Edit graph settings';
$_LANG['serverCA']['graphs']['mainContainer']['networkGraph']['title']                                                  = 'Network';
$_LANG['serverCA']['graphs']['mainContainer']['networkGraph']['graphsEditButton']['button']['graphsEditButton']         = 'Edit';
$_LANG['serverCA']['graphs']['mainContainer']['cpuGraph']['cpuGraph']                                                   = 'CPU Usage';
$_LANG['serverCA']['graphs']['mainContainer']['diskGraph']['diskGraph']                                                 = 'Memory Usage';
$_LANG['serverCA']['graphs']['mainContainer']['diskIOGraph']['diskIOGraph']                                             = 'Memory IO Operation Usage';
$_LANG['serverCA']['graphs']['mainContainer']['diskBandwidthGraph']['diskBandwidthGraph']                               = 'Memory Usage';
$_LANG['serverCA']['graphs']['mainContainer']['networkGraph']['networkGraph']                                           = 'Network Traffic';
$_LANG['serverCA']['graphs']['mainContainer']['networkPackageGraph']['networkPackageGraph']                             = 'Network Package Traffic';
$_LANG['serverCA']['graphs']['mainContainer']['networkBandwidthGraph']['networkBandwidthGraph']                         = 'Network Traffic';
$_LANG['serverCA']['graphs']['graphEditModal']['modal']['graphEditModal']                                               = 'Edit Settings';
$_LANG['serverCA']['graphs']['graphEditModal']['baseAcceptButton']['title']                                             = 'Save';
$_LANG['serverCA']['graphs']['graphEditModal']['baseCancelButton']['title']                                             = 'Cancel';
$_LANG['Net In']                                                                                                        = 'Net In';
$_LANG['Net Out']                                                                                                       = 'Net Out';

$_LANG['serverCA']['graphs']['Hour']                                                                                    = 'Hour';
$_LANG['serverCA']['graphs']['settingModal']['modal']['settingModal']                                                   = 'Settings';
$_LANG['serverCA']['graphs']['settingModal']['settingForm']['timeframe']['timeframe']                                   = 'Time Frame';
$_LANG['serverCA']['graphs']['settingModal']['baseAcceptButton']['title']                                               = 'Confirm';
$_LANG['serverCA']['graphs']['settingModal']['baseCancelButton']['title']                                               = 'Cancel';

$_LANG['Minute']                                                                                                        = '1 Minute';
$_LANG['15 Minutes']                                                                                                    = '15 Minutes';
$_LANG['1 Hour']                                                                                                        = '1 Hour';
$_LANG['12 Hours']                                                                                                      = '12 Hours';
$_LANG['1 Day']                                                                                                         = '1 Day';
$_LANG['1 Week']                                                                                                        = '1 Week';
$_LANG['1 Month']                                                                                                       = '1 Month';
$_LANG['serverAA']['adminServicesTabFields']['Hour'] = 'Hour';
$_LANG['serverAA']['adminServicesTabFields']['Day'] = 'Day';
$_LANG['serverAA']['adminServicesTabFields']['Week'] = 'Week';
$_LANG['serverAA']['adminServicesTabFields']['Month'] = 'Month';
$_LANG['serverAA']['adminServicesTabFields']['year'] = 'Year';
$_LANG['serverCA']['graphs']['Day'] = 'Day';
$_LANG['serverCA']['graphs']['Week'] = 'Week';
$_LANG['serverCA']['graphs']['Month'] = 'Month';

// -------------------------------------------------- Firewalls --------------------------------------------------

$_LANG['noDataAvalible']                                                                                                = 'No Data Available';
$_LANG['datatableItemsSelected']                                                                                        = 'Items Selected';

$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['firewallTable']                                      = 'Firewalls';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['addFirewallButton']['button']['addFirewallButton']   = 'Create Firewall';

$_LANG['serverCA']['firewalls']['addFirewallModal']['modal']['addFirewallModal']                                        = 'Create Firewall';
$_LANG['serverCA']['firewalls']['addFirewallModal']['baseAcceptButton']['title']                                        = 'Confirm';
$_LANG['serverCA']['firewalls']['addFirewallModal']['baseCancelButton']['title']                                        = 'Cancel';

$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['ip']                                        = 'IP';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['name']                                      = 'Name';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['direction']                                 = 'Direction';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['protocol']                                  = 'Protocol';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['port']                                      = 'Port';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['created']                                   = 'Created';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['amountIn']                                  = 'Inbound Rules';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['table']['amountOut']                                 = 'Outbound Rules';

$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['table']['protocol']                                      = 'Protocol';
$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['table']['port']                                          = 'Port';
$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['table']['ip']                                            = 'IP';
$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['table']['direction']                                     = 'Direction';

$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['redirectButton']['button']['redirectButton']                                             = 'Edit';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['editFirewallButton']['button']['editFirewallButton']                                     = 'Edit';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['deleteFirewallButton']['button']['deleteFirewallButton']                                 = 'Delete';

$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['addRuleButton']['button']['addRuleButton']               = 'Create Rule';
$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['deleteMassRuleButton']['button']['deleteMassRuleButton'] = 'Delete';
$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['editRuleButton']['button']['editRuleButton']             = 'Edit';
$_LANG['serverCA']['firewalls']['mainContainer']['dataTable']['deleteRuleButton']['button']['deleteRuleButton']         = 'Delete';

$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['mainRawSection']['name']['name'] = 'Firewall Name';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['mainRawSection']['applyTo']['applyTo'] = 'Apply to Server';

$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rowSection']['leftSection']['name']['name']                                         = 'Name';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rowSection']['rightSection']['label']['label']                                      = 'Label';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['rulesLeftSection']['protocol']['protocol']                       = 'Protocol';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['rulesLeftSection']['port']['port']                               = 'Port';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['rulesRightSection']['direction']['direction']                    = 'Direction';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['rulesRightSection']['sourceIp']['sourceIp']                      = 'Source IP';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['rulesRightSection']['destinationIp']['destinationIp']            = 'Destination IP';

$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['port']['port']                                                   = 'Port';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['sourceIp']['sourceIp']                                           = 'Source IP';
$_LANG['serverCA']['firewalls']['addFirewallModal']['firewallAddForm']['rulesRowSection']['destinationIp']['destinationIp']                                 = 'Destination IP';

$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['baseSection']['port']['port']                                     = 'Port';
$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['baseSection']['sourceIp']['sourceIp']                             = 'Source IP';
$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['baseSection']['destinationIp']['destinationIp']                   = 'Destination IP';
$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['rulesRowSection']['rulesLeftSection']['protocol']['protocol']     = 'Protocol';
$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['rulesRowSection']['rulesRightSection']['direction']['direction']  = 'Direction';

$_LANG['serverCA']['firewalls']['addRuleModal']['modal']['addRuleModal']                                                                                = 'Create Rule';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['rulesRowSection']['rulesLeftSection']['protocol']['protocol']         = 'Protocol';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['rulesRowSection']['rulesRightSection']['direction']['direction']      = 'Direction';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['baseSection']['port']['port']                                         = 'Port';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['baseSection']['port']['portDescription']                              = 'Port or port range to which traffic will be allowed, only applicable for protocols TCP and UDP.<br>A port range can be specified by separating two ports with a dash, e.g <b>1024-5000</b>.';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['baseSection']['sourceIp']['sourceIp']                                 = 'Source IP';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['baseSection']['destinationIp']['destinationIp']                       = 'Destination IP';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['baseSection']['sourceIp']['ipDescription']                            = 'List of permitted IPv4/IPv6 addresses in CIDR notation.<br> Use <b>0.0.0.0/0</b> to allow all IPv4 addresses and <b>::/0</b> to allow all IPv6 addresses.<br> You can specify 100 CIDRs at most.<br>Separate each address with a comma from the others';
$_LANG['serverCA']['firewalls']['addRuleModal']['ruleAddForm']['mainRawSection']['baseSection']['destinationIp']['ipDescription']                       = 'List of permitted IPv4/IPv6 addresses in CIDR notation.<br> Use <b>0.0.0.0/0</b> to allow all IPv4 addresses and <b>::/0</b> to allow all IPv6 addresses.<br> You can specify 100 CIDRs at most.<br>Separate each address with a comma from the others';
$_LANG['serverCA']['firewalls']['addRuleModal']['baseAcceptButton']['title']                                                                            = 'Confirm';
$_LANG['serverCA']['firewalls']['addRuleModal']['baseCancelButton']['title']                                                                            = 'Cancel';

$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['baseSection']['port']['portDescription']                          = 'Port or port range to which traffic will be allowed, only applicable for protocols TCP and UDP.<br>A port range can be specified by separating two ports with a dash, e.g <b>1024-5000</b>.';
$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['baseSection']['sourceIp']['ipDescription']                        = 'List of permitted IPv4/IPv6 addresses in CIDR notation.<br> Use <b>0.0.0.0/0</b> to allow all IPv4 addresses and <b>::/0</b> to allow all IPv6 addresses.<br> You can specify 100 CIDRs at most.<br>Separate each address with a comma from the others';
$_LANG['serverCA']['firewalls']['addFirewallModal']['ruleAddForm']['mainRawSection']['baseSection']['destinationIp']['ipDescription']                   = 'List of permitted IPv4/IPv6 addresses in CIDR notation.<br> Use <b>0.0.0.0/0</b> to allow all IPv4 addresses and <b>::/0</b> to allow all IPv6 addresses.<br> You can specify 100 CIDRs at most.<br>Separate each address with a comma from the others';

$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['rulesRowSection']['rulesLeftSection']['protocol']['protocol']       = 'Protocol';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['rulesRowSection']['rulesRightSection']['direction']['direction']    = 'Direction';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['baseSection']['port']['port']                                   = 'Port';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['baseSection']['sourceIp']['sourceIp']                           = 'Source IP';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['baseSection']['destinationIp']['destinationIp']                 = 'Destination IP';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['baseSection']['port']['portDescription']                        = 'Port or port range to which traffic will be allowed, only applicable for protocols TCP and UDP.<br>A port range can be specified by separating two ports with a dash, e.g <b>1024-5000</b>.';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['baseSection']['sourceIp']['ipDescription']                      = 'List of permitted IPv4/IPv6 addresses in CIDR notation.<br> Use <b>0.0.0.0/0</b> to allow all IPv4 addresses and <b>::/0</b> to allow all IPv6 addresses.<br> You can specify 100 CIDRs at most.<br>Separate each address with a comma from the others';
$_LANG['serverCA']['firewalls']['editRuleModal']['editRuleForm']['mainRawSection']['baseSection']['destinationIp']['ipDescription']                 = 'List of permitted IPv4/IPv6 addresses in CIDR notation.<br> Use <b>0.0.0.0/0</b> to allow all IPv4 addresses and <b>::/0</b> to allow all IPv6 addresses.<br> You can specify 100 CIDRs at most.<br>Separate each address with a comma from the others';

$_LANG['serverCA']['firewalls']['editRuleModal']['modal']['editRuleModal']                                          = 'Edit Rule';
$_LANG['serverCA']['firewalls']['editRuleModal']['baseAcceptButton']['title']                                       = 'Confirm';
$_LANG['serverCA']['firewalls']['editRuleModal']['baseCancelButton']['title']                                       = 'Cancel';

$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['deleteFirewallButton']['button']['ButtonModal']                  = 'AAA';
$_LANG['serverCA']['firewalls']['mainContainer']['firewallTable']['deleteMassFirewallButton']['button']['deleteMassFirewallButton'] = 'Delete';
$_LANG['serverCA']['firewalls']['deleteFirewallModal']['modal']['deleteFirewallModal']                                              = 'Delete Firewall';
$_LANG['serverCA']['firewalls']['deleteFirewallModal']['deleteFirewallForm']['confirmFirewallDelete']                               = 'Are you sure that you want to delete this firewall?';
$_LANG['serverCA']['firewalls']['deleteFirewallModal']['deleteMassFirewallForm']['confirmFirewallDelete']                           = 'Are you sure that you want to delete the selected firewalls?';
$_LANG['serverCA']['firewalls']['deleteFirewallModal']['baseAcceptButton']['title']                                                 = 'Delete';
$_LANG['serverCA']['firewalls']['deleteFirewallModal']['baseCancelButton']['title']                                                 = 'Cancel';

$_LANG['serverCA']['firewalls']['deleteRuleModal']['modal']['deleteRuleModal']                                          = 'Delete Rule';
$_LANG['serverCA']['firewalls']['deleteRuleModal']['deleteRuleForm']['confirmRuleDelete']                               = 'Are you sure that you want to delete this firewall rule?';
$_LANG['serverCA']['firewalls']['deleteRuleModal']['deleteMassRuleForm']['confirmFirewallDelete']                       = 'Are you sure that you want to delete the selected firewall rules?';
$_LANG['serverCA']['firewalls']['deleteRuleModal']['baseAcceptButton']['title']                                         = 'Confirm';
$_LANG['serverCA']['firewalls']['deleteRuleModal']['baseCancelButton']['title']                                         = 'Cancel';

$_LANG['serverCA']['firewalls']['deleteMassRuleModal']['modal']['deleteMassRuleModal']                                  = 'Delete Rules';
$_LANG['serverCA']['firewalls']['deleteMassRuleModal']['deleteMassRuleForm']['confirmFirewallDelete']                   = 'Are you sure that you want to delete the selected firewall rules?';
$_LANG['serverCA']['firewalls']['deleteMassRuleModal']['baseAcceptButton']['title']                                     = 'Confirm';
$_LANG['serverCA']['firewalls']['deleteMassRuleModal']['baseCancelButton']['title']                                     = 'Cancel';

$_LANG['serverCA']['firewalls']['deleteMassFirewallModal']['modal']['deleteMassFirewallModal']                          = 'Delete Firewalls';
$_LANG['serverCA']['firewalls']['deleteMassFirewallModal']['deleteMassFirewallForm']['confirmFirewallDelete']           = 'Are you sure that you want to delete the selected firewalls?';
$_LANG['serverCA']['firewalls']['deleteMassFirewallModal']['baseAcceptButton']['title']                                 = 'Delete';
$_LANG['serverCA']['firewalls']['deleteMassFirewallModal']['baseCancelButton']['title']                                 = 'Cancel';

$_LANG['nameAlreadyUsed']                                                                                               = 'A firewall with the provided name already exists';
$_LANG['FirewallCreateSuccessful']                                                                                      = 'The firewall has been created successfully';
$_LANG['FirewallDeleteSuccessful']                                                                                      = 'The firewall has been deleted successfully';
$_LANG['FirewallMassDeleteSuccessful']                                                                                  = 'The firewalls have been deleted successfully';
$_LANG['CreateSuccessful']                                                                                              = 'The rule has been created successfully';
$_LANG['RuleAlreadyExist']                                                                                              = 'The rule you are trying to add already exists';
$_LANG['UpdateSuccessful']                                                                                              = 'The rule has been updated successfully';
$_LANG['DeleteSuccessful']                                                                                              = 'The rule has been deleted successfully';
$_LANG['MassDeleteSuccessful']                                                                                          = 'The rules have been deleted successfully';
$_LANG['invalidIPorMaskSpecified']                                                                                      = 'No or an invalid IP or mask has been specified';
$_LANG['FirewallAndRuleCreatedSuccessfully']                                                                            = 'The firewall rule has been created successfully';

$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['networkManagementTable'] = 'Networks';
$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['table']['name']          = 'Name';
$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['table']['ipRange']       = 'IP Range';

$_LANG['serverCA']['networkManagement']['mainContainer']['breadcrumb']['index']['breadcrumb']                = 'Networks';
$_LANG['serverCA']['networkManagement']['mainContainer']['breadcrumb']['manageSubnets']['breadcrumb']        = 'Subnets';
$_LANG['serverCA']['networkManagement']['mainContainer']['breadcrumb']['manageRoutes']['breadcrumb']         = 'Routes';
$_LANG['serverCA']['networkManagement']['mainContainer']['breadcrumb']['manageResources']['breadcrumb']      = 'Resources';

$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['massDeleteNetworksButton']['button']['massDeleteNetworksButton']      = 'Delete Networks';
$_LANG['serverCA']['networkManagement']['massDeleteNetworksModal']['modal']['massDeleteNetworksModal']                                                    = 'Delete Networks';
$_LANG['serverCA']['networkManagement']['massDeleteNetworksModal']['massDeleteNetworksForm']['confirmNetworksDelete']                                     = 'Are you sure that you want to delete these networks?';
$_LANG['serverCA']['networkManagement']['massDeleteNetworksModal']['baseAcceptButton']['title']                                                           = 'Delete';
$_LANG['serverCA']['networkManagement']['massDeleteNetworksModal']['baseCancelButton']['title']                                                           = 'Cancel';

$_LANG['serverCA']['networkManagement']['mainContainer']['subnetTable']['massDeleteSubnetsButton']['button']['massDeleteSubnetsButton']                   = 'Delete Subnets';
$_LANG['serverCA']['networkManagement']['massDeleteSubnetsModal']['modal']['massDeleteSubnetsModal']                                                      = 'Delete Subnets';
$_LANG['serverCA']['networkManagement']['massDeleteSubnetsModal']['massDeleteSubnetsForm']['confirmSubnetsDelete']                                        = 'Are you sure that you want to delete these subnets?';
$_LANG['serverCA']['networkManagement']['massDeleteSubnetsModal']['baseAcceptButton']['title']                                                            = 'Delete';
$_LANG['serverCA']['networkManagement']['massDeleteSubnetsModal']['baseCancelButton']['title']                                                            = 'Cancel';

$_LANG['serverCA']['networkManagement']['mainContainer']['routesTable']['massDeleteRouteButton']['button']['massDeleteRouteButton']                       = 'Delete Routes';
$_LANG['serverCA']['networkManagement']['massDeleteRouteModal']['modal']['massDeleteRouteModal']                                                          = 'Delete Routes';
$_LANG['serverCA']['networkManagement']['massDeleteRouteModal']['massDeleteRouteForm']['confirmRouteDelete']                                              = 'Are you sure that you want to delete these routes?';
$_LANG['serverCA']['networkManagement']['massDeleteRouteModal']['baseAcceptButton']['title']                                                              = 'Delete';
$_LANG['serverCA']['networkManagement']['massDeleteRouteModal']['baseCancelButton']['title']                                                              = 'Cancel';

$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['massDeleteResourcesButton']['button']['massDeleteResourcesButton']            = 'Remove Resources';
$_LANG['serverCA']['networkManagement']['massDeleteResourcesModal']['modal']['massDeleteResourcesModal']                                                  = 'Remove Resources';
$_LANG['serverCA']['networkManagement']['massDeleteResourcesModal']['massDeleteResourcesForm']['confirmResourcesDelete']                                  = 'Are you sure that you want to delete these resourcess?';
$_LANG['serverCA']['networkManagement']['massDeleteResourcesModal']['baseAcceptButton']['title']                                                          = 'Delete';
$_LANG['serverCA']['networkManagement']['massDeleteResourcesModal']['baseCancelButton']['title']                                                          = 'Cancel';

$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['addNetworkButton']['button']['addNetworkButton']            = 'Create Network';
$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['deleteNetworkButton']['button']['deleteNetworkButton']      = 'Delete Network';
$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['subnetDetailsButton']['button']['subnetDetailsButtonTitle'] = 'Subnets';
$_LANG['serverCA']['networkManagement']['mainContainer']['networkManagementTable']['routeDetailsButton']['button']['routeDetailsButtonTitle']   = 'Routes';

$_LANG['serverCA']['networkManagement']['addNetworkModal']['modal']['addNetworkModal']                                        = 'Create Network';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['name']['name']                                  = 'Network Name';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['name']['tip']                                   = 'Enter a name for your network.';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['ip']['ip']                                      = 'IP Range Address';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['ip']['tip']                                     = 'Enter an IP address that will be used for subnet range. You can create networks for all RFC 1918 private IP ranges which are: 10.0.0.0 / 8, 172.16.0.0 / 12, 192.168.0.0 / 16.';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['cidr']['cidr']                                  = 'CIDR';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['cidr']['tip']                                   = 'Subnets divide the network into multiple IP ranges that can be used for different purposes. An IP range (e.g. 192.168.0.0/24) consists of the subnet address (192.168.0.0) and a subnet mask (/24). Provide CIDR prefix without forward slash.';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['addNetworkForm']['addNetworkInfo']                                = 'Network provides private layer 3 links among cloud servers using dedicated network interface. The server attached to a network will have an IPv4 address automatically assigned within your private network. Network supports only IPv4.';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['baseAcceptButton']['title']                                       = 'Confirm';
$_LANG['serverCA']['networkManagement']['addNetworkModal']['baseCancelButton']['title']                                       = 'Cancel';

$_LANG['serverCA']['networkManagement']['deleteNetworkModal']['modal']['deleteNetworkModal']                                  = 'Delete Network';
$_LANG['serverCA']['networkManagement']['deleteNetworkModal']['deleteNetworkForm']['confirmNetworkDelete']                    = 'Are you sure that you want to delete this network?';
$_LANG['serverCA']['networkManagement']['deleteNetworkModal']['baseAcceptButton']['title']                                    = 'Delete';
$_LANG['serverCA']['networkManagement']['deleteNetworkModal']['baseCancelButton']['title']                                    = 'Cancel';

$_LANG['serverCA']['networkManagement']['subnetTable']                                                                        = 'Subnets';
$_LANG['serverCA']['networkManagement']['mainContainer']['subnetTable']['table']['ipRange']                                   = 'IP Range';
$_LANG['serverCA']['networkManagement']['mainContainer']['subnetTable']['table']['gateway']                                   = 'Gateway';

$_LANG['serverCA']['networkManagement']['mainContainer']['subnetTable']['addSubnetButton']['button']['addSubnetButton']                  = 'Create Subnet';
$_LANG['serverCA']['networkManagement']['mainContainer']['subnetTable']['resourceDetailsButton']['button']['resourceDetailsButtonTitle'] = 'Resources';
$_LANG['serverCA']['networkManagement']['mainContainer']['subnetTable']['deleteSubnetButton']['button']['deleteSubnetButton']            = 'Delete Subnet';

$_LANG['serverCA']['networkManagement']['addSubnetModal']['modal']['addSubnetModal']                                          = 'Create Subnet';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['addSubnetForm']['ip']['ip']                                        = 'Subnet Address';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['addSubnetForm']['ip']['tip']                                       = 'The first host IP address of this subnet will be blocked by a gateway. Please make sure that this IP address is not used for any other purpose.';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['addSubnetForm']['cidr']['cidr']                                    = 'CIDR';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['addSubnetForm']['cidr']['tip']                                     = 'Subnets divide the network into multiple IP ranges that can be used for different purposes. An IP range (e.g. 192.168.0.0/24) consists of the subnet address (192.168.0.0) and a subnet mask (/24). Provide CIDR prefix wihout forward slash.';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['addSubnetForm']['addSubnetInfo']                                   = 'Subnets are a part of the network. When you create a network, you need to define its IP range. Within this IP range, you can create one or more subnets that each have its own IP space within the network IP range. IP addresses for your servers will always be allocated from your subnet IP space. <br>Example: You create a network 10.0.0.0/8. Within the network you create a subnet 10.0.0.0/24. Attached server to your network will get an IP address from the 10.0.0.0/24 subnet.';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['baseAcceptButton']['title']                                        = 'Confirm';
$_LANG['serverCA']['networkManagement']['addSubnetModal']['baseCancelButton']['title']                                        = 'Cancel';

$_LANG['serverCA']['networkManagement']['deleteSubnetModal']['modal']['deleteSubnetModal']                                    = 'Delete Subnet';
$_LANG['serverCA']['networkManagement']['deleteSubnetModal']['deleteSubnetForm']['confirmSubnetDelete']                       = 'Are you sure that you want to delete this subnet?';
$_LANG['serverCA']['networkManagement']['deleteSubnetModal']['baseAcceptButton']['title']                                     = 'Delete';
$_LANG['serverCA']['networkManagement']['deleteSubnetModal']['baseCancelButton']['title']                                     = 'Cancel';

$_LANG['serverCA']['networkManagement']['routesTable']                                                                        = 'Routes';
$_LANG['serverCA']['networkManagement']['mainContainer']['routesTable']['table']['destination']                               = 'Destination';
$_LANG['serverCA']['networkManagement']['mainContainer']['routesTable']['table']['gateway']                                   = 'Gateway';

$_LANG['serverCA']['networkManagement']['mainContainer']['routesTable']['addRouteButton']['button']['addRouteButton']         = 'Add Route';
$_LANG['serverCA']['networkManagement']['mainContainer']['routesTable']['deleteRouteButton']['button']['deleteRouteButton']   = 'Delete Route';

$_LANG['serverCA']['networkManagement']['addRouteModal']['modal']['addRouteModal']                                            = 'Add Route';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['ip']['ip']                                          = 'Destination';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['ip']['tip']                                         = 'If you choose a destination for your route that is within the IP range of your network, it will automatically work as expected. If, however, you set your destination to be outside of the network IP range, you will have to ensure that traffic for the destination is sent to your private network interface. To do that, you need to manually add the route in the operating system of each of your servers.';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['cidr']['cidr']                                      = 'CIDR';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['cidr']['tip']                                       = 'Provide CIDR prefix without forward slash';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['gateway']['gateway']                                = 'Gateway';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['gateway']['tip']                                    = 'Enter a valid IP address within the network.';
$_LANG['serverCA']['networkManagement']['addRouteModal']['addRouteForm']['addRouteInfo']                                      = 'Route is an advanced feature within network. With it, you can create a route that is automatically applied to private traffic. You can use routes to make sure that all packets for a given destination IP prefix will be sent to the address specified in its gateway.';
$_LANG['serverCA']['networkManagement']['addRouteModal']['baseAcceptButton']['title']                                         = 'Confirm';
$_LANG['serverCA']['networkManagement']['addRouteModal']['baseCancelButton']['title']                                         = 'Cancel';

$_LANG['serverCA']['networkManagement']['deleteRouteModal']['modal']['deleteRouteModal']                                      = 'Delete Route';
$_LANG['serverCA']['networkManagement']['deleteRouteModal']['deleteRouteForm']['confirmRouteDelete']                          = 'Are you sure that you want to delete this route?';
$_LANG['serverCA']['networkManagement']['deleteRouteModal']['baseAcceptButton']['title']                                      = 'Delete';
$_LANG['serverCA']['networkManagement']['deleteRouteModal']['baseCancelButton']['title']                                      = 'Cancel';

$_LANG['serverCA']['networkManagement']['resourcesTable']                                                                     = 'Resources';
$_LANG['serverCA']['networkManagement']['subnet']                                                                             = 'Subnet';
$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['table']['name']                                   = 'Name';
$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['table']['privateIp']                              = 'Private IP';
$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['table']['aliasIps']                               = 'Alias IPs';

$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['addResourceButton']['button']['addResourceButton']       = 'Attach Resource';
$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['editAliasIpsButton']['button']['editAliasIpsButton']     = 'Edit Alias IPs';
$_LANG['serverCA']['networkManagement']['mainContainer']['resourcesTable']['deleteResourceButton']['button']['deleteResourceButton'] = 'Remove Resource';

$_LANG['serverCA']['networkManagement']['addResourceModal']['modal']['addResourceModal']                                      = 'Add Resource';
$_LANG['serverCA']['networkManagement']['addResourceModal']['addResourceForm']['resource']['resource']                        = 'Resource';
$_LANG['serverCA']['networkManagement']['addResourceModal']['addResourceForm']['resource']['tip']                             = 'Select owned resource that you want to attach to the chosen subnet.';
$_LANG['serverCA']['networkManagement']['addResourceModal']['addResourceForm']['manualIp']['manualIp']                        = 'Set Private IP Address Manually';
$_LANG['serverCA']['networkManagement']['addResourceModal']['addResourceForm']['ip']['ip']                                    = 'Private IP Address';
$_LANG['serverCA']['networkManagement']['addResourceModal']['baseAcceptButton']['title']                                      = 'Confirm';
$_LANG['serverCA']['networkManagement']['addResourceModal']['baseCancelButton']['title']                                      = 'Cancel';

$_LANG['serverCA']['networkManagement']['editAliasIpsModal']['modal']['editAliasIpsModal']                                    = 'Edit Alias IPs';
$_LANG['serverCA']['networkManagement']['editAliasIpsModal']['editAliasIpsForm']['alias_ips']['alias_ips']                    = 'Alias IPs';
$_LANG['serverCA']['networkManagement']['editAliasIpsModal']['editAliasIpsForm']['alias_ips']['tip']                          = 'Type in additional IP address. You can assign more than one IP address at once, use a comma to separate them';
$_LANG['serverCA']['networkManagement']['editAliasIpsModal']['baseAcceptButton']['title']                                     = 'Confirm';
$_LANG['serverCA']['networkManagement']['editAliasIpsModal']['baseCancelButton']['title']                                     = 'Cancel';

$_LANG['serverCA']['networkManagement']['deleteResourceModal']['modal']['deleteResourceModal']                                = 'Remove Resource';
$_LANG['serverCA']['networkManagement']['deleteResourceModal']['deleteResourceForm']['confirmResourceDelete']                 = 'Are you sure that you want to remove this resource from this subnet?';
$_LANG['serverCA']['networkManagement']['deleteResourceModal']['baseAcceptButton']['title']                                   = 'Remove';
$_LANG['serverCA']['networkManagement']['deleteResourceModal']['baseCancelButton']['title']                                   = 'Cancel';

$_LANG['createNetwork']         = 'Network has been created successfully';
$_LANG['InvalidIP']             = 'The IP address is invalid';
$_LANG['ipNotInRange']          = 'The IP address is is not in the subnet range';
$_LANG['deleteNetwork']         = 'The network has been deleted successfully';
$_LANG['deleteNetworks']        = 'The networks have been deleted successfully';
$_LANG['deleteNetworkError']    = 'An error occurred during deleting the network. Try again later.';
$_LANG['createSubnet']          = 'The subnet has been created successfully';
$_LANG['deleteSubnet']          = 'The subnet has been deleted successfully';
$_LANG['deleteSubnets']         = 'The subnets have been deleted successfully';
$_LANG['editAliasIPs']          = 'Alias IPs have been changed successfully';
$_LANG['serviceNotOwner']       = 'This service is not the owner of this network';
$_LANG['subnetCannotBeInNet']   = 'Subnet IP address is not in the network base address';
$_LANG['createRoute']           = 'The route has been created successfully';
$_LANG['deleteRoute']           = 'The route has been deleted successfully';
$_LANG['deleteResources']       = 'The resources have been removed from this subnet successfully';
$_LANG['addResource']           = 'Resource has been added successfully';
$_LANG['notUsersServer']        = 'The server you chose does not belong to you';
$_LANG['ipCannotBeEmpty']       = 'The IP address cannot be empty';
$_LANG['cidrCannotBeEmpty']     = 'The CIDR cannot be empty';
$_LANG['gatewayCannotBeEmpty']  = 'The gateway cannot be empty';
$_LANG['nameCannotBeEmpty']     = 'The name cannot be empty';
$_LANG['resourceCannotBeEmpty'] = 'The resource cannot be empty';
$_LANG['idCannotBeEmpty']       = 'The ID cannot be empty';
$_LANG['networkZoneMustBeSame'] = 'The network zone of server must be the same as zone of network';
$_LANG['removeResource']        = 'Resource has been removed from this subnet successfully';


$_LANG['automationSettings'] = 'Automation Settings';

$_LANG['serverAA']['product']['mainContainer']['automationSettings']['automationSettings']['leftSection']['packageconfigoption[actionOnServiceSuspension]']['packageconfigoption[actionOnServiceSuspension]'] = 'Action on Service Suspension';
$_LANG['serverAA']['product']['mainContainer']['automationSettings']['automationSettings']['leftSection']['packageconfigoption[actionOnServiceSuspension]']['actionOnServiceSuspensionDescription'] = 'Choose the action to be performed on the server upon the WHMCS product suspension';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[openConsoleInNewWindow]']['packageconfigoption[openConsoleInNewWindow]'] = 'Open Console in New Window';

$_LANG['serverAA']['product']['mainContainer']['automationSettings']['automationSettings']['rightSection']['packageconfigoption[powerOffBeforeUpgrade]']['packageconfigoption[powerOffBeforeUpgrade]'] = "Power Off VM Before Upgrade";
$_LANG['serverAA']['product']['mainContainer']['automationSettings']['automationSettings']['rightSection']['packageconfigoption[powerOffBeforeUpgrade]']['powerOffBeforeUpgradeDescription'] = "Enable this option if you want to power off the VM before upgrading. It prevents crashes and errors during the VM upgrade action.";

$_LANG['serverAA']['product']['mainContainer']['automationSettings']['automationSettings']['rightSection']['packageconfigoption[staticVmDomainName]']['packageconfigoption[staticVmDomainName]'] = "Static VM Domain Name";
$_LANG['serverAA']['product']['mainContainer']['automationSettings']['automationSettings']['rightSection']['packageconfigoption[staticVmDomainName]']['staticVmDomainNameDescription'] = "Enable this option if you want to set a static VM Domain Name without it being automatically changed by the Hetzner API.";

$_LANG['selectFields'] = 'Server Information';
$_LANG['status'] = "Status";
$_LANG['password'] = "Password";
$_LANG['hostname'] = "Hostname";
$_LANG['memory'] = "Memory";
$_LANG['disk'] = "Disk Size";
$_LANG['cpu'] = "CPU Number";
$_LANG['image'] = "Image";
$_LANG['ipv4'] = "IPv4";
$_LANG['ipv6'] = "IPv6";
$_LANG['backups'] = "Backups";
$_LANG['networks'] = "Networks";
$_LANG['bwusage'] = "Outgoing Bandwidth Usage";
$_LANG['datacenter'] = "Data Center";
$_LANG['location'] = "Location";

$_LANG['serverAA']['product']['mainContainer']['selectFields']['selectFields']['leftSection']['packageconfigoption[selectedFields][]']['packageconfigoption[selectedFields][]'] = 'Server Information in the Client Area';
$_LANG['serverAA']['product']['mainContainer']['selectFields']['selectFields']['leftSection']['packageconfigoption[selectedFields][]']['selectFields'] = 'Select the fields that will be displayed in the product Server Information section in the client area';
$_LANG['iso']['3CX Debian 10 (amd64)']																					= '3CX Debian 10 (amd64)';
$_LANG['iso']['AlmaLinux 8.5 (amd64/boot)']																				= 'AlmaLinux 8.5 (amd64/boot)';
$_LANG['iso']['Alpine Virtual 3.15 (amd64)'] 																			= 'Alpine Virtual 3.15 (amd64)';
$_LANG['iso']['Archlinux 2021.11.01 (amd64)'] 																			= 'Archlinux 2021.11.01 (amd64)';
$_LANG['iso']['CentOS 8.5 (amd64/netinstall)']																			= 'CentOS 8.5 (amd64/netinstall)';
$_LANG['iso']['Debian 10.11 (amd64/netinstall)']																		= 'Debian 10.11 (amd64/netinstall)';
$_LANG['iso']['Debian 11.2 (amd64/netinstall)']	 																		= 'Debian 11.2 (amd64/netinstall)';
$_LANG['iso']['FreeBSD 12.3 (amd64/netinstall)'] 																		= 'FreeBSD 12.3 (amd64/netinstall)';
$_LANG['iso']['FreePBX 2104 (amd64)']																					= 'FreePBX 2104 (amd64)';
$_LANG['iso']['IPFire 2.27 (amd64)']																					= 'IPFire 2.27 (amd64)';
$_LANG['iso']['Kali Linux 2021.3a installer (amd64)'] 																	= 'Kali Linux 2021.3a installer (amd64)';
$_LANG['iso']['NixOS 21.11 (amd64/minimal)']																			= 'NixOS 21.11 (amd64/minimal)';
$_LANG['iso']['OPNsense 22.1 (amd64)']																					= 'OPNsense 22.1 (amd64)';
$_LANG['iso']['pfSense CE 2.6.0 (amd64)'] 																				= 'pfSense CE 2.6.0 (amd64)';
$_LANG['iso']['Proxmox Mail Gateway 7.1 ISO Installer']																 	= 'Proxmox Mail Gateway 7.1 ISO Installer';
$_LANG['iso']['Rocky Linux 8.5 (amd64/boot)']																			= 'Rocky Linux 8.5 (amd64/boot)';
$_LANG['iso']['Ubuntu 20.04.4 Live Server (amd64)'] 																	= 'Ubuntu 20.04.4 Live Server (amd64)';
$_LANG['iso']['virtio-win-0.1.215']																						= 'virtio-win-0.1.215';
$_LANG['distribution']['rocky']																							= 'Rocky';
$_LANG['iso']['OpenBSD 7.1'] =                                                     'OpenBSD 7.1';
$_LANG['iso']['pfSense CE 2.5.2 (amd64)'] =                                         'pfSense CE 2.5.2 (amd64)';

// Firewalls limit
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallsLimitNumber]']['packageconfigoption[firewallsLimitNumberDesc]'] = 'Enter the maximum number of firewalls or type in -1 to set it as unlimited.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallInboundRulesNumber]']['packageconfigoption[firewallInboundRulesNumberDesc]'] = 'Enter the maximum number of inbound firewall rules or type in -1 to set it as unlimited.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallOutboundRulesNumber]']['packageconfigoption[firewallOutboundRulesNumberDesc]'] = 'Enter the maximum number of outbound firewall rules or type in -1 to set it as unlimited.';
$_LANG['serverAA']['product']['mainContainer']['configurationForm']['configFields']['rightSection']['packageconfigoption[firewallTotalRulesLimitNumber]']['packageconfigoption[firewallTotalRulesLimitNumberDesc]'] = 'Enter the maximum number of total firewall rules or type in -1 to set it as unlimited.';
$_LANG['serverCA']['firewalls']['firewallsLimitExceed'] = "You cannot exceed the limit of firewalls. The allowed maximum is :firewallsLimit:.";
$_LANG['serverCA']['firewalls']['maxInRulesLimitExceed'] =  "You cannot exceed the limit of firewall inbound rules. The allowed maximum is :maxInRulesLimit:.";
$_LANG['serverCA']['firewalls']['maxOutRulesLimitExceed'] =  "You cannot exceed the limit of firewall outbound rules. The allowed maximum is :maxOutRulesLimit:.";
$_LANG['serverCA']['firewalls']['maxTotalRulesLimitExceed'] = "You cannot exceed the limit of firewall rules. The allowed maximum is :maxTotalRulesLimit:.";

$_LANG['networkGraphUnit'] = 'Bytes/s';
$_LANG['networkPackageGraphUnit'] = 'Packets/s';
$_LANG['networkBandwidthGraphUnit'] = 'Bytes/s';
$_LANG['invalidDomain'] = 'Invalid Domain';

$_LANG['invalidAuthorizationData'] = 'Test connection failed; the provided API token is incorrect.';

// ---------------------------------------------------- Client Area Tasks History ---------------------------------------------------------
$_LANG['tasksHistory'] = "Tasks History";
$_LANG['serverCA']['tasksHistory']['mainContainer']['tasksTable']['tasksTable'] = "Tasks History";
$_LANG['serverCA']['tasksHistory']['mainContainer']['tasksTable']['table']['id'] = "ID";
$_LANG['serverCA']['tasksHistory']['mainContainer']['tasksTable']['table']['task'] = "Task";
$_LANG['serverCA']['tasksHistory']['mainContainer']['tasksTable']['table']['status'] = "Status";
$_LANG['serverCA']['tasksHistory']['mainContainer']['tasksTable']['table']['created'] = "Created";
$_LANG['serverCA']['tasksHistory']['mainContainer']['tasksTable']['table']['completed'] = "Completed";

$_LANG['serverAA']['home']['mainContainer']['tasksTable']['tasksTable'] = "Tasks History";
$_LANG['serverAA']['home']['mainContainer']['tasksTable']['table']['id'] = "ID";
$_LANG['serverAA']['home']['mainContainer']['tasksTable']['table']['task'] = "Task";
$_LANG['serverAA']['home']['mainContainer']['tasksTable']['table']['status'] = "Status";
$_LANG['serverAA']['home']['mainContainer']['tasksTable']['table']['created'] = "Created";
$_LANG['serverAA']['home']['mainContainer']['tasksTable']['table']['completed'] = "Completed";

$_LANG['success'] = "Success";
$_LANG['error'] = "Error";
$_LANG['running'] = "Running";

$_LANG['create_backup'] = "Create Backup";
$_LANG['create_image'] = "Create Image";
$_LANG['start_server'] = "Start Server";
$_LANG['create_server'] = "Create Server";
$_LANG['attach_volume'] = "Attach Volume";
$_LANG['enable_backup'] = "Enable Backup";
$_LANG['disable_backup'] = "Disable Backup";
$_LANG['stop_server'] = "Stop Server";
$_LANG['attach_iso'] = "Attach ISO Image";
$_LANG['detach_iso'] = "Detach ISO Image";
$_LANG['change_name'] = "Change Server Name";
$_LANG['change_type'] = "Change Server Type";
$_LANG['restore_backup'] = "Restore Backup";
$_LANG['enable_protection'] = "Enable Server Protection";
$_LANG['disable_protection'] = "Disable Server Protection";
$_LANG['shutdown_server'] = "Shut Down Server";
$_LANG['change_server_type'] = "Change Server Type";
$_LANG['rebuild_server'] = "Rebuild Server";
$_LANG['enable_rescue']	= "Enable Rescue Mode";
$_LANG['disable_rescue'] = "Disable Rescue Mode";
$_LANG['assign_floating_ip'] = "Assign Floating IP Address";
$_LANG['change_dns_ptr'] = "Change DNS PTR";
$_LANG['change_protection']	= "Change Protection";
$_LANG['apply_firewall'] = "Apply Firewall";
$_LANG['attach_to_network']	= "Attach To Network";
$_LANG['change_alias_ips'] = "Change Alias IP Addresses";
$_LANG['detach_from_network'] = "Detach From Network";
$_LANG['unassign_floating_ip'] = "Unassign Floating IP Address";
$_LANG['reset_server'] = "Reset Server";
$_LANG['request_console'] = "Request Console";
$_LANG['reboot_server'] = "Reboot Server";
$_LANG['remove_firewall'] = "Remove Firewall";