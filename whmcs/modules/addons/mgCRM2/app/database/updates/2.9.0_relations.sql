ALTER TABLE `crm_followups` ADD COLUMN `status_id` INT( 10 ) UNSIGNED NOT NULL AFTER `type_id`;
ALTER TABLE `crm_followup_reminders` ADD COLUMN `bcc` TEXT AFTER `cc`;
ALTER TABLE `crm_webforms` ADD COLUMN `create_followup` BOOLEAN;
ALTER TABLE `crm_webforms` ADD COLUMN `followup_label` INT( 10 ) UNSIGNED;