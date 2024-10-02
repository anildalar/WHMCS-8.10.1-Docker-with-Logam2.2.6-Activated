<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:42:36
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc12ca00739_14198633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f005c6111d436b84c3a5d7641310ad6c252915' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/view.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc12ca00739_14198633 (Smarty_Internal_Template $_smarty_tpl) {
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
