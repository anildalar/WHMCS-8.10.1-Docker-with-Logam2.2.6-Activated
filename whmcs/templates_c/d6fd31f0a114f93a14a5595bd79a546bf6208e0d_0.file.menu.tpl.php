<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:38
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea63629d8a32_99860590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6fd31f0a114f93a14a5595bd79a546bf6208e0d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/menu.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/alert/newMenuImport.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 3,
    'file:adminarea/includes/svg-icons/sorting-arrows.tpl' => 9,
  ),
),false)) {
function content_66ea63629d8a32_99860590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96055196466ea63629a2539_63978394', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80694628066ea63629a4079_32929215', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18893846266ea63629a4b55_19059169', "template-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_96055196466ea63629a2539_63978394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_96055196466ea63629a2539_63978394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_80694628066ea63629a4079_32929215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_80694628066ea63629a4079_32929215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_18893846266ea63629a4b55_19059169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_18893846266ea63629a4b55_19059169',
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
                            <li class="nav__item <?php if (!(isset($_GET['menuTab'])) || $_GET['menuTab'] == 'main') {?> is-active <?php }?>">
                                <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#menu-main">
                                    <span class="nav__link-text">Main</span>
                                </a>
                            </li>
                            <li class="nav__item <?php if ($_GET['menuTab'] == 'secondary') {?> is-active <?php }?>">
                                <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#menu-secondary">
                                    <span class="nav__link-text">Secondary</span>
                                </a>
                            </li>
                                                        <li class="nav__item <?php if ($_GET['menuTab'] == 'footer') {?> is-active <?php }?>">
                                <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#menu-footer">
                                    <span class="nav__link-text">Footer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <form data-menu-import-form action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Data@import',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" enctype="multipart/form-data" method="post">
                    <input type="file" data-menu-import-input name="file" class="d-none" accept="application/json"/>
                </form>
            </div>
            <div class="app-main__content">
                <?php if ($_smarty_tpl->tpl_vars['newChangedAnyMenuVersion']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/alert/newMenuImport.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
                <div class="tabs__body">
                    <div class="tab-content">
                        <div class="tab-pane <?php if (!(isset($_GET['menuTab'])) || $_GET['menuTab'] == 'main') {?> is-active <?php }?>" id="menu-main">
                            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                                <div class="top__toolbar">
                                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['main_menu']['title'];
$_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['menu']['main_menu']), 0, false);
?></h3>
                                    
                                </div>
                                <div class="top__toolbar is-right">
                                    <div class="top__search input-group">
                                        <span class="input-group__icon lm lm-search"></span>
                                        <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['search'];?>
..." id="main-search">
                                    </div>
                                    <button data-menu-import-btn class="btn btn--secondary">
                                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['import'];?>
</span><i class="btn__icon lm lm-download"></i>
                                        <span class="btn__preloader preloader"></span>
                                    </button>
                                    <a class="btn btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@new',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuLocation'=>'Main Menu','currentDisplay'=>$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->id,'menuTab'=>'main'));?>
">
                                        <i class="btn__icon lm lm-plus"></i>
                                        <span class="btn__text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>

                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="t-c__body t-c__body--boxed">
                                <table class="t-c__table table mob-table--block" id="main-table" data-services-table data-search-input="#main-search" data-order='[0, "asc"]' data-clickable-rows="true" data-responsive="false">
                                    <colgroup>
                                        <col class="table__col-10">
                                        <col class="table__col-6">
                                        <col class="table__col-6">
                                        <col class="table__col-2">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="cell-name">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                            </span>
                                        </th>
                                        <th class="cell-rule">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['rule'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-status">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['status'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-actions no-sort"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainMenus']->value, 'mainMenu');
$_smarty_tpl->tpl_vars['mainMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mainMenu']->value) {
$_smarty_tpl->tpl_vars['mainMenu']->do_else = false;
?>
                                        <tr>
                                            <td class="cell-name">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['mainMenu']->value->id,'menuTab'=>'main'));?>
"><strong ><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value->name;?>
</strong></a>
                                            </td>
                                            <td class="cell-rule">
                                                <?php if (is_array($_smarty_tpl->tpl_vars['mainMenu']->value->rule)) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['mainMenu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]))) {?>
                                                        <span><?php echo implode(', ',$_smarty_tpl->tpl_vars['mainMenu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]);?>
</span>
                                                    <?php } else { ?>
                                                        <span>-</span>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <span><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value->rule;?>
</span>
                                                <?php }?>
                                            </td>
                                            <td class="cell-status">
                                                <?php if (($_smarty_tpl->tpl_vars['mainMenu']->value->active)) {?>
                                                    <span class="label label--success label--outline"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                                <?php } else { ?>
                                                    <span class="label label--default label--outline is-disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                                <?php }?>
                                            </td>
                                            <td class="cell-actions">
                                                <a class="btn btn--xs btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['mainMenu']->value->id,'menuTab'=>'main'));?>
">
                                                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['manage'];?>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                                <div class="preloader-container is-hidden" data-table-preloader>
                                    <div class="preloader"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane <?php if ($_GET['menuTab'] == 'secondary') {?> is-active <?php }?>" id="menu-secondary">
                            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                                <div class="top__toolbar">
                                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['secondary_menu']['title'];?>
</h3>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['menu']['secondary_menu']), 0, true);
?>
                                </div>
                                <div class="top__toolbar is-right">
                                    <div class="top__search input-group">
                                        <span class="input-group__icon lm lm-search"></span>
                                        <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="Search..." id="secondary-search">
                                    </div>
                                    <button data-menu-import-btn class="btn btn--secondary">
                                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['import'];?>
</span>
                                        <i class="btn__icon lm lm-download"></i>
                                        <span class="btn__preloader preloader"></span>
                                    </button>
                                    <a class="btn btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@new',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuLocation'=>'Secondary Menu','currentDisplay'=>$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->id,'menuTab'=>'secondary'));?>
">
                                        <i class="btn__icon lm lm-plus"></i>
                                        <span class="btn__text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>

                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="t-c__body t-c__body--boxed">
                                <table class="t-c__table table mob-table--block" id="sidebar-table" data-services-table data-search-input="#secondary-search" data-order='[0, "asc"]' data-clickable-rows="true" data-responsive="false">
                                    <colgroup>
                                        <col class="table__col-10">
                                        <col class="table__col-6">
                                        <col class="table__col-6">
                                        <col class="table__col-2">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="cell-name">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-rule">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['rule'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-status">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['status'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-actions no-sort"></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondaryMenus']->value, 'secondaryMenu');
$_smarty_tpl->tpl_vars['secondaryMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondaryMenu']->value) {
$_smarty_tpl->tpl_vars['secondaryMenu']->do_else = false;
?>
                                        <tr>
                                            <td class="cell-name">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['secondaryMenu']->value->id,'menuTab'=>'secondary'));?>
