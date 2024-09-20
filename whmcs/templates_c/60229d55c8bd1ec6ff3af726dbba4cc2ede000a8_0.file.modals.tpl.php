<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:22:15
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed22a774ce37_53779471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60229d55c8bd1ec6ff3af726dbba4cc2ede000a8' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/modals/delete-menu-item.tpl' => 1,
    'file:adminarea/includes/modals/translation.tpl' => 1,
    'file:adminarea/includes/modals/translation-desc.tpl' => 1,
    'file:adminarea/includes/modals/common-translations.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
    'file:adminarea/menu/includes/modals/delete-menu.tpl' => 1,
    'file:adminarea/menu/includes/modals/overwrite-display-menu.tpl' => 1,
    'file:adminarea/menu/includes/modals/icon-modal.tpl' => 1,
    'file:adminarea/menu/includes/modals/icon-remove.tpl' => 1,
    'file:adminarea/menu/includes/modals/change-type.tpl' => 1,
    'file:adminarea/includes/modals/export.tpl' => 1,
  ),
),false)) {
function content_66ed22a774ce37_53779471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/delete-menu-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/translation-desc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/common-translations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals/delete-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals/overwrite-display-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals/icon-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals/icon-remove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals/change-type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/export.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemId'=>$_smarty_tpl->tpl_vars['menu']->value->id,'itemType'=>'menu'), 0, false);
}
}
}
