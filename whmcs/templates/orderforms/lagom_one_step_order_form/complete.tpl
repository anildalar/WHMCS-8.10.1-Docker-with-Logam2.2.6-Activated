{if isset($RSThemes['pages'][$templatefile]) && file_exists($RSThemes['pages'][$templatefile]['fullPath'])}
    {include file=$RSThemes['pages'][$templatefile]['fullPath']}
{else}
    {include file="orderforms/$carttpl/common.tpl"}
<div id="lagom-one-step-order" class="confirmation-page">
    {if $template != "lagom2"}
        <div class="main-header">
            <div class="container">
                <div class="main-header-content">
                    <div class="header-lined">
                        <h1 id="newOrderHeader" class="main-header-title">{$LANG.orderconfirmation}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="container">
    {/if}
            <div class="message message-success message-lg">
                <div class="message-icon">
                    <i class="lm lm-check"></i>
                </div>
                <h2 class="message-title">{$LagomOrderFormLang->absoluteTranslate('LagomOrderForm','complete','orderPlaced')} #{$ordernumber}</h2>                    
                <p class="message-desc">{$LANG.orderfinalinstructions}</p>
                {if $expressCheckoutInfo}
                    <div class="alert alert-lagom alert-info text-center">
                        {$expressCheckoutInfo}
                    </div>
                {elseif $expressCheckoutError}
                    <div class="alert alert-lagom alert-danger text-center">
                        {$expressCheckoutError}
                    </div>
                {elseif $invoiceid && !$ispaid}
                    <div class="alert alert-warning text-center">
                        {$LANG.ordercompletebutnotpaid}
                        <br /><br />
                        <a href="{$WEB_ROOT}/viewinvoice.php?id={$invoiceid}" target="_blank" class="alert-link">
                            {$LANG.invoicenumber}{$invoiceid}
                        </a>
                    </div>
                {/if}
                {if $ispaid}
                    <!-- Enter any HTML code which should be displayed when a user has completed checkout here -->
                    <!-- Common uses of this include conversion and affiliate tracking scripts -->
                {/if}
                {foreach $addons_html as $addon_html}
                    <div class="order-confirmation-addon-output">
                        {$addon_html}
                    </div>
                {/foreach}
                <a href="{$WEB_ROOT}/clientarea.php" class="btn btn-default">
                    {$LANG.orderForm.continueToClientArea}
                </a>
                {if $hasRecommendations}
                    <div class="recommendations-complete m-t-3x">
                        {include file="orderforms/$carttpl/includes/product-recommendations.tpl"}
                    </div>
                {/if}
            </div>
    {if $template != "lagom2"}
        </div>
    </div>
    {/if}
</div>
{/if}