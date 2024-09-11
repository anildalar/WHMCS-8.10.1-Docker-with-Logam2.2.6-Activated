<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:45:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/divider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff9335ddd74_41482411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284dbf3d58ac8d86ec1b991cdd45332a4532fbfa' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/divider.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff9335ddd74_41482411 (Smarty_Internal_Template $_smarty_tpl) {
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
>

<?php if ($_smarty_tpl->tpl_vars['level']->value == 1 && $_smarty_tpl->tpl_vars['location']->value !== 'Footer' && $_smarty_tpl->tpl_vars['type']->value !== "Header") {?>
    <input
        type="hidden"
        name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][description]"
        value="<?php echo $_smarty_tpl->tpl_vars['translationDesc']->value;?>
"
        data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
        data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
        data-menu-item-description
        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@getCustomTranslation',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
    >
    <input
        type="hidden"
        name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][descriptionTranslation]"
        value="<?php echo $_smarty_tpl->tpl_vars['customTranslationDesc']->value;?>
"
        data-menu-item-description-translation
        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@getSystemLanguage',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
        data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
        data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
    >
<?php }
}
}
