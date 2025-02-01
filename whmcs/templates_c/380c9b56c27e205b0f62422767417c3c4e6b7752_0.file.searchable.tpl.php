<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:05
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/searchable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d145077070_75582712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380c9b56c27e205b0f62422767417c3c4e6b7752' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/searchable.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d145077070_75582712 (Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="lu-top__search lu-input-group">
        <span class="lu-icon-sm lu-input-group__icon">
            <i class="lu-zmdi lu-zmdi-search "></i>
        </span>
        <input placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('searchPlacecholder');?>
" value="" @keydown.enter="searchDataEnter" class="lu-form-control lu-input-group__form-control lu-table-search">
    </div>

<?php }
}
