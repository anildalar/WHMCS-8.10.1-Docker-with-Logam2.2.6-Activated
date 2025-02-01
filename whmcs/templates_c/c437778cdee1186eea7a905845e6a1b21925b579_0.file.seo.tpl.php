<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:19
  from '/var/www/html/templates/lagom2/includes/common/seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d15310ece5_82791227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c437778cdee1186eea7a905845e6a1b21925b579' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/seo.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d15310ece5_82791227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/seo.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <title>
        <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['title'][$_smarty_tpl->tpl_vars['language']->value])) && (isset($_smarty_tpl->tpl_vars['pageSeo']->value['enabled'])) && $_smarty_tpl->tpl_vars['pageSeo']->value['enabled']) {?>
            <?php echo $_smarty_tpl->tpl_vars['pageSeo']->value['title'][$_smarty_tpl->tpl_vars['language']->value];?>

        <?php } elseif ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {?>
            <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
    
        <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "viewinvoice" || $_smarty_tpl->tpl_vars['templatefile']->value == "viewquote" || $_smarty_tpl->tpl_vars['templatefile']->value == "clientareahome" || $_smarty_tpl->tpl_vars['templatefile']->value == "viewticket") {?>
            <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "products") {?>
            <?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['displayTitle']->value;?>

        <?php }?> <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasecat" && $_smarty_tpl->tpl_vars['catname']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['catname']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasecat" && $_smarty_tpl->tpl_vars['tag']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasecat" && $_smarty_tpl->tpl_vars['catname']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['catname']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['templatefile']->value == "announcements" && $_smarty_tpl->tpl_vars['view']->value) {?>- <?php echo $_smarty_tpl->tpl_vars['view']->value;?>
 <?php }?>- <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>

    </title>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasearticle" || $_smarty_tpl->tpl_vars['templatefile']->value == "viewannouncement" || $_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasecat") {?>
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewannouncement") {
echo smarty_modifier_truncate(preg_replace('!\s+!u', " ",smarty_modifier_replace($_smarty_tpl->tpl_vars['summary']->value,'"','')),155,"...");
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasearticle") {
echo smarty_modifier_truncate(preg_replace('!\s+!u', " ",smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['kbarticle']->value['text']),'"','')),155,"...");
} elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasecat") {
echo smarty_modifier_truncate(preg_replace('!\s+!u', " ",smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['catname']->value),'"','')),155,"...");
}?>">
        <?php if (($_smarty_tpl->tpl_vars['templatefile']->value == "knowledgebasearticle" || $_smarty_tpl->tpl_vars['templatefile']->value == "viewannouncement") && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_hreflang_links'] != "displayed") {?>
            <link rel="alternate" hreflang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['activeLocale']->value['locale'],"_","-");?>
" href="<?php echo $_smarty_tpl->tpl_vars['seoHost']->value;
if (substr($_smarty_tpl->tpl_vars['currentUrl']->value,0,1) == '/') {
echo substr($_smarty_tpl->tpl_vars['currentUrl']->value,1);
} else {
echo $_smarty_tpl->tpl_vars['currentUrl']->value;
}?>"/>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == "products") {?>
        <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
            <meta name="description" content="<?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['productGroup']->value['tagline'],'"',''),155,"...");?>
">
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productgroups']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['foo']->value['gid'] == $_smarty_tpl->tpl_vars['gid']->value) {?>
                <?php $_smarty_tpl->_assignInScope('productSlug', $_smarty_tpl->tpl_vars['foo']->value['slug']);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_hreflang_links'] != "displayed") {?>
            <link rel="alternate" hreflang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['activeLocale']->value['locale'],"_","-");?>
" href="<?php echo $_smarty_tpl->tpl_vars['seoHost']->value;
if (substr($_smarty_tpl->tpl_vars['currentUrl']->value,0,1) == '/') {
echo substr($_smarty_tpl->tpl_vars['currentUrl']->value,1);
} else {
echo $_smarty_tpl->tpl_vars['currentUrl']->value;
}?>"/>
        <?php }?>
    
    <?php } elseif ($_smarty_tpl->tpl_vars['siteSeoDesc']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "store/sitebuilder/index") {?>
            <meta name="description" content="<?php echo smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['rslang']->value->trans('sitebuilder.banner.title'),'"',''),155,"...");?>
">
        <?php } else { ?>
            <meta name="description" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>smarty_modifier_truncate(smarty_modifier_replace($_smarty_tpl->tpl_vars['siteSeoDesc']->value,'"',''),155,"...")),$_smarty_tpl ) );?>
">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_hreflang_links'] != "displayed") {?>
            <link rel="alternate" hreflang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['activeLocale']->value['locale'],"_","-");?>
