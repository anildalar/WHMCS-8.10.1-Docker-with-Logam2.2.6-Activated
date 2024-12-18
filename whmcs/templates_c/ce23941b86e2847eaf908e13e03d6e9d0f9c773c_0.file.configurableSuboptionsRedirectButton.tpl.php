<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:17
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/pages/configurableOptions/buttons/configurableSuboptionsRedirectButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6d9201869_58264749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce23941b86e2847eaf908e13e03d6e9d0f9c773c' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/pages/configurableOptions/buttons/configurableSuboptionsRedirectButton.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6d9201869_58264749 (Smarty_Internal_Template $_smarty_tpl) {
?><a <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_9_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>
        title="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>
"
    <?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
        title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>
"
    <?php }?>
    class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
"

    :disabled="dataRow.<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getDisableColumnName();?>
 == '<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getDisableColumnValue();?>
'"
    >
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?>
        <i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isShowTitle()) {?>
        <span class="lu-btn__text">
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>
                <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>

            <?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>

            <?php }?>
        </span>
    <?php }?>
</a><?php }
}
