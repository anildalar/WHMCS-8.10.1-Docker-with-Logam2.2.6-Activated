<?php
/* Smarty version 3.1.48, created on 2024-09-30 12:09:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/free-product-price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fa94f54ac3c3_17135427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d555ccffccbc04919abeadb834184773247f24a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/free-product-price.tpl',
      1 => 1726757106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66fa94f54ac3c3_17135427 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['free_product_price']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['free_product_price']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['free_product_price']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['free_product_price']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['free_product_price']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['free_product_price']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch" data-toggle="lu-collapse" data-target="#free-prices" aria-expanded="true">
                <input type="hidden" name="settings[free_product_price]" value="disabled" />
                <input 
                    class="switch__checkbox" 
                    name="settings[free_product_price]" 
                    value="enabled" type="checkbox" 
                    <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['free_product_price'])) && $_smarty_tpl->tpl_vars['settings']->value['free_product_price'] == "enabled") {?> checked="checked" <?php }?>
                >
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
    <div class="collapse <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['free_product_price'])) && $_smarty_tpl->tpl_vars['settings']->value['free_product_price'] == "enabled") {?> show <?php }?>" id="free-prices">
        <div class="form-group m-b-0x p-3x">
            <label class="form-label text-default"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['free_product_price']['label'];?>
</label>
            <select class="form-control selectized opacity-1" name="settings[free_product_price_value]" tabindex="-1">
                <option value="boxes" <?php if ($_smarty_tpl->tpl_vars['settings']->value['free_product_price_value'] == 'boxes') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['free_product_price']['options']['boxes'];?>
</option>
                <option value="all" <?php if ($_smarty_tpl->tpl_vars['settings']->value['free_product_price_value'] == 'all') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['free_product_price']['options']['all'];?>
</option>
            </select>
        </div>
    </div>
</div><?php }
}
