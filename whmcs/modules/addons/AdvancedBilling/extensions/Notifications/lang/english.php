<?php

/**************** BASE Template**************/
$_LANG['ClientAreaNotifications']['Show']                  = 'Show';
$_LANG['ClientAreaNotifications']['Hide']                  = 'Hide';
$_LANG['ClientAreaNotifications']['Reminders']             = 'Reminders';
$_LANG['ClientAreaNotifications']['Name']                  = 'Name';
$_LANG['ClientAreaNotifications']['Status']                = 'Status';
$_LANG['ClientAreaNotifications']['Period Frequency']      = 'Resource Checks Frequency';
$_LANG['ClientAreaNotifications']['Mailing Frequency']     = 'Reminders Frequency';
$_LANG['ClientAreaNotifications']['Options']               = 'Options';
$_LANG['ClientAreaNotifications']['Add Reminder']          = 'Add Reminder';
$_LANG['ClientAreaNotifications']['EditIconTitle']         = 'Edit';
$_LANG['ClientAreaNotifications']['DefineLimitsIconTitle'] = 'Define Limits';
$_LANG['ClientAreaNotifications']['DeleteIconTitle']       = 'Delete';
$_LANG['ClientAreaNotifications']['Close']                 = 'Close';
$_LANG['ClientAreaNotifications']['Confirm']               = 'Confirm';
$_LANG['ClientAreaNotifications']['no data']               = 'No data available.';

/****************Templates**************/

$_LANG['addonCA']['Notifications']['Name']                                          = 'Name';
$_LANG['addonCA']['Notifications']['Add Reminder']                                  = 'Add Reminder';
$_LANG['addonCA']['Notifications']['Edit Reminder']                                 = 'Edit Reminder';
$_LANG['addonCA']['Notifications']['Period of time checking resources back to now'] = 'Resource Checks Frequency';
$_LANG['addonCA']['Notifications']['Frequently e-mail reminding 1 per']             = 'Reminders Frequency';
$_LANG['addonCA']['Notifications']['Close']                                         = 'Close';
$_LANG['addonCA']['Notifications']['Confirm']                                       = 'Confirm';
$_LANG['addonCA']['Notifications']["Expected positive values."]                     = "Please enter a positive value.";
$_LANG['addonCA']['Notifications']["Expected numeric values."]                      = "Please enter a numeric value.";
$_LANG['addonCA']['Notifications']["used"]                                          = "used";
$_LANG['addonCA']['Notifications']["Fill all fields."]                              = "You need to fill in all fields.";
$_LANG['addonCA']['Notifications']['Delete Reminder']                               = 'Delete Reminder';
$_LANG['addonCA']['Notifications']['Notifications']['Limits has been set.'] = "The limits have been set successfully";

$_LANG['addonCA']['Notifications']['Notifications']['ReminderAdd']  = "The reminder has been added successfully";
$_LANG['addonCA']['Notifications']['Notifications']['ReminderEdit'] = "The reminder has been edited successfully";
$_LANG['addonCA']['Notifications']['Notifications']['Reminder has been deleted.']  = 'The reminder has been deleted successfully';
$_LANG['addonCA']['Notifications']['Notifications']['Status has been changed.'] = "The status has been changed successfully";

$_LANG['addonCA']['Notifications']['Notifications']['The reminder has been deleted successfully']                   = 'The reminder has been deleted successfully';
$_LANG['addonCA']['Notifications']['Notifications']['Something went wrong.']                                        = 'Something has gone wrong.';
$_LANG['addonCA']['Notifications']['Notifications']['Status has been changed.']                                     = 'Status has been changed.';
$_LANG['addonCA']['Notifications']['Notifications']['Limits has been set.']                                         = 'Limits has been set.';
$_LANG['addonCA']['Notifications']['Notifications']['RemindersLimitReached']                                        = 'Remainders limit reached.';
$_LANG['addonCA']['Notifications']['Notifications']['Something went wrong. Check your pricing for this product.']   = 'Something went wrong. Check your pricing for this product.';

