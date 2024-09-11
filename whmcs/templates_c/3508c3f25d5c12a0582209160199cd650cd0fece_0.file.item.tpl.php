<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:42:25
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff86128d472_38986610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3508c3f25d5c12a0582209160199cd650cd0fece' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/item.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 2,
    'file:adminarea/includes/helpers/popover.tpl' => 7,
    'file:adminarea/extensions/supporthours/includes/name-translation-modal.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
  ),
),false)) {
function content_66dff86128d472_38986610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27446972766dff86122b9b9_81414046', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52724847866dff86122e5e3_79089659', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54984096666dff8612865d1_02523847', "template-scripts");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52808902666dff861287803_02143074', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14319927666dff8612894f2_84450283', "template-modals");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_27446972766dff86122b9b9_81414046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_27446972766dff86122b9b9_81414046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_52724847866dff86122e5e3_79089659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_52724847866dff86122e5e3_79089659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form 
        id="supportHoursForm" 
        action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"save"));?>
" 
        data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>"save"));?>
"
        method="POST"
        data-check-unsaved-changes
    >
        <input value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("id");?>
" class="form-control " type="hidden" name="id">
        <input type="hidden" value="saveOperatingHours" name="action">
        <div class="block">
            <div class="block__body">
                <div class="section">
                    <h3 class="section__title">
                        Operating Hours
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->item['operating_hours']), 0, false);
?>
                    </h3>
                    <div class="panel panel--collapse widget widget--support of-visible">
                        <label class="widget__top top m-b-0x">
                            <h6 class="top__title">
                                Operating Hours
                            </h6>
                        </label>
                        <div class="widget__body">
                            <div class="widget__content">
                                <div class="form-group form-group--row">
                                    <label class="form-label">
                                        Operating days
                                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['operating_days']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['operating_days']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['operating_days']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['operating_days']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['operating_days']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                        <?php }?>
                                    </label>
                                    <select class="form-control form-control--sm multiselect form-control--basic display-pages" name="settings[days][]" id="sidebar-pages" multiple data-selectize-all>
                                        <option value="all" <?php if (!(($_smarty_tpl->tpl_vars['extension']->value->getItemData("days") !== null )) || !is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) || count($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) == 0 || in_array('all',$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>All</option>
                                        <option value="mon" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("mon",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Monday</option>
                                        <option value="tue" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("tue",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Tuesday</option>
                                        <option value="wed" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("wed",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Wednesday</option>
                                        <option value="thu" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("thu",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Thursday</option>
                                        <option value="fri" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("fri",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Friday</option>
                                        <option value="sat" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("sat",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Saturday</option>
                                        <option value="sun" <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("days")) && in_array("sun",$_smarty_tpl->tpl_vars['extension']->value->getItemData("days"))) {?>selected<?php }?>>Sunday</option>
                                    </select>
                                </div>
                                <div class="form-group form-group--row" data-working-hours-container>
                                    <label class="form-label">
                                        Working hours
                                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['working_hours']) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['working_hours']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['working_hours']['url'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['working_hours']['url'])."' target='_blank'>Learn More</a>");?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['working_hours']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                        <?php }?>
                                    </label>
                                    <div class="d-flex form-display-hours">
                                        <select class="form-control time-select w-100" name="settings[work_hours_begin]" data-working-hours-begin <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData('all_day')) {?>disabled<?php }?>>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getTimeOptions($_smarty_tpl->tpl_vars['extension']->value->getItemData('work_hours_begin')), 'timeOption');
$_smarty_tpl->tpl_vars['timeOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['timeOption']->value) {
$_smarty_tpl->tpl_vars['timeOption']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['timeOption']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['timeOption']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['timeOption']->value['label'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <div class="divider-pause">
                                            <div>-</div>
                                        </div>
                                        <select class="form-control time-select w-100" name="settings[work_hours_end]" data-working-hours-end <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData('all_day')) {?>disabled<?php }?>>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getTimeOptions($_smarty_tpl->tpl_vars['extension']->value->getItemData('work_hours_end')), 'timeOption');
$_smarty_tpl->tpl_vars['timeOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['timeOption']->value) {
$_smarty_tpl->tpl_vars['timeOption']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['timeOption']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['timeOption']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['timeOption']->value['label'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <label class="m-l-2x is-pointer d-flex align-items-center">    
                                        <span class="d-flex align-items-center form-text m-b-0x m-r-2x">
                                            All day
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['all_day']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['all_day']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['all_day']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['all_day']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['all_day']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>                                
                                        <div class="switch switch--primary">
                                            <input type="hidden" name="settings[all_day]" value="0">
                                            <input class="switch__checkbox" name="settings[all_day]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData('all_day')) {?>checked=""<?php }?> data-working-hours-all-day>
                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                        </div>     
                                    </label>
                                </div>
                                <div class="form-group form-group--row">
                                    <label class="is-pointer">
                                        <span class="form-label">
                                            Apply holidays
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['apply_holidays']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['apply_holidays']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['apply_holidays']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['apply_holidays']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['operating_hours']['apply_holidays']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <div class="switch switch--primary">
                                            <input type="hidden" name="settings[apply_holidays]" value="0">
                                            <input class="switch__checkbox" name="settings[apply_holidays]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData('apply_holidays') || $_smarty_tpl->tpl_vars['extension']->value->getItemData('apply_holidays') != "0") {?>checked=""<?php }?>>
                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                        </div>  
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__sidebar block__sidebar--md">
                <div class="section">
                    <h3 class="section__title">
                        Settings
                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->item['settings']), 0, true);
