<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:41:44
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/cart_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc0f85f6392_27486682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c78a86693da954b1a98a144a90051cc9358eaf4' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/cart_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc0f85f6392_27486682 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-cart-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="main-sidebar main-sidebar-lg order-sidebar" v-if="isVisible">
        <div class="order-sidebar-content"  id="cart-component">
            <div class="panel panel-summary order-summary" :class="[(layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings) ? 'panel-summary-'+layoutSettings.templates.lagom.style_settings.group.sidebar.styles.summary.value : '']">
                <div class="loader" v-if="spinner">
                    <div class="spinner spinner-sm" :class="[
                        { 'spinner-light' : (layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings.group.sidebar.styles.summary.value == 'primary') || (layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings.group.sidebar.styles.summary.value == 'secondary')}
                    ]">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>
                <div class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','ordersummary');?>
</h2>
                </div>
                <div class="panel-body summary-container" v-if="cart.addons.length > 0 || cart.products.length > 0 || cart.domains.length > 0 || renewalsLength > 0">
                    <div class="summary-content content content-scroll">
                                                <div class="summary-list summary-list-main" v-for="(product, index) in cart.products" v-if="!layoutSettings.simplifiedOrderSummary">
                            <div>
                                <div class="list-item list-item-main" >
                                    <span class="item-name" v-html="product.productinfo.groupname + ' - ' + product.productinfo.name"></span>
                                    <span class="item-value" v-if="product.billingcycle == 'free' || (layoutSettings.productsPrices == 'free' && product.pricing.baseprice.numeric == 0)" v-html="`<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','Free');?>
`"></span>
                                    <span class="item-value" v-else v-html="getProductPrice(product)"></span>
                                </div>
                                <div class="product-wrapper" v-if="product.proratadate">
                                    <div class="list-item list-item-main">
                                        <span class="item-name">
                                            (<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','proRata');?>
 <span v-html="product.proratadate"></span>)
                                        </span>
                                        <span class="item-value"></span>
                                    </div>
                                </div>
                                                                <div v-if="product.configoptions" v-if="product.configoptions.length > 0">
                                    <div class="product-wrapper product-wrapper--secondary">
                                        <div class="list-item faded" v-for="conf in product.configoptions" >
                                            <span class="item-name" v-html="conf.name+': <span>'+ conf.optionname+'</span>'"></span>
                                            <span class="item-value" v-if="conf.recurring.numeric == 0" v-html="$store.getters['cartStore/getZeroPrice']('configurableOptionsPrices')"></span>
                                            <span class="item-value" v-else>
                                                <span v-html="getConfigOptionPrice(conf)"></span>
                                                <span v-if="conf.setup.numeric > 0" v-html="'<br> + ' + conf.setup.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'""></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                        <div v-if="cartDomains" v-for="(domain, index) in cartDomains">
                                <div class="list-item list-item-main">
                                    <div class="item-info">
                                        <span class="item-name" v-if="domain.type == 'transfer'">
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','config_type','transfer');?>

                                        </span>
                                        <span class="item-name" v-else-if="domain.type == 'register'">
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','config_type','registration');?>

                                        </span>
                                        <span class="item-name" v-else>
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','config_type','domain');?>

                                        </span>
                                        <span class="item-domain" v-html="domain.domain"></span>
                                    </div>
                                    <span class="item-value" v-if="domain.totaltoday.numeric == 0 && /\d/.test($store.getters['cartStore/getZeroPrice']('domainsPrices'))"  v-html="$store.getters['cartStore/getZeroPrice']('domainsPrices') + domain.friendlyperiod"></span>
                                    <span class="item-value" v-else-if="domain.totaltoday.numeric == 0"  v-html="$store.getters['cartStore/getZeroPrice']('domainsPrices')"></span>
                                    <span class="item-value" v-else v-html="getDomainPrice(domain)"></span>
                                </div>
                                <div class="product-wrapper" v-if="domain.addons">
                                    <div class="list-item" v-for="addon in domain.addons">
                                        <span class="item-name" v-html="addon.name"></span>
                                        <span class="item-value" v-if="addon.pricing.numeric == 0 && /\d/.test(getDomainZeroValue())" v-html="getDomainZeroValue()  + domain.friendlyperiod"></span>
                                        <span class="item-value" v-else-if="addon.pricing.numeric == 0" v-html="getDomainZeroValue()"></span>
                                        <span class="item-value" v-else v-html="addon.pricing.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + domain.friendlyperiod"></span>
                                    </div>
                                </div>
                            </div>
                                                        <div v-if="product.addons.length > 0">
                                <div class="list-item list-item-main">
                                    <span class="item-name">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','group','title','addons');?>

                                    </span>
                                </div>
                                <div class="product-wrapper" v-if="Object.keys(product.addons).length">
                                    <div class="list-item" v-for="addon in product.addons">
                                        <span class="item-name" v-html="addon.name"></span>
                                        <span class="item-value" v-if="addon.billingcycle == 'free'" v-html="`<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','Free');?>
