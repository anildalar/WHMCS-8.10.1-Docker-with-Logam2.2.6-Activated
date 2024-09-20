<?php

/* * *************************************************************************************
 *
 *
 *                  ██████╗██████╗ ███╗   ███╗         Customer
 *                 ██╔════╝██╔══██╗████╗ ████║         Relations
 *                 ██║     ██████╔╝██╔████╔██║         Manager
 *                 ██║     ██╔══██╗██║╚██╔╝██║
 *                 ╚██████╗██║  ██║██║ ╚═╝ ██║         For WHMCS
 *                  ╚═════╝╚═╝  ╚═╝╚═╝     ╚═╝
 *
 *
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com>
 *
 *
 * @link        http://www.docs.modulesgarden.com/CRM_For_WHMCS for documentation
 * @link        http://modulesgarden.com ModulesGarden
 *              Top Quality Custom Software Development
 * @copyright   Copyright (c) ModulesGarden, INBS Group Brand,
 *              All Rights Reserved (http://modulesgarden.com)
 *
 * This software is furnished under a license and may be used and copied only  in
 * accordance  with  the  terms  of such  license and with the inclusion of the above
 * copyright notice.  This software  or any other copies thereof may not be provided
 * or otherwise made available to any other person.  No title to and  ownership of
 * the  software is hereby transferred.
 *
 * ************************************************************************************ */



/**
 * Default language file for module
 *
 * Language translation relay on multidimensional arrays! (to make it easier for angular)
 * and for performance reasons
 *
 *
 * @author Piotr Sarzyński <piotr.sa@modulesgarden.com>
 */
/* * **************************************************************************************
 *                          English Language
 * ************************************************************************************** */


/**
 * Some Main Translations
 */
// Module Name
$_LANG['CRM']                           = 'CRM';
// Module Description
$_LANG['Customer Relationship Manager'] = 'Customer Relationship Manager';
// prefix used in every window title
$_LANG['window_prefix']                 = 'CRM | ';



/**
 * Main navigation tabs in module header
 * you can easily change translation of some element, just keep on mind that its array...
 */
$_LANG['navigation'] = array(
    'createlead'          => 'Create Contact',
    'dashboard'           => 'Dashboard',
    'about'               => 'About',
    'leads'               => 'Leads',
    'potentials'          => 'Potentials',
    'calendar'            => 'Calendar',
    'board'               => 'Board',
    'campaigns'           => 'Campaigns',
    'dynamicTypesSubmenu' => 'Contacts',
    'frontend'            => array(
        'frontend'   => 'Frontend',
        'typography' => 'Typography',
        'panels'     => 'panels',
        'buttons'    => 'buttons',
        'icons'      => 'icons',
        'boxes'      => 'boxes',
    ),
    'tables'              => array(
        'tables'     => 'tables',
        'simple'     => 'simple',
        'extended'   => 'extended',
        'datatables' => 'datatables',
    ),
    'forms'               => array(
        'forms'    => 'Forms',
        'general'  => 'General',
        'advanced' => 'Advanced',
    ),
    'settings'            => array(
        'settings'     => 'Settings',
        'mailbox'      => 'Mailboxes',
        'fields'       => 'Fields',
        'permissions'  => 'Permissions',
        'personal'     => 'Personal',
        'types'        => 'Contact Types',
        'general'      => 'General',
        'importexport' => 'Import / Export',
        'webforms'     => 'Web Forms',
        'automations'  => 'Automations',
        'migrator'     => 'Migrator',
    ),
    'utils'               => array(
        'utils'         => 'Utilities',
        'statistics'    => 'Statistics',
        'archive'       => 'Archive',
        'notifications' => 'Notifications',
        'massmessage'   => 'Mass Messages',
        'importmail'    => 'Received Messages'
    ),
    'examples'            => array(
        'examples'    => 'Examples',
        'leadsummary' => 'Lead Summary',
        'leadslist'   => 'Leads List',
        'leadcreate'  => 'Lead Create',
    ),
);

// static fields for each lead/potential
$_LANG['staticfields'] = array(
    'id'           => 'ID',
    'name'         => 'First Name',
    'lastname'     => 'Last Name',
    'status'       => 'Status',
    'email'        => 'Email',
    'phone'        => 'Phone',
    'priority'     => 'Priority',
    'potentials'   => 'Potentials',
    'is_potential' => 'Type',
    'client'       => 'Assigned Client',
    'ticket'       => 'Assigned Tickets',
    'admin'        => 'Assigned Admin',
    'country'      => 'Country',
    'labels'       => 'Labels',
    'short_description' => 'Short Description'
);


// permissions
$_LANG['permission.field.contacts_management']                      = 'Contacts Management';
$_LANG['permission.field.contacts_management.create_lead']          = 'Create Lead';
$_LANG['permission.field.contacts_management.convert']              = 'Convert Between Types (Lead/Potential)';
$_LANG['permission.field.contacts_management.trash']                = 'Move To Archive';
$_LANG['permission.field.contacts_management.untrash']              = 'Restore From Archive';
$_LANG['permission.field.contacts_management.change_priority']      = 'Can Change Priority';
$_LANG['permission.field.contacts_management.change_status']        = 'Can Change Status';
$_LANG['permission.field.contacts_management.delete_contact']       = 'Can Delete Contacts';
$_LANG['permission.field.contacts_management.assign_admin']         = 'Assign/Unassign Administrator';
$_LANG['permission.field.contacts_management.assign_client']        = 'Assign/Unassign Client';
$_LANG['permission.field.contacts_management.change_country']       = 'Can Change Country';
$_LANG['permission.field.contacts_management.change_labels']        = 'Can Change Labels';
$_LANG['permission.field.contacts_management.change_campaigns']     = 'Can Change Campaigns';
$_LANG['permission.field.contacts_management.assign_ticket']        = 'Assign/Unassign Ticket';
$_LANG['permission.field.contacts_management.not_mine']             = 'View Details Of Leads Not Assigned To You';
$_LANG['permission.field.contacts_management.allow_email']          = 'Send Email To Lead/Potential';
$_LANG['permission.field.contacts_management.allow_sms']            = 'Send SMS To Lead/Potential';
$_LANG['permission.field.contacts_management.allow_notes']          = 'Add Note For Lead/Potential';
$_LANG['permission.field.contacts_management.allow_ticket_respose'] = 'Send Ticket Response To Lead/Potential';
$_LANG['permission.field.contacts_management.create_followup']      = 'Create Follow-up (with reminders) For Lead/Potential';
$_LANG['permission.field.contacts_management.view_files']           = 'View Lead/Potential Files';
$_LANG['permission.field.contacts_management.view_logs']            = 'View Logs Of Lead/Potential';
$_LANG['permission.field.settings']                                 = 'Settings';
$_LANG['permission.field.settings.campaigns']                       = 'Access To Campaigns Management';
$_LANG['permission.field.settings.notifications']                   = 'Access To Notifications Management';
$_LANG['permission.field.settings.view_general']                    = 'View Global Settings';
$_LANG['permission.field.settings.manage_general']                  = 'Manage Global Settings';
$_LANG['permission.field.settings.view_cron']                       = 'View Cron';
$_LANG['permission.field.settings.manage_followups']                = 'Manage Follow-up Types Settings';
$_LANG['permission.field.settings.mailbox']                         = 'Manage Mailboxes Configuration';
$_LANG['permission.field.settings.manage_fields']                   = 'Manage Custom Fields';
$_LANG['permission.field.settings.manage_statuses']                 = 'Manage Statuses';
$_LANG['permission.field.settings.manage_fields_map']               = 'Manage Fields Map';
$_LANG['permission.field.settings.manage_types']                    = 'Manage Contact Types';
$_LANG['permission.field.settings.manage_massmessage']              = 'Access To Mass Messages';
$_LANG['permission.field.settings.importexport']                    = 'Grant Access To Import/Export Feature For Contacts';
$_LANG['permission.field.settings.webforms']                        = 'Grant Access To Web Forms';
$_LANG['permission.field.settings.automations']                     = 'Grant Access To Automations';
$_LANG['permission.field.settings.general.label.view']              = 'View Labels Tab In General';
$_LANG['permission.field.calendar']                                 = 'Calendar';
$_LANG['permission.field.calendar.view']                            = 'Access To Calendar Page';
$_LANG['permission.field.calendar.other_followups']                 = "View Other Administrators' Follow-ups";
$_LANG['permission.field.calendar.other_reschedue']                 = "Reschedule Other Administrators' Follow-ups";
$_LANG['permission.field.calendar.other_delete']                    = "Delete Other Administrators' Follow-ups";
$_LANG['permission.field.statistics']                               = 'Statistics';
$_LANG['permission.field.statistics.other_admins']                  = 'View Statistics Related To Other Administrators';
$_LANG['permission.field.statistics.allow_global']                  = 'View Global Statistics';
$_LANG['permission.field.other']                                    = 'Other';
$_LANG['permission.field.other.preview_dashboard']                  = 'View Dashboard Of Other Administrators';
$_LANG['permission.field.other.access_migrator']                    = 'Access To Migrator Tool (permission to migrate data from previous CRM versions)';
$_LANG['permission.field.leads']                                    = 'Contact Types Access';
$_LANG['permission.field.other.preview_import_mail']                = 'View Received Messages';
$_LANG['permission.field.other.board_view']                         = 'View Board';

// Breadcrumbs translations
$_LANG['breadcrumbs.summary']               = 'Summary';
$_LANG['breadcrumbs.followups']             = 'Follow-ups';
$_LANG['breadcrumbs.followup.edit']         = 'Follow-up';
$_LANG['breadcrumbs.followup.notes']        = 'Notes';
$_LANG['breadcrumbs.followup.emails']       = 'Emails';
$_LANG['breadcrumbs.followup.orders']       = 'Orders';
$_LANG['breadcrumbs.followup.quotes']       = 'Quotes';
$_LANG['breadcrumbs.followup.files']        = 'Files';
$_LANG['breadcrumbs.followup.logs']         = 'Logs';
$_LANG['breadcrumbs.followup.tickets']      = 'Tickets';
$_LANG['breadcrumbs.massmessage.list']      = 'Mass Messages';
$_LANG['breadcrumbs.massmessage.add']       = 'Create';
$_LANG['breadcrumbs.massmessage.edit']      = 'Edit';
$_LANG['breadcrumbs.settings.importexport'] = 'Import / Export';


// Logs translations
$_LANG['priority.0']         = $_LANG['priority.1']         = $_LANG['priority.low']       = 'Low';
$_LANG['priority.2']         = $_LANG['priority.medium']    = 'Medium';
$_LANG['priority.3']         = $_LANG['priority.important'] = 'Important';
$_LANG['priority.4']         = $_LANG['priority.urgent']    = 'Urgent';


// Logs translations
$_LANG['log.reassign.new.contact']  = 'The new contact has been created for the contact type <b>:id</b> <i>:name</i>';
$_LANG['log.reassign.priority']     = 'The priority has been changed to <b>:idpriority</b> <b>:priority</b>';
$_LANG['log.reassign.phone']        = 'The phone has been changed to <b>:phone</b>';
$_LANG['log.reassign.description']  = 'The lead description has been changed to <b>:description</b>';
$_LANG['log.reassign.short_description'] = 'The lead short description has been changed to <b>:short_description</b>';
$_LANG['log.reassign.labels']       = 'The labels have been changed to <b>:labels</b>.';
$_LANG['log.reassign.labels_move']  = 'The labels have been changed from <b>:from</b><i>:namefrom</i> to <b>:to</b><i>:nameto</i>';
$_LANG['log.reassign.email']        = 'The email has been changed to <b>:email</b>';
$_LANG['log.reassign.name']         = 'The name has been changed to <b>:name :lastname</b>';
$_LANG['log.reassign.status']       = 'The status has been changed to <b>:id</b> <b>:status</b>';
$_LANG['log.reassign.admin']        = 'The admin has been reassigned to <b>:admin</b>';
$_LANG['log.reassign.ticket']       = 'The ticket has been reassigned to <b>:ticket</b>';
$_LANG['log.reassign.client']       = 'The client has been reassigned to <b>:client</b>';
$_LANG['log.reassign.country']      = 'The country has been changed to <b>:country</b>';
$_LANG['log.reassign.type']         = 'The contact type has been reassigned from <b>:oid</b> <i>:old</i> to <b>:id</b> <i>:type</i>';
$_LANG['log.note.new']              = 'The new note has been added: :conent';
$_LANG['log.unassign.ticket']       = 'The ticket has been unassigned';
$_LANG['log.unassign.client']       = 'The client has been unassigned';
$_LANG['log.unassign.admin']        = 'The admin has been unassigned';
$_LANG['log.unassign.country']      = 'The country has been unassigned';
$_LANG['log.unassign.labels']       = 'The labels have been unassigned';
$_LANG['log.reminder.new.date']     = 'The reminder date has been updated';
// fields
$_LANG['log.field.text.update']     = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.textarea.update'] = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.numeric.update']  = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.date.update']     = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.datetime.update'] = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.checkbox.update'] = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.radio.update']    = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';
$_LANG['log.field.select.update']   = 'The field #:id <i>:field</i> has been updated to <b>:value</b>';

// resources priority
$_LANG['priority.low']       = 'Low';
$_LANG['priority.medium']    = 'Medium';
$_LANG['priority.important'] = 'Important';
$_LANG['priority.urgent']    = 'Urgent';