?>
                    </h3>
                    <div class="section__body">
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    General
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group" data-support-hours-translation-container>
                                        <label class="form-label">
                                            <span class="text-default form-text d-flex align-items-center">
                                                Name
                                                <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['name']) {?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['name']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['name']['url'] != '') {?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['name']['url'])."' target='_blank'>Learn More</a>");?>
                                                    <?php } else { ?>
                                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['name']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                                <?php }?>
                                            </span>
                                            <a 
                                                class="form-label__translate" 
                                                href="#supportHoursTranslationModal" 
                                                data-support-hours-translation 
                                                data-toggle="lu-modal" 
                                                data-backdrop="static" 
                                                data-keyboard="false"
                                            >
                                                Translate
                                            </a>
                                        </label>
                                        <div class="form-group">
                                            <input 
                                                type="text"
                                                lu-required
                                                class="form-control" 
                                                data-support-hours-translation-input 
                                                value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getItemData("name");?>
" 
                                                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                                            >
                                            <input 
                                                type="hidden" 
                                                class="form-control" 
                                                data-support-hours-translation-value 
                                                name="settings[name]" 
                                                value="<?php echo $_smarty_tpl->tpl_vars['extension']->value->getTranslationData("name");?>
"
                                            >
                                            <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span>  
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x" style="flex-grow: 1">
                                            Activate instance
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['activate_instance']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['activate_instance']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['activate_instance']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['activate_instance']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['general']['activate_instance']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <label>
                                            <div class="switch switch--primary">
                                                <input type="hidden" name="settings[activated]" value=0>
                                                <input class="switch__checkbox" name="settings[activated]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getItemData("activated")) {?>checked<?php }?>>
                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    Display
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group">
                                        <span class="form-label text-default form-text m-r-2x " style="flex-grow: 1">
                                            Support department
                                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['display']['support_departments']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['display']['support_departments']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['display']['support_departments']['url'] != '') {?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['display']['support_departments']['url'])."' target='_blank'>Learn More</a>");?>
                                                <?php } else { ?>
                                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->item['settings']['display']['support_departments']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                            <?php }?>
                                        </span>
                                        <select class="form-control form-control--sm multiselect form-control--basic display-pages" name="settings[departments][]" multiple data-selectize-all>
                                            <option value="all" <?php if (!(($_smarty_tpl->tpl_vars['extension']->value->getItemData("departments") !== null )) || !is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("departments")) || count($_smarty_tpl->tpl_vars['extension']->value->getItemData("departments")) == 0 || in_array('all',$_smarty_tpl->tpl_vars['extension']->value->getItemData("departments"))) {?>selected<?php }?>>All</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getSupportDepartments(), 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
                                            <option <?php if (is_array($_smarty_tpl->tpl_vars['extension']->value->getItemData("departments")) && in_array($_smarty_tpl->tpl_vars['department']->value->id,$_smarty_tpl->tpl_vars['extension']->value->getItemData("departments"))) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['department']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['department']->value->name;?>
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
        </div>
    </form>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-scripts"} */
class Block_54984096666dff8612865d1_02523847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_54984096666dff8612865d1_02523847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->extensionAdminScript('supporthours','support-hours.js');?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
/* {block "template-actions"} */
class Block_52808902666dff861287803_02143074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_52808902666dff861287803_02143074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>                    
                    <button 
                        class="btn btn--primary" 
                        type="button"
                        data-check-unsaved-changes
                        data-changes-save="#supportHoursForm"
                        data-form-validate="#supportHoursForm"
                    >
                        <span class="btn__text">Save Changes</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--outline btn--default" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
">
                        <span class="btn__text">Cancel</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
                <div class="m-l-a">
                    <a class="btn btn--outline btn--default" href="#modal-delete-item" data-toggle="lu-modal" data-check-unsaved-changes>
                        <span class="btn__text">Delete</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_14319927666dff8612894f2_84450283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_14319927666dff8612894f2_84450283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/name-translation-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"item",'label'=>"Support Hours - Item Name Translation"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div id="modal-delete-item" class="modal">
        <div class="modal__dialog">
            <div class="modal__content">
                <div class="modal__top top">
                    <div class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['title'];?>
</div>
                    <div class="top__toolbar">
                        <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                            <i class="btn__icon lm lm-close"></i>
                        </button>
                    </div>
                </div>
                <div class="modal__body">
                    <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['desc'];?>
</p>
                </div>
                <div class="modal__actions">
                    <a class="btn btn--danger" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['extension']->value->getItemData("id"),'exaction'=>"delete"));?>
">
                        Delete
                    </a>
                    <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Cancel</span></button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-modals"} */
}
