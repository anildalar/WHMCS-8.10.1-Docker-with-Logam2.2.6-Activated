<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:07:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40ed4cf5057_68940012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb04501059bc83822fca9dc7265808e03f2b221' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/show.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 2,
    'file:adminarea/menu/includes/inputs.tpl' => 2,
    'file:adminarea/includes/helpers/tooltip.tpl' => 3,
    'file:adminarea/menu/includes/modals.tpl' => 1,
  ),
),false)) {
function content_66e40ed4cf5057_68940012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148208875266e40ed4c8ca92_02147964', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46145951266e40ed4c8f403_35297561', "template-content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141597156166e40ed4cea9b6_94271223', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120267653766e40ed4cf3842_31843874', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_148208875266e40ed4c8ca92_02147964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_148208875266e40ed4c8ca92_02147964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'menu'), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_46145951266e40ed4c8f403_35297561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_46145951266e40ed4c8f403_35297561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

    <form id="updateMenuForm" class="list__form" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@save',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['menu']->value->id));?>
" method="POST">
        <div class="block is-loading">
            <div class="block__body" data-menu-items data-check-unsaved-changes>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value->changed;?>
" name="settings[changed]" data-menu-changed>
                <div class="section">
                    <div class="section__header top">
                        <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['title'];?>
</h3>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['menu']['menu_items']), 0, false);
?>
                        <div class="top__toolbar m-l-a">
                            <button 
                                class="btn btn--primary" 
                                type="button" 
                                data-add-new-item 
                                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@addNewMenuItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                                data-index="<?php echo count($_smarty_tpl->tpl_vars['menu']->value->parents);?>
" 
                                data-position="<?php echo count($_smarty_tpl->tpl_vars['menu']->value->parents)+1;?>
" 
                                data-lang-edit="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_customization_options'];?>
" 
                                data-lang-cancel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['hide_customization_options'];?>
"
                                data-lang-remove="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                                data-lang-add-child="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"
                                data-lang-show-hide="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
"
                                data-lang-move-up="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"
                                data-lang-move-down="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"
                            >                                                           
                                <i class="btn__icon lm lm-plus"></i>
                                <span class="btn__text">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>

                                </span>
                            </button>
                        </div>
                    </div>
                    <div id="menuManagerItem" class="section__body">
                        <div class="sortable-list list-group list-group--simple list-group--p-h-0x list-group--collapse m-b-0x" data-menu-items-list>                        
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value->parents, 'parent', false, 'parentIndex');
$_smarty_tpl->tpl_vars['parent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parentIndex']->value => $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->do_else = false;
?>
                                <div class="list-group__sortable" data-menu-item="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
" data-menu-item-position="<?php echo $_smarty_tpl->tpl_vars['parent']->value->order;?>
" style="order:<?php echo $_smarty_tpl->tpl_vars['parent']->value->order;?>
">
                                    <div id="list-item-parent-<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
" class="list-group__item flex-column panel p-0x">
                                        <div class="list-group__top top top--collapsible" id="parent-collapse-<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
" aria-expanded="false">                                     
                                            <div 
                                                class="top__title collapsed" 
                                                data-toggle="lu-collapse" 
                                                data-target="#collapse-p<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
" 
                                                aria-expanded="false" 
                                                aria-controls="collapse-p<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
"
                                            >
                                                <span class="btn btn--icon btn--circle btn--xs i-c-3x">
                                                    <i class="btn__icon ls ls-down"></i>
                                                </span>
                                                <span 
                                                    data-menu-item-title 
                                                    data-parent="parent" 
                                                    data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
"
                                                >
                                                    <?php echo $_smarty_tpl->tpl_vars['parent']->value->name;?>

                                                </span>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position']))) {?>
                                                <span 
                                                    class="label label--sm label--<?php if ($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'] == "Primary") {?>primary<?php } elseif ($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'] == "Secondary") {?>info<?php } elseif ($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'] == "Social") {?>warning<?php }?> m-l-1x"
                                                    data-menu-item-location
                                                >
                                                    <?php echo $_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'];?>

                                                </span>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['position']))) {?>
                                                <span 
                                                    class="label label--sm label--primary m-l-1x  <?php if ($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['position'] == "left") {?>is-hidden<?php }?>"
                                                    data-menu-item-location
                                                >
                                                    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['position']);?>

                                                </span>
                                                <?php }?>
                                            </div>
                                            <div class="top__toolbar">                                           
                                                <button 
                                                    type="button" 
                                                    class="btn btn--icon btn--link btn--sm" 
                                                    data-add-new-child
                                                    data-size="<?php echo $_smarty_tpl->tpl_vars['parent']->value->childrenCount;?>
