<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:42:11
  from '/var/www/html/templates/lagom2/supportticketsubmit-steptwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f967434331a5_93626451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ac66a1ae7fba377701145d544e1f684b30ef08' => 
    array (
      0 => '/var/www/html/templates/lagom2/supportticketsubmit-steptwo.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f967434331a5_93626451 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value,'additionalClasses'=>'alert-primary'), 0, true);
?>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTickets']->value && $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value['canCreate']) {?>
        <div class="alert alert-lagom alert-primary alert-info alert-premium-support-tickets">
            <div class="alert-body">
                <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value['haveInCreatePointsMsg'];?>
 <b class="ticket-points"><?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value['havePoints'];?>
</b>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
        
        $(document).ready(function() {
            $('select[name=deptid]').change(function() {
                window.location.href = 'submitticket.php?step=2&deptid='+$(this).val();
            });
        });
        
        <?php echo '</script'; ?>
>
    <?php }?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?step=3" enctype="multipart/form-data" role="form">
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ticketinfo'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientname'];?>
</label>
                                <input type="text" name="name" id="inputName" value="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['fullname'];
} else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" class="form-control<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientemail'];?>
</label>
                                <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group <?php if ($_smarty_tpl->tpl_vars['relatedservices']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideTicketPriority'] != "1") {?>col-md-4<?php } else { ?>col-md-6<?php }?>">
                                <label for="inputDepartment"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsdepartment'];?>
</label>
                                <select name="deptid" id="inputDepartment" class="form-control" onchange="refreshCustomFields(this)">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['department']->value['id'] == $_smarty_tpl->tpl_vars['deptid']->value) {?> selected="selected"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

                                        </option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['relatedservices']->value) {?>
                                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideTicketPriority'] != "1") {?>col-md-4<?php } else { ?>col-md-6<?php }?>">
                                    <label for="inputRelatedService"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['relatedservice'];?>
</label>
                                    <select name="relatedservice" id="inputRelatedService" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['none'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relatedservices']->value, 'relatedservice');
$_smarty_tpl->tpl_vars['relatedservice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['relatedservice']->value) {
$_smarty_tpl->tpl_vars['relatedservice']->do_else = false;
?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServices'] == "1" && !empty($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServicesStatus'])) {?>
                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tickets/hide-inactive-services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"related-services"), 0, true);
?>           
                                            <?php }?>
                                            <?php if (!$_smarty_tpl->tpl_vars['hiddeStatus']->value) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['relatedservice']->value['id'] == $_smarty_tpl->tpl_vars['selectedservice']->value) {?> selected="selected"<?php }?>>
                                                    <?php if ($_smarty_tpl->tpl_vars['relatedservice']->value['groupName']) {
echo $_smarty_tpl->tpl_vars['relatedservice']->value['groupName'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['relatedservice']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['relatedservice']->value['status'];?>
)
                                                </option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideTicketPriority'] != "1") {?>                            
                                <div class="form-group <?php if ($_smarty_tpl->tpl_vars['relatedservices']->value) {?>col-md-4<?php } else { ?>col-md-6<?php }?>">
                                                                        <?php if ($_smarty_tpl->tpl_vars['PremiumSupportTicketsAddonIsActive']->value) {?>
                                        <label for="inputPriority"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketspriority'];?>
</label>
                                        <select name="urgency" id="inputPriority" class="form-control">
                                            <option value="High"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "High") {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencyhigh'];?>
 - <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value['requiredPlusHigh'];?>
 SCP
                                            </option>
                                            <option value="Medium"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Medium" || !$_smarty_tpl->tpl_vars['urgency']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencymedium'];?>
 - <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value['requiredPlusNormal'];?>
 SCP
                                            </option>
                                            <option value="Low"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Low") {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencylow'];?>
 - <?php echo $_smarty_tpl->tpl_vars['PremiumSupportTickets']->value['requiredPlusLow'];?>
 SCP
                                            </option>
                                        </select>                            
                                                                        <?php } else { ?>
                                        <label for="inputPriority"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketspriority'];?>
</label>
                                        <select name="urgency" id="inputPriority" class="form-control">
                                            <option value="High"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "High") {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencyhigh'];?>

                                            </option>
                                            <option value="Medium"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Medium" || !$_smarty_tpl->tpl_vars['urgency']->value) {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencymedium'];?>

                                            </option>
                                            <option value="Low"<?php if ($_smarty_tpl->tpl_vars['urgency']->value == "Low") {?> selected="selected"<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketurgencylow'];?>

                                            </option>
                                        </select>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="inputSubject"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubject'];?>
</label>
                                <input type="text" name="subject" id="inputSubject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" />
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputMessage"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</label>
                                <textarea name="message" id="inputMessage" rows="12" class="form-control markdown-editor" data-auto-save-name="client_ticket_open"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketattachments'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="file-input form-control">
                                    <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
                                    <span class="file-input-button btn btn-default">
                                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('support.select_file');?>

                                    </span>
                                    <span class="file-input-text text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('support.no_file_selected');?>
</span>
                                </div>
                                <div id="fileUploadsContainer"></div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary-faded btn-block add-extra-attachement mob-m-t-2x" data-nofiletext="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('support.no_file_selected');?>
" data-selectfiletext="<?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('support.select_file');?>
" data-removetext="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['remove'];?>
">
                                    <i class="ls ls-plus"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addmore'];?>

                                </button>
                            </div>
                        </div>
                        <p class="ticket-attachments-message">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsallowedextensions'];?>
: <?php echo $_smarty_tpl->tpl_vars['allowedfiletypes']->value;?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"maxFileSize",'fileSize'=>((string)$_smarty_tpl->tpl_vars['uploadMaxFileSize']->value)),$_smarty_tpl ) );?>
)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['sensitiveDataEnabled']->value)) && $_smarty_tpl->tpl_vars['sensitiveDataEnabled']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/SensitiveDataManager/sensitive_data_ticket_open.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <div id="customFieldsContainer">
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/supportticketsubmit-customfields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <div id="autoAnswerSuggestions" class="m-t-4x"></div>
         <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled()) {?>    
            <div class="login-captcha">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <?php }?>
        <div class="form-actions">
            <input type="submit" id="openTicketSubmit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubmit'];?>
" class="btn btn-lg btn-primary disable-on-click<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
" />
            <a href="supporttickets.php" class="btn btn-lg btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
</a>
        </div>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['kbsuggestions']->value) {?>
        <?php echo '<script'; ?>
>
            jQuery(document).ready(function () {
                getTicketSuggestions();
            });
        <?php echo '</script'; ?>
>
    <?php }
}
}
}
