<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:22
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/fields/tileRadioField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6de9eac05_46009630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28f6e3f0fa3fb0532d7888cf6967851f64fa3d67' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/fields/tileRadioField.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6de9eac05_46009630 (Smarty_Internal_Template $_smarty_tpl) {
?><mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

        component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
        component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
        component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
        form_name='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getFormName();?>
'
        form_data='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getFormDetails();?>
'
></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
><?php }
}
