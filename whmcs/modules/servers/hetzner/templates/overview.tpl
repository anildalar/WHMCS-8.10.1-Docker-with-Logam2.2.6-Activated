<!--
// *************************************************************************
// * Hetzner Server Automation                                             *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2022.4                                                       *
// * Build Date: 19 November 2022                                          *
// *************************************************************************
// * Email: sales@whmcsmodule.net                                          *
// * Website: https://www.whmcsmodule.net                                  *
// *************************************************************************
-->
<script src="modules/servers/hetzner/assets/js/Overview.js"></script>
<link href="modules/servers/hetzner/assets/css/style.css" rel="stylesheet">
<link href="modules/addons/hetzner/assets/css/Confirmation.css" rel="stylesheet" />
<script type="text/javascript" src="modules/addons/hetzner/assets/js/Confirmation.js"></script>
<script  src="modules/servers/hetzner/assets/js/PlotlyJS.js"></script>
<div id="hetzner-loader" class="hetzner-loader" style='display:none; margin:-20px;'></div>
<div id="ClientMsg" style="display:none;" class="alert alert-success">
<span id="custom-alert-message"></span>
</div>
{literal}
<script type="text/javascript">
  var langVar= {/literal}{$langVarJson}{literal};
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
      {if $tpl eq 'lagom2'}
      <div class="product-details clearfix">
        <div class="product-icon">
            <div class="product-content">
                <div class="product-image">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 81 82" fill="#fff" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round"><use xlink:href="#A" x=".5" y=".5"/><symbol id="A" overflow="visible"><path d="M76.923 55.718H3.077C1.346 55.718 0 57.036 0 58.73v18.259C0 78.683 1.346 80 3.077 80h73.846C78.654 80 80 78.683 80 76.989V58.73c0-1.694-1.346-3.012-3.077-3.012zM6.731 76.989c-1.539 0-2.885-1.318-2.885-2.824s1.346-2.823 2.885-2.823 2.885 1.317 2.885 2.823-1.346 2.824-2.885 2.824zm67.307-1.129H57.885c-.577 0-.961-.376-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941s-.385.941-.962.941zm0-3.012H57.885c-.577 0-.961-.376-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.376.962.941s-.385.941-.962.941zm0-3.012H57.885c-.577 0-.961-.376-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.376.962.941s-.385.941-.962.941zm2.885-41.977H3.077C1.346 27.859 0 29.177 0 30.871V49.13c0 1.694 1.346 3.012 3.077 3.012h73.846c1.731 0 3.077-1.318 3.077-3.012V30.871c0-1.694-1.346-3.012-3.077-3.012zM6.731 49.13c-1.539 0-2.885-1.318-2.885-2.824s1.346-2.823 2.885-2.823 2.885 1.318 2.885 2.823S8.27 49.13 6.731 49.13zM74.038 48H57.885c-.577 0-.961-.376-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941s-.385.941-.962.941zm0-3.012H57.885c-.577 0-.961-.377-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941s-.385.941-.962.941zm0-3.012H57.885c-.577 0-.961-.377-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941s-.385.941-.962.941zM76.923 0H3.077C1.346 0 0 1.318 0 3.012v18.259c0 1.694 1.346 3.012 3.077 3.012h73.846c1.731 0 3.077-1.317 3.077-3.012V3.012C80 1.318 78.654 0 76.923 0zM6.731 21.271c-1.539 0-2.885-1.318-2.885-2.824s1.346-2.823 2.885-2.823 2.885 1.317 2.885 2.823-1.346 2.824-2.885 2.824zm67.307-1.129H57.885c-.577 0-.961-.377-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941s-.385.941-.962.941zm0-3.012H57.885c-.577 0-.961-.377-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941s-.385.941-.962.941zm0-3.012H57.885c-.577 0-.961-.377-.961-.941s.385-.941.961-.941h16.154c.577 0 .962.377.962.941 0 .377-.385.941-.962.941z" fill="#2a3282" stroke="none"/></symbol></svg>

