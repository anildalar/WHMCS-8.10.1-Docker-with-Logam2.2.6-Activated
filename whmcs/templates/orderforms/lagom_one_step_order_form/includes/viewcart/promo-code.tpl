{if file_exists("templates/orderforms/$carttpl/includes/viewcart/overwrites/promo-code.tpl")}
    {include file="templates/orderforms/$carttpl/includes/viewcart/overwrites/promo-code.tpl"}
{else}
    {if $promocodeLocation != "orderSummary"}
        <div class="section {if $promocodeLocation == "endOfViewPage"}section-promocode{/if}">
            <div class="section-header">
                <h2 class="section-title">{$LANG.cartpromo}</h2>
            </div>
            <div class="section-body">
                {if $promotioncode}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="promo-code-description">
                                <i class="ls ls-addon"></i>
                                <span>{if $promotype == "Fixed Amount" || $promotype == "Price Override"}{if $displayPriceSuffix == "off"}{$promotiondescription|replace:$WHMCSCurrency.suffix:""}{else}{$promotiondescription}{/if}{else}{$promotiondescription}{/if}</span>
                            </div>
                        </div>
                        <div class="panel-footer d-flex space-between">
                            <div class="content">
                                <span class="code">{$promotioncode} </span>
                            </div>
                            <div class="content">
                                <a href="{$WEB_ROOT}/cart.php?a=removepromo" class="btn btn-default btn-sm"><i class="ls ls-trash"></i> {$LANG.orderForm.removePromotionCode}</a>
                            </div>
                        </div>
                    </div>
                {else}
                    <div class="search-box {if $promocodeLocation == "endOfViewPage"}search-box-promocode{/if} search-box-sm search-box-{$searchBoxStyle} {if $hookOutput}m-b-0{else}m-b-40{/if}">
                        <form method="post" action="cart.php?a=checkout">
                            <div class="search-group">
                                <div class="search-field">
                                    <input class="form-control" type="text" name="promocode" id="inputPromotionCode" placeholder="{$LANG.orderPromoCodePlaceholder}"/>
                                    <div class="search-field-icon"><i class="lm lm-search"></i></div>     
                                </div>
                                <div class="search-group-btn">
                                    <button class="btn btn-primary{if $searchBoxStyle == 'primary'}-faded{/if}" type="submit" name="validatepromo">{$LANG.orderpromovalidatebutton}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                {/if}
                {if $promoBannerStatus}
                    {include file="$template/core/extensions/PromoBanners/promo-slide.tpl" setting="cart-view" class="m-t-3x"}
                {/if}
            </div>
        </div>
    {else}
        <div class="section">
            <a class="promo-link {if $promotioncode}hidden{/if}">Have a promo code?</a>

            <div class="section-body {if !$promotioncode}hidden{/if}">
                {if $promotioncode}
                    <div class="promocode promocode-enabled">
                        <div class="input-group input-group-sm">
                            <input type="text" placeholder="{$WHMCSCurrency.prefix}{$rawdiscount} Discount" class="form-control"> 
                            <span class="input-group-btn"><button type="button" class="btn btn-primary-faded"><a href="{$WEB_ROOT}/cart.php?a=removepromo">Remove</a></button></span>
                        </div>
                    </div>
                {else}
                    <form method="post" action="cart.php?a=checkout">
                        <div class="promocode">
                            <div class="input-group input-group-sm">
                                <input class="form-control" type="text" name="promocode" id="inputPromotionCode" placeholder="I have a promo code"/>
                                <span class="input-group-btn"><button type="submit" name="validatepromo" class="btn btn-primary-faded">Apply</button></span>
                            </div> 
                        </div>
                    </form>
                {/if}
            </div>
        </div>
    <script>
        $(document).ready(function () {
            let promoCode = document.querySelector('.promo-link')
            promoCode.addEventListener('click', function(){
                this.classList.add('hidden');
                document.querySelector('.sidebar-sticky-summary .section-body').classList.remove('hidden');
            })
        });
    </script>
    {/if}
{/if}