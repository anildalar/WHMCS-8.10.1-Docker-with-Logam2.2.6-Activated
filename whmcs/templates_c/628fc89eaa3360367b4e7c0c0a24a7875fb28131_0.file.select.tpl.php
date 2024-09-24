<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:44
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252bc0bc049_22354160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628fc89eaa3360367b4e7c0c0a24a7875fb28131' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/select.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 2,
  ),
),false)) {
function content_66f252bc0bc049_22354160 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['container_collapse_target']) {?>
        <?php if ($_smarty_tpl->tpl_vars['pageSection']->value) {?>
            <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['pageSection']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['section']->value) {?>
            <?php $_smarty_tpl->_assignInScope('pageSection', $_smarty_tpl->tpl_vars['section']->value);?>
            <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['section']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);?>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageSection']->value['type']['fields'], 'fields');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['fields']->value['name'] == $_smarty_tpl->tpl_vars['sectionGroupField']->value['container_collapse_target']) {?>
                <?php $_smarty_tpl->_assignInScope('collapseTargetValue', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['fields']->value['name']]);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    
    <div 
        <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['container_id']) {?>
            id="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['container_id'];?>
"
        <?php }?>
        class="section__field  <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['container_collapse']) {?>collapse <?php if ($_smarty_tpl->tpl_vars['collapseTargetValue']->value) {?>show<?php }
}?>" 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['container_attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> 
            data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    >
        <div class="form-group">
            <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['label']) {?>
                <label 
                    class="form-label"
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['label_attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                >
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
            <?php }?>
            <select 
                class="form-control" 
                name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]" 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['dependence'])) && is_array($_smarty_tpl->tpl_vars['sectionGroupField']->value['dependence']['options'])) {?>
                    data-field-dependence="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['dependence']['field'];?>
"
                    data-field-dependence-main="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"                
                    data-field-dependence-options='{<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['dependence']['options'], 'dependenceOption', true, 'key');
