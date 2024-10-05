<?php
/* Smarty version 3.1.48, created on 2024-10-02 07:58:56
  from '/var/www/html/modules/servers/HetznerVps/templates/client/default/controlers/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcfd40b7edf1_43110517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20f3bf9c34ad474de75799918bc5e2ef5e30a86' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/client/default/controlers/main.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcfd40b7edf1_43110517 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mg-wrapper body" data-target=".body" data-spy="scroll" data-twttr-rendered="true">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/layers-ui.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/mg_styles.css">
    <?php if ($_smarty_tpl->tpl_vars['isCustomModuleCss']->value) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['customAssetsURL']->value;?>
/css/module_styles.css">
    <?php }?>

    <div class="full-screen-module-container" id="layers">
        <div class="lu-app">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['isDebug']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/vue@2.6.14/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/vuex@3.1.0/dist/vuex.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/vuex.min.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/mgComponents.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/jscolor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/layers-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/chart.min.js"><?php echo '</script'; ?>
>

<div class="clear"></div>
<?php }
}
