<?php
/* Smarty version 3.1.48, created on 2024-12-17 03:59:00
  from '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/formInTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6760f7040d1137_21206101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bc276b86b4c8a49de9b03db0be833111c208736' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/templates/admin/ui/core/default/widget/forms/formInTab.tpl',
      1 => 1702658892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6760f7040d1137_21206101 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-col-md-12 mg-form-in-tab">
    <div class="box light">
        <div class="box-title">
            <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isShowTitle()) {?>
                <div class="caption">
                    <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getIcon();?>
"></i><?php }?>
                    <span class="caption-subject bold font-red-thunderbird uppercase">
                        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
                    </span>
                </div>
            <?php }?>
            <div class="rc-actions lu-pull-right" style="display: inline-flex;">
                <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->insertSearchForm();?>

            </div>
        </div>
        <div class="box-body">
            <div class="lu-row">
                <div class="lu-col-md-12">
                    <form id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
" mgformtype="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getFormType();?>
" id="<?php echo $_smarty_tpl->tpl_vars['elementId']->value;?>
">
                        <div class="lu-row mg-tab-form-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getSections(), 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['section']->value->getHtml();?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getFields(), 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml();?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="lu-col-md-12 ui-form-submit">
                            <?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getSubmitHtml();?>

                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
             
<?php }
}
