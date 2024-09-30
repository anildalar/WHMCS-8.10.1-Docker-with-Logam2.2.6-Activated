<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:45:03
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/product/custom-price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de2f14df99_66303369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b59dc05d38b2bafc8d90ace66b905baf9ab9ddfb' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/product/custom-price.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 6,
  ),
),false)) {
function content_66f7de2f14df99_66303369 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group m-b-0x is-hidden">
                <div class="row" data-product-simple-custom-price>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="d-flex">
                        <label class="form-label flex-grow-1">
                            Price Before
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                            <?php }?>
                        </label>
                    </div>
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_price_before]"
                        value=""
                        data-product-custom-price-before
                    />
                </div>
            </div>    
            <div class="col-md-4">
                <div class="form-group">
                    <div class="d-flex">
                        <label class="form-label flex-grow-1">
                            Price After
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </label>
                    </div>
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_price_after]"
                        value=""
                        data-product-custom-price-after
                    />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="d-flex">
                        <label class="form-label flex-grow-1">
                            Discount Label
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </label>
                    </div>
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_price_label]"
                        value=""
                        data-product-custom-price-label
                    />
                </div>
            </div>
        </div>

                <div class="row is-hidden" data-product-multi-custom-price-header>
            <div class="col-md-2">&nbsp;</div>
            <div class="col">
                <label class="form-label flex-grow-1">
                    Price Before
                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['content']) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['url'] != '') {?>
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['url'])."' target='_blank'>Learn More</a>");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__right",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_before']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                    <?php }?>
                </label>
            </div>
            <div class="col">
                <label class="form-label flex-grow-1">
                    Price After
                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['content']) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['url'] != '') {?>
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['url'])."' target='_blank'>Learn More</a>");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_price_after']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                    <?php }?>
                </label>
            </div>
            <div class="col">
                <label class="form-label flex-grow-1">
                    Discount Label
                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['content']) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['url'] != '') {?>
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['url'])."' target='_blank'>Learn More</a>");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->modal['item']['add_edit']['product']['custom_discount_label']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                    <?php }?>
                </label>
            </div>
        </div>
        <div class="row is-hidden" data-product-multi-custom-price="monthly">
            <div class="col-md-2 d-flex align-items-center m-b-2x">
                Monthly
            </div>
            <div class="col">
                <div class="form-group">
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][monthly][before]"
                        value=""
                        disabled
                    />
                </div>
            </div>    
            <div class="col">
                <div class="form-group">
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][monthly][after]"
                        value=""
                        disabled
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][monthly][label]"
                        value=""
                        disabled
                    />
                </div>
            </div>
        </div>
        
                <div class="row is-hidden" data-product-multi-custom-price="quarterly">
            <div class="col-md-2 d-flex align-items-center m-b-2x">
                Quarterly
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][quarterly][before]"
                        value=""
                        disabled
                    />
                </div>
            </div>    
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][quarterly][after]"
                        value=""
                        
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group">                    
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][quarterly][label]"
                        value=""
                        disabled
                    />
                </div>
            </div>
        </div>

                <div class="row is-hidden" data-product-multi-custom-price="semiannually">
            <div class="col-md-2 d-flex align-items-center m-b-2x">
                Semi-Annually
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][semiannually][before]"
                        value=""
                        disabled
                    />
                </div>
            </div>    
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][semiannually][after]"
                        value=""
                        disabled
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][semiannually][label]"
                        value=""
                        disabled
                    />
                </div>
            </div>
        </div>

                <div class="row is-hidden" data-product-multi-custom-price="annually">
            <div class="col-md-2 d-flex align-items-center m-b-2x">
                Annually
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][annually][before]"
                        value=""
                        disabled
                    />
                </div>
            </div>    
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][annually][after]"
                        value=""
                        disabled
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][annually][label]"
                        value=""
                        disabled
                    />
                </div>
            </div>
        </div>

                <div class="row is-hidden" data-product-multi-custom-price="biennially">
            <div class="col-md-2 d-flex align-items-center m-b-2x">
                Biennially
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][biennially][before]"
                        value=""
                        disabled
                    />
                </div>
            </div>    
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][biennially][after]"
                        value=""
                        disabled
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][biennially][label]"
                        value=""
                        disabled
                    />
                </div>
            </div>
        </div>

                <div class="row is-hidden" data-product-multi-custom-price="triennially">
            <div class="col-md-2 d-flex align-items-center m-b-2x">
                Triennially
            </div>
            <div class="col">
                <div class="form-group">                   
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][triennially][before]"
                        value=""
                        disabled
                    />
                </div>
            </div>    
            <div class="col">
                <div class="form-group">                  
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][triennially][after]"
                        value=""
                        disabled
                    />
                </div>
            </div>
            <div class="col">
                <div class="form-group">                    
                    <input
                        class="form-control"
                        type="text"
                        name="item[custom_multi_price][triennially][label]"
                        value=""
                        disabled
                    />
                </div>
            </div>
        </div>
      
</div><?php }
}
