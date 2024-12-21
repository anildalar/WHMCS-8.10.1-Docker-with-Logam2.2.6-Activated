<?php
/* Smarty version 3.1.48, created on 2024-12-21 05:56:55
  from '/var/www/html/templates/lagom2/core/layouts/main-menu/default/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_676658a75eae86_68302954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2533754467c30f196e34c773b1158b8c030c035' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/layouts/main-menu/default/default.tpl',
      1 => 1734760587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676658a75eae86_68302954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/main-menu/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'])."/header.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/main-menu/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'])."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars-custom.tpl")) {?>  
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars-custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php }?>

<?php $_smarty_tpl->_assignInScope('iconsPages', array('clientareadomains','supportticketslist','clientareainvoices','clientareaproducts'));
if (((isset($_smarty_tpl->tpl_vars['skipAppNav']->value)) && !$_smarty_tpl->tpl_vars['skipAppNav']->value) || !(isset($_smarty_tpl->tpl_vars['skipAppNav']->value))) {?>
    <div class="app-nav<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed") {?> app-nav-condensed<?php }?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?> sticky-navigation<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled' && $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == "default") {?> sticky-navigation--default<?php }?>" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-site-navbar<?php }?>>
        <?php if (count($_smarty_tpl->tpl_vars['secondaryNavbar']->value) > 0 && !$_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value && !$_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hiddenLg', true);?>
            <?php $_smarty_tpl->_assignInScope('hiddenXl', true);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondaryNavbar']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if (!strstr($_smarty_tpl->tpl_vars['item']->value->getClass(),"hidden-lg")) {?>
                    <?php $_smarty_tpl->_assignInScope('hiddenLg', false);?>
                <?php }?>
                <?php if (!strstr($_smarty_tpl->tpl_vars['item']->value->getClass(),"hidden-xl")) {?>
                    <?php $_smarty_tpl->_assignInScope('hiddenXl', false);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <div class="app-nav-header <?php if (count($_smarty_tpl->tpl_vars['secondaryNavbar']->value) == 0 && !$_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value && !$_smarty_tpl->tpl_vars['adminLoggedIn']->value && (!(isset($_smarty_tpl->tpl_vars['secondaryNavbarHtmlCache']->value)) || smarty_modifier_replace($_smarty_tpl->tpl_vars['secondaryNavbarHtmlCache']->value," ",'') == '')) {?>hidden-lg hidden-xl<?php } else {
if ($_smarty_tpl->tpl_vars['hiddenLg']->value) {?>hidden-lg <?php }
if ($_smarty_tpl->tpl_vars['hiddenXl']->value) {?>hidden-xl <?php }
}?>" id="header">
            <div class="container">
                <button class="app-nav-toggle navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/menu/top-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/menu/mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
<?php }
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/network-issues-notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="app-main <?php if ($_smarty_tpl->tpl_vars['isOnePageOrder']->value) {?>app-main-order<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['pageType']->value != "website") {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/validateuser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    <?php if ((((isset($_smarty_tpl->tpl_vars['skipMainHeader']->value)) && !$_smarty_tpl->tpl_vars['skipMainHeader']->value) || !(isset($_smarty_tpl->tpl_vars['skipMainHeader']->value))) && (((isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value)) && !$_smarty_tpl->tpl_vars['isOnePageOrder']->value) || !(isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value))) && ($_smarty_tpl->tpl_vars['pageType']->value != "website" || $_smarty_tpl->tpl_vars['activeDisplay']->value != "CMS") || ($_smarty_tpl->tpl_vars['pageType']->value == "website" && $_smarty_tpl->tpl_vars['activeDisplay']->value == "CMS" && !$_smarty_tpl->tpl_vars['pageContent']->value && $_smarty_tpl->tpl_vars['templatefile']->value != "homepage" && !$_smarty_tpl->tpl_vars['skipMainHeader']->value)) {?>
        <div class="main-header">
            <div class="container">
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['displayTitle']->value),'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>
                <?php } else { ?>
                    <?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value) {
echo (string)$_smarty_tpl->tpl_vars['product']->value;
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>((string)$_smarty_tpl->tpl_vars['displayTitle']->value)." ".$_prefixVariable1,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>false), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value === 'configureproductdomain') {?>
                        <div class="main-header-label"><span class="main-header-label-desc"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.product_selected');?>
: <span class="main-header-label-name"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['group_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</span><span></div>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    <?php }?>
    <?php if ((((isset($_smarty_tpl->tpl_vars['skipAppNav']->value)) && !$_smarty_tpl->tpl_vars['skipAppNav']->value) || !(isset($_smarty_tpl->tpl_vars['skipAppNav']->value))) && ((isset($_smarty_tpl->tpl_vars['skipMainBody']->value)) || (isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value)) || ($_smarty_tpl->tpl_vars['pageType']->value == "website" && $_smarty_tpl->tpl_vars['activeDisplay']->value == "CMS")) && ((isset($_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default)) && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default)) {?>
        <div class="custom-alerts">
            <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default;?>

        </div>
    <?php }?>
    <?php if ((((isset($_smarty_tpl->tpl_vars['skipMainBody']->value)) && !$_smarty_tpl->tpl_vars['skipMainBody']->value) || !(isset($_smarty_tpl->tpl_vars['skipMainBody']->value))) && (((isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value)) && !$_smarty_tpl->tpl_vars['isOnePageOrder']->value) || !(isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value))) && ($_smarty_tpl->tpl_vars['pageType']->value != "website" || $_smarty_tpl->tpl_vars['activeDisplay']->value != "CMS") || ($_smarty_tpl->tpl_vars['pageType']->value == "website" && $_smarty_tpl->tpl_vars['activeDisplay']->value == "CMS" && !$_smarty_tpl->tpl_vars['pageContent']->value && $_smarty_tpl->tpl_vars['templatefile']->value != "homepage" && !$_smarty_tpl->tpl_vars['skipMainBody']->value)) {?>
    <div class="main-body<?php if ($_smarty_tpl->tpl_vars['appMainBodyClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['appMainBodyClasses']->value;
}?>">
        <div class="container<?php if ((isset($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value)) && $_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>-fluid without-padding<?php }?>">
            <?php if (!$_smarty_tpl->tpl_vars['skipAppNav']->value && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default) {?>
                <div class="custom-alerts">
                    <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default;?>

                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value) {?><div class="main-grid"><?php }?>
                                <?php if (!$_smarty_tpl->tpl_vars['skipMainSidebar']->value) {?>
                <div class="main-sidebar <?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value) {?> main-sidebar-right <?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?><div class="sidebar-sticky" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>><?php }?>
                        <div class="sidebar sidebar-primary">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/sidebar-custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                        <div class="sidebar sidebar-secondary">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/sidebar-secondary-custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/sidebar-promo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?></div><?php }?>
                </div>
                <div class="main-content <?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {
echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>status-icons-enabled<?php }?>">
                                        <?php } elseif ((!(isset($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value)) || !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) && !$_smarty_tpl->tpl_vars['inShoppingCart']->value) {?>
                    <div class="main-content <?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {
echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>status-icons-enabled<?php }?>">
                <?php }?>
    <?php }?>
    <?php }
}
