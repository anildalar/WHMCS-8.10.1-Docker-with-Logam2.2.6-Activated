<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:36
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/cms_pages_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252b430eae2_51268958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ca6280143c8da7deaa8db6af510f97b2beafb7' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/cms_pages_tabs.tpl',
      1 => 1720189766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/cms/includes/tab-website.tpl' => 1,
    'file:adminarea/cms/includes/tab-sections.tpl' => 1,
    'file:adminarea/cms/includes/tab-media.tpl' => 1,
    'file:adminarea/cms/includes/tab-sitemap.tpl' => 1,
    'file:adminarea/cms/includes/tab-optimization.tpl' => 1,
    'file:adminarea/cms/includes/tab-export-import.tpl' => 1,
  ),
),false)) {
function content_66f252b430eae2_51268958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:adminarea/cms/includes/tab-website.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/includes/tab-sections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/includes/tab-media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/includes/tab-sitemap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/includes/tab-optimization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/includes/tab-export-import.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
