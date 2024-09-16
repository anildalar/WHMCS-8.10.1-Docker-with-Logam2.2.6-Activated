<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:07:17
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40ed55a3195_91591773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb71d62442c760966aa838a0d3f29c5f6a7a7f3c' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/my-account.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/menu/includes/components/icon.tpl' => 1,
  ),
),false)) {
function content_66e40ed55a3195_91591773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/components/icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>false), 0, false);
?>

<input 
    class="translation-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" 
    type="hidden" 
    name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][translation]" 
    value="<?php echo $_smarty_tpl->tpl_vars['customTranslation']->value;?>
" 
    data-menu-item-custom-translation 
    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@getSystemLanguage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
    data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" 
    data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
>
<input 
    type="hidden" 
    data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" 
    data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" 
    data-menu-item-whmcs-name 
    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@checkWhmcsLangVariable',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
><?php }
}
