<?php
/* Smarty version 3.1.48, created on 2024-09-23 12:35:55
  from '/var/www/html/templates/lagom2/includes/common/language-chooser-dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f160ab180fb2_50084432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f157359f7055c924a36669759658a3de2a70a122' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/language-chooser-dropdown.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f160ab180fb2_50084432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/language-chooser-dropdown.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/language-chooser-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="dropdown-menu dropdown-language-search dropdown-lazy <?php if (($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'] == "1" || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['name'] == "sidebar") && $_smarty_tpl->tpl_vars['type']->value == "login") {?>dropdown-menu-center<?php } else { ?> dropdown-menu-right<?php }?>" >
        <?php if (strstr($_smarty_tpl->tpl_vars['currentUrl']->value,"?")) {?>
            <?php $_smarty_tpl->_assignInScope('currentpagelinkback', rtrim($_smarty_tpl->tpl_vars['currentpagelinkback']->value,'&amp;'));?>
            <?php $_smarty_tpl->_assignInScope('divChar', "&amp;");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('currentpagelinkback', rtrim($_smarty_tpl->tpl_vars['currentpagelinkback']->value,'?'));?>
            <?php $_smarty_tpl->_assignInScope('divChar', "?");?>
        <?php }?>
        <input type="hidden" data-language-select-value value="<?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>
">
        <input type="hidden" data-language-select-backlink value="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;
echo $_smarty_tpl->tpl_vars['divChar']->value;?>
">
        <input type="hidden" data-language-select-lang value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['upgradeService']['select'];?>
">
        <div class="dropdown-header input-group align-center">
            <i class="input-group-icon lm lm-search"></i>
            <input class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
..." type="text" data-language-select-search>
        </div>
        <div class="nav-divider"></div>
        <div class="dropdown-menu-items has-scroll" data-language-select-list>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'locale');
$_smarty_tpl->tpl_vars['locale']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->do_else = false;
?>
            <div class="dropdown-menu-item <?php if ($_smarty_tpl->tpl_vars['activeLocale']->value['language'] == $_smarty_tpl->tpl_vars['locale']->value['language']) {?>active<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['pageType']->value == "website" && strstr($_smarty_tpl->tpl_vars['currentpagelinkback']->value,"cmsid")) {?>
                    <?php $_smarty_tpl->_assignInScope('divChar', '');?>
                    <?php $_smarty_tpl->_assignInScope('url', explode("?",$_smarty_tpl->tpl_vars['currentpagelinkback']->value));?>
                    <?php $_smarty_tpl->_assignInScope('url2', explode("&amp;",$_smarty_tpl->tpl_vars['url']->value[1]));?>
                    <?php $_smarty_tpl->_assignInScope('stringToReplace', ((string)$_smarty_tpl->tpl_vars['url2']->value[0]));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('stringToReplace', '');?>
                <?php }?>
                <a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentpagelinkback']->value,$_smarty_tpl->tpl_vars['stringToReplace']->value,'');
echo $_smarty_tpl->tpl_vars['divChar']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
" rel="nofollow">
                    <span class="language-flag flag-<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
">
                        <img class="lazyload hidden" data-src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/flags/<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
.svg"/>
                    </span>
                    <span class="language-text"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</span>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="dropdown-menu-item dropdown-menu-no-data">
            <span class="text-info text-large">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>

            </span>
        </div>                  
    </div>
<?php }
}
}
