<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:31
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/show-client-id.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252af481864_12694643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94654f61eca78bf6c8b4dc253beda94ce4589823' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/show-client-id.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66f252af481864_12694643 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['show_client_id']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['show_client_id']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['show_client_id']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['show_client_id']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['show_client_id']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['show_client_id']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch">
                <input type="hidden" name="settings[show_client_id]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[show_client_id]" value="displayed"
                        type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['show_client_id'])) && $_smarty_tpl->tpl_vars['settings']->value['show_client_id'] == "displayed") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div> 
</div><?php }
}
