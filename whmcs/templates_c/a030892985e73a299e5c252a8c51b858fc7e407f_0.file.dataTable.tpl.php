<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:42:30
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/dataTable/dataTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc126bd20c9_90052234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a030892985e73a299e5c252a8c51b858fc7e407f' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/dataTable/dataTable.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc126bd20c9_90052234 (Smarty_Internal_Template $_smarty_tpl) {
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
