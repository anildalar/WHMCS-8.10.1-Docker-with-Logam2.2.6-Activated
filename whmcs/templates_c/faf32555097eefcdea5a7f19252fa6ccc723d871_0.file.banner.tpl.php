<?php
/* Smarty version 3.1.48, created on 2024-09-27 12:26:56
  from '/var/www/html/templates/lagom2/core/cms/sections/config/banner/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6a4904dfed7_10998749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf32555097eefcdea5a7f19252fa6ccc723d871' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/banner/banner.tpl',
      1 => 1720186756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f6a4904dfed7_10998749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>


<?php $_smarty_tpl->_assignInScope('sideTypes', array('type-1','type-2','type-3'));
$_smarty_tpl->_assignInScope('centerTypes', array('type-4','type-5','type-6'));?>

<div class="site-banner banner banner-cms banner-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['sideTypes']->value)) {?> banner-sides<?php } else { ?> banner-center<?php }?> banner-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1") {?> banner-predefined-graphic<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?> banner-custom-graphic <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-3" || $_smarty_tpl->tpl_vars['type']->value == "type-4") {?> banner-custom-graphic-bg <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-5") {?> banner-custom-graphic-overlap <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "type-6") {?> banner-no-graphic<?php }?> <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>" data-site-banner>
<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
<?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['centerTypes']->value)) {?>
    <div class="banner-body">
<?php }?>
    <div class="container">
        <div class="banner-content">
            <?php if ($_smarty_tpl->tpl_vars['caption']->value) {?>
                <span class="banner-caption"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                <h1 class="banner-title"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h1>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['subtitle']->value) {?>
                <div class="banner-subtitle">
                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['buttons']->value || $_smarty_tpl->tpl_vars['show_product_pricing']->value) {?>
                <div class="banner-actions">
                    <?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?>
                        <div class="banner-actions-buttons">
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
                        <div class="banner-actions-price price price-lg">
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
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && ($_smarty_tpl->tpl_vars['type']->value == "type-1" || $_smarty_tpl->tpl_vars['type']->value == "type-2")) {?>
            <div class="banner-background <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-2") {?>graphic-centered<?php }?>"  data-animation-css>
                <div class="banner-graphic">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "type-1" && !$_smarty_tpl->tpl_vars['disable_background_shape']->value) {?>
                    <div class="banner-shape">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>"site/banner-shape.tpl",'type'=>"illustration"), 0, true);
?>
                    </div>
                <?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['type']->value == "type-3") {?>
            <div class="banner-graphic-background banner-graphic-background-side"  data-animation-css>
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['type']->value == "type-5") {?>
            <div class="banner-graphic-background" data-animation-css>
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['graphic']->value['graphic'] && $_smarty_tpl->tpl_vars['type']->value == "type-4") {?>
            <?php if (strstr($_smarty_tpl->tpl_vars['graphic']->value['graphic'],".tpl")) {?>
                <div class="banner-graphic-background banner-graphic-background-image">
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['graphic']->value['graphic'],'type'=>$_smarty_tpl->tpl_vars['graphic']->value['type']), 0, true);
?>
                </div>
            <?php } else { ?>
                <div class="banner-graphic-background banner-graphic-background-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['graphic']->value['graphic'];?>
');">
                </div>
            <?php }?>
        <?php }?>
    <?php if (in_array($_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['centerTypes']->value)) {?>
        </div>
    <?php }?>
</div><?php }
}