</div>
                <h2 class="product-name">{$product}</h2>
                <div class="product-status">{$_LANG.Status}:
                    <span class="label label-active">{$status}</span>
                </div>
            </div>

                <a class="product-footer" >{$domain}</a>
                                        </div>
  </div>
      {else}
            <div class="product-details clearfix border-info">
                <div class="product-status product-status-{$rawstatus|strtolower}">
                    <div class="product-icon text-center footer-bg-sm">
                        <span class="fa-stack fa-lg">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-{if $type eq "hostingaccount" || $type == "reselleraccount"}hdd{elseif $type eq "server"}server{else}cloud{/if} fa-stack-1x fa-inverse"></i>
                        </span>
                        <h3>{$product}</h3>
                        <h4>{$groupname}</h4>
                    </div>
                    <div class="product-status-text">
                        {$status}
                    </div>
                </div>
        </div>
                        {/if}
        {if $showcancelbutton || $packagesupgrade}
            <div class="row">
                {if $packagesupgrade}
                    <div class="col-xs-{if $showcancelbutton}6{else}12{/if}">
                        <a href="upgrade.php?type=package&amp;id={$id}" class="btn btn-block btn-success"><span class="glyphicon glyphicon-cloud-upload"></span> {$LANG.upgrade}</a>
                    </div>
                {/if}
                {if $showcancelbutton}
                    <div class="col-xs-{if $packagesupgrade}6{else}12{/if}">
                        <a href="clientarea.php?action=cancel&amp;id={$id}" class="btn btn-block btn-danger {if $pendingcancellation}disabled{/if}"><span class="glyphicon glyphicon-remove-sign"></span> {if $pendingcancellation}{$LANG.cancellationrequested}{else}{$LANG.clientareacancelrequestbutton}{/if}</a>
                    </div>
                {/if}
            </div>
        {/if}
          <br />
        {if $availableAddonProducts}
            <div class="panel panel-default card">
                <div class="panel-heading card-header">
                    <h3 class="panel-title card-title m-0">{$_LANG.overviewAddonsExtras}</h3>
                </div>
                <div class="panel-body text-center card-body footer-bg-sm">
                    <form method="post" action="cart.php?a=add" class="form-inline">
                        <input type="hidden" name="serviceid" value="{$serviceid}" />
                        <select name="aid" class="form-control input-sm">
                        {foreach $availableAddonProducts as $addonId => $addonName}
                            <option value="{$addonId}">{$addonName}</option>
                        {/foreach}
                        </select>
                        <button type="submit" class="btn btn-default btn-sm">
                            <i class="fas fa-shopping-cart"></i>
                            {$_LANG.overviewPurchaseActivate}
                        </button>
                    </form>
                </div>
            </div>
        {/if}
    </div>

    <div class="col-md-6">
        <div class="panel panel-default" id="resourceusage">
          <div class="overflow-hidden card">
            <div class="bg-holder bg-card style-bg4"></div>
            <div class="panel-heading card-header">
              <div class="pull-left">
                <h3 class="panel-title card-title m-0">{$_LANG.overviewmodulebus}</h3>
              </div>
            </div>
            <div class="panel-body text-center card-body footer-bg-sm">
                <div class="row">
                    <div class="col-md-6" id="bandwidthUsage">
                        <strong>{$_LANG.overviewaoy}</strong>
                        <br /><br />
                        <input type="text" value="{$bwpercent|substr:0:-1}" class="usage-dial" data-fgColor="#d9534f" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="{if substr($bwpercent, 0, -1) > 100}{$bwpercent|substr:0:-1}{else}100{/if}" data-readOnly="true" data-width="100" data-height="80" />
                        <br /><br />
                        {$bwusage} MB / {$bwlimit} MB
                    </div>
                </div>
                <div class="clearfix"> </div>
                <br />
                <div class="text-info limit-near">
                  {$LANG.clientarealastupdated}: {$lastupdate}
                </div>
                <br />
                <div class="limit-near">
                    {$traffic_note}
                </div>
                <script src="{$BASE_PATH_JS}/jquery.knob.js"></script>
                <script type="text/javascript">
                jQuery(function() {
                    jQuery(".usage-dial").knob({
                        'format': function (value) {
                            return value + '%';
                        }
                    });
                });
                </script>
            </div>
        </div>
      </div>
      </div>
