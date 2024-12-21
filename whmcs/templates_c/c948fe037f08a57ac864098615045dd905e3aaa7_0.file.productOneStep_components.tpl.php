<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:18:50
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/productOneStep_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665dcad784e5_90604280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c948fe037f08a57ac864098615045dd905e3aaa7' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/productOneStep_components.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67665dcad784e5_90604280 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-products-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section section-show-overflow" v-if="isVisible" v-bind:class="{ 'section-packages' : !showNumber}">
        <div class="section-number" v-if="showNumber" >X</div>
        <div class="section-header" v-if="isOneStep">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','title','products');?>
</h2>
        </div>
        <div class="section-top-nav swiper-header" v-if="products.length > 3 && $store.state.cartStore.pageType !== 'bottom' && isOneStep && layoutSettings.packagesSlider || products.length > 4 && $store.state.cartStore.pageType !== 'bottom' && !isOneStep && layoutSettings.packagesSlider || products.length > 4 && $store.state.cartStore.pageType == 'bottom' && layoutSettings.packagesSlider" :class="{ 'is-enabled' : sliderEnabled}">
            <div class="swiper-switcher">
                <span class="swiper-switcher__label active" @click="changeMode" data-slider='on'>
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','labels','slider');?>

                </span>
                <span class="swiper-switcher__label" @click="changeMode" data-slider='off'>
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','labels','all');?>

                </span>
            </div>
            <div class="swiper-nav" v-if="sliderEnabled">
                <span class="swiper-button swiper-button-prev">
                    <inline-svg :src="sysURL + '/modules/addons/LagomOrderForm/templates/client/default/assets/img/templates/18x18-left.svg'"/>
                </span>
                <div class="swiper-navigation">
                    <span class="swiper-navigation-current-slide"></span>
                    /
                    <span class="swiper-navigation-last-slide"></span>
                </div>
                <span class="swiper-button swiper-button-next">
                    <inline-svg :src="sysURL + '/modules/addons/LagomOrderForm/templates/client/default/assets/img/templates/18x18-right.svg'"/>
                </span>
            </div>
        </div>
        <div
                class="section-body"
                :data-slide-width="slideWidths"
                :data-visible-slides="visibleSlides"
                :class="getSlidesClasses()"
                :dir="isPageRTL() ? 'rtl' : 'ltr'"
                >
            <div class="swiper-navigation-secondary swiper-navigation-secondary-left" v-if="products.length > 3 && $store.state.cartStore.pageType !== 'bottom' || products.length > 4 && $store.state.cartStore.pageType == 'bottom'"></div>
            <div class="row row-eq-height row-eq-height-xs m-b-neg-24 m-b-neg-3x"
                 :class="getSecondaryNavigationClasses()"
            >
                <div v-for="product in products"
                     :class="getProductClasses()">
                    <div class="package"
                         :class="getPackageClass(product)"
                         v-on:click="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getOnClickAction();?>
">
                        <div class="package-header">
                            <span v-if="product.is_featured === 1" class="label-corner label-primary"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','labels','featured');?>
</span>
                            <span class="check-sign"><i class="ls ls-check"></i></span>
                            <h3 class="package-name package-title h5" v-html="product.name"></h3>
                            <div v-if="product.pricing !== null && getProductStartingPrice(product) && product.paytype != 'free'" class="price-starting-from mt-3" v-html="`<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','startingFrom');?>
