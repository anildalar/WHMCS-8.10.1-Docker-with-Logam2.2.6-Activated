<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:21:57
  from '/var/www/html/templates/lagom2/includes/validateuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea63757f1070_21475268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d2b5b8de80cbdc7aefc7b1e8b4198a1b7a1ca76' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/validateuser.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea63757f1070_21475268 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/validateuser.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/validateuser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['showUserValidationBanner']->value) {?>
        <div class="alert alert-lagom alert-warning verification-banner user-validation">
            <div class="container">
                <div class="alert-body">
                    <div>
                        <i class="ls ls-exclamation-circle"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fraud.furtherValShort'),$_smarty_tpl ) );?>

                    </div>
                    <button class="btn btn-warning btn-sm btn-action" data-url="<?php echo $_smarty_tpl->tpl_vars['userValidationUrl']->value;?>
" onclick="openValidationSubmitModal(this);return false;">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fraud.submitDocs'),$_smarty_tpl ) );?>
</span>
                        <span class="loader loader-button">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                        </span>
                    </button>
                </div>
                <div class="alert-actions">
                    <button id="btnUserValidationClose" type="button" class="btn btn-sm btn-icon close" data-uri="<?php echo routePath('dismiss-user-validation');?>
"><i class="ls ls-close"></i></button>
                </div>
            </div>
        </div>
        <div id="validationSubmitModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body top-margin-10">
                        <iframe id="validationContent" allow="camera <?php echo $_smarty_tpl->tpl_vars['userValidationHost']->value;?>
" width="100%" height="700" frameborder="0" src=""></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'close'),$_smarty_tpl ) );?>
</button>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
}
}
