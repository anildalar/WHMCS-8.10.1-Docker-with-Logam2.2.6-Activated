<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:38
  from '/var/www/html/templates/lagom2/lagompage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de16321457_79117148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670144cc8538bcf3a6b53fe56961528eaab34c5a' => 
    array (
      0 => '/var/www/html/templates/lagom2/lagompage.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7de16321457_79117148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['templatefile']->value == "homepage") {?>
    <?php $_smarty_tpl->_assignInScope('pageClass', $_smarty_tpl->tpl_vars['templatefile']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('pageClass', smarty_modifier_replace($_smarty_tpl->tpl_vars['currentUrl']->value,"/",''));?>
    <?php if (strstr($_smarty_tpl->tpl_vars['pageClass']->value,"?")) {?>
        <?php $_smarty_tpl->_assignInScope('pageClass', explode("?",$_smarty_tpl->tpl_vars['pageClass']->value));?>
        <?php $_smarty_tpl->_assignInScope('pageClass', $_smarty_tpl->tpl_vars['pageClass']->value[0]);?>
    <?php }
}?>

<div class="site site-cms-<?php echo $_smarty_tpl->tpl_vars['pageClass']->value;?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageContent']->value, 'section', false, 'key');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['section']->value['html'])) {?>
            <?php echo $_smarty_tpl->tpl_vars['section']->value['html'];?>

        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['variables'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope($_smarty_tpl->tpl_vars['name']->value, $_smarty_tpl->tpl_vars['value']->value);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['section']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionId'=>$_smarty_tpl->tpl_vars['key']->value), 0, true);
?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
