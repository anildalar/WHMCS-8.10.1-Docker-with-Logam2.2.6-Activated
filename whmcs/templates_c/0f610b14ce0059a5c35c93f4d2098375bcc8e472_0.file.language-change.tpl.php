<?php
/* Smarty version 3.1.48, created on 2024-09-10 03:22:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/language-change.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dfbb6b91e712_82257376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f610b14ce0059a5c35c93f4d2098375bcc8e472' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/language-change.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dfbb6b91e712_82257376 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="changeLanguageModal" data-language-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i>Change Language</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-language-modal-cancel data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Any unsaved data will be lost</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--primary" data-language-modal-submit>
                    <span class="btn__text">Continue</span>
                </a>
                <button data-language-modal-cancel data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Cancel</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
