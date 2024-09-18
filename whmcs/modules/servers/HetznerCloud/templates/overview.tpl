
<script src="modules/servers/HetznerCloud/assets/js/notify.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/script.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/Overview.js"></script>
<script src="modules/addons/HetznerCloud/assets/js/Confirmation.js"></script>
<link rel="stylesheet" href="modules/addons/HetznerCloud/assets/css/Confirmation.css">
<link href="modules/servers/HetznerCloud/assets/css/style.css" rel="stylesheet">
<div id="custom-loader" class="hcloud-loader" style='display:none; margin:-20px;'></div>
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
            <div class="product-details clearfix card border-info">
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
    <div class="col-md-6">
        <div class="panel panel-default footer-bg-sm" id="resourceusage">
          <div class="overflow-hidden card">
            <div class="bg-holder bg-card style-bg4"></div>
            <div class="panel-heading card-header">
              <div class="pull-left">
              <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$_LANG.overview.modulebus}</h5> </span>
              </div>
            </div>
            <div class="panel-body text-center card-body">
                <div class="row text-center">
                    <div class="col-sm-offset-1 col-xs-4" id="diskUsage">
                        <strong>{$_LANG.overview.AsofNow}</strong>
                        <br /><br />
                        <input type="text" value="{$traffic_percentage}" id="hcloud-usage" class="usage-dial" data-fgColor="#444" data-angleOffset="-125" data-angleArc="250" data-min="0" data-max="{if substr($traffic_percentage, 0, -1) > 100}{$traffic_percentage|substr:0:-1}{else}100{/if}" data-readOnly="true" data-width="100" data-height="80" />
                        <br /><br />
                        <span id="outgoing_traffic">{$outgoing_traffic}</span> MB / {$included_traffic} MB
                    </div>
                    <div class="col-sm-offset-1 col-xs-4" id="bandwidthUsage">
                        <strong>{$_LANG.overview.aoy}</strong>
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

{foreach $hookOutput as $output}
    <div>
        {$output}
    </div>
{/foreach}

<!--Billing Panel-->
<div class="row">
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

</div>
{if $systemStatus == 'Active'}
<div class="row">
  <!--OS Image and Service information-->
    <div class="col-md-12">
<div class="panel panel-default mb-3 footer-bg">
  <div class="overflow-hidden card">
  <div class="bg-holder bg-card style-bg1"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Server}: {$ServerBasic.Name}</h5></span>
        <div class="card-header-right">
        <ul class="list-unstyled card-option">
        <li><i class="fa fa-minus details-minimize-card"></i></li>
        </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
    <div class="panel-body card-body text-center">
        <div class="row">
            <div class="col-md-12">
{if $tpl eq "six"}<ul class="media-list">{/if}
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
                    <div class="text-left"><strong>{$_LANG.Server_Password}</strong></div>
                    <div class="text-left">
                    <div class="input-group input-group-sm">
                    <input type="password" name="hclpassword" id="hclpassword" class="form-control input-sm" data-toggle="password" value="{$ServerBasic.ServerPass}">
                    <span class="input-group-addon input-group-append" id="basic-addon3">
                    <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </span>
                    </div>
                    </div>
                    </div>
                    {if $ACL.clrescue}
                    {else}
                      <div class="col-md-6">
                      <div class="text-left"><strong>{$_LANG.Server_RescuePassword}</strong></div>
                      <div class="text-left">
                      <div class="input-group input-group-sm">
                      <input type="password" name="hcrpassword" id="hcrpassword" class="form-control input-sm" data-toggle="password" value="{$ServerBasic.RescuePass}">
                      <span class="input-group-addon input-group-append" id="basic-addon3">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </span>
                      </div>
                      </div>
                      </div>
                    {/if}
                    </div>
                    <!--Server information -->
                  <table class="table hcloud table-striped">
                    <tr>
                    <td>{$LANG.primaryIP}:</td><td>{$dedicatedip}</td>
                    <td>{$_LANG["Server_Status"]}:</td><td>{$ServerBasic.Status}</td>
                    </tr>
                  <tr>
                  <td>{$_LANG.Location}:</td><td>{$ServerInfo.Data_Center}</td>
                  <td>{$_LANG.cores}:</td><td>{$ServerInfo.cores} {$_LANG.overview.vCPU} ({$ServerInfo.cpu_type})</td>
                  </tr>
                  <tr>
                  <td>{$_LANG.memory}:</td><td>{$ServerInfo.memory} GB {$_LANG.overview.RAM}</td>
                  <td>{$_LANG.disk}:</td><td>{$ServerInfo.disk} GB ({$ServerInfo.storage_type})
                  {if $isVolumeSize != 'No' } + {$isVolumeSize} GB ({$_LANG.overview.Volume}) {/if}
                  </td>
                  </tr>
                  <tr>
                  <td>{$_LANG.Lock}:</td><td>{$ServerInfo.Locked}</td>
                  <td>{$_LANG.Backup}:</td><td>{$ServerInfo.Backup}</td>
                  </tr>
                  <tr>
                  <td>{$_LANG.Deletion}:</td><td>{$ServerInfo.Delete_Protection}</td>
                  <td>{$_LANG.Rebuild}:</td><td>{$ServerInfo.Rebuild_Protection}</td>
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
</div>
</div>

