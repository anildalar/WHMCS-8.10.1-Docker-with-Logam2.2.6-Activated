<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:10:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/domainDropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f773af422570_60635394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee88ff5c82e62426841bc0f482ba6e4f48d95b4b' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/domainDropdown.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f773af422570_60635394 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-domain-dropdown-field">
    <div class="form-group" >
        <label v-html="getTranslatedMessage(field.displayName)"></label>
        <select class="form-control" v-model="value" @change="change">
            <option v-for="option in field.options" :value="option.id" v-html="getTranslatedMessage(option.name)"></option>
        </select>
    </div>
<?php echo '</script'; ?>
><?php }
}
