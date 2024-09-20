--
-- foreign keys for `crm_webforms`
--
ALTER TABLE `crm_webforms`
  ADD `timeout` int(255) DEFAULT 0;
--
-- foreign keys for `crm_resources`
--
ALTER TABLE `crm_resources`
  ADD `lastname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL;
--
-- foreign keys for `crm_mail_configuration`
--
ALTER TABLE `crm_mail_configuration`
  ADD `receive_method` enum('pop3', 'imap') DEFAULT 'pop3';
--
-- foreign keys for `crm_mail_configuration`
--
ALTER TABLE `crm_mail_configuration`
  ADD `receive_port` int(10)  DEFAULT NULL;
--
-- foreign keys for `crm_mail_configuration`
--
ALTER TABLE `crm_mail_configuration`
  ADD `receive_folder` varchar(200)  DEFAULT 'INBOX';
--
-- foreign keys for `crm_mail_configuration`
--
ALTER TABLE `crm_mail_configuration`
  ADD `receive_ssl` varchar(200)  DEFAULT '';
--
-- foreign keys for `crm_mail_configuration`
--
ALTER TABLE `crm_mail_configuration`
  ADD `receive_server` varchar(200)  DEFAULT '';
--
-- foreign keys for `crm_mass_message_configs`
--
ALTER TABLE `crm_mass_message_configs`
  ADD `mailbox_id` int(10)  DEFAULT null;

ALTER TABLE `crm_fields`
  CHANGE `type` `type` ENUM('text','textarea','number','date','datetime','checkbox','radio','select','phone')  NOT NULL DEFAULT 'text';

ALTER TABLE `crm_fields_data` CHANGE `field_type` `field_type` ENUM('text','textarea','number','date','datetime','checkbox','radio','select','phone') NOT NULL;