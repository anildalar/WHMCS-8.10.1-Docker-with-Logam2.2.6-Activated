<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:09
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/baseDataButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d149bca412_01952400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc1ccff507bab6cecf3e991706c3b84d0743442' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/baseDataButton.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d149bca412_01952400 (Smarty_Internal_Template $_smarty_tpl) {
?><mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

        component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
        component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
        component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
        component_data='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getJsonComponentData();?>
'
></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>

<?php }
}
