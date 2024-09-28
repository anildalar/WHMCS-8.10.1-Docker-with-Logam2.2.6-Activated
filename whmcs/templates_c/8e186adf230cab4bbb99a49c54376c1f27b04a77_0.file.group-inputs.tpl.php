<?php
/* Smarty version 3.1.48, created on 2024-09-28 03:20:23
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/group-inputs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f775f75d7628_14765283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e186adf230cab4bbb99a49c54376c1f27b04a77' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/group-inputs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 7,
  ),
),false)) {
function content_66f775f75d7628_14765283 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" collapse-toggle d-flex">
    <h6 class="top__title">
        <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

        <?php if ((isset($_smarty_tpl->tpl_vars['tooltip']->value['title']))) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['tooltip']->value['url'])) && $_smarty_tpl->tpl_vars['tooltip']->value['url'] != '') {?>
                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltip']->value['url'])."' target='_blank'>Learn More</a>");?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltip']->value['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
        <?php }?>
    </h6>
    <label class="m-b-0x">
        <div class="switch" data-toggle="lu-collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['switchId']->value;?>
" aria-expanded="true">
            <input type="hidden" name="group_inputs[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][visibility]" value="0"/>
            <input class="switch__checkbox group-input-visibility" name="group_inputs[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][visibility]" value="1" type="checkbox"
                    <?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value !== 'displayed') {?> checked="checked" <?php }?> data-name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
            <span class="switch__container"><span class="switch__handle"></span></span>
        </div>
    </label>
</div>
<div class="collapse <?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value !== 'displayed') {?> show <?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['switchId']->value;?>
">
    <div class="form-group m-b-0x">
        <div class="group_inputs_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" style="display: <?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value !== 'displayed') {?> block <?php } else { ?> none <?php }?>;">
            <div class="d-flex flex-column">
                <div class="form-check  m-b-3x">
                    <label class="m-b-0x">
                        <input class="group-radio form-radio" type="radio" name="group_inputs[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][group_selection]" value="all"
                            data-name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php if (is_null($_smarty_tpl->tpl_vars['value']->value) || $_smarty_tpl->tpl_vars['value']->value === 'displayed' || $_smarty_tpl->tpl_vars['value']->value === $_smarty_tpl->tpl_vars['allGroups']->value) {?> checked <?php }?>>
                        <span class="form-indicator"></span>
                        <span class="form-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_common']['hide_all'];?>
</span>
                    </label>
                </div>
                <div class="form-check m-b-0x">
                    <label class="m-b-0x">
                        <input class="group-radio form-radio" type="radio" name="group_inputs[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][group_selection]" value="groups"
                            data-name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value !== 'displayed' && $_smarty_tpl->tpl_vars['value']->value !== $_smarty_tpl->tpl_vars['allGroups']->value && !empty($_smarty_tpl->tpl_vars['value']->value)) {?> checked <?php }?>>
                        <span class="form-indicator"></span>
                        <span class="form-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_common']['hide_selected'];?>
</span>
                    </label>
                </div>
            </div>
            <div class="form-group m-l-4x p-0x m-t-3x m-b-0x group_select_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" style="display: <?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value !== $_smarty_tpl->tpl_vars['allGroups']->value && !empty($_smarty_tpl->tpl_vars['value']->value)) {?> block <?php } else { ?> none <?php }?>;">
                <label class="form-text" for="group_select_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_common']['choose_product_groups'];?>
</label>  
                <select id="group_select_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control multiselect form-control--basic group-multi-select" name="group_inputs[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
][groups][]" multiple required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['value']->value)) && $_smarty_tpl->tpl_vars['value']->value !== 'displayed' && in_array($_smarty_tpl->tpl_vars['productGroup']->value->id,explode(',',$_smarty_tpl->tpl_vars['value']->value))) {?> selected <?php }?>><?php if ($_smarty_tpl->tpl_vars['productGroup']->value->isHidden) {?>[Hidden] <?php }
echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['customHostname']->value)) && $_smarty_tpl->tpl_vars['customHostname']->value) {?>
                <div class="form-group d-flex m-t-3x p-0x">
                    <span class="form-label text-default form-text m-b-0x m-r-6x">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['custom_hostname'];?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['use_custom_hostname']['title']))) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['use_custom_hostname']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['use_custom_hostname']['url'] != '') {?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['use_custom_hostname']['url'])."' target='_blank'>Learn More</a>");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['use_custom_hostname']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                        <?php }?>
                    </span>
                    <label>
                        <div class="switch switch--primary">
                            <input type="hidden" name="settings[enable_custom_hostname]" value="0">
                            <input class="switch__checkbox custom-hostname" name="settings[enable_custom_hostname]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_custom_hostname']) {?> checked="checked" <?php }?>>
                            <span class="switch__container"><span class="switch__handle"></span></span>
                        </div>
                    </label>
                </div>
                <div class="custom-hostname-group" style="display: <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_custom_hostname']) {?> block <?php } else { ?> none <?php }?>">                    
                    <div class="form-group">
                        <label class="form-text">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['interfix'];?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['interfix']['title']))) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['interfix']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['interfix']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['interfix']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['interfix']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?> 
                        </label>
                        <input class="form-control" name="hostname_settings[custom_hostname_interfix_length]" type="number" min="8" max="50"
                            value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['custom_hostname_interfix_length'];?>
" data-hostname-input lu-required <?php if (!$_smarty_tpl->tpl_vars['settings']->value['enable_custom_hostname']) {?>disabled<?php }?>>
                        <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span>   
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['custom_hostname_chars']))) {?>              
                        <?php $_smarty_tpl->_assignInScope('customChars', explode(",",$_smarty_tpl->tpl_vars['settings']->value['custom_hostname_chars']));?> 
                    <?php }?>
                    <div class="form-group">
                        <label class="form-text">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['chars'];?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['chars']['title']))) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['chars']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['chars']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['chars']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['chars']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?> 
                        </label>
                        <select class="form-control multiselect form-control--basic" name="hostname_settings[custom_hostname_chars][]" multiple data-select-all>
                            <option value="all" <?php if (!(isset($_smarty_tpl->tpl_vars['settings']->value['custom_hostname_chars'])) || ((isset($_smarty_tpl->tpl_vars['customChars']->value)) && is_array($_smarty_tpl->tpl_vars['customChars']->value) && in_array("all",$_smarty_tpl->tpl_vars['customChars']->value))) {?>selected<?php }?>>All</option>
                            <option value="lowersace" <?php if ((isset($_smarty_tpl->tpl_vars['customChars']->value)) && is_array($_smarty_tpl->tpl_vars['customChars']->value) && in_array("lowersace",$_smarty_tpl->tpl_vars['customChars']->value)) {?>selected<?php }?>>Lowercase</option>
                            <option value="uppercase" <?php if ((isset($_smarty_tpl->tpl_vars['customChars']->value)) && is_array($_smarty_tpl->tpl_vars['customChars']->value) && in_array("uppercase",$_smarty_tpl->tpl_vars['customChars']->value)) {?>selected<?php }?>>Uppercase</option>
                            <option value="numbers" <?php if ((isset($_smarty_tpl->tpl_vars['customChars']->value)) && is_array($_smarty_tpl->tpl_vars['customChars']->value) && in_array("numbers",$_smarty_tpl->tpl_vars['customChars']->value)) {?>selected<?php }?>>Numbers</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-text">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['prefix'];?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['title']))) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?> 
                        </label>
                        <input class="form-control" name="hostname_settings[custom_hostname_prefix]" type="text"
                            value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['custom_hostname_prefix'];?>
" data-hostname-input <?php if (!$_smarty_tpl->tpl_vars['settings']->value['enable_custom_hostname']) {?>disabled<?php }?>>
                    </div>
                    <div class="form-group">
                        <label class="form-text">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['suffix'];?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['suffix']['title']))) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['suffix']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['suffix']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['suffix']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['suffix']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>    
                        </label>
                        <input class="form-control" name="hostname_settings[custom_hostname_suffix]" type="text" pattern="^\.[a-zA-z.]+"
                            value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['custom_hostname_suffix'];?>
" data-hostname-input <?php if (!$_smarty_tpl->tpl_vars['settings']->value['enable_custom_hostname']) {?>disabled<?php }?>>
                    </div>
                </div>
                <div class="form-group d-flex m-t-3x p-0x">
                    <span class="form-label text-default form-text m-b-0x m-r-6x">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['order_process']['hide_product_hostname']['hide_on_checkout'];?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['hide_on_checkout']['title']))) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['hide_on_checkout']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['hide_on_checkout']['url'] != '') {?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['hide_on_checkout']['url'])."' target='_blank'>Learn More</a>");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['order_process']['hide_product_hostname']['hide_on_checkout']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                        <?php }?>  
                    </span>
                    <label>
                        <div class="switch switch--primary">
                            <input type="hidden" name="settings[hide_hostname_on_checkout]" value="0">
                            <input class="switch__checkbox" name="settings[hide_hostname_on_checkout]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value['hide_hostname_on_checkout']) {?> checked="checked" <?php }?>>
                            <span class="switch__container"><span class="switch__handle"></span></span>
                        </div>
                    </label>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
