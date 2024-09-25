<?php
/* Smarty version 3.1.48, created on 2024-09-25 07:13:35
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/components/name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f3b81fdb7f14_29889333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cae95744d685c0c822d2b48f1adcacd4e1a204' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/components/name.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/tooltip.tpl' => 4,
  ),
),false)) {
function content_66f3b81fdb7f14_29889333 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="menu-name-group col-md-12">
    <label class="form-label">
        Name
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['name']), 0, false);
?>
    </label>
    <div class="row">
        <div class="col-md-12 form-group">
            <div class="d-flex">
                <label  class="radio d-flex m-t-0x" >
                    <input class="form-radio"
                           type="radio"
                           name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][translation-method]"
                            <?php if ($_smarty_tpl->tpl_vars['translationMethod']->value == 'custom' || empty($_smarty_tpl->tpl_vars['translationMethod']->value)) {?> checked <?php }?>
                           value="custom"
                           data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                           data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                           data-menu-item-name-type
                    >
                    <span class="form-indicator"></span>
                    <span class="form-text">Custom String</span>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"self-center",'tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['custom_string']), 0, true);
?>
                </label>
                <a
                        class="label-link m-l-a"
                        href="#translationModal"
                        data-toggle="lu-modal"
                        data-backdrop="static"
                        data-keyboard="false"
                        data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                        data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                        data-menu-translation
                >
                    Translate
                </a>
            </div>
            <div 
                class="d-flex custom-string collapse <?php if ($_smarty_tpl->tpl_vars['translationMethod']->value == 'custom' || empty($_smarty_tpl->tpl_vars['translationMethod']->value)) {?>show<?php }?>" 
                id="customCollapse<?php echo $_smarty_tpl->tpl_vars['parent']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
"
            >
                <div class="frame-component"></div>
                <input
                        class="form-control custom-name-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 item-name item-name-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                        type="text"
                        name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][name][custom]"
                        maxlength="80"
                        value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['custom'];?>
"
                        data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                        data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                        data-menu-item-custom-name
                        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@getCustomTranslation',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['translationMethod']->value == 'whmcs') {?>disabled<?php }?>
                >
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
            </div>
            <div class="d-flex">
                <label  class="radio d-flex m-t-0x" >
                    <input class="form-radio"
                        type="radio"
                        name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][settings][translation-method]"
                            <?php if ($_smarty_tpl->tpl_vars['translationMethod']->value == 'whmcs') {?> checked <?php }?>
                        value="whmcs"
                        data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                        data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@checkWhmcsLangVariable',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                        data-menu-item-name-type
                    >
                    <span class="form-indicator"></span>
                    <span class="form-text">Language Variable</span>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"self-center",'tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['language_variable']), 0, true);
?>
                </label>
            </div>
            <div 
                class="d-flex whmcs-page collapse <?php if ($_smarty_tpl->tpl_vars['translationMethod']->value == 'whmcs') {?>show<?php }?>" 
                id="langCollapse<?php echo $_smarty_tpl->tpl_vars['parent']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
"
            >
                <div class="frame-component"></div>
                <input
                        class="form-control whmcs-name whmcs-name-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                        type="text"
                        name="items[<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
][name][whmcs]"
                        maxlength="80"
                        value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['whmcs'];?>
"
                        data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                        data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                        data-menu-item-whmcs-name
                        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@checkWhmcsLangVariable',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['translationMethod']->value == 'custom' || empty($_smarty_tpl->tpl_vars['translationMethod']->value)) {?>disabled<?php }?>
                >
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['level']->value == 1 && $_smarty_tpl->tpl_vars['location']->value !== 'Footer' && $_smarty_tpl->tpl_vars['type']->value !== "Header" && $_smarty_tpl->tpl_vars['type']->value !== "HeaderCollapse") {?>
    <div class="menu-name-group form-group col-md-12">
        <div class="d-flex">
            <label class="form-label">
                Description
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_items']['description']), 0, true);
?>
            </label>
            <a
                    class="label-link m-l-a"
                    href="#translationDescModal"
                    data-toggle="lu-modal"
                    data-backdrop="static"
                    data-keyboard="false"
                    data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
"
                    data-menu-description-translation
            >
                Translate
            </a>
        </div>
        <textarea
            class="form-control custom-name-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
 item-name item-name-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
            type="text"
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
        ><?php echo $_smarty_tpl->tpl_vars['translationDesc']->value;?>
</textarea>
        <input
            class="description-<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"
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
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "Header") {?>
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
