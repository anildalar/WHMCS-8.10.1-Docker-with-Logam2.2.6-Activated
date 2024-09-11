<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:52:03
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/layouts/layouts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffaa3c88024_94553606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9d5e1961d53ffc83ff8581b78370250e4a83ef' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/layouts/layouts.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 2,
    'file:adminarea/includes/svg-icons/sorting-arrows.tpl' => 4,
  ),
),false)) {
function content_66dffaa3c88024_94553606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206215686766dffaa3c50100_93520875', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156275261166dffaa3c57424_44253352', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45131341566dffaa3c58a30_94616685', "template-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_206215686766dffaa3c50100_93520875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_206215686766dffaa3c50100_93520875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_156275261166dffaa3c57424_44253352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_156275261166dffaa3c57424_44253352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_45131341566dffaa3c58a30_94616685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_45131341566dffaa3c58a30_94616685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="section">
        <div class="d-flex">
            <div class="app-main__sidebar">
                <div class="tabs tabs--block m-w-200 is-sticky">
                    <div class="tabs__nav"
                         data-options="navStorage:localStorage; localStorageId:custom-slider-23; slideToClickedSlide: true;">
                        <ul class="nav nav--tabs custom-nav-styles">
                            <div class="nav__header p-0x">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['menu'];?>

                            </div>
                            <li class="nav__item <?php if ($_GET['layoutTab'] == 'main-menu' || !(isset($_GET['layoutTab']))) {?> is-active <?php }?>">
                                <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#layout-main-menu">
                                    <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['layouts']['sidebar']['main_menu'];?>
</span>
                                </a>
                            </li>
                            <li class="nav__item <?php if ($_GET['layoutTab'] == 'footer') {?> is-active <?php }?>">
                                <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#layout-footer">
                                    <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['layouts']['sidebar']['footer'];?>
</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__content">
                <div class="tabs__body">
                    <div class="tab-content">
                        <div class="tab-pane <?php if ($_GET['layoutTab'] == 'main-menu' || !(isset($_GET['layoutTab']))) {?> is-active <?php }?>" id="layout-main-menu">
                            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                                <div class="top__toolbar">
                                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['layouts']['main_menu']['title'];
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['layouts']['main_menu_layout']), 0, false);
?></h3>
                                    
                                </div>
                            </div>
                            <div class="t-c__body t-c__body--boxed">
                                <table 
                                    class="t-c__table table mob-table--block" 
                                    id="settings-table" 
                                    data-services-table 
                                    data-search-input="#table-elements" 
                                    data-order='[0, "asc"]' 
                                    data-clickable-rows="true" 
                                    data-responsive="false"
                                >
                                    <colgroup>
                                        <col class="table__col-8">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                            <col class="table__col-5">
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <col class="table__col-2">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="cell-title">
                                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                                                <span class="sorting-icons-box">
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                </span>
                                            </th>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                <th class="cell-rule">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['rule']->value['name'];?>
</span>
                                                    <span class="sorting-icons-box">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    </span>
                                                </th>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <th class="cell-actions no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getMainMenuLayouts(), 'mainMenuLayout', false, 'k');
$_smarty_tpl->tpl_vars['mainMenuLayout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['mainMenuLayout']->value) {
$_smarty_tpl->tpl_vars['mainMenuLayout']->do_else = false;
?>
                                            <tr>
                                                <td class="cell-name">
                                                    <div class="rail">
                                                        <div class="content-extension">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['mainMenuLayout']->value->getName();?>
</strong>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                    <td class="cell-rule">
                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['rule']->value['main-menus'][$_smarty_tpl->tpl_vars['mainMenuLayout']->value->getMainName()]['active'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                                                            <span class="label label--outline label--success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                                        <?php } else { ?>
                                                            <span class="label label--outline label--default is-disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                                        <?php }?>
                                                    </td>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <td class="cell-actions">
                                                    <div class="has-dropdown">
                                                        <a class="btn btn--default btn--outline btn--xs" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                                                            <span class="btn__text is-hidden-mob-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['actions'];?>
</span>
                                                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                                                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-up" data-arrow-target></span>
                                                        </a>
                                                        <div class="dropdown" data-dropdown-menu>
                                                            <div class="dropdown__arrow" data-arrow></div>
                                                            <div class="dropdown__menu">
                                                                <ul class="nav">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                                        <li class="nav__item">
                                                                            <a class="nav__link <?php ob_start();
echo $_smarty_tpl->tpl_vars['rule']->value['main-menus'][$_smarty_tpl->tpl_vars['mainMenuLayout']->value->getMainName()]['active'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?> is-disabled<?php }?>"
                                                                            href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Display@setActiveMainMenuLayout',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'layoutName'=>$_smarty_tpl->tpl_vars['mainMenuLayout']->value->getMainName(),'ruleName'=>$_smarty_tpl->tpl_vars['rule']->value['name']));?>
">
                                                                                <span class="nav__link-icon ls ls-<?php echo $_smarty_tpl->tpl_vars['rule']->value['icon'];?>
"></span>
                                                                                <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['layouts']['table']['activate_for'];?>
 <?php echo $_smarty_tpl->tpl_vars['rule']->value['name'];?>
</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    <li class="nav__divider"></li>
                                                                    <li class="nav__item">
                                                                        <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['mainMenuLayout']->value->getLivePreviewLink();?>
" target="__blank">
                                                                            <span class="nav__link-icon ls ls-image"></span>
                                                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['live_preview'];?>
</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane <?php if ($_GET['layoutTab'] == 'footer') {?> is-active <?php }?>" id="layout-footer">
                            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                                <div class="top__toolbar">
                                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['layouts']['footer']['title'];?>
</h3>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['layouts']['footer_layout']), 0, true);
?>
                                </div>
                            </div>
                            <div class="t-c__body t-c__body--boxed">
                                <table class="t-c__table table mob-table--block" id="settings-table" data-services-table data-search-input="#table-elements" data-order='[0, "asc"]' data-clickable-rows="true" data-responsive="false">
                                    <colgroup>
                                        <col class="table__col-8">
                                        <col class="table__col-5">
                                        <col class="table__col-5">
                                        <col class="table__col-2">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="cell-title">
                                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                                                <span class="sorting-icons-box">
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                </span>
                                            </th>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                <th class="cell-rule">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['rule']->value['name'];?>
</span>
                                                    <span class="sorting-icons-box">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    </span>
                                                </th>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                            
                                            <th class="cell-actions no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getFooterLayouts(), 'footerLayout', false, 'k');
$_smarty_tpl->tpl_vars['footerLayout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['footerLayout']->value) {
$_smarty_tpl->tpl_vars['footerLayout']->do_else = false;
?>
                                            <tr>
                                                <td class="cell-name">
                                                    <div class="rail">
                                                        <div class="content-extension">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['footerLayout']->value->getName();?>
</strong>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                    <td class="cell-rule">
                                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['rule']->value['footers'][$_smarty_tpl->tpl_vars['footerLayout']->value->getMainName()]['active'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?>
                                                            <span class="label label--outline label--success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                                        <?php } else { ?>
                                                            <span class="label label--outline label--default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                                        <?php }?>
                                                    </td>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <td class="cell-actions">
                                                    <div class="has-dropdown">
                                                        <a class="btn btn--default btn--outline btn--xs" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                                                            <span class="btn__text is-hidden-mob-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['actions'];?>
</span>
                                                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                                                            <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-up" data-arrow-target></span>
                                                        </a>
                                                        <div class="dropdown" data-dropdown-menu>
                                                            <div class="dropdown__arrow" data-arrow></div>
                                                            <div class="dropdown__menu">
                                                                <ul class="nav">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                                        <li class="nav__item">
                                                                            <a class="nav__link <?php ob_start();
echo $_smarty_tpl->tpl_vars['rule']->value['footers'][$_smarty_tpl->tpl_vars['footerLayout']->value->getMainName()]['active'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?> is-disabled<?php }?>"
                                                                            href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Display@setActiveFooterLayout',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'layoutName'=>$_smarty_tpl->tpl_vars['footerLayout']->value->getMainName(),'ruleName'=>$_smarty_tpl->tpl_vars['rule']->value['name']));?>
">
                                                                                <span class="nav__link-icon ls ls-<?php echo $_smarty_tpl->tpl_vars['rule']->value['icon'];?>
"></span>
                                                                                <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['layouts']['table']['activate_for'];?>
 <?php echo $_smarty_tpl->tpl_vars['rule']->value['name'];?>
</span>
                                                                            </a>
                                                                        </li>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
}
