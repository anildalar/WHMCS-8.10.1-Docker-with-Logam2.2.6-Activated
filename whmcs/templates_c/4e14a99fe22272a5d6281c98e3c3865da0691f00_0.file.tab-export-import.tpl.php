<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/includes/tab-export-import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de27875c21_97652670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e14a99fe22272a5d6281c98e3c3865da0691f00' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/includes/tab-export-import.tpl',
      1 => 1720189766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 2,
    'file:adminarea/includes/helpers/popover.tpl' => 3,
  ),
),false)) {
function content_66f7de27875c21_97652670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane <?php if ($_GET['tab'] == 'export-import') {?>is-active<?php }?>" id="settings-export-import">
    <div class="section">
        <div class="section__header">
            <h3 class="section__title">
                Export
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->pages['export']), 0, false);
?>
            </h3>
        </div>
        <div class="section__content" data-lagom-cms-export-container>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@pageExport',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageName'=>$_smarty_tpl->tpl_vars['pageName']->value));?>
" method="POST">
                <div class="widget panel overflow-visible">
                    <div class="widget__content p-3x">
                        <div class="form-group form-group--parent m-b-0x">
                            <div class="d-flex flex-column accordion" id="exportAccordion" data-radio-accordion>
                                <div class="form-check m-b-2x">
                                    <label class="m-b-0x collapse-label collapsed" data-toggle="lu-radio-collapse" data-target="#export-all-pages" aria-expanded="true" aria-controls="export-all-pages">
                                        <input class="radio-accordion form-radio" type="radio" name="select-to-export" checked data-lagom-cms-export-radio="all">
                                        <span class="form-indicator"></span>
                                        <span class="form-text  d-flex align-items-center m-l-1x">
                                            Export All Pages
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['all_pages']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['all_pages']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['all_pages']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['all_pages']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['all_pages']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                            <?php }?>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-group accordion-select p-0x m-0x collapse show" id="export-all-pages" data-parent="#exportAccordion">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['websitePages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                        <input type="hidden" name="pages[]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" data-lagom-cms-export-input>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                               <div class="form-check m-b-0x">
                                    <label class="m-b-0x collapse-label collapsed" data-toggle="lu-radio-collapse" data-target="#export-selected-pages" aria-expanded="true" aria-controls="export-selected-pages">
                                        <input class="group-radio form-radio" type="radio" name="select-to-export" data-lagom-cms-export-radio="selected">
                                        <span class="form-indicator"></span>
                                        <span class="form-text d-flex align-items-center m-l-1x">
                                            Export Selected Pages
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['selected_pages']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['selected_pages']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['selected_pages']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['selected_pages']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['selected_pages']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                    </label>
                                    <div class="form-group accordion-select p-0x p-l-3x m-b-0x collapse" id="export-selected-pages" data-parent="#exportAccordion">
                                        <select disabled class="form-control multiselect form-control--basic group-multi-select m-t-2x" name="pages[]" multiple required data-lagom-cms-export-select>
                                            <option value="">Select Page To Export</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['websitePages']->value, 'websitePage', false, 'key');
$_smarty_tpl->tpl_vars['websitePage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['websitePage']->value) {
$_smarty_tpl->tpl_vars['websitePage']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['websitePage']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['websitePage']->value->name;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <label class="m-b-0x m-t-2x">
                                            <input class="group-checkbox form-checkbox" type="checkbox" name="export-predefined-sections" checked>
                                            <span class="form-indicator"></span>
                                            <span class="form-text d-flex align-items-center m-l-1x">
                                                Export Predefined Sections
                                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['export_predefined']['content']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['export_predefined']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['export_predefined']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['export_predefined']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['export']['export_predefined']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                                <?php }?>
                                            </span>
                                        </label>
                                    </div>

                                </div>    
                            </div>
                        </div>
                        <div class="p-t-3x d-flex align-items-center">
                            <button class="btn btn--primary" data-lagom-cms-export-submit data-lagom-cms-export-success-message="Export pages completed successfully." type="submit">
                                <span class="btn__text">Export</span>
                                <span class="btn__preloader preloader preloader--light"></span>
                            </button>
                            <div class="alert alert--outline alert--info alert--xs m-b-0x m-l-2x w-a is-hidden" data-lagom-cms-export-submit-alert>
                                <i class="ls ls-info-circle text-info m-r-1x"></i> This action can take several minutes.
                            </div>
                        </div>
                                                
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="section__header">
            <h3 class="section__title">
                Import
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->pages['import']), 0, true);
?>
            </h3>    
            
        </div>   
        <div class="section__content">
            <div class="widget panel overflow-visible">
                <div class="widget__content p-3x">
                    <div class="form-group form-group--parent m-b-0x">
                        <div class="d-flex flex-column accordion" id="importAccordion">
                            <form 
                                enctype="multipart/form-data" 
                                action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@pageImport',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageName'=>$_smarty_tpl->tpl_vars['pageName']->value));?>
" 
                                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->apiUrl('CmsApi@pageDuplicateValidation',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                                method="POST" 
                                data-lagom-cms-import
                                class="form"
                            >
                                <input type="hidden" name="overwrite" value="" data-lagom-cms-import-overwrite>
                                <div class="media media--custom media--import-pages m-t-0x">
                                    <div class="media__wrapper" data-lagom-cms-import-btn>
                                        <i class="media__icon ls ls-upload"></i>
                                        <strong class="media__title p-md">Click to Upload</strong>
                                        <span class="media__desc p-xs">Allowed extensions .zip</span>
                                    </div>
                                    <input type="file" name="pageimport" data-lagom-cms-import-input>
                                    <div class="media__list row w-100 is-hidden" data-lagom-cms-import-file-container>
                                        <div class="media__item col-md-12">
                                            <div class="media__item-content">
                                                <div class="media__item-icon">
                                                    <?php $_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");?>
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/addon-email-forwarding.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                </div>
                                                <div class="media__item-footer">
                                                    <span class="media__item-filename" data-lagom-cms-import-file-filename></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form__actions m-t-3x">
                                    <button class="btn btn--primary is-disabled" type="button" data-lagom-cms-import-submit>
                                        <span class="btn__text">Import</span>
                                        <span class="btn__preloader preloader preloader--light m-l-3x"></span>
                                    </button>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>        
    </div>   
</div>

<div class="modal modal--lg modal--hero" id="importPagesModal" data-import-pages-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title type-4 text-danger"><i class="ls ls-exclamation-circle m-r-2x"></i>Import Pages</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Following page urls exists</p>
                <div class="list-group" data-import-pages-modal-url data-page-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">

                </div>
                <br />
                <p>Following page names exists:</p>
                <div class="list-group" data-import-pages-modal-pages data-page-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@show',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">

                </div>
            </div>
            <div class="modal__actions">
                <button type="button" data-import-pages-modal-overwrite class="btn btn--danger">
                    <span class="btn__text">Overwrite existing pages</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <button type="button" data-import-pages-modal-duplicate class="btn btn--primary">
                    <span class="btn__text">Save as new pages</span>
                    <span class="btn__preloader preloader preloader--light"></span>
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
