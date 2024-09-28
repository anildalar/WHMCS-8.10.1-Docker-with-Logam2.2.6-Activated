<?php
/* Smarty version 3.1.48, created on 2024-09-27 11:49:33
  from '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/pages/custom/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f69bcd0e0594_74965188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d6bf23232afa7a2884fa0bd49725b5853cb85a' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/pages/custom/order.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f69bcd0e0594_74965188 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="lagom-one-step-order">
    <div class="message message-lg message-no-data message-fullscreen" id="one-page-order-init-loader" data-order-loader>
        <div id="lottie">
            <div id="lottie-main-animation"></div>
        </div>
        <span class="message-text message--loading-order">
            <?php echo $_smarty_tpl->tpl_vars['LagomOrderFormLang']->value->absoluteTranslate('loadingOrderTitle');?>

            <span class="message-subtext">
                <?php echo $_smarty_tpl->tpl_vars['LagomOrderFormLang']->value->absoluteTranslate('loadingOrderSubtitle');?>

            </span>
        </span>
    </div>
</div><?php }
}
