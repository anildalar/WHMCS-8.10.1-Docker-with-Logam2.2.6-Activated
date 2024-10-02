<?php
/* Smarty version 3.1.48, created on 2024-10-02 06:59:07
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Configuration/Templates/fields/customSelect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcef3b3166a3_56514198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e76cce457f77be4ad6894291a8fe15d21d5395ca' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Configuration/Templates/fields/customSelect.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcef3b3166a3_56514198 (Smarty_Internal_Template $_smarty_tpl) {
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
" data-toggle="lu-tooltip" class="lu-i-c-2x lu-zmdi lu-zmdi-help-outline lu-form-tooltip-helper lu-tooltip drop-target drop-element-attached-bottom drop-element-attached-center drop-target-attached-top drop-target-attached-center"></i>
        <?php }?>
    </label>
    <select class="lu-form-control"  name="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisabled()) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isMultiple()) {?>data-options="removeButton:true; resotreOnBackspace:true; dragAndDrop:true; maxItems: null;" multiple="multiple"<?php }?>>
        <?php if (is_array($_smarty_tpl->tpl_vars['rawObject']->value->getValue())) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getAvailableValues(), 'option', false, 'opValue');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opValue']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['opValue']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['opValue']->value,$_smarty_tpl->tpl_vars['rawObject']->value->getValue())) {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

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
" <?php if ($_smarty_tpl->tpl_vars['opValue']->value === $_smarty_tpl->tpl_vars['rawObject']->value->getValue()) {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

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
