<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/number.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6b6dc605_63746000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106474b83e83eb38fcaaaef087685c09291c8ecc' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/number.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66dfbb6b6dc605_63746000 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <div class="form-group <?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['container_class'];?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionGroupField']->value['container_attributes'], 'attribute');
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
        <input 
            class="form-control" 
            type="number" 
            name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]"
            value="<?php if ((empty($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value)) && $_smarty_tpl->tpl_vars['sectionGroupField']->value['range']['start']) {
echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['range']['start'];
} else {
echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value;
}?>" 
            <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['range']['min']) {?>min="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['range']['min'];?>
"<?php }?> 
            <?php if ($_smarty_tpl->tpl_vars['sectionGroupField']->value['range']['max']) {?>min="<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['range']['max'];?>
"<?php }?>
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
        >
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
            <label class="form-label">
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
            <input 
                class="form-control" 
                type="number" 
                name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]" 
                value="<?php if ((empty($_smarty_tpl->tpl_vars['sectionFieldValue']->value)) && $_smarty_tpl->tpl_vars['sectionField']->value['range']['start']) {
echo $_smarty_tpl->tpl_vars['sectionField']->value['range']['start'];
} else {
echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value;
}?>" 
                <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['range']['min']) {?>min="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['range']['min'];?>
"<?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['range']['max']) {?>max="<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['range']['max'];?>
"<?php }?>
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
        </div>
    </div>
<?php }?>




<?php }
}
