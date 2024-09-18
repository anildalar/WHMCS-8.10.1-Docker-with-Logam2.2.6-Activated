<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:29
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/product-price-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea6359b35b13_40184308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12633047db8d9fed556c8767610d51aa824d6c8a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/product-price-settings.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66ea6359b35b13_40184308 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_price_calculation']['title'];?>

        </h6>
    </div>
    <div class="collapse show">
        <div class="form-group p-t-3x" >
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_price_calculation']['label'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_price_calculation']['title']))) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_price_calculation']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_price_calculation']['url'] != '') {?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_price_calculation']['url'])."' target='_blank'>Learn More</a>");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_price_calculation']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                <?php }?>
            </label>
            <select class="form-control selectized opacity-1" name="settings[price_calculation]" tabindex="-1">
                <option value="default" <?php if ($_smarty_tpl->tpl_vars['settings']->value['price_calculation'] == 'default') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_price_calculation']['price']['default'];?>
</option>
                <option value="lowest" <?php if ($_smarty_tpl->tpl_vars['settings']->value['price_calculation'] == 'lowest') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_price_calculation']['price']['lowest'];?>
</option>
            </select>
        </div>
    </div>
</div><?php }
}
