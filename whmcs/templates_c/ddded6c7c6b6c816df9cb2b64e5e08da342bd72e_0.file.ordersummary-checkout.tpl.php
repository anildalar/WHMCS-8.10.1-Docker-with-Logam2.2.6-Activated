<?php
/* Smarty version 3.1.48, created on 2024-09-29 12:28:12
  from '/var/www/html/templates/orderforms/lagom2/ordersummary-checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f947dce768c6_40855682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddded6c7c6b6c816df9cb2b64e5e08da342bd72e' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/ordersummary-checkout.tpl',
      1 => 1725773961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/overwrites/ordersummary-checkout.tpl' => 1,
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/custom-tos.tpl' => 1,
  ),
),false)) {
function content_66f947dce768c6_40855682 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/ordersummary-checkout.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/ordersummary-checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="panel-body">
        <div class="summary-content content">
            <ul class="summary-list">
                <li class="list-item" data-subtotal>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersubtotal'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</span>
                </li>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value || $_smarty_tpl->tpl_vars['taxrate']->value || $_smarty_tpl->tpl_vars['taxrate2']->value) {?>
            <ul class="summary-list faded">
                <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                    <li class="list-item">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
%</span>
                        <span class="item-value" id="taxTotal1"><?php echo $_smarty_tpl->tpl_vars['taxtotal']->value;?>
</span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
                    <li class="list-item">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
%</span>
                        <span class="item-value" id="taxTotal2"><?php echo $_smarty_tpl->tpl_vars['taxtotal2']->value;?>
</span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
                    <li class="list-item light">
                        <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
</span>
                        <span class="item-value" id="discount"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</span>
                    </li>
                <?php }?>
            </ul>
            <?php }?>
            <ul class="summary-list" id="recurring">
                <li class="list-item faded"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['totals'];?>
</li>
                <li class="list-item" id="recurringMonthly" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringmonthly']->value) {?>style="display:none;"<?php }?>>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['totalrecurringmonthly']->value;?>
</span>
                </li>                
                <li class="list-item" id="recurringQuarterly" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringquarterly']->value) {?>style="display:none;"<?php }?>>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['totalrecurringquarterly']->value;?>
</span>
                </li>
                <li class="list-item" id="recurringSemiAnnually" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value) {?>style="display:none;"<?php }?>>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value;?>
</span>
                </li>
                <li class="list-item" id="recurringAnnually" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringannually']->value) {?>style="display:none;"<?php }?>>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['totalrecurringannually']->value;?>
</span>
                </li>
                <li class="list-item" id="recurringBiennially" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringbiennially']->value) {?>style="display:none;"<?php }?>>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['totalrecurringbiennially']->value;?>
</span>
                </li>
                <li class="list-item" id="recurringTriennially" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringtriennially']->value) {?>style="display:none;"<?php }?>>
                    <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>
</span>
                    <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['totalrecurringtriennially']->value;?>
</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="panel-footer">                        
        <div class="price price-left-h" data-total>
            <span class="price-total"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
</span> 
            <div class="price-amount amt" id="totalDueToday"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div>
        </div>    
        <div class="summary-actions">
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value] && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['tosLocation'] === "Above CTA button") {?>
            <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                <div class="order-checkbox" data-form-input="#accepttos">
                    <div class="checkbox m-t-0 m-b-1x" id="tos-checkbox">
                        <label>
                            <input class="icheck-control" type="checkbox" data-tos-checkbox />
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></span>
                        </label>
                    </div>
                    <div class="alert alert-lagom alert-xs alert-danger m-b-2x hidden">
                        <div class="alert-body">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordererroraccepttos'];?>

                        </div>
                    </div> 
                </div>
                <?php if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos.tpl")) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/custom-tos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php }?>
            <?php }?>
        <?php }?>
            <button type="button" class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['summaryStyle']->value == "primary") {?>-faded<?php }?> btn-checkout<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled<?php }?> data-btn-loader id="checkout">
                <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['checkout'];?>
</span>
                <div class="loader loader-button hidden">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                </div>
            </button>
        </div>
    </div>
<?php }?>    <?php }
}
