<?php
/* Smarty version 3.1.48, created on 2024-09-23 12:37:47
  from '/var/www/html/templates/lagom2/core/cms/sections/common/package.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f1611bdd3ac2_14084447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afd413df70e3d41f3fba2be9e8e79e2e9fc7724a' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/package.tpl',
      1 => 1720186756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f1611bdd3ac2_14084447 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/package.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/package.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/feature-cols.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['productType']->value == "horizontal") {?> col-12 <?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['col']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?> package-col <?php if ($_smarty_tpl->tpl_vars['featureSlider']->value) {?>content-slider-item<?php }?>">
                <?php $_smarty_tpl->_assignInScope('actionCycle', false);?>
        <?php $_smarty_tpl->_assignInScope('actionDataPeriod', false);?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['type'] == "recurring") {?>  
            <?php if ($_smarty_tpl->tpl_vars['displayBestPrice']->value) {?>
                <?php $_smarty_tpl->_assignInScope('actionCycle', $_smarty_tpl->tpl_vars['product']->value['product']['price']['bestCycle']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('actionCycle', $_smarty_tpl->tpl_vars['firstAvailableCycle']->value);?>
                <?php if (!$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('actionDataPeriod', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']);?>
                <?php }?>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['productType']->value == "graphic") {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_link'])) && $_smarty_tpl->tpl_vars['product']->value['show_link'] == 1 && ((($_smarty_tpl->tpl_vars['product']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage") && $_smarty_tpl->tpl_vars['product']->value['custom_url'] != '') || ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "whmcs-page" && $_smarty_tpl->tpl_vars['product']->value['whmcs_page'] != ''))) {?>
                <a href="<?php if ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage") {
if ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage" || substr($_smarty_tpl->tpl_vars['product']->value['custom_url'],0,1) == "/") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
}
echo $_smarty_tpl->tpl_vars['product']->value['custom_url'];
} elseif ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "whmcs-page") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
if (substr($_smarty_tpl->tpl_vars['product']->value['url'],0,1) != "/") {?>/<?php }
echo $_smarty_tpl->tpl_vars['product']->value['url'];
}?>" class="package is-<?php echo $_smarty_tpl->tpl_vars['productStyle']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productType']->value == "graphic") {?> package-type-graphic package-condensed package-sm<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['custom_classes'];
}
if ($_smarty_tpl->tpl_vars['productCustomClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['productCustomClasses']->value;
}?> <?php if (!$_smarty_tpl->tpl_vars['displayBestPrice']->value && !$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value && $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price'] == "-1") {?> is-disabled<?php }
if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['featured'])) && $_smarty_tpl->tpl_vars['product']->value['product']['featured']) {?> package-featured<?php }?>">
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['productType'] == "marketconnect") {?>
                    <?php $_smarty_tpl->_assignInScope('cartUrl', 'cart/order?');?>
                <?php } else { ?>
                     <?php $_smarty_tpl->_assignInScope('cartUrl', 'cart.php?a=add&');?>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cartUrl']->value;?>
&pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];
if ((isset($_smarty_tpl->tpl_vars['actionCycle']->value)) && $_smarty_tpl->tpl_vars['actionCycle']->value) {?>&billingcycle=<?php echo $_smarty_tpl->tpl_vars['actionCycle']->value;
}?>" class="package is-<?php echo $_smarty_tpl->tpl_vars['productStyle']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productType']->value == "graphic") {?> package-type-graphic package-condensed package-sm<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['custom_classes'];
}
if ($_smarty_tpl->tpl_vars['productCustomClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['productCustomClasses']->value;
}?> <?php if (!$_smarty_tpl->tpl_vars['displayBestPrice']->value && !$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value && $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price'] == "-1") {?> is-disabled<?php }
if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['featured'])) && $_smarty_tpl->tpl_vars['product']->value['product']['featured']) {?> package-featured<?php }?>">
            <?php }?>
        <?php } else { ?>
            <div class="package is-<?php echo $_smarty_tpl->tpl_vars['productStyle']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['productType']->value == "condensed") {?> package-sm<?php } elseif ($_smarty_tpl->tpl_vars['productType']->value == "horizontal") {?> package-horizontal package-sm<?php }?> <?php if ($_smarty_tpl->tpl_vars['productType']->value != "default") {?> package-<?php echo $_smarty_tpl->tpl_vars['productType']->value;
}
if ($_smarty_tpl->tpl_vars['product']->value['custom_classes']) {?> <?php echo $_smarty_tpl->tpl_vars['product']->value['custom_classes'];
}
if ($_smarty_tpl->tpl_vars['productCustomClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['productCustomClasses']->value;
}?> <?php if (!$_smarty_tpl->tpl_vars['displayBestPrice']->value && !$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value && $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price'] == "-1") {?> is-disabled<?php }
if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['featured'])) && $_smarty_tpl->tpl_vars['product']->value['product']['featured']) {?> package-featured<?php }?>">
        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_icon'] && ($_smarty_tpl->tpl_vars['product']->value['icon'] || $_smarty_tpl->tpl_vars['product']->value['font-icon'] || $_smarty_tpl->tpl_vars['product']->value['media'] || $_smarty_tpl->tpl_vars['product']->value['illustration'])) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['illustration']))) {?>
                    <div class="package-graphic package-illustration" data-animation-css>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['product']->value['illustration'],'type'=>"illustration"), 0, true);
?>
                    </div>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['media']))) {?>
                    <div class="package-graphic package-media">
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['product']->value['media'],'type'=>"media",'elementTitle'=>$_smarty_tpl->tpl_vars['product']->value['product']['name']), 0, true);
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

                        <?php if ($_smarty_tpl->tpl_vars['productType']->value != "horizontal") {?>
                <h3 class="package-title">
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product']['name'];?>

                </h3>
            <?php }?>

            <div class="package-box">

                                <div class="package-header">
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['featured'])) && $_smarty_tpl->tpl_vars['product']->value['product']['featured']) {?>
                        <span class="label-corner label-primary"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.featured');?>
</span>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('packageDiscountHidden', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageDiscountPrice', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageDiscountValue', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageDataDiscountPrice', false);?>
                    <?php $_smarty_tpl->_assignInScope('packagePriceValue', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageCycle', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageDataPrice', false);?>
                    <?php $_smarty_tpl->_assignInScope('packageDataPeriod', false);?>
                    <?php $_smarty_tpl->_assignInScope('startingfromtext', false);?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['hasConfigurableOptions'] && $_smarty_tpl->tpl_vars['hide_starting_from']->value == "0") {?>
                        <?php $_smarty_tpl->_assignInScope('startingfromtext', true);?>
                    <?php }?>
     
                    <?php if (!(isset($_smarty_tpl->tpl_vars['productType']->value))) {?>
                        <?php $_smarty_tpl->_assignInScope('productType', false);?>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['type'] == "recurring") {?>
                    <?php if ($_smarty_tpl->tpl_vars['displayBestPrice']->value) {?>
                                                <?php $_smarty_tpl->_assignInScope('bestCycle', $_smarty_tpl->tpl_vars['product']->value['product']['price']['bestCycle']);?> 

                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['bestCycle']->value]['discount']['applied'] === true) {?>
                            <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('packageDiscountPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['bestCycle']->value]['discount']['before']));?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('packageDiscountPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['bestCycle']->value]['discount']['real_before']));?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('packageDiscountValue', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['bestCycle']->value]['discount']['percentage']);?>
                        <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('packagePriceValue', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['bestCycle']->value]['price']));?>
                            <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', true);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('packagePriceValue', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['bestCycle']->value]['real_price']));?>
                            <?php $_smarty_tpl->_assignInScope('packageCycle', $_smarty_tpl->tpl_vars['bestCycle']->value);?>
                        <?php }?>
                    <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'], 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['tab']->value['price'] != "-1") {?>
                                    <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['key']->value);?>
                                    <?php break 1;?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>      
                        
                                                <?php if (!$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('packageDataDiscountPrice', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['discount']['applied'] === true) {?>
                            <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('packageDiscountPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['discount']['before']));?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('packageDiscountPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['discount']['real_before']));?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('packageDiscountValue', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['discount']['percentage']);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('packageDiscountHidden', true);?>    
                        <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price'] == "-1") {?>
                                <?php $_smarty_tpl->_assignInScope('packagePriceValue', $_smarty_tpl->tpl_vars['LANG']->value['unavailable']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('packagePriceValue', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price']));?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('packageMonthlyBreakdown', true);?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['real_price'] == "-1") {?>
                                <?php $_smarty_tpl->_assignInScope('packagePriceValue', $_smarty_tpl->tpl_vars['LANG']->value['unavailable']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('packagePriceValue', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['real_price']));?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('packageCycle', $_smarty_tpl->tpl_vars['firstAvailableCycle']->value);?>
                        <?php }?>

                                                <?php if (!$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('packageDataPrice', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']);?>
                            <?php if (!$_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('packageDataPeriod', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']);?>
                            <?php }?>    
                        <?php }?>
                    <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product']['price']['type'] == "onetime") {?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']['onetime']['discount']['applied'] === true) {?>
                        <?php $_smarty_tpl->_assignInScope('packageDiscountPrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']['onetime']['discount']['before']));?>
                        <?php $_smarty_tpl->_assignInScope('packageDiscountValue', $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']['onetime']['discount']['percentage']);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('packagePriceValue', formatCurrency($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']['onetime']['price']));?>
                    <?php $_smarty_tpl->_assignInScope('packageCycle', "onetime");?>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['product']['price']['type'] == "free") {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['free_product_price']->value)) && $_smarty_tpl->tpl_vars['free_product_price']->value == "enabled") {?>
                        <?php $_smarty_tpl->_assignInScope('packagePriceValue', $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfree']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('packagePriceValue', formatCurrency(0));?>
                    <?php }?>
                <?php }?>   

                                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/package/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('discountPrice'=>$_smarty_tpl->tpl_vars['packageDiscountPrice']->value,'discountValue'=>$_smarty_tpl->tpl_vars['packageDiscountValue']->value,'type'=>$_smarty_tpl->tpl_vars['productType']->value,'priceValue'=>$_smarty_tpl->tpl_vars['packagePriceValue']->value,'montlyBreakdown'=>$_smarty_tpl->tpl_vars['packageMonthlyBreakdown']->value,'cycle'=>$_smarty_tpl->tpl_vars['packageCycle']->value,'dataPrice'=>$_smarty_tpl->tpl_vars['packageDataPrice']->value,'dataPeriod'=>$_smarty_tpl->tpl_vars['packageDataPeriod']->value,'dataDiscountPrice'=>$_smarty_tpl->tpl_vars['packageDataDiscountPrice']->value,'discountHidden'=>$_smarty_tpl->tpl_vars['packageDiscountHidden']->value,'startingFrom'=>$_smarty_tpl->tpl_vars['startingfromtext']->value), 0, true);
?> 

                        
                    <?php if ($_smarty_tpl->tpl_vars['productType']->value == "default" || $_smarty_tpl->tpl_vars['productType']->value == "horizontal") {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/package/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pid'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'cycle'=>$_smarty_tpl->tpl_vars['actionCycle']->value,'dataPeriod'=>$_smarty_tpl->tpl_vars['actionDataPeriod']->value,'classes'=>$_smarty_tpl->tpl_vars['product']->value['custom_classes']), 0, true);
?>
                    <?php }?>
                </div>
    
                                 <?php if (($_smarty_tpl->tpl_vars['productType']->value == "horizontal" || ((isset($_smarty_tpl->tpl_vars['product']->value['custom_description'])) && $_smarty_tpl->tpl_vars['product']->value['custom_description'] != '') || ($_smarty_tpl->tpl_vars['product']->value['product']['description'] || $_smarty_tpl->tpl_vars['product']->value['product']['features'] || $_smarty_tpl->tpl_vars['product']->value['product']['featuresDescription'])) && $_smarty_tpl->tpl_vars['productType']->value != "graphic") {?>
                    <div class="package-body">
                        <?php if ($_smarty_tpl->tpl_vars['productType']->value == "horizontal") {?>
                            <h3 class="package-title">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['product']['name'];?>

                            </h3>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['custom_description'])) && $_smarty_tpl->tpl_vars['product']->value['custom_description'] != '') {?>
                            <div class="package-content">           
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['custom_description'];?>

                            </div>          
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['product']['description'])) && $_smarty_tpl->tpl_vars['product']->value['product']['description']) {?>
                            <div class="package-content">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['product']['description'];?>

                            </div>
                        <?php } elseif (((isset($_smarty_tpl->tpl_vars['product']->value['product']['features'])) && $_smarty_tpl->tpl_vars['product']->value['product']['features']) || ((isset($_smarty_tpl->tpl_vars['product']->value['product']['featuresDescription'])) && $_smarty_tpl->tpl_vars['product']->value['product']['featuresDescription'])) {?>
                            <div class="package-content">
                                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['features'])) && $_smarty_tpl->tpl_vars['product']->value['product']['features'] && is_array($_smarty_tpl->tpl_vars['product']->value['product']['features'])) {?>
                                    <ul class="package-features">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product']['features'], 'value', false, 'feature');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_17_saved = $_smarty_tpl->tpl_vars['value'];
?>
                                            <li id="<?php echo $_smarty_tpl->tpl_vars['idPrefix']->value;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                                            </li>
                                        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['featuresDescription'])) && $_smarty_tpl->tpl_vars['product']->value['product']['featuresDescription']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product']['featuresDescription'];?>

                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                <?php }?> 

                   
                <?php if ($_smarty_tpl->tpl_vars['productType']->value == "condensed" || $_smarty_tpl->tpl_vars['productType']->value == "graphic") {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/package/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pid'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'cycle'=>$_smarty_tpl->tpl_vars['actionCycle']->value,'dataPeriod'=>$_smarty_tpl->tpl_vars['actionDataPeriod']->value,'classes'=>$_smarty_tpl->tpl_vars['product']->value['custom_classes'],'typePackage'=>$_smarty_tpl->tpl_vars['productType']->value), 0, true);
?>
                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['productType']->value == "graphic") {?>
        </a>
        <?php } else { ?>
        </div>                
        <?php }?>
    </div>
<?php }?>    <?php }
}
