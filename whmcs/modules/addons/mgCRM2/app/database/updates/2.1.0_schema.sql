
-- --------------------------------------------------------
--
-- `crm_campaigns`
--

CREATE TABLE IF NOT EXISTS `crm_campaigns` (
  `id`          int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name`        varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color`       varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_start`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_end`    timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `filters`     text,
  `created_at`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`  timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- `crm_campaigns_admins`
--

CREATE TABLE IF NOT EXISTS `crm_campaigns_admins` (
  `id`          int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(10) unsigned NOT NULL,
  `admin_id`    int(10) DEFAULT NULL,
  `created_at`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`  timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campaign_id` (`campaign_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
--
-- `crm_campaigns_resources`
--

CREATE TABLE IF NOT EXISTS `crm_campaigns_resources` (
  `id`              int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id`     int(10) unsigned NOT NULL,
  `resource_id`     int(10) unsigned NOT NULL,
  `created_at`      timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`      timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`      timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `campaign_id` (`campaign_id`),
  KEY `resource_id` (`resource_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------
--
-- `crm_notifications`
--

CREATE TABLE IF NOT EXISTS `crm_notifications` (
  `id`                  int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class`               varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type`                varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content`             text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirmation`        tinyint(1) NOT NULL,
  `hide_after_confirm`  tinyint(1) NOT NULL,
  `date_start`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_end`            timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`          timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`          timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- `crm_campaigns_admins`
--

CREATE TABLE IF NOT EXISTS `crm_notifications_admins` (
  `id`              int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notification_id` int(10) unsigned NOT NULL,
  `admin_id`        int(10) DEFAULT NULL,
  `created_at`      timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`      timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at`      timestamp NULL DEFAULT NULL,
  `accepted_at`     timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notification_id` (`notification_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;