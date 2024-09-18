<?php
/* Smarty version 3.1.48, created on 2024-09-18 03:51:44
  from '/var/www/html/templates/lagom2/includes/login/language-chooser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea4e505de141_98010954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8124ecdd74916cd451c1615c3416eb1c091d5243' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/login/language-chooser.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea4e505de141_98010954 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/language-chooser.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/language-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1 && ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['isFullPage'] == '1' || $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['optionvars']['isFullPage'] == '1')) {?>
        <?php if ($_smarty_tpl->tpl_vars['type']->value == "login" || $_smarty_tpl->tpl_vars['templatefile']->value == "two-factor-new-backup-code") {?>
            <div class="login-language dropdown dropup language" data-language-select>
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['language'];?>
:&nbsp;</span>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>

                    <b class="ls ls-caret"></b>
                </a>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/language-chooser-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <?php } else { ?>
            <li class="dropdown language" data-language-select>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>

                    <b class="ls ls-caret"></b>
                </a>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/language-chooser-dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>                
            </li>
        <?php }?>
    <?php }
}
}
}
