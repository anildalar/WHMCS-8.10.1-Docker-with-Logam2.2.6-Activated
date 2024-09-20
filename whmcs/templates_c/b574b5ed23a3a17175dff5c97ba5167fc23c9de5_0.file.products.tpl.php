<?php
/* Smarty version 3.1.48, created on 2024-09-20 03:54:18
  from '/var/www/html/templates/orderforms/lagom2/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ecf1ea2b5ac0_63256763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b574b5ed23a3a17175dff5c97ba5167fc23c9de5' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/products.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-collapsed.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/recommendations-modal.tpl' => 1,
  ),
),false)) {
function content_66ecf1ea2b5ac0_63256763 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="main-grid<?php if ($_smarty_tpl->tpl_vars['mainGrid']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainGrid']->value;
}?>">
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] != '1') {?>
            <div class="main-sidebar hidden-xs hidden-sm hidden-md <?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide') {?> main-sidebar-right <?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?><div class="sidebar-sticky" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>><?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?></div><?php }?>
            </div>
        <?php }?>
        <div class="main-content<?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] != '1') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <div class="alert alert-lagom alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                </div>
            <?php } elseif (!$_smarty_tpl->tpl_vars['productGroup']->value) {?>
                <div class="alert alert-lagom alert-info">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.selectCategory'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
            <?php if (is_array($_smarty_tpl->tpl_vars['products']->value)) {?>
                <div class="section products" id="products">
                    <div class="row row-eq-height row-eq-height-sm">
                        <?php $_smarty_tpl->_assignInScope('counter', 1);?>
                        <?php $_smarty_tpl->_assignInScope('productsCount', count($_smarty_tpl->tpl_vars['products']->value));?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('idPrefix', $_smarty_tpl->tpl_vars['product']->value['bid'] ? (("bundle").($_smarty_tpl->tpl_vars['product']->value['bid'])) : (("product").($_smarty_tpl->tpl_vars['product']->value['pid'])));?>
                            <div class="col<?php if (($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['horizontalPackage'] == 1) || $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['productColumns'] == 1) {?> col-12<?php }?>">
                                <div class="package<?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?> package-featured<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['horizontalPackage'] == 1) {?> package-horizontal<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['idPrefix']->value;?>
">
                                    <div class="package-side package-side-left">
                                        <div class="package-header">   
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?>
                                                <span class="label-corner label-primary"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.featured');?>
</span>
                                            <?php }?>
                                            <h3 class="package-title"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
                                            <div class="package-price">
                                                <div class="price">
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                                        <div class="price-starting-from"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
</div>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>                                                        
                                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['product']->value['displayprice']), 0, true);
?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                                            <div class="price-starting-from"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>
</div>
                                                        <?php }?>
                                                        
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['price_calculation'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['price_calculation'] == "lowest") {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value) {?>
                                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>formatCurrency($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->tabs[$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle]['price']),'priceCycle'=>"monthly",'priceType'=>$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->billing,'priceSetupFee'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']), 0, true);
?>
                                                            <?php } else { ?>       
                                                                <?php $_smarty_tpl->_assignInScope('setupFeePrice', false);?>                                          
                                                                <?php if ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->billing == "recurring") {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "monthly") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('sf', "msetupfee");?>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "quarterly") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('sf', "qsetupfee");?>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "semiannually") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('sf', "ssetupfee");?>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "annually") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('sf', "asetupfee");?>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "biennially") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('sf', "bsetupfee");?>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "triennially") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('sf', "tsetupfee");?>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['rawpricing'][$_smarty_tpl->tpl_vars['sf']->value] !== "0.00" && $_smarty_tpl->tpl_vars['product']->value['pricing']['rawpricing'][$_smarty_tpl->tpl_vars['sf']->value] !== "0,00") {?>
                                                                        <?php $_smarty_tpl->_assignInScope('setupFeePrice', formatCurrency($_smarty_tpl->tpl_vars['product']->value['pricing']['rawpricing'][$_smarty_tpl->tpl_vars['sf']->value]));?>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->billing == "onetime") {?>
                                                                    <?php $_smarty_tpl->_assignInScope('setupFeePrice', $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']);?>
                                                                    <?php }?>   
                                                                <?php }?>
                                                                
                                                                <?php if ($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle == "onetime") {?>
                                                                    <?php $_smarty_tpl->_assignInScope('productPrice', formatCurrency($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->tabs[$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle]['price']));?>
                                                                <?php } else { ?>
                                                                    <?php $_smarty_tpl->_assignInScope('productPrice', formatCurrency($_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->tabs[$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle]['real_price']));?>
                                                                <?php }?>
                                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['productPrice']->value,'priceCycle'=>$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle,'priceType'=>$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->billing,'priceSetupFeeLowest'=>$_smarty_tpl->tpl_vars['setupFeePrice']->value), 0, true);
?>
                                                                
                                                            <?php }?> 
                                                        <?php } else { ?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>
                                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'],'priceCycle'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'],'priceType'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['type']), 0, true);
?>
                                                            <?php } else { ?>
                                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'],'priceCycle'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'],'priceType'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['type'],'priceSetupFee'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']), 0, true);
?>
                                                            <?php }?>    
                                                        <?php }?>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-body">
                                            <div class="package-content">
                                                <?php if (!(isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_description_style'])) || ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_description_style'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_description_style'] == "clear")) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['clearDescription'];?>

                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>
                                                        <ul class="package-features">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['features'], 'value', false, 'feature');
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
                                                                <li id="<?php echo $_smarty_tpl->tpl_vars['idPrefix']->value;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                                                                </li>
                                                            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>

                                                    <?php }?>
                                                <?php }?>    
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="package-footer package-side package-side-right">
                                        <div class="package-price">
                                            <div class="price">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                                    <div class="price-starting-from"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
</div>

                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>                                                        
                                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['product']->value['displayprice']), 0, true);
?>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                                        <div class="price-starting-from"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>
</div>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>
                                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'],'priceCycle'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'],'priceType'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['type']), 0, true);
?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'],'priceCycle'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'],'priceType'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['type'],'priceSetupFee'=>$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']), 0, true);
?>
                                                    <?php }?>                                                
                                                <?php }?>
                                            </div>
                                        </div>
                                        <?php $_smarty_tpl->_assignInScope('bestCycle', false);?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['price_calculation'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['price_calculation'] == "lowest") {?>
                                            <?php if (strstr($_smarty_tpl->tpl_vars['product']->value['productUrl'],"?")) {?>
                                                <?php $_smarty_tpl->_assignInScope('bestCycle', "&billingcycle=".((string)$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle));?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('bestCycle', "?billingcycle=".((string)$_smarty_tpl->tpl_vars['productsPricing']->value[$_smarty_tpl->tpl_vars['product']->value['pid']]->cycle));?>
                                            <?php }?>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['product_restock_notifierAddonIsActive']->value))) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['stockcontrol'] == 1 && $_smarty_tpl->tpl_vars['product']->value['qty'] <= 0) {?>
                                                <a href="index.php?m=product_restock_notifier&_action=notify&_pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];?>
" class="btn btn-lg btn-primary-faded <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['productColumns'] == '4' && $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['hideSidebar'] == '0') {?> no-min-width<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['pending_notification']) {?>disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['product']->value['pending_notification']) {?>disabled="true"<?php }?>>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['pending_notification']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('restock_notifier.be_notified');?>

                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('restock_notifier.on_restock');?>

                                                    <?php }?>
                                                </a>
                                            <?php } else { ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['productUrl'];
if ($_smarty_tpl->tpl_vars['bestCycle']->value) {
echo $_smarty_tpl->tpl_vars['bestCycle']->value;
}?>" class="btn btn-lg btn-primary btn-order-now <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['productColumns'] == '4' && $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['hideSidebar'] == '0') {?> no-min-width<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['stockControlEnabled'] && $_smarty_tpl->tpl_vars['product']->value['qty'] == '0') {?>disabled<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['idPrefix']->value;?>
-order-button" <?php if ($_smarty_tpl->tpl_vars['product']->value['hasRecommendations']) {?> data-has-recommendations="1"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                                </a>
                                            <?php }?>
                                        <?php } else { ?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['productUrl'];
if ($_smarty_tpl->tpl_vars['bestCycle']->value) {
echo $_smarty_tpl->tpl_vars['bestCycle']->value;
}?>" class="btn btn-lg btn-primary btn-order-now <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['productColumns'] == '4' && $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['hideSidebar'] == '0') {?> no-min-width<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['stockControlEnabled'] && $_smarty_tpl->tpl_vars['product']->value['qty'] == '0') {?>disabled<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['idPrefix']->value;?>
-order-button" <?php if ($_smarty_tpl->tpl_vars['product']->value['hasRecommendations']) {?> data-has-recommendations="1"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['stockControlEnabled']) {?>
                                            <div class="package-qty">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['productColumns'] == '2') {?>
                                <?php if ($_smarty_tpl->tpl_vars['counter']->value%2 == 0) {?></div><div class="row row-eq-height row-eq-height-sm"><?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['productColumns'] == '3') {?>
                                <?php if ($_smarty_tpl->tpl_vars['counter']->value%3 == 0) {?></div><div class="row row-eq-height row-eq-height-sm"><?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['products']['config']['productColumns'] == '4') {?>
                                <?php if ($_smarty_tpl->tpl_vars['counter']->value%4 == 0) {?></div><div class="row row-eq-height row-eq-height-sm"><?php }?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['productsCount']->value == '4') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['counter']->value%2 == 0) {?></div><div class="row row-eq-height row-eq-height-sm"><?php }?>
                                <?php }?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>  
            <?php if ($_smarty_tpl->tpl_vars['productGroup']->value) {?>  
                <?php if (count($_smarty_tpl->tpl_vars['productGroup']->value['features']) > 0) {?>
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['includedWithPlans'];?>
</h2>
                        </div>
                        <div class="section-body">
                            <div class="panel panel-form">
                                <div class="panel-body">
                                    <ul class="list-features list-info">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroup']->value['features'], 'features');
$_smarty_tpl->tpl_vars['features']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['features']->value) {
$_smarty_tpl->tpl_vars['features']->do_else = false;
?>
                                            <li><i class="lm lm-check"></i><span class="h6 m-b-0"><?php echo $_smarty_tpl->tpl_vars['features']->value['feature'];?>
<span></li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php }?>    
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/recommendations-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
