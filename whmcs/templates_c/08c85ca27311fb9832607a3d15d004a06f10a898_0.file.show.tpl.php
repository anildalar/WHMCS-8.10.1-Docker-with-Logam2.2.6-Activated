<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:05:00
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed1e9c26ca78_92385957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08c85ca27311fb9832607a3d15d004a06f10a898' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/show.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/cms/breadcrumb.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 3,
    'file:adminarea/pages/custom/sections/index.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 7,
    'file:adminarea/pages/includes/modal/seo-translation.tpl' => 2,
    'file:adminarea/pages/includes/modal/modals.tpl' => 1,
    'file:adminarea/pages/includes/modal/seo-image.tpl' => 1,
    'file:adminarea/pages/includes/modal/seo-image-remove.tpl' => 1,
    'file:adminarea/pages/includes/modal/section/section-add.tpl' => 1,
    'file:adminarea/pages/includes/modal/section/section-delete.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/page-delete.tpl' => 1,
    'file:adminarea/pages/includes/modal/other/load-autosave.tpl' => 1,
  ),
),false)) {
function content_66ed1e9c26ca78_92385957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199993215966ed1e9c1e6fa4_40600556', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151520474366ed1e9c1e8757_62656070', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199704546766ed1e9c257d88_87972781', "template-sidebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207336950666ed1e9c262d40_94043314', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68720195466ed1e9c268de1_10421927', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_199993215966ed1e9c1e6fa4_40600556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_199993215966ed1e9c1e6fa4_40600556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"custom_page"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_151520474366ed1e9c1e8757_62656070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_151520474366ed1e9c1e8757_62656070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="editCustomPage"
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@save',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageId'=>$_smarty_tpl->tpl_vars['customPage']->value->id));?>
"
        method="POST"
        enctype="multipart/form-data"
        data-autosave
        data-autosave-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->apiUrl('CmsApi@pageAutosave',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
        <?php if ($_smarty_tpl->tpl_vars['autosaveExists']->value && $_GET['autosave'] != "1") {?>
            data-autosave-show-modal
        <?php }?>
    >   
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->id;?>
" type="hidden">
        <input type="hidden" name="customFilename" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->settings['filename'];?>
">
        <div class="block is-loading">
            <div class="block__body" style="max-width: calc(100% - 368px);">
                <div class="section">
                    <div class="section__header">
                        <h3 class="section__title">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_title']['header'];?>

                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->page['page_title']), 0, false);
?>
                        </h3>
                    </div>
                    <div class="section__content">
                        <div class="widget panel">
                            <div class="widget__body">
                                <div class="widget__content" data-page-name-container>
                                    <div class="form-group">
                                        <input 
                                            class="form-control form-control--lg" 
                                            name="name" 
                                            value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->name;?>
"
                                            data-page-name
                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_title']['input_placeholder'];?>
"
                                            data-current="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->name;?>
