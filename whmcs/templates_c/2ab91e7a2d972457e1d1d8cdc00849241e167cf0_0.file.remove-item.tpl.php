<?php
/* Smarty version 3.1.48, created on 2024-09-24 06:17:45
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/customcode/includes/modal/remove-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f259891d5de6_94974953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab91e7a2d972457e1d1d8cdc00849241e167cf0' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/customcode/includes/modal/remove-item.tpl',
      1 => 1700234028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f259891d5de6_94974953 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modal-delete-item" class="modal" data-custom-code-modal-remove>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['title'];?>
</h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['extensions']['custom_code_modal']['desc'];?>
</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--danger" 
                    <?php if ($_smarty_tpl->tpl_vars['item']->value) {?>
                        href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'id'=>$_smarty_tpl->tpl_vars['extension']->value->getItemData("id"),'exaction'=>"delete"));?>
" 
                    <?php } else { ?>
                        href="#"
                        data-custom-code-modal-remove-confirm
                    <?php }?>
                    data-btn-loader
                >
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text">
                        Confirm
                    </span>    
                </a>
                <button class="btn btn--outline btn--default" data-dismiss="lu-modal" aria-label="Close">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div><?php }
}
