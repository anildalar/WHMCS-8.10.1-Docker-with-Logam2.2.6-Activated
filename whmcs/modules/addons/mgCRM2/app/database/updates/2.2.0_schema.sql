-- --------------------------------------------------------
--
-- `crm_resources_types`
--

CREATE TABLE IF NOT EXISTS `crm_resources_types` (
  `id`                  int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name`                varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order`               int(10) unsigned NOT NULL,

  `color`               varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon`                varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,

  `active`              tinyint(1) NOT NULL,                               
  `show_in_nav`         tinyint(1) NOT NULL,                               
  `show_in_submenu`     tinyint(1) NOT NULL,                              
  `show_in_dashboard`   tinyint(1) NOT NULL,                              

  `created_at`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`          timestamp NULL DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------
--
-- `crm_mass_message_configs`
--

CREATE TABLE IF NOT EXISTS `crm_mass_message_configs` (
  `id`                  int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description`         text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,

  `message_content`     text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_title`       text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_type`        enum('email','sms') NOT NULL,

  `target_ids`          text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `target_type`         enum('users','usergroups','campaigns') NOT NULL,

  `generated`           tinyint(1) NOT NULL,
  `total`               int(10) unsigned NOT NULL,
  `date`                timestamp,

  `created_at`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`          timestamp NULL DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- `crm_mass_message_pendings`
--

CREATE TABLE IF NOT EXISTS `crm_mass_message_pendings` (
  `id`                      int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mass_message_config_id`  int(10) unsigned NOT NULL,

  `client_id`               int(11) DEFAULT NULL,
  `resource_id`             int(10) unsigned DEFAULT NULL,

  `message_content`         text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_title`           text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message_type`            enum('email','sms') NOT NULL,

  PRIMARY KEY (`id`),
  KEY `mass_message_config_id`  (`mass_message_config_id`),
  KEY `client_id`               (`client_id`),
  KEY `resource_id`             (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;