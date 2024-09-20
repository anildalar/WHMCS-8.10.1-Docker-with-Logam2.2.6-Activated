<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:22:21
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed22ad9e30b2_00487010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edaffa2bb3c938b68035f3105352637fa64ed8e1' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/tabs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed22ad9e30b2_00487010 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav--tabs custom-nav-styles" data-form-tabs="settings_tab">
    <div class="nav__header p-0x">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['sidebar']['categories'];?>

    </div>
    <?php if (\RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
        <li class="nav__item <?php if ($_GET['settingsTab'] == 'settings-display' || !(isset($_GET['settingsTab']))) {?> is-active <?php }?>">
            <a class="nav__link" data-toggle="lu-tab" data-change-hash="true"
                href="#settings-display">
                <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['sidebar']['display'];?>
</span>
            </a>
        </li>
    <?php }?>
    <li class="nav__item <?php if ($_GET['settingsTab'] == 'settings-general' || (!\RSThemes\Helpers\ContentChecker::checkCmsInstalled() && !(isset($_GET['settingsTab'])))) {?> is-active <?php }?>">
        <a class="nav__link" data-toggle="lu-tab" data-change-hash="true"
            href="#settings-general">
            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['sidebar']['general'];?>
</span>
        </a>
    </li>
    <li class="nav__item <?php if ($_GET['settingsTab'] == 'settings-order') {?> is-active <?php }?>">
        <a class="nav__link" data-toggle="lu-tab" data-change-hash="true"
            href="#settings-order">
            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['sidebar']['order_process'];?>
</span>
        </a>
    </li>
</ul><?php }
}
