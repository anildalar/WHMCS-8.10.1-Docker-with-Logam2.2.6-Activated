<?php
/* Smarty version 3.1.48, created on 2024-09-30 14:57:10
  from '/var/www/html/templates/orderforms/lagom2/configureproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fabc46579d36_56882250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b42d74459e7e519b48787d73b42d5474469f8873' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/configureproduct.tpl',
      1 => 1726063642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/recommendations-modal.tpl' => 1,
  ),
),false)) {
function content_66fabc46579d36_56882250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
>
    var _localLang = {
        'addToCart': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'], ENT_QUOTES, 'UTF-8', true);?>
',
        'addedToCartRemove': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addedToCartRemove'], ENT_QUOTES, 'UTF-8', true);?>
'
    }
    <?php echo '</script'; ?>
>    
    <form id="frmConfigureProduct">
        <input type="hidden" name="configure" value="true" />
        <input type="hidden" name="i" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />
        <div class="main-grid<?php if ($_smarty_tpl->tpl_vars['mainGrid']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainGrid']->value;
}?>">
            <div class="main-content <?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {
echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">
                <div class="section">
                    <div class="alert alert-lagom alert-primary alert-danger hidden" role="alert" id="containerProductValidationErrors">
                        <span class="alert-icon ls ls-exclamation-circle"></span>
                        <div class="alert-body">
                            <h6 class="alert-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</h6>
                            <ul id="containerProductValidationErrorsList"></ul>
                        </div>
                    </div>
                    <div class="section-body">
                        <div class="panel panel-form product-config-info">
                            <div class="panel-body">
                                <h2><?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeProductGroupName'] != "1") {
echo $_smarty_tpl->tpl_vars['productinfo']->value['group_name'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</h2>
                                <div class="product-info">
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_description_style'])) || ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_description_style'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_description_style'] == "clear")) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['productinfo']->value['clearDescription'];?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['productinfo']->value['description'];?>

                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['pricing']->value['type'] == "recurring") {?>
                    <?php $_smarty_tpl->_assignInScope('recurringCount', 0);?> 
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricing']->value['cycles'], 'cl', false, NULL, 'foo', array (
));
$_smarty_tpl->tpl_vars['cl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cl']->value) {
$_smarty_tpl->tpl_vars['cl']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('recurringCount', $_smarty_tpl->tpl_vars['recurringCount']->value+1);?> 
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['pricing']->value['monthly']) {?>
                        <?php $_smarty_tpl->_assignInScope('mincycle', "monthly");?>
                        <?php $_smarty_tpl->_assignInScope('minimalprice', $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['monthly']);?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?>
                        <?php $_smarty_tpl->_assignInScope('mincycle', "quarterly");?>
                        <?php echo smarty_function_math(array('assign'=>"minimalprice",'equation'=>"y/3",'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['quarterly']),$_smarty_tpl);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?>
                        <?php $_smarty_tpl->_assignInScope('mincycle', "semiannually");?>
                        <?php echo smarty_function_math(array('assign'=>"minimalprice",'equation'=>"y/6",'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['semiannually']),$_smarty_tpl);?>
 
                    <?php } elseif ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?>
                        <?php $_smarty_tpl->_assignInScope('mincycle', "annually");?>
                        <?php echo smarty_function_math(array('assign'=>"minimalprice",'equation'=>"y/12",'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['annually']),$_smarty_tpl);?>
 
                    <?php } elseif ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?>
                        <?php $_smarty_tpl->_assignInScope('mincycle', "biennially");?>
                        <?php echo smarty_function_math(array('assign'=>"minimalprice",'equation'=>"y/24",'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['biennially']),$_smarty_tpl);?>
 
                    <?php } elseif ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?>    
                        <?php $_smarty_tpl->_assignInScope('mincycle', "triennially");?>
                        <?php echo smarty_function_math(array('assign'=>"minimalprice",'equation'=>"y/36",'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['triennially']),$_smarty_tpl);?>
 
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['WHMCSCurrency']->value['format'])) && $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['format'] == 4) {?>
                        <?php $_smarty_tpl->_assignInScope('minimalprice', sprintf("%.0f",$_smarty_tpl->tpl_vars['minimalprice']->value));?> 
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['minimalprice']->value != "0.00" && $_smarty_tpl->tpl_vars['minimalprice']->value != "0,00") {?>
                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?>
                            <?php echo smarty_function_math(array('assign'=>"check_discount_quarterly",'equation'=>"100-((y/(x*3))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['quarterly'],'format'=>"%.0f"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('check_discount_quarterly', "0");?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?>
                            <?php echo smarty_function_math(array('assign'=>"check_discount_semiannually",'equation'=>"100-((y/(x*6))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['semiannually'],'format'=>"%.0f"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('check_discount_semiannually', "0");?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?>
                            <?php echo smarty_function_math(array('assign'=>"check_discount_annually",'equation'=>"100-((y/(x*12))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['annually'],'format'=>"%.0f"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('check_discount_annually', "0");?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?>
                            <?php echo smarty_function_math(array('assign'=>"check_discount_biennially",'equation'=>"100-((y/(x*24))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['biennially'],'format'=>"%.0f"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('check_discount_biennially', "0");?>    
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?>
                            <?php echo smarty_function_math(array('assign'=>"check_discount_triennially",'equation'=>"100-((y/(x*36))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['triennially'],'format'=>"%.0f"),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('check_discount_triennially', "0");?>      
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['check_discount_quarterly']->value > 0 || $_smarty_tpl->tpl_vars['check_discount_semiannually']->value > 0 || $_smarty_tpl->tpl_vars['check_discount_annually']->value > 0 || $_smarty_tpl->tpl_vars['check_discount_biennially']->value > 0 || $_smarty_tpl->tpl_vars['check_discount_triennially']->value > 0) {?>
                            <?php $_smarty_tpl->_assignInScope('show_discount', true);?>
                        <?php }?>  
                    <?php }?>         
           
                    <div class="section <?php if ($_smarty_tpl->tpl_vars['recurringCount']->value == 1) {?>hidden<?php }?>" id="sectionCycles">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartchoosecycle'];?>
</h2>
                        </div>
                        <div class="panel-check-group row row-eq-height" data-inputs-container>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value['monthly']) {?>
                                <div class="col-sm-4">
                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "monthly") {?> checked<?php }?>" data-virtual-input >
                                        <div class="check check-cycle">
                                            <label data-update-config data-config-i=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 data-config-val="monthly">
                                                <input class="icheck-control" type="radio" value="monthly" name="billingcycle" <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "monthly") {?> checked<?php }?>>
                                                <div class="check-content">
                                                    <?php $_smarty_tpl->_assignInScope('monthlyArrayLang', array("arabic","turkish"));?>                                                    
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm1month']) && (!strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly']) || in_array($_smarty_tpl->tpl_vars['language']->value,$_smarty_tpl->tpl_vars['monthlyArrayLang']->value))) {?>                                                  
                                                        <h6 class="check-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm1month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm1month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if (($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) {?>
                                                                    <?php $_smarty_tpl->_assignInScope('monthlyPrice', smarty_modifier_replace(explode(' (',$_smarty_tpl->tpl_vars['pricing']->value['monthly']),$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm1month'],''));?>
                                                                    <?php $_smarty_tpl->_assignInScope('monthlyDiscount', explode(', ',$_smarty_tpl->tpl_vars['monthlyPrice']->value[1]));?>
                                                                    <?php $_smarty_tpl->_assignInScope('monthlyOldPrice', explode(': ',$_smarty_tpl->tpl_vars['monthlyDiscount']->value[1]));?>

                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainMonthly', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainMonthly', true);
}?>
                                                                    <?php }?>

                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],'(') && !strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {?>
                                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['monthlyPrice']->value[0],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainMonthly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <p class="check-subtitle"><span class="label label-info label-save label-xs save"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['monthlyDiscount']->value[0],'(','');?>
</span> <span class="cycle-full-price line-through m-t-1x"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['monthlyOldPrice']->value[1],')',''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span></p>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['monthlyPrice']->value[0],"- ",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <div>-</div>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainMonthly', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainMonthly', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['msetupfee'] != "0.00" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['msetupfee'] != "0,00") {?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm1month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," +","/".((string)$_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'])." +");
if ($_smarty_tpl->tpl_vars['freeDomainMonthly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm1month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainMonthly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php }?>
                                                        </h6>
                                                    <?php } else { ?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainMonthly', true);
}?>
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainMonthly', true);
}?>
                                                                <?php }?>
                                                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['monthly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",'');
if ($_smarty_tpl->tpl_vars['freeDomainMonthly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>  
                                                            <?php }?>
                                                        </h6>
                                                    <?php }?>
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) && $_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                        <p class="check-subtitle">-</p>
                                                    <?php }?>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?>
                                <div class="col-sm-4">
                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "quarterly") {?> checked<?php }?>" data-virtual-input >
                                        <div class="check check-cycle">
                                            <label data-update-config data-config-i=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 data-config-val="quarterly">
                                                <input class="icheck-control" type="radio" value="quarterly" name="billingcycle" <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "quarterly") {?> checked<?php }?>>
                                                <div class="check-content">
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm3month'])) {?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm3month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm3month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if (($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) {?>
                                                                    
                                                                    <?php $_smarty_tpl->_assignInScope('quarterlyPrice', smarty_modifier_replace(explode(' (',$_smarty_tpl->tpl_vars['pricing']->value['quarterly']),$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm3month'],''));?>
                                                                    <?php $_smarty_tpl->_assignInScope('quarterlyDiscount', explode(', ',$_smarty_tpl->tpl_vars['quarterlyPrice']->value[1]));?>
                                                                    <?php $_smarty_tpl->_assignInScope('quarterlyOldPrice', explode(': ',$_smarty_tpl->tpl_vars['quarterlyDiscount']->value[1]));?>

                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainQuarterly', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainQuarterly', true);
}?>
                                                                    <?php }?>
                                                               
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],'(') && !strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {?>
                                                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quarterlyPrice']->value[0],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainQuarterly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <p class="check-subtitle"><span class="label label-info label-save label-xs save"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quarterlyDiscount']->value[0],'(','');?>
</span> <span class="cycle-full-price line-through m-t-1x"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['quarterlyOldPrice']->value[1],')',''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span></p>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['quarterlyPrice']->value[0],"- ",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <div>-</div>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainQuarterly', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainQuarterly', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['qsetupfee'] != "0.00" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['qsetupfee'] != "0,00") {?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm3month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," +","/".((string)$_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'])." +");
if ($_smarty_tpl->tpl_vars['freeDomainQuarterly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm3month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainQuarterly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php }?>
                                                        </h6>
                                                    <?php } else { ?>
                                                         <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainQuarterly', true);
}?>
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainQuarterly', true);
}?>
                                                                <?php }?>   
                                                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['quarterly'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",'');
if ($_smarty_tpl->tpl_vars['freeDomainQuarterly']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>  
                                                            <?php }?>
                                                        </h6>
                                                    <?php }?>
                                                   
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>                                                       
                                                        <?php if ($_smarty_tpl->tpl_vars['mincycle']->value == "quarterly" && $_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                            <p class="check-subtitle"> 
                                                                -
                                                            </p>
                                                        <?php } else { ?>    
                                                            <?php if ($_smarty_tpl->tpl_vars['minimalprice']->value != "0.00" && $_smarty_tpl->tpl_vars['minimalprice']->value != "0,00") {?>                                                    
                                                                <?php echo smarty_function_math(array('assign'=>"price_save",'equation'=>"100-((y/(x*3))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['quarterly'],'format'=>"%.0f"),$_smarty_tpl);?>

                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['price_save']->value > 0) {?>
                                                                <p class="check-subtitle"> 
                                                                    <span class="label label-info label-save label-xs save">
                                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.price_save');?>
 <?php echo $_smarty_tpl->tpl_vars['price_save']->value;?>
%
                                                                    </span>
                                                                    <?php echo smarty_function_math(array('assign'=>"cycle_full_price",'equation'=>"x*3",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'format'=>"%.2f"),$_smarty_tpl);?>

                                                                    <span class="cycle-full-price line-through m-t-1x">
                                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo formatCurrency($_smarty_tpl->tpl_vars['minimalprice']->value);
} else {
echo formatCurrency($_smarty_tpl->tpl_vars['cycle_full_price']->value);
}?></span>
                                                                    </span>
                                                                </p>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                                <p class="check-subtitle"> 
                                                                    -
                                                                </p>
                                                            <?php }?> 
                                                        <?php }?>    
                                                    <?php }?>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?>
                                <div class="col-sm-4">
                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "semiannually") {?> checked<?php }?>" data-virtual-input >
                                        <div class="check check-cycle">
                                            <label data-update-config data-config-i=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 data-config-val="semiannually">
                                                <input class="icheck-control" type="radio" name="billingcycle" value="semiannually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "semiannually") {?> checked<?php }?>>
                                                <div class="check-content">
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm6month'])) {?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm6month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm6month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if (($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) {?>
                                                                    <?php $_smarty_tpl->_assignInScope('semiannuallyPrice', smarty_modifier_replace(explode(' (',$_smarty_tpl->tpl_vars['pricing']->value['semiannually']),$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm6month'],''));?>
                                                                    <?php $_smarty_tpl->_assignInScope('semiannuallyDiscount', explode(', ',$_smarty_tpl->tpl_vars['semiannuallyPrice']->value[1]));?>
                                                                    <?php $_smarty_tpl->_assignInScope('semiannuallyOldPrice', explode(': ',$_smarty_tpl->tpl_vars['semiannuallyDiscount']->value[1]));?>
                                                                    
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainSemiAnnually', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainSemiAnnually', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],'(') && !strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {?>
                                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['semiannuallyPrice']->value[0],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainSemiAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <p class="check-subtitle"><span class="label label-info label-save label-xs save"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['semiannuallyDiscount']->value[0],'(','');?>
</span> <span class="cycle-full-price line-through m-t-1x"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['semiannuallyOldPrice']->value[1],")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span></p>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['semiannuallyPrice']->value[0],"- ",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <div>-</div>
                                                                    <?php }?>

                                                                <?php } else { ?>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainSemiAnnually', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainSemiannually', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['ssetupfee'] != "0.00" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['ssetupfee'] != "0,00") {?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm6month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," +","/".((string)$_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'])." +");
if ($_smarty_tpl->tpl_vars['freeDomainSemiannually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm6month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainSemiannually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php }?>                                                               
                                                                <?php }?>
                                                            <?php }?> 
                                                        </h6>
                                                    <?php } else { ?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainSemiAnnually', true);
}?>
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainSemiannually', true);
}?>
                                                                <?php }?>
                                                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['semiannually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",'');
if ($_smarty_tpl->tpl_vars['freeDomainSemiannually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>  
                                                            <?php }?>
                                                        </h6>
                                                    <?php }?>
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>                                                                                                             
                                                        <?php if ($_smarty_tpl->tpl_vars['mincycle']->value == "semiannually" && $_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                            <p class="check-subtitle"> 
                                                                -
                                                            </p>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['minimalprice']->value != "0.00" && $_smarty_tpl->tpl_vars['minimalprice']->value != "0,00") {?>     
                                                                <?php echo smarty_function_math(array('assign'=>"price_save",'equation'=>"100-((y/(x*6))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['semiannually'],'format'=>"%.0f"),$_smarty_tpl);?>

                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['price_save']->value > 0) {?>
                                                                <p class="check-subtitle"> 
                                                                    <span class="label label-info label-save label-xs save">
                                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.price_save');?>
 <?php echo $_smarty_tpl->tpl_vars['price_save']->value;?>
%
                                                                    </span>
                                                                    <?php echo smarty_function_math(array('assign'=>"cycle_full_price",'equation'=>"x*6",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'format'=>"%.2f"),$_smarty_tpl);?>

                                                                    <span class="cycle-full-price line-through m-t-1x">
                                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo formatCurrency($_smarty_tpl->tpl_vars['minimalprice']->value);
} else {
echo formatCurrency($_smarty_tpl->tpl_vars['cycle_full_price']->value);
}?></span>
                                                                    </span>
                                                                </p>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                                <p class="check-subtitle"> 
                                                                    -
                                                                </p>
                                                            <?php }?>
                                                        <?php }?>    
                                                        
                                                    <?php }?>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?>
                                <div class="col-sm-4">
                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "annually") {?> checked<?php }?>" data-virtual-input >
                                        <div class="check check-cycle">
                                            <label data-update-config data-config-i=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 data-config-val="annually">
                                                <input class="icheck-control" type="radio" name="billingcycle" value="annually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "annually") {?> checked<?php }?>>
                                                <div class="check-content">
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm12month'])) {?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm12month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm12month'],''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if (($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) {?>
                                                                    <?php $_smarty_tpl->_assignInScope('annuallyPrice', smarty_modifier_replace(explode(' (',$_smarty_tpl->tpl_vars['pricing']->value['annually']),$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm12month'],''));?>
                                                                    <?php $_smarty_tpl->_assignInScope('annuallyDiscount', explode(', ',$_smarty_tpl->tpl_vars['annuallyPrice']->value[1]));?>
                                                                    <?php $_smarty_tpl->_assignInScope('annuallyOldPrice', explode(': ',$_smarty_tpl->tpl_vars['annuallyDiscount']->value[1]));?>

                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainAnnually', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainAnnually', true);
}?>
                                                                    <?php }?>

                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['annually'],'(') && !strstr($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {?>
                                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['annuallyPrice']->value[0],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}?> <?php if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <p class="check-subtitle"><span class="label label-info label-save label-xs save"><?php echo $_smarty_tpl->tpl_vars['annuallyDiscount']->value[0];?>
</span> <span class="cycle-full-price line-through m-t-1x"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['annuallyOldPrice']->value[1],')',''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span></p>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['annuallyPrice']->value[0],"- ",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];?>
 <?php if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <div>-</div>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainAnnually', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainAnnually', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['asetupfee'] != "0.00" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['asetupfee'] != "0,00") {?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm12month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," +","/".((string)$_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'])." +");
if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm12month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php }?> 
                                                                <?php }?>
                                                            <?php }?>   
                                                        </h6>
                                                    <?php } else { ?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>                                                          
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainAnnually', true);
}?>
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainAnnually', true);
}?>
                                                                <?php }?>
                                                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['annually'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",'');
if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                            <?php }?>  
                                                        </h6>
                                                    <?php }?>
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>                                                                                                         
                                                        <?php if ($_smarty_tpl->tpl_vars['mincycle']->value == "annually" && $_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                            <p class="check-subtitle">    
                                                                -
                                                            </p>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['minimalprice']->value != "0.00" && $_smarty_tpl->tpl_vars['minimalprice']->value != "0,00") {?>     
                                                                <?php echo smarty_function_math(array('assign'=>"price_save",'equation'=>"100-((y/(x*12))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['annually'],'format'=>"%.0f"),$_smarty_tpl);?>

                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['price_save']->value > 0) {?>
                                                                <p class="check-subtitle"> 
                                                                    <span class="label label-info label-save label-xs save">
                                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.price_save');?>
 <?php echo $_smarty_tpl->tpl_vars['price_save']->value;?>
%
                                                                    </span>
                                                                    <?php echo smarty_function_math(array('assign'=>"cycle_full_price",'equation'=>"x*12",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'format'=>"%.2f"),$_smarty_tpl);?>

                                                                    <span class="cycle-full-price line-through m-t-1x">
                                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo formatCurrency($_smarty_tpl->tpl_vars['minimalprice']->value);
} else {
echo formatCurrency($_smarty_tpl->tpl_vars['cycle_full_price']->value);
}?></span>
                                                                    </span>
                                                                </p>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                                <p class="check-subtitle">    
                                                                    -
                                                                </p>
                                                            <?php }?>
                                                        <?php }?>     
                                                    <?php }?>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?>
                                <div class="col-sm-4">
                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "biennially") {?> checked<?php }?>" data-virtual-input >
                                        <div class="check check-cycle">
                                            <label data-update-config data-config-i=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 data-config-val="biennially">
                                                <input class="icheck-control" type="radio" name="billingcycle" value="biennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "biennially") {?> checked<?php }?>>
                                                <div class="check-content">
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm24month'])) {?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm24month'],''),"-",''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm24month'],''),"-",''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if (($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) {?>
                                                                    <?php $_smarty_tpl->_assignInScope('bienniallyPrice', smarty_modifier_replace(explode(' (',$_smarty_tpl->tpl_vars['pricing']->value['biennially']),$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm24month'],''));?>
                                                                    <?php $_smarty_tpl->_assignInScope('bienniallyDiscount', explode(', ',$_smarty_tpl->tpl_vars['bienniallyPrice']->value[1]));?>
                                                                    <?php $_smarty_tpl->_assignInScope('bienniallyOldPrice', explode(': ',$_smarty_tpl->tpl_vars['bienniallyDiscount']->value[1]));?>

                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainBiennially', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainBiennially', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],'(') && !strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {?>
                                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bienniallyPrice']->value[0],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainBiennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <p class="check-subtitle"><span class="label label-info label-save label-xs save"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['bienniallyDiscount']->value[0],'(','');?>
</span> <span class="cycle-full-price line-through m-t-1x"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['bienniallyOldPrice']->value[1],')',''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span></p>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['bienniallyPrice']->value[0],"- ",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];?>
 <?php if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <div>-</div>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainBiennially', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainBiennially', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['bsetupfee'] != "0.00" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['bsetupfee'] != "0,00") {?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm24month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," +","/".((string)$_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'])." +");
if ($_smarty_tpl->tpl_vars['freeDomainBiennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm24month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainBiennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php }?> 
                                                                <?php }?>    
                                                            <?php }?> 
                                                        </h6>
                                                    <?php } else { ?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainBiennially', true);
}?>
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainBiennially', true);
}?>
                                                                <?php }?>
                                                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['biennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",'');
if ($_smarty_tpl->tpl_vars['freeDomainBiennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                            <?php }?> 
                                                        </h6>
                                                    <?php }?>
                                                    
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>                                                
                                                        <?php if ($_smarty_tpl->tpl_vars['mincycle']->value == "biennially" && $_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                            <p class="check-subtitle">   
                                                                -
                                                            </p>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['minimalprice']->value != "0.00" && $_smarty_tpl->tpl_vars['minimalprice']->value != "0,00") {?>     
                                                                <?php echo smarty_function_math(array('assign'=>"price_save",'equation'=>"100-((y/(x*24))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['biennially'],'format'=>"%.0f"),$_smarty_tpl);?>

                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['price_save']->value > 0) {?>
                                                                <p class="check-subtitle"> 
                                                                    <span class="label label-info label-save label-xs save">
                                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.price_save');?>
 <?php echo $_smarty_tpl->tpl_vars['price_save']->value;?>
%
                                                                    </span>
                                                                    <?php echo smarty_function_math(array('assign'=>"cycle_full_price",'equation'=>"x*24",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'format'=>"%.2f"),$_smarty_tpl);?>

                                                                    <span class="cycle-full-price line-through m-t-1x">
                                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo formatCurrency($_smarty_tpl->tpl_vars['minimalprice']->value);
} else {
echo formatCurrency($_smarty_tpl->tpl_vars['cycle_full_price']->value);
}?></span>
                                                                    </span>
                                                                </p>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                                <p class="check-subtitle">   
                                                                    -
                                                                </p>
                                                            <?php }?>
                                                        <?php }?>      
                                                    <?php }?>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?>
                                <div class="col-sm-4">
                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "triennially") {?> checked<?php }?>" data-virtual-input >
                                        <div class="check check-cycle">
                                            <label data-update-config data-config-i=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 data-config-val="triennially">
                                                <input class="icheck-control" type="radio" name="billingcycle" value="triennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "triennially") {?> checked<?php }?>>
                                                <div class="check-content">
                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm36month'])) {?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>
 
                                                            <br> 
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm36month'],''),"-",''),"-",''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm36month'],''),"-",''),"-",''),"-",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if (($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value)) {?>
                                                                    <?php $_smarty_tpl->_assignInScope('trienniallyPrice', smarty_modifier_replace(explode(' (',$_smarty_tpl->tpl_vars['pricing']->value['triennially']),$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm36month'],''));?>                                                                  
                                                                    <?php $_smarty_tpl->_assignInScope('trienniallyDiscount', explode(', ',$_smarty_tpl->tpl_vars['trienniallyPrice']->value[1]));?>
                                                                    <?php $_smarty_tpl->_assignInScope('trienniallyOldPrice', explode(': ',$_smarty_tpl->tpl_vars['trienniallyDiscount']->value[1]));?>
                                                                    
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainTriennially', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['cycles']['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainTriennially', true);
}?>
                                                                    <?php }?>

                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],'(') && !strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {?> 
                                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['trienniallyPrice']->value[0],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainTriennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <p class="check-subtitle"><span class="label label-info label-save label-xs save"><?php echo $_smarty_tpl->tpl_vars['trienniallyDiscount']->value[0];?>
</span> <span class="cycle-full-price line-through m-t-1x"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['trienniallyOldPrice']->value[1],")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
</span></p>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['trienniallyPrice']->value[0],"- ",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>
/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];?>
 <?php if ($_smarty_tpl->tpl_vars['freeDomainAnnually']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                        <br>
                                                                        <div>-</div>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainTriennially', true);
}?>
                                                                    <?php } else { ?>
                                                                        <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainTriennially', true);
}?>
                                                                    <?php }?>
                                                                    
                                                                    <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['tsetupfee'] != "0.00" && $_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['tsetupfee'] != "0,00") {?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm36month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," +","/".((string)$_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'])." +");
if ($_smarty_tpl->tpl_vars['freeDomainTriennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php } else { ?>
                                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymentterm36month'],''),"-",'')," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
}
if ($_smarty_tpl->tpl_vars['freeDomainTriennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                                    <?php }?> 
                                                                <?php }?>
                                                            <?php }?>   
                                                        </h6>
                                                    <?php } else { ?>
                                                        <h6 class="check-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>
 
                                                            <br>
                                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                            <?php } else { ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['product_domain_free_price'] == 'true') {?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']) && $_smarty_tpl->tpl_vars['freeDomainAssignedToProduct']->value) {
$_smarty_tpl->_assignInScope('freeDomainTriennially', true);
}?>
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'])) {
$_smarty_tpl->_assignInScope('freeDomainTriennially', true);
}?>
                                                                <?php }?>
                                                                <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['pricing']->value['triennially'],$_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']))," (".((string)$_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly']).")",'');
if ($_smarty_tpl->tpl_vars['freeDomainTriennially']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainonly'];?>
)<?php }?>
                                                            <?php }?> 
                                                        </h6>
                                                    <?php }?>
                                                    
                                                    <?php if (!(isset($_smarty_tpl->tpl_vars['DiscountCenterAddonIsActive']->value))) {?>                                                                                                               
                                                        <?php if ($_smarty_tpl->tpl_vars['mincycle']->value == "triennially" && $_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                            <p class="check-subtitle">
                                                                -
                                                            </p>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['minimalprice']->value != "0.00" && $_smarty_tpl->tpl_vars['minimalprice']->value != "0,00") {?>     
                                                                <?php echo smarty_function_math(array('assign'=>"price_save",'equation'=>"100-((y/(x*36))*100)",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'y'=>$_smarty_tpl->tpl_vars['pricing']->value['rawpricing']['triennially'],'format'=>"%.0f"),$_smarty_tpl);?>
                                                            
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['price_save']->value > 0) {?>
                                                                <p class="check-subtitle"> 
                                                                    <span class="label label-info label-save label-xs save">
                                                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.price_save');?>
 <?php echo $_smarty_tpl->tpl_vars['price_save']->value;?>
%
                                                                    </span>
                                                                    <?php echo smarty_function_math(array('assign'=>"cycle_full_price",'equation'=>"x*36",'x'=>$_smarty_tpl->tpl_vars['minimalprice']->value,'format'=>"%.2f"),$_smarty_tpl);?>

                                                                    <span class="cycle-full-price line-through m-t-1x">
                                                                        <?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo formatCurrency($_smarty_tpl->tpl_vars['minimalprice']->value);
} else {
echo formatCurrency($_smarty_tpl->tpl_vars['cycle_full_price']->value);
}?></span>
                                                                    </span>
                                                                </p>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['show_discount']->value) {?>
                                                                <p class="check-subtitle">
                                                                    -
                                                                </p>
                                                            <?php }?>
                                                        <?php }?>                                                          
                                                    <?php }?>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>

                <?php if (count($_smarty_tpl->tpl_vars['metrics']->value) > 0) {?>
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['title'];?>
</h2>
                            <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['configureDesiredOptions'];?>
</p>
                        </div>
                        <div class="section-body">
                            <ul class="list-group list-group-bordered">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metrics']->value, 'metric');
$_smarty_tpl->tpl_vars['metric']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['metric']->value) {
$_smarty_tpl->tpl_vars['metric']->do_else = false;
?>
                                    <li class="list-group-item d-flex align-center space-between">
                                        <?php echo $_smarty_tpl->tpl_vars['metric']->value['displayName'];?>

                                        -
                                        <?php if (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) > 1) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['startingFrom'];?>
 <?php echo $_smarty_tpl->tpl_vars['metric']->value['lowestPrice'];?>
 / <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?>
                                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalMetricPricing-<?php echo $_smarty_tpl->tpl_vars['metric']->value['systemName'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['viewPricing'];?>

                                            </button>
                                        <?php } elseif (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) == 1) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['metric']->value['lowestPrice'];?>
 / <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?>
                                            <?php if ($_smarty_tpl->tpl_vars['metric']->value['includedQuantity'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['metric']->value['includedQuantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['includedNotCounted'];?>
)<?php }?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/usagebillingpricing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    </div>    
                <?php }?>
                <div class="section message message-no-data hidden position-relative" id="lagomPageLoader">
                    <div class="loader">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                <div class="section">
                    <div class="product-configurable-options" id="productConfigurableOptions">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption', false, 'num');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 1) {?>
                                <div class="section">
                                    <div class="section-header">
                                        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</h2>
                                        <?php if ($_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']]) {?>
                                            <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']];?>
</p>
                                        <?php }?>
                                    </div>
                                    <div class="section-body">
                                        <div class="panel panel-form">
                                            <div class="panel-body d-flex flex-nowrap align-items-center">
                                                <select name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
$_smarty_tpl->tpl_vars['options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> selected="selected"<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

                                                        </option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 2) {?>
                                <div class="section">
                                   <div class="section-header">
                                        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</h2>
                                        <?php if ($_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']]) {?>
                                            <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']];?>
</p>
                                        <?php }?>
                                    </div>
                                    <div class="section-body">
                                        <div class="panel-check-group row row-eq-height" data-inputs-container>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
$_smarty_tpl->tpl_vars['options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->do_else = false;
?>
                                                <div class="col-sm-4">
                                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?>checked<?php }?>" data-virtual-input>
                                                        <div class="check">
                                                            <label>
                                                                <input type="radio" class="icheck-control" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> checked="checked"<?php }?> />
                                                                <div class="check-content">
                                                                    <h6 class="check-title">
                                                                        <?php if ($_smarty_tpl->tpl_vars['options']->value['nameonly'] || $_smarty_tpl->tpl_vars['options']->value['nameonly'] == "0") {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['options']->value['nameonly'];?>

                                                                        <?php } else { ?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.enable');?>

                                                                        <?php }?>
                                                                    </h6>            
                                                                    <p class="check-subtitle <?php if ($_smarty_tpl->tpl_vars['options']->value['fullprice'] == null && ($_smarty_tpl->tpl_vars['options']->value['setup'] == '0.00' || $_smarty_tpl->tpl_vars['options']->value['setup'] == null)) {?>hidden<?php }?>">                                                        
                                                                        <?php if (($_smarty_tpl->tpl_vars['options']->value['fullprice'] == '0.00' || $_smarty_tpl->tpl_vars['options']->value['fullprice'] == null) && $_smarty_tpl->tpl_vars['options']->value['setup'] != '0.00') {?>
                                                                        <?php } else { ?>
                                                                            <?php if (($_smarty_tpl->tpl_vars['options']->value['fullprice'] == "0.00" || $_smarty_tpl->tpl_vars['options']->value['fullprice'] == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                                            <?php } else { ?>    
                                                                                <?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];
echo sprintf("%.2f",$_smarty_tpl->tpl_vars['options']->value['recurring']);
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currency']->value['suffix'],$_smarty_tpl->tpl_vars['currency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['currency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['options']->value['setup'] != '0.00' && $_smarty_tpl->tpl_vars['options']->value['setup'] != null) {?> + <?php }
if ($_smarty_tpl->tpl_vars['options']->value['recurring'] != "0.00" && $_smarty_tpl->tpl_vars['options']->value['recurring'] != "0,00" && $_smarty_tpl->tpl_vars['options']->value['recurring'] != "0") {?><span class="co-cycle">/<?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort'][$_smarty_tpl->tpl_vars['billingcycle']->value];
}?></span><?php }?>
                                                                            <?php }?>    
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['options']->value['setup'] != '0.00' && $_smarty_tpl->tpl_vars['options']->value['setup'] != null) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['options']->value['setup'];
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currency']->value['suffix'],$_smarty_tpl->tpl_vars['currency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['currency']->value['suffix']));?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>

                                                                        <?php }?>
                                                                    </p>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>      
                                                </div>                               
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {?>
                                <div class="section">
                                    <div class="section-header">
                                        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</h2>
                                        <?php if ($_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']]) {?>
                                            <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']];?>
</p>
                                        <?php }?>
                                    </div>
                                    <div class="section-body">
                                        <div class="panel-check-group row row-eq-height" data-inputs-container>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
$_smarty_tpl->tpl_vars['options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->do_else = false;
?>
                                                <div class="col-sm-4">
                                                    <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?> checked<?php }?>" data-virtual-input>
                                                        <div class="check">
                                                            <label>
                                                                <input class="icheck-control" type="checkbox" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?> checked<?php }?> />
                                                                <div class="check-content">
                                                                    <h6 class="check-title">
                                                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['nameonly'] || $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['nameonly'] == "0") {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['nameonly'];?>

                                                                        <?php } else { ?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.enable');?>

                                                                        <?php }?>
                                                                    </h6>
                                                                    <p class="check-subtitle">
                                                                        <?php if (($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['recurring'] == "0.00" || $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['recurring'] == "0,00") && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                                                        <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['recurring'] != "0.00") {?>                                                                 
                                                                            <?php echo $_smarty_tpl->tpl_vars['currency']->value['prefix'];
echo sprintf("%.2f",$_smarty_tpl->tpl_vars['configoption']->value['options'][0]['recurring']);
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currency']->value['suffix'],$_smarty_tpl->tpl_vars['currency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['currency']->value['suffix']));
if ($_smarty_tpl->tpl_vars['options']->value['options'][0]['recurring'] != "0.00" && $_smarty_tpl->tpl_vars['options']->value['options'][0]['recurring'] != "0,00" && $_smarty_tpl->tpl_vars['options']->value['options'][0]['recurring'] != "0") {?><span class="co-cycle">/<?php if ($_smarty_tpl->tpl_vars['display_billing_monthly_price']->value == "on") {
echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort'][$_smarty_tpl->tpl_vars['billingcycle']->value];
}?></span><?php }?>
                                                                        <?php } else { ?>
                                                                            -     
                                                                        <?php }?>
                                                                    </p>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>      
                                                </div>                               
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>                               
                            <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {?>
                                <div class="section">
                                    <div class="section-header">
                                        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</h2>
                                        <?php if ($_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']]) {?>
                                            <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['optionsdescription']->value[$_smarty_tpl->tpl_vars['configoption']->value['id']];?>
</p>
                                        <?php }?>
                                    </div>
                                    <div class="section-body">
                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['qtymaximum']) {?>
                                            <div class="panel panel-form panel-range-slider">
                                                <div class="panel-body">
                                                    <div>
                                                        <?php if (!$_smarty_tpl->tpl_vars['rangesliderincluded']->value) {?>
                                                            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/ion.rangeSlider.min.js"><?php echo '</script'; ?>
>
                                                            <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.css" rel="stylesheet">
                                                            <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.skinModern.css" rel="stylesheet">
                                                            <?php $_smarty_tpl->_assignInScope('rangesliderincluded', true);?>
                                                        <?php }?>
                                                        <input type="text" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control" />
                                                        <?php echo '<script'; ?>
>
                                                            var sliderTimeoutId = null;
                                                            var sliderRangeDifference = <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
 - <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
;
                                                            // The largest size that looks nice on most screens.
                                                            var sliderStepThreshold = 25;
                                                            // Check if there are too many to display individually.
                                                            var setLargerMarkers = sliderRangeDifference > sliderStepThreshold;

                                                            jQuery("#inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
").ionRangeSlider({
                                                                min: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
,
                                                                max: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
,
                                                                grid: true,
                                                                grid_snap: setLargerMarkers ? false : true,
                                                                onChange: function() {
                                                                    if (sliderTimeoutId) {
                                                                        clearTimeout(sliderTimeoutId);
                                                                    }

                                                                    sliderTimeoutId = setTimeout(function() {
                                                                        sliderTimeoutId = null;
                                                                        recalctotals();
                                                                    }, 250);
                                                                }
                                                            });
                                                        <?php echo '</script'; ?>
>
                                                    </div>
                                                </div>    
                                            </div>    
                                        <?php } else { ?>
                                            <div class="panel panel-form">
                                                <div class="panel-body">
                                                    <div class="input-group">
                                                        <input type="number" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" min="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
" onchange="recalctotals()" onkeyup="recalctotals()" class="form-control form-control-qty" />
                                                        <span class="input-group-addon">
                                                            x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>    
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_password_fields'] != "displayed") {?>
                    <?php $_smarty_tpl->_assignInScope('ns_groups', explode(",",$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_password_fields']));?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['productinfo']->value['gid'],$_smarty_tpl->tpl_vars['ns_groups']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('hideServerFields', true);?>
                    <?php }?>
                <?php }?>    
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_nameserver_fields'] != "displayed") {?>
                    <?php $_smarty_tpl->_assignInScope('ns_groups', explode(",",$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_nameserver_fields']));?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['productinfo']->value['gid'],$_smarty_tpl->tpl_vars['ns_groups']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('hideNSFields', true);?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type'] == "server") {?>
                    <div class="section <?php if ($_smarty_tpl->tpl_vars['hideNSFields']->value && $_smarty_tpl->tpl_vars['hideServerFields']->value) {?>hidden<?php }?>">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigserver'];?>
</h2>
                        </div>    
                        <div class="panel panel-form">
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['hideServerFields']->value) {?>    
                                    <div class="row hidden">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputHostname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
</label>
                                                <input type="text" name="hostname" class="form-control" id="inputHostname" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['hostname'];?>
" placeholder="servername.example.com">
                                            </div>
                                        </div>
                                        <?php ob_start();
echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['companyname']->value, 'UTF-8'),' ','');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('hostname_prefix', ".".$_prefixVariable1);?>
                                        <?php $_smarty_tpl->_assignInScope('hostname_interfix', 20);?>
                                        <?php $_smarty_tpl->_assignInScope('hostname_suffix', ".com");?>

                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_prefix'] || $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_prefix'] == '') {?>
                                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_prefix'] == '') {?>
                                                <?php $_smarty_tpl->_assignInScope('hostname_prefix', ((string)$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_prefix']));?>   
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('hostname_prefix', ".".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_prefix']));?>   
                                            <?php }?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_interfix_length']) {?>
                                            <?php $_smarty_tpl->_assignInScope('hostname_interfix', $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_interfix_length']);?>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_suffix'] || $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_suffix'] == '') {?>
                                            <?php $_smarty_tpl->_assignInScope('hostname_suffix', $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_suffix']);?>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_chars']))) {?>
                                            <?php $_smarty_tpl->_assignInScope('custom_hostname_chars', explode(",",$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_chars']));?>
                                        <?php }?>

                                        <?php $_smarty_tpl->_assignInScope('hostnameUppercaseChars', "ABCDEFGHIJKLMNOPQRSTUVWXYZ");?>
                                        <?php $_smarty_tpl->_assignInScope('hostnameLowercaseChars', "abcdefghijklmnopqrstuvwxyz");?>
                                        <?php $_smarty_tpl->_assignInScope('hostnameNumberChars', "0123456789");?>
                                        <?php $_smarty_tpl->_assignInScope('hostnameChars', '');?>
                                        <?php if (!(isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_custom_hostname'])) || $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_custom_hostname'] == "0" || !(isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['custom_hostname_chars'])) || (is_array($_smarty_tpl->tpl_vars['custom_hostname_chars']->value) && (in_array("all",$_smarty_tpl->tpl_vars['custom_hostname_chars']->value) || count($_smarty_tpl->tpl_vars['custom_hostname_chars']->value) == 3))) {?>
                                            <?php $_smarty_tpl->_assignInScope('hostnameChars', ((string)$_smarty_tpl->tpl_vars['hostnameUppercaseChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameLowercaseChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameNumberChars']->value));?>
                                        <?php } elseif ((is_array($_smarty_tpl->tpl_vars['custom_hostname_chars']->value))) {?>
                                            
                                            <?php if (in_array("uppercase",$_smarty_tpl->tpl_vars['custom_hostname_chars']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('hostnameChars', ((string)$_smarty_tpl->tpl_vars['hostnameChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameUppercaseChars']->value));?>
                                            <?php }?>
                                            <?php if (in_array("lowersace",$_smarty_tpl->tpl_vars['custom_hostname_chars']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('hostnameChars', ((string)$_smarty_tpl->tpl_vars['hostnameChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameLowercaseChars']->value));?>
                                            <?php }?>
                                            <?php if (in_array("numbers",$_smarty_tpl->tpl_vars['custom_hostname_chars']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('hostnameChars', ((string)$_smarty_tpl->tpl_vars['hostnameChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameNumberChars']->value));?>
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('hostnameChars', ((string)$_smarty_tpl->tpl_vars['hostnameUppercaseChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameLowercaseChars']->value).((string)$_smarty_tpl->tpl_vars['hostnameNumberChars']->value));?>   
                                        <?php }?>

                                        
                                            <?php echo '<script'; ?>
>
                                                function makeid(length) {
                                                    var result = '';
                                                    var characters = '<?php echo $_smarty_tpl->tpl_vars['hostnameChars']->value;?>
';
                                                    var charactersLength = characters.length;
                                                    for (var i = 0; i < length; i++) {
                                                        result += characters.charAt(Math.floor(Math.random() * charactersLength));
                                                    }
                                                    return result;
                                                }
                                                function generatePass(pLength){
                                                    var keyListAlpha="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz",
                                                            keyListInt="123456789",
                                                            keyListSpec="@#$%^&*-+=?",
                                                            password='';
                                                    var len = Math.ceil(pLength/2);
                                                    len = len - 1;
                                                    var lenSpec = pLength-2*len;
                                                    for (i=0;i<len;i++) {
                                                        password+=keyListAlpha.charAt(Math.floor(Math.random()*keyListAlpha.length));
                                                        password+=keyListInt.charAt(Math.floor(Math.random()*keyListInt.length));
                                                    }
                                                    for (i=0;i<lenSpec;i++)
                                                        password+=keyListSpec.charAt(Math.floor(Math.random()*keyListSpec.length));
                                                    password=password.split('').sort(function(){return 0.5-Math.random()}).join('');
                                                    return password;
                                                }           
                                                $(document).ready(function() {
                                                    $('#inputHostname').val('' + makeid(<?php echo $_smarty_tpl->tpl_vars['hostname_interfix']->value;?>
) + '<?php echo $_smarty_tpl->tpl_vars['hostname_prefix']->value;
echo $_smarty_tpl->tpl_vars['hostname_suffix']->value;?>
')
                                                });
                                                $(document).ready(function() {
                                                    $('#inputRootpw').val(generatePass(14));
                                                });
                                            <?php echo '</script'; ?>
>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputRootpw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
</label>
                                                <input type="text" name="rootpw" class="form-control" id="inputRootpw" value="N/A">
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputHostname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
</label>
                                                <input type="text" name="hostname" class="form-control" id="inputHostname" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['hostname'];?>
" placeholder=<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.servername_example');?>
>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_pw_strength'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_pw_strength'] == "enabled") {?>
                                                <div class="form-group has-feedback">
                                                    <div class="password-content password-content-top password-content-group">
                                                        <label for="inputNewPassword1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
</label>
                                                        <div class="progress m-t-0" id="passwordStrengthBar" style="display: none">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                <span class="sr-only">New Password Rating: 0%</span>
                                                            </div>
                                                        </div>
                                                        <span class="text-small text-lighter password-content-text"><span id="passwordStrengthTextLabel"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.at_least_pass');?>
</span><i data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['passwordtips'];?>
" data-html="true" data-container="body" class="ls ls-info-circle m-l-1x"></i></span>
                                                    </div>
                                                    <div class="input-password-strenght">
                                                        <input type="password" name="rootpw" data-error-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;?>
" data-warning-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;?>
" class="form-control" id="inputNewPassword1" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['rootpw'];?>
">
                                                        <input type="hidden" name="rootpwstrength" value="true">
                                                    </div>
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                </div>
                                            <?php } else { ?>    
                                                <div class="form-group">
                                                    <label for="inputRootpw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
</label>
                                                    <input type="password" name="rootpw" class="form-control" id="inputRootpw" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['rootpw'];?>
">
                                                </div>
                                            <?php }?>    
                                        </div>
                                    </div>
                                <?php }?>
                               
                                <?php if ($_smarty_tpl->tpl_vars['hideNSFields']->value) {?>
                                    <div class="row hidden">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputNs1prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefix'];?>
</label>
                                                <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="ns1" placeholder="ns1">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputNs2prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefix'];?>
</label>
                                                <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="ns2" placeholder="ns2">
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                     <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputNs1prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefix'];?>
</label>
                                                <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns1prefix'];?>
" placeholder="ns1">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputNs2prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefix'];?>
</label>
                                                <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns2prefix'];?>
" placeholder="ns2">
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
<br><i><small class="text-lighter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.requiredField'),$_smarty_tpl ) );?>
</small></i></h2>
                        </div>
                        <div class="section-body">
                            <div class="panel panel-form">
                                <div class="panel-body">
                                    <div class="row"> 
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == 'tickbox') {?>            
                                                        <label class="checkbox" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
">
                                                            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],'type="checkbox"','type="checkbox" class="icheck-control"');?>

                                                            <?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
 <span class="required"> <?php echo $_smarty_tpl->tpl_vars['customfield']->value['required'];?>
</span>
                                                        </label>
                                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"> <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
                                                    <?php } else { ?>
                                                        <label class="control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['required'];?>
</span></label>
                                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == "link") {?>
                                                        <div class="input-group">
                                                            <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],"<a","<a class='input-group-addon'"),"www","<i class='ls ls-chain'></i>");?>

                                                        </div>
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                    </div>
                                </div>
                            </div>     
                        </div>                            
                    </div>
                <?php }?>          
                <div id="productAddonsContainer" class="section">          
                    <?php if (count($_smarty_tpl->tpl_vars['addonsPromoOutput']->value) > 0) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonsPromoOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['output']->value != '') {
$_smarty_tpl->_assignInScope('hasVisiblePromoAddons', true);
}?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                        <?php if ($_smarty_tpl->tpl_vars['hasVisiblePromoAddons']->value) {?>
                            <div class="section">
                                <div class="section-header">
                                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartavailableaddons'];?>
</h2>
                                </div>
                                <div class="section-body">    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonsPromoOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                                        <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['output']->value,"type='radio'","class='icheck-control'"),"bg-white",''),'class="logo"','class="logo hidden"');?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>    
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['addons']->value) {?>
                        <div class="section">                            
                            <div class="section-header">
                                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.additional_services');?>
</h2>
                            </div>
                            <div class="section-body">
                                <div class="panel-check-group row row-eq-height" data-inputs-container>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                                        <div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['configureproduct']['config']['addonsColumns'] === "1") {?>12<?php } else {
if (count($_smarty_tpl->tpl_vars['addons']->value) > 1) {?>6<?php } else { ?>12<?php }
}?>">
                                            <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?>checked<?php }?>" data-virtual-input>
                                                <div class="check">
                                                    <label>
                                                        <input class="icheck-control" type="checkbox" name="addons[<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> checked<?php }?> />
                                                        <div class="check-content">
                                                            <h6 class="check-title"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</h6>
                                                            <p class="check-subtitle"><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>
</p>
                                                            <p class="check-desc"><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>                   
                    <?php }?>
                </div>    
                                <div class="section section-module-output col-md-8"></div>
            </div>
            <div class="main-sidebar main-sidebar-lg<?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide') {?> main-sidebar-right<?php }?>">
                <div class="sidebar-sticky sidebar-sticky-summary" id="orderSummary" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>>
                    <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['summaryStyle']->value;?>
 order-summary m-b-0x <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeProductGroupName'] === "1") {?>hidden-pg<?php }?>">
                        <div class="loader" id="orderSummaryLoader">
                            <?php if ($_smarty_tpl->tpl_vars['summaryStyle']->value == 'default') {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                            <?php }?>
                        </div>
                        <div class="panel-heading">
                            <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersummary'];?>
</h2>
                        </div>
                        <div 
                            id="producttotal" 
                            data-summary-style="<?php echo $_smarty_tpl->tpl_vars['summaryStyle']->value;?>
"
                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all") {?>
                                class="show-free-lang"
                            <?php }?>
                        >
                        </div>
                    </div>
                                    </div>    
            </div>
        </div>       
        <div class="order-summary order-summary-mob is-fixed" id="orderSummaryMob" data-fixed-actions href="#orderSummary">
            <button class="btn btn-lg btn-primary-faded btn-checkout" type="submit" id="btnCompleteProductConfigMob">
                <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span>
                <div class="loader loader-button hidden"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?> </div>
            </button>
        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/recommendations-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
>recalctotals();<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        let assetsUrl = '<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/svg-illustrations/products/',
            activeStyle = '<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['iconType'];?>
',
            styleUrl = "";

        
            var hashtable = {};
            hashtable['<img src="assets/img/marketconnect/codeguard/logo-sml.png" width="80">'] = 'codeguard';
            hashtable['<img src="assets/img/marketconnect/marketgoo/logo.png" width="80">'] = 'marketgoo';
            hashtable['<img src="assets/img/marketconnect/ox/logo.png" width="80">'] = 'ox';
            hashtable['<img src="assets/img/marketconnect/sitebuilder/logo-sml.png" width="80">'] = 'sitebuilder';
            hashtable['<img src="assets/img/marketconnect/sitelock/logo.png" width="80">'] = 'sitelock';
            hashtable['<img src="assets/img/marketconnect/sitelockvpn/logo.png" width="80">'] = 'sitelockvpn';
            hashtable['<img src="assets/img/marketconnect/spamexperts/logo.png" width="80">'] = 'spamexperts';
            hashtable['<img src="assets/img/marketconnect/symantec/ssl.png" width="80">'] = 'symantec';
            hashtable['<img src="assets/img/marketconnect/weebly/logo.png" width="80">'] = 'weebly';
            hashtable['<img src="assets/img/marketconnect/cpanelseo/logo-sml.png" width="80">'] = 'cpanelseo';
            hashtable['<img src="assets/img/marketconnect/nordvpn/logo.png" width="80">'] = 'nordvpn';
            hashtable['<img src="assets/img/marketconnect/threesixtymonitoring/logo-sml.png" width="80">'] = 'threesixtymonitoring';
            hashtable['<img src="assets/img/marketconnect/xovinow/logo-sml.png" width="80">'] = 'xovinow';
            function changeLogos() {
                $('.promo-banner,.addon-promo-container').each(function( index ) {
                    var banner = $(this);
                    $.each(hashtable, function( index, value ) {

                        if (banner.html().includes(index)){
                            if (activeStyle == "modern"){
                                styleUrl = "modern/"
                            }else{
                                styleUrl = ""
                            }
                            banner.html(banner.html().replace(index, ''));
                            banner.find('.logo').load(assetsUrl+styleUrl+value+'.tpl').removeClass('hidden');
                        }
                    });
                });
            };
            $(document).ready(function() {
                changeLogos();
            });
            
    <?php echo '</script'; ?>
>
<?php }
}
}
