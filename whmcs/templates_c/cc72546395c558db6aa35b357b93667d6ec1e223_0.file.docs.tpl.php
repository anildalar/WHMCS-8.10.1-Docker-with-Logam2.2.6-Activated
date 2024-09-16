<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/helpers/docs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e5cc230b3_10164800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc72546395c558db6aa35b357b93667d6ec1e223' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/helpers/docs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40e5cc230b3_10164800 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['link']->value) {?>
    <span class="form-label__counter label-docs">
        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="_blank" class="btn--doc btn btn--link btn--xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['docs'];?>
</a>
    </span>    
<?php }
}
}
