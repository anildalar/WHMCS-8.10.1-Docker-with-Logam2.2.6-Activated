
<script src="modules/servers/HetznerCloud/assets/js/notify.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/script.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/Client.js"></script>
<script src="modules/addons/HetznerCloud/assets/js/Confirmation.js"></script>
<link rel="stylesheet" href="modules/addons/HetznerCloud/assets/css/Confirmation.css">
<link rel="stylesheet" href="modules/servers/HetznerCloud/assets/css/style.css">
<div id="custom-loader" class="hcloud-loader" style='display:none; margin:-20px;'></div>
<div id="rescuemsg" style="display:none;" class="alert alert-success">
<span id="custom-alert-message"></span>
</div>
{literal}
<script type="text/javascript">
  var langVar= {/literal}{$langVarJson}{literal};
</script>
{/literal}
{if $RescueStatus}
<script type="text/javascript">
$(document).ready(function(){
$("#resdis").show();
});
</script>
{else}
<script type="text/javascript">
$(document).ready(function(){
$("#resdis").hide();
});
</script>
{/if}
<div class="panel panel-default footer-bg" >
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg3"></div>
    <div class="panel-heading card-header">
      <span class="pull-left float-left">  <h5 class="panel-title card-title m-0">{$_LANG.rescue.title}</h5> </span>
        <div class="card-header-right">
        <ul class="list-unstyled card-option">
        <li><i class="fa fa fa-wrench open-card-option"></i></li>
        <li><i class="fa fa-minus minimize-card"></i></li>
        <li><i class="fa fa-sync-alt rescue-reload-card"></i></li>
        </ul>
      </div>
    </div>
    <div class="card-block table-border-style">
<div class="panel-body text-left card-body">
  <div class="col-md-12">
  <p>{$_LANG.Rescue_Notice1}</p>
  <p>{$_LANG.Rescue_Notice3}</p>
  <p>{$_LANG.Rescue_Notice2}</p>
  <p><strong>{$_LANG.Rescue_MSG}</strong></p>
</div>

<div class="row col-md-8" id="resdis" style="display:none;">
  <div class="col-xs-3">
<button type="button" class="btn btn-info btn-labeled" onclick="vmRescueModeReboot()"><span class="btn-label"><i class="fa fa-undo" aria-hidden="true"></i></span> {$_LANG.Reboot}</button>
  </div>
  <div class="col-xs-3">
<button type="button" class="btn btn-danger btn-labeled" onclick="vmRescueModeDisable()"><span class="btn-label"><i class="fa fa-minus" aria-hidden="true"></i></span> {$_LANG.Disable_Rescue}</button>
  </div>
</div>

<table id="RescueImageTable" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
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
