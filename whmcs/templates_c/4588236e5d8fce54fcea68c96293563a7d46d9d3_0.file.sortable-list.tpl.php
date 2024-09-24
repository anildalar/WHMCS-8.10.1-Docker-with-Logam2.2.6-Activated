<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:43
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/sortable-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252bbf38272_78383708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4588236e5d8fce54fcea68c96293563a7d46d9d3' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/sortable-list.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/sortable-list/edit-btn.tpl' => 6,
  ),
),false)) {
function content_66f252bbf38272_78383708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('iconLocation', "./../../../../assets/svg-icons");
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");
$_smarty_tpl->_assignInScope('illustrationsPath', "./../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations");?>

<?php $_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/img");?>

<?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value)) && (isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']))) {?>
    <?php $_smarty_tpl->_assignInScope('showModalIconsTabs', $_smarty_tpl->tpl_vars['sectionGroupField']->value['icons']);
} elseif ((isset($_smarty_tpl->tpl_vars['sectionField']->value['icons']))) {?>
    <?php $_smarty_tpl->_assignInScope('showModalIconsTabs', $_smarty_tpl->tpl_vars['sectionField']->value['icons']);
}
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['link']))) {?> 
    <?php $_smarty_tpl->_assignInScope('showModalLinks', $_smarty_tpl->tpl_vars['sectionGroupField']->value['link']);
} elseif ((isset($_smarty_tpl->tpl_vars['sectionField']->value['link']))) {?> 
    <?php $_smarty_tpl->_assignInScope('showModalLinks', $_smarty_tpl->tpl_vars['sectionField']->value['link']);
}
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['sidebar']))) {?> 
    <?php $_smarty_tpl->_assignInScope('sidebarType', $_smarty_tpl->tpl_vars['sectionGroupField']->value['sidebar']);
} elseif ((isset($_smarty_tpl->tpl_vars['sectionField']->value['sidebar']))) {?> 
    <?php $_smarty_tpl->_assignInScope('sidebarType', $_smarty_tpl->tpl_vars['sectionField']->value['sidebar']);
}?>

<?php $_smarty_tpl->_assignInScope('showModalStatsField', false);
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['stats']))) {?> 
    <?php $_smarty_tpl->_assignInScope('showModalStatsField', $_smarty_tpl->tpl_vars['sectionGroupField']->value['stats']);
} elseif ((isset($_smarty_tpl->tpl_vars['sectionField']->value['stats']))) {?> 
    <?php $_smarty_tpl->_assignInScope('showModalStatsField', $_smarty_tpl->tpl_vars['sectionField']->value['stats']);
}?>

<ul class="sortableList list-page-manager list list--sortable <?php if (empty($_smarty_tpl->tpl_vars['items']->value)) {?>is-hidden<?php }?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
        data-item-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
    <?php } else { ?>
        data-item-list="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
    <?php }?>
    
    data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
    data-item-list-type="<?php echo $_smarty_tpl->tpl_vars['listType']->value;?>
"
    <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
        data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['comparison']->value) {?>data-item-list-comparison-control="<?php echo $_smarty_tpl->tpl_vars['comparison']->value;?>
"<?php }?>
>
    <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li class="items-list list__item">
                                    <div class="list__item-icon i-c-4x icon-<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
 m-l-0x <?php if (!$_smarty_tpl->tpl_vars['item']->value['show_icon']) {?>is-hidden<?php }?>">
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?>
                            <?php if (strstr($_smarty_tpl->tpl_vars['item']->value['icon'],".tpl")) {?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']))) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                                <?php }?>
                            <?php } else { ?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']).".tpl")) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                                <?php }?>
                            <?php }?>  
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['illustration']))) {?>
                            <?php if (strstr($_smarty_tpl->tpl_vars['item']->value['illustration'],".tpl")) {?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['item']->value['illustration']))) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustrationsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['illustration']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                                <?php }?>
                            <?php } else { ?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['item']->value['illustration']).".tpl")) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustrationsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['illustration']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                                <?php }?>
                            <?php }?>  
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['font-icon']))) {?>
                            <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value['font-icon'];?>
"></i>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['media']))) {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['media'] !== 'undefined') {?>
                                <img style="max-height: 130px;object-fit:cover;object-position:center;" src="<?php echo $_smarty_tpl->tpl_vars['imagesPath']->value;?>
/page-manager/<?php echo $_smarty_tpl->tpl_vars['item']->value['media'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['media'];?>
">
                            <?php }?>
                        <?php }?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['icon'])) && !(isset($_smarty_tpl->tpl_vars['item']->value['illustration'])) && !(isset($_smarty_tpl->tpl_vars['item']->value['font-icon'])) && !(isset($_smarty_tpl->tpl_vars['item']->value['media']))) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                        <?php }?>
                    </div>
                                                <div 
                    class="list__item-name" 
                    data-name
                    href="#<?php echo $_smarty_tpl->tpl_vars['btnEditAction']->value;?>
