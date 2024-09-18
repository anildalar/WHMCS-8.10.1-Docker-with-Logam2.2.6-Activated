<!--
// *************************************************************************
// * Contabo Cloud Automation                                              *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2024.1                                                       *
// * Build Date: 20 January 2024                                           *
// *************************************************************************
// * Email: sales@whmcsmodule.net                                          *
// * Website: https://www.whmcsmodule.net                                  *
// *************************************************************************
-->

<script src="modules/servers/ContaboVM/assets/js/notify.js"></script>
<script src="modules/servers/ContaboVM/assets/js/script.js"></script>
<script src="modules/servers/ContaboVM/assets/js/Client.js"></script>
<script src="modules/addons/ContaboVM/assets/js/Confirmation.js"></script>
<link rel="stylesheet" href="modules/addons/ContaboVM/assets/css/Confirmation.css">
<link href="modules/servers/ContaboVM/assets/css/style.css" rel="stylesheet">
<div id="custom-loader" class="hcloud-loader" style='display:none; margin:-20px;'></div>
<div id="ClientMsg" style="display:none;" class="alert alert-success">
<span id="custom-alert-message"></span>
</div>

{literal}
<script type="text/javascript">
  var langVar= {/literal}{$_LANG|@json_encode nofilter}{literal};
</script>
{/literal}

{if $unpaidInvoice}
    <div class="alert alert-{if $unpaidInvoiceOverdue}danger{else}warning{/if}" id="alert{if $unpaidInvoiceOverdue}Overdue{else}Unpaid{/if}Invoice">
        <div class="pull-right">
            <a href="viewinvoice.php?id={$unpaidInvoice}" class="btn btn-xs btn-default">
                {lang key='payInvoice'}
            </a>
        </div>
        {$unpaidInvoiceMessage}
    </div>
{/if}
<div class="row">
    <div class="col-md-6">
      <div class="product-details">
          <div class="product-status product-status-{$rawstatus|strtolower}">
              <div class="product-icon">
                <div class="product-content">
                <div class="product-image">
<svg class="svg-inline--fa fa-server fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="server" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="white" d="M480 160H32c-17.673 0-32-14.327-32-32V64c0-17.673 14.327-32 32-32h448c17.673 0 32 14.327 32 32v64c0 17.673-14.327 32-32 32zm-48-88c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm-64 0c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm112 248H32c-17.673 0-32-14.327-32-32v-64c0-17.673 14.327-32 32-32h448c17.673 0 32 14.327 32 32v64c0 17.673-14.327 32-32 32zm-48-88c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm-64 0c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm112 248H32c-17.673 0-32-14.327-32-32v-64c0-17.673 14.327-32 32-32h448c17.673 0 32 14.327 32 32v64c0 17.673-14.327 32-32 32zm-48-88c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm-64 0c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24z"></path></svg>
  </div>
                  <h2 class="product-name"><span class="product-group-name">{$product} </span></h2>
                  <h2 class="product-name"><span class="product-group-name">{$groupname} </span></h2>
                  </div>