`"></div>
                            <a class="nav-link"  v-html="cart.products[0].domain" v-if="isMarketConnectProductWithDomain()" style="display: block; width:80%; margin:0 auto; word-wrap: break-word">
                            </a>

                            <div class="package-price">
                                <div v-if="product.paytype == 'free'">
                                    <div class="price" :class="[ { 'price-sm': isOneStep } ]"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','price','free');?>
</div>
                                </div>
                                <div v-else>
                                    <div class="price" :class="[ { 'price-sm': isOneStep } ]">
                                        <div class="price-amount" v-if="getProductDiscountPrice(product)">
                                            <span class="price-savings">
                                                <span v-html="getProductPrice(product)"></span>
                                                <div class="price-discount" v-html="`<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','billing_cycle','save');?>
 ` + getProductDiscountPercentage(product)"></div>
                                            </span>
                                            <span v-html="getProductDiscountPrice(product)"></span>
                                        </div>
                                        <div class="price-amount" v-else>
                                            <span v-html="getProductPrice(product)"></span>
                                        </div>
                                        <div class="price-cycle" v-if="product.paytype == 'onetime'">
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','oneTime');?>

                                        </div>
                                        <div class="price-cycle" v-else-if="orderSettings.ProductMonthlyPricingBreakdown == 'on'">
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','price','monthly');?>

                                        </div>
                                        <div class="price-cycle" v-else v-html="getTranslatedMessage(product.pricing[getAvailableCycle(product)].cycle)"></div>
                                        <div  v-if="getProductSetupFee(product)">
                                            <div class="price-setup-fee" v-if="getProductDiscountRawSetupFee(product) > 0">
                                                <span class="price-savings">
                                                    <span v-html="getProductSetupFee(product)"></span>
                                                    <div class="price-discount" v-html="`<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','billing_cycle','save');?>
 ` + getProductDiscountSetupFeePercentage(product)"></div>
                                                </span>
                                                <span v-html="getProductDiscountSetupFee(product)"></span>
                                            </div>
                                            <div class="price-setup-fee" v-else>
                                                <div class="price-setup-fee" v-html="getProductSetupFee(product)"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="package-body" :class="{ 'm-t-0' : !product.description.featuresLagomDescription && !product.description.featuresDescription }">
                            <div class="package-content" v-if="product.description.featuresLagomDescription" v-html="product.description.featuresLagomDescription">
                            </div>
                            <div class="package-content" v-else>
                                <p v-html="product.description.featuresDescription"></p>
                                <ul class="package-features" :class="{ 'm-t-3x' : !product.description.featuresLagomDescription && !product.description.featuresDescription }" v-if="product.description.features !== undefined && Object.keys(product.description.features).length !== 0">
                                    <li v-for="(feature, key) in product.description.features">
                                        <b v-html="feature.name"></b> <span v-html="feature.value"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="package-footer">
                                <button class="btn btn-primary-faded" :class="[{ 'is-loading' : ((showLoaderOnId == product.id) && (selectedProduct != product.id) || (!isOneStep && (showLoaderOnId == product.id)))}]"  v-if="product.outOfStock === true" >
                                    <span class="btn-text">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','productNotAvailable');?>

                                    </span>
                                    <div class="btn-loader" v-if="((showLoaderOnId == product.id) && (selectedProduct != product.id) || (!isOneStep && (showLoaderOnId == product.id)))">
                                        <div class="spinner spinner-sm">
                                            <div class="rect1"></div>
                                            <div class="rect2"></div>
                                            <div class="rect3"></div>
                                            <div class="rect4"></div>
                                            <div class="rect5"></div>
                                        </div>
                                    </div>
                                </button>
                                <button class="btn btn-primary-faded has-loader" :class="[{ 'is-loading' : ((showLoaderOnId == product.id) && (selectedProduct != product.id) || (!isOneStep && (showLoaderOnId == product.id)))}]" v-else-if="selectedProduct != product.id || !isOneStep">
                                    <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','ordernowbutton');?>
</span>
                                    <div class="btn-loader" v-if="((showLoaderOnId == product.id) && (selectedProduct != product.id) || (!isOneStep && (showLoaderOnId == product.id)))">
                                        <div class="spinner spinner-sm">
                                            <div class="rect1"></div>
                                            <div class="rect2"></div>
                                            <div class="rect3"></div>
                                            <div class="rect4"></div>
                                            <div class="rect5"></div>
                                        </div>
                                    </div>
                                </button>
                                <button class="btn btn-primary" v-else-if="isOneStep">
                                    <span class="btn-text">
                                        <i class="ls ls-check"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','is_product_selected');?>

                                    </span>
                                </button>
                                <div class="package-qty" v-if="product.stockcontrol === 1">
                                    <span v-html="product.qty"></span> <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','productAvailable');?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-navigation-secondary swiper-navigation-secondary-right" v-if="products.length > 3 && $store.state.cartStore.pageType !== 'bottom' || products.length > 4 && $store.state.cartStore.pageType == 'bottom'"></div>
        </div>
    </div>

<?php echo '</script'; ?>
><?php }
}
