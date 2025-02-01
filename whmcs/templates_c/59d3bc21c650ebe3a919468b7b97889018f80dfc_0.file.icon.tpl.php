<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:33:06
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/components/icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b3a21af454_56498294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d3bc21c650ebe3a919468b7b97889018f80dfc' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/components/icon.tpl',
      1 => 1730150154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/tooltip.tpl' => 2,
  ),
),false)) {
function content_6784b3a21af454_56498294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets");?>
<div class="col-md-12">
    <div class="form-group">
        <label class="form-label">
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "dropdown_graphic") {?>
                Sub-menu graphic
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['dropdown_graphic']), 0, false);
?>
            <?php } else { ?>
                Icon
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['icon']), 0, true);
?>
            <?php }?>
        </label>
        <div 
            class="media media--field media--xs" 
            data-menu-item-icon-container 
            data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" 
            data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" 
            data-assets-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets"
            <?php if ($_smarty_tpl->tpl_vars['type']->value == "dropdown_graphic") {?>
                data-menu-item-icon-type="dropdown"
            <?php }?>
        >
            <?php $_smarty_tpl->_assignInScope('hasIcon', false);?>

            <?php if ($_smarty_tpl->tpl_vars['type']->value == "dropdown_graphic") {?>
                <?php if (((isset($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon'])) && !empty($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon'])) || ((isset($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon'])) && !empty($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon'])) || ((isset($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration'])) && !empty($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration'])) || ((isset($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media'])) && !empty($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media']))) {?>
                    <?php $_smarty_tpl->_assignInScope('hasIcon', true);?>
                <?php }?>
            <?php } else { ?>
                <?php if ((((isset($_smarty_tpl->tpl_vars['settings']->value['icon'])) && !empty($_smarty_tpl->tpl_vars['settings']->value['icon'])) || ((isset($_smarty_tpl->tpl_vars['icon']->value)) && !empty($_smarty_tpl->tpl_vars['icon']->value))) || (((isset($_smarty_tpl->tpl_vars['settings']->value['predefined_icon'])) && !empty($_smarty_tpl->tpl_vars['settings']->value['predefined_icon'])) || ((isset($_smarty_tpl->tpl_vars['predefinedIcon']->value)) && !empty($_smarty_tpl->tpl_vars['predefinedIcon']->value))) || (((isset($_smarty_tpl->tpl_vars['settings']->value['predefined_illustration'])) && !empty($_smarty_tpl->tpl_vars['settings']->value['predefined_illustration'])) || ((isset($_smarty_tpl->tpl_vars['predefinedIllustration']->value)) && !empty($_smarty_tpl->tpl_vars['predefinedIllustration']->value))) || (((isset($_smarty_tpl->tpl_vars['settings']->value['media'])) && !empty($_smarty_tpl->tpl_vars['settings']->value['media'])) || ((isset($_smarty_tpl->tpl_vars['settingsMedia']->value)) && !empty($_smarty_tpl->tpl_vars['settingsMedia']->value)))) {?>
                    <?php $_smarty_tpl->_assignInScope('hasIcon', true);?>
                <?php }?>
            <?php }?>
            <a 
                class="media__upload <?php if ($_smarty_tpl->tpl_vars['hasIcon']->value) {?>is-hidden<?php }?>"
                data-toggle="lu-modal"
                data-target="#menuIconModal"
                data-menu-item-icon-button
                data-menu-item-icon-new
                href="#"
            >
                <div class="media__upload-content">
                    <span class="media__title">No icon assigned</span>
                    <span class="btn btn--sm btn--link">
                        <span class="btn__icon">
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6693_2419)">
                                    <path d="M12.35 7.64999L9.85004 5.14999C9.80515 5.10216 9.75093 5.06404 9.69073 5.03798C9.63053 5.01192 9.56563 4.99847 9.50004 4.99847C9.43444 4.99847 9.36954 5.01192 9.30934 5.03798C9.24914 5.06404 9.19493 5.10216 9.15003 5.14999L5.50003 8.78999L3.85003 7.14999C3.80514 7.10216 3.75093 7.06404 3.69073 7.03798C3.63053 7.01192 3.56563 6.99847 3.50003 6.99847C3.43444 6.99847 3.36954 7.01192 3.30934 7.03798C3.24914 7.06404 3.19493 7.10216 3.15003 7.14999L0.650035 9.64999C0.601998 9.69464 0.563835 9.74884 0.538002 9.80912C0.512168 9.8694 0.499236 9.93442 0.500035 9.99999V11.5C0.500035 11.6326 0.552713 11.7598 0.646482 11.8535C0.74025 11.9473 0.867427 12 1.00003 12H12C12.1326 12 12.2598 11.9473 12.3536 11.8535C12.4474 11.7598 12.5 11.6326 12.5 11.5V7.99999C12.5008 7.93442 12.4879 7.8694 12.4621 7.80912C12.4362 7.74884 12.3981 7.69464 12.35 7.64999Z" fill="#1062FE"/>
                                    <path d="M4.5 4C5.60457 4 6.5 3.10457 6.5 2C6.5 0.89543 5.60457 0 4.5 0C3.39543 0 2.5 0.89543 2.5 2C2.5 3.10457 3.39543 4 4.5 4Z" fill="#1062FE"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_6693_2419">
                                    <rect width="12" height="12" fill="white" transform="translate(0.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <span class="btn__text">Assign icon</span>
                    </span>
                </div>
            </a>
            <div 
                class="media__content <?php if (!$_smarty_tpl->tpl_vars['hasIcon']->value) {?>is-hidden<?php }?>"
                data-menu-item-icon-content
            >
                <div class="media__body">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "dropdown_graphic") {?>
                        <i class="<?php if (!$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon']) {?>is-hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon']) {
echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon'];
}?>" data-menu-item-icon></i>   
                        <div class="media__predefined-icon <?php if (!$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon'] && !$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration'] && !$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media']) {?>is-hidden<?php }?>" data-menu-item-predefined-icon>
                            <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon'] && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon']))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/svg-icon/".((string)$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration'] && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration']))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media']) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media'];?>
