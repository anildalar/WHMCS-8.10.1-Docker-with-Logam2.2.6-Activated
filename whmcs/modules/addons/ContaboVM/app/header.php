<?php

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
echo "
<script type=\"text/javascript\">
  var langVar = " . json_encode($LANG) . ";
  var contaboaddonmoduleURL = \"" . $modulelink . "\";
  \$(document).ready(function(){
    var h1tag = document.getElementsByTagName(\"h1\");
  for (var i =0; i<h1tag.length; i++) {
    if(h1tag[i].textContent == \"Contabo Cloud\"){
      h1tag[i].style.display = \"none\";
    }
  }
  });
</script>
<link href=\"../modules/servers/ContaboVM/assets/css/style.css\" rel=\"stylesheet\" />
<link href=\"../modules/addons/ContaboVM/assets/css/style.css\" rel=\"stylesheet\" />
<link href=\"../modules/addons/ContaboVM/assets/css/Confirmation.css\" rel=\"stylesheet\" />
<script  src=\"../modules/addons/ContaboVM/assets/js/Confirmation.js\" type=\"application/javascript\"></script>
<script  src=\"../modules/addons/ContaboVM/assets/js/AdminService.js\" type=\"application/javascript\"></script>
 <nav class=\"navbar navbar-default style-bg4\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
<a class=\"navbar-brand\" href=\"https://www.google.com/\" target=\"_blank\"><img src=\"https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png\" height=\"20\" width=\"150\"></a>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
    <ul class=\"nav navbar-nav\">
<li role=\"presentation\"" . $home . "><a href=\"" . $modulelink . "\"><i class=\"fa fas fa-home\"></i> " . $LANG["home"] . "</a></li>
<li role=\"presentation\"" . $ltype . "><a href=\"" . $modulelink . "&ltype=license\"><i class=\"fa fa-id-card\"></i> " . $LANG["lic"] . "</a></li>
    </ul>
    </div>
  </div>
</nav>
<div id=\"custom-loader\" class=\"hcloud-loader\" style=\"display:none; margin:-20px;\"></div>
<div id=\"AdminMsg\" style=\"display:none;\" class=\"successbox\">
<strong><span class=\"title\">" . $LANG["ModeCommand"] . "</span></strong><br>
<span id=\"custom-alert-message\"></span>
</div>
<script>
\$(document).ready(function() {
  \$(\"#VMViewTable\").DataTable({\"ordering\": false, \"bLengthChange\": false, \"bPaginate\": false});
  \$(\"#SeViewTable\").DataTable({\"ordering\": false, \"bLengthChange\": false, \"bPaginate\": false});
} );
</script>
";

?>