"
                    data-edit-item
                    data-toggle="lu-modal"
                    data-backdrop="static"
                    data-keyboard="false"
                    data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                    
                    <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
                        data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                    <?php } else { ?>
                        data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                    <?php }?>
                    
                    data-key="<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
"
                    data-position="<?php echo $_smarty_tpl->tpl_vars['item']->value['position'];?>
"

                                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?>
                        data-icon="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['font-icon']))) {?>
                        data-font-icon="<?php echo $_smarty_tpl->tpl_vars['item']->value['font-icon'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['media']))) {?>
                        data-media="<?php echo $_smarty_tpl->tpl_vars['item']->value['media'];?>
"
                    <?php }?> 
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['illustration']))) {?>
                        data-illustration="<?php echo $_smarty_tpl->tpl_vars['item']->value['illustration'];?>
"
                    <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['title']))) {?>
                        data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['description']))) {?>
                        data-description="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['show_icon']))) {?>
                        data-show-icon="<?php echo $_smarty_tpl->tpl_vars['item']->value['show_icon'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['group_id']))) {?>
                        data-group_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['group_id'];?>
"
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['whmcs_page']))) {?>
                            data-whmcs-page='<?php echo $_smarty_tpl->tpl_vars['item']->value['whmcs_page'];?>
'
                        <?php }?>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['product_id']))) {?>
                        data-product_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['product_id'];?>
"
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_description']) {?>
                        data-custom_description = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['custom_description'], ENT_QUOTES, 'UTF-8', true);?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_price_before']) {?>
                        data-custom_price_before = "<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_price_before'];?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_price_after']) {?>
                        data-custom_price_after = "<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_price_after'];?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_price_label']) {?>
                        data-custom_price_label = "<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_price_label'];?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_multi_price']) {?>
                        data-custom_multi_price = '<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_multi_price'];?>
'
                    <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['author']))) {?>
                        data-author="<?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['domain']))) {?>
                        data-domain="<?php echo $_smarty_tpl->tpl_vars['item']->value['domain'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['domain_url']))) {?>
                        data-domain-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['domain_url'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['date']))) {?>
                        data-date="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
"
                    <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['text']))) {?>
                        data-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['type']))) {?>
                        data-type="<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['style']))) {?>
                        data-style="<?php echo $_smarty_tpl->tpl_vars['item']->value['style'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['size']))) {?>
                        data-size="<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type']))) {?>
                        data-link-type="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_type'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type'])) && $_smarty_tpl->tpl_vars['item']->value['link_type'] == 'custom-url') {?>
                        data-custom-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_url'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type'])) && $_smarty_tpl->tpl_vars['item']->value['link_type'] == 'whmcs-page') {?>
                        data-whmcs-page='<?php echo $_smarty_tpl->tpl_vars['item']->value['whmcs_page'];?>
'
                        data-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type'])) && $_smarty_tpl->tpl_vars['item']->value['link_type'] == 'homepage') {?>
                        data-custom-url="/"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type'])) && $_smarty_tpl->tpl_vars['item']->value['link_type'] == 'whmcs-product') {?>
                         data-whmcs-product='<?php echo $_smarty_tpl->tpl_vars['item']->value['whmcs_product'];?>
'
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_text']))) {?>
                        data-link-text="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_text'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['custom_classes']))) {?>
                        data-custom-classes="<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_classes'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target_blank']))) {?>
                        data-target-blank="<?php echo $_smarty_tpl->tpl_vars['item']->value['target_blank'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['show_link']))) {?>
                        data-show-link="<?php echo $_smarty_tpl->tpl_vars['item']->value['show_link'];?>
"
                    <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
                        data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                    <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['domain_id']))) {?>
                        data-domain-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['domain_id'];?>
"
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['showModalIconsTabs']->value))) {?> data-show-modal-icon='<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>'<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['showModalLinks']->value))) {?>data-show-modal-link="<?php if (!$_smarty_tpl->tpl_vars['showModalLinks']->value) {?>false<?php } else { ?>true<?php }?>"<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['showModalStatsField']->value)) && $_smarty_tpl->tpl_vars['showModalStatsField']->value) {?>data-show-modal-stats<?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['stat']))) {?>
                        data-stats="<?php echo $_smarty_tpl->tpl_vars['item']->value['stat'];?>
"
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['sidebarType']->value)) && $_smarty_tpl->tpl_vars['sidebarType']->value) {?>data-list-sidebar-type<?php }?>

                >
                    <?php if ((isset($_smarty_tpl->tpl_vars['sidebarType']->value)) && $_smarty_tpl->tpl_vars['sidebarType']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['link_text'];?>

                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['text']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                        <?php }?>
                    <?php }?>
                </div>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_url'] || $_smarty_tpl->tpl_vars['item']->value['url'] || $_smarty_tpl->tpl_vars['item']->value['description'] || $_smarty_tpl->tpl_vars['item']->value['custom_description'] || $_smarty_tpl->tpl_vars['item']->value['whmcs_product']) {?>
                <div class="list__item-desc" data-desc>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['custom_description']) {?>
                        <?php echo htmlspecialchars(html_entity_decode($_smarty_tpl->tpl_vars['item']->value['custom_description']), ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['description']) {?>
                        <?php echo htmlspecialchars(html_entity_decode($_smarty_tpl->tpl_vars['item']->value['description']), ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['custom_url'] && !$_smarty_tpl->tpl_vars['item']->value['group_id']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['link_type'] == 'homepage') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
" target="_blank">/</a>
                        <?php } elseif (!strstr($_smarty_tpl->tpl_vars['item']->value['custom_url'],"javascript") && !strstr($_smarty_tpl->tpl_vars['item']->value['custom_url'],"tel:") && !strstr($_smarty_tpl->tpl_vars['item']->value['custom_url'],"mailto:") && !strstr($_smarty_tpl->tpl_vars['item']->value['custom_url'],"http") && !strstr($_smarty_tpl->tpl_vars['item']->value['custom_url'],"//")) {?>                            
                            <a href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_url'];?>
" target="_blank"><?php if (substr($_smarty_tpl->tpl_vars['item']->value['custom_url'],0,1) != '/') {?>/<?php }
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['custom_url'],$_smarty_tpl->tpl_vars['whmcsURL']->value,'');?>
</a>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_url'];?>
" target="_blank"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['custom_url'],$_smarty_tpl->tpl_vars['whmcsURL']->value,'');?>
</a>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['url'] && !$_smarty_tpl->tpl_vars['item']->value['group_id']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['link_type'] == 'homepage') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
" target="_blank">/</a>
                        <?php } elseif (!strstr($_smarty_tpl->tpl_vars['item']->value['url'],"javascript") && !strstr($_smarty_tpl->tpl_vars['item']->value['url'],"tel:") && !strstr($_smarty_tpl->tpl_vars['item']->value['url'],"mailto:") && !strstr($_smarty_tpl->tpl_vars['item']->value['url'],"http") && !strstr($_smarty_tpl->tpl_vars['item']->value['url'],"//")) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php if (substr($_smarty_tpl->tpl_vars['item']->value['custom_url'],0,1) != '/') {?>/<?php }
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['url'],$_smarty_tpl->tpl_vars['whmcsURL']->value,'');?>
</a>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="_blank"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['url'],$_smarty_tpl->tpl_vars['whmcsURL']->value,'');?>
</a>
                        <?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['whmcs_product']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['item']->value['whmcs_product'];?>
