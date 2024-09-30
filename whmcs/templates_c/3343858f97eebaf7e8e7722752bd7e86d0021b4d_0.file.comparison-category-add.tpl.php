<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:45:03
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/comparison-category-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de2f415da7_18719643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3343858f97eebaf7e8e7722752bd7e86d0021b4d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/comparison-category-add.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 3,
    'file:adminarea/pages/includes/modal/other/icon-tabs.tpl' => 1,
  ),
),false)) {
function content_66f7de2f415da7_18719643 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div 
    class="modal modal--lg modal--media modal--media-scroll" 
    id="addNewComparisonTableCategoryModal"
    data-add-new-comparison-table-category-modal
>
    <div class="modal__dialog">
        <div class="modal__content">
                        <div class="modal__top top">
                <h4 class="top__title h6">
                    <span data-add-new-comparison-table-category-modal-title-add>Add New Category</span>
                    <span class="is-hidden" data-add-new-comparison-table-category-modal-title-copy>Copy Category</span>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['comparison_table']), 0, false);
?>
                </h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

                        <form
                id="addNewComparisonTableCategoryForm"
                data-add-new-comparison-table-category-form
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getComparisonCategoryItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body has-scroll">
                    <div class="modal__section">
                        <div class="modal__section-content">                        
                                                        <div class="form-group">
                                <label class="form-label">
                                    Category Title
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['title']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['title']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['title']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['title']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['title']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                    <?php }?>
                                </label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="item[category_title]"
                                    value=""
                                />
                            </div>  

                                                        <div class="form-group">
                                <label 
                                    class="form-label is-pointer m-b-0x m-t-2x"
                                    data-toggle="lu-collapse"
                                    data-target="#collapse-category-add-modal-tabs"
                                >
                                    <span class="form-text d-flex align-items-center">
                                        Show graphic for this item
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['show_graphic']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['show_graphic']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['show_graphic']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['show_graphic']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['show_graphic']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </span>
                                    <div class="switch switch--success m-l-0x">
                                        <input type="hidden" name="item[show_icon]" value="0" />
                                        <input class="switch__checkbox" name="item[show_icon]" value="1" type="checkbox" data-show-icon-tabs>
                                        <span class="switch__container">
                                            <span class="switch__handle"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>

                                                        <div class="collapse" id="collapse-category-add-modal-tabs" data-product-tabs data-icons-tabs>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/other/icon-tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'category-add'), 0, false);
?>
                            </div>
                        </div>
                                                <div 
                            class="modal__section-header top collapsed m-t-3x" 
                            data-toggle="lu-collapse" 
                            data-target="#addNewComparisonCategory-advanced-settings" 
                            data-product-advanced-settings-toogle
                        >
                            <span class="top__title p-md">Advanced Settings</span>
                            <button type="button" class="top__toolbar btn btn--link">
                                <span class="btn__text">Expand</span>
                                <span class="btn__text">Hide</span>
                                <i class="btn__icon ls ls-down"></i>
                            </button>
                        </div>
                        <div class="modal__section-content collapse" id="addNewComparisonCategory-advanced-settings" data-product-advanced-settings>
                                                        <div class="form-group m-t-2x">
                                <label class="form-label">
                                    Custom category class
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['custom_class']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['custom_class']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['custom_class']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['custom_class']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['category']['custom_class']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                                <input class="form-control" type="text" name="item[custom_classes]" value=""/>
                            </div>
                        </div>    
                    </div>

                                        <input type="hidden" name="item[list_name]" data-list-name value=""/>
                    <input type="hidden" name="item[new_index]" data-list-new-index value=""/>
                    <input type="hidden" name="item[new_position]" data-list-new-position value=""/>
                    <input type="hidden" name="item[section]" data-list-section-index value=""/>
                    <input type="hidden" name="item[group]" data-list-group-index value=""/>
                </div>

                                <div class="modal__actions">
                    <button class="btn btn--primary" data-add-new-comparison-table-category-btn type="submit" form="addNewComparisonTableCategoryForm">
                        <span class="btn__text">
                            <span data-add-new-comparison-table-category-btn-add>Add</span>
                            <span class="is-hidden" data-add-new-comparison-table-category-btn-copy>Copy</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                        <span class="btn__text">Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
