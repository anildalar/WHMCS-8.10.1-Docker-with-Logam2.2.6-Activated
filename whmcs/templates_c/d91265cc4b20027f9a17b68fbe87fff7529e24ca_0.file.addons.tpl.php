<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:43:31
  from '/var/www/html/templates/orderforms/lagom2/addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40943cec393_19604580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91265cc4b20027f9a17b68fbe87fff7529e24ca' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/addons.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-collapsed.tpl' => 1,
  ),
),false)) {
function content_66e40943cec393_19604580 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="main-grid<?php if ($_smarty_tpl->tpl_vars['mainGrid']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainGrid']->value;
}?>">
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] != '1') {?>
            <div class="main-sidebar hidden-xs hidden-sm hidden-md <?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide') {?> main-sidebar-right <?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?><div class="sidebar-sticky" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>><?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?></div><?php }?>
            </div>
        <?php }?>
        <div class="main-content<?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php if (count($_smarty_tpl->tpl_vars['addons']->value) == 0) {?>
                <div class="message message-no-data" id="noAddons">
                    <div class="message-image">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"addon"), 0, true);
?>           
                    </div>
                    <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddonsnone'];?>
</h6>
                </div>     
            <?php }?>
            <div class="products">
                <div class="row row-eq-height">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'num');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
                        <div class="col-md-6 col-sm-12">
                            <form class="package package-sm package-left package-addons" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add">
                                <input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" />
                                <h3 class="package-title m-t-0"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</h3>
                                <div class="package-content">    
                                    <p><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                                </div>
                                <div class="package-select">
                                    <select name="productid" id="inputProductId<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="form-control">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['productids'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> - <?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];
}?>
                                            </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="package-footer">
                                    <div class="package-price">
                                        <div class="price price-sm price-inline">
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['free']) {?>
                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['LANG']->value['orderfree'],'priceType'=>"free"), 0, true);
?>
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('price'=>$_smarty_tpl->tpl_vars['addon']->value['recurringamount'],'priceCycle'=>mb_strtolower($_smarty_tpl->tpl_vars['addon']->value['billingcycle'], 'UTF-8'),'priceCycleShort'=>true,'priceSetupFee'=>$_smarty_tpl->tpl_vars['addon']->value['setupfee']), 0, true);
?>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="package-actions">
                                        <button type="submit" class="btn btn-lg btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>
</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                            </div>
                            <div class="row row-eq-height">
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
