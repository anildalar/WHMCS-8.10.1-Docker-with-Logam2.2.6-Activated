<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:33:06
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/overwrite-display-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b3a23431e9_77882670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecec53c0e3424ab0f2ff5a138683496507646e0b' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/overwrite-display-menu.tpl',
      1 => 1730150154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6784b3a23431e9_77882670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="overwriteDisplayMenuModal" data-menu-overwrite-rules-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['overwrite_menu_display_rules']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p class="m-b-3x"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['overwrite_menu_display_rules']['desc'];?>
</strong></p>
                <ul class="list" data-menu-overwrite-rules-modal-list>
                
                </ul>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" data-menu-overwrite-rules-modal-submit data-btn-loader data-menu-form="#updateMenuForm">
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
