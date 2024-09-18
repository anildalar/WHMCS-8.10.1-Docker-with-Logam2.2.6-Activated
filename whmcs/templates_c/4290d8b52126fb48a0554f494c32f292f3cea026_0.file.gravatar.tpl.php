<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:29
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/gravatar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea6359a8ae04_57894218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4290d8b52126fb48a0554f494c32f292f3cea026' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/gravatar.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 2,
  ),
),false)) {
function content_66ea6359a8ae04_57894218 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch" data-toggle="lu-collapse" data-target="#gravatar-settings">
                <input type="hidden"  name="settings[show_gravatar_image]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[show_gravatar_image]" value="displayed"
                        type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_gravatar_image'] == "displayed") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
    <div class="collapse <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_gravatar_image'] == "displayed") {?> show <?php }?>" id="gravatar-settings">
        <div class="form-group m-b-0x p-3x">
            <label class="form-label text-default">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['label'];?>

                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar_placeholder']['title']))) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar_placeholder']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar_placeholder']['url'] != '') {?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar_placeholder']['url'])."' target='_blank'>Learn More</a>");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['gravatar_placeholder']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                <?php }?>
            </label>
            <select class="form-control" name="settings[gravatar_placeholder]">
                <option value="default" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'default') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['default'];?>
</option>
                <option value="404" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == '404') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options'][404];?>
</option>
                <option value="mp" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'mp') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['mp'];?>
</option>
                <option value="identicon" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'identicon') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['identicon'];?>
</option>
                <option value="monsterid" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'monsterid') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['monsterid'];?>
</option>
                <option value="wavatar" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'wavatar') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['wavatar'];?>
</option>
                <option value="retro" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'retro') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['retro'];?>
</option>
                <option value="robohash" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'robohash') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['robohash'];?>
</option>
                <option value="blank" <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'])) && $_smarty_tpl->tpl_vars['settings']->value['gravatar_placeholder'] == 'blank') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['gravatar']['placeholder']['options']['blank'];?>
</option>
            </select>
        </div>
    </div>
</div><?php }
}
