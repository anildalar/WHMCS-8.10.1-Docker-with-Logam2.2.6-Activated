<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:24:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/graphic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b199b38d53_10115985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54510328b832c0db531377a6eeb31e28a7758a6a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/graphic.tpl',
      1 => 1734354616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 2,
  ),
),false)) {
function content_6784b199b38d53_10115985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");
$_smarty_tpl->_assignInScope('illustrationsPath', "./../../../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations");?>

<?php $_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/img");?>

<?php $_smarty_tpl->_assignInScope('filedir', explode("/modules/addons",dirname($_smarty_tpl->source->filepath)));?>

<?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <div class="form-group <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['grouped_only_visible']) {?>grouped-only-visible<?php }?>">
        <label class="form-label">
            <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>

            <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip']) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip_url'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip_url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip_url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['sectionGroupField']->value['tooltip']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </label>
        <div class="media media--xs media--field <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'] == "icons") {?>media--icon<?php }?>" data-graphic-container="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
">
            <a 
                class="media__upload <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'])) && !empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'])) {?>is-hidden<?php }?>"
                data-add-new-graphic
                data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'] == "icons") {?>
                    href="#addGraphicIconModal"
                <?php } else { ?>
                    href="#addGraphicModal"
                <?php }?>
                data-toggle="lu-modal"
                data-backdrop="static"
                data-keyboard="false"
            >
                <div class="media__upload-content">
                    <span class="media__title">No graphic assigned</span>
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
                        <span class="btn__text">Assign graphic</span>
                    </span>
                </div>
            </a>
            <div class="media__content <?php if (!(isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'])) || empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'])) {?>is-hidden<?php }?>" data-graphic-content>
             
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'])) && !empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'])) {?>
                    <div class="media__body" data-graphic-image>
                        <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "icon") {?>
                            <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['filedir']->value[0])."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic']))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "illustration") {?>
                            <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['filedir']->value[0])."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic']))) {?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustrationsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "media") {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
">
                        <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "font-icon") {?>
                            <i class="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"></i>    
                        <?php }?>
                    </div>
                    <div class="media__footer">
                        <?php $_smarty_tpl->_assignInScope('graphicName', explode("/",$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic']));?>
                        <span class="media__name"
                            <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'] == "icons") {?>
                                href="#editGraphicIconModal"
                            <?php } else { ?>
                                 href="#editGraphicModal" 
                            <?php }?>
                            data-edit-graphic
                            data-toggle="lu-modal" 
                            data-backdrop="static" 
                            data-keyboard="false" 
                            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                            data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "icon") {?>
                                data-icon="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "illustration") {?>
                                data-illustration="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "media") {?>
                                data-media="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "font-icon") {?>
                                data-font-icon="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php }?>
                            data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" 
                            data-graphic-title
                            ><?php echo end($_smarty_tpl->tpl_vars['graphicName']->value);?>
</span>
                        <span 
                            class="btn btn--icon btn--link btn--xs" 
                            <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['graphic_types'] == "icons") {?>
                                href="#editGraphicIconModal"
                            <?php } else { ?>
                                 href="#editGraphicModal" 
                            <?php }?>
                            data-edit-graphic
                            data-toggle="lu-modal" 
                            data-backdrop="static" 
                            data-keyboard="false" 
                            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                            data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "icon") {?>
                                data-icon="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "illustration") {?>
                                data-illustration="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "media") {?>
                                data-media="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'] == "font-icon") {?>
                                data-font-icon="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
"    
                            <?php }?>
                            data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" 
                        >
                            <i class="btn__icon ls ls-edit"></i>
                        </span>
                        <a 
                            class="deleteItem btn btn--icon btn--link btn--xs" 
                            href="#deleteGraphicModal" 
                            data-toggle="lu-modal" 
                            data-backdrop="static" 
                            data-delete-graphic
                            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                            data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                            data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"  
                        >
                            <i class="btn__icon lm lm-trash"></i>
                        </a>
                    </div>
                <?php }?>
            </div>
            <input type="hidden" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
