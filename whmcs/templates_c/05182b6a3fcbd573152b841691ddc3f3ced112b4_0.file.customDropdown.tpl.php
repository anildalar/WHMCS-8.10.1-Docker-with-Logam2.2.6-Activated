<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customDropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc366357be52_48991557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05182b6a3fcbd573152b841691ddc3f3ced112b4' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customDropdown.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc366357be52_48991557 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-custom-field-dropdown-input">
        <div class="col-md-6">
        <div class="form-group" :class="{ 'has-error': isValid() == false }">
            <label class="control-label">
                <span v-html="getTranslatedMessage(field.label)"></span>
                <span class="control-label-info" v-if="!field.required" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                <span class="control-label-info" v-else-if="layoutSettings.customFieldsRequired" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','required');?>
'"></span>
            </label>
            <select class="form-control" :type="field.type" :name="field.name" :id="field.id" v-model="value" @change="updateDataValue()">
                <option v-for="(value, index) in field.options" :value="index" v-html="getTranslatedMessage(value)"></option>
            </select>
            <span class="help-block" v-html="getTranslatedMessage(field.description)"></span>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="getValidationMessage()"></div>
        </div>
    </div>
    <?php echo '</script'; ?>
><?php }
}
