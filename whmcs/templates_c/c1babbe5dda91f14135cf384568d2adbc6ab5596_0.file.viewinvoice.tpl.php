<?php
/* Smarty version 3.1.48, created on 2024-10-02 09:04:22
  from '/var/www/html/templates/lagom2/viewinvoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd0c964c6b54_21515801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1babbe5dda91f14135cf384568d2adbc6ab5596' => 
    array (
      0 => '/var/www/html/templates/lagom2/viewinvoice.tpl',
      1 => 1725455022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd0c964c6b54_21515801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['invalidInvoiceIdRequested']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoiceserror']), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php if (strstr($_smarty_tpl->tpl_vars['paymentmethod']->value,"Bank Transfer")) {?>
            <?php $_smarty_tpl->_assignInScope('bankTransfer', true);?>
        <?php }?>
        <div class="invoice">
            <?php if ($_smarty_tpl->tpl_vars['paymentSuccessAwaitingNotification']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicePaymentSuccessAwaitingNotify']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['paymentSuccess']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentsuccessconfirmation']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['paymentInititated']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicePaymentInitiated']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['pendingReview']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentpendingreview']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['paymentFailed']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentfailedconfirmation']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['offlineReview']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['invoiceofflinepaid']), 0, true);
?>
            <?php }?>
            <div class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-7">
                            <span class="invoice-title"> <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>

                                <?php if ($_smarty_tpl->tpl_vars['status']->value == "Draft") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdraft'];?>
</span>                                    
                                <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Unpaid") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesunpaid'];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Paid") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespaid'];?>
</span>                                   
                                <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Refunded") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesrefunded'];?>
</span>                                          
                                <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Cancelled") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescancelled'];?>
</span>         
                                <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Collections") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescollections'];?>
</span>         
                                <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Payment Pending") {?>
                                    <span class="invoice-status label <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] != "modern") {?>label-lg<?php }?> label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesPaymentPending'];?>
</span>          
                                <?php }?>
                            </span>
                        </div>
                        <div class="col-md-5">
                            <ul class="list-info list-info-50">
                                <li>
                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatecreated'];?>
</span>
                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['status']->value == "Unpaid" || $_smarty_tpl->tpl_vars['status']->value == "Draft") {?>
                                    <li>
                                        <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatedue'];?>
</span>
                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['datedue']->value;?>
</span>
                                    </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['status']->value != "Unpaid") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['viewinvoice']['config']['displayDueWhenPaid']) {?>
                                        <li>
                                            <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatedue'];?>
</span>
                                            <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['datedue']->value;?>
</span>
                                        </li>
                                    <?php }?>
                                    <li>
                                        <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</span>
                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;
if ($_smarty_tpl->tpl_vars['paymethoddisplayname']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['paymethoddisplayname']->value;?>
)<?php }?></span>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespayto'];?>
:</h3>
                            <address>
                                <?php echo $_smarty_tpl->tpl_vars['payto']->value;?>

                                <?php if ($_smarty_tpl->tpl_vars['taxCode']->value) {?><br /><?php echo $_smarty_tpl->tpl_vars['taxIdLabel']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['taxCode']->value;
}?>
                            </address>
                        </div>
                        <div class="col-md-5">
                            <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesinvoicedto'];?>
:</h3>
                            <address> 
                                <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['companyname']) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
<br /><?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
<br />
                                <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
<br />
                                <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
<br />
                                <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['country'];?>

                                <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['tax_id']) {?><br /><?php echo $_smarty_tpl->tpl_vars['taxIdLabel']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['tax_id'];
}?>
                                <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                                <br /><br />
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['fieldname'];?>
: <?php echo $_smarty_tpl->tpl_vars['customfield']->value['value'];?>
<br />
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicelineitems'];?>
</h3>
                <div class="section-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th width="61%"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdescription'];?>
</th>
                                    <th width="20%"></th>
                                    <th width="19%" class=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesamount'];?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoiceitems']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];
if ($_smarty_tpl->tpl_vars['item']->value['taxed'] == "true") {?> *<?php }?></td>
                                        <td class=""><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <tr class="sub-total-row first">
                                    <td></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicessubtotal'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['taxname']->value) {?>
                                    <tr class="sub-total-row">
                                        <td></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</td>
                                    </tr>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['taxname2']->value) {?>
                                    <tr class="sub-total-row">
                                        <td></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tax2']->value;?>
</td>
                                    </tr>
                                <?php }?>
                                <tr class="sub-total-row last">
                                    <td></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescredit'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['credit']->value;?>
</td>
                                </tr>
                                <tr class="total-row">
                                    <td></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotal'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                        <p>* <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestaxindicator'];?>
</p>
                    <?php }?>
                </div>
            </div>

            <div class="section">
                <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransactions'];?>
</h3>
                <div class="section-body">
                    <div class="table-responsive">    
                        <table class="table table-condensed m-b-0">
                            <thead>
                                <tr>
                                    <th width="41%" class=""><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['networkissuesdate'];?>
</span></th>
                                    <th width="20%" class=""><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransgateway'];?>
</span></th>
                                    <th width="20%" class=""><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransid'];?>
</span></th>
                                    <th width="19%" class=""><span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransamount'];?>
</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
?>
                                    <tr>
                                        <td class=""><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
</td>
                                        <td class=""><?php echo $_smarty_tpl->tpl_vars['transaction']->value['gateway'];?>
</td>
                                        <td class=""><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transid'];?>
</td>
                                        <td class=""><?php echo $_smarty_tpl->tpl_vars['transaction']->value['amount'];?>
</td>
                                    </tr>
                                <?php
}
if ($_smarty_tpl->tpl_vars['transaction']->do_else) {
?>
                                    <tr>
                                        <td class="" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransnonefound'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <tr class="total-row">
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesbalance'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
                <div class="notes">
                    <div class="notes-heading">
                        <h3 class="notes-title"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesnotes'];?>
</strong></h3>
                    </div>
                    <div class="well notes-body">
                        <?php echo $_smarty_tpl->tpl_vars['notes']->value;?>

                    </div>
                </div>      
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['viewinvoice']['config']['displayBankDetailsOnInvoice'] && $_smarty_tpl->tpl_vars['bankTransfer']->value && $_smarty_tpl->tpl_vars['paymentbutton']->value != '') {?>
                <div class="section section--bank-details">
                    <div class="section-header"><h3 clas="section-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('billing.invoice.bank_transfer_details');?>
</h3></div>
                    <div class="section-body">
                        <?php echo $_smarty_tpl->tpl_vars['paymentbutton']->value;?>
   
                    </div>
                </div>
            <?php }?>
        </div>   
        </div>
        <div class="main-sidebar <?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide') {?> main-sidebar-right <?php }?>">
            <div class="sidebar-sticky" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['status']->value == "Unpaid") {?>
                    <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['sidebarBoxStyle']->value;?>
 view-invoice panel-view-invoice">
                        <div class="panel-body">
                            <div class="price price-sm price-left-h">
                                <span class="price-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotaldue'];?>
</span> 
                                <span class="price-amount"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</span>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <?php if ($_smarty_tpl->tpl_vars['status']->value == "Unpaid" && $_smarty_tpl->tpl_vars['allowchangegateway']->value) {?>
                                <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
:</label>
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
">
                                    <div class="form-group">
                                        <?php echo $_smarty_tpl->tpl_vars['gatewaydropdown']->value;?>

                                    </div>
                                </form>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;
if ($_smarty_tpl->tpl_vars['paymethoddisplayname']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['paymethoddisplayname']->value;?>
)<?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['status']->value == "Unpaid" || $_smarty_tpl->tpl_vars['status']->value == "Draft") {?>
                                <span class="small-text"></span>
                                <div class="payment-form payment-btn-container <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['viewinvoice']['config']['displayGatewayImages'] && !$_smarty_tpl->tpl_vars['bankTransfer']->value) {?>text-center<?php }?>  <?php if ($_smarty_tpl->tpl_vars['bankTransfer']->value) {?>bank-transfer<?php }?>" data-display-button="<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['viewinvoice']['config']['displayGatewayImages']) {?>false<?php } else { ?>true<?php }?>" data-btntext="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
" data-btnsubscribetext="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('billing.subscribe');?>
">
                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['paymentbutton']->value,'<script src="/templates/six/js/scripts.min.js"></script>','');?>

                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['manualapplycredit']->value) {?>
                        <div class="panel panel-sidebar panel-add-funds panel-view-invoice">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditapply'];?>
</h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
">
                                    <input type="hidden" name="applycredit" value="true">                              
                                    <div class="m-b-1x"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditdesc1'];?>
: <b><?php echo $_smarty_tpl->tpl_vars['totalcredit']->value;?>
</b></div>
                                    <div class="form-group">
                                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditamount'];?>
</label>
                                        <input type="text" name="creditamount" value="<?php echo $_smarty_tpl->tpl_vars['creditamount']->value;?>
" class="form-control" />
                                    </div>
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditapply'];?>
" class="btn btn-primary-faded btn-block" />
                                </form>    
                            </div>
                        </div>
                    <?php }?>
                <?php }?>    
                <div class="panel panel-sidebar">
                    <div class="panel-heading">
                        <h6 class="panel-title">
                            <i class="fa fa-bookmark"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['actions'];?>

                            <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                        </h6>
                    </div>
                    <div class="list-group">
                        <a href="dl.php?type=i&amp;id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" class="list-group-item">
                            <i class="ls ls-download"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdownload'];?>

                        </a>
                    </div>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    <?php }
}?>


<?php }
}
