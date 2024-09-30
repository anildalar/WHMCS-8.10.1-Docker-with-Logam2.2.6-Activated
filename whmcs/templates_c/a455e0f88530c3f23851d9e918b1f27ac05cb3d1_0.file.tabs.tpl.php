<?php
/* Smarty version 3.1.48, created on 2024-09-28 11:48:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/includes/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7ed217dfa57_59428564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a455e0f88530c3f23851d9e918b1f27ac05cb3d1' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/cms/includes/tabs.tpl',
      1 => 1720189766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7ed217dfa57_59428564 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__nav">
    <div class="container">
        <ul class="nav nav--md nav--h nav--tabs">
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if (($_GET['exaction'] == 'settings' || !(isset($_GET['exaction']))) && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?> is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                    <span class="nav__link-text">Info</span>
                </a>
            </li>
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if ($_GET['exaction'] == 'config' && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'config'));?>
">
                        <span class="nav__link-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php }
}
