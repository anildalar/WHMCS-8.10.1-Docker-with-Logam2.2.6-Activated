-- --------------------------------------------------------
--
-- `crm_labels`
--
CREATE TABLE IF NOT EXISTS `crm_labels` (
  `id`          int(10)       unsigned                          NOT NULL AUTO_INCREMENT,
  `name`        varchar(250)            COLLATE utf8_unicode_ci NOT NULL,
  `color`       varchar(32)             COLLATE utf8_unicode_ci NOT NULL,
  `order`       int(10)                                         NOT NULL,

  `created_at`  timestamp   NOT NULL  DEFAULT '0000-00-00 00:00:00',
  `updated_at`  timestamp   NOT NULL  DEFAULT '0000-00-00 00:00:00',
  `deleted_at`  timestamp   NULL      DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- `crm_labels_clients`
--
CREATE TABLE IF NOT EXISTS `crm_labels_clients` (
  `id`         int(10)   unsigned NOT NULL  AUTO_INCREMENT,
  `label_id`   int(10)            NOT NULL,
  `client_id`  int(10)            NOT NULL,
  `order`      int(10)            NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- `crm_automations`
--
CREATE TABLE IF NOT EXISTS `crm_automations` (
  `id`          int(10)       unsigned                          NOT NULL AUTO_INCREMENT,
  `name`        varchar(250)            COLLATE utf8_unicode_ci NOT NULL,
  `status`      tinyint(1)                                      NOT NULL,
  `order`       int(10)                                         NOT NULL,

  `created_at`  timestamp   NOT NULL  DEFAULT '0000-00-00 00:00:00',
  `updated_at`  timestamp   NOT NULL  DEFAULT '0000-00-00 00:00:00',
  `deleted_at`  timestamp   NULL      DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- `crm_automations_rules`
--
CREATE TABLE IF NOT EXISTS `crm_automations_rules` (
  `id`              int(10)   unsigned NOT NULL  AUTO_INCREMENT,
  `parent_id`       int(10)            NOT NULL DEFAULT 0,
  `automation_id`   int(10)            NOT NULL,
  `rule`            varchar(250)       NOT NULL,
  `data`            text               NOT NULL,
  `order`           int(10)            NOT NULL  DEFAULT 0,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- `crm_automations_rules_excecute`
--
CREATE TABLE IF NOT EXISTS `crm_automations_rules_excecute` (
  `id`              int(10)   unsigned NOT NULL  AUTO_INCREMENT,
  `rule_id`         int(10)            NOT NULL,
  `rule`            varchar(250)       NOT NULL,
  `data`            text               NOT NULL,
  `date`            timestamp          NOT NULL DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- `crm_mail_read`
--
CREATE TABLE IF NOT EXISTS `crm_mail_read` (
  `id`              int(10)   unsigned NOT NULL  AUTO_INCREMENT,
  `resource_id`     int(10)            NOT NULL DEFAULT 0,
  `mail_configuration_id`     int(10)  NOT NULL DEFAULT 0,
  `email`           varchar(250)       NOT NULL DEFAULT 'example@mail.com',
  `from_email`      varchar(250)       NOT NULL DEFAULT 'example@mail.com',
  `mail_id`         varchar(250)       NOT NULL DEFAULT '',
  `title`           varchar(250)       NOT NULL DEFAULT 'Empty Title',
  `content`         text               NOT NULL DEFAULT '',
  `date`            timestamp          NOT NULL DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;