<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:05:04
  from '/var/www/html/templates/lagom2/core/cms/sections/common/package/cycle-switcher-button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f95e9011ea39_78996107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f961ff1e2ebed0f0689b892441da1780d9ac50f8' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/package/cycle-switcher-button.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f95e9011ea39_78996107 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/cycle-switcher-button.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/cycle-switcher-button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <button 
        type="button" 
        class="btn btn-sm cycle-change<?php if ((isset($_smarty_tpl->tpl_vars['cycle']->value)) && $_smarty_tpl->tpl_vars['cycle']->value) {?> <?php echo $_smarty_tpl->tpl_vars['cycle']->value;
}
if ((isset($_smarty_tpl->tpl_vars['active']->value)) && $_smarty_tpl->tpl_vars['active']->value) {?> <?php echo $_smarty_tpl->tpl_vars['active']->value;
}
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>" 
        <?php if ((isset($_smarty_tpl->tpl_vars['cycle']->value)) && $_smarty_tpl->tpl_vars['cycle']->value) {?>data-change-pricing="<?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
"<?php }?>
    > 
        <?php if ((isset($_smarty_tpl->tpl_vars['name']->value)) && $_smarty_tpl->tpl_vars['name']->value) {?>
            <span class="btn-text">
                <?php if ($_smarty_tpl->tpl_vars['name']->value == "monthly") {?>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "quarterly") {?>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "semiannually") {?>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "annually") {?>
                    1-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['year'];?>

                <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "biennially") {?>
                    2-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['years'];?>

                <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "triennially") {?>
                    3-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['years'];?>

                <?php }?>
            </span>
        <?php }?>
        <label 
            class="label label-xs label-info label-save <?php if ((isset($_smarty_tpl->tpl_vars['discount']->value)) && $_smarty_tpl->tpl_vars['discount']->value) {
} else { ?>hidden<?php }?>"
            <?php if ((isset($_smarty_tpl->tpl_vars['dataDiscount']->value)) && is_array($_smarty_tpl->tpl_vars['dataDiscount']->value)) {?>
                data-change-discount='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataDiscount']->value, 'd', true, 'key');
$_smarty_tpl->tpl_vars['d']->iteration = 0;
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
$_smarty_tpl->tpl_vars['d']->iteration++;
$_smarty_tpl->tpl_vars['d']->last = $_smarty_tpl->tpl_vars['d']->iteration === $_smarty_tpl->tpl_vars['d']->total;
$__foreach_d_14_saved = $_smarty_tpl->tpl_vars['d'];
?>"<?php if ((isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['name']->value])) && is_array($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['name']->value])) {
echo min($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['name']->value]);
} else { ?>0<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['d']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['d'] = $__foreach_d_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]'
            <?php }?>
        >
            <?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('packages.save');?>
&nbsp;
            <span data-change-discount-value>
                <?php echo $_smarty_tpl->tpl_vars['discount']->value;?>

            </span>%
        </label>
    </button>
<?php }
}
}
