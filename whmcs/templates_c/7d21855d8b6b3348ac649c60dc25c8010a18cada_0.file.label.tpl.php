<?php
/* Smarty version 3.1.48, created on 2024-10-03 10:15:33
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/others/label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fe6ec5125c54_55067909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d21855d8b6b3348ac649c60dc25c8010a18cada' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/others/label.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fe6ec5125c54_55067909 (Smarty_Internal_Template $_smarty_tpl) {
?><span 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_0_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
" 
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getMessage()) {?> data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getMessage();?>
" <?php }?>
    style="margin-left: 0px; margin-right: 10px; margin-bottom: 5px; background-color: #<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getBackgroundColor();?>
; color: #<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getColor();?>
;" ><?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getTitle();?>

</span> <?php }
}
