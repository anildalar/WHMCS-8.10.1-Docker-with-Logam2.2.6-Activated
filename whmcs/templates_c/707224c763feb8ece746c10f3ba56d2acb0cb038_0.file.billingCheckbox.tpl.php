<?php
/* Smarty version 3.1.48, created on 2025-02-06 05:14:25
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingCheckbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a44531100769_54973399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '707224c763feb8ece746c10f3ba56d2acb0cb038' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingCheckbox.tpl',
      1 => 1738818652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a44531100769_54973399 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-billing-checkbox-input">
    <div class="col-sm-6">
        <div class="form-group" :class="{ 'has-error has-checkbox': isValid() == false }" :id="field.id+'_section'">
            <label :for="field.id" class="checkbox checkbox-custom">
                <input class="" type="checkbox" :name="field.name" :id="field.id" v-model="value">
                <div class="checkbox-styled"></div>
                <span v-html="field.label"></span>
            </label>
            <span class="help-block" v-html="field.description" v-if="field.description"></span>
            <div class="alert alert-danger alert-sm" v-if="isValid() == false" v-html="getValidationMessage()"></div>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
