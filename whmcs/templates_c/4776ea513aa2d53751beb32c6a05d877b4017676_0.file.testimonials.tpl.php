<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:14:43
  from '/var/www/html/templates/lagom2/core/cms/sections/config/testimonials/testimonials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff1e37aea56_47681793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4776ea513aa2d53751beb32c6a05d877b4017676' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/testimonials/testimonials.tpl',
      1 => 1715336408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff1e37aea56_47681793 (Smarty_Internal_Template $_smarty_tpl) {
?><div
    class="site-section section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 section-testimonials <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['testimonials']->value && $_smarty_tpl->tpl_vars['testimonials_shuffle']->value) {?> shuffle-section<?php }?>" <?php if ($_smarty_tpl->tpl_vars['testimonials']->value && $_smarty_tpl->tpl_vars['testimonials_shuffle']->value) {?>data-shuffle-section<?php }?>>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="container<?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2" || $_smarty_tpl->tpl_vars['type']->value == "type-1") {?> container-slider<?php }?> <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1") {?>container-full-width-slider<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
            <span class="section-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            <h2 class="section-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
            <p class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['testimonials']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?>
                <?php $_smarty_tpl->_assignInScope('imgs', array());?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
$_smarty_tpl->tpl_vars['testimonial']->iteration = 0;
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['testimonial']->iteration++;
$__foreach_testimonial_0_saved = $_smarty_tpl->tpl_vars['testimonial'];
?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['imgs']) ? $_smarty_tpl->tpl_vars['imgs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = ((string)$_smarty_tpl->tpl_vars['WEB_ROOT']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/page-manager/".((string)$_smarty_tpl->tpl_vars['testimonial']->value['media']);
$_smarty_tpl->_assignInScope('imgs', $_tmp_array);?>
                <?php
$_smarty_tpl->tpl_vars['testimonial'] = $__foreach_testimonial_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="section-content swiper swiper-testimonials" data-default-number="<?php echo count($_smarty_tpl->tpl_vars['testimonials']->value);?>
" data-testimonial-single-slider>
                    <div class="swiper-wrapper" <?php if ($_smarty_tpl->tpl_vars['testimonials']->value && $_smarty_tpl->tpl_vars['testimonials_shuffle']->value) {?>data-shuffle-number="<?php if ($_smarty_tpl->tpl_vars['testimonials_shuffle_number']->value) {
echo $_smarty_tpl->tpl_vars['testimonials_shuffle_number']->value;
}?>"<?php }?>>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
$_smarty_tpl->tpl_vars['testimonial']->iteration = 0;
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['testimonial']->iteration++;
$__foreach_testimonial_1_saved = $_smarty_tpl->tpl_vars['testimonial'];
?> 
                            <div class="swiper-slide">
                                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/testimonial-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['testimonial'] = $__foreach_testimonial_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="avatars-wrapper">
                        <div class="swiper-pagination testimonials-avatars" data-slider-pagination data-images=<?php echo json_encode($_smarty_tpl->tpl_vars['imgs']->value);?>
>
                        </div>
                    </div>
                </div> 

            <?php } else { ?>

                <div class="section-content content-slider-parent content-slider-parent-testimonials <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['type']->value != 'type-4') {?>
                    <div style="" class="content-slider-testimonials section-slider content-slider <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?> testimonials-single<?php }
if (count($_smarty_tpl->tpl_vars['testimonials']->value) <= 3) {?> slider-pagination--hidden<?php }?>" data-testimonials-content-slider data-options="loop: true;<?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?> disabled: <?php echo count($_smarty_tpl->tpl_vars['testimonials']->value);
}?>" <?php if ($_smarty_tpl->tpl_vars['testimonials']->value && $_smarty_tpl->tpl_vars['testimonials_shuffle']->value) {?>data-shuffle-number="<?php if ($_smarty_tpl->tpl_vars['testimonials_shuffle_number']->value) {
echo $_smarty_tpl->tpl_vars['testimonials_shuffle_number']->value;
}?>"<?php }?>>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?><div class="slider-cover-before"></div><?php }?>
                        <div class="row row-eq-height content-slider-wrapper" data-content-slider-wrapper>
                <?php } else { ?>
                    <div class="testimonials-grid" <?php if ($_smarty_tpl->tpl_vars['testimonials']->value && $_smarty_tpl->tpl_vars['testimonials_shuffle']->value) {?> data-shuffle-number="<?php if ($_smarty_tpl->tpl_vars['testimonials_shuffle_number']->value) {
echo $_smarty_tpl->tpl_vars['testimonials_shuffle_number']->value;
}?>"<?php }?>>
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-2") && !$_smarty_tpl->tpl_vars['testimonials_shuffle']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
$_smarty_tpl->tpl_vars['testimonial']->iteration = 0;
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['testimonial']->iteration++;
$__foreach_testimonial_2_saved = $_smarty_tpl->tpl_vars['testimonial'];
?>
                        <div <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-4") {?>class="testimonials-grid-item"<?php }
if ($_smarty_tpl->tpl_vars['type']->value != "type-4") {?>class="<?php if ($_smarty_tpl->tpl_vars['type']->value != "type-3") {?>col-lg-4 col-md-6 col-12 <?php }?>content-slider-item<?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-2") {?> col-custom<?php }?>"<?php }?>>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/testimonial-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['testimonial'] = $__foreach_testimonial_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
$_smarty_tpl->tpl_vars['testimonial']->iteration = 0;
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['testimonial']->iteration++;
$__foreach_testimonial_3_saved = $_smarty_tpl->tpl_vars['testimonial'];
?>
                        <div <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-4") {?>class="testimonials-grid-item"<?php }
if ($_smarty_tpl->tpl_vars['type']->value != "type-4") {?>class="<?php if ($_smarty_tpl->tpl_vars['type']->value != "type-3") {?>col-lg-4 col-md-6 col-12 <?php }?>content-slider-item<?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-2") {?> col-custom<?php }?>"<?php }?>>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/testimonial-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['testimonial'] = $__foreach_testimonial_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
$_smarty_tpl->tpl_vars['testimonial']->iteration = 0;
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['testimonial']->iteration++;
$__foreach_testimonial_4_saved = $_smarty_tpl->tpl_vars['testimonial'];
?>
                        <div <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-4") {?>class="testimonials-grid-item"<?php }
if ($_smarty_tpl->tpl_vars['type']->value != "type-4") {?>class="<?php if ($_smarty_tpl->tpl_vars['type']->value != "type-3") {?>col-lg-4 col-md-6 col-12 <?php }?>content-slider-item<?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-2") {?> col-custom<?php }?>"<?php }?>>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/testimonial-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['testimonial'] = $__foreach_testimonial_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?><div class="slider-cover-after"></div><?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?>
                    <div class="swiper-button-next" data-next-slide>
                        <i class="lm lm-arrow-thin-right"></i>
                    </div>
                    <div class="swiper-button-prev" data-prev-slide>
                        <i class="lm lm-arrow-thin-left"></i>
                    </div>
                <?php }?>   
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-3") {?>
                    <div class="slider avatars" data-testimonials-content-slider>
                        <div class="content-slider-wrapper slider-avatars" data-cms-content-wrapper>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials']->value, 'testimonial');
$_smarty_tpl->tpl_vars['testimonial']->iteration = 0;
$_smarty_tpl->tpl_vars['testimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->do_else = false;
$_smarty_tpl->tpl_vars['testimonial']->iteration++;
$__foreach_testimonial_5_saved = $_smarty_tpl->tpl_vars['testimonial'];
?>
                                                                <div class="testimonials-avatar">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['testimonial']->value['media']))) {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['testimonial']->value['media'],'type'=>"media"), 0, true);
?>
                                    <?php }?>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['testimonial'] = $__foreach_testimonial_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div> 
                <?php }?> 

                </div>
            
            <?php }?>

            
        <?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value != "type-4") {?>
    </div>
<?php }?>
</div>


<?php }
}
