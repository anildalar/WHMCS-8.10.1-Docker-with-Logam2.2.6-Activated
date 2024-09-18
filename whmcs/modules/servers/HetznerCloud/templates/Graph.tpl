
<script src="modules/servers/HetznerCloud/assets/js/notify.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/Graph.js"></script>
<script src="modules/servers/HetznerCloud/assets/js/highcharts.js"></script>
<link rel="stylesheet" href="modules/servers/HetznerCloud/assets/css/style.css">
<div id="custom-loader" class="hcloud-loader" style='display:none; margin:-20px;'></div>
<div class="panel panel-default col-lg-12">
  <div class="overflow-hidden card">
    <div class="bg-holder bg-card style-bg1"></div>
    <div class="panel-heading card-header row">
      <div class="pull-left col-md-9">
        <span class="pull-left float-left"><h5 class="panel-title card-title m-0">{$_LANG["graph"]["view"]}</h5></span>
        </div>
        <div class="pull-right col-md-3">
        <div class="col-md-3">
          <select class="viewgraph">
      <option value="current">{$_LANG["graph"]["Live"]}</option>
      <option value="1hr">1 {$_LANG["graph"]["Hour"]}</option>
      <option value="12hrs">12 {$_LANG["graph"]["Hours"]}</option>
      <option value="24hrs">24 {$_LANG["graph"]["Hours"]}</option>
      <option value="1week">1 {$_LANG["graph"]["Week"]}</option>
      <option value="30days">30 {$_LANG["graph"]["Days"]}</option>
    </select>
        </div>
        </div>
    </div>
    <div class="text-center panel-body card-body footer-bg">
      <div id="CPU" class="hcloud-highcharts-figure"></div>
      <div id="Throughput" class="hcloud-highcharts-figure"></div>
      <div id="IOPS" class="hcloud-highcharts-figure"></div>
      <div id="Traffic" class="hcloud-highcharts-figure"></div>
      <div id="PPS" class="hcloud-highcharts-figure"></div>
    </div>
</div>
</div>
