<div id="lagom-one-step-order" class="checkout-page">
    {if $template != "lagom2"}
    <div class="main-body">{/if}
            {include file="orderforms/$carttpl/common.tpl"}
            <script>
                // Define state tab index value
                var statesTab = 10;
                var stateNotRequired = true;
            </script>
            <script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>
            {if $template != "lagom2"}
                <div class="main-header">
                    <div class="container">
                        <div class="main-header-content">
                            <div class="header-lined">
                                <h1 id="newOrderHeader" class="main-header-title">{$LANG.cartreviewcheckout}</h1>
                            </div>
                            {if (!$loggedin && $hideCurrencySelector == "-") || (!$loggedin && $hideCurrencySelector == "on" && $currencies.lenght > 1) }
                                <div class="main-header-actions">
                                    <div class="dropdown"><a data-toggle="dropdown" href="#" class="btn btn-outline" aria-expanded="true">Currency:<span>{$activeCurrency.code}</span><b class="ls ls-caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            {foreach $currencies as $currency}
                                            <div class="dropdown-menu-item {if $activeCurrency.id == $currency.id }active{/if}"><a role="button" href="cart.php?a=checkout&currency={$currency.id}" class="lu-btn--link">{$currency.code}</a></div>
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                            {/if}
                        </div>
                    </div>
                </div>
            {/if}
            {if $template != "lagom2"}
            <div class="container">{/if}
                <div class="main-grid{if $mainGrid} {$mainGrid}{/if}">
                    <div class="main-content {if $mainContentClasses} {$mainContentClasses}{/if}">
                        {if $cartitems == 0}
                            <div class="message message-no-data">
                                <div class="message-image">
                                    {include file="orderforms/$carttpl/includes/common/svg-icon.tpl" icon="basket"}
                                </div>
                                <h6 class="message-title">{$LANG.cartempty}</h6>
                                <div class="message-action">
                                    <a class="btn btn-primary" href="{$WEB_ROOT}/cart.php">
                                        {$LagomOrderFormLang->absoluteTranslate('start_shopping')}
                                    </a>
                                </div>
                            </div>
                            {if $promoSliderExtension && $promoBannerStatus eq '1'}
                                {include file="$template/core/extensions/PromoBanners/promo-slide.tpl" setting="cart-view" class="m-t-3x"}
                            {/if}
                        {else}
                            {if $promoerrormessage}
                                <div class="alert alert-lagom alert-primary alert-danger" role="alert">
                                    <div class="alert-body">
                                        {$promoerrormessage}
                                    </div>
                                </div>
                            {elseif $errormessage}
                            <div class="alert alert-lagom alert-primary alert-danger" role="alert">
                                <div class="alert-body">
                                    <p>{$LANG.orderForm.correctErrors}:</p>
                                    <ul>
                                        {$errormessage}
                                    </ul>
                                </div>
                            </div>
                            {elseif $promotioncode && $rawdiscount eq "0.00"}
                            <div class="alert alert-lagom alert-primary alert-info" role="alert">
                                <div class="alert-body">
                                    {$LANG.promoappliedbutnodiscount}
                                </div>
                            </div>
                            {elseif $promoaddedsuccess}
                            <div class="alert alert-lagom alert-primary alert-success" role="alert">
                                <div class="alert-body">
                                    {$LANG.orderForm.promotionAccepted}
                                </div>
                            </div>
                            {/if}
                            {if $bundlewarnings}
                            <div class="alert alert-lagom alert-primary alert-warning" role="alert">
                                <div class="alert-body">
                                    <strong>{$LANG.bundlereqsnotmet}</strong><br />
                                    <ul>
                                        {foreach from=$bundlewarnings item=warning}
                                        <li>{$warning}</li>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                            {/if}

                            {include file="orderforms/$carttpl/includes/viewcart/summary-table.tpl"}
                            {* {include file="orderforms/$carttpl/includes/viewcart/choose-currency.tpl"} *}
                            {if $promocodeLocation == "belowViewCart"}
                                {include file="orderforms/$carttpl/includes/viewcart/promo-code.tpl"}
                            {/if}

                            {if $hookOutput}
                                <div class="section">
                                    {foreach $hookOutput as $output}
                                        {$output|replace:'style="margin:20px 0;"':''|replace:'<div class="sub-heading"><span>':'<div class="section-header"><span class="section-title">'|replace:'<div class="sub-heading"><span class="primary-bg-color">':'<div class="section-header"><span class="section-title">'}
                                    {/foreach}
                                </div>
                            {/if}
                            
                            <script>
                                window.langPasswordStrength = "{$LANG.pwstrength}";
                                window.langPasswordWeak = "{$LANG.pwstrengthweak}";
                                window.langPasswordModerate = "{$LANG.pwstrengthmoderate}";
                                window.langPasswordStrong = "{$LANG.pwstrengthstrong}";
                                window.langPasswordTooShort ="{$LagomOrderFormLang->absoluteTranslate('LagomOrderForm','form','field','password','at_least')}";
                            </script>
                            <form method="post" action="{$smarty.server.PHP_SELF}?a=checkout" name="orderfrm" class="billing-details-form" id="frmCheckout">
                                <input type="hidden" name="checkout" value="true" />
                                
                                {foreach from=$personalInformationOrder key=key item=value}
                                    {$orderPersonalInfo[$value] = $key}
                                {/foreach}

                                {foreach from=$billingAddressOrder key=key item=value}
                                    {$orderBillingAdress[$value] = $key}
                                {/foreach}
                                

                                {include file="orderforms/$carttpl/includes/viewcart/form-billing.tpl"}
                                {include file="orderforms/$carttpl/includes/viewcart/form-domain-details.tpl"}
                                {include file="orderforms/$carttpl/includes/viewcart/form-payment-gateway.tpl"}
                                
                                {if (is_array($orderFields) && count($orderFields) != 0) || $accepttos}
                                    <div class="section">
                                        <div class="section-header">
                                            <h2 class="section-title">Order Terms</h2>
                                        </div>
                                        <div class="section-body">
                                            <div class="panel panel-form panel-orderfields">
                                                <div class="panel-body">
                                                    {if $accepttos}
                                                        <div class="checkbox">
                                                            <label class="label-order-field">
                                                                <input class="icheck-control" name="accepttos" type="checkbox"/>
                                                                <span>{$LANG.ordertosagreement} <a href="{$tosurl}" target="_blank">{$LANG.ordertos}</a></span>
                                                            </label>
                                                        </div>
                                                    {/if}
                                                    {if is_array($orderFields) && count($orderFields) != 0}
                                                        {foreach from=$orderFields item=field}
                                                            {if $field.type == 'checkbox'}
                                                                <div class="checkbox">
                                                                    <label class="label-order-field">
                                                                        <input class="icheck-control" type="checkbox" value="true" name="orderField_{$field.id}" />
                                                                        <span class="title">{$field.name}</span>
                                                                        {if $field.required == 'off'}
                                                                            <span class="label-optional">({$LANG.orderForm.optional})</span>
                                                                        {/if}
                                                                    </label>
                                                                    {if $field.description}
                                                                        <span class="description-order-field">{$field.description}</span>
                                                                    {/if}
                                                                </div>
                                                            {/if}
                                                            {if $field.type == 'inputText'}
                                                                <div class="input-text">
                                                                    <label class="label-order-field">
                                                                        <span class="title">{$field.name}</span>
                                                                        {if $field.required == 'off'}
                                                                            <span class="label-optional">({$LANG.orderForm.optional})</span>
                                                                        {/if}
                                                                    </label>
                                                                    <input class="form-control" type="text" id="{$field.id}" autocomplete="off" name="orderField_{$field.id}">
                                                                    {if $field.description}
                                                                        <span class="description-order-field">{$field.description}</span>
                                                                    {/if}
                                                                </div>
                                                            {/if}
                                                            {if $field.type == 'dropdown'}
                                                                <div class="dropdown">
                                                                    <div class="panel-actions dropdown">
                                                                        <label class="label-order-field">
                                                                            <span class="title">{$field.name}</span>
                                                                        </label>
                                                                        <select class="form-control" name="orderField_{$field.id}">
                                                                            {foreach from=$field.extra item=option}
                                                                                <option value="{$option}">{$option}</option>
                                                                            {/foreach}
                                                                        </select>
                                                                        {if $field.description}
                                                                            <span class="description-order-field">{$field.description}</span>
                                                                        {/if}
                                                                    </div>
                                                                </div>
                                                            {/if}
                                                        {/foreach}
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/if}
                                {if $showMarketingEmailOptIn}
                                    <div class="section{if isset($RSThemes['pages'][$templatefile]) && isset($RSThemes['pages'][$templatefile]['config']['hideJoinToMailingList']) && $RSThemes['pages'][$templatefile] && $RSThemes['pages'][$templatefile]['config']['hideJoinToMailingList'] == "1"} hidden{/if}"> <div class="section-header">
                                        <h2 class="section-title">
                                        {lang key='emailMarketing.joinOurMailingList'}</h2>
                                        <p class="section-desc">{$marketingEmailOptInMessage}</p>
                                    </div>
                                    <div class="section-body">
                                        <div
                                            class="panel panel-switch m-w-288{if $marketingEmailOptIn} checked{/if}">
                                            <div class="panel-body">
                                                <span class="switch-label">{$LagomOrderFormLang->absoluteTranslate('receive_emails')}</span>
                                                <label class="switch switch--lg switch--text">
                                                    <input class="switch__checkbox" type="checkbox" name="marketingoptin" value="1" {if $marketingEmailOptIn} checked{/if}>
                                                        <span class="switch__container">
                                                            <span class="switch__handle"></span>
                                                        </span>
                                                </label>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>
                                {/if}
                                {if $captcha}
                                    {include file="templates/orderforms/$carttpl/includes/captcha.tpl"}
                                {/if}
                                {if file_exists("templates/orderforms/$carttpl/includes/viewcart/custom-tos-hidden.tpl")}
                                    {include file="templates/orderforms/$carttpl/includes/viewcart/custom-tos-hidden.tpl"}
                                {/if}
                                <button type="submit" id="submit-checkout" class="hidden btn btn-primary btn-lg {if $captcha}{$captcha->getButtonClass($captchaForm)}{/if}">
                                    {$LANG.completeorder}
                                </button>
                                <button type="submit" id="btnCompleteOrder" class="hidden btn btn-primary btn-lg disable-on-click spinner-on-click{if $captcha}{$captcha->getButtonClass($captchaForm)}{/if}"
                                    {if $cartitems==0}disabled="disabled" {/if}> {if $inExpressCheckout}{$LANG.confirmAndPay} {else} {$LANG.completeorder}{/if} &nbsp;<i class="fas fa-arrow-circle-right"></i>
                                </button>
                            </form>
                            <script type="text/javascript" src="{$BASE_PATH_JS}/jquery.payment.js"></script>
                            <script>
                                var hideCvcOnCheckoutForExistingCard =
                                    '{if $canUseCreditOnCheckout && $applyCredit && ($creditBalance->toNumeric() >= $total->toNumeric())}1{else}0{/if}';
                            </script>
                        {/if}
                        {if $promocodeLocation == "endOfViewPage"}
                            {include file="orderforms/$carttpl/includes/viewcart/promo-code.tpl"}
                        {/if}
                        {if $servedOverSsl}
                            {if $hideIpAddressBox == "off"}
                                <div class="section">
                                    <div class="section-body">
                                        <div class="alert alert-warning checkout-security-msg">
                                            <div class="alert-body">
                                                <i class="ls ls-lock"></i>
                                                {$LANG.ordersecure} (<strong>{$ipaddress}</strong>) {$LANG.ordersecure2}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                        {/if}
                    </div>
                    <div class="main-sidebar main-sidebar-lg">
                        <div class="sidebar-sticky sidebar-sticky-summary" {if
                            $RSThemes.addonSettings.show_affixed_navigation=='enabled' }data-sidebar-sticky{/if}> <div
                            class="panel panel-summary panel-summary-{$summaryStyle} order-summary" id="orderSummary">
                            <div class="loader" id="orderSummaryLoader" style="display: none;">
                                {if $summaryStyle == 'default'}
                                {include file="orderforms/$carttpl/includes/common/loader.tpl" classes="spinner-sm"}
                                {else}
                                {include file="orderforms/$carttpl/includes/common/loader.tpl" classes="spinner-sm
                                spinner-light"}
                                {/if}
                            </div>
                            <div class="panel-heading">
                                <h2 class="panel-title">{$LANG.ordersummary}</h2>
                            </div>
                            {include file="orderforms/$carttpl/ordersummary-checkout.tpl"}
                        </div>
                        {if $promocodeLocation == "orderSummary"}
                            {include file="orderforms/$carttpl/includes/viewcart/promo-code.tpl"}
                        {/if}
                    </div>
                </div>
            {if $template != "lagom2"}
            </div>
            {/if}
        <div class="order-summary order-summary-mob is-fixed" id="orderSummary" data-fixed-actions href="#orderSummary">
            <button type="button" class="btn btn-lg btn-primary-faded btn-checkout{if $cartitems == 0} disabled{/if}"
                {if $cartitems==0} disabled{/if} data-btn-loader id="checkout">
                <span><i class="ls ls-share"></i>{$LANG.orderForm.checkout}</span>
                <div class="loader loader-button hidden">
                    {include file="orderforms/$carttpl/includes/common/loader.tpl" classes="spinner-sm"}
                </div>
            </button>
        </div>
        {* modals *}
        {include file="orderforms/$carttpl/includes/viewcart/modal/empty-cart.tpl"}
        {include file="orderforms/$carttpl/includes/viewcart/modal/remove-item.tpl"}
        {include file="orderforms/$carttpl/includes/viewcart/modal/remove-addon.tpl"}
        {include file="orderforms/$carttpl/includes/viewcart/modal/estimate-taxes.tpl"}
        {include file="orderforms/$carttpl/includes/recommendations-modal.tpl"}

        {if $template != "lagom2"}
            <script type="text/javascript" src="{$WEB_ROOT}/templates/orderforms/{$carttpl}/js/order-app-min.js"></script>
        {/if}
        <script>
            let assetsUrl = '{$WEB_ROOT}/templates/orderforms/{$carttpl}/assets/svg-illustrations/products/',
                activeStyle = '{$RSThemes.styles.iconType}',
                styleUrl = "";

            {literal}
                var hashtable = {};

                hashtable['<img src="/assets/img/marketconnect/icons/codeguard.png">'] = 'codeguard';
                hashtable['<img src="/assets/img/marketconnect/icons/sitelock.png">'] = 'sitelock';
                hashtable['<img src="/assets/img/marketconnect/icons/spamexperts.png">'] = 'spamexperts';
                hashtable['<img src="/assets/img/marketconnect/icons/symantec.png">'] = 'symantec';
                hashtable['<img src="/assets/img/marketconnect/icons/weebly.png">'] = 'weebly';

                hashtable['<img src="/assets/img/marketconnect/codeguard/'] = 'codeguard';
                hashtable['<img src="/assets/img/marketconnect/marketgoo/'] = 'marketgoo';
                hashtable['<img src="/assets/img/marketconnect/ox/'] = 'ox';
                hashtable['<img src="/assets/img/marketconnect/sitebuilder/'] = 'sitebuilder';
                hashtable['<img src="/assets/img/marketconnect/sitelock/'] = 'sitelock';
                hashtable['<img src="/assets/img/marketconnect/sitelockvpn/'] = 'sitelockvpn';
                hashtable['<img src="/assets/img/marketconnect/spamexperts/'] = 'spamexperts';
                hashtable['<img src="/assets/img/marketconnect/symantec/'] = 'symantec';
                hashtable['<img src="/assets/img/marketconnect/weebly/'] = 'weebly';
                hashtable['<img src="/assets/img/marketconnect/cpanelseo/'] = 'cpanelseo';
                hashtable['<img src="/assets/img/marketconnect/nordvpn/'] = 'nordvpn';
                hashtable['<img src="/assets/img/marketconnect/threesixtymonitoring/'] = 'threesixtymonitoring';
                hashtable['<img src="/assets/img/marketconnect/xovinow/'] = 'xovinow';

                function changeLogos() {
                    $('.mc-promo-icon').each(function (index) {
                        var banner = $(this);
                        $.each(hashtable, function (index, value) {

                            if (banner.html().includes(index)) {
                                if (activeStyle == "modern") {
                                    styleUrl = "modern/"
                                } else {
                                    styleUrl = ""
                                }
                                banner.html(banner.html().replace(index, ''));
                                banner.load(assetsUrl + styleUrl + value + '.tpl').removeClass('hidden');
                            }
                        });
                    });
                };
                $(document).ready(function () {
                    changeLogos();
                });
            {/literal} 
        </script>
    {if $template != "lagom2"}
    </div>
    {/if}
    </div>
</div>