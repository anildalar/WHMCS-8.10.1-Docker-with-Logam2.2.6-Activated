<?php
/* Smarty version 3.1.48, created on 2025-01-15 10:59:28
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/hreflang-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67879510827be2_02870126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b457a295590349b33f6afb4839efa36ed44518' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/hreflang-links.tpl',
      1 => 1730150158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_67879510827be2_02870126 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['enable_hreflang_links']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['enable_hreflang_links']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['enable_hreflang_links']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['enable_hreflang_links']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['enable_hreflang_links']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['enable_hreflang_links']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch">
                <input type="hidden" name="settings[enable_hreflang_links]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[enable_hreflang_links]" value="displayed"
                        type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['enable_hreflang_links'])) && $_smarty_tpl->tpl_vars['settings']->value['enable_hreflang_links'] == "displayed") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div> 
</div><?php }
}
