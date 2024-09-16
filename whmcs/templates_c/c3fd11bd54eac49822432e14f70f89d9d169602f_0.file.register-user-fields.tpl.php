<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:48:33
  from '/var/www/html/templates/orderforms/lagom2/includes/register-user-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40a71c03315_65879127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3fd11bd54eac49822432e14f70f89d9d169602f' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/register-user-fields.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/overwrites/register-user-fields.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/linkedaccounts.tpl' => 1,
  ),
),false)) {
function content_66e40a71c03315_65879127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/overwrites/register-user-fields.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/overwrites/register-user-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div><?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"checkout-new"), 0, true);
?></div>
    <?php if ($_smarty_tpl->tpl_vars['SocialMediaLogInAddonIsActive']->value && $_smarty_tpl->tpl_vars['social_media_login_integration']->value) {?> 
        <div class="social-media social-media-login">
            <?php echo $_smarty_tpl->tpl_vars['social_media_login_integration']->value;?>
 
        </div>
        <div class="login-divider">
            <span></span>
            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['or'];?>
</span>
        <span></span>
    </div> 
    <?php }?>
 
    <h6><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</h6>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputFirstName" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('firstname',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                </label>
                <input type="text" name="firstname" maxlength="50" id="inputFirstName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
">
            </div>
        </div>
        <div class="col-sm-6"> 
            <div class="form-group">
                <label for="inputLastName" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('lastname',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                </label>
                <input type="text" name="lastname" maxlength="100" id="inputLastName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputEmail" class="control-label label-required">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>

                </label>
                <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>
">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputPhone" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('phonenumber',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('phonenumber',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                </label>
                <input type="tel" name="phonenumber" id="inputPhone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>
">
            </div>
        </div>
    </div>
    <h6 class="m-t-2x"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['billingAddress'];?>
</h6>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputCompanyName" class="control-label <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'] == "1") {?>label-required<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'] == "1") {
} else { ?>(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                </label>
                <input type="text" name="companyname" id="inputCompanyName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
">
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['showTaxIdField']->value) {?>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="inputTaxId">
                        <?php echo $_smarty_tpl->tpl_vars['taxLabel']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)
                    </label>
                    <input type="text" name="tax_id" id="inputTaxId" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['tax_id'];?>
">
                </div>
            </div>
        <?php }?>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputAddress1" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('address1',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('address1',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                </label>
                <input type="text" name="address1" id="inputAddress1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputAddress2" class="control-label">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)
                </label>
                <input type="text" name="address2" id="inputAddress2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="inputCity" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('city',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?> ">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('city',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                </label> 
                <input type="text" name="city" id="inputCity" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label label-required" for="country"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['country'];?>
</label>
                <select name="country" id="inputCountry" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrylabel', false, 'countrycode');
$_smarty_tpl->tpl_vars['countrylabel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
" <?php if ((!$_smarty_tpl->tpl_vars['country']->value && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['country']->value) {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputState" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('state',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?>">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('state',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                        </label>
                        <input type="text" name="state" id="inputState" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="inputPostcode" class="control-label <?php if (!is_array($_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value) || !in_array('postcode',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> label-required<?php }?>">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];
if (is_array($_smarty_tpl->tpl_vars['optionalFields']->value) && in_array('postcode',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                        </label>
                        <input type="text" name="postcode" id="inputPostcode" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
        <h6 class="m-t-2x"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
<br><i><small class="text-lighter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.requiredField'),$_smarty_tpl ) );?>
</small></i></h6>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield', false, 'num');
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == 'tickbox') {?>
                            <label class="checkbox" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],'type="checkbox"','type="checkbox" class="icheck-control"');?>

                                <span <?php if ($_smarty_tpl->tpl_vars['customfield']->value['required']) {?> class="label-required"<?php }?>><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
 <?php if (!$_smarty_tpl->tpl_vars['customfield']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?></span>
                            </label>
                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
                        <?php } else { ?>
                            <label class="control-label <?php if ($_smarty_tpl->tpl_vars['customfield']->value['required']) {?> label-required<?php }?>" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
 <?php if (!$_smarty_tpl->tpl_vars['customfield']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?></label>
                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == "link") {?>
                                <div class="input-group">
                                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],"<a","<a class='input-group-addon'")," www","<i class='ls ls-chain'></i>");?>

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
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>    
    <div id="containerNewUserSecurity" <?php if ((!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") || ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && !$_smarty_tpl->tpl_vars['securityquestions']->value)) {?> class="hidden"<?php }?>>
        <h6 class="m-t-2x"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['accountSecurity'];?>
</h6>
        <div id="containerPassword" class="row<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && $_smarty_tpl->tpl_vars['securityquestions']->value) {?> hidden<?php }?>">
            <div id="passwdFeedback" style="display:none;" class="alert alert-lagom alert-info text-center col-sm-12"></div>
            <div class="col-sm-6">
                <div class="form-group ">
                    <div class="password-content password-content-top password-content-group">
                        <label for="inputNewPassword1" class="label-required">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>

                        </label>
                        <div class="progress m-t-0" id="passwordStrengthBar" style="display: none">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">New Password Rating: 0%</span>
                            </div>
                        </div>
                        <span class="text-small text-lighter password-content-text"><span id="passwordStrengthTextLabel"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.at_least_pass');?>
</span><i data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['passwordtips'];?>
" data-html="true" data-container="body" class="ls ls-info-circle m-l-1x"></i></span>
                    </div>
                    <div class="input-password-strenght">
                        <input type="password" name="password" id="inputNewPassword1" data-error-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;?>
" data-warning-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;?>
" class="form-control" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" <?php }?>>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group ">
                    <label for="inputNewPassword2" class="label-required">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>

                    </label>
                    <input type="password" name="password2" id="inputNewPassword2" class="form-control" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" <?php }?>>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="inputSecurityQId" class="label-required">
                        <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.security_question');?>

                    </label>
                    <select name="securityqid" id="inputSecurityQId" class="form-control">
                        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['securityquestions']->value, 'question');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['question']->value['id'] == $_smarty_tpl->tpl_vars['securityqid']->value) {?> selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>

                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <div class="form-group ">
                        <label for="inputSecurityQAns" class="label-required">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>

                        </label>
                        <input type="password" name="securityqans" id="inputSecurityQAns" class="form-control" autocomplete="off">
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <?php }
}
}
}
