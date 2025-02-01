<?php
/* Smarty version 3.1.48, created on 2025-01-03 16:08:19
  from '/var/www/html/templates/lagom2/error/page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67780b73355e23_95911614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2ea653ff458375ad198aa3c39726a15ef3dc76' => 
    array (
      0 => '/var/www/html/templates/lagom2/error/page-not-found.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67780b73355e23_95911614 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['activeDisplay']->value == "CMS" && $_smarty_tpl->tpl_vars['pageType']->value == "website" && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/lagompage.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/lagompage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/error/overwrites/page-not-found.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/error/overwrites/page-not-found.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?> 
    <div class="container">
        <span class="error-page-title"> 404  </span>
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.subtitle"),$_smarty_tpl ) );?>
</h2> 
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.description"),$_smarty_tpl ) );?>
</p>
        <div class="error-page-actions"> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
" class="btn btn-primary btn-lg">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.home"),$_smarty_tpl ) );?>

            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
submitticket.php" class="btn btn-primary btn-lg">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.submitTicket"),$_smarty_tpl ) );?>

            </a> 
        </div>
    </div>
<?php }
}
}