$_LANG['addonCA']['Notifications']['Reminder has been deleted.']         = 'The reminder has been deleted successfully';
$_LANG['addonCA']['Notifications']["Something went wrong."]              = "Something has gone wrong.";
$_LANG['addonCA']['Notifications']["Reminder has been edited."]          = "The reminder has been edited successfully";
$_LANG['addonCA']['Notifications']["Reminder has been added."]           = "The reminder has been added successfully";
$_LANG['addonCA']['Notifications']["Status has been changed."]           = "The status has been changed successfully";
$_LANG['addonCA']['Notifications']["Limits has been set."]               = "The limits have been set successfully";
$_LANG['addonCA']['Notifications']['EditIconTitle']                      = 'Edit';
$_LANG['addonCA']['Notifications']['DefineLimitsIconTitle']              = 'Define Limits';
$_LANG['addonCA']['Notifications']['DeleteIconTitle']                    = 'Delete';
$_LANG['addonCA']['Notifications']['DeleteQuestion']                     = 'Are you sure that you want to delete the selected reminder? ';
$_LANG['addonCA']['Notifications']['Define limits']                      = 'Define Limits';
$_LANG['addonCA']['Notifications']['Notifications']['noPricingDefinied'] = 'No prices are set for this product. Please contact the administrator.';
$_LANG['addonCA']['Notifications']['no data']                            = 'No data available.';
$_LANG['addonCA']['Notifications']['Name']                               = 'Name';
$_LANG['addonCA']['Notifications']['Status']                             = 'Status';
$_LANG['addonCA']['Notifications']['Period Frequency']                   = 'Resource Checks Frequency';
$_LANG['addonCA']['Notifications']['Mailing Frequency']                  = 'Reminders Frequency';
$_LANG['addonCA']['Notifications']['Options']                            = 'Options';
$_LANG['addonCA']['Notifications']['addReminder helper']                 = 'Reminders are email notifications sent when the resource usage limit is reached or exceeded. To add one, define its name along with the frequency of resource checks and messages to be dispatched. Once you create a reminder, you will be able to define the resource limits which, if exceeded, will result in sending a notification.';
$_LANG['addonCA']['Notifications']['limiter helper']                     = 'Define resource limits on the basis of which notifications specified in reminder settings will be sent. Determine if reminders shall be dispatched after a particular value is reached, exceeded or both.';
$_LANG['addonCA']['Notifications']['limiter helper second']              = 'Note that meeting a single defined condition is enough for the reminder to be sent. If several different conditions are met at once, the corresponding number of notifications will be dispatched. If you do not want to receive certain reminders, set the limit value of a given resource to zero.';
$_LANG['addonCA']['Notifications']['Hour']                               = 'Hour';
$_LANG['addonCA']['Notifications']['Hours']                              = 'Hours';
$_LANG['addonCA']['Notifications']['Day']                                = 'Day';
$_LANG['addonCA']['Notifications']['Days']                               = 'Days';
$_LANG['addonCA']['Notifications']['Week']                               = 'Week';
$_LANG['addonCA']['Notifications']['Weeks']                              = 'Weeks';
$_LANG['addonCA']['Notifications']['tooltip']                            = 'Choose the desired option from the dropdown menu or enter your own numeric value that will determine the frequency in hours.';
$_LANG['addonCA']['Notifications']['Notifications']['The status has been changed successfully'] = 'The status has been changed successfully';

// error which is depending on whmcs tables coding
$_LANG['addonCA']['Notifications']["SQLSTATE[HY000]: General error: 1267 Illegal mix of collations (latin1_swedish_ci,IMPLICIT) and (utf8_unicode_ci,COERCIBLE) for operation '='"] = "The name of a reminder has to contain Latin characters only.";


