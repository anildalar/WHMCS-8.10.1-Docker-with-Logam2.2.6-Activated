<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:30:23
  from '/var/www/html/templates/lagom2/core/cms/sections/config/stats/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff58f9a8593_29140575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c992953e9c6f6a86ecc1b116703054421c8a2a28' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/stats/stats.tpl',
      1 => 1714141152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff58f9a8593_29140575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('darkIcons', false);
if (($_smarty_tpl->tpl_vars['theme']->value == "primary" || $_smarty_tpl->tpl_vars['theme']->value == "secondary") && $_smarty_tpl->tpl_vars['features_style']->value != "boxed") {?>
    <?php $_smarty_tpl->_assignInScope('darkIcons', true);
}?>
<div class="site-section section-title-above section-stats section-features section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <div class="container <?php if ($_smarty_tpl->tpl_vars['display_features_slider']->value) {?>container-slider<?php }?> <?php if ($_smarty_tpl->tpl_vars['features_slider_type']->value == "screen-slider") {?>full-screen-slider<?php }?>">
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
            <?php if (is_array($_smarty_tpl->tpl_vars['stats_group']->value['groups']) && count($_smarty_tpl->tpl_vars['stats_group']->value['groups']) > 1) {?>
            <div class="tabs-multiple-container <?php if (is_array($_smarty_tpl->tpl_vars['stats_group']->value['groups']) && count($_smarty_tpl->tpl_vars['stats_group']->value['groups']) <= 1) {?>no-tabs<?php }?>">
                <?php if (is_array($_smarty_tpl->tpl_vars['stats_group']->value['groups']) && count($_smarty_tpl->tpl_vars['stats_group']->value['groups']) > 1) {?>
                    <div class="tabs content-slider"  data-cms-content-slider>
                        <ul class="nav nav-lg nav-tabs nav-tabs-slider content-slider-wrapper" data-content-slider-wrapper>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stats_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_17_saved = $_smarty_tpl->tpl_vars['group'];
?>
                                <li class="content-slider-item nav-item">
                                    <a 
                                        class="nav-link <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php } else { ?>tab-not-clicked<?php if ($_smarty_tpl->tpl_vars['features_slider_type']->value == "screen-slider") {?>-screen-slider<?php }
}?>" 
                                        data-multitab 
                                        data-multitab-target="<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>#tab-compare-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>#tab-compare-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>" 
                                        href='<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>#tab-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>#tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>' 
                                        data-toggle="tab" 
                                        data-animation-init
                                    >
                                        <span class="nav-link-text"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['group']->value['group_name'], ENT_QUOTES);?>
</span>
                                    </a>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <?php if (is_array($_smarty_tpl->tpl_vars['stats_group']->value['groups']) && count($_smarty_tpl->tpl_vars['stats_group']->value['groups']) > 0) {?>    
            <div class="tab-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stats_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_18_saved = $_smarty_tpl->tpl_vars['group'];
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['fields']['features'])) && is_array($_smarty_tpl->tpl_vars['group']->value['fields']['features']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['features']) > 0) {?>
                        <div class="tab-pane tab-pane-features <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php }?>" id='<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>tab-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>'>
                            <?php if ($_smarty_tpl->tpl_vars['display_features_slider']->value) {?>
                                <div class="section-slider content-slider content-slider-features <?php if ($_smarty_tpl->tpl_vars['features_slider_type']->value == "screen-slider") {?>screen-slider" data-screen-slider-simple <?php } else { ?>" data-cms-content-slider<?php }?>>   
                                    <div class="slider-cover-before"></div>
                                    <div class="content-slider-wrapper row-eq-height <?php if ($_smarty_tpl->tpl_vars['features_slider_type']->value == "screen-slider") {?> screen-slider-wrapper" data-screen-slider-wrapper<?php } else { ?>" data-content-slider-wrapper<?php }?>>
                            <?php } else { ?>
                            <div class="row row-eq-height row-eq-height-xs row-lg">
                            <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>     
                                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'featureStyle'=>$_smarty_tpl->tpl_vars['features_style']->value,'featureIconPosition'=>$_smarty_tpl->tpl_vars['features_icon_position']->value,'featureSize'=>$_smarty_tpl->tpl_vars['features_size']->value,'featureColsDesktop'=>$_smarty_tpl->tpl_vars['cols_desktop']->value,'featureColsTabH'=>$_smarty_tpl->tpl_vars['cols_tab_h']->value,'featureColsTabV'=>$_smarty_tpl->tpl_vars['cols_tab_v']->value,'featureColsMob'=>$_smarty_tpl->tpl_vars['cols_mob']->value,'featureCustomClasses'=>$_smarty_tpl->tpl_vars['features_custom_classes']->value,'displaySlider'=>$_smarty_tpl->tpl_vars['display_features_slider']->value,'featureSliderType'=>$_smarty_tpl->tpl_vars['features_slider_type']->value,'theme'=>$_smarty_tpl->tpl_vars['darkIcons']->value), 0, true);
?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['display_features_slider']->value) {?>
                                <div class="slider-cover-after"></div>
                                </div>  
                                <div class="swiper-button-next" data-next-slide>
                                    <i class="lm lm-arrow-thin-right"></i>
                                </div>
                                <div class="swiper-button-prev" data-prev-slide>
                                    <i class="lm lm-arrow-thin-left"></i>
                                </div>  
                            <?php }?>
                        </div>
                    <?php }?>    
                <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_18_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
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
