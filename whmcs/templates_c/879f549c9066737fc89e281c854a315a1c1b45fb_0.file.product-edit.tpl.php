<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/product-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d9c3048_27492883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '879f549c9066737fc89e281c854a315a1c1b45fb' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/product-edit.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 13,
    'file:adminarea/pages/includes/modal/tabs.tpl' => 1,
    'file:adminarea/pages/includes/modal/product/custom-price.tpl' => 1,
  ),
),false)) {
function content_66e40e7d9c3048_27492883 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div 
    class="modal modal--lg modal--media modal--media-scroll" 
    id="editProductItemModal" 
    data-edit-product-item-modal
>
    <div class="modal__dialog">
        <div class="modal__content">
                        <div class="modal__top top">
                <h4 class="top__title h6">
                    Edit Product 
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['product']), 0, false);
?>
                </h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

                        <form
                id="editProductForm"
                data-edit-product-item-form
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getListItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body overflow-y-visible" data-edit-product-item-modal-body>
                    <div class="modal__section">
                        <div class="modal__section-content">    
                              
                            <div class="form-group">
                                <label class="form-label">
                                    Product Group
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['group']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['group']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['group']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['group']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['group']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                    <?php }?>
                                </label>
                                <select
                                    class="form-control"
                                    name="item[group_id]"
                                    data-lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getGroupProducts',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'language'=>$_smarty_tpl->tpl_vars['language']->value));?>
"
                                    data-edit-group-id
                                    data-change-product-group="product"
                                    required
                                >
                                    <option value="" selected>Choose Product Group</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                                        <?php if (!$_smarty_tpl->tpl_vars['productGroup']->value->hidden) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
</option>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['productGroup']->value->hidden) {?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 (hidden)</option>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                                                        <div class="form-group">
                                <label class="form-label">
                                    Product
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['product']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['product']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['product']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['product']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['product']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                                <select
                                    class="form-control"
                                    name="item[product_id]"
                                    data-lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getGroupProductData',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" required
                                    data-edit-product-id
                                    data-change-product
                                >
                                    <option value="" selected>Choose Product</option>
                                </select>
                            </div>
                        </div>
                    </div>    

                                        <div class="modal__section is-hidden" data-product-info>
                        <div class="modal__section-content">
                            
                                                        <div class="form-group">
                                <div class="d-flex">
                                    <label class="form-label flex-grow-1">
                                        Title
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['title']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['title']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['title']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['title']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['title']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <a
                                        href="#"
                                        target="_blank"
                                        data-product-link
                                        data-default-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
/configproducts.php?action=edit&id="
                                    >
                                        <span class="form-label">Edit</span>
                                    </a>
                                </div>
                                <input
                                    class="form-control product__title is-disabled"
                                    type="text"
                                    name="item[title]"
                                    value=""
                                    data-product-title
                                />
                            </div>

                                                        <div class="form-group">
                                <div class="d-flex">
                                    <label class="form-label flex-grow-1">
                                        Description
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['description']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['description']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['description']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['description']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['description']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <a
                                        href="#"
                                        target="_blank"
                                        data-product-link
                                        data-default-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
/configproducts.php?action=edit&id="
                                    >
                                        <span class="form-label">Edit</span>
                                    </a>
                                </div>
                                <textarea
                                    class="form-control product__description is-disabled"
                                    rows="2" name="item[description]"
                                    data-product-description
                                    >
                                </textarea>
                            </div>

                                                        <div class="form-group" data-toggle-button-link>
                                <label 
                                    class="form-label is-pointer m-b-0x m-t-2x"
                                    data-toggle="lu-collapse"
                                    data-target="#product-add-modal-replace-url"
                                >
                                    <span class="form-text d-flex align-items-center">
                                        Replace default order button with custom link
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['replace_url']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['replace_url']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['replace_url']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['replace_url']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['replace_url']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </span>
                                    <div class="switch switch--success m-l-0x">
                                        <input type="hidden" name="item[show_link]" value="0" />
                                        <input class="switch__checkbox" name="item[show_link]" value="1" type="checkbox"  data-show-button-link>
                                        <span class="switch__container">
                                            <span class="switch__handle"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>

                            <div class="collapse" id="product-add-modal-replace-url" data-show-button-link-items data-toggle-button-link data-toggle-sidebar-on>
                                                                <div class="form-group" >
                                    <label class="form-label">
                                        Link text
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_text']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_text']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_text']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_text']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_text']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <input class="form-control" type="text" name="item[link_text]" value="" data-edit-link-text/>
                                </div>

                                                                <div class="form-group">
                                    <label class="form-label form-label--basic">
                                        Link type
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_type']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_type']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_type']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_type']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['link_type']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <select class="form-control" name="item[link_type]" data-button-link-type data-edit-link-type data-default-select-value="custom-url">
                                        <option value="custom-url" selected>Custom URL</option>
                                        <option value="whmcs-page">WHMCS Page</option>
                                        <option value="homepage">Homepage</option>
                                    </select>
                                </div>

                                                                <div class="form-group" data-button-custom-url>
                                    <label class="form-label">
                                        Custom URL
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['custom_url']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['custom_url']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['custom_url']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['custom_url']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['custom_url']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <input class="form-control" type="text" name="item[custom_url]" data-custom-url-button-input data-edit-custom-url value=""/>
                                </div>

                                                                <div class="form-group is-hidden" data-button-linked-page>
                                    <label class="form-label">
                                        Linked Page
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['linked_page']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['linked_page']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['linked_page']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['linked_page']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['linked_page']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <select class="form-control" name="item[whmcs_page]" data-linked-page-button-input data-edit-page>
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

                                                                <div class="form-group">                        
                                    <label class="form-label is-pointer m-b-0x m-t-2x">
                                        <span class="form-text d-flex align-items-center">
                                            Open URL in new window
                                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['target_blank']['content']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['target_blank']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['target_blank']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['target_blank']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['list']['target_blank']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <div class="switch switch--success m-l-0x">
                                            <input type="hidden" name="item[target_blank]" value="0" />
                                            <input class="switch__checkbox" name="item[target_blank]" data-edit-target-blank value="1" type="checkbox">
                                            <span class="switch__container">
                                                <span class="switch__handle"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                                                        <div class="form-group is-hidden" data-product-icon>
                                <label class="form-label is-pointer m-w-360 m-b-0x m-t-2x" data-toggle="lu-collapse" data-target="#product-edit-modal-tabs">
                                    <span class="form-text d-flex align-items-center">
                                        Show graphic for this item
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['show_graphic']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['show_graphic']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['show_graphic']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['show_graphic']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['show_graphic']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
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

                                                        <div class="collapse" id="product-edit-modal-tabs" data-product-tabs data-icons-tabs>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'product-edit'), 0, false);
?>
                            </div>
                        </div>
                    
                                                <div 
                            class="modal__section-header top collapsed m-t-3x" 
                            data-toggle="lu-collapse" 
                            data-target="#addNewProduct-advanced-settings" 
                            data-product-advanced-settings-toogle
                        >
                            <span class="top__title p-md">Advanced Settings</span>
                            <button type="button" class="top__toolbar btn btn--link">
                                <span class="btn__text">Expand</span>
                                <span class="btn__text">Hide</span>
                                <i class="btn__icon ls ls-down"></i>
                            </button>
                        </div>
                        <div class="modal__section-content collapse" id="addNewProduct-advanced-settings" data-product-advanced-settings>

                                                        <div class="form-group m-t-2x">
                                <div class="d-flex">
                                    <label class="form-label">
                                        Custom Description
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_description']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_description']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_description']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_description']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_description']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                </div>
                                <textarea
                                    class="form-control"
                                    rows="2" name="item[custom_description]"
                                    data-product-custom-description
                                ></textarea>
                            </div>

                                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/product/custom-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                        <div class="form-group">
                                <label class="form-label">
                                    Custom Classes
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_class']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_class']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_class']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_class']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_class']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                                <input class="form-control" type="text" name="item[custom_classes]" data-edit-custom-classes value=""/>
                            </div>
                        </div>
                    </div>
                    
                                        <input type="hidden" name="item[list_name]" data-edit-list-name value=""/>
                    <input type="hidden" name="item[key]" data-edit-key value=""/>
                    <input type="hidden" name="item[position]" data-edit-position value=""/>
                    <input type="hidden" name="item[section]" data-edit-section-index value=""/>
                    <input type="hidden" name="item[group]" data-edit-group-index value=""/>
                    <input type="hidden" name="item[hide_modal_icon]" data-list-modal-icon value=""/>
                </div>

                                <div class="modal__actions">
                    <button class="btn btn--primary" data-edit-product-item-btn type="submit" form="editProductForm">
                        <span class="btn__text">Edit</span>
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
