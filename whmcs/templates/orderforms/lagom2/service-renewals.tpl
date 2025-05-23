{if isset($RSThemes['pages'][$templatefile]) && file_exists($RSThemes['pages'][$templatefile]['fullPath'])}
    {include file=$RSThemes['pages'][$templatefile]['fullPath']}
{else}   
    {include file="orderforms/$carttpl/common.tpl"}
    <div class="main-grid{if $mainGrid} {$mainGrid}{/if}">
        {if $RSThemes['pages'][$templatefile]['config']['hideSidebar'] != '1'}
            <div class="main-sidebar">
                {if $RSThemes['addonSettings']['sticky_sidebars'] == "true"}<div class="sidebar-sticky" {if $RSThemes.addonSettings.show_affixed_navigation == 'enabled'}data-sidebar-sticky{/if}>{/if}
                    {include file="orderforms/$carttpl/sidebar-categories.tpl"}
                {if $RSThemes['addonSettings']['sticky_sidebars'] == "true"}</div>{/if}
            </div>
        {/if}
        <div class="main-content{if $mainContentClasses} {$mainContentClasses}{/if}">
            {* <button id="hideShowServiceRenewalButton" class="btn btn-sm btn-default service-renewals-quick-filter">
                <span class="to-hide">
                    {lang key='renewService.hideShowServices.hide'}
                </span>
                <span class="to-show">
                    {lang key='renewService.hideShowServices.show'}
                </span>
            </button> *}
            <div class="subheader-container d-flex justify-between">
                {if $RSThemes['pages'][$templatefile]['config']['hideSidebar'] != '1'}
                    {include file="orderforms/$carttpl/sidebar-categories-collapsed.tpl"}
                {/if}
                <label class="panel panel-switch panel-switch-show-renewable">
                    <div class="panel-body">
                        <span class="">{lang key='renewService.hideShowServices.show'}</span>
                        <span class="switch switch--sm">
                            <input type="checkbox" class="switch__checkbox" id="hideShowServiceRenewalSwitch">
                            <span class="switch__container"><span class="switch__handle"></span></span>
                        </span> 
                    </div>
                </label>
            </div>
            {if $totalServiceCount != 0}
                <div class="secondary-cart-body">
                    {if $totalResults < $totalServiceCount}
                        <div class="text-center">
                            {lang key='renewService.showingServices' showing=$totalResults totalCount=$totalServiceCount}
                            <a id="linkShowAll" href="{routePath('service-renewals')}">
                                {lang key='domainRenewal.showAll'}
                            </a>
                        </div>
                    {/if}
                    <div id="serviceRenewals" class="service-renewals">
                        {include file="orderforms/$carttpl/service-renewal-item.tpl" renewableItems=$renewableServices prefix=''}
                    </div>
                </div>
            {else}
                <div class="message message-no-data">
                    <div class="message-image">
                        {include file="$template/includes/common/svg-icon.tpl" icon="domain"}              
                    </div>
                    <h6 class="message-title">{lang key='renewService.noServices'}</h6>
                </div>
            {/if}
        </div>
        {if $totalServiceCount != 0}
            {* <div class="secondary-cart-sidebar" id="scrollingPanelContainer">
                <div id="orderSummary">
                    <div class="order-summary">
                        <div class="loader" id="orderSummaryLoader">
                            <i class="fas fa-fw fa-sync fa-spin"></i>
                        </div>
                        <h2 class="font-size-30">
                            {lang key='ordersummary'}
                        </h2>
                        <div class="summary-container" id="producttotal"></div>
                    </div>
                    <div class="text-center">
                        <a id="btnGoToCart" class="btn btn-primary btn-lg" href="{$WEB_ROOT}/cart.php?a=view">
                            {lang key='viewcart'}
                            <i class="far fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div> *}

            <div class="main-sidebar main-sidebar-summary {if $RSThemes['pages'][$templatefile]['config']['hideSidebar'] == '1'} main-sidebar-lg{/if}">
                <div class="sidebar-sticky sidebar-sticky-summary">
                    <div class="panel panel-summary panel-summary-{$summaryStyle} m-b-0x" id="orderSummary">
                        <div class="loader" id="orderSummaryLoader">
                            {if $summaryStyle == 'default'}
                                {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}
                            {else}
                                {include file="$template/includes/common/loader.tpl" classes="spinner-sm spinner-light"}
                            {/if} 
                        </div>
                        <div class="panel-heading">
                            <h2 class="panel-title">{$LANG.ordersummary}</h2>
                        </div>
                        <div id="producttotal" data-summary-style="{$summaryStyle}"></div>
                    </div>
                </div>
            </div>
            <div class="order-summary order-summary-mob" id="orderSummaryMob" data-fixed-actions href="#orderSummary">                        
                <a href="{$WEB_ROOT}/cart.php?a=view" class="btn btn-lg btn-primary-faded btn-checkout" id="checkout">  
                    <span><i class="ls ls-share"></i> {$LANG.orderForm.checkout}</span>
                    <div class="loader loader-button hidden">{include file="$template/includes/common/loader.tpl" classes="spinner-sm"} </div>
                </a>
            </div>
        {/if}
        <form id="removeRenewalForm" method="post" action="{$WEB_ROOT}/cart.php" data-renew-type="service">
            <input type="hidden" name="a" value="remove">
            <input type="hidden" name="r" value="" id="inputRemoveItemType">
            <input type="hidden" name="i" value="" id="inputRemoveItemRef">
            <input type="hidden" name="rt" value="service" id="inputRemoveItemRenewalType">
            <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="{lang key='orderForm.close'}">
                                <i class="lm lm-close"></i>
                            </button>
                            <h3 class="modal-title">
                                <span>{lang key='orderForm.removeItem'}</span>
                            </h3>
                        </div>
                        <div class="modal-body">
                            {lang key='cartremoveitemconfirm'}
                        </div>
                        <div class="modal-footer d-block">
                            <button type="submit" class="btn btn-primary">{lang key='yes'}</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">{lang key='no'}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>recalculateRenewalTotals();</script>
    </div>
{/if}