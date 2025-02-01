<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:33:06
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/custom-link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b3a2153a28_28612854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f850393984a1160a1286de3332a928e034d545a9' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/custom-link.tpl',
      1 => 1730150154,
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
function content_6784b3a2153a28_28612854 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <div class="form-group">
        <label class="form-label">
            URL
            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['url']), 0, false);
?>
        </label>
        <input class="form-control" type="text" name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][link]" value="<?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['link']))) {
echo $_smarty_tpl->tpl_vars['settings']->value['link'];
} else { ?>#<?php }?>">
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>false), 0, false);
}
}
