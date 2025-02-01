<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:21
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/completeOrder_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd553c2f67_74483958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93d548e81b30d7189e8b77e0c6ce48474cda822b' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/completeOrder_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778fd553c2f67_74483958 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-complete-order-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
" :component_id="component_id"
        :component_namespace="component_namespace" :component_index="component_index">

    <div class="section" v-if="isVisible">
        <div class="message message-lg message-no-data" v-if="redirectButton && redirectionType === 'gateway'">
            <div class="loader">
                <div class="spinner ">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
            <h2 class="message-text message-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','complete','redirect','description');?>
 </h2>
            <div id="frmPayment">
                <div v-html="redirectButton"></div>
            </div>
        </div>
        <div class="message message-success message-lg message-no-data" v-else>
            <div class="message-icon">
                <i class="lm lm-check"></i>
            </div>
            <h3 class="message-text message-title" v-if="status === 'placed'"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','complete','orderPlaced');?>
 #{{orderId}}</h3>
            <h3 class="message-text message-title" v-if="status === 'completed'"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','complete','orderCompleted');?>
 #{{orderId}}</h3>
            <p class="text-center text-light"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','complete','questionAboutOrder');?>
</p>
            <div>
                <a href="/clientarea.php" class="btn btn-default">
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','complete','goToClientArea');?>

                </a>
                <a :href="'viewinvoice.php?id='+invoiceId" class="btn btn-default" v-if="invoiceId">
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','complete','goToInvoice');?>

                </a>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
