<?php
/* Smarty version 3.1.48, created on 2025-03-08 12:21:55
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/promoCodeInfo_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67cc36637480f7_68216036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca697a146cf2f3c5c356a3012db27ab27bc0357f' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/promoCodeInfo_components.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cc36637480f7_68216036 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-promo-code-info-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="promocode promocode--not-applied" v-if="cart.promo && !cart.promo.isApplied">
        <div class="alert alert-info" role="alert">
            <div class="alert-body">
                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','promo','notApplied');?>

            </div>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
