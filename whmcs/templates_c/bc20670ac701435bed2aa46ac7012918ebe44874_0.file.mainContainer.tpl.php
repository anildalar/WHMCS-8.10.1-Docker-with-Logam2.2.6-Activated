<?php
/* Smarty version 3.1.48, created on 2025-01-04 09:20:08
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/mainContainer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6778fd48ef3830_89565788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc20670ac701435bed2aa46ac7012918ebe44874' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/mainContainer.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6778fd48ef3830_89565788 (Smarty_Internal_Template $_smarty_tpl) {
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