" 
                                                    data-position="<?php echo $_smarty_tpl->tpl_vars['parent']->value->childrenCount+1;?>
"
                                                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
"
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'])) && $_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'] != "Primary") {?>disabled<?php }?>
                                                >
                                                    <i class="btn__icon lm lm-plus-circle" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"></i>
                                                </button>
                                                <button 
                                                    type="button" 
                                                    class="btn btn--icon btn--link btn--sm delete-menu-item" 
                                                    href="#deleteMenuItemModal" 
                                                    data-toggle="lu-modal" 
                                                    data-backdrop="static" 
                                                    data-keyboard="false" 
                                                    data-parent="parent" 
                                                    data-remove-item 
                                                    data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
">
                                                        <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"></i>
                                                </button>
                                                <label class="switch switch--primary" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
">
                                                    <input type="hidden" name="items[parent][<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
][active]" value="0"/>
                                                    <input class="switch__checkbox mode-display" name="items[parent][<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
][active]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['parent']->value->getUpdatedActive()) {?> checked="checked" <?php }?>>
                                                    <span class="switch__container"><span class="switch__handle"></span></span>
                                                </label>
                                                <div class="move-actions m-l-1x">
                                                    <a  
                                                        class="move-actions__btn" 
                                                        type="button" 
                                                        data-move-up="<?php echo $_smarty_tpl->tpl_vars['parent']->value->order;?>
"
                                                        data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
"
                                                    >
                                                        <i class="ls ls-arrow-up" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"></i>
                                                    </a>
                                                    <a  
                                                        class="move-actions__btn" 
                                                        type="button" 
                                                        data-move-down="<?php echo $_smarty_tpl->tpl_vars['parent']->value->order;?>
"
                                                        data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
"
                                                    >
                                                        <i class="ls ls-arrow-down" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group__bottom collapse" id="collapse-p<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
">
                                            <div class="list-group__content">
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/inputs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>'parent','index'=>$_smarty_tpl->tpl_vars['parentIndex']->value,'name'=>$_smarty_tpl->tpl_vars['parent']->value->getTemplateName($_smarty_tpl->tpl_vars['template']->value),'location'=>$_smarty_tpl->tpl_vars['menu']->value->location,'typeView'=>$_smarty_tpl->tpl_vars['parent']->value->content->type->view,'settings'=>$_smarty_tpl->tpl_vars['parent']->value->content->content_settings,'display'=>$_smarty_tpl->tpl_vars['parent']->value->content->display_settings,'level'=>$_smarty_tpl->tpl_vars['parent']->value->level,'order'=>$_smarty_tpl->tpl_vars['parent']->value->order,'translations'=>$_smarty_tpl->tpl_vars['parent']->value->translations,'customTranslationDesc'=>$_smarty_tpl->tpl_vars['parent']->value->custom_translation_description,'translationDesc'=>$_smarty_tpl->tpl_vars['parent']->value->translation_description,'customTranslation'=>$_smarty_tpl->tpl_vars['parent']->value->custom_translation), 0, true);
?>                                             </div>
                                        </div>
                                    </div>
                                    <div class="list-group__collapse collapse <?php if ($_smarty_tpl->tpl_vars['parent']->value->childrenCount > 0 && (!(isset($_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'])) || $_smarty_tpl->tpl_vars['parent']->value->content->display_settings['footer-position'] == "Primary")) {?>show<?php }?>" id="parentChildren-<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
">
                                        <div class="list-group__content sortable-list-children" data-menu-item-children data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['parent']->value->childrenCount > 0) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parent']->value->children->sortBy('order'), 'child', false, 'childIndex');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childIndex']->value => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                                                    <div id="list-item-<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
