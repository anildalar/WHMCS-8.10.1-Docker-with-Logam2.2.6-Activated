<?php
/* Smarty version 3.1.48, created on 2025-02-06 05:13:55
  from '/var/www/html/templates/orderforms/lagom2/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a445137d25b4_16018956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893e23c97771f87cba344389bd86907c135674c9' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/complete.tpl',
      1 => 1738818665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/product-recommendations.tpl' => 1,
  ),
),false)) {
function content_67a445137d25b4_16018956 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="message message-success message-lg">
        <div class="message-icon">
            <i class="lm lm-check"></i>
        </div>
        <h2 class="message-title"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('order.order_placed');?>
 #<?php echo $_smarty_tpl->tpl_vars['ordernumber']->value;?>
</h2>                    
        <p class="message-desc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfinalinstructions'];?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['expressCheckoutInfo']->value) {?>
            <div class="alert alert-lagom alert-info text-center">
                <?php echo $_smarty_tpl->tpl_vars['expressCheckoutInfo']->value;?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['expressCheckoutError']->value) {?>
            <div class="alert alert-lagom alert-danger text-center">
                <?php echo $_smarty_tpl->tpl_vars['expressCheckoutError']->value;?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['invoiceid']->value && !$_smarty_tpl->tpl_vars['ispaid']->value) {?>
            <div class="alert alert-warning text-center">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordercompletebutnotpaid'];?>

                <br /><br />
                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" target="_blank" class="alert-link">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicenumber'];
echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>

                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ispaid']->value) {?>
            <!-- Enter any HTML code which should be displayed when a user has completed checkout here -->
            <!-- Common uses of this include conversion and affiliate tracking scripts -->
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_html']->value, 'addon_html');
$_smarty_tpl->tpl_vars['addon_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->do_else = false;
?>
            <div class="order-confirmation-addon-output">
                <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php" class="btn btn-default">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['continueToClientArea'];?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['hasRecommendations']->value) {?>
            <div class="recommendations-complete m-t-3x">
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/product-recommendations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <?php }?>
    </div>
<?php }
}
}
