<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:22
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/tileStandaloneButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6de996331_19127675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd07c629ee86c2700760edfa0e7cf90f949e28e10' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/tileStandaloneButton.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6de996331_19127675 (Smarty_Internal_Template $_smarty_tpl) {
?><mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

        component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
        component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
        component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
        img="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getImage();?>
"
        title="<?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle()) {?> <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>
 <?php }?>"
></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>

<?php }
}
