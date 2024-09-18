<?php
/* Smarty version 3.1.48, created on 2024-09-18 06:31:18
  from '/var/www/html/templates/lagom2/includes/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea73b600f658_93386282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610edc650b9de907c5b018a18317bc680ca31299' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/breadcrumb.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea73b600f658_93386282 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/breadcrumb.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>    
    <ol class="breadcrumb">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
            <li <?php if ($_smarty_tpl->tpl_vars['item']->last) {?> class="active"<?php }?>>
                <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

                <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?></a><?php }?>
            </li>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }
}
}
