<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/group/group-content-switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6bb103b2_65822730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e2ef90f515bfa1963958f1725405e81d4cd433' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/group/group-content-switch.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dfbb6bb103b2_65822730 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--hero" id="toggleGroupContentModal" data-switch-group-content-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title type-4 text-danger"><i class="ls ls-exclamation-circle m-r-2x"></i>Disable section content</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure to disable section content?</p>
            </div>
            <div class="modal__actions">
                <a data-switch-group-content-modal-submit class="btn btn--danger" data-index="" data-section="" data-position="">
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