</div>
<div class="row">
<!--Billing Information-->
<div class="col-md-6">
<div class="panel panel-default">
<div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg1"></div>
<div class="panel-heading card-header">
    <h3 class="panel-title card-title m-0">{$_LANG.overviewBillingOverview}</h3>
</div>
<div class="panel-body card-body footer-bg-sm">
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
<!--Service Details -->
<div class="col-md-6">
<div class="panel panel-default">
<div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg2"></div>
  <div class="panel-heading card-header">
      <h3 class="panel-title card-title m-0">{$_LANG.overviewServiceInformation}</h3>
  </div>
  <div class="panel-body card-body footer-bg-sm">
{if $type eq "server"}
<div class="row">
  <div class="col-sm-4 text-right">
      <strong>{$LANG.serverhostname}</strong>
  </div>
  <div class="col-sm-8 text-left">
      {$domain}
  </div>
</div>
{if $dedicatedip}
  <div class="row">
      <div class="col-sm-4 text-right">
          <strong>{$LANG.primaryIP}</strong>
      </div>
      <div class="col-sm-8 text-left">
          {$dedicatedip}
      </div>
  </div>
{/if}
{if $assignedips}
  <div class="row">
      <div class="col-sm-4 text-right">
          <strong>{$LANG.assignedIPs}</strong>
      </div>
      <div class="col-sm-8 text-left">
          {$assignedips|nl2br}
      </div>
  </div>
{/if}
{if $username}
  <div class="row">
      <div class="col-sm-4 text-right">
          <strong>{$LANG.serverusername}</strong>
      </div>
      <div class="col-sm-8 text-left">
          {$username}
      </div>
  </div>
{/if}
{if $ns1 || $ns2}
  <div class="row">
      <div class="col-sm-4 text-right">
          <strong>{$LANG.domainnameservers}</strong>
      </div>
      <div class="col-sm-8 text-left">
          {$ns1}<br />{$ns2}
      </div>
  </div>
{/if}
{/if}
</div>
</div>
</div>
</div>
<!--Billing Information-->
</div>

{foreach $hookOutput as $output}
    <div>
        {$output}
    </div>
{/foreach}

<!--Addon Information-->
<div class="row">
{if $configurableoptions}
<div class="col-md-6">
    <div class="panel panel-default">
      <div class="overflow-hidden card">
        <div class="bg-holder bg-card style-bg2"></div>
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0">{$LANG.orderconfigpackage}</h3>
        </div>
        <div class="panel-body card-body footer-bg-sm">
            {foreach from=$configurableoptions item=configoption}
                <div class="row">
                    <div class="col-md-4 col-xs-6 text-right">
                        <strong>{$configoption.optionname}</strong>
                    </div>
                    <div class="col-md-8 col-xs-6 text-left">
                        {if $configoption.optiontype eq 3}{if $configoption.selectedqty}{$LANG.yes}{else}{$LANG.no}{/if}{elseif $configoption.optiontype eq 4}{$configoption.selectedqty} x {$configoption.selectedoption}{else}{$configoption.selectedoption}{/if}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
  </div>
</div>
{/if}
{if $customfields}
<div class="col-md-6">
    <div class="panel panel-default">
      <div class="overflow-hidden card">
        <div class="bg-holder bg-card style-bg3"></div>
        <div class="panel-heading card-header">
            <h3 class="panel-title card-title m-0">{$LANG.additionalInfo}</h3>
        </div>
        <div class="panel-body card-body footer-bg-sm">
            {foreach from=$customfields item=field}
            <div class="row">
                <div class="col-md-6 col-xs-6 text-right">
                    <strong>{$field.name}</strong>
                </div>
                <div class="col-md-6 col-xs-6 text-left">
                    {if empty($field.value)}
                        {$LANG.blankCustomField}
                    {else}
                        {$field.value}
                    {/if}
                </div>
            </div>
            {/foreach}
        </div>
    </div>
  </div>
</div>
{/if}
</div>

{if $systemStatus == 'Active'}

<div class="row" id="serverinformation" style="display:none;">
  <!--OS Image and Service information-->
<div class="panel panel-default">
  <div class="overflow-hidden card">
  <div class="bg-holder bg-card style-bg1"></div>
  <div class="panel-heading card-header">
      <span class="col-md-9 pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Server}:
        <span>
        <span id="srvname"></span>
