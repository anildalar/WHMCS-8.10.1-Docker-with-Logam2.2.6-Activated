-- -- -- -- -- -- -- -- -- -- -- 
-- Add  References to  tables --
-- -- -- -- -- -- -- -- -- -- --

--
-- AdvancedBilling_ProductAutoUpgrade_GroupSettings --
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_GroupSettings`
ADD CONSTRAINT fk_ab_pau_GroupSettings_groupId
FOREIGN KEY (groupId)
REFERENCES AdvancedBilling_ProductAutoUpgrade_Groups (id)
ON DELETE CASCADE;

--
-- AdvancedBilling_ProductAutoUpgrade_GroupUserSettings
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_GroupUserSettings`
ADD CONSTRAINT fk_ab_pau_GroupUserSettings_groupId
FOREIGN KEY (groupId)
REFERENCES AdvancedBilling_ProductAutoUpgrade_Groups (id)
ON DELETE CASCADE;

--
-- AdvancedBilling_ProductAutoUpgrade_GroupOptions
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_GroupOptions`
ADD CONSTRAINT fk_ab_pau_GroupOptions_groupId
FOREIGN KEY (groupId)
REFERENCES AdvancedBilling_ProductAutoUpgrade_Groups (id)
ON DELETE CASCADE;

--
-- AdvancedBilling_ProductAutoUpgrade_GroupOptionRules
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_GroupOptionRules`
ADD CONSTRAINT fk_ab_pau_GroupOptionRules_optionId
FOREIGN KEY (optionId)
REFERENCES AdvancedBilling_ProductAutoUpgrade_GroupOptions (id)
ON DELETE CASCADE;


--
-- AdvancedBilling_ProductAutoUpgrade_GroupOptionsDescription
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_GroupOptionsDescription`
ADD CONSTRAINT fk_ab_pau_GroupOptionsDescription_optionId
FOREIGN KEY (optionId)
REFERENCES AdvancedBilling_ProductAutoUpgrade_GroupOptions (id)
ON DELETE CASCADE;


--
-- AdvancedBilling_ProductAutoUpgrade_GroupOptionsUserSettings
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_GroupOptionsUserSettings`
ADD CONSTRAINT fk_ab_pau_GroupOptionsUserSettings_optionId
FOREIGN KEY (optionId)
REFERENCES AdvancedBilling_ProductAutoUpgrade_GroupOptions (id)
ON DELETE CASCADE;


--
-- AdvancedBilling_ProductAutoUpgrade_Account
--
ALTER TABLE `AdvancedBilling_ProductAutoUpgrade_Account`
ADD FOREIGN KEY (hostingId)
REFERENCES tblhosting (id)
ON DELETE CASCADE;