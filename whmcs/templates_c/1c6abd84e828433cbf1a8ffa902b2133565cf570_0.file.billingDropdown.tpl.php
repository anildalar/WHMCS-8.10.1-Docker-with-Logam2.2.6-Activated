<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingDropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc36635d7069_29330942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c6abd84e828433cbf1a8ffa902b2133565cf570' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingDropdown.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc36635d7069_29330942 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-billing-dropdown-field">
    <div class="col-sm-6">
        <div class="form-group" :class="{ 'has-error': isValid() == false }">
            <label :for="field.id" class="control-label">
                <span v-html="field.label"></span>
                <span class="control-label-info" v-if="!field.required" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                            </label>
            <select class="form-control" :type="field.type" :name="field.name" :id="field.id" v-model="value" @change="updateDataValue()">
                <option v-for="(value, index) in field.options" :value="index" v-html="value"></option>
            </select>
            <span class="help-block" v-html="field.description"></span>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
