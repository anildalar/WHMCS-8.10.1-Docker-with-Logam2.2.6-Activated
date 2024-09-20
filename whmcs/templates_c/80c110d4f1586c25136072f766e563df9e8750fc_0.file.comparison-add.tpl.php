<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:05:00
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/comparison-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed1e9ca38da3_48306819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80c110d4f1586c25136072f766e563df9e8750fc' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/comparison-add.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 4,
  ),
),false)) {
function content_66ed1e9ca38da3_48306819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div 
    class="modal modal--lg modal--media modal--media-scroll" 
    id="addNewComparisonTableItemModal"
    data-add-new-comparison-table-item-modal
>
    <div class="modal__dialog">
        <div class="modal__content">
                        <div class="modal__top top">
                <h4 class="top__title h6">
                    <span data-add-new-comparison-table-item-modal-title-add>Add New Feature</span>
                    <span class="is-hidden" data-add-new-comparison-table-item-modal-title-copy>Copy Feature</span>
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
                id="addNewComparisonTableItemForm"
                data-add-new-comparison-table-item-form
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getComparisonItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body overflow-y-visible">
                    <div class="modal__section">
                        <div class="modal__section-content">                        
                                                        <div class="modal__section-header top">
                                <span class="top__title p-md">Feature Details</span>
                            </div>
                            <div class="form-group m-t-2x">
                                <label class="form-label">
                                    Feature Name
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['name']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['name']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['name']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['name']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['name']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                    <?php }?>
                                </label>
                                <input
                                    class="form-control"
                                    type="text"
                                    name="item[feature_name]"
                                    value=""
                                />
                            </div>
                            <div class="form-group" data-toggle-comparison-hint>
                                <label 
                                    class="form-label is-pointer m-b-0x m-t-2x"
                                    data-toggle="lu-collapse"
                                    data-target="#comparison-add-modal-hint"
                                >
                                    <span class="form-text d-flex align-items-center">
                                        Show hint for this feature
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['show_hint']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['show_hint']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['show_hint']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['show_hint']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['show_hint']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </span>
                                    <div class="switch switch--success m-l-0x">
                                        <input type="hidden" name="item[show_hint]" value="0" />
                                        <input class="switch__checkbox" name="item[show_hint]" value="1" type="checkbox"  data-show-feature-hint>
                                        <span class="switch__container">
                                            <span class="switch__handle"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <div class="collapse" id="comparison-add-modal-hint" data-comparison-hint>
                                <div class="form-group m-b-0x">
                                    <label class="form-label">
                                        Hint Description
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['hint']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['hint']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['hint']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['hint']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['hint']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <textarea class="form-control" type="text" name="item[hint]" value=""></textarea>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="modal__section">
                        <div class="modal__section-content">
                            <div class="modal__section-header top">
                                <span class="top__title p-md">Products Value</span>
                            </div>
                            <div class="m-t-2x" data-add-new-comparison-table-products>
                            
                            </div>
                        </div>
                        <div 
                            class="modal__section-header top collapsed m-t-3x" 
                            data-toggle="lu-collapse" 
                            data-target="#addNewComparisonTableItem-advanced-settings" 
                            data-product-advanced-settings-toogle
                        >
                            <span class="top__title p-md">Advanced Settings</span>
                            <button type="button" class="top__toolbar btn btn--link">
                                <span class="btn__text">Expand</span>
                                <span class="btn__text">Hide</span>
                                <i class="btn__icon ls ls-down"></i>
                            </button>
                        </div>
                        <div class="modal__section-content collapse" id="addNewComparisonTableItem-advanced-settings" data-product-advanced-settings>
                                                        <div class="form-group m-t-2x">
                                <label class="form-label">
                                    Custom feature class
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['custom_class']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['custom_class']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['custom_class']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['custom_class']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['comparison']['item']['custom_class']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
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
                    <input type="hidden" name="item[hide_item]" data-list-hide-item value="0"/>
                </div>

                                <div class="modal__actions">
                    <button class="btn btn--primary" data-add-new-comparison-table-item-btn type="submit" form="addNewComparisonTableItemForm">
                        <span class="btn__text">
                            <span data-add-new-comparison-table-item-btn-add>Add</span>
                            <span class="is-hidden" data-add-new-comparison-table-item-btn-copy>Copy</span>
                        </span>
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