">/cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['item']->value['whmcs_product'];?>
</a>
                    <?php }?>

                </div>
                <?php }?>
                <div class="list__item-actions">
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"btn btn--icon btn--link btn--xs",'showModalIconsTabs'=>$_smarty_tpl->tpl_vars['showModalIconsTabs']->value,'showModalLinks'=>$_smarty_tpl->tpl_vars['showModalLinks']->value,'showModalStatsField'=>$_smarty_tpl->tpl_vars['showModalStatsField']->value,'sidebarType'=>$_smarty_tpl->tpl_vars['sidebarType']->value), 2, true);
?>
                    <a
                        class="deleteItem btn btn--icon btn--link btn--xs"
                        href="#deleteItemModal"
                        data-toggle="lu-modal"
                        data-backdrop="static"
                        data-delete-item
                        <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
                            data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                        <?php } else { ?>
                            data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                        <?php }?>
                        data-index="<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
"
                        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                        <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
                            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                        <?php }?>
                    >
                        <i class="btn__icon ls ls-trash" data-toggle="lu-tooltip" data-title="Remove Item"></i>
                    </a>
                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</ul>
<div 
    class="msg msg--simple msg--bordered <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>is-hidden<?php }?>" 
    <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
        data-item-empty-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" 
        data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
    <?php } else { ?>
        data-item-empty-list="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
    <?php }?> 
        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
    >
    <a 
        href="#<?php echo $_smarty_tpl->tpl_vars['btnAddAction']->value;?>
" 
        class="msg__body"
        data-add-new-item="<?php echo $_smarty_tpl->tpl_vars['listType']->value;?>
"
        <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
            data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
        <?php } else { ?>
            data-list-name="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
        <?php }?>
        data-new-index="1"
        data-new-position="1"
        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
        <?php if ($_smarty_tpl->tpl_vars['groupIndex']->value) {?>
            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
        <?php }?>
        data-toggle="lu-modal"
        data-backdrop="static"
        data-keyboard="false"
        <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['icons'])) || (isset($_smarty_tpl->tpl_vars['sectionField']->value['icons']))) {?> 
            data-show-modal-icon="<?php if (!$_smarty_tpl->tpl_vars['showModalIconsTabs']->value) {?>false<?php } else { ?>true<?php }?>"
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['link']))) {?> 
            data-show-modal-link="<?php if (!$_smarty_tpl->tpl_vars['sectionGroupField']->value['link']) {?>false<?php } else { ?>true<?php }?>"
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['sectionField']->value['link']))) {?> 
            data-show-modal-link="<?php if (!$_smarty_tpl->tpl_vars['sectionField']->value['link']) {?>false<?php } else { ?>true<?php }?>"
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['sidebarType']->value)) && $_smarty_tpl->tpl_vars['sidebarType']->value) {?>data-list-sidebar-type<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['showModalStatsField']->value)) && $_smarty_tpl->tpl_vars['showModalStatsField']->value) {?>data-show-modal-stats<?php }?>
    >
        <span class="msg__title">No <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {
echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];
} else {
echo mb_strtolower($_smarty_tpl->tpl_vars['sectionField']->value['label'], 'UTF-8');
}?> created</span>
        <div class="msg__actions">
            <span class="btn btn--sm btn--link">
                <i class="btn__icon ls ls-plus"></i>
                <span class="btn__text">Add new</span>
            </span>
        </div>
    </a>
</div>
<?php }
}
