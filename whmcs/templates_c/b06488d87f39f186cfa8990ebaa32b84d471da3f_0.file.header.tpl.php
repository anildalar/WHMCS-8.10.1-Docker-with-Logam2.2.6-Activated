<?php
/* Smarty version 3.1.48, created on 2024-09-23 04:46:38
  from '/var/www/html/templates/lagom2/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f0f2ae4cf8f0_16324624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06488d87f39f186cfa8990ebaa32b84d471da3f' => 
    array (
      0 => '/var/www/html/templates/lagom2/header.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/".((string)$_smarty_tpl->tpl_vars[\'template\']->value)."/core/layouts/main-menu/default/default.tpl' => 1,
  ),
),false)) {
function content_66f0f2ae4cf8f0_16324624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/header.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <!DOCTYPE html>
    <html lang="<?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['languageCode'];?>
" <?php if (($_smarty_tpl->tpl_vars['language']->value == 'arabic' || $_smarty_tpl->tpl_vars['language']->value == 'hebrew' || $_smarty_tpl->tpl_vars['language']->value == 'farsi') && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/css/theme-rtl.css")) {?>dir="rtl"<?php }?>>
    <head>
        <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


        <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>
            <link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/css/fontawesome-all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <?php } else { ?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/css/fontawesome-all.min.css" rel="stylesheet">
        <?php }?>
    </head>
    <body class="lagom<?php if ($_smarty_tpl->tpl_vars['bodyClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['bodyClasses']->value;
if (strstr($_smarty_tpl->tpl_vars['bodyClasses']->value,'page-login') && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['name'] != 'sidebar') {?> page-login-<?php echo $_smarty_tpl->tpl_vars['loginBgStyle']->value;
}
}
if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?> lagom-not-portal<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['bodyClass']) {?> <?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['bodyClass'];
}
if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['bodyClass']) {?> <?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['bodyClass'];
}
if ($_smarty_tpl->tpl_vars['inShoppingCart']->value) {?> page-order<?php }
if (!strstr($_smarty_tpl->tpl_vars['templatefile']->value,"/")) {?> page-<?php echo $_smarty_tpl->tpl_vars['templatefile']->value;
}
if ($_smarty_tpl->tpl_vars['pageModuleName']->value) {?> page-<?php echo $_smarty_tpl->tpl_vars['pageModuleName']->value;
}
if ($_smarty_tpl->tpl_vars['module']->value) {?> page-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['module']->value, 'UTF-8')," ",'');
}
if ($_smarty_tpl->tpl_vars['mgCaResult']->value['vars']['mainName']) {?> page-<?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['mgCaResult']->value['vars']['mainName'], 'UTF-8')," ",'');
}
if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> page-user-logged<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'] == "1" || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['isFullPage'] == "true" || $_smarty_tpl->tpl_vars['templatefile']->value == "oauth/layout") {?> page-type-full<?php }
if ($_smarty_tpl->tpl_vars['pageType']->value == "website" && $_smarty_tpl->tpl_vars['activeDisplay']->value == "CMS") {?> page-lagom-cms<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['mobile_menu_style'] == 'dropdown') {?> nav-mobile-dropdown<?php }
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['capitalize_section_titles'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['capitalize_section_titles'] == "disabled" && ($_smarty_tpl->tpl_vars['isSite']->value || (isset($_smarty_tpl->tpl_vars['custompage']->value)))) {?> inherit-section-titles<?php }
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_discounts'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_discounts'] == "true") {?> hide-discounts<?php }
if ($_smarty_tpl->tpl_vars['RSThemes']->value['pageSettings']['body_class']) {?> <?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['pageSettings']['body_class'];
}?>" data-phone-cc-input="<?php echo $_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value;?>
">

    <?php if ((isset($_smarty_tpl->tpl_vars['lagomClientAlerts']->value)) && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->header) {?> 
        <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->header;?>

    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']))) {?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['mediumPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/main-menu/default/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
}
