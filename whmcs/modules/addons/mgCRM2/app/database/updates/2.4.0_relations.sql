--
-- foreign keys for `crm_resources`
--
ALTER TABLE `crm_resources`
  ADD `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL;

--
-- foreign keys for `crm_webforms`
--
ALTER TABLE `crm_webforms`
  ADD `admins` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL;