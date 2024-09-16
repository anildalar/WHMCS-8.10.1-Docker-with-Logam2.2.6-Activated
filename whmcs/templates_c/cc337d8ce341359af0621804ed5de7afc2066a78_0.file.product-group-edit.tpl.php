<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/product-group-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d6d5988_89325135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc337d8ce341359af0621804ed5de7afc2066a78' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/edit-item/product-group-edit.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 6,
    'file:adminarea/pages/includes/modal/tabs.tpl' => 1,
  ),
),false)) {
function content_66e40e7d6d5988_89325135 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div 
    class="modal modal--lg modal--media modal--media-scroll" 
    id="editGroupItemModal" 
    data-edit-group-item-modal
>
    <div class="modal__dialog">
        <div class="modal__content">

                        <div class="modal__top top">
                <h4 class="top__title h6">
                    Edit group item 
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['product_group']), 0, false);
?>
                </h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

                        <form 
                id="editGroupForm" 
                data-edit-group-item-form 
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getListItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
                data-load-icons-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body overflow-y-visible" data-edit-group-item-modal-body>
                    <div class="modal__section">
                        <div class="modal__section-content">   

                                                    
                            <div class="form-group">
                                <label class="form-label">
                                    Choose Product Group
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['group']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['group']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['group']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['group']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['group']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                    <?php }?>
                                </label>
                                <select
                                    class="form-control"
                                    name="item[group_id]"
                                    data-lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getGroupData',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'language'=>$_smarty_tpl->tpl_vars['language']->value));?>
"
                                    required
                                    data-change-product-group
                                    data-edit-group-id
                                >
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
                        </div>
                    </div>        

                                        <div class="modal__section is-hidden" data-product-group-info>
                        <div class="modal__section-content">         

                                                        <div class="form-group">
                                <div class="d-flex">
                                    <label class="form-label flex-grow-1">
                                        Title
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['title']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['title']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['title']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['title']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['title']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <a
                                        href="#"
                                        target="_blank"
                                        data-product-group-link
                                        data-default-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
/configproducts.php?action=editgroup&ids="
                                    >
                                        <span class="form-label">Edit</span>
                                    </a>
                                </div>
                                <input
                                    class="form-control is-disabled"
                                    type="text"
                                    name="item[title]"
                                    value=""
                                    data-product-group-title
                                    data-edit-title
                                />
                            </div>

                                                        <div class="form-group">
                                <div class="d-flex">
                                    <label class="form-label flex-grow-1">
                                        Description
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['description']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['description']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['description']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['description']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['description']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <a
                                        href="#"
                                        target="_blank"
                                        data-product-group-link
                                        data-default-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
/configproducts.php?action=editgroup&ids"
                                    >
                                        <span class="form-label">Edit</span>
                                    </a>
                                </div>
                                <textarea
                                    class="form-control is-disabled"
                                    rows="2"
                                    name="item[description]"
                                    data-product-group-description
                                    data-edit-description
                                    >
                                </textarea>
                            </div>

                                                        <div class="form-group">
                                <label class="form-label">
                                    Linked Page
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['linked_page']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['linked_page']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['linked_page']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['linked_page']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['linked_page']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                                <input type="hidden" name="item[link_type]" value="whmcs-page">
                                <select class="form-control" name="item[whmcs_page]" data-product-group-page data-edit-page>
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

                                                        <div class="form-group is-hidden" data-product-icon>
                                <label class="form-label is-pointer m-w-360 m-b-0x m-t-2x" data-toggle="lu-collapse" data-target="#group-edit-modal-tabs">
                                    <span class="form-text d-flex align-items-center">
                                        Show graphic for this item
                                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['show_graphic']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['show_graphic']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['show_graphic']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['show_graphic']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['show_graphic']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
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

                                                        <div class="collapse" id="group-edit-modal-tabs" data-product-tabs data-icons-tabs>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'group-edit'), 0, false);
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

                                                        <div class="form-group  m-t-2x">
                                <label class="form-label">
                                    Custom package class
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['custom_class']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['custom_class']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['custom_class']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['custom_class']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product_group']['custom_class']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </label>
                                <input class="form-control" type="text" name="item[custom_classes]" data-edit-custom-classes value=""/>
                            </div>
                        </div>
                    </div>

                                        <input type="hidden" name="item[list_name]" data-edit-list-name id="groupListName" value=""/>
                    <input type="hidden" name="item[key]" id="groupKey" data-edit-key value=""/>
                    <input type="hidden" name="item[position]" id="groupPosition" data-edit-position value=""/>
                    <input type="hidden" name="item[section]" data-edit-section-index value=""/>
                    <input type="hidden" name="item[group]" data-edit-group-index value=""/>
                    <input type="hidden" name="item[hide_modal_icon]" data-list-modal-icon value=""/>
                </div>

                                <div class="modal__actions">
                    <button class="btn btn--primary" data-edit-group-item-btn type="submit" form="editGroupForm">
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
