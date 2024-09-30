<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:42:21
  from '/var/www/html/templates/lagom2/includes/login/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f9674daf5272_19940029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00dfc370f8824ef49806e77411c6a5952995cb58' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/login/register.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f9674daf5272_19940029 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/register.tpl")) {?>
     <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/overwrites/register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/layouts-vars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="login login-lg">   
        <?php if (($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['showLogo'] == '1' || $_smarty_tpl->tpl_vars['showLogo']->value)) {?> 
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <div class="login-wrapper">
            <div class="login-body register" id="registration">                
                <h1 class="login-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['skipAppNav']->value && $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default) {?>                    
                    <div class="custom-alerts">
                        <?php echo $_smarty_tpl->tpl_vars['lagomClientAlerts']->value->default;?>

                    </div>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/register-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div> 
            <div class="login-footer">
                <div class="text-center text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.already_registered');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.sign_in');?>
</a> <span class="text-lowercase"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['remoteAuthn']['titleOr'];?>
</span> <a href="<?php echo routePath('password-reset-begin');?>
"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('login.reset_password');?>
</a></div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/login/language-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"login"), 0, true);
?>   
    </div>
<?php }
}
}