// some primary translations used in multiple places
$_LANG['form.add']                 = 'Add';
$_LANG['form.edit']                = 'Edit';
$_LANG['form.date']                = 'Date';
$_LANG['form.description']         = 'Description';
$_LANG['form.admin']               = 'Admin';
$_LANG['form.close']               = 'Close';
$_LANG['form.cancel']              = 'Cancel';
$_LANG['form.update']              = 'Update';
$_LANG['form.reschedule']          = 'Reschedule';
$_LANG['form.delete']              = 'Delete';
$_LANG['form.name']                = 'Name';
$_LANG['form.radio']               = 'Choose Auth';
$_LANG['form.radio.global.label']  = 'Global';
$_LANG['form.radio.private.label'] = 'Private';
$_LANG['form.auth']                = 'Authorization';
$_LANG['form.auth_client_id']      = 'Client ID';
$_LANG['form.auth_client_secret']  = 'Client Secret';
$_LANG['form.color']               = 'Color';
$_LANG['form.enabled']             = 'Enabled';
$_LANG['form.any']                 = 'Any';
$_LANG['form.empty']               = 'Not Set';
$_LANG['form.search.placeholder']  = 'Search';
$_LANG['form.calendar_select']     = 'Google Calendar To Synchronize';
$_LANG['lead']                     = 'Lead';
$_LANG['leads']                    = 'Leads';
$_LANG['contacts']                 = 'Contacts';
$_LANG['potentials']               = 'Potentials';
$_LANG['potential']                = 'Potential';
$_LANG['reminders']                = 'Reminders';
$_LANG['followup']                 = 'Follow-up';
$_LANG['text.summary']             = 'Summary';
$_LANG['text.system']              = 'System';
$_LANG['text.not.assigned']        = 'Not Assigned';
$_LANG['text.not.set']             = 'Not Set';
$_LANG['text.delete']              = 'Delete';
$_LANG['text.success']             = 'Success';


$_LANG['board.select.labels.placeholder'] = 'Choose Label';
$_LANG['board.add.labels']                = 'Labels';
$_LANG['board.add.labels.button']         = 'Add Label';
$_LANG['board.client.list']               = 'Contacts List';


//
// followups alarm
//
$_LANG['followups.alarm.date.label']        = 'Start Date :';
$_LANG['followups.alarm.description.label'] = 'Description :';
//
// tables headers
//
# followups
$_LANG['table.th.id']                       = '#ID';
$_LANG['table.th.date']                     = 'Date';
$_LANG['table.th.name']                     = 'Name';
$_LANG['table.th.method']                   = 'Method';
$_LANG['table.th.status']                   = 'Status';
$_LANG['table.th.remind']                   = 'Remind';
$_LANG['table.th.active']                   = 'Active';
$_LANG['table.th.actions']                  = 'Actions';
$_LANG['table.th.preview']                  = 'Preview';
$_LANG['table.th.color']                    = 'Color';
$_LANG['table.reminders.empty']             = 'There are no reminders of this follow-up';
$_LANG['table.pagination.showing']          = 'Showing';
$_LANG['table.reminders.admin']             = 'For Admin: ';
$_LANG['table.reminders.resource']          = 'For Resource';
$_LANG['table.pagination.to']               = 'to';
$_LANG['table.pagination.of']               = 'of';
$_LANG['table.pagination.entries']          = 'entries';
$_LANG['table.pagination.display']          = 'Display';
$_LANG['table.pagination.perpage']          = 'per page.';
$_LANG['table.empty.msg']                   = 'There is nothing to show';

$_LANG['Quotes'] = 'Quotes';

// calendar page
$_LANG['calendar.widget.name']                     = 'Calendar';
$_LANG['calendar.navigation.previous']             = 'Previous';
$_LANG['calendar.navigation.today']                = 'Today';
$_LANG['calendar.navigation.name']                 = 'Next';
$_LANG['calendar.navigation.month']                = 'Month';
$_LANG['calendar.navigation.week']                 = 'Week';
$_LANG['calendar.navigation.day']                  = 'Day';
$_LANG['calendar.legend.header']                   = 'Types of follow-ups displayed in the calendar:';
$_LANG['calendar.legend.helper']                   = "Click on a follow-up's name to show details";
$_LANG['calendar.months.label']                    = '["January", "February", "March", "April", "May", "June", "July","August", "September", "October", "November", "December"]';
$_LANG['calendar.monthsShort.label']               = '["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]';
$_LANG['calendar.weekdays.label']                  = '["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]';
$_LANG['calendar.weekdaysShort.label']             = '["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]';
$_LANG['calendar.weekdaysMin.label']               = '["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]';
$_LANG['calendar.relativeTime.label']              = '{ "future": "in %s", "past": "%s ago", "s": "seconds", "m":  "a minute", "mm": "%d minutes", "h":  "an hour", "hh": "%d hours", "d":  "a day", "dd": "%d days", "M":  "a month", "MM": "%d months", "y":  "a year", "yy": "%d years"}';
$_LANG['calendar.lang.label']                      = 'en';
// followup edit
$_LANG['followup.reminders']                       = 'Reminders';
$_LANG['followup.form.assignedfor']                = 'Assigned To';
$_LANG['followup.to.admin']                        = 'Admin';
$_LANG['followup.to.client']                       = 'Client';
$_LANG['followup.reschedue']                       = 'Reschedule';
$_LANG['followup.reschedue.reason']                = 'Reason';
$_LANG['followup.reschedue.placeholder']           = 'Type in the reason for rescheduling';
$_LANG['followup.reschedue.updatereminders']       = 'Update Reminders';
$_LANG['followup.reschedue.updatereminders.descr'] = 'When enabled, each reminder date will be adjusted according to the changed date.';
$_LANG['followup.update']                          = 'Update';

$_LANG['text.current.date'] = 'Current Date';
$_LANG['text.disabled']     = 'Disabled';
$_LANG['text.disable']      = 'Disable';
$_LANG['text.enabled']      = 'Enabled';
$_LANG['text.enable']       = 'Enable';
$_LANG['text.show']         = 'Show';
$_LANG['text.hide']         = 'Hide';
$_LANG['text.active']       = 'Active';
$_LANG['text.inactive']     = 'Inactive';
$_LANG['text.new.date']     = 'New Date';
$_LANG['text.ok']           = 'OK';
$_LANG['text.yes']          = 'Yes';
$_LANG['text.no']           = 'No';
$_LANG['text.none']         = 'None';
$_LANG['text.error']        = 'Error';
$_LANG['text.warning']      = 'Warning';
$_LANG['text.empty']        = 'Empty';
$_LANG['text.not.required'] = 'Not Required';
$_LANG['text.created_at']   = 'Created';
$_LANG['text.updated_at']   = 'Update';
$_LANG['text.no.invoice']   = 'No Invoice';
$_LANG['text.admin']        = 'Admin';

$_LANG['text.quotations.disabled']       = 'Quotations integration is disabled';
$_LANG['text.withData']                  = 'From Date';
$_LANG['text.reschedule.title']          = 'Reschedule reminders by date';
$_LANG['text.reschedule.on.admin.title'] = 'Reschedule reminders per admin';
$_LANG['text.change.date.title']         = 'Change date for the follow-up';
$_LANG['text.change.label.title']        = 'Manage Labels';

// validators
$_LANG['form.validator.text']              = 'New Date';
$_LANG['form.validator.text.required']     = 'This field cannot be empty';
$_LANG['form.validator.email.in.use']       = 'This email address is already in use!';
$_LANG['form.validator.regex.required']    = 'Regex expression has to be valid!';
$_LANG['form.validator.checkbox.required'] = 'Confirmation is required';
$_LANG['form.validator.date']              = 'The date has to be valid';
$_LANG['form.validator.reason']            = 'The reason is required';
$_LANG['form.validator.select.required']   = 'Please Select';

///////////////////////////////////
// Dashboard
///////////////////////////////////
$_LANG['dashboard.resources.button.all.label']          = 'All';
$_LANG['dashboard.preview.for']                         = 'Dashboard Preview for';
$_LANG['dashboard.followups.widgetname']                = "Follow-ups for ";
$_LANG['dashboard.followups.dateincalendar']            = 'Select in calendar';
$_LANG['dashboard.followups.emptyfordaydateincalendar'] = 'Select in calendar';
$_LANG['dashboard.followups.emptyforday']               = 'Sorry, no follow-ups were found for the chosen day.';
$_LANG['table.th.followup.resource']                    = 'Contact Name';
$_LANG['table.th.followup.type']                        = 'Type';
$_LANG['table.th.followup.descr']                       = 'Description';
$_LANG['table.th.followup.status']                      = 'Status';
$_LANG['table.th.followup.priority']                    = 'Priority';
$_LANG['table.th.followup.reminders']                   = 'Reminders';

$_LANG['dashboard.activity.widgetname'] = 'Last Activity';
$_LANG['table.th.activity.author']      = 'Author';
$_LANG['table.th.activity.event']       = 'Event';
$_LANG['table.th.activity.message']     = 'Message';

$_LANG['dashboard.emails.widgetname']   = 'Last Emails';
$_LANG['table.th.emails.author']        = 'Author';
$_LANG['table.th.emails.subject']       = 'Subject';
$_LANG['table.th.emails.message']       = 'Message';
$_LANG['table.th.emails.from']         = 'From';
$_LANG['table.th.emails.to']         = 'To';


///////////////////////////////////
// Statistics
///////////////////////////////////
$_LANG['statistics.previewfor']              = 'Statistics for';
$_LANG['statistics.last10.leads']            = 'Last 10 ';
$_LANG['statistics.last10.potentials']       = 'Last 10 Potentials';
$_LANG['statistics.last10.th.leadname']      = 'Contact Name';
$_LANG['statistics.last10.th.potentialname'] = 'Potential Name';
$_LANG['statistics.last10.th.status']        = 'Status';
$_LANG['statistics.last10.th.admin']         = 'Assigned Admin';
$_LANG['statistics.last10.th.created']       = 'Created On';

$_LANG['statistics.month']        = 'Month';
$_LANG['statistics.new.in.month'] = 'New Contacts in';
$_LANG['statistics.new.in.year']  = 'New in';
$_LANG['statistics.choose.month'] = 'Choose Month';
$_LANG['statistics.choose.year']  = 'Choose Year';

$_LANG['statistics.leads.per.status']      = 'Leads Per Status';
$_LANG['statistics.potentials.per.status'] = 'Potentials Per Status';
$_LANG['statistics.widget.per.admin']      = 'Assigned Contacts to Admins in total';

///////////////////////////////////
// Settings > Personal
///////////////////////////////////
$_LANG['settings.personal.tab']           = 'Personal Settings';
$_LANG['settings.personal.tab.fields']    = "Fields' View";
$_LANG['settings.personal.avatar.url']    = 'Avatar URL';
$_LANG['settings.personal.upgrade']       = 'Update Personal Settings';
$_LANG['settings.personal.default.email'] = 'Default Email';

$_LANG['settings.personal.view.top.info']             = "Here you can determine what columns you want to be visible in various data tables. You can add new fields for resources and configure settings according to which tables and columns will be displayed. This section refers to table configuration on the Dashboard page and Contact main tables accordingly.<br/> Please select the section that you want to configure first:";
$_LANG['settings.personal.view.visiblity.leads']      = "In this section you can define the general order of fields and their visibility that will be applied to <b>Contacts' listing page</b> (in the Main table). Choose from the fields below to adjust the Contact's page to your needs. ";
$_LANG['settings.personal.view.visiblity.potentials'] = "In this section you can define the order and visibility that will be applied to <b>Potentials' listing page</b> (in the Main table). Outline here the general visibility of fields and their order in line with your needs.";
$_LANG['settings.personal.view.visiblity.dashboard']  = "This order is applied to the Dashboard page. Table for Leads and for Potentials can be designed here according to your preferences. These settings allow you to define fields for <b>both Leads and Potentials.</b>";
$_LANG['settings.personal.view.editing.curently']     = 'Currently Edited';
$_LANG['settings.personal.view.tag.dashboard']        = 'Dashboard';

$_LANG['settings.personal.view.edit.header']         = 'Configure visible columns for: ';
$_LANG['settings.personal.view.edit.note']           = 'Drag & drop the fields to a suitable container in order to define their desired order and visibility.';
$_LANG['settings.personal.view.visible']             = 'Visible';
$_LANG['settings.personal.view.visible.tooltip']     = 'Displayed columns and their order';
$_LANG['settings.personal.static.available']         = 'Available Static Fields';
$_LANG['settings.personal.static.available.tooltip'] = 'These are fields specified by the system';
$_LANG['settings.personal.view.no.fields']           = 'There are no fields';
$_LANG['settings.personal.available']                = 'Available Fields';
$_LANG['settings.personal.available.tooltip']        = 'Defined Custom Fields';
$_LANG['settings.personal.available.drag']           = 'Drag Field here';


///////////////////////////////////
// Settings > Permissions
///////////////////////////////////
$_LANG['settings.permissions.new.role.widget']            = 'Add New Role';
$_LANG['settings.permissions.new.role.success']           = 'The new role has been added successfully';
$_LANG['settings.permissions.new.role.name.placeholder']  = 'Enter the name of a new role here';
$_LANG['settings.permissions.new.role.group']             = 'Admin Role Group';
$_LANG['settings.permissions.new.role.descr.placeholder'] = 'Describe the new role shortly';

$_LANG['settings.permissions.roles.widget']       = "Role Permissions";
$_LANG['settings.permissions.roles.widget']       = "Role Permissions";
$_LANG['settings.permissions.roles.th.descr']     = 'Description';
$_LANG['settings.permissions.roles.th.admin']     = 'Assigned Admin Group';
$_LANG['settings.permissions.roles.empty']        = 'There are no roles yet.';
$_LANG['settings.permissions.roles.not.possible'] = 'No available admin groups to select';

$_LANG['settings.permissions.for'] = 'Permissions for';


///////////////////////////////////
// Settings > general
///////////////////////////////////
$_LANG['settings.general.tab.overview']          = "System Overview";
$_LANG['settings.general.tab.label']             = "Labels";
$_LANG['settings.general.label.widget.newtype']  = "Add New Labels";
$_LANG['settings.general.label.newtype.success'] = "The new label has been created successfully";
$_LANG['settings.general.labels']                = "Labels";
$_LANG['settings.general.labels.newName.placeholder'] = 'Enter your new label name';

$_LANG['settings.general.tab.settings']    = "Options";
$_LANG['settings.general.tab.followups']   = "Follow-ups";
$_LANG['settings.general.widget.monitor']  = 'System Monitoring';
$_LANG['settings.general.tab.api']         = 'API';
$_LANG['auth.information.to.connect']      = 'Integration with Google Calendar requires the creation of an application. Detailed information can be found';
$_LANG['auth.information.to.connect.here'] = "here";

