<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Pricing for usage records')}</h3>
    </div>
    <div class="panel-body">
        {foreach from=$resources item=resource}
            <div class="row" style="padding: ">
                {if $resource.pricing.enabled eq 'on'}
                    {if !empty($resource.pricing.extendedPricing)}
                        <div class="col-md-12 text-center">
                                <b>{$MGLANG->missingLangT($resource.friendlyName)}:</b>
                        </div>
                        <div class="col-md-12 text-center">
                            {foreach from=$resource.extendedPricing key=id item=extendedPricingName}
                            <div class="row">
                                <div class="col-md-6 text-right">{$MGLANG->missingLangT($extendedPricingName)}</div>
                                <div class="col-md-6 text-left">{$currency.prefix}{$resource.pricing.extendedPricing[$id]['price']|number_format:'10'|rtrim:'0'|rtrim:'.'} {$currency.suffix}
                                    / {$MGLANG->missingLangT($resource.pricing.unit)}</div>
                            </div>
                            {/foreach}
                        </div>
                {else}
                    <div class="col-md-6 text-right">{$MGLANG->missingLangT($resource.friendlyName)}</div>
                    <div class="col-md-6">{$currency.prefix}{$resource.pricing.price|number_format:'10'|rtrim:'0'|rtrim:'.'} {$currency.suffix}
                        / {$MGLANG->missingLangT($resource.pricing.unit)}</div>
                {/if}
                {/if}
            </div>
        {/foreach}
    </div>
</div>

<style>
    .panel {
        font-size: 12px;
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #0000;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
        box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    }

    .panel-default {
        border-color: #ddd;
    }

    .panel-default > .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }

    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid #0000;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit;
    }

    .panel-body {
        padding: 10px 15px;
    }

    .panel-body > .row {
        margin-right: 15px;
        margin-left: 15px;
    }
</style>
