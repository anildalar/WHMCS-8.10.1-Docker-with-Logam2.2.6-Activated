--
-- foreign keys for `crm_webforms_contents`
--
ALTER TABLE `crm_webforms_contents`
  ADD CONSTRAINT `crm_webforms_contents` FOREIGN KEY (`webform_id`) REFERENCES `crm_webforms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE


--
-- foreign keys for `crm_webforms_logs`
--
ALTER TABLE `crm_webforms_logs`
  ADD CONSTRAINT `crm_webforms_logs` FOREIGN KEY (`webform_id`) REFERENCES `crm_webforms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE