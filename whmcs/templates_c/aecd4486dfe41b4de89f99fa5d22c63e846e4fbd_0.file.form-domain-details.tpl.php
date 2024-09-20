<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:23:37
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/form-domain-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5b39a01733_00062105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aecd4486dfe41b4de89f99fa5d22c63e846e4fbd' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/form-domain-details.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/overwrites/form-domain-details.tpl' => 1,
  ),
),false)) {
function content_66ed5b39a01733_00062105 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/form-domain-details.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/form-domain-details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['domainsinorder']->value) {?>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrantinfo'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-form m-b-0">
                    <div class="panel-body">
                        <div class="section">
                            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['domainAlternativeContact'];?>
</p>
                            <select name="contact" id="inputDomainContact" class="form-control <?php if ($_smarty_tpl->tpl_vars['contact']->value == "addingnew") {?>m-b-40<?php }?>">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domaincontacts']->value, 'domcontact');
$_smarty_tpl->tpl_vars['domcontact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domcontact']->value) {
$_smarty_tpl->tpl_vars['domcontact']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['domcontact']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['contact']->value == $_smarty_tpl->tpl_vars['domcontact']->value['id']) {?> selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['domcontact']->value['name'];?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <option value="addingnew" <?php if ($_smarty_tpl->tpl_vars['contact']->value == "addingnew") {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavaddcontact'];?>
...
                                </option>
                            </select>
                        </div>
                        <div class="section <?php if ($_smarty_tpl->tpl_vars['contact']->value != "addingnew") {?> hidden<?php }?>" id="domainRegistrantInputFields">
                            <h6><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCFirstName" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>

                                        </label>
                                        <input type="text" name="domaincontactfirstname" maxlength="50" id="inputDCFirstName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['firstname'];?>
">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCLastName" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>

                                        </label>
                                        <input type="text" name="domaincontactlastname" maxlength="50" id="inputDCLastName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['lastname'];?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCEmail" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>

                                        </label>
                                        <input type="email" name="domaincontactemail" id="inputDCEmail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['email'];?>
">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCPhone" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>

                                        </label>
                                        <input type="tel" name="domaincontactphonenumber" id="inputDCPhone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['phonenumber'];?>
">
                                    </div>
                                </div>
                            </div>
                            <h6 class="m-t-2x"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['billingAddress'];?>
</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCCompanyName" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)
                                        </label>
                                        <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['companyname'];?>
">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCTaxId">
                                            <?php echo $_smarty_tpl->tpl_vars['taxLabel']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)
                                        </label>
                                        <input type="text" name="domaincontacttax_id" id="inputDCTaxId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['tax_id'];?>
">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCAddress1" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>

                                        </label>
                                        <input type="text" name="domaincontactaddress1" id="inputDCAddress1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address1'];?>
">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCAddress2" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>

                                        </label>
                                        <input type="text" name="domaincontactaddress2" id="inputDCAddress2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address2'];?>
">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCCity" class="control-label">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>

                                        </label>
                                        <input type="text" name="domaincontactcity" id="inputDCCity" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['city'];?>
">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputDCPostcode" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['country'];?>
</label>
                                        <select name="domaincontactcountry" id="inputDCCountry" class="form-control">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrylabel', false, 'countrycode');
$_smarty_tpl->tpl_vars['countrylabel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
" <?php if ((!$_smarty_tpl->tpl_vars['domaincontact']->value['country'] && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['domaincontact']->value['country']) {?> selected<?php }?>>
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
                                                <label for="inputDCState" class="control-label">
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>

                                                </label>
                                                <input type="text" name="domaincontactstate" id="inputDCState" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['state'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="inputDCPostcode" class="control-label">
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>

                                                </label>
                                                <input type="text" name="domaincontactpostcode" id="inputDCPostcode" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['postcode'];?>
">
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
}
