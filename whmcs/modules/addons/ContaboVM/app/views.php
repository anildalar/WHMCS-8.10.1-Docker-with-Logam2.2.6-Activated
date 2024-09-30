<?php

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
$keyId = $_REQUEST["id"];
$V = $_REQUEST["views"];
$ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($keyId);
$limit = 15;
$adjacents = 2;
$total_rows = $ContaboVM->countInstances();
$total_pages = ceil($total_rows / $limit);
if(isset($_GET["page"]) && $_GET["page"] != "") {
    $page = $_GET["page"];
    $offset = $limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}
$AllServers = $ContaboVM->serverGetAll($page, $limit);
echo "
<table id=\"VMViewTable\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
<thead>
<tr>
<th style=\"display:none;\"></th>
<th>" . $LANG["server_name"] . "</th>
<th>" . $LANG["ip_address"] . "</th>
<th>" . $LANG["Server_Status"] . "</th>
<th>" . $LANG["created"] . "</th>
<th>" . $LANG["userto"] . "</th>
<th></th>
</tr>
</thead>
<tbody>";
foreach ($AllServers["data"] as $response) {
    if($response["status"] == "running") {
        $Status = "<span class=\"status-field completed\"><span class=\"glyphicon glyphicon-play-circle\"></span> " . $response["status"] . "</span>";
    } elseif($response["status"] == "installing") {
        $Status = "<span class=\"status-field completed\"><span class=\"glyphicon glyphicon-refresh\"></span> " . $response["status"] . "</span>";
    } elseif($response["status"] == "starting") {
        $Status = "<span class=\"status-field completed\"><span class=\"glyphicon glyphicon-refresh\"></span> " . $response["status"] . "</span>";
    } else {
        $Status = "<span class=\"status-field pending\"><span class=\"glyphicon glyphicon-stop\"></span> " . $response["status"] . "</span>";
    }
    $data = "<tr>
<td style=\"display:none;\"></td>
<td style=\"color:#d50c2d;\"><strong>" . $response["name"] . " - " . $response["displayName"] . "</strong><br />
<span class=\"label label-success\">" . $response["osType"] . " / " . $ContaboVM->formatSizeMBtoGB($response["ramMb"]) . " GB / " . $response["cpuCores"] . " Core(s) / " . $ContaboVM->formatSizeMBtoGB($response["diskMb"]) . " GB (" . $response["productType"] . ") </span>
</td>
<td>" . $response["ipConfig"]["v4"]["ip"] . "</td>
<td>" . $Status . "</td>
<td>" . date("d-m-Y", strtotime($response["createdDate"])) . "</td>";
    $srelid = $ContaboVM->ContaboVM_Select("tblservers", "id", ["accesshash" => $response["instanceId"]]);
    $suser = $ContaboVM->ContaboVM_Select("tblhosting", ["userid", "id"], ["server" => $srelid[0]->id]);
    $srelid = $ContaboVM->ContaboVM_Select("tblcustomfieldsvalues", "relid", ["value" => $response["instanceId"]]);
    $hostId = $srelid[0]->relid;
    if(!$hostId) {
        $srelid = $ContaboVM->ContaboVM_Select("tblservers", "id", ["accesshash" => $response["instanceId"] . "_" . $keyId]);
        $hostId = $srelid[0]->id;
        $suser = $ContaboVM->ContaboVM_Select("tblhosting", ["userid", "id"], ["server" => $hostId]);
        $Exists = $ContaboVM->ContaboVM_Select("tblservers", "accesshash", ["accesshash" => $response["instanceId"] . "_" . $keyId, "type" => "ContaboVM"]);
        list($Existsaccesshash) = explode("_", $Exists[0]->accesshash);
    } else {
        $suser = $ContaboVM->ContaboVM_Select("tblhosting", ["userid", "id"], ["id" => $hostId]);
        $Existsaccesshash = $response["instanceId"];
    }
    $client = WHMCS\User\Client::find($suser[0]->userid);
    $data .= "<td><a target=\"_blank\" href=\"clientsservices.php?userid=" . $suser[0]->userid . "&id=" . $suser[0]->id . "\">" . $client->firstname . " " . $client->lastname . "</a></td>
<td>";
    if($Existsaccesshash == $response["instanceId"]) {
    } else {
        $data .= "
<button id=\"inst" . $response["instanceId"] . "\" class=\"btn btn-sm btn-success\" onclick=\"importServer('" . $keyId . "', '" . $response["instanceId"] . "', '" . $response["name"] . " - " . $response["displayName"] . "')\" title=\"" . $LANG["Import"] . "\"><i class=\"fa fa-plus fa-sm\"></i></button>
";
    }
    $data .= "
</td>
</tr>";
    echo $data;
}
echo "</tbody></table>
";
if($total_pages <= 1 + $adjacents * 2) {
    $start = 1;
    $end = $total_pages;
} elseif(1 < $page - $adjacents) {
    if($page + $adjacents < $total_pages) {
        $start = $page - $adjacents;
        $end = $page + $adjacents;
    } else {
        $start = $total_pages - (1 + $adjacents * 2);
        $end = $total_pages;
    }
} else {
    $start = 1;
    $end = 1 + $adjacents * 2;
}
echo "
   ";
if(1 < $total_pages) {
    echo "         <ul class=\"pagination pagination-sm justify-content-center\">
           <li class='page-item ";
    if($page <= 1) {
        echo "disabled";
    } else {
        echo "'>
<a class='page-link' href='?module=ContaboVM&views=vps&id=";
        echo $keyId;
        echo "&page=1'>";
        echo $LANG["First"];
        echo "</a>
           </li>
           <li class='page-item ";
        if($page <= 1) {
            echo "disabled";
        } else {
            echo "'>
<a class='page-link' href='?module=ContaboVM&views=vps&id=";
            echo $keyId;
            echo "&page=";
            if(1 < $page) {
                echo $page - 1;
            } else {
                echo 1;
                echo "'>";
                echo $LANG["Previous"];
                echo "</a>
           </li>
           ";
                $i = $start;
                while ($i <= $end) {
                    echo "           <li class='page-item ";
                    if($i == $page) {
                        echo "active";
                    } else {
                        echo "'>
<a class='page-link' href='?module=ContaboVM&views=vps&id=";
                        echo $keyId;
                        echo "&page=";
                        echo $i;
                        echo "'>";
                        echo $i;
                        echo "</a>
           </li>
           ";
                        $i++;
                    }
                }
                echo "           <li class='page-item ";
                if($total_pages <= $page) {
                    echo "disabled";
                } else {
                    echo "'>
<a class='page-link' href='?module=ContaboVM&views=vps&id=";
                    echo $keyId;
                    echo "&page=";
                    if($page < $total_pages) {
                        echo $page + 1;
                    } else {
                        echo $total_pages;
                        echo "'>";
                        echo $LANG["Next"];
                        echo "</a>
           </li>
           <li class='page-item ";
                        if($total_pages <= $page) {
                            echo "disabled";
                        } else {
                            echo "'>
<a class='page-link' href='?module=ContaboVM&views=vps&id=";
                            echo $keyId;
                            echo "&page=";
                            echo $total_pages;
                            echo "'>";
                            echo $LANG["Last"];
                            echo "</a>
           </li>
         </ul>
       ";
                        }
                    }
                }
            }
        }
    }
}
echo "<br />";

?>