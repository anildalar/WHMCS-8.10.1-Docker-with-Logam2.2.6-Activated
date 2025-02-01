<?php
/* Smarty version 3.1.48, created on 2025-01-18 09:43:26
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_678b77be565047_58286279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f284c147d445620b5b8271c798e47cd1100d4d' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/language.tpl',
      1 => 1730150154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678b77be565047_58286279 (Smarty_Internal_Template $_smarty_tpl) {
?><input 
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
