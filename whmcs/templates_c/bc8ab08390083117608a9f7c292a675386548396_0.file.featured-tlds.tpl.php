<?php
/* Smarty version 3.1.48, created on 2024-09-24 08:37:08
  from '/var/www/html/templates/lagom2/core/cms/sections/config/featured-tlds/featured-tlds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f27a34a81f08_44885887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc8ab08390083117608a9f7c292a675386548396' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/featured-tlds/featured-tlds.tpl',
      1 => 1720186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f27a34a81f08_44885887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('darkIcons', false);
if (($_smarty_tpl->tpl_vars['theme']->value == "primary" || $_smarty_tpl->tpl_vars['theme']->value == "secondary") && $_smarty_tpl->tpl_vars['tld_list_style']->value != "boxed") {?>
    <?php $_smarty_tpl->_assignInScope('darkIcons', true);
}?>

<div class="site-section section-title-above section-features section-features-tlds section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <div class="container <?php if ($_smarty_tpl->tpl_vars['display_tlds_slider']->value) {?>container-slider<?php }?> <?php if ($_smarty_tpl->tpl_vars['tlds_slider_type']->value == "screen-slider") {?>full-screen-slider<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
            <span class="section-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            <h2 class="section-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
            <div class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</div>
        <?php }?>
        <div class="section-content section-content-features content-slider-parent">
            <?php if ((isset($_smarty_tpl->tpl_vars['tld_list']->value)) && is_array($_smarty_tpl->tpl_vars['tld_list']->value) && count($_smarty_tpl->tpl_vars['tld_list']->value) > 0) {?>    
                <?php if ($_smarty_tpl->tpl_vars['display_tlds_slider']->value) {?>
                    <div class="section-slider content-slider content-slider-features <?php if ($_smarty_tpl->tpl_vars['tld_list_size']->value != "default") {?>features-sizes-sm<?php }?> <?php if ($_smarty_tpl->tpl_vars['tlds_slider_type']->value == "screen-slider") {?>screen-slider" data-screen-slider-simple <?php } else { ?>" data-cms-content-slider<?php }?>>   
                        <div class="slider-cover-before"></div>
                        <div class="content-slider-wrapper  row-eq-height <?php if ($_smarty_tpl->tpl_vars['tlds_slider_type']->value == "screen-slider") {?> screen-slider-wrapper" data-screen-slider-wrapper<?php } else { ?>" data-content-slider-wrapper<?php }?>>
                <?php } else { ?>
                <div class="row row-eq-height row-eq-height-xs row-lg <?php if ($_smarty_tpl->tpl_vars['tld_list_size']->value != "default") {?>features-sizes-sm<?php }?>">
                <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tld_list']->value, 'tld');
$_smarty_tpl->tpl_vars['tld']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tld']->value) {
$_smarty_tpl->tpl_vars['tld']->do_else = false;
?>     
                        <?php if (is_array($_smarty_tpl->tpl_vars['tld']->value['domain'])) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/tld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tld'=>$_smarty_tpl->tpl_vars['tld']->value,'tldLayout'=>$_smarty_tpl->tpl_vars['tld_list_layout']->value,'tldStyle'=>$_smarty_tpl->tpl_vars['tld_list_style']->value,'tldSize'=>$_smarty_tpl->tpl_vars['tld_list_size']->value,'tldPricing'=>$_smarty_tpl->tpl_vars['tld_list_pricing']->value,'tldSliderType'=>$_smarty_tpl->tpl_vars['tlds_slider_type']->value,'featureColsDesktop'=>$_smarty_tpl->tpl_vars['cols_desktop']->value,'featureColsTabH'=>$_smarty_tpl->tpl_vars['cols_tab_h']->value,'featureColsTabV'=>$_smarty_tpl->tpl_vars['cols_tab_v']->value,'featureColsMob'=>$_smarty_tpl->tpl_vars['cols_mob']->value,'tldCustomClasses'=>$_smarty_tpl->tpl_vars['tlds_custom_classes']->value,'displaySlider'=>$_smarty_tpl->tpl_vars['display_tlds_slider']->value,'featureSliderType'=>$_smarty_tpl->tpl_vars['tlds_slider_type']->value,'btnText'=>$_smarty_tpl->tpl_vars['pricingText']->value,'linkedPage'=>$_smarty_tpl->tpl_vars['link_to_page']->value), 0, true);
?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['display_tlds_slider']->value) {?>
                    <div class="slider-cover-after"></div>
                    </div>  
                    <div class="swiper-button-next" data-next-slide>
                        <i class="lm lm-arrow-thin-right"></i>
                    </div>
                    <div class="swiper-button-prev" data-prev-slide>
                        <i class="lm lm-arrow-thin-left"></i>
                    </div>  
                <?php }?>  
            <?php }?>  
        </div>    
        <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?> 
            <div class="section-actions">
                <div class="section-actions-buttons">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php }?>
    </div>   
</div> <?php }
}
