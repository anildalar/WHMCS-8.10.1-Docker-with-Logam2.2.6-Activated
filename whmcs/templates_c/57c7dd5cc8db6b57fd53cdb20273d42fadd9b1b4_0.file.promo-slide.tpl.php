<?php
/* Smarty version 3.1.48, created on 2024-09-18 06:31:45
  from '/var/www/html/templates/lagom2/core/extensions/PromoBanners/promo-slide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea73d1a7e213_02403685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57c7dd5cc8db6b57fd53cdb20273d42fadd9b1b4' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/extensions/PromoBanners/promo-slide.tpl',
      1 => 1694173278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea73d1a7e213_02403685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('sliderCounter', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoSliderExtension']->value, 'slide', false, 'k', 'slideLoop', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
    <?php if (($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time >= time()) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time == 0 && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time == 0) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && !$_smarty_tpl->tpl_vars['slide']->value->slide_end_time)) {?>
        <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['promotion'][$_smarty_tpl->tpl_vars['setting']->value] == '1' && $_smarty_tpl->tpl_vars['slide']->value->slide_show == '1') {?>
            <?php $_smarty_tpl->_assignInScope('sliderCounter', $_smarty_tpl->tpl_vars['sliderCounter']->value+1);?>
        <?php }?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['sliderCounter']->value) {?>
<style>
    
    .promo-slider {
        display: none;
    }
    .promo-slider-background>* {
        display: flex;
        justify-content: center;
    }
    .promo-slider-background>* img {
        object-fit: inherit;
    }
    .promo-slider-icons.promo-slider-icons--image .promo-slider-icon {
        right: unset;
        top: unset;
        bottom: unset;
        left: unset;
    }
    .promo-slider-xs #bannerIcon {
        left: 0;
        right: 0;
    }
    .promo-slider-xs,
    .promo-slider-xs .promo-slider-slide,
    .promo-slider-xs .promo-slider-wrapper {
        min-height: 200px;
    }
    .promo-slider-xs .promo-slider-slide {
        height: auto !important;
    }
    .promo-slider-xs .promo-slider-slide.slider-slide-default {
        padding-top: 0
    }
    .promo-slider-xs .promo-slider-title,
    .promo-slider-xs .promo-slider-more {
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.16);
    }
    .m-t-3x {
        margin-top: 24px !important;
    }
    @media (max-width: 768px) {
        .short-name {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #ffffff;
            overflow: hidden;
            opacity: .5;
        }

        .promo-slider-nav li.active .short-name {
            opacity: 1;
        }
    }
    #Promotion img {
        opacity: 0;
    }
    .promo-slider-slide.slider-slide-custom-icon .promo-slider-icons {
        height: auto;
    }
    @media (max-width: 991px) {
        .promo-slider-xs .promo-slider-content {
            margin-top: 0 !important;
        }
    }
    @media (max-width: 480px) {
        .promo-slider-slide.slider-slide-custom-icon .promo-slider-icons {
            justify-content: center!important; /* force icons to be centered on mobile phones */
        }
        .promo-slider-slide.slider-slide-custom-icon .promo-slider-icons .promo-slider-custom-icon {
            margin-right: 0!important; /* force remove right icon spacing */
            margin-left: 0!important; /* force remove left icon spacing */
        }
        .promo-slider-background > div > img {
            opacity: 32%!important; /* force background opacity */
        }
    }
    

    <?php echo $_smarty_tpl->tpl_vars['promotionStyles']->value;?>

</style>

    <div id="Promotion" class="promo-slider <?php if ($_smarty_tpl->tpl_vars['class']->value) {
echo $_smarty_tpl->tpl_vars['class']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['autoslideBannerDisable']->value) {?> autoPromoDisable<?php }?>" data-promo-slider>
    <div class="promo-slider-header">
        <ul class="promo-slider-nav promo-slider-nav-dots" data-promo-slider-pagination>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoSliderExtension']->value, 'slide', false, 'k', 'slideLoop', array (
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <?php if (($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time >= time()) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time == 0 && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time == 0) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && !$_smarty_tpl->tpl_vars['slide']->value->slide_end_time)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['promotion'][$_smarty_tpl->tpl_vars['setting']->value] == '1' && $_smarty_tpl->tpl_vars['slide']->value->slide_show == '1') {?>
                        <li data-promo-slider-pagination-item data-background="<?php if (($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color'] == "transparent") && ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color2'] == "transparent") && $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] == "background") {?>light<?php } else { ?>dark<?php }?>">
                            <span class="short-name"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['slide']->value->getField('slide_name',$_smarty_tpl->tpl_vars['activeLocale']->value['language']),2,'',true,true);?>
</span>
                            <span class="full-name"><?php echo $_smarty_tpl->tpl_vars['slide']->value->getField('slide_name',$_smarty_tpl->tpl_vars['activeLocale']->value['language']);?>
