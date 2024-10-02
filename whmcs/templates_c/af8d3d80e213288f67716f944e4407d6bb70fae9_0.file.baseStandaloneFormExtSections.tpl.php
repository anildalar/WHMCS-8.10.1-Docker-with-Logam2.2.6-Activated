<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:42:36
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/baseStandaloneFormExtSections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc12ca38f77_41655157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af8d3d80e213288f67716f944e4407d6bb70fae9' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/baseStandaloneFormExtSections.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc12ca38f77_41655157 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
" mgformtype="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getFormType();?>
" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
"
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'aValue');
$_smarty_tpl->tpl_vars['aValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aValue']->key => $_smarty_tpl->tpl_vars['aValue']->value) {
$_smarty_tpl->tpl_vars['aValue']->do_else = false;
$__foreach_aValue_1_saved = $_smarty_tpl->tpl_vars['aValue'];
?> <?php echo $_smarty_tpl->tpl_vars['aValue']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['aValue']->value;?>
" <?php
$_smarty_tpl->tpl_vars['aValue'] = $__foreach_aValue_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
    <div class="lu-row">
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
        <div class="lu-app__main-actions">
            <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getSubmitHtml();?>

        </div>
    </div>
</form>
<?php }
}
