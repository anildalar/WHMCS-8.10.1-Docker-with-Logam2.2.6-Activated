<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:09
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/gallery/pages/galleryField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d149ba1d09_97949054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c657505c83960f5de690b9ed21ed76bb9c3ec9' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/gallery/pages/galleryField.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d149ba1d09_97949054 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-row">
    <div class="lu-col-md-12"  id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
">
        <mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>

                component_id='<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
'
                component_namespace='<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
'
                component_index='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
'
                gallery_path='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getGalleryPath();?>
'
                remove_button_namespace='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRemoveButtonNamespace();?>
'
                remove_button_id='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRemoveButtonId();?>
'
                modal_button_namespace='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getModalButtonNamespace();?>
'
                modal_button_id='<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getModalButtonId();?>
'
        ></mg-component-body-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
>
    </div>
</div><?php }
}
