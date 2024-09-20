<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:22:56
  from '/var/www/html/templates/lagom2/includes/sidebar/sidebar-secondary-custom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5b101e19e1_67981642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db6e17bb1c433d80df54a7893e33b70659d28854' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/sidebar/sidebar-secondary-custom.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed5b101e19e1_67981642 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/overwrites/sidebar-secondary-custom.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/overwrites/sidebar-secondary-custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "masspay") {?>
        <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['sidebarBoxStyle']->value;?>
">
            <div class="panel-body">
                <div class="price price-sm price-left-h">
                    <span class="price-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotaldue'];?>
</span> 
                    <span class="price-amount"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
                </div>
            </div>
            <div class="panel-footer">
                <form method="post" action="clientarea.php?action=masspay">
                    <input type="hidden" name="geninvoice" value="true" />
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoiceitems']->value, 'invoiceitem', false, 'invid');
$_smarty_tpl->tpl_vars['invoiceitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invid']->value => $_smarty_tpl->tpl_vars['invoiceitem']->value) {
$_smarty_tpl->tpl_vars['invoiceitem']->do_else = false;
?>
                        <input type="hidden" name="invoiceids[]" value="<?php echo $_smarty_tpl->tpl_vars['invid']->value;?>
" />
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <fieldset>
                        <div class="form-group">
                            <label for="paymentmethod" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
:</label>
                            <select name="paymentmethod" id="paymentmethod" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
"><?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['masspaymakepayment'];?>
" class="btn btn-primary-faded btn-block" id="btnMassPayMakePayment" data-btn-loader>                            
                            <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['masspaymakepayment'];?>
</span>
                            <div class="loader loader-button hidden" >
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                            </div>
                        </button> 
                    </fieldset>
                </form>    
            </div>
        </div>
    <?php }
}?>    <?php }
}
