<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:43:26
  from '/var/www/html/templates/lagom2/includes/common/price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e4093ec06134_26908498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '274a01dc7d3abef2f1c29c1be38a42edf1c2fdf5' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/common/price.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e4093ec06134_26908498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/price.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <div class="price-amount<?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['package_price_wrap'] == 'break-all') {?> word-break-all<?php }
if ($_smarty_tpl->tpl_vars['priceInlineAmount']->value) {?> price-inline-amount<?php }?>">
        <?php if ((smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['price']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0.00" || smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['price']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['prefix'],''),$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix'],'')," ",'') == "0,00") && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['free_product_price'] == "enabled") {?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

        <?php } else { ?>
            <?php if ((isset($_smarty_tpl->tpl_vars['priceCurrency']->value)) && $_smarty_tpl->tpl_vars['priceCurrency']->value) {?><span class="price-prefix"><?php echo $_smarty_tpl->tpl_vars['priceCurrency']->value;?>
</span><?php }?>
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['price']->value,$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']," ".((string)$_smarty_tpl->tpl_vars['WHMCSCurrency']->value['suffix']));?>

            <?php if ((isset($_smarty_tpl->tpl_vars['priceCurrencySuffix']->value)) && $_smarty_tpl->tpl_vars['priceCurrencySuffix']->value) {
echo $_smarty_tpl->tpl_vars['priceCurrencySuffix']->value;
}?>
        <?php }?>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['priceType']->value)) && $_smarty_tpl->tpl_vars['priceType']->value !== "free" && $_smarty_tpl->tpl_vars['priceType']->value !== "onetime") {?>
        <div class="price-cycle <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>price-cycle-inline<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['priceCycle']->value == "monthly") {?>
            <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['monthly'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];
}?>
        <?php } elseif ($_smarty_tpl->tpl_vars['priceCycle']->value == "quarterly") {?>
            <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['quarterly'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];
}?>
        <?php } elseif ($_smarty_tpl->tpl_vars['priceCycle']->value == "semiannually") {?>
            <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['semiannually'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];
}?>
        <?php } elseif ($_smarty_tpl->tpl_vars['priceCycle']->value == "annually") {?>
            <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['annually'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];
}?>
        <?php } elseif ($_smarty_tpl->tpl_vars['priceCycle']->value == "biennially") {?>
            <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['biennially'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];
}?>
        <?php } elseif ($_smarty_tpl->tpl_vars['priceCycle']->value == "triennially") {?>
            <?php if ($_smarty_tpl->tpl_vars['priceCycleShort']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pricingCycleShort']['triennially'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];
}?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['priceSetupFee']->value)) && $_smarty_tpl->tpl_vars['priceSetupFee']->value) {?> + <?php echo $_smarty_tpl->tpl_vars['priceSetupFee']->value->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['priceSetupFeeLowest']->value)) && $_smarty_tpl->tpl_vars['priceSetupFeeLowest']->value) {?> + <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['priceSetupFeeLowest']->value,$_smarty_tpl->tpl_vars['activeCurrency']->value['suffix'],'');?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
        </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['priceSetupFee']->value)) && $_smarty_tpl->tpl_vars['priceSetupFee']->value) {?>
        <div class="price-cycle">+ <?php echo $_smarty_tpl->tpl_vars['priceSetupFee']->value->toPrefixed();?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['priceSetupFeeLowest']->value)) && $_smarty_tpl->tpl_vars['priceSetupFeeLowest']->value) {?>
        <div class="price-cycle">+ <?php echo $_smarty_tpl->tpl_vars['priceSetupFeeLowest']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</div>
    <?php }
}?>    <?php }
}
