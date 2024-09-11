<?php
/* Smarty version 3.1.48, created on 2024-09-10 08:48:02
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/summary-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e007c2d85218_91218268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '315f5d9fd60297ef9ecabf6af039d4807dbb2903' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/summary-table.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/overwrites/summary-table.tpl' => 1,
  ),
),false)) {
function content_66e007c2d85218_91218268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/summary-table.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/summary-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="section">
        <div class="section-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=view">
                <div class="panel panel-cart<?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?> has-qty<?php }?>">
                    <div class="panel-heading cart-heading">
                        <div class="row">
                            <div class="<?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['productOptions'];?>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                <div class="col-sm-2">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['qty'];?>

                                </div>
                            <?php }?>
                            <div class="col">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['priceCycle'];?>

                            </div>
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'num');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <div class="panel-body cart-item">
                            <div class="row" data-input-number>
                                <div class="prod-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
">
                                    <div class="cart-item-title">
                                        <span class="cart-item-title-main"><?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeProductGroupName'] != "1") {
echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['groupname'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['name'];?>
</span>
                                        <?php $_smarty_tpl->_assignInScope('hideServerFields', false);?>
                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_password_fields'] != "displayed" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_hostname_on_checkout'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_hostname_on_checkout'] == "1") {?>
                                            <?php $_smarty_tpl->_assignInScope('ns_groups', explode(",",$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_password_fields']));?>
                                            <?php if (in_array($_smarty_tpl->tpl_vars['product']->value['productinfo']['gid'],$_smarty_tpl->tpl_vars['ns_groups']->value)) {?>
                                                <?php $_smarty_tpl->_assignInScope('hideServerFields', true);?>
                                            <?php }?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['domain'] && !$_smarty_tpl->tpl_vars['hideServerFields']->value) {?>
                                            <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                <div class="prod-qty<?php if (!$_smarty_tpl->tpl_vars['product']->value['allowqty']) {?> prod-qty-empty<?php }?> col-2" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['quantity'];?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['allowqty']) {?>
                                            <div class="input-number">
                                                <input type="number" data-input-number-input name="qty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" min=1 value="<?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
" min="0" />
                                                <div class="input-number-actions">
                                                    <div class="plus" data-input-number-inc></div>
                                                    <div class="minus" data-input-number-dec></div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <div class="prod-price col" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideProductBillingCycleDropdown'] == "1") {?>
                                        <div class="cart-item-price price price-xs">
                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['pricing']['totalTodayExcludingTaxSetup'],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'') == '0.00' || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['pricing']['totalTodayExcludingTaxSetup'],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'') == '0,00') && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['totalTodayExcludingTaxSetup'];?>
<span class="price-cycle-inline"><?php if ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] != "free") {?>/<?php }
if ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "onetime") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "monthly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.monthly');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "quarterly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.quarterly');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "semiannually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.semiannually');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "annually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "biennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.biennially');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "triennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.triennially');
}?></span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['productonlysetup']) {?>
                                                + <?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['productonlysetup']->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</span>
                                            <?php }?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="cart-item-pricing dropdown" data-input-number-price>
                                            <button class="btn btn-default dropdown-toggle" type="button" id="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
ProductPricing" name="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
ProductPricing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span  class="cart-item-price" data-input-number-price><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['totalTodayExcludingTaxSetup'];
if ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] != "free") {?>/<?php }
if ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "onetime") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "monthly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.monthly');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "quarterly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.quarterly');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "semiannually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.semiannually');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "annually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "biennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.biennially');
} elseif ($_smarty_tpl->tpl_vars['product']->value['billingcycle'] == "triennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.triennially');
}?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['productonlysetup']) {?>
                                                        + <?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['productonlysetup']->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</span>
                                                    <?php }?>
                                                </span>
                                                <span class="caret"></span>
                                            </button>     
                                            <ul class="dropdown-menu" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
ProductPricing" >
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allAvailableCycles']->value[$_smarty_tpl->tpl_vars['num']->value], 'cycle');
$_smarty_tpl->tpl_vars['cycle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cycle']->value) {
$_smarty_tpl->tpl_vars['cycle']->do_else = false;
?>
                                                    <?php if (is_null($_smarty_tpl->tpl_vars['permittedBillingCycles']->value) || in_array($_smarty_tpl->tpl_vars['cycle']->value['cycle'],$_smarty_tpl->tpl_vars['permittedBillingCycles']->value)) {?>
                                                        <li>
                                                            <a href="" onclick="selectProductPeriodInCart('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['cycle']->value['cycle'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cycle']->value['toFullStringCalculated'];?>
'); return false;">
                                                                <?php echo $_smarty_tpl->tpl_vars['cycle']->value['toFullStringCalculated'];?>

                                                            </a>
                                                        </li>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    <?php }?>    
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['proratadate']) {?>
                                    <span class="renewal cycle" data-input-number-price>(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprorata'];?>
 <span class="prorata-date"><?php echo $_smarty_tpl->tpl_vars['product']->value['proratadate'];?>
</span>)</span>
                                    <?php }?>
                                    <button class="btn btn-primary-faded hidden" data-input-number-update data-toggle="tooltip" data-html="true" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>
" title="">
                                        <i class="ls ls-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>

                                    </button>
                                </div>
                                <div class="prod-actions">
                                    <div class="cart-item-actions">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=confproduct&i=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" data-toggle="tooltip" data-html="true" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['edit'];?>
" title="" class="btn btn-icon">
                                            <i class="lm lm-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeItem('p', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')">
                                            <i class="lm lm-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['configoptions'] || $_smarty_tpl->tpl_vars['product']->value['addons']) {?>
                                    <div class="w-100"></div>
                                    <div class="prod-addons col">
                                        <div class="prod-addons-container">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['configoptions'], 'configoption', false, 'confnum');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['confnum']->value => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                                                <div class="addon-item row">
                                                    <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
:</span>
                                                        <span class="item-value" data-product-config-option-option="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['confnum']->value;?>
"> <?php if ($_smarty_tpl->tpl_vars['configoption']->value['type'] == 1 || $_smarty_tpl->tpl_vars['configoption']->value['type'] == 2) {
echo $_smarty_tpl->tpl_vars['configoption']->value['option'];
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['type'] == 3) {
if ($_smarty_tpl->tpl_vars['configoption']->value['qty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['option'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['no'];
}
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['type'] == 4) {
echo $_smarty_tpl->tpl_vars['configoption']->value['qty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['option'];
}?></span>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                        <div class="addon-qty addon-qty-empty col-4 col-md-2">
                                                                -
                                                        </div>
                                                    <?php }?>
                                                    <div class="addon-price col">
                                                        <span class="item-price" data-currency-prefix="<?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];?>
" data-currency-suffix="<?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'];?>
" data-product-config-option="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['confnum']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['configoption']->value['recurring']->toNumeric() && $_smarty_tpl->tpl_vars['configoption']->value['recurring']->toNumeric() != 0) {
echo $_smarty_tpl->tpl_vars['configoption']->value['recurring'];
} else { ?>-<?php }?></span>
                                                    </div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['addons'], 'addon', false, 'addonnum');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addonnum']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                                                <div class="addon-item row"<?php if ($_smarty_tpl->tpl_vars['showAddonQtyOptions']->value && $_smarty_tpl->tpl_vars['addon']->value['allowqty'] === 2) {?> data-input-number-secondary<?php }?>>
                                                    <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
:</span>
                                                        <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                        <div class="addon-qty<?php if ($_smarty_tpl->tpl_vars['addon']->value['allowqty'] !== 2) {?> addon-qty-empty<?php }?> col-4 col-md-2">
                                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['allowqty'] === 2) {?>
                                                                <div class="input-number input-number-sm">
                                                                    <input type="number" data-input-number-secondary-input name="paddonqty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['addonnum']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['qty'];?>
" min="0" />
                                                                    <div class="input-number-actions">
                                                                        <div class="plus" data-input-number-secondary-inc></div>
                                                                        <div class="minus" data-input-number-secondary-dec></div>
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                - 
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <div class="addon-price col">
                                                        <span class="item-price" <?php if ($_smarty_tpl->tpl_vars['showAddonQtyOptions']->value && $_smarty_tpl->tpl_vars['addon']->value['allowqty'] === 2) {?>data-input-number-secondary-price<?php }?>>
                                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] != "free") {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['totaltoday'];?>
/<?php if ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "free") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfree'];
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "onetime") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "monthly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.monthly');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "quarterly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.quarterly');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "semiannually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.semiannually');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "annually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "biennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.biennially');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "triennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.triennially');
}?>
                                                            <?php } else { ?>
                                                                -
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['setup']) {
echo $_smarty_tpl->tpl_vars['addon']->value['setup']->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['isProrated']) {?><br />(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprorata'];?>
 <?php echo $_smarty_tpl->tpl_vars['addon']->value['prorataDate'];?>
)<?php }?>
                                                        </span>
                                                        <button class="btn btn-primary-faded hidden" <?php if ($_smarty_tpl->tpl_vars['showAddonQtyOptions']->value && $_smarty_tpl->tpl_vars['addon']->value['allowqty'] === 2) {?>data-input-number-secondary-update<?php }?> data-toggle="tooltip" data-html="true" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>
" title="">
                                                            <i class="ls ls-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>

                                                        </button>
                                                    </div>
                                                    <div class="addon-actions">
                                                        <div class="cart-item-actions">
                                                            <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'products', '<?php echo $_smarty_tpl->tpl_vars['addonnum']->value;?>
')">
                                                                <i class="lm lm-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain', false, 'num');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <div class="panel-body cart-item">
                            <div class="row">
                                <div class="prod-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomain'];?>
">
                                    <div class="cart-item-title">
                                        <span class="cart-item-title-main"><?php if ($_smarty_tpl->tpl_vars['domain']->value['type'] == "register") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainregistration'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomaintransfer'];
}?></span>
                                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['domain']) {?>
                                            <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                    <div class="prod-qty prod-qty-empty col-2" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['quantity'];?>
">
                                            -
                                    </div>
                                <?php }?>
                                <div class="prod-price col" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
">
                                    <span class="cart-item-price">
                                        <span class="<?php if (count($_smarty_tpl->tpl_vars['domain']->value['pricing']) == 1 || $_smarty_tpl->tpl_vars['domain']->value['type'] == 'transfer') {
} else { ?>hidden<?php }?>" data-domain-price-single="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
" >
                                            <span data-domain-price-single-price><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];
echo $_smarty_tpl->tpl_vars['domain']->value['shortYearsLanguage'];?>
</span>
                                            <span class="renewal cycle">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['domain']->value['renewprice']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalprice'),$_smarty_tpl ) );?>
 <span class="renewal-price cycle"><?php echo $_smarty_tpl->tpl_vars['domain']->value['renewprice'];
echo $_smarty_tpl->tpl_vars['domain']->value['shortRenewalYearsLanguage'];
}?></span>
                                            </span>
                                        </span>
                                        <span class="<?php if (count($_smarty_tpl->tpl_vars['domain']->value['pricing']) == 1 || $_smarty_tpl->tpl_vars['domain']->value['type'] == 'transfer') {?>hidden<?php } else {
}?>" data-domain-price-multi="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
">
                                            <div class="cart-item-pricing dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Pricing" name="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Pricing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span data-domain-price-multi-price><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];
echo $_smarty_tpl->tpl_vars['domain']->value['shortYearsLanguage'];?>
</span>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Pricing" data-domain-lang-year="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.year'),$_smarty_tpl ) );?>
" data-domain-lang-years="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.years'),$_smarty_tpl ) );?>
">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain']->value['pricing'], 'price', false, 'years');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                                                        <li>
                                                            <a href="#" onclick="selectDomainPeriodInCart('<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
', '<?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>
', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
, '<?php if ($_smarty_tpl->tpl_vars['years']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.year'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.years'),$_smarty_tpl ) );
}?>');return false;">
                                                                <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.year'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.years'),$_smarty_tpl ) );
}?> @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

                                                            </a>
                                                        </li>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </ul>
                                            </div>
                                            <span class="renewal cycle">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalprice'),$_smarty_tpl ) );?>
 <span class="renewal-price cycle"><?php if ((isset($_smarty_tpl->tpl_vars['domain']->value['renewprice']))) {
echo $_smarty_tpl->tpl_vars['domain']->value['renewprice'];
echo $_smarty_tpl->tpl_vars['domain']->value['shortRenewalYearsLanguage'];
}?></span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="prod-actions">
                                    <div class="cart-item-actions">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=confdomains" data-toggle="tooltip" data-html="true" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['edit'];?>
" title="" class="btn btn-icon">
                                            <i class="lm lm-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-icon" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeItem('d', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')">
                                            <i class="lm lm-trash"></i>
                                        </button>
                                    </div>
                                </div>                     
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement'] || $_smarty_tpl->tpl_vars['domain']->value['emailforwarding'] || $_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>                       
                                    <div class="w-100"></div>
                                    <div class="prod-addons col">
                                        <div class="prod-addons-container">
                                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>
                                            <div class="addon-item row">
                                                <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col<?php }?>">
                                                    <div class="content">
                                                        <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
</span>
                                                    </div>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                <div class="addon-qty addon-qty-empty col"></div>
                                                <?php }?>
                                                <div class="addon-actions">
                                                    <div class="cart-item-actions">
                                                        <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'domains', 'dnsmanagement')">
                                                            <i class="lm lm-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>
                                                <div class="addon-item row">
                                                    <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col<?php }?>">
                                                        <div class="content">
                                                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
</span>
                                                        </div>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                        <div class="addon-qty addon-qty-empty col"></div>
                                                    <?php }?>
                                                    <div class="addon-actions">
                                                        <div class="cart-item-actions">
                                                            <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'domains' , 'emailforwarding')">
                                                                <i class="lm lm-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                                                <div class="addon-item row">
                                                    <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col<?php }?>">
                                                        <div class="content">
                                                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
</span>
                                                        </div>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                        <div class="addon-qty addon-qty-empty col"></div>
                                                    <?php }?>
                                                    <div class="addon-actions">
                                                        <div class="cart-item-actions">
                                                            <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'domains' , 'idprotection')">
                                                                <i class="lm lm-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['renewalsByType']->value['services'], 'service', false, 'num');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                        <div class="panel-body cart-item">
                            <div class="row">
                                <div class="prod-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                    <div class="cart-item-title">
                                        <span class="cart-item-title-main"><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</span>
                                        <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['service']->value['domainName'];?>
</span>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                    <div class="prod-qty prod-qty-empty col-sm-2" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['quantity'];?>
">
                                        -
                                    </div>
                                <?php }?>
                                <div class="prod-price col" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
">
                                    <div class="cart-item-price price price-xs">
                                        <?php echo $_smarty_tpl->tpl_vars['service']->value['recurringBeforeTax'];?>
<span class="price-cycle-inline">/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort'][mb_strtolower($_smarty_tpl->tpl_vars['service']->value['billingCycle'], 'UTF-8')];?>
</span>
                                    </div>
                                </div>
                                <div class="prod-actions">
                                    <div class="cart-item-actions d-flex">
                                        <button type="button" class="btn btn-icon" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
','service')">
                                            <i class="lm lm-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['renewalsByType']->value['addons'], 'service', false, 'num');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <span class="item-title">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'renewServiceAddon.titleAltSingular'),$_smarty_tpl ) );?>

                                    </span>
                                    <span class="item-group">
                                        <?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>

                                    </span>
                                    <span class="item-domain">
                                        <?php echo $_smarty_tpl->tpl_vars['service']->value['domainName'];?>

                                    </span>
                                </div>
                                <div class="col-sm-4 item-price">
                                    <span><?php echo $_smarty_tpl->tpl_vars['service']->value['recurringBeforeTax'];?>
</span>
                                    <span class="cycle"><?php echo $_smarty_tpl->tpl_vars['service']->value['billingCycle'];?>
</span>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart" onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
','addon')">
                                        <i class="fas fa-times"></i>
                                        <span class="visible-xs d-block d-sm-none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.remove'),$_smarty_tpl ) );?>
</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['renewalsByType']->value['domains'], 'domain', false, 'num');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                        <div class="panel-body cart-item">
                            <div class="row">
                                <div class="prod-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomain'];?>
">
                                    <div class="cart-item-title">
                                        <span class="cart-item-title-main"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewal'];?>
</span>
                                        <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</span>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                    <div class="prod-qty prod-qty-empty col-sm-2" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['quantity'];?>
">
                                        -
                                    </div>
                                <?php }?>
                                <div class="prod-price col" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
">
                                    <div class="cart-item-price price price-xs">
                                        <?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
<span class="price-cycle-inline">/<?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');?>
</span>
                                    </div>
                                </div>
                                <div class="prod-actions">
                                    <div class="cart-item-actions d-flex">
                                        <button type="button" class="btn btn-icon" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeItem('r', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'domain')">
                                            <i class="lm lm-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement'] || $_smarty_tpl->tpl_vars['domain']->value['emailforwarding'] || $_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                                <div class="prod-addons col">
                                    <div class="prod-addons-container">
                                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>
                                        <div class="addon-item row">
                                            <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                                <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
:</span>
                                                <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
</span>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                            <div class="addon-qty addon-qty-empty col-4 col-md-2">
                                                    -
                                            </div>
                                            <?php }?>
                                            <div class="col">
                                                -
                                            </div>
                                            <div class="addon-actions">
                                                <div class="cart-item-actions">
                                                    <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'renewals','dnsmanagement')">
                                                        <i class="lm lm-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>
                                            <div class="addon-item row">
                                                <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
:</span>
                                                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
</span>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                    <div class="addon-qty addon-qty-empty col-4 col-md-2">
                                                            -
                                                    </div>
                                                <?php }?>
                                                <div class="col">
                                                    -
                                                </div>
                                                <div class="addon-actions">
                                                    <div class="cart-item-actions">
                                                        <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'renewals', 'emailforwarding')">
                                                            <i class="lm lm-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>
                                            <div class="addon-item row">
                                                <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
:</span>
                                                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
</span>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                    <div class="addon-qty addon-qty-empty col-4 col-md-2">
                                                            -
                                                    </div>
                                                <?php }?>
                                                <div class="col">
                                                    -
                                                </div>
                                                <div class="addon-actions">
                                                    <div class="cart-item-actions">
                                                        <button type="button" class="btn btn-xs btn-icon btn-hover-danger" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeAddonItem('<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
', 'renewals', 'idprotection')">
                                                            <i class="lm lm-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'num');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                        <div class="panel-body cart-item">
                            <div class="row" data-input-number>
                                <div class="prod-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
">
                                    <span class="cart-item-title">
                                        <span class="cart-item-title-main"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['addon']->value['productname'];?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['addon']->value['domainname']) {?>
                                            <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['addon']->value['domainname'];?>
</span>
                                        <?php }?>
                                    </span>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                    <div class="prod-qty<?php if ($_smarty_tpl->tpl_vars['addon']->value['allowqty'] !== 2) {?> prod-qty-empty<?php }?> col-2" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['quantity'];?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['addon']->value['allowqty'] === 2) {?>
                                            <div class="input-number">
                                                <input type="number" data-input-number-input name="addonqty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['qty'];?>
" min="0" />
                                                <div class="input-number-actions">
                                                    <div class="plus" data-input-number-inc></div>
                                                    <div class="minus" data-input-number-dec></div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <div class="prod-price col" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
">
                                    <span class="cart-item-price price price-xs" data-input-number-price>
                                        <?php echo $_smarty_tpl->tpl_vars['addon']->value['totaltoday'];
if ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] != 'Free') {?><span class="price-cycle-inline">/<?php if ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "free") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfree'];
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "onetime") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "monthly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.monthly');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "quarterly") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.quarterly');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "semiannually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.semiannually');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "annually") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.annually');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "biennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.biennially');
} elseif ($_smarty_tpl->tpl_vars['addon']->value['billingcycle'] == "triennially") {
echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.period.short.triennially');
}?></span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['addon']->value['setup']) {
echo $_smarty_tpl->tpl_vars['addon']->value['setup']->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                                        <?php if ($_smarty_tpl->tpl_vars['addon']->value['isProrated']) {?><br /><small>(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprorata'];?>
 <?php echo $_smarty_tpl->tpl_vars['addon']->value['prorataDate'];?>
)</small><?php }?>
                                    </span>
                                    <button class="btn btn-primary-faded hidden" data-input-number-update data-toggle="tooltip" data-html="true" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>
" title="">
                                        <i class="ls ls-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>

                                    </button>
                                </div>
                                <div class="prod-actions">
                                    <div class="cart-item-actions d-flex">
                                        <button type="button" class="btn btn-icon" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeItem('a', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')">
                                            <i class="lm lm-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrades']->value, 'upgrade', false, 'num');
$_smarty_tpl->tpl_vars['upgrade']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['upgrade']->value) {
$_smarty_tpl->tpl_vars['upgrade']->do_else = false;
?>
                        <div class="panel-body cart-item" data-input-number>
                            <div class="row">
                                <div class="prod-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['upgrade'];?>
">
                                    <span class="cart-item-title">
                                        <span class="cart-item-title-main"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['upgrade'];?>
</span>                                                
                                        <?php if ($_smarty_tpl->tpl_vars['upgrade']->value->type == 'service') {?>
                                            <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value->originalProduct->productGroup->name;?>
<br><?php echo $_smarty_tpl->tpl_vars['upgrade']->value->originalProduct->name;?>
 => <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->newProduct->name;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['upgrade']->value->type == 'addon') {?>
                                            <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value->originalAddon->name;?>
 => <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->newAddon->name;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['upgrade']->value->type == 'service') {?>
                                            <span class="cart-item-title-small"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value->service->domain;?>
</span>
                                        <?php }?>
                                    </span>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showUpgradeQtyOptions']->value) {?>
                                    <div class="prod-qty<?php if (!$_smarty_tpl->tpl_vars['upgrade']->value->allowMultipleQuantities) {?> prod-qty-empty<?php }?> col-sm-2" data-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['quantity'];?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['upgrade']->value->allowMultipleQuantities) {?>
                                            <div class="input-number">
                                                <input type="number" data-input-number-input name="upgradeqty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['upgrade']->value->qty;?>
" min="<?php echo $_smarty_tpl->tpl_vars['upgrade']->value->minimumQuantity;?>
" />
                                                <div class="input-number-actions">
                                                    <div class="plus" data-input-number-inc></div>
                                                    <div class="minus" data-input-number-dec></div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            -
                                        <?php }?>
                                    </div>
                                <?php }?>
                                <div class="prod-price col">
                                    <span class="cart-item-price price price-xs" data-input-number-price>
                                        <span>
                                            <?php if ((smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['upgrade']->value->newRecurringAmount,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'') == '0.00' || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['upgrade']->value->newRecurringAmount,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'') == '0,00') && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->newRecurringAmount;?>

                                            <?php }?>    
                                        </span>
                                        <span class="price-cycle-inline"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value->localisedNewCycle;?>
</span>
                                    </span>
                                    <button class="btn btn-primary-faded hidden" data-input-number-update data-toggle="tooltip" data-html="true" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>
" title="">
                                        <i class="ls ls-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>

                                    </button>
                                </div>
                                <div class="prod-actions">
                                    <div class="cart-item-actions d-flex">
                                        <button type="button" class="btn btn-icon btn-sm" data-toggle="tooltip" data-html="true" data-original-title=" <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
" onclick="removeItem('u', '<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')">
                                            <i class="ls ls-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            <?php if ($_smarty_tpl->tpl_vars['upgrade']->value->totalDaysInCycle > 0) {?>
                                <div class="w-100"></div>
                                <div class="prod-addons col">
                                    <div class="prod-addons-container">
                                        <div class="addon-item row">
                                            <div class="addon-name <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>col-6<?php } else { ?>col-7<?php }?>">
                                                <span class="item-group">
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['upgradeCredit'];?>

                                                </span>
                                                <div class="upgrade-calc-msg">
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"upgradeCreditDescription",'daysRemaining'=>$_smarty_tpl->tpl_vars['upgrade']->value->daysRemaining,'totalDays'=>$_smarty_tpl->tpl_vars['upgrade']->value->totalDaysInCycle),$_smarty_tpl ) );?>

                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value || $_smarty_tpl->tpl_vars['showAddonQtyOptions']->value) {?>
                                                <div class="addon-qty addon-qty-empty col-4 col-md-2">
                                                        -
                                                </div>
                                            <?php }?>
                                            <div class="item-price col">
                                                <span><?php echo $_smarty_tpl->tpl_vars['upgrade']->value->creditAmount;?>
</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="panel-footer d-flex space-between">
                        <div class="content <?php if ($_smarty_tpl->tpl_vars['taxenabled']->value && !$_smarty_tpl->tpl_vars['loggedin']->value) {
} else { ?>d-flex space-between w-100 flex-nowrap<?php }?>">
                            <a href="cart.php" class="btn btn-default btn-sm"><i class="ls ls-reply"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['continueShopping'];?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['taxenabled']->value && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <a data-toggle="modal" data-target="#estimate-taxes" class="btn btn-default btn-sm" href="#"><i class="ls ls-bank-note"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['estimateTaxes'];?>
</a>
                            <?php } else { ?>
                                <button type="button" class="btn btn-default btn-sm" id="btnEmptyCart"><i class="ls ls-trash"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['emptycart'];?>
</button>
                            <?php }?>
                        </div>            
                        <div class="content">
                            <?php if ($_smarty_tpl->tpl_vars['taxenabled']->value && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <button type="button" class="btn btn-default btn-sm" id="btnEmptyCart"><i class="ls ls-trash"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['emptycart'];?>
</button>
                            <?php }?>
                        </div>            
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php }
}
}
