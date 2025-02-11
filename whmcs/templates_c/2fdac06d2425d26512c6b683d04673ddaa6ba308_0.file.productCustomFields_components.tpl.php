<?php
/* Smarty version 3.1.48, created on 2025-02-06 05:14:25
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/productCustomFields_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a44531193805_81267106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fdac06d2425d26512c6b683d04673ddaa6ba308' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/productCustomFields_components.tpl',
      1 => 1738818652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a44531193805_81267106 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-product-custom-fields-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section section--custom-fields" :class="[{ 'section--full-width': !showNumber}]" v-if="isVisible">
        <div class="section-number" v-if="showNumber">X</div>
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','customFields','section','title');?>
</h2>
        </div>
        <div class="section-body">
            <div class="panel panel-form panel--billing">
                <div class="panel-body">
                    <form autocomplete="off">
                        <v-form :schema="customFields" :data="formData" v-bind:cycle="billingCycle" class="row row-eq-height row--addons"></v-form>
                    </form>
                </div>
            </div>   
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
