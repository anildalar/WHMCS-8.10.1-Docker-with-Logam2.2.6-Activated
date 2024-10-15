<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:22
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/assets/css_assets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e2e5e1542_40744243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e26dbd183dc636b6d0173096ab691eaf5ccd631' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/assets/css_assets.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67036e2e5e1542_40744243 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/layers-ui.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/mg_styles.css">

<?php if ($_smarty_tpl->tpl_vars['isCustomModuleCss']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['customAssetsURL']->value;?>
/css/module_styles.css">
<?php }
}
}
