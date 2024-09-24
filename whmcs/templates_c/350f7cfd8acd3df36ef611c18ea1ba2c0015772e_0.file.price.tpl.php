<?php
/* Smarty version 3.1.48, created on 2024-09-23 12:37:47
  from '/var/www/html/templates/lagom2/core/cms/sections/common/package/price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f1611be14317_04748236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350f7cfd8acd3df36ef611c18ea1ba2c0015772e' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/package/price.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f1611be14317_04748236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/price.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="package-price" data-pricing-container>
        
                <?php if ((isset($_smarty_tpl->tpl_vars['discountPrice']->value)) && $_smarty_tpl->tpl_vars['discountPrice']->value || (isset($_smarty_tpl->tpl_vars['dataDiscountPrice']->value)) && $_smarty_tpl->tpl_vars['dataDiscountPrice']->value) {?>
            <div class="price-discount <?php if ((isset($_smarty_tpl->tpl_vars['discountHidden']->value)) && $_smarty_tpl->tpl_vars['discountHidden']->value) {?>hidden<?php }?>">
                <span class="price-discount-old">                                           
                    <span 
                        class="price-discount-ammount"
                        <?php if ((isset($_smarty_tpl->tpl_vars['dataDiscountPrice']->value)) && $_smarty_tpl->tpl_vars['dataDiscountPrice']->value) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['montlyBreakdown']->value)) && $_smarty_tpl->tpl_vars['montlyBreakdown']->value) {?>
                                data-price-old='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataDiscountPrice']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_18_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"<?php if ($_smarty_tpl->tpl_vars['pricing']->value['discount']['applied']) {
$_smarty_tpl->_assignInScope('formattedDataDiscount', formatCurrency($_smarty_tpl->tpl_vars['pricing']->value['discount']['before']));
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formattedDataDiscount']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
} else { ?>0<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_18_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                            <?php } else { ?>
                                data-price-old='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataDiscountPrice']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_19_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"<?php if ($_smarty_tpl->tpl_vars['pricing']->value['discount']['applied']) {
$_smarty_tpl->_assignInScope('formattedDataDiscount', formatCurrency($_smarty_tpl->tpl_vars['pricing']->value['discount']['real_before']));
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formattedDataDiscount']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));
} else { ?>0<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_19_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                            <?php }?>
                        <?php }?>
                    >
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['discountPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>

                    </span>
                </span>
                <span class="price-discount-save label label-xs label-info">
                    <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('packages.save');?>
&nbsp;
                    <span
                        <?php if ((isset($_smarty_tpl->tpl_vars['dataDiscountPrice']->value)) && $_smarty_tpl->tpl_vars['dataDiscountPrice']->value) {?>
                            data-price-discount='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataDiscountPrice']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_20_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"<?php echo $_smarty_tpl->tpl_vars['pricing']->value['discount']['percentage'];?>
"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_20_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                        <?php }?>
                    >
                        <?php echo $_smarty_tpl->tpl_vars['discountValue']->value;?>

                    </span>%
                </span>
            </div>
        <?php }?>

                <span class="price <?php if ($_smarty_tpl->tpl_vars['type']->value != "default" && $_smarty_tpl->tpl_vars['type']->value != "graphic") {?>price-sm<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "graphic") {?>price-xs<?php }?>">
            <?php if ((isset($_smarty_tpl->tpl_vars['startingFrom']->value)) && $_smarty_tpl->tpl_vars['startingFrom']->value) {?>
                <span class="price-starting-from"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>
</span>
            <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['priceValue']->value)) && $_smarty_tpl->tpl_vars['priceValue']->value) {?>
                <span 
                    class="price-ammount"
                    <?php if ((isset($_smarty_tpl->tpl_vars['dataPrice']->value)) && $_smarty_tpl->tpl_vars['dataPrice']->value) {?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['montlyBreakdown']->value)) && $_smarty_tpl->tpl_vars['montlyBreakdown']->value) {?>
                            data-price='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataPrice']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_21_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"<?php if ($_smarty_tpl->tpl_vars['pricing']->value['price'] != "-1" && $_smarty_tpl->tpl_vars['pricing']->value['price'] != "Not Available") {
$_smarty_tpl->_assignInScope('formattedDataPrice', formatCurrency($_smarty_tpl->tpl_vars['pricing']->value['price']));
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formattedDataPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," <sub>".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'])."</sub>");
} else { ?>-1<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_21_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                        <?php } else { ?>
                            data-price='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataPrice']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_22_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"<?php if ($_smarty_tpl->tpl_vars['pricing']->value['real_price'] != "-1" && $_smarty_tpl->tpl_vars['pricing']->value['real_price'] != "Not Available") {
$_smarty_tpl->_assignInScope('formattedDataPrice', formatCurrency($_smarty_tpl->tpl_vars['pricing']->value['real_price']));
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['formattedDataPrice']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," <sub>".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'])."</sub>");
} else { ?>-1<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                        <?php }?>
                        data-unavailable-text="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['unavailable'];?>
"
                    <?php }?>    
                >
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['priceValue']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," <sub>".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'])."</sub>");?>

                </span>
            <?php }?>   

                        <span 
                class="price-cycle"
                <?php if ((isset($_smarty_tpl->tpl_vars['dataPeriod']->value)) && $_smarty_tpl->tpl_vars['dataPeriod']->value) {?>
                    data-pricing-period='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataPeriod']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_23_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"<?php if ($_smarty_tpl->tpl_vars['key']->value == "monthly") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];
} elseif ($_smarty_tpl->tpl_vars['key']->value == "quarterly") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];
} elseif ($_smarty_tpl->tpl_vars['key']->value == "semiannually") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];
} elseif ($_smarty_tpl->tpl_vars['key']->value == "annually") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];
} elseif ($_smarty_tpl->tpl_vars['key']->value == "biennially") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];
} elseif ($_smarty_tpl->tpl_vars['key']->value == "triennially") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];
}?>"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_23_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
                <?php }?>            
            >
                <?php if ((isset($_smarty_tpl->tpl_vars['montlyBreakdown']->value)) && $_smarty_tpl->tpl_vars['montlyBreakdown']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                <?php } elseif ((isset($_smarty_tpl->tpl_vars['cycle']->value)) && $_smarty_tpl->tpl_vars['cycle']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['cycle']->value == "monthly") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cycle']->value == "quarterly") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cycle']->value == "semiannually") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cycle']->value == "annually") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cycle']->value == "biennially") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cycle']->value == "triennially") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['cycle']->value == "onetime") {?>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>
    
                    <?php }?>
                <?php }?>
            </span>
        </span>
    </div>
<?php }
}
}
