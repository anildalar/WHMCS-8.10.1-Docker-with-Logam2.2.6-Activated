CREATE TABLE IF NOT EXISTS `crm_events` (
    `id`          int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name`        varchar(250) COLLATE utf8_unicode_ci NOT NULL,
    `data`        text COLLATE utf8_unicode_ci NOT NULL,
    `created_at`  timestamp   NOT NULL  DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id`),
    INDEX (`name`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;