<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:45:03
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/seo-image-remove.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de2f4a10f8_73512510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe5c6be6130d538a74611fb644efe3010936af0' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/seo-image-remove.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7de2f4a10f8_73512510 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="deleteSeoImageModal" data-delete-seo-image-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger">Remove Icon</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure to remove this image?</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--danger" data-delete-seo-image-submit data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text">Yes, delete</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">No</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
