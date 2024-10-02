<?php
/* Smarty version 3.1.48, created on 2024-10-02 05:51:29
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/baseForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcdf610a4cd3_09147908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06746c1a0da62fc38a109f551994676342bdc13e' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/forms/baseForm.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcdf610a4cd3_09147908 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php }
if ($_smarty_tpl->tpl_vars['rawObject']->value->getConfirmMessage()) {?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isTranslateConfirmMessage()) {?>
        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getConfirmMessage()), ENT_QUOTES);?>

    <?php } else { ?>
        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['rawObject']->value->getConfirmMessage(), ENT_QUOTES);?>

    <?php }
}?>

<form id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
" namespace="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
" index="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
" mgformtype="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getFormType();?>
"
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_3_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getClasses()) {?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
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
        <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getClasses()) {?>
        </div>
    <?php }?>
</form>
<?php }
}
