<?php
/* Smarty version 3.1.48, created on 2024-09-24 07:24:07
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/loader_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f269178b4e58_55400716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '675031caac310a9765eb0af9bd76cabb2aae11cb' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/loader_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f269178b4e58_55400716 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-loader-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="message message-lg message-no-data message-fullscreen hidden" v-if="isVisible" id="one-page-order-init-loader" data-order-loader> 
            </div>
<?php echo '</script'; ?>
><?php }
}
