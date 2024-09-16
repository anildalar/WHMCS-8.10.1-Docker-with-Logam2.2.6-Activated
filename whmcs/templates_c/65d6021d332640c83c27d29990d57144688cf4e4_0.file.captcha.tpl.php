<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:48:33
  from '/var/www/html/templates/lagom2/includes/captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40a71d155e5_45022150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d6021d332640c83c27d29990d57144688cf4e4' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/captcha.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40a71d155e5_45022150 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/captcha.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>     
    <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewcart" && !in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible'))) {?>
            <div class="section">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "homepage") {?>
                <div class="domain-search-captcha">
            <?php }?>    
            <div id="google-recaptcha-domainchecker" class="recaptcha-container center-block <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "contact") {?> d-flex justify-center<?php }?>"></div>
            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "contact") {?>
                <div class="form-actions d-flex justify-center"><button type="submit" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactsend'];?>
</button></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "homepage") {?>
                </div>
            <?php }?>
        <?php } elseif (!in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible','recaptcha'))) {?>
            <div class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value != 'clientregister' && $_smarty_tpl->tpl_vars['templatefile']->value != 'contact') {?>text-center<?php }?> captcha captcha-centered m-a form-group" id="captchaContainer">
                <div id="default-captcha-domainchecker" class="<?php if ($_smarty_tpl->tpl_vars['filename']->value == 'domainchecker') {?>input-group input-group-box <?php }
if ($_smarty_tpl->tpl_vars['templatefile']->value != 'contact') {?>text-center<?php } else { ?>section<?php }?>">
                    <div class="captchatext text-light"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"captchaverify"),$_smarty_tpl ) );?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "contact") {?>
                        <div class="d-flex space-between flex-nowrap">
                    <?php }?>
                    <div class="captchaimage input-group <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "login" || $_smarty_tpl->tpl_vars['templatefile']->value == "password-reset-container") {?>w-100<?php }?>">
                        <div class="input-group-addon">
                             <img id="inputCaptchaImage" data-src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" align="middle" />
                        </div>
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
"/>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "contact") {?>
                        <button type="submit" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactsend'];?>
</button>  
                        </div>
                    <?php }?>
                </div>    
            </div>
            <div class="clearfix"></div>
        <?php }?>
        <?php if (in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible'))) {?>
            
                <style class="section">
                    #divDynamicRecaptcha[data-size="invisible"] + .tooltip{
                        display: none!important;
                    }
                </style>
            
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewcart" && !in_array($_smarty_tpl->tpl_vars['captcha']->value,array('invisible'))) {?>
            		</div>
                </div>
            </div>
        <?php }?>
    <?php }
}?>    <?php }
}
