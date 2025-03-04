<?php
/* Smarty version 3.1.48, created on 2025-03-04 11:52:02
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6e9627d2344_48400786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806717379eb1277849b061703fced5c05c7d26f2' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/settings.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c6e9627d2344_48400786 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pageOption']->value && $_smarty_tpl->tpl_vars['pageOption']->value->renderPageSettings()) {?>
    <?php echo $_smarty_tpl->tpl_vars['pageOption']->value->renderPageSettings($_smarty_tpl->tpl_vars['pageOption']->value->getSettings());?>

<?php }
}
}
