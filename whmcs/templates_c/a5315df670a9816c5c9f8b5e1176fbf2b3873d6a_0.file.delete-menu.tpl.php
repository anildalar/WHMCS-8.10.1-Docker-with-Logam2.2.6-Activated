<?php
/* Smarty version 3.1.48, created on 2024-09-20 07:22:15
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/delete-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed22a7770090_94030958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5315df670a9816c5c9f8b5e1176fbf2b3873d6a' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/includes/modals/delete-menu.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed22a7770090_94030958 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="deleteMenuModal" data-delete-menu-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['modal']['remove_menu']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['modal']['remove_menu']['desc'];?>
</p>
            </div>
            <div class="modal__actions">
                <a data-delete-menu-modal-submit data-btn-loader class="btn btn--danger" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@delete',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'menuId'=>$_smarty_tpl->tpl_vars['menu']->value->id));?>
">
                    <span class="btn__preloader preloader preloader--light"></span>
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
