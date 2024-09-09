<?php
/* Smarty version 3.1.48, created on 2024-09-08 05:48:27
  from '/var/www/html/templates/twenty-one/includes/social-accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dd3aab4ae9b1_31019537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3693910293edb4745d244b27221eb381341d19ad' => 
    array (
      0 => '/var/www/html/templates/twenty-one/includes/social-accounts.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd3aab4ae9b1_31019537 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['socialAccounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
    <li class="list-inline-item">
        <a class="btn btn-icon mb-1" href="<?php echo $_smarty_tpl->tpl_vars['account']->value->getUrl();?>
" target="_blank">
            <i class="<?php echo $_smarty_tpl->tpl_vars['account']->value->getFontAwesomeIcon();?>
"></i>
        </a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
