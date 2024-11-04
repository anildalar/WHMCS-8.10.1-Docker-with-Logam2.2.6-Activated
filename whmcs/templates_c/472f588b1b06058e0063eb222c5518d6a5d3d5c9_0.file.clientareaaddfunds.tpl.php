<?php
/* Smarty version 3.1.48, created on 2024-10-18 11:20:58
  from '/var/www/html/templates/lagom2/clientareaaddfunds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6712449a2b9ec7_17543811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '472f588b1b06058e0063eb222c5518d6a5d3d5c9' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareaaddfunds.tpl',
      1 => 1681727128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6712449a2b9ec7_17543811 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['addfundsdisabled']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'customClass'=>"message-no-data",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareaaddfundsdisabled']), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['notallowed']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'customClass'=>"message-no-data",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareaaddfundsnotallowed']), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'msg'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['addfundsdisabled']->value && !$_smarty_tpl->tpl_vars['notallowed']->value) {?>    
        <div class="panel panel-lg panel-default">
            <div class="panel-body">            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=addfunds" class="m-w-sm m-a">
                <p class="text-light"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsdescription'];?>
</p>
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
                <div class="form-group">
                    <label for="amount" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsamount'];?>
:</label>
                        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['amountCalculated'] == "1") {?>
                            <div class="buttons-group buttons-5 m-b-2x" id="add-credits-buttons">
                                <?php $_smarty_tpl->_assignInScope('maximumbal', (round((($_smarty_tpl->tpl_vars['maximumbalance']->value->toNumeric()-$_smarty_tpl->tpl_vars['clientsdetails']->value['credit'])/100)))*100);?>
                                <?php $_smarty_tpl->_assignInScope('maximum', $_smarty_tpl->tpl_vars['maximumamount']->value->toNumeric());?>
                                <?php if ($_smarty_tpl->tpl_vars['maximum']->value > $_smarty_tpl->tpl_vars['maximumbal']->value && $_smarty_tpl->tpl_vars['maximumbal']->value > 0) {?>
                                    <?php $_smarty_tpl->_assignInScope('maximum', $_smarty_tpl->tpl_vars['maximumbal']->value);?>
                                <?php }?>
                                <?php $_smarty_tpl->_assignInScope('minimum', (round(($_smarty_tpl->tpl_vars['maximum']->value/5/10)))*10);?>
                            
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <?php $_smarty_tpl->_assignInScope('step', $_smarty_tpl->tpl_vars['minimum']->value*$_smarty_tpl->tpl_vars['i']->value);?>
                                    <?php if ($_smarty_tpl->tpl_vars['step']->value > $_smarty_tpl->tpl_vars['maximum']->value) {?>
                                        <?php $_smarty_tpl->_assignInScope('step', $_smarty_tpl->tpl_vars['maximum']->value);?>
                                    <?php }?>
                                    <button class="btn btn-lg btn-outline<?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['step']->value) {?> active<?php }?>" type="button" data-price="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['step']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['step']->value;?>
</button>
                                <?php }
}
?>
                            </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('newAmount1', "10");?>
                            <?php $_smarty_tpl->_assignInScope('newAmount2', "25");?>
                            <?php $_smarty_tpl->_assignInScope('newAmount3', "50");?>
                            <?php $_smarty_tpl->_assignInScope('newAmount4', "75");?>
                            <?php $_smarty_tpl->_assignInScope('newAmount5', "100");?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php $_smarty_tpl->_assignInScope('value', "amountVal".((string)$_smarty_tpl->tpl_vars['i']->value));?>
                                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config'][$_smarty_tpl->tpl_vars['value']->value]) {?>
                                    <?php $_smarty_tpl->_assignInScope("newAmount".((string)$_smarty_tpl->tpl_vars['i']->value), $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config'][$_smarty_tpl->tpl_vars['value']->value]);?>
                                <?php }?>
                            <?php }
}
?>
                            <div class="buttons-group buttons-5 m-b-2x" id="add-credits-buttons">
                                <button class="btn btn-lg btn-outline<?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['newAmount1']->value) {?> active<?php }?>" type="button" data-price="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['newAmount1']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['newAmount1']->value;?>
</button>
                                <button class="btn btn-lg btn-outline<?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['newAmount2']->value) {?> active<?php }?>" type="button" data-price="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['newAmount2']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['newAmount2']->value;?>
</button>
                                <button class="btn btn-lg btn-outline<?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['newAmount3']->value) {?> active<?php }?>" type="button" data-price="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['newAmount3']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['newAmount3']->value;?>
</button>
                                <button class="btn btn-lg btn-outline<?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['newAmount4']->value) {?> active<?php }?>" type="button" data-price="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['newAmount4']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['newAmount4']->value;?>
</button>
                                <button class="btn btn-lg btn-outline<?php if ($_smarty_tpl->tpl_vars['amount']->value == $_smarty_tpl->tpl_vars['newAmount5']->value) {?> active<?php }?>" type="button" data-price="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['newAmount5']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'];
echo $_smarty_tpl->tpl_vars['newAmount5']->value;?>
</button>
                            </div>
                        <?php }?>
                    <div class="input-group">
                        <input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" class="form-control" required />
                    </div>
                </div> 
                <div class="form-actions">
                    <button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
" class="btn btn-lg btn-block btn-primary" data-btn-loader>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</span>
                        <div class="loader loader-button hidden" >
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                        </div>
                    </button>
                </div>
            </form>
            </div>
        </div>
    <?php }
}
}
}
