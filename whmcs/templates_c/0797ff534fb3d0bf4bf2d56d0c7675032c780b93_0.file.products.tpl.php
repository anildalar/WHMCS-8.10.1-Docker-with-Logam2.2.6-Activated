<?php
/* Smarty version 3.1.48, created on 2024-09-23 12:37:47
  from '/var/www/html/templates/lagom2/core/cms/sections/config/products/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f1611bd262a0_45038239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0797ff534fb3d0bf4bf2d56d0c7675032c780b93' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/products/products.tpl',
      1 => 1714141152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f1611bd262a0_45038239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (!$_smarty_tpl->tpl_vars['display_billing_cycle']->value) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['price_calculation']->value)) && $_smarty_tpl->tpl_vars['price_calculation']->value == "lowest") {?>
        <?php $_smarty_tpl->_assignInScope('displayBestPrice', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('displayFirstAvailableCycle', true);?>
    <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['package_slider']->value)) && $_smarty_tpl->tpl_vars['package_slider']->value != '' && $_smarty_tpl->tpl_vars['display_package_slider']->value && $_smarty_tpl->tpl_vars['type']->value != "horizontal") {?>
    <?php $_smarty_tpl->_assignInScope('sliderOn', true);?>
    <?php if ($_smarty_tpl->tpl_vars['package_slider']->value == "all") {?>
        <?php $_smarty_tpl->_assignInScope('package_slider', "desktop,tab-h,tab-v,mob");?>
        <?php $_smarty_tpl->_assignInScope('slider', explode(",",$_smarty_tpl->tpl_vars['package_slider']->value));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('slider', explode(",",$_smarty_tpl->tpl_vars['package_slider']->value));?>
    <?php }
}?>

<?php $_smarty_tpl->_assignInScope('darkIcons', false);
if (($_smarty_tpl->tpl_vars['theme']->value == "primary" || $_smarty_tpl->tpl_vars['theme']->value == "secondary") && $_smarty_tpl->tpl_vars['style']->value != "boxed") {?>
    <?php $_smarty_tpl->_assignInScope('darkIcons', true);
}?>
<div class="site-section section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
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
            <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 || $_smarty_tpl->tpl_vars['display_billing_cycle']->value) {?>
                <div class="tabs-multiple-container <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) <= 1) {?>no-tabs<?php }
if ($_smarty_tpl->tpl_vars['display_billing_cycle']->value && (count($_smarty_tpl->tpl_vars['billing_cycle']->value) > 1 || $_smarty_tpl->tpl_vars['billing_cycle']->value[0] == 'all')) {?>has-billing-cycle<?php }?>">
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
$__foreach_group_0_saved = $_smarty_tpl->tpl_vars['group'];
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
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['display_billing_cycle']->value) {?>  
                        
                        <?php $_smarty_tpl->_assignInScope('pricingCycles', array('monthly'=>array('6','monthly'),'quarterly'=>array('5','quarterly'),'semiannually'=>array('4','semiannually'),'annually'=>array('3','annually'),'biennially'=>array('2','biennially'),'triennially'=>array('1','triennially')));?>
                        <?php if ($_smarty_tpl->tpl_vars['reverse_billing_cycle_order']->value == "1") {?>
                            <?php $_smarty_tpl->_assignInScope('pricingCycles', array_reverse($_smarty_tpl->tpl_vars['pricingCycles']->value));?>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('choosenCycles', false);?>
                        <?php if ($_smarty_tpl->tpl_vars['billing_cycle']->value[0] != "all") {?>
                            <?php $_smarty_tpl->_assignInScope('choosenCycles', true);?>
                        <?php }?>
                        
                        <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_group']->value['groups'], 'group', false, 'groupKey');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupKey']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_1_saved = $_smarty_tpl->tpl_vars['group'];
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['products_list'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>             
                                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs']))) {?>                       
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'], 'tab', false, 'tabKey');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabKey']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['price'] != "-1" && $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'] != "0") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['tabKey']->value == 'monthly') {?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountMonthly']) ? $_smarty_tpl->tpl_vars['discountMonthly']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'];
$_smarty_tpl->_assignInScope('discountMonthly', $_tmp_array);?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabsTemp']) ? $_smarty_tpl->tpl_vars['discountTabsTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['tabKey']->value] = $_smarty_tpl->tpl_vars['discountMonthly']->value;
$_smarty_tpl->_assignInScope('discountTabsTemp', $_tmp_array);?>  
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['tabKey']->value == 'quarterly') {?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountQuarterly']) ? $_smarty_tpl->tpl_vars['discountQuarterly']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'];
$_smarty_tpl->_assignInScope('discountQuarterly', $_tmp_array);?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabsTemp']) ? $_smarty_tpl->tpl_vars['discountTabsTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['tabKey']->value] = $_smarty_tpl->tpl_vars['discountQuarterly']->value;
$_smarty_tpl->_assignInScope('discountTabsTemp', $_tmp_array);?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['tabKey']->value == 'semiannually') {?>                                                
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountSemiannually']) ? $_smarty_tpl->tpl_vars['discountSemiannually']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'];
$_smarty_tpl->_assignInScope('discountSemiannually', $_tmp_array);?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabsTemp']) ? $_smarty_tpl->tpl_vars['discountTabsTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['tabKey']->value] = $_smarty_tpl->tpl_vars['discountSemiannually']->value;
$_smarty_tpl->_assignInScope('discountTabsTemp', $_tmp_array);?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['tabKey']->value == 'annually') {?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountAnnually']) ? $_smarty_tpl->tpl_vars['discountAnnually']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'];
$_smarty_tpl->_assignInScope('discountAnnually', $_tmp_array);?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabsTemp']) ? $_smarty_tpl->tpl_vars['discountTabsTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['tabKey']->value] = $_smarty_tpl->tpl_vars['discountAnnually']->value;
$_smarty_tpl->_assignInScope('discountTabsTemp', $_tmp_array);?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['tabKey']->value == 'biennially') {?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountBiennially']) ? $_smarty_tpl->tpl_vars['discountBiennially']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'];
$_smarty_tpl->_assignInScope('discountBiennially', $_tmp_array);?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabsTemp']) ? $_smarty_tpl->tpl_vars['discountTabsTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['tabKey']->value] = $_smarty_tpl->tpl_vars['discountBiennially']->value;
$_smarty_tpl->_assignInScope('discountTabsTemp', $_tmp_array);?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['tabKey']->value == 'triennially') {?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTriennially']) ? $_smarty_tpl->tpl_vars['discountTriennially']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['tab']->value['discount']['percentage'];
$_smarty_tpl->_assignInScope('discountTriennially', $_tmp_array);?>
                                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabsTemp']) ? $_smarty_tpl->tpl_vars['discountTabsTemp']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['tabKey']->value] = $_smarty_tpl->tpl_vars['discountTriennially']->value;
$_smarty_tpl->_assignInScope('discountTabsTemp', $_tmp_array);?>
                                                <?php }?>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                    <?php }?>    
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['discountTabs']) ? $_smarty_tpl->tpl_vars['discountTabs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['groupKey']->value] = $_smarty_tpl->tpl_vars['discountTabsTemp']->value;
$_smarty_tpl->_assignInScope('discountTabs', $_tmp_array);?>
                            <?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?> 
                        <div class="product-billing-switcher <?php if (count($_smarty_tpl->tpl_vars['billing_cycle']->value) == 1 && $_smarty_tpl->tpl_vars['billing_cycle']->value[0] != 'all') {?> hidden<?php }?>">
                            <div class="btn-group <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {?> hidden<?php } else { ?> hidden-md hidden-sm hidden-xs<?php }?>" role="group">
                                <?php if ($_smarty_tpl->tpl_vars['choosenCycles']->value) {?>     
                                    <?php if ($_smarty_tpl->tpl_vars['reverse_billing_cycle_order']->value == "1") {?>  
                                        <?php $_smarty_tpl->_assignInScope('reverse_billing_cycle', array_reverse($_smarty_tpl->tpl_vars['billing_cycle']->value));?>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['pricingCycles']->value,true), 'cycle', false, 'key');
$_smarty_tpl->tpl_vars['cycle']->index = -1;
$_smarty_tpl->tpl_vars['cycle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cycle']->value) {
$_smarty_tpl->tpl_vars['cycle']->do_else = false;
$_smarty_tpl->tpl_vars['cycle']->index++;
$_smarty_tpl->tpl_vars['cycle']->first = !$_smarty_tpl->tpl_vars['cycle']->index;
$__foreach_cycle_4_saved = $_smarty_tpl->tpl_vars['cycle'];
?>
                                        <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['billing_cycle']->value)) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['reverse_billing_cycle_order']->value == "1") {?>
                                            <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['reverse_billing_cycle']->value[0]);?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['billing_cycle']->value[0]);?>
                                        <?php }?>
                                            <?php $_smarty_tpl->_assignInScope('switchActive', false);?>
                                            <?php $_smarty_tpl->_assignInScope('discount', false);?>
                                            <?php $_smarty_tpl->_assignInScope('dataDiscount', false);?>
                                            <?php if ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == $_smarty_tpl->tpl_vars['key']->value) {?>
                                                <?php $_smarty_tpl->_assignInScope('switchActive', "active");?>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value) && (isset($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]))) {?>
                                                <?php $_smarty_tpl->_assignInScope('discount', min($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]));?>
                                            <?php }?>
                                            <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 && (isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('dataDiscount', $_smarty_tpl->tpl_vars['discountTabs']->value);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package/cycle-switcher-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cycle'=>$_smarty_tpl->tpl_vars['cycle']->value[0],'active'=>$_smarty_tpl->tpl_vars['switchActive']->value,'name'=>$_smarty_tpl->tpl_vars['cycle']->value[1],'discount'=>$_smarty_tpl->tpl_vars['discount']->value,'dataDiscount'=>$_smarty_tpl->tpl_vars['dataDiscount']->value), 0, true);
?>  
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['pricingCycles']->value,true), 'cycle', false, 'key');
$_smarty_tpl->tpl_vars['cycle']->index = -1;
$_smarty_tpl->tpl_vars['cycle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cycle']->value) {
$_smarty_tpl->tpl_vars['cycle']->do_else = false;
$_smarty_tpl->tpl_vars['cycle']->index++;
$_smarty_tpl->tpl_vars['cycle']->first = !$_smarty_tpl->tpl_vars['cycle']->index;
$__foreach_cycle_5_saved = $_smarty_tpl->tpl_vars['cycle'];
?>
                                        <?php $_smarty_tpl->_assignInScope('switchActive', false);?>
                                        <?php $_smarty_tpl->_assignInScope('discount', false);?>
                                        <?php $_smarty_tpl->_assignInScope('dataDiscount', false);?>
                                        <?php if ($_smarty_tpl->tpl_vars['cycle']->first) {?>
                                            <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['key']->value);?>
                                            <?php $_smarty_tpl->_assignInScope('switchActive', "active");?>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value) && (isset($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]))) {?>
                                            <?php $_smarty_tpl->_assignInScope('discount', min($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]));?>
                                        <?php }?>
                                        <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 && (isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value)) {?>
                                            <?php $_smarty_tpl->_assignInScope('dataDiscount', $_smarty_tpl->tpl_vars['discountTabs']->value);?>
                                        <?php }?>
                                        
                                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package/cycle-switcher-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cycle'=>$_smarty_tpl->tpl_vars['cycle']->value[0],'active'=>$_smarty_tpl->tpl_vars['switchActive']->value,'name'=>$_smarty_tpl->tpl_vars['cycle']->value[1],'discount'=>$_smarty_tpl->tpl_vars['discount']->value,'dataDiscount'=>$_smarty_tpl->tpl_vars['dataDiscount']->value), 0, true);
?>   
                                    <?php
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                <?php }?>  
                            </div>
                            <div class="btn-dropdown">
                                <span class="<?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {
} else { ?> visible-md visible-sm visible-xs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderbillingcycle'];?>
</span>
                                <div class="dropdown dropdown-cycle-switcher <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {
} else { ?> visible-md visible-sm visible-xs<?php }?>">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span id="cycle-text">
                                            <span class="btn-text">
                                                <span class="btn-text">
                                                    <?php if ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == "monthly") {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == "quarterly") {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == "semiannually") {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == "annually") {?>
                                                        1-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['year'];?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == "biennially") {?>
                                                        2-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['years'];?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == "triennially") {?>
                                                        3-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['years'];?>

                                                    <?php }?>
                                                </span> 
                                            </span>
                                            
                                            <label 
                                                class="label label-xs label-info label-save <?php if ((isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value) && (isset($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]))) {
} else { ?>hidden<?php }?>"
                                                <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 && (isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value)) {?>
                                                
                                                    data-change-discount='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discountTabs']->value, 'd', true, 'key');
$_smarty_tpl->tpl_vars['d']->iteration = 0;
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
$_smarty_tpl->tpl_vars['d']->iteration++;
$_smarty_tpl->tpl_vars['d']->last = $_smarty_tpl->tpl_vars['d']->iteration === $_smarty_tpl->tpl_vars['d']->total;
$__foreach_d_6_saved = $_smarty_tpl->tpl_vars['d'];
?>"<?php if ((isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value])) && is_array($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value])) {
echo min($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]);
} else { ?>0<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['d']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                                                <?php }?>
                                            >
                                                <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('packages.save');?>
&nbsp;
                                                <span data-change-discount-value>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]))) {?>
                                                        <?php echo min($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]);?>

                                                    <?php }?>
                                                </span>%
                                            </label>
                                        </span>
                                        <i class="ls ls-caret"></i>
                                    </button>
                                    <div class="dropdown-menu <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {?>dropdown-menu-right<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['choosenCycles']->value) {?>                                    
                                            <?php if ($_smarty_tpl->tpl_vars['reverse_billing_cycle_order']->value == "1") {?>
                                                <?php $_smarty_tpl->_assignInScope('reverse_billing_cycle', array_reverse($_smarty_tpl->tpl_vars['billing_cycle']->value));?>
                                            <?php }?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['pricingCycles']->value,true), 'cycle', false, 'key');
$_smarty_tpl->tpl_vars['cycle']->index = -1;
$_smarty_tpl->tpl_vars['cycle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cycle']->value) {
$_smarty_tpl->tpl_vars['cycle']->do_else = false;
$_smarty_tpl->tpl_vars['cycle']->index++;
$_smarty_tpl->tpl_vars['cycle']->first = !$_smarty_tpl->tpl_vars['cycle']->index;
$__foreach_cycle_7_saved = $_smarty_tpl->tpl_vars['cycle'];
?>
                                                <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['billing_cycle']->value)) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['reverse_billing_cycle_order']->value == "1") {?>
                                                        <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['reverse_billing_cycle']->value[0]);?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['billing_cycle']->value[0]);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_assignInScope('switchActive', false);?>
                                                    <?php $_smarty_tpl->_assignInScope('discount', false);?>
                                                    <?php $_smarty_tpl->_assignInScope('dataDiscount', false);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['firstAvailableCycle']->value == $_smarty_tpl->tpl_vars['key']->value) {?>
                                                        <?php $_smarty_tpl->_assignInScope('switchActive', "active");?>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value) && (isset($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]))) {?>
                                                        <?php $_smarty_tpl->_assignInScope('discount', min($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]));?>
                                                    <?php }?>
                                                    <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 && (isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value)) {?>
                                                        <?php $_smarty_tpl->_assignInScope('dataDiscount', $_smarty_tpl->tpl_vars['discountTabs']->value);?>
                                                    <?php }?>

                                                    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package/cycle-switcher-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cycle'=>$_smarty_tpl->tpl_vars['cycle']->value[0],'active'=>$_smarty_tpl->tpl_vars['switchActive']->value,'name'=>$_smarty_tpl->tpl_vars['cycle']->value[1],'class'=>"dropdown-item",'discount'=>$_smarty_tpl->tpl_vars['discount']->value,'dataDiscount'=>$_smarty_tpl->tpl_vars['dataDiscount']->value), 0, true);
?>  
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['pricingCycles']->value,true), 'cycle', false, 'key');
$_smarty_tpl->tpl_vars['cycle']->index = -1;
$_smarty_tpl->tpl_vars['cycle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cycle']->value) {
$_smarty_tpl->tpl_vars['cycle']->do_else = false;
$_smarty_tpl->tpl_vars['cycle']->index++;
$_smarty_tpl->tpl_vars['cycle']->first = !$_smarty_tpl->tpl_vars['cycle']->index;
$__foreach_cycle_8_saved = $_smarty_tpl->tpl_vars['cycle'];
?>
                                                <?php $_smarty_tpl->_assignInScope('switchActive', false);?>
                                                <?php $_smarty_tpl->_assignInScope('discount', false);?>
                                                <?php $_smarty_tpl->_assignInScope('dataDiscount', false);?>
                                                <?php if ($_smarty_tpl->tpl_vars['cycle']->first) {?>
                                                    <?php $_smarty_tpl->_assignInScope('firstAvailableCycle', $_smarty_tpl->tpl_vars['key']->value);?>
                                                    <?php $_smarty_tpl->_assignInScope('switchActive', "active");?>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value) && (isset($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]))) {?>
                                                    <?php $_smarty_tpl->_assignInScope('discount', min($_smarty_tpl->tpl_vars['discountTabs']->value[0][$_smarty_tpl->tpl_vars['cycle']->value[1]]));?>
                                                <?php }?>
                                                <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 && (isset($_smarty_tpl->tpl_vars['discountTabs']->value)) && is_array($_smarty_tpl->tpl_vars['discountTabs']->value)) {?>
                                                    <?php $_smarty_tpl->_assignInScope('dataDiscount', $_smarty_tpl->tpl_vars['discountTabs']->value);?>
                                                <?php }?>
            
                                                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package/cycle-switcher-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cycle'=>$_smarty_tpl->tpl_vars['cycle']->value[0],'active'=>$_smarty_tpl->tpl_vars['switchActive']->value,'name'=>$_smarty_tpl->tpl_vars['cycle']->value[1],'class'=>"dropdown-item",'discount'=>$_smarty_tpl->tpl_vars['discount']->value,'dataDiscount'=>$_smarty_tpl->tpl_vars['dataDiscount']->value), 0, true);
?>   
                                            <?php
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                        <?php }?>  
                                    </div>
                                </div>
                            </div>
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
$__foreach_group_9_saved = $_smarty_tpl->tpl_vars['group'];
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['group']->value['fields']['products_list'])) && is_array($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) > 0) {?>
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
                                    <div class="row row-eq-height row-lg row-cols-mixed row-packages-<?php echo count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']);?>
 <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>content-slider-wrapper<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?> content-slider-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['slide']->value, 'UTF-8')," ","-");
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>row-eq-height<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sliderOn']->value) {?>data-content-slider-wrapper<?php }?>>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['products_list'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product'])) && is_array($_smarty_tpl->tpl_vars['product']->value['product']) && count($_smarty_tpl->tpl_vars['product']->value['product']) > 0) {?>
                                                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'productStyle'=>$_smarty_tpl->tpl_vars['style']->value,'productType'=>$_smarty_tpl->tpl_vars['type']->value,'productSize'=>$_smarty_tpl->tpl_vars['size']->value,'featureColsDesktop'=>$_smarty_tpl->tpl_vars['cols_desktop']->value,'featureColsTabH'=>$_smarty_tpl->tpl_vars['cols_tab_h']->value,'featureColsTabV'=>$_smarty_tpl->tpl_vars['cols_tab_v']->value,'featureColsMob'=>$_smarty_tpl->tpl_vars['cols_mob']->value,'featureSlider'=>$_smarty_tpl->tpl_vars['sliderOn']->value,'productCustomClasses'=>$_smarty_tpl->tpl_vars['package_custom_classes']->value,'theme'=>$_smarty_tpl->tpl_vars['darkIcons']->value), 0, true);
?>   
                                            <?php }?>   
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
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_9_saved;
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
