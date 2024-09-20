-- --------------------------------------------------------
--
-- `crm_webforms`
--

CREATE TABLE IF NOT EXISTS `crm_webforms` (
  `id`                      int(10) unsigned NOT NULL AUTO_INCREMENT,
  
  `type_id`                 int(10) unsigned NOT NULL,
  `status_id`               int(10) unsigned NOT NULL,
  `admin_id`                int(10) unsigned NOT NULL,
  
  `name`                    text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url`                     text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact_quantity`        int(10) unsigned NOT NULL,

  `created_at`                 timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at`                 timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- `crm_webforms_contents`
--

CREATE TABLE IF NOT EXISTS `crm_webforms_contents` (
  `webform_id`              int(10) unsigned NOT NULL,
  `field_id`                VARCHAR(10),
  
  `custom_name`             text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order`                   int(10) unsigned NOT NULL,


  KEY `webform_id`              (`webform_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------
--
-- `crm_webforms_logs`
--

CREATE TABLE IF NOT EXISTS `crm_webforms_logs` (
  `webform_id`              int(10) unsigned NOT NULL,
  `message`                 text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date`                    timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,

  KEY `webform_id`              (`webform_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;