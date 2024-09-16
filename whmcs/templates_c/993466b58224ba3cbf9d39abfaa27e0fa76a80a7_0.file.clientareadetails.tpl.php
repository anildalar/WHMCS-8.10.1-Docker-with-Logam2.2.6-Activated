<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:38:08
  from '/var/www/html/templates/lagom2/clientareadetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40800b70816_18143997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '993466b58224ba3cbf9d39abfaa27e0fa76a80a7' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareadetails.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40800b70816_18143997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?> 	
    <?php if ($_smarty_tpl->tpl_vars['successful']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully']), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
    <?php }?>

    <?php if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
        <?php echo '<script'; ?>
>
            var stateNotRequired = true;
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>

    <form method="post" action="?action=details" role="form">
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFirstName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                                    <input type="text" name="firstname" id="inputFirstName" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
"<?php if (in_array('firstname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputLastName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                                    <input type="text" name="lastname" id="inputLastName" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
"<?php if (in_array('lastname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                                    <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
"<?php if (in_array('email',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPhone" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                                    <input type="tel" name="phonenumber" id="inputPhone" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
"<?php if (in_array('phonenumber',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly=""<?php }?> class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputLanguage" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealanguage'];?>
</label>
                                    <select name="accountLanguage" id="inputAccountLanguage" class="form-control"
                                            <?php if (in_array('language',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> disabled="disabled"<?php }?>>
                                        <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'default'),$_smarty_tpl ) );?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value == $_smarty_tpl->tpl_vars['clientLanguage']->value) {?> selected="selected"<?php }?>
                                            ><?php echo ucfirst($_smarty_tpl->tpl_vars['language']->value);?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['billingAddress'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCompanyName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                                    <input type="text" name="companyname" id="inputCompanyName" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
"<?php if (in_array('companyname',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['showTaxIdField']->value) {?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputTaxId" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>$_smarty_tpl->tpl_vars['taxIdLabel']->value),$_smarty_tpl ) );?>
</label>
                                        <input type="text" name="tax_id" id="inputTaxId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientTaxId']->value;?>
"<?php if (in_array('tax_id',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> />
                                    </div>
                                </div>
                            <?php }?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputAddress1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                                    <input type="text" name="address1" id="inputAddress1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
"<?php if (in_array('address1',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputAddress2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                                    <input type="text" name="address2" id="inputAddress2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
"<?php if (in_array('address2',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCity" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                                    <input type="text" name="city" id="inputCity" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
"<?php if (in_array('city',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="country"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['clientcountriesdropdown']->value;?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputState" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                                            <input type="text" name="state" id="inputState" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
"<?php if (in_array('state',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPostcode" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                                            <input type="text" name="postcode" id="inputPostcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
"<?php if (in_array('postcode',$_smarty_tpl->tpl_vars['uneditablefields']->value)) {?> readonly="readonly"<?php }?> class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPaymentMethod" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentmethod'];?>
</label>
                                    <select name="paymentmethod" id="inputPaymentMethod" class="form-control">
                                        <option value="none"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentmethoddefault'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentmethods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['method']->value['sysname'];?>
"<?php if ($_smarty_tpl->tpl_vars['method']->value['sysname'] == $_smarty_tpl->tpl_vars['defaultpaymentmethod']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['method']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputBillingContact" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['defaultbillingcontact'];?>
</label>
                                    <select name="billingcid" id="inputBillingContact" class="form-control">
                                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value['id'] == $_smarty_tpl->tpl_vars['billingcid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['additionalInfo'];?>
</h2>
                </div>
                <div class="section-body">
                    <div class="panel panel-default panel-form">
                        <div class="panel-body">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield', false, 'num');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == 'tickbox') {?>            
                                                <label class="checkbox" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
">
                                                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],'type="checkbox"','class="form-checkbox icheck-control" type="checkbox"');?>

                                                    <?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>

                                                </label>
                                                <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
                                            <?php } else { ?>
                                                <label class="control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                                <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == "link") {?>
                                                    <div class="input-group">
                                                        <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],"<a","<a class='input-group-addon'"),"www","<i class='ls ls-chain'></i>");?>

                                                    </div>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
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
            </div>    
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['emailPreferencesEnabled']->value) {?>
             <div class="section">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacontactsemails'];?>
</h2>
                </div>
                <div class="section-body">
                    <div class="panel panel-default panel-form">
                        <div class="panel-body">    
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emailPreferences']->value, 'value', false, 'emailType');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['emailType']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" name="email_preferences[<?php echo $_smarty_tpl->tpl_vars['emailType']->value;?>
]" value="0">
                                        <input class="icheck-control" type="checkbox" name="email_preferences[<?php echo $_smarty_tpl->tpl_vars['emailType']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['emailType']->value;?>
Emails" value="1"<?php if ($_smarty_tpl->tpl_vars['value']->value) {?> checked="checked"<?php }?> />
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>("emailPreferences.").($_smarty_tpl->tpl_vars['emailType']->value)),$_smarty_tpl ) );?>

                                    </label>
                                </div>    
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>        
                </div>            
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['showMarketingEmailOptIn']->value) {?>
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailMarketing.joinOurMailingList'),$_smarty_tpl ) );?>
</h2>
                </div>
                <div class="section-body">
                    <div class="panel panel-default panel-form">
                        <div class="panel-body">
                            <p><?php echo $_smarty_tpl->tpl_vars['marketingEmailOptInMessage']->value;?>
</p>
                            <div class="panel panel-switch m-w-xs m-b-0">
                                <div class="panel-body">
                                    <span class="switch-label"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.receive_emails');?>
: </span>
                                    <label class="switch switch--lg switch--text">
                                        <input class="switch__checkbox" type="checkbox" name="marketingoptin" value="1"<?php if ($_smarty_tpl->tpl_vars['marketingEmailOptIn']->value) {?> checked<?php }?>>
                                        <span class="switch__container"><span class="switch__handle"></span></span>
                                    </label> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        <?php }?>
        <div class="form-actions">
            <input class="btn btn-primary" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
            <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacancel'];?>
" />
        </div>
    </form>
<?php }?>

<?php }
}