"                                                
                                            required
                                        >
                                    </div>    
                                    <div class="form-group m-b-0x">
                                        <?php if ($_smarty_tpl->tpl_vars['isHomepage']->value) {?>    
                                            <div class="permalink">
                                                <span class="permalink__title">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_title']['permalink'];?>
</strong>
                                                </span>
                                                <div class="permalink__content">
                                                    <span class="permalink__link permalink__link--static">
                                                        <?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>

                                                    </span>
                                                </div>
                                            </div>
                                            <input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->url;?>
">
                                        <?php } else { ?>
                                            <div class="permalink" data-page-name-permalink>
                                                <input type="hidden" name="" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->url;?>
" data-page-name-temp>
                                                <input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->url;?>
" data-page-name-permalink-input="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/" data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@checkPageUrl',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                                <span class="permalink__title">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_title']['permalink'];?>
</strong>
                                                </span>
                                                <div class="permalink__content">
                                                    <span class="permalink__link permalink__link--static" data-page-name-permalink-link>
                                                    <?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<span class="permalink__link" data-page-name-permalink-value contenteditable="true"><?php echo $_smarty_tpl->tpl_vars['customPage']->value->url;?>
</span>
                                                    </span>
                                                    <button class="permalink__edit-btn btn btn--icon btn--link" type="button" data-page-name-permalink-edit-btn>
                                                        <i class="btn__icon ls ls-edit"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div data-page-name-alert>
                                        <span class="alert alert--outline alert--danger alert--xs is-hidden m-b-0x m-t-1x" data-page-name-alert-name>Page name can't be empty</span>
                                        <span 
                                            class="alert alert--outline alert--danger alert--xs is-hidden m-b-0x m-t-1x" 
                                            data-page-name-alert-url
                                            data-page-name-alert-url-message-empty="Page URL can't be empty"
                                            data-page-name-alert-url-message-notvalid="Page URL is not valid, please try different one"
                                            data-page-name-alert-url-message-exists="Page URL already exists, please try different one"
                                        ></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="section__header top">
                        <h3 class="section__title top__title">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['header'];?>

                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->page['page_sections']), 0, true);
?>
                        </h3>
                        <div class="top__toolbar">
                            <button
                                type="button"
                                class="btn btn--secondary"
                                data-toggle="lu-modal"
                                data-target="#modalAddNewSection"
                                data-section-add
                                data-section-header-btn
                                data-order="<?php if (is_countable($_smarty_tpl->tpl_vars['customPage']->value->sections)) {
echo sizeof($_smarty_tpl->tpl_vars['customPage']->value->sections)+1;
} else { ?>1<?php }?>"
                                data-index="<?php if (is_countable($_smarty_tpl->tpl_vars['customPage']->value->sections)) {
echo sizeof($_smarty_tpl->tpl_vars['customPage']->value->sections);
} else { ?>0<?php }?>"
                                data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"
                            >
                                <i class="btn__icon ls ls-plus"></i>
                                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-group form-group--language">
                        <label class="form-label">Choose Language To Edit</label>
                        <div class="has-dropdown">
                            <a 
                                class="btn btn btn--default btn--outline btn--block btn--language" 
                                href="" 
                                data-toggle="lu-dropdown" 
                                data-display="static" 
                                data-placement="bottom left" 
                                data-section-language
                                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@sectionsChangeLanguage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'customPageId'=>$_smarty_tpl->tpl_vars['customPage']->value->id,'autosave'=>$_smarty_tpl->tpl_vars['history']->value['autosave'],'history'=>$_smarty_tpl->tpl_vars['history']->value['history']));?>
"
                            >
                                <span class="btn__text" data-value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</span>
                                <span class="btn__icon btn__icon-arrow ls ls-caret" data-arrow-target></span>
                            </a>
                            <div class="dropdown dropdown--language" data-dropdown-menu data-section-language-menu>
                                <div class="dropdown__arrow" data-arrow></div>
                                <div class="dropdown__menu">
                                    <ul class="nav">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['whmcsLanguages']->value, 'whmcsLanguage');
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['whmcsLanguage']->value) {
$_smarty_tpl->tpl_vars['whmcsLanguage']->do_else = false;
?>
                                            <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['whmcsLanguage']->value == $_smarty_tpl->tpl_vars['language']->value) {?>is-active<?php }?>">
                                                <a class="nav__link" data-section-language-menu-item="<?php echo $_smarty_tpl->tpl_vars['whmcsLanguage']->value;?>
" data-section-language-menu-item-text="<?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
">
                                                    <span class="nav__link-text"><?php echo ucfirst($_smarty_tpl->tpl_vars['whmcsLanguage']->value);?>
