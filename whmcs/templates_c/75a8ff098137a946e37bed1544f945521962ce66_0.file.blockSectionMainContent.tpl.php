<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:58:22
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/sections/blockSectionMainContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f6de9898c9_35690623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a8ff098137a946e37bed1544f945521962ce66' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/customWidgets/sections/blockSectionMainContent.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f6de9898c9_35690623 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-block__body" id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
">
    <div class="lu-widget">
        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isShowTitle()) {?>
            <div class="lu-widget__header">
                <div class="lu-widget__top lu-top">
                     <div class="lu-top__title"> <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?></div>
                </div>
            </div>
        <?php }?>
        <div class="lu-widget__content">
            <div class="lu-row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getFieldComponents(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml();?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </div>
</div><?php }
}
