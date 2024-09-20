INSERT INTO `tblemailtemplates` (`type`, `name`, `subject`,`message`)
SELECT 'crm', 'Modulesgarden CRM - admin assigned template', 'Assigned admin to resource',
       '<p>Hi {$admin_firstname},</p>
       <p>You have been assigned to resource: <b>#{$contact_id}</b> {$contact_firstname} {$contact_lastname}</p>'
FROM DUAL
WHERE NOT EXISTS (SELECT * FROM `tblemailtemplates`
                  WHERE `tblemailtemplates`.`type` LIKE 'crm' AND `tblemailtemplates`.`name` LIKE 'Modulesgarden CRM - admin assigned template') LIMIT 1 ;

INSERT INTO `crm_followup_statuses` (`id`, `name`, `color`, `order`, `active`) VALUES
(1, 'Pending', '#2368AD', 0, 1),
(2, 'Confirmed', '#319e42', 1, 1),
(3, 'Closed', '#ba3636', 2, 1);

INSERT INTO `crm_settings` (`name`, `value`)
SELECT 'admin_mentions_content', 'You have been mentioned in a <a href={contactNotesLink}>note</a> on #{contactId} {contactFirstname} {contactLastname} profile.'
FROM DUAL
WHERE NOT EXISTS (SELECT * FROM `crm_settings` WHERE `crm_settings`.`name` LIKE 'admin_mentions_content') LIMIT 1;