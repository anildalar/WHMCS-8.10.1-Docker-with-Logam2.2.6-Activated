<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/testimonial-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d7f4380_85612573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10d63533576d2fadde43de8e1cd97d2b325cc2f' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/testimonial-add.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 7,
    'file:adminarea/pages/includes/modal/tabs.tpl' => 1,
  ),
),false)) {
function content_66e40e7d7f4380_85612573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal modal--lg modal--media modal--media-scroll" id="newTestimonialsItemModal" data-add-new-testimonial-item-modal>
    <div class="modal__dialog">
        <div class="modal__content">
                        <div class="modal__top top">
                <h4 class="top__title h6">Add New Item <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['testimonial']), 0, false);
?></h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

                        <form id="addNewTestimonialsItem" 
                data-add-new-testimonial-item-form 
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getListItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
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
                                Title
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['title']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['title']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['title']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['title']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['title']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="text" name="item[title]" value=""/>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Description
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['description']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['description']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['description']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['description']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['description']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <textarea class="form-control" data-html-editor rows="2" name="item[description]"></textarea>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Author
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['author']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['author']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['author']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['author']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['author']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="text" name="item[author]" value=""/>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Domain/Position
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="text" name="item[domain]" value=""/>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Domain/Position URL
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position_url']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position_url']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position_url']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position_url']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['domain_position_url']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="text" name="item[domain_url]" value=""/>
                        </div>

                                                <div class="form-group">
                            <label class="form-label">
                                Date
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['date']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['date']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['date']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['date']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['date']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                <?php }?>
                            </label>
                            <input class="form-control" type="date" name="item[date]" value=""/>
                        </div>

                                                <div class="form-group">
                            <label class="form-label is-pointer m-b-0x m-t-2x"
                                data-toggle="lu-collapse"
                                data-target="#testimonial-add-modal-tabs">
                                <span class="form-text d-flex align-items-center">
                                    Show graphic for this item
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['show_graphic']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['show_graphic']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['show_graphic']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['show_graphic']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['testimonial']['show_graphic']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
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

                                                <div class="collapse" id="testimonial-add-modal-tabs" data-icons-tabs>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'testimonial-add'), 0, false);
?>
                        </div>
                    </div>    

                                        <input type="hidden" name="item[list_name]" data-list-name value=""/>
                    <input type="hidden" name="item[new_index]" data-list-new-index  value=""/>
                    <input type="hidden" name="item[new_position]" data-list-new-position  value=""/>
                    <input type="hidden" name="item[section]" data-list-section-index value=""/>
                    <input type="hidden" name="item[group]" data-list-group-index value=""/>
                    <input type="hidden" name="item[hide_modal_icon]" data-list-modal-icon value=""/>
                </div>

                                <div class="modal__actions">
                    <button id="addNewTestimonialItemButton" data-add-new-testimonial-item-btn class="btn btn--primary" type="submit" form="addNewTestimonialsItem">
                        <span class="btn__text">Add</span>
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
