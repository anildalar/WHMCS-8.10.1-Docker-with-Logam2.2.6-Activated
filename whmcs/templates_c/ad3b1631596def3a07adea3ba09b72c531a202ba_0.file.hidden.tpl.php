<?php
/* Smarty version 3.1.48, created on 2024-09-21 04:02:12
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/fields/hidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ee454491d4b1_28780281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad3b1631596def3a07adea3ba09b72c531a202ba' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/fields/hidden.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ee454491d4b1_28780281 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getValue();?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_5_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> /><?php }
}