" class="list-group__item flex-column panel p-0x" data-menu-item="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;
echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
0" data-menu-item-position="<?php echo $_smarty_tpl->tpl_vars['child']->value->order;?>
" style="order:<?php echo $_smarty_tpl->tpl_vars['child']->value->order;?>
">
                                                        <div class="list-group__top top top--collapsible">
                                                            <div 
                                                                class="top__title collapsed" 
                                                                data-toggle="lu-collapse" 
                                                                data-target="#collapse-p<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
-c<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
" 
                                                                aria-expanded="false" 
                                                                aria-controls="#collapse-p<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
-c<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
" 
                                                            >
                                                                <span class="btn btn--icon btn--circle btn--xs i-c-3x">
                                                                    <i class="btn__icon ls ls-down"></i>
                                                                </span>
                                                                <span 
                                                                    data-menu-item-title
                                                                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
" 
                                                                    data-index="<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
"
                                                                >
                                                                   <?php echo $_smarty_tpl->tpl_vars['child']->value->getTemplateName($_smarty_tpl->tpl_vars['template']->value);?>

                                                                </span>
                                                            </div>
                                                            <div class="top__toolbar">
                                                                <button 
                                                                    type="button" 
                                                                    class="btn btn--icon btn--link btn--sm delete-menu-item" 
                                                                    href="#deleteMenuItemModal" 
                                                                    data-toggle="lu-modal" 
                                                                    data-backdrop="static" 
                                                                    data-keyboard="false" 
                                                                    data-parent="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
" 
                                                                    data-remove-item
                                                                    data-index="<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
"
                                                                >
                                                                    <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"></i>
                                                                </button>
                                                                <label class="switch switch--primary" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
">                                                               
                                                                    <input type="hidden" name="items[<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
][active]" value="0"/>
                                                                    <input class="switch__checkbox" data-show-hide-item name="items[<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
][active]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['child']->value->getUpdatedActive()) {?> checked="checked" <?php }?>>
                                                                    <span class="switch__container"><span class="switch__handle"></span></span>
                                                                </label>
                                                                <div class="move-actions m-l-1x">
                                                                    <a  
                                                                        class="move-actions__btn" 
                                                                        type="button"                                  
                                                                        data-move-up="<?php echo $_smarty_tpl->tpl_vars['child']->value->order;?>
"
                                                                        data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;
echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
0"
                                                                    >
                                                                        <i class="ls ls-arrow-up" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"></i>
                                                                    </a>
                                                                    <a  
                                                                        class="move-actions__btn"
                                                                        type="button"  
                                                                        data-move-down="<?php echo $_smarty_tpl->tpl_vars['child']->value->order;?>
"
                                                                        data-index="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;
echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
0"
                                                                    >
                                                                        <i class="ls ls-arrow-down" data-toggle="lu-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="list-group__bottom collapse" id="collapse-p<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
-c<?php echo $_smarty_tpl->tpl_vars['childIndex']->value;?>
">
                                                                <div class="list-group__content p-b-1x">
                                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/inputs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['parentIndex']->value,'index'=>$_smarty_tpl->tpl_vars['childIndex']->value,'name'=>$_smarty_tpl->tpl_vars['child']->value->getTemplateName($_smarty_tpl->tpl_vars['template']->value),'location'=>$_smarty_tpl->tpl_vars['menu']->value->location,'typeView'=>$_smarty_tpl->tpl_vars['child']->value->content->type->view,'settings'=>$_smarty_tpl->tpl_vars['child']->value->content->content_settings,'display'=>$_smarty_tpl->tpl_vars['child']->value->content->display_settings,'level'=>$_smarty_tpl->tpl_vars['child']->value->level,'order'=>$_smarty_tpl->tpl_vars['child']->value->order,'translations'=>$_smarty_tpl->tpl_vars['child']->value->translations,'translationDesc'=>$_smarty_tpl->tpl_vars['child']->value->translation_description,'customTranslationDesc'=>$_smarty_tpl->tpl_vars['child']->value->custom_translation_description,'customTranslation'=>$_smarty_tpl->tpl_vars['child']->value->custom_translation), 0, true);
