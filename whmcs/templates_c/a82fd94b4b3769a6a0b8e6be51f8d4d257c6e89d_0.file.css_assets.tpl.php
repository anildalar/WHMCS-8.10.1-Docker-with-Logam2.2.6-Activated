<?php
/* Smarty version 3.1.48, created on 2024-12-18 08:53:51
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/controlers/assets/css_assets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67628d9f554288_73654233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a82fd94b4b3769a6a0b8e6be51f8d4d257c6e89d' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/controlers/assets/css_assets.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67628d9f554288_73654233 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/css/layers-ui.css?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/css/mg_styles.css?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
">

<?php if ($_smarty_tpl->tpl_vars['isCustomModuleCss']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['customAssetsURL']->value;?>
/css/module_styles.css?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
">
<?php }
}
}
