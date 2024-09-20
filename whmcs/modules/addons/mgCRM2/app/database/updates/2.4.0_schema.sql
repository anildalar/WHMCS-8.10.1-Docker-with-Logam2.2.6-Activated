-- --------------------------------------------------------
--
-- `crm_calendar_synch`
--

CREATE TABLE IF NOT EXISTS `crm_calendar_synch` (
  `id`                 int(10)      unsigned                          NOT NULL                      AUTO_INCREMENT,

  `followup_id`        int(10)                                        NOT NULL,
  `provider_id`        varchar(32)            COLLATE utf8_unicode_ci NOT NULL               UNIQUE,

  `provider`           varchar(250)           COLLATE utf8_unicode_ci           DEFAULT NULL,

  `created_at`         timestamp                                      NOT NULL  DEFAULT '0000-00-00 00:00:00',
  `updated_at`         timestamp                                      NOT NULL  DEFAULT '0000-00-00 00:00:00',
  `deleted_at`         timestamp                                      NULL      DEFAULT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- `crm_mail_configuration`
--

CREATE TABLE IF NOT EXISTS `crm_mail_configuration` (
  `id`                  int(10)      unsigned                         NOT NULL                       AUTO_INCREMENT,

  `admin_id`            int(10)      unsigned                         NOT NULL,

  `name`                varchar(255)          COLLATE utf8_unicode_ci NOT NULL,
  `email`               varchar(255)          COLLATE utf8_unicode_ci NOT NULL                UNIQUE,
  `description`         varchar(255)          COLLATE utf8_unicode_ci           DEFAULT NULL,
  `MailEncoding`        tinyint(1)                                    NOT NULL,
  `SMTPHost`            varchar(255)          COLLATE utf8_unicode_ci NOT NULL,
  `SMTPPort`            int(10)      unsigned                         NOT NULL,
  `SMTPUsername`        varchar(255)          COLLATE utf8_unicode_ci NOT NULL,
  `SMTPPassword`        varchar(255)          COLLATE utf8_unicode_ci NOT NULL,
  `SMTPSSL`             varchar(10)           COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;