</span>
                                                    <span class="nav__link-icon ls ls-check"></span>
                                                </a>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__loader preloader-container is-hidden" data-page-loader>
                        <div class="preloader preloader--lg"></div>
                    </div>
                    <div id="custom-page-sections" class="section__body d-flex flex-column" data-page-builder> 
                        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/custom/sections/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageSections'=>$_smarty_tpl->tpl_vars['customPageSections']->value,'language'=>$_smarty_tpl->tpl_vars['language']->value), 0, false);
?>
                    </div>
                </div>
            </div>
            <div class="block__sidebar block__sidebar--md is-sticky" data-page-settings>
                <div class="section">
                    <h3 class="section__title">Page Settings
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->page['page_settings']), 0, true);
?>
                    </h3>
                    <div class="section__body">
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    General
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group d-flex p-b-1x m-b-0x">
                                        <span class="form-label text-default form-text m-r-2x m-b-0x" style="flex-grow: 1">Publish Page
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['publish']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['publish']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['publish']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['publish']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['publish']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                            <?php }?>
                                        </span>
                                        <label>
                                            <div class="switch switch--primary">
                                                <input type="hidden" name="settings[published]" value="0">
                                                <input class="switch__checkbox" name="settings[published]" value="1" type="checkbox" <?php if (($_smarty_tpl->tpl_vars['customPage']->value->settings['published'])) {?> checked <?php }?>>
                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                            </div>
                                        </label>
                                    </div>
                                                                        <div class="form-group d-flex p-b-1x m-b-0x">
                                        <span class="form-label text-default form-text m-r-2x m-b-0x" style="flex-grow: 1">Set as Homepage
                                           <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['set_as_homepage']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['set_as_homepage']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['set_as_homepage']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['set_as_homepage']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['set_as_homepage']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <label>
                                            <div class="switch switch--primary">
                                                <input type="hidden" name="isHomepage" value="0">
                                                <input class="switch__checkbox" name="isHomepage" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['isHomepage']->value) {?> checked <?php }?>>
                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-group m-b-0x">
                                        <span class="form-label text-default form-text m-r-2x m-b-1x" style="flex-grow: 1">Body class
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['body_class']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['body_class']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['body_class']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['body_class']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['general']['body_class']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="settings[body_class]" value="<?php if ($_smarty_tpl->tpl_vars['customPage']->value->settings['body_class']) {
echo $_smarty_tpl->tpl_vars['customPage']->value->settings['body_class'];
}?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    SEO
                                </div>
                                <div class="top__actions">
                                    <div class="switch">
                                        <input type="hidden" name="seoEnabled" value="0">
                                        <input class="switch__checkbox" name="seoEnabled" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_enabled) {?> checked <?php }?> data-seo-enable> 
                                        <span class="switch__container"><span class="switch__handle"></span></span>
                                    </div> 
                                </div>
                            </label>
                            <div class="widget__body widget__body--seo <?php if (!$_smarty_tpl->tpl_vars['customPage']->value->seo_enabled) {?> is-hidden<?php }?>" data-seo-section>
                                <div class="widget__content">
                                    <div class="form-group" data-form-counter>
                                        <label class="form-label">
                                            Robots
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['robots']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['robots']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['robots']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['robots']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['robots']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </label>
                                        <select class="form-control selectized m-w-250" name="seoRobots" style="opacity: 1; display: none;" tabindex="-1">
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_robots) {?> selected<?php }?>>Allow</option>
                                            <option value="0" <?php if (!$_smarty_tpl->tpl_vars['customPage']->value->seo_robots) {?> selected <?php }?>>Disallow</option>
                                        </select>
                                    </div>
                                    <div class="form-group" data-form-counter>
                                        <label class="form-label" data-form-counter>
                                            Seo Title
                                            <span class="form-label__counter">(<span data-form-counter-value><?php if ((isset($_smarty_tpl->tpl_vars['customPage']->value))) {
echo mb_strlen($_smarty_tpl->tpl_vars['customPage']->value->seo_title[$_smarty_tpl->tpl_vars['whmcsLang']->value->value], 'UTF-8');
} else { ?>0<?php }?></span>/64)</span>
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['title']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['title']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['title']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['title']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['title']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                            <a class="form-label__translate seo-translation" data-seo-translation="title" href="#titleSeoTranslationModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                                                Translate
                                            </a>
                                        </label>
                                        <input class="form-control" type="text" data-max="64" data-form-counter-input data-seo-input-title value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_title_whmcs_lang;?>
