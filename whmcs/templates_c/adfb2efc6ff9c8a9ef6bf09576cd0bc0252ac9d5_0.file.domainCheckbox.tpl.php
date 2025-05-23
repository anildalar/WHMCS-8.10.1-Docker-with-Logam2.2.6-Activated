<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:10:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/domainCheckbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f773af420297_04935873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfb2efc6ff9c8a9ef6bf09576cd0bc0252ac9d5' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/domainCheckbox.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f773af420297_04935873 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-domain-checkbox-field">
    <div class="form-group" :id="field.id" :class="{ 'has-error': isValid() == false }">
        <label v-html="getTranslatedMessage(field.displayName)"></label>
        <div class="form-group__wrapper">
            <label class="checkbox checkbox-custom">
                <input type="checkbox" class="icheck-control" v-model="value" @change="change" :id="field.id">
                <div class="checkbox-styled"></div>
                <div v-html="getTranslatedMessage(field.description)"></div>
            </label>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="getValidationMessage()"></div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
