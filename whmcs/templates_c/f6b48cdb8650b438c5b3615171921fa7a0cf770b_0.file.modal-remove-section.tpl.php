<?php
/* Smarty version 3.1.48, created on 2024-09-24 08:03:35
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/includes/modal-remove-section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f27257f32576_84704487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b48cdb8650b438c5b3615171921fa7a0cf770b' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/sections/includes/modal-remove-section.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f27257f32576_84704487 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--hero" id="deleteSectionModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title type-4 text-danger"><i class="ls ls-exclamation-circle m-r-2x text-danger"></i>Remove Section</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure that you want to remove this section?</p>
                <p><b>This action can NOT be undone!</b> Please make sure to select correct action!</p>
            </div>
            <div class="modal__actions">
                <a data-delete-menu-modal-submit class="btn btn--danger" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@delete',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'sectionId'=>$_smarty_tpl->tpl_vars['section']->value->id));?>
">
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
