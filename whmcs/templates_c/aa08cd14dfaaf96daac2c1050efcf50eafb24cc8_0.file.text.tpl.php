<?php
/* Smarty version 3.1.48, created on 2025-01-03 11:59:47
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/fields/text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d133c68813_75642260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa08cd14dfaaf96daac2c1050efcf50eafb24cc8' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/fields/text.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d133c68813_75642260 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-form-group">
    <label class="lu-form-label">
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getDescription()) {?>
            <i data-title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getDescription());?>
" data-toggle="lu-tooltip" class="lu-i-c-2x lu-zmdi lu-zmdi-help-outline lu-form-tooltip-helper"></i>
        <?php }?>
    </label>
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
$__foreach_aValue_7_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
    <div class="lu-form-feedback lu-form-feedback--icon" hidden="hidden">
    </div>    
</div>
<?php }
}