" data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                        <input type="hidden" name="seoTitle" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_title_translations;?>
" data-seo-translation-title>
                                    </div>
                                    <div class="form-group" data-form-counter>
                                        <label class="form-label">
                                            Seo Description
                                            <span class="form-label__counter">(<span data-form-counter-value><?php if ((isset($_smarty_tpl->tpl_vars['customPage']->value))) {
echo mb_strlen($_smarty_tpl->tpl_vars['customPage']->value->seo_description[$_smarty_tpl->tpl_vars['whmcsLang']->value->value], 'UTF-8');
} else { ?>0<?php }?></span>/160)</span>
                                             <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['description']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['description']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['description']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['description']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['description']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                            <a class="form-label__translate seo-translation" data-seo-translation="description" href="#descriptionSeoTranslationModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                                                Translate
                                            </a>
                                        </label>
                                        <textarea class="form-control" type="text" maxlength="160" data-seo-input-description data-form-counter-input data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"><?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_description_whmcs_lang;?>
</textarea>
                                        <input type="hidden" name="seoDescription" value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_description_translations;?>
" data-seo-translation-description>
                                    </div>
                                    <div class="form-group m-b-0x" data-seo-container>
                                        <label class="form-label">
                                            Social Image
                                             <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['image']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['image']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['image']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['image']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->page['settings']['seo']['image']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </label>
                                        <a class="btn btn--secondary btn--block <?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_image) {?>is-hidden<?php }?>" href="#seoImageModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false"  data-seo-btn>
                                            Choose Image
                                        </a>
                                        <input type="hidden" name="seoImage" data-seo-input value="<?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_image) {
echo $_smarty_tpl->tpl_vars['customPage']->value->seo_image;
}?>">
                                        <div class="media media--seo d-block <?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_image) {
} else { ?>is-hidden<?php }?>" data-seo-image-container>
                                            <div class="media__content">
                                                <div class="media__body">
                                                    <a href="#seoImageModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false" data-seo-image-container class="img-container img-container--boxed d-flex">
                                                        <img data-seo-image src="<?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_image) {?> /templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_image;?>
 <?php }?>" alt="<?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_image) {?> <?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_image;?>
 <?php }?>"/>
                                                    </a>
                                                </div>
                                                <div class="media__footer">
                                                    <div class="seo-image-name truncate" data-seo-image-name>
                                                        <?php if ($_smarty_tpl->tpl_vars['customPage']->value->seo_image) {?> <?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_image;?>
 <?php }?>
                                                    </div>
                                                    <a 
                                                        class="btn btn--icon btn--link" 
                                                        data-toggle="lu-modal"
                                                        href="#deleteSeoImageModal"
                                                    >
                                                        <i 
                                                            class="btn__icon lm lm-trash"
                                                            data-toggle="lu-tooltip"
                                                            data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                                                        ></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__loader preloader-container">
                <div class="preloader preloader--lg"></div>
            </div>
        </div>
    </form>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'title','label'=>'SEO Title Translation Modal'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'description','label'=>'SEO Description Translation Modal'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/modals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/seo-image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/seo-image-remove.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/section/section-add.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"pageSection"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/section/section-delete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/other/page-delete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['autosaveExists']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/other/load-autosave.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
