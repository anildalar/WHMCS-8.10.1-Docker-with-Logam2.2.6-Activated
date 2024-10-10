<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:22
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/assets/js_assets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e2e5eb599_71282135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1eaeb8903d6cfb6d3ac95557414f3a370f29b98' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/controlers/assets/js_assets.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67036e2e5eb599_71282135 (Smarty_Internal_Template $_smarty_tpl) {
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
/js/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/vuex.min.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
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
/js/layers-ui-table.js"><?php echo '</script'; ?>
>    
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/chart.min.js"><?php echo '</script'; ?>
>            
<?php }
}
