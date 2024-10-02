<?php
/* Smarty version 3.1.48, created on 2024-09-30 12:09:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/mobile-menu-style.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fa94f548ad78_90854767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038d0d3b33e50ee9c27301485b298e38b8385cd5' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/mobile-menu-style.tpl',
      1 => 1726757106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66fa94f548ad78_90854767 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse is-hidden">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['mobile_menu_style']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['mobile_menu_style']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['mobile_menu_style']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['mobile_menu_style']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['mobile_menu_style']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['mobile_menu_style']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
    </div>
    <div class="collapse show">
        <div class="form-group p-t-3x" >
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['mobile_menu_style']['label'];?>

            </label>
            <select class="form-control selectized opacity-1" name="settings[mobile_menu_style]" tabindex="-1">
                <option value="slide" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['mobile_menu_style'])) && $_smarty_tpl->tpl_vars['settings']->value['mobile_menu_style'] == 'slide') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['mobile_menu_style']['style']['slide'];?>
</option>
                <option value="dropdown" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['mobile_menu_style'])) && $_smarty_tpl->tpl_vars['settings']->value['mobile_menu_style'] == 'dropdown') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['mobile_menu_style']['style']['dropdown'];?>
</option>
            </select>
        </div>
    </div>
</div><?php }
}
