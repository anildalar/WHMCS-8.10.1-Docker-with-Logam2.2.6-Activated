<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:22:21
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/table-filter-cache-duration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed22adb5bd01_17684152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d3d07d72eedbed92a27ab83b6b25275481f0fbf' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/settings/includes/table-filter-cache-duration.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/popover.tpl' => 1,
  ),
),false)) {
function content_66ed22adb5bd01_17684152 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel--collapse">
    <div class="collapse-toggle">
        <h6 class="top__title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['title'];?>

            <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['table_cache']['title']))) {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['table_cache']['url'])) && $_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['table_cache']['url'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['table_cache']['url'])."' target='_blank'>Learn More</a>");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['tooltips']->value['settings']['general']['table_cache']['title']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
            <?php }?>
        </h6>
        <label>
            <div class="switch" data-toggle="lu-collapse" data-target="#table_cache_config" aria-expanded="true">
                <input type="hidden" name="settings[enable_table_cache]" value="hidden"/>
                <input class="switch__checkbox"
                        name="settings[enable_table_cache]" value="displayed"
                        type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_table_cache'] == "displayed") {?> checked="checked" <?php }?>>
                <span class="switch__container">
                    <span class="switch__handle"></span>
                </span>
            </div>
        </label>
    </div>
    <div class="collapse <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_table_cache'] == "displayed") {?> show <?php }?>" id="table_cache_config">
        <div class="form-group m-b-0x p-3x">
            <label class="form-label text-default">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['label'];?>

            </label>
            <select class="form-control selectized opacity-1" name="settings[table_cache_duration]" tabindex="-1">
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['settings']->value['table_cache_duration'] == 'disabled') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['duration']['disabled'];?>
</option>
                <option value="86400" <?php if ($_smarty_tpl->tpl_vars['settings']->value['table_cache_duration'] == '86400') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['duration']['one_day'];?>
</option>
                <option value="604800" <?php if ($_smarty_tpl->tpl_vars['settings']->value['table_cache_duration'] == '604800') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['duration']['one_week'];?>
</option>
                <option value="1209600" <?php if ($_smarty_tpl->tpl_vars['settings']->value['table_cache_duration'] == '1209600') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['duration']['two_weeks'];?>
</option>
                <option value="2629743" <?php if ($_smarty_tpl->tpl_vars['settings']->value['table_cache_duration'] == '2629743') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['duration']['one_month'];?>
</option>
                <option value="31556926" <?php if ($_smarty_tpl->tpl_vars['settings']->value['table_cache_duration'] == '31556926') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings']['section']['general']['table_cache']['duration']['one_year'];?>
</option>
            </select>
        </div>
    </div>
</div><?php }
}
