<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:37:24
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e407d44a2664_99793167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca4ec03208dacebc87c33d7905bfe15426d2057' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/header.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e407d44a2664_99793167 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['styleConfigurationPage']->value)) && $_smarty_tpl->tpl_vars['styleConfigurationPage']->value) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['angularDistCss']->value)) && $_smarty_tpl->tpl_vars['angularDistCss']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['angularDistCss']->value, 'dist');
$_smarty_tpl->tpl_vars['dist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dist']->value) {
$_smarty_tpl->tpl_vars['dist']->do_else = false;
?> 
            <link href="<?php echo $_smarty_tpl->tpl_vars['dist']->value;?>
" rel="stylesheet" type="text/css"/>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
}
