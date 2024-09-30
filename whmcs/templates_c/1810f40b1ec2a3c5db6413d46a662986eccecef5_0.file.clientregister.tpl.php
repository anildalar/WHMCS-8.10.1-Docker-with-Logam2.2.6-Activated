<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:42:21
  from '/var/www/html/templates/lagom2/clientregister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f9674dae3137_76778490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1810f40b1ec2a3c5db6413d46a662986eccecef5' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientregister.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f9674dae3137_76778490 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="main-body">
        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 
        </div>
    </div>
<?php }
}
}