$_LANG['settings.general.integrated']     = 'Integrated';
$_LANG['settings.general.not.integrated'] = 'Not Integrated';


$_LANG['settings.general.integration.smscenter']       = 'SMS Center Integration';
$_LANG['settings.general.integration.smscenter.descr'] = 'Integrate with SMS Center For WHMCS (developed by ModulesGarden) to deliver follow-up text messages to admins as well as send short messages directly from a contact.';
$_LANG['settings.general.monitor.cron.descr']          = 'The cron job has not been executed yet. Please check if you have configured it properly.';
$_LANG['settings.general.monitor.cron.descr.ok']       = 'The system detected that the cron has been executed at least once.';
$_LANG['settings.general.monitor.cron']                = 'Cron';
$_LANG['settings.general.monitor.emails']              = 'Email Templates';
$_LANG['settings.general.monitor.emails.in.use']       = 'Email templates in use:';
$_LANG['settings.general.monitor.uploads']             = 'Uploads';
$_LANG['settings.general.monitor.uploads.descr']       = 'The directory is not configured properly. The system is unable to create the folder automatically. Create the folder and set directory permissions to <code>0777</code>.';

$_LANG['settings.general.monitor.cron.details']        = 'Cron Details';
$_LANG['settings.general.monitor.cron.info']           = 'Cron has to be set manually by an administrator. It will handle various functionalities such as sending emails at the specified time. It is recommended that cron run should be set at least once a day to review configured notifications in the system.';
$_LANG['settings.general.monitor.cron.path']           = 'Path';
$_LANG['settings.general.monitor.cron.url']            = 'URL';
$_LANG['settings.general.monitor.cron.lastrun']        = 'Last Execution';
$_LANG['settings.general.monitor.cron.lastrun.error']  = 'No records of execution';
$_LANG['settings.general.monitor.cron.interval']       = 'Interval';
$_LANG['settings.general.monitor.cron.interval.ago']   = 'minutes ago';
$_LANG['settings.general.monitor.cron.interval.error'] = 'SYSTEM CANNOT DEFINE INTERVAL';
$_LANG['settings.general.monitor.cron.interval.descr'] = 'Adjust your cron job interval time to desired frequency. Email/follow-up sending is strongly related to the cron execution. Remember that if you set cron interval once per day, you will receive follow-ups once a day only.';

$_LANG['settings.general.widget']                 = 'Additional Options';
$_LANG['settings.general.enable.quotation']       = 'Enable Quotations';
$_LANG['settings.general.enable.quotation.descr'] = 'If enabled, this feature gives you the possibility to create quotes for contacts.';

$_LANG['settings.general.disable.email_duplicate.descr'] = 'If selected, the admin will be allowed to create contacts with already existing email addresses.';
$_LANG['settings.general.disable.email_duplicate']      = 'Allow Contact Duplicates';

$_LANG['settings.general.disable.require_contact_email.descr'] = 'If enabled, the administrator will not be able to create a contact without an email address.';
$_LANG['settings.general.disable.require_contact_email'] = 'Require Email Address';

$_LANG['settings.general.select.defaultWeekDay']           = 'Start Week On';
$_LANG['settings.general.select.defaultWeekDay.monday']    = 'Monday';
$_LANG['settings.general.select.defaultWeekDay.tuesday']   = 'Tuesday';
$_LANG['settings.general.select.defaultWeekDay.wednesday'] = 'Wednesday';
$_LANG['settings.general.select.defaultWeekDay.thursday']  = 'Thursday';
$_LANG['settings.general.select.defaultWeekDay.friday']    = 'Friday';
$_LANG['settings.general.select.defaultWeekDay.saturday']  = 'Saturday';
$_LANG['settings.general.select.defaultWeekDay.sunday']    = 'Sunday';

$_LANG['settings.general.select.syncContact']              = 'Synchronize Contact Details';
$_LANG['settings.general.select.syncContact.default']      = 'Never';
$_LANG['settings.general.select.syncContact.whmcsToCrm']   = 'From WHMCS to CRM';
$_LANG['settings.general.select.syncContact.crmToWhmcs']   = 'From CRM to WHMCS';
$_LANG['settings.general.select.syncContact.both']         = 'Both Directions';

$_LANG['settings.general.select.email_import_type'] = 'Email Import Type';
$_LANG['settings.general.select.email_import_type.tooltip'] = 'Define how emails are imported into the system:<br> <strong>Per Email Address</strong> - imported conversations are delivered to all contacts with the used email address<br> <strong>Include Contact ID in Subject</strong> - imported conversations are delivered to all contacts with the used email address, the contact ID is added to the email subject and conversation log<br> <strong>Create Separate Conversations</strong> - imported conversations are delivered to a dedicated contact only, the contact ID is added to the email subject and conversation log';
$_LANG['settings.general.select.email_import_type.disabled'] = 'Per Email Address';
$_LANG['settings.general.select.email_import_type.lead_id_in_title'] = 'Include Contact ID in Subject';
$_LANG['settings.general.select.email_import_type.separate_conversations'] = 'Create Separate Conversations';

$_LANG['settings.general.input.emailNotificationDuration']              = 'Email Notification Visibility (in minutes)';
$_LANG['settings.general.enable.emailNotificationConfirmation']         = 'Close Notification';
$_LANG['settings.general.enable.emailNotificationConfirmation.descr']   = "If checked, the administrator will be able to close the notification pop-up by pressing the 'Accept' button.";

$_LANG['settings.general.enable.adminassign']                   = 'Contact Assignment';
$_LANG['settings.general.enable.adminassign.descr']             = 'If enabled, each contact can be assigned to a single administrator who shall manage them.';
$_LANG['settings.general.enable.adminMentionsContent']          = 'Mentioned Admin Notification Content';
$_LANG['settings.general.enable.tooltip']                       = "Enter the content of the notification that will be sent to administrators when they are mentioned in a note. You can use '{contactId}', '{contactFirstname}', '{contactLastname}', '{contactNotesLink}' variables, to specify the notification details.";
$_LANG['settings.general.update.btn']                           = 'Update Settings';
$_LANG['settings.general.followups.day']                        = "Follow-ups Per Day";
$_LANG['settings.general.followups.day.descr']                  = 'Once enabled, you will be able to create follow-ups only for a particular day. The option to configure follow-ups for a specific hour will be disabled.';
$_LANG['settings.general.followups.active_alarm']               = "Active Alarm Follow-ups";
$_LANG['settings.general.followups.active_alarm.descr']         = 'If enabled, the alarm notifications in the form of pop-ups are displayed to inform about coming follow-ups (checked once per minute).';
$_LANG['settings.general.followups.synch_whmcs']                = "Calendar Synchronization";
$_LANG['settings.general.followups.synch_whmcs.descr']          = '';
$_LANG['settings.general.newFollowupType.placeholder']          = 'Enter your new type name';
$_LANG['settings.general.newFollowupStatus.placeholder']        = 'Enter your new status name';
$_LANG['settings.general.authGoogle.client_id.placeholder']     = 'Enter the client ID';
$_LANG['settings.general.authGoogle.client_secret.placeholder'] = 'Enter the client secret key';
$_LANG['settings.followups.notif']                              = 'Reschedule Follow-up';
$_LANG['settings.followups.create.lead.followup.type']          = 'Follow-up Type On Contact Creation';
$_LANG['settings.followups.create.lead.followup.type.descr']    = 'Select the follow-up type that will be added after creating a contact.';
$_LANG['settings.followups.notif.descr']                        = 'Choose the email template that will be used to notify admins about a follow-up being rescheduled.';
$_LANG['settings.general.followup.widget.newtype']              = 'Add New Follow-up Type';
$_LANG['settings.general.followup.newtype.success']             = 'The new type of follow-up has been added successfully';
$_LANG['settings.general.followup.types']                       = 'Follow-up Types';
$_LANG['settings.general.followup.statuses']                    = 'Follow-up Statuses';
$_LANG['settings.general.followup.th.color']                    = 'Color';
$_LANG['settings.general.followup.th.active']                   = 'Status';
$_LANG['settings.general.followup.widget.authGoogle']           = 'Authorization for Google Calendar API';
$_LANG['settings.general.followup.widget.googleCalendarSelect'] = 'Google Calendar Select';
$_LANG['settings.general.followup.delete.success']              = 'The follow-up type has been deleted successfully';

$_LANG['settings.general.followup.widget.newstatus']              = 'Add New Follow-up Status';
$_LANG['settings.general.followup.newstatus.success']             = 'The follow-up new status has been added successfully';
$_LANG['settings.general.followup.statuses']                      = 'Follow-up Statuses';
$_LANG['settings.general.followup.deleteStatus.success']          = 'The follow-up status has been deleted successfully';

$_LANG['settings.general.api.note.title'] = 'Important!';
$_LANG['settings.general.api.note']       = 'This module is based on a built-in WHMCS API functionality. For connection settings, please see WHMCS Documentation.';
$_LANG['settings.general.api.git']        = 'Full documentation with usage examples is available at:';

///////////////////////////////////
// Settings > fields
///////////////////////////////////

$_LANG['settings.fields.tab.list']     = 'List';
$_LANG['settings.fields.tab.groups']   = 'Groups';
$_LANG['settings.fields.tab.statuses'] = 'Statuses';
$_LANG['settings.fields.tab.map']      = 'Mapping';

$_LANG['settings.fields.status.new.success']         = 'The new status has been created successfully';
$_LANG['settings.fields.status.widget.new']          = 'Add New Status';
$_LANG['settings.fields.list.widget.name']           = 'Fields List';
$_LANG['settings.fields.status.status.name']         = 'Status Name';
$_LANG['settings.fields.status.new.name.placehoder'] = 'Type in the name of a new status';
$_LANG['settings.fields.status.widget.statuses']     = 'Statuses';
$_LANG['settings.fields.statuses.th.preview']        = 'Preview';
$_LANG['settings.fields.statuses.th.color']          = 'Color';

$_LANG['settings.fields.map.no.custom.fields'] = 'There are no WHMCS client custom fields';
$_LANG['settings.fields.map.widget.custom']    = 'WHMCS Client Custom Fields Mapper';
$_LANG['settings.fields.map.widget.standard']  = 'WHMCS Standard Fields Mapper';

$_LANG['settings.fields.groups.widget']               = 'Add New Group Of Fields';
$_LANG['settings.fields.groups.widget.new.succed']    = 'The new group has been created successfully';
$_LANG['settings.fields.groups.new.name']             = 'Group Name';
$_LANG['settings.fields.groups.new.name.placeholder'] = 'Enter a new group name here';
$_LANG['settings.fields.widget.groups']               = 'Groups Of Fields';
$_LANG['settings.fields.widget.new']                  = 'Add New Field';
$_LANG['settings.fields.new.name.placeholder']        = 'Enter a new field name here';
$_LANG['settings.fields.new.descr.placeholder']       = 'Describe a new field shortly';
$_LANG['settings.fields.new.type']                    = 'Type';
$_LANG['settings.fields.new.type.required']           = 'Please select one of the available types';
$_LANG['settings.fields.new.group']                   = 'Group';
$_LANG['settings.fields.new.group.required']          = 'Please select one of the available groups';
$_LANG['settings.fields.widget.new.succeed']          = 'The new field has been added successfully';
$_LANG['settings.fields.tooltip.disabled']            = 'The group is disabled';
$_LANG['settings.fields.no.in.group']                 = 'There are no fields assigned to this group';

$_LANG['settings.fields.edit.header']            = 'You are editing field #';
$_LANG['settings.fields.edit.active']            = 'Active';
$_LANG['settings.fields.edit.type']              = 'Type';
$_LANG['settings.fields.edit.type.helper']       = 'Delete all validators in order to change the field type.';
$_LANG['settings.fields.edit.descr.placeholder'] = 'Description that will be displayed in the tooltip';
$_LANG['settings.fields.edit.widget.validators'] = 'Validators';
$_LANG['settings.fields.edit.th.type']           = 'Type';
$_LANG['settings.fields.edit.th.config']         = 'Config';
$_LANG['settings.fields.edit.th.error']          = 'Error';
$_LANG['settings.fields.edit.validators.none']   = 'No validators found';
$_LANG['settings.fields.edit.error.msg']         = 'Error Message';
$_LANG['settings.fields.edit.v.min']             = 'Minimum Value';
$_LANG['settings.fields.edit.v.max']             = 'Maximum Value';
$_LANG['settings.fields.edit.v.regex']           = 'Regex';
$_LANG['settings.fields.edit.v.available']       = 'Available Validators';



$_LANG['settings.fields.edit.v.text.required']    = 'Cannot be empty';
$_LANG['settings.fields.edit.v.text.min']         = 'Minimum characters';
$_LANG['settings.fields.edit.v.text.max']         = 'Maximum characters';
$_LANG['settings.fields.edit.v.text.email']       = 'Has to be a valid email address';
$_LANG['settings.fields.edit.v.text.url']         = 'Has to be a valid URL';
$_LANG['settings.fields.edit.v.text.ip']          = 'Has to be a valid IP address (IPv4 or IPv6)';
$_LANG['settings.fields.edit.v.text.regex']       = 'Has to be a valid regex expression';
$_LANG['settings.fields.edit.v.select.required']  = 'At least one option has to be selected';
$_LANG['settings.fields.edit.v.numeric.required'] = 'Has to be a valid number';
$_LANG['settings.fields.edit.v.select.min']       = 'Minimum options to choose';
$_LANG['settings.fields.edit.v.select.max']       = 'Maximum options to choose';
$_LANG['settings.fields.edit.o.widget']           = 'Options To Choose For This Field';
$_LANG['settings.fields.edit.o.th.val']           = 'Value';
$_LANG['settings.fields.edit.o.none']             = 'There are no options';
$_LANG['settings.fields.edit.o.newoption']        = 'New Option';



