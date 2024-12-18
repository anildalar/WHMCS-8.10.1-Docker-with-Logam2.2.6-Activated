<?php
/* Smarty version 3.1.48, created on 2024-12-18 08:53:16
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/passwordInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67628d7c529599_49628654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e81f0dee8143913c3576c0d5840f2f71034b36c' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/passwordInput.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67628d7c529599_49628654 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-password-input-field">
    <div class="panel" v-if="visible">
        <div class="panel-body">
            <h4 class="panel-title" v-html="details.optionname"></h4>
            <div class="form-group m-b-0">
                <input class="form-control" type="password" v-model="data.value" :placeholder="details.placeholder">
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
