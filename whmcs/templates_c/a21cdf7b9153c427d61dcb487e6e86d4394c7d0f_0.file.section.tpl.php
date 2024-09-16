<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:05:49
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40e7d34e076_33299025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21cdf7b9153c427d61dcb487e6e86d4394c7d0f' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/custom/sections/section.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars[\'sectionField\']->value[\'type\']).".tpl' => 1,
  ),
),false)) {
function content_66e40e7d34e076_33299025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('sectionLang', $_smarty_tpl->tpl_vars['pageSection']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['translation']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageSection']->value['type']['fields'], 'sectionField', true, 'sectionKey');
$_smarty_tpl->tpl_vars['sectionField']->iteration = 0;
$_smarty_tpl->tpl_vars['sectionField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionKey']->value => $_smarty_tpl->tpl_vars['sectionField']->value) {
$_smarty_tpl->tpl_vars['sectionField']->do_else = false;
$_smarty_tpl->tpl_vars['sectionField']->iteration++;
$_smarty_tpl->tpl_vars['sectionField']->last = $_smarty_tpl->tpl_vars['sectionField']->iteration === $_smarty_tpl->tpl_vars['sectionField']->total;
$__foreach_sectionField_3_saved = $_smarty_tpl->tpl_vars['sectionField'];
?>
    <?php $_smarty_tpl->_assignInScope('sectionCurrentName', false);?>
    <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['name'] == "caption") {?>
        <?php $_smarty_tpl->_assignInScope('sectionCurrentName', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['sectionField']->value['name']]);?>
        <?php if ($_smarty_tpl->tpl_vars['sectionCurrentName']->value != '') {?>
            <?php break 1;?>
        <?php }?>
    <?php }?>
    <?php if ((!$_smarty_tpl->tpl_vars['sectionCurrentName']->value || $_smarty_tpl->tpl_vars['sectionCurrentName']->value == '') && $_smarty_tpl->tpl_vars['sectionField']->value['name'] == "title") {?>
        <?php $_smarty_tpl->_assignInScope('sectionCurrentName', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['sectionField']->value['name']]);?>
        <?php if ($_smarty_tpl->tpl_vars['sectionCurrentName']->value != '') {?>
            <?php break 1;?>
        <?php }?>
    <?php }?>
    <?php if ((!$_smarty_tpl->tpl_vars['sectionCurrentName']->value || $_smarty_tpl->tpl_vars['sectionCurrentName']->value == '') && $_smarty_tpl->tpl_vars['sectionField']->value['name'] == "predefined_section") {?>
        <?php $_smarty_tpl->_assignInScope('sectionCurrentId', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['sectionField']->value['name']]);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['sectionCurrentId']->value == $_smarty_tpl->tpl_vars['section']->value->id) {?>
                <?php $_smarty_tpl->_assignInScope('sectionCurrentName', $_smarty_tpl->tpl_vars['section']->value->name);?>
            <?php }?>   
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php break 1;?>
    <?php }
$_smarty_tpl->tpl_vars['sectionField'] = $__foreach_sectionField_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<section 
    data-section 
    data-section-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
" 
    data-section-position="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['order'];?>
" 
    style="order: <?php echo $_smarty_tpl->tpl_vars['pageSection']->value['order'];?>
"
>
    <a 
        class="btn btn--sm btn--link btn--block btn--add-section" 
        href="#" 
        data-toggle="lu-modal" 
        data-target="#modalAddNewSection"
        data-section-add 
        data-order="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['order'];?>
" 
        data-index="<?php if (is_array($_smarty_tpl->tpl_vars['customPage']->value->sections) || is_object($_smarty_tpl->tpl_vars['customPage']->value->sections)) {
echo sizeof($_smarty_tpl->tpl_vars['customPage']->value->sections);
}?>"
        data-language="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"
    >
        <div class="text-bg">
            <i class="btn__icon ls ls-plus"></i>
            <span class="btn__text m-l-0x">Add New Section</span>
        </div>
        <div class="dashed-line"></div>
    </a>
    <div class="widget panel  of-visible m-b-0x">
        <div class="widget__top top top--collapsible">
            <div class="top__title collapsed" data-section-top data-toggle="lu-collapse" data-target="#page-section-content-<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                <span class="btn btn--icon btn--circle btn--xs i-c-3x">
                    <i class="btn__icon ls ls-down"></i>
                </span>
                <?php echo $_smarty_tpl->tpl_vars['pageSection']->value['type']['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['sectionCurrentName']->value) {?>- <span class="top__title-light">&nbsp;<?php echo $_smarty_tpl->tpl_vars['sectionCurrentName']->value;?>
</span><?php }?>
            </div>
            <div class="top__toolbar">
                <button
                    class="btn btn--sm btn--link btn--icon i-c-4x"
                    type="button"
                    data-toggle="lu-modal"
                    data-target="#modalRemoveSection"
                    data-section-remove
                >
                    <i class="btn__icon ls ls-trash" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"></i>
                </button>
                <label class="switch switch--primary m-r-1x" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['show_hide'];?>
