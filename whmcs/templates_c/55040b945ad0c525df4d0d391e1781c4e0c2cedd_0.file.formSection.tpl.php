<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:18:56
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/sections/formSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666be06172e5_01269051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55040b945ad0c525df4d0d391e1781c4e0c2cedd' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/sections/formSection.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67666be06172e5_01269051 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-form-field">
    <div class="VueForm">
        <template v-for="field in schema.fields">
            <component :is="field.type" :key="field.id" :field="field" :data.sync="data"></component>
        </template>
    </div>
<?php echo '</script'; ?>
><?php }
}
