<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:26
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/searchable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e32b2c972_78460718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c2ad277269b2d06175eef4603796e4bfbb6ac7' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/searchable.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67036e32b2c972_78460718 (Smarty_Internal_Template $_smarty_tpl) {
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
