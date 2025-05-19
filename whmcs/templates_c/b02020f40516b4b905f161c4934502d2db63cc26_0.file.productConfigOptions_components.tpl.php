<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:10:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/productConfigOptions_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f773af491051_48510041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02020f40516b4b905f161c4934502d2db63cc26' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/productConfigOptions_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f773af491051_48510041 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-product-conf-opt-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section" :class="[{ 'section--full-width': !showNumber}]" v-if="isVisible">
        <div class="section-body">
            <v-form class="section-config-options" :schema="configurableOptions" :data="formData" v-bind:cycle="billingCycle"></v-form>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
