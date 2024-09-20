
--
-- damm important, as we have column type_id from is_potential, we want to assign correct IDS
-- from predefined crm_resources_types
-- as these update already happend, 
--
UPDATE  `crm_resources` SET  `is_potential` = 2 WHERE is_potential = 1;
UPDATE  `crm_resources` SET  `is_potential` = 1 WHERE is_potential = 0;


--
-- Add pre defined types
--
INSERT INTO `crm_resources_types` 
(`id`, `name`,      `order`, `color`, `icon`, `active`, `show_in_nav`, `show_in_submenu`, `show_in_dashboard`, `created_at`, `updated_at`) 
VALUES
(1,    'Lead',      0,  '#00c444', 'fa fa-star-o', 1,          1,              1,                  1,                  NOW(),      NOW()   ),
(2,    'Potential', 1,  '#00c444', 'fa fa-star',   1,          1,              1,                  1,                  NOW(),      NOW()   );


--
-- update schema for `crm_resources`, get rid of standard is_potential, and move to user defined types
--
ALTER TABLE  `crm_resources` 
  CHANGE  `is_potential`  `type_id` INT( 10 ) UNSIGNED NULL;


--
-- also we need to add index for this
--
ALTER TABLE `crm_resources` 
  ADD INDEX `type_id` (`type_id`);


--
-- foreign keys for `crm_campaigns_admins`
--
ALTER TABLE `crm_resources`
  ADD CONSTRAINT `crm_resources_ibfk_6` FOREIGN KEY (`type_id`) REFERENCES `crm_resources_types` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;


--
-- foreign keys for `crm_mass_message_pendings`
--
ALTER TABLE `crm_mass_message_pendings`
  ADD CONSTRAINT `crm_mass_message_pendings_ibfk_1` FOREIGN KEY (`mass_message_config_id`) REFERENCES `crm_mass_message_configs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_mass_message_pendings_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `tblclients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_mass_message_pendings_ibfk_3` FOREIGN KEY (`resource_id`) REFERENCES `crm_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;