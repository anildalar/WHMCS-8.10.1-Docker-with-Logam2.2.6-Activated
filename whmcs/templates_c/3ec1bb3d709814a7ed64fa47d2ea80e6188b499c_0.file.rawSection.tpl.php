<?php
/* Smarty version 3.1.48, created on 2025-02-11 11:16:20
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/sections/rawSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67ab3184c70382_10104954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec1bb3d709814a7ed64fa47d2ea80e6188b499c' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/sections/rawSection.tpl',
      1 => 1738818655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab3184c70382_10104954 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['rawObject']->value->haveInternalAlertMessage()) {?>
    <div class="lu-alert <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertSize() !== '') {?>lu-alert--<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertSize();
}?> lu-alert--<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertMessageType();?>
 lu-alert--faded modal-alert-top">
        <div class="lu-alert__body">
            <?php if (htmlspecialchars_decode($_smarty_tpl->tpl_vars['rawObject']->value->isInternalAlertMessageRaw(), ENT_QUOTES)) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertMessage();
} else {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertMessage()), ENT_QUOTES);
}?>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getSections()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getSections(), 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['section']->value->getHtml();?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
<?php } else { ?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
" class="lu-col-md-12 <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getFields(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml();?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
