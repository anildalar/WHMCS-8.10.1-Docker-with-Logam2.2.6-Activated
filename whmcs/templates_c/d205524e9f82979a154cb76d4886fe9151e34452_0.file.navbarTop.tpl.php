<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:41:43
  from '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/ui/core/default/appLayouts/navbarTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc0f7e2d447_48963491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd205524e9f82979a154cb76d4886fe9151e34452' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/client/default/ui/core/default/appLayouts/navbarTop.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc0f7e2d447_48963491 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="<?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueInstanceName();?>
" class="vue-app-main-container">
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

<div id="<?php echo $_smarty_tpl->tpl_vars['mainContainer']->value->getVueInstanceName();?>
_modal" class="vue-app-main-modal-container"></div>

<div id="loadedTemplates"></div>
<?php }
}
