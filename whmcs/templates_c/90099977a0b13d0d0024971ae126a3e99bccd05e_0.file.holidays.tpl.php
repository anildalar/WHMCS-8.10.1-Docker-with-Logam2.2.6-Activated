<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:43:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/holidays.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff889e53eb6_78428210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90099977a0b13d0d0024971ae126a3e99bccd05e' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/holidays.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl' => 1,
    'file:adminarea/extensions/supporthours/includes/support_hours_tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
    'file:adminarea/extensions/supporthours/includes/removeHolidayConfirm.tpl' => 1,
    'file:adminarea/extensions/supporthours/includes/name-translation-modal.tpl' => 1,
  ),
),false)) {
function content_66dff889e53eb6_78428210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136569768766dff889e376c7_59499729', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180870259466dff889e39ee0_97392133', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170305676766dff889e3abc1_75789836', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156112647266dff889e4f864_87289176', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150376565266dff889e50231_89799483', "template-scripts");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86387334266dff889e513e3_94631635', "template-modals");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_136569768766dff889e376c7_59499729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_136569768766dff889e376c7_59499729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_180870259466dff889e39ee0_97392133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_180870259466dff889e39ee0_97392133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/support_hours_tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_170305676766dff889e3abc1_75789836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_170305676766dff889e3abc1_75789836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="section" data-check-unsaved-changes data-support-hours-holidays>
        <div class="section__header d-flex">
            <h3 class="section__title">
                Holidays
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['extension']->value->getDocs()->holidays['holidays']), 0, false);
?>
            </h3>
            <button type="button" class="m-l-a btn btn--primary" data-support-hours-holidays-add="<?php echo count($_smarty_tpl->tpl_vars['extension']->value->getExtensionHolidays())+1;?>
"><i class="btn__icon lm lm-plus"></i><span class="btn__text">Add New</span></button>
        </div>
        <form 
            class="section__body panel"
            action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
" 
            data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
"
            data-check-unsaved-changes
            method="post" 
            name="" 
            id="holidaysForm"
        >
            <input type="hidden" name="action" value="saveHolidays">
            <ul class="holiday-list" data-support-hours-holidays-list>
                <?php if (count($_smarty_tpl->tpl_vars['extension']->value->getExtensionHolidays()) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getExtensionHolidays(), 'holiday');
$_smarty_tpl->tpl_vars['holiday']->index = -1;
$_smarty_tpl->tpl_vars['holiday']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['holiday']->value) {
$_smarty_tpl->tpl_vars['holiday']->do_else = false;
$_smarty_tpl->tpl_vars['holiday']->index++;
$__foreach_holiday_0_saved = $_smarty_tpl->tpl_vars['holiday'];
?>
                        <li class="holiday-list__item" data-support-hours-holidays-list-item="<?php echo $_smarty_tpl->tpl_vars['holiday']->index;?>
">
                            <input type="hidden" name="holiday[id][]" value="<?php echo $_smarty_tpl->tpl_vars['holiday']->value->id;?>
" data-support-hours-holidays-list-item-id>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-b-0x" data-support-hours-translation-container>
                                        <input 
                                            class="form-control form-control--name" 
                                            value="<?php echo $_smarty_tpl->tpl_vars['holiday']->value->name;?>
" 
                                            data-support-hours-translation-input
                                            data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                                            placeholder="Enter holiday name"
                                            lu-required
                                        >
                                        <input 
                                            type="hidden" name="holiday[name][]" 
                                            value="<?php echo $_smarty_tpl->tpl_vars['holiday']->value->json;?>
" 
                                            data-support-hours-translation-value
                                        >
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
                                        <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="times-container">
                                        <div class="time-col">
                                            <span class="time-select-container">
                                                <input type="date" class="form-control time-select" name="holiday[start][]" value="<?php echo $_smarty_tpl->tpl_vars['holiday']->value->holidays_begin;?>
"/>
                                            </span>
                                        </div>
                                        <div class="form-separator">
                                            -
                                        </div>
                                        <div class="time-col time-col--end">
                                            <span class="time-select-container">
                                                <input type="date" class="form-control time-select" name="holiday[end][]" value="<?php echo $_smarty_tpl->tpl_vars['holiday']->value->holidays_end;?>
"/>
                                            </span>
                                        </div>
                                        <div class="btn-col">
                                            <a 
                                                class="btn btn--icon btn--link btn--holiday" 
                                                href="#" 
                                                data-toggle="lu-modal" 
                                                data-target="#removeHolidayItem"
                                                data-support-hours-holidays-list-item-remove
                                            >
                                                <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="Delete holiday period"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['holiday'] = $__foreach_holiday_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

                <li class="holiday-list__item" data-support-hours-holidays-list-item="<?php echo count($_smarty_tpl->tpl_vars['extension']->value->getExtensionHolidays());?>
">
                    <input type="hidden" name="holiday[id][]" value="" data-support-hours-holidays-list-item-id>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-b-0x" data-support-hours-translation-container>
                                <input 
                                    class="form-control form-control--name" 
                                    value="" 
                                    data-support-hours-translation-input
                                    <?php if (count($_smarty_tpl->tpl_vars['extension']->value->getExtensionHolidays()) == 0) {?>
                                        lu-required
                                    <?php }?>
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Page@updateSeoTranslations',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                                    placeholder="Enter holiday name"
                                >
                                <input 
                                    type="hidden" name="holiday[name][]" 
                                    value="" 
                                    data-support-hours-translation-value
                                >
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
                                <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="times-container times-container--base">
                                <div class="time-col">
                                    <span class="time-select-container">
                                        <input type="date" class="form-control time-select" name="holiday[start][]" value=""/>
                                    </span>
                                </div>
                                <div class="form-separator">
                                    -
                                </div>
                                <div class="time-col time-col--end">
                                    <span class="time-select-container">
                                        <input type="date" class="form-control time-select" name="holiday[end][]" value=""/>
                                    </span>
                                </div>
                                <div class="btn-col">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button 
                type="button" 
                data-changes-save="#holidaysForm" 
                data-form-validate="#holidaysForm"
                data-check-unsaved-changes 
                class="btn btn--primary m-r-2x"
            >
                <span class="btn__text">Save Changes</span>
            </button>
            <button 
                type="button" 
                data-support-hours-holidays-add="<?php echo count($_smarty_tpl->tpl_vars['extension']->value->getExtensionHolidays())+1;?>
" 
                class="btn btn--secondary"
            >
                <i class="btn__icon lm lm-plus"></i>
                <span class="btn__text">Add New</span>
            </button>
        </form>
    </div>
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_156112647266dff889e4f864_87289176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_156112647266dff889e4f864_87289176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "template-actions"} */
/* {block "template-scripts"} */
class Block_150376565266dff889e50231_89799483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_150376565266dff889e50231_89799483',
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
class Block_86387334266dff889e513e3_94631635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_86387334266dff889e513e3_94631635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/removeHolidayConfirm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/supporthours/includes/name-translation-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"holiday",'label'=>"Support Hours - Holiday Name Translation"), 0, false);
}
}
/* {/block "template-modals"} */
}
