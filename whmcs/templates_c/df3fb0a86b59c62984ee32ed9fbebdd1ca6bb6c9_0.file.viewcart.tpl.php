<?php
/* Smarty version 3.1.48, created on 2024-09-10 08:48:02
  from '/var/www/html/templates/orderforms/lagom2/viewcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e007c2cc9557_81272081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3fb0a86b59c62984ee32ed9fbebdd1ca6bb6c9' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/viewcart.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/summary-table.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/promo-code.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/form-billing.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/form-domain-details.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/form-payment-gateway.tpl' => 1,
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/custom-tos.tpl' => 2,
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/custom-tos-hidden.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/ordersummary-checkout.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/modal/empty-cart.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/modal/remove-item.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/modal/remove-addon.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/modal/estimate-taxes.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/recommendations-modal.tpl' => 1,
  ),
),false)) {
function content_66e007c2cc9557_81272081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
>
        // Define state tab index value
        var statesTab = 10;
        var stateNotRequired = true;
    <?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>

    <div class="main-grid<?php if ($_smarty_tpl->tpl_vars['mainGrid']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainGrid']->value;
}?>">
        <div class="main-content <?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">        
        <?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?>
            <div class="message message-no-data">
                <div class="message-image">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"basket"), 0, true);
?>                        
                </div>
                <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartempty'];?>
</h6>
                <div class="message-action">
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php">
                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.start_shopping');?>

                    </a>
                </div>
            </div>        
            <?php if ($_smarty_tpl->tpl_vars['promoSliderExtension']->value && $_smarty_tpl->tpl_vars['promoBannerStatus']->value == '1') {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promo-slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"cart-view",'class'=>"m-t-3x"), 0, true);
?>
            <?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['promoerrormessage']->value) {?>
            <div class="alert alert-lagom alert-primary alert-danger" role="alert">
                <div class="alert-body">
                    <?php echo $_smarty_tpl->tpl_vars['promoerrormessage']->value;?>

                </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
            <div class="alert alert-lagom alert-primary alert-danger" role="alert">
                <div class="alert-body">
                    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                    <ul>
                        <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                    </ul>
                </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['promotioncode']->value && $_smarty_tpl->tpl_vars['rawdiscount']->value == "0.00") {?>
            <div class="alert alert-lagom alert-primary alert-info" role="alert">
                <div class="alert-body">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['promoappliedbutnodiscount'];?>

                </div>
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['promoaddedsuccess']->value) {?>
            <div class="alert alert-lagom alert-primary alert-success" role="alert">
                <div class="alert-body">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['promotionAccepted'];?>

                </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['bundlewarnings']->value) {?>
            <div class="alert alert-lagom alert-primary alert-warning" role="alert">
                <div class="alert-body">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundlereqsnotmet'];?>
</strong><br />
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundlewarnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/summary-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hidePromoBox'] != "1") {?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/promo-code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['hookOutput']->value) {?>
            <div class="section">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                    <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['output']->value,'style="margin:20px 0;"',''),'<div class="sub-heading"><span>','<div class="section-header"><span class="section-title">'),'<div class="sub-heading"><span class="primary-bg-color">','<div class="section-header"><span class="section-title">');?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
            <?php echo '<script'; ?>
>
                window.langPasswordStrength = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
";
                window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
                window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
                window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
                window.langPasswordTooShort = "<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.at_least_pass');?>
";
            <?php echo '</script'; ?>
>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=checkout" name="orderfrm" class="billing-details-form" id="frmCheckout">
                <input type="hidden" name="submit" value="true" />
                
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/form-billing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/form-domain-details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/form-payment-gateway.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php if ($_smarty_tpl->tpl_vars['showMarketingEmailOptIn']->value) {?>
                <div class="section<?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideJoinToMailingList'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideJoinToMailingList'] == "1") {?> hidden<?php }?>">
                    <div class="section-header">
                        <h2 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailMarketing.joinOurMailingList'),$_smarty_tpl ) );?>
</h2>
                        <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['marketingEmailOptInMessage']->value;?>
</p>
                    </div>
                    <div class="section-body">
                        <div class="panel panel-switch m-w-288<?php if ($_smarty_tpl->tpl_vars['marketingEmailOptIn']->value) {?> checked<?php }?>">
                            <div class="panel-body">
                                <span class="switch-label"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.receive_emails');?>
</span>
                                <label class="switch switch--lg switch--text">
                                    <input class="switch__checkbox" type="checkbox" name="marketingoptin" value="1" <?php if ($_smarty_tpl->tpl_vars['marketingEmailOptIn']->value) {?> checked<?php }?>>
                                    <span class="switch__container"><span class="switch__handle"></span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['shownotesfield']->value) {?>
                <div class="section">
                    <div class="section-header">
                        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['additionalNotes'];?>
</h5>
                    </div>
                    <div class="section-body">
                        <textarea name="notes" class="form-control" rows="4" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotesdescription'];?>
"><?php echo $_smarty_tpl->tpl_vars['orderNotes']->value;?>
</textarea>
                    </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['tosLocation'] === "End of order page") {?>
                    <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                        <div class="order-checkbox" data-form-input="#accepttos">
                            <div class="checkbox m-t-3x m-b-1x" id="tos-checkbox">
                                <label>
                                    <input class="icheck-control" type="checkbox" data-tos-checkbox />
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></span>
                                </label>
                            </div>
                            <div class="alert alert-lagom alert-xs alert-danger m-b-2x hidden">
                                <div class="alert-body">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordererroraccepttos'];?>

                                </div>
                            </div> 
                        </div>
                        <?php if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos.tpl")) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    <?php }?>
                <?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['servedOverSsl']->value) {?>
                <div class="section">
                    <div class="section-body">
                        <div class="alert alert-warning checkout-security-msg">
                            <div class="alert-body">
                                <i class="ls ls-lock"></i>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <input class="hidden" type="checkbox" name="accepttos" id="accepttos" />
                <?php if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos-hidden.tpl")) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos-hidden.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
                <button type="submit" id="submit-checkout" class="hidden btn btn-primary btn-lg <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['completeorder'];?>

                </button>

                <button type="submit"
                        id="btnCompleteOrder"
                        class="hidden btn btn-primary btn-lg disable-on-click spinner-on-click<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>"
                        <?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?>disabled="disabled"<?php }?>
                >
                    <?php if ($_smarty_tpl->tpl_vars['inExpressCheckout']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['confirmAndPay'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['completeorder'];
}?>
                    &nbsp;<i class="fas fa-arrow-circle-right"></i>
                </button>

            </form>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.payment.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
>
                var hideCvcOnCheckoutForExistingCard = '<?php if ($_smarty_tpl->tpl_vars['canUseCreditOnCheckout']->value && $_smarty_tpl->tpl_vars['applyCredit']->value && ($_smarty_tpl->tpl_vars['creditBalance']->value->toNumeric() >= $_smarty_tpl->tpl_vars['total']->value->toNumeric())) {?>1<?php } else { ?>0<?php }?>';
            <?php echo '</script'; ?>
>
        <?php }?>
        </div>
        <div class="main-sidebar main-sidebar-lg">
            <div class="sidebar-sticky sidebar-sticky-summary" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>>
                <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['summaryStyle']->value;?>
 order-summary" id="orderSummary">
                    <div class="loader" id="orderSummaryLoader" style="display: none;">
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
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/ordersummary-checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['tosLocation'] === "Default" || !(isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['tosLocation']))) {?>
                    <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                        <div class="order-checkbox" data-form-input="#accepttos">
                            <div class="checkbox m-t-0 m-b-1x" id="tos-checkbox">
                                <label>
                                    <input class="icheck-control" type="checkbox" data-tos-checkbox />
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></span>
                                </label>
                            </div>
                            <div class="alert alert-lagom alert-xs alert-danger m-b-2x hidden">
                                <div class="alert-body">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordererroraccepttos'];?>

                                </div>
                            </div> 
                        </div>
                        <?php if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos.tpl")) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>          
    
    <div class="order-summary order-summary-mob is-fixed" id="orderSummary" data-fixed-actions href="#orderSummary">    
        <button type="button" class="btn btn-lg btn-primary-faded btn-checkout<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled<?php }?> data-btn-loader id="checkout">
            <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['checkout'];?>
</span>
            <div class="loader loader-button hidden">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
            </div>
        </button>
    </div>
    
        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/modal/empty-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/modal/remove-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/modal/remove-addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/modal/estimate-taxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/recommendations-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo '<script'; ?>
>
        let assetsUrl = '<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/svg-illustrations/products/',
            activeStyle = '<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['iconType'];?>
',
            styleUrl = "";

        
            var hashtable = {};
            hashtable['<img src="/assets/img/marketconnect/icons/codeguard.png">'] = 'codeguard';
            hashtable['<img src="/assets/img/marketconnect/icons/sitelock.png">'] = 'sitelock';
            hashtable['<img src="/assets/img/marketconnect/icons/spamexperts.png">'] = 'spamexperts';
            hashtable['<img src="/assets/img/marketconnect/icons/symantec.png">'] = 'symantec';
            hashtable['<img src="/assets/img/marketconnect/icons/weebly.png">'] = 'weebly';

            hashtable['<img src="/assets/img/marketconnect/codeguard/'] = 'codeguard';
            hashtable['<img src="/assets/img/marketconnect/marketgoo/'] = 'marketgoo';
            hashtable['<img src="/assets/img/marketconnect/ox/'] = 'ox';
            hashtable['<img src="/assets/img/marketconnect/sitebuilder/'] = 'sitebuilder';
            hashtable['<img src="/assets/img/marketconnect/sitelock/'] = 'sitelock';
            hashtable['<img src="/assets/img/marketconnect/sitelockvpn/'] = 'sitelockvpn';
            hashtable['<img src="/assets/img/marketconnect/spamexperts/'] = 'spamexperts';
            hashtable['<img src="/assets/img/marketconnect/symantec/'] = 'symantec';
            hashtable['<img src="/assets/img/marketconnect/weebly/'] = 'weebly';
            hashtable['<img src="/assets/img/marketconnect/cpanelseo/'] = 'cpanelseo';
            hashtable['<img src="/assets/img/marketconnect/nordvpn/'] = 'nordvpn';
            hashtable['<img src="/assets/img/marketconnect/threesixtymonitoring/'] = 'threesixtymonitoring';
            hashtable['<img src="/assets/img/marketconnect/xovinow/'] = 'xovinow';
            function changeLogos() {
                $('.mc-promo-icon').each(function( index ) {
                    var banner = $(this);
                    $.each(hashtable, function( index, value ) {

                        if (banner.html().includes(index)){
                            if (activeStyle == "modern"){
                                styleUrl = "modern/"
                            }else{
                                styleUrl = ""
                            }
                            banner.html(banner.html().replace(index, ''));
                            banner.load(assetsUrl+styleUrl+value+'.tpl').removeClass('hidden');
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
