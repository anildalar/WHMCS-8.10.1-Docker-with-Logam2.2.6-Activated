<div class="panel-body">
    <div class="summary-content content">
        <ul class="summary-list">
            <li class="list-item" data-subtotal>
                <span class="item-name">{$LANG.ordersubtotal}</span>
                <span class="item-value">{if $displayPriceSuffix == "off"}{$subtotal|replace:$WHMCSCurrency.suffix:""}{else}{$subtotal}{/if}</span>
            </li>
        </ul>
        {if $promotioncode || $taxrate || $taxrate2}
        <ul class="summary-list faded">
            {if $taxrate}
                <li class="list-item">
                    <span class="item-name">{$taxname} @ {$taxrate}%</span>
            <span class="item-value" id="taxTotal1">{if $displayPriceSuffix == "off"}{$taxtotal|replace:$WHMCSCurrency.suffix:""}{else}{$taxtotal}{/if}</span>
                </li>
            {/if}
            {if $taxrate2}
                <li class="list-item">
                    <span class="item-name">{$taxname2} @ {$taxrate2}%</span>
                    <span class="item-value" id="taxTotal2">{if $displayPriceSuffix == "off"}{$taxtotal2|replace:$WHMCSCurrency.suffix:""}{else}{$taxtotal2}{/if}</span>
                </li>
            {/if}
            {if $promotioncode}
                <li class="list-item light">
                    <span class="item-name">{$promotiondescription}</span>
                    <span class="item-value" id="discount">{if $displayPriceSuffix == "off"}{$discount|replace:$WHMCSCurrency.suffix:""}{else}{$discount}{/if}</span>
                </li>
            {/if}
        </ul>
        {/if}
        <ul class="summary-list" id="recurring">
            <li class="list-item faded">{$LANG.orderForm.totals}</li>
            <li class="list-item" id="recurringMonthly" {if !$totalrecurringmonthly}style="display:none;"{/if}>
                <span class="item-name">{$LANG.orderpaymenttermmonthly}</span>
            <span class="item-value">{if $displayPriceSuffix == "off" && $totalrecurringmonthly != ""}{$totalrecurringmonthly|replace:$WHMCSCurrency.suffix:""}{else}{$totalrecurringmonthly}{/if}</span>
            </li>                
            <li class="list-item" id="recurringQuarterly" {if !$totalrecurringquarterly}style="display:none;"{/if}>
                <span class="item-name">{$LANG.orderpaymenttermquarterly}</span>
            <span class="item-value">{if $displayPriceSuffix == "off" && $totalrecurringquarterly != ""}{$totalrecurringquarterly|replace:$WHMCSCurrency.suffix:""}{else}{$totalrecurringquarterly}{/if}</span>
            </li>
            <li class="list-item" id="recurringSemiAnnually" {if !$totalrecurringsemiannually}style="display:none;"{/if}>
                <span class="item-name">{$LANG.orderpaymenttermsemiannually}</span>
            <span class="item-value">{if $displayPriceSuffix == "off" && $totalrecurringsemiannually != ""}{$totalrecurringsemiannually|replace:$WHMCSCurrency.suffix:""}{else}{$totalrecurringsemiannually}{/if}</span>
            </li>
            <li class="list-item" id="recurringAnnually" {if !$totalrecurringannually}style="display:none;"{/if}>
                <span class="item-name">{$LANG.orderpaymenttermannually}</span>
            <span class="item-value">{if $displayPriceSuffix == "off" && $totalrecurringannually != ""}{$totalrecurringannually|replace:$WHMCSCurrency.suffix:""}{else}{$totalrecurringannually}{/if}</span>
            </li>
            <li class="list-item" id="recurringBiennially" {if !$totalrecurringbiennially}style="display:none;"{/if}>
                <span class="item-name">{$LANG.orderpaymenttermbiennially}</span>
            <span class="item-value">{if $displayPriceSuffix == "off" && $totalrecurringbiennially != ""}{$totalrecurringbiennially|replace:$WHMCSCurrency.suffix:""}{else}{$totalrecurringbiennially}{/if}</span>
            </li>
            <li class="list-item" id="recurringTriennially" {if !$totalrecurringtriennially}style="display:none;"{/if}>
                <span class="item-name">{$LANG.orderpaymenttermtriennially}</span>
            <span class="item-value">{if $displayPriceSuffix == "off" && $totalrecurringtriennially != ""}{$totalrecurringtriennially|replace:$WHMCSCurrency.suffix:""}{else}{$totalrecurringtriennially}{/if}</span>
            </li>
        </ul>
    </div>
</div>
<div class="panel-footer">                        
    <div class="price price-left-h" data-total>
        <span class="price-total">{$LANG.ordertotalduetoday}</span> 
            <div class="price-amount amt" id="totalDueToday">{if $displayPriceSuffix == "off"}{$total|replace:$WHMCSCurrency.suffix:""}{else}{$total}{/if}</div>
    </div>    
    <div class="summary-actions">
        <button type="button" class="btn btn-lg btn-primary{if $summaryStyle == "primary"}-faded{/if} btn-checkout{if $cartitems == 0} disabled{/if}" {if $cartitems == 0} disabled{/if} data-btn-loader id="checkout">
            <span><i class="ls ls-share"></i>{$LANG.orderForm.checkout}</span>
            <div class="loader loader-button hidden">
                {include file="templates/orderforms/$carttpl/includes/common/loader.tpl" classes="spinner-sm"}  
            </div>
        </button>
    </div>
</div>
