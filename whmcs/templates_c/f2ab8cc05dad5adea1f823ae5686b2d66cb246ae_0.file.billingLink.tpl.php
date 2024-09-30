<?php
/* Smarty version 3.1.48, created on 2024-09-30 11:45:50
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fa8f6e9e16a4_65793871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2ab8cc05dad5adea1f823ae5686b2d66cb246ae' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingLink.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fa8f6e9e16a4_65793871 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-billing-link-field">
    <div class="col-sm-6">
        <div class="form-group" :class="{ 'has-error': isValid() == false }">
            <label :for="field.id" class="control-label">
                <span v-html="field.label"></span> 
                                <span class="control-label-info" v-if="!field.required" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
            </label>
            <input type="text" :name="field.name" :id="field.id" class="form-control" v-model="value" @change="updateDataValue()">
            <span class="help-block" v-html="field.description"></span>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="getValidationMessage()"></div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
