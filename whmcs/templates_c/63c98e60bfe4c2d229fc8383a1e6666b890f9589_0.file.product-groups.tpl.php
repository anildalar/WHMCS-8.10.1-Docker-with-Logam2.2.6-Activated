<?php
/* Smarty version 3.1.48, created on 2024-09-23 12:37:48
  from '/var/www/html/templates/lagom2/core/cms/sections/config/product-groups/product-groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f1611c43d0c2_93836473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63c98e60bfe4c2d229fc8383a1e6666b890f9589' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/product-groups/product-groups.tpl',
      1 => 1720186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f1611c43d0c2_93836473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="site-section section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <?php if ((isset($_smarty_tpl->tpl_vars['package_slider']->value)) && $_smarty_tpl->tpl_vars['package_slider']->value != '' && $_smarty_tpl->tpl_vars['display_package_slider']->value) {?>
        <?php $_smarty_tpl->_assignInScope('sliderOn', true);?>
        <?php if ($_smarty_tpl->tpl_vars['package_slider']->value == "all") {?>
            <?php $_smarty_tpl->_assignInScope('package_slider', "desktop,tab-h,tab-v,mob");?>
            <?php $_smarty_tpl->_assignInScope('slider', explode(",",$_smarty_tpl->tpl_vars['package_slider']->value));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('slider', explode(",",$_smarty_tpl->tpl_vars['package_slider']->value));?>
        <?php }?>
    <?php }?>
    <div class="container container-title <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>container-slider<?php }?>">
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
        <div class="section-content section-content-packages">
            <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {?>
                <div class="tabs-multiple-container <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) <= 1) {?>no-tabs<?php }
if ($_smarty_tpl->tpl_vars['display_billing_cycle']->value) {?>has-billing-cycle<?php }?>">
                    <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {?>
                        <div class="tabs content-slider"  data-cms-content-slider>
                            <ul class="nav nav-lg nav-tabs nav-tabs-slider content-slider-wrapper" data-content-slider-wrapper>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_56_saved = $_smarty_tpl->tpl_vars['group'];
?>
                                    <li class="content-slider-item nav-item">
                                        <a 
                                            class="nav-link <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php } else { ?>tab-not-clicked<?php }?>" 
                                            data-product-group-change="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
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
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_56_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 0) {?>    
                <div class="tab-content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_57_saved = $_smarty_tpl->tpl_vars['group'];
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['fields']['product_groups'])) && is_array($_smarty_tpl->tpl_vars['group']->value['fields']['product_groups']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['product_groups']) > 0) {?>
                            <div class="tab-pane content-slider-parent <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php }?>" id='<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>tab-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>'>
                                <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>
                                    <div class="section-slider content-slider content-slider-mixed <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?> res-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['slide']->value, 'UTF-8')," ","-");
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" data-cms-content-slider >
                                    <div class="slider-cover-before"></div>
                                <?php }?> 
                                <div class="row row-eq-height row-lg row-cols-mixed <?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['product_groups'])) {?>row-packages-<?php echo count($_smarty_tpl->tpl_vars['group']->value['fields']['product_groups']);
}?> <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>content-slider-wrapper<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?> content-slider-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['slide']->value, 'UTF-8')," ","-");
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>row-eq-height<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>data-content-slider-wrapper<?php }?>>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['product_groups'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package-pg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'productStyle'=>$_smarty_tpl->tpl_vars['style']->value,'productType'=>$_smarty_tpl->tpl_vars['type']->value,'productSize'=>$_smarty_tpl->tpl_vars['size']->value,'productLink'=>$_smarty_tpl->tpl_vars['product']->value['whmcs_page'],'featureColsDesktop'=>$_smarty_tpl->tpl_vars['cols_desktop']->value,'featureColsTabH'=>$_smarty_tpl->tpl_vars['cols_tab_h']->value,'featureColsTabV'=>$_smarty_tpl->tpl_vars['cols_tab_v']->value,'featureColsMob'=>$_smarty_tpl->tpl_vars['cols_mob']->value,'featureSlider'=>$_smarty_tpl->tpl_vars['sliderOn']->value,'productCustomClasses'=>$_smarty_tpl->tpl_vars['package_custom_classes']->value), 0, true);
?>     
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>
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
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_57_saved;
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
</div><?php }
}
