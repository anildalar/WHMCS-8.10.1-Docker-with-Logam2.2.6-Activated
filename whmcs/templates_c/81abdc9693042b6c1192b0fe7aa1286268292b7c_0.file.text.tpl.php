<?php
/* Smarty version 3.1.48, created on 2024-10-02 08:14:59
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/forms/fields/inputGroupElements/text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd0103d3d504_87523215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81abdc9693042b6c1192b0fe7aa1286268292b7c' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/forms/fields/inputGroupElements/text.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd0103d3d504_87523215 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input class="lu-form-control" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getPlaceholder();?>
" name="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getName();?>
"
       value="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getValue();?>
" <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisabled()) {?>disabled="disabled"<?php }?>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_12_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_12_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
<?php }
}
