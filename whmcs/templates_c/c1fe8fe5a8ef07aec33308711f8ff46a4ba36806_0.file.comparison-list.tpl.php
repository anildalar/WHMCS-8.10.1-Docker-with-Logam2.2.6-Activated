<?php
/* Smarty version 3.1.48, created on 2024-12-16 07:31:32
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/comparison-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675fd754a21639_62216278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1fe8fe5a8ef07aec33308711f8ff46a4ba36806' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/comparison-list.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/includes/sortable-list/comparison-edit-btn.tpl' => 5,
  ),
),false)) {
function content_675fd754a21639_62216278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('iconLocation', "./../../../../assets/svg-icons");
$_smarty_tpl->_assignInScope('iconsPath', "./../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon");
$_smarty_tpl->_assignInScope('illustrationsPath', "./../../../../../../../templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations");?>

<?php $_smarty_tpl->_assignInScope('imagesPath', ((string)$_smarty_tpl->tpl_vars['whmcsURL']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/img");?>

<?php if ($_smarty_tpl->tpl_vars['pageSection']->value) {?>
    <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['pageSection']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);
} elseif ($_smarty_tpl->tpl_vars['section']->value) {?>
    <?php $_smarty_tpl->_assignInScope('pageSection', $_smarty_tpl->tpl_vars['section']->value);?>
    <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['section']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageSection']->value['type']['fields'], 'fields');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['fields']->value['name'] == "products_group") {?>
        <?php $_smarty_tpl->_assignInScope('targetValue', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['fields']->value['name']]);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['header_title']))) {?>
            <?php $_smarty_tpl->_assignInScope('headerTitle', $_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['header_title']);?>
        <?php }?>
        <?php break 1;?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('productCount', 0);?>   
<?php if ((isset($_smarty_tpl->tpl_vars['targetValue']->value)) && (isset($_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['products_list'])) && is_countable($_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['products_list'])) {?>
    <?php $_smarty_tpl->_assignInScope('productCount', count($_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['products_list']));?>  
<?php }?>
<div 
    class="list-header <?php if ($_smarty_tpl->tpl_vars['productCount']->value == 0 || empty($_smarty_tpl->tpl_vars['items']->value)) {?>is-hidden<?php }?>" 
    data-item-list-header
    data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
    <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
        data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
    <?php }?>
>
    <div class="list-header__name">
        <input 
            class="form-control"
            type="text"        
            name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][header_title]" 
            value="<?php if (!$_smarty_tpl->tpl_vars['headerTitle']->value) {?>Compare Features<?php } else {
echo $_smarty_tpl->tpl_vars['headerTitle']->value;
}?>"
            data-item-list-header-input
            readonly
        >
        <button 
            type="button"
            class="btn btn--icon btn--link btn--sm"
            data-item-list-header-btn
            data-toggle="lu-tooltip"
            data-title="Edit title"
        >
            <i class="btn__icon ls ls-edit"></i>
        </button>
    </div>
    <div class="list-header__products" data-item-list-header-product-list>
        <?php if ((isset($_smarty_tpl->tpl_vars['targetValue']->value)) && (isset($_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['products_list'])) && is_countable($_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['products_list'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['targetValue']->value['groups'][$_smarty_tpl->tpl_vars['groupIndex']->value]['fields']['products_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <span data-item-list-header-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</span>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div>
<ul class="sortableList no-hover list-page-manager list list--sortable list--comparison <?php if (empty($_smarty_tpl->tpl_vars['items']->value) || $_smarty_tpl->tpl_vars['productCount']->value < 2) {?>is-hidden<?php }?>"
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
>
    <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['type'])) && $_smarty_tpl->tpl_vars['item']->value['type'] == "category") {?>
                <li class="items-list list__item list__item--category <?php if ($_smarty_tpl->tpl_vars['item']->value['hide_item'] == "true") {?>list__item--hidden<?php }?>">
                    <div class="list__item-icon i-c-4x icon-<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
 m-l-0x <?php if (!$_smarty_tpl->tpl_vars['item']->value['show_icon']) {?>is-hidden<?php }?>">
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?>
                            <?php if (strstr($_smarty_tpl->tpl_vars['item']->value['icon'],".tpl")) {?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']))) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/comparison-edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                                <?php }?>
                            <?php } else { ?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']).".tpl")) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['icon']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/comparison-edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
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
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/comparison-edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                                <?php }?>
                            <?php } else { ?>
                                <?php if (file_exists(((string)$_smarty_tpl->tpl_vars['whmcsDir']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['themeName']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['item']->value['illustration']).".tpl")) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['illustrationsPath']->value)."/".((string)$_smarty_tpl->tpl_vars['item']->value['illustration']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/comparison-edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
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
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/sortable-list/comparison-edit-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"placeholder",'classes'=>"btn btn--icon btn--link btn--xs"), 2, true);
?>
                        <?php }?>
                    </div>
                    <div 
                        class="list__item-name" 
                        data-name
                        data-edit-item="comparison_category"
                        href="#editComparisonTableCategoryModal"
                        data-toggle="lu-modal" 
                        data-backdrop="static" 
                        data-keyboard="false" 
                        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
                        <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
                            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                        <?php }?>
                        data-type="category"
                        data-show-icon=<?php echo $_smarty_tpl->tpl_vars['item']->value['show_icon'];?>

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
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['category-title']))) {?>
                            data-category-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['category-title'], ENT_QUOTES, 'UTF-8', true);?>
"
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['custom_classes']))) {?>
                            data-custom-classes="<?php echo $_smarty_tpl->tpl_vars['item']->value['custom_classes'];?>
"
                        <?php }?>
                        data-hide-item="<?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['hide_item']))) {?>false<?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['hide_item'];
}?>"
                    >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['category-title'], ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                    <div class="list__item-actions">
                        <div class="has-dropdown">
                            <a 
                                class="btn btn--icon btn--block" 
                                href="" 
                                data-toggle="lu-dropdown" 
                                data-display="static"
                                data-placement="bottom right"
                                data-comparison-item-dropdown
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
                                <span class="btn__icon ls ls-more"></span>
                            </a>
                            <div class="dropdown" data-dropdown-menu>
                                <div class="dropdown__arrow" data-arrow></div>
                                <div class="dropdown__menu">
                                    <ul class="nav">
                                        <li class="nav__item">
                                            <a 
                                                class="nav__link"
                                                data-edit-comparison-feature-item   
                                            >
                                                <span class="nav__link-icon ls ls-edit"></span>
                                                <span class="nav__link-text">Edit Category</span>
                                            </a>
                                        </li>
                                        <li class="nav__item">
                                            <a 
                                                class="nav__link"
                                                data-copy-comparison-category
                                            >
                                                <span class="nav__link-icon ls ls-copy"></span>
                                                <span class="nav__link-text">Copy Category</span>
                                            </a>
                                        </li>
                                        <li class="nav__item" <?php if ($_smarty_tpl->tpl_vars['item']->value['hide_item'] == "true") {?>style="display:none"<?php }?>>
                                            <a 
                                                class="nav__link"
                                                data-hide-comparison-feature-item
                                            >
                                                <span class="nav__link-icon ls ls-denial"></span>
                                                <span class="nav__link-text">Hide Category</span>
                                            </a>
                                        </li>  
                                        <li class="nav__item" <?php if ($_smarty_tpl->tpl_vars['item']->value['hide_item'] == "false") {?>style="display:none"<?php }?>>
                                            <a 
                                                class="nav__link"
                                                data-show-comparison-feature-item
                                            >
                                                <span class="nav__link-icon fa fa-eye"></span>
                                                <span class="nav__link-text">Show Category</span>
                                            </a>
                                        </li>                                          
                                        <li class="nav__divider"></li>
                                        <li class="nav__item">
                                            <a 
                                                class="nav__link text-danger"
                                                href="#deleteItemModal"
                                                data-toggle="lu-modal"
                                                data-backdrop="static"
                                                data-delete-comparison-feature-item
                                            >
                                                <span class="nav__link-icon ls ls-trash"></span>
                                                <span class="nav__link-text">Delete</span>
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } else { ?>
                <li class="items-list list__item list__item--comparison <?php if ($_smarty_tpl->tpl_vars['item']->value['hide_item'] == "true") {?>list__item--hidden<?php }?>">
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
                        <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
                            data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
                        <?php }?>
                        
                        data-key="<?php echo $_smarty_tpl->tpl_vars['item']->value['index'];?>
"
                        data-position="<?php echo $_smarty_tpl->tpl_vars['item']->value['position'];?>
"
                        data-product='<?php echo $_smarty_tpl->tpl_vars['item']->value['product'];?>
'
                        data-feature-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['feature_name'];?>
"
                        data-hint="<?php echo $_smarty_tpl->tpl_vars['item']->value['hint'];?>
"
                        data-show-hint="<?php echo $_smarty_tpl->tpl_vars['item']->value['show_hint'];?>
"
                        data-hide-item="<?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['hide_item']))) {?>false<?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['hide_item'];
}?>"
                    >
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['feature_name'];?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['show_hint'] && $_smarty_tpl->tpl_vars['item']->value['show_hint'] != "false" && $_smarty_tpl->tpl_vars['item']->value['hint'] != '') {?>
                            <i class="ls ls-info-circle" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['hint'];?>
"></i>
                        <?php }?>
                    </div>
                    <div class="list__item-features">
                        <?php $_smarty_tpl->_assignInScope('products_features', json_decode($_smarty_tpl->tpl_vars['item']->value['product'],1));?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_features']->value, 'feature', false, 'key2');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                            <div class="list__item-product" data-product-id="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['feature']->value['icon'] && $_smarty_tpl->tpl_vars['feature']->value['icon'] != '' && $_smarty_tpl->tpl_vars['feature']->value['icon'] != "none") {?><span class="list__item-icon" data-icon="<?php echo $_smarty_tpl->tpl_vars['feature']->value['icon'];?>
"></span><?php }
echo $_smarty_tpl->tpl_vars['feature']->value['feature'];?>
</div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="list__item-actions">
                        <div class="has-dropdown">
                            <a 
                                class="btn btn--icon btn--block" 
                                href="" 
                                data-toggle="lu-dropdown" 
                                data-display="static"
                                data-placement="bottom right"
                                data-comparison-item-dropdown
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
                                <span class="btn__icon ls ls-more"></span>
                            </a>
                            <div class="dropdown" data-dropdown-menu>
                                <div class="dropdown__arrow" data-arrow></div>
                                <div class="dropdown__menu">
                                    <ul class="nav">
                                        <li class="nav__item">
                                            <a 
                                                class="nav__link"
                                                data-edit-comparison-feature-item
                                            >
                                                <span class="nav__link-icon ls ls-edit"></span>
                                                <span class="nav__link-text">Edit Details</span>
                                            </a>
                                        </li>
                                        <li class="nav__item">
                                            <a 
                                                class="nav__link"
                                                data-copy-comparison-feature-item
                                            >
                                                <span class="nav__link-icon ls ls-copy"></span>
                                                <span class="nav__link-text">Copy Feature</span>
                                            </a>
                                        </li>
                                        <li class="nav__item" <?php if ($_smarty_tpl->tpl_vars['item']->value['hide_item'] == "true") {?>style="display:none;"<?php }?>>
                                            <a 
                                                class="nav__link"
                                                data-hide-comparison-feature-item
                                            >
                                                <span class="nav__link-icon ls ls-denial"></span>
                                                <span class="nav__link-text">Hide Feature</span>
                                            </a>
                                        </li>   
                                        <li class="nav__item" <?php if ($_smarty_tpl->tpl_vars['item']->value['hide_item'] == "false") {?>style="display:none"<?php }?>>
                                            <a 
                                                class="nav__link"
                                                data-show-comparison-feature-item
                                            >
                                                <span class="nav__link-icon fa fa-eye"></span>
                                                <span class="nav__link-text">Show Feature</span>
                                            </a>
                                        </li>                                      
                                        <li class="nav__divider"></li>
                                        <li class="nav__item">
                                            <a 
                                                class="nav__link text-danger"
                                                href="#deleteItemModal"
                                                data-toggle="lu-modal"
                                                data-backdrop="static"
                                                data-delete-comparison-feature-item
                                            >
                                                <span class="nav__link-icon ls ls-trash"></span>
                                                <span class="nav__link-text">Delete</span>
                                            </a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </li>
            <?php }?>    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</ul>


<div 
    class="msg msg--simple msg--info msg--bordered <?php if ($_smarty_tpl->tpl_vars['productCount']->value > 1) {?>is-hidden<?php }?>"
   
    <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {?>
        data-item-less-list="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
" 
        data-group="<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
"
    <?php } else { ?>
        data-item-less-list="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
    <?php }?> 
        data-section="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
"
>
    <span class="msg__description">
        To add a list of features, select at least 2 products <br /> that you want to compare with each other
    </span>
</div>

<div 
    class="msg msg--simple msg--bordered <?php if (!empty($_smarty_tpl->tpl_vars['items']->value) || $_smarty_tpl->tpl_vars['productCount']->value < 2) {?>is-hidden<?php }?>" 
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
    <div class="msg__body flex-column">
        <span class="msg__title">No <?php if ((isset($_smarty_tpl->tpl_vars['groupIndex']->value))) {
echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];
} else {
echo mb_strtolower($_smarty_tpl->tpl_vars['sectionField']->value['label'], 'UTF-8');
}?> created</span>
        <div class="msg__actions">
            <a 
                href="#<?php echo $_smarty_tpl->tpl_vars['btnAddAction']->value;?>
" 
                class="btn btn--sm btn--link"
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
            >
                <i class="btn__icon ls ls-plus"></i>
                <span class="btn__text">Add new feature</span>
            </a>
            <a 
                href="#addNewComparisonTableCategoryModal" 
                class="btn btn--sm btn--link"
                data-add-new-item="comparison-category"
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
            >
                <i class="btn__icon ls ls-plus"></i>
                <span class="btn__text">Add new category</span>
            </a>
        </div>
    </div>
</div><?php }
}
