<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:57:42
  from '/var/www/html/templates/lagom2/core/cms/sections/config/features-sides/features-sides.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777dec64a8fe8_01267317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce038630f23f414fe9e7cb2bdb5ba203175bbd9d' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/features-sides/features-sides.tpl',
      1 => 1694183036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777dec64a8fe8_01267317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div class="site-section section-sides section-features-sides section-graphic <?php if ($_smarty_tpl->tpl_vars['title_position']->value == "above") {?> section-graphic-title-above<?php }?> section-graphic-<?php echo $_smarty_tpl->tpl_vars['features_position']->value;?>
 section-graphic-type-2 section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <?php if ($_smarty_tpl->tpl_vars['title_position']->value == "above" && ($_smarty_tpl->tpl_vars['caption']->value || $_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->tpl_vars['subtitle']->value)) {?>
        <div class="container container-title">
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
        </div>
    <?php }?>
    <div class="container container-default">
        <div class="section-content">
            <?php if ($_smarty_tpl->tpl_vars['title_position']->value == "inside") {?>
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
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['desc']->value) {?>
                <div class="section-desc"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES);?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['buttons']->value || $_smarty_tpl->tpl_vars['show_product_pricing']->value) {?> 
                <div class="section-actions">
                    <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?>
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
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_product_pricing']->value && !empty($_smarty_tpl->tpl_vars['product_group_pricing']->value)) {?>
                        <div class="section-actions-price price price-lg">
                            <<?php if (!(isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['product'])) || empty($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']) || $_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['hasConfigurableOptions']) {?>
                                <span class="price-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingat'];?>
</span>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('formatedPrice', false);?>
                            <?php $_smarty_tpl->_assignInScope('pricePeriod', false);?>
                            <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', false);?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['product'])) && !empty($_smarty_tpl->tpl_vars['product_group_pricing']->value['product'])) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['type'])) && $_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['type'] == "recurring") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['bestCycle']]['price']));?>
                                        <?php $_smarty_tpl->_assignInScope('pricePeriod', 'monthly');?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['bestCycle']]['real_price']));?>
                                        <?php $_smarty_tpl->_assignInScope('pricePeriod', $_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['bestCycle']);?>
                                    <?php }?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['type'])) && $_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['type'] == "onetime") {?>
                                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price']['tabs']['onetime']['price']));?>
                                    <?php $_smarty_tpl->_assignInScope('pricePeriod', 'onetime');?>    
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price'])) && $_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['price'] == "free") {?>
                                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency("0.00"));?>       
                                <?php }?>
                            <?php } else { ?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['type'])) && $_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['type'] == "recurring") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['tabs'][$_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['bestCycle']]['price']));?>
                                        <?php $_smarty_tpl->_assignInScope('pricePeriod', 'monthly');?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['tabs'][$_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['bestCycle']]['real_price']));?>
                                        <?php $_smarty_tpl->_assignInScope('pricePeriod', $_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['bestCycle']);?>
                                    <?php }?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['type'])) && $_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['type'] == "onetime") {?>
                                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product_group_pricing']->value['price']['tabs']['onetime']['price']));?>
                                    <?php $_smarty_tpl->_assignInScope('pricePeriod', 'onetime');?>    
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['price'])) && $_smarty_tpl->tpl_vars['product_group_pricing']->value['price'] == "free") {?>
                                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency("0.00"));?>       
                                <?php }?>
                            <?php }?>
                            <span class="price-ammount">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," <sub>".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'])."</sub>");
if ((isset($_smarty_tpl->tpl_vars['pricePeriod']->value)) && $_smarty_tpl->tpl_vars['pricePeriod']->value) {?><sub><?php if ((isset($_smarty_tpl->tpl_vars['montlyBreakdown']->value)) && $_smarty_tpl->tpl_vars['montlyBreakdown']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
} elseif ($_smarty_tpl->tpl_vars['pricePeriod']->value == "onetime") {?> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];
} else { ?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort'][$_smarty_tpl->tpl_vars['pricePeriod']->value];
}?></sub><?php }?>
                            </span>  
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
        <div class="section-features">
            <div class="row row-eq-height row-eq-height-xs row-lg">
                <?php if ((isset($_smarty_tpl->tpl_vars['features']->value)) && is_array($_smarty_tpl->tpl_vars['features']->value) && count($_smarty_tpl->tpl_vars['features']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>     
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/feature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('feature'=>$_smarty_tpl->tpl_vars['feature']->value,'featureStyle'=>$_smarty_tpl->tpl_vars['features_style']->value,'featureIconPosition'=>$_smarty_tpl->tpl_vars['features_icon_position']->value,'featureSize'=>$_smarty_tpl->tpl_vars['features_size']->value,'featureColsDesktop'=>$_smarty_tpl->tpl_vars['cols_desktop']->value,'featureColsTabH'=>$_smarty_tpl->tpl_vars['cols_tab_h']->value,'featureColsTabV'=>$_smarty_tpl->tpl_vars['cols_tab_v']->value,'featureColsMob'=>$_smarty_tpl->tpl_vars['cols_mob']->value,'featureCustomClasses'=>$_smarty_tpl->tpl_vars['features_custom_classes']->value,'displaySlider'=>$_smarty_tpl->tpl_vars['display_features_slider']->value,'featureSliderType'=>$_smarty_tpl->tpl_vars['features_slider_type']->value,'theme'=>$_smarty_tpl->tpl_vars['darkIcons']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
        </div>
    </div>
</div> <?php }
}
