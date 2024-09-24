<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:14
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/metricsBilling_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f2529ee9d638_92342679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d46aa6abb952a874d39a66ab34bfa4256451f0f' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/metricsBilling_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f2529ee9d638_92342679 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-metrics-billing-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="section" :class="[{ 'section--full-width': !showNumber}]" v-if="Object.keys(metricsBilling).length > 0 && isVisible">
        <div class="section-number" v-if="showNumber">X</div>
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','metrics');?>
</h2>
            <p class="section-desc"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','metricsDescription');?>
</p>
        </div>
        <div class="section-body">
            <ul class="list-group list-group-bordered">
                <li class="list-group-item d-flex align-center space-between" v-for="item in metricsBilling">
                    <div v-if="Object.keys(item.nextFloors)[1] === undefined">
                        <span v-html="getTranslatedMessage(item.name) + ' - ' + item.price + getUnit(item.unit)"></span>
                        <span v-if="item.included" v-html="'(' + formatPrice.getFormattedPrice(item.included, 1) + ` <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','included');?>
)`">
                        </span>
                    </div>
                    <span class="w-100" v-else>
                        <span v-html="getTranslatedMessage(item.name) + ' - ' + '<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','startingFrom');?>
 ' + item.price + ' ' + getUnit(item.unit)"></span>
                        <button type="button" class="btn btn-default btn-xs float-right" data-toggle="modal" data-target="#modalMetricPricing" @click='setData(item.key)'>
                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','viewPricing');?>

                        </button>
                    </span>
                </li>
            </ul>

            <div class="modal fade modal-metric-pricing" tabindex="-1" id="modalMetricPricing" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" v-html="getTranslatedMessage(name) + ' ' + `<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','pricing');?>
`"></h4>
                        </div>
                        <div class="modal-body">
                            <p v-if="type == 'flat'"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','metricsFlatDescription');?>
</p>
                            <p v-else="type == 'grad'"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','metricsGradDescription');?>
</p>
                            <table class="table m-b-0">
                                <thead>
                                <tr>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','startingQuantity');?>
</th>
                                    <th class="text-center" v-html="getUnitModal(unit)"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="floor in floors">
                                    <td class="text-center" v-html="formatPrice.getFormattedPrice(floor.floor, 1)"></td>
                                    <td class="text-center" v-html="floor.price"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p v-if="included" class="text-center" v-html="formatPrice.getFormattedPrice(included) + ` <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','included_long');?>
`"></p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
