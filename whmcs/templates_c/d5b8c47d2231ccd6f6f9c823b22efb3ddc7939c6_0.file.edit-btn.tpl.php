<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:44
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/sortable-list/edit-btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252bc039402_79372481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b8c47d2231ccd6f6f9c823b22efb3ddc7939c6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/sortable-list/edit-btn.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f252bc039402_79372481 (Smarty_Internal_Template $_smarty_tpl) {
?><a
        class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"
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
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['font-icon']))) {?>
        data-font-icon="<?php echo $_smarty_tpl->tpl_vars['item']->value['font-icon'];?>
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
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type'])) && $_smarty_tpl->tpl_vars['item']->value['link_type'] == 'whmcs-product') {?>
        data-whmcs-product='<?php echo $_smarty_tpl->tpl_vars['item']->value['whmcs_product'];?>
'
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link_type'])) && $_smarty_tpl->tpl_vars['item']->value['link_type'] == 'homepage') {?>
        data-custom-url="/"
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
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "placeholder") {?>
        <i class="btn__icon ls ls-edit" data-toggle="lu-tooltip" data-title="Add Icon"></i>
    <?php } else { ?>
        <i class="btn__icon ls ls-edit" data-toggle="lu-tooltip" data-title="Edit Item"></i>
    <?php }?>
</a>
<?php }
}
