<?php
/* Smarty version 3.1.48, created on 2024-10-02 04:53:11
  from '/var/www/html/templates/orderforms/lagom2/linkedaccounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcd1b71f5ed5_48177711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d813e14b6015221d016956a97c660e625fe7e4' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/linkedaccounts.tpl',
      1 => 1725455022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcd1b71f5ed5_48177711 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['linkableProviders']->value || $_smarty_tpl->tpl_vars['hasLinkedProvidersEnabled']->value) && $_smarty_tpl->tpl_vars['linkContext']->value == 'linktable') {?>
    <table id="tableLinkedAccounts" class="table display w-100 data-driven m-b-0" data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['linkedAccountsUrl']->value;?>
" data-on-draw-rebind-confirmation-modal="true" data-lang-empty-table="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.noLinkedAccounts'),$_smarty_tpl ) );?>
">
        <thead>
            <tr class="text-center">
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.provider'),$_smarty_tpl ) );?>
<span class="sorting-arrows"></span></th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.name'),$_smarty_tpl ) );?>
<span class="sorting-arrows"></span></th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.emailAddress'),$_smarty_tpl ) );?>
<span class="sorting-arrows"></span></th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.actions'),$_smarty_tpl ) );?>
<span class="sorting-arrows"></span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="4" class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.noLinkedAccounts'),$_smarty_tpl ) );?>
</td>
            </tr>
        </tbody>
    </table>
<?php } elseif ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
    
    <div id="providerLinkingMessages" class="hidden">
        <p class="providerLinkingMsg-preLink-init_failed">
            <span class="provider-name"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.unavailable'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-connect_error">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.connectError'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-complete_sign_in">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.completeSignIn'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-2fa_needed">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.redirecting'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-linking_complete">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.success'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.accountNowLinked'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-login_to_link-signin-required">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkInitiated'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.oneTimeAuthRequired'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-login_to_link-registration-required">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkInitiated'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.completeRegistrationForm'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-checkout-new">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkInitiated'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.completeNewAccountForm'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-other_user_exists">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkedToAnotherClient'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-already_linked">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.alreadyLinkedToYou'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-default">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.connectError'),$_smarty_tpl ) );?>

        </p>
    </div>
    <div class="social-login social-wide<?php if ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-new') {?> m-t-0<?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-existing') {?> m-t-32<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['linkContext']->value == 'registration') {?>
            <div class="text-light text-center">
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['socialnetworksingnup'];?>
</span>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'login') {?>
            <div class="text-lighter text-center text-small">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['socialnetworkacc'];?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-existing') {?>
            <div class="login-divider"><span></span><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleOr'),$_smarty_tpl ) );?>
</span><span></span></div>
            <p class="small text-center text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.saveTimeByLinking'),$_smarty_tpl ) );?>
</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-new') {?>
                                                        <p class="small text-center text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.saveTimeByLinking'),$_smarty_tpl ) );?>
</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'clientsecurity') {?>
            <p class="text-light m-t-neg-6 m-b-24 "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.mayHaveMultipleLinks'),$_smarty_tpl ) );?>
</p>
        <?php }?>
        <div class="providerPreLinking" data-link-context="<?php echo $_smarty_tpl->tpl_vars['linkContext']->value;?>
" data-hide-on-prelink=<?php if (in_array($_smarty_tpl->tpl_vars['linkContext']->value,array('clientsecurity','login'))) {?>0<?php } else { ?>1<?php }?> data-disable-on-prelink=0>
            <div class="social-signin-btns <?php if ($_smarty_tpl->tpl_vars['linkContext']->value == 'clientsecurity') {?>justify-start m-b-24<?php }?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkableProviders']->value, 'provider');
$_smarty_tpl->tpl_vars['provider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['provider']->do_else = false;
?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['linkContext']->value,array('checkout-existing'))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['provider']->value['login_button'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['provider']->value['code'];?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    
        <?php if (!(isset($_smarty_tpl->tpl_vars['customFeedback']->value)) || !$_smarty_tpl->tpl_vars['customFeedback']->value) {?>
            <div class="providerLinkingFeedback"></div>
        <?php }?>
    
        <?php if ($_smarty_tpl->tpl_vars['linkContext']->value == 'login') {?>
            <div class="text-lighter text-center text-small text-divider">
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['useyouraccount'];?>
</span>
            </div>
        <?php }?>
       
    </div>
    <?php if ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-new') {?>
        <div class="login-divider"><span></span><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleOr'),$_smarty_tpl ) );?>
</span><span></span></div>
    <?php }?>

    
    
<?php }
}
}
