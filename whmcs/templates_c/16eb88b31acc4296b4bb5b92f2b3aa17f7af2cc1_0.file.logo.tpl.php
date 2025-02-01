<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:19
  from '/var/www/html/templates/lagom2/includes/common/logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d1532005b7_30177761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16eb88b31acc4296b4bb5b92f2b3aa17f7af2cc1' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/logo.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d1532005b7_30177761 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/logo.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
        
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == 'left-nav' && !$_smarty_tpl->tpl_vars['footerLogo']->value && !$_smarty_tpl->tpl_vars['isTopNav']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['leftNavStyle']->value == 'default' && !$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['logoSquare']) {?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logoSquare']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>
            <?php }?>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['logoSquareInverse']) {?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logoSquareInverse']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['logoSquare']) {?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logoSquare']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']) {?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['logo']) {?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>
            <?php }?>
        <?php }?>
        
    <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] == 'left-nav-wide' && !$_smarty_tpl->tpl_vars['footerLogo']->value && !$_smarty_tpl->tpl_vars['isTopNav']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['leftNavStyle']->value == 'default' && !$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>
            <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>
        <?php } else { ?>   
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']) {?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>     
            <?php }?>
        <?php }?>
        
    <?php } else { ?>
        <?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic'] && $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']) || ($_smarty_tpl->tpl_vars['topNavStyle']->value != "default" && $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']) || ($_smarty_tpl->tpl_vars['extendedFooterStyle']->value != "default" && $_smarty_tpl->tpl_vars['extendedFooterStyle']->value != "gray" && $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse'] && $_smarty_tpl->tpl_vars['footerLogo']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']);?>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['logo']))) {?>
            <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>  
        <?php }?>
    <?php }?>
        <?php if (((isset($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic'] && $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']) || ($_smarty_tpl->tpl_vars['topNavStyle']->value != "default" && $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse'] && (($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] != 'left-nav' && $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['templateLayout'] != 'left-nav-wide') || $_smarty_tpl->tpl_vars['isTopNav']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('logoMobileVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']);?>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['logo']))) {?>
        <?php $_smarty_tpl->_assignInScope('logoMobileVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['RCLogo']->value)) && $_smarty_tpl->tpl_vars['RCLogo']->value) {?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed" && !$_smarty_tpl->tpl_vars['ignoreMobileVersion']->value) {?>visible-xs visible-sm visible-md<?php }?> logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['RCLogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"></a>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['MBLogo']->value)) && $_smarty_tpl->tpl_vars['MBLogo']->value) {?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed" && !$_smarty_tpl->tpl_vars['ignoreMobileVersion']->value) {?>visible-xs visible-sm visible-md<?php }?> logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['MBLogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"></a>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['logoVersion']->value)) && $_smarty_tpl->tpl_vars['logoVersion']->value) {?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;?>
 <?php }?>logo<?php if ($_smarty_tpl->tpl_vars['logoMobileVersion']->value && !$_smarty_tpl->tpl_vars['ignoreMobileVersion']->value) {?> hidden-sm hidden-xs hidden-md<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['logoVersion']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
        <?php if ($_smarty_tpl->tpl_vars['logoMobileVersion']->value && !$_smarty_tpl->tpl_vars['ignoreMobileVersion']->value) {?>
            <a class="logo visible-xs visible-sm visible-md" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['logoMobileVersion']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;?>
 <?php }?>logo <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed" && !$_smarty_tpl->tpl_vars['ignoreMobileVersion']->value) {?>visible-xs visible-sm visible-md<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['assetLogoPath']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
    <?php } else { ?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;?>
 <?php }?>logo logo-text <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed" && !$_smarty_tpl->tpl_vars['ignoreMobileVersion']->value) {?>visible-xs visible-sm visible-md<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a>
    <?php }
}?>    <?php }
}
