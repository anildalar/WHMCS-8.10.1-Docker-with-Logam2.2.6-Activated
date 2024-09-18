<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:29
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/product-package-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea6359b2a178_79985031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e3670e05efa11c7b34417218da122005f6e48a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/product-package-settings.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66ea6359b2a178_79985031 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_package_settings']['title'];?>

        </h6>
    </div>
    <div class="collapse show">
                <div class="form-group p-t-3x" >
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_package_settings']['label_price'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_package_settings']['package_price']['title']))) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_package_settings']['package_price']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_package_settings']['package_price']['url'] != '') {?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_package_settings']['package_price']['url'])."' target='_blank'>Learn More</a>");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['product_package_settings']['package_price']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                <?php }?>
            </label>
            <select class="form-control selectized opacity-1" name="settings[package_price_wrap]" tabindex="-1">
                <option value="default" <?php if ($_smarty_tpl->tpl_vars['settings']->value['package_price_wrap'] == 'default') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_package_settings']['price_wrap']['default'];?>
</option>
                <option value="break-all" <?php if ($_smarty_tpl->tpl_vars['settings']->value['package_price_wrap'] == 'break-all') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['product_package_settings']['price_wrap']['break_all'];?>
</option>
            </select>
        </div>
    </div>
</div><?php }
}
