<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:53:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/multiselect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffae1276031_17397261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65178da5ec0e83e7cd3ea054678af17bf59fae61' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/multiselect.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66dffae1276031_17397261 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('groupMultiOptions', explode(',',$_smarty_tpl->tpl_vars['sectionGroupInputValue']->value));?>
    <div class="form-group <?php echo $_smarty_tpl->tpl_vars['sectionField']->value['container_class'];?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['container_attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
        <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>
</label>
        <select class="form-control multiselect form-control--basic" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
][]" multiple <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['options'], 'groupOption');
$_smarty_tpl->tpl_vars['groupOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupOption']->value) {
$_smarty_tpl->tpl_vars['groupOption']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['groupOption']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['groupOption']->value,$_smarty_tpl->tpl_vars['groupMultiOptions']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['groupOption']->value;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php } else { ?>
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
    <?php if (strstr($_smarty_tpl->tpl_vars['sectionFieldValue']->value,",")) {?>
        <?php $_smarty_tpl->_assignInScope('multiOptions', explode(',',$_smarty_tpl->tpl_vars['sectionFieldValue']->value));?>
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
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['sectionField']->value['tooltip']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                    <?php }?>
                </label>
            <?php }?>
            <select 
                class="form-control multiselect form-control--basic" 
                name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][]" 
                multiple 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['attributes'], 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> 
                    data-<?php echo $_smarty_tpl->tpl_vars['attribute']->value['name'];?>
="<?php echo $_smarty_tpl->tpl_vars['attribute']->value['value'];?>
" 
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionField']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['option']->value)) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ((is_array($_smarty_tpl->tpl_vars['multiOptions']->value) && in_array($_smarty_tpl->tpl_vars['option']->value['value'],$_smarty_tpl->tpl_vars['multiOptions']->value))) {?>selected<?php } elseif ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['option']->value['value']) {?>selected<?php } elseif ((isset($_smarty_tpl->tpl_vars['option']->value['default'])) && $_smarty_tpl->tpl_vars['option']->value['default'] && !is_array($_smarty_tpl->tpl_vars['multiOptions']->value) && !$_smarty_tpl->tpl_vars['sectionFieldValue']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['multiOptions']->value) && in_array($_smarty_tpl->tpl_vars['option']->value,$_smarty_tpl->tpl_vars['multiOptions']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['sectionField']->value['container_break'])) && $_smarty_tpl->tpl_vars['sectionField']->value['container_break']) {?>
        </div>
        <div class="row m-t-2x">
    <?php }
}?>

<?php }
}
