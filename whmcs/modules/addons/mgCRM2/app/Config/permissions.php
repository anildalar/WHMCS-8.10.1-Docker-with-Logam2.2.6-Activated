<?php
/***************************************************************************************
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
 * @link        http://www.docs.modulesgarden.com/CRM_For_WHMCS for documenation
 * @link        http://modulesgarden.com ModulesGarden
 *              Top Quality Custom Software Development
 * @copyright   Copyright (c) ModulesGarden, INBS Group Brand,
 *              All Rights Reserved (http://modulesgarden.com)
 *
 * This software is furnished under a license and mxay be used and copied only  in
 * accordance  with  the  terms  of such  license and with the inclusion of the above
 * copyright notice.  This software  or any other copies thereof may not be provided
 * or otherwise made available to any other person.  No title to and  ownership of
 * the  software is hereby transferred.
 *
 **************************************************************************************/




/**
 * Define navigation items
 * This file should be encoded
 */


return array(
    "permissions" => array(
    array(
            'rule'       => 'resources',
            'name'       => 'permission.field.contacts_management',

            'children'  => array(
                array(
                    'rule' => 'create_lead',
                    'name' => 'permission.field.contacts_management.create_lead',
                ),
                array(
                    'rule' => 'convert',
                    'name' => 'permission.field.contacts_management.convert',
                ),
                array(
                    'rule' => 'trash',
                    'name' => 'permission.field.contacts_management.trash',
                ),
                array(
                    'rule' => 'untrash',
                    'name' => 'permission.field.contacts_management.untrash',
                ),
                array(
                    'rule' => 'change_priority',
                    'name' => 'permission.field.contacts_management.change_priority',
                ),
                array(
                    'rule' => 'change_status',
                    'name' => 'permission.field.contacts_management.change_status',
                ),
                array(
                    'rule' => 'delete_contact',
                    'name' => 'permission.field.contacts_management.delete_contact',
                ),
                array(
                    'rule' => 'assign_admin',
                    'name' => 'permission.field.contacts_management.assign_admin',
                ),
                array(
                    'rule' => 'assign_client',
                    'name' => 'permission.field.contacts_management.assign_client',
                ),
                array(
                    'rule' => 'change_country',
                    'name' => 'permission.field.contacts_management.change_country',
                ),
                array(
                    'rule' => 'change_labels',
                    'name' => 'permission.field.contacts_management.change_labels',
                ),
                array(
                    'rule' => 'change_campaigns',
                    'name' => 'permission.field.contacts_management.change_campaigns',
                ),
                array(
                    'rule' => 'assign_ticket',
                    'name' => 'permission.field.contacts_management.assign_ticket',
                ),
                array(
                    // troublesome
                    'rule' => 'not_mine',
                    'name' => 'permission.field.contacts_management.not_mine',
                ),
                array(
                    'rule' => 'allow_email',
                    'name' => 'permission.field.contacts_management.allow_email',
                ),
                array(
                    'rule' => 'allow_sms',
                    'name' => 'permission.field.contacts_management.allow_sms',
                ),
                array(
                    'rule' => 'allow_notes',
                    'name' => 'permission.field.contacts_management.allow_notes',
                ),
                array(
                    'rule' => 'allow_ticket_respose',
                    'name' => 'permission.field.contacts_management.allow_ticket_respose',
                ),
                array(
                    'rule' => 'create_followup',
                    'name' => 'permission.field.contacts_management.create_followup',
                ),
                array(
                    'rule' => 'view_files',
                    'name' => 'permission.field.contacts_management.view_files',
                ),
                array(
                    'rule' => 'view_logs',
                    'name' => 'permission.field.contacts_management.view_logs',
                ),
            ),
        ),
        array
        (
            'rule'       => 'settings',
            'name'      => 'permission.field.settings',

            'children'  => array(
                array(
                    'rule'      => 'campaigns',
                    'name'      => 'permission.field.settings.campaigns',
                ),
                array(
                    'rule'      => 'notifications',
                    'name'      => 'permission.field.settings.notifications',
                ),
                array(
                    'rule'       => 'view_general',
                    'name'      => 'permission.field.settings.view_general',
                ),
                array(
                    'rule'       => 'manage_general',
                    'name'      => 'permission.field.settings.manage_general',
                ),
                array(
                    'rule'       => 'view_cron',
                    'name'      => 'permission.field.settings.view_cron',
                ),
                array(
                    'rule'       => 'manage_followups',
                    'name'      => 'permission.field.settings.manage_followups',
                ),
                array(
                    'rule'       => 'mailbox',
                    'name'      => 'permission.field.settings.mailbox',
                ),
                array(
                    'rule'       => 'manage_fields',
                    'name'      => 'permission.field.settings.manage_fields',
                ),
                array(
                    'rule'       => 'manage_statuses',
                    'name'      => 'permission.field.settings.manage_statuses',
                ),
                array(
                    'rule'       => 'manage_fields_map',
                    'name'      => 'permission.field.settings.manage_fields_map',
                ),
                array(
                    'rule'       => 'manage_types',
                    'name'      => 'permission.field.settings.manage_types',
                ),
                array(
                    'rule'      => 'manage_massmessage',
                    'name'      => 'permission.field.settings.manage_massmessage',
                ),
                array(
                    'rule'      => 'importexport',
                    'name'      => 'permission.field.settings.importexport',
                ),
                array(
                    'rule'      => 'webforms',
                    'name'      => 'permission.field.settings.webforms',
                ),
                array(
                    'rule'      => 'automations',
                    'name'      => 'permission.field.settings.automations',
                ),
                array(
                    'rule'      => 'general_label_view',
                    'name'      => 'permission.field.settings.general.label.view',
                ),
            ),
        ),
        array
        (
            'rule'      => 'calendar',
            'name'      => 'permission.field.calendar',

            'children'  => array(
                array(
                    'rule'      => 'view',
                    'name'      => 'permission.field.calendar.view',
                ),
                array(
                    'rule'      => 'other_followups',
                    'name'      => 'permission.field.calendar.other_followups',
                ),
                array(
                    'rule'       => 'other_reschedue',
                    'name'      => 'permission.field.calendar.other_reschedue',
                ),
                array(
                    'rule'       => 'other_delete',
                    'name'      => 'permission.field.calendar.other_delete',
                ),
            ),
        ),
        array
        (
            'rule'      => 'statistics',
            'name'      => 'permission.field.statistics',

            'children'  => array(
                array(
                    'rule'      => 'other_admins',
                    'name'      => 'permission.field.statistics.other_admins',
                ),
                array(
                    'rule'      => 'allow_global',
                    'name'      => 'permission.field.statistics.allow_global',
                ),
            ),
        ),
        array
        (
            'rule'      => 'other',
            'name'      => 'permission.field.other',

            'children'  => array(
                array(
                    'rule'      => 'preview_dashboard',
                    'name'      => 'permission.field.other.preview_dashboard',
                ),
                array(
                    'rule'      => 'access_migrator',
                    'name'      => 'permission.field.other.access_migrator',
                ),
                array(
                    'rule'      => 'preview_import_mail',
                    'name'      => 'permission.field.other.preview_import_mail',
                ),
                array(
                    'rule'      => 'board.view',
                    'name'      => 'permission.field.other.board_view',
                )
            ),
        ),
        array(
            'rule'      => 'leads',
            'name'      => 'permission.field.leads',
            'children'  => array(),
        ),
    )
);
