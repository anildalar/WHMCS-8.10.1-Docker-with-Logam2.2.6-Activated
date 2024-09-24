<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:44
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/delete-item/delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252bc30be90_79290377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a457d70d86d470fe7076f2f2a6b5e2b93c59c8f0' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/delete-item/delete.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f252bc30be90_79290377 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="deleteItemModal" data-delete-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i>Delete list item</div>                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure to delete this list item?</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--danger" data-delete-modal-submit data-index="" data-list-name="">
                    <span class="btn__text">Yes, delete</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">No</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
