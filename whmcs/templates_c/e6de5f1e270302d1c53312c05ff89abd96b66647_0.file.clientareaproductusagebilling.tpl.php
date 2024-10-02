<?php
/* Smarty version 3.1.48, created on 2024-10-02 05:37:11
  from '/var/www/html/templates/lagom2/clientareaproductusagebilling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcdc076152d6_13469210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6de5f1e270302d1c53312c05ff89abd96b66647' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareaproductusagebilling.tpl',
      1 => 1681727128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcdc076152d6_13469210 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/clientareaproductusagebilling.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/clientareaproductusagebilling.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="panel-body">
        <p class="alert alert-lagom alert-info m-b-0"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['explanation'];?>
</p>
    </div>
    <div class="panel-table table-responsive m-b-0">
        <table class="table m-b-0">
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['metric'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['currentUsage'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['pricing'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['lastUpdated'];?>
</th>
                <th></th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['metricStats']->value, 'metric');
$_smarty_tpl->tpl_vars['metric']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['metric']->value) {
$_smarty_tpl->tpl_vars['metric']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['metric']->value['displayName'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['metric']->value['currentValue'];?>
</td>
                    <td>
                        <?php if (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) > 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['startingFrom'];?>
 <?php echo $_smarty_tpl->tpl_vars['metric']->value['lowestPrice'];?>
 / <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?>  
                        <?php } elseif (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) == 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['metric']->value['lowestPrice'];?>
 / <?php if ($_smarty_tpl->tpl_vars['metric']->value['unitName']) {
echo $_smarty_tpl->tpl_vars['metric']->value['unitName'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['unit'];
}?>
                            <?php if ($_smarty_tpl->tpl_vars['metric']->value['includedQuantity'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['metric']->value['includedQuantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['includedNotCounted'];?>
)<?php }?>
                        <?php } else { ?>
                            &mdash;
                        <?php }?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/usagebillingpricing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </td>
                    <td><?php if (is_string($_smarty_tpl->tpl_vars['metric']->value['lastUpdated'])) {
echo $_smarty_tpl->tpl_vars['metric']->value['lastUpdated'];
} else {
echo $_smarty_tpl->tpl_vars['metric']->value['lastUpdated']->diffForHumans();
}?></td>
                    <td>
                        <?php if (count($_smarty_tpl->tpl_vars['metric']->value['pricing']) > 1) {?>
                            <button type="button" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modalMetricPricing-<?php echo $_smarty_tpl->tpl_vars['metric']->value['systemName'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['metrics']['pricing'];?>

                            </button>
                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<?php }?>    


<?php }
}