///////////////////////////////////
// Settings > webforms
///////////////////////////////////
$_LANG['settings.webforms']             = 'New Option';
$_LANG['settings.webforms.th.id']       = '#ID';
$_LANG['settings.webforms.th.name']     = 'Name';
$_LANG['settings.webforms.th.quantity'] = 'Contacts Quantity';
$_LANG['settings.webforms.th.created']  = 'Created';
$_LANG['settings.webforms.th.updated']  = 'Updated';
$_LANG['settings.webforms.th.url']      = 'URL';

$_LANG['settings.webforms.list.btn.create']             = 'Create Web Form';
$_LANG['settings.webforms.create.title']                = 'Create New Web Form';
$_LANG['settings.webforms.details.title']               = 'Details';
$_LANG['settings.webforms.fields.title']                = 'Fields';
$_LANG['settings.webforms.webform.title']               = 'Web Form';
$_LANG['settings.webforms.create.name']                 = 'Name';
$_LANG['settings.webforms.create.url']                  = 'URL';
$_LANG['settings.webforms.create.timeout']              = 'Timeout';
$_LANG['settings.webforms.create.timeout.tooltip']      = 'The time delay after which a new client will be added';
$_LANG['settings.webforms.create.admins']               = 'Administrator Notifications';
$_LANG['settings.webforms.create.admins.placeholder']   = 'Search for Administrators';
$_LANG['settings.webforms.create.admins.tooltip']       = 'Administrators who will be informed about adding a new client';
$_LANG['settings.webforms.create.url.tooltip']          = 'The URL to the site where the form will be placed (required for CORS).  You can enter many URLs using comma or end of line separator. Provide only origin URLs, without subdirectories. Please notice that the scheme (http or https) in your URL must be compatible with the WHMCS System URL visible in General Settings. ';
$_LANG['settings.webforms.create.contact_type']         = 'Contact Type';
$_LANG['settings.webforms.create.name.placeholder']     = 'Please provide a name';
$_LANG['settings.webforms.create.url.placeholder']      = 'Please provide a URL';
$_LANG['settings.webforms.create.select.placeholder']   = 'Select contact status';
$_LANG['settings.webform.new.fieldplaceholder']         = 'Web form is empty';
$_LANG['settings.webforms.create.name.tooltip']         = 'The name of a web form that is visible in the system';
$_LANG['settings.webforms.create.contact_type.tooltip'] = 'The type of a contact that will be created from this web form';
$_LANG['settings.webforms.html.title']                  = 'Web Form HTML Code';
$_LANG['settings.webforms.html.close']                  = 'Close';
$_LANG['settings.webforms.edit.title']                  = 'Edit Web Form';
$_LANG['settings.webforms.create.status']               = 'Contact Status';
$_LANG['settings.webforms.create.status.tooltip']       = 'The status of a contact that will be created from this web form';
$_LANG['settings.webforms.duplicate_email.tooltip']     = 'If checked, a web form will allow to create contacts with existing email addresses';
$_LANG['settings.webforms.followup.tooltip']            = 'If checked, a web form will allow the client to pick the follow-up date';
$_LANG['webform.client.wait']                           = 'Unable to create contact. Try again later.';
$_LANG['settings.webforms.form.save']                   = 'Save Changes';
$_LANG['webform.client.contact.created']                = 'The contact has been created successfully';
$_LANG['webform.client.exist.email']                    = 'The provided email address already exists';
$_LANG['webform.client.required.email']                 = 'Please enter a valid email address.';

///////////////////////////////////
// Resources > List (table subpage)
///////////////////////////////////
$_LANG['resource.text.convert']           = 'Convert';
$_LANG['resource.text.convert.potential'] = 'Convert To Potential';
$_LANG['resource.text.convert.lead']      = 'Convert To Lead';
$_LANG['resource.text.convert.to']        = 'Convert To ';
$_LANG['resource.text.convert.delete']    = 'Move To Archive';
$_LANG['resource.text.convert.restore']   = 'Restore From Archive';
$_LANG['resource.text.force.delete']      = 'Delete';


$_LANG['resource.text.massaction']                   = 'Choose Action';
$_LANG['resource.text.massaction.assignTo']          = 'Assign to Other Admin';
$_LANG['resource.text.massaction.changeDate']        = 'Change Date';
$_LANG['resource.text.massaction.changePriority']    = 'Change Priority to';
$_LANG['resource.text.massaction.removeTo']          = 'Change Contact Type to';
$_LANG['resource.text.massaction.changeStatusTo']    = 'Change Status to';
$_LANG['resource.text.massaction.reschedule']        = 'Reschedule';
$_LANG['resource.text.massaction.rescheduleOnAdmin'] = 'Reschedule Per Admin';
$_LANG['resource.text.massaction.delete']            = 'Delete';
$_LANG['resource.text.massaction.moveToArchive']     = 'Move to Archive';
$_LANG['resource.text.massaction.changeLabel']       = 'Manage Labels';
$_LANG['resource.text.massaction.changeLabel.add']   = 'Add Labels';
$_LANG['resource.text.massaction.changeLabel.change'] = 'Change Labels';
$_LANG['resource.text.massaction.changeLabel.remove'] = 'Remove Labels';
$_LANG['resource.text.massaction.restoreFromArchive']= 'Restore From Archive';

$_LANG['resource.create.widget.name']               = 'Create New Contact';
$_LANG['resource.create.main.options']              = 'Options';
$_LANG['resource.create.main.labels']               = 'Labels';
$_LANG['resource.create.main.lastname']             = 'Last Name';
$_LANG['resource.create.main.lastname.placeholder'] = 'Enter the last name of a lead here';
$_LANG['resource.create.main.lastname.tooltip']     = 'The last name of a lead that is visible in the system';
$_LANG['resource.create.main.duplicateEmails']      = 'Allow To Duplicate Emails';
$_LANG['resource.create.select.admin']              = 'Assigned Admin';
$_LANG['resource.create.select.admin.placeholder']  = 'Select Admin';
$_LANG['resource.create.select.country']            = 'Select Country';
$_LANG['resource.create.select.client']             = 'Assigned Client';
$_LANG['resource.create.select.client.placeholder'] = 'Search for Client';
$_LANG['resource.create.select.type']               = 'Contact Type';
$_LANG['resource.create.select.type.placeholder']   = 'Search for Contact Type';
$_LANG['resource.create.followup.add']              = 'Create Follow-up';
$_LANG['resource.create.followup.setLabel']         = 'Follow-up Label';
$_LANG['resource.create.followup.setStatus']        = 'Follow-up Status';
$_LANG['resource.create.name.placeholder']          = 'Enter a new field name here';
$_LANG['resource.create.main.info']                 = 'Information';
$_LANG['resource.create.main.name']                 = 'First Name';
$_LANG['resource.create.main.name.tooltip']         = 'The first name of a lead that is visible in the system';
$_LANG['resource.create.main.name.placeholder']     = 'Enter the first name of a lead here';
$_LANG['resource.create.main.country']              = 'Country';
$_LANG['resource.create.main.country.placeholder']  = 'Select Country';
$_LANG['resource.create.main.status']               = 'Status';
$_LANG['resource.create.main.status.placeholder']   = 'Select Status';
$_LANG['resource.create.main.email']                = 'Email';
$_LANG['resource.create.main.email.placeholder']    = 'Enter an e-mail address here';
$_LANG['resource.create.main.email.tooltip']        = 'The primary email address used to contact this lead by email';
$_LANG['resource.create.main.phone']                = 'Phone';
$_LANG['resource.create.main.phone.placeholder']    = 'Enter a phone number here';
$_LANG['resource.create.main.phone.tooltip']        = 'The primary phone number used to contact this lead by SMS/phone calls';
$_LANG['resource.create.form.invalid']              = 'Invalid Form!';
$_LANG['resource.create.main.description']          = 'Description';
$_LANG['resource.create.main.description.placeholder'] = 'Description';
$_LANG['resource.create.main.description.tooltip'] = 'The primary description of the lead that is visible in the contact summary';
$_LANG['resource.create.main.short_description']    = 'Short Description';
$_LANG['resource.create.main.short_description.placeholder'] = 'Short Description';
$_LANG['resource.create.main.short_description.tooltip'] = 'The primary short description of the lead that is visible in the system';
$_LANG['resource.header.marked.archive']            = 'This is an archive record';
$_LANG['resource.header.last.update']               = 'Last Update:';
$_LANG['resource.header.tab.summary']               = 'Summary';
$_LANG['resource.header.tab.followups']             = 'Follow-ups';
$_LANG['resource.header.tab.notes']                 = 'Notes';
$_LANG['resource.header.tab.emails']                = 'Emails';
$_LANG['resource.header.tab.orders']                = 'Orders';
$_LANG['resource.header.tab.quotes']                = 'Quotes';
$_LANG['resource.header.tab.logs']                  = 'Logs';
$_LANG['resource.header.tab.fields']                = 'Files';
$_LANG['resource.header.tab.tickets']               = 'Tickets';

$_LANG['resource.summary.widget.main']       = 'Main Details';
$_LANG['resource.summary.widget.main.descr'] = 'Information assigned by the system';

$_LANG['resource.summary.main.assignedclient']       = 'Assigned Client';
$_LANG['resource.summary.main.labels']               = 'Labels';
$_LANG['resource.summary.main.labels.search']        = 'Search for Labels';
$_LANG['resource.summary.main.followups.search']     = 'Search';
$_LANG['resource.summary.main.unassignclient']       = 'Unassign the already assigned client';
$_LANG['resource.summary.main.unassignlabels']       = 'Unassign the already assigned labels';
$_LANG['resource.summary.main.client.create']        = 'Create';
$_LANG['resource.summary.main.ticket']               = 'Assigned Ticket';
$_LANG['resource.summary.main.ticket.search']        = 'Search for Ticket';
$_LANG['resource.summary.main.ticket.unassign']      = 'Unassign the already assigned ticket';
$_LANG['resource.summary.main.email']                = 'Email';
$_LANG['resource.summary.main.phone']                = 'Phone';
$_LANG['resource.summary.main.type']                 = 'Type';
$_LANG['resource.summary.main.campaign']             = 'Campaign';
$_LANG['resource.summary.main.created']              = 'Created On';
$_LANG['resource.summary.main.deleted']              = 'Deleted On';
$_LANG['resource.summary.main.campaign.notes']       = 'Campaign Notes';
$_LANG['resource.summary.main.campaign.unassignlabels'] = 'Unassign the already assigned campaigns';
$_LANG['resource.summary.main.campaign.search']      = 'Search for Campaigns';
$_LANG['resource.summary.main.campaign.notes.descr'] = 'Additional information by assigned campaigns';
$_LANG['resource.summary.main.country']              = 'Country';
$_LANG['resource.summary.main.country.create']       = 'Create';
$_LANG['resource.summary.main.unassigncountry']      = 'Unassign the already assigned country';
$_LANG['resource.summary.main.description']          = 'Description';
$_LANG['resource.summary.main.shortDescription']     = 'Short Description';

$_LANG['resource.summary.tab.addnote']       = 'Add Note';
$_LANG['resource.summary.tab.sentemail']     = 'Send Email Message';
$_LANG['resource.summary.tab.sendsms']       = 'Send SMS';
$_LANG['resource.summary.tab.addfollowup']   = 'Add Follow-up';
$_LANG['resource.summary.tab.addticketresp'] = 'Send Ticket Response';

$_LANG['resource.summary.notes.add.success']     = 'The note has been added successfully';
$_LANG['resource.summary.notes.add.placeholder'] = 'Type in the text here to create a note';
$_LANG['resource.summary.notes.btn.add']         = 'Add Note';

$_LANG['resource.summary.email.add.success']            = 'The email has been sent successfully';
$_LANG['resource.summary.email.from']                   = 'From';
$_LANG['resource.summary.email.from.tooltip']           = 'Choose a ticket department email or use a global system email address';
$_LANG['resource.summary.email.to']                     = 'To';
$_LANG['resource.summary.email.to.tooltip']             = 'You can select an email address assigned to a client or an email assigned to this lead';
$_LANG['resource.summary.email.template']               = 'Template';
$_LANG['resource.summary.email.template.tooltip']       = 'Instead of composing the message from scratch, you can use a ready-made template';
$_LANG['resource.summary.email.template.none']          = '--- none';
$_LANG['resource.summary.email.showMailCopies']         = 'CC / BCC fields';
$_LANG['resource.summary.email.showMailCopies.tooltip'] = "Check to show 'Copy To' and 'Blind Copy To' options";
$_LANG['resource.summary.email.cc']                     = 'CC';
$_LANG['resource.summary.email.cc.tooltip']             = "You can add addresses as 'Copy To (CC)'";
$_LANG['resource.summary.email.bcc']                    = 'BCC';
$_LANG['resource.summary.email.bcc.tooltip']            = "You can add addresses as 'Blind Copy To (BCC)'";
$_LANG['resource.summary.email.subject']                = 'Subject';
$_LANG['resource.summary.email.subject.placeholder']    = 'Enter the subject here';
$_LANG['resource.summary.email.content']              = 'Main Content';
$_LANG['resource.summary.email.content.placeholder']  = 'Type in the text of the message here';
$_LANG['resource.summary.email.files']                = 'Files';
$_LANG['resource.summary.email.sent']                 = 'Send';
$_LANG['resource.summary.followup.add.success']       = 'The new follow-up has been created successfully';
$_LANG['resource.summary.followup.admin.tooltip']     = 'Choose the administrator that a new follow-up will be assigned to';
$_LANG['resource.summary.followup.admin']             = 'Admin';
$_LANG['resource.summary.followup.date']              = 'Date';
$_LANG['resource.summary.followup.date.tooltip']      = 'Choose the date of a follow-up';
$_LANG['resource.summary.followup.type']              = 'Type';
$_LANG['resource.summary.followup.status']            = 'Status';
$_LANG['resource.summary.followup.descr']             = 'Description';
$_LANG['resource.summary.followup.descr.placeholder'] = 'Describe your follow-up shortly';
$_LANG['resource.summary.followup.add']               = 'Add Follow-up';
$_LANG['resource.summary.ticket.noclient']            = 'You cannot send a response as there are no tickets assigned to this lead';
$_LANG['resource.summary.ticket.sent']                = 'The response to the ticket has been sent successfully';
$_LANG['resource.summary.ticket.msg']                 = 'Message';
$_LANG['resource.summary.ticket.msg.placeholder']     = 'Type in the content of your ticket reply.';
$_LANG['resource.summary.ticket.addreply']            = 'Add Reply';
$_LANG['resource.summary.sms.add.success']            = 'The SMS message has been sent successfully';
$_LANG['resource.summary.sms.to']                     = 'To';
$_LANG['resource.summary.sms.content']                = 'Main Content';
$_LANG['resource.summary.sms.content.placeholder']    = 'Type in the text of the message here';
$_LANG['resource.summary.sms.sent']                   = 'Send';

