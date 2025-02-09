<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:19:39
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/license-refresh.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b07b64f0b5_46331160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51db4a3f0f0e1ef22fbdfbb690f5e93ec6d93e27' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/license-refresh.tpl',
      1 => 1730150156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784b07b64f0b5_46331160 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="refreshLicense" data-refresh-license-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['refresh_license']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body p-b-0x">
                <p class="m-b-3x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['refresh_license']['desc'];?>
</p>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" data-refresh-license-modal-btn data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text export__btn">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>

                    </span>
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline">
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>

                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
