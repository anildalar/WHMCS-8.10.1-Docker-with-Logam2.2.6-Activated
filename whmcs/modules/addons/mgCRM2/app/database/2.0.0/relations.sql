
--
-- As far as we know WHMCS does not use foreign keys
-- These are not 'required', but it will speed up DB operations
-- in error occured by perform this queries, please resolve problems manually in your DB
--
-- sometimes problems occured ftom old WHMCS schema, when related column have diferent definition
-- for example int(11) instead int(10)
--

--
-- foreign keys for `crm_fields_data`
--
ALTER TABLE `crm_fields_data`
  ADD CONSTRAINT `crm_fields_data_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `crm_fields` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `crm_fields_data_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- foreign keys for `crm_fields_data_options`
--
ALTER TABLE `crm_fields_data_options`
  ADD CONSTRAINT `crm_fields_data_options_ibfk_1` FOREIGN KEY (`field_data_id`) REFERENCES `crm_fields_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_fields_data_options_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `crm_fields_options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- foreign keys for `crm_fields_options`
--
ALTER TABLE `crm_fields_options`
  ADD CONSTRAINT `crm_fields_options_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `crm_fields` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- foreign keys for `crm_fields_validators`
--
ALTER TABLE `crm_fields_validators`
  ADD CONSTRAINT `crm_fields_validators_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `crm_fields` (`id`);

--
-- foreign keys for `crm_followups`
--
ALTER TABLE `crm_followups`
  ADD CONSTRAINT `crm_followups_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_followups_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `crm_followup_types` (`id`);

--
-- foreign keys for `crm_followup_reminders`
--
ALTER TABLE `crm_followup_reminders`
  ADD CONSTRAINT `crm_followup_reminders_ibfk_1` FOREIGN KEY (`followup_id`) REFERENCES `crm_followups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- foreign keys for `crm_logs`
--
ALTER TABLE `crm_logs`
  ADD CONSTRAINT `crm_logs_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_logs_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `tbladmins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- foreign keys for `crm_email_logs`
--
ALTER TABLE `crm_email_logs`
  ADD CONSTRAINT `crm_email_logs_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_email_logs_ibfk_3` FOREIGN KEY (`followup_id`) REFERENCES `crm_followups` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_email_logs_ibfk_4` FOREIGN KEY (`reminder_id`) REFERENCES `crm_followup_reminders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- foreign keys for `crm_notes`
--
ALTER TABLE `crm_notes`
  ADD CONSTRAINT `crm_notes_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tbladmins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_notes_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- foreign keys for `crm_resources`
--
ALTER TABLE `crm_resources`
  ADD CONSTRAINT `crm_resources_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `crm_resources_statuses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_resources_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `tbladmins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_resources_ibfk_4` FOREIGN KEY (`client_id`) REFERENCES `tblclients` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_resources_ibfk_5` FOREIGN KEY (`ticket_id`) REFERENCES `tbltickets` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- foreign keys for `crm_resources_clients`
--
ALTER TABLE `crm_resources_clients`
  ADD CONSTRAINT `crm_resources_clients_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `crm_resources_clients_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `tblclients` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- foreign keys for `crm_resources_quotes`
--
ALTER TABLE `crm_resources_quotes`
  ADD CONSTRAINT `crm_resources_quotes_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;


--
-- foreign keys for `crm_resource_files`
--
ALTER TABLE `crm_resources_files`
  ADD CONSTRAINT `crm_resources_files_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_resources_files_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `tbladmins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
