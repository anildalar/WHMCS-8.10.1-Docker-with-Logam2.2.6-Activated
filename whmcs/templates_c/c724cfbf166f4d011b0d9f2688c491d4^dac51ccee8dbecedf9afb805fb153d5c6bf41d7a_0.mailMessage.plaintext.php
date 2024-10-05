<?php
/* Smarty version 3.1.48, created on 2024-10-02 07:31:17
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcf6c5138942_71141528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1727854277,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcf6c5138942_71141528 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
,

PLEASE PRINT THIS MESSAGE FOR YOUR RECORDS - PLEASE READ THIS EMAIL IN FULL.

We are pleased to tell you that the server you ordered has now been set up and is operational.

Server Details
=============================

<?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>


Main IP: <?php echo $_smarty_tpl->tpl_vars['service_dedicated_ip']->value;?>

Root pass: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>


IP address allocation: 
<?php echo $_smarty_tpl->tpl_vars['service_assigned_ips']->value;?>


ServerName: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>


WHM Access
=============================
http://xxxxx:2086/
Username: root
Password: <?php echo $_smarty_tpl->tpl_vars['service_password']->value;?>


Custom DNS Server Addresses
=============================
The custom DNS addresses you should set for your domain to use are: 
Primary DNS: <?php echo $_smarty_tpl->tpl_vars['service_ns1']->value;?>

Secondary DNS: <?php echo $_smarty_tpl->tpl_vars['service_ns2']->value;?>


You will have to login to your registrar and find the area where you can specify both of your custom name server addresses.

After adding these custom nameservers to your domain registrar control panel, it will take 24 to 48 hours for your domain to delegate authority to your DNS server. Once this has taken effect, your DNS server has control over the DNS records for the domains which use your custom name server addresses. 

SSH Access Information
=============================
Main IP Address: xxxxxxxx
Server Name: <?php echo $_smarty_tpl->tpl_vars['service_domain']->value;?>

Root Password: xxxxxxxx

You can access your server using a free simple SSH client program called Putty located at:
http://www.securitytools.net/mirrors/putty/

Support
=============================
For any support needs, please open a ticket at <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>


Please include any necessary information to provide you with faster service, such as root password, domain names, and a description of the problem / or assistance needed. This will speed up the support time by allowing our administrators to immediately begin diagnosing the problem.

The manual for cPanel can be found here: http://www.cpanel.net/docs/cp/ 
For documentation on using WHM please see the following link: http://www.cpanel.net/docs/whm/index.html

=============================

If you need to move accounts to the server use: Transfers Copy an account from another server with account password

http://xxxxxxx:2086/scripts2/norootcopy

Note the other server must use cpanel to move it.

=============================

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
