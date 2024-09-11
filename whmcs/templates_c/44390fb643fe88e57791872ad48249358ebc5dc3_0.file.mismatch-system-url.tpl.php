<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:36:38
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/mismatch-system-url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff706751574_30117783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44390fb643fe88e57791872ad48249358ebc5dc3' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/modals/mismatch-system-url.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dff706751574_30117783 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modal-mismatch-system-url" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-close-modal>
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" style="margin: 0">System URL misconfiguration</h4>
            </div>
            <div class="modal-body">
                <p>Your current url - <b><?php echo $_smarty_tpl->tpl_vars['warningUrl']->value;?>
</b> does not math to url you have set in WHMCS General Settings - <b><?php echo $_smarty_tpl->tpl_vars['warningSystemUrl']->value;?>
</b>.</p>
                <p>It's important to access your website with THE SAME URL as you have in your WHMCS System settings.</p>
                <p>System URL misconfiguration can cause several issues with HTTP-header resource loading or Ajax requests responses and may lead to irregularities in the appearance or operation of the RSThemes addon</p>
                <p>Please set correct system url in <a href="<?php echo $_smarty_tpl->tpl_vars['warningUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
/configgeneral.php" target="_blank">WHMCS General Settings</a></p>
            </div>
            <div class="modal-footer panel-footer">
                <button type="button" class="btn btn-default" data-close-modal> Close </button>
            </div>
        </div>
    </div>
</div><?php }
}
