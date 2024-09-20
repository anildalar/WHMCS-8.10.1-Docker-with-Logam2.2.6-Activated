<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:22:15
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/change-type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed22a778b0e1_80036258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47c9d65975b5f5753f585fa135f087698a6c2f85' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/change-type.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed22a778b0e1_80036258 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="changeTypeModal" data-modal-change-type>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['change_type']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['modal']['change_type']['desc'];?>
</p>
            </div>
            <div class="modal__actions">
                <button data-modal-change-type-submit data-index data-btn-loader data-parent type="button" class="btn btn--danger">
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>
</span>
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
