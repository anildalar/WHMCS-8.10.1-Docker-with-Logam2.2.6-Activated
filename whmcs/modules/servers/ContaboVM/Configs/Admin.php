<?php


// Decoded file for php version 74.
if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
echo "<script src=\"../modules/addons/ContaboVM/assets/js/Confirmation.js\"></script>
<link rel=\"stylesheet\" href=\"../modules/addons/ContaboVM/assets/css/Confirmation.css\">
<link href=\"../modules/servers/ContaboVM/assets/css/style-admin.css\" rel=\"stylesheet\">
<link href=\"../modules/addons/ContaboVM/assets/css/style.css\" rel=\"stylesheet\" />
<script  src=\"../modules/servers/ContaboVM/assets/js/AdminAjax.js\"></script>
<div id=\"custom-loader\" class=\"hcloud-loader\" style=\"display:none; margin:-20px;\"></div>
<div id=\"AdminPanel\" style=\"display:none;\" class=\"successbox\">
<strong><span class=\"title\">" . $_LANG["ModeCommand"] . "</span></strong><br>
<span id=\"custom-alert-message\"></span>
</div>
<script type=\"text/javascript\">
  var langVar = " . json_encode($_LANG) . ";
</script>
";
if($single["status"] == "running") {
    $Status = "<span class=\"status-field completed\" id=\"serverrun\" data-reactid=\"46\">" . $single["status"] . "</span>";
} else {
    $Status = "<span class=\"status-field pending\" id=\"serverrun\" data-reactid=\"46\">" . $single["status"] . "</span>";
}
if($single["status"] == "rescue") {
    $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
    $generatedpassword = $ContaboVM->GetSecretId($passwordid)["data"][0]["value"];
    $resc = " <div style=\"display: flex; justify-content: space-between;\">
   <table class=\"datatable\"
   style=\"width:350px; text-align:center;margin-top:20px;border-spacing: 5px;border-collapse: separate;\">
   <tbody>
   <tr> <th>" . $_LANG["Server"] . "</th> <td>" . $single["name"] . "</td> </tr>
   <tr> <th>" . $_LANG["Server_Status"] . "</th> <td>" . $Status . "</td> </tr>
   <tr> <th>" . $_LANG["Main_IP"] . "</th> <td>" . $single["ipConfig"]["v4"]["ip"] . "</td> </tr>
   <tr> <th>" . $_LANG["username"] . "</th> <td>root</td> </tr>
   <tr> <th>" . $_LANG["Server_RescuePassword"] . "</th> <td>" . $generatedpassword . "</td> </tr>
   </tbody></table>
 </div>
 <div class=\"row hcloud col-md-12 col-sm-6 text-center\">
<div class=\"btn-box\">
  <button type=\"button\" class=\"btn-style btn-color-red-oranges\" onclick=\"vmReboot();\"><i class=\"fa fa-undo\"></i>" . $_LANG["Reboot"] . "</button>
 </div>
</div>
 ";
} else {
    $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "../packages";
    if(file_exists($dir . "/location.json")) {
        $filename = $dir . "/location.json";
        $data = file_get_contents($filename);
        $LocationGetAll = json_decode($data, true);
    } else {
        logActivity("Contabo WHMCS Module - JSON Location file missing");
    }
    foreach ($LocationGetAll["regions"] as $LocationAll) {
        if($LocationAll["region"] == $single["region"]) {
            $region = $LocationAll["name"];
            $Server_Actions = "
<div class=\"panel panel-default card\">
<div class=\"overflow-hidden footer-bg\">
<div class=\"bg-holder bg-card style-bg1\"></div>
<div class=\"panel-heading card-header\">
<h5 class=\"panel-title\">" . $_LANG["Server"] . "</h5>
</div>
<div class=\"panel-body card-body\">
   <div class=\"row\">
       <div class=\"col-md-12\">
       <div class=\"media-left\">
       <span id=\"osimg\">
         <img style=\"vertical-align: middle; width: 128px; height: 128px;\" class=\"hcloud-img-thumbnail\" />
       </span><br />
       <center><strong><span id=\"osdes\"></span></strong></center>
       </div>
       <div class=\"media-right\" style=\"text-align:center;width:800px; margin-top:20px;border-spacing: 5px;
                  border-collapse: separate;\">
       <div class=\"row hcloud col-md-12 col-sm-6\">


       <div style=\"display: flex; justify-content: space-between;\">
       <table class=\"datatable\"
       style=\"width:350px; text-align:center;margin-top:20px;border-spacing: 5px;border-collapse: separate;\">
       <tbody>
      <tr> <th>" . $_LANG["cores"] . "</th> <td>" . $single["cpuCores"] . " vCPU</td> </tr>
       <tr> <th>" . $_LANG["memory"] . "</th> <td>" . $ContaboVM->formatSizeMBtoGB($single["ramMb"]) . " GB RAM</td> </tr>
       <tr> <th>" . $_LANG["disk"] . "</th> <td>" . $ContaboVM->formatSizeMBtoGB($single["diskMb"]) . " GB (" . $single["productType"] . ")</td> </tr>
       <tr> <th>" . $_LANG["createdDate"] . "</th> <td>" . date("Y-m-d", strtotime($single["createdDate"])) . "</td> </tr>
       <tr> <th>" . $_LANG["cancelDate"] . "</th> <td>" . date("Y-m-d", strtotime($single["cancelDate"])) . "</td> </tr>
       </tbody></table>
       <table class=\"datatable\"
       style=\"width:350px; text-align:center;margin-top:20px;border-spacing: 5px;border-collapse: separate;\">
       <tbody>
       <tr> <th>" . $_LANG["Server"] . "</th> <td>" . $single["name"] . "</td> </tr>
       <tr> <th>" . $_LANG["Server_Status"] . "</th> <td>" . $Status . "</td> </tr>
       <tr> <th>" . $_LANG["displayName"] . "</th> <td id=\"disname\">" . $single["displayName"] . "</td> </tr>
       <tr> <th>" . $_LANG["Data_Center"] . "</th> <td>" . $region . "</td> </tr>
       <tr> <th>" . $_LANG["osType"] . "</th> <td>" . $single["osType"] . "</td> </tr>
       </tbody></table>
     </div>

       <div class=\"btn-box\">
          <button type=\"button\" class=\"btn-style btn-color-red-oranges\" onclick=\"vmReboot();\"><i class=\"fa fa-undo\"></i>" . $_LANG["Reboot"] . "</button>
           <button type=\"button\" class=\"btn-style btn-color-pink-red\" onclick=\"vmPowerOff();\" id=\"offdisplay\" style=\"display:none;\"><i class=\"fa fa-stop-circle\"></i>" . $_LANG["PowerOff"] . "</button>
           <button type=\"button\" class=\"btn-style btn-color-green-cyan\" onclick=\"vmPowerOn();\" id=\"ondisplay\" style=\"display:none;\"><i class=\"fa fa-play-circle\"></i>" . $_LANG["PowerOn"] . "</button>
           <button type=\"button\" class=\"btn-style btn-color-blue2\" onclick=\"vmRescue();\"><i class=\"fa fa-cog\"></i>" . $_LANG["Enable_Rescue"] . "</button>
           <button type=\"button\" class=\"btn-style btn-color-red-green\" id=\"snapdisplay\" onclick=\"vmSnapshot('" . $instanceId . "', '" . $_LANG["insnap"] . "');\"><i class=\"fa fa-key\"></i>" . $_LANG["SnapImage"] . "</button>
         </div>

       </div>
       </div>
       </div>
   </div>
</div>
</div>
</div>";
            $Server_Actions .= "
<div class=\"panel panel-default mb-3 card\" id=\"oslininstall\">
  <div class=\"overflow-hidden footer-bg\">
    <div class=\"bg-holder bg-card style-bg3\"></div>
    <div class=\"panel-heading card-header\">
        <h5 class=\"panel-title\">" . $_LANG["InstanceRebuild"] . "</h5>
    </div>
<div class=\"panel-body text-left card-body\">
  <div class=\"col-md-12\">
  <p>" . $_LANG["Linux_Notice"] . "</p>
  <p>" . $_LANG["Linux_Pass"] . "</p>
  <p><strong>" . $_LANG["Linux_Warning"] . "</strong></p>
  </div>
  <table id=\"OSImageTable\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
  <thead>
  <tr>
  <th>" . $_LANG["Distribution"] . "</th>
  <th>" . $_LANG["OS"] . "</th>
  <th></th>
  </tr>
  </thead>
  <tbody>
  </tbody>
  </table>
</div>
</div>
</div>
";
            $Server_Actions .= "
<div class=\"panel panel-default card\" id=\"ipaddressview\">
<div class=\"overflow-hidden footer-bg\">
<div class=\"bg-holder bg-card style-bg4\"></div>
    <div class=\"panel-heading card-header\">
        <h5 class=\"panel-title\">" . $_LANG["IPAddress"]["Primary"] . "</h5>
    </div>
    <div class=\"panel-body text-left card-body\">
<table id=\"ShowIPs\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
<thead>
<tr>
<th>" . $_LANG["IP_Address"] . "</th>
<th>" . $_LANG["gateway"] . "</th>
<th>" . $_LANG["mac"] . "</th>
<th>" . $_LANG["IPType"] . "</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

</div>
</div>
";
            $Server_Actions .= "
<div class=\"panel panel-default card\" id=\"logstable\">
<div class=\"overflow-hidden footer-bg\">
<div class=\"bg-holder bg-card style-bg4\"></div>
    <div class=\"panel-heading card-header\">
        <h5 class=\"panel-title\">" . $_LANG["Activity"] . "</h5>
    </div>
    <div class=\"panel-body text-left card-body\">
<table id=\"logs\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
<thead>
<tr>
<th>" . $_LANG["action"] . "</th>
<th>" . $_LANG["timestamp"] . "</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

</div>
</div>
";
            $Server_Actions .= "
<div class=\"panel panel-default card\" id=\"snaptables\">
<div class=\"overflow-hidden footer-bg\">
<div class=\"bg-holder bg-card style-bg4\"></div>
    <div class=\"panel-heading card-header\">
        <h5 class=\"panel-title\">" . $_LANG["SnapImage"] . "</h5>
    </div>
    <div class=\"panel-body text-left card-body\">
<table id=\"snaps\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
<thead>
<tr>
<th>" . $_LANG["name"] . "</th>
<th>" . $_LANG["createdDate"] . "</th>
<th>" . $_LANG["autoDeleteDate"] . "</th>
<th>" . $_LANG["Image"] . "</th>
<th></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

</div>
</div>
";
        }
    }
}
if($single["status"] == "rescue") {
    $ContaboAdmin = "

  <div class=\"tab-content\">
    <div id=\"general\" class=\"tab-pane fade in active\">
    " . $resc . "
    </div>
  </div>";
} else {
    $ContaboAdmin = "

  <div class=\"tab-content\">
    <div id=\"general\" class=\"tab-pane fade in active\">
    " . $Server_Actions . "
    </div>
  </div>";
}

?>