$_LANG['resource.summary.followupswidget']        = 'Follow-ups';
$_LANG['resource.summary.followups.th.type']      = 'Type';
$_LANG['resource.summary.followups.th.status']    = 'Status';
$_LANG['resource.summary.followups.th.admin']     = 'Admin';
$_LANG['resource.summary.followups.th.descr']     = 'Description';
$_LANG['resource.summary.followups.th.reminders'] = 'Reminders';
$_LANG['resource.summary.followups.none']         = "There are no follow-ups";

$_LANG['resource.summary.notes']             = 'Notes';
$_LANG['resource.summary.notes.last']        = 'Last';
$_LANG['resource.summary.notes.hide.hidden'] = 'Do Not Show Hidden';
$_LANG['resource.summary.notes.show.hidden'] = 'Show Hidden';
$_LANG['resource.summary.notes.hidde']       = 'Hide';
$_LANG['resource.summary.notes.unhide']      = 'Unhide';
$_LANG['resource.summary.notes.delete']      = 'Delete';
$_LANG['resource.summary.notes.edit']        = 'Edit';
$_LANG['resource.summary.notes.none']        = 'There are no notes';

$_LANG['resource.quotes.widget.name']     = 'Quotes';
$_LANG['resource.quotes.form.new']        = 'Add New Quote';
$_LANG['resource.quotes.th.stage']        = 'Stage';
$_LANG['resource.quotes.form.sync']       = 'Synchronize Quotes';
$_LANG['resource.quotes.th.subject']      = 'Subject';
$_LANG['resource.quotes.th.datemodified'] = 'Last Modified';
$_LANG['resource.quotes.th.datesent']     = 'Sent On';
$_LANG['resource.quotes.th.dateacc']      = 'Accepted On';
$_LANG['resource.quotes.th.total']        = 'Total';
$_LANG['resource.quotes.stage.draft']     = 'Draft';
$_LANG['resource.quotes.stage.delivered'] = 'Delivered';
$_LANG['resource.quotes.stage.accepted']  = 'Accepted';
$_LANG['resource.quotes.stage.lost']      = 'Lost';
$_LANG['resource.quotes.stage.dead']      = 'Dead';

$_LANG['resource.tickets.widget.name']           = 'Tickets';
$_LANG['resource.tickets.form.new']              = 'Add New Ticket';
$_LANG['resource.tickets.th.title']              = 'Title';
$_LANG['resource.tickets.form.sync']             = 'Synchronize Tickets';
$_LANG['resource.tickets.th.message']            = 'Message';
$_LANG['resource.tickets.th.status']             = 'Status';
$_LANG['resource.tickets.th.date']               = 'Create';
$_LANG['resource.tickets.th.lastreply']          = 'Last update';
$_LANG['resource.tickets.status.open']           = 'Open';
$_LANG['resource.tickets.status.answered']       = 'Answered';
$_LANG['resource.tickets.status.customer-reply'] = 'Customer-Reply';
$_LANG['resource.tickets.status.onhold']         = 'On Hold';
$_LANG['resource.tickets.status.inProgress']     = 'In Progress';
$_LANG['resource.tickets.status.closed']         = 'Closed';
$_LANG['resource.tickets.no.client']             = 'No clients are assigned to this lead. Consequently, there are no tickets to show.';

$_LANG['resource.orders.widget.name']      = 'Client orders';
$_LANG['resource.orders.no.client']        = 'No clients are assigned to this lead. Consequently, there are no orders to show.';
$_LANG['resource.orders.widget.descr']     = 'from client assigned to this record';
$_LANG['resource.orders.btn.new']          = 'Add New Order';
$_LANG['resource.orders.th.ordernum']      = 'Order #';
$_LANG['resource.orders.th.payment']       = 'Payment Method';
$_LANG['resource.orders.th.total']         = 'Total';
$_LANG['resource.orders.th.orderstatus']   = 'Order Status';
$_LANG['resource.orders.th.invoice']       = 'Invoice';
$_LANG['resource.orders.th.paymentstatus'] = 'Invoice Payment Status';

$_LANG['resource.orders.s.pending']     = 'Pending';
$_LANG['resource.orders.s.active']      = 'Active';
$_LANG['resource.orders.s.cancelled']   = 'Cancelled';
$_LANG['resource.orders.s.fraud']       = 'Fraud';
$_LANG['resource.orders.s.paid']        = 'Paid';
$_LANG['resource.orders.s.unpaid']      = 'Unpaid';
$_LANG['resource.orders.s.cancel']      = 'Cancelled';
$_LANG['resource.orders.s.refunded']    = 'Refunded';
$_LANG['resource.orders.s.collections'] = 'Collections';

$_LANG['resource.notes.widget.name']         = 'New Note';
$_LANG['resource.notes.content.placeholder'] = 'Here you can enter the text of your note';
$_LANG['resource.notes.content.btn.add']     = 'Add Note';
$_LANG['resource.notes.content.btn.edit']    = 'Save Edited Note';
$_LANG['resource.notes.content.btn.cancel']  = 'Cancel';
$_LANG['resource.notes.list.widget']         = 'List of Notes';
$_LANG['resource.notes.hide.hidden']         = 'Do Not Display Hidden';
$_LANG['resource.notes.show.hidden']         = 'Display Hidden';
$_LANG['resource.notes.editing']             = 'currently edited';

$_LANG['resource.logs.widget.name'] = 'Logs';
$_LANG['resource.logs.th.date']     = 'Date';
$_LANG['resource.logs.th.author']   = 'Author';
$_LANG['resource.logs.th.event']    = 'Event';
$_LANG['resource.logs.th.msg']      = 'Message';

$_LANG['resource.followups.add.widget']             = 'New Follow-up';
$_LANG['resource.followups.add.success']            = 'The new follow-up has been created successfully';
$_LANG['resource.followups.form.add.admin']         = 'Admin';
$_LANG['resource.followups.form.add.admin.tooltip'] = 'Select the administrator who will be assigned to this follow-up';
$_LANG['resource.followups.form.date']              = 'Date';
$_LANG['resource.followups.form.date.tooltip']      = 'Choose the date for the follow-up';
$_LANG['resource.followups.form.type']              = 'Type';
$_LANG['resource.followups.form.descr']             = 'Description';
$_LANG['resource.followups.form.descr.placeholder'] = 'Describe your follow-up shortly';
$_LANG['resource.followups.form.status']            = 'Status';
$_LANG['resource.followups.form.status.tooltip']    = 'Select the follow-up status';

$_LANG['resource.summary.followup.reminders.for']              = 'Reminders for';
$_LANG['resource.summary.followup.reminders.admin']            = 'Admin';
$_LANG['resource.summary.followup.reminders.client']           = 'Client';
$_LANG['resource.summary.followup.configure']                  = 'Configure';
$_LANG['resource.summary.followup.hide']                       = 'Hide';
$_LANG['resource.summary.followup.on.create']                  = 'On Create';
$_LANG['resource.summary.followup.on.create.descr']            = 'Instantly after creation';
$_LANG['resource.summary.followup.on.create.admin.explain']    = 'The notification is sent to the admin assigned to the contact immediately when a follow-up is created.';
$_LANG['resource.summary.followup.on.create.client.explain']   = 'The notification is sent to the client assigned to the contact immediately when a follow-up is created.';
$_LANG['resource.summary.followup.reminder.email']             = 'EMAIL';
$_LANG['resource.summary.followup.reminder.sms']               = 'SMS';
$_LANG['resource.summary.followup.for.date']                   = 'Follow-up Due Date';
$_LANG['resource.summary.followup.for.date.admin.explain']     = 'The notification is sent to the admin assigned to the contact on the set date.';
$_LANG['resource.summary.followup.for.date.client.explain']    = 'The notification is sent to the client assigned to the contact on the set date.';
$_LANG['resource.summary.followup.before.date']                = 'Before Follow-up Due Date';
$_LANG['resource.summary.followup.before.date.descr']          = 'e.g. half an hour earlier';
$_LANG['resource.summary.followup.before.date.admin.explain']  = 'Specify time (date/hours/minutes, etc.) before the Follow-up Due Date to send notification to the admin assigned to the contact.';
$_LANG['resource.summary.followup.before.date.client.explain'] = 'Specify time (date/hours/minutes, etc.) before the Follow-up Due Date to send notification to the client assigned to the contact.';

$_LANG['resource.summary.followup.form.email']                  = 'Email';
$_LANG['resource.summary.followup.form.tpl']                    = 'Template';
$_LANG['resource.summary.followup.form.admin']                  = 'Admin';
$_LANG['resource.summary.followup.form.cc']                     = 'CC';
$_LANG['resource.summary.followup.form.bcc']                     = 'BCC';
$_LANG['resource.summary.followup.form.reply']                  = 'Reply To';
$_LANG['resource.summary.followup.form.timebefore']             = 'Define Time';
$_LANG['resource.summary.followup.form.timebefore.esplain']     = 'Configure the time when a reminding notification should be sent.';
$_LANG['resource.summary.followup.form.timebeforesms.esplain']  = 'Configure the time when a reminding notification should be sent.';
$_LANG['resource.summary.followup.admin.reminders.helperdescr'] = 'Reminders will be sent to a selected email address or phone number that is provided in SMS Center For WHMCS.';
$_LANG['resource.summary.followups.widget.name']                = 'Follow-ups';

$_LANG['resource.emails.widget.name']              = 'Emails';
$_LANG['resource.emails.noclientmsg']              = 'Unfortunately, no client is assigned to this lead and there are no emails configured.';
$_LANG['resource.emails.sendtext']                 = 'Send Email';
$_LANG['resource.emails.new.send.success']         = 'The email has been sent successfully';
$_LANG['resource.emails.form.from']                = 'From';
$_LANG['resource.emails.form.from.tooltip']        = 'Choose a ticket department email address or use a global system email address.';
$_LANG['resource.emails.form.to']                  = 'To';
$_LANG['resource.emails.form.to.tooltip']          = 'You can select an email address assigned to a client or an email assigned to this lead';
$_LANG['resource.emails.form.showMailCopies']      = 'CC / BCC Fields';
$_LANG['resource.emails.form.showMailCopies.tooltip']  = "Check to show the 'Copy To' and 'Blind Copy To' options";
$_LANG['resource.emails.form.cc']                  = 'CC';
$_LANG['resource.emails.form.cc.tooltip']          = "Add email addresses as 'Copy To (CC)'";
$_LANG['resource.emails.form.bcc']                 = 'BCC';
$_LANG['resource.emails.form.bcc.tooltip']         = "Add email addresses as 'Blind Copy To (BCC)'";
$_LANG['resource.emails.form.tpl']                 = 'Template';
$_LANG['resource.emails.form.tpl.tooltip']         = 'Instead of composing the message from scratch, you can use a ready-made template';
$_LANG['resource.emails.form.subject']             = 'Subject';
$_LANG['resource.emails.form.subject.placeholder'] = 'Enter subject here';
$_LANG['resource.emails.form.content']             = 'Main Content';
$_LANG['resource.emails.form.content.placeholder'] = 'Type in the text of the message here';
$_LANG['resource.emails.form.files']               = 'Files';
$_LANG['resource.emails.log.widget']               = 'Conversation Log';
$_LANG['resource.emails.log.th.date']              = 'Date';
$_LANG['resource.emails.log.th.to']                = 'To';
$_LANG['resource.emails.log.th.followup']          = 'Follow-up';
$_LANG['resource.emails.log.th.reminder']          = 'Reminder';
$_LANG['resource.emails.log.th.subj']              = 'Subject';
$_LANG['resource.emails.log.th.cc']                = 'Copy To';
$_LANG['resource.emails.log.th.bcc']               = 'Blind Copy To';
$_LANG['resource.emails.log.th.attachment']        = 'Attachments';
$_LANG['resource.emails.log.th.lead']              = 'Contact';

$_LANG['resource.header.tab.files']                   = 'Files';
$_LANG['resource.files.widget.name']                  = 'Add New File';
$_LANG['resource.files.added.success']                = 'The file has been added successfully';
$_LANG['resource.files.form.select']                  = 'Select File To Upload';
$_LANG['resource.files.form.btn.upload']              = 'Upload';
$_LANG['resource.files.form.description']             = 'File Description';
$_LANG['resource.files.form.description.placeholder'] = 'Type here a description of the uploaded file';
$_LANG['resource.files.th.filename']                  = 'File Name';
$_LANG['resource.files.th.uploader']                  = 'Uploaded By';
$_LANG['resource.files.th.uploaded']                  = 'Uploaded On';
$_LANG['resource.files.th.filesize']                  = 'Size';
$_LANG['resource.files.th.description']               = 'Description';
$_LANG['resource.files.list.widget.name']             = 'Files';
$_LANG['resource.files.maxsize']                      = 'The maximum file size';

$_LANG['resource.followup.edit.widget.name']            = 'Follow-up #';
$_LANG['resource.followup.edit.descr']                  = 'Description';
$_LANG['resource.followup.edit.type']                   = 'Type';
$_LANG['resource.followup.edit.date']                   = 'Date';
$_LANG['resource.followup.edit.admin']                  = 'Admin';
$_LANG['resource.followup.edit.status']                 = 'Status';
$_LANG['resource.followup.edit.update.reminders']       = 'Update Reminders';
$_LANG['resource.followup.edit.update.reminders.descr'] = 'When enabled, each reminder date will be adjusted according to the changed date.';

