<?php
/* Smarty version 3.1.48, created on 2024-10-02 05:37:11
  from '/var/www/html/templates/lagom2/usagebillingpricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcdc07626a66_49227260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2fe7b6195dd494f273479dc688650f5917e86d' => 
    array (
      0 => '/var/www/html/templates/lagom2/usagebillingpricing.tpl',
      1 => 1681727128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcdc07626a66_49227260 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/usagebillingpricing.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/usagebillingpricing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="modal fade modal-metric-pricing" tabindex="-1" role="dialog" id="modalMetricPricing-<?php echo $_smarty_tpl->tpl_vars['metric']->value['systemName'];?>
">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['metric']->value['displayName'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['pricing'];?>
</h4>
                </div>
                <div class="modal-body">
                    <p><?php echo $_smarty_tpl->tpl_vars['metric']->value['pricingSchema']['info'];?>
<br/>
                        <?php echo $_smarty_tpl->tpl_vars['metric']->value['pricingSchema']['detail'];?>

                    </p>
                    <table class="table m-b-0">
                        <thead>
                            <tr>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['startingQuantity'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['pricePer'];?>
 <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metric']->value['pricing'], 'pricing');
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pricing']->value['from'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pricing']->value['price_per_unit'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    <?php if ($_smarty_tpl->tpl_vars['metric']->value['includedQuantity']) {?>
                        <div class="alert alert-lagom alert-info m-b-0"><b><?php echo $_smarty_tpl->tpl_vars['metric']->value['includedQuantity'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['metric']->value['includedQuantityUnits'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['includedInBase'];?>
</div>
                    <?php }?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['close'];?>
</button>
                </div>
            </div>
        </div>
    </div> 
<?php }?>    <?php }
}
