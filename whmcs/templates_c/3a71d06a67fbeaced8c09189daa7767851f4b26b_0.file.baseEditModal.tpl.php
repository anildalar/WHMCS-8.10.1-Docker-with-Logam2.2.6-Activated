<?php
/* Smarty version 3.1.48, created on 2024-10-02 10:10:06
  from '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/modals/baseEditModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fd1bfeb942d2_54810986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a71d06a67fbeaced8c09189daa7767851f4b26b' => 
    array (
      0 => '/var/www/html/modules/servers/HetznerVps/templates/admin/ui/core/default/widget/modals/baseEditModal.tpl',
      1 => 1704891944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fd1bfeb942d2_54810986 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="lu-modal show lu-modal--<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getModalSize();?>
" id="confirmationModal" namespace="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getNamespace();?>
" index="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
">
    <div class="lu-modal__dialog">
        <div class="lu-modal__content" id="mgModalContainer">
            <div class="lu-modal__top lu-top">
                <div class="lu-top__title lu-type-6">
                    <span class="lu-text-faded lu-font-weight-normal">
                        <?php if ($_smarty_tpl->tpl_vars['rawObject']->value->isRawTitle()) {
echo $_smarty_tpl->tpl_vars['rawObject']->value->getRawTitle();
} elseif ($_smarty_tpl->tpl_vars['rawObject']->value->getTitle()) {
echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('modal',$_smarty_tpl->tpl_vars['rawObject']->value->getTitle());
}?>
                    </span>
                </div>
                <div class="lu-top__toolbar">
                    <button class="lu-btn lu-btn--xs lu-btn--default lu-btn--icon lu-btn--link lu-btn--plain closeModal" data-dismiss="lu-modal" aria-label="Close" @click='closeModal($event)'>
                        <i class="lu-btn__icon lu-zmdi lu-zmdi-close"></i>
                    </button>
                </div>
            </div>
            <div class="lu-modal__body">
                <div class="lu-row">
                    <div class="lu-col-md-12">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getForms(), 'form');
$_smarty_tpl->tpl_vars['form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['form']->value->getHtml();?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
            <div class="lu-modal__actions">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rawObject']->value->getActionButtons(), 'actionButton');
$_smarty_tpl->tpl_vars['actionButton']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['actionButton']->value) {
$_smarty_tpl->tpl_vars['actionButton']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['actionButton']->value->getHtml();?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>
            <?php if (($_smarty_tpl->tpl_vars['isDebug']->value == true && (count($_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs()) != 0))) {?>
                <div class="lu-modal__actions">
                    <div class="lu-row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MGLANG']->value->getMissingLangs(), 'value', false, 'varible');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varible']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <div class="lu-col-md-12"><b><?php echo $_smarty_tpl->tpl_vars['varible']->value;?>
</b> = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';</div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>            <?php }
}
