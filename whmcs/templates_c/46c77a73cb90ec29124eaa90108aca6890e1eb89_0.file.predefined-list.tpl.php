<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:45:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/predefined-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff933727258_24128721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c77a73cb90ec29124eaa90108aca6890e1eb89' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/types/predefined-list.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/tooltip.tpl' => 1,
  ),
),false)) {
function content_66dff933727258_24128721 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
    <div class="form-group">
        <label class="form-label">
            List Items
            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['list_items']), 0, false);
?>
        </label>
        <select class="form-control menu-list opacity-1" data-menu-predefined-list name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][list]" data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['location']->value != 'Footer') {?>
                <option value="Client Details" <?php if ($_smarty_tpl->tpl_vars['settings']->value['list'] == 'Client Details') {?> selected <?php }?>>Client Details</option>
            <?php }?>
            <option value="Download Categories" <?php if ($_smarty_tpl->tpl_vars['settings']->value['list'] == 'Download Categories') {?> selected <?php }?>>Download Categories</option>
            <option value="Knowledgebase Categories" <?php if ($_smarty_tpl->tpl_vars['settings']->value['list'] == 'Knowledgebase Categories') {?> selected <?php }?>>Knowledgebase Categories</option>
            <option value="MarketConnect Products" <?php if ($_smarty_tpl->tpl_vars['settings']->value['list'] == 'MarketConnect Products') {?> selected <?php }?>>MarketConnect Products</option>
            <option value="Product Groups" <?php if ($_smarty_tpl->tpl_vars['settings']->value['list'] == 'Product Groups') {?> selected <?php }?> >Product Groups</option>
            <option value="Ticket Departments" <?php if ($_smarty_tpl->tpl_vars['settings']->value['list'] == 'Ticket Departments') {?> selected <?php }?>>Ticket Departments</option>
        </select>
    </div>
</div>
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
