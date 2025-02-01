<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:04
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/sections/baseSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd44d00665_44980022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '844dc89146a564b24b8304ba86bc9b821dff22d4' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/sections/baseSection.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778fd44d00665_44980022 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-widget">
    <div class="lu-widget__body">
        <div class="lu-widget__content">
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
        </div>
    </div>
</div>
<?php }
}
