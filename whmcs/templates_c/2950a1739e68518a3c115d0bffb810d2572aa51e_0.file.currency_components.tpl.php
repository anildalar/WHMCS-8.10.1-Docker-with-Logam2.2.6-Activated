<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:18:56
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/currency_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666be06e9d31_30132170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2950a1739e68518a3c115d0bffb810d2572aa51e' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/currency_components.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67666be06e9d31_30132170 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-currency-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="main-header-actions" v-if="isVisible">
        <div class="dropdown">
            <a class="btn btn-outline" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','choosecurrency');?>
: <span v-html="selectedCurrency.code"></span><b class="ls ls-caret"></b></a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-menu-item" :class="{ active: currency.id === selectedCurrency.id}" v-for="currency in currencies" v-on:click="changeCurrency(currency.id, true)"><a class="lu-btn--link" role="button" v-html="currency.code"></a></div>
            </div>
            <div class="package-popover popover popover-confirmation popover-currency bottom fade in" v-if="popoverIsVisible">
                <div class="arrow"></div>
                <div class="popover-title">
                    <i class="ls ls-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','note');?>

                </div>
                <div class="popover-content">
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','currency_change_popover');?>

                </div>
                <div class="popover-actions">
                    <button class="btn btn-xs btn-primary-faded" v-on:click="changeCurrency(currencyToPopover, false)"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','confirm');?>
</button>
                    <button class="btn btn-xs btn-default" v-on:click="hidePopover()"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cancel');?>
</button>
                    <label class="checkbox checkbox-custom checkbox-sm">
                        <input type="checkbox" name="popoverNotShowAgain" class="" v-model="popoverNotShowAgain">
                        <span class="checkbox-styled"></span>
                        <div class="check-content"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','doNotShowAgain');?>
</div>
                    </label>
                </div>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
