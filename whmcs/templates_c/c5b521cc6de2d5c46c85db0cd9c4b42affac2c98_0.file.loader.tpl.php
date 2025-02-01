<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:04:24
  from '/var/www/html/templates/lagom2/includes/common/loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d248801051_42425989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b521cc6de2d5c46c85db0cd9c4b42affac2c98' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/loader.tpl',
      1 => 1679504690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d248801051_42425989 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/loader.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?> 
    <div class="spinner <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
<?php }?>     <?php }
}
