<?php
/* Smarty version 3.1.48, created on 2024-12-18 08:53:16
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/sections/billingField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67628d7c5679c4_50639151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad381dc300d255625277c3308ab58c0e826d680f' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/sections/billingField.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67628d7c5679c4_50639151 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-billing-section-field">
    <div v-if="field.fields">
        <h6 class="m-t-16 m-t-2x" v-if="field.label" v-html="field.label"></h6>
        <div class="row row-sm">
            <template v-for="(field, index) in field.fields">
                <component :is="field.fieldType" :key="field.id" :field="field" :data.sync="data"></component>
            </template>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