<i class="fa fa-edit" onclick="hostchange()" ></i>
</span>
      </h5></span>
      <span class="col-md-3 pull-right float-right" id="status"></span>
  </div>

    <div class="panel-body card-body footer-bg">
        <div class="row">
            <div class="col-md-12">
              <div class="row col-md-12 col-sm-6">
                  <div class="media-left float-left">
                     <span id="osimage"></span>
                    <br />
                  <center><strong> <span id="osname"></span></strong></center>
                  </div>

                  <div class="media-body float-right row">
                  <div class="col-md-4">
                  <div class="text-left"><strong>{$_LANG.Server_Password}</strong></div>
                  <div class="text-left">
                  <div class="input-group">
                  <input type="password" name="srvpassword" id="srvpassword" class="form-control input-sm" data-toggle="password">
                  <span class="input-group-addon input-group-append" id="basic-addon3">
                  <span class="input-group-text"><i class="fa fa-eye"></i></span>
                  </span>
                  </div>
                  </div>
                  </div>

                      <div class="col-md-4">
                      <div class="text-left"><strong>{$_LANG.Server_RescuePassword}</strong></div>
                      <div class="text-left">
                      <div class="input-group">
                      <input type="password" name="rescuepassword" id="rescuepassword" class="form-control input-sm" data-toggle="password">
                      <span class="input-group-addon input-group-append" id="basic-addon3">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </span>
                      </div>
                      </div>
                      </div>

                      <div class="col-md-4">
                      <div class="text-left"><strong>{$_LANG.Server_VNCPassword}</strong></div>
                      <div class="text-left">
                      <div class="input-group">
                      <input type="password" name="vncpassword" id="vncpassword" class="form-control input-sm" data-toggle="password">
                      <span class="input-group-addon input-group-append" id="basic-addon3">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </span>
                      </div>
                      </div>
                      </div>
                  <!--Server information -->
                  <div class="row hetzner col-md-12 col-sm-6">
                  <table class="table table-striped">
                  <tr>
                  <td>{$_LANG.Main_IP}:</td><td id="primaryIP"></td>
                  <td>{$_LANG.Traffic}:</td><td id="bwlimit"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.VNC_Login}:</td><td id="VNCIP"></td>
                  <td>{$_LANG.Data_Center}:</td><td id="DC"></td>
                  </tr>
                  </table>
                </div>
                </div>
                <div class="row col-sm-12 col-md-12 text-left float-right btn-box">
<button type="button" id="rebootbtn" style="display:none;" class="btn-style btn-color-red-oranges" onclick="ServerReboot()"><span class="glyphicon glyphicon-flash"></span>&nbsp;{$_LANG.Reboot}</button>
<button type="button" id="cancelinstallbtn" style="display:none;" class="btn-style btn-color-pink-red" onclick="CancelInstallAccess()"><span class="glyphicon glyphicon-remove-circle"></span>&nbsp;{$_LANG.Cancel_Installation}</button>
<button type="button" id="RescueOSbtn" style="display:none;" class="btn-style btn-color-green-cyan" onclick="RescueMode()"><span class="glyphicon glyphicon-wrench"></span>&nbsp;{$_LANG.Rescue}</button>
<button type="button" id="ServerOSbtn" style="display:none;" class="btn-style btn-color-red-green" onclick="LinuxInstall()"><span class="glyphicon glyphicon-repeat"></span>&nbsp;{$_LANG.Linux}</button>
<button type="button" id="VNCbtn" style="display:none;" class="btn-style btn-color-yellow-green" onclick="vncInstallServer()"><span class="glyphicon glyphicon-repeat"></span>&nbsp;{$_LANG.VNC}</button>
<button type="button" id="WindowsOSbtn" style="display:none;" class="btn-style btn-color-cyan" onclick="WindowsInstallServer()"><span class="glyphicon glyphicon-repeat"></span>&nbsp;{$_LANG.Windows}</button>
<button type="button" id="cPanelOSbtn" style="display:none;" class="btn-style btn-color-deep-blue" onclick="ServercPanelInstall()"><span class="glyphicon glyphicon-repeat"></span>&nbsp;{$_LANG.cPanel}</button>
<button type="button" id="PleskOSbtn" style="display:none;" class="btn-style btn-color-blue" onclick="ServerPleskInstall()"><span class="glyphicon glyphicon-repeat"></span>&nbsp;{$_LANG.Plesk}</button>
<button type="button" id="wolbtn" style="display:none;" class="btn-style btn-color-blue-magenta" onclick="ServerWOL()"><span class="glyphicon glyphicon-link"></span>&nbsp;{$_LANG.Wake_On_Lan}</button>
<button type="button" id="firewallenable" class="btn-style btn-color-purple" onclick="firewall()"><span class="glyphicon glyphicon-fire"></span>&nbsp;{$_LANG["firewall"]}</button>
</div>

                  </div>



            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="panel panel-default row" id="DatatrafficDetails" style="display:none;" >
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg3"></div>

    <div class="panel-heading card-header">
      <div class="row">
        <div class="col-md-6">
          <span class="pull-left float-left">
          <h3 class="panel-title card-title m-0">{$_LANG.Datatraffic_Information} {$smarty.now|date_format:'%B %Y'}</h3>
        </span>
      </div>
        <div class="col-md-6">
          <span class="pull-right float-right">
            <select class="viewgraph form-control form-control-sm"></select>
        </span>
      </div>
      </div>
    </div>

