<?php
/* Smarty version 3.1.48, created on 2024-10-02 08:14:59
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/forms/sections/inputGroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd0103d2f0b3_49548898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf4a0a612f6cfc9383ff0d7cd8c0128ed40c581' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/forms/sections/inputGroup.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd0103d2f0b3_49548898 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="lu-input-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getFields(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml();?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <div class="lu-form-feedback lu-form-feedback--icon" hidden="hidden">
    </div>
</div>
<?php }
}
