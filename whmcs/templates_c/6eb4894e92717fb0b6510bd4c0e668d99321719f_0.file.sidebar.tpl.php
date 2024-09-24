<?php
/* Smarty version 3.1.48, created on 2024-09-24 08:03:35
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/includes/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f27257ead715_83829360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb4894e92717fb0b6510bd4c0e668d99321719f' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/includes/sidebar.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f27257ead715_83829360 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block__sidebar block__sidebar--md is-sticky">
    <div class="section">
        <h3 class="section__title">Section Settings</h3>
        <div class="section__body">
            <div class="widget panel overflow-visible">
                <label class="widget__top top">
                    <div class="top__title">
                        General
                    </div>
                </label>
                <div class="widget__body">
                    <div class="widget__content">
                        <div class="form-group m-b-0x">
                            <label class="form-label">Section Type</label>
                            <div class="form-group">
                                <select class="form-control is-readonly" name="type" readonly>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionTypes']->value, 'sectionType');
$_smarty_tpl->tpl_vars['sectionType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionType']->value) {
$_smarty_tpl->tpl_vars['sectionType']->do_else = false;
?>                                        
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['sectionType']->value['slug'];?>
" <?php if ($_smarty_tpl->tpl_vars['sectionType']->value['slug'] === $_smarty_tpl->tpl_vars['section']->value['type']['slug'] || $_smarty_tpl->tpl_vars['sectionType']->value['slug'] === $_smarty_tpl->tpl_vars['section']->value['slug']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['sectionType']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block__loader preloader-container">
    <div class="preloader preloader--lg"></div>
</div><?php }
}
