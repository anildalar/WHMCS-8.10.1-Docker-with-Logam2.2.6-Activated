ALTER TABLE `crm_webforms` ADD COLUMN `followup_status` SMALLINT UNSIGNED;
ALTER TABLE `crm_resources` ADD COLUMN `description` VARCHAR(1024);
ALTER TABLE `crm_resources` ADD COLUMN `short_description` VARCHAR(255);