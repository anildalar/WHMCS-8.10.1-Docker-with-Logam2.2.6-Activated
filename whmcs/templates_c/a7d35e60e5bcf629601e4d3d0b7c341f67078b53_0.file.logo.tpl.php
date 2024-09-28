<?php
/* Smarty version 3.1.48, created on 2024-09-27 12:27:02
  from '/var/www/html/templates/lagom2/includes/login/logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6a496990a57_83274237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7d35e60e5bcf629601e4d3d0b7c341f67078b53' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/login/logo.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f6a496990a57_83274237 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/logo.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if (!$_smarty_tpl->tpl_vars['sidebarLogo']->value) {?>
    <div class="login-header">
    <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['name'] == 'sidebar' && $_smarty_tpl->tpl_vars['loginSidebarStyle']->value != 'default' && ($_smarty_tpl->tpl_vars['loginSidebarStyle']->value == 'primary' || $_smarty_tpl->tpl_vars['loginSidebarStyle']->value == 'secondary' || ($_smarty_tpl->tpl_vars['loginSidebarStyle']->value == 'default' && $_smarty_tpl->tpl_vars['loginBgStyle']->value != 'default')) && $_smarty_tpl->tpl_vars['sidebarLogo']->value) || (($_smarty_tpl->tpl_vars['loginBgStyle']->value == 'primary' || $_smarty_tpl->tpl_vars['loginBgStyle']->value == 'secondary') && !$_smarty_tpl->tpl_vars['sidebarLogo']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['name'] != 'sidebar') || $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['futuristic']) {?>
            <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('logoVersion', $_smarty_tpl->tpl_vars['RSThemes']->value['logo']);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['RCLogo']->value) {?>
            <a class="logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['RCLogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" ></a>
        <?php } elseif ($_smarty_tpl->tpl_vars['MBLogo']->value) {?>
            <a class="logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['MBLogo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" ></a>
        <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['logoVersion']->value) {?>
                <a class="logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['logoVersion']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse']) {?>
                <a class="logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['logo_inverse'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
            <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['logo']) {?>
                <a class="logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
            <?php } elseif ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
                <a class="logo" href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['assetLogoPath']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/></a>
            <?php } else { ?>
                <a href="<?php if ($_smarty_tpl->tpl_vars['lagom_logo_url']->value) {
echo $_smarty_tpl->tpl_vars['lagom_logo_url']->value;
} else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php<?php }?>" class="logo logo-text"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a>
            <?php }?>
        <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['sidebarLogo']->value) {?>  
    </div>
    <?php }
}
}
}
