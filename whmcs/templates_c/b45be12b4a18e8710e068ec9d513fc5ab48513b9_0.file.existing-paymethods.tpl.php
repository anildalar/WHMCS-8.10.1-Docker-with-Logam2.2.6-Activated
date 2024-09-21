<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:39:28
  from '/var/www/html/templates/orderforms/lagom2/includes/existing-paymethods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5ef0e4c7a9_28255128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b45be12b4a18e8710e068ec9d513fc5ab48513b9' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/existing-paymethods.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/overwrites/existing-paymethods.tpl' => 1,
  ),
),false)) {
function content_66ed5ef0e4c7a9_28255128 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/overwrites/existing-paymethods.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/overwrites/existing-paymethods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>

    <?php if ($_smarty_tpl->tpl_vars['selectedAccountId']->value === $_smarty_tpl->tpl_vars['client']->value->id) {?>
    <div class="cc-list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value->payMethods->validateGateways()->sortByExpiryDate(), 'payMethod');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('payMethodExpired', 0);?>
        <?php $_smarty_tpl->_assignInScope('expiryDate', '');?>
        <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isCreditCard()) {?>
            <?php if (($_smarty_tpl->tpl_vars['payMethod']->value->payment->isExpired())) {?>
                <?php $_smarty_tpl->_assignInScope('payMethodExpired', 1);?>
            <?php }?>
    
            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->payment->getExpiryDate()) {?>
                <?php $_smarty_tpl->_assignInScope('expiryDate', $_smarty_tpl->tpl_vars['payMethod']->value->payment->getExpiryDate()->format('m/Y'));?>
            <?php }?>
        <?php }?>
        <div class="cc-item <?php if ($_smarty_tpl->tpl_vars['payMethodExpired']->value) {?>disabled<?php }?>" data-paymethod-id="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            <div class="cc-item-checkbox">
                <input
                    type="radio"
                    name="ccinfo"
                    class="existing-card icheck-control"
                    <?php if ($_smarty_tpl->tpl_vars['payMethodExpired']->value) {?>disabled<?php }?>
                    data-payment-type="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getType();?>
"
                    data-payment-gateway="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->gateway_name;?>
"
                    data-order-preference="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->order_preference;?>
"
                    value="<?php echo $_smarty_tpl->tpl_vars['payMethod']->value->id;?>
">
            </div>
            <div class="cc-item-icon" >
                <?php if (strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"Visa")) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/visa.svg" alt=""/>
                <?php } elseif (strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"Jcb")) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/jcb.svg" alt=""/>
                <?php } elseif (strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"Mastercard") || strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"MasterCard")) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/mastercard.svg" alt=""/>
                <?php } elseif (strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"Amex")) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/american-express.svg" alt=""/>
                <?php } elseif (strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"Discover")) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/discover.svg" alt=""/>
                <?php } elseif (strstr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName(),"Diners")) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/credit-card.svg" alt=""/>
                <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/creditcards/credit-card.svg" alt=""/>
                <?php }?>
            </div>                                                       
    
        
            <div class="cc-item-name" >
                <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isCreditCard() || $_smarty_tpl->tpl_vars['payMethod']->value->isRemoteBankAccount()) {?>
                    <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName();?>

                <?php } else { ?>
                    <span class="type">
                        <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getAccountType();?>

                    </span>
                    <?php echo substr($_smarty_tpl->tpl_vars['payMethod']->value->payment->getAccountNumber(),-4);?>

                <?php }?>
            </div>
            <div class="cc-item-desc <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->getDescription() == "-") {?>empty<?php }?>" >
                <?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getDescription();?>

            </div>
            <div class="cc-item-status" >
                <?php echo $_smarty_tpl->tpl_vars['expiryDate']->value;?>

            </div>
            <div class="cc-item-actions" >
                <span class="status status-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['payMethod']->value->getStatus(), 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getStatus();?>
</span>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}
