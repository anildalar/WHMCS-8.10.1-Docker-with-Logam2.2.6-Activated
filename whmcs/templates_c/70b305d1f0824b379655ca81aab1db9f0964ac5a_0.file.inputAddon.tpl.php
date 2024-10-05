<?php
/* Smarty version 3.1.48, created on 2024-10-02 08:14:59
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/forms/fields/inputGroupElements/inputAddon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd0103d1f6b3_03305036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b305d1f0824b379655ca81aab1db9f0964ac5a' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/core/default/widget/forms/fields/inputGroupElements/inputAddon.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd0103d1f6b3_03305036 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-input-group__addon">
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
</div><?php }
}
