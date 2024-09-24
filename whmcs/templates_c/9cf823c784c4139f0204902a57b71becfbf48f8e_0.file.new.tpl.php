<?php
/* Smarty version 3.1.48, created on 2024-09-24 08:58:30
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f27f36a35c97_82103945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf823c784c4139f0204902a57b71becfbf48f8e' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/new.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/cms/breadcrumb.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 3,
    'file:adminarea/pages/custom/sections/index.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 6,
    'file:adminarea/pages/includes/modal/seo-translation.tpl' => 2,
    'file:adminarea/pages/includes/modal/modals.tpl' => 1,
    'file:adminarea/pages/includes/modal/seo-image.tpl' => 1,
    'file:adminarea/pages/includes/modal/seo-image-remove.tpl' => 1,
    'file:adminarea/pages/includes/modal/section/section-add.tpl' => 1,
    'file:adminarea/pages/includes/modal/section/section-delete.tpl' => 1,
  ),
),false)) {
function content_66f27f36a35c97_82103945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139717423166f27f369eacb0_22310493', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185725079966f27f369edc59_81365142', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136782062866f27f36a32d55_33345941', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16415498166f27f36a34854_57748960', "template-scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_139717423166f27f369eacb0_22310493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_139717423166f27f369eacb0_22310493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/cms/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"custom_page"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_185725079966f27f369edc59_81365142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_185725079966f27f369edc59_81365142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
        id="newCustomPageForm"
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@create',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
        method="POST"
        enctype="multipart/form-data"
    >
        <input type="hidden" name="customFilename" value="">
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
                                            data-page-name
                                            class="form-control form-control--lg"
                                            name="name"
                                            value=""
                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_title']['input_placeholder'];?>
"
                                            data-current=""
                                            required
                                        >
                                    </div>
                                    <div class="form-group m-b-0x">
                                        <div class="permalink" data-page-name-permalink>
                                            <input type="hidden" name="" value="" data-page-name-temp>
                                            <input type="hidden" name="url" value="" data-page-name-permalink-input="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/" data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@checkPageUrl',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                            <span class="permalink__title">
                                                <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_title']['permalink'];?>
</strong>
                                            </span>
                                            <div class="permalink__content">
                                                <span class="permalink__link permalink__link--static" data-page-name-permalink-link>
                                                <?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<span class="permalink__link is-hidden" data-page-name-permalink-value contenteditable="true"></span>
                                                </span>
                                                <button class="permalink__edit-btn btn btn--icon btn--link is-hidden" type="button" data-page-name-permalink-edit-btn>
                                                    <i class="btn__icon ls ls-edit"></i>
                                                </button>
                                            </div>
                                        </div>
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
                                data-order="1"
                                data-index="0">
                                <i class="btn__icon ls ls-plus"></i>
                                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-group form-group--language">
                        <input type="hidden" name="language" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
                        <label class="form-label">Choose Language To Edit</label>
                        <div
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->page['new']['change_language']) {?> 
                                data-toggle="lu-tooltip"
                                title="<?php echo $_smarty_tpl->tpl_vars['cms_tooltips']->value->page['new']['change_language'];?>
"
                            <?php }?>
                        >
                            <button 
                                type="button" 
                                class="btn btn btn--default btn--outline btn--block btn--language is-disabled"                                    
                            >
                                <span class="btn__text" data-value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</span>
                                <span class="btn__icon btn__icon-arrow ls ls-caret" data-arrow-target></span>
                            </button>
                        </div>
                    </div>
                    <div id="settings" class="section__body d-flex flex-column" data-page-builder>
                        <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/custom/sections/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('language'=>$_smarty_tpl->tpl_vars['language']->value), 0, false);
?>
                    </div>
                </div>
            </div>


            <div class="block__sidebar block__sidebar--md is-sticky">
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
                                                <input class="switch__checkbox" name="settings[published]" value="1" type="checkbox">
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
                                            <input type="text" class="form-control" name="settings[body_class]" value="">
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
                                        <input class="form-control" type="text" data-max="64" data-seo-input-title value="<?php echo $_smarty_tpl->tpl_vars['customPage']->value->seo_title_whmcs_lang;?>
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
                                        <textarea class="form-control" type="text" maxlength="160" data-seo-input-description data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
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
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/seo-image-remove.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/section/section-add.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"pageSection"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:adminarea/pages/includes/modal/section/section-delete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_136782062866f27f36a32d55_33345941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_136782062866f27f36a32d55_33345941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <button type="submit" class="btn btn btn--primary is-disabled" form="newCustomPageForm" data-page-save-changes data-changes-save>
                <span class="btn__text">Save Changes</span>
                <span class="btn__preloader preloader preloader--light"></span>
            </button>
            <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'tab'=>'website'));?>
">
                <span class="btn__text">Cancel</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-scripts"} */
class Block_16415498166f27f36a34854_57748960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_16415498166f27f36a34854_57748960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
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
<?php
}
}
/* {/block "template-scripts"} */
}
