<?php
use WHMCS\Database\Capsule;

define("CLIENTAREA", true);
require_once __DIR__ . "/../../../init.php";
if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
$Action = $_POST["subaction"];
$pId = $_POST["productid"];
$projId = $_POST["projId"];
$ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($projId);
$_LANG = WHMCS\Module\Server\ContaboVM\Helper::getLang();
if($Action == "createconfig") {
    $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "packages";
    $hideName = [".", "..", ".DS_Store"];
    $OperatingSystem = [];
    $disCustomOS = WHMCS\Database\Capsule::table("tbladdonmodules")->where(["setting" => "contabo_customos", "module" => "ContaboVM"])->value("value");
    $ImagesGetAll = $disCustomOS == "on" ? $ContaboVM->ListImagesStandard() : $ContaboVM->ListImages();
    foreach ($ImagesGetAll["data"] as $Images) {
        $OperatingSystem[$Images["imageId"]] = $Images["description"] . " (" . $Images["osType"] . ")";
    }
    $ContaboVM->generateconfigoption("vmOSimage", $_LANG["OS"], $pId, $OperatingSystem, "");
    if(file_exists($dir . "/location.json")) {
        $filename = $dir . "/location.json";
        $data = file_get_contents($filename);
        $LocationGetAll = json_decode($data, true);
    } else {
        logActivity("Contabo WHMCS Module - JSON Location file missing");
    }
    $Location = [];
    foreach ($LocationGetAll["regions"] as $LocationAll) {
        $Location[$LocationAll["region"]] = $LocationAll["name"];
    }
    $ContaboVM->generateconfigoption("location", $_LANG["server_location"], $pId, $Location, "");
    if(file_exists($dir . "/addons.json")) {
        $filename = $dir . "/addons.json";
        $data = file_get_contents($filename);
        $licenses = json_decode($data, true);
    } else {
        logActivity("Contabo WHMCS Module - JSON Addons file missing");
    }
    $license = [];
    foreach ($licenses["addons"] as $license) {
        $licname[$license["name"]] = $license["name"];
    }
    $ContaboVM->generateconfigoption("license", $_LANG["license"], $pId, $licname, "");
    $result["status"] = "success";
    echo json_encode($result);
    exit;
} else {
    $result["status"] = "error";
    $result["message"] = "Sub action not found";
    echo json_encode($result);
    exit;
}

?>