/* {/block "template-content"} */
/* {block "template-sidebar"} */
class Block_199704546766ed1e9c257d88_87972781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-sidebar' => 
  array (
    0 => 'Block_199704546766ed1e9c257d88_87972781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (count($_smarty_tpl->tpl_vars['historyList']->value) > 0) {?>
        <div class="app-main__sidebar app-main__sidebar--fixed app-main__sidebar--slide" data-app-sidebar-slide>
            <div class="section">
                <div class="section__header top">
                    <h3 class="section__title top__title">Edit History</h3>
                    <div class="section__actions top__actions">
                        <button class="close btn btn--xs btn--icon btn--link" data-app-sidebar-slide-close><i class="btn__icon lm lm-close"></i></button>
                    </div>
                </div>    
                <div class="section__body">
                    <div class="list-group list-group--history">
                        <a class="list-group__item <?php if (!$_GET['history']) {?>is-active<?php }?>"
                            href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageId'=>$_smarty_tpl->tpl_vars['customPage']->value->id));?>
" 
                            class="btn btn-default"                             
                        >
                            <div class="list-group__item-content">
                                <div class="list-group__item-date">Current Version</div>
                            </div>
                            <span class="btn btn--link btn--xs">Load</span>
                        </a>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['historyList']->value), 'hist');
$_smarty_tpl->tpl_vars['hist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hist']->value) {
$_smarty_tpl->tpl_vars['hist']->do_else = false;
?>                            
                            <a 
                                href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageId'=>$_smarty_tpl->tpl_vars['customPage']->value->id,'history'=>$_smarty_tpl->tpl_vars['hist']->value->fileId));?>
" 
                                class="list-group__item <?php if ($_GET['history'] == $_smarty_tpl->tpl_vars['hist']->value->fileId) {?>is-active<?php }?>" 
                            >   
                                <div class="list-group__item-content">
                                    <div class="list-group__item-date"><span>Modified:</span><?php echo date("m-d-Y H:i:s",$_smarty_tpl->tpl_vars['hist']->value->fileModified);?>
</div>
                                    <div class="list-group__item-user"><span>Edited by:</span><?php echo $_smarty_tpl->tpl_vars['hist']->value->adminFirstname;?>
 <?php echo $_smarty_tpl->tpl_vars['hist']->value->adminLastname;?>
</div>
                                </div>
                                <span class="btn btn--link btn--xs">Load</span>
                            </a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
/* {/block "template-sidebar"} */
/* {block "template-actions"} */
class Block_207336950666ed1e9c262d40_94043314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_207336950666ed1e9c262d40_94043314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container d-flex">
            <div class="flex-grow-1">
                <button type="submit" class="btn btn btn--primary is-disabled" form="editCustomPage" data-page-save-changes data-changes-save>
                    <span class="btn__text">Save Changes</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'website'));?>
">
                    <span class="btn__text">Cancel</span>
                    <span class="btn__preloader preloader"></span>
                </a>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['historyList']->value) > 0) {?>
                <div class="m-r-2x">
                    <button type="button" class="btn btn--default btn--outline" data-app-sidebar-slide-open>
                        <span class="btn__text">Show Edit History</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                </div>
            <?php }?>
            
            <div class="m-r-2x">
                <a class="btn btn--default btn--outline" href="#deletePageModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                    <span class="btn__text">Delete</span>
                    <span class="btn__preloader preloader"></span>
                </a>
            </div>
            <div class="m-r-2x">
                <button type="button" id="customPageDuplicate" class="btn btn--default btn--outline" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                    <span class="btn__text">Duplicate</span>
                    <span class="btn__preloader preloader"></span>
                </button>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-scripts"} */
class Block_68720195466ed1e9c268de1_10421927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_68720195466ed1e9c268de1_10421927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <?php echo '<script'; ?>

  src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
  integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0="
  crossorigin="anonymous"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('plugins/summernote.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('lagom-cms.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['cms_version']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#customPageDuplicate").on("click", function(e){
            e.preventDefault();
            $('#editCustomPage').attr('action', "<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@create',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'duplicate'=>1));?>
").submit();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
