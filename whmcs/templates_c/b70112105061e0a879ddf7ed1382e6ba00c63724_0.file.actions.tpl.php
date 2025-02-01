<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:04:24
  from '/var/www/html/templates/lagom2/core/cms/sections/common/package/actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d2487fc766_85705850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70112105061e0a879ddf7ed1382e6ba00c63724' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/package/actions.tpl',
      1 => 1734764845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d2487fc766_85705850 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/actions.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if (((isset($_smarty_tpl->tpl_vars['product']->value['show_link'])) && $_smarty_tpl->tpl_vars['product']->value['show_link'] == 1 && $_smarty_tpl->tpl_vars['product']->value['link_text'] != '') || !(isset($_smarty_tpl->tpl_vars['product']->value['show_link'])) || $_smarty_tpl->tpl_vars['product']->value['show_link'] == 0) {?>
    <div class="package-actions">
        <?php if ($_smarty_tpl->tpl_vars['typePackage']->value == "graphic") {?>
        <div
        <?php } else { ?>
        <a 
        <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_link'])) && $_smarty_tpl->tpl_vars['product']->value['show_link'] == 1 && ((($_smarty_tpl->tpl_vars['product']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage") && $_smarty_tpl->tpl_vars['product']->value['custom_url'] != '') || ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "whmcs-page" && $_smarty_tpl->tpl_vars['product']->value['whmcs_page'] != ''))) {?>
                href="<?php if ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage") {
if ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage" || substr($_smarty_tpl->tpl_vars['product']->value['custom_url'],0,1) == "/") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
}
echo $_smarty_tpl->tpl_vars['product']->value['custom_url'];
} elseif ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "whmcs-page") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
if (substr($_smarty_tpl->tpl_vars['product']->value['url'],0,1) != "/") {?>/<?php }
echo $_smarty_tpl->tpl_vars['product']->value['url'];
}?>" 
                data-href="<?php if ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "custom-url" || $_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage") {
if ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "homepage" || substr($_smarty_tpl->tpl_vars['product']->value['custom_url'],0,1) == "/") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
}
echo $_smarty_tpl->tpl_vars['product']->value['custom_url'];
} elseif ($_smarty_tpl->tpl_vars['product']->value['link_type'] == "whmcs-page") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;
if (substr($_smarty_tpl->tpl_vars['product']->value['url'],0,1) != "/") {?>/<?php }
echo $_smarty_tpl->tpl_vars['product']->value['url'];
}?>" 
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['product']['productType'] == "marketconnect") {?>
                    <?php $_smarty_tpl->_assignInScope('cartUrl', 'cart/order?');?>
                <?php } else { ?>
                     <?php $_smarty_tpl->_assignInScope('cartUrl', 'cart.php?a=add&');?>
                <?php }?>
                href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cartUrl']->value;?>
pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;
if ((isset($_smarty_tpl->tpl_vars['cycle']->value)) && $_smarty_tpl->tpl_vars['cycle']->value) {?>&billingcycle=<?php echo $_smarty_tpl->tpl_vars['cycle']->value;
}?>" 
                data-href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cartUrl']->value;?>
pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" 
                data-btn-loader
            <?php }?>
           
            <?php if ((isset($_smarty_tpl->tpl_vars['dataPeriod']->value)) && $_smarty_tpl->tpl_vars['dataPeriod']->value) {?>
                data-plan-link='[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['dataPeriod']->value,true), 'pricing', true, 'key');
$_smarty_tpl->tpl_vars['pricing']->iteration = 0;
$_smarty_tpl->tpl_vars['pricing']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['pricing']->value) {
$_smarty_tpl->tpl_vars['pricing']->do_else = false;
$_smarty_tpl->tpl_vars['pricing']->iteration++;
$_smarty_tpl->tpl_vars['pricing']->last = $_smarty_tpl->tpl_vars['pricing']->iteration === $_smarty_tpl->tpl_vars['pricing']->total;
$__foreach_pricing_10_saved = $_smarty_tpl->tpl_vars['pricing'];
?>"&billingcycle=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['pricing']->last) {?>,<?php }
$_smarty_tpl->tpl_vars['pricing'] = $__foreach_pricing_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]' 
            <?php }?>
            class="btn btn-primary <?php if (!$_smarty_tpl->tpl_vars['displayBestPrice']->value && !$_smarty_tpl->tpl_vars['displayFirstAvailableCycle']->value && $_smarty_tpl->tpl_vars['product']->value['product']['price']['tabs'][$_smarty_tpl->tpl_vars['firstAvailableCycle']->value]['price'] == "-1") {?> disabled<?php }?>"
            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_link'])) && $_smarty_tpl->tpl_vars['product']->value['show_link'] == 1 && (isset($_smarty_tpl->tpl_vars['product']->value['target_blank'])) && $_smarty_tpl->tpl_vars['product']->value['target_blank']) {?> target="_blank"<?php }?>
        >
            <span class="btn-text">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['link_text'] != '') {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['frontHelper']->value))) {
echo $_smarty_tpl->tpl_vars['frontHelper']->value->langParse($_smarty_tpl->tpl_vars['product']->value['link_text']);
} else {
echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['product']->value['link_text'], ENT_QUOTES);
}?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                <?php }?>
            </span>
            <span class="btn-text unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['unavailable'];?>
</span>
            <div class="loader loader-button hidden" >
                <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['typePackage']->value == "graphic") {?>
        </div>
        <?php } else { ?>
        </a>
        <?php }?>
    </div>
    <?php }
}
}
}
