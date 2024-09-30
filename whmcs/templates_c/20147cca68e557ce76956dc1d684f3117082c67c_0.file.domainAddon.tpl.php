<?php
/* Smarty version 3.1.48, created on 2024-09-30 11:45:50
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/domainAddon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fa8f6ea23a88_58009735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20147cca68e557ce76956dc1d684f3117082c67c' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/domainAddon.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fa8f6ea23a88_58009735 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-domain-addon-field">
    <div class="col-lg-4">
        <div class="panel panel-addon" :class="{ checked: (selected && !loader)}">
            <div class="panel-body">
                <h4 class="panel-title" v-html="field.name"></h4>
                <p class="panel-desc" v-html="field.description"></p>
                <div class="panel-actions" :class="{ 'panel-actions-suffix' : layoutSettings.displayPriceSuffix && currency.suffix}">
                    <button class="btn btn-sm btn-primary-faded has-loader" @click="addAddon()" v-if="!selected || loader">
                        <span :class="{ invisible: loader}"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','order','addon','add');?>
</span>
                        <div class="btn-loader">
                            <div class="spinner spinner-sm" v-if="loader">
                                <div class="rect1"></div>
                                <div class="rect2"></div>
                                <div class="rect3"></div>
                                <div class="rect4"></div>
                                <div class="rect5"></div>
                            </div>
                        </div>
                    </button>
                    <div class="btn-group" v-if="selected && !loader">
                        <button class="btn btn-sm btn-primary no-hover"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','order','addon','added');?>
</button>
                        <button type="button" class="btn btn-sm btn-primary btn-icon" @click="removeAddon()"><i class="ls ls-close"></i></button>
                    </div>
                    <div class="panel-actions-price">
                        <span class="price price-row">
                            <span class="price-value" v-if="field.pricing.numeric == 0" v-html="$store.getters['cartStore/getZeroPrice']('domainsPrices')"></span>
                            <span class="price-value" v-else v-html="field.prefixed_price + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                            <span class="price-cycle" v-if="field.pricing.numeric > 0 || /\d/.test($store.getters['cartStore/getZeroPrice']('domainsPrices'))" v-html="field.period_string"></span>
                        </span>
                    </div>
                </div>
            </div>
            <span class="check-sign"><i class="ls ls-check"></i></span>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
