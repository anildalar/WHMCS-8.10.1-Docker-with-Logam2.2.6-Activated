<?php
/* Smarty version 3.1.48, created on 2025-02-12 05:08:13
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67ac2cbd01d5c6_90577503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe116541be0389e5c57dce61425edac4e681cef6' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/ui/view.tpl',
      1 => 1738818655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ac2cbd01d5c6_90577503 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['mainContainer']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getHtml();?>

    <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponents();?>

    <?php echo '<script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getDefaultVueComponentsJs();?>

        <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponentsJs();?>

        <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponentsRegistrationsJs();?>


        <?php echo $_smarty_tpl->tpl_vars['customJsCode']->value;?>

    <?php echo '</script'; ?>
>
    <style>
        <?php echo $_smarty_tpl->tpl_vars['customCssCode']->value;?>

    </style>
<?php }
}
}