" alt=<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media'];?>
/> 
                            <?php }?>
                        </div>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_graphic][icon]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon'];?>
" data-menu-item-icon-value>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_graphic][predefined_icon]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon'];?>
" data-menu-item-predefined-icon-value>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_graphic][predefined_illustration]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration'];?>
" data-menu-item-predefined-illustration-value>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][display][dropdown_graphic][media]" value="<?php echo $_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media'];?>
" data-menu-item-media-value>
                    <?php } else { ?>
                        <i class="<?php if (!$_smarty_tpl->tpl_vars['settings']->value['icon'] && !$_smarty_tpl->tpl_vars['icon']->value) {?>is-hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['icon']) {
echo $_smarty_tpl->tpl_vars['settings']->value['icon'];
} elseif ($_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
}?>" data-menu-item-icon></i>
                        <div class="media__predefined-icon <?php if (!$_smarty_tpl->tpl_vars['settings']->value['predefined_icon'] && !$_smarty_tpl->tpl_vars['predefinedIcon']->value && !$_smarty_tpl->tpl_vars['settings']->value['predefined_illustration'] && !$_smarty_tpl->tpl_vars['predefinedIllustration']->value && !$_smarty_tpl->tpl_vars['settings']->value['media'] && !$_smarty_tpl->tpl_vars['settingsMedia']->value) {?>is-hidden<?php }?>" data-menu-item-predefined-icon>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['predefined_icon'] && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['settings']->value['predefined_icon']))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/svg-icon/".((string)$_smarty_tpl->tpl_vars['settings']->value['predefined_icon']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['predefinedIcon']->value && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['predefinedIcon']->value))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/svg-icon/".((string)$_smarty_tpl->tpl_vars['predefinedIcon']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>    
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['predefined_illustration'] && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['settings']->value['predefined_illustration']))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['settings']->value['predefined_illustration']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['predefinedIllustration']->value && file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['predefinedIllustration']->value))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['predefinedIllustration']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>    
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['media']) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['settings']->value['media'];?>
" alt=<?php echo $_smarty_tpl->tpl_vars['settings']->value['media'];?>
/> 
                            <?php } elseif ($_smarty_tpl->tpl_vars['settingsMedia']->value) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['settingsMedia']->value;?>