</span>
                        </li>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['promotionClose']->value) {?>
            <div onclick="writeCookie(<?php echo $_smarty_tpl->tpl_vars['promotionCloseTime']->value;?>
)" class="promo-slider-close" data-promo-slide-close data-toggle="tooltip" data-title="Close" data-container="body">
                <i class="ls ls-close"></i>
            </div>
        <?php }?>
            </div>
    <div class="promo-slider-wrapper">
        <div class="promo-slider-background" data-promo-slider-background>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoSliderExtension']->value, 'slide', false, 'k2');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <?php if (($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time >= time()) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time == 0 && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time == 0) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && !$_smarty_tpl->tpl_vars['slide']->value->slide_end_time)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['promotion'][$_smarty_tpl->tpl_vars['setting']->value] == '1' && $_smarty_tpl->tpl_vars['slide']->value->slide_show == '1') {?>
                    <div <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['banner_style_active']) {?>id="promo-slide-<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
-bg"<?php } else { ?> class="promo-slide-<?php echo $_smarty_tpl->tpl_vars['promoSliderStyle']->value;?>
-bg"<?php }?>>
                        <?php if (!$_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['banner_style_active'] || (!$_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color'] && !$_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color2'] && $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] != "background")) {?>
                            <div></div>
                            <div></div>
                            <div class="promo-slider-shape">
                                <?php if ($_smarty_tpl->tpl_vars['absTemplate']->value) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['absTemplate']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"site/banner-shape",'template'=>$_smarty_tpl->tpl_vars['absTemplate']->value), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"site/banner-shape"), 0, true);
?>
                                <?php }?>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_icon_custom && $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] == "background") {?>
                        <img id="promo-slide-<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
-bg-image" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/extensions/PromoBanners/uploads/<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_icon_custom;?>
">
                        <?php }?>
                    </div>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="promo-slider-slides" data-promo-slider-wrapper>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoSliderExtension']->value, 'slide', false, 'k2');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <?php if (($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time >= time()) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time == 0 && $_smarty_tpl->tpl_vars['slide']->value->slide_end_time == 0) || ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time <= time() && !$_smarty_tpl->tpl_vars['slide']->value->slide_end_time)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['promotion'][$_smarty_tpl->tpl_vars['setting']->value] == '1' && $_smarty_tpl->tpl_vars['slide']->value->slide_show == '1') {?>
                    <a class="promo-slider-slide <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['banner_style_active']) {?>promo-slide-<?php echo $_smarty_tpl->tpl_vars['promoSliderStyle']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] == "background") {?>slider-slide-custom-bg<?php } elseif ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] == "custom_icon") {?>slider-slide-custom-icon<?php } else { ?>slider-slide-default<?php }
if (($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color'] != "transparent") && ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color2'] != "transparent") || ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] == "background")) {?> slider-slide-transparent<?php }
if (($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color'] == "transparent") && ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color2'] == "transparent") && ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] == "background")) {?> dark-font<?php }?>" id="promo-slide-<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_product_url;?>
" data-animation-type="<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['animation'];?>
" <?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'];?>
>
                        <div class="promo-slider-body">
                            <div class="promo-slider-content" data-animation-content>
                                <h2 class="promo-slider-title" <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['banner_style_active'] && $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color_title']) {?>style="color: <?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['color_title'];?>
;"<?php }?>>
                                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['slide']->value->getField('slide_description',$_smarty_tpl->tpl_vars['activeLocale']->value['language']), ENT_QUOTES);?>

                                </h2>
                            </div>
                            <div class="promo-slider-more" data-animation-more><i class="ls ls-basket"></i><?php echo $_smarty_tpl->tpl_vars['slide']->value->getField('slide_text_btn',$_smarty_tpl->tpl_vars['activeLocale']->value['language']);?>
</div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_options['config']['graphic_type'] != "background") {?>
                        <div class="promo-slider-icons" id="promo-slide-<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
-icon-wrapper" data-animation-icons>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_icon_custom) {?>
                                <img class="promo-slider-custom-icon" id="promo-slide-<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
-icon" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/extensions/PromoBanners/uploads/<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_icon_custom;?>
" alt="">
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] == "modern") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['absTemplate']->value && file_exists(((string)$_smarty_tpl->tpl_vars['absTemplate']->value)."/assets/svg-illustrations/products/modern/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl")) {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['absTemplate']->value)."/assets/svg-illustrations/products/modern/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/products/modern/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl")) {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/products/modern/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['absTemplate']->value && file_exists(((string)$_smarty_tpl->tpl_vars['absTemplate']->value)."/assets/svg-illustrations/products/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl")) {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['absTemplate']->value)."/assets/svg-illustrations/products/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/products/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl")) {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/products/".((string)$_smarty_tpl->tpl_vars['slide']->value->slide_icon).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        </div>
                         <?php }?>
                    </a>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    

    if(getCookie('RS_Promotion') != '1'){
        document.getElementById('Promotion').style.display = "block";
    }

    function writeCookie (days) {
        var date = new Date();
        days = days || 1;
        date.setTime(+ date + (days * 86400000)); //24 * 60 * 60 * 1000
        window.document.cookie = 'RS_Promotion' + "=" + '1' + "; expires=" + date.toGMTString() + "; path=/";
        return;
    }

    function getCookie(name) {
        var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
        return v ? v[2] : null;
    }

    
<?php echo '</script'; ?>
>
<?php }
}
}
