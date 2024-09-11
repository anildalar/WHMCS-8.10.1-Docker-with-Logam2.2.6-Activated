<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:53:05
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/page-delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dffae1516616_69867244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a274bc2031da38ee54ec971cc38d5a4662bbfe3' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/page-delete.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dffae1516616_69867244 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--hero" id="deletePageModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title type-4 text-danger"><i class="ls ls-exclamation-circle m-r-2x text-danger"></i>Remove Page</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Are you sure that you want to remove this page?</p>
                <p><b>This action can NOT be undone!</b> Please make sure to select correct action!</p>
            </div>
            <div class="modal__actions">
                <a data-delete-menu-modal-submit class="btn btn--danger" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@delete',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'pageId'=>$_smarty_tpl->tpl_vars['customPage']->value->id));?>
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
