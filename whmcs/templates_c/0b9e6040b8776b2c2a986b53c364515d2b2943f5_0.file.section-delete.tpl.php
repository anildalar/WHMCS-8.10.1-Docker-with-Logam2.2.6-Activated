<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:45:03
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/section/section-delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de2f754d62_21502529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b9e6040b8776b2c2a986b53c364515d2b2943f5' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/section/section-delete.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7de2f754d62_21502529 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--hero" id="modalRemoveSection" data-modal-delete-section>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title type-4 text-danger"><i class="ls ls-exclamation-circle m-r-2x text-danger"></i><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['modal']['remove_section']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure that you want to remove this section?</p>
                <p><b>This action can NOT be undone!</b> Please make sure to select correct action!</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--danger" data-modal-delete-section-submit data-section-id="" data-position="">
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>
</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
