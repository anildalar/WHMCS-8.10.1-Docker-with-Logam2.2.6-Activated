<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:45:03
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/button-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de2f32b795_64861403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c4f2d0bde4bd1993915d1b93fc63fbda2047660' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/button-edit.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 11,
    'file:adminarea/pages/includes/modal/icon-tabs.tpl' => 1,
  ),
),false)) {
function content_66f7de2f32b795_64861403 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal modal--lg modal--media modal--media-scroll" id="editButtonItemModal" data-edit-button-item-modal>
    <div class="modal__dialog">
        <div class="modal__content">
                        <div class="modal__top top">
                <h4 class="top__title h6">Edit "Button" <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['button']), 0, false);
?></h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

                        <form 
                id="editButtonForm" 
                data-edit-button-item-form
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getButtonItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body has-scroll">
                    <div class="modal__section">
                                                <div class="form-group">
                            <label class="form-label">
                                Button size
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['size']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['size']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['size']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['size']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['size']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                <?php }?>
                            </label>
                            <select class="form-control" data-edit-size name="item[size]" required style="opacity: 1">
                                <option value="extra-small">Extra Small</option>
                                <option value="small">Small</option>
                                <option value="default">Default</option>
                                <option value="large" selected>Large</option>
                                <option value="extra-large">Extra Large</option>
                            </select>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Button style
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['style']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['style']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['style']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['style']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['style']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <select class="form-control" data-edit-style name="item[style]" required style="opacity: 1">
                                <option value="solid" selected>Solid</option>
                                <option value="outline">Outline</option>
                                <option value="link">Link</option>
                            </select>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Button type
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['type']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['type']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['type']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['type']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['type']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <select class="form-control" data-edit-type name="item[type]" required style="opacity: 1">
                                <option value="primary" selected>Primary</option>
                                <option value="primary-faded">Primary Faded</option>
                                <option value="secondary">Secondary</option>
                                <option value="default">Default</option>
                                <option value="info">Info</option>
                                <option value="success">Success</option>
                                <option value="warning">Warning</option>
                                <option value="danger">Danger</option>
                            </select>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Button text
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['text']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['text']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['text']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['text']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['text']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="text" name="item[text]" data-edit-text value=""/>
                        </div>

                                                <div class="form-group">
                            <label class="form-label form-label--basic">
                                    Button link type
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['link_type']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['link_type']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['link_type']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['link_type']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['link_type']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                            <select
                                class="form-control"
                                name="item[link_type]"
                                data-button-link-type
                                data-edit-link-type
                            >
                                <option value="custom-url" selected>Custom URL</option>
                                <option value="whmcs-page">WHMCS Page</option>
                                <option value="whmcs-product">WHMCS Product</option>
                                <option value="homepage">Homepage</option>
                            </select>
                        </div>

                                                <div class="form-group" data-button-custom-url>
                            <label class="form-label">
                                Custom URL
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_url']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_url']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_url']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_url']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_url']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="text" name="item[custom_url]" data-custom-url-button-input data-edit-custom-url value=""/>
                        </div>

                                                <div class="form-group is-hidden" data-button-linked-page>
                            <label class="form-label">
                                Linked page
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_page']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_page']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_page']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_page']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_page']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <select class="form-control" name="item[whmcs_page]" data-linked-page-button-input data-edit-page style="opacity: 1">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                                                <div class="form-group is-hidden" data-button-linked-product>
                            <label class="form-label">
                                Linked product
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_product']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_product']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_product']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_product']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['linked_product']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <select class="form-control" name="item[whmcs_product]" data-linked-product-button-input data-edit-product style="opacity: 1">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['gid']) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</option>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                    Button custom class
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_class']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_class']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_class']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_class']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['custom_class']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                            <input class="form-control" type="text" name="item[custom_classes]" data-edit-custom-classes value=""/>
                        </div>

                                                <div class="form-group">                        
                            <label class="form-label is-pointer m-b-0x m-t-2x">
                                <span class="form-text d-flex align-items-center">
                                    Open URL in new window
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['target_blank']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['target_blank']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['target_blank']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['target_blank']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['target_blank']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </span>
                                <div class="switch switch--success m-l-0x">
                                    <input type="hidden" name="item[target_blank]" value="0" />
                                    <input class="switch__checkbox" name="item[target_blank]" value="1" data-edit-target-blank type="checkbox">
                                    <span class="switch__container">
                                        <span class="switch__handle"></span>
                                    </span>
                                </div>
                            </label>
                        </div>

                                                <div class="form-group">
                            <label 
                                class="form-label is-pointer m-b-0x m-t-2x"
                                data-toggle="lu-collapse"
                                data-target="#button-edit-modal-tabs"
                            >
                                <span class="form-text d-flex align-items-center">
                                    Show graphic for this item
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['show_graphic']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['show_graphic']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['show_graphic']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['show_graphic']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['button']['show_graphic']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
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

                                                <div class="collapse" id="button-edit-modal-tabs" data-product-tabs data-icons-tabs>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/icon-tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'button-edit'), 0, false);
?>
                        </div>
                    </div>

                        
                    <input type="hidden" name="item[list_name]" data-edit-list-name value=""/>
                    <input type="hidden" name="item[index]" data-edit-key value=""/>
                    <input type="hidden" name="item[position]" data-edit-position value=""/>
                    <input type="hidden" name="item[section]" data-edit-section-index value=""/>
                    <input type="hidden" name="item[group]" data-edit-group-index value=""/>
                    <input type="hidden" name="item[hide_modal_icon]" data-list-modal-icon value=""/>
                </div>

                                <div class="modal__actions">
                    <button class="btn btn--primary" data-edit-button-item-btn  type="submit" form="editButtonForm">
                        <span class="btn__text">Edit Button</span>
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
