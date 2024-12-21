<?php
/* Smarty version 3.1.48, created on 2024-12-21 06:03:23
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67665a2b50b744_93088664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11274e891567b6efa3e8e679b2b5ffb6ff4c4cee' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/index.tpl',
      1 => 1734760587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/cms/cms_pages_nav.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/svg-icons/sorting-arrows.tpl' => 4,
    'file:adminarea/cms/cms_pages_tabs.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/add-new-page-requirements.tpl' => 1,
    'file:adminarea/pages/includes/modal/section/section-add.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/delete-media-img.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/optimize-media.tpl' => 1,
  ),
),false)) {
function content_67665a2b50b744_93088664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53603127167665a2b4dff08_95888217', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103276406667665a2b4e24c5_24973848', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15909761067665a2b4e2fb7_14348108', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194732909067665a2b508035_21292045', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187682033967665a2b509ea1_57811106', "template-scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_53603127167665a2b4dff08_95888217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_53603127167665a2b4dff08_95888217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_103276406667665a2b4e24c5_24973848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_103276406667665a2b4e24c5_24973848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_15909761067665a2b4e2fb7_14348108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_15909761067665a2b4e2fb7_14348108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    <div class="section">
        <div class="d-flex">
            <div class="app-main__sidebar">
                <div class="tabs tabs--block m-w-200 is-sticky">                     <div class="tabs__nav" data-options="navStorage:localStorage; localStorageId:custom-slider-23; slideToClickedSlide: true;">
                        <ul class="nav nav--tabs custom-nav-styles">
                            <div class="nav__header p-0x text-faded p-4">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['categories'];?>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>
                                <li class="nav__item <?php if (($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS' && !$_GET['tab']) || ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS' && $_GET['tab'] == 'website')) {?> is-active <?php }?>">
                                    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#pages-website">
                                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['website'];?>
</span>
                                    </a>
                                </li>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <li class="nav__item <?php if (($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name !== 'CMS' && $_smarty_tpl->tpl_vars['key']->value == 0 && !$_GET['tab']) || $_GET['tab'] == $_smarty_tpl->tpl_vars['category']->value) {?>is-active<?php }?>">
                                    <a class="nav__link" data-toggle="lu-tab" data-change-hash="true" href="#pages-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</span>
                                    </a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/cms_pages_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__content">
                <div class="tabs__body">
                    <div class="tab-content">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <div class="tab-pane <?php if (($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name !== 'CMS' && $_smarty_tpl->tpl_vars['key']->value == 0 && !$_GET['tab']) || $_GET['tab'] == $_smarty_tpl->tpl_vars['category']->value) {?>is-active<?php }?>" id="pages-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                <div class="t-c__top top m-b-3x" data-top-search data-toggler-options="toggleClass: is-open;">
                                    <div class="top__toolbar">
                                        <h3 class="section__title"><?php echo ucfirst($_smarty_tpl->tpl_vars['category']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['pages'];?>

                                            <?php ob_start();
echo mb_strtolower(smarty_modifier_replace(ucfirst($_smarty_tpl->tpl_vars['category']->value)," ","_"), 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('doc_category', $_prefixVariable1."_pages");?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['pages'][$_smarty_tpl->tpl_vars['doc_category']->value]), 0, true);
?>
                                        </h3>
                                        
                                    </div>
                                    <div class="top__toolbar is-right">
                                        <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['show'];?>
:</span>
                                        <div class="input-group">
                                                                                        <select class="form-control filter-pages" data-table="pages-table<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                                <option value="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['all'];?>
</option>
                                                <option value="templates" selected><?php echo $_smarty_tpl->tpl_vars['lang']->value['pages']['with_templates'];?>
</option>
                                            </select>
                                        </div>
                                        <div class="top__search input-group">
                                            <span class="input-group__icon lm lm-search"></span>
                                            <input 
                                                class="form-control input-group__form-control table-search" 
                                                data-toggler-options="toggleFocus: true; clearOnBlur: true;" 
                                                value="" 
                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['search'];?>
..." 
                                                id="table-search<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="t-c__body t-c__body--boxed">
                                    <table 
                                        class="t-c__table table mob-table--block" 
                                        id="pages-table<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                        data-pages-table 
                                        data-services-table
                                        data-search-input="#table-search<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" 
                                        data-order='[0, "asc"]' 
                                        data-clickable-rows="true" 
                                        data-responsive="false"
                                    >
                                        <colgroup>
                                            <col class="table__col-13">
                                            <col class="table__col-3">
                                            <col class="table__col-5">
                                            <col class="table__col-1">
                                            <col class="table__col-0">
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
                                                                                                <th class="cell-seo" >
                                                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['seo']['header'];?>
</span>
                                                    <span class="sorting-icons-box">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    </span>
                                                </th>
                                                <th class="cell-group filter">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['template'];?>
</span>
                                                    <span class="sorting-icons-box">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    </span>
                                                </th>
                                                <th class="cell-has-templates is-hidden"></th>
                                                <th class="cell-actions no-sort">
                                                    <span class="sorting-icons-box">
                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    </span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->tpl_vars['category']->value], 'page', false, 'pageName');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pageName']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                                <?php if (!(isset($_smarty_tpl->tpl_vars['page']->value['settings']['hide_in_table '])) || !$_smarty_tpl->tpl_vars['page']->value['settings']['hide_in_table ']) {?>
                                                    <tr>
                                                        <td class="cell-name">
                                                            <div class="content-name">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageName'=>$_smarty_tpl->tpl_vars['pageName']->value));?>
"><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['settings']['name'];?>
</strong></a>
                                                            </div>
                                                        </td>
                                                        <td class="cell-seo">
                                                            <div class="status">
                                                                <?php if ($_smarty_tpl->tpl_vars['page']->value['settings']['seo_enabled']) {?>
                                                                    <span class="status__seo-dial status__seo-dial--on"></span>
                                                                    <span class="is-hidden">1</span>
                                                                <?php } else { ?>
                                                                    <span class="status__seo-dial"></span>
                                                                    <span class="is-hidden">0</span>
                                                                <?php }?>
                                                            </div>
                                                        </td>
                                                        <td class="cell-layout">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['page']->value['active_layout'];?>
</strong>
                                                        </td>
                                                        <td class="cell-has-templates is-hidden">                                                             <strong><?php if ($_smarty_tpl->tpl_vars['page']->value['settings']['has_templates']) {?>Yes<?php } else { ?>No<?php }?></strong>
                                                        </td>
                                                        <td class="cell-actions">
                                                            <a class="btn btn--xs btn--default btn--outline" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageName'=>$_smarty_tpl->tpl_vars['pageName']->value));?>
">
                                                                <span class="btn__text">Manage</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php }?>    
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS' && \RSThemes\Helpers\ContentChecker::checkCmsInstalled()) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/cms_pages_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-modals"} */
class Block_194732909067665a2b508035_21292045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_194732909067665a2b508035_21292045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/other/add-new-page-requirements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/section/section-add.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"predefined"), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/other/delete-media-img.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/other/optimize-media.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_187682033967665a2b509ea1_57811106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_187682033967665a2b509ea1_57811106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('lagom-cms-pages.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "template-scripts"} */
}
