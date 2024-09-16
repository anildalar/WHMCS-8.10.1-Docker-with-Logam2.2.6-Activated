<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/show-status-icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e5cd2a046_62019628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acee63462f83ccbd958a8797731694f589154297' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/show-status-icon.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66e40e5cd2a046_62019628 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['show_status_icon']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['display_status_icon']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['display_status_icon']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['display_status_icon']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['display_status_icon']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['display_status_icon']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch">
                <input type="hidden" name="settings[show_status_icon]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[show_status_icon]" value="displayed"
                        type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['show_status_icon'])) && $_smarty_tpl->tpl_vars['settings']->value['show_status_icon'] == "displayed") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div> 
</div><?php }
}
