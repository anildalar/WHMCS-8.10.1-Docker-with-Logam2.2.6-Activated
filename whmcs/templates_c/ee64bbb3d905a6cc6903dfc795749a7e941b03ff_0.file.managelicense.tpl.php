<?php
/* Smarty version 3.1.48, created on 2024-11-29 05:28:58
  from '/var/www/html/modules/servers/licensing/templates/managelicense.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6749511a807b56_41827632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee64bbb3d905a6cc6903dfc795749a7e941b03ff' => 
    array (
      0 => '/var/www/html/modules/servers/licensing/templates/managelicense.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6749511a807b56_41827632 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body">
        <?php if ($_smarty_tpl->tpl_vars['status']->value == "Reissued") {?>
            <div class="alert alert-success text-center">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['reissuestatusmsg'];?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['downloads']->value) {?>
            <div class="alert alert-warning text-center licensing-addon-latest-download">
                <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['latestdownload'];?>
</h3>
                <p><?php echo htmlspecialchars(nl2br($_smarty_tpl->tpl_vars['downloads']->value[0]['description']), ENT_QUOTES, 'UTF-8', true);?>
</p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['downloads']->value[0]['link'];?>
" class="btn btn-default">
                    <i class="fas fa-fw fa-download"></i>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['downloadnow'];?>

                </a></p>
            </div>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output');
$_smarty_tpl->tpl_vars['output']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
$_smarty_tpl->tpl_vars['output']->do_else = false;
?>
            <div>
                <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="row d-block clearfix mb-2">
            <?php if ($_smarty_tpl->tpl_vars['allowreissues']->value || $_smarty_tpl->tpl_vars['packagesupgrade']->value || $_smarty_tpl->tpl_vars['showCancellationButton']->value) {?>
                <div class="col-md-4 pull-md-right float-md-right">

                    <div class="row">

                        <?php if ($_smarty_tpl->tpl_vars['allowreissues']->value) {?>
                            <div class="col-xs-4 col-4 col-md-12 margin-bottom-5 mb-1">
                                <form method="post" action="clientarea.php?action=productdetails">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                                    <input type="hidden" name="serveraction" value="custom" />
                                    <input type="hidden" name="a" value="reissue" />
                                    <button type="submit" class="btn btn-success btn-lg btn-block"<?php if ($_smarty_tpl->tpl_vars['status']->value != "Active") {?> disabled<?php }?>>
                                        <i class="fas fa-sync fa-2x"></i><br />
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['reissue'];?>

                                    </button>
                                </form>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['packagesupgrade']->value) {?>
                            <div class="col-xs-4 col-4 col-md-12 margin-bottom-5 mb-1">
                                <a href="upgrade.php?type=package&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" role="button" class="btn btn-info btn-lg btn-block">
                                    <i class="fas fa-arrow-up fa-2x"></i><br />
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['upgrade'];?>

                                </a>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['showCancellationButton']->value) {?>
                            <div class="col-xs-4 col-4 col-md-12 margin-bottom-5 mb-1">
                                <form method="post" action="clientarea.php?action=cancel">
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                                    <button type="submit" class="btn btn-danger btn-lg btn-block<?php if ($_smarty_tpl->tpl_vars['pendingcancellation']->value) {?> disabled<?php }?>">
                                        <i class="fas fa-times fa-2x"></i><br />
                                        <?php if ($_smarty_tpl->tpl_vars['pendingcancellation']->value) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancellationrequested'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>

                                        <?php }?>
                                    </button>
                                </form>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['allowreissues']->value || $_smarty_tpl->tpl_vars['packagesupgrade']->value || $_smarty_tpl->tpl_vars['showCancellationButton']->value) {?>
                <div class="col-md-8">
            <?php } else { ?>
                <div class="col-md-12">
            <?php }?>

                <div class="mb-2">
                    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['licensekey'];?>
</h4>
                    <input type="text" class="form-control" readonly="true" value="<?php echo $_smarty_tpl->tpl_vars['licensekey']->value;?>
" />
                </div>

                <?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
                    <div class="alert alert-info margin-top-5">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption');
$_smarty_tpl->tpl_vars['configoption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->do_else = false;
?>
                            <div class="row">
                                <div class="col-xs-5 col-5 text-right">
                                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configoption']->value['optionname'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                                </div>
                                <div class="col-xs-7 col-7">
                                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['no'];?>

                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];?>
 x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configoption']->value['selectedoption'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configoption']->value['selectedoption'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['allowDomainConflicts']->value) {?>
                    <div class="mb-2">
                        <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['validdomains'];?>
</h4>
                        <textarea rows="2" class="form-control" readonly="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['validdomain']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['allowIpConflicts']->value) {?>
                    <div class="mb-2">
                        <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['validips'];?>
</h4>
                        <textarea rows="2" class="form-control" readonly="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['validip']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['allowDirectoryConflicts']->value) {?>
                    <div class="mb-2">
                        <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['validdirectory'];?>
</h4>
                        <textarea rows="2" class="form-control" readonly="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['validdirectory']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                <?php }?>

                <div class="mb-2">
                    <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['licensingaddon']['status'];?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

                        <?php if ($_smarty_tpl->tpl_vars['suspendreason']->value) {?>(<?php echo $_smarty_tpl->tpl_vars['suspendreason']->value;?>
)<?php }?>
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4 text-center">
                <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingregdate'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['regdate']->value;?>

            </div>
            <div class="col-sm-4 text-center">
                <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['nextduedate']->value;?>

            </div>
            <div class="col-sm-4 text-center">
                <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderbillingcycle'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['billingcycle']->value;?>

            </div>
        </div>

        <div class="row mb-2">
            <?php if ($_smarty_tpl->tpl_vars['firstpaymentamount']->value != $_smarty_tpl->tpl_vars['recurringamount']->value) {?>
            <div class="col-sm-4 text-center">
                <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['firstpaymentamount'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['firstpaymentamount']->value;?>

            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'] && $_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfreeaccount']) {?>
            <div class="col-sm-4 text-center">
                <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['recurringamount'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['recurringamount']->value;?>

            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['firstpaymentamount']->value != $_smarty_tpl->tpl_vars['recurringamount']->value || ($_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'] && $_smarty_tpl->tpl_vars['billingcycle']->value != $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermfreeaccount'])) {?>
            <div class="col-sm-4 text-center">
                <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

            </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
            <div class="row mb-2">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                    <div class="col-sm-4 text-center">
                        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);
} else { ?>-<?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
</div><?php }
}
