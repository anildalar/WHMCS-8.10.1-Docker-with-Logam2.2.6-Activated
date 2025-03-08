<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc36635b4935_86742502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03fabaee67fb51487fb2f03cc37d59d1672800cd' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customLink.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc36635b4935_86742502 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-custom-field-link-input">
        <div class="col-md-6">
        <div class="form-group" :class="{ 'has-error': isValid() == false }">
            <label class="control-label">
                <span v-html="getTranslatedMessage(field.label)"></span>
                <span class="control-label-info" v-if="!field.required" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                <span class="control-label-info" v-else-if="layoutSettings.customFieldsRequired" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','required');?>
'"></span>
            </label>
            <input class="form-control" type="text" v-model="value" :placeholder="field.placeholder" :id="field.id" @change="updateDataValue()">
            <span class="help-block" v-html="getTranslatedMessage(field.description)"></span>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="getValidationMessage()"></div>
        </div>
    </div>
    <?php echo '</script'; ?>
><?php }
}
