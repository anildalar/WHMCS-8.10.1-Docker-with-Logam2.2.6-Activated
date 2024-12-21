<?php
/* Smarty version 3.1.48, created on 2024-12-21 07:19:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/support_hours_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67666bf731fb11_05510532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a0d124b6d0cb8b651eb334e01ba5fa1025488c' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/support_hours_tabs.tpl',
      1 => 1734760266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67666bf731fb11_05510532 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__nav">
    <div class="container">
        <ul class="nav nav--md nav--h nav--tabs">
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if (($_GET['exaction'] == 'settings' || !(isset($_GET['exaction']))) && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?> is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                    <span class="nav__link-text">Support</span>
                </a>
            </li>
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if ($_GET['exaction'] == 'holidays' && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'holidays'));?>
">
                    <span class="nav__link-text">Holidays</span>
                </a>
            </li>
            <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-disabled<?php }?> <?php if ($_GET['exaction'] == 'supportGlobalSettings' && $_smarty_tpl->tpl_vars['extension']->value->isActive()) {?>is-active<?php }?>">
                <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'supportGlobalSettings'));?>
">
                    <span class="nav__link-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php }
}
