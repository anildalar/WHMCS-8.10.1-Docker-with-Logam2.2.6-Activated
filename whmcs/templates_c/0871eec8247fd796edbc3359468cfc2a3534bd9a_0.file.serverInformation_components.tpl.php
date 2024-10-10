<?php
/* Smarty version 3.1.48, created on 2024-10-07 05:14:24
  from '/var/www/html/modules/servers/HetznerVps/app/UI/Product/Templates/pages/serverInformation_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67036e30eaf1d7_99371990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0871eec8247fd796edbc3359468cfc2a3534bd9a' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/app/UI/Product/Templates/pages/serverInformation_components.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67036e30eaf1d7_99371990 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/x-template" id="t-mg-datatable-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :autoload_data_after_created="autoload_data_after_created"
        :start_length="start_length"
>
    <div class="lu-widget widgetActionComponent vueDatatableTable <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getClasses();?>
"  id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
"  namespace="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
" index="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
" actionid="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIndex();?>
">
        <?php if (($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->getTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->titleButtonIsExist()) && $_smarty_tpl->tpl_vars['rawObject']->value->isViewHeader()) {?>
            <div class="lu-widget__header">
                <div class="lu-widget__top lu-top">
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
                        <div class="lu-top__title"">
                            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
                                <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>

                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->titleButtonIsExist()) {?>
                        <div class="lu-top__toolbar">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getTitleButtons(), 'buttonValue', false, 'buttonKey');
$_smarty_tpl->tpl_vars['buttonValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buttonKey']->value => $_smarty_tpl->tpl_vars['buttonValue']->value) {
$_smarty_tpl->tpl_vars['buttonValue']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['buttonValue']->value->getHtml();?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                </div>
            </div>
        <?php }?>
        <div class="lu-widget__body">
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->haveInternalAlertMessage()) {?>
                <div class="lu-alert <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertSize() !== '') {?>lu-alert--<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertSize();
}?> lu-alert--<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertMessageType();?>
 lu-alert--faded modal-alert-top">
                    <div class="lu-alert__body">
                        <?php if (htmlspecialchars_decode($_smarty_tpl->tpl_vars['rawObject']->value->isInternalAlertMessageRaw(), ENT_QUOTES)) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertMessage();
} else {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getInternalAlertMessage()), ENT_QUOTES);
}?>
                    </div>
                </div>
            <?php }?>
            <div class="lu-t-c  datatableLoader" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
" data-table-container data-check-container>

                
                <div class="dataTables_wrapper no-footer">
                    <div>
                        <table class="lu-table lu-table--mob-collapsible no-footer dtr-column" width="100%" role="grid">
                            <thead id="serverInformationTable">
                            <tr role='row'>
                                <?php $_smarty_tpl->_assignInScope('collArrKeys', array_keys($_smarty_tpl->tpl_vars['customTplVars']->value['columns']));?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customTplVars']->value['columns'], 'tplValue', false, 'tplKey');
$_smarty_tpl->tpl_vars['tplValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tplKey']->value => $_smarty_tpl->tpl_vars['tplValue']->value) {
$_smarty_tpl->tpl_vars['tplValue']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->hasMassActionButtons() && $_smarty_tpl->tpl_vars['collArrKeys']->value[0] === $_smarty_tpl->tpl_vars['tplKey']->value) {?>
                                        <th class="<?php if ($_smarty_tpl->tpl_vars['tplValue']->value->orderable) {
echo $_smarty_tpl->tpl_vars['tplValue']->value->orderableClass;
}?> <?php if ($_smarty_tpl->tpl_vars['tplValue']->value->class !== '') {
echo $_smarty_tpl->tpl_vars['tplValue']->value->class;
}?>"
                                            name="<?php echo $_smarty_tpl->tpl_vars['tplValue']->value->name;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isvSortable()) {?>
                                                <span class="drag-and-drop-icon" style="visibility: hidden;"><i class="zmdi zmdi-unfold-more"></i></span>
                                            <?php }?>
                                            <div class="lu-rail">
                                                <div class="lu-form-check">
                                                    <label>
                                                        <input type="checkbox" data-check-all="" class="lu-form-checkbox">
                                                        <span class="lu-form-indicator"></span>
                                                    </label>
                                                </div>
                                                <span class="lu-table__text" <?php if ($_smarty_tpl->tpl_vars['tplValue']->value->orderable) {?>v-on:click="updateSorting"<?php }?>><?php if ($_smarty_tpl->tpl_vars['tplValue']->value->rawTitle) {
echo $_smarty_tpl->tpl_vars['tplValue']->value->rawTitle;
} else {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('table',$_smarty_tpl->tpl_vars['tplValue']->value->title);
}?></span>
                                            </div>
                                        </th>
                                    <?php } else { ?>
                                        <th class="<?php if ($_smarty_tpl->tpl_vars['tplValue']->value->orderable) {
echo $_smarty_tpl->tpl_vars['tplValue']->value->orderableClass;
}?> <?php if ($_smarty_tpl->tpl_vars['tplValue']->value->class !== '') {
echo $_smarty_tpl->tpl_vars['tplValue']->value->class;
}?>" <?php if ($_smarty_tpl->tpl_vars['tplValue']->value->orderable) {?> aria-sort="descending" <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['tplValue']->value->orderable) {?>v-on:click="updateSorting"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['tplValue']->value->name;?>
">
                                            <span class="lu-table__text"><?php if ($_smarty_tpl->tpl_vars['tplValue']->value->rawTitle) {
echo $_smarty_tpl->tpl_vars['tplValue']->value->rawTitle;
} else {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('table',$_smarty_tpl->tpl_vars['tplValue']->value->title);
}?>&nbsp;&nbsp;</span>
                                        </th>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->hasActionButtons()) {?>
                                    <th class="mgTableActionsHeader" name="actionsCol"></th>
                                <?php }?>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="dataRow in dataRows" :actionid="dataRow.<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getActionIdColumnName();?>
" role="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customTplVars']->value['columns'], 'tplValue', false, 'tplKey');
$_smarty_tpl->tpl_vars['tplValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tplKey']->value => $_smarty_tpl->tpl_vars['tplValue']->value) {
$_smarty_tpl->tpl_vars['tplValue']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->hasMassActionButtons() && $_smarty_tpl->tpl_vars['collArrKeys']->value[0] === $_smarty_tpl->tpl_vars['tplKey']->value) {?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['customTplVars']->value['jsDrawFunctions'][$_smarty_tpl->tpl_vars['tplKey']->value]) {?>
                                        <td v-html="rowDrow('<?php echo $_smarty_tpl->tpl_vars['tplKey']->value;?>
', dataRow, '<?php echo $_smarty_tpl->tpl_vars['customTplVars']->value['jsDrawFunctions'][$_smarty_tpl->tpl_vars['tplKey']->value];?>
')"></td>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->hasCustomColumnHtml($_smarty_tpl->tpl_vars['tplKey']->value)) {?>
                                        <td class="mgTableActions">
                                            <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getCustomColumnHtml($_smarty_tpl->tpl_vars['tplKey']->value);?>

                                        </td>
                                    <?php } else { ?>
                                        <td v-html="dataRow.<?php echo $_smarty_tpl->tpl_vars['tplKey']->value;?>
"></td>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->hasActionButtons()) {?>
                                    <td class="lu-cell-actions mgTableActions">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getActionButtons(), 'aButton');
$_smarty_tpl->tpl_vars['aButton']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aButton']->value) {
$_smarty_tpl->tpl_vars['aButton']->do_else = false;
?>
                                            <?php echo $_smarty_tpl->tpl_vars['aButton']->value->getHtml();?>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </td>
                                <?php }?>
                            </tr>
                            </tbody>
                        </table>
                        <div v-show="noData" style="padding: 15px; text-align: center; border-top: 1px solid #e9ebf0;">
                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('noDataAvalible');?>

                        </div>
                        <div class="lu-preloader-container lu-preloader-container--full-screen lu-preloader-container--overlay" v-show="loading">
                            <div class="lu-preloader lu-preloader--sm"></div>
                        </div>
                    </div>


                </div>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['isDebug']->value == true && (count($_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs()) != 0))) {?>
                <div class="lu-row" style="max-width: 95%;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs(), 'value', false, 'varible');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varible']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <div class="lu-col-md-12"><b><?php echo $_smarty_tpl->tpl_vars['varible']->value;?>
</b> = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';</div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
