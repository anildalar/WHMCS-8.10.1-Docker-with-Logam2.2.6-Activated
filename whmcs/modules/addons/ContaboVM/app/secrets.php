<?php


if (!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
$keyId = $_REQUEST["id"];
$V = $_REQUEST["views"];
$ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($keyId);
$limit = 15;
$adjacents = 2;
$total_rows = $ContaboVM->countSecrets();
$total_pages = ceil($total_rows / $limit);
if (isset($_GET["page"]) && $_GET["page"] != "") {
    $page = $_GET["page"];
    $offset = $limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}
$AllSecrets = $ContaboVM->secretGetAll($page, $limit);
echo "
<table id=\"SeViewTable\" class=\"datatable table table-striped table-bordered table-hover\" width=\"100%\" cellspacing=\"0\">
<thead>
<tr>
<th>" . $LANG["secretId"] . "</th>
<th>" . $LANG["Server_Name"] . "</th>
<th>" . $LANG["secrets_type"] . "</th>
<th>" . $LANG["createdon"] . "</th>
<th>" . $LANG["updatedon"] . "</th>
<th>" . $LANG["Password"] . "</th>
<th></th>
</tr>
</thead>
<tbody>";
foreach ($AllSecrets["data"] as $response) {
    $singleSecret = $ContaboVM->GetSecretId($response["secretId"]);
    if ($response["type"] == "ssh") {
        $ssh_passwrod = $LANG["nosshshow"];
        $btnshow = "<button class=\"btn btn-sm btn-danger\" onclick=\"removeSecret('" . $response["secretId"] . "', '" . $response["name"] . "')\" title=\"" . $LANG["removesecrets"] . "\"><i class=\"fa fa-trash fa-sm\"></i></button>";
    } else {
        $ssh_passwrod = $singleSecret["data"][0]["value"];
        $btnshow = "
<button class=\"btn btn-sm btn-primary\" onclick=\"editSecret('" . $keyId . "', '" . $response["secretId"] . "', '" . $response["name"] . "')\" title=\"" . $LANG["editsecrets"] . "\"><i class=\"fa fa-pencil fa-sm\"></i></button>
<button class=\"btn btn-sm btn-danger\" onclick=\"removeSecret('" . $keyId . "', '" . $response["secretId"] . "', '" . $response["name"] . "')\" title=\"" . $LANG["removesecrets"] . "\"><i class=\"fa fa-trash fa-sm\"></i></button>
";
    }
    $data = "<tr id=\"tbl" . $response["secretId"] . "\">
<td>" . $response["secretId"] . "</td>
<td style=\"color:#d50c2d;\"><strong id=\"name" . $response["secretId"] . "\">" . $response["name"] . "</strong></td>
<td>" . $response["type"] . "</td>
<td>" . date("Y-m-d", strtotime($response["createdAt"])) . "</td>
<td>" . date("Y-m-d", strtotime($response["updatedAt"])) . "</td>
<td id=\"pass" . $response["secretId"] . "\">" . $ssh_passwrod . "</td>
<td>" . $btnshow . "</td>
</tr>";
    echo $data;
}
echo "</tbody></table>
";
if ($total_pages <= 1 + $adjacents * 2) {
    $start = 1;
    $end = $total_pages;
} elseif (1 < $page - $adjacents) {
    if ($page + $adjacents < $total_pages) {
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
if (1 < $total_pages) {
    echo "         <ul class=\"pagination pagination-sm justify-content-center\">
           <li class='page-item ";
    if ($page <= 1) {
        echo "disabled";
    } else {
        echo "'>
<a class='page-link' href='?module=ContaboVM&secrets=secrets&id=";
        echo $keyId;
        echo "&page=1'>";
        echo $LANG["First"];
        echo "</a>
           </li>
           <li class='page-item ";
        if ($page <= 1) {
            echo "disabled";
        } else {
            echo "'>
<a class='page-link' href='?module=ContaboVM&secrets=secrets&id=";
            echo $keyId;
            echo "&page=";
            if (1 < $page) {
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
                    if ($i == $page) {
                        echo "active";
                    } else {
                        echo "'>
<a class='page-link' href='?module=ContaboVM&secrets=secrets&id=";
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
                if ($total_pages <= $page) {
                    echo "disabled";
                } else {
                    echo "'>
<a class='page-link' href='?module=ContaboVM&secrets=secrets&id=";
                    echo $keyId;
                    echo "&page=";
                    if ($page < $total_pages) {
                        echo $page + 1;
                    } else {
                        echo $total_pages;
                        echo "'>";
                        echo $LANG["Next"];
                        echo "</a>
           </li>
           <li class='page-item ";
                        if ($total_pages <= $page) {
                            echo "disabled";
                        } else {
                            echo "'>
<a class='page-link' href='?module=ContaboVM&secrets=secrets&id=";
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