<a class="product-footer">{$status}</a>
              </div>
          </div>
  </div>

        {if $showcancelbutton || $packagesupgrade}
            <div class="row">
                {if $packagesupgrade}
                    <div class="{if $showcancelbutton}col-xs-6{else}col-md-12{/if}">
                        <a href="upgrade.php?type=package&amp;id={$id}" class="btn btn-block btn-success"><i class="fas fa-level-up-alt"></i> {$LANG.upgrade}</a>
                    </div>
                {/if}
                {if $showcancelbutton}
                    <div class="{if $packagesupgrade}col-xs-6{else}col-md-12{/if}">
                        <a href="clientarea.php?action=cancel&amp;id={$id}" class="btn btn-block btn-danger {if $pendingcancellation}disabled{/if}"><i class="fas fa-ticket ls ls-denial"></i> {if $pendingcancellation}{$LANG.cancellationrequested}{else}{$LANG.clientareacancelrequestbutton}{/if}</a>
                    </div>
                {/if}
            </div>
        {/if}
        <br />

        {if $availableAddonProducts}
            <div class="panel panel-default footer-bg-sm">
              <div class="overflow-hidden card">
                <div class="bg-holder bg-card style-bg4"></div>
                <div class="panel-heading card-header">
                  <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$_LANG.overview.AddonsExtras}</h5> </span>
                </div>
                <div class="col-md-12">
                <div class="panel-body text-center card-body">
                    <form method="post" action="cart.php?a=add" class="form-inline">
                        <input type="hidden" name="serviceid" value="{$serviceid}" />
                        <select name="aid" class="form-control input-sm">
                        {foreach $availableAddonProducts as $addonId => $addonName}
                            <option value="{$addonId}">{$addonName}</option>
                        {/foreach}
                        </select>
                        &nbsp;
                        <button type="submit" class="btn btn-default btn-sm">
                            <i class="fas fa-shopping-cart"></i>
                            {$_LANG.overview.PurchaseActivate}
                        </button>
                    </form>
                </div>
                </div>
              </div>
            </div>
        {/if}
    </div>


    <!--Billing Panel-->

        <div class="col-md-6">
    <div class="panel panel-default mb-3 footer-bg-sm">
      <div class="overflow-hidden card">
      <div class="bg-holder bg-card style-bg1"></div>
        <div class="panel-heading card-header">
          <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$_LANG.overview.BillingOverview}</h5> </span>
        </div>
        <div class="panel-body card-body">
                    {if $firstpaymentamount neq $recurringamount}
                        <div class="row" id="firstPaymentAmount">
                            <div class="col-sm-5 text-right" >
                              <strong>  {$LANG.firstpaymentamount} </strong>
                            </div>
                            <div class="col-sm-6 text-left">
                                {$firstpaymentamount}
                            </div>
                        </div>
                    {/if}
                    {if $billingcycle != $LANG.orderpaymenttermonetime && $billingcycle != $LANG.orderfree}
                        <div class="row" id="recurringAmount">
                            <div class="col-sm-5 text-right">
                              <strong>  {$LANG.recurringamount} </strong>
                            </div>
                            <div class="col-sm-6 text-left">
                                {$recurringamount}
                            </div>
                        </div>
                    {/if}
                    <div class="row" id="billingCycle">
                        <div class="col-sm-5 text-right">
                        <strong>    {$LANG.orderbillingcycle} </strong>
                        </div>
                        <div class="col-sm-6 text-left">
                            {$billingcycle}
                        </div>
                    </div>
                    <div class="row" id="paymentMethod">
                        <div class="col-sm-5 text-right">
                        <strong>    {$LANG.orderpaymentmethod} </strong>
                        </div>
                        <div class="col-sm-6 text-left">
                            {$paymentmethod}
                        </div>
                    </div>
                    <div class="row" id="registrationDate">
                        <div class="col-sm-5 text-right">
                        <strong>    {$LANG.clientareahostingregdate} </strong>
                        </div>
                        <div class="col-sm-6 text-left">
                            {$regdate}
                        </div>
                    </div>
                    <div class="row" id="nextDueDate">
                        <div class="col-sm-5 text-right">
                        <strong>    {$LANG.clientareahostingnextduedate} </strong>
                        </div>
                        <div class="col-sm-6 text-left">
                            {$nextduedate}
                        </div>
                </div>
        </div>
    </div>
    </div>
    </div>
    <!--Billing Details -->

    {if $configurableoptions}
    <div class="col-md-6">
        <div class="panel panel-default mb-3 footer-bg-sm">
          <div class="overflow-hidden card">
            <div class="bg-holder bg-card style-bg2"></div>
            <div class="panel-heading card-header">
              <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$LANG.orderconfigpackage}</h5> </span>
            </div>
            <div class="panel-body card-body">
                {foreach from=$configurableoptions item=configoption}
                    <div class="row">
                        <div class="col-md-6 col-xs-6 text-right">
                            <strong>{$configoption.optionname}</strong>
                        </div>
                        <div class="col-md-6 col-xs-6 text-left">
                            {if $configoption.optiontype eq 3}{if $configoption.selectedqty}{$LANG.yes}{else}{$LANG.no}{/if}{elseif $configoption.optiontype eq 4}{$configoption.selectedqty} x {$configoption.selectedoption}{else}{$configoption.selectedoption}{/if}
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
      </div>
    </div>
    {/if}


<!--
{foreach $hookOutput as $output}
    <div>
        {$output}
    </div>
{/foreach}
-->


</div>
{if $systemStatus == 'Active'}
<div class="row">
  <!--OS Image and Service information-->
    <div class="col-md-12">
