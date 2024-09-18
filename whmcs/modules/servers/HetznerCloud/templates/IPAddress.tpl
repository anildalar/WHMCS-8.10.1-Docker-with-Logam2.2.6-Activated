
<script src="modules/servers/HetznerCloud/assets/js/notify.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/script.js"></script>
<script src="modules/addons/HetznerCloud/assets/js/Confirmation.js"></script>
<link rel="stylesheet" href="modules/addons/HetznerCloud/assets/css/Confirmation.css">
<script src="modules/servers/HetznerCloud/assets/js/IPAddress.js"></script>
<link rel="stylesheet" href="modules/servers/HetznerCloud/assets/css/style.css">
<div id="custom-loader" class="hcloud-loader" style='display:none; margin:-20px;'></div>
<div id="FloatingIPMsg" style='display:none;' class="alert alert-success">
<span id="custom-alert-message"></span>
</div>
<!--Network Information-->
{literal}
<script type="text/javascript">
  var langVar= {/literal}{$langVarJson}{literal};
</script>
{/literal}
<div class="panel panel-danger footer-bg">
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg1"></div>
<div class="panel-heading card-header">
    <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$_LANG.IPAddress.Primary}</h5> </span>
    <div class="card-header-right">
    <ul class="list-unstyled card-option">
    <li><i class="fa fa-sync-alt ip-reload-card"></i></li>
    </ul>
    </div>
</div>
<div class="panel-body text-left card-body">

  <table id="viewip" class="datatable table table-striped table-bordered table-hover" width="100%" cellspacing="0">
    <thead class="dataTables_info">
    <tr>
    <th>{$_LANG.IP_Address}</th>
    <th>{$_LANG.Blocked}</th>
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

<!--Floating IP Address-->
{if $isFloatingIP gt 0}
<div class="panel panel-default footer-bg" >
  <div class="overflow-hidden card">
<div class="bg-holder bg-card style-bg4"></div>
    <div class="panel-heading card-header">
      <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$_LANG.IPAddress.fltitle}</h5> </span>
      <div class="card-header-right">
      <ul class="list-unstyled card-option">
      <li><i class="fa fa-sync-alt flip-reload-card"></i></li>
      </ul>
    </div>
    </div>
<div class="panel-body text-left card-body">
  <div class="col-md-12">
<p>{$_LANG.IPAddress.fltdes}</p>
{if $FloatingIPs.floating_ips|count eq 0}
<p>{$_LANG.IPAddress.flassign}</p>
{/if}
</div>
{if $FloatingIPs.floating_ips|count lt $isFloatingIP}
<div class="pull-lft float-left col-md-3">
<button type="button" class="btn btn-sm btn-success btn-labeled" onclick="AddFloatIP()"><span class="btn-label"><i class="fa fa-plus"></i></span>{$_LANG.IPAddress.AddIP}</button>
</div>
{/if}
<table id="floatip" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
  <thead class="dataTables_info">
<tr>
<th>{$_LANG.IP_Address}</th>
<th>{$_LANG.Blocked}</th>
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

{/if}
