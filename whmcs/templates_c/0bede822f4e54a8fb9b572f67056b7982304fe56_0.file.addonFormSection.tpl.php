<?php
/* Smarty version 3.1.48, created on 2025-02-06 05:14:25
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/sections/addonFormSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a44531081af4_46926479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bede822f4e54a8fb9b572f67056b7982304fe56' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/sections/addonFormSection.tpl',
      1 => 1738818652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a44531081af4_46926479 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-addon-section-field">
    <div class="row row-eq-height row--addons">
        <template v-for="field in field.fields">
            <component :is="field.type" :field="field" :data.sync="data" :key="field.id"></component>
        </template>
    </div>
<?php echo '</script'; ?>
><?php }
}
