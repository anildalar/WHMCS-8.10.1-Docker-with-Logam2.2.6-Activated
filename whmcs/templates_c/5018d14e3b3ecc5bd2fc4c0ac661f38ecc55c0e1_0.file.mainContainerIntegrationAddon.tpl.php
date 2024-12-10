<?php
/* Smarty version 3.1.48, created on 2024-11-26 12:00:11
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/mainContainerIntegrationAddon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745b84b2617d9_74056388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5018d14e3b3ecc5bd2fc4c0ac661f38ecc55c0e1' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/mainContainerIntegrationAddon.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745b84b2617d9_74056388 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="<?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueInstanceName();?>
" class="vue-app-main-container" mg-module="hetznerVps">
    <div class="lu-row"><i v-show="pageLoading" class="page_processing"></i></div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'dataElement', false, 'nameElement');
$_smarty_tpl->tpl_vars['dataElement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nameElement']->value => $_smarty_tpl->tpl_vars['dataElement']->value) {
$_smarty_tpl->tpl_vars['dataElement']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['dataElement']->value->getHtml();?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div id="allDropDown"></div>
    <div class="lu-preloader-container lu-preloader-container--full-screen lu-preloader-container--overlay" v-show="pagePreLoader">
        <div class="lu-preloader lu-preloader--lg"></div>
    </div>
</div>

<div id="loadedTemplates"></div>
<?php echo '<script'; ?>
 type="text/javascript">
    $('body').append('<div style="height: 0px;width: 0px;" id="layers"><div class="lu-app"><div class="lu-app-main"><div class="lu-app-main__body"><div id="<?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueInstanceName();?>
_modal" class="vue-app-main-modal-container"></div></div></div></div></div>');
<?php echo '</script'; ?>
>
<?php }
}
