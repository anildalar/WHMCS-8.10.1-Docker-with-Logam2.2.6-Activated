<?php
/* Smarty version 3.1.48, created on 2024-09-13 10:20:33
  from '/var/www/html/templates/lagom2/account-user-management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e411f156d400_35107132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f795ec548ca088035e4acdf899dbaa1485e5370e' => 
    array (
      0 => '/var/www/html/templates/lagom2/account-user-management.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e411f156d400_35107132 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="section">
        <div class="section-header d-flex align-center m-b-24">
            <h3 class="section-title m-b-0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.usersFound",'count'=>$_smarty_tpl->tpl_vars['users']->value->count()),$_smarty_tpl ) );?>
</h3>
            <a href="#inviteNewUser" class="btn btn-primary invite-users-btn" data-toggle="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteNewUser"),$_smarty_tpl ) );?>
</a>
        </div>
        <div class="section-body">
            <div class="panel panel-users">
                <div class="panel-body">
                    <ul class="user-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                            <li class="user-list-item">
                                <div class="user-list-item-avatar">
                                    <img src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['user']->value->email);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                                </div>
                                <div class="user-list-item-body">
                                    <div class="user-list-item-info">
                                        <div class="user-list-item-name">
                                            <?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>

                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->hasTwoFactorAuthEnabled()) {?>
                                                <i class="ls ls-shield text-success" data-toggle="tooltip" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twoFactor.enabled'),$_smarty_tpl ) );?>
"></i>
                                            <?php } else { ?>
                                                <i class="ls ls-shield text-warning" data-toggle="tooltip" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'twoFactor.disabled'),$_smarty_tpl ) );?>
"></i>
                                            <?php }?>
                                        </div>
                                        <div class="user-list-item-email"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</div>
                                    </div>
                                    <div class="user-list-item-date">
                                        <div class="text-small text-light"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.lastLogin"),$_smarty_tpl ) );?>
:</div>
                                        <div><?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->hasLastLogin()) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['user']->value->pivot->getLastLogin()->diffForHumans();?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['never'];?>

                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-list-item-actions">
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->owner) {?>
                                        <div class="label label-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientOwner"),$_smarty_tpl ) );?>
</div>
                                    <?php } else { ?>
                                        <a href="<?php echo routePath('account-users-permissions',$_smarty_tpl->tpl_vars['user']->value->id);?>
" class="btn btn-sm btn-icon btn-manage-permissions"<?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->owner) {?> disabled="disabled"<?php }?> data-toggle="tooltip" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.managePermissions"),$_smarty_tpl ) );?>
">
                                            <i class="lm lm-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-icon btn-remove-user" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value->pivot->owner) {?>disabled="disabled"<?php }?> data-toggle="tooltip" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccess"),$_smarty_tpl ) );?>
">
                                            <i class="lm lm-trash"></i>
                                        </a>
                                    <?php }?>
                                </div>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
            <p class="text-small">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.accountOwnerPermissionsInfo"),$_smarty_tpl ) );?>
</p> 
        </div>
    </div>    
    <?php if ($_smarty_tpl->tpl_vars['invites']->value->count() > 0) {?>
    <div class="section">
        <div class="sction-header">
            <h3 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.pendingInvites"),$_smarty_tpl ) );?>
</h3>
        </div>
        <div class="section-body">
            <div class="panel panel-users">
                <div class="panel-body">
                    <ul class="user-list user-list-invites">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invites']->value, 'invite');
$_smarty_tpl->tpl_vars['invite']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invite']->value) {
$_smarty_tpl->tpl_vars['invite']->do_else = false;
?>
                            <li class="user-list-item">
                                <span class="user-list-item-avatar">
                                    <img src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['invite']->value->email);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                                </span>
                                <span class="user-list-item-info">
                                    <span class="user-list-item-name"><?php echo $_smarty_tpl->tpl_vars['invite']->value->email;?>
</span>
                                </span>
                                <span class="user-list-item-date">
                                    <span class="text-small text-light"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteSent"),$_smarty_tpl ) );?>
:</span>
                                    <span><?php echo $_smarty_tpl->tpl_vars['invite']->value->created_at->diffForHumans();?>
</span>
                                </span>
                                <form class="user-list-item-actions" method="post" action="<?php echo routePath('account-users-invite-resend');?>
">
                                    <input type="hidden" name="inviteid" value="<?php echo $_smarty_tpl->tpl_vars['invite']->value->id;?>
">
                                    <button type="submit" class="btn btn-sm btn-icon" data-toggle="tooltip" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.resendInvite"),$_smarty_tpl ) );?>
">
                                        <i class="ls ls-refresh"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-icon btn-cancel-invite" data-id="<?php echo $_smarty_tpl->tpl_vars['invite']->value->id;?>
" data-toggle="tooltip" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInvite"),$_smarty_tpl ) );?>
">
                                        <i class="ls ls-close"></i>
                                    </button>
                                </form>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                    </ul>
                </div>
            </div>     
        </div>
    </div>       
    <?php }?>
    <form method="post" action="<?php echo routePath('account-users-invite');?>
">
        <div class="modal modal-lg fade" id="inviteNewUser">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                        <h3 class="modal-title">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteNewUser"),$_smarty_tpl ) );?>

                        </h3>
                    </div>
                    <div class="modal-body has-scroll">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.inviteNewUserDescription"),$_smarty_tpl ) );?>
</p>
                        <div class="form-group">
                            <input type="email" name="inviteemail" placeholder="name@example.com" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['formdata']->value['inviteemail'];?>
">
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input class="icheck-control" type="radio" name="permissions" value="all" checked="checked">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.allPermissions"),$_smarty_tpl ) );?>

                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input class="icheck-control" type="radio" name="permissions" value="choose">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.choosePermissions"),$_smarty_tpl ) );?>

                                </label>
                            </div>
                        </div>
                        <div class="hidden" id="invitePermissions">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>
                                <div class="checkbox">
                                    <label>
                                        <input class="icheck-control" type="checkbox" name="perms[<?php echo $_smarty_tpl->tpl_vars['permission']->value['key'];?>
]" value="1">
                                        <?php echo $_smarty_tpl->tpl_vars['permission']->value['title'];?>

                                        -
                                        <?php echo $_smarty_tpl->tpl_vars['permission']->value['description'];?>

                                    </label>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.sendInvite"),$_smarty_tpl ) );?>

                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cancel"),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="<?php echo routePath('user-accounts');?>
">
        <input type="hidden" name="id" value="" id="inputSwitchAcctId">
    </form>

    <form method="post" action="<?php echo routePath('account-users-remove');?>
">
        <input type="hidden" name="userid" id="inputRemoveUserId">
        <div class="modal fade" id="modalRemoveUser">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                        <h3 class="modal-title">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccess"),$_smarty_tpl ) );?>

                        </h3>
                    </div>
                    <div class="modal-body">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccessSure"),$_smarty_tpl ) );?>
</p>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.removeAccessInfo"),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnRemoveUserConfirm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"confirm"),$_smarty_tpl ) );?>

                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cancel"),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="<?php echo routePath('account-users-invite-cancel');?>
">
        <input type="hidden" name="inviteid" id="inputCancelInviteId">
        <div class="modal fade" id="modalCancelInvite">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                        <h3 class="modal-title">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInvite"),$_smarty_tpl ) );?>

                        </h3>
                    </div>
                    <div class="modal-body">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInviteSure"),$_smarty_tpl ) );?>
</p>
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"userManagement.cancelInviteInfo"),$_smarty_tpl ) );?>
</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnCancelInviteConfirm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"confirm"),$_smarty_tpl ) );?>

                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cancel"),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            jQuery('input:radio[name=permissions]').on('ifChecked', function () {
                if ($(this).val() === 'choose') {
                    jQuery('#invitePermissions').removeClass('hidden');
                } else {
                    jQuery('#invitePermissions').addClass('hidden');
                }
            });
            jQuery('.btn-manage-permissions').click(function(e) {
                if (jQuery(this).attr('disabled')) {
                    e.preventDefault();
                }
            });
            jQuery('.btn-remove-user').click(function(e) {
                e.preventDefault();
                if (jQuery(this).attr('disabled')) {
                    return;
                }
                jQuery('#inputRemoveUserId').val(jQuery(this).data('id'));
                jQuery('#modalRemoveUser').modal('show');
            });
            jQuery('.btn-cancel-invite').click(function(e) {
                e.preventDefault();
                jQuery('#inputCancelInviteId').val(jQuery(this).data('id'));
                jQuery('#modalCancelInvite').modal('show');
            });
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
