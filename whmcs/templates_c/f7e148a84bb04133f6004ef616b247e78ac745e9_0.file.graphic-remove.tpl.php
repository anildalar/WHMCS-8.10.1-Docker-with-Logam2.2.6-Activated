<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:24:26
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/delete-item/graphic-remove.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b19a019af3_44279290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7e148a84bb04133f6004ef616b247e78ac745e9' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/delete-item/graphic-remove.tpl',
      1 => 1734354616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784b19a019af3_44279290 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="deleteGraphicModal" data-delete-graphic-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i>Delete Graphic</div>                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure to delete this graphic?</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--danger" data-delete-graphic-modal-submit data-graphic-name="" data-section="">
                    <span class="btn__text">Yes, delete</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">No</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
