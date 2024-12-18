<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:12
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/buttons/buttonRedirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6d465abe4_10999966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b85a9e85954d546d0f46e054c458da616f2a52e' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/buttons/buttonRedirect.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6d465abe4_10999966 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_9_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>title="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>
"<?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>
"<?php }?>
    class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isShowTitle()) {?> <span class="lu-btn__text"><?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?></span><?php }?>
</a><?php }
}
