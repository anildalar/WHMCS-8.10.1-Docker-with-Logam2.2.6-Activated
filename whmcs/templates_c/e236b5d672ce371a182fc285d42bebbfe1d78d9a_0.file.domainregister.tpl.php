<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/lagom2/core/pages/domainregister/modern/domainregister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce6ec118_98012524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e236b5d672ce371a182fc285d42bebbfe1d78d9a' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/pages/domainregister/modern/domainregister.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/captcha.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/search-result.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/spotlight.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/suggested.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/featured-tlds.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/tld-pricing.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/bottom-sticky.tpl' => 1,
  ),
),false)) {
function content_66dff7ce6ec118_98012524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="main-banner banner-home banner-<?php echo $_smarty_tpl->tpl_vars['siteBannerStyle']->value;?>
">
    <div class="container">
        <h1 class="banner-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
</h1>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" id="frmDomainChecker" <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['tld_cycle_switcher'] == 'true') {?>data-show-tld-cycle-switcher <?php if ((isset($_GET['period']))) {?>data-period="<?php echo $_GET['period'];?>
"<?php }
}?>>
            <input type="hidden" name="a" value="checkDomain">
            <div class="domain-search-input search-group search-group-lg search-group-combined">
                <div class="search-field">
                    <input class="form-control"  type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" id="inputDomain" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainOrKeyword'),$_smarty_tpl ) );?>
" />
                    <div class="search-field-icon"><i class="lm lm-search"></i></div>
                </div>
                <div class="search-group-btn">
                    <button class="btn btn-primary domain-check-availability <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);
}?>" type="submit" id="btnCheckAvailability">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</span>
                        <div class="loader loader-button">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                        </div>
                    </button>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageClass'=>"rspage-modern"), 0, true);
?>
        </form>
    </div>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"site/banner-bg"), 0, true);
?> 
</div>
<div class="main-body">
    <div class="container">
        <div class="m-w-lg m-h-a">
                        <div class="section hidden" id="DomainSearchResults" data-scroll-to-results="false">
                <div class="domain-checker-result-headline" id="searchDomainInfo">
                    <div class="hidden" id="primaryLookupResult">
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
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/bottom-sticky.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"domainsearch"), 0, true);
?>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['invalid']->value) {
echo '<script'; ?>
>
    jQuery(document).ready(function() {
        jQuery('#primaryLookupSearching').toggle();
        jQuery('#primaryLookupResult').children().toggle();
        jQuery('#primaryLookupResult').toggle();
        jQuery('#DomainSearchResults').toggle();
        jQuery('.domain-invalid').toggle();
    });
<?php echo '</script'; ?>
>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['captchaError']->value && !$_smarty_tpl->tpl_vars['invalid']->value) || (!$_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['invalid']->value)) {
echo '<script'; ?>
>
    jQuery(document).ready(function() {
        
            setTimeout(function(){
                jQuery('#btnCheckAvailability').trigger('click');
            }, 500);
        
    });
<?php echo '</script'; ?>
>              
<?php }
}
}
