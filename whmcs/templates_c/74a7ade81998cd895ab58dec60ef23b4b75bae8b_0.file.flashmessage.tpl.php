<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:46:11
  from '/var/www/html/templates/lagom2/includes/flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff94359ba98_73786021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a7ade81998cd895ab58dec60ef23b4b75bae8b' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/flashmessage.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff94359ba98_73786021 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-lagom alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }?>">
        <div class="alert-body">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

        </div>
    </div>
<?php }
}
}
