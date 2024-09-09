{if file_exists("{$smarty.current_dir}/overwrites/tld.tpl")}
    {include file="{$smarty.current_dir}/overwrites/tld.tpl"} 
{else}
    {$renewTypes = ['transfer_renewal', 'register_renewal', 'renewal']}

    {include file="{$smarty.current_dir}/feature-cols.tpl"}
    <div class="{foreach $cols as $col} {$col}{/foreach}{if $displaySlider}{if $tldSliderType == "screen-slider"} screen-slider-item{else} content-slider-item{/if}{/if}">
        <div class="feature feature-tld feature-tld-{$tldLayout} {if $tldSize == "small"} feature-sm{elseif $tldSize == "extra-small"} feature-xs{/if}{if $tldStyle == 'boxed'} is-boxed{elseif $tldStyle == 'bordered'} is-bordered{/if}  {if $tld.custom_classes} {$tld.custom_classes}{/if}{if $tldCustomClasses} {$tldCustomClasses}{/if}">
            <div class="feature-body">
                <div class="feature-content">
                    <div class="feature-title">{$tld.domain.tld|replace:".":"<span>.</span>"}</div>
                    <div class="feature-footer">
                        <div class="feature-desc">
                            <span class="feature-tld-price">
                                {if strstr($tldPricing, 'register')}
                                    {if $tld.domain.price.register}
                                        {formatCurrency($tld.domain.price.register, $WHMCSCurrency.suffix)|replace:$WHMCSCurrency.suffix:" `$WHMCSCurrency.suffix`"}/{if $tld.domain.yearlyCycle.register == "1"}{$LANG.pricingCycleShort.annually}{else}{$tld.domain.yearlyCycle.register}{$LANG.pricingCycleShort.biennially|replace:"2":""}{/if}
                                    {else}
                                        -
                                    {/if}        
                                {elseif strstr($tldPricing, 'transfer')}
                                    {if $tld.domain.price.transfer}
                                        {formatCurrency($tld.domain.price.transfer, $WHMCSCurrency.suffix)|replace:$WHMCSCurrency.suffix:" `$WHMCSCurrency.suffix`"}/{if $tld.domain.yearlyCycle.transfer == "1"}{$LANG.pricingCycleShort.annually}{else}{$tld.domain.yearlyCycle.transfer}{$LANG.pricingCycleShort.biennially|replace:"2":""}{/if}
                                    {else}
                                        -
                                    {/if}
                                {elseif $tld.domain.price.renew}
                                    {if $tldPricing == "renewal"}
                                        {formatCurrency($tld.domain.price.renew, $WHMCSCurrency.suffix)|replace:$WHMCSCurrency.suffix:" `$WHMCSCurrency.suffix`"}/{if $tld.domain.yearlyCycle.renew == "1"}{$LANG.pricingCycleShort.annually}{else}{$tld.domain.yearlyCycle.renew}{$LANG.pricingCycleShort.biennially|replace:"2":""}{/if}
                                    {else}
                                        -
                                    {/if}
                                {/if}
                            </span>
                            {if in_array($tldPricing, $renewTypes) && $tld.domain.price.renew}
                                <span class="feature-tld-renewal">
                                    {$rslang->trans('tld.renewal_at')} {formatCurrency($tld.domain.price.renew)|replace:$WHMCSCurrency.suffix:" `$WHMCSCurrency.suffix`"}/{if $tld.domain.yearlyCycle.renew == "1"}{$LANG.pricingCycleShort.annually}{else}{$tld.domain.yearlyCycle.renew}{$LANG.pricingCycleShort.biennially|replace:"2":""}{/if}
                                </span>
                            {/if}
                        </div>
                        <div class="feature-actions">
                            {if $tldSize == "extra-small"}
                                <a href="#" data-domain-box="{$tld.domain.tld}" class="btn btn-link btn-sm flex-row-reverse">
                                    <div class="btn-icon">
                                        <i class="ls ls-arrow-right"></i> 
                                    </div>
                                    <div class="btn-text">
                                        {if strstr($tldPricing, 'register')}
                                            {$rslang->trans('tld.register_now')}
                                        {elseif strstr($tldPricing, 'transfer')}
                                            {$rslang->trans('tld.transfer_now')}
                                        {else}
                                            {$rslang->trans('tld.renew_now')}
                                        {/if}
                                    </div>
                                </a>
                            {else}
                                <a href="{if $linkedPage == "none"}#{else}{$linkedPage}{/if}" data-domain-box="{$tld.domain.tld}" class="btn btn-primary {if $tldSize == "small"}btn-sm{/if}">
                                    <span class="btn-text">
                                        {if strstr($tldPricing, 'register')}
                                            {$rslang->trans('tld.register_now')}
                                        {elseif strstr($tldPricing, 'transfer')}
                                            {$rslang->trans('tld.transfer_now')}
                                        {else}
                                            {$rslang->trans('tld.renew_now')}
                                        {/if}
                                    </span>
                                </a>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}    
