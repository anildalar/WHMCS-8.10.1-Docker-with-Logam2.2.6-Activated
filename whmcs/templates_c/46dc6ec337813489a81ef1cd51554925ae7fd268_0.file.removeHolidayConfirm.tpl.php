<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:43:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/removeHolidayConfirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff889ebdbd0_57698796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46dc6ec337813489a81ef1cd51554925ae7fd268' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/supporthours/includes/removeHolidayConfirm.tpl',
      1 => 1700238186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff889ebdbd0_57698796 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="removeHolidayItem" data-support-hours-holiday-remove-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h6 class="top__title text-danger"></i>Remove Holidays Item</h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>You are trying to remove holidays item, <b class="text-danger">this action can not be undone!</b>. Please confirm, to remove this item completely.</p>
            </div>
            <div class="modal__actions">
                <button class="btn btn--danger" type="button" data-support-hours-holiday-remove-modal-submit data-item="" data-id="">
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
