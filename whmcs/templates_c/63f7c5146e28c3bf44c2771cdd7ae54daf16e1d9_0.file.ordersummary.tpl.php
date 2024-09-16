<?php
/* Smarty version 3.1.48, created on 2024-09-16 06:13:10
  from '/var/www/html/templates/orderforms/lagom2/ordersummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e7cc76a23037_57938964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f7c5146e28c3bf44c2771cdd7ae54daf16e1d9' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/ordersummary.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e7cc76a23037_57938964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['producttotals']->value) {?>
    <div class="panel-body">
        <div class="summary-content content">
            <ul class="summary-list">
                <li class="list-item list-item-main">
                    <span class="item-name main-item"><?php if ($_smarty_tpl->tpl_vars['producttotals']->value['allowqty'] && $_smarty_tpl->tpl_vars['producttotals']->value['qty'] > 1) {
echo $_smarty_tpl->tpl_vars['producttotals']->value['qty'];?>
 x <?php }?> <div class="pg-name d-inline"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['groupname'];?>
 - </div><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</span>
                    <span class="item-value"><?php if ($_smarty_tpl->tpl_vars['dc_product_price']->value) {?><span class="text-faded line-through"><?php echo $_smarty_tpl->tpl_vars['dc_product_price']->value;?>
</span> 
                            <?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['dc_product_discount_price']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0,00" || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['dc_product_discount_price']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0.00") {?>
                                <span class="item-value-free"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
                            <?php }?>
                            <span><?php echo $_smarty_tpl->tpl_vars['dc_product_discount_price']->value;?>
</span>
                        <?php } else { ?>
                        <?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['baseprice'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0,00" || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['baseprice'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0.00") {?>
                            <span class="item-value-free"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
                        <?php }?>
                        <span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['baseprice'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];
}?></span>
                    </span>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttotals']->value['configoptions'], 'configoption');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value) {?>
                        <li class="list-item faded">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
: <span class="item-optionname"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</span></span>
                            <span class="item-value"><?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['configoption']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['prefix'],''),$_smarty_tpl->tpl_vars['currency']->value['suffix'],'') != '') {?>
                                <?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['configoption']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0,00" || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['configoption']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0.00") {?>
                                    <span class="item-value-free"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
                                <?php }?>
                                <span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['configoption']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];
} else { ?>-<?php }?></span>
                                <?php if ($_smarty_tpl->tpl_vars['configoption']->value['setup']) {?> + <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['configoption']->value['setup'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                            </span>
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>  
            <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['addons']) {?>
            <ul class="summary-list">
                    <li class="list-item list-item-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartaddons'];?>
</li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttotals']->value['addons'], 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                    <li class="list-item">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                        <span class="item-value"><?php if ($_smarty_tpl->tpl_vars['dc_addon_prices']->value[$_smarty_tpl->tpl_vars['addon']->value['name']] && $_smarty_tpl->tpl_vars['dc_addon_prices']->value[$_smarty_tpl->tpl_vars['addon']->value['name']] != $_smarty_tpl->tpl_vars['addon']->value['recurring']) {?>
                            <span class="text-faded line-through"><?php echo $_smarty_tpl->tpl_vars['dc_addon_prices']->value[$_smarty_tpl->tpl_vars['addon']->value['name']];?>
</span><?php }?> 
                            <?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['addon']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0,00" || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['addon']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0.00") {?>
                                <span class="item-value-free"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
                            <?php }?>
                            <span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['addon']->value['recurring'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
</span>
                        </span>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>    
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurring'] || $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['addons']) {?>
                <ul class="summary-list summary-list-recurring">
                    <li class="list-item list-item-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalrecurring'];?>
</li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurringexcltax'], 'recurring', false, 'cycle');
$_smarty_tpl->tpl_vars['recurring']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cycle']->value => $_smarty_tpl->tpl_vars['recurring']->value) {
$_smarty_tpl->tpl_vars['recurring']->do_else = false;
?>
                        <li class="list-item">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
</span>
                            <span class="item-value">
                                <?php if ($_smarty_tpl->tpl_vars['dc_recurring_price']->value) {?>
                                    <?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['dc_recurring_price']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0,00" || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['dc_recurring_price']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0.00") {?>
                                        <span class="item-value-free"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
                                    <?php }?>
                                    <span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['dc_recurring_price']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
</span>
                                <?php } else { ?>
                                    <?php if (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['recurring']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0,00" || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['recurring']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') == "0.00") {?>
                                        <span class="item-value-free"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
                                    <?php }?>
                                    <span><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['recurring']->value,$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
</span>
                                <?php }?>
                            </span>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>    
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1'] || $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2'] || ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'] && smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') != "0,00" && smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') != "0.00")) {?>
                    <ul class="summary-list summary-list-taxes">
                    <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'] && smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') != "0,00" && smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],''),$_smarty_tpl->tpl_vars['currency']->value['prefix'],'') != "0.00") {?>
                        <li class="list-item">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartsetupfees'];?>
</span>
                            <span class="item-value"><?php if ($_smarty_tpl->tpl_vars['dc_product_setup_price']->value) {?><span class="text-faded line-through"><?php echo $_smarty_tpl->tpl_vars['dc_product_setup_price']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['dc_product_setup_discount_price']->value;?>
 <?php } else {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];
}?></span>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1']) {?>
                        <li class="list-item">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate'];?>
%</span>
                            <span class="item-value"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
</span>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2']) {?>
                        <li class="list-item">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname2'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'];?>
%</span>
                            <span class="item-value"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
</span>
                        </li>
                    <?php }?>
                </ul>
            <?php }?>
        </div>
    </div>
    <div class="panel-footer">
        <div class="price price-left-h">
            <span class="price-total"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
</span> 
            <div class="price-amount amt">
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['totaltoday'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>

            </div>
        </div>
        <div class="summary-actions">
            <button class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['summaryStyle']->value == "primary") {?>-faded<?php }?> btn-checkout" type="submit" id="btnCompleteProductConfig">
                <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span>
                <div class="loader loader-button hidden"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?> </div>
            </button>
        </div>
    </div>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['renewals']->value) || !empty($_smarty_tpl->tpl_vars['serviceRenewals']->value)) {?>
    <div class="panel-body">
        <div class="summary-content ddd">
            <?php if (!empty($_smarty_tpl->tpl_vars['serviceRenewals']->value)) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['carttotals']->value['renewalsByType']['services'])) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carttotals']->value['renewalsByType']['services'], 'serviceRenewal', false, 'serviceId');
$_smarty_tpl->tpl_vars['serviceRenewal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serviceId']->value => $_smarty_tpl->tpl_vars['serviceRenewal']->value) {
$_smarty_tpl->tpl_vars['serviceRenewal']->do_else = false;
?>
                        <ul class="summary-list">
                            <li class="list-item list-item-main list-item-services" id="cartServiceRenewal<?php echo $_smarty_tpl->tpl_vars['serviceId']->value;?>
">
                                <span class="item-name">
                                    <?php echo $_smarty_tpl->tpl_vars['serviceRenewal']->value['name'];?>

                                </span>
                                <span class="item-actions">
                                    <a onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['serviceId']->value;?>
','service');">
                                        <i class="ls ls-trash"></i>
                                    </a>
                                </span>
                            </li>
                            <li class="list-item list-item-domain">
                                <span class="item-domain text-small">
                                    <?php echo $_smarty_tpl->tpl_vars['serviceRenewal']->value['domainName'];?>

                                </span>
                            </li>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['serviceRenewal']->value['recurringBeforeTax'];?>
</span>
                                <span class="item-cycle"><?php echo $_smarty_tpl->tpl_vars['serviceRenewal']->value['billingCycle'];?>
</span>
                            </li>
                        </ul>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['carttotals']->value['renewalsByType']['addons'])) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carttotals']->value['renewalsByType']['addons'], 'serviceAddonRenewal', false, 'serviceAddonId');
$_smarty_tpl->tpl_vars['serviceAddonRenewal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serviceAddonId']->value => $_smarty_tpl->tpl_vars['serviceAddonRenewal']->value) {
$_smarty_tpl->tpl_vars['serviceAddonRenewal']->do_else = false;
?>
                        <ul class="summary-list">
                            <li class="list-item list-item-main list-item-services" id="cartServiceAddonRenewal<?php echo $_smarty_tpl->tpl_vars['serviceAddonId']->value;?>
">
                                <span class="item-name">
                                    <?php echo $_smarty_tpl->tpl_vars['serviceAddonRenewal']->value['name'];?>

                                </span>
                                <span class="item-actions">
                                    <a onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['serviceAddonId']->value;?>
','addon');">
                                        <i class="ls ls-trash"></i>
                                    </a>
                                </span>
                            </li>
                            <li class="list-item list-item-domain">
                                <span class="item-domain text-small">
                                    <?php echo $_smarty_tpl->tpl_vars['serviceAddonRenewal']->value['domainName'];?>

                                </span>
                            </li>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['serviceAddonRenewal']->value['recurringBeforeTax'];?>
</span>
                                <span class="item-cycle"><?php echo $_smarty_tpl->tpl_vars['serviceAddonRenewal']->value['billingCycle'];?>
</span>
                            </li>
                        </ul>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['renewals']->value) && !empty($_smarty_tpl->tpl_vars['carttotals']->value['renewalsByType']['domains'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carttotals']->value['renewalsByType']['domains'], 'renewal', false, 'domainId');
$_smarty_tpl->tpl_vars['renewal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domainId']->value => $_smarty_tpl->tpl_vars['renewal']->value) {
$_smarty_tpl->tpl_vars['renewal']->do_else = false;
?>
                    <ul class="summary-list">
                        <li class="list-item list-item-main" id="cartDomainRenewal<?php echo $_smarty_tpl->tpl_vars['domainId']->value;?>
">
                            <span class="item-name">
                                <?php echo $_smarty_tpl->tpl_vars['renewal']->value['domain'];?>
 - <?php echo $_smarty_tpl->tpl_vars['renewal']->value['regperiod'];?>
 <?php if ($_smarty_tpl->tpl_vars['renewal']->value['regperiod'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.year'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.years'),$_smarty_tpl ) );
}?>
                            </span>
                            <span class="item-value">
                                <?php echo $_smarty_tpl->tpl_vars['renewal']->value['priceBeforeTax'];?>

                            </span>
                            <span class="item-actions">
                                <a onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['domainId']->value;?>
','domain'); return false;" href="#" id="linkCartRemoveDomainRenewal<?php echo $_smarty_tpl->tpl_vars['domainId']->value;?>
">
                                    <i class="ls ls-trash"></i>
                                </a>
                            </span>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['renewal']->value['dnsmanagement']) {?>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaindnsmanagement'),$_smarty_tpl ) );?>
</span>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['renewal']->value['emailforwarding']) {?>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainemailforwarding'),$_smarty_tpl ) );?>
</span>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['renewal']->value['idprotection']) {?>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainidprotection'),$_smarty_tpl ) );?>
</span>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['renewal']->value['hasGracePeriodFee']) {?>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.graceFee'),$_smarty_tpl ) );?>
</span>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['renewal']->value['hasRedemptionGracePeriodFee']) {?>
                            <li class="list-item faded">
                                <span class="item-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainRenewal.redemptionFee'),$_smarty_tpl ) );?>
</span>
                            </li>
                        <?php }?>
                    </ul>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <ul class="summary-list">
                    <li class="list-item">
                    <span class="item-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'ordersubtotal'),$_smarty_tpl ) );?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['subtotal'];?>
</span>
                </li>
            </ul>
            <?php if (($_smarty_tpl->tpl_vars['carttotals']->value['taxrate'] && $_smarty_tpl->tpl_vars['carttotals']->value['taxtotal']) || ($_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'] && $_smarty_tpl->tpl_vars['carttotals']->value['taxtotal2'])) {?>
            <ul class="summary-list faded">
                <?php if ($_smarty_tpl->tpl_vars['carttotals']->value['taxrate']) {?>
                    <li class="list-item">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate'];?>
%</span>
                        <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxtotal'];?>
</span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['carttotals']->value['taxrate2']) {?>
                    <li class="list-item">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname2'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'];?>
%</span>
                        <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxtotal2'];?>
</span>
                    </li>
                <?php }?>
            </ul>
            <?php }?>
        </div>
    </div>
    <div class="panel-footer">
        <div class="price price-left-h">
            <span class="price-total"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
</span> 
            <div class="price-amount amt"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['carttotals']->value['total'],$_smarty_tpl->tpl_vars['currency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value['suffix'];?>
</div>
        </div>
        <div class="summary-actions">
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['summaryStyle']->value == "primary") {?>-faded<?php }?> btn-checkout" id="checkout">  
                <span><i class="ls ls-share"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['checkout'];?>
</span>
                <div class="loader loader-button hidden"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?> </div>
            </a>
        </div>
    </div>
<?php }
}
}
