<?php
/* Smarty version 3.1.48, created on 2025-02-10 07:14:51
  from '/var/www/html/templates/lagom2/includes/login/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a9a76be4aac7_68236964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f164705179e20033a49f828f3529ea969336e5ed' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/login/login.tpl',
      1 => 1738818665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a9a76be4aac7_68236964 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/login.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="login">
        <?php if (($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showLogo'] == '1' || $_smarty_tpl->tpl_vars['showLogo']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
        <?php }?>
        <div class="login-wrapper">
            <div class="login-body"> 
                <h1 class="login-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeloginbtn'];?>
</h1>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <?php if ($_smarty_tpl->tpl_vars['skipAppNav']->value && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default) {?>
                    <div class="custom-alerts">
                        <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
                    <div class="providerLinkingFeedback"></div>
                <?php }?>
                <form class="login-form" method="post" action="<?php echo routePath('login-validate');?>
" role="form">
                    <div class="form-group">
                        <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                        <input type="email" name="username" class="form-control input-lg" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus tabindex="1">
                    </div>
                    <div class="form-group">
                        <div class="d-flex space-between">
                            <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                            <a href="<?php echo routePath('password-reset-begin');?>
" tabindex="3"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.forgot');?>
</a>
                        </div>
                        <input type="password" name="password" class="form-control input-lg" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off" tabindex="2">
                    </div>
                    <div class="form-group">
                        <label class="checkbox m-b-2x">
                            <input class="icheck-control" type="checkbox" name="rememberme" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>

                        </label>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled()) {?>
                    <div class="login-captcha">
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    </div>
                    <?php }?>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
" id="login" tabindex="4">
                        <span class="btn-text">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>

                        </span>
                        <div class="loader loader-button hidden" >
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>
                        </div>
                    </button>
                </form>
                <?php if (!$_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['socialButtons'] == '1' && $_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
                <div class="login-divider">
                    <span></span>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['or'];?>
</span>
                    <span></span>
                </div> 
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customFeedback'=>true,'linkContext'=>"login"), 0, true);
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['SocialMediaLogInAddonIsActive']->value && $_smarty_tpl->tpl_vars['social_media_login_integration']->value) {?> 
                    <div class="login-divider">
                        <span></span>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['or'];?>
</span>
                        <span></span>
                    </div> 
                    <div class="social-media social-media-login">
                        <?php echo $_smarty_tpl->tpl_vars['social_media_login_integration']->value;?>

                    </div>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
            <div class="login-footer">
                <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('social.not_member');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php" tabindex="5" ><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['createAccount'];?>
</a></div>
            </div>
            <?php }?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/language-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"login"), 0, true);
?>   
    </div>
<?php }?>    <?php }
}
