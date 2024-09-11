<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/includes/domain/captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce6ff147_05466282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01bb0ea6fd0da844de10b952c617b973828956e' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/domain/captcha.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/captcha.tpl' => 1,
  ),
),false)) {
function content_66dff7ce6ff147_05466282 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/captcha.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value) && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isInvisible()) {?>
        <div class="domain-search-captcha domainchecker-homepage-captcha <?php if ($_smarty_tpl->tpl_vars['pageClass']->value) {
echo $_smarty_tpl->tpl_vars['pageClass']->value;
}?>">
            <div class="captcha-container captcha captcha-centered text-center m-a form-group" id="captchaContainer">
                    <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?> 
                        <div class="recaptcha-container"></div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['captcha']->value != "recaptcha") {?>
                    <div class="captchatext text-light"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cartSimpleCaptcha"),$_smarty_tpl ) );?>
</div>
                    <div class="input-group">                                 
                        <div class="input-group-addon">
                            <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                        </div>    
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }
}
}
}
