<?php
/* Smarty version 3.1.48, created on 2024-09-10 08:48:02
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/form-billing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e007c2e058d7_51018954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afadc29b56ea75d26757ae38bd2a16687e804b5d' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/form-billing.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/overwrites/form-billing.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/register-user-fields.tpl' => 2,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/linkedaccounts.tpl' => 1,
  ),
),false)) {
function content_66e007c2e058d7_51018954 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/form-billing.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/form-billing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>    
    <div class="section">
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['billingdetails'];?>
</h2>
        </div>
        <div class="section-body">
            <?php if ($_smarty_tpl->tpl_vars['custtype']->value != "new" && $_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <input type="hidden" name="custtype" id="inputCustType" value="<?php echo $_smarty_tpl->tpl_vars['custtype']->value;?>
" />
                <div class="panel-group panel-group-condensed m-b-0" id="containerExistingAccountSelect" data-inputs-container>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                        <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['selectedAccountId']->value == $_smarty_tpl->tpl_vars['account']->value->id) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['account']->value->isClosed || $_smarty_tpl->tpl_vars['account']->value->noPermission || $_smarty_tpl->tpl_vars['inExpressCheckout']->value) {?> disabled<?php }?>" data-virtual-input>
                            <div class="panel-heading check">
                                <label class="w-100">
                                    <input id="account<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
" class="icheck-control account-select<?php if ($_smarty_tpl->tpl_vars['account']->value->isClosed || $_smarty_tpl->tpl_vars['account']->value->noPermission || $_smarty_tpl->tpl_vars['inExpressCheckout']->value) {?> disabled<?php }?>" type="radio" name="account_id" value="<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['account']->value->isClosed || $_smarty_tpl->tpl_vars['account']->value->noPermission || $_smarty_tpl->tpl_vars['inExpressCheckout']->value) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['selectedAccountId']->value == $_smarty_tpl->tpl_vars['account']->value->id) {?> checked="checked"<?php }?>>
                                    <div class="check-content d-flex align-center">
                                        <span><?php if ($_smarty_tpl->tpl_vars['account']->value->companyname) {
echo $_smarty_tpl->tpl_vars['account']->value->companyname;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['account']->value->fullName;?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->isClosed || $_smarty_tpl->tpl_vars['account']->value->noPermission) {?>
                                            <div class="label label-default account-select-label">
                                                <?php if ($_smarty_tpl->tpl_vars['account']->value->isClosed) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'closed'),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noPermission'),$_smarty_tpl ) );?>

                                                <?php }?>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['account']->value->currencyCode) {?>
                                            <div class="label label-info account-select-label">
                                                <?php echo $_smarty_tpl->tpl_vars['account']->value->currencyCode;?>

                                            </div>
                                        <?php }?>
                                    </div>
                                </label>
                            </div>
                            <div class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['selectedAccountId']->value == $_smarty_tpl->tpl_vars['account']->value->id) {?>show<?php }?>" data-input-collapse role="tabpanel">
                                <div class="panel-body">
                                    <address class="m-b-0x">
                                        <span class="address-item"><?php echo $_smarty_tpl->tpl_vars['account']->value->email;?>
 </span> <br />
                                        <span class="address-item"><?php echo $_smarty_tpl->tpl_vars['account']->value->address1;
if ($_smarty_tpl->tpl_vars['account']->value->address2) {?>, <?php echo $_smarty_tpl->tpl_vars['account']->value->address2;
}?></span><br />
                                        <span class="address-item"><?php if ($_smarty_tpl->tpl_vars['account']->value->city) {
echo $_smarty_tpl->tpl_vars['account']->value->city;?>
,<?php }
if ($_smarty_tpl->tpl_vars['account']->value->postcode) {?> <?php echo $_smarty_tpl->tpl_vars['account']->value->postcode;
}?></span> <br />
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->state) {?><span class="address-item"><?php echo $_smarty_tpl->tpl_vars['account']->value->state;?>
</span> <br /><?php }?>
                                        <span class="address-item"><?php echo $_smarty_tpl->tpl_vars['account']->value->countryName;?>
</span> <br />
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->phonenumber) {?><span class="address-item"><?php echo $_smarty_tpl->tpl_vars['account']->value->phonenumber;?>
</span><br/><?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->tax_id) {?><span class="address-item"><?php echo $_smarty_tpl->tpl_vars['taxLabel']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['account']->value->tax_id;?>
</span><?php }?>
                                    </address>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="panel panel-check <?php if (!$_smarty_tpl->tpl_vars['selectedAccountId']->value || !is_numeric($_smarty_tpl->tpl_vars['selectedAccountId']->value)) {?> checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['inExpressCheckout']->value) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideCreateSubAccount'] == "1") {?>hidden<?php }?>" data-virtual-input>
                        <div class="panel-heading check">
                            <label>
                                <input class="icheck-control account-select" type="radio" name="account_id" value="new" <?php if (!$_smarty_tpl->tpl_vars['selectedAccountId']->value || !is_numeric($_smarty_tpl->tpl_vars['selectedAccountId']->value)) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['inExpressCheckout']->value) {?> disabled="disabled" class="disabled" <?php }?>>
                                <div class="check-content">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.createAccount'),$_smarty_tpl ) );?>
</span>
                                </div>
                            </label>
                        </div>
                        <div class="panel-collapse collapse  <?php if ($_smarty_tpl->tpl_vars['custtype']->value != "existing") {?>show<?php }?>" data-input-collapse role="tabpanel">
                            <div class="panel-body">
                                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/register-user-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="panel-group panel-group-condensed m-b-0" data-inputs-container>
                    <div class="panel panel-check  <?php if ($_smarty_tpl->tpl_vars['custtype']->value == "existing") {?>checked<?php }?>" data-virtual-input>
                        <div class="panel-heading check">
                            <label>
                                <input type="radio" class="icheck-control" name="custtype" <?php if ($_smarty_tpl->tpl_vars['custtype']->value == "existing") {?>checked<?php }?> value="existing" />
                                <div class="check-content">
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['existingCustomerLogin'];?>
</span>
                                </div>
                            </label>
                        </div>
                        <div class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['custtype']->value == "existing") {?>show<?php }?>" data-input-collapse role="tabpanel">
                            <div class="panel-body">
                                <div class="alert alert-lagom alert-danger w-hidden" id="existingLoginMessage"></div>
                                <div class="inline-form flex-column-sm">
                                        <div class="inline-form-element w-100">
                                        <label for="inputFirstName_exsist" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
</label>
                                        <input type="text" name="loginemail" id="inputLoginEmail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['loginemail']->value;?>
">
                                    </div>
                                    <div class="inline-form-element w-100">
                                        <label for="password_exsist" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                                        <input type="password" name="loginpassword" id="inputLoginPassword" class="form-control">
                                    </div>
                                    <div class="inline-form-element m-r-0">
                                        <label class="control-label hidden-xs">&nbsp;</label>
                                        <button type="button" id="btnExistingLogin" data-btn-loader class="btn btn-block btn-primary btn-md">
                                            <span>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login'),$_smarty_tpl ) );?>

                                            </span>
                                            <div class="loader loader-button">
                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"checkout-existing"), 0, true);
?>
                                <?php if ($_smarty_tpl->tpl_vars['SocialMediaLogInAddonIsActive']->value && $_smarty_tpl->tpl_vars['social_media_login_integration']->value) {?> 
                                    <div class="login-divider">
                                        <span></span>
                                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['or'];?>
</span>
                                        <span></span>
                                    </div> 
                                    <div class="social-media social-media-checkout">
                                        <?php echo $_smarty_tpl->tpl_vars['social_media_login_integration']->value;?>

                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-check  <?php if ($_smarty_tpl->tpl_vars['custtype']->value != "existing") {?>checked<?php }?>" data-virtual-input>
                        <div class="panel-heading check">
                            <label>
                                <input type="radio" class="icheck-control" name="custtype" <?php if ($_smarty_tpl->tpl_vars['custtype']->value != "existing") {?>checked<?php }?> value="new" />
                                <div class="check-content">
                                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['createAccount'];?>
</span>
                                </div>
                            </label>
                        </div>
                        <div class="panel-collapse collapse <?php if ($_smarty_tpl->tpl_vars['custtype']->value != "existing") {?>show<?php }?>" data-input-collapse role="tabpanel">
                            <div class="panel-body social-wide">
                                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/register-user-fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php }?>    <?php }
}
