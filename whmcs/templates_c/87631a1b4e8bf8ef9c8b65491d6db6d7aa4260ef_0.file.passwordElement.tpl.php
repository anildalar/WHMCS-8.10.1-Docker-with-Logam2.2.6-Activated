<?php
/* Smarty version 3.1.48, created on 2024-10-04 06:19:49
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Product/Templates/elements/passwordElement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ff89055a6448_26125648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87631a1b4e8bf8ef9c8b65491d6db6d7aa4260ef' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Product/Templates/elements/passwordElement.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ff89055a6448_26125648 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="password_element">
    <input class="elementPasswordInput" type="password" style="border: 0 !important; width: 200px;" value="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getValue();?>
" readonly>
    <i class="elementPasswordIcon lu-zmdi lu-zmdi-eye-off" style="position: relative; float: right" onclick="changePasswordElement()"></i>
</span>
<?php }
}
