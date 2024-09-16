<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:07:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/helpers/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40ed4de64e9_11811663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52ea24208cb2f696f6dd31c7098ae1c1329c8a1' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/helpers/tooltip.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40ed4de64e9_11811663 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['tooltip']->value) {?>
    <span class="tooltip__container <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data-toggle='lu-tooltip' data-title="<?php echo $_smarty_tpl->tpl_vars['tooltip']->value;?>
">
        <svg  width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6" r="5.5" stroke="#B9BDC5"/>
            <path d="M7 6V9H5V6H7ZM5 5V3H7V5H5Z" fill="#B9BDC5"/>
        </svg>
    </span>
<?php }
}
}
