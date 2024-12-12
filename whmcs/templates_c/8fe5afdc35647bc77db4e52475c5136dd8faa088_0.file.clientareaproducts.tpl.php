<?php
/* Smarty version 3.1.48, created on 2024-12-12 11:50:57
  from '/var/www/html/templates/lagom2/clientareaproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675ace210671c5_51453639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe5afdc35647bc77db4e52475c5136dd8faa088' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareaproducts.tpl',
      1 => 1733998039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675ace210671c5_51453639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('iconsPages', array('clientareadomains','supportticketslist','clientareainvoices','clientareaproducts'));?>
    <?php if ($_smarty_tpl->tpl_vars['services']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"ServicesList",'filterColumn'=>"3"), 0, true);
?>
        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(document).ready( function ()
            {
                var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
                <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'product') {?>
                    table.order([0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [3, 'asc']);
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'amount' || $_smarty_tpl->tpl_vars['orderby']->value == 'billingcycle') {?>
                    table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'nextduedate') {?>
                    table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'domainstatus') {?>
                    table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php }?>
                table.draw();
                jQuery('.table-container').removeClass('loading');
                jQuery('#tableLoading').addClass('hidden');
            });
        <?php echo '</script'; ?>
>
        <div class="table-container loading">
            <div class="table-top">
                <div class="d-flex">
                    <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingaddonsview'];?>
</label>
                    <div class="dropdown view-filter-btns <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>iconsEnabled<?php }?>" data-table-filters>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RSHookServicesStatuses']->value, 'status', false, 'num');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServices'] == "1" && !empty($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServicesStatus'])) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/services/hide-inactive-services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status-dropdown"), 0, true);
?>                           
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['hiddeStatus']->value) {
if (!$_smarty_tpl->tpl_vars['hideInactiveServices']->value['inactiveServices']) {?>class="hidden"<?php }?> data-table-filters-hidden<?php }?> data-status="<?php echo $_smarty_tpl->tpl_vars['status']->value['status'];?>
">
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
                                    <li <?php if ($_smarty_tpl->tpl_vars['hiddeStatus']->value) {
if (!$_smarty_tpl->tpl_vars['hideInactiveServices']->value['inactiveServices']) {?>class="hidden"<?php }?> data-table-filters-hidden<?php }?> data-status="<?php echo $_smarty_tpl->tpl_vars['status']->value['status'];?>
"><a href="#"><span class="status status-<?php echo $_smarty_tpl->tpl_vars['status']->value['statusClass'];?>
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
                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServices'] == "1" && !empty($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServicesStatus'])) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/services/hide-inactive-services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"switcher"), 0, true);
?>
                <?php }?>  
            </div>
            <table id="tableServicesList" class="table table-list">
                <thead>
                    <tr>
                        <th data-priority="1"><button type="button" class="btn-table-collapse"></button><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddonpricing'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
<span class="sorting-arrows"></span></th>     
                        <th data-priority="2">&nbsp;</th>        
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, 'num');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                        <tr data-url="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
">
                            <td>
                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServices'] == "1" && !empty($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServicesStatus'])) {?>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/services/hide-inactive-services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"table-cell"), 0, true);
?>
                                <?php }?>
                                <button type="button" class="btn-table-collapse"></button>
                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showIdProduct'] == "1") {?>#<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
 - <?php }
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideTabServiceGroup'] != "1") {?><b><?php echo $_smarty_tpl->tpl_vars['service']->value['group'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['service']->value['product'];
} else { ?><b><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</b><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?>
                                <br />
                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSslIcon'] == "0") {?>
                                    <div class="ssl-info" data-element-id="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" data-type="service"<?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?> data-domain="<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
"<?php }?>>
                                        <?php if ($_smarty_tpl->tpl_vars['service']->value['sslStatus']) {?>
                                            <?php $_smarty_tpl->_assignInScope('awords', explode("/",$_smarty_tpl->tpl_vars['service']->value['sslStatus']->getImagePath()));?> 
                                            <?php $_smarty_tpl->_assignInScope('imageSSL', end($_smarty_tpl->tpl_vars['awords']->value));?>
                                            <img id="sslStatus<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/ssl/12x12/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['imageSSL']->value,".png",".svg");?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['service']->value['sslStatus']->getTooltipContent();?>
" width="12px" class="ssl-status<?php echo $_smarty_tpl->tpl_vars['service']->value['sslStatus']->getClass();?>
"/>
                                        <?php } elseif (!$_smarty_tpl->tpl_vars['service']->value['isActive']) {?>
                                            <img id="sslStatus<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/ssl/12x12/ssl-inactive-domain.svg" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.sslInactiveService'),$_smarty_tpl ) );?>
" width="12px" class="ssl-status"/>
                                        <?php }?>
                                    </div>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeUrlFromDomainName'] == "0") {?><a class="text-small" href="http://<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</a><?php } else { ?><span class="text-small"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</span><?php }?>                               
                                <?php }?>
                            </td>
                            <td class="text-nowrap" data-order="<?php echo $_smarty_tpl->tpl_vars['service']->value['amountnum'];?>
">
                                <?php if ((smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['service']->value['amount'],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'') == '0.00' || smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['service']->value['amount'],$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'') == '0,00') && ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled" && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price_value'] == "all")) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
<br /> <span class="small"><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</span>
                                <?php }?> 
                            </td>
                            <td>
                                <?php if ((isset($_smarty_tpl->tpl_vars['autoterminatedays']->value)) && is_array($_smarty_tpl->tpl_vars['autoterminatedays']->value) && (isset($_smarty_tpl->tpl_vars['autoterminatedays']->value[$_smarty_tpl->tpl_vars['service']->value['id']]))) {?>
                                    <span class="small"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('services.trial_ends');?>
</span><br /><?php echo $_smarty_tpl->tpl_vars['autoterminatedays']->value[$_smarty_tpl->tpl_vars['service']->value['id']];?>

                                <?php } else { ?>
                                    <span class="text-nowrap">
                                        <span class="hidden">
                                            <?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>

                                        </span>
                                        <?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>

                                    </span>
                                <?php }?>
                            </td>
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed' && in_array($_smarty_tpl->tpl_vars['templatefile']->value,$_smarty_tpl->tpl_vars['iconsPages']->value)) {?>

                                <td class="text-nowrap">
                                    <span class="status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
 <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>dot-hidden<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>
                                            <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);
$_prefixVariable1=ob_get_clean();
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".$_prefixVariable1.".tpl")) {?>
                                                <span class="status-icon">
                                                    <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/".$_prefixVariable2.".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                </span>
                                            <?php } else { ?>
                                                <span class="status-icon">
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/status-icons/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>      
                                                </span>
                                            <?php }?>                     
                                        <?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>

                                    </span>
                                </td>
                                <?php } else { ?>
                                    <td class="text-nowrap"><span class="status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
                                <?php }?>
                            <td class="cell-action">
                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showManageButton'] == "1") {?>
                                    <a href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"
                                        class="btn btn-default btn-sm btn-manage"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['manage'];?>
</a>
                                <?php } else { ?>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-icon dropdown-toggle" data-toggle="dropdown">
                                            <i class="lm lm-more"></i>
                                        </a>
                                        <ul class="dropdown-menu  pull-right" role="menu">
                                            <li><a
                                                    href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewdetails'];?>
</a>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['service']->value['rawstatus'] == "active" && ($_smarty_tpl->tpl_vars['service']->value['downloads'] || $_smarty_tpl->tpl_vars['service']->value['addons'] || $_smarty_tpl->tpl_vars['service']->value['packagesupgrade'])) {?>
                                                <li class="divider"></li>
                                                <?php if ($_smarty_tpl->tpl_vars['service']->value['downloads']) {?> <li><a
                                                            href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
#tabDownloads"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadstitle'];?>
</a>
                                                </li><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['service']->value['addons']) {?> <li><a
                                                            href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
#tabAddons"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingaddons'];?>
</a>
                                                </li><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['service']->value['packagesupgrade']) {?> <li><a
                                                            href="upgrade.php?type=package&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['upgradedowngradepackage'];?>
</a>
                                                </li><?php }?>
                                                                                            <?php }?>
                                        </ul>
                                    </div>
                                <?php }?>
                            </td>
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
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"service"), 0, true);
?>     
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientHomePanels']['activeProductsServicesNone'];?>
</h6>
            <div class="message-action">
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>

                </a>
            </div>
        </div>
    <?php }
}
}
}
