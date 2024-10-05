<?php
/* Smarty version 3.1.48, created on 2024-10-02 09:22:37
  from '/var/www/html/templates/lagom2/supportticketslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd10dd63a890_52772409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ece5a2a7d64b9ed0128e63bbdab2f6e7f91f5dc3' => 
    array (
      0 => '/var/www/html/templates/lagom2/supportticketslist.tpl',
      1 => 1726738920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd10dd63a890_52772409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>  
    <?php $_smarty_tpl->_assignInScope('iconsPages', array('clientareadomains','supportticketslist','clientareainvoices','clientareaproducts'));?>
    <?php if ($_smarty_tpl->tpl_vars['tickets']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"TicketsList",'filterColumn'=>"2"), 0, true);
?>
        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(document).ready( function ()
            {
                var table = jQuery('#tableTicketsList').removeClass('hidden').DataTable();
                <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'did' || $_smarty_tpl->tpl_vars['orderby']->value == 'dept') {?>
                    table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'subject' || $_smarty_tpl->tpl_vars['orderby']->value == 'title') {?>
                    table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
                    table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'lastreply') {?>
                    table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php }?>
                table.draw();
                jQuery('.table-container').removeClass('loading');
                jQuery('#tableLoading').addClass('hidden');

            });
        <?php echo '</script'; ?>
>
        <div class="table-container loading clearfix">
            <div class="table-top">
                <div class="d-flex">
                    <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingaddonsview'];?>
</label>
                    <div class="dropdown view-filter-btns <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>iconsEnabled<?php }?>">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>
                                <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/status-all.tpl")) {?>
                                    <span class="status-icon status-ticket status-status-all" style="font-size: 0;">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/status-all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                    </span>
                                <?php }?>
                            <?php } else { ?>
                                <span class="status hidden"></span>
                            <?php }?>
                            <span class="filter-name"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.all_entries');?>
</span>
                            <i class="ls ls-caret"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">
                                    <span data-value="all">
                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>
                                            <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/status-all.tpl")) {?>
                                                <span class="status-icon status-ticket status-status-all">
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/status-all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                </span>
                                            <?php }?>
                                            <span class="filter-name"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.all_entries');?>
</span>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.all_entries');?>

                                        <?php }?>
                                    </span>
                                </a>
                            </li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RSTicketsStatuses']->value, 'status', false, 'num');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('statusColor', explode('style="color:',$_smarty_tpl->tpl_vars['status']->value['status']));?> 
                                <?php $_smarty_tpl->_assignInScope('statusColor', explode('">',$_smarty_tpl->tpl_vars['statusColor']->value[1]));?> 
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>
                                    <li>
                                        <a href="#" data-status-color="<?php echo $_smarty_tpl->tpl_vars['statusColor']->value[0];?>
">
                                            <span class="status status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
 <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>dot-hidden<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['status']->value['statustext'];?>
" data-status-class="<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
" data-status="ticket">
                                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>
                                                    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['status']->value['statusClass']).".tpl")) {?>
                                                        <span class="status-icon status-ticket status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
" data-status="ticket">
                                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['statusColor']->value[0];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['status']->value['statusClass']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('statusColor'=>$_prefixVariable1), 0, true);
?>      
                                                        </span>
                                                    <?php } else { ?>
                                                        <span class="status-icon status-icon-ticket status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                        </span>
                                                    <?php }?>  
                                                    <span class="filter-name">
                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['status'],'style="color','class="status dot-hidden" data-status="ticket"');?>

                                                    </span>
                                                <?php } else { ?>                   
                                                    <span class="filter-name">
                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['status'],'style="color','class="status" style="--status-color');?>

                                                    </span>
                                                <?php }?>
                                            </span>
                                        </a>
                                    </li>
                                    <?php } else { ?>
                                        <li><a href="#" data-status-color="<?php echo $_smarty_tpl->tpl_vars['statusColor']->value[0];?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['status'],'style="color','class="status" style="--status-color');?>
</a></li>
                                    <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        
                    </div>
                </div> 
            </div>
                
            <table id="tableTicketsList" class="table table-list">
                <thead>
                    <tr>
                        <th><button type="button" class="btn-table-collapse"></button><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsdepartment'];?>
<span class="sorting-arrows"></span></th>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketssubject'];?>
<span class="sorting-arrows"></span></th>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsstatus'];?>
<span class="sorting-arrows"></span></th>
                        <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketlastupdated'];?>
<span class="sorting-arrows"></span></th>
                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showManageButton'] == "1") {?>
                            <th></th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('ticketColor', explode('style="color:',$_smarty_tpl->tpl_vars['ticket']->value['status']));?> 
                        <?php $_smarty_tpl->_assignInScope('ticketColor', explode('">',$_smarty_tpl->tpl_vars['ticketColor']->value[1]));?>
                    <?php }?>
                        <tr data-url="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
">
                            <td><button type="button" class="btn-table-collapse"></button>
                                <?php echo $_smarty_tpl->tpl_vars['ticket']->value['department'];?>

                            </td>
                            <td>
                                <div class="text-primary">#<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['ticket']->value['sensitiveData'] === true) {?>
                                        <span class="" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('support.sensitive_data_tooltip');?>
">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_9219_3103)">
                                            <path d="M10.6875 0.000244141H1.3125C1.1375 0.000244141 1 0.146911 1 0.333577V6.66691C1 9.60691 3.24375 12.0002 6 12.0002C8.75625 12.0002 11 9.60691 11 6.66691V0.333577C11 0.146911 10.8625 0.000244141 10.6875 0.000244141ZM7 1.52691L2.49375 6.00024H2V1.00024H7V1.52691Z" fill="var(--brand-success)"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_9219_3103">
                                            <rect width="12" height="12" fill="white" transform="translate(0 0.000244141)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                        </span>
                                    <?php }?>
                                </div>
                                <span class="small"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['subject'];?>
</span>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>
                                    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['ticket']->value['statusClass']).".tpl")) {?>
                                        <span class="status-icon status-icon-ticket <?php echo $_smarty_tpl->tpl_vars['ticketColor']->value[0];?>
">
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['ticketColor']->value[0];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['ticket']->value['statusClass']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('statusColor'=>$_prefixVariable2), 0, true);
?>      
                                        </span>
                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ticket']->value['status'],'style="color','class="status status-ticket dot-hidden" style="--status-color');?>

                                    <?php } else { ?>
                                        <span class="status-icon status-icon-ticket">
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                        </span>
                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ticket']->value['status'],'style="color','class="status status-ticket dot-hidden" style="--status-color');?>

                                    <?php }?>     
                                <?php } else { ?>                
                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ticket']->value['status'],'style="color','class="status" style="--status-color');?>

                                <?php }?>  
                                                            </td>
                            <td class="text-center sorting_1 text-nowrap">
                                <span class="hidden"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['normalisedLastReply'];?>
</span>
                                <?php echo $_smarty_tpl->tpl_vars['ticket']->value['lastreply'];?>

                            </td>
                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showManageButton'] == "1") {?>
                                <td class="cell-action">
                                    <a href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
"
                                        class="btn btn-default btn-sm btn-manage"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['manage'];?>
</a>
                                </td>
                            <?php }?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <div class="loader loader-table" id="tableLoading">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>   
            </div>
        </div>            
    <?php } else { ?>
        <div class="message message-no-data">
            <div class="message-image">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ticket"), 0, true);
?>      
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_recent_tickets');?>
</h6>
            <div class="message-action">
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketssubmitticket'];?>

                </a>
            </div>
        </div>
    <?php }
}
}
}
