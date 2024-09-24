<?php
/* Smarty version 3.1.48, created on 2024-09-24 07:24:07
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/pageControllers/integrationsWrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f26917b00cd6_69577685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8458a81bc8fe46c69fcfaaa347ac10322b872166' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/pageControllers/integrationsWrapper.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f26917b00cd6_69577685 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['mainAssetsUrl']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['mainAssetsUrl']->value;?>
">
<?php }
if ($_smarty_tpl->tpl_vars['isCustomModuleCss']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['customAssetsURL']->value;?>
/css/module_styles.css?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
">
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['isLagomTemplate']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['isDebug']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.2/js/selectize.min.js"><?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/selectize.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php }
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['integrations']->value, 'value', false, 'varible');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varible']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <div class="mg-integration-container" mg-integration-target="<?php echo $_smarty_tpl->tpl_vars['value']->value['integrationDetails']->getJqSelector();?>
" mg-integration-type="<?php echo $_smarty_tpl->tpl_vars['value']->value['integrationDetails']->getIntegrationType();?>
"
         mg-integration-function="<?php echo $_smarty_tpl->tpl_vars['value']->value['integrationDetails']->getJsFunctionName();?>
">
        <?php echo $_smarty_tpl->tpl_vars['value']->value['htmlData'];?>

    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['mainContainer']->value->useJsBuild()) {
} elseif ($_smarty_tpl->tpl_vars['isDebug']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/lottie.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/vue@2.6.14/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/vuex@3.1.0/dist/vuex.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://unpkg.com/qs/dist/qs.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/mgComponents.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/LagomOrderForm.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/swiper-bundle.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/pagination.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/vue-inline-svg"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/vue-cookies@1.7.4/vue-cookies.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/lottie.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/LagomOrderForm.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/swiper-bundle.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['fullAssetsURL']->value;?>
/js/pagination.min.js?version=<?php echo $_smarty_tpl->tpl_vars['moduleVersion']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/vue-inline-svg"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/vue-cookies@1.7.4/vue-cookies.js"><?php echo '</script'; ?>
>
    <?php }
}
}
