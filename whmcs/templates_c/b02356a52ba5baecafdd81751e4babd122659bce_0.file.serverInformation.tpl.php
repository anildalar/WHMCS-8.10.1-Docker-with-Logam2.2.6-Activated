<?php
/* Smarty version 3.1.48, created on 2024-10-04 06:19:49
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Product/Templates/pages/serverInformation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ff89055b8a07_23465015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02356a52ba5baecafdd81751e4babd122659bce' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Product/Templates/pages/serverInformation.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ff89055b8a07_23465015 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-row">
    <div class="lu-col-md-12"  id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
">
        <mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

                component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
                component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
                component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
                autoload_data_after_created='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->isAutoloadDataAfterCreated();?>
'
                start_length='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getTableLength();?>
'
        ></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>
    </div>
</div>
<?php }
}