<div class="panel-body text-left card-body footer-bg row">
<div id="traffic_mount" style="width:850px;height:400px;"></div>
</div>
</div>
</div>

<!--Interface Information-->
<div class="panel panel-default row" id="InterfaceInfo" style="display:none;" >
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg4"></div>
<div class="panel-heading card-header"> <h3 class="panel-title card-title m-0">{$_LANG.Interface_Information}</h3></div>
<div class="panel-body text-left card-body footer-bg row">
    <table id="InterfaceTable" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
    <thead class="dataTables_info">
    <tr>
      <th>{$_LANG.IP_Address}</th>
      <th>{$_LANG.Gateway}</th>
      <th>{$_LANG.Locked}</th>
      <th>{$_LANG.Reverse_DNS}</th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
</div>
</div>
</div>
<!--Interface Information-->

<div class="panel panel-default row" id="firewallInfo" style="display:none;">
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg4"></div>
<div class="panel-heading">
  <div class="pull-left">
        <h3 class="panel-title">{$_LANG['firewallInfo']}</h3>
      </div>
    </div>
<div class="panel-body text-left footer-bg">
  <p class="btn-box pull-right col-md-3">
     <button type="button" class="btn-style btn-color-snap" onclick="addFirewallrules();"><i class="fa fa-shield"></i> {$_LANG["addrules"]}</button>
     </p>
  <p>{$_LANG["fpackets"]}</p>
  <p>{$_LANG["fdefault"]}</p>
  <br />
    <table id="firewalltable" class="datatable table table-striped table-bordered table-hover" width="100%" cellspacing="0">
    <thead class="dataTables_info">
    <tr>
      <th>{$_LANG['fname']}</th>
      <th>{$_LANG['fsource']}</th>
      <th>{$_LANG['fdest']}</th>
      <th>{$_LANG['Protocol']}</th>
      <th>{$_LANG['TCPflags']}</th>
      <th>{$_LANG['fAction']}</th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
</div>
</div>
</div>

