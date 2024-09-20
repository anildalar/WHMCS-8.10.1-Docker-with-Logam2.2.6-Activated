<?php
/* Smarty version 3.1.48, created on 2024-09-20 11:22:56
  from '/var/www/html/templates/lagom2/includes/sidebar/sidebar-custom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ed5b101cdf39_48938942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2472cc8b33c8fec4277351e100a20eebef411864' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/sidebar/sidebar-custom.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed5b101cdf39_48938942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/overwrites/sidebar-custom.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar/overwrites/sidebar-custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>    
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareaaddfunds" && !$_smarty_tpl->tpl_vars['addfundsdisabled']->value) {?>
        <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['sidebarBoxStyle']->value;?>
">
            <div class="panel-body">
                <div class="summary-total">
                    <div class="price price-left-h price-sm">
                        <span class="price-total">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditdesc1'];?>

                        </span> 
                        <span class="price-amount">
                            <?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['creditbalance'];?>

                        </span>
                    </div>
                </div>
                <div class="summary-content">
                    <ul class="summary-list">
                        <li class="list-item faded">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsminimum'];?>
</span>
                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['minimumamount']->value;?>
</span>
                        </li>
                        <li class="list-item faded">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsmaximum'];?>
</span>
                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['maximumamount']->value;?>
</span>
                        </li>
                        <li class="list-item faded">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsmaximumbalance'];?>
</span>
                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['maximumbalance']->value;?>
</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="alert alert-lagom alert-info alert-sm alert-panel">
            <div class="alert-icon ls ls-info-circle"></div>
            <div class="alert-body">
                <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['LANG']->value['addfundsnonrefundable'],"*",''),".",'');?>

            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "affiliates" && !$_smarty_tpl->tpl_vars['inactive']->value) {?>
        <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['sidebarBoxStyle']->value;?>
 panel-add-funds">
            <div class="panel-body">
                <div class="summary-total">
                    <div class="price price-sm price-left-h">
                        <span class="price-total"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatescommissionsavailable'];?>
</span>
                        <span class="price-amount"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</span>
                    </div>
                </div>
                <div class="summary-content">
                    <ul class="summary-list">
                        <li class="list-item faded">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatescommissionspending'];?>
</span>
                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['pendingcommissions']->value;?>
</span>
                        </li>
                        <li class="list-item faded">
                            <span class="item-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliateswithdrawn'];?>
</span>
                            <span class="item-value"><?php echo $_smarty_tpl->tpl_vars['withdrawn']->value;?>
</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-footer">            
                <?php if (!$_smarty_tpl->tpl_vars['withdrawlevel']->value || $_smarty_tpl->tpl_vars['withdrawrequestsent']->value) {?>
                <button href="<?php echo $_SERVER['PHP_SELF'];?>
?action=withdrawrequest" class="btn btn-primary-faded btn-block"<?php if (!$_smarty_tpl->tpl_vars['withdrawlevel']->value || $_smarty_tpl->tpl_vars['withdrawrequestsent']->value) {?> disabled<?php }?>>
                    <i class="ls ls-bank-note"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatesrequestwithdrawal'];?>

                </button>            
                <?php } else { ?>
                <a href="<?php echo $_SERVER['PHP_SELF'];?>
?action=withdrawrequest" class="btn btn-primary-faded btn-block <?php if (!$_smarty_tpl->tpl_vars['withdrawlevel']->value || $_smarty_tpl->tpl_vars['withdrawrequestsent']->value) {?>disabled" disabled="disabled"<?php }?>>
                    <i class="ls ls-bank-note"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatesrequestwithdrawal'];?>

                </a>
                <?php }?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['withdrawrequestsent']->value) {?>
            <div class="alert alert-success alert-sm alert-panel">
                <i class="alert-icon ls ls-info-circle"></i>
                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliateswithdrawalrequestsuccessful'];?>
</p>
            </div>
        <?php } else { ?>
            <?php if (!$_smarty_tpl->tpl_vars['withdrawlevel']->value) {?>
                <div class="alert alert-lagom alert-info alert-sm alert-panel"><i class="alert-icon ls ls-info-circle"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"affiliateWithdrawalSummary",'amountForWithdrawal'=>$_smarty_tpl->tpl_vars['affiliatePayoutMinimum']->value),$_smarty_tpl ) );?>
</div>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareainvoices" && $_smarty_tpl->tpl_vars['clientsstats']->value['numdueinvoices'] != 0) {?>
        <div class="panel panel-summary panel-summary-<?php echo $_smarty_tpl->tpl_vars['sidebarBoxStyle']->value;?>
">
            <div class="panel-body">
                <div class="price price-sm price-left">
                    <span class="price-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['invoicesduemsg'],$_smarty_tpl->tpl_vars['clientsstats']->value['numdueinvoices'] ));?>
</span>
                    <span class="price-amount"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['dueinvoicesbalance'];?>
</span>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['masspay'] && $_smarty_tpl->tpl_vars['clientsstats']->value['numdueinvoices'] != 0) {?>
            <div class="panel-footer">
                <a href="clientarea.php?action=masspay&all=true" class="btn btn-primary-faded btn-block" data-btn-loader>
                    <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespaynow'];?>
</span>
                    <div class="loader loader-button hidden" >
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                    </div>
                </a>
            </div>
            <?php }?>
        </div>
    <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "serverstatus") {?>
        <div class="panel panel-sidebar panel-default panel-actions view-filter-btns">
            <div class="list-group">
                <a menuitemname="View RSS Feed" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/networkissuesrss.php" class="list-group-item" id="Primary_Sidebar-Network_Status-View_RSS_Feed">
                    <i class="ls ls-rss"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementsrss'];?>
 
                </a>
            </div>
        </div>
    <?php }
}?>    <?php }
}
