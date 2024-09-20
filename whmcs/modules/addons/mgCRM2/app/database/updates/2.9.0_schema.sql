CREATE TABLE IF NOT EXISTS `crm_followup_statuses` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `color` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
    `order` int(10) unsigned NOT NULL,
    `active` tinyint(1) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;