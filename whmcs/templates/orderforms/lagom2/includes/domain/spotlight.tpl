{if file_exists("templates/orderforms/$carttpl/includes/domain/overwrites/spotlight.tpl")}
    {include file="templates/orderforms/$carttpl/includes/domain/overwrites/spotlight.tpl"}
{else}
    <div class="section spotlight-tlds new" id="spotlightTlds">
        <div class="section-header">
            <h2 class="section-title">{lang key='featuredProduct'}</h2>
        </div> 
        <div class="section-body">
            <div class="spotlights">
                {foreach $spotlightTlds as $key => $data}
                    <div class="spotlight-col swiper-slide col">
                        <div class="spotlight" id="spotlight{$data.tldNoDots}">
                            <div class="spotlight-body">
                                <div class="spotlight-top">
                                    {if $data.group == "hot"}
                                        {assign var="grouplabel" value="danger"}
                                    {elseif $data.group == "new"}
                                        {assign var="grouplabel" value="success"}
                                    {elseif $data.group == "sale"}
                                        {assign var="grouplabel" value="warning"}
                                    {/if}
                                    <div class="spotlight-content">
                                        {if isset($RSThemes['addonSettings']['tld_cycle_switcher']) && $RSThemes['addonSettings']['tld_cycle_switcher'] == 'true' && $data.group}
                                            <span class="label-xs tld-label label-{$grouplabel}">{$data.groupDisplayName}</span>
                                        {/if}
                                        <span class="extension">{$data.tld|replace:".":"<span>.</span>"}</span>
                                    </div>
                                    <div class="spotlight-footer {if $RSThemes['addonSettings']['tld_cycle_switcher'] != 'true'}spotlight-footer_border{/if} domain-lookup-result">
                                        {if isset($RSThemes['addonSettings']['tld_cycle_switcher']) && $RSThemes['addonSettings']['tld_cycle_switcher'] == 'true'}
                                            <div class="form-group">
                                                <select 
                                                    class="form-control input-sm" 
                                                    data-tld-cycle-switcher 
                                                    data-lang-year="{$rslang->trans('order.period.short.annually')}" 
                                                    data-lang-years="{$rslang->trans('order.period.short.annually_multi')}" 
                                                >
                                                </select> 
                                            </div>
                                        {/if}
                                        {if !isset($RSThemes['addonSettings']['tld_cycle_switcher']) || $RSThemes['addonSettings']['tld_cycle_switcher'] != 'true'}
                                                {if $data.group}
                                                    <span class="label-xs tld-label label-{$grouplabel}">{$data.groupDisplayName}</span>
                                                {/if}
                                                <span class="spotlight-footer_price">{$data.register}</span>
                                        {/if}
                                        <button type="button" class="btn btn-sm {if $RSThemes.styles.vars.futuristic}btn-outline btn-default{else}btn-primary-faded{/if} btn-disabled btn-block unavailable btn-unavailable hidden" disabled="disabled">
                                            {lang key='domainunavailable'}
                                        </button>
                                        <button type="button" class="btn btn-sm {if $RSThemes.styles.vars.futuristic}btn-outline btn-default{else}btn-primary-faded{/if} btn-disabled btn-block invalid btn-unavailable hidden" disabled="disabled">
                                            {lang key='domainunavailable'}
                                        </button>
                                        <div class="btn-group btn-group-remove">
                                            <button type="button" class="btn btn-sm {if $RSThemes.styles.vars.futuristic}btn-outline btn-default{else}btn-primary-faded{/if} btn-add-to-cart hidden" data-whois="0" data-domain="" {if $RSThemes.styles.vars.futuristic}data-system-style="futuristic"{/if}>
                                                <span class="to-add">{lang key='orderForm.add'}</span>
                                                <span class="added"><i class="ls ls-check"></i>{lang key='domaincheckeradded'}</span>
                                                <span class="unavailable">{$LANG.domaincheckertaken}</span>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary btn-remove-domain hidden" data-system-template="{$template}" data-domain="" data-toggle="tooltip" title="{$LANG.orderForm.remove}" {if $RSThemes.styles.vars.futuristic}data-system-style="futuristic"{/if}>
                                                <i class="ls ls-trash"></i> 
                                                <div class="loader loader-button hidden">
                                                    {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}
                                                </div>
                                            </button>
                                            <div class="btn-group-loader">{include file="$template/includes/common/loader.tpl" classes="spinner-sm spinner-light"}</div>
                                        </div>
                                        <button type="button" class="btn {if $RSThemes.styles.vars.futuristic}btn-outline btn-default{else}btn-primary-faded{/if} btn-sm btn-loading">
                                            <span class="invisible"></span>
                                            {if $RSThemes.styles.vars.futuristic}
                                                {include file="$template/includes/common/loader.tpl" classes="spinner-sm spinner-light"}  
                                            {else}
                                                {include file="$template/includes/common/loader.tpl" classes="spinner-sm"}  
                                            {/if} 
                                        </button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                {/foreach}
            </div>
            {include file="orderforms/$carttpl/includes/domain/world-loader.tpl" type="default"}
        </div>
    </div>
{/if}