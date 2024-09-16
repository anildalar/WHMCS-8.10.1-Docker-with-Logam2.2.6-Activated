<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:07:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/inputs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40ed4dd7105_08356810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f266d93c650c6bc0d5096ae456824f06e916d5ec' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/inputs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/tooltip.tpl' => 16,
    'file:adminarea/menu/includes/types/".((string)$_smarty_tpl->tpl_vars[\'typeView\']->value).".tpl' => 1,
    'file:adminarea/menu/includes/components/icon.tpl' => 1,
  ),
),false)) {
function content_66e40ed4dd7105_08356810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="inputs-container">
    <div class="inputs-container__section">
        <div class="section">
            <div class="section__header top">
                <h6 class="top__title">
                    <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>Sub-<?php }?>Menu Item
                </h6>
            </div>
            <div class="section__content">
                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">
                                    Type
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['type']), 0, false);
?>
                                </label>
                                <select
                                    class="form-control type-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 opacity-1"
                                    name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][type]"
                                    data-translation-method="<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['translation-method'])) {
echo $_smarty_tpl->tpl_vars['settings']->value['translation-method'];
} else { ?>custom<?php }?>"
                                    data-menu-item-type
                                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                                    data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                                    data-level="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
"
                                    data-location="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
"
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@changeType',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'location'=>$_smarty_tpl->tpl_vars['location']->value));?>
"
                                    data-whmcs-var="<?php echo $_smarty_tpl->tpl_vars['translations']->value['whmcs'];?>
"
                                    data-prev-value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
if ($_smarty_tpl->tpl_vars['type']->value->view === $_smarty_tpl->tpl_vars['typeView']->value) {
echo $_smarty_tpl->tpl_vars['type']->value->name;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>"
                                    data-selectize-disable-search
                                    data-icon="<?php echo $_smarty_tpl->tpl_vars['settings']->value['icon'];?>
"
                                    data-predefined-icon="<?php echo $_smarty_tpl->tpl_vars['settings']->value['predefined_icon'];?>
"
                                    data-media="<?php echo $_smarty_tpl->tpl_vars['settings']->value['media'];?>
"
                                    data-predefined-illustration="<?php echo $_smarty_tpl->tpl_vars['settings']->value['predefined_illustration'];?>
"
                                >
                                    
                                    <?php $_smarty_tpl->_assignInScope('sortedTypes', array("WHMCS Page","Custom Link","Homepage","Predefined List","Divider","WHMCS Notifications","Client Account","Language","Currency Switcher","Header","Header Collapse"));?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortedTypes']->value, 'sType');
$_smarty_tpl->tpl_vars['sType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sType']->value) {
$_smarty_tpl->tpl_vars['sType']->do_else = false;
?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['sType']->value == $_smarty_tpl->tpl_vars['type']->value->name) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['type']->value->name !== 'Divider' && $_smarty_tpl->tpl_vars['type']->value->name !== 'Predefined List' && $_smarty_tpl->tpl_vars['type']->value->name !== "Header" && $_smarty_tpl->tpl_vars['type']->value->name !== "Header Collapse") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['location']->value === 'Footer') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value->name !== 'WHMCS Notifications' && $_smarty_tpl->tpl_vars['type']->value->name !== 'Client Account') {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value->view === $_smarty_tpl->tpl_vars['typeView']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
</option>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value->view === $_smarty_tpl->tpl_vars['typeView']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
</option>
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 1 && $_smarty_tpl->tpl_vars['type']->value->name !== 'Client Account' && $_smarty_tpl->tpl_vars['type']->value->name !== 'Language' && $_smarty_tpl->tpl_vars['type']->value->name !== 'WHMCS Notifications' && $_smarty_tpl->tpl_vars['type']->value->name !== 'Currency Switcher') {?>
                                                <?php if ($_smarty_tpl->tpl_vars['location']->value === 'Footer') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value->name !== 'Divider' && $_smarty_tpl->tpl_vars['type']->value->name !== "Header") {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value->view === $_smarty_tpl->tpl_vars['typeView']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
</option>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value->view === $_smarty_tpl->tpl_vars['typeView']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value->name;?>
</option>
                                                <?php }?>
                                            <?php }?>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="item-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
