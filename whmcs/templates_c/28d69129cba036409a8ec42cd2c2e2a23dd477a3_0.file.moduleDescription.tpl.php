<?php
/* Smarty version 3.1.48, created on 2024-10-02 06:59:07
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/others/moduleDescription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcef3b0ddf97_16696877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d69129cba036409a8ec42cd2c2e2a23dd477a3' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/others/moduleDescription.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcef3b0ddf97_16696877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-alert alert-<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRaw()) {?>
        <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getDescription();?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isHtmlTagsAllowed()) {?>
            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getDescription()), ENT_QUOTES);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getDescription());?>

        <?php }?>
    <?php }?>
</div><?php }
}
