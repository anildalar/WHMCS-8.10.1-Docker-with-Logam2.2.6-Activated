ALTER TABLE `crm_mail_read`
  ADD `deleted_at` timestamp NULL DEFAULT NULL;
ALTER TABLE `crm_email_logs`
  ADD `template_id` INT NULL DEFAULT NULL;
ALTER TABLE `crm_webforms`
 ADD `labels` TEXT NULL DEFAULT NULL;