<div class="panel panel-default mb-3 footer-bg">
<div class="overflow-hidden card">
  <div class="bg-holder bg-card style-bg3"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Quick_Actions}</h5></span>
        <div class="card-header-right">
        <ul class="list-unstyled card-option">
        <li><i class="fa fa-minus act-minimize-card"></i></li>
        </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
    <div class="panel-body card-body text-center">
        <div class="row hcloud-feature-row">
            <div class="col-sm-2 col-xs-4">
              <a href="javascript:vmReboot();">
                    <img src="modules/servers/HetznerCloud/assets/img/reset.svg" />
                    {$_LANG.Reboot}
              </a>
            </div>
            <div class="col-sm-2 col-xs-4">
              <a href="javascript:vmViewBWGraph();">
                    <img src="modules/servers/HetznerCloud/assets/img/bandwidth.svg" />
                    {$_LANG.ViewGraph}
              </a>
            </div>

            <div class="col-sm-2 col-xs-4" style="display:none;" id="offdisplay">
              <a href="javascript:vmPowerOff();">
                    <img src="modules/servers/HetznerCloud/assets/img/poweroff.svg" />
                    {$_LANG.PowerOff}
              </a>
            </div>

            <div class="col-sm-2 col-xs-4" style="display:none;" id="ondisplay">
              <a href="javascript:vmPowerOn();">
                    <img src="modules/servers/HetznerCloud/assets/img/poweron.svg" />
                    {$_LANG.PowerOn}
              </a>
            </div>

            {if $ACL.clisos}
            {else}
            <div class="col-sm-2 col-xs-4">
              <a href="javascript:vmViewISOImages();">
                    <img src="modules/servers/HetznerCloud/assets/img/iso.svg" />
                    {$_LANG.ISOImages}
              </a>
            </div>
            {/if}
            {if $ACL.clrescue}
            {else}
            <div class="col-sm-2 col-xs-4" style="display:none;" id="ovrescuedisable">
              <a href="javascript:DisableRescueMode();">
                    <img src="modules/servers/HetznerCloud/assets/img/recdis.svg" />
                    {$_LANG.Disable_Rescue}
              </a>
            </div>
            <div class="col-sm-2 col-xs-4" style="display:none;" id="ovrescueenable">
              <a href="javascript:vmViewRescueImages();">
                    <img src="modules/servers/HetznerCloud/assets/img/recenable.svg" />
                    {$_LANG.Rescue_Modes}
              </a>
            </div>
            {/if}
            {if $ACL.clinstall}
            {else}
            <div class="col-sm-2 col-xs-4" id="oslininstall">
              <a href="javascript:vmViewOSImages();">
                    <img src="modules/servers/HetznerCloud/assets/img/rebuild.svg" />
                    {$_LANG.OS_Install}
              </a>
            </div>
            {/if}
        </div>
        <div class="row hcloud-feature-row">
          <div class="col-sm-2 col-xs-4">
            <a href="javascript:vmViewIPAddress();">
                  <img src="modules/servers/HetznerCloud/assets/img/ethernet.svg" />
                  {$_LANG.Networking}
            </a>
          </div>
          {if $ACL.clpass}
          {else}
          <div class="col-sm-2 col-xs-4">
            <a href="javascript:vmPassReset();">
                  <img src="modules/servers/HetznerCloud/assets/img/password.svg" />
                  {$_LANG.ResetPassword}
            </a>
          </div>
          {/if}
            {if $ACL.clvnc}
            {else}
            <div class="col-sm-2 col-xs-4">
              <a href="javascript:vmOpenConsole();">
                    <img src="modules/servers/HetznerCloud/assets/img/console.svg" />
                    {$_LANG.Console}
              </a>
            </div>
            {/if}
            {if $ACL.clprotection}
            {else}
            <div class="col-sm-2 col-xs-4" style="display:none;" id="dpdisplay">
              <a href="javascript:vmDisableProtection();">
                    <img src="modules/servers/HetznerCloud/assets/img/prodis.svg" />
                    {$_LANG.Disable_Protection}
              </a>
            </div>
            <div class="col-sm-2 col-xs-4" style="display:none;" id="endisplay">
              <a href="javascript:vmEnableProtection();">
                    <img src="modules/servers/HetznerCloud/assets/img/proenb.svg" />
                    {$_LANG.Enable_Protection}
              </a>
            </div>
            {/if}
            {if $ACL.Backup == 'Yes'}
            <div class="col-sm-2 col-xs-4">
              <a href="javascript:vmViewBackups();">
                    <img src="modules/servers/HetznerCloud/assets/img/backup.svg" />
                    {$_LANG.viewbackups}
              </a>
            </div>
            {/if}
            {if $ACL.firewall == 'Yes' }
            <div class="col-sm-2 col-xs-4">
              <a href="javascript:vmViewfirewall();">
                    <img src="modules/servers/HetznerCloud/assets/img/firewall.svg" />
                    {$_LANG.firewall}
              </a>
            </div>
            {/if}
        </div>
    </div>
  </div>
</div>
</div>

{if $isVolumeSize != 'No' }
<div class="panel panel-default footer-bg" >
  <div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.Volume_Title}</h5> </span>
        <div class="card-header-right">
        <ul class="list-unstyled card-option">
        <li><i class="fa fa-minus vol-minimize-card"></i></li>
        </ul>
        </div>
</div>
<div class="card-block table-border-style">
<div class="panel-body text-left card-body">
  {if $VolumeID}
  {else}
    <div class="pull-right col-md-3">
      <div class="col-xs-5">
      <button type="button" class="btn btn-sm btn-info btn-labeled VolCrt" onclick="vmVolumeCreate()"><span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span> {$_LANG.volume.create}</button>
      </div>
    </div>
  {/if}
  <div class="row col-md-12">
{if $VolumeID}
<p>{$_LANG.Volume_Message}</p>
<p>{$_LANG.Volume_Message_Manage}</p>
{else}
<p>{$_LANG.Volume_Message}</p>
<p>{$_LANG.Volume_Message_Attach}:  {$isVolumeSize} GB</p>
{/if}
</div>

<table id="VolumeTable" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.volume.name}</th>
<th>{$_LANG.volume.DiskSize}</th>
<th>{$_LANG.volume.Created}</th>
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
