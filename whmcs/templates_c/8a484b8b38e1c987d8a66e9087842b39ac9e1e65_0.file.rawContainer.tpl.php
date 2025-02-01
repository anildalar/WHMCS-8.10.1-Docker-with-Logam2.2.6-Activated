<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:09
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/pages/rawContainer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d149b91041_20987861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a484b8b38e1c987d8a66e9087842b39ac9e1e65' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/pages/rawContainer.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d149b91041_20987861 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getFieldComponents(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml();?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