" alt=<?php echo $_smarty_tpl->tpl_vars['settingsMedia']->value;?>
/> 
                            <?php }?>
                        </div>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][icon]" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value['icon']) {
echo $_smarty_tpl->tpl_vars['settings']->value['icon'];
} elseif ($_smarty_tpl->tpl_vars['icon']->value) {
echo $_smarty_tpl->tpl_vars['icon']->value;
}?>" data-menu-item-icon-value>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][predefined_icon]" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value['predefined_icon']) {
echo $_smarty_tpl->tpl_vars['settings']->value['predefined_icon'];
} elseif ($_smarty_tpl->tpl_vars['predefinedIcon']->value) {
echo $_smarty_tpl->tpl_vars['predefinedIcon']->value;
}?>" data-menu-item-predefined-icon-value>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][predefined_illustration]" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value['predefined_illustration']) {
echo $_smarty_tpl->tpl_vars['settings']->value['predefined_illustration'];
} elseif ($_smarty_tpl->tpl_vars['predefinedIllustration']->value) {
echo $_smarty_tpl->tpl_vars['predefinedIllustration']->value;
}?>" data-menu-item-predefined-illustration-value>
                        <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][media]" value="<?php if ($_smarty_tpl->tpl_vars['settings']->value['media']) {
echo $_smarty_tpl->tpl_vars['settings']->value['media'];
} elseif ($_smarty_tpl->tpl_vars['settingsMedia']->value) {
echo $_smarty_tpl->tpl_vars['settingsMedia']->value;
}?>" data-menu-item-media-value>
                    <?php }?>
                </div>
                <div class="media__footer">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "dropdown_graphic") {?>
                        <?php if ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon']) {?>
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['icon']));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon']) {?>
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_icon']));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration']) {?>    
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['predefined_illustration']));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media']) {?>    
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['display']->value['dropdown_graphic']['media']));?>      
                        <?php }?>   
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['icon']) {?>
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['settings']->value['icon']));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['icon']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['icon']->value));?>    
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['predefined_icon']) {?>
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['settings']->value['predefined_icon']));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['predefinedIcon']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['predefinedIcon']->value));?>    
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['predefined_illustration']) {?>    
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['settings']->value['predefined_illustration']));?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['media']) {?>    
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['settings']->value['media']));?>    
                        <?php } elseif ($_smarty_tpl->tpl_vars['settingsMedia']->value) {?>    
                            <?php $_smarty_tpl->_assignInScope('iconName', explode("/",$_smarty_tpl->tpl_vars['settingsMedia']->value));?>        
                        <?php }?>    
                    <?php }?>
                    
                    <span class="media__name" 
                        data-menu-item-icon-name 
                        data-toggle="lu-modal"
                        data-target="#menuIconModal"
                        data-menu-item-icon-button
                    >
                        <?php if ($_smarty_tpl->tpl_vars['iconName']->value && is_array($_smarty_tpl->tpl_vars['iconName']->value)) {
echo end($_smarty_tpl->tpl_vars['iconName']->value);
}?>
                    </span>
                    <span 
                        class="btn btn--icon btn--link btn--xs"
                        data-toggle="lu-modal"
                        data-target="#menuIconModal"
                        data-menu-item-icon-button
                    >
                        <i 
                            class="btn__icon lm lm-pen"
                            data-toggle="lu-tooltip"
                            data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['edit'];?>
"
                        ></i>
                    </span>
                    <a 
                        class="btn btn--icon btn--link btn--xs" 
                        data-toggle="lu-modal"
                        data-target="#deleteMenuIconModal"
                        data-menu-item-icon-remove
                    >
                        <i 
                            class="btn__icon lm lm-trash"
                            data-toggle="lu-tooltip"
                            data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
