<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:43:07
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/supportGlobalSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff88be5e2d2_94063567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ed7a7f0e711fef24d73383b3c6762a5c07ef22' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/supportGlobalSettings.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl' => 1,
    'file:adminarea/extensions/supporthours/includes/support_hours_tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 4,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
  ),
),false)) {
function content_66dff88be5e2d2_94063567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40125126266dff88be27315_56111583', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118443495966dff88be28db4_47673486', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71758523666dff88be299f6_07239406', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122261411266dff88be59254_56118825', "template-scripts");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92731358666dff88be5a614_25849466', "template-modals");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69959553866dff88be5bf97_46045446', "template-actions");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_40125126266dff88be27315_56111583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_40125126266dff88be27315_56111583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_118443495966dff88be28db4_47673486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_118443495966dff88be28db4_47673486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_71758523666dff88be299f6_07239406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_71758523666dff88be299f6_07239406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="section">
    <h3 class="section__title">
        Settings
        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->settings['settings']), 0, false);
?>
    </h3>
        <div class="section-body panel">
            <form 
                id="supportHoursForm"
                action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
"
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
"
                method="POST"
                data-check-unsaved-changes
            >
                <div class="form-group form-group--row">
                    <label class="form-label">
                        Display on
                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['display_on']) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['display_on']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['display_on']['url'] != '') {?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['display_on']['url'])."' target='_blank'>Learn More</a>");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['display_on']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                        <?php }?>
                    </label>
                    <select class="form-control form-control--sm multiselect form-control--basic display-pages" name="settings[displayed_on][]" id="sidebar-pages" multiple data-selectize-all>
                        <option value="all" <?php if (in_array("all",$_smarty_tpl->tpl_vars['extension']->value->getDisplayedOnPages())) {?>selected<?php }?>>All Support Pages</option>
                        <option value="supportticketslist" <?php if (in_array("supportticketslist",$_smarty_tpl->tpl_vars['extension']->value->getDisplayedOnPages())) {?>selected<?php }?>>Support Ticket List</option>
                        <option value="viewticket" <?php if (in_array("viewticket",$_smarty_tpl->tpl_vars['extension']->value->getDisplayedOnPages())) {?>selected<?php }?>>View Support Ticket</option>
                        <option value="supportticketsubmit-steptwo" <?php if (in_array("supportticketsubmit-steptwo",$_smarty_tpl->tpl_vars['extension']->value->getDisplayedOnPages())) {?>selected<?php }?>>Open Support Ticket</option>
                        <option value="supportticketsubmit-stepone" <?php if (in_array("supportticketsubmit-stepone",$_smarty_tpl->tpl_vars['extension']->value->getDisplayedOnPages())) {?>selected<?php }?>>Support Departments</option>
                    </select>
                </div>
                <div class="form-group form-group--row">
                    <label class="form-label">
                        Time zone
                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_zone']) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_zone']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_zone']['url'] != '') {?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_zone']['url'])."' target='_blank'>Learn More</a>");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_zone']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                        <?php }?>
                    </label>
                    <select class="form-control" name="settings[timezone]">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getTimeZones(), 'timezone');
$_smarty_tpl->tpl_vars['timezone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['timezone']->value) {
$_smarty_tpl->tpl_vars['timezone']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['timezone']->value['label'];?>
" <?php if ($_smarty_tpl->tpl_vars['timezone']->value['selected']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['timezone']->value['label'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group form-group--row">
                    <label class="form-label">
                        Time format
                        <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_format']) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_format']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_format']['url'] != '') {?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_format']['url'])."' target='_blank'>Learn More</a>");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['time_format']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                        <?php }?>
                    </label>
                   <select class="form-control" name="settings[timeformat]">
                        <option value="g:i A" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getExtensionSettings("timeformat") == "g:i A") {?> selected <?php }?>>g:i A (ex. 12:50 am)</option>
                        <option value="G:i" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getExtensionSettings("timeformat") == "G:i") {?> selected <?php }?>>HH:mm (ex. 14:00)</option>
                    </select>
                </div>
                <div class="form-group form-group--row">
                    <label class="is-pointer">
                        <span class="form-label">
                            Show status
                            <?php if ($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['show_status']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['show_status']['url'])) && $_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['show_status']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['show_status']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover popover__top",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['extension']->value->getTooltips()->settings['settings']['show_status']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </span>    
                        <div class="switch switch--success">
                            <input type="hidden" name="settings[status]" value="0">
                            <input class="switch__checkbox" name="settings[status]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['extension']->value->getExtensionSettingValue('status')) {?> checked <?php }?>>
                            <span class="switch__container"><span class="switch__handle <?php if (intval($_smarty_tpl->tpl_vars['template']->value->getVersion()) >= 2) {?>switch__handle--v2<?php }?>"></span></span>
                        </div>
                    </label>
                </div> 
                <input type="hidden" name="action" value="saveSettings">
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-scripts"} */
class Block_122261411266dff88be59254_56118825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_122261411266dff88be59254_56118825',
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
/* {block "template-modals"} */
class Block_92731358666dff88be5a614_25849466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_92731358666dff88be5a614_25849466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
/* {block "template-actions"} */
class Block_69959553866dff88be5bf97_46045446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_69959553866dff88be5bf97_46045446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <button 
                class="btn btn--primary" 
                type="button"
                data-changes-save="#supportHoursForm"  
                data-check-unsaved-changes
            >
                <span class="btn__text">Save Changes</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <a class="btn btn--outline btn--default" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
">
                <span class="btn__text">Cancel</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
}