?>
                                                                </div>
                                                            </div>
                                                    </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </div>  
                                        <a class="btn btn--block m-t-1x btn-add-children" 
                                            data-add-new-child-btn 
                                            data-size="<?php echo $_smarty_tpl->tpl_vars['parent']->value->childrenCount;?>
" 
                                            data-position="<?php echo $_smarty_tpl->tpl_vars['parent']->value->childrenCount+1;?>
"
                                            data-parent="<?php echo $_smarty_tpl->tpl_vars['parentIndex']->value;?>
"
                                        >
                                            <i class="btn__icon ls ls-plus"></i>
                                            <span class="btn__text m-l-0x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new_item'];?>
</span>   
                                        </a>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <a class="btn btn--block btn-add-parent m-t-1x btn-add-bottom <?php if (count($_smarty_tpl->tpl_vars['menu']->value->parents) === 0) {?>is-hidden<?php }?>"
                            data-add-new-item 
                            data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@addNewMenuItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                            data-index="<?php echo count($_smarty_tpl->tpl_vars['menu']->value->parents);?>
"
                            data-position="<?php echo count($_smarty_tpl->tpl_vars['menu']->value->parents)+1;?>
"  
                            data-lang-edit="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_customization_options'];?>
" 
                            data-lang-cancel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['hide_customization_options'];?>
"                           
                            data-lang-remove="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                            data-lang-add-child="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"
                            data-lang-show-hide="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
"
                            data-lang-move-up="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"
                            data-lang-move-down="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"
                        >
                            <div class="text-bg">
                                <i class="btn__icon ls ls-plus"></i>
                                <span class="btn__text m-l-0x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>
</span>
                            </div>
                        </a>
                        <div class="section__builder panel w-100 p-0x <?php if (count($_smarty_tpl->tpl_vars['menu']->value->parents) > 0) {?>is-hidden<?php }?>" data-menu-items-no-data>
                            <div class="builder__icon text-center">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3856 16.4751L27.0847 1.80041C29.4918 -0.600136 33.393 -0.600136 35.8001 1.80041L38.1943 4.19069C40.6017 6.59403 40.6017 10.492 38.1943 12.8928L23.425 27.6375C22.3476 28.7132 20.8866 29.3177 19.3628 29.3177H11.9949C11.1658 29.3177 10.4995 28.6359 10.5202 27.8084L10.7051 20.3855C10.7421 18.9155 11.3436 17.5154 12.3856 16.4751ZM36.1082 6.27339L33.7151 3.88424C32.4599 2.63246 30.425 2.63246 29.1704 3.88368L27.9611 5.09096L34.899 12.0173L36.1088 10.8095C37.3632 9.55845 37.3632 7.5263 36.1082 6.27339ZM32.8128 14.1L25.8749 7.17369L14.4719 18.5578C13.9651 19.0638 13.6726 19.7447 13.6545 20.4592L13.5059 26.3705L19.3629 26.3723C20.0113 26.3723 20.6365 26.1472 21.1339 25.7402L21.339 25.5548L32.8128 14.1ZM18.6696 0.0759835C19.4843 0.0759835 20.1448 0.735339 20.1448 1.54869C20.1448 2.29427 19.5898 2.91044 18.8698 3.00796L18.6696 3.0214H11.3155C6.35587 3.0214 3.14341 6.30596 2.95873 11.4067L2.95032 11.8753V28.2008C2.95032 33.4173 6.00656 36.8485 10.8685 37.0458L11.3155 37.0548H28.6712C33.6431 37.0548 36.8458 33.7773 37.0299 28.6701L37.0383 28.2008V20.2914C37.0383 19.478 37.6988 18.8187 38.5135 18.8187C39.2603 18.8187 39.8775 19.3727 39.9752 20.0916L39.9886 20.2914V28.2008C39.9886 34.9991 35.6752 39.779 29.1313 39.9927L28.6712 40.0002H11.3155C4.67062 40.0002 0.206456 35.3745 0.00697185 28.6718L0 28.2008V11.8753C0 5.08376 4.32451 0.297515 10.8562 0.0834665L11.3155 0.0759835H18.6696Z" fill="#1062FE"/>
                                </svg>
                            </div>
                            <h5 class="builder__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['no_data']['title'];?>
