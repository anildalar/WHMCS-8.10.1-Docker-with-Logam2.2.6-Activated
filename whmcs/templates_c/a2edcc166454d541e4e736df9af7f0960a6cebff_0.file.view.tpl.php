<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:18:50
  from '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/ui/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665dca7c1125_43306545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2edcc166454d541e4e736df9af7f0960a6cebff' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/ui/view.tpl',
      1 => 1734760266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67665dca7c1125_43306545 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['mainContainer']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getHtml();?>

    <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponents();?>

    <?php echo '<script'; ?>
>
        <?php if (!$_smarty_tpl->tpl_vars['mainContainer']->value->useJsBuild()) {?>
            <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getDefaultVueComponentsJs();?>

            <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponentsJs();?>

            <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponentsRegistrationsJs();?>


            <?php echo $_smarty_tpl->tpl_vars['customJsCode']->value;?>

        <?php }?>
    <?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['mainContainer']->value->useJsBuild()) {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getJsBuildUrl();?>
"><?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['customInlineJsCode']->value;?>

    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['mainContainer']->value->useJsBuild()) {?>
            <?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueComponentsRegistrationsJs();?>

        <?php }?>
    <?php echo '</script'; ?>
>
    <style>
        <?php echo $_smarty_tpl->tpl_vars['customCssCode']->value;?>

    </style>
<?php }
}
}
