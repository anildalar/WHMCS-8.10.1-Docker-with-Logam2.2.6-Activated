<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:42:32
  from '/var/www/html/templates/lagom2/includes/login/password-reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f967583290a3_29661744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f97f6e8c484333322125276e4e728a59f1e5fa1' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/login/password-reset.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f967583290a3_29661744 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/password-reset.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/password-reset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="login">
        <div class="login-header">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showLogo'] == '1' || $_smarty_tpl->tpl_vars['showLogo']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
            <?php }?>
        </div>
        <div class="login-wrapper">
            <div class="login-body"> 
                <h1 class="login-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwreset'];?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['skipAppNav']->value && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default) {?>                   
                    <div class="custom-alerts">
                        <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default;?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['innerTemplate']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['noPasswordResetWhenLoggedIn'],'textcenter'=>true), 0, true);
?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['successMessage']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['successTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['successMessage']->value,'textcenter'=>true), 0, true);
?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['errorMessage']->value,'textcenter'=>true), 0, true);
?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['innerTemplate']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/password-reset-".((string)$_smarty_tpl->tpl_vars['innerTemplate']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        <?php }?>
                    <?php }?>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
            <div class="login-footer">
                <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('social.not_member');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['createAccount'];?>
</a></div>
            </div>
            <?php }?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/language-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"login"), 0, true);
?>   
    </div>
<?php }
}
}