</h5>
                            <p class="p-md builder__desc text-center m-b-4x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['no_data']['desc'];?>
</p>
                            <div class="builder__actions">
                                <button 
                                    class="btn btn--secondary" 
                                    type="button" 
                                    data-add-new-item 
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@addNewMenuItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                                    data-index="0" 
                                    data-position="1"
                                    data-lang-edit="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['show_customization_options'];?>
" 
                                    data-lang-cancel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['hide_customization_options'];?>
"
                                    data-lang-remove="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                                    data-lang-add-child="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"
                                    data-lang-show-hide="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
"
                                    data-lang-move-up="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"
                                    data-lang-move-down="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"
                                >    
                                    <i class="btn__icon lm lm-plus"></i>
                                    <span class="btn__text">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new_item'];?>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="block__sidebar" data-menu-settings data-check-unsaved-changes>
                <div class="section menu-sidebar-section">
                    <div class="section__header top">
                        <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_settings']['title'];?>
</h3>
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['menu']['menu_settings']), 0, true);
?>
                    </div>
                    <div class="section__body panel">
                        <div class="form-group">
                            <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['name'];?>

                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_settings']['name']), 0, false);
?>
                            </label>
                            <input class="form-control" type="text" name="settings[name]" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
" lu-required>
                            <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span> 
                        </div>
                        <div class="form-group">
                            <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['display_rule'];?>

                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_settings']['display']), 0, true);
?>
                            </label>
                            <select data-menu-settings-display-rules class="form-control multiselect form-control--basic" name="settings[rules][]" multiple>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayRules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rule']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name])) && is_array($_smarty_tpl->tpl_vars['menu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name]) && in_array($_smarty_tpl->tpl_vars['rule']->value['name'],$_smarty_tpl->tpl_vars['menu']->value->rule[$_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name])) {?> selected<?php }?> <?php if ($_smarty_tpl->tpl_vars['rule']->value['disabled']) {?>data-data='{"selectable": false}'<?php }?>><?php echo $_smarty_tpl->tpl_vars['rule']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="form-group menu-status  m-b-0x">                             <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['status'];?>

                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_settings']['status']), 0, true);
?>
                            </label>
                            <select data-menu-settings-status class="form-control" name="settings[active]">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['menu']->value->active) {?> selected <?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['active'];?>
</option>
                                <option value="0" <?php if (!$_smarty_tpl->tpl_vars['menu']->value->active) {?> selected <?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['disabled'];?>
</option>
                            </select>
                        </div>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value->location;?>
" name="settings[location]" data-menu-location>
                    </div>
                </div>
            </div>
            <div class="block__loader preloader-container">
                <div class="preloader preloader--lg"></div>
            </div>
        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_141597156166e40ed4cea9b6_94271223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_141597156166e40ed4cea9b6_94271223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container d-flex">
            <div class="flex-grow-1">
                <button 
                    class="btn btn--primary is-disabled" 
                    type="button" 
                    data-menu-action-save 
                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@checkRules',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['menu']->value->id));?>
" 
                    data-check-unsaved-changes
                    data-form-validate="#updateMenuForm"
                >
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['save_changes'];?>
</span>
                    <span class="btn__preloader preloader"></span>
                </button>
                <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuTab'=>$_GET['menuTab']));?>
">
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                    <span class="btn__preloader preloader"></span>
                </a>
            </div>
            <div class="m-r-2x">
                <a class="btn btn--default btn--outline" href="#deleteMenuModal" data-menu-action-delete data-check-unsaved-changes data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['delete'];?>
</span>
                    <span class="btn__preloader preloader"></span>
                </a>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value))) {?>
                <div>
                    <a class="btn btn--secondary" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Data@exportMenu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['menu']->value->id));?>
" data-menu-export-item data-check-unsaved-changes>
                        <i class="btn__icon lm lm-upload"></i>
                        <span class="btn__text">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['export'];?>

                        </span>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-scripts"} */
class Block_120267653766e40ed4cf3842_31843874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_120267653766e40ed4cf3842_31843874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('menu-manager.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