<div class="panel panel-default mb-3 footer-bg">
  <div class="overflow-hidden card">
  <div class="bg-holder bg-card style-bg1"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Server}: {$ServerInfo.name}</h5></span>
    </div>
    <div class="card-block table-border-style">
    <div class="panel-body card-body text-center">
        <div class="row">
            <div class="col-md-12">
                <li class="media">
                  <div class="media-left">
                    <span id="osimg">
                      <img style="vertical-align: middle; width: 128px; height: 128px;" class="hcloud-img-thumbnail" />
                    </span><br />
                  <center><strong><span id="osdes"></span></strong></center>
                  </div>
                  <div class="media-body">
                  <div class="row hcloud col-md-12 col-sm-6">
                    <div class="row">

                    <div class="col-md-6">
                      <div class="text-left"><strong>{$_LANG.username}</strong></div>
                      <div class="text-right">
                      <div class="input-group input-group-sm">
                      <input type="password" name="hcluser" id="hcluser" class="form-control input-sm" data-toggle="password" value="{$ServerInfo.ServerUser}">
                      <span class="input-group-addon input-group-append" id="basic-addon3">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </span>
                      </div>
                      </div>
                      </div>

                    <div class="col-md-6">
                    <div class="text-left"><strong>{$_LANG.Server_Password}</strong></div>
                    <div class="text-right">
                    <div class="input-group input-group-sm">
                    <input type="password" name="hclpassword" id="hclpassword" class="form-control input-sm" data-toggle="password" value="{$ServerInfo.ServerPass}">
                    <span class="input-group-addon input-group-append" id="basic-addon3">
                    <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </span>
                    </div>
                    </div>
                    </div>

                    </div>
                    <!--Server information -->
                  <table class="table hcloud table-striped">
                    <tr>
                    <td>{$LANG.primaryIP}:</td><td>{$dedicatedip}</td>
                    <td>{$_LANG["Server_Status"]}:</td><td>{$ServerInfo.Status}</td>
                    </tr>
                  <tr>
                  <td>{$_LANG.Location}:</td><td>{$ServerInfo.region}</td>
                  <td>{$_LANG.cores}:</td><td>{$ServerInfo.cores} {$_LANG.overview.vCPU}</td>
                  </tr>
                  <tr>
                  <td>{$_LANG.memory}:</td><td>{$ServerInfo.memory} GB {$_LANG.overview.RAM}</td>
                  <td>{$_LANG.disk}:</td><td>{$ServerInfo.disk} GB ({$ServerInfo.productType})
                  </td>
                  </tr>
                  <tr>
                  <td>{$_LANG.displayName}:</td><td>{$ServerInfo.displayName}</td>
                  <td>{$_LANG.osType}:</td><td>{$ServerInfo.osType}</td>
                  </tr>
                  </table>

                  <div class="btn-box">
                     <button type="button" class="btn-style btn-color-red-oranges" onclick="vmReboot();"><i class="fa fa-undo"></i>{$_LANG["Reboot"]}</button>
                      <button type="button" class="btn-style btn-color-pink-red" onclick="vmPowerOff();" id="offdisplay" style="display:none;"><i class="fa fa-stop-circle"></i>{$_LANG["PowerOff"]}</button>
                      <button type="button" class="btn-style btn-color-green-cyan" onclick="vmPowerOn();" id="ondisplay" style="display:none;"><i class="fa fa-play-circle"></i>{$_LANG["PowerOn"]}</button>
                      <button type="button" class="btn-style btn-color-red-green" id="snapdisplay" onclick="vmSnapshot('{$instanceId}', '{$_LANG.insnap}');"><i class="fa fa-key"></i>{$_LANG["SnapImage"]}</button>
                    </div>

                </div>
                  </div>
                </li>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="panel panel-default footer-bg" id="ipaddressview">
  <div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.IPAddress.Primary}</h5> </span>
</div>
<div class="card-block table-border-style">
<div class="panel-body text-left card-body">

<table id="ShowIPs" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.IP_Address}</th>
<th>{$_LANG.gateway}</th>
<th>{$_LANG.mac}</th>
<th>{$_LANG.IPType}</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>


{if $disableOS}
{else}
<div class="panel panel-default footer-bg" id="oslininstall">
  <div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.InstanceRebuild}</h5> </span>
</div>
<div class="card-block table-border-style">
<div class="panel-body text-left card-body">
  <div class="row col-md-12">
<p>{$_LANG.Linux_Notice}</p>
<p>{$_LANG.Linux_Pass}</p>
<p><strong>{$_LANG.Linux_Warning}</strong></p>
</div>
<table id="OSImageTable" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.Distribution}</th>
<th>{$_LANG.OS}</th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>
{/if}

<div class="panel panel-default footer-bg" id="snaptables">
  <div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.SnapImage}</h5> </span>
</div>
<div class="card-block table-border-style">
<div class="panel-body text-left card-body">

<table id="snaps" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.name}</th>
<th>{$_LANG.createdDate}</th>
<th>{$_LANG.autoDeleteDate}</th>
<th>{$_LANG.Image}</th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="panel panel-default footer-bg" id="logstable">
  <div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Activity}</h5> </span>
</div>
<div class="card-block table-border-style">
<div class="panel-body text-left card-body">
<table id="logs" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.action}</th>
<th>{$_LANG.timestamp}</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>

{else}
    <div class="alert alert-warning text-center" role="alert">
        {if $suspendreason}
            <strong>{$suspendreason}</strong><br />
        {/if}
        {$_LANG.overview.suspendreason} {$status}.<br />
        {if $systemStatus eq "Pending"}
            {$_LANG.overview.Pending}
        {elseif $systemStatus eq "Suspended"}
        {$_LANG.overview.Suspended}
        {/if}
    </div>
{/if}