"><strong><?php echo $_smarty_tpl->tpl_vars['secondaryMenu']->value->name;?>
</strong></a>
                                            </td>
                                            <td class="cell-rule">
                                                <?php if (is_array($_smarty_tpl->tpl_vars['secondaryMenu']->value->rule)) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['secondaryMenu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]))) {?>
                                                        <span><?php echo implode(', ',$_smarty_tpl->tpl_vars['secondaryMenu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]);?>
</span>
                                                    <?php } else { ?>
                                                        <span>-</span>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <span><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value->rule;?>
</span>
                                                <?php }?>
                                            </td>
                                            <td class="cell-status">
                                                <?php if (($_smarty_tpl->tpl_vars['secondaryMenu']->value->active)) {?>
                                                    <span class="label label--success label--outline"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                                <?php } else { ?>
                                                    <span class="label label--default label--outline is-disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                                <?php }?>
                                            </td>
                                            <td class="cell-actions">
                                                <a class="btn btn--xs btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['secondaryMenu']->value->id,'menuTab'=>'secondary'));?>
">
                                                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['manage'];?>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                                <div class="preloader-container is-hidden" data-table-preloader>
                                    <div class="preloader"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane <?php if ($_GET['menuTab'] == 'footer') {?> is-active <?php }?>" id="menu-footer">
                            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                                <div class="top__toolbar">
                                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['footer_menu']['title'];?>
</h3>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['menu']['footer_menu']), 0, true);
?>                         
                                </div>
                                <div class="top__toolbar is-right">
                                    <div class="top__search input-group">
                                        <span class="input-group__icon lm lm-search"></span>
                                        <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="Search..." id="nav-search">
                                    </div>
                                    <button data-menu-import-btn class="btn btn--secondary">
                                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['import'];?>
</span>
                                        <i class="btn__icon lm lm-download"></i>
                                        <span class="btn__preloader preloader"></span>
                                    </button>
                                    <a class="btn btn--primary" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@new',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuLocation'=>'Footer','currentDisplay'=>$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->id,'menuTab'=>'footer'));?>
">
                                        <i class="btn__icon lm lm-plus"></i>
                                        <span class="btn__text">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>

                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="t-c__body t-c__body--boxed">
                                <table class="t-c__table table mob-table--block" id="footer-table" data-services-table data-search-input="#footer-search" data-order='[0, "asc"]' data-clickable-rows="true" data-responsive="false">
                                    <colgroup>
                                        <col class="table__col-10">
                                        <col class="table__col-6">
                                        <col class="table__col-6">
                                        <col class="table__col-2">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="cell-name">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-rule">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['rule'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-status">
                                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['status'];?>
</span>
                                            <span class="sorting-icons-box">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </span>
                                        </th>
                                        <th class="cell-actions no-sort"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['footerMenus']->value, 'footer');
$_smarty_tpl->tpl_vars['footer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['footer']->value) {
$_smarty_tpl->tpl_vars['footer']->do_else = false;
?>
                                        <tr>
                                            <td class="cell-name">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['footer']->value->id,'menuTab'=>'footer'));?>
"><strong><?php echo $_smarty_tpl->tpl_vars['footer']->value->name;?>
</strong></a>
                                            </td>
                                            <td class="cell-rule">
                                                <?php if (is_array($_smarty_tpl->tpl_vars['footer']->value->rule)) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['footer']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]))) {?>
                                                        <span><?php echo implode(', ',$_smarty_tpl->tpl_vars['footer']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]);?>
</span>
                                                    <?php } else { ?>
                                                        <span>-</span>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <span><?php echo $_smarty_tpl->tpl_vars['footer']->value->rule;?>
</span>
                                                <?php }?>
                                            </td>
                                            <td class="cell-status">
                                                <?php if (($_smarty_tpl->tpl_vars['footer']->value->active)) {?>
                                                    <span class="label label--success label--outline"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                                <?php } else { ?>
                                                    <span class="label label--default label--outline is-disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                                <?php }?>
                                            </td>
                                            <td class="cell-actions">
                                                <a class="btn btn--xs btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['footer']->value->id,'menuTab'=>'footer'));?>
">
                                                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['manage'];?>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                                <div class="preloader-container is-hidden" data-table-preloader>
                                    <div class="preloader"></div>
                                </div>
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
