--
-- foreign keys for `crm_campaigns_admins`
--
ALTER TABLE `crm_campaigns_admins`
  ADD CONSTRAINT `crm_campaigns_admins_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `crm_campaigns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_campaigns_admins_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `tbladmins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- foreign keys for `crm_campaigns_resources`
--
ALTER TABLE `crm_campaigns_resources`
  ADD CONSTRAINT `crm_campaigns_resources_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `crm_campaigns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_campaigns_resources_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- foreign keys for `crm_notifications_admins`
--
ALTER TABLE `crm_notifications_admins`
  ADD CONSTRAINT `crm_notifications_admins_ibfk_1` FOREIGN KEY (`notification_id`) REFERENCES `crm_notifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_notifications_admins_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `tbladmins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;



--
-- small update for foreign keys to `crm_fields_validators`
--
ALTER TABLE `crm_fields_validators`
  DROP FOREIGN KEY  `crm_fields_validators_ibfk_1`;

ALTER TABLE `crm_fields_validators`
  ADD CONSTRAINT `crm_fields_validators_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `crm_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
