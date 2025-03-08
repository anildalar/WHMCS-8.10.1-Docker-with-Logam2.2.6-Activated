<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc36635c9a88_24997175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '168beca152b426bb9951b6bc62d340c790425da4' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/billingPassword.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc36635c9a88_24997175 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-billing-password-field">
    <div class="col-sm-6">
        <div class="form-group" :class="[
            { 'has-error' : !isValidField || (!isMatched && password && isValidField) },
            { 'has-success' : isValidField && isMatched && value }
            ]" >
            <label :for="field.id" class="control-label">
                <span v-html="field.label"></span>
            </label>
            <form autocomplete="off">
                <input type="password" :name="field.name" :id="field.id" class="form-control" v-model="value" v-on:forcePassword="forcePassword()">
            </form>
            <div class="alert alert-danger alert-sm" v-if="!isValidField" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('addonCA','order','mainContainer','LagomOrderForm','clientArea','scripts','fieldIsRequired');?>
'"></div>
            <p class="alert alert-danger alert-sm" id="nonMatchingPasswordResult" v-if="!isMatched && password && isValidField"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','billing_details','password','do_not_match');?>
</p>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
