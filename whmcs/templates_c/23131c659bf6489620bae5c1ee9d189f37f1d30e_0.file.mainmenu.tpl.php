<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:38
  from '/var/www/html/templates/lagom2/includes/menu/mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de16299b08_95547301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23131c659bf6489620bae5c1ee9d189f37f1d30e' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/menu/mainmenu.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7de16299b08_95547301 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/menu/overwrites/mainmenu.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/menu/overwrites/mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="app-nav-menu" id="main-menu">
        <div class="container">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed") {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ignoreMobileVersion'=>"true"), 0, true);
?>
            <?php }?>
            <ul class="menu menu-primary" data-nav>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value,'navtype'=>"primary"), 0, true);
?>
            </ul>
        </div>
    </div>
<?php }
}
}
