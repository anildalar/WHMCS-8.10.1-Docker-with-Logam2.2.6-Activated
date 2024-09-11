<?php
/* Smarty version 3.1.48, created on 2024-09-10 08:01:27
  from '/var/www/html/templates/lagom2/core/cms/sections/config/compare-packages/compare-packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffcd79ecfa1_94076221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc96c51e12b5144b2cba2ed514ef9494e5c05b47' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/compare-packages/compare-packages.tpl',
      1 => 1720186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dffcd79ecfa1_94076221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (!$_smarty_tpl->tpl_vars['display_billing_cycle']->value) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['price_calculation']->value)) && $_smarty_tpl->tpl_vars['price_calculation']->value == "lowest") {?>
        <?php $_smarty_tpl->_assignInScope('displayBestPrice', true);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('displayFirstAvailableCycle', true);?>
    <?php }
}
$_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/feature-cols.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('featureColsDesktop'=>$_smarty_tpl->tpl_vars['cols_desktop']->value,'featureColsTabH'=>$_smarty_tpl->tpl_vars['cols_tab_h']->value,'featureColsTabV'=>$_smarty_tpl->tpl_vars['cols_tab_v']->value,'featureColsMob'=>'1'), 0, true);
?>

<div class="site-section section-compare-packages section-compare-packages-<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 section-compare-packages-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
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
            <div class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</div>
        <?php }?>
	<div class="section-content section-content-packages <?php if ($_smarty_tpl->tpl_vars['disable_sticky_header']->value == '1') {?> header-disabled <?php }?>" data-compare-id="<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
" data-sticky-header-container 
		data-slides="[<?php echo $_smarty_tpl->tpl_vars['cols_desktop']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['cols_tab_h']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['cols_tab_v']->value;?>
, 1]">
						<?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1 || $_smarty_tpl->tpl_vars['display_billing_cycle']->value) {?>
				<div class="tabs-multiple-container <?php if ($_smarty_tpl->tpl_vars['tabs_style']->value == "boxed" && is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {?>tabs-boxed-container<?php }?> <?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) <= 1) {?>no-tabs <?php }
if ($_smarty_tpl->tpl_vars['display_billing_cycle']->value && (count($_smarty_tpl->tpl_vars['billing_cycle']->value) > 1 || $_smarty_tpl->tpl_vars['billing_cycle']->value[0] == 'all')) {?>has-billing-cycle<?php }?>">
					<?php if (is_array($_smarty_tpl->tpl_vars['products_group']->value['groups']) && count($_smarty_tpl->tpl_vars['products_group']->value['groups']) > 1) {?>
						<div class="tabs content-slider <?php if ($_smarty_tpl->tpl_vars['tabs_style']->value == "boxed") {?>tabs-boxed <?php if (count($_smarty_tpl->tpl_vars['products_group']->value['groups']) <= 2) {?>tabs-boxed-dual<?php }
}?>"  data-cms-content-slider>
							<ul class="nav nav-lg nav-tabs nav-tabs-slider content-slider-wrapper <?php if ($_smarty_tpl->tpl_vars['tabs_style']->value == "boxed") {?>nav-tabs-boxed<?php }?>" data-content-slider-wrapper>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_13_saved = $_smarty_tpl->tpl_vars['group'];
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
											data-plan-tab
										>
											<?php if ($_smarty_tpl->tpl_vars['tabs_style']->value == "boxed") {?>
												<span class="check-sign"><i class="ls ls-check"></i></span>
											<?php }?>
											<div class="nav-link-graphic">
												<?php if ($_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['type'] && $_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['type'] == "font-icon") {?>
													<i class="<?php echo $_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['graphic'];?>
"></i>
												<?php } elseif ($_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['type'] && ($_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['type'] == "icon" || $_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['type'] == "media")) {?>
													<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['graphic'],'type'=>$_smarty_tpl->tpl_vars['group']->value['fields']['graphic']['type']), 0, true);
?>
												<?php }?>
											</div>
											<span class="nav-link-text"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['group']->value['group_name'], ENT_QUOTES);?>
</span>
										</a>
									</li>
								<?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_13_saved;
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
$__foreach_group_14_saved = $_smarty_tpl->tpl_vars['group'];
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
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_14_saved;
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
$__foreach_cycle_17_saved = $_smarty_tpl->tpl_vars['cycle'];
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
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_17_saved;
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
$__foreach_cycle_18_saved = $_smarty_tpl->tpl_vars['cycle'];
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
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_18_saved;
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
$__foreach_d_19_saved = $_smarty_tpl->tpl_vars['d'];
?>"<?php if ((isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value])) && is_array($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value])) {
echo min($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]);
} else { ?>0<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['d']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_19_saved;
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
$__foreach_cycle_20_saved = $_smarty_tpl->tpl_vars['cycle'];
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
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_20_saved;
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
$__foreach_cycle_21_saved = $_smarty_tpl->tpl_vars['cycle'];
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
$_smarty_tpl->tpl_vars['cycle'] = $__foreach_cycle_21_saved;
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
				<div class="tab-content" >
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_group']->value['groups'], 'group', false, 'key');
$_smarty_tpl->tpl_vars['group']->index = -1;
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['group']->index++;
$_smarty_tpl->tpl_vars['group']->first = !$_smarty_tpl->tpl_vars['group']->index;
$__foreach_group_22_saved = $_smarty_tpl->tpl_vars['group'];
?>
						<div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['group']->first) {?>active<?php }?>" id='<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>tab-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>'>
							<?php if ($_smarty_tpl->tpl_vars['disable_sticky_header']->value != '1') {?>
								<div class="section-header-sticky plan" data-js-plan-container data-section-header-sticky>
									<div class="plan-header-sticky" data-js-plan data-plan-header-sticky>
										<div class="container <?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) > 4) {?> section-fade <?php }?>" data-plan-header-sticky-container>
											<div class="swiper-collapse-headers" data-plan-header-swiper-collapse-headers-wrapper></div>
											<div class="swiper-inner-wrapper" data-plan-header-swiper-inner-wrapper>
												<div class="swiper-container swiper-container-sticky" data-js-plan-slider>
													<div class="plan__wrapper swiper-wrapper swiper-wrapper-compare plan-wrapper" <?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) == 3) {?> data-slide-width='["308.67", "308.67", "333", "200", "180"]' <?php }?> <?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) > 3) {?> data-slide-width='["232", "232", "232", "232", "180"]' <?php }?> data-plan-header-swiper-wrapper>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php }?>
							<div class="section-main-wrapper" data-js-plan-container <?php if ($_smarty_tpl->tpl_vars['type']->value == 'expanded') {?>data-expanded-container<?php }?>>
								<div class="loader section-loader" data-plan-loader>
									<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
								</div>
								<div class="section-main-plan" data-js-plan>
									<div class="hidden" data-sticky-header>
										<span data-sticky-header-top>
											<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('packages.choose_your_plan');?>

										</span>
										<span data-sticky-header-bottom><a href="javascript:void(Tawk_API.toggle())"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('packages.chat_with_expert');?>
</a></span>
									</div>
									<div class="slider-nav " data-js-plan-nav>
										<a class="js-previous-plan is-disabled" data-js-plan-prev>
											<i class="ls ls-left"></i>
											Previous Package
										</a>
										<a class="js-next-plan" data-js-plan-next>
											Next Package
											<i class="ls ls-right"></i>
										</a>
									</div>
									<div class="compare-plans" id="plan1" data-js-plan-slider-wrapper>
										<?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['comparison_table']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['comparison_table']) > 0) {?>
											<div class="plan-sticky visibility-hidden-md" data-plan-sticky="" ></div>
										<?php }?>
										<div class="package-background visibility-hidden-md" data-package-background></div>
										<div class="package package-header-primary package-compare package-compare-first visibility-hidden-md" data-package>
											<div class="package-header package-desc-center" data-package-header>
												<?php if ($_smarty_tpl->tpl_vars['group']->value['fields']['header_title']) {?>
													<h5 class="m-b-0"><?php echo $_smarty_tpl->tpl_vars['group']->value['fields']['header_title'];?>
</h5>
												<?php } else { ?>
													<h5 class="m-b-0"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('product_comparison.compare_features');?>
</h5>
												<?php }?>
											</div>
										</div>
										<div class="mobile-slider swiper-container visibility-hidden-md" data-js-plan-slider>
											<div class="swiper-wrapper swiper-wrapper-compare plan-wrapper d-flex flex-nowrap">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['products_list'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
													<div class="swiper-slide <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['col']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['last'] : null);?>
 swiper-slide-compare" <?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) == 3) {?> data-slide-width='["308.67", "308.67", "333", "200", "200"]' <?php }?> <?php if (is_array($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) && count($_smarty_tpl->tpl_vars['group']->value['fields']['products_list']) > 3) {?> data-slide-width='["232", "232", "232", "232", "180"]' <?php }?>>
														<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product'])) && is_array($_smarty_tpl->tpl_vars['product']->value['product']) && count($_smarty_tpl->tpl_vars['product']->value['product']) > 0) {?>
															<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/package-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'productStyle'=>$_smarty_tpl->tpl_vars['style']->value,'productType'=>$_smarty_tpl->tpl_vars['type']->value,'productSize'=>$_smarty_tpl->tpl_vars['size']->value,'featureSlider'=>$_smarty_tpl->tpl_vars['sliderOn']->value,'productCustomClasses'=>$_smarty_tpl->tpl_vars['package_custom_classes']->value,'theme'=>$_smarty_tpl->tpl_vars['darkIcons']->value), 0, true);
?>   
														<?php }?>   
													</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>									
											</div>
										</div>
									</div>
								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['comparison_table'], 'comparison', false, 'key', 'comparisonForEach', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['comparison']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['comparison']->value) {
$_smarty_tpl->tpl_vars['comparison']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_comparisonForEach']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_comparisonForEach']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_comparisonForEach']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_comparisonForEach']->value['total'];
?>
									<div class="section-collapse <?php if (!$_smarty_tpl->tpl_vars['comparison']->value['type']) {?>section-collapse-no-title<?php }?>" data-compare-packages-collapse>
										<?php if ($_smarty_tpl->tpl_vars['comparison']->value['type']) {?>
											<?php if ($_smarty_tpl->tpl_vars['type']->value == 'expanded') {?>
												<div class="section-collapse-item" id="collapse-item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-target="#compare-<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>-1" data-js-plan-container data-compare-packages-item>
											<?php } else { ?>
												<div class="section-collapse-item collapsed" id="collapse-item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-toggle="collapse" data-target="#compare-<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>-1"
												aria-expanded="false" aria-controls="compare-<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>-1" data-js-plan-container data-compare-packages-item>
											<?php }?>

										<?php } else { ?>
											<div class="section-collapse-item glued" data-js-plan-container data-compare-packages-item aria-expanded='true'>
										<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['comparison']->value['type']) {?>
												<div class="collapse-item-top h5" data-compare-packages-header id="header-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
													<?php if ($_smarty_tpl->tpl_vars['comparison']->value['show_icon'] && $_smarty_tpl->tpl_vars['comparison']->value['show_icon'] == '1') {?>
														<div class="collapse-item-graphic">
															<?php if ($_smarty_tpl->tpl_vars['comparison']->value['media']) {?>
																<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['comparison']->value['media'],'type'=>'media'), 0, true);
?>
															<?php } elseif ($_smarty_tpl->tpl_vars['comparison']->value['icon']) {?>
																<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/graphic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('graphic'=>$_smarty_tpl->tpl_vars['comparison']->value['icon'],'type'=>'icon'), 0, true);
?>
															<?php } elseif ($_smarty_tpl->tpl_vars['comparison']->value['font-icon']) {?>
																<i class="<?php echo $_smarty_tpl->tpl_vars['comparison']->value['font-icon'];?>
"></i>
															<?php }?>
														</div> 
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['comparison']->value['category-title']) {?>
														<div class="collapse-item-title"><?php echo $_smarty_tpl->tpl_vars['comparison']->value['category-title'];?>
</div> 
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['type']->value != 'expanded') {?>
														<div class="accordion-icon" data-icon-collapse>
															<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
														</div>
													<?php }?>
												</div>
											<?php }?>
											<div data-collapse-top data-collapse-top-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 data-collapse="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></div>
											<?php if ($_smarty_tpl->tpl_vars['comparison']->value['type']) {?>
												<?php if ($_smarty_tpl->tpl_vars['type']->value == 'expanded') {?>
													<div class="collapse-item-content" id="compare-<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>-1">
												<?php } else { ?>
													<div class="collapse-item-content collapse" id="compare-<?php if ((isset($_smarty_tpl->tpl_vars['group']->value['group_name_tab_link']))) {?>collapse-<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name_tab_link'];?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
} else { ?>tab-<?php echo strtolower(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value['group_name']," ","-"),"/","-"),"&amp;","and"));?>
-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;
}?>-1">
												<?php }?>
											<?php } else { ?>
												<div class="collapse-item-content">
											<?php }?>
												<div class="collapse-item-packages" id="plan1" data-js-plan>
													<div class="package package-compare package-compare-first package-collapse">
														<div class="package-body-compare">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison']->value['features'], 'feature', false, 'key');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
																<div class="compare-item" data-compare-category="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-compare-item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
>
																	<span class="compare-item-text">
																		<?php echo $_smarty_tpl->tpl_vars['feature']->value['feature_name'];?>

																	</span>
																	<?php if ($_smarty_tpl->tpl_vars['feature']->value['show_hint'] && $_smarty_tpl->tpl_vars['feature']->value['hint'] != '') {?>
																		<span class="tooltip-icon" data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['feature']->value['hint'];?>
" data-placement="right">
																			<?php if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/comparison/tooltip-info.tpl")) {?>
																				<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/comparison/tooltip-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
																			<?php }?>
																		</span> 
																	<?php }?>
																</div>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														</div>
													</div>
													<div class="mobile-slider swiper-container" data-js-plan-slider>
														<div class="swiper-wrapper plan-wrapper swiper-wrapper-compare d-flex flex-nowrap">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['fields']['products_list'], 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
																<div class="swiper-slide <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cols']->value, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['col']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
																	<div class="package package-compare package-collapse <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null)) {?>last-package<?php }?>">				
																		<div class="package-body-compare">
																			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comparison']->value['features'], 'featureProd', false, 'key');
$_smarty_tpl->tpl_vars['featureProd']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['featureProd']->value) {
$_smarty_tpl->tpl_vars['featureProd']->do_else = false;
?>
																				<?php $_smarty_tpl->_assignInScope('prodFeatures', json_decode($_smarty_tpl->tpl_vars['featureProd']->value['product'],true));?>
																				<div class="compare-item" data-compare-item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
>
																					<?php if ($_smarty_tpl->tpl_vars['prodFeatures']->value[("id_").($_smarty_tpl->tpl_vars['product']->value['product_id'])]['icon'] && file_exists(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/comparison/".((string)$_smarty_tpl->tpl_vars['prodFeatures']->value[("id_").($_smarty_tpl->tpl_vars['product']->value['product_id'])]['icon']).".tpl")) {?>
																						<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/img/cms/comparison/".((string)$_smarty_tpl->tpl_vars['prodFeatures']->value[("id_").($_smarty_tpl->tpl_vars['product']->value['product_id'])]['icon']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
																					<?php }?>
																					<?php if ($_smarty_tpl->tpl_vars['prodFeatures']->value[("id_").($_smarty_tpl->tpl_vars['product']->value['product_id'])]['feature']) {?>
																						<span class="compare-item-text">
																							<?php echo $_smarty_tpl->tpl_vars['prodFeatures']->value[("id_").($_smarty_tpl->tpl_vars['product']->value['product_id'])]['feature'];?>

																						</span>
																					<?php }?>
																				</div>
																			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
																		</div>
																	</div>
																</div>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
														</div>
													</div>
												</div>
											</div>
											<?php if (!$_smarty_tpl->tpl_vars['comparison']->value['type'] && $_smarty_tpl->tpl_vars['type']->value != "expanded") {?>
												<div data-plan-sticky-bottom class="static"></div>
											<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_comparisonForEach']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comparisonForEach']->value['last'] : null)) {?>
												<div data-plan-sticky-bottom class="static"></div>
											<?php }?>
											<div data-collapse-bottom data-collapse-bottom-<?php echo $_smarty_tpl->tpl_vars['sectionId']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
></div>
										</div>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
							</div>
						</div>
					<?php
$_smarty_tpl->tpl_vars['group'] = $__foreach_group_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>		
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['buttons']->value) {?>
            <div class="section-actions">
                <div class="section-actions-buttons">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../cms/sections/common/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php }?>
    </div>
</div>     <?php }
}
