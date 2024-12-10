<?php
/* Smarty version 3.1.48, created on 2024-11-26 12:00:11
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/others/configurableOptionsWidget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745b84b4b9251_21857422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11a274c0f3d6f0185e94ca1f37bccc72549e685' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/others/configurableOptionsWidget.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745b84b4b9251_21857422 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lu-widget mg-configurable-options-panel <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlAttributes']->value, 'data', false, 'name');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
    <div class="lu-widget__header">
        <div class="lu-widget__top lu-top">
            <div class="lu-top__title">
                <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {?>
                    <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();?>

                <?php } elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {?>
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());?>

                <?php }?>
            </div>
        </div>
        <div class="lu-top__toolbar">

        </div>
    </div>
    <div class="lu-widget__body">
        <div class="lu-widget__content config-option-box">
            <?php if ($_smarty_tpl->tpl_vars['customTplVars']->value['options']) {?>
                <div class="lu-row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customTplVars']->value['options'], 'optItem', false, 'optKey');
$_smarty_tpl->tpl_vars['optItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optKey']->value => $_smarty_tpl->tpl_vars['optItem']->value) {
$_smarty_tpl->tpl_vars['optItem']->do_else = false;
?>
                        <div class="lu-col-md-6 lu-p-r-4x config-option text-left">
                            <b><?php echo $_smarty_tpl->tpl_vars['optItem']->value['optionname'];?>
</b>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ((count($_smarty_tpl->tpl_vars['customTplVars']->value['options']))%2 !== 0) {?>
                        <div class="lu-col-md-6 lu-p-r-4x config-option text-left">
                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <div class="col-md-12 confirm-row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getButtons(), 'button', false, 'buttonKey');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['buttonKey']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['button']->value->getHtml();?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div>
<?php }
}
