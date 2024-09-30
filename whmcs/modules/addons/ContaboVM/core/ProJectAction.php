<?php
use WHMCS\Database\Capsule;
if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
$subaction = $_REQUEST["subaction"];
if($subaction == "ImportCloud") {
    $check = $_POST["serverid"];
    $keyId = $_POST["projectId"];
    $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($keyId);
    $single = $ContaboVM->ListinstancesById($check);
    $Exists = $ContaboVM->ContaboVM_Select("tblservers", "accesshash", ["accesshash" => $single["data"][0]["instanceId"], "type" => "ContaboVM"]);
    if($Exists[0]->accesshash == $single["data"][0]["instanceId"]) {
        $result["status"] = "exist";
        echo json_encode($result);
        exit;
    }
    $ContaboVM->ContaboVM_Insert("tblservers", ["name" => $single["data"][0]["name"] . " - " . $single["data"][0]["displayName"] . " - " . $single["data"][0]["region"], "hostname" => $single["data"][0]["name"] . " - " . $single["data"][0]["displayName"], "ipaddress" => $single["data"][0]["ipConfig"]["v4"]["ip"], "type" => "ContaboVM", "noc" => "Contabo - Region:" . $single["data"][0]["region"], "accesshash" => $single["data"][0]["instanceId"] . "_" . $keyId, "active" => 0, "maxaccounts" => 1]);
    $Exist = $ContaboVM->ContaboVM_Select("tblservers", "accesshash", ["accesshash" => $single["data"][0]["instanceId"], "type" => "ContaboVM"]);
    if($Exist[0]->accesshash == $single["data"][0]["instanceId"]) {
        $result["status"] = "completed";
        echo json_encode($result);
        exit;
    }
} elseif($subaction == "RemoveSecretId") {
    $secretId = (int) $_POST["secretId"];
    $keyId = $_POST["projectId"];
    $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($keyId);
    $single = $ContaboVM->DeleteSecret($secretId);
    $ContaboVM->ContaboVM_Log("ContaboVM Remove Secret", $params, "{\"secret ID\": \"" . $secretId . "\"}", $single);
    if(empty($single)) {
        $result["status"] = "completed";
        echo json_encode($result);
        exit;
    }
} else {
    if($subaction == "EditSecretId") {
        $secretId = (int) $_POST["secretId"];
        $name = $_POST["sname"];
        $value = $_POST["value"];
        $keyId = $_POST["projectId"];
        $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($keyId);
        $single = $ContaboVM->UpdateSecretById($secretId, $name, $value);
        $ContaboVM->ContaboVM_Log("ContaboVM Edit Secret", $params, "{\"secret ID\": \"" . $secretId . "\", \"secret name\": \"" . $name . "\", \"secret value\": \"" . $value . "\"}", $single);
        if($single["statusCode"] == "400") {
            $result["status"] = "error";
            $result["message"] = $single["message"];
        } else {
            $result["status"] = "completed";
        }
        echo json_encode($result);
        exit;
    }
    if($subaction == "ApiProjectAddEdit") {
        $apikey = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $clid = filter_input(INPUT_POST, "cid", FILTER_SANITIZE_STRING);
        $secret = filter_input(INPUT_POST, "secret", FILTER_SANITIZE_STRING);
        $apiuser = filter_input(INPUT_POST, "apiuser", FILTER_SANITIZE_STRING);
        $apipass = filter_input(INPUT_POST, "apipass", FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);
        $checkExist = Capsule::table("mod_contabo_project")->select("id")->where("id", "=", $id)->first();
        if($checkExist->id) {
            Capsule::table("mod_contabo_project")->where("id", "=", $id)->update(["projectName" => $apikey, "clientId" => $clid, "clientSecret" => encrypt($secret), "clientAPIUser" => encrypt($apiuser), "clientPass" => encrypt($apipass)]);
        } else {
            Capsule::table("mod_contabo_project")->insertGetId(["projectName" => $apikey, "clientId" => $clid, "clientSecret" => encrypt($secret), "clientAPIUser" => encrypt($apiuser), "clientPass" => encrypt($apipass)]);
        }
        $result["message"] = "completed";
        echo json_encode($result);
        exit;
    }
    if($subaction == "ApiProjectDelete") {
        Capsule::table("mod_contabo_project")->where(["id" => $_REQUEST["apiid"]])->delete();
        $checkExist = Capsule::table("mod_contabo_project")->select("id")->where(["id" => $_REQUEST["apiid"]])->first();
        if($checkExist->id) {
        } else {
            $result["status"] = "completed";
            echo json_encode($result);
            exit;
        }
    } elseif($subaction == "getProjects") {
        foreach (Capsule::table("mod_contabo_project")->get() as $Project) {
            $btn = "<button class=\"btn btn-sm btn-warning\" onclick=\"ProjectAPIEdit('" . $Project->id . "', '" . $Project->projectName . "', '" . $Project->clientId . "',\n    '" . decrypt($Project->clientSecret) . "', '" . decrypt($Project->clientAPIUser) . "', '" . decrypt($Project->clientPass) . "')\" title=\"" . $LANG["Edit_Project"] . "\"><i class=\"fa fa-pencil fa-sm\"></i></button>\n   <button class=\"btn btn-sm btn-primary\" onclick=\"viewServers('" . $Project->id . "')\" title=\"" . $LANG["View_Servers"] . "\"><i class=\"fa fa-server fa-sm\"></i></button>\n   <button class=\"btn btn-sm btn-info\" onclick=\"viewSecrets('" . $Project->id . "')\" title=\"" . $LANG["View_Secrets"] . "\"><i class=\"fa fa-key fa-sm\"></i></button>\n   <button class=\"btn btn-sm btn-danger\" onclick=\"deleteAPI('" . $Project->id . "')\" title=\"" . $LANG["Delete_Project"] . "\"><i class=\"fa fa-trash fa-sm\"></i></button>";
            $output[] = [$Project->projectName, $Project->clientId, decrypt($Project->clientSecret), decrypt($Project->clientAPIUser), decrypt($Project->clientPass), $btn];
        }
        $projects["data"] = !empty($output) ? $output : [];
        echo json_encode($projects);
        exit;
    }
}

?>