<?php
/* Smarty version 3.1.48, created on 2024-10-10 11:08:38
  from '/var/www/html/templates/lagom2/clientareaproductdetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6707b5b6957b93_27594089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984fedfdf1248f97c9e080684c832ec5775d02a6' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareaproductdetails.tpl',
      1 => 1728558145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6707b5b6957b93_27594089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value == 'Ocean VoIP Agent Topup') {?>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientsdetails']->value['customfields'], 'customfield');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['id'] == 14) {?>
            <div style="position: absolute; top: 70px; right: 20px; background: linear-gradient(90deg, #007bff, #00c6ff); color: white; padding: 15px 20px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                <h5 style="margin: 0; font-family: Orbitron, sans-serif; font-size: 18px; color: white;">
                    Wallet Balance: <?php echo $_smarty_tpl->tpl_vars['customfield']->value['value'];?>

                </h5>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    


    <div style="text-align: center;" style="padding:0px">
        <img src="https://oceanpbx.club/templates/lagom2/assets/img/page-manager/humanoid.png" alt="AI Graphic" style="max-width: 100%; height: 300px; margin-bottom: 20px;">
        <h4 style="font-family: Orbitron, sans-serif; font-weight: var(--font-weight-h4); line-height: var(--line-height-h4); color: var(--text-heading-color); margin-bottom: var(--headings-margin-bottom); font-size: var(--font-size-h4); text-align: center;">
            Enter your Text or Upload Audio File<br/>Our AI will Call on this no and Play it
        </h4>
    </div>
    
    <div class="content">
    <div class="row text-align-center justify-content-center">
        <div class="col-3">
        <label class="radio">
            <div class="radio-styled checked">
            <input type="radio" class="icheck-control" name="domainoption" value="text" id="selregister" checked="">
            </div>
            <span>Enter Text</span>
        </label>
        </div>
        <div class="col-3">
        <label class="radio">
            <div class="radio-styled">
            <input type="radio" class="icheck-control" name="domainoption" value="audio" id="seltransfer">
            </div>
            <span>Upload Audio</span>
        </label>
        </div>
    </div>
    </div>

    <!-- Text input section -->
    <div class="a_textbox orbitron row mb-3" id="textInputSection">
        <div class="col-12 mb-2 p-0">
            <textarea class="form-control ocean_textarea" rows="4" placeholder="Enter your Text"></textarea>
        </div>
        <div class="col-6 p-0 p-0 pe-1">
            <select class="pe-2 ocean_language" id="languageDropdown" name="language">
            <option value="" selected="">Select Language</option>
            <!-- Add your language options here -->
            </select>
        </div>
        <div class="col-6 p-0 ps-1">
            <select class="ocean_accent" name="accent">
            <option value="" selected="">Select Accent</option>
            <!-- Add your accent options here -->
            </select>
        </div>
    </div>

    <!-- File input section (hidden by default) -->
    <div class="row orbitron mb-3" id="fileInputSection" style="display: none;">
        <div class="col-12 mb-2 p-0">
            <input type="file" class="form-control ocean_file" id="audioFileInput" accept="audio/*">
            <p class="error_class" id="fileErrorMessage" style="color: red; display: none;">Please upload a valid audio file (.mp3, .wav).</p>
        </div>
    </div>

    <!-- Phone number input -->
    <div class="row orbitron">
    <div class="col-12 p-0">
        <textarea class="form-control ocean_number_bulk" rows="4" placeholder="Enter numbers you want to call like -  44123446646,1245789952,445266478"></textarea>
    </div>
    </div>
    <div id="newMessage" style="color: red; font-weight: bold;text-align:center; font-size: 17px;"></div>
    <p class="error_class" style="color: red;"></p>
    <!-- Call Button with Icon -->
    <div class="text-center mt-4">
        <button type="button" class="btn btn-primary btn-lg calling_btn_bulk" id="callButton">
            <i class="fas fa-phone-alt"></i> Call Now
        </button>
    </div>
    <br></br>




<?php }
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideRightBoxWithDetailsUsage'] == "1") {?>
        <?php $_smarty_tpl->_assignInScope('hideDetailsBox', true);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['modules']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['modules'], 'checkModule');
$_smarty_tpl->tpl_vars['checkModule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checkModule']->value) {
$_smarty_tpl->tpl_vars['checkModule']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['checkModule']->value == $_smarty_tpl->tpl_vars['module']->value) {?>
                <?php $_smarty_tpl->_assignInScope('customModuleInfo', true);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['modulecustombuttonresult']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['modulecustombuttonresult']->value == "success") {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'additionalClasses'=>"alert-primary",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['moduleactionsuccess'],'textcenter'=>true,'idname'=>"alertModuleCustomButtonSuccess"), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'additionalClasses'=>"alert-primary",'msg'=>($_smarty_tpl->tpl_vars['LANG']->value['moduleactionfailed']).(' ').($_smarty_tpl->tpl_vars['modulecustombuttonresult']->value),'textcenter'=>true,'idname'=>"alertModuleCustomButtonFailed"), 0, true);
?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['pendingcancellation']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'additionalClasses'=>"alert-primary",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['cancellationrequestedexplanation'],'textcenter'=>true,'idname'=>"alertPendingCancellation"), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['unpaidInvoice']->value) {?>
        <div class="alert alert-lagom alert-primary alert-<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>danger<?php } else { ?>warning<?php }?>" id="alert<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>Overdue<?php } else { ?>Unpaid<?php }?>Invoice">
            <div class="alert-body">
                <?php echo $_smarty_tpl->tpl_vars['unpaidInvoiceMessage']->value;?>

            </div>
            <div class="alert-actions pull-right">
                <a href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['unpaidInvoice']->value;?>
" class="btn btn-xs btn-<?php if ($_smarty_tpl->tpl_vars['unpaidInvoiceOverdue']->value) {?>danger<?php } else { ?>warning<?php }?>">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'payInvoice'),$_smarty_tpl ) );?>

                </a>
            </div>
        </div>
    <?php }?>
    <div class="tab-content margin-bottom <?php if ($_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>details-box-hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeUrlFromDomainName'] == "1") {?>domain-url-disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeProductGroupName'] == "1") {?>product-group-hidden<?php }?>">
        <div class="tab-pane active" id="Overview">
            <?php if ($_smarty_tpl->tpl_vars['tplOverviewTabOutput']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['tplOverviewTabOutput']->value;?>

            <?php } else { ?>
                <?php if (!$_smarty_tpl->tpl_vars['customModuleInfo']->value) {?>
                <div class="product-details clearfix">
                    <div class="row row-eq-height row-eq-height-sm">
                        <div class="<?php if ($_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>col-md-12<?php } else { ?>col-md-6<?php }?>">
                            <div class="product-icon <?php if ($_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?> product-icon-sm<?php }?>">
                                <div class="product-content">
                                    <div class="product-image">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"addon",'onDark'=>true), 0, true);
?>
                                    </div>
                                    <h2 class="product-name"><?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeProductGroupName'] != "1") {?><span class="product-group-name"><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
 - </span><?php }
echo $_smarty_tpl->tpl_vars['product']->value;?>
</h2>
                                </div>    
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>  
                                <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['removeUrlFromDomainName'] != "1") {?><a class="product-footer" href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</a><?php } else { ?><span class="product-footer"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</span><?php }?>
                                <?php }?>
                            </div>
                        </div>
                        <?php if (!$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>
                            <div class="col-md-6">
                                <?php if ($_smarty_tpl->tpl_vars['lastupdate']->value) {?>
                                    <div class="panel panel-default panel-form cpanel-usage-stats" id="cPanelUsagePanel">
                                        <div class="panel-body text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="usage-stats">
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'diskUsage'),$_smarty_tpl ) );?>
</span>
                                                        <input type="text" value="<?php echo substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1);?>
" class="usage-dial" data-bgColor="#e6e8ec" data-fgColor="<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['colorPrimary']) {
echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['colorPrimary'];
} else { ?>#0c70de<?php }?>" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="<?php if (substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1) > 100) {
echo substr($_smarty_tpl->tpl_vars['diskpercent']->value,0,-1);
} else { ?>100<?php }?>" data-readOnly="true" data-width="104" data-thickness=.3 data-height="80" />                          
                                                        <span><?php echo $_smarty_tpl->tpl_vars['diskusage']->value;?>
 M / <?php echo $_smarty_tpl->tpl_vars['disklimit']->value;?>
 M</span>
                                                    </div>    
                                                </div>
                                                <div class="col">
                                                    <div class="usage-stats">
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bandwidthUsage'),$_smarty_tpl ) );?>
</span>
                                                        <input type="text" value="<?php echo substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1);?>
" class="usage-dial" data-bgColor="#e6e8ec" data-fgColor="<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['colorPrimary']) {
echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['vars']['colorPrimary'];
} else { ?>#0c70de<?php }?>" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="<?php if (substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1) > 100) {
echo substr($_smarty_tpl->tpl_vars['bwpercent']->value,0,-1);
} else { ?>100<?php }?>" data-readOnly="true" data-width="104" data-thickness=.3 data-height="80" />
                                                        <span><?php echo $_smarty_tpl->tpl_vars['bwusage']->value;?>
 M / <?php echo $_smarty_tpl->tpl_vars['bwlimit']->value;?>
 M</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.knob.js"><?php echo '</script'; ?>
>
                                            <?php echo '<script'; ?>
 type="text/javascript">
                                                jQuery(function() {
                                                    jQuery(".usage-dial").knob({
                                                        'change': function (v) {},
                                                        draw: function () {
                                                            if ($(this.i).val() > 0){
                                                                $(this.i).val(this.cv + '%');
                                                            }
                                                        }
                                                    });
                                                });
                                            <?php echo '</script'; ?>
>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="text-center limit-near">
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastupdated'];?>
: <?php echo $_smarty_tpl->tpl_vars['lastupdate']->value;?>

                                            </div>
                                        </div>    
                                    </div>     
                                <?php } else { ?>
                                    <div class="product-info">
                                        <ul class="list-info list-info-v">
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</span>
                                                <span class="list-info-text"><span class="status status-<?php echo strtolower($_smarty_tpl->tpl_vars['rawstatus']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</span></span>
                                            </li>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingregdate'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['regdate']->value;?>
</span>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['firstpaymentamount']->value != $_smarty_tpl->tpl_vars['recurringamount']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['firstpaymentamount'];?>
</span>
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>
</span>
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'] && $_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderfree']) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['recurringamount'];?>
</span>
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>
</span>
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['quantitySupported']->value && $_smarty_tpl->tpl_vars['quantity']->value > 1) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quantity'),$_smarty_tpl ) );?>
</span>
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
</span>
                                                </li>  
                                            <?php }?>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderbillingcycle'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['billingcycle']->value;?>
</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>
</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</span>
                                                <span class="list-info-text"> <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>
</span>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['suspendreason']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['suspendreason'];?>
</span>
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['suspendreason']->value;?>
</span>
                                                </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['moduleclientarea']->value) {?>
                <div class="panel panel-default panel-product-details">
                    <div class="panel-body">
                    <div class="module-client-area module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
 p-0">
                        <?php echo $_smarty_tpl->tpl_vars['moduleclientarea']->value;?>

                    </div>
                    </div>
                </div>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output', false, 'k');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
                    <div class="section section-hook-output no-float-banner" data-style-type=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['iconType'];?>
>
                        <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['domain']->value || $_smarty_tpl->tpl_vars['configurableoptions']->value || $_smarty_tpl->tpl_vars['customfields']->value || $_smarty_tpl->tpl_vars['customModuleInfo']->value || $_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>
                <div class="section">
                    <div class="section-body">
                        <div class="panel panel-default">
                            <div class="panel-nav">
                                <ul class="nav nav-tabs">							
                                    <?php if ($_smarty_tpl->tpl_vars['customModuleInfo']->value || $_smarty_tpl->tpl_vars['lastupdate']->value || $_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>
                                    <li>
                                        <a class=" active" href="#billingInfo" data-toggle="tab"><i class="ls ls-wallet"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['billingOverview'];?>
</a>
                                    </li>							
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>
                                        <li>
                                            <a class="<?php if (!$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>active<?php }?>" href="#domain" data-toggle="tab"><i class="ls ls-location"></i> <?php if ($_smarty_tpl->tpl_vars['type']->value == "server") {
echo $_smarty_tpl->tpl_vars['LANG']->value['sslserverinfo'];
} elseif (($_smarty_tpl->tpl_vars['type']->value == "hostingaccount" || $_smarty_tpl->tpl_vars['type']->value == "reselleraccount") && $_smarty_tpl->tpl_vars['serverdata']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['hostingInfo'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingdomain'];
}?></a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                                        <li>
                                            <a class="<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>  active<?php }?>" href="#configoptions" data-toggle="tab"><i class="ls ls-configure"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigpackage'];?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['metricStats']->value) {?>
                                        <li>
                                            <a class="<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?> active<?php }?>"  href="#metrics" data-toggle="tab"><i class="fas fa-chart-line fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['title'];?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                                        <li>
                                            <a class="<?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['metricStats']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?> active<?php }?>" href="#additionalinfo" data-toggle="tab"><i class="ls ls-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['additionalInfo'];?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>               
                            <div class="tab-content">							
                                <?php if ($_smarty_tpl->tpl_vars['customModuleInfo']->value || $_smarty_tpl->tpl_vars['lastupdate']->value || $_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>
                                    <div class="panel-body tab-pane<?php if ($_smarty_tpl->tpl_vars['customModuleInfo']->value || $_smarty_tpl->tpl_vars['lastupdate']->value || $_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?> active<?php }?> billingOverview" id="billingInfo">
                                        <div class="row row-eq-height row-eq-height-sm ">				
                                            <?php if ($_smarty_tpl->tpl_vars['firstpaymentamount']->value != $_smarty_tpl->tpl_vars['recurringamount']->value) {?>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="firstPaymentAmount">
                                                    <div class="col-12" >
                                                        <span class="gray-base">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['firstpaymentamount'];?>

                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="registrationDate">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingregdate'];?>

                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <?php echo $_smarty_tpl->tpl_vars['regdate']->value;?>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'] && $_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderfree']) {?>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="row" id="recurringAmount">
                                                        <div class="col-12">
                                                            <span class="gray-base">
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['recurringamount'];?>

                                                            </span>
                                                        </div>
                                                        <div class="col-12">
                                                            <?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['quantitySupported']->value && $_smarty_tpl->tpl_vars['quantity']->value > 1) {?>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="gray-base">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'quantity'),$_smarty_tpl ) );?>

                                                            </span>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>

                                                        </div>
                                                    </div>
                                                </div> 
                                            <?php }?>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="nextDueDate">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>

                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="billingCycle">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderbillingcycle'];?>

                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <?php echo $_smarty_tpl->tpl_vars['billingcycle']->value;?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="row" id="paymentMethod">
                                                    <div class="col-12">
                                                        <span class="gray-base">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>

                                                        </span>
                                                    </div>
                                                    <div class="col-12">
                                                        <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>
                                <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>active<?php }?>" id="domain">
                                    <ul class="list-info list-info-50 list-info-bordered">
                                        <?php if ($_smarty_tpl->tpl_vars['type']->value == "server") {?>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</span>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['dedicatedip']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['primaryIP'];?>
</span>
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['dedicatedip']->value;?>
</span> 
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['assignedips']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['assignedIPs'];?>
</span>
                                                    <span class="list-info-text"><?php echo nl2br($_smarty_tpl->tpl_vars['assignedips']->value);?>
</span>
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_nameserver_fields'] != "displayed") {?>
                                                <?php $_smarty_tpl->_assignInScope('ns_groups', explode(",",$_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['hide_nameserver_fields']));?>
                                                <?php if (in_array($_smarty_tpl->tpl_vars['groupId']->value,$_smarty_tpl->tpl_vars['ns_groups']->value)) {?>
                                                    <?php $_smarty_tpl->_assignInScope('hideNSFields', true);?>
                                                <?php }?>
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['ns1']->value || $_smarty_tpl->tpl_vars['ns2']->value) && !$_smarty_tpl->tpl_vars['hideNSFields']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameservers'];?>
</span>
                                                    <span class="list-info-text">
                                                        <?php echo $_smarty_tpl->tpl_vars['ns1']->value;?>
<br /><?php echo $_smarty_tpl->tpl_vars['ns2']->value;?>

                                                    </span>
                                                </li>
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php if ($_smarty_tpl->tpl_vars['domain']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomain'];?>
</span>                                                
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<span class="m-h-1x"><a href="http://<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" target="_blank" class="btn btn-default btn-xs" ><?php echo $_smarty_tpl->tpl_vars['LANG']->value['visitwebsite'];?>
</a></span></span>
                                                </li>
                                                <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value) {?>
                                                    <li class="align-center">
                                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['sslState']['sslStatus'];?>
</span>                                                
                                                        <?php $_smarty_tpl->_assignInScope('awords', explode("/",$_smarty_tpl->tpl_vars['sslStatus']->value->getImagePath()));?> 
                                                        <?php $_smarty_tpl->_assignInScope('imageSSL', end($_smarty_tpl->tpl_vars['awords']->value));?>
                                                        <img class="m-r-8 <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->getClass();?>
" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/ssl/12x12/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['imageSSL']->value,".png",".svg");?>
" width="12" data-type="service" data-domain="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" data-showlabel="1"> 
                                                        <span id="statusDisplayLabel">
                                                            <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync()) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->getStatusDisplayLabel();?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>

                                                            <?php }?>
                                                        </span>
                                                    </li>
                                                    <?php if ($_smarty_tpl->tpl_vars['sslStatus']->value->isActive() || $_smarty_tpl->tpl_vars['sslStatus']->value->needsResync()) {?>
                                                    <li>
                                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['sslState']['startDate'];?>
</span>                                                
                                                        <span class="list-info-text" id="ssl-startdate">
                                                            <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->startDate) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->startDate->toClientDateFormat();?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>

                                                            <?php }?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['sslState']['expiryDate'];?>
</span>                                                
                                                        <span class="list-info-text" id="ssl-expirydate">
                                                            <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->expiryDate->toClientDateFormat();?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>

                                                            <?php }?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['sslState']['issuerName'];?>
</span>                                                
                                                        <span class="list-info-text" id="ssl-issuer">
                                                            <?php if (!$_smarty_tpl->tpl_vars['sslStatus']->value->needsResync() || $_smarty_tpl->tpl_vars['sslStatus']->value->issuerName) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['sslStatus']->value->issuerName;?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>

                                                            <?php }?>
                                                        </span>
                                                    </li>
                                                    <?php }?>
                                                <?php }?>                                            
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
                                                <li>
                                                    <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverusername'];?>
</span>
                                                    <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['serverdata']->value) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['hostname']) {?>
                                                    <li>
                                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['servername'];?>
</span>
                                                        <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['serverdata']->value['hostname'];?>
</span>
                                                    </li>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['ipaddress']) {?>
                                                    <li>
                                                        <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregisternsip'];?>
</span>
                                                        <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['serverdata']->value['ipaddress'];?>
</span>
                                                    </li>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value['nameserver1'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver2'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver3'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver4'] || $_smarty_tpl->tpl_vars['serverdata']->value['nameserver5']) {?>
                                                    <li>
                                                        <span class="list-info-title">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainnameservers'];?>

                                                        </span>
                                                        <span class="list-info-text">
                                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                <?php $_smarty_tpl->_assignInScope('key', "nameserver".((string)$_smarty_tpl->tpl_vars['i']->value));?>
                                                                <?php $_smarty_tpl->_assignInScope('keyip', "nameserver".((string)$_smarty_tpl->tpl_vars['i']->value)."ip");?>
                                                                <?php if ($_smarty_tpl->tpl_vars['serverdata']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo $_smarty_tpl->tpl_vars['serverdata']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['serverdata']->value[$_smarty_tpl->tpl_vars['keyip']->value];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>(<?php echo $_smarty_tpl->tpl_vars['serverdata']->value[$_smarty_tpl->tpl_vars['keyip']->value];?>
)<?php }?><br /><?php }?>
                                                            <?php }
}
?>
                                                        </span>
                                                    </li>
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                    </ul> 
                                </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                                <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?> active<?php }?>" id="configoptions">
                                    <ul class="list-info list-info-50 list-info-bordered">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</span>
                                                <span class="list-info-text">
                                                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {
if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['no'];
}
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedoption'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedoption'];
}?>
                                                </span>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['metricStats']->value) {?>
                                    <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?>active<?php }?>" id="metrics">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/clientareaproductusagebilling.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                                <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['domain']->value && !$_smarty_tpl->tpl_vars['customModuleInfo']->value && !$_smarty_tpl->tpl_vars['lastupdate']->value && !$_smarty_tpl->tpl_vars['configurableoptions']->value && !$_smarty_tpl->tpl_vars['metricStats']->value && !$_smarty_tpl->tpl_vars['hideDetailsBox']->value) {?> active<?php }?> " id="additionalinfo">
                                    <ul class="list-info list-info-50 list-info-bordered">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</span>
                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['sslInfo']->value) {?>
                                <div class="tab-pane fade text-center" id="ssl-info">
                                    <?php if ($_smarty_tpl->tpl_vars['sslInfo']->value->active) {?>
                                        <div class="alert alert-lagom alert-primary alert-success" role="alert">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslActive','expiry'=>$_smarty_tpl->tpl_vars['sslInfo']->value->expiryDate->toClientDateFormat()),$_smarty_tpl ) );?>

                                        </div>
                                    <?php } else { ?>
                                        <div class="alert alert-lagom alert-primary alert-warning ssl-required" role="alert">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sslState.sslInactive'),$_smarty_tpl ) );?>

                                        </div>
                                    <?php }?>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>                            
            <?php }?>

        </div>
            
        <div class="tab-pane " id="Downloads">
            <div class="section">
                <div class="section-body">
                    <div class="kbarticles kbdownloads kbdownloads-panels list-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['downloads']->value, 'download');
$_smarty_tpl->tpl_vars['download']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->do_else = false;
?>
                            <div class="kbdownloads-panel list-group-item">
                                <div>
                                    <h6><?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
</h6>
                                    <p><?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>
</p>
                                </div>
                                <a class="btn btn-primary-faded" href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
">
                                    <i class="lm lm-download"></i>
                                </a>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>    
        </div>
        <div class="tab-pane " id="Addons">
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingaddons'];?>
</h2>
                    <?php if ($_smarty_tpl->tpl_vars['addonsavailable']->value) {?>
                        <p class="section-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaProductAddonsAvailable"),$_smarty_tpl ) );?>
</p>
                    <?php }?>
                </div>
                <div class="section-body">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                            <div class="col-md-6">
                                <div class="panel panel-default panel-accent-blue">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showProductAddonsId'] == "1") {?>
                                                #<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
 - 
                                            <?php }?>
                                            <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>

                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-info list-info-50">
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['addon']->value['status'];?>
</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['recurringamount'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>
</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registered'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['addon']->value['regdate'];?>
</span>
                                            </li>
                                            <li>
                                                <span class="list-info-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</span>
                                                <span class="list-info-text"><?php echo $_smarty_tpl->tpl_vars['addon']->value['nextduedate'];?>
</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['addon']->value['managementActions']) {?>
                                        <div class="panel-footer">
                                            <?php echo $_smarty_tpl->tpl_vars['addon']->value['managementActions'];?>

                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane " id="Changepw">
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverchangepassword'];?>
</h2>
                </div>
                <div class="section-body m-w-448">
                    <?php if ($_smarty_tpl->tpl_vars['modulechangepwresult']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['modulechangepwresult']->value == "success") {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'additionalClasses'=>"alert-primary",'msg'=>$_smarty_tpl->tpl_vars['modulechangepasswordmessage']->value,'textcenter'=>true), 0, true);
?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['modulechangepwresult']->value == "error") {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'additionalClasses'=>"alert-primary",'msg'=>preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['modulechangepasswordmessage']->value),'textcenter'=>true), 0, true);
?>
                        <?php }?>
                    <?php }?>
                    <?php echo '<script'; ?>
>
                        window.langPasswordStrength = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
";
                        window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
                        window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
                        window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
                        window.langPasswordTooShort = "<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.at_least_pass');?>
";
                        
                    <?php echo '</script'; ?>
>
                    <form class="using-password-strength" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=productdetails#tabChangepw" role="form">
                        <div class="panel paneldefault panel-form">
                            <div class="panel-body">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                                <input type="hidden" name="modulechangepassword" value="true" />
                                <div id="newPassword1" class="form-group">
                                    <label for="inputNewPassword1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newpassword'];?>
</label>
                                    <div class="input-password-strenght">
                                        <input type="password" class="form-control" id="inputNewPassword1" name="newpw" autocomplete="off" />
                                        <span class="text-small text-lighter"><span id="passwordStrengthTextLabel"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.at_least_pass');?>
</span><i data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['passwordtips'];?>
" data-html="true" data-container="body" class="ls ls-info-circle"></i></span>
                                    </div>
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </div>
                                <div id="newPassword2" class="form-group m-b-0">
                                    <label for="inputNewPassword2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['confirmnewpassword'];?>
</label>
                                    <input type="password" class="form-control" id="inputNewPassword2" name="confirmpw" autocomplete="off" />
                                    <div id="inputNewPassword2Msg"></div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <input class="btn btn-primary" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
                                <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>

    <?php echo '<script'; ?>
>
        let assetsUrl = '<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/svg-illustrations/products/',
            activeStyle = '<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['styles']['iconType'];?>
',
            styleUrl = "";

        
            var hashtable = {};
            hashtable['<img src="assets/img/marketconnect/sitelock/'] = 'sitelock';
            hashtable['<img src="assets/img/marketconnect/weebly/'] = 'weebly';
            hashtable['<img src="assets/img/marketconnect/spamexperts/'] = 'spamexperts';
            hashtable['<img src="assets/img/marketconnect/codeguard/'] = 'codeguard'
            hashtable['<img src="assets/img/marketconnect/marketgoo/'] = 'marketgoo';
            hashtable['<img src="assets/img/marketconnect/sitebuilder/'] = 'sitebuilder';
            hashtable['<img src="assets/img/marketconnect/threesixtymonitoring/'] = 'threesixtymonitoring';
            hashtable['<img src="assets/img/marketconnect/xovinow/'] = 'xovinow';
            hashtable['<img src="assets/img/marketconnect/nordvpn/'] = 'nordvpn';
            hashtable['<img src="assets/img/marketconnect/ox/display-email'] = 'ox';
            function changeLogos() {
                $('#mc-promo-widgets .logo').each(function( index ) {
                    var banner = $(this);
                    $.each(hashtable, function( index, value ) {

                        if (banner.html().includes(index)){
                            if (activeStyle == "modern"){
                                styleUrl = "modern/"
                            }else{
                                styleUrl = ""
                            }
                            banner.html(banner.html().replace(index, ''));
                            banner.load(assetsUrl+styleUrl+value+'.tpl').removeClass('hidden');
                        }
                    });
                });
            };
            $(document).ready(function() {
                changeLogos();
            });
            
    <?php echo '</script'; ?>
>
<?php }
}
}
