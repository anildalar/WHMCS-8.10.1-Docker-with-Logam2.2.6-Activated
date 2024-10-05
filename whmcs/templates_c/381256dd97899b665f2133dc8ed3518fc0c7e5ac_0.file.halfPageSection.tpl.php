<?php
/* Smarty version 3.1.48, created on 2024-10-02 10:09:33
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/sections/halfPageSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd1bddef52c5_36219733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '381256dd97899b665f2133dc8ed3518fc0c7e5ac' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/sections/halfPageSection.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd1bddef52c5_36219733 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-col-md-6">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getFields(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml();?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getSections()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getSections(), 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['section']->value->getHtml();?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php }
}