$_LANG['resource.followup.reminder.add.widget']       = 'Add Reminder Of Follow-up #';
$_LANG['resource.followup.reminder.add.succes']       = 'The new reminder has been created successfully';
$_LANG['resource.followup.reminder.date']             = 'Reminder Date';
$_LANG['resource.followup.reminder.date.required']    = 'You need to specify the date for this reminder.';
$_LANG['resource.followup.reminder.for']              = 'Reminder For';
$_LANG['resource.followup.reminder.for.required']     = 'You need to specify the recipients of this reminder';
$_LANG['resource.followup.reminder.method']           = 'Method';
$_LANG['resource.followup.reminder.method.required']  = 'You need to specify how a reminder will be sent';
$_LANG['resource.followup.reminder.admin']            = 'Choose Admin';
$_LANG['resource.followup.reminder.admin.required']   = 'Choose the administrator who will receive this reminder';
$_LANG['resource.followup.reminder.tpl']              = 'Choose Template';
$_LANG['resource.followup.reminder.tpl.required']     = 'Choose the template that will be used to send the reminder';
$_LANG['resource.followup.reminder.cc']               = 'CC';
$_LANG['resource.followup.reminder.cc.required']      = 'Choose administrators who will receive a copy of this reminder';
$_LANG['resource.followup.reminder.reply']            = 'Reply To';
$_LANG['resource.followup.reminder.reply.required']   = 'Choose the administrator who will be set up as a person to reply to this reminder email';
$_LANG['resource.followup.reminder.reminders.widget'] = 'List Of Reminders';
$_LANG['resource.followup.reminders.th.method']       = 'Method';
$_LANG['resource.followup.reminders.th.status']       = 'Status';
$_LANG['resource.followup.reminders.th.tpl']          = 'Template';
$_LANG['resource.followup.reminders.th.remind']       = 'Remind';
$_LANG['resource.followup.reminders.to.client']       = 'Client';
$_LANG['resource.followup.reminders.none']            = 'There are no reminders of this follow-up';


$_LANG['reminder.modal.header']                    = 'Edit Reminder #';
$_LANG['reminder.modal.dateto']                    = 'Reminder Date';
$_LANG['reminder.modal.edit.date.required']        = 'You need to specify the date of this reminder.';
$_LANG['reminder.modal.edit.for']                  = 'Reminder For';
$_LANG['reminder.modal.edit.admin']                = 'Admin';
$_LANG['reminder.modal.edit.method']               = 'Method';
$_LANG['reminder.modal.edit.method.email']         = 'Email';
$_LANG['reminder.modal.edit.method.sms']           = 'SMS';
$_LANG['reminder.modal.edit.choseadmin']           = 'Choose Admin';
$_LANG['reminder.modal.edit.choseadmin.required']  = 'Choose the administrator who will receive this reminder';
$_LANG['reminder.modal.edit.chose.tpl']            = 'Choose Template';
$_LANG['reminder.modal.edit.chose.tpl.required']   = 'Choose the template that will be used to send this reminder';
$_LANG['reminder.modal.edit.chose.cc']             = 'CC';
$_LANG['reminder.modal.edit.chose.cc.required']    = 'Choose administrators who will receive a copy of this reminder';
$_LANG['reminder.modal.edit.chose.reply']          = 'Reply To';
$_LANG['reminder.modal.edit.chose.reply.required'] = 'Choose the administrator who will be set up as a person to reply to this reminder email';

$_LANG['reminders.modal.details.header'] = 'Reminders Of Follow-up #';
$_LANG['reminders.modal.btn.edit']       = 'Edit Reminders';
$_LANG['reminders.modal.foradminid']     = 'Admin #';
$_LANG['reminders.modal.client']         = 'Client';


$_LANG['migration.navtab.overview']              = 'Migration Overview';
$_LANG['migration.navtab.statuses']              = 'Statuses';
$_LANG['migration.navtab.fields']                = 'Fields';
$_LANG['migration.navtab.finish']                = 'Finish Migration';
$_LANG['migration.text.notice']                  = 'Notice';
$_LANG['migration.text.overview.notice']         = "Please note that <strong>CRM 2.x.x</strong> is a completely rewritten module (compared to 1.x.x version). In order to keep compatibility with previous versions, we prepared a tool called 'Migrator'. Here you can safely migrate data from your previous version.<br />Keep in mind that follow-ups will not be migrated due to structure incompatibility.";
$_LANG['migration.text.overview.not.detected']   = 'Not detected';
$_LANG['migration.text.overview.last.version']   = 'Last CRM version installed';
$_LANG['migration.text.overview.notfoundcrm']    = 'The system did not detect any active previous instances of CRM module. There is nothing to migrate.';
$_LANG['migration.text.overview.incompatible']   = 'Your current version is not compatible. In order to use migrator properly, please update your previous CRM to <b>1.2.4</b> version.';
$_LANG['migration.text.overview.compatible']     = 'You have compatible and active version of CRM module. You might want to migrate data from the previous version to the current one.';
$_LANG['migration.text.overview.flow.header']    = 'Migration Flow';
$_LANG['migration.text.overview.flow.content']   = " <li>You need to manually add and configure used statuses in the latest CRM version</li>
                                                        <li>You need to manually add personal custom fields to the latest CRM version</li>
                                                        <li>You need to configure mapper for statuses so that you can map status from your previous CRM, to status in CRM V2. To illustrate, you can map 'Active' (from previous CRM) status with 'Prospering' status into CRM V2.x.x (or of course to the same status name).</li>
                                                        <li>You need to configure mapper for custom fields so that you can map fields from previous CRM, to CRM V2.x.x. This configuration is crucial, since both systems can have different custom fields, and you need to specify what value from the previous custom field you want to assign to the new version.</li>
                                                        <li>Before running migration, we strongly suggest making a backup of your database (tables with prefix 'crm_' are responsible for CRM V2.x.x).</li>";
$_LANG['migration.text.overview.bottom.info']    = "Migrator will generate logs to file. This will allow you to check migration process and catch records that might encounter some problems during migration (for example mapping text fields to non-existing value in the 'select' field).
                                                      <br />Detailed logs can be found in <code>modules/addons/mgCRM2/app/Storage/logs</code> directory.";
$_LANG['migration.text.map.empty.status']        = 'This status will not be set';
$_LANG['migration.text.map.statuses.widget']     = 'Statuses in CRM <b>1.2.4</b>';
$_LANG['migration.text.confirmation']            = 'Confirmation';
$_LANG['migration.btn.configure.fields']         = 'Configure Fields Mapping';
$_LANG['migration.btn.begin.conf']               = 'Begin Migration';
$_LANG['migration.btn.last.step']                = 'Go To Last Step';
$_LANG['migration.text.finish.widget']           = 'Finish Migration';
$_LANG['migration.text.statusescheck']           = 'I have properly set mapping for <b>statuses</b>';
$_LANG['migration.text.fieldscheck']             = 'I have properly set mapping for <b>custom fields</b>';
$_LANG['migration.text.map.fields.widget']       = 'Fields in CRM <b>1.2.4</b>';
$_LANG['migration.text.map.empty.field']         = 'This field will not be migrated (there will be an empty value)';
$_LANG['migration.how.many.to.import.1']         = 'There are';
$_LANG['migration.how.many.to.import.2']         = 'leads/potentials to import from the previous CRM module';
$_LANG['migration.text.finish.proceed']          = 'Are you sure that you want to proceed?';
$_LANG['migration.text.finish.rewerseinfo']      = 'In case of reversing this migration, you can either restore backup or manually remove rows that start from';
$_LANG['migration.text.finish.btn.start']        = 'Start Migration';
$_LANG['migration.text.finish.result.widget']    = 'Migration Result';
$_LANG['migration.text.finish.result.log']       = 'Detailed logs can be found in a file';
$_LANG['migration.text.finish.result.directory'] = 'directory.';

$_LANG['settings.permisions.no.available.roles'] = "There are no available admin roles to assign. Either all roles are assigned as <b>Full Access Admins</b> or there are no other roles that have access to module.";

// Asterisk integration
$_LANG['asterisk.calloutwidget.title'] = 'Asterisk Manager Call Out Widget';
$_LANG['asterisk.current.call']        = 'Current Call';
$_LANG['asterisk.current.call.status'] = 'Current Call Status:';
$_LANG['asterisk.waiting.input']       = 'Waiting for an input...';
$_LANG['asterisk.destination.number']  = 'Destination Number';
$_LANG['asterisk.oryginal.extension']  = 'Original Extension';
$_LANG['asterisk.oryginal.try.call']   = 'Try to Originate a Call';
$_LANG['asterisk.call.originating']    = 'Originating...';

// Campaigns list
$_LANG['campaigns.list.widgetname']            = 'Campaigns';
$_LANG['campaigns.widget.add.main']            = 'New Campaign';
$_LANG['campaigns.widget.add.campaign']        = 'Campaign Details';
$_LANG['campaigns.widget.add.filters']         = 'Campaign Filters';
$_LANG['campaigns.add.campaign.mached.widget'] = 'Found records';

// Campaign Form Create
$_LANG['campaigns.edit.header']                  = 'EDIT CAMPAIGN #';
$_LANG['campaigns.list.btn.create']              = 'Create Campaign';
$_LANG['campaigns.form.name']                    = 'Name';
$_LANG['campaigns.form.name.descr']              = 'It will be used as an identifier in various dropdown menus.';
$_LANG['campaigns.form.name.placeholder']        = 'Type in a short name';
$_LANG['campaigns.form.admins']                  = 'Admins';
$_LANG['campaigns.form.color']                   = 'Color';
$_LANG['campaigns.form.admins.descr']            = 'Selected administrators will be allowed to view records assigned to this campaign and manage them.';
$_LANG['campaigns.form.description']             = 'Description';
$_LANG['campaigns.form.description.descr']       = 'This is a longer description of a campaign that is visible only on the list of campaigns.';
$_LANG['campaigns.form.description.placeholder'] = 'Describe the purpose of this campaign shortly';
$_LANG['campaigns.form.date_start']              = 'Starting Date';
$_LANG['campaigns.form.date_end']                = 'Ending Date';

$_LANG['campaigns.filters.static.name']     = 'First Name';
$_LANG['campaigns.filters.static.lastname'] = 'Last Name';
$_LANG['campaigns.filters.static.type']     = 'Contact Type';
$_LANG['campaigns.filters.static.status']   = 'Status';
$_LANG['campaigns.filters.static.email']    = 'Email';
$_LANG['campaigns.filters.static.phone']    = 'Phone';
$_LANG['campaigns.filters.static.priority'] = 'Priority';
$_LANG['campaigns.filters.static.client']   = 'Client';
$_LANG['campaigns.filters.static.ticket']   = 'Ticket';
$_LANG['campaigns.filters.static.country']  = 'Country';
$_LANG['campaigns.filters.static.labels']   = 'Labels';
$_LANG['campaigns.filters.static.short_description'] = 'Short Description';

$_LANG['campaigns.list.th.name']        = 'Name';
$_LANG['campaigns.list.th.description'] = 'Description';
$_LANG['campaigns.list.th.datestart']   = 'Starting Date';
$_LANG['campaigns.list.th.dateend']     = 'Ending Date';
$_LANG['campaigns.list.th.assigned']    = 'Records';
$_LANG['campaigns.list.th.active']      = 'Status';
$_LANG['campaigns.status.active']       = 'Active';
$_LANG['campaigns.status.inactive']     = 'Inactive';
$_LANG['campaigns.list.th.admins']      = 'Admins';

$_LANG['campaigns.tooltip.force.reasign']      = 'Force records reassignment';
$_LANG['campaigns.button.add.new']             = 'Add Campaign';
$_LANG['campaigns.button.edut.update']         = 'Update';
$_LANG['campaigns.button.refresh.table']       = 'Show Matching Records';
$_LANG['campaigns.form.filter.empty']          = 'Will be filtered by empty/not set value';
$_LANG['campaigns.form.date.end.helper']       = 'The campaign will end on the selected date.';
$_LANG['campaigns.form.date.end.helper.descr'] = 'The campaign will be visible to assigned administrators during the selected time period.';
$_LANG['campaigns.form.date.start.helper']     = 'The campaign will start on the selected date.';
$_LANG['campaigns.form.system.fields']         = 'System Fields';
$_LANG['campaigns.changable.in.header']        = 'Campaign';
$_LANG['campaigns.changable.noy.in.any']       = 'Not Applied';
$_LANG['campaigns.changable.all']              = 'Any';
$_LANG['admins.changable.any']                 = 'Any';
$_LANG['admins.changable.not.assigned']        = 'Not Applied';

// NOTIFICATIONS
$_LANG['notifications.list.widgetname']             = 'Notifications';
$_LANG['notifications.add.widget']                  = 'New Notification';
$_LANG['notifications.list.btn.create']             = 'Create Notification';
$_LANG['notifications.form.importance']             = 'Importance';
$_LANG['notifications.form.importance.normal']      = 'Normal';
$_LANG['notifications.form.importance.info']        = 'Information';
$_LANG['notifications.form.importance.warning']     = 'Warning';
$_LANG['notifications.form.importance.danger']      = 'Danger';
$_LANG['notifications.form.type']                   = 'Type';
$_LANG['notifications.form.type.temporary']         = 'Temporary';
$_LANG['notifications.form.type.permanent']         = 'Permanent';
$_LANG['notifications.form.admins']                 = 'Admins';
$_LANG['notifications.form.admins.descr']           = 'Choose administrators to display this notification to';
$_LANG['notifications.form.content']                = 'Message';
$_LANG['notifications.form.content.placeholder']    = 'Type message content';
$_LANG['notifications.form.content.descr']          = 'HTML code is allowed';
$_LANG['notifications.form.date_start']             = 'Starting Date';
$_LANG['notifications.form.date_end']               = 'Ending Date';
$_LANG['notifications.form.dates.descr']            = 'The notification will be displayed for the selected time period';
$_LANG['notifications.button.add.new']              = 'Create Notification';
$_LANG['notifications.form.confirmation']           = 'Confirmation';
$_LANG['notifications.form.confirmation.descr']     = 'Require the confirmation from admin';
$_LANG['notifications.form.hideafterconfirm']       = 'Hide Once Accepted';
$_LANG['notifications.form.hideafterconfirm.descr'] = 'Once a notification is accepted, it will no longer be visible to the administrator';
$_LANG['notifications.list.th.importance']          = 'Importance';
$_LANG['notifications.list.th.type']                = 'Type';
$_LANG['notifications.list.th.content']             = 'Content';
$_LANG['notifications.list.th.datestart']           = 'Starting Date';
$_LANG['notifications.list.th.dateend']             = 'Ending Date';
$_LANG['notifications.table.dates.permanent']       = 'Does Not Apply';
$_LANG['notifications.list.th.assigned']            = 'Admins';
$_LANG['notifications.list.th.accepted']            = 'Accepted';
$_LANG['notifications.list.th.active']              = 'Active';
$_LANG['notifications.table.confirmation.disabled'] = 'The confirmation is disabled';
$_LANG['notifications.table.confirmation.noone']    = 'No one confirmed this message yet';
$_LANG['notifications.button.form.edit']            = 'Update';
$_LANG['notifications.main.widget.single']          = 'You have <span class="bold">{{num}}</span> Notification';
$_LANG['notifications.main.widget.many']            = 'You have <span class="bold">{{num}}</span> Notifications';
$_LANG['notifications.main.btn.accept']             = 'Accept';
$_LANG['notifications.main.accepted']               = 'Accepted:';

