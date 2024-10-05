<?php
/* Smarty version 3.1.48, created on 2024-10-04 05:37:13
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/searchable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ff7f09971534_64535696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e0611749a130d2600ca67958eeea3b3c0ec97b' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/searchable.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ff7f09971534_64535696 (Smarty_Internal_Template $_smarty_tpl) {
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
