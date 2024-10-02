<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:42:36
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/buttons/buttonSubmitForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc12cabdad5_20783333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309a68ec339f4b46fbef7d160b4628836e8b6bab' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/buttons/buttonSubmitForm.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc12cabdad5_20783333 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_6_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
</a>
<?php }
}
