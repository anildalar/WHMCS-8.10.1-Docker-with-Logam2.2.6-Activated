<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d602372_30427516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '268e5ad6d509ce235583021763e31f120a01a464' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/inputs/sections.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40e7d602372_30427516 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionGroupField']->value))) {?>
    <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['label'];?>
</label>
        <select class="form-control" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
][groups][<?php echo $_smarty_tpl->tpl_vars['groupIndex']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['sectionGroupField']->value['name'];?>
]">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['section']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionGroupInputValue']->value == $_smarty_tpl->tpl_vars['section']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['section']->value->name;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php } else { ?>
    <div class="section__field col-12">
        <div class="form-group">
            <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['sectionField']->value['label'];?>
</label>
            <select class="form-control" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][lang][<?php echo $_smarty_tpl->tpl_vars['sectionField']->value['name'];?>
]">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['section']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['sectionFieldValue']->value == $_smarty_tpl->tpl_vars['section']->value->id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['section']->value->name;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
<?php }?>

<?php }
}
