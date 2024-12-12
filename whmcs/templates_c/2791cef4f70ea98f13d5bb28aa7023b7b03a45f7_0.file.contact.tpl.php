<?php
/* Smarty version 3.1.48, created on 2024-12-12 07:33:30
  from '/var/www/html/templates/lagom2/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675a91ca49f624_75676776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2791cef4f70ea98f13d5bb28aa7023b7b03a45f7' => 
    array (
      0 => '/var/www/html/templates/lagom2/contact.tpl',
      1 => 1679490290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675a91ca49f624_75676776 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
<div class="login login-lg m-a">
    <div class="login-wrapper">
        <div class="login-body">
            <?php if (!$_smarty_tpl->tpl_vars['sent']->value) {?>
                <div class="login-header">
                    <h1 class="login-title"><?php echo $_smarty_tpl->tpl_vars['displayTitle']->value;?>
</h1>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
                <div class="message message-no-data essage-lg message-success">
                    <div class="message-icon">
                        <i class="lm lm-check"></i>
                    </div>
                    <h2 class="message-title"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactsent'];?>
</h2>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
" class="btn btn-default">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"errorPage.404.home"),$_smarty_tpl ) );?>

                    </a>
                </div>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
                <?php }?>
                <form method="post" action="contact.php" role="form">
                    <input type="hidden" name="action" value="send" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientname'];?>
</label>
                                <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="inputName" />
                            </div>
                        </div>    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputEmail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientemail'];?>
</label>
                                <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" id="inputEmail" />
                            </div>   
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputSubject" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubject'];?>
</label>
                                <input type="subject" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" id="inputSubject" />   
                            </div>
                        </div>
                        <div class="col-md-12">    
                            <div class="form-group">
                                <label for="inputMessage" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</label>
                                <textarea name="message" rows="7" class="form-control" id="inputMessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>      
                    <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {?>    
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible'))) || !$_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value) || !$_smarty_tpl->tpl_vars['captcha']->value->isEnabled()) {?>
                        <div class="form-actions flex-center">
                            <button type="submit" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactsend'];?>
</button>  
                        </div>
                    <?php }?>
                </form> 
            <?php }?>
        </div>    
    </div>
</div>   
<?php }
}
}
