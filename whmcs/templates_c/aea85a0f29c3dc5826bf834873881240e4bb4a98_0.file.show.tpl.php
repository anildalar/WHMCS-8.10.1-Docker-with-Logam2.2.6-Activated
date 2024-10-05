<?php
/* Smarty version 3.1.48, created on 2024-10-03 11:52:16
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fe85702a9c51_21237209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea85a0f29c3dc5826bf834873881240e4bb4a98' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/show.tpl',
      1 => 1726757104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 3,
    'file:adminarea/includes/helpers/popover.tpl' => 7,
    'file:adminarea/pages/includes/modal/seo-translation.tpl' => 2,
    'file:adminarea/pages/includes/modal/seo-image.tpl' => 1,
    'file:adminarea/pages/includes/modal/seo-image-remove.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
  ),
),false)) {
function content_66fe85702a9c51_21237209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179388199866fe857023e985_00185190', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22360492566fe8570242285_12529431', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51482736566fe85702a35b9_72522776', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158460206366fe85702a55e4_35701958', "template-modals");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175523985366fe85702a8552_59851110', "template-scripts");
?>




















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_179388199866fe857023e985_00185190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_179388199866fe857023e985_00185190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"page_manage"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_22360492566fe8570242285_12529431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_22360492566fe8570242285_12529431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
            id="pageForm"
            action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@save',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageName'=>$_smarty_tpl->tpl_vars['settings']->value['name']));?>
"
            method="POST"
            enctype="multipart/form-data"
            data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@getPageSettings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageName'=>$_smarty_tpl->tpl_vars['settings']->value['name']));?>
"
            data-page-template-settings
            data-check-unsaved-changes
    >
        <div class="block">
            <div class="block__body">
                <div class="section">
                    <h3 class="section__title">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_template']['header'];?>

                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['pages']['page_template']), 0, false);
?>
                    </h3>
                    <div class="section__body">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageLayouts']->value, 'layout', false, 'layoutName');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layoutName']->value => $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
                            <div class="d-inline-block m-r-2x">
                                <div class="widget widget--checkbox widget--page-template <?php if ($_smarty_tpl->tpl_vars['layout']->value['active']) {?>is-active<?php }?>" data-toggle="radio">
                                    <input class="hidden" type="radio" name="layout" value="<?php echo $_smarty_tpl->tpl_vars['layoutName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['layout']->value['active']) {?> checked <?php }?>/>
                                    <div class="widget__header">
                                        <div class="widget__media widget__media--lg">

                                            <img src="<?php echo $_smarty_tpl->tpl_vars['layout']->value['preview'];?>
" alt=""/>

                                        </div>
                                        <div class="widget__checkbox">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->img('widgets/checkbox.svg');?>
" alt="">
                                        </div>
                                    </div>
                                    <div class="widget__actions widget__actions--raised flex flex-items-xs-between">
                                        <div>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['layout']->value['label'];?>
</strong>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['layout']->value['active']) {?>
                                            <label class="label label--success label--outline">Active</label>
                                        <?php } else { ?>
                                            <label class="label label--default label--outline">Activate</label>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>

                <div class="section section--template-settings" data-template-settings-container>
                    <h3 class="section__title">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['template_settings']['header'];?>

                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['pages']['template_settings']), 0, true);
?>
                    </h3>

                    <div class="widget__body panel">
                        <div class="p-v-8x d-flex flex-items-xs-center" data-template-settings-loader>
                            <div class="preloader preloader--lg"></div>
                        </div>
                        <div class="widget__content p-0x is-hidden" data-template-settings>
                        </div>
                        <div class="widget__content msg p-v-6x is-hidden" data-template-settings-no-data>
                            <div class="msg__icon i-c-6x">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['iconLocation']->value)."/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                            <div class="msg__body">
                                <span class="msg__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['template_settings']['no_data'];?>
</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['settings']->value['hidePageSettings']) {?>
            <div class="block__sidebar block__sidebar--md is-sticky" data-page-settings>
                <div class="section">
                    <h3 class="section__title">
                        Page Settings
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['pages']['page_settings']), 0, true);
?>
                    </h3>
                    <div class="section__body">
                        <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name != 'Default') {?>
                            <div class="widget panel of-visible">
                                <label class="widget__top top">
                                    <div class="top__title">
                                        General
                                    </div>
                                </label>
                                <div class="widget__body">
                                    <div class="widget__content">
                                        <div class="form-group">
                                            <label class="form-label">
                                                Display Rule Assignment
                                                <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['general']['display_rule_assignment']['content']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['general']['display_rule_assignment']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['general']['display_rule_assignment']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['general']['display_rule_assignment']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['general']['display_rule_assignment']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                                <?php }?>
                                            </label>
                                            <select class="form-control selectized m-w-250 opacity-1" name="display_type" tabindex="-1">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->rules, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rule']->value->slug;?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value->display_type == $_smarty_tpl->tpl_vars['rule']->value->slug) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['rule']->value->name;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['settings']->value['hideSeoSettings']) {?>
                            <div class="widget panel of-visible">
                                <label class="widget__top top">
                                    <div class="top__title">
                                        SEO
                                    </div>
                                    <div class="top__actions">
                                        <div class="switch">
                                            <input type="hidden" name="seoEnabled" value="0">
                                            <input class="switch__checkbox" name="seoEnabled" value="1" type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value->seo_enabled) {?> checked <?php }?> data-seo-enable>
                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                        </div>
                                    </div>
                                </label>
                                <div class="widget__body widget__body--seo <?php if (!(isset($_smarty_tpl->tpl_vars['page']->value)) || !$_smarty_tpl->tpl_vars['page']->value->seo_enabled) {?>is-hidden<?php }?>" data-seo-section>
                                    <div class="widget__content">
                                        <div class="form-group" data-form-counter>
                                            <label class="form-label">
                                                Robots
                                                <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['robots']['content']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['robots']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['robots']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['robots']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['robots']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                                <?php }?>
                                            </label>
                                            <select class="form-control selectized m-w-250" name="seoRobots" tabindex="-1">
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['page']->value->seo_robots) {?> selected<?php }?>>Allow</option>
                                                <option value="0" <?php if (!$_smarty_tpl->tpl_vars['page']->value->seo_robots) {?> selected <?php }?>>Disallow</option>
                                            </select>
                                        </div>
                                        <div class="form-group" data-form-counter>
                                            <label class="form-label">
                                                Seo Title 
                                                <span class="form-label__counter">(<span data-form-counter-value><?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {
echo mb_strlen($_smarty_tpl->tpl_vars['page']->value->seo_title[$_smarty_tpl->tpl_vars['whmcsLang']->value->value], 'UTF-8');
} else { ?>0<?php }?></span>/64)</span>
                                                <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['title']['content']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['title']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['title']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['title']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['title']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                                <?php }?>
                                                <a class="form-label__translate seo-translation" data-seo-translation="title" href="#titleSeoTranslationModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                                                    Translate
                                                </a>
                                            </label>
                                            <input class="form-control" type="text" data-max="64" data-seo-input-title data-form-counter-input value="<?php echo $_smarty_tpl->tpl_vars['page']->value->seo_title[$_smarty_tpl->tpl_vars['whmcsLang']->value->value];?>
" data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                                            <input type="hidden" name="seoTitle" value='{<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value->seo_title, 'title', true, 'key');
$_smarty_tpl->tpl_vars['title']->iteration = 0;
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
$_smarty_tpl->tpl_vars['title']->iteration++;
$_smarty_tpl->tpl_vars['title']->last = $_smarty_tpl->tpl_vars['title']->iteration === $_smarty_tpl->tpl_vars['title']->total;
$__foreach_title_2_saved = $_smarty_tpl->tpl_vars['title'];
?>"<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
":"<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['title']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['title'] = $__foreach_title_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}' data-seo-translation-title>
                                        </div>
                                        <div class="form-group" data-form-counter>
                                            <label class="form-label">
                                                Seo Description 
                                                <span class="form-label__counter">(<span data-form-counter-value><?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {
echo mb_strlen($_smarty_tpl->tpl_vars['page']->value->seo_description[$_smarty_tpl->tpl_vars['whmcsLang']->value->value], 'UTF-8');
} else { ?>0<?php }?></span>/160)</span>
                                                <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['description']['content']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['description']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['description']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['description']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['description']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                                <?php }?>
                                                <a class="form-label__translate seo-translation" data-seo-translation="description" href="#descriptionSeoTranslationModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false">
                                                    Translate
                                                </a>
                                            </label>
                                            <textarea class="form-control" type="text" data-max="160" data-seo-input-description data-form-counter-input data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->seo_description[$_smarty_tpl->tpl_vars['whmcsLang']->value->value];?>
</textarea>
                                            <input type="hidden" name="seoDescription" value='{<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value->seo_description, 'desc', true, 'key');
$_smarty_tpl->tpl_vars['desc']->iteration = 0;
$_smarty_tpl->tpl_vars['desc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['desc']->value) {
$_smarty_tpl->tpl_vars['desc']->do_else = false;
$_smarty_tpl->tpl_vars['desc']->iteration++;
$_smarty_tpl->tpl_vars['desc']->last = $_smarty_tpl->tpl_vars['desc']->iteration === $_smarty_tpl->tpl_vars['desc']->total;
$__foreach_desc_3_saved = $_smarty_tpl->tpl_vars['desc'];
?>"<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
":"<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['desc']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['desc'] = $__foreach_desc_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}' data-seo-translation-description>
                                        </div>
                                        <div class="form-group m-b-0x" data-seo-container>
                                            <label class="form-label">
                                                Social Image
                                                <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['image']['content']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['image']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['image']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['image']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['seo']['image']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                                <?php }?>
                                            </label>
                                            <a class="btn btn--secondary btn--block <?php if ($_smarty_tpl->tpl_vars['page']->value->seo_image) {?>is-hidden<?php }?>" href="#seoImageModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false"  data-seo-btn>
                                                Choose Image
                                            </a>
                                            <input type="hidden" name="seoImage" data-seo-input value="<?php if ($_smarty_tpl->tpl_vars['page']->value->seo_image) {
echo $_smarty_tpl->tpl_vars['page']->value->seo_image;
}?>">
                                            <div class="media media--seo d-block <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value->seo_image) {
} else { ?>is-hidden<?php }?>" data-seo-image-container>
                                                <div class="media__content">
                                                    <div class="media__body">
                                                        <a href="#seoImageModal" data-toggle="lu-modal" data-backdrop="static" data-keyboard="false" data-seo-image-container class="img-container img-container--boxed d-flex">
                                                            <img data-seo-image src="<?php if ($_smarty_tpl->tpl_vars['page']->value->seo_image) {?> /templates/<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
/assets/img/page-manager/<?php echo $_smarty_tpl->tpl_vars['page']->value->seo_image;?>
 <?php }?>" alt="<?php if ($_smarty_tpl->tpl_vars['page']->value->seo_image) {?> <?php echo $_smarty_tpl->tpl_vars['page']->value->seo_image;?>
 <?php }?>"/>
                                                        </a>
                                                    </div>
                                                    <div class="media__footer">
                                                        <div class="seo-image-name truncate" data-seo-image-name>
                                                            <?php if ($_smarty_tpl->tpl_vars['page']->value->seo_image) {?> <?php echo $_smarty_tpl->tpl_vars['page']->value->seo_image;?>
 <?php }?>
                                                        </div>
                                                        <a
                                                                class="btn btn--icon btn--link"
                                                                data-toggle="lu-modal"
                                                                href="#deleteSeoImageModal"
                                                        >
                                                            <i
                                                                    class="btn__icon lm lm-trash"
                                                                    data-toggle="lu-tooltip"
                                                                    data-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                                                            ></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                        <div class="widget panel of-visible <?php if ($_smarty_tpl->tpl_vars['template']->value->getActiveDisplay()->name == 'CMS') {?>is-hidden<?php }?>" data-toggle-visibility>
                            <label class="widget__top top">
                                <div class="top__title">
                                    Custom Layout
                                </div>
                                <div class="top__actions">
                                    <div class="switch">
                                        <input type="hidden" name="settings[layoutEnabled]" value="0">
                                        <input class="switch__checkbox" name="settings[layoutEnabled]" value="1" type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value->settings['layoutEnabled']) {?> checked <?php }?> data-toggle-visibility-switch>
                                        <span class="switch__container"><span class="switch__handle"></span></span>
                                    </div>
                                </div>
                            </label>
                            <div class="widget__body widget__body--layout <?php if (!(isset($_smarty_tpl->tpl_vars['page']->value)) || !$_smarty_tpl->tpl_vars['page']->value->settings['layoutEnabled']) {?>is-hidden<?php }?>" data-toggle-visibility-target>
                            <div class="widget__content">
                                <div class="form-group" data-form-counter>
                                    <label class="form-label">
                                        Main Menu Layout
                                        <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['main_menu']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['main_menu']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['main_menu']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['main_menu']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['main_menu']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <select class="form-control " name="settings[layout_mainmenu]" tabindex="-1">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageCustomLayouts']->value['mainMenu'], 'menuItem', false, 'index');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getMainName();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value->settings['layout_mainmenu'] == $_smarty_tpl->tpl_vars['menuItem']->value->getMainName()) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getName();?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="form-group" data-form-counter>
                                    <label class="form-label">
                                        Footer Layout
                                        <?php if ($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['footer']['content']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['footer']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['footer']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['footer']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['page']['settings']['custom_layout']['footer']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <select class="form-control" name="settings[layout_footer]" tabindex="-1">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageCustomLayouts']->value['footer'], 'menuItem', false, 'index');
$_smarty_tpl->tpl_vars['menuItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getMainName();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value->settings['layout_footer'] == $_smarty_tpl->tpl_vars['menuItem']->value->getMainName()) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getName();?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        </div>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_51482736566fe85702a35b9_72522776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_51482736566fe85702a35b9_72522776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <button
                    type="button"
                    class="btn btn btn--primary"
                    data-check-unsaved-changes
                    data-changes-save="#pageForm"
            >
                <span class="btn__text">Save Changes</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <a
                    class="btn btn--default btn--outline "
                    href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
            >
                <span class="btn__text">Cancel</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_158460206366fe85702a55e4_35701958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_158460206366fe85702a55e4_35701958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'title','label'=>'SEO Title Translation Modal'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-translation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'description','label'=>'SEO Description Translation Modal'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/seo-image-remove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_175523985366fe85702a8552_59851110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_175523985366fe85702a8552_59851110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('page-manager.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
