<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:59:00
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/tabsWidget/tabsWidget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f7040bffe7_27818005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8376ed84ddcab1520553aa18f19b3fb05dda1296' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/tabsWidget/tabsWidget.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f7040bffe7_27818005 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="lu-widget">
    <div class="lu-widget__header">
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle() || $_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
            <div class="lu-widget__top lu-top">
                <div class="lu-top__title">
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
                </div>
            </div>
        <?php }?>
        <div class="lu-widget__nav swiper-container swiper-container-horizontal swiper-container-false" data-content-slider="" style="visibility: visible;">
            <?php $_smarty_tpl->_assignInScope('firstArrKey', array_keys($_smarty_tpl->tpl_vars['rawObject']->value->getElements()));?>
            <?php if ($_smarty_tpl->tpl_vars['elements']->value) {?>
                <ul class="swiper-wrapper lu-nav lu-nav--md lu-nav--h lu-nav--tabs lu-nav--arrow">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getElements(), 'tplValue', false, 'tplKey');
$_smarty_tpl->tpl_vars['tplValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tplKey']->value => $_smarty_tpl->tpl_vars['tplValue']->value) {
$_smarty_tpl->tpl_vars['tplValue']->do_else = false;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['tplKey']->value === $_smarty_tpl->tpl_vars['firstArrKey']->value[0]) {?> class="lu-nav__item swiper-slide is-active" <?php } else { ?> class="lu-nav__item swiper-slide" <?php }?>>
                            <a class="lu-nav__link"  data-toggle="lu-tab" href="#contTab<?php echo $_smarty_tpl->tpl_vars['tplValue']->value->getId();?>
">
                                <span class="lu-nav__link-text"><?php if ($_smarty_tpl->tpl_vars['tplValue']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['tplValue']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['tplValue']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['tplValue']->value->getTitle());
}?></span>
                            </a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        </div>
    </div>
    <div class="lu-widget__body">
        <div class="lu-tab-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getElements(), 'tplValue', false, 'tplKey');
$_smarty_tpl->tpl_vars['tplValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tplKey']->value => $_smarty_tpl->tpl_vars['tplValue']->value) {
$_smarty_tpl->tpl_vars['tplValue']->do_else = false;
?>
                <div id="contTab<?php echo $_smarty_tpl->tpl_vars['tplValue']->value->getId();?>
" class="lu-tab-pane <?php if ($_smarty_tpl->tpl_vars['tplKey']->value === $_smarty_tpl->tpl_vars['firstArrKey']->value[0]) {?> is-active <?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['tplValue']->value->getHtml();?>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}