-inputs-loader preloader-container is-hidden" data-menu-item-inputs-loader data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
">
                        <div class="preloader preloader--lg"></div>
                    </div>
                    <div class="item-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
-inputs row" data-menu-item-inputs data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
">
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/types/".((string)$_smarty_tpl->tpl_vars['typeView']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['parent']->value,'translationMethod'=>$_smarty_tpl->tpl_vars['settings']->value['translation-method']), 0, true);
?>
                    </div>
                </div>    
            </div>    
        </div>    
    </div>
    <div class="inputs-container__section <?php if ($_smarty_tpl->tpl_vars['typeView']->value == "divider") {?>is-hidden<?php }?>" data-menu-display-settings>
        <div class="section">
            <div class="section__header top collapsed" data-toggle="lu-collapse" data-target="#label-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                <h6 class="top__title">Menu Item Label</h6>
                <button type="button" class="top__toolbar btn btn--link">
                    <span class="btn__text">Expand</span>
                    <span class="btn__text">Hide</span>
                    <i class="btn__icon ls ls-down"></i>
                </button>
            </div>    
            <div class="section__content collapse" id="label-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                <div class="well">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">
                                    Label type
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['label_type']), 0, true);
?>
                                </label>
                                <select class="form-control" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][label_type]">
                                    <option value="default" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'default') {?>selected<?php }?>>Default</option>
                                    <option value="primary" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'primary') {?>selected<?php }?>>Primary</option>
                                    <option value="primary-faded" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'primary-faded') {?>selected<?php }?>>Primary Faded</option>
                                    <option value="secondary" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'secondary') {?>selected<?php }?>>Secondary</option>
                                    <option value="success" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'success') {?>selected<?php }?>>Success</option>
                                    <option value="info" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'info') {?>selected<?php }?>>Info</option>
                                    <option value="warning" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'warning') {?>selected<?php }?>>Warning</option>
                                    <option value="danger" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'danger') {?>selected<?php }?>>Danger</option>
                                    <option value="savings" <?php if ($_smarty_tpl->tpl_vars['display']->value['label_type'] == 'savings') {?>selected<?php }?>>Savings</option> 
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="d-flex">
                                    <label class="form-label">
                                        Label text
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['label_text']), 0, true);
?>
                                    </label>
                                    <a class="label-link m-l-a" href="#translationCommonModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" data-title="Label" data-type="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][label_text]" data-menu-common-translation>
                                        Translate
                                    </a>
                                </div>
                                <?php $_smarty_tpl->_assignInScope('tempLabelText', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(explode(",",$_smarty_tpl->tpl_vars['display']->value['label_text']),'}',''),'{',''),'&quot;',''));?>
                                <?php if (is_array($_smarty_tpl->tpl_vars['tempLabelText']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tempLabelText']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('labelText', explode(":",$_smarty_tpl->tpl_vars['text']->value));?>
                                        <?php if ($_smarty_tpl->tpl_vars['labelText']->value[0] == $_smarty_tpl->tpl_vars['whmcsLang']->value->value) {?>
                                            <?php $_smarty_tpl->_assignInScope('labelLang', $_smarty_tpl->tpl_vars['labelText']->value[1]);?>
                                        <?php }?> 
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    data-menu-item-common-description
                                    data-type="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][label_text]" 
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@getCustomTranslation',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                                    value="<?php echo $_smarty_tpl->tpl_vars['labelLang']->value;?>
"
                                >
                                <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][label_text]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['label_text'];?>
">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['location']->value !== 'Footer') {?>             <div class="section">
                <div class="section__header top collapsed" data-toggle="lu-collapse" data-target="#sub-menu-settings-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                    <h6 class="top__title">Sub-Menu Settings</h6>
                    <button type="button" class="top__toolbar btn btn--link">
                        <span class="btn__text">Expand</span>
                        <span class="btn__text">Hide</span>
                        <i class="btn__icon ls ls-down"></i>
                    </button>
                </div>    
                <div class="section__content collapse" id="sub-menu-settings-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-submenu-style-container>
                    <div class="well">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        Sub-menu style
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['dropdown_style']), 0, true);
?>
                                    </label>
                                    <select data-submenu-style class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown]">
                                        <option value="default" <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown'] == 'default') {?> selected <?php }?>>Default</option>
                                        <option value="extended" <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown'] == 'extended') {?> selected <?php }?>>Extended</option>
                                        <option value="mega" <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown'] == 'mega') {?> selected <?php }?>>Mega menu</option>
                                                                            </select>
                                </div>
                            </div>
                            <div data-submenu-style-content class="flex-1 <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown'] != 'mega') {?>is-hidden<?php }?>">
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"dropdown_graphic"), 0, false);
?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <label class="form-label">
                                                Sub-menu description
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['dropdown_description']), 0, true);
?>
                                            </label>
                                            <a class="label-link m-l-a" href="#translationCommonModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" data-title="Label" data-type="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_description]" data-menu-common-translation>
                                                Translate
                                            </a>
                                        </div>
                                        <?php $_smarty_tpl->_assignInScope('tempDropdownDescription', smarty_modifier_replace($_smarty_tpl->tpl_vars['display']->value['dropdown_description'],'&quot;','"'));?>
                                        <?php $_smarty_tpl->_assignInScope('dropdownDescription', json_decode($_smarty_tpl->tpl_vars['tempDropdownDescription']->value,true));?>
                                        <?php $_smarty_tpl->_assignInScope('dropdownDescriptionLang', '');?>
                                        <?php if (is_array($_smarty_tpl->tpl_vars['dropdownDescription']->value)) {?>
                                            <?php $_smarty_tpl->_assignInScope('dropdownDescriptionLang', $_smarty_tpl->tpl_vars['dropdownDescription']->value[$_smarty_tpl->tpl_vars['whmcsLang']->value->value]);?>
                                        <?php }?>
                                        <textarea 
                                            type="text" 
                                            class="form-control" 
                                            data-menu-item-common-description
                                            data-type="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_description]" 
                                            data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@getCustomTranslation',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                                            value="<?php echo $_smarty_tpl->tpl_vars['dropdownDescriptionLang']->value;?>
