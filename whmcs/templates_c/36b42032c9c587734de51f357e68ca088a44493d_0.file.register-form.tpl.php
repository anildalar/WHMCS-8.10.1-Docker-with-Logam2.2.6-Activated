<?php
/* Smarty version 3.1.48, created on 2024-09-23 15:29:11
  from '/var/www/html/templates/lagom2/includes/login/register-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f18947d95ac9_74147436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b42032c9c587734de51f357e68ca088a44493d' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/login/register-form.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f18947d95ac9_74147436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/register-form.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/register-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
        <?php echo '<script'; ?>
>
            var statesTab = 10;
            var stateNotRequired = true;
        <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
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
    <?php if ($_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>((((($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccount']).(' <strong><a href="')).(((string)$_smarty_tpl->tpl_vars['WEB_ROOT']->value))).('/cart.php" class="alert-link">')).($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccountOrder'])).('</a></strong>')), 0, true);
?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
    <?php }?>
    <form method="post" class="loginForm" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form" name="orderfrm" id="frmCheckout">
        <input type="hidden" name="register" value="true"/>
        <div class="section section-sm" id="containerNewUserSignup">
            <?php if ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
                <div class="section section-sm">
                    <div class="section-body">
                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['socialButtons'] == '1') {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"registration"), 0, true);
?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"registration",'circleButtons'=>"true"), 0, true);
?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['SocialMediaLogInAddonIsActive']->value && $_smarty_tpl->tpl_vars['social_media_login_integration']->value) {?> 
                            <div class="login-divider">
                                <span></span>
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['or'];?>
</span>
                                <span></span>
                            </div> 
                            <div class="social-media social-media-login">
                                <?php echo $_smarty_tpl->tpl_vars['social_media_login_integration']->value;?>

                            </div>
                        <?php }?>
                        <div class="login-divider"><span></span><span><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('social.fill_form_below');?>
</span><span></span></div>
                    </div>
                </div>
            <?php }?>
            <div class="section section-sm">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</h2>
                </div>
                <div class="section-body"  id="personalInformation">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="inputFirstName" <?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
 <?php if (in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                </label>
                                <input type="text" name="firstname" id="inputFirstName" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
" <?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="inputLastName" <?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
 <?php if (in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                </label>
                                <input type="text" name="lastname" id="inputLastName" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
" <?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="inputEmail" class="label-required">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>

                                </label>
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="inputPhone" <?php if (!in_array('phonenumber',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
 <?php if (in_array('phonenumber',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                </label>
                                <input type="tel" name="phonenumber" id="inputPhone" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-sm">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['billingAddress'];?>
</h2>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="inputCompanyName" <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'] == "1") {?>class="label-required"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'] == "1") {
} else { ?>(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                </label>
                                <input type="text" name="companyname" id="inputCompanyName" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['companyNameRequired'] == "1") {?>required<?php }?>>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['showTaxIdField']->value) {?>
                            <div class="col-md-6">  
                                <div class="form-group">
                                    <label for="inputTaxId">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>\WHMCS\Billing\Tax\Vat::getLabel()),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)
                                    </label>
                                    <input type="text" name="tax_id" id="inputTaxId" class="form-control" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>\WHMCS\Billing\Tax\Vat::getLabel()),$_smarty_tpl ) );?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['tax_id'];?>
">
                                </div>
                            </div>
                        <?php }?>
                        <div class="col-md-6">    
                            <div class="form-group ">
                                <label for="inputAddress1" <?php if (!in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>> 
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
 <?php if (in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                </label>
                                <input type="text" name="address1" id="inputAddress1" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
"  <?php if (!in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                            </div>
                        </div>
                        <div class="col-md-6">        
                            <div class="form-group ">
                                <label for="inputAddress2">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)
                                </label>
                                <input type="text" name="address2" id="inputAddress2" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="inputCity" <?php if (!in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
 <?php if (in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                </label>
                                <input type="text" name="city" id="inputCity" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
"  <?php if (!in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                            </div>
                        </div>
                        <div class="col-md-6">        
                            <div class="form-group ">
                                <label for="inputCountry"  id="inputCountryIcon" class="label-required">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['country'];?>

                                </label>
                                <select name="country" id="inputCountry" class="form-control">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientcountries']->value, 'countryName', false, 'countryCode');
$_smarty_tpl->tpl_vars['countryName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countryCode']->value => $_smarty_tpl->tpl_vars['countryName']->value) {
$_smarty_tpl->tpl_vars['countryName']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['clientcountry']->value && $_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['defaultCountry']->value) || ($_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['clientcountry']->value)) {?> selected="selected"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['countryName']->value;?>

                                        </option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stateinput" <?php if (!in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
 <?php if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                        </label>
                                        <input type="text" name="state" id="state" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
"  <?php if (!in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputPostcode" <?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> class="label-required" <?php }?>> 
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
 <?php if (in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?>
                                        </label>
                                        <input type="text" name="postcode" id="inputPostcode" class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
" <?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>
            <?php if ($_smarty_tpl->tpl_vars['customfields']->value || $_smarty_tpl->tpl_vars['currencies']->value) {?>
            <div class="section section-sm">    
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
<br><i><small class="text-lighter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.requiredField'),$_smarty_tpl ) );?>
</small></i></h2>
                </div>
                <div class="section-body">
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield', false, 'num');
$_smarty_tpl->tpl_vars['customfield']->iteration = 0;
$_smarty_tpl->tpl_vars['customfield']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->do_else = false;
$_smarty_tpl->tpl_vars['customfield']->iteration++;
$__foreach_customfield_1_saved = $_smarty_tpl->tpl_vars['customfield'];
?>
                                <div class="col-md-6">
                                    <div class="form-group"> 
                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == 'tickbox') {?>            
                                            <label class="checkbox" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
">
                                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['customfield']->value['input'],'type="checkbox"','class="form-checkbox icheck-control" type="checkbox"');?>

                                                <span <?php if ($_smarty_tpl->tpl_vars['customfield']->value['required']) {?> class="label-required"<?php }?>><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
 <?php if (!$_smarty_tpl->tpl_vars['customfield']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?></span>
                                            </label>
                                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span><?php }?>
                                        <?php } else { ?>
                                            <label class="control-label <?php if ($_smarty_tpl->tpl_vars['customfield']->value['required']) {?> label-required<?php }?>" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];
if (!$_smarty_tpl->tpl_vars['customfield']->value['required']) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)<?php }?></label>
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
                                <?php if ($_smarty_tpl->tpl_vars['customfield']->iteration%2 == 0) {?>
                                    </div>
                                    <div class="row">
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="inputCurrency" class="label-required">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>

                                    </label>
                                    <select id="inputCurrency" name="currency" class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'curr');
$_smarty_tpl->tpl_vars['curr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if (!$_POST['currency'] && $_smarty_tpl->tpl_vars['curr']->value['default'] || $_POST['currency'] == $_smarty_tpl->tpl_vars['curr']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="section section-sm<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && !$_smarty_tpl->tpl_vars['securityquestions']->value) {?> hidden<?php }?>" id="containerNewUserSecurity">
            <h5 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['accountSecurity'];?>
</h5>
            <div id="containerPassword" class="row<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && $_smarty_tpl->tpl_vars['securityquestions']->value) {?> hidden<?php }?>">
                <div id="passwdFeedback" style="display: none;" class="alert alert-lagom alert-info text-center col-md-12"></div>
                <div class="col-md-6">
                    <div class="form-group has-feedback" id="newPassword1">
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
" class="form-control" placeholder="" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                        </div> 
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback" id="newPassword2">
                        <label for="inputNewPassword2" class="label-required">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>

                        </label>
                        <input type="password" name="password2" id="inputNewPassword2" class="form-control" placeholder="" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                        <div id="inputNewPassword2Msg"></div>
                    </div>
                </div>     
            </div>
            <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
                <div class="row">
                    <div class="form-group col-md-6">
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
"<?php if ($_smarty_tpl->tpl_vars['question']->value['id'] == $_smarty_tpl->tpl_vars['securityqid']->value) {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="inputSecurityQAns" class="label-required">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>

                            </label>
                            <input type="password" name="securityqans" id="inputSecurityQAns" class="form-control" placeholder="" autocomplete="off">
                        </div>
                    </div>
                </div>
            <?php }?>    
        </div> 
        <?php if ($_smarty_tpl->tpl_vars['showMarketingEmailOptIn']->value) {?>
            <div class="section section-sm <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideJoinToMailingList'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideJoinToMailingList'] == "1") {?> hidden<?php }?>">
                <div class="section-header">
                    <h2 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailMarketing.joinOurMailingList'),$_smarty_tpl ) );?>
</h2>
                    <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['marketingEmailOptInMessage']->value;?>
</p>
                </div>
                <div class="panel panel-switch m-w-xs">
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
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
        <div class="section section-sm">
            <div class="section-body">
                <div class="checkbox">
                    <label>
                        <input class="icheck-control accepttos" type="checkbox" name="accepttos">
                        <span class="label-required"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></span>
                    </label>
                </div>
            </div>
        </div>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <div class="form-actions">
                        <button type="submit" class="btn btn-lg btn-primary btn-block <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
                <span class="btn-text">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>

                </span>
                <div class="loader loader-button hidden" >
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                </div>
            </button>
        </div>
    </form>
    <?php }?>    
<?php }?>    <?php }
}
