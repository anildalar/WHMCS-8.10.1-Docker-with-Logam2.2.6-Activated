<?php
/* Smarty version 3.1.48, created on 2024-09-28 11:42:56
  from '/var/www/html/templates/orderforms/lagom2/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7ebc0b18617_80433668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d7b76ebbade209ea7131f37b818069a0762b4d' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/common.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/overwrites/common.tpl' => 1,
  ),
),false)) {
function content_66f7ebc0b18617_80433668 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/common.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?> 
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/order.min.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>
<?php }
}
}