{if $storageId}
<div class="panel panel-default row" id="storageInfoShow" style="display:none;">
  <div class="overflow-hidden card footer-bg">
  <div class="bg-holder bg-card style-bg1"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Storage_Info}</h5></span>
    </div>
    <div class="card-block table-border-style">
    <div class="panel-body card-body text-center">
        <div class="row">
            <div class="col-md-12">
{if $tpl eq "six"}<ul class="media-list">{/if}
                <li class="media">
                  <div class="media-body">
                  <div class="row hcloud col-md-12 col-sm-6">
                    <!--Server information -->
                  <table class="table table-striped">
                  <tr>
                  <td>{$_LANG.name}:</td><td id="name"></td>
                  <td>{$_LANG.product}:</td><td id="product"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.host_system}:</td><td id="host_system"></td>
                  <td>{$_LANG.Server}:</td><td id="server"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.username}:</td><td id="login"></td>
                  <td>{$_LANG.pass}:</td><td id="password"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.SambaCIFSshare}:</td><td id="SambaCIFSshare"></td>
                  <td>{$_LANG.Diskusage}:</td><td id="Diskusage"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.WebDAV}:</td><td id="WebDAV"></td>
                  <td>{$_LANG.Samba}:</td><td id="Samba"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.SSH}:</td><td id="SSH"></td>
                  <td>{$_LANG.External}:</td><td id="External"></td>
                  </tr>
                  <tr>
                  <td>{$_LANG.Dissnapshot}:</td><td id="Dissnapshot"></td>
                  <td>{$_LANG.cancelled}:</td><td id="cancelled"></td>
                  </tr>
                  <tr>
                    <td>{$_LANG.SnapshotAuto}:</td><td id="SnapshotAuto"></td>
                  <td>{$_LANG.locked}:</td><td id="locked"></td>
                  </tr>

                  <tr id="serveraction">
                      <td class="col-sm-3 text-right">
                          <strong>{$_LANG.Actions}</strong>
                      </td>
                      <td colspan="3" class="col-sm-9 text-left btn-box">
                        <button type="button" onclick="StorageUpdate('{$sortname}')" class="btn-style btn-color-red-oranges">{$_LANG.updatebox}</button>
                        <button type="button"  onclick="SnapCreate()" class="btn-style btn-color-pink-red">{$_LANG.createsnapshot}</button>
                        <button type="button"  onclick="SubAccCreate()" class="btn-style btn-color-green-cyan">{$_LANG.AddSubAcc}</button>
                        <button type="button" id="enbautosnp" style="display:none;" onclick="EnableSnapAuto()" class="btn-style btn-color-red-green">{$_LANG['EnbAutSnap']}</button>
                        <button type="button" id="disautosnp" style="display:none;" onclick="DisableSnapAuto()" class="btn-style btn-color-blue">{$_LANG['DisAutSnap']}</button>
                      </td>
                  </tr>

                  </table>


                </div>
                  </div>
                </li>
                {if $tpl eq "six"}</ul>{/if}
            </div>
        </div>
    </div>
  </div>
</div>
</div>



<div class="panel panel-default card row" id="snapInfotable" style="display:none;">
<div class="overflow-hidden footer-bg">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <h5 class="panel-title">{$_LANG.SnapInfo}</h5>
    </div>
    <div class="panel-body text-left card-body">
    <p>{$_LANG.SnapMessage}</p>
<table id="ShowSnapTables" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.Comment}</th>
<th>{$_LANG.Date}</th>
<th>{$_LANG.Size}</th>
<th>{$_LANG.filesize}</th>
<th>{$_LANG.Actions}</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

</div>
</div>

<div class="panel panel-default card row" id="subInfotable" style="display:none;">
<div class="overflow-hidden footer-bg">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <h5 class="panel-title">{$_LANG.subInfo}</h5>
    </div>
    <div class="panel-body text-left card-body">
    <p>{$_LANG.SubMessage}</p>
<table id="ShowSubTables" class="datatable table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.LoginInfo}</th>
<th>{$_LANG.Permissions}</th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

</div>
</div>

<div class="panel panel-default card row" id="snapautotable" style="display:none;">
<div class="overflow-hidden footer-bg">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <h5 class="panel-title">{$_LANG["AutoSnaps"]}</h5>
    </div>
    <div class="panel-body text-left card-body">
    <p>{$_LANG["AutoSnapMsg"]}</p>
<table id="ShowSnapConfTables" class="datatable table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG["Status"]}</th>
<th>{$_LANG["Type"]}</th>
<th>{$_LANG["TimeUTC"]}</th>
<th>{$_LANG["maxsnaps"]}</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

</div>
</div>

{/if}

{else}
    <div class="alert alert-warning text-center" role="alert">
        {if $suspendreason}
            <strong>{$suspendreason}</strong><br />
        {/if}
        {$_LANG.overviewsuspendreason} {$status}.<br />
        {if $systemStatus eq "Pending"}
            {$_LANG.overviewPending}
        {elseif $systemStatus eq "Suspended"}
        {$_LANG.overviewSuspended}
        {/if}
    </div>
{/if}
