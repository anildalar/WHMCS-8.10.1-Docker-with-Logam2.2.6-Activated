<?php
/* Smarty version 3.1.48, created on 2024-11-26 12:00:11
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/buttons/buttonCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745b84b4c4081_72375978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b42ab08c2d686f3204f9a707c5fd1db9c101b93' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/buttons/buttonCreate.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745b84b4c4081_72375978 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_91_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_91_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
">
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?>
        <i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>
        <span class="lu-btn__text"><?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>
</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
        <span class="lu-btn__text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>
</span>
    <?php }?>
</a>
<?php }
}
