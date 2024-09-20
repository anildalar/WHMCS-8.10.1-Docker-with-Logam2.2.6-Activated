<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:23:37
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/modal/estimate-taxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5b39a72c09_73839700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c655b5974d0ed08cb5ab22c2aefac501c0fdc504' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/modal/estimate-taxes.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed5b39a72c09_73839700 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['taxenabled']->value && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=setstateandcountry">
        <div class="modal modal-lg fade" id="estimate-taxes">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="lm lm-close"></i></span>
                        </button>
                        <h3 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['estimateTaxes'];?>
</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputCountry2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['country'];?>
</label>
                                    <select name="country" id="inputCountry2" class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrylabel', false, 'countrycode');
$_smarty_tpl->tpl_vars['countrylabel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
" <?php if ((!$_smarty_tpl->tpl_vars['country']->value && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['country']->value) {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                                            </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputState2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
</label>
                                    <input type="text" name="state" id="inputState2" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled" <?php }?> />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-btn-loader>
                            <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['updateTotals'];?>
</span>
                            <div class="loader loader-button hidden" >
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                            </div>
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cancel'];?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php }
}
}