`"></span>
                                        <span class="item-value" v-else v-html="getAddonPrice(addon)"></span>
                                    </div>
                                </div>
                            </div>
                                                        <div class="summary-list summary-list-setup" v-if="product.pricing.setup.numeric > 0">
                                <div class="list-item faded">
                                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','setup_fee');?>
</span>
                                    <span class="item-value" v-html="product.pricing.setup.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list summary-list-domain" v-if="onlyDomains && !layoutSettings.simplifiedOrderSummary" v-for="(domain, index) in cart.domains" :class="[{ 'order-summary-list--domain-last' : index + 1 == cart.domains.length}]">
                                                        <div class="list-item list-item-main">
                                <div class="item-info">
                                    <span class="item-name" v-if="domain.type == 'transfer'">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','config_type','transfer');?>

                                    </span>
                                    <span class="item-name" v-else-if="domain.type == 'register'">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','config_type','registration');?>

                                    </span>
                                    <span class="item-name" v-else>
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','domain','config_type','domain');?>

                                    </span>
                                    <span class="item-domain" v-html="domain.domain"></span>
                                </div>
                                <span class="item-value" v-if="/\d/.test(domain.friendlyprice)" v-html="domain.friendlyprice + domain.friendlyperiod"></span>
                                <span class="item-value" v-else v-html="domain.friendlyprice"></span>
                            </div>
                            <div class="product-wrapper">
                                <div class="list-item" v-for="addon in domain.addons">
                                    <span class="item-name" v-html="addon.name"></span>
                                    <span class="item-value" v-if="addon.pricing.numeric == 0 && /\d/.test(getDomainZeroValue())" v-html="getDomainZeroValue()  + domain.friendlyperiod"></span>
                                    <span class="item-value" v-else-if="addon.pricing.numeric == 0" v-html="getDomainZeroValue()"></span>
                                    <span class="item-value" v-else v-html="addon.pricing.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + domain.friendlyperiod"></span>
                                </div>
                            </div>
                        </div>

                        <div class="summary-list" v-for="(addon, index) in cart.addons" v-if="cart.addons && !layoutSettings.simplifiedOrderSummary">
                            <div class="list-item product-name" >
                                <span class="item-name" v-html="addon.name"></span>
                                <span class="item-value" v-if="addon.recurring.numeric == 0" v-html="$store.getters['cartStore/getZeroPrice']('addonsPrices')"></span>
                                <span class="item-value" v-html="addon.friendlyprice" v-else-if="addon.recurring"></span>
                            </div>
                            <div class="list-item" v-if="addon.setup.prefixed">
                                <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','setup_fee');?>
</span>
                                <span class="item-value" v-html="addon.setup.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                            </div>
                        </div>

                        <div class="summary-list summary-list-renewal" v-if="onlyDomains && !layoutSettings.simplifiedOrderSummary" v-for="(domain, index, position) in cart.renewals" :class="[{ 'order-summary-list--renewal-last' : position + 1 == Object.keys(cart.renewals).length}]">
                                                        <div class="list-item product-name">
                                <span class="item-name" v-html="domain.domain "></span>
                                <span class="item-value" v-html="domain.price.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + domain.friendlyperiod"></span>
                            </div>
                            <div class="item-name"  v-for="(addon, key) in domain.addons" v-if="addon.value">
                                <span class="item-name" v-html="'+ ' + addon.friendlyName"></span>
                            </div>
                        </div>
                                                <div class="summary-list" v-if="cart.gatewayCharge && cart.gatewayCharge.numeric != 0 && !layoutSettings.simplifiedOrderSummary">
                            <div class="list-item" >
                                <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','gatewayCharge');?>
</span>
                                <span class="item-value" v-if="layoutSettings.displayPriceSuffix && currency.suffix" v-html="cart.gatewayCharge.prefixed + ' ' + currency.suffix" ></span>
                                <span class="item-value" v-html="cart.gatewayCharge.prefixed" v-else></span>
                            </div>
                        </div>
                                                <div class="summary-list summary-list-subtotals" v-if="(cart.taxname || cart.taxname2 || cart.promo && promo && cart.promo.isApplied) && cart.subtotal.numeric != undefined">
                            <div class="list-item">
                                <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','ordersubtotalduetoday');?>
</span>
                                <span class="item-value" v-html="currency.prefix + getFormattedPrice(cart.subtotal.numeric) + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                            </div>
                        </div>
                        <div class="summary-list summary-list-taxes" v-if="(cart.taxname || cart.taxname2 || cart.promo && promo && cart.promo.isApplied) && !isButtonBlocked">
                                                        <div class="list-item" v-if="cart.taxname">
                                <span class="item-name" v-html="cart.taxname + ' ('+ cart.taxrate +'%)'"></span>
                                <span class="item-value" v-html="cart.taxtotal.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                            </div>
                                                        <div class="list-item" v-if="cart.taxname2">
                                <span class="item-name" v-html="cart.taxname2 + ' ('+ cart.taxrate2 +'%)'"></span>
                                <span class="item-value" v-html="cart.taxtotal2.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                            </div>
                                                        <div class="list-item " v-if="cart.promo && promo && cart.promo.isApplied">
                                <span class="item-name item-name--savings">
                                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','promo','promoCode');?>

                                    <span v-html="cart.promo.code"></span>
                                </span>
                                <span class="item-value item-value--savings" v-if="cart.promo.discount && currency.suffix" v-html="cart.promo.prefixChar + cart.promo.discount.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                            </div>
                        </div>
                                                <div class="summary-list summary-list-recurring" v-if="cartRecurringPrices">
                            <div>
                                <div class="list-item list-item-title">
                                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','totals');?>
</span>
                                </div>
                                <div class="list-item" v-for="(price, index) in getTotalRecurringPrices()" v-if="price != '' && (cart.products.length || cart.addons.length )">
                                    <span class="item-name" v-html="price.name"></span>
                                    <span class="item-value" v-html="price.data.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                                </div>
                                <div class="list-item" v-else-if="!cart.products.length && !cart.addons.length && cart.domains.length">
                                    <span class="item-name" v-html="Object.values(cart.additionalPriceData.recurringPrices)[0].name"></span>
                                    <span class="item-value" v-html="getRawDomainPrice(cart.domains[0].friendlyprice, cart.domains[0].friendlyperiod)" v-if="layoutSettings.displayPriceSuffix && currency.suffix"></span>
                                    <span class="item-value" v-html="cart.domains[0].friendlyprice" v-else></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div id="summary-sticky" class="order-summary-sticky"></div>
                <div data-fixed-actions class="panel-footer summary-bottom summary-sidebar" :class="{ 'has-divider': cart.addons.length > 0 || cart.products.length > 0 || cart.domains.length > 0 || renewalsLength > 0 }" href="#summary-sticky">
                    <div class="bottom-content container">
                        <div class="price price-left" v-if="cart.addons.length > 0 || cart.products.length > 0 || cart.domains.length > 0 || renewalsLength > 0">
                            <span class="price-total"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','ordertotalduetoday');?>
</span>
                            <span class="price-savings" v-if="promoEnabled && promo.code && !isDiscountCenterOn">
                                <span v-if="layoutSettings.displayPriceSuffix && promo.discount.numeric > 0" v-html="currency.prefix + getCartPrice() + ' ' + currency.suffix" style="color: #F12F75 !important"></span>
                                <span v-else-if="!layoutSettings.displayPriceSuffix && promo.discount.numeric > 0" v-html="currency.prefix + getCartPrice()" style="color: #F12F75 !important"></span>
                            </span>
                            <span v-if="isDiscountCenterOn && cart.original && cart.original.subtotal.numeric != cart.subtotal.numeric" class="price-savings">
                                <span v-html="currency.prefix + getCartOriginalPrice() + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')" style="color: #F12F75 !important"></span>
                            </span>
                            <div class="price-amount">
                                <span id="totalDueToday"  v-if="cart.total != undefined">
                                    <span v-html="cart.total.prefixed + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></span>
                                </span>
                            </div>
                        </div>
                        <div class="summary-no-data" v-else>
                            <i class="lm lm-basket"></i>
                            <span class="summary-no-data__text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','shoppingCartEmpty');?>
</span>
                        </div>
                        <div id="summary-sticky" class="summary-sticky"></div>
                        <div class="summary-actions">
                            <button type="button" class="btn btn-lg btn-submit w-100" id="checkout" v-on:click="confirmOrder()" href="#summary-sticky" :class="[{ 'disabled' : isButtonBlocked}, (layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.style_settings.group.sidebar.styles.summary.value == 'primary') ? 'btn-primary-faded': 'btn-primary']" :disabled="isButtonBlocked">
                                <i class="ls ls-share" v-if="!isOrdering"></i>
                                <span class="btn-text" v-if="!isOrdering"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','orderForm','checkout');?>
</span>
                                <div class="btn-loader" v-if="isOrdering">
                                    <div class="spinner spinner-sm" :class="{ 'spinner-light': isBlockedPage }">
                                        <div class="rect1"></div>
                                        <div class="rect2"></div>
                                        <div class="rect3"></div>
                                        <div class="rect4"></div>
                                        <div class="recst5"></div>
                                    </div>
                                </div>
                            </button>
                            <div class="summary-actions-orderfields mt-4" v-if="showSummaryFooter">
                                <div class="checkbox checkbox-custom" v-if="tosEnabled" :class="{ 'has-error has-checkbox': tosIsValid === false }">
                                    <label>
                                        <input value="on" name="tos" id="tos" v-model="tos"  type="checkbox" class="">
                                        <div class="checkbox-styled"></div>
                                        <span><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','ordertosagreement');?>
 <a :href="tosLink" target="_blank"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','ordertos');?>
</a></span>
                                    </label>
                                    <div id="tosCheckboxAlert" class="alert alert-danger alert-sm" v-if="tosIsValid === false"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','tosIsRequired');?>
</div>
                                </div>
                                <div class="form-flex form-flex--orderfields" v-for="(field, fieldIndex) in orderFields" v-if="layoutSettings.orderFieldsLocation == 'orderSummaryBox' || !layoutSettings.orderFieldsLocation">
                                    <div class="form-group form-group--checkbox" :class="{ 'has-error': isValid(data[field.id]) == false }" v-if="field.type == 'checkbox'">
                                        <label class="checkbox checkbox-custom">
                                            <input type="checkbox" v-model="data[field.id].value" :id="field.id" @change="updateDataValue($event, field.id, $event.target.checked, fieldIndex)">
                                            <div class="checkbox-styled"></div>
                                            <span v-html="field.name"></span>
                                            <span class="control-label-info" v-if="field.required == 'off'" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                                        </label>
                                        <span class="help-block" v-html="field.description" v-if="field.description"></span>
                                        <div class="alert alert-danger alert-sm" v-if="isValid(data[field.id]) == false"
                                            v-html="data[field.id].fieldValidationMessages"></div>
                                    </div>
                                    <div class="form-group" :class="{ 'has-error': isValid(data[field.id]) == false }" v-if="field.type == 'inputText'">
                                        <label class="control-label">
                                            <span v-html="field.name"></span>
                                            <span class="control-label-info" v-if="field.required == 'off'" v-html="'<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','orderForm','optional');?>
'"></span>
                                        </label>
                                        <input class="form-control" type="text" @input="event => updateDataValue(event, field.id, event.target.value, fieldIndex)" :id="field.id" autocomplete="off">
                                        <span class="help-block" v-html="field.description" v-if="field.description"></span>
                                        <div class="alert alert-danger alert-sm" v-if="isValid(data[field.id]) == false"
                                            v-html="data[field.id].fieldValidationMessages"></div>
                                    </div>

                                    <div class="panel-actions dropdown form-group" :class="{ 'has-error': isValid(data[field.id]) == false }" v-if="field.type == 'dropdown'">
                                        <label class="control-label">
                                            <span v-html="field.name"></span>
                                        </label>
                                        <select class="form-control" v-model="data[field.id].value" @change="updateDataValue($event, field.id, $event.target.value, fieldIndex)">
                                            <option v-for="(option, indexOpt) in field.extra" v-html="option" :value="option"></option>
                                        </select>
                                        <span class="help-block" v-html="field.description" v-if="field.description"></span>
                                        <div class="alert alert-danger alert-sm" v-if="isValid(data[field.id]) == false"
                                            v-html="data[field.id].fieldValidationMessages"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-danger alert-sm m-t-16 m-t-2x" id="validationErrorPanel" v-if="showErrorBox"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','billingDetailsErrors');?>
</div>


                        <div class="promocode" v-if="!promoEnabled && isPromoVisible && isPromoCodeInOrderSummary">
                <span class="promocode-btn" v-on:click="enablePromocode()"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','havePromo');?>
</span>
            </div>

            <div class="promocode" v-if="promoEnabled && promo.code && isPromoCodeInOrderSummary">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="" readonly v-bind:value="decodeHtml(promoDescription) + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','promoDiscount');?>
'">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-primary-faded" @click="removePromo"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','promo','remove');?>
</button>
                </span>
                </div>
            </div>
            <div class="promocode"   :class="{ 'has-error': promoAlert == 'error', 'promocode--invalid-code' : promoAlert }" v-else-if="(promoEnabled && !promo.code && isPromoCodeInOrderSummary) || (requestedPromoCode &&  isPromoCodeInOrderSummary)">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','orderPromoCodePlaceholder');?>
" v-model="code" @keyup.enter="addPromo">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-primary-faded" @click="addPromo" ><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','orderpromovalidatebutton');?>
</button>
                    </span>
                </div>
                <div class="alert alert-danger alert-sm promoAlert" v-if="promoAlert && promoCodeErrorMessage" v-html="promoCodeErrorMessage"></div>
                <div class="alert alert-danger alert-sm promoAlert" v-else-if="promoAlert"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','cart','orderPromoCodeNotFound');?>
</div>
            </div>
            <div class="invisible" id="cartTotalAmount" v-html="cart.total.numeric"></div>

        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
