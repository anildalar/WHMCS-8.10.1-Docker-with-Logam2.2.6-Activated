<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:25:57
  from '/var/www/html/templates/lagom2/core/cms/sections/config/call-to-action/call-to-action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e41335d64f32_00229398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6449484a910e13c3ca26a2940b6f910c0b6c1a4f' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/config/call-to-action/call-to-action.tpl',
      1 => 1720186760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e41335d64f32_00229398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="site-section section-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 section-cta<?php if ($_smarty_tpl->tpl_vars['type']->value == "horizontal") {?> section-cta-horizontal<?php }
if ($_smarty_tpl->tpl_vars['style']->value == "boxed") {?> section-cta-boxed<?php }?> <?php if ($_smarty_tpl->tpl_vars['overlay']->value) {?> section-overlay<?php }?> <?php if ($_smarty_tpl->tpl_vars['combined']->value) {?>section-combined<?php }?> <?php if ($_smarty_tpl->tpl_vars['custom_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['custom_class']->value;
}?>">
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../common/anchor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="container">
        <div class="section-box <?php if ($_smarty_tpl->tpl_vars['style']->value == "boxed") {?> is-boxed<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "horizontal") {?>
                <div class="section-content">
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['caption']->value)) && !empty($_smarty_tpl->tpl_vars['caption']->value)) {?>
                <h3 class="section-caption h6"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES);?>
</h3>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['title']->value)) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
                <h2 class="section-title h2 text-bold"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES);?>
</h2>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['subtitle']->value)) && !empty($_smarty_tpl->tpl_vars['subtitle']->value)) {?>
                <div class="section-subtitle"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['subtitle']->value, ENT_QUOTES);?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "horizontal") {?>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['buttons']->value) || $_smarty_tpl->tpl_vars['show_product_pricing']->value) {?>
                <div class="section-actions">
                    <?php if (!empty($_smarty_tpl->tpl_vars['buttons']->value)) {?>
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
    </div>
</div><?php }
}
