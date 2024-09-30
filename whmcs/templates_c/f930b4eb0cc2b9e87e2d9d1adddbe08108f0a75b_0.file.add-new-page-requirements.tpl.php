<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/add-new-page-requirements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de27890573_29609938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f930b4eb0cc2b9e87e2d9d1adddbe08108f0a75b' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/other/add-new-page-requirements.tpl',
      1 => 1720189762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f7de27890573_29609938 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal--hero" id="pagePermissionsModal" data-page-permissions-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title type-4 text-danger"><i class="ls ls-exclamation-circle m-r-2x"></i>Can't create page</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body" 
                data-page-permissions-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@customPageVerify',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
                data-page-permissions-href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@new',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
"
            >
                <p>Check permissions</p>
                <p data-page-permissions-root class="is-hidden">We cannot create page, check your permissions on main catalog of WHMCS if it is writable.</p>
                <p data-page-permissions-template class="is-hidden">We cannot create page, check your permissions on template catalog of WHMCS if it is writable.</p>
                <p data-page-permissions-htaccess class="is-hidden">We cannot create page, check your permissions of .htaccess if it is writable.</p>
            </div>
            <div class="modal__actions">
                <a class="btn btn--primary">
                    <span class="btn__text">Check Again</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span></button>
            </div>
        </div>
    </div>
</div><?php }
}
