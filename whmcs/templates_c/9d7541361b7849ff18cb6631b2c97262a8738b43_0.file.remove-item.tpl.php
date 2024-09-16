<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:48:33
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/modal/remove-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40a71d3e808_58771484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7541361b7849ff18cb6631b2c97262a8738b43' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/modal/remove-item.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40a71d3e808_58771484 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php">
    <input type="hidden" name="a" value="remove" />
    <input type="hidden" name="r" value="" id="inputRemoveItemType" />
    <input type="hidden" name="i" value="" id="inputRemoveItemRef" />
    <input type="hidden" name="rt" value="" id="inputRemoveItemRenewalType">
    <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['close'];?>
">
                        <span aria-hidden="true"><i class="lm lm-close"></i></span>
                    </button>
                    <h3 class="modal-title">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['removeItem'];?>
</span>
                    </h3>
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremoveitemconfirm'];?>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-btn-loader>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];?>
</span>
                        <div class="loader loader-button hidden" >
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                        </div>
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['no'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
