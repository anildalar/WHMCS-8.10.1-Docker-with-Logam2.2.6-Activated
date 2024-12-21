<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:18:50
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/serverFields_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665dcac5b0f5_98333243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489881f21ee0578689a8c48f2e62aefa863474d2' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/serverFields_components.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67665dcac5b0f5_98333243 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-product-server-fields-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section section--server-fields" v-if="isVisible" :class="[{ 'section--full-width': !showNumber}]">
        <div class="section-number" v-if="showNumber">X</div>
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','serverFields','section','title');?>
</h2>
        </div>
        <div class="section-body">
            <div class="panel panel-form">
                <div class="panel-body">
                    <v-form :schema="serverFields" :data="formData" class="row"></v-form>
                </div>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
