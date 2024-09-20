INSERT INTO `tblemailtemplates` (`type`, `name`, `subject`,`message`) SELECT 'crm', 'Modulesgarden CRM - webform template', 'Created new webform', 
'<p>Hi {$firstname},</p>
<p>Now, we have new webform. Remember this.</p>' 
FROM DUAL
WHERE NOT EXISTS (SELECT * FROM `tblemailtemplates` WHERE `tblemailtemplates`.`type` LIKE 'crm' AND `tblemailtemplates`.`name` LIKE 'Modulesgarden CRM - webform template') 
LIMIT 1 ;