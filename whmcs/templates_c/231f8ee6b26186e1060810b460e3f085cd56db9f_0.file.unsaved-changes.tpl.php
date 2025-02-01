<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:33:06
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/unsaved-changes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b3a2333fe8_47337685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '231f8ee6b26186e1060810b460e3f085cd56db9f' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/unsaved-changes.tpl',
      1 => 1730150156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784b3a2333fe8_47337685 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="unsavedChanges" data-unsaved-changes-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['unsaved_changes']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['unsaved_changes']['desc1'];?>
</p>
                <p class="text-danger">
                    <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['unsaved_changes']['desc2'];?>
</strong>
                </p>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" data-unsaved-changes-modal-btn data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text export__btn">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['unsaved_changes']['btn_confirm'];?>

                    </span>
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline">
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['unsaved_changes']['btn_dismiss'];?>

                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
