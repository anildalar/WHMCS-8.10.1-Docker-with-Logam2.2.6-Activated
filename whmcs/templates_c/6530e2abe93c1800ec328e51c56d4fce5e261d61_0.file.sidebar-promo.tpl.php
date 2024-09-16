<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:37:57
  from '/var/www/html/templates/lagom2/includes/sidebar/sidebar-promo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e407f5937b10_69052086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6530e2abe93c1800ec328e51c56d4fce5e261d61' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/sidebar/sidebar-promo.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e407f5937b10_69052086 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/overwrites/sidebar-promo.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/overwrites/sidebar-promo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['RSMarketConnectServices']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RSMarketConnectServices']->value, 'addon_html', false, 'k', 'foo', array (
));
$_smarty_tpl->tpl_vars['addon_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon_html']->value['settings']['promotion'], 'promotion', false, 'k', 'foo', array (
));
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['k']->value == "product-list" && $_smarty_tpl->tpl_vars['promotion']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('show_promo_prods', true);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['k']->value == "product-details" && $_smarty_tpl->tpl_vars['promotion']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('show_promo_proddet', true);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts') {?>
        <?php if ($_smarty_tpl->tpl_vars['promoSliderExtension']->value && $_smarty_tpl->tpl_vars['promoBannerStatus']->value == '1') {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promo-slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"product-list",'class'=>"promo-slider-xs"), 0, true);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['show_promo_prods']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/promo-slider/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"product-list",'class'=>"promo-slider-xs"), 0, true);
?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproductdetails') {?>
        <?php if ($_smarty_tpl->tpl_vars['promoSliderExtension']->value && $_smarty_tpl->tpl_vars['promoBannerStatus']->value == '1') {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promo-slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"product-details",'class'=>"promo-slider-xs"), 0, true);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['show_promo_proddet']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/promo-slider/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"product-details",'class'=>"promo-slider-xs"), 0, true);
?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomains') {?>
        <?php if ($_smarty_tpl->tpl_vars['promoSliderExtension']->value && $_smarty_tpl->tpl_vars['promoBannerStatus']->value == '1') {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promo-slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"domain-list",'class'=>"promo-slider-xs"), 0, true);
?>
        <?php }?>
    <?php }
}
}
}
