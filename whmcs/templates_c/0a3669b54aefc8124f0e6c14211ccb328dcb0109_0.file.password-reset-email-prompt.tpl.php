<?php
/* Smarty version 3.1.48, created on 2024-09-23 15:29:10
  from '/var/www/html/templates/lagom2/password-reset-email-prompt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f18946c00280_52829289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3669b54aefc8124f0e6c14211ccb328dcb0109' => 
    array (
      0 => '/var/www/html/templates/lagom2/password-reset-email-prompt.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f18946c00280_52829289 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/password-reset-email-prompt.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/overwrites/password-reset-email-prompt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?> 
    <p class="login-desc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetemailneeded'];?>
</p>
    <form class="loginForm" method="post" action="<?php echo routePath('password-reset-validate-email');?>
" role="form">
        <input type="hidden" name="action" value="reset" />
        <div class="form-group">
            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
</label>
            <input type="email" name="email" class="form-control input-lg" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled()) {?>
            <div class="login-captcha">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <?php }?>   
        <button type="submit" class="btn btn-lg btn-primary btn-block<?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
            <span class="btn-text">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>

            </span>
            <div class="loader loader-button hidden" >
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
            </div>
        </button>
    </form>
<?php }
}
}
