<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:19:41
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/emailstyle/includes/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666c0deef446_42849969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81850b855f030530350187d84dcd4db856c9977b' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/emailstyle/includes/tabs.tpl',
      1 => 1734760266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67666c0deef446_42849969 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__nav">
    <div class="container">
        <ul class="nav nav--md nav--h nav--tabs">
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if ($_GET['exaction'] == 'settings' || !$_GET['exaction']) {?> is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                    <span class="nav__link-text">Settings</span>
                </a>
            </li>
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if ($_GET['exaction'] == 'styles') {?> is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'styles'));?>
">
                    <span class="nav__link-text">Styles</span>
                </a>
            </li>
        </ul>
    </div>
</div><?php }
}
