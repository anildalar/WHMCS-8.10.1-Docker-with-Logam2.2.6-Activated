<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:07:03
  from '/var/www/html/templates/lagom2/includes/verifyemail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f95f07696341_83236685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c00428dfd74eb46366fdd66a3df26d995cd381ba' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/verifyemail.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f95f07696341_83236685 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/verifyemail.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['showEmailVerificationBanner']->value) {?>
        <div class="alert alert-lagom alert-warning verification-banner email-verification">
            <div class="container">
                <div class="alert-body">
                    <div>
                        <i class="ls ls-exclamation-circle"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>

                    </div>
                    <button id="btnResendVerificationEmail" class="btn btn-warning btn-sm btn-resend-verify-email" data-email-sent="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailSent'];?>
" data-error-msg="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['error'];?>
" data-uri="<?php echo routePath('user-email-verification-resend');?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>
</span>
                        <span class="loader loader-button">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                        </span>
                    </button>
                </div>
                <div class="alert-actions">
                    <button id="btnEmailVerificationClose" data-uri="<?php echo routePath('dismiss-email-verification');?>
" type="button" class="btn btn-sm btn-icon close"><i class="ls ls-close"></i></button>
                </div> 
            </div>
        </div>
    <?php }
}
}
}