" data-graphic="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" data-graphic-type name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
][type]" value="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['type'];?>
">
            <input type="hidden" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
" data-graphic="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" data-graphic-name name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
][graphic]" value="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value['graphic'];?>
">
        </div>
    </div>
<?php } else { ?>
    <div class="section__field col-12">
        <div class="form-group">
            <label class="form-label">
                <?php echo $_smarty_tpl->tpl_vars['sectionField']->value['label'];?>

                <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['tooltip']) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['tooltip_url'])) && $_smarty_tpl->tpl_vars['sectionField']->value['tooltip_url'] != '') {?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['sectionField']->value['tooltip_url'])."' target='_blank'>Learn More</a>");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['sectionField']->value['tooltip']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                <?php }?>
            </label>
            <div class="media media--xs media--field m-t-0x" data-graphic-container="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                <a
                    class="media__upload <?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'])) && !empty($_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'])) {?>is-hidden<?php }?>"
                    data-add-new-graphic
                    data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                    data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                    href="#addGraphicModal"
                    data-toggle="lu-modal"
                    data-backdrop="static"
                    data-keyboard="false"
                >
                    <div class="media__upload-content">
                        <span class="media__title">No graphic assigned</span>
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
                            <span class="btn__text">Assign graphic</span>
                        </span>
                    </div>
                </a>
                <div class="media__content <?php if (!(isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'])) || empty($_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'])) {?>is-hidden<?php }?>" data-graphic-content>
                    <?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'])) && !empty($_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'])) {?>
                        <div class="media__body" data-graphic-image>
                            <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "icon") {?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['filedir']->value[0])."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic']))) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "illustration") {?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['filedir']->value[0])."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic']))) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustrationsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?> 
                            <?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "media") {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
">
                            <?php }?>
                        </div>
                        <div class="media__footer">
                            <?php $_smarty_tpl->_assignInScope('graphicName', explode("/",$_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic']));?>
                            <span 
                                class="media__name" 
                                data-graphic-title
                                href="#editGraphicModal" 
                                data-edit-graphic
                                data-toggle="lu-modal" 
                                data-backdrop="static" 
                                data-keyboard="false" 
                                data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                                <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "icon") {?>
                                    data-icon="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
"
                                <?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "illustration") {?>
                                    data-illustration="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
"
                                <?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "media") {?>
                                    data-media="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
"
                                <?php }?>
                                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                            >
                                <?php echo end($_smarty_tpl->tpl_vars['graphicName']->value);?>

                            </span>
                            <span 
                                class="btn btn--icon btn--link btn--xs" 
                                href="#editGraphicModal" 
                                data-edit-graphic
                                data-toggle="lu-modal" 
                                data-backdrop="static" 
                                data-keyboard="false" 
                                data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                                <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "icon") {?>
                                    data-icon="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
"
                                <?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "illustration") {?>
                                    data-illustration="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
"
                                <?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'] == "media") {?>
                                    data-media="<?php echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];?>
"
                                <?php }?>
                                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" 
                            >
                                <i class="btn__icon ls ls-edit" data-toggle="lu-tooltip" data-title="Edit Item"></i>
                            </span>
                            <a 
                                class="deleteItem btn btn--icon btn--link btn--xs" 
                                href="#deleteGraphicModal" 
                                data-toggle="lu-modal" 
                                data-backdrop="static" 
                                data-delete-graphic
                                data-graphic-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                                data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"  
                            >
                                <i class="btn__icon ls ls-trash" data-toggle="lu-tooltip" data-title="Remove Item"></i>
                            </a>
                        </div>
                    <?php }?>
                </div>
                <input type="hidden" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-graphic="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
" data-graphic-type
                    name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][type]" value="<?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type']))) {
echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['type'];
}?>">
                <input type="hidden" data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" data-graphic="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
" data-graphic-name
                    name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][graphic]" value="<?php if ((isset($_smarty_tpl->tpl_vars['sectionFieldValue']->value['type']))) {
echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value['graphic'];
}?>">
            </div>
        </div>
    </div>
<?php }
}
}
