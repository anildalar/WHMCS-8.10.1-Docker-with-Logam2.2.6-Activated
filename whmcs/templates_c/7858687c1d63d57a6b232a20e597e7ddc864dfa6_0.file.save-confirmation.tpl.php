<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:27:35
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/save-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff4e77dd284_79465376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7858687c1d63d57a6b232a20e597e7ddc864dfa6' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/save-confirmation.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff4e77dd284_79465376 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="saveConfirmationModal" data-save-confirmation-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['settings']['title'];?>

                </div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal"
                            aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['settings']['subtitle'];?>
</strong></p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--primary" data-confirm-save-changes data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>

                    </span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline">
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>

                    </span>
                </button>
            </div>
        </div>
    </div>
</div><?php }
}
