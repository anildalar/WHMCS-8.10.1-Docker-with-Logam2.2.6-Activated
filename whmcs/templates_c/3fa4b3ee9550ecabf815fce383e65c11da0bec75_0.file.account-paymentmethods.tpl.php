<?php
/* Smarty version 3.1.48, created on 2024-10-16 05:33:09
  from '/var/www/html/templates/lagom2/account-paymentmethods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_670f5015176878_90003402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fa4b3ee9550ecabf815fce383e65c11da0bec75' => 
    array (
      0 => '/var/www/html/templates/lagom2/account-paymentmethods.tpl',
      1 => 1679490290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670f5015176878_90003402 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['createSuccess']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['addedSuccess'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['createFailed']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['addFailed'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['saveSuccess']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['updateSuccess'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['saveFailed']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['saveFailed'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['setDefaultResult']->value === true) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['defaultUpdateSuccess'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['setDefaultResult']->value === false) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['defaultUpdateFailed'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['deleteResult']->value === true) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['deleteSuccess'])), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['deleteResult']->value === false) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['deleteFailed'])), 0, true);
?>
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['client']->value->payMethods->validateGateways()) != 0) {?>
        <div class="panel panel-cc" id="payMethodList">
            <div class="panel-body">
                <div class="cc-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['client']->value->payMethods->validateGateways(), 'payMethod');
$_smarty_tpl->tpl_vars['payMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payMethod']->value) {
$_smarty_tpl->tpl_vars['payMethod']->do_else = false;
?>
                        <div class="cc-item">
                            <div class="cc-item-icon">
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
                            <div class="cc-item-name"><?php echo $_smarty_tpl->tpl_vars['payMethod']->value->payment->getDisplayName();?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->description) {?>
                                <div class="cc-item-desc"><?php echo $_smarty_tpl->tpl_vars['payMethod']->value->description;?>
</div>
                            <?php } else { ?>
                                <div class="cc-item-desc empty">-</div>
                            <?php }?>                            
                            <div class="cc-item-status"><span class="status status-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['payMethod']->value->getStatus(), 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['payMethod']->value->getStatus();?>
</span></div>
                            <div class="cc-item-actions">
                                <?php if ($_smarty_tpl->tpl_vars['payMethod']->value->isDefaultPayMethod()) {?>
                                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['default'];?>
</span>
                                <?php } elseif (!$_smarty_tpl->tpl_vars['payMethod']->value->isExpired()) {?>
                                    <a href="<?php echo routePath('account-paymentmethods-setdefault',$_smarty_tpl->tpl_vars['payMethod']->value->id);?>
" class="btn btn-sm btn-default btn-set-default">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['setAsDefault'];?>

                                    </a>
                                <?php }?>
                                <a href="<?php echo routePath('account-paymentmethods-view',$_smarty_tpl->tpl_vars['payMethod']->value->id);?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['edit'];?>
" class="btn btn-sm btn-icon<?php if ($_smarty_tpl->tpl_vars['payMethod']->value->getType() == 'RemoteBankAccount') {?> disabled<?php }?>" data-role="edit-payment-method">
                                    <i class="lm lm-edit"></i>
                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['allowDelete']->value) {?>
                                    <a href="<?php echo routePath('account-paymentmethods-delete',$_smarty_tpl->tpl_vars['payMethod']->value->id);?>
" class="btn btn-sm btn-icon btn-delete" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['delete'];?>
">
                                        <i class="lm lm-trash"></i>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="panel-footer">
                <?php if ($_smarty_tpl->tpl_vars['allowCreditCard']->value) {?>
                    <a href="<?php echo routePath('account-paymentmethods-add');?>
" class="btn btn-primary" data-role="add-new-credit-card">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['addNewCC'];?>

                    </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['allowBankDetails']->value) {?>
                    <a href="<?php echo routePathWithQuery('account-paymentmethods-add',null,'type=bankacct');?>
" class="btn btn-default">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['addNewBank'];?>

                    </a>
                <?php }?>
            </div>   
        </div>
    <?php } else { ?>
        <div class="message message-sm message-no-data">
            <div class="message-image">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"credit-card"), 0, true);
?>         
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['noPaymentMethodsCreated'];?>
</h6>
            <div class="message-actions"> 
                <?php if ($_smarty_tpl->tpl_vars['allowCreditCard']->value) {?>
                <a href="<?php echo routePath('account-paymentmethods-add');?>
" class="btn btn-primary" data-role="add-new-credit-card">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['addNewCC'];?>

                </a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['allowBankDetails']->value) {?>
                    <a href="<?php echo routePathWithQuery('account-paymentmethods-add',null,'type=bankacct');?>
" class="btn btn-default">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['addNewBank'];?>

                    </a>
                <?php }?>
            </div>
        </div>   
    <?php }?>
    <form method="post" action="" id="frmDeletePaymentMethod">
        <div class="modal fade" id="modalPaymentMethodDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['areYouSure'];?>
</h4>
            </div>
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentMethods']['deletePaymentMethodConfirm'];?>
</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['no'];?>
</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <form method="post" action="" id="frmSetDefaultPaymentMethod"></form>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            jQuery('.btn-set-default').click(function(e) {
                e.preventDefault();
                jQuery('#frmSetDefaultPaymentMethod')
                    .attr('action', jQuery(this).attr('href'))
                    .submit();
            });
            jQuery('.btn-delete').click(function(e) {
                e.preventDefault();
                jQuery('#frmDeletePaymentMethod')
                    .attr('action', jQuery(this).attr('href'));
                jQuery('#modalPaymentMethodDeleteConfirmation').modal('show');
            });
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
