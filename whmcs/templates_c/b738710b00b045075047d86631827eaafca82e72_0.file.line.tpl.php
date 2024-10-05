<?php
/* Smarty version 3.1.48, created on 2024-10-03 10:15:30
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/graphs/line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fe6ec29e6716_42762282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b738710b00b045075047d86631827eaafca82e72' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/graphs/line.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fe6ec29e6716_42762282 (Smarty_Internal_Template $_smarty_tpl) {
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
            settings_key='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getGraphSettingsKey();?>
'
        ></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>
    </div>
</div>
<?php }
}
