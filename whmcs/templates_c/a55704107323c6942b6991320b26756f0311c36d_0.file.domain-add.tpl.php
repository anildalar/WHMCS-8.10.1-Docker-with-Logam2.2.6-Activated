<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/domain-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7daed9e7_95287705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a55704107323c6942b6991320b26756f0311c36d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/add-item/domain-add.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66e40e7daed9e7_95287705 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal" id="addNewDomainItemModal" data-add-new-domain-item-modal>
    <div class="modal__dialog">
        <div class="modal__content">
                        <div class="modal__top top">
                <h4 class="top__title h6">Add New TLD <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['item']['add_edit']['domain']), 0, false);
?></h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

                        <form 
                id="addNewDomainForm" 
                data-add-new-domain-item-form 
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@getListItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>

            ">
                <div class="modal__body overflow-y-visible">
                                        <div class="modal__section">
                                                <div class="form-group">
                            <label class="form-label">
                                Choose TLD
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['domain']['choose_tld']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['domain']['choose_tld']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['domain']['choose_tld']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['domain']['choose_tld']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right-top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['domain']['choose_tld']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                <?php }?>
                            </label>
                            <select class="form-control" name="item[domain]" required data-select-domain data-default-select-value="1">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
$_smarty_tpl->tpl_vars['domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['domain']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value->extension;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>    
                    
                                        <input type="hidden" name="item[list_name]" data-list-name value=""/>
                    <input type="hidden" name="item[new_index]" data-list-new-index value=""/>
                    <input type="hidden" name="item[new_position]" data-list-new-position value=""/>
                    <input type="hidden" name="item[section]" data-list-section-index value=""/>
                    <input type="hidden" name="item[group]" data-list-group-index value=""/>
                </div>

                                <div class="modal__actions">
                    <button class="btn btn--primary" data-add-new-domain-item-btn type="submit" form="addNewDomainForm">
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
