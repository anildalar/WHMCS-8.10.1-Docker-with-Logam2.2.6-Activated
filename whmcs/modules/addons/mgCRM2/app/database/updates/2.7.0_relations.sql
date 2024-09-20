ALTER TABLE `crm_attachments` ADD CONSTRAINT `mailread_attachments`
FOREIGN KEY (`mail_read_id`) REFERENCES `crm_mail_read`(`id`)
ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `crm_attachments` ADD CONSTRAINT `mailbox_attachments`
FOREIGN KEY (`mailbox_id`) REFERENCES `crm_mail_configuration`(`id`)
ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `crm_webforms` ADD `duplicate_email` BOOLEAN AFTER `labels`;
ALTER TABLE `crm_mail_read` ADD `reply_to` TEXT NOT NULL AFTER `deleted_at`;
ALTER TABLE `crm_email_logs` ADD `sender` text after `date`;
ALTER TABLE `crm_mail_read` CHANGE `reply_to` `reply_to` TEXT NULL;