<?php
/* Smarty version 3.1.48, created on 2025-01-04 02:53:10
  from '/var/www/html/templates/lagom2/core/cms/sections/common/package-pg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778a29645e5d5_32729180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67493b60cd7d3120e4a595e68b5653d735710d56' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/package-pg.tpl',
      1 => 1732281842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778a29645e5d5_32729180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/package-pg.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/package-pg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/feature-cols.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php $_smarty_tpl->_assignInScope('formatedPrice', false);?>
    <?php $_smarty_tpl->_assignInScope('pricePeriod', false);?>
    <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', false);?>
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['group']['price']['type'])) && $_smarty_tpl->tpl_vars['product']->value['group']['price']['type'] == "recurring") {?>
        <?php if ($_smarty_tpl->tpl_vars['package_price_display']->value == "cheapest") {?>
            <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['product']->value['group']['price']['bestCycle']]['price']));?>
                <?php $_smarty_tpl->_assignInScope('pricePeriod', 'monthly');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['product']->value['group']['price']['bestCycle']]['real_price']));?>
                <?php $_smarty_tpl->_assignInScope('pricePeriod', $_smarty_tpl->tpl_vars['product']->value['group']['price']['bestCycle']);?>
            <?php }?>
        <?php } else { ?>
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['package_price_display']->value])) && $_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['package_price_display']->value]['price'] != "-1") {?>
                <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['package_price_display']->value]['price']));?>
                    <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', true);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['package_price_display']->value]['real_price']));?>
                    <?php $_smarty_tpl->_assignInScope('pricePeriod', $_smarty_tpl->tpl_vars['package_price_display']->value);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'], 'checkPrice', false, 'key');
$_smarty_tpl->tpl_vars['checkPrice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['checkPrice']->value) {
$_smarty_tpl->tpl_vars['checkPrice']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['checkPrice']->value['price'] != "-1") {?>
                        <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['key']->value);?>
                        <?php break 1;?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price']));?>
                        <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', true);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['real_price']));?>
                        <?php $_smarty_tpl->_assignInScope('pricePeriod', $_smarty_tpl->tpl_vars['firstAvailableCycle']->value);?>
                    <?php }?>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['group']['price']['type'])) && $_smarty_tpl->tpl_vars['product']->value['group']['price']['type'] == "onetime") {?>
        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['group']['price']['tabs']['onetime']['price']));?>
        <?php $_smarty_tpl->_assignInScope('pricePeriod', 'onetime');?>    
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['group']['price'])) && $_smarty_tpl->tpl_vars['product']->value['group']['price'] == "free") {?>
        <?php $_smarty_tpl->_assignInScope('formatedPrice', formatCurrency("0.00"));?>       
    <?php }?>     

    <div class="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['col']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> package-col <?php if ($_smarty_tpl->tpl_vars['featureSlider']->value) {?>content-slider-item<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['productType']->value != "default" || $_smarty_tpl->tpl_vars['productType']->value == "graphic") {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="package package-pg package-link is-<?php echo $_smarty_tpl->tpl_vars['productStyle']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productType']->value == "condensed") {?> package-sm <?php } elseif ($_smarty_tpl->tpl_vars['productType']->value == "graphic") {?> package-type-graphic package-condensed package-sm<?php }?> <?php if ($_smarty_tpl->tpl_vars['productType']->value != "default") {?> package-<?php echo $_smarty_tpl->tpl_vars['productType']->value;
}
if ($_smarty_tpl->tpl_vars['product']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['custom_classes'];
}
if ($_smarty_tpl->tpl_vars['productCustomClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['productCustomClasses']->value;
}?> <?php if (!$_smarty_tpl->tpl_vars['displayBestPrice']->value && smarty_modifier_replace($_smarty_tpl->tpl_vars['dataPrice']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['firstBillingCycle']->value]," ",'') == "NotAvailable") {?> is-disabled<?php }?>">
        <?php } else { ?>
        <div class="package package-pg is-<?php echo $_smarty_tpl->tpl_vars['productStyle']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productType']->value != "default") {?> package-<?php echo $_smarty_tpl->tpl_vars['productType']->value;
}
if ($_smarty_tpl->tpl_vars['product']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['custom_classes'];
}
if ($_smarty_tpl->tpl_vars['productCustomClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['productCustomClasses']->value;
}?> <?php if (!$_smarty_tpl->tpl_vars['displayBestPrice']->value && smarty_modifier_replace($_smarty_tpl->tpl_vars['dataPrice']->value[$_smarty_tpl->tpl_vars['product']->value['product_id']][$_smarty_tpl->tpl_vars['firstBillingCycle']->value]," ",'') == "NotAvailable") {?> is-disabled<?php }?>">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_icon'] && ($_smarty_tpl->tpl_vars['product']->value['icon'] || $_smarty_tpl->tpl_vars['product']->value['font-icon'] || $_smarty_tpl->tpl_vars['product']->value['media'] || $_smarty_tpl->tpl_vars['product']->value['illustration'])) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['illustration']))) {?>
                    <div class="package-graphic package-illustration" data-animation-css>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['product']->value['illustration'],'type'=>"illustration"), 0, true);
?>
                    </div> 
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['media']))) {?>
                    <div class="package-graphic package-media">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['product']->value['media'],'type'=>"media",'elementTitle'=>$_smarty_tpl->tpl_vars['product']->value['group']['name']), 0, true);
?>
                    </div>
                <?php } else { ?>
                    <div class="package-graphic package-icon" data-animation-css>
                        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['icon']))) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['product']->value['icon'],'type'=>"icon",'theme'=>$_smarty_tpl->tpl_vars['theme']->value), 0, true);
?>
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['font-icon']))) {?>
                            <div class="font-icon <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['font-icon'])) && strstr($_smarty_tpl->tpl_vars['product']->value['font-icon'],"fa-")) {?> font-icon-fa<?php }?>">
                                <i class="<?php echo $_smarty_tpl->tpl_vars['product']->value['font-icon'];?>
"></i>
                            </div>
                        <?php }?>   
                    </div>
                <?php }?>
            <?php }?>
            <h3 class="package-title <?php if ($_smarty_tpl->tpl_vars['productType']->value == "condensed") {?> h6<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['product']->value['group']['name'];?>

            </h3>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['group']['description']) {?> 
                <div class="package-body">
                    <div class="package-content <?php if ($_smarty_tpl->tpl_vars['productType']->value == "default" || $_smarty_tpl->tpl_vars['productType']->value == "link") {?> p-lg<?php }?>">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['group']['description'];?>

                    </div>
                </div>
            <?php }?> 
            <div class="package-box">
                <?php if ($_smarty_tpl->tpl_vars['productType']->value == "default") {?>
                    <div class="package-header">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/package/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['productType']->value,'priceValue'=>$_smarty_tpl->tpl_vars['formatedPrice']->value,'montlyBreakdown'=>$_smarty_tpl->tpl_vars['packageMonthlyBreakdown']->value,'cycle'=>$_smarty_tpl->tpl_vars['pricePeriod']->value,'startingFrom'=>true), 0, true);
?> 
                        <div class="package-actions">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="btn btn-primary <?php if ($_smarty_tpl->tpl_vars['productType']->value == "default") {?> btn-lg<?php }?>" data-btn-loader>
                                <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['learnmore'];?>
</span>
                                <div class="loader loader-button hidden" >
                                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                                </div>
                            </a>
                        </div>   
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['productType']->value != "default") {?>
                    <div class="package-actions">
                        <div class="btn btn-link flex-row-reverse <?php if ($_smarty_tpl->tpl_vars['productType']->value != "condensed") {?> btn-lg<?php }?>">
                            <div class="btn-icon">
                                <i class="ls ls-arrow-right"></i>
                            </div>
                            <div class="btn-text">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingat'];?>
 <span class="btn-price"> &nbsp<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formatedPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
 <?php if ((isset($_smarty_tpl->tpl_vars['pricePeriod']->value)) && $_smarty_tpl->tpl_vars['pricePeriod']->value) {
if ($_smarty_tpl->tpl_vars['pricePeriod']->value == "onetime") {?> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];
} else { ?> /<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort'][$_smarty_tpl->tpl_vars['pricePeriod']->value];
}
}?></span>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['productType']->value != "default") {?>
        </a>
        <?php } else { ?>
        </div>
        <?php }?>            
    </div>    
<?php }?>    <?php }
}
