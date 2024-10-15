<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:25
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/buttons/buttonDataTableModalAction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e3142fd07_33484773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ceb9ba7fb07c67802fe4546547e669e2fa9bab' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/buttons/buttonDataTableModalAction.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67036e3142fd07_33484773 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_8_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>title="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>
"<?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>
"<?php }?>
    class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
" <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisableByColumnValue()) {?>:disabled="dataRow.<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getDisableColumnName();?>
 == <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getDisableByColumnValue() === null) {?> null <?php }
if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisableColumnValueString()) {?>'<?php }
echo $_smarty_tpl->tpl_vars['rawObject']->value->getDisableByColumnValue();
if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisableColumnValueString()) {?>'<?php }?>"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }?>
</a>
<?php }
}
