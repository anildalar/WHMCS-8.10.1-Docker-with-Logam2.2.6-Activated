
{if $BackupAddon == 'Yes'}
<script src="modules/servers/HetznerCloud/assets/js/notify.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/script.js"></script>
<script src="modules/addons/HetznerCloud/assets/js/Confirmation.js"></script>
<link rel="stylesheet" href="modules/addons/HetznerCloud/assets/css/Confirmation.css">
<script src="modules/servers/HetznerCloud/assets/js/Backup.js"></script>
<link rel="stylesheet" href="modules/servers/HetznerCloud/assets/css/style.css">
<div id="custom-loader" class="hcloud-loader" style='display:none; margin:-20px;'></div>
{literal}
<script type="text/javascript">
  var langVar= {/literal}{$langVarJson}{literal};
</script>
{/literal}
<div class="panel panel-default footer-bg" >
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg3"></div>
    <div class="panel-heading card-header">
      <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG.backup.CloudVMBackups}</h5></span>
      <div class="card-header-right">
      <ul class="list-unstyled card-option">
      <li><i class="fa fa fa-wrench open-card-option"></i></li>
      <li><i class="fa fa-minus minimize-card"></i></li>
      <li><i class="fa fa-sync-alt backup-reload-card"></i></li>
      </ul>
    </div>
    </div>

<div class="card-block table-border-style">
<div class="panel-body text-left card-body">
<div class="col-md-12">
<p>{$_LANG.backup.slots}</p>
<p>{$_LANG.backup.oldest}</p>
<p>{$_LANG.backup.consistency}</p>
</div>
<!--Btn Backups-->
<div class="pull-left float-left col-md-6">
<div style="display:none;" id="BackupStatusDisable">
<div class="row">
<div class="col-md-6">
<button type="button" class="btn btn-xs btn-info btn-labeled" onclick="CreateBackup()"><span class="btn-label"><i class="fa fa-plus"></i></span> {$_LANG.backup.cmb}</button>
</div>
<div class="col-md-6">
<button type="button" class="btn btn-xs btn-danger btn-labeled" onclick="DisableBackup()"><span class="btn-label"><i class="fas fa-trash-alt"></i></span> {$_LANG.backup.DisableBackups}</button>
</div>
</div>
</div>
<div style="display:none;" id="BackupStatusEnable">
<div class="row col-md-8">
<div class="col-xs-5">
<button type="button" class="btn btn-sm btn-success btn-labeled" onclick="EnableBackup()"><span class="btn-label"><i class="fa fa-plus" aria-hidden="true"></i></span> {$_LANG.backup.EnableBackups}</button>
</div>
</div>
</div>
</div>
<!--Btn Backups-->
<!--Table-->
<table id="BackUpTable" class="table table-striped table-bordered table-hover" style="width:100%" cellspacing="0">
<thead class="dataTables_info">
<tr>
<th>{$_LANG.backup.Description}</th>
<th>{$_LANG.backup.DiskSize}</th>
<th>{$_LANG.backup.Status}</th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<!--Table-->
</div>
</div>
</div>
</div>
{/if}
