<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:53
  from '/var/www/html/templates/orderforms/lagom2/sidebar-categories-collapsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7c967dd35_70087937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a674aca03ea114c49c57399051d9955428a3593' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/sidebar-categories-collapsed.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/overwrites/sidebar-categories-collapsed.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-selector.tpl' => 1,
  ),
),false)) {
function content_66dff7c967dd35_70087937 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/sidebar-categories-collapsed.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] != '1') {?>
    <div class="categories-collapsed visible-xs visible-sm visible-md clearfix">
        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
    <?php }
}
}
}
