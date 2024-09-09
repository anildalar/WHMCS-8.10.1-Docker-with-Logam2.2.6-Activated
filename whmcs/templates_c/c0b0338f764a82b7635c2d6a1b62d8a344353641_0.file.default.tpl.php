<?php
/* Smarty version 3.1.48, created on 2024-09-08 06:05:27
  from '/var/www/html/templates/lagom2/core/layouts/footer/default/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dd3ea7c85df2_69237561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0b0338f764a82b7635c2d6a1b62d8a344353641' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/layouts/footer/default/default.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd3ea7c85df2_69237561 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php if ((!(isset($_smarty_tpl->tpl_vars['skipMainBody']->value)) || !$_smarty_tpl->tpl_vars['skipMainBody']->value) && (!(isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value)) || !$_smarty_tpl->tpl_vars['isOnePageOrder']->value) && ($_smarty_tpl->tpl_vars['pageType']->value != "website" || $_smarty_tpl->tpl_vars['activeDisplay']->value != "CMS") || ($_smarty_tpl->tpl_vars['pageType']->value == "website" && $_smarty_tpl->tpl_vars['activeDisplay']->value == "CMS" && !$_smarty_tpl->tpl_vars['pageContent']->value && $_smarty_tpl->tpl_vars['templatefile']->value != "homepage" && !$_smarty_tpl->tpl_vars['skipMainBody']->value)) {?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['inShoppingCart']->value)) || !$_smarty_tpl->tpl_vars['inShoppingCart']->value) {?></div><?php }?>
        <?php if ((!(isset($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value)) || !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) && !$_smarty_tpl->tpl_vars['inShoppingCart']->value) {?></div><?php }?>
            </div>
        </div>
    <?php }?>

    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/footer/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['name'])."/footer.tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/footer/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['name'])."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['pageContent']->value)) && is_array($_smarty_tpl->tpl_vars['pageContent']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('lastSection', end($_smarty_tpl->tpl_vars['pageContent']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['lastSection']->value['variables']['overlay']) {?>
            <?php $_smarty_tpl->_assignInScope('hasOverlay', true);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['lastSection']->value['variables']['combined']) {?>
            <?php $_smarty_tpl->_assignInScope('isCombined', true);?>
        <?php }?>
    <?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['skipMainFooter']->value)) || ((isset($_smarty_tpl->tpl_vars['skipMainFooter']->value)) && !$_smarty_tpl->tpl_vars['skipMainFooter']->value)) {?>
        <div class="main-footer<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['vars']['type'] == 'extended') {?> main-footer-extended main-footer-extended-<?php echo $_smarty_tpl->tpl_vars['extendedFooterStyle']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['vars']['footerClass']) {?> <?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['vars']['footerClass'];
}
if ($_smarty_tpl->tpl_vars['hasOverlay']->value) {?> has-overlay<?php } elseif ($_smarty_tpl->tpl_vars['isCombined']->value) {?> is-combined<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['footer-layouts']['vars']['type'] == 'extended') {?>
            <div class="footer-top">
                <div class="container">
                    <div class="footer-company">
                        <div class="footer-company-intro">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customClass'=>"footer-company-logo",'ignoreMobileVersion'=>"true",'footerLogo'=>true), 0, true);
?>  
                            <p class="footer-company-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('footer_extended.footer_desc');?>
</p>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['rsFooter']->value['social']) {?>
                            <ul class="footer-company-socials footer-nav footer-nav-h">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFooter']->value['social'], 'footerLink');
$_smarty_tpl->tpl_vars['footerLink']->index = -1;
$_smarty_tpl->tpl_vars['footerLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footerLink']->value) {
$_smarty_tpl->tpl_vars['footerLink']->do_else = false;
$_smarty_tpl->tpl_vars['footerLink']->index++;
$__foreach_footerLink_10_saved = $_smarty_tpl->tpl_vars['footerLink'];
?>
                                    <li class="<?php if ($_smarty_tpl->tpl_vars['footerLink']->value['style'] != "icon") {?>footer-social-wide<?php }?>">
                                        <a class="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['custom_classes'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['url'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['target_blank'])) && $_smarty_tpl->tpl_vars['footerLink']->value['target_blank']) {?>target="_blank"<?php }?>>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['icon'])) && $_smarty_tpl->tpl_vars['footerLink']->value['icon']) {?>
                                                <i class="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['icon'];?>
"></i>
                                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'])) && $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'];?>

                                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['media'])) && $_smarty_tpl->tpl_vars['footerLink']->value['media']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['media'];?>

                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['name'])) && $_smarty_tpl->tpl_vars['footerLink']->value['name']) {?>
                                                <span><?php echo $_smarty_tpl->tpl_vars['footerLink']->value['name'];?>
</span>
                                            <?php }?>
                                        </a>
                                    </li>
                                <?php
$_smarty_tpl->tpl_vars['footerLink'] = $__foreach_footerLink_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['rsFooter']->value['primary']) {?>
                        <div class="footer-site-map">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFooter']->value['primary'], 'footerLink');
$_smarty_tpl->tpl_vars['footerLink']->index = -1;
$_smarty_tpl->tpl_vars['footerLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footerLink']->value) {
$_smarty_tpl->tpl_vars['footerLink']->do_else = false;
$_smarty_tpl->tpl_vars['footerLink']->index++;
$__foreach_footerLink_11_saved = $_smarty_tpl->tpl_vars['footerLink'];
?>
                                    <div class="footer-col <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['custom_classes'];?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['footerPrimaryCol']->value;?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['footerLink']->value['children'] && count($_smarty_tpl->tpl_vars['footerLink']->value['children']) > 0) {?>
                                            <h3 class="footer-title collapsed" data-toggle="collapse" data-target="#footer-nav-<?php echo $_smarty_tpl->tpl_vars['footerLink']->index;?>
" aria-expanded="false" aria-controls="footer-nav-<?php echo $_smarty_tpl->tpl_vars['footerLink']->index;?>
">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['icon'])) && $_smarty_tpl->tpl_vars['footerLink']->value['icon']) {?>
                                                    <i class="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['icon'];?>
"></i>
                                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'])) && $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon']) {?>
                                                    <span><?php echo $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'];?>
</span>
                                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['media'])) && $_smarty_tpl->tpl_vars['footerLink']->value['media']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['media'];?>

                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['footerLink']->value['name']) {
echo $_smarty_tpl->tpl_vars['footerLink']->value['name'];
}?>
                                                <i class="footer-icon">
                                                    <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.21 10.01H8.79C8.66 10.01 8.53 9.96 8.44 9.86L0.14 1.57C0.04 1.48 0 1.34 0 1.22C0 1.1 0.05 0.97 0.15 0.87L0.86 0.16C1.06 -0.0400002 1.37 -0.0400002 1.57 0.16L9 7.6L16.43 0.15C16.63 -0.05 16.94 -0.05 17.14 0.15L17.85 0.86C18.05 1.06 18.05 1.37 17.85 1.57L9.56 9.86C9.47 9.95 9.34 10.01 9.21 10.01Z" fill="#B9BDC5"/>
                                                    </svg>
                                                </i>
                                            </h3>
                                            <ul class="footer-nav collapse" id="footer-nav-<?php echo $_smarty_tpl->tpl_vars['footerLink']->index;?>
">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerLink']->value['children'], 'footerChild');
$_smarty_tpl->tpl_vars['footerChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footerChild']->value) {
$_smarty_tpl->tpl_vars['footerChild']->do_else = false;
?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['footerChild']->value['url'];?>
" class="nav-link <?php echo $_smarty_tpl->tpl_vars['footerChild']->value['custom_classes'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['footerChild']->value['target_blank'])) && $_smarty_tpl->tpl_vars['footerChild']->value['target_blank']) {?>target="_blank"<?php }?>>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['footerChild']->value['icon'])) && $_smarty_tpl->tpl_vars['footerChild']->value['icon']) {?>
                                                                <i class="<?php echo $_smarty_tpl->tpl_vars['footerChild']->value['icon'];?>
"></i>
                                                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerChild']->value['predefined_icon'])) && $_smarty_tpl->tpl_vars['footerChild']->value['predefined_icon']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['footerChild']->value['predefined_icon'];?>

                                                            <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerChild']->value['media'])) && $_smarty_tpl->tpl_vars['footerChild']->value['media']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['footerChild']->value['media'];?>

                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['footerChild']->value['name'])) && $_smarty_tpl->tpl_vars['footerChild']->value['name']) {?><span><?php echo $_smarty_tpl->tpl_vars['footerChild']->value['name'];?>
</span><?php }?>
                                                        </a>
                                                    </li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        <?php } else { ?>
                                            <a class="footer-title <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['custom_classes'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['url'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['target_blank'])) && $_smarty_tpl->tpl_vars['footerLink']->value['target_blank']) {?>target="_blank"<?php }?>>
                                                <?php if ($_smarty_tpl->tpl_vars['footerLink']->value['icon']) {?>
                                                    <i class="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['icon'];?>
"></i>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon']) {?>  
                                                    <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'];?>

                                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['media'])) && $_smarty_tpl->tpl_vars['footerLink']->value['media']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['media'];?>

                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['footerLink']->value['name']) {?><span><?php echo $_smarty_tpl->tpl_vars['footerLink']->value['name'];?>
</span><?php }?>
                                            </a> 
                                        <?php }?>
                                    </div>
                                <?php
$_smarty_tpl->tpl_vars['footerLink'] = $__foreach_footerLink_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>  
                </div>
            </div>
            <?php }?>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-copyright"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"copyrightFooterNotice",'year'=>$_smarty_tpl->tpl_vars['date_year']->value,'company'=>$_smarty_tpl->tpl_vars['companyname']->value),$_smarty_tpl ) );?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['rsFooter']->value['secondary']) {?>
                        <ul class="footer-nav footer-nav-h">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsFooter']->value['secondary'], 'footerLink');
$_smarty_tpl->tpl_vars['footerLink']->index = -1;
$_smarty_tpl->tpl_vars['footerLink']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footerLink']->value) {
$_smarty_tpl->tpl_vars['footerLink']->do_else = false;
$_smarty_tpl->tpl_vars['footerLink']->index++;
$__foreach_footerLink_13_saved = $_smarty_tpl->tpl_vars['footerLink'];
?>
                                <li <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && ($_smarty_tpl->tpl_vars['footerLink']->value['type'] == "language" || $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "currencies")) {?> class="dropdown dropup"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "language") {?>data-language-select<?php }?>>
                                    <a <?php if ($_smarty_tpl->tpl_vars['footerLink']->value['custom_classes']) {?>class="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['custom_classes'];?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && ($_smarty_tpl->tpl_vars['footerLink']->value['type'] == "language" || $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "currencies")) {?>data-toggle="dropdown"<?php }?> href="<?php if ($_smarty_tpl->tpl_vars['footerLink']->value['url']) {
echo $_smarty_tpl->tpl_vars['footerLink']->value['url'];
} else { ?>#<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['target_blank'])) && $_smarty_tpl->tpl_vars['footerLink']->value['target_blank']) {?>target="_blank"<?php }?>>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['icon'])) && $_smarty_tpl->tpl_vars['footerLink']->value['icon']) {?>
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['footerLink']->value['icon'];?>
"></i>
                                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'])) && $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['predefined_icon'];?>

                                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['media'])) && $_smarty_tpl->tpl_vars['footerLink']->value['media']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['media'];?>

                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "language" && (isset($_smarty_tpl->tpl_vars['footerLink']->value['name'])) && $_smarty_tpl->tpl_vars['footerLink']->value['name']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['footerLink']->value['name'];?>

                                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['footerLink']->value['name'])) && $_smarty_tpl->tpl_vars['footerLink']->value['name']) {?>
                                            <span><?php echo $_smarty_tpl->tpl_vars['footerLink']->value['name'];?>
</span>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && ($_smarty_tpl->tpl_vars['footerLink']->value['type'] == "language" || $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "currencies")) {?>
                                            <b class="ls ls-caret"></b>
                                        <?php }?>
                                    </a>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "language") {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/language-chooser-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['footerLink']->value['type'])) && $_smarty_tpl->tpl_vars['footerLink']->value['type'] == "currencies") {?>
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/currency-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php }?>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['footerLink'] = $__foreach_footerLink_13_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }?>
</div>     
    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_cookie_box'] == 'displayed') {?> 
        <div class="cookie-bar cookie-bar--<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['cookie_box_position'];?>
 <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['cookie_box_position'] == 'bottom') {?>container<?php }?>" data-cookie data-cookie-name="cookie_bar" data-cookie-exp-time="365" data-delay="2000">
            <div class="cookie-bar__content">
                <div class="cookie-bar__icon">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cookie_bites"), 0, true);
?>  
                </div>
                <div class="cookie-bar__desc">
                    <?php if (empty($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['cookie_box_message'][$_smarty_tpl->tpl_vars['activeLocale']->value['language']])) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['cookie_box_message'][\WHMCS\Config\Setting::getValue("Language")]))) {?>
                            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['cookie_box_message'][\WHMCS\Config\Setting::getValue("Language")], ENT_QUOTES);?>

                        <?php } else { ?>

                        <?php }?>
                    <?php } else { ?>
                        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['cookie_box_message'][$_smarty_tpl->tpl_vars['activeLocale']->value['language']], ENT_QUOTES);?>

                    <?php }?>
                </div>
                <div class="cookie-bar__action">
                    <button class="btn btn-primary" data-close><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</button>
                </div>
            </div>
        </div>
    <?php }?>
    <div id="fullpage-overlay" class="hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img class="lazyload" data-src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/img/overlay-spinner.svg">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>
    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                    <div class="loader">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary modal-submit">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['submit'];?>

                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['close'];?>

                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['lagomClientAlerts']->value)) && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->footer) {?>
        <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->footer;?>

    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/generate-password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

    <div class="overlay"></div>
    <?php echo '<script'; ?>
 <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>defer<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/vendor.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>defer<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/lagom-app.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>
    <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>
    <?php } else { ?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/whmcs-custom.min.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>
    <?php }?>
</body>
</html><?php }
}