" href="<?php echo $_smarty_tpl->tpl_vars['seoHost']->value;
if (substr($_smarty_tpl->tpl_vars['currentUrl']->value,0,1) == '/') {
echo substr($_smarty_tpl->tpl_vars['currentUrl']->value,1);
} else {
echo $_smarty_tpl->tpl_vars['currentUrl']->value;
}?>"/>
        <?php }?>                
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['enabled'])) && $_smarty_tpl->tpl_vars['pageSeo']->value['enabled']) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['description'][$_smarty_tpl->tpl_vars['language']->value]))) {?><meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['pageSeo']->value['description'][$_smarty_tpl->tpl_vars['language']->value];?>
"><?php }?>
        <meta name="robots" content="<?php if ($_smarty_tpl->tpl_vars['pageSeo']->value['robots'] == 0) {?>noindex nofollow<?php } else { ?>index follow<?php }?>">
        <meta property="og:type" content="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>website<?php } else { ?>article<?php }?>">
        <meta property="og:title" content="<?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['title'][$_smarty_tpl->tpl_vars['language']->value]))) {
echo $_smarty_tpl->tpl_vars['pageSeo']->value['title'][$_smarty_tpl->tpl_vars['language']->value];
} else {
echo $_smarty_tpl->tpl_vars['displayTitle']->value;
}?> - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['description'][$_smarty_tpl->tpl_vars['language']->value]))) {?><meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['pageSeo']->value['description'][$_smarty_tpl->tpl_vars['language']->value];?>
"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['image']))) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['pageSeo']->value['image'];?>
"><?php }?>
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
echo ltrim($_SERVER['REQUEST_URI'],'/');?>
">
        <meta name="twitter:title" content="<?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['title'][$_smarty_tpl->tpl_vars['language']->value]))) {
echo $_smarty_tpl->tpl_vars['pageSeo']->value['title'][$_smarty_tpl->tpl_vars['language']->value];
} else {
echo $_smarty_tpl->tpl_vars['displayTitle']->value;
}?>">
        <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['description'][$_smarty_tpl->tpl_vars['language']->value]))) {?><meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['pageSeo']->value['description'][$_smarty_tpl->tpl_vars['language']->value];?>
"><?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['pageSeo']->value['image']))) {?><meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['pageSeo']->value['image'];?>
"><?php }?>
    <?php }?>
    <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['seoHost']->value;
if (substr($_smarty_tpl->tpl_vars['currentUrl']->value,0,1) == '/') {
echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(substr($_smarty_tpl->tpl_vars['currentUrl']->value,1),"?currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"&currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"?language=".((string)$_smarty_tpl->tpl_vars['language']->value),''),"&language=".((string)$_smarty_tpl->tpl_vars['language']->value),'');
} else {
echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['currentUrl']->value,"?currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"&currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"?language=".((string)$_smarty_tpl->tpl_vars['language']->value),''),"&language=".((string)$_smarty_tpl->tpl_vars['language']->value),'');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_hreflang_links'] == "displayed") {?>
        <?php if (substr($_smarty_tpl->tpl_vars['currentUrl']->value,0,1) == '/') {?>
            <?php $_smarty_tpl->_assignInScope('changedCurrentUrl', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(substr($_smarty_tpl->tpl_vars['currentUrl']->value,1),"?currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"&currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"?language=".((string)$_smarty_tpl->tpl_vars['language']->value),''),"&language=".((string)$_smarty_tpl->tpl_vars['language']->value),''));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('changedCurrentUrl', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['currentUrl']->value,"?currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"&currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"?language=".((string)$_smarty_tpl->tpl_vars['language']->value),''),"&language=".((string)$_smarty_tpl->tpl_vars['language']->value),''));?>
        <?php }?>
        <?php if (strstr($_smarty_tpl->tpl_vars['changedCurrentUrl']->value,"?")) {?>
            <?php $_smarty_tpl->_assignInScope('divChar', "&amp;");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('divChar', "?");?>
        <?php }?>
        <link rel="alternate" hreflang="x-default" href="<?php echo $_smarty_tpl->tpl_vars['seoHost']->value;
if (substr($_smarty_tpl->tpl_vars['currentUrl']->value,0,1) == '/') {
echo smarty_modifier_replace(smarty_modifier_replace(substr($_smarty_tpl->tpl_vars['currentUrl']->value,1),"?currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"&currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),'');
} else {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['currentUrl']->value,"?currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),''),"&currency=".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['id']),'');
}?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
            <link rel="alternate" hreflang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['language']->value['languageCode'],"_","-");?>
" href="<?php echo $_smarty_tpl->tpl_vars['seoHost']->value;
echo $_smarty_tpl->tpl_vars['changedCurrentUrl']->value;
echo $_smarty_tpl->tpl_vars['divChar']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['language']->value['language'];?>
">
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
}