//////////////////////////////////////
// Outgoing Mailbox Configuration List
//////////////////////////////////////
$_LANG['mailbox.list.widgetname'] = 'Mailboxes';
$_LANG['mailbox.widget.add.main'] = 'New Mailbox';

// Outgoing Mailbox Configuration Form Create
$_LANG['mailbox.list.btn.create']                 = 'Create Mailbox';
$_LANG['mailbox.widget.add.mailbox']              = 'Mailbox Details';
$_LANG['mailbox.form.name']                       = 'Name';
$_LANG['mailbox.form.admin']                      = 'Admin';
$_LANG['mailbox.form.admin.placeholder']          = 'Select an administrator';
$_LANG['mailbox.form.name.descr']                 = 'The name of the mailbox';
$_LANG['mailbox.form.name.placeholder']           = 'Type in a short name';
$_LANG['mailbox.form.description']                = 'Description';
$_LANG['mailbox.form.description.descr']          = 'This is a longer description of the mailbox that is visible only on the list.';
$_LANG['mailbox.form.description.placeholder']    = 'Describe this mailbox shortly';
$_LANG['mailbox.form.receive_server']             = 'Receive Server POP3/IMAP';
$_LANG['mailbox.form.receive_server.placeholder'] = 'POP3/IMAP Server Address (e.g. imap.example.com)';
$_LANG['mailbox.form.receive_method']             = 'Receive Protocol';
$_LANG['mailbox.form.receive_port']               = 'Receive Port';
$_LANG['mailbox.form.receive_port.placeholder']   = 'Receive Port (e.g. 110)';
$_LANG['mailbox.form.receive_ssl']                = 'Receive Option';
$_LANG['mailbox.form.receive_folder']             = 'Receive Folder';
$_LANG['mailbox.form.receive_folder.placeholder'] = 'Receive Folder (e.g. INBOX)';
$_LANG['mailbox.button.add.new']                  = 'Add Mailbox';

// Outgoing Mailbox Configuration Form Edit
$_LANG['mailbox.edit.header']        = 'EDIT MAILBOX #';
$_LANG['mailbox.button.edit.update'] = 'Update';

$_LANG['mailbox.form.email']                = 'Email';
$_LANG['mailbox.form.email.placeholder']    = 'Mailbox email address';
$_LANG['mailbox.form.server']               = 'Server (SMTP)';
$_LANG['mailbox.form.server.placeholder']   = 'SMTP Server Address (e.g. smtp.example.com)';
$_LANG['mailbox.form.username']             = 'Username';
$_LANG['mailbox.form.username.placeholder'] = 'SMTP Username/Login (e.g. user@example.com)';
$_LANG['mailbox.form.password']             = 'Password';
$_LANG['mailbox.form.password.descr']       = 'SMTP Password.';
$_LANG['mailbox.form.password.placeholder'] = '';
$_LANG['mailbox.form.encryption']           = 'Encryption';
$_LANG['mailbox.form.encryption.descr']     = 'Encryption type.';
$_LANG['mailbox.form.port']                 = 'Port';
$_LANG['mailbox.form.port.placeholder']     = 'SMTP Port (e.g. 465)';
// th
$_LANG['mailbox.list.th.name']              = 'Name';
$_LANG['mailbox.list.th.description']       = 'Description';
$_LANG['mailbox.list.th.email']             = 'Email';
$_LANG['mailbox.list.th.admin']             = 'Admin';
$_LANG['mailbox.button.edit.back']          = 'Back';

///////////////////////////////////
// Settings > fields
///////////////////////////////////
$_LANG['settings.types.nav.widget.name']           = 'Contact Types';
$_LANG['settings.types.list.add.widget.name']      = 'New Contact Type';
$_LANG['settings.types.list.tbl.widget.name']      = 'Contact Types';
$_LANG['settings.types.add.form.name']             = 'Name';
$_LANG['settings.types.add.form.name.placeholder'] = 'Type in a name that will be available in your system';
$_LANG['settings.types.add.show.nav']              = 'Navigation';
$_LANG['settings.types.add.show.nav.descr']        = 'If enabled, a link to the table with this contact type will be available in the main navigation menu';
$_LANG['settings.types.add.show.nav.subm']         = 'Navigation Submenu';
$_LANG['settings.types.add.show.nav.subm.descr']   = "If enabled, a link to the table with this contact type will be available in the 'Contacts' submenu (second level navigation)";
$_LANG['settings.types.add.show.dashboard']        = 'Dashboard';
$_LANG['settings.types.add.show.dashboard.descr']  = 'If enabled, a new contact type will be available on the dashboard to filter by';
$_LANG['settings.types.add.icon']                  = 'Icon';
$_LANG['settings.types.add.form.icon.placeholder'] = 'Type in the icon format here';
$_LANG['settings.types.add.succed']                = 'The new contact type has been added successfully';
$_LANG['settings.types.add.icon.descr']            = 'The icon designated to a particular contact type. It is always displayed next to the contact type name in the navigation menu, dashboard etc. Please use any of <a href="crm.php#!/static/pages/icons" target="_blank">available icons.</a><br /> Remember to use appropriate formats as in examples: <code>fa fa-thumbs-o-up</code>, <code>glyphicon glyphicon-phone-alt</code>, <code>icon-badge</code>';

$_LANG['settings.types.tbl.th.icon']              = 'Icon';
$_LANG['settings.types.tbl.th.show.in.nav']       = 'Navigation';
$_LANG['settings.types.tbl.th.show.in.subm']      = 'Navigation Submenu';
$_LANG['settings.types.tbl.th.show.in.dashboard'] = 'Dashboard';

$_LANG['settings.types.edit.infobox.notice'] = 'Notice';
$_LANG['settings.types.edit.infobox.txt']    = 'Changes made to a contact type are not instant (especially in relation to navigation). In order to see the changes, you need to reload the page. In some cases it may be required to reload or clear browser cache.';

$_LANG['settings.types.delete.header']        = 'Delete Contact Type';
$_LANG['settings.types.delete.convert.dont']  = "-- Do not convert";
$_LANG['settings.types.delete.convert']       = 'Convert Contacts To Type';
$_LANG['settings.types.delete.convert.error'] = 'Since you want to move contacts to Archive, you need to define the type to convert';
$_LANG['settings.types.delete.convert.descr'] = 'Every contact that is assigned to the deleted type will be converted to a type selected here.';
$_LANG['settings.types.delete.archive']       = 'Move To Archive';
$_LANG['settings.types.delete.archive.descr'] = 'Do not convert the contact to another type but move it to the Archive. <br> If you want to move contacts of this type to Archive, choose another type that will be used to describe these contacts once restored form the Archive.';


///////////////////////////////////
// Utils > mass mail
///////////////////////////////////
$_LANG['utils.massmessage.widget.add.main']             = 'New Mass Message';
$_LANG['utils.massmessage.add.btn.create']              = 'New Mass Message';
$_LANG['utils.massmessage.add.targetmain']              = 'Send To';
$_LANG['utils.massmessage.add.target.users']            = 'Users';
$_LANG['utils.massmessage.add.target.users.descr']      = 'The message will be sent to all active clients in the system';
$_LANG['utils.massmessage.add.target.usergroups']       = 'User Groups';
$_LANG['utils.massmessage.add.target.usergroups.descr'] = 'The message will be sent to clients assigned to the selected client groups';
$_LANG['utils.massmessage.add.target.campaigns']        = 'Campaigns';
$_LANG['utils.massmessage.add.target.campaigns.descr']  = 'The message will be sent to contacts from the selected campaigns';
$_LANG['utils.massmessage.add.date']                    = 'Select Date';
$_LANG['utils.massmessage.add.date.descr']              = 'The date when messages shall be added to the sending queue (handled by cron job)';
$_LANG['utils.massmessage.add.subject']                 = 'Subject';
$_LANG['utils.massmessage.add.subject.placeholder']     = 'Enter subject here';
$_LANG['utils.massmessage.add.subject.content']         = 'Main Content';
$_LANG['utils.massmessage.add.choose.usergrps']         = 'User Groups';
$_LANG['utils.massmessage.add.choose.campaigns']        = 'Campaigns';
$_LANG['resource.emails.form.btn.create']               = 'Create';
$_LANG['utils.massmessage.add.variables']               = 'Available Merge Fields';
$_LANG['utils.massmessage.add.type']                    = 'Message Type';
$_LANG['utils.massmessage.add.type.email']              = 'Email';
$_LANG['utils.massmessage.add.type.email.descr']        = 'This message will be sent in the form of an email';
$_LANG['utils.massmessage.add.type.sms']                = 'SMS';
$_LANG['utils.massmessage.add.type.sms.descr']          = 'This message will be sent in the form of an SMS';
$_LANG['utils.massmessage.add.description']             = 'Description';
$_LANG['utils.massmessage.add.description.placeholder'] = 'Describe shortly this configuration of mass messages to easily identify it in your system';
$_LANG['utils.massmessage.add.mailbox.global']          = 'Default WHMCS Mailbox';
$_LANG['utils.massmessage.add.mailbox_id']              = 'Mailbox';

$_LANG['utils.massmessage.list.widgetname']            = 'Mass Message';
$_LANG['utils.massmessage.list.btn.create']            = 'Create Mass Message';
$_LANG['utils.massmessage.list.th.date']               = 'Date';
$_LANG['utils.massmessage.list.th.description']        = 'Description';
$_LANG['utils.massmessage.list.th.message_type']       = 'Type';
$_LANG['utils.massmessage.list.th.target_type']        = 'Target';
$_LANG['utils.massmessage.list.th.messages.pendind']   = 'In Queue';
$_LANG['utils.massmessage.list.th.messages.total']     = 'Total';
$_LANG['utils.massmessage.list.th.messages.generated'] = 'Status';
$_LANG['utils.massmessage.status.done']                = 'Finished';
$_LANG['utils.massmessage.status.pending']             = 'Pending';
$_LANG['utils.massmessage.status.sending']             = 'In Progress';

// IMPORT / EXPORT
$_LANG['settings.importexport.tab.export']                = 'Export';
$_LANG['settings.importexport.tab.import']                = 'Import';
$_LANG['settings.importexport.widget.name.explain']       = 'Available Fields';
$_LANG['settings.importexport.widget.name.explain.small'] = 'and CSV Format Overview';
$_LANG['settings.importexport.format.choose']             = 'Choose Format';
$_LANG['settings.importexport.import.file.detected']      = 'System detected';
$_LANG['settings.importexport.import.file.rows']          = 'from uploaded file.';
$_LANG['settings.importexport.btn.export']                = 'Export';
$_LANG['settings.importexport.import.start']              = 'Perform Import';
$_LANG['settings.importexport.import.files.descr']        = 'Allowed formats: *.csv,  *.xls,  *.xlsx,  *.ods';
$_LANG['settings.importexport.export.isZip']              = 'The .XLSX and .ODS formats require the PHP Zip library which could not be found on your server. Please install it first in order to use these extensions.';

$_LANG['settings.automations.list.btn.create'] = 'Create Automation Group';
$_LANG['settings.automations.th.id']           = 'ID';
$_LANG['settings.automations.th.name']         = 'Name';
$_LANG['settings.automations.th.status']       = 'Status';
$_LANG['settings.automations.th.status.on']    = 'Enabled';
$_LANG['settings.automations.th.status.off']   = 'Disabled';

$_LANG['settings.automations.create.form.name']             = 'Name';
$_LANG['settings.automations.create.form.name.placeholder'] = 'The automation name that will be available in your system';
$_LANG['settings.automations.create.form.status']           = 'Status';
$_LANG['settings.automations.create.form.button.add']       = 'Add';

$_LANG['settings.automations.edit.edit']                  = 'Edit Automation Group';
$_LANG['settings.automations.edit.form.name']             = 'Name';
$_LANG['settings.automations.edit.form.name.placeholder'] = 'The automation name that will be available in your system';
$_LANG['settings.automations.edit.form.status']           = 'Status';
$_LANG['settings.automations.edit.form.button.update']    = 'Update';

$_LANG['settings.automations.edit.btn.edtiable.on']  = 'Edit Rules';
$_LANG['settings.automations.edit.btn.edtiable.off'] = 'Close Edition';
$_LANG['settings.automations.edit.rule.add']         = 'Add Rule';
$_LANG['settings.automations.edit.subrule.add']      = 'Add Sub-Rule';
$_LANG['settings.automations.edit.rule.show.form']   = 'Show Form';
$_LANG['settings.automations.edit.rule.hide.form']   = 'Hide Form';
$_LANG['settings.automations.edit.rules.empty']      = 'No automation rules have been added yet.';

