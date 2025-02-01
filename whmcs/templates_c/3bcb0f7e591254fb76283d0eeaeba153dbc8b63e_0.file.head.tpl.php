<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:19
  from '/var/www/html/templates/lagom2/includes/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d15313bf04_10909244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bcb0f7e591254fb76283d0eeaeba153dbc8b63e' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/head.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d15313bf04_10909244 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/head.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-16.png">
        <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-180.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/favicon-144.png">
        <meta name="msapplication-config" content="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
echo $_smarty_tpl->tpl_vars['RSThemes']->value['faviconDir'];?>
/browserconfig.xml">
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['colors'] && is_object($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['colors']) && method_exists($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['colors'],"cssInjector")) {?>
        <?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['colors']->cssInjector(!$_smarty_tpl->tpl_vars['adminLoggedIn']->value);?>

    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/styles/default/assets/css/vars/minified.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
">     
    <?php }?>
    
        <?php if (($_smarty_tpl->tpl_vars['language']->value == 'arabic' || $_smarty_tpl->tpl_vars['language']->value == 'hebrew' || $_smarty_tpl->tpl_vars['language']->value == 'farsi') && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/css/theme-rtl.css")) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/theme-rtl.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>
        <?php } else { ?>
            <?php if (($_smarty_tpl->tpl_vars['isSite']->value || (isset($_smarty_tpl->tpl_vars['custompage']->value))) && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/css/site-rtl.css")) {?>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/site-rtl.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
">
            <?php }?>
        <?php }?>    
    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/theme.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>
        <?php } else { ?>
             <?php if (($_smarty_tpl->tpl_vars['isSite']->value || (isset($_smarty_tpl->tpl_vars['custompage']->value)))) {?>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/site.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
">
            <?php }?>
        <?php }?>
    <?php }?>
    
    <?php $_smarty_tpl->_assignInScope('moveDirUpInFileChecker', '');?>
    <?php if ($_smarty_tpl->tpl_vars['moveDirUp']->value) {?>
        <?php $_smarty_tpl->_assignInScope('moveDirUpInFileChecker', "../");?>
    <?php }?>

        <?php if (($_smarty_tpl->tpl_vars['language']->value == 'arabic' || $_smarty_tpl->tpl_vars['language']->value == 'hebrew' || $_smarty_tpl->tpl_vars['language']->value == 'farsi') && file_exists(((string)$_smarty_tpl->tpl_vars['moveDirUpInFileChecker']->value)."templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/styles/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'])."/assets/css/custom-rtl.css")) {?> 
        <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/styles/<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'];?>
/assets/css/custom-rtl.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
" rel="stylesheet">
    <?php } elseif (file_exists(((string)$_smarty_tpl->tpl_vars['moveDirUpInFileChecker']->value)."templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/styles/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'])."/assets/css/custom.css")) {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/styles/<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'];?>
/assets/css/custom.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
" rel="stylesheet">
    <?php }?>

        <?php if (($_smarty_tpl->tpl_vars['language']->value == 'arabic' || $_smarty_tpl->tpl_vars['language']->value == 'hebrew' || $_smarty_tpl->tpl_vars['language']->value == 'farsi') && file_exists(((string)$_smarty_tpl->tpl_vars['moveDirUpInFileChecker']->value)."templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/styles/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'])."/assets/css/theme-custom-rtl.css")) {?> 
        <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/styles/<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'];?>
/assets/css/theme-custom-rtl.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
" rel="stylesheet">
    <?php } elseif (file_exists(((string)$_smarty_tpl->tpl_vars['moveDirUpInFileChecker']->value)."templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/styles/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'])."/assets/css/theme-custom.css")) {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/core/styles/<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'];?>
/assets/css/theme-custom.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
" rel="stylesheet">
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['isOnePageOrder']->value)) && $_smarty_tpl->tpl_vars['isOnePageOrder']->value) {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/modules/addons/LagomOrderForm/app/UI/Client/Templates/assets/css/order/lagom2/index.css?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
" rel="stylesheet">
    <?php }?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

        <?php echo '<script'; ?>
>
        var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
            markdownGuide = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.title"),$_smarty_tpl ) ));?>
',
            locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
            saved = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saved"),$_smarty_tpl ) ));?>
',
            saving = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saving"),$_smarty_tpl ) ));?>
',
            whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
";
            <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->getPageJs();
}?>
    <?php echo '</script'; ?>
>
    <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>
        <?php echo '<script'; ?>
>disableInternalTabSelection = true<?php echo '</script'; ?>
>
    <?php }?>
        <?php echo '<script'; ?>
 <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>defer<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 <?php if ((isset($_smarty_tpl->tpl_vars['activeDisplay']->value)) && $_smarty_tpl->tpl_vars['activeDisplay']->value == 'CMS' && $_smarty_tpl->tpl_vars['pageType']->value == "website") {?>defer<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core.min.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>

        <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'])."/head.tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/layouts/".((string)$_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'])."/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
        <meta name="robots" content="noindex" />
    <?php }
}
}
}
