<?php
/* Smarty version 3.1.48, created on 2024-09-08 05:49:04
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/cookie-box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dd3ad08d5c57_62000684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b14f6100032ceb22b6043798798bc53e02e0e58' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/cookie-box.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66dd3ad08d5c57_62000684 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse" data-cookiebox>
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['cookie_box']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['cookie_box']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['cookie_box']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['cookie_box']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['cookie_box']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['cookie_box']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch" data-toggle="lu-collapse" data-target="#cookie-config" aria-expanded="true">
                <input type="hidden" name="settings[show_cookie_box]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[show_cookie_box]" value="displayed"
                        type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_cookie_box'] == "displayed") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
    <div class="collapse <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_cookie_box'] == "displayed") {?> show <?php }?>" id="cookie-config">
        <div class="form-group m-b-0x p-3x">
            <label class="form-label text-default">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['cookie_box']['label_position'];?>

            </label>
            <select class="form-control selectized opacity-1" name="settings[cookie_box_position]" tabindex="-1">
                <option value="bottom-left" <?php if ($_smarty_tpl->tpl_vars['settings']->value['cookie_box_position'] == 'bottom-left') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['cookie_box']['position']['bottom_left'];?>
</option>
                <option value="bottom-right" <?php if ($_smarty_tpl->tpl_vars['settings']->value['cookie_box_position'] == 'bottom-right') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['cookie_box']['position']['bottom_right'];?>
</option>
                <option value="bottom" <?php if ($_smarty_tpl->tpl_vars['settings']->value['cookie_box_position'] == 'bottom') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['cookie_box']['position']['bottom'];?>
</option>
            </select>
        </div>
        <div class="form-group m-b-0x p-l-3x p-r-3x p-b-3x p-t-0x" >
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['cookie_box']['label_message'];?>

                <a href="#cookieBoxTranslationsModal" data-toggle="lu-modal" class="form-label__translate">
                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['translate'];?>
</span>
                </a>
            </label>
            <textarea 
                id="cookie_box_message_textarea" 
                class="form-control" 
                type="text" 
                data-cookiebox-message 
                data-cookiebox-system-language="<?php echo $_smarty_tpl->tpl_vars['systemLanguage']->value;?>
"
                data-form-counter-input
            ><?php echo $_smarty_tpl->tpl_vars['cookiebox_settings']->value[$_smarty_tpl->tpl_vars['systemLanguage']->value];?>
</textarea>
            <input 
                id="cookie_box_message_json" 
                type="hidden" 
                name="settings[cookie_box_message]" 
                value='<?php echo json_encode($_smarty_tpl->tpl_vars['cookiebox_settings']->value);?>
'
                data-cookiebox-json
            >
        </div>
    </div>
</div><?php }
}
