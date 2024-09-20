<?php
/* Smarty version 3.1.48, created on 2024-09-20 04:52:28
  from '/var/www/html/templates/lagom2/core/cms/sections/config/graphic/graphic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ecff8c299d94_36947949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a445458ce70c4dc30414a28cc8023db24051544' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/graphic/graphic.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ecff8c299d94_36947949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('sideTypes', array('left','right'));
$_smarty_tpl->_assignInScope('centerTypes', array('top-center','bottom-center','center'));?>

<div class="site-section section-sides section-graphic <?php if ($_smarty_tpl->tpl_vars['title_position']->value == "above" && $_smarty_tpl->tpl_vars['graphic_type']->value != "type-3") {?> section-graphic-title-above<?php }?> section-graphic-<?php echo $_smarty_tpl->tpl_vars['graphic_position']->value;?>
 section-graphic-<?php echo $_smarty_tpl->tpl_vars['graphic_type']->value;?>
 section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
    <?php if ($_smarty_tpl->tpl_vars['title_position']->value == "above" && ($_smarty_tpl->tpl_vars['caption']->value || $_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->tpl_vars['subtitle']->value) && $_smarty_tpl->tpl_vars['graphic_type']->value != "type-3") {?>
        <div class="container container-title <?php if ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-1") {?> container-type-1<?php }?>">
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
        <?php if ($_smarty_tpl->tpl_vars['title']->value || $_smarty_tpl->tpl_vars['caption']->value || $_smarty_tpl->tpl_vars['subtitle']->value || $_smarty_tpl->tpl_vars['buttons']->value) {?>
            <div class="section-content">
                <?php if ($_smarty_tpl->tpl_vars['title_position']->value == "inside" || $_smarty_tpl->tpl_vars['graphic_type']->value == "type-3") {?>
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
                                <?php if (!(isset($_smarty_tpl->tpl_vars['product_group_pricing']->value['product'])) || empty($_smarty_tpl->tpl_vars['product_group_pricing']->value['product']) || $_smarty_tpl->tpl_vars['product_group_pricing']->value['product']['hasConfigurableOptions']) {?>
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
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-1" || $_smarty_tpl->tpl_vars['graphic_type']->value == "type-2")) {?>
            <div class="section-background <?php if ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-2") {?>background-type-2<?php }?>" data-animation-css>
                <div class="section-graphic">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['graphic_type']->value == "type-1" && !$_smarty_tpl->tpl_vars['disable_background_shape']->value) {?>
                    <div class="section-shape">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/svg-illustrations/cms/section-shape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['graphic_type']->value == "type-3" && ($_smarty_tpl->tpl_vars['graphic_position']->value == "left" || $_smarty_tpl->tpl_vars['graphic_position']->value == "right")) {?>
            <div class="section-background section-background-side" data-animation-css>
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php }?>   
    </div>
    <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['graphic_type']->value == "type-3" && ($_smarty_tpl->tpl_vars['graphic_position']->value == "top-center" || $_smarty_tpl->tpl_vars['graphic_position']->value == "bottom-center" || $_smarty_tpl->tpl_vars['graphic_position']->value == "center")) {?>
        <?php if (strstr($_smarty_tpl->tpl_vars['graphic']->value['graphic'],".tpl")) {?>
            <div class="section-background section-background-side">
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php } else { ?>
            <div class="section-background  banner-graphic-background banner-graphic-background-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['graphic']->value['graphic'];?>
');">
            </div>
        <?php }?>
    <?php }?>   
</div> <?php }
}
