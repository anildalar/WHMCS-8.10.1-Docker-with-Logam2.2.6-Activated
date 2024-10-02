<?php
/* Smarty version 3.1.48, created on 2024-10-02 04:53:11
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/form-payment-gateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcd1b727e277_97052967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612873390b7c46de544b34136693321e73c29836' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/form-payment-gateway.tpl',
      1 => 1725455022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/overwrites/form-payment-gateway.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/existing-paymethods.tpl' => 1,
  ),
),false)) {
function content_66fcd1b727e277_97052967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/form-payment-gateway.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/form-payment-gateway.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="section" id="paymentGatewaysDetails">
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</h2>
        </div>    
        <div class="section-body">
            <div class="panel<?php if (!$_smarty_tpl->tpl_vars['canUseCreditOnCheckout']->value) {?> hidden<?php }?>">
                <div class="panel-body">
                    <div class="credit-balance"><p class="credit-balance-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['availcreditbal'];?>
:</p><span><?php echo $_smarty_tpl->tpl_vars['creditBalance']->value;?>
</span></div>
                    <div id="applyCreditContainer" class="apply-credit-container radio-content" data-apply-credit="<?php echo $_smarty_tpl->tpl_vars['applyCredit']->value;?>
">
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input class="icheck-control" id="useCreditOnCheckout" type="radio" name="applycredit" value="1" <?php if ($_smarty_tpl->tpl_vars['applyCredit']->value) {?> checked<?php }?>>
                                    <span id="spanFullCredit" <?php if (!($_smarty_tpl->tpl_vars['creditBalance']->value->toNumeric() >= $_smarty_tpl->tpl_vars['total']->value->toNumeric())) {?> class="hidden"<?php }?>>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.applyCreditAmountNoFurtherPayment','amount'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

                                    </span>
                                    <span id="spanUseCredit" <?php if ($_smarty_tpl->tpl_vars['creditBalance']->value->toNumeric() >= $_smarty_tpl->tpl_vars['total']->value->toNumeric()) {?> class="hidden"<?php }?>>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.applyCreditAmount','amount'=>$_smarty_tpl->tpl_vars['creditBalance']->value),$_smarty_tpl ) );?>

                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="radio m-b-0">
                                <label>
                                    <input id="skipCreditOnCheckout" class="icheck-control" type="radio" name="applycredit" value="0" <?php if (!$_smarty_tpl->tpl_vars['applyCredit']->value) {?> checked<?php }?>>
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.applyCreditSkip','amount'=>$_smarty_tpl->tpl_vars['creditBalance']->value),$_smarty_tpl ) );?>
</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <?php if (!$_smarty_tpl->tpl_vars['inExpressCheckout']->value) {?>
            <div id="paymentGatewaysContainer">
                <div class="section">
                    <div class="section-body">
                        <div class="panel-group panel-group-condensed m-b-0" data-inputs-container>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
                                <div class="panel panel-check <?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value == $_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?>checked<?php }?> <?php echo smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['gateway']->value['sysname'], 'UTF-8')," ","-");?>
" data-virtual-input>
                                    <div class="panel-heading check">
                                        <label>
                                            <input type="radio" name="paymentmethod" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" data-payment-type="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['payment_type'];?>
" data-show-local="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['show_local_cards'];?>
" data-remote-inputs="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['uses_remote_inputs'];?>
" class="icheck-control payment-methods<?php if ($_smarty_tpl->tpl_vars['gateway']->value['type'] == "CC") {?> is-credit-card<?php }?>" <?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value == $_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?> checked<?php }?> />
                                            <div class="check-content">
                                                <span><?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>
</span>
                                            </div>
                                            <?php $_smarty_tpl->_assignInScope('gatewayIcon', smarty_modifier_replace(mb_strtolower($_smarty_tpl->tpl_vars['gateway']->value['sysname'], 'UTF-8')," ","-"));?>
                                            <span class="check-icon" data-gateway-icon-name="<?php echo $_smarty_tpl->tpl_vars['gatewayIcon']->value;?>
">
                                                <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/gateways/".((string)$_smarty_tpl->tpl_vars['gatewayIcon']->value).".png")) {?>
                                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/gateways/<?php echo $_smarty_tpl->tpl_vars['gatewayIcon']->value;?>
.png" alt="" />
                                                <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/gateways/".((string)$_smarty_tpl->tpl_vars['gatewayIcon']->value).".svg")) {?>
                                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/gateways/<?php echo $_smarty_tpl->tpl_vars['gatewayIcon']->value;?>
.svg" alt="" />
                                                <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/gateways/gateway-".((string)$_smarty_tpl->tpl_vars['gatewayIcon']->value).".tpl")) {?>
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/gateways/gateway-".((string)$_smarty_tpl->tpl_vars['gatewayIcon']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/gateway-".((string)$_smarty_tpl->tpl_vars['gatewayIcon']->value).".tpl")) {?>
                                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/gateway-".((string)$_smarty_tpl->tpl_vars['gatewayIcon']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php }?>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="alert alert-lagom alert-danger text-center gateway-errors w-hidden m-t-5x"></div>
                    </div>
                </div>
                <div class="section" id="paymentGatewayInput"></div>                
                <div class="section<?php if ($_smarty_tpl->tpl_vars['selectedgatewaytype']->value != "CC") {?> hidden<?php }?>" id="creditCardInputFields">
                    <div class="section-heading">
                        <h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['paymentDetails'];?>
</h3>
                    </div>
                    <div class="panel panel-form" data-input-collapse role="tabpanel">
                        <div class="cc-input-container">
                            <?php if ($_smarty_tpl->tpl_vars['client']->value && $_smarty_tpl->tpl_vars['client']->value->payMethods->count() !== 0) {?>
                                <ul class="panel-tabs nav nav-tabs">
                                    <li class="active">
                                        <a href="#existingCardsContainer" data-radio-tab aria-expanded="true">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcarduseexisting'];?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#newCardInfoTab" data-radio-tab data-radio-target="#new" aria-expanded="true">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardenternewcard'];?>

                                        </a>
                                    </li>
                                </ul>
                            <?php } else { ?>
                                <label class="hidden radio-inline">
                                    <input type="radio" name="ccinfo" class="icheck-control" value="new" id="new" <?php if (!$_smarty_tpl->tpl_vars['client']->value || $_smarty_tpl->tpl_vars['client']->value->payMethods->count() === 0) {?> checked="checked"<?php }?> />
                                </label>
                            <?php }?>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['client']->value && $_smarty_tpl->tpl_vars['client']->value->payMethods->count() !== 0) {?>
                                <div class="tab-content">
                                    <div id="existingCardsContainer" class="tab-pane existing-cc-grid active" data-template="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
">
                                        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/existing-paymethods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <div class="row cvv-input" id="existingCardInfo">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="inputCardCvvExisting" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcvvnumbershort'];?>
</label>
                                                    <div class="form-tooltip">
                                                        <input type="tel" name="cccvv" id="inputCardCVV2" class="form-control" autocomplete="cc-cvc">
                                                        <i class="ls ls-info-circle tooltip-icon" data-cc-popover-show></i>
                                                        <div data-cc-popover class="popover top">
                                                            <div class="arrow"></div>
                                                            <div class="popover-content">
                                                                <img src='<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/ccv.gif' width='180' />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="field-error-msg help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"paymentMethodsManage.cvcNumberNotValid"),$_smarty_tpl ) );?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="newCardInfoTab" class="tab-pane<?php if ($_smarty_tpl->tpl_vars['client']->value->payMethods->count() === 0) {?> active<?php }?>">
                                        <label class="hidden radio-inline" data-new-gateway-label data-default-text-content="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardenternewcard'];?>
">
                                            <input type="radio" name="ccinfo" class="icheck-control"  value="new" id="new"<?php if (!$_smarty_tpl->tpl_vars['client']->value || $_smarty_tpl->tpl_vars['client']->value->payMethods->count() === 0) {?> checked="checked"<?php }?> />
                                        </label>
                                <?php }?>
                                        <div id="newCardInfo">
                                            <div class="row">
                                                <div class="col-md-6 new-card-container" id="cardNumberContainer">
                                                    <div class="form-group fieldgroup-creditcard">
                                                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardnumber'];?>
</label>
                                                        <input type="tel" name="ccnumber" id="inputCardNumber" class="form-control field cc-number-field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cardNumber'];?>
" autocomplete="cc-number" data-message-unsupported="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paymentMethodsManage.unsupportedCardType'),$_smarty_tpl ) );?>
" data-message-invalid="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paymentMethodsManage.cardNumberNotValid'),$_smarty_tpl ) );?>
" data-supported-cards="<?php echo $_smarty_tpl->tpl_vars['supportedCardTypes']->value;?>
">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?>
                                            <div class="row">
                                                <div class="col-sm-6 new-card-container">
                                                    <div class="form-group">
                                                        <label for="inputCardStart" class="control-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardstart'];?>

                                                        </label>
                                                        <input type="tel" name="ccstartdate" id="inputCardStart" class="form-control" placeholder="MM / YY (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardstart'];?>
)" autocomplete="cc-exp">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 new-card-container">
                                                    <div class="form-group">
                                                        <label for="inputCardIssue" class="control-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardissuenum'];?>

                                                        </label>
                                                        <input type="tel" name="ccissuenum" id="inputCardIssue" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardissuenum'];?>
">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="inputCardExpiry" class="control-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardexpires'];?>

                                                        </label>
                                                        <input type="tel" name="ccexpirydate" id="inputCardExpiry" class="form-control" placeholder="MM / YY<?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardexpires'];?>
)<?php }?>" autocomplete="cc-exp">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6" id="cvv-field-container">
                                                    <div class="form-group">
                                                        <label for="inputCardCVV" class="control-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcvvnumbershort'];?>

                                                        </label>
                                                        <div class="form-tooltip">
                                                            <input type="tel" name="cccvv" id="inputCardCVV" class="form-control" autocomplete="cc-cvc">
                                                            <i class="ls ls-info-circle tooltip-icon" data-cc-popover-show></i>
                                                            <div data-cc-popover class="popover top">
                                                                <div class="arrow"></div>
                                                                <div class="popover-content">
                                                                    <img src='<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/ccv.gif' width='180' />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newCardSaveSettings">
                                            <div class="row">
                                                <div class="col-md-6" id="inputDescriptionContainer">
                                                    <div class="form-group m-b-0">
                                                        <label for="inputDescription" class="control-label">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['descriptionInput'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethodsManage']['optional'];?>

                                                        </label>
                                                        <input type="text" class="form-control" id="inputDescription" name="ccdescription" autocomplete="off" value="" />
                                                    </div>
                                                </div>
                                            </div>    
                                            <?php if ($_smarty_tpl->tpl_vars['allowClientsToRemoveCards']->value) {?>
                                                <div class="new-card-container" id="inputNoStoreContainer">
                                                    <input type="hidden" name="nostore" value="1">
                                                    <label class="checkbox">
                                                        <input class="icheck-control" type="checkbox" checked="checked" name="nostore" id="inputNoStore" value="0">
                                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditCardStore'];?>

                                                    </label>
                                                </div>
                                            <?php }?>
                                        </div>
                                <?php if ($_smarty_tpl->tpl_vars['client']->value && $_smarty_tpl->tpl_vars['client']->value->payMethods->count() !== 0) {?>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>                    </div>                </div>            </div>            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['expressCheckoutOutput']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['expressCheckoutOutput']->value;?>

                <?php } else { ?>
                    <p align="center">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'paymentPreApproved','gateway'=>$_smarty_tpl->tpl_vars['expressCheckoutGateway']->value),$_smarty_tpl ) );?>

                    </p>
                <?php }?>
            <?php }?>        </div>    </div><?php }?>    <?php }
}
