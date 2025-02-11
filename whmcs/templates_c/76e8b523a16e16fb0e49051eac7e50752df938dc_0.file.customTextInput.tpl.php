<?php
/* Smarty version 3.1.48, created on 2025-02-06 05:14:25
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customTextInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a44531096791_70099003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e8b523a16e16fb0e49051eac7e50752df938dc' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customTextInput.tpl',
      1 => 1738818652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a44531096791_70099003 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-custom-field-text-input">
    <div class="col-md-6">
        <div class="form-group" :class="{ 'has-error': isValid() == false }">
            <label class="control-label">
                <span v-html="getTranslatedMessage(field.label)"></span>
                <span class="control-label-info" v-if="!field.required" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                <span class="control-label-info" v-else-if="layoutSettings.customFieldsRequired" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','required');?>
'"></span>
            </label>
            <input class="form-control" type="text" v-model="value" :id="field.id" autocomplete="off" :placeholder="field.placeholder" @change="updateDataValue()">
            <span class="help-block" v-html="getTranslatedMessage(field.description)"></span>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="getValidationMessage()"></div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
