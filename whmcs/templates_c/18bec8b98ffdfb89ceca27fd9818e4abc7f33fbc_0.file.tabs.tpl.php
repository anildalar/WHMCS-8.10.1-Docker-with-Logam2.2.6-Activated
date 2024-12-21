<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:19:10
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/promobanners/includes/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666beeb93380_62071913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18bec8b98ffdfb89ceca27fd9818e4abc7f33fbc' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/promobanners/includes/tabs.tpl',
      1 => 1734760266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67666beeb93380_62071913 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__nav">
    <div class="container">
        <ul class="nav nav--md nav--h nav--tabs">
            <li class="nav__item <?php if ($_GET['exaction'] == 'settings' || !$_GET['exaction']) {?> is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                    <span class="nav__link-text">Promotions</span>
                </a>
            </li>
            <li class="nav__item <?php if ($_GET['exaction'] == 'media') {?> is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'media'));?>
">
                    <span class="nav__link-text">Media Library</span>
                </a>
            </li>
            <li class="nav__item <?php if ($_GET['exaction'] == 'options') {?>is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'options'));?>
">
                    <span class="nav__link-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div><?php }
}
