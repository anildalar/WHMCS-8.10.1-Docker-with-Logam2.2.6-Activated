<?php
/* Smarty version 3.1.48, created on 2024-09-30 12:09:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/product-domain-free-price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fa94f55ae429_16193392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a13390aaa06b5a88c21b1fcca4d26d9966da84d9' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/product-domain-free-price.tpl',
      1 => 1726757106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66fa94f55ae429_16193392 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title"> 
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_domain_free_price']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_domain_free_price']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_domain_free_price']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_domain_free_price']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_domain_free_price']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_domain_free_price']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch">
                <input type="hidden" name="settings[product_domain_free_price]" value="hidden" />
                <input 
                    class="switch__checkbox" 
                    name="settings[product_domain_free_price]" 
                    value="true" type="checkbox" 
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['product_domain_free_price'] == "true") {?> checked="checked" <?php }?>
                > 
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
</div><?php }
}
