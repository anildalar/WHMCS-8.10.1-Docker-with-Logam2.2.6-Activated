<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:22:56
  from '/var/www/html/templates/lagom2/user-switch-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5b1021dc10_14696975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963c72f4d28e2db3dc92f664b79b9ef08a3bb161' => 
    array (
      0 => '/var/www/html/templates/lagom2/user-switch-account.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed5b1021dc10_14696975 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['accounts']->value->count() == 0) {?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"switchAccount.noneFound"),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"switchAccount.createInstructions"),$_smarty_tpl ) );?>
</p>
        <p>
            <a href="<?php echo routePath('cart-index');?>
" class="btn btn-default">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"shopNow"),$_smarty_tpl ) );?>

            </a>
        </p>
        <br><br>
    <?php } else { ?>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"switchAccount.choose"),$_smarty_tpl ) );?>
</h2>
            </div>
            <div class="section-body">
                <div class="panel panel-users">
                    <div class="panel-body">
                        <div class="user-list user-list-switch">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                                <a href="#" class="user-list-item <?php if ($_smarty_tpl->tpl_vars['account']->value->status == 'Closed') {?>disabled<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
">
                                    <span class="user-list-item-avatar">
                                        <img src="https://www.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['account']->value->email);
if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'] != "default") {?>?d=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['gravatar_placeholder'];
}?>" alt="Avatar">
                                    </span>
                                    <span class="user-list-item-info">
                                        <span class="user-list-item-name"><?php echo $_smarty_tpl->tpl_vars['account']->value->displayName;?>
</span>
                                        <span class="user-list-item-email text-small text-light"><?php echo $_smarty_tpl->tpl_vars['account']->value->email;?>
</span>
                                    </span>
                                    <span class="user-list-item-date">
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->authedUserIsOwner() && $_smarty_tpl->tpl_vars['account']->value->status != 'Closed') {?>
                                            <span class="label label-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientOwner"),$_smarty_tpl ) );?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->status == 'Closed') {?>
                                            <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['account']->value->status;?>
</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['account']->value->status == 'Active') {?>
                                            <span class="label label-active"><?php echo $_smarty_tpl->tpl_vars['account']->value->status;?>
</span>
                                        <?php }?>
                                    </span>
                                    <span class="user-list-item-actions m-r-0">
                                        <span class="btn btn-primary btn-sm <?php if ($_smarty_tpl->tpl_vars['account']->value->status == 'Closed') {?>disabled<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navSwitchAccount'];?>
</span>
                                    </span>
                                </a>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    <?php }
}?>
 
<form method="post" action="<?php echo routePath('user-accounts');?>
">
    <input type="hidden" name="id" value="" id="inputSwitchAcctId">
</form>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('.user-list a:not(.disabled)').click(function(e) {
            e.preventDefault();
            $('#inputSwitchAcctId').val($(this).data('id'))
                .parent('form').submit();
        });
    });
<?php echo '</script'; ?>
><?php }
}