">
                    <input type="hidden" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][visible]" value="0" />
                    <input class="switch__checkbox" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][visible]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pageSection']->value['visibility']) {?>checked="checked"<?php }?>>
                    <span class="switch__container"><span class="switch__handle"></span></span>
                </label>
                <div class="has-dropdown dropdown__section-style" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['section_style'];?>
">
                    <a class="btn btn--sm btn--link btn--icon" href="" data-toggle="lu-dropdown" data-placement="bottom right" data-section-style-button>
                        <span class="btn__icon bg-<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['theme'];?>
" data-arrow-target data-section-style-icon></span>
                    </a>
                    <div class="dropdown dropdown--style-change" data-dropdown-menu>
                        <div class="dropdown__arrow" data-arrow></div>
                        <div class="dropdown__menu">
                            <ul class="nav">
                                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['pageSection']->value['theme'] == 'default') {?> is-active <?php }?>">
                                    <a class="nav__link" href="#" data-section-style="default" data-section-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                                        <span class="section-style__elipse bg-default"></span>
                                        <span class="nav__link-text">Default</span>
                                    </a>
                                </li>
                                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['pageSection']->value['theme'] == 'gray') {?> is-active <?php }?>">
                                    <a class="nav__link" href="#" data-section-style="gray" data-section-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                                        <span class="section-style__elipse bg-gray"></span>
                                        <span class="nav__link-text">Gray</span>
                                    </a>
                                </li>
                                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['pageSection']->value['theme'] == 'primary') {?> is-active <?php }?>">
                                    <a class="nav__link" href="#" data-section-style="primary" data-section-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                                        <span class="section-style__elipse bg-primary"></span>
                                        <span class="nav__link-text">Primary</span>
                                    </a>
                                </li>
                                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['pageSection']->value['theme'] == 'secondary') {?> is-active <?php }?>">
                                    <a class="nav__link" href="#" data-section-style="secondary" data-section-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                                        <span class="section-style__elipse bg-secondary"></span>
                                        <span class="nav__link-text">Secondary</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="move-actions d-flex m-l-1x">
                    <a type="button" class="move-actions__btn" data-move-up="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['order'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                        <i class="ls ls-arrow-up" data-toggle="lu-tooltip" data-title="Move Up"></i>
                    </a>
                    <a type="button" class="move-actions__btn" data-move-down="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['order'];?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
                        <i class="ls ls-arrow-down" data-toggle="lu-tooltip" data-title="Move Down"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="widget__body collapse" data-section-body id="page-section-content-<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
">
            <div class="widget__content">              
                <?php $_smarty_tpl->_assignInScope('hasSubSection', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageSection']->value['type']['fields'], 'sectionField', true, 'sectionKey');
$_smarty_tpl->tpl_vars['sectionField']->iteration = 0;
$_smarty_tpl->tpl_vars['sectionField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionKey']->value => $_smarty_tpl->tpl_vars['sectionField']->value) {
$_smarty_tpl->tpl_vars['sectionField']->do_else = false;
$_smarty_tpl->tpl_vars['sectionField']->iteration++;
$_smarty_tpl->tpl_vars['sectionField']->last = $_smarty_tpl->tpl_vars['sectionField']->iteration === $_smarty_tpl->tpl_vars['sectionField']->total;
$__foreach_sectionField_5_saved = $_smarty_tpl->tpl_vars['sectionField'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['sectionField']->value['type'] == "subsection") {?>
                        <?php $_smarty_tpl->_assignInScope('hasSubSection', true);?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('sectionFieldValue', $_smarty_tpl->tpl_vars['sectionLang']->value[$_smarty_tpl->tpl_vars['sectionField']->value['name']]);?>
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/custom/sections/inputs/".((string)$_smarty_tpl->tpl_vars['sectionField']->value['type']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sectionKey'=>$_smarty_tpl->tpl_vars['sectionKey']->value,'sectionIndex'=>$_smarty_tpl->tpl_vars['sectionIndex']->value), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['sectionField']->last && $_smarty_tpl->tpl_vars['hasSubSection']->value) {?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>     
                <?php
$_smarty_tpl->tpl_vars['sectionField'] = $__foreach_sectionField_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <input type="hidden" class="page_section_<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
_theme" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][theme]" value="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['theme'];?>
" data-section-theme>
            <input type="hidden" class="page_section_<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
_order" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][order]" value="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['order'];?>
" data-section-order>
            <?php if ((isset($_smarty_tpl->tpl_vars['pageSection']->value['id']))) {?>
                <input type="hidden" class="page_section_<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
_id" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][id]" value="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['id'];?>
">
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['pageSection']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['id']))) {?>
                <input type="hidden" class="page_section_<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
_lang_id" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][langId]" value="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['lang'][$_smarty_tpl->tpl_vars['language']->value]['id'];?>
">
            <?php }?>
            <input type="hidden" class="page_section_<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
_type" name="sections[<?php echo $_smarty_tpl->tpl_vars['sectionIndex']->value;?>
][type]" value="<?php echo $_smarty_tpl->tpl_vars['pageSection']->value['type']['slug'];?>
">
        </div>
    </div>
</section><?php }
}
