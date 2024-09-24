<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:31
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/enable-pw-strength.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252af502775_83054252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807ac965aad018589817500e6e512a6fcc609e08' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/enable-pw-strength.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66f252af502775_83054252 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['enable_pw_strength']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['enable_pw_strength']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['enable_pw_strength']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['enable_pw_strength']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['enable_pw_strength']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['enable_pw_strength']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch">
                <input type="hidden" name="settings[enable_pw_strength]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[enable_pw_strength]" value="enabled"
                        type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['enable_pw_strength'])) && $_smarty_tpl->tpl_vars['settings']->value['enable_pw_strength'] == "enabled") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div> 
</div><?php }
}
