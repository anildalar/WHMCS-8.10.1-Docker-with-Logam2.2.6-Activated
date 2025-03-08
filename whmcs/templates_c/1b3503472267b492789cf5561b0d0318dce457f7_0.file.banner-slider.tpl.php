<?php
/* Smarty version 3.1.48, created on 2025-03-04 18:45:18
  from '/var/www/html/templates/lagom2/core/pages/homepage/modern/shared/banner-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c74a3ee6faa4_26018953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3503472267b492789cf5561b0d0318dce457f7' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/pages/homepage/modern/shared/banner-slider.tpl',
      1 => 1741086857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c74a3ee6faa4_26018953 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['homepage']->value->getMarketConnectCount() != 0 && !empty($_smarty_tpl->tpl_vars['homepage']->value->getPromotionBanner())) {?>
    <div data-promo-slider>
        <div class="site-banner site-slider banner banner-sides banner-<?php echo $_smarty_tpl->tpl_vars['siteBannerStyle']->value;
if ($_smarty_tpl->tpl_vars['homepage']->value->getMarketConnectCount() == 1 || !$_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showSliderNavigation']) {?> slider-single<?php }?>">
            <div class="container">
                <div class="slider-wrapper">
                    <div class="slider-slides" data-promo-slider-wrapper>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepage']->value->getPromotionBanner(), 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <?php if (strpos($_smarty_tpl->tpl_vars['item']->value['settings'],'"client-home":true,"') != false) {?>
                                <div class="slider-slide">
                                    <div class="banner-content" data-animation-content>
                                        <h1 class="banner-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['headline'];?>
</h1>
                                        <div class="banner-desc">
                                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['tagline'];?>
</p>
                                        </div>
                                        <div class="banner-actions">
                                            <?php if (strstr(routePath('cart-order'),"?")) {
$_smarty_tpl->_assignInScope('addChar', "&");
} else {
$_smarty_tpl->_assignInScope('addChar', "?");
}?>
                                            <a href="<?php echo routePath('cart-order');
echo $_smarty_tpl->tpl_vars['addChar']->value;?>
pid=<?php echo $_smarty_tpl->tpl_vars['item']->value['pid'];?>
" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['siteBannerStyle']->value == 'primary') {?>-faded<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['getStartedNow'];?>
</a>
                                            <a href="<?php echo routePath('store-product-group',$_smarty_tpl->tpl_vars['item']->value['slug']);?>
" class="btn btn-lg <?php if ($_smarty_tpl->tpl_vars['siteBannerStyle']->value == 'default' && !$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>btn-primary-outline<?php } else { ?>btn-light-outline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['learnmore'];?>
</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="banner-background">
                    <div class="banner-shape">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"site/banner-shape"), 0, true);
?> 
                    </div>
                    <div class="banner-graphics" data-promo-slider-homepage>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepage']->value->getPromotionBanner(), 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <?php if (strpos($_smarty_tpl->tpl_vars['item']->value['settings'],'"client-home":true,"') != false) {?>
                                <div>
                                    <div class="banner-graphic" data-animation-icons>
                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['iconType'] == "modern") {?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"products/modern/".((string)$_smarty_tpl->tpl_vars['item']->value['name'])), 0, true);
?>  
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"products/".((string)$_smarty_tpl->tpl_vars['item']->value['name'])), 0, true);
?>  
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['homepage']->value->getMarketConnectCount() > 1 && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showSliderNavigation'] == '1') {?>
            <div class="site-section section-slider-btn">
                <div class="container">
                    <div class="section-content">
                        <div class="slider-navigation row" data-promo-slider-pagination>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepage']->value->getPromotionBanner(), 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <?php if (strpos($_smarty_tpl->tpl_vars['item']->value['settings'],'"client-home":true,"') != false) {?>
                                    <div class="col-lg">
                                        <div class="tile" data-promo-slider-pagination-item>     
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>((string)$_smarty_tpl->tpl_vars['item']->value['name'])), 0, true);
?>                
                                            <span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['tabname'];?>
</span>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php }
}
}
