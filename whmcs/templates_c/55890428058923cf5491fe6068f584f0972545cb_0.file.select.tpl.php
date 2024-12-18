<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:59:00
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/fields/select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f70410f097_93855574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55890428058923cf5491fe6068f584f0972545cb' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/fields/select.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f70410f097_93855574 (Smarty_Internal_Template $_smarty_tpl) {
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

    <select 
        class="lu-form-control"
        name="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getName();?>
"
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisabled()) {?>disabled="disabled"<?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_11_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isMultiple()) {?>data-options="removeButton:true; resotreOnBackspace:true; dragAndDrop:true; maxItems: null;" multiple="multiple"<?php }?>
    >
        <?php if (is_array($_smarty_tpl->tpl_vars['rawObject']->value->getValue())) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getAvailableValues(), 'option', false, 'opValue');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opValue']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['opValue']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['opValue']->value,$_smarty_tpl->tpl_vars['rawObject']->value->getValue())) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getAvailableValues(), 'option', false, 'opValue');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opValue']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['opValue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['opValue']->value == $_smarty_tpl->tpl_vars['rawObject']->value->getValue()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
    <div class="lu-form-feedback lu-form-feedback--icon" hidden="hidden">
    </div>    
</div>
<?php }
}
