<?php
/* Smarty version 3.1.48, created on 2024-09-27 18:25:55
  from '/var/www/html/templates/lagom2/includes/common/svg-illustration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6f8b3478c16_11886089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea08839b443b7a9bdaeeb3193dc71239285e1856' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/svg-illustration.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f6f8b3478c16_11886089 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/svg-illustration.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/custom/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/custom/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
}
