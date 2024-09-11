<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:45:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/whmcs-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff93349afe1_36289344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072d862436d8631d4ada03ecfd85f631336f5d42' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/whmcs-page.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/tooltip.tpl' => 1,
    'file:adminarea/menu/includes/components/name.tpl' => 1,
    'file:adminarea/menu/includes/components/icon.tpl' => 1,
  ),
),false)) {
function content_66dff93349afe1_36289344 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <div class="form-group">
        <label class="form-label">
            Page
            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['page']), 0, false);
?>
        </label>
        <select class="form-control opacity-1" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][page]">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'key');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['page'] == $_smarty_tpl->tpl_vars['page']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>false), 0, false);
}
}
