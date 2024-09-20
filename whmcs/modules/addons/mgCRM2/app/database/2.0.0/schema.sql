
--
-- `crm_fields`
--

CREATE TABLE IF NOT EXISTS `crm_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `order` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('text','textarea','number','date','datetime','checkbox','radio','select') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
--  `crm_fields_data`
--

CREATE TABLE IF NOT EXISTS `crm_fields_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `field_type` enum('text','textarea','number','date','datetime','checkbox','radio','select') NOT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `field_id` (`field_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- `crm_fields_data_options`
--

CREATE TABLE IF NOT EXISTS `crm_fields_data_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_data_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `field_data_id_2` (`field_data_id`,`option_id`),
  KEY `field_data_id` (`field_data_id`),
  KEY `option_id` (`option_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
--  `crm_fields_groups`
--

CREATE TABLE IF NOT EXISTS `crm_fields_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- `crm_fields_options`
--

CREATE TABLE IF NOT EXISTS `crm_fields_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_id` int(10) unsigned NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `field_id` (`field_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- `crm_fields_validators`
--

CREATE TABLE IF NOT EXISTS `crm_fields_validators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_id` int(10) unsigned NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` text,
  `error` text,
  PRIMARY KEY (`id`),
  KEY `field_id` (`field_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- `crm_followup_reminders`
--

CREATE TABLE IF NOT EXISTS `crm_followup_reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `followup_id` int(10) unsigned NOT NULL,
  `template_id` int(11) NOT NULL,
  `type` enum('sms','email') NOT NULL,
  `status` enum('sent','pending','error') NOT NULL,
  `target` enum('resource','admin') NOT NULL,
  `target_id` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cc` text,
  `reply` text,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `field_id` (`followup_id`),
  KEY `followup_id` (`followup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- `crm_followup_types`
--

CREATE TABLE IF NOT EXISTS `crm_followup_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- `crm_followup_statuses`
--

CREATE TABLE IF NOT EXISTS `crm_followup_statuses` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
    `order` int(10) unsigned NOT NULL,
    `active` tinyint(1) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
--  `crm_followups`
--

CREATE TABLE IF NOT EXISTS `crm_followups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  `admin_id` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resource_id` (`resource_id`),
  KEY `type_id` (`type_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- `crm_logs`
--

CREATE TABLE IF NOT EXISTS `crm_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- `crm_email_logs`
--
CREATE TABLE IF NOT EXISTS `crm_email_logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned DEFAULT NULL,
  `followup_id` int(10) unsigned DEFAULT NULL,
  `reminder_id` int(10) unsigned DEFAULT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `to` text,
  `cc` text,
  `attachments` text,
  PRIMARY KEY (`id`),
  KEY `resource_id` (`resource_id`),
  KEY `followup_id` (`followup_id`),
  KEY `reminder_id` (`reminder_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- `crm_notes`
--

CREATE TABLE IF NOT EXISTS `crm_notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- `crm_permissions`
--

CREATE TABLE IF NOT EXISTS `crm_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_groups` text,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT '' NOT NULL,
  `allowed` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- `crm_resources`
--

CREATE TABLE IF NOT EXISTS `crm_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` int(10) unsigned NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int(1) DEFAULT NULL,
  `is_potential` tinyint(1) NOT NULL DEFAULT '0',
  `admin_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  KEY `admin_id` (`admin_id`),
  KEY `ticket_id` (`ticket_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------


--
-- `crm_resources_quotes`
--

CREATE TABLE IF NOT EXISTS `crm_resources_quotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned NOT NULL,
  `quote_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lead_quote` (`resource_id`,`quote_id`),
  KEY `resource_id` (`resource_id`),
  KEY `quote_id` (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------


--
-- `crm_resources_clients`
--

CREATE TABLE IF NOT EXISTS `crm_resources_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned NOT NULL,
  `client_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lead_client` (`resource_id`,`client_id`),
  KEY `resource_id` (`resource_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- `crm_resources_statuses`
--

CREATE TABLE IF NOT EXISTS `crm_resources_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- `crm_settings`
--

CREATE TABLE IF NOT EXISTS `crm_settings` (
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`name`,`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- `crm_resource_files`
--

CREATE TABLE IF NOT EXISTS `crm_resources_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_id` int(10) unsigned NOT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `path_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resource_id` (`resource_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;