"
                                        ><?php echo $_smarty_tpl->tpl_vars['dropdownDescriptionLang']->value;?>
</textarea>
                                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_description]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_description'];?>
">
                                    </div>
                                </div>
                            </div>    
                        </div>    
                    </div>
                </div>        
            </div>           
        <?php }?> 
        
        <div class="section">
             <div class="section__header top collapsed" data-toggle="lu-collapse" data-target="#item-display-settings-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                <h6 class="top__title"><?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>Sub-<?php }?>Menu Item Display Settings</h6>
                 <button type="button" class="top__toolbar btn btn--link">
                    <span class="btn__text">Expand</span>
                    <span class="btn__text">Hide</span>
                    <i class="btn__icon ls ls-down"></i>
                </button>
            </div>
            <div class="section__content collapse" id="item-display-settings-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                <div class="well">
                    <div class="item-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
-settings row">
                        <?php if ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['location']->value !== 'Footer') {?>                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Theme Layout
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['theme_layout']), 0, true);
?>
                                    </label>
                                    <select class="form-control multiselect form-control--basic opacity-1" data-menu-layout name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][theme-layout][]" multiple>
                                        <option value="All" <?php if (((isset($_smarty_tpl->tpl_vars['display']->value['theme-layout'])) && !is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('All',explode(',',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) || (is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('All',$_smarty_tpl->tpl_vars['display']->value['theme-layout'])) || !(isset($_smarty_tpl->tpl_vars['display']->value['theme-layout']))) {?> selected <?php }?>>All</option>
                                        <option value="Default"<?php if (((isset($_smarty_tpl->tpl_vars['display']->value['theme-layout'])) && !is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('Default',explode(',',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) || (is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('Default',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) {?> selected <?php }?>>Default</option>
                                        <option value="Condensed" <?php if (((isset($_smarty_tpl->tpl_vars['display']->value['theme-layout'])) && !is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('Condensed',explode(',',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) || (is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('Condensed',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) {?> selected <?php }?>>Condensed</option>
                                        <option value="Left" <?php if (((isset($_smarty_tpl->tpl_vars['display']->value['theme-layout'])) && !is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('Left',explode(',',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) || (is_array($_smarty_tpl->tpl_vars['display']->value['theme-layout']) && in_array('Left',$_smarty_tpl->tpl_vars['display']->value['theme-layout']))) {?> selected <?php }?>>Left</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <div class="col-md-6">                             <div class="form-group">
                                <label class="form-label">
                                    Client Status
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['client_status']), 0, true);
?>
                                </label>
                                <select class="form-control menu-item-type type-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][client-status]">
                                    <option value="All" <?php if ($_smarty_tpl->tpl_vars['display']->value['client-status'] == 'All') {?> selected <?php }?>>All</option>
                                    <option value="Logged-In" <?php if ($_smarty_tpl->tpl_vars['display']->value['client-status'] == 'Logged-In') {?> selected <?php }?>>Logged in Client</option>
                                    <option value="Logged-Out" <?php if ($_smarty_tpl->tpl_vars['display']->value['client-status'] == 'Logged-Out') {?> selected <?php }?>>Logged out Client</option>
                                </select>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['location']->value !== 'Footer') {?>                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Style for Top Menu Layout
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['style_for_top_menu_layout']), 0, true);
?>
                                    </label>
                                    <select class="form-control opacity-1" data-menu-style name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][style][top][layout]" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-style="top">
                                        <option value="text" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['layout'] == 'text') {?> selected <?php }?>>Text only</option>
                                        <option value="icon-text" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['layout'] == 'icon-text') {?> selected <?php }?>>Text with icon</option>
                                        <option value="icon" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['layout'] == 'icon') {?> selected <?php }?>>Icon only</option>
                                        <?php if ($_smarty_tpl->tpl_vars['typeView']->value != "whmcs-notifications" && $_smarty_tpl->tpl_vars['typeView']->value != "language") {?>
                                            <option value="button" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['layout'] == 'button') {?> selected <?php }?>>Button</option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div
                                    class="form-group <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['layout'] !== 'button') {?>is-hidden<?php }?>"
                                    data-menu-button-style="top"
                                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                                    data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                                >
                                    <label class="form-label">
                                        Button Style for Top Menu Layout
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['button_style_for_top_menu_layout']), 0, true);
?>
                                    </label>
                                    <select class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][style][top][button-style]">
                                        <option value="primary" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['button-style'] == 'primary') {?> selected <?php }?>>Primary</option>
                                        <option value="secondary" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['button-style'] == 'secondary') {?> selected <?php }?>>Secondary</option>
                                        <option value="primary-faded" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['button-style'] == 'primary-faded') {?> selected <?php }?>>Primary Faded</option>
                                        <option value="outline" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['top']['button-style'] == 'outline') {?> selected <?php }?>>Outline</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Style for Left Menu Layout
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['style_for_left_menu_layout']), 0, true);
?>
                                    </label>
                                    <select class="form-control opacity-1" data-menu-style name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][style][left][layout]" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" data-style="left">
                                        <option value="text" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['layout'] == 'text') {?> selected <?php }?>>Text only</option>
                                        <option value="icon-text" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['layout'] == 'icon-text' || !$_smarty_tpl->tpl_vars['display']->value['style']['left']['layout']) {?> selected <?php }?>>Text with icon</option>
                                        <option value="icon" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['layout'] == 'icon') {?> selected <?php }?>>Icon only</option>
                                        <?php if ($_smarty_tpl->tpl_vars['typeView']->value != "whmcs-notifications" && $_smarty_tpl->tpl_vars['typeView']->value != "language") {?>
                                            <option value="button" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['layout'] == 'button') {?> selected <?php }?>>Button</option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div
                                    class="form-group <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['layout'] !== 'button') {?>is-hidden<?php }?>"
                                    data-menu-button-style="left"
                                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                                    data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                                >
                                    <label class="form-label">
                                        Button Style for Left Menu Layout
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['button_style_for_left_menu_layout']), 0, true);
?>
                                    </label>
                                    <select class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][style][left][button-style]">
                                        <option value="primary" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['button-style'] == 'primary') {?> selected <?php }?>>Primary</option>
                                        <option value="secondary" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['button-style'] == 'secondary') {?> selected <?php }?>>Secondary</option>
                                        <option value="primary-faded" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['button-style'] == 'primary-faded') {?> selected <?php }?>>Primary Faded</option>
                                        <option value="outline" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['left']['button-style'] == 'outline') {?> selected <?php }?>>Outline</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['location']->value == 'Main Menu') {?>                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Position
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['position']), 0, true);
?>
                                    </label>
                                    <select class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][position]" data-menu-change-position>
                                        <option value="left" <?php if ($_smarty_tpl->tpl_vars['display']->value['position'] == 'left') {?> selected <?php }?>>Left</option>
                                        <option value="right" <?php if ($_smarty_tpl->tpl_vars['display']->value['position'] == 'right') {?> selected <?php }?>>Right</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['level']->value == 1 || ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['location']->value == 'Footer')) {?>                             <div class="col-md-6 <?php if ($_smarty_tpl->tpl_vars['typeView']->value == "header" || $_smarty_tpl->tpl_vars['typeView']->value == "header-collapse") {?>is-hidden<?php }?>" data-menu-item-style>
                                <div class="form-group">
                                    <label class="form-label">
                                        Style
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['style']), 0, true);
?>
                                    </label>
                                    
                                    <select class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][style][layout]">
                                        <option value="icon-text" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['layout'] == 'icon-text') {?> selected <?php }?>>Text with icon</option>
                                        <option value="text" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['layout'] == 'text' || (!$_smarty_tpl->tpl_vars['display']->value['style']['layout'] && $_smarty_tpl->tpl_vars['location']->value == 'Footer' && $_smarty_tpl->tpl_vars['level']->value == 0)) {?> selected<?php }?>>Text</option>
                                        <option value="icon" <?php if ($_smarty_tpl->tpl_vars['display']->value['style']['layout'] == 'icon') {?> selected <?php }?>>Icon only</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['level']->value == 0 && $_smarty_tpl->tpl_vars['location']->value === 'Footer') {?>                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">
                                        Footer Position
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['footer_position']), 0, true);
?>
                                    </label>
                                    <select class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][footer-position]" data-menu-change-position data-menu-footer-position>
                                        <option value="Primary" <?php if ($_smarty_tpl->tpl_vars['display']->value['footer-position'] === 'Primary') {?>selected<?php }?>>Primary</option>
                                        <option value="Secondary" <?php if ($_smarty_tpl->tpl_vars['display']->value['footer-position'] === 'Secondary') {?>selected<?php }?>>Secondary</option>
                                        <option value="Social" <?php if ($_smarty_tpl->tpl_vars['display']->value['footer-position'] === 'Social') {?>selected<?php }?>>Social</option>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                        <div class="col-md-6 <?php if ($_smarty_tpl->tpl_vars['typeView']->value == "predefined-list") {?>is-hidden<?php }?>" data-menu-custom-classes>
                            <div class="form-group">
                                <label class="form-label">
                                    Custom Classes
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['custom_classes']), 0, true);
?>
                                </label>
                                <input type="text" class="form-control" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][custom-data-classes]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['custom-data-classes'];?>
">
                            </div>
                        </div>
                        <div class="col-md-12 <?php if ($_smarty_tpl->tpl_vars['typeView']->value == "predefined-list" || $_smarty_tpl->tpl_vars['typeView']->value == "header" || $_smarty_tpl->tpl_vars['typeView']->value == "header-collapse") {?>is-hidden<?php }?>" data-menu-target-blank>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group d-flex">
                                        <label class="form-label text-default form-text flex-grow-1">
                                            Target Blank
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['target_blank']), 0, true);
?>
                                        </label>
                                        <label class="switch switch--primary">
                                            <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][target]" value="0">
                                            <input class="switch__checkbox mode-display" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][target]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['display']->value['target']) {?>checked="checked"<?php }?>>
                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>        
    </div>
</div>
<div class="item-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
-hidden-inputs">
    <input type="hidden" class="<?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {?>parent-order<?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 1) {?>child-order<?php }?>" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][order]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" data-item-order>
    <input type="hidden" class="item-level" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][level]" value="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
    <input type="hidden" class="item-parent" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][parent]" value=<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
>
</div><?php }
}
