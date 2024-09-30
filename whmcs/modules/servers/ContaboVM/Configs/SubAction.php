<?php


if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
if(ob_get_length()) {
    ob_clean();
}
if($Action == "AjaxReboot") {
    $Data = $ContaboVM->InstanceRestart($instanceId);
    $ContaboVM->ContaboVM_Log("ContaboVM Instance Reboot", $params, "{\"instance ID\": \"" . $instanceId . "\"}", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "AjaxPowerOn") {
    $Data = $ContaboVM->InstanceStart($instanceId);
    $ContaboVM->ContaboVM_Log("ContaboVM Instance Start", $params, "{\"instance ID\": \"" . $instanceId . "\"}", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "AjaxPowerOff") {
    $Data = $ContaboVM->InstanceStop($instanceId);
    $ContaboVM->ContaboVM_Log("ContaboVM Instance Stop", $params, "{\"instance ID\": \"" . $instanceId . "\"}", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "AjaxShutDown") {
    $Data = $ContaboVM->InstanceShutdown($instanceId);
    $ContaboVM->ContaboVM_Log("ContaboVM Instance Shutdown", $params, "{\"instance ID\": \"" . $instanceId . "\"}", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "AjaxServerStatus") {
    $status = $single["status"];
    if($status == "running" || $status == "initializing" || $status == "starting") {
        $result["srvstatus"] = "on";
    } else {
        $result["srvstatus"] = "off";
    }
    if($isSnapshot == "on") {
        $result["isSnapshot"] = "on";
    } else {
        $result["isSnapshot"] = "off";
    }
    if($disableOS == "on") {
        $result["disableOS"] = "on";
    } else {
        $result["disableOS"] = "off";
    }
    $ImageDetails = $ContaboVM->getImageDetailsById($single["imageId"]);
    $OSImg = $ContaboVM->ContaboVM_OS_Match($ImageDetails["data"][0]["description"]);
    if(empty($OSImg)) {
        $pngos = "other";
        $osname = $_LANG["Unknown_OS"];
    } else {
        $pngos = $OSImg;
        $osname = $ImageDetails["data"][0]["description"];
    }
    if(file_exists("modules/servers/ContaboVM/assets/img/" . $pngos . ".svg")) {
        $result["osimg"] = $pngos;
        $result["osdes"] = $osname;
    } elseif(file_exists("../modules/servers/ContaboVM/assets/img/" . $pngos . ".svg")) {
        $result["osimg"] = $pngos;
        $result["osdes"] = $osname;
    } else {
        $result["osimg"] = "noneos";
        $result["osdes"] = $_LANG["BackupOS"];
    }
    echo json_encode($result);
    exit;
}
if($Action == "Rescue") {
    ob_clean();
    $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
    $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
    if(empty($passwordid)) {
        $generatedpassword = $ContaboVM->contabo_random_str();
        $passwordresp = $ContaboVM->CreateNewSecret($instanceId, $generatedpassword);
        $ContaboVM->ContaboVM_Log("ContaboVM Create Secret", $params, "{\"name\": \"" . $instanceId . "\", \"password\": \"" . $generatedpassword . "\"}", $passwordresp);
        if($passwordresp["data"][0]["secretId"]) {
            $passwordid = $passwordresp["data"][0]["secretId"];
            $ContaboVM->ContaboVM_Update("tblhosting", ["id" => $params["serviceid"]], ["password" => encrypt($generatedpassword)]);
            $params["model"]->serviceProperties->save(["secretId|Secret ID" => $passwordid]);
        } else {
            return $passwordresp["message"];
        }
    } else {
        $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
    }
    $oldContent = "Change to your Company Name";
    $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/motd";
    $newContent = WHMCS\Database\Capsule::table("tblconfiguration")->where("setting", "CompanyName")->value("value");
    $str = file_get_contents($path);
    $str = str_replace($oldContent, $newContent, $str);
    file_put_contents($path, $str);
    $custom_user_data = $params["customfields"]["user_data"];
    $user_data = $params["configoption7"];
    $user_datas = $params["configoptions"]["userData"];
    if(!empty($custom_user_data)) {
        $userData = $custom_user_data;
    } elseif($user_data != "none") {
        $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/" . $user_data);
    } elseif($user_datas != "none") {
        $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/" . $user_datas);
    } else {
        $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/motd");
    }
    $Data = $ContaboVM->InstanceRescueMode($passwordid, $instanceId, $userData);
    $ContaboVM->ContaboVM_Log("ContaboVM Instance Rescue", $params, "{\"Instance Id\": \"" . $instanceId . "\",  \"Password\": \"" . $passwordid . "\", \"userData\": \"" . $userData . "\" }", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "Rebuild") {
    ob_clean();
    $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
    $passwordid = $_POST["secretId"] ? $_POST["secretId"] : $params["model"]->serviceProperties->get("secretId|Secret ID");
    $defaultUser = $params["configoption8"] ? $params["configoption8"] : "admin";
    if(empty($passwordid)) {
        $generatedpassword = $ContaboVM->contabo_random_str();
        $passwordresp = $ContaboVM->CreateNewSecret($instanceId, $generatedpassword);
        $ContaboVM->ContaboVM_Log("ContaboVM Create Secret", $params, "{\"name\": \"" . $instanceId . "\", \"password\": \"" . $generatedpassword . "\"}", $passwordresp);
        if($passwordresp["data"][0]["secretId"]) {
            $passwordid = $passwordresp["data"][0]["secretId"];
            $ContaboVM->ContaboVM_Update("tblhosting", ["id" => $params["serviceid"]], ["username" => $defaultUser, "password" => encrypt($generatedpassword)]);
            $ContaboVM->ContaboVM_Update("tblservers", ["accesshash" => $instanceId], ["username" => $passwordid]);
        } else {
            return $passwordresp["message"];
        }
    } else {
        $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
    }
    $OS = $_POST["LinuxOS"];
    $oldContent = "Change to your Company Name";
    $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/motd";
    $newContent = WHMCS\Database\Capsule::table("tblconfiguration")->where("setting", "CompanyName")->value("value");
    $str = file_get_contents($path);
    $str = str_replace($oldContent, $newContent, $str);
    file_put_contents($path, $str);
    $custom_user_data = $params["customfields"]["user_data"];
    $user_data = $params["configoption7"];
    $user_datas = $params["configoptions"]["userData"];
    if(!empty($custom_user_data)) {
        $userData = $custom_user_data;
    } elseif($user_data != "none") {
        $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/" . $user_data);
    } elseif($user_datas != "none") {
        $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/" . $user_datas);
    } else {
        $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "../userData/motd");
    }
    $Data = $ContaboVM->ReinstallInstace($instanceId, $OS, $passwordid, $userData, $defaultUser);
    $ContaboVM->ContaboVM_Log("ContaboVM Instance OS Installation", $params, "{\"Instance Id\": \"" . $instanceId . "\", \"Server OS\": \"" . $OS . "\", \"Password\": \"" . $passwordid . "\", \"userData\": \"" . $userData . "\", \"defaultUser\": \"" . $defaultUser . "\" }", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "HostnameUpdate") {
    $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
    $name = $_POST["hostname"];
    $Data = $ContaboVM->UpdateDisplayName($instanceId, $name);
    $ContaboVM->ContaboVM_Update("tblhosting", ["userid" => $params["userid"], "id" => $params["serviceid"]], ["domain" => $name]);
    $ContaboVM->ContaboVM_Log("ContaboVM Display Name Change", $params, "{\"Instance Id\": \"" . $instanceId . "\", \"Hostname\": \"" . $name . "\"}", $Data);
    echo json_encode($Data);
    exit;
}
if($Action == "getPrimaryIPInfo") {
    $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
    $InstanceData = $ContaboVM->ListinstancesById($instanceId);
    $single = $InstanceData["data"][0];
    $output[] = [$single["ipConfig"]["v4"]["ip"] . "/" . $single["ipConfig"]["v4"]["netmaskCidr"], $single["ipConfig"]["v4"]["gateway"], $single["macAddress"], $_LANG["Primary"]];
    $output[] = [$single["ipConfig"]["v6"]["ip"] . "/" . $single["ipConfig"]["v6"]["netmaskCidr"], $single["ipConfig"]["v6"]["gateway"], $single["macAddress"], $_LANG["Primary"]];
    foreach ($single["additionalIps"] as $addonIps) {
        $output[] = [$addonIps["v4"]["ip"] . "/" . $addonIps["v4"]["netmaskCidr"], $addonIps["v4"]["gateway"], $single["macAddress"], $_LANG["Addon"]];
    }
    $jData["data"] = !empty($output) ? $output : [];
    echo json_encode($jData);
    exit;
} elseif($Action == "getOperatingSystems") {
    $disCustomOS = WHMCS\Database\Capsule::table("tbladdonmodules")->where(["setting" => "contabo_customos", "module" => "ContaboVM"])->value("value");
    $ServerOS = $disCustomOS == "on" ? $ContaboVM->ListImagesStandard() : $ContaboVM->ListImages();
    foreach ($ServerOS["data"] as $images) {
        $act = "<a href=\"javascript:RebuildOS('" . $images["imageId"] . "', '" . $images["description"] . "', '" . $params["model"]->serviceProperties->get("instanceId|Instance ID") . "');\" class=\"btn btn-xs btn-sm btn-success d-inline-block\" tabindex=\"0\" data-toggle=\"tooltip\" title=\"" . $_LANG["Rebuild"] . " - " . $images["description"] . "\"><i class=\"fa fa-window-restore fa-sm\"></i></a>";
        $output[] = [ucfirst($images["osType"] . " - " . $images["name"]), ucfirst($images["description"]), $act];
    }
    $jData["data"] = !empty($output) ? $output : [];
    echo json_encode($jData);
    exit;
} elseif($Action == "getOperatingSystem") {
    $disCustomOS = WHMCS\Database\Capsule::table("tbladdonmodules")->where(["setting" => "contabo_customos", "module" => "ContaboVM"])->value("value");
    $ServerOS = $disCustomOS == "on" ? $ContaboVM->ListImagesStandard() : $ContaboVM->ListImages();
    foreach ($ServerOS["data"] as $images) {
        if(preg_match("/Windows/", $images["description"])) {
        } elseif(preg_match("/cPanel/", $images["description"])) {
        } elseif(preg_match("/Plesk/", $images["description"])) {
        } else {
            $act = "<a href=\"javascript:RebuildOS('" . $images["imageId"] . "', '" . $images["description"] . "', '" . $params["model"]->serviceProperties->get("instanceId|Instance ID") . "');\" class=\"btn btn-xs btn-sm btn-success d-inline-block\" tabindex=\"0\" data-toggle=\"tooltip\" title=\"" . $_LANG["Rebuild"] . " - " . $images["description"] . "\"><i class=\"fa fa-window-restore fa-sm\"></i></a>";
            $output[] = [ucfirst($images["osType"] . " - " . $images["name"]), ucfirst($images["description"]), $act];
        }
    }
    $jData["data"] = !empty($output) ? $output : [];
    echo json_encode($jData);
    exit;
} elseif($Action == "getInstancelogs") {
    $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
    $Logs = $ContaboVM->retrieveInstancesAuditsList($instanceId);
    foreach ($Logs["data"] as $log) {
        $output[] = [ucfirst($log["changes"]["new"]["instanceAction"]), date("d-m-Y H:m:s", strtotime($log["timestamp"]))];
    }
    $jData["data"] = !empty($output) ? $output : [];
    echo json_encode($jData);
    exit;
} elseif($Action == "getsnapShots") {
    $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
    $Snaps = $ContaboVM->ListSnapshotsById($instanceId);
    foreach ($Snaps["data"] as $Snap) {
        $act = "\n\t\t<a href=\"javascript:rollbackSnap('" . $instanceId . "', '" . $Snap["snapshotId"] . "');\" class=\"btn btn-sm btn-xs btn-primary d-inline-block\" tabindex=\"0\" data-toggle=\"tooltip\" title=\"" . $_LANG["Rollback"] . " - " . $_LANG["SnapImage"] . "\"><i class=\"fa fa-window-restore fa-xs\"></i></a>\n\t\t<a href=\"javascript:deleteSnap('" . $instanceId . "', '" . $Snap["snapshotId"] . "');\" class=\"btn btn-sm btn-xs btn-danger d-inline-block\" tabindex=\"0\" data-toggle=\"tooltip\" title=\"" . $_LANG["Delete"] . " - " . $_LANG["SnapImage"] . "\"><i class=\"fa fa-trash fa-xs\"></i></a>";
        $output[] = [$Snap["name"], date("d-m-Y H:m:s", strtotime($Snap["createdDate"])), date("d-m-Y H:m:s", strtotime($Snap["autoDeleteDate"])), ucfirst($Snap["imageName"]), $act];
    }
    $jData["data"] = !empty($output) ? $output : [];
    echo json_encode($jData);
    exit;
} else {
    if($Action == "SnapAction") {
        $instanceId = $_POST["instance"];
        $snapaction = $_POST["snapact"];
        if($snapaction == "delete") {
            $snapshotId = $_POST["snapId"];
            $Data = $ContaboVM->DeleteSnapshotsById($instanceId, $snapshotId);
            $ContaboVM->ContaboVM_Log("ContaboVM Snapshot Delete", $params, "{\"Instance Id\": \"" . $instanceId . "\", \"SnapId\": \"" . $snapshotId . "\"}", $Data);
        } elseif($snapaction == "rollback") {
            $snapshotId = $_POST["snapId"];
            $Data = $ContaboVM->RollbackSnapshotsById($instanceId, $snapshotId);
            $ContaboVM->ContaboVM_Log("ContaboVM Snapshot Rollback", $params, "{\"Instance Id\": \"" . $instanceId . "\", \"SnapId\": \"" . $snapshotId . "\"}", $Data);
        } elseif($snapaction == "snapcreate") {
            $snapname = $_POST["snapname"];
            $Data = $ContaboVM->CreateSnapshot($instanceId, $snapname);
            $ContaboVM->ContaboVM_Log("ContaboVM Snapshot Create", $params, "{\"Instance Id\": \"" . $instanceId . "\", \"snapname\": \"" . $snapname . "\"}", $Data);
        }
        echo json_encode($Data);
        exit;
    }
    $result["result"] = "error";
    $result["message"] = "Sub action not found";
    echo json_encode($result);
    exit;
}

?>