CREATE TABLE IF NOT EXISTS `crm_attachments` (
  `id`                  int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mailbox_id`          int(10) unsigned NOT NULL,
  `mail_read_id`        int(10) unsigned NOT NULL,
  `filename`            TEXT NULL,
  `attachment`          LONGBLOB NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;