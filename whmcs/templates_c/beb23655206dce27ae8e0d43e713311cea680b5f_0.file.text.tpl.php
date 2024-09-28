<?php
/* Smarty version 3.1.48, created on 2024-09-28 02:07:12
  from '/var/www/html/modules/addons/AdvancedBilling/templates/admin/formFields/text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f764d00c7f85_87029159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb23655206dce27ae8e0d43e713311cea680b5f' => 
    array (
      0 => '/var/www/html/modules/addons/AdvancedBilling/templates/admin/formFields/text.tpl',
      1 => 1697014410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f764d00c7f85_87029159 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" <?php if ($_smarty_tpl->tpl_vars['style']->value['display']) {?>style="display:<?php echo $_smarty_tpl->tpl_vars['style']->value['display'];?>
;"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['label']->value) {?>
        <label for="<?php echo $_smarty_tpl->tpl_vars['formName']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="control-label col-lg-3 col-md-3 col-xs-12"><?php if ($_smarty_tpl->tpl_vars['labelNoLang']->value) {
echo $_smarty_tpl->tpl_vars['label']->value;
} else {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['label']->value);
}?></label>
    <?php }?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['style']->value['colWidth']) {?>col-sm-<?php echo $_smarty_tpl->tpl_vars['style']->value['colWidth'];
}?> <?php echo $_smarty_tpl->tpl_vars['style']->value['additionalClass'];?>
" style="margin-bottom: 5px;">
        <input name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"  class="form-control" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> placeholder="<?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['placeholder']->value);
}?>" style="width:15%;<?php if ($_smarty_tpl->tpl_vars['style']->value['custom']) {
echo $_smarty_tpl->tpl_vars['style']->value['custom'];
}?>" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'dataValue', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataValue']->value) {
$_smarty_tpl->tpl_vars['dataValue']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataValue']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
        <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
            <span class="help-inline"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['description']->value);?>
</span>
        <?php }?>
        </div>
</div><?php }
}
