<?php
/* Smarty version 3.1.48, created on 2024-09-09 03:32:58
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66de6c6ad58e06_48213010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806717379eb1277849b061703fced5c05c7d26f2' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/settings.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66de6c6ad58e06_48213010 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pageOption']->value && $_smarty_tpl->tpl_vars['pageOption']->value->renderPageSettings()) {?>
    <?php echo $_smarty_tpl->tpl_vars['pageOption']->value->renderPageSettings($_smarty_tpl->tpl_vars['pageOption']->value->getSettings());?>

<?php }
}
}
