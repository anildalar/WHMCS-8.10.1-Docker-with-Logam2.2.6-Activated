<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:30:09
  from '/var/www/html/templates/six/includes/pageheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff581881950_33479596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b67bcd2da4d41f50a0f6cde01e9509087c799b9' => 
    array (
      0 => '/var/www/html/templates/six/includes/pageheader.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff581881950_33479596 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</div>
<?php }
}
