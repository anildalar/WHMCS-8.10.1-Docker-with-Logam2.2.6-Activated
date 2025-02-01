<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:09
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/baseDataButton_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d149bd1534_64652852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4af181ae3c72169f1288775142ead914c0eabe6c' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/buttons/baseDataButton_components.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d149bd1534_64652852 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-data-button-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :component_data="component_data"

>
    <button type="button" class="lu-btn lu-btn--success" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_4_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
        <span class="lu-btn__text"><?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle()) {?> <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('button',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>
 <?php }?></span>
    </button>

<?php echo '</script'; ?>
><?php }
}
