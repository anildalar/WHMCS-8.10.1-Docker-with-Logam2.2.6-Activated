<?php
/* Smarty version 3.1.48, created on 2025-03-04 11:41:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/sections/tileRadioButtonSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6e6f3c5cca0_14139300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a9de356c87a5c5aaf9cbe36b1ea53ef81da8b30' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/sections/tileRadioButtonSection.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c6e6f3c5cca0_14139300 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-widget__content">
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isShowTitle()) {?> <h5> <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?></h5> <?php }?>
    <mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

            component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
            component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
            component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
            tile_buttons_encoded='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getTileButtonComponentsArray(true);?>
'
            name='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getName();?>
'
            active_value='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getValue();?>
'
    ></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>
    <div class="lu-form-feedback lu-form-feedback--icon" hidden="hidden">
    </div>
</div><?php }
}
