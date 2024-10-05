<?php
/* Smarty version 3.1.48, created on 2024-10-02 09:07:01
  from '/var/www/html/templates/lagom2/clientareainvoices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd0d351cad48_28860166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97d7e023f4654f1e5712384406c6741f86f0d2ca' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareainvoices.tpl',
      1 => 1726738920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd0d351cad48_28860166 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>  
    <?php $_smarty_tpl->_assignInScope('iconsPages', array('clientareadomains','supportticketslist','clientareainvoices','clientareaproducts'));?>
    <?php if ($_smarty_tpl->tpl_vars['invoices']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"InvoicesList",'filterColumn'=>"4"), 0, true);
?>
        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(document).ready( function ()
            {
                var table = jQuery('#tableInvoicesList').removeClass('hidden').DataTable();
                <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'default') {?>
                    table.order([4, 'desc'], 
                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Invoice Number Asc") {?>
                            [0, 'asc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Invoice Number Desc") {?>
                            [0, 'desc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Invoice Date Asc") {?>
                            [1, 'asc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Invoice Date Desc") {?>
                            [1, 'desc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Due Date Asc") {?>
                            [2, 'asc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Due Date Desc") {?>
                            [2, 'desc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Total Asc") {?>
                            [3, 'asc']
                        <?php } elseif ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption'] === "Total Desc") {?>
                            [3, 'desc']            
                        <?php } elseif (!(isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['sortingTableOption']))) {?>
                            [2, 'asc']
                        <?php }?>);
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'invoicenum') {?>
                    table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'date') {?>
                    table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'duedate') {?>
                    table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'total') {?>
                    table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
                    table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
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
                                    <span class="status-icon status-status-all" style="font-size: 0;">
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
                                                <span class="status-icon status-status-all">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RSInvoicesStatuses']->value, 'status', false, 'num');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>
                                    <li>
                                        <a href="#">
                                            <span class="status status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
 <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>dot-hidden<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['status']->value['statustext'];?>
" data-status-class="<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>
                                                    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['status']->value['statusClass']).".tpl")) {?>
                                                        <span class="status-icon status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['status']->value['statusClass']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                        </span>
                                                    <?php } else { ?>
                                                        <span class="status-icon status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
">
                                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                        </span>
                                                    <?php }?>                     
                                                <?php }?>
                                                <span class="filter-name"><?php echo $_smarty_tpl->tpl_vars['status']->value['statustext'];?>
</span>
                                            </span>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li><a href="#"><span class="status status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['status']->value['statustext'];?>
" data-status-class="<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['statustext'];?>
</span></a></li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>       
            </div>
            <table id="tableInvoicesList" class="table table-list">
                <thead>
                    <tr>
                        <th data-priority="1"><button type="button" class="btn-table-collapse"></button><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestitle'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatecreated'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatedue'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotal'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesstatus'];?>
<span class="sorting-arrows"></span></th>          
                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showPdfButton'] == "1") {?>   
                            <th></th> 
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showManageButton'] == "1") {?>
                            <th></th> 
                        <?php }?>     
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice', false, 'num');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
                        <tr data-url="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
">
                            <td><button type="button" class="btn-table-collapse"></button><?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];?>
</td>
                            <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['normalisedDateCreated'];?>
</span><?php echo $_smarty_tpl->tpl_vars['invoice']->value['datecreated'];?>
</td>
                            <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['normalisedDateDue'];?>
</span><?php echo $_smarty_tpl->tpl_vars['invoice']->value['datedue'];?>
</td>
                            <td data-order="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['totalnum'];?>
"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['total'];?>
</td>
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>
                                <td>
                                    <span class="status status-<?php echo $_smarty_tpl->tpl_vars['invoice']->value['statusClass'];?>
 <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>dot-hidden<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>
                                            <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['invoice']->value['statusClass']).".tpl")) {?>
                                                <span class="status-icon">
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".((string)$_smarty_tpl->tpl_vars['invoice']->value['statusClass']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                </span>
                                            <?php } else { ?>
                                                <span class="status-icon">
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                </span>
                                            <?php }?>                     
                                        <?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['invoice']->value['status'];?>

                                    </span>
                                </td>
                            <?php } else { ?>
                                <td><span class="status status-<?php echo $_smarty_tpl->tpl_vars['invoice']->value['statusClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['status'];?>
</span></td>                                
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showPdfButton'] == "1") {?>
                                    <td class="cell-action">
                                            <a href="dl.php?type=i&amp;id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
" class="btn btn-default btn-sm btn-manage"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdownload'];?>
</a>
                                    </td>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showManageButton'] == "1") {?>
                                <td class="cell-action cell-action--last">
                                    <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
" class="btn btn-default btn-sm btn-manage"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['manage'];?>
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
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invoice"), 0, true);
?>       
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesnoinvoices'];?>
</h6>
        </div>
    <?php }
}?>    
<?php }
}
