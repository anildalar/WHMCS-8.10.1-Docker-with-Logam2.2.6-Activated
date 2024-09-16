<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/hidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d3dcbb3_71366798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9832ac45c2d0f929efdcf9572127eb2c0b45c29f' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/hidden.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40e7d3dcbb3_71366798 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <input
        type="hidden"
        name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]"
        value="<?php echo $_smarty_tpl->tpl_vars['sectionGroupInputValue']->value;?>
"
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
<?php } else { ?>
    <input 
        type="hidden" 
        name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]" 
        value="<?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value) {
echo $_smarty_tpl->tpl_vars['sectionFieldValue']->value;
} elseif ($_smarty_tpl->tpl_vars['sectionField']->value['default']) {
echo $_smarty_tpl->tpl_vars['sectionField']->value['default'];
}?>"
    >
<?php }
}
}
