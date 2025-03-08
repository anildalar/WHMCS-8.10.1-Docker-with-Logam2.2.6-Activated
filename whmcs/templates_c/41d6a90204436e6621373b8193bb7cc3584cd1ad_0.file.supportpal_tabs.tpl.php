<?php
/* Smarty version 3.1.48, created on 2025-03-04 13:30:26
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/includes/supportpal_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c700724b0cc4_96071792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d6a90204436e6621373b8193bb7cc3584cd1ad' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supportpal/includes/supportpal_tabs.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c700724b0cc4_96071792 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__nav">
    <div class="container">
        <ul class="nav nav--md nav--h nav--tabs">
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if ($_GET['exaction'] == 'settings' && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                    <span class="nav__link-text">Settings</span>
                </a>
            </li>
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if (($_GET['exaction'] == 'pages' || !(isset($_GET['exaction']))) && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'pages'));?>
">
                    <span class="nav__link-text">Pages</span>
                </a>
            </li>
        </ul>
    </div>
</div><?php }
}
