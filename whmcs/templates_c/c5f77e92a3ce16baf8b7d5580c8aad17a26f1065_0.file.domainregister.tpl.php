<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/domainregister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce6d4241_09737373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f77e92a3ce16baf8b7d5580c8aad17a26f1065' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/domainregister.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-collapsed.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/captcha.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/search-result.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/spotlight.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/suggested.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/featured-tlds.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/tld-pricing.tpl' => 1,
  ),
),false)) {
function content_66dff7ce6d4241_09737373 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="main-grid<?php if ($_smarty_tpl->tpl_vars['mainGrid']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainGrid']->value;
}?>">
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] != '1') {?>
        <div class="main-sidebar hidden-sm hidden-md<?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide') {?> main-sidebar-right <?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?><div class="sidebar-sticky" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>><?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?></div><?php }?>
        </div>
        <?php }?>
        <div class="main-content <?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {
echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <div class="search-box search-box-<?php echo $_smarty_tpl->tpl_vars['searchBoxStyle']->value;?>
">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" id="frmDomainChecker" <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'] == 'true') {?>data-show-tld-cycle-switcher <?php if ((isset($_GET['period']))) {?>data-period="<?php echo $_GET['period'];?>
"<?php }
}?>>
                    <input type="hidden" name="a" value="checkDomain">
                    <div class="domain-search-input search-group search-group-lg">
                        <div class="search-field">
                            <input class="form-control"  type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" id="inputDomain" data-toggle="tooltip" data-delay="100" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainOrKeyword'),$_smarty_tpl ) );?>
" />
                            <div class="search-field-icon"><i class="lm lm-search"></i></div>
                        </div>
                        <div class="search-group-btn">
                            <button class="btn btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?> domain-check-availability <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>" type="submit" id="btnCheckAvailability">
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</span>
                                <div class="loader loader-button">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                                </div>
                            </button>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </form>
            </div>
                <div id="DomainSearchResults" class="hidden" data-scroll-to-results="true">
                                        <div class="domain-checker-result-headline" id="searchDomainInfo">
                        <div id="primaryLookupResult" class="hidden">
                            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/search-result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['spotlightTlds']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/spotlight.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/suggested.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showFeaturedTLD'] == '1') {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/featured-tlds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/tld-pricing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <div class="section">
                    <div class="section-body">
                        <div class="row row-eq-height row-eq-height-sm">
                            <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>6<?php } else { ?>12<?php }?>">
                                <div class="domain-promo-box">
                                    <div class="promo-box-body">
                                        <div class="promo-box-content">
                                            <div class="promo-box-icon">
                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"web-hosting"), 0, true);
?>  
                                            </div>
                                            <div class="promo-box-header">
                                                <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.addHosting'),$_smarty_tpl ) );?>
</h5>
                                                <p class="description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.chooseFromRange'),$_smarty_tpl ) );?>
</p>
                                            </div>
                                        </div>
                                        <div class="promo-box-content promo-box-content-between">
                                            <p class="promo-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.packagesForBudget'),$_smarty_tpl ) );?>
</p>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" class="btn btn-primary">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.exploreNow'),$_smarty_tpl ) );?>

                                            </a>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>
                                <div class="col-md-6">
                                    <div class="domain-promo-box">
                                        <div class="promo-box-body">
                                            <div class="promo-box-content">
                                                <div class="promo-box-icon">
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transfer-domain"), 0, true);
?>
                                                </div>
                                                <div class="promo-box-header">
                                                    <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferToUs'),$_smarty_tpl ) );?>
</h5>
                                                    <p class="description text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferExtend'),$_smarty_tpl ) );?>
*</p>
                                                </div>
                                            </div>
                                            <div class="promo-box-content promo-box-content-between">
                                                <p class="promo-description">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.extendExclusions'),$_smarty_tpl ) );?>
</p>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=transfer" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferDomain'),$_smarty_tpl ) );?>
</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div id="bottom-action-anchor" class="bottom-action-anchor"></div>
                <div class="bottom-action-sticky hidden" data-fixed-actions href="#bottom-action-anchor">
                    <div class="container">
                        <div class="sticky-content">
                            <div class="badge badge-circle-lg" id="cartItemCount">0</div>
                            <span class="m-l-1x"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('domains.domains_selected');?>
</span>
                        </div>
                        <div class="sticky-actions">
                            <a class="btn btn-lg btn-primary" href="cart.php?a=confdomains" id="btnDomainContinue"  data-btn-loader>
                                <span>
                                    <i class="ls ls-share"></i>
                                    <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span>
                                </span>
                                <div class="loader loader-button hidden" >
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
        <?php echo '<script'; ?>
>
            jQuery(document).ready(function() {
                <?php if (($_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['captchaError']->value && !$_smarty_tpl->tpl_vars['invalid']->value) || (!$_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['invalid']->value)) {?>
                    
                        setTimeout(function(){
                            jQuery('#btnCheckAvailability').trigger('click');
                        }, 500);
                      
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['invalid']->value) {?>
                    jQuery('#primaryLookupSearching').toggle();
                    jQuery('#primaryLookupResult').children().toggle();
                    jQuery('#primaryLookupResult').toggle();
                    jQuery('#DomainSearchResults').toggle();
                    jQuery('.domain-invalid').toggle();
                <?php }?>
            });
        <?php echo '</script'; ?>
>
    </div>
<?php }?> <?php }
}
