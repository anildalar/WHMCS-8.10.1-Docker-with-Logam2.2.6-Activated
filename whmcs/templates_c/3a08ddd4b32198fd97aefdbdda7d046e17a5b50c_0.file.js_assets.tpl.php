<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:09
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/controlers/assets/js_assets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd49039084_55598868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a08ddd4b32198fd97aefdbdda7d046e17a5b50c' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/controlers/assets/js_assets.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778fd49039084_55598868 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isDebug']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/vue@2.6.14/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/vuex@3.1.0/dist/vuex.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/vue.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/vuex.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/moment.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/mgComponents.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/LagomOrderForm.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/swiper-bundle.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/pagination.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/jscolor.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/layers-ui.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/layers-ui-table.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/chart.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/jquery-ui.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>

<?php }
}
