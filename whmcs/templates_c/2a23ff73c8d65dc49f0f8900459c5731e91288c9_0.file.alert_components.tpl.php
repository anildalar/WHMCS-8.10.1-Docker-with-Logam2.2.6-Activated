<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:10:39
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/alert_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f773af459dc0_35262829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a23ff73c8d65dc49f0f8900459c5731e91288c9' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/alert_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f773af459dc0_35262829 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-alert-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div id="pageOrderAlert" v-if="isVisible">
        <div class="alert alert-danger">
            <div class="alert-body" v-html="decodeHtml(message)">
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
