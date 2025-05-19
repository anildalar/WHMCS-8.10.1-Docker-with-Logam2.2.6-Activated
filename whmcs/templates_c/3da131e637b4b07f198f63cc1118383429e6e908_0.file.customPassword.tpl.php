<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:10:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f773af3fbf57_07353162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3da131e637b4b07f198f63cc1118383429e6e908' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/customPassword.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f773af3fbf57_07353162 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-custom-field-password-input">
    <div class="col-md-6">
        <div class="form-group" :class="{ 'has-error': isValid() == false }">
            <label class="control-label">
                <span v-html="getTranslatedMessage(field.label)"></span>
                <span class="control-label-info" v-if="!field.required" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                <span class="control-label-info" v-else-if="layoutSettings.customFieldsRequired" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','required');?>
'"></span>
            </label>
            <input class="form-control" type="password" autocomplete="off" v-model="value" :placeholder="field.placeholder" :id="field.id" @change="updateDataValue()">
            <span class="help-block" v-html="getTranslatedMessage(field.description)"></span>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="getValidationMessage()"></div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
