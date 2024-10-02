<?php
/* Smarty version 3.1.48, created on 2024-10-02 06:59:07
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/fields/switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcef3b383f71_84862485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73bb0a69535e47e21fca07d518e477fa2c2ebbbc' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/fields/switcher.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcef3b383f71_84862485 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
    <label>
        <span class="lu-form-text">
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getDescription()) {?>
                <i data-title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getDescription());?>
" data-toggle="lu-tooltip" class="lu-i-c-2x lu-zmdi lu-zmdi-help-outline lu-form-tooltip-helper"></i>
            <?php }?>
        </span>
        <div class="lu-switch">
                <input type="checkbox" class="lu-switch__checkbox" name="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getValue() === 'on') {?>checked<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isDisabled()) {?>disabled="disabled"<?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_87_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_87_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                <span class="lu-switch__container"><span class="lu-switch__handle"></span></span>
        </div>
    </label>
</div>
<?php }
}
