<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:41:44
  from '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/ui/core/default/builder/container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc0f861df37_29525717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29c38489c5dc5b0cd59b1cbf7fd39f1f1e74f7fe' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/ui/core/default/builder/container.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc0f861df37_29525717 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-container <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'data', false, 'name');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <div class="lu-row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'dataElement', false, 'nameElement');
$_smarty_tpl->tpl_vars['dataElement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nameElement']->value => $_smarty_tpl->tpl_vars['dataElement']->value) {
$_smarty_tpl->tpl_vars['dataElement']->do_else = false;
?>
              <div id="<?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getId();?>
" class="<?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getClasses();?>
">
                  <?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getHtml();?>

              </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['scriptHtml']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        <?php echo $_smarty_tpl->tpl_vars['scriptHtml']->value;?>

    <?php echo '</script'; ?>
>
<?php }
}
}