$_smarty_tpl->tpl_vars['dependenceOption']->iteration = 0;
$_smarty_tpl->tpl_vars['dependenceOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['dependenceOption']->value) {
$_smarty_tpl->tpl_vars['dependenceOption']->do_else = false;
$_smarty_tpl->tpl_vars['dependenceOption']->iteration++;
$_smarty_tpl->tpl_vars['dependenceOption']->last = $_smarty_tpl->tpl_vars['dependenceOption']->iteration === $_smarty_tpl->tpl_vars['dependenceOption']->total;
$__foreach_dependenceOption_21_saved = $_smarty_tpl->tpl_vars['dependenceOption'];
?>"<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
":{<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dependenceOption']->value, 'option', true, 'key2');
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
$__foreach_option_22_saved = $_smarty_tpl->tpl_vars['option'];
?>"<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
":"<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['option']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}<?php if (!$_smarty_tpl->tpl_vars['dependenceOption']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['dependenceOption'] = $__foreach_dependenceOption_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}'
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['depending_on']))) {?>
                    data-field-depending-on="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['depending_on'];?>
"
                    data-field-dependence-main="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
"
                <?php }?>
            >
                <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['name'] == "product_group_pricing") {?>
                    <option value="none" <?php if (!$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value) {?>selected<?php }?>>Choose Product Group</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                        <?php if (!$_smarty_tpl->tpl_vars['productGroup']->value->hidden) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['productGroup']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 (Product Group)</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['gid']) {?>
                                    <option value="p<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == "p".((string)$_smarty_tpl->tpl_vars['product']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];
if ($_smarty_tpl->tpl_vars['product']->value->hidden) {?> (hidden)<?php }?></option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['productGroup']->value->hidden) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['productGroup']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 (Product Group) (hidden)</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['gid']) {?>
                                    <option value="p<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == "p".((string)$_smarty_tpl->tpl_vars['product']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];
if ($_smarty_tpl->tpl_vars['product']->value->hidden) {?> (hidden)<?php }?></option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['sectionGroupField']->value['name'] == "link_to_page") {?>
                    <option value="none" <?php if (!$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value) {?>selected<?php }?>>None</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'key');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['page']->value['name']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('hasSelectedValue', false);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['options'], 'option', true);
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
$__foreach_option_28_saved = $_smarty_tpl->tpl_vars['option'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['option']->value['value']) {?>
                            <?php $_smarty_tpl->_assignInScope('hasSelectedValue', true);?>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_28_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['options'], 'option', true);
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
$__foreach_option_29_saved = $_smarty_tpl->tpl_vars['option'];
?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['option']->value)) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['option']->value['value']) {?> selected <?php } elseif ((isset($_smarty_tpl->tpl_vars['option']->value['default'])) && $_smarty_tpl->tpl_vars['option']->value['default'] && !$_smarty_tpl->tpl_vars['hasSelectedValue']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['option']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_29_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value['container_break'])) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['container_break']) {?>
        </div>
        <div class="row m-t-2x">
    <?php }
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['container_collapse_target']) {?>
        <?php if ($_smarty_tpl->tpl_vars['pageSection']->value) {?>
            <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['pageSection']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['section']->value) {?>
            <?php $_smarty_tpl->_assignInScope('pageSection', $_smarty_tpl->tpl_vars['section']->value);?>
            <?php $_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['section']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);?>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageSection']->value['type']['fields'], 'fields');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['fields']->value['name'] == $_smarty_tpl->tpl_vars['sectionField']->value['container_collapse_target']) {?>
                <?php $_smarty_tpl->_assignInScope('collapseTargetValue', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['fields']->value['name']]);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <div
        <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['container_id']) {?>
            id="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['container_id'];?>
"
        <?php }?>
        class="section__field col-12 <?php echo $_smarty_tpl->tpl_vars['sectionField']->value['container_class'];?>
 <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['container_collapse']) {?>collapse <?php if ($_smarty_tpl->tpl_vars['collapseTargetValue']->value) {?>show<?php }
}?>"
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['container_attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
            data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
"
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    >
        <div class="form-group">
            <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['label']) {?>
                <label
                        class="form-label"
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['label_attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                >
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
            <?php }?>
           
            <select
                class="form-control"
                name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]"
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['dependence'])) && is_array($_smarty_tpl->tpl_vars['sectionField']->value['dependence']['options'])) {?>
                    data-field-dependence="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['dependence']['field'];?>
"
                    data-field-dependence-main="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"                
                    data-field-dependence-options='{<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['dependence']['options'], 'dependenceOption', true, 'key');
$_smarty_tpl->tpl_vars['dependenceOption']->iteration = 0;
$_smarty_tpl->tpl_vars['dependenceOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['dependenceOption']->value) {
$_smarty_tpl->tpl_vars['dependenceOption']->do_else = false;
$_smarty_tpl->tpl_vars['dependenceOption']->iteration++;
$_smarty_tpl->tpl_vars['dependenceOption']->last = $_smarty_tpl->tpl_vars['dependenceOption']->iteration === $_smarty_tpl->tpl_vars['dependenceOption']->total;
$__foreach_dependenceOption_34_saved = $_smarty_tpl->tpl_vars['dependenceOption'];
?>"<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
":{<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dependenceOption']->value, 'option', true, 'key2');
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
$__foreach_option_35_saved = $_smarty_tpl->tpl_vars['option'];
?>"<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
":"<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['option']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_35_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}<?php if (!$_smarty_tpl->tpl_vars['dependenceOption']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['dependenceOption'] = $__foreach_dependenceOption_34_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}'
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['depending_on']))) {?>
                    data-field-depending-on="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['depending_on'];?>
"
                    data-field-dependence-main="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
"
                <?php }?>
            >
                <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['name'] == "product_group_pricing") {?>
                    <option value="none" <?php if (!$_smarty_tpl->tpl_vars['sectionFieldValue']->value) {?>selected<?php }?>>Choose Product Group</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                        <?php if (!$_smarty_tpl->tpl_vars['productGroup']->value->hidden) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['productGroup']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 (Product Group)</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['gid']) {?>
                                    <option value="p<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == "p".((string)$_smarty_tpl->tpl_vars['product']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];
if ($_smarty_tpl->tpl_vars['product']->value->hidden) {?> (hidden)<?php }?></option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productGroups']->value, 'productGroup');
$_smarty_tpl->tpl_vars['productGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productGroup']->value) {
$_smarty_tpl->tpl_vars['productGroup']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['productGroup']->value->hidden) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['productGroup']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['productGroup']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 (Product Group) (hidden)</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['productGroup']->value['id'] == $_smarty_tpl->tpl_vars['product']->value['gid']) {?>
                                    <option value="p<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == "p".((string)$_smarty_tpl->tpl_vars['product']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['productGroup']->value->name;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];
if ($_smarty_tpl->tpl_vars['product']->value->hidden) {?> (hidden)<?php }?></option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['sectionField']->value['name'] == "link_to_page") {?>
                    <option value="none" <?php if (!$_smarty_tpl->tpl_vars['sectionFieldValue']->value) {?>selected<?php }?>>None</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'key');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['page']->value['name']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('hasSelectedValue', false);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['options'], 'option', true);
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
$__foreach_option_41_saved = $_smarty_tpl->tpl_vars['option'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['option']->value['value']) {?>
                            <?php $_smarty_tpl->_assignInScope('hasSelectedValue', true);?>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_41_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['options'], 'option', true);
$_smarty_tpl->tpl_vars['option']->iteration = 0;
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
$_smarty_tpl->tpl_vars['option']->iteration++;
$_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
$__foreach_option_42_saved = $_smarty_tpl->tpl_vars['option'];
?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['option']->value)) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['option']->value['value']) {?> selected <?php } elseif ((isset($_smarty_tpl->tpl_vars['option']->value['default'])) && $_smarty_tpl->tpl_vars['option']->value['default'] && !$_smarty_tpl->tpl_vars['hasSelectedValue']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['option']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_42_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['container_break'])) && $_smarty_tpl->tpl_vars['sectionField']->value['container_break']) {?>
        </div>
        <div class="row m-t-2x">
    <?php }
}
}
}
