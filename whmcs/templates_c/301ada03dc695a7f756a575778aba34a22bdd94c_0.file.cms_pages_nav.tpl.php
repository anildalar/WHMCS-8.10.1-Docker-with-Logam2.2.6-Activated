<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:50:51
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/cms_pages_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea6a3b7f1c85_86358945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301ada03dc695a7f756a575778aba34a22bdd94c' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/cms_pages_nav.tpl',
      1 => 1720189766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea6a3b7f1c85_86358945 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="nav__header p-0x text-faded p-4">
    <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['settings'];?>

</div>
<li class="nav__item <?php if ($_GET['tab'] == 'section') {?> is-active <?php }?>">
    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#settings-sections">
        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['sections'];?>
</span>
    </a>
</li>
<li class="nav__item <?php if ($_GET['tab'] == 'media') {?> is-active <?php }?>">
    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#settings-media">
        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['media'];?>
</span>
    </a>
</li>
<li class="nav__item <?php if ($_GET['tab'] == 'sitemap') {?> is-active <?php }?>">
    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#settings-sitemap">
        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['sitemap'];?>
</span>
    </a>
</li>
<li class="nav__item <?php if ($_GET['tab'] == 'optimization') {?> is-active <?php }?>">
    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#settings-optimization">
        <span class="nav__link-text">Optimize</span>
    </a>
</li>
<li class="nav__item <?php if ($_GET['tab'] == 'export-import') {?> is-active <?php }?>">
    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#settings-export-import">
        <span class="nav__link-text">Export/Import</span>
    </a>
</li><?php }
}