$_LANG['settings.automations.rule.edit.form.empty.title']                  = 'Empty Rule';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeLabel.title'] = 'Condition If Change Label Rule';
$_LANG['settings.automations.rule.edit.form.conditionIfDaysAfterContactCreated.title'] = 'Condition If Days After Contact Created Rule';
$_LANG['settings.automations.rule.edit.form.onInvoiceCreated.title'] = 'On Invoice Created';
$_LANG['settings.automations.rule.edit.form.onServiceSuspend.title'] = 'On Service Suspension';
$_LANG['settings.automations.rule.edit.form.onEmailSend.title'] = 'On Sending Email';
$_LANG['settings.automations.rule.edit.form.onEmailSend.template'] = 'Type';
$_LANG['settings.automations.rule.edit.form.onEmailSend.template.placeholder'] = 'Select Type';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeType.title']  = 'Condition If Change Change Type Rule';
$_LANG['settings.automations.rule.edit.form.conditionIf.title']            = 'Condition If Rule';
$_LANG['settings.automations.rule.edit.form.conditionIfChange.title']      = 'Condition If Change Rule';
$_LANG['settings.automations.rule.edit.form.conditionIfNot.title']         = 'Condition If Not Rule';
$_LANG['settings.automations.rule.edit.form.addFollowUp.title']            = 'Add Follow-up Rule';
$_LANG['settings.automations.rule.edit.form.addReminder.title']            = 'Add Reminder Rule';
$_LANG['settings.automations.rule.edit.form.btn.upload']                   = 'Update';

//Contact Reminder
$_LANG['settings.automations.rule.edit.form.addContactReminder.title']                = 'Add Contact Reminder Rule';
$_LANG['settings.automations.rule.edit.form.addContactReminder.template']             = 'Template';
$_LANG['settings.automations.rule.edit.form.addContactReminder.template.placeholder'] = 'Select Template';
$_LANG['settings.automations.rule.edit.form.addContactReminder.type']                 = 'Type';
$_LANG['settings.automations.rule.edit.form.addContactReminder.type.email']           = 'Email';
$_LANG['settings.automations.rule.edit.form.addContactReminder.type.sms']             = 'SMS';
$_LANG['settings.automations.rule.edit.form.addContactReminder.contact']              = 'Contact';
$_LANG['settings.automations.rule.edit.form.addContactReminder.contact.placeholder']  = 'Select Contact';

$_LANG['settings.automations.rule.edit.form.addFollowUp.followUpType']             = 'Type';
$_LANG['settings.automations.rule.edit.form.addFollowUp.admin']                    = 'Admin';
$_LANG['settings.automations.rule.edit.form.addFollowUp.admin.placeholder']        = 'Select Admin';
$_LANG['settings.automations.rule.edit.form.addFollowUp.followUpType.placeholder'] = 'Select Follow-up Type';
$_LANG['settings.automations.rule.edit.form.addFollowUp.after']                    = 'Days After';
$_LANG['settings.automations.rule.edit.form.addFollowUp.description']              = 'Description';

$_LANG['settings.automations.rule.edit.form.conditionIf.field']             = 'Field';
$_LANG['settings.automations.rule.edit.form.conditionIf.field.dynamic']     = 'Dynamic';
$_LANG['settings.automations.rule.edit.form.conditionIf.field.static']      = 'Static';
$_LANG['settings.automations.rule.edit.form.conditionIf.field.placeholder'] = 'Select Field';
$_LANG['settings.automations.rule.edit.form.conditionIf.value.placeholder'] = 'Select Value';

$_LANG['settings.automations.rule.edit.form.conditionIfChange.field']             = 'Field';
$_LANG['settings.automations.rule.edit.form.conditionIfChange.field.dynamic']     = 'Dynamic';
$_LANG['settings.automations.rule.edit.form.conditionIfChange.field.static']      = 'Static';
$_LANG['settings.automations.rule.edit.form.conditionIfChange.field.placeholder'] = 'Select Field';
$_LANG['settings.automations.rule.edit.form.conditionIfChange.value.placeholder'] = 'Select Value';

$_LANG['settings.automations.rule.edit.form.conditionIfNot.field']             = 'Field';
$_LANG['settings.automations.rule.edit.form.conditionIfNot.field.dynamic']     = 'Dynamic';
$_LANG['settings.automations.rule.edit.form.conditionIfNot.field.static']      = 'Static';
$_LANG['settings.automations.rule.edit.form.conditionIfNot.field.placeholder'] = 'Select Field';
$_LANG['settings.automations.rule.edit.form.conditionIfNot.value.placeholder'] = 'Select Value';
$_LANG['settings.automations.rule.edit.form.conditionIfChange.onlyToDay']      = 'Today';

$_LANG['settings.automations.rule.edit.form.conditionIfChangeLabel.label.from']        = 'From Label';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeLabel.label.to']          = 'To Label';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeLabel.label.placeholder'] = 'Select Label';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeLabel.after']             = 'Days Of Last Changes';

$_LANG['settings.automations.rule.edit.form.conditionIfChangeAdmin.title']                = "Rule: Condition 'If Change' Admin";
$_LANG['settings.automations.rule.edit.form.conditionIfChangeAdmin.admin']                = 'Admin';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeAdmin.after']                = 'Days Of Last Changes';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeAdmin.admin.placeholder']    = 'Select Admin';

$_LANG['settings.automations.rule.edit.form.sendEmail.subject']                  = 'Subject';
$_LANG['settings.automations.rule.edit.form.sendEmail.subject.tooltip']          = "Specify email subject. Leave empty to use subject from 'ModulesGarden CRM - admin assigned template'.";
$_LANG['settings.automations.rule.edit.form.sendEmail.message']                  = 'Message';
$_LANG['settings.automations.rule.edit.form.sendEmail.message.tooltip']          = "Specify email content. Leave empty to use message from 'ModulesGarden CRM - admin assigned template'. Available variables: admin_id, admin_firstname, admin_lastname, contact_id, contact_firstname, contact_lastname.";

$_LANG['settings.automations.rule.edit.form.conditionIfDaysAfterContactCreated.after']    = 'Days After Contact Created';

$_LANG['settings.automations.rule.edit.form.conditionIfChangeType.contact_type.from']        = 'From Contact Type';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeType.contact_type.to']          = 'To Contact Type';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeType.contact_type.placeholder'] = 'Select Contact Type';
$_LANG['settings.automations.rule.edit.form.conditionIfChangeType.after']                    = 'Days Of Last Changes';

$_LANG['settings.automations.rule.edit.form.addReminder.type']                 = 'Method';
$_LANG['settings.automations.rule.edit.form.addReminder.type.email']           = 'Email';
$_LANG['settings.automations.rule.edit.form.addReminder.type.sms']             = 'SMS';
$_LANG['settings.automations.rule.edit.form.addReminder.type.required']        = 'You need to specify how a reminder will be sent';
$_LANG['settings.automations.rule.edit.form.addReminder.template']             = 'Template';
$_LANG['settings.automations.rule.edit.form.addReminder.template.placeholder'] = 'Select Template';
$_LANG['settings.automations.rule.edit.form.addReminder.admin']                = 'Admin';
$_LANG['settings.automations.rule.edit.form.addReminder.admin.placeholder']    = 'Select Admin';

$_LANG['importmail.preview.for']                         = 'Receive Message Preview for';

// SEND EMAIL TO ASSIGNED ADMIn
$_LANG['settings.automations.rule.edit.form.sendEmailToAdmin.title'] = 'Send Email to Assigned Admin';
//$_LANG['settings.automations.rule.edit.form.addFollowUp.content']

$_LANG['utils.importmail.table.th.date']  = 'Date';
$_LANG['utils.importmail.table.th.email'] = 'To';
$_LANG['utils.importmail.table.th.from_email'] = 'From';
$_LANG['utils.importmail.table.th.title'] = 'Subject';
$_LANG['utils.importmail.table.th.resource_id'] = 'Resource';
$_LANG['utils.importmail.table.th.attachment'] = 'Attachments';
$_LANG['form.clear.message'] = 'Clear Main Content';
$_LANG['modale.text.send.email'] = 'Send Email';
$_LANG['utils.importmail.table.th.create.resource'] = 'Create Contact';
$_LANG['board.labels.drag'] = 'Drag Client here';
$_LANG['text.select.labels.title'] = 'Labels';
$_LANG['text.select.labels.action'] = 'Choose Action';
$_LANG['text.select.action.search'] = 'Select Action';
$_LANG['dashboard.campanings.select.placeholder'] = 'Select Campaign';
$_LANG['resource.firstname.placeholder'] = 'First Name';
$_LANG['resource.lastname.placeholder'] = 'Last Name';

$_LANG['new.email.notification.title']              = 'You have a new message in your :inbox inbox from :contact_name';
$_LANG['new.email.notification.description']        = 'Contact :contact_name has sent you an email. You can respond here :url_to_respond';

$_LANG['new.email.notification.title.anonymous']              = 'You have a new message in your :inbox inbox from :contact_name';
$_LANG['new.email.notification.description.anonymous']        = 'You have a new message from :contact_name.';

//messages
$_LANG['delete.record.message'] = "Are you sure that you want to delete this record?";
$_LANG['delete.followup.message'] = "Are you sure that you want to delete this follow-up?";
$_LANG['delete.followupType.message'] = "Are you sure that you want to delete this follow-up type?";
$_LANG['delete.email.message'] = "Are you sure that you want to delete this email?";
$_LANG['delete.status.message'] = "Are you sure that you want to delete this status?";
$_LANG['archive.record.message'] = "Are you sure that you want to archive this record?";
$_LANG['delete.campaign.message'] = "Are you sure that you want to delete this campaign?";
$_LANG['archive.contact.message'] = "Are you sure that you want to move this contact to archive?";
$_LANG['restore.contact.message'] = "Are you sure that you want to restore this contact from archive?";
$_LANG['delete.file.message'] = "Are you sure that you want to delete this file?";
$_LANG['delete.reminder.message'] = "Are you sure that you want to delete this reminder?";
$_LANG['delete.clients.message'] = "Are you sure that you want to delete selected clients?";
$_LANG['archive.clients.message'] = "Are you sure that you want to move selected contacts to archive?";
$_LANG['restore.clients.message'] = "Are you sure that you want to restore selected contacts from archive?";
$_LANG['delete.massMessageConfiguration.message'] = "Are you sure that you want to delete this mass message configuration?";
$_LANG['delete.notification.message'] = "Are you sure that you want to delete this notification?";
$_LANG['delete.note.message'] = "Are you sure that you want to delete this note?";
$_LANG['hide.note.message'] = "Are you sure that you want to hide this note?";
$_LANG['delete.validator.message'] = "Are you sure that you want to delete this validator?";
$_LANG['delete.automation.message'] = "Are you sure that you want to delete this automation?";
$_LANG['delete.contactType.message'] = "Are you sure that you want to delete this contact type?";
$_LANG['delete.group.message'] = "Are you sure that you want to delete this group?";
$_LANG['delete.option.message'] = "Are you sure that you want to delete this option?";
$_LANG['delete.mailbox.message'] = "Are you sure that you want to delete this mailbox?";
$_LANG['delete.field.message'] = "Are you sure that you want to delete this field?";
$_LANG['delete.label.message'] = "Are you sure that you want to delete this label?";
$_LANG['delete.followupStatus.message'] = "Are you sure that you want to delete this follow-up status?";
$_LANG['delete.role.message'] = "Are you sure that you want to delete this role?";
$_LANG['delete.webForm.message'] = "Are you sure that you want to delete this web form?";
$_LANG['close.parentDialog.message'] = "Are you sure that you want to close the parent dialog?";
$_LANG['sendYourself.email.message'] = "Are you sure that you want to send an email to yourself?";
$_LANG['delete.resource.partMessage'] = "Are you sure that you want to delete";
$_LANG['convert.contact.partMessage'] = "Are you sure that you want to convert contact to";
$_LANG['change.admin.partMessage'] = "Are you sure that you want to change assigned admin to";
$_LANG['deleteCannot.contactType.message'] = "You cannot delete the last contact type.";

$_LANG['dateInFuture.webform.message'] = "The follow-up date must be set in the future.";
$_LANG['dateCannotBeEmpty.webform.message'] = "The follow-up field cannot be empty."; //
$_LANG['createFollowupError.webform.message'] = "The contact with your data has been created, but there was an error while creating the follow-up. Contact the administrator.";
$_LANG['nameCannotBeEmpty.webform.message'] = "The name field cannot be empty.";
$_LANG['emailCannotBeEmpty.webform.message'] = "Please enter a valid email address.";
$_LANG['invalidContactType.webform.message'] = "Invalid Contact Type.";
$_LANG['noAssociated.webform.message'] = "Your origin URL is not associated with this form.";
$_LANG['notFound.webform.message'] = "Webform not found";

$_LANG['node.logicError.message'] = "You are trying to drop a larger node inside a smaller one. Are you sure that you want to proceed?";
$_LANG['demo.info.message'] = "This demo shows how to use the beforeDrop callback to prompt a user before completing a drag-drop operation.";
$_LANG['demo.dropInfo.message'] = "You will get a confirmation popup any time you try to drop a node as a child of a node with a smaller value. Try dropping 20 under 5 now.";

$_LANG['delete.clients.title'] = "Delete Clients";
$_LANG['archive.clients.title'] = "Move to Archive";
$_LANG['restore.clients.title'] = "Restore from Archive";
$_LANG['assign.admin.title'] = "Assign to Other Admin";
$_LANG['change.contactType.title'] = "Change Contact Type";
$_LANG['drop.confirmation.title'] = "Drop Confirmation";

$_LANG['main.success.title'] = "Success!";
$_LANG['main.error.title'] = "Error!";
$_LANG['delete.note.success'] = "The note has been deleted successfully";
$_LANG['hide.note.success'] = "The note has been hidden successfully";
$_LANG['create.massMessage.success'] = "The mass message has been created successfully";
$_LANG['update.massMessage.success'] = "The mass message has been updated successfully";
$_LANG['delete.messageConfiguration.success'] = "The mass message configuration has been deleted successfully";