<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:46:53
  from '/var/www/html/templates/lagom2/user-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40a0d13be93_07153369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62289ececc0a077e9aa7451ae2d428f724dc4f26' => 
    array (
      0 => '/var/www/html/templates/lagom2/user-profile.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40a0d13be93_07153369 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="section"> 
        <div class="section-header">   
            <h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['userProfile']['profile'];?>
</h3>
        </div>
        <div class="section-body">
            <form method="post" action="<?php echo routePath('user-profile-save');?>
">   
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFirstName" class="control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>

                                    </label>
                                    <input
                                        type="text"
                                        name="firstname"
                                        id="inputFirstName"
                                        value="<?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
"
                                        class="form-control"
                                        <?php if (in_array('firstname',$_smarty_tpl->tpl_vars['uneditableFields']->value)) {?>readonly="readonly"<?php }?>
                                    >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputLastName" class="control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>

                                    </label>
                                    <input
                                        type="text"
                                        name="lastname"
                                        id="inputLastName"
                                        value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
"
                                        class="form-control"
                                        <?php if (in_array('lastname',$_smarty_tpl->tpl_vars['uneditableFields']->value)) {?>readonly="readonly"<?php }?>
                                    >
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>     
                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
                    <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
                </div>
            </form>
        </div>
    </div>
    <div class="section">    
        <h3 class="section-title d-flex align-center">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['userProfile']['changeEmail'];?>

            <?php if ($_smarty_tpl->tpl_vars['user']->value->needsToCompleteEmailVerification()) {?>
                <span class="m-l-1x label label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['userProfile']['notVerified'];?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->emailVerified()) {?>
                <span class="m-l-1x label label-success"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['userProfile']['verified'];?>
</span>
            <?php }?>
        </h3>
        <div class="section-body">
            <form method="post" action="<?php echo routePath('user-profile-email-save');?>
">
                <div class="panel panel-default panel-form">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>

                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="inputEmail"
                                        value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"
                                        class="form-control"
                                        <?php if (in_array('email',$_smarty_tpl->tpl_vars['uneditableFields']->value)) {?>readonly="readonly"<?php }?>
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
                    <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
                </div>
            </form>
        </div>
    </div>    
<?php }?>


<?php }
}
