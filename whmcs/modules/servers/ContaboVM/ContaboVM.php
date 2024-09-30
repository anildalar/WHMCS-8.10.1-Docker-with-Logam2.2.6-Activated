<?php
use WHMCS\Database\Capsule;

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
function ContaboVM_MetaData()
{
    return ["DisplayName" => "Contabo Cloud", "APIVersion" => "1", "RequiresServer" => true];
}
function ContaboVM_TestConnection($params)
{
    try {
        $arrayAccessHash = explode("_", $params["serveraccesshash"]);
        list($ServerID, $apiKeyId) = $arrayAccessHash;
        $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($apiKeyId);
        $single = $ContaboVM->ListinstancesById($ServerID);
        logModuleCall("ContaboVM", "ContaboVM Test Connect", "{\"instanceId\": \"" . $ServerID . "\"}", $single);
        $success = $single["data"][0]["instanceId"] == $ServerID ? true : ($errorMsg = "Instance Id: " . $ServerID . " Not Found");
    } catch (Exception $e) {
        $success = false;
        $errorMsg = $e->getMessage();
    }
    return ["success" => $success, "error" => $errorMsg];
}
function ContaboVM_ConfigOptions()
{
    $_LANG = WHMCS\Module\Server\ContaboVM\Helper::getLang();
    $id = App::getFromRequest("id");
    $product = WHMCS\Product\Product::find(App::getFromRequest("id"));
    $idprodname = Capsule::table("tblproducts")->where("id", $id)->value("name");
    $addconfigrablegroupname = "ContaboVM-" . $idprodname . "-Product Id-" . $id;
    $configurableoptionlinkresult = Capsule::table("tblproductconfiggroups")->where("name", $addconfigrablegroupname)->value("id");
    $ProjectIDS = [];
    foreach (Capsule::table("mod_contabo_project")->get() as $CloudProject) {
        $ProjectIDS[$CloudProject->id] = $CloudProject->projectName;
    }
    $projectId = $product->moduleConfigOption9 ? $product->moduleConfigOption9 : $ProjectID[0]->id;
    $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($projectId);
    $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "packages";
    $hideName = [".", "..", ".DS_Store"];
    $disCustomOS = Capsule::table("tbladdonmodules")->where(["setting" => "contabo_autoplans", "module" => "ContaboVM"])->value("value");
    if($disCustomOS == "on") {
        $ch = curl_init();
        $url = "https://api.contabo.com/";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if(curl_errno($ch)) {
            logActivity("Contabo WHMCS Module - Plan Curl Error" . curl_error($ch));
            exit;
        }
        curl_close($ch);
        if($response === false) {
            logActivity("Contabo WHMCS Module - Failed to retrieve data from the URL.");
            exit;
        }
        $classToFind = "sc-iKOmoZ sc-cCzLxZ WVNwY VEBGS";
        $pattern = "/<div[^>]*class=\"" . preg_quote($classToFind) . "\".*?>(.*?)<\\/div>/si";
        if(preg_match_all($pattern, $response, $matches)) {
            foreach ($matches[1] as $elementContent) {
                if(strpos($elementContent, "Create a new instance for your account with the provided parameters") !== false) {
                    $productIdPattern = "/<tr><td>(V\\d+)<\\/td>/";
                    $productPattern = "/<tr><td>V\\d+<\\/td><td>(.*?)<\\/td>/";
                    $diskSizePattern = "/<tr><td>V\\d+<\\/td><td>.*?<\\/td><td>(.*?)<\\/td>/";
                    preg_match_all($productIdPattern, $elementContent, $productIdMatches);
                    preg_match_all($productPattern, $elementContent, $productMatches);
                    preg_match_all($diskSizePattern, $elementContent, $diskSizeMatches);
                    $data = [];
                    if(isset($productIdMatches[1]) && isset($productMatches[1]) && isset($diskSizeMatches[1])) {
                        $productIdArray = $productIdMatches[1];
                        $productArray = $productMatches[1];
                        $diskSizeArray = $diskSizeMatches[1];
                        for ($i = 0; $i < count($productIdArray); $i++) {
                            $data[] = ["ProductId" => $productIdArray[$i], "Product" => $productArray[$i], "Disk Size" => $diskSizeArray[$i]];
                        }
                    }
                    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
                }
            }
            $dataArray = json_decode($jsonData, true);
            $ServerType = [];
            $ServerType["custom"] = "Custom Plans (You need to define disksize in custom fields read the document for more Information)";
            foreach ($dataArray as $ServerTypeAll) {
                $ServerType[$ServerTypeAll["ProductId"]] = $ServerTypeAll["ProductId"] . " (" . $_LANG["Product"] . ":" . $ServerTypeAll["Product"] . "/" . $_LANG["diskSize"] . ":" . $ServerTypeAll["Disk Size"] . ")";
            }
        } else {
            logActivity("Contabo WHMCS Module - Elements class not found in the loaded content.");
            if(file_exists($dir . "/plans.json")) {
                $filename = $dir . "/plans.json";
                $data = file_get_contents($filename);
                $ServerTypeGetAll = json_decode($data, true);
            } else {
                logActivity("Contabo WHMCS Module - JSON Plan file missing");
            }
            $ServerType = [];
            $ServerType["custom"] = "Custom Plans (You need to define disksize in custom fields read the document for more Information)";
            foreach ($ServerTypeGetAll["plans"] as $ServerTypeAll) {
                $ServerType[$ServerTypeAll["ProductId"]] = $ServerTypeAll["ProductId"] . " (" . $_LANG["Product"] . ":" . $ServerTypeAll["Product"] . "/" . $_LANG["diskSize"] . ":" . $ServerTypeAll["Disk Size"] . ")";
            }
        }
    } else {
        if(file_exists($dir . "/plans.json")) {
            $filename = $dir . "/plans.json";
            $data = file_get_contents($filename);
            $ServerTypeGetAll = json_decode($data, true);
        } else {
            logActivity("Contabo WHMCS Module - JSON Plan file missing");
        }
        $ServerType = [];
        $ServerType["custom"] = "Custom Plans";
        foreach ($ServerTypeGetAll["plans"] as $ServerTypeAll) {
            $ServerType[$ServerTypeAll["ProductId"]] = $ServerTypeAll["ProductId"] . " (" . $_LANG["Product"] . ":" . $ServerTypeAll["Product"] . "/" . $_LANG["diskSize"] . ":" . $ServerTypeAll["Disk Size"] . ")";
        }
    }
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
    $userDatadir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "userData";
    $userDatafiles = scandir($userDatadir);
    $userData = [];
    foreach ($userDatafiles as $userDatafilename) {
        if(!in_array($userDatafilename, $hideName)) {
            $userData[$userDatafilename] = ucfirst($userDatafilename);
        }
    }
    $oldContent = "Change to your Company Name";
    $path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "userData/motd";
    $newContent = Capsule::table("tblconfiguration")->where("setting", "CompanyName")->value("value");
    $str = file_get_contents($path);
    $str = str_replace($oldContent, $newContent, $str);
    file_put_contents($path, $str);
    if($configurableoptionlinkresult) {
    } else {
        $ConfigOptDescriptionBtn = "<button type=\"button\" class=\"btn btn-primary\" id=\"createoption\"><i id=\"configspin\" class=\"fa fa-cog\"></i> " . $_LANG["ConfigOptions"]["ConfigOptCreate"] . "</button>\n          <script>\n          \$(\"#createoption\").click(function(){\n              var prodId = " . $id . ";\n              var projId = " . $projectId . ";\n              if(prodId){\n                jQuery(\"#configspin\").addClass(\"fa-spinner fa-spin\");\n                jQuery(\"#createoption\").attr(\"disabled\",\"disabled\");\n                WHMCS.http.jqClient.jsonPost({\n                  url: \"../modules/servers/ContaboVM/getAjax.php\",\n                  data: { subaction:\"createconfig\", productid:prodId, projId:projId },\n                  success: function(data){\n                    jQuery.growl.notice(\n                        {\n                            title: '',\n                            message: '" . $_LANG["ConfigOptionSuccess"] . "'\n                        }\n                    );\n                    jQuery(\"#configspin\").removeClass(\"fa-spinner fa-spin\");\n                    jQuery(\"#configspin\").addClass(\"fa-cog\");\n                  //  jQuery(\"#createoption\").removeAttr(\"disabled\");\n                  jQuery(\"#createoption\").attr(\"disabled\",\"disabled\");\n                  }\n                   });\n              };\n        });\n          </script>\n\n          ";
    }
    $product = WHMCS\Product\Product::find(App::getFromRequest("id"));
    if($product->moduleConfigOption1 == "custom") {
        $CustomFieldID = Capsule::table("tblcustomfields")->where("fieldname", "productId|Storage Type")->where("relid", App::getFromRequest("id"))->value("relid");
        if(empty($CustomFieldID)) {
            Capsule::table("tblcustomfields")->insert(["type" => "product", "relid" => App::getFromRequest("id"), "fieldname" => "productId|Storage Type", "fieldtype" => "dropdown", "description" => $_LANG["diskType"], "required" => "on", "showorder" => "on", "sortorder" => "on"]);
        }
    }
    $fieldsToInsert = [["fieldname" => "instanceId|Instance ID"], ["fieldname" => "projectId|Project ID"], ["fieldname" => "secretId|Secret ID"]];
    foreach ($fieldsToInsert as $fieldData) {
        $fieldName = $fieldData["fieldname"];
        $relid = App::getFromRequest("id");
        if(!Capsule::table("tblcustomfields")->where("fieldname", $fieldName)->where("relid", $relid)->value("relid")) {
            Capsule::table("tblcustomfields")->insert(["type" => "product", "relid" => $relid, "fieldname" => $fieldName, "fieldtype" => "text", "adminonly" => "on"]);
        }
    }
    $userDrop = ["admin" => $_LANG["linwinadm"], "root" => $_LANG["linuxroot"], "administrator" => $_LANG["winadm"]];
    return [$_LANG["VMPlanName"] => ["Type" => "dropdown", "Options" => $ServerType, "Description" => "<br />" . $_LANG["ConfigOptions"]["Plan"] . ", for Custom Plans (You need to define disksize in custom fields read the document for more Information)"], $_LANG["server_location"] => ["Type" => "dropdown", "Options" => $Location, "Description" => "<br />" . $_LANG["ConfigOptions"]["Location"]], $_LANG["VMHostName"] => ["Type" => "text", "size" => "20", "Description" => "<br />" . $_LANG["ConfigOptions"]["VMName"]], $_LANG["OS_Installation"] => ["Type" => "yesno", "Description" => $_LANG["ConfigOptions"]["OS"]], $_LANG["SnapImage"] => ["Type" => "yesno", "Description" => $_LANG["ConfigOptions"]["Snap"]], $_LANG["paidOs"] => ["Type" => "yesno", "Description" => $_LANG["ConfigOptions"]["paidOs"]], $_LANG["Script"] => ["Type" => "dropdown", "Options" => $userData, "Description" => $_LANG["InitDesc"]], $_LANG["DefaultUser"] => ["Type" => "dropdown", "Options" => $userDrop, "Description" => $_LANG["DefaultUserDesc"]], $_LANG["VMProjectID"] => ["Type" => "dropdown", "Options" => $ProjectIDS, "Description" => "<br />" . $_LANG["ConfigOptionsProjectID"]], $_LANG["ConfigOpt"] => ["Description" => $ConfigOptDescriptionBtn]];
}
function ContaboVM_CreateAccount($params)
{
    if($params["status"] != "Pending" && $params["status"] != "Terminated") {
        return "Cannot create service, Product status need to be Pending or Terminated";
    }
    try {
        ini_set("max_execution_time", 600);
        set_time_limit(600);
        $_LANG = WHMCS\Module\Server\ContaboVM\Helper::getLang();
        $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($params["configoption9"]);
        $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
        $region = $params["configoptions"]["location"] ? $params["configoptions"]["location"] : $params["configoption2"];
        $license = $params["configoptions"]["license"] == "none" ? "" : $params["configoptions"]["license"];
        $imageId = $params["configoptions"]["vmOSimage"];
        $productId = $params["configoption1"] == "custom" ? $params["model"]->serviceProperties->get("productId") : $params["configoption1"];
        if(empty($productId)) {
            return $_LANG["ConfProdfirst"];
        }
        $displayName = $params["configoption3"] ? $params["configoption3"] . "-" . $region . "-" . $params["serviceid"] : $params["domain"];
        if(empty($passwordid)) {
            $secretname = $params["configoption3"] ? $params["configoption3"] . "-" . $region . "-" . $params["serviceid"] : $params["serviceid"] . "-" . $region . "-" . $params["serviceid"];
            $findSecret = $ContaboVM->ListSecretByName($secretname);
            if($findSecret["data"][0]["secretId"]) {
                $passwordid = $findSecret["data"][0]["secretId"];
                $generatedpassword = $ContaboVM->GetSecretId($passwordid)["data"][0]["value"];
            } else {
                $generatedpassword = $ContaboVM->isStrongPassword($params["password"]) ? $params["password"] : $ContaboVM->contabo_random_str();
                $passwordresp = $ContaboVM->CreateNewSecret($secretname, $generatedpassword);
                $ContaboVM->ContaboVM_Log("ContaboVM Create Secret", $params, "{\"name\": \"" . $secretname . "\", \"password\": \"" . $generatedpassword . "\"}", $passwordresp);
                if($passwordresp["data"][0]["secretId"]) {
                    $passwordid = $passwordresp["data"][0]["secretId"];
                    $ContaboVM->ContaboVM_Update("tblhosting", ["id" => $params["serviceid"]], ["username" => "admin", "password" => encrypt($generatedpassword)]);
                } else {
                    return $passwordresp["message"];
                }
            }
        } else {
            $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
        }
        switch ($params["model"]->billingcycle) {
            case "Free Account":
            case "One Time":
            case "Monthly":
                $duration = 1;
                break;
            case "Quarterly":
                $duration = 3;
                break;
            case "Semi-Annually":
                $duration = 6;
                break;
            case "Annually":
            case "Biennially":
            case "Triennially":
                $duration = 12;
                break;
            default:
                $duration = 1;
                $custom_user_data = $params["customfields"]["user_data"];
                $user_data = $params["configoption7"];
                $user_datas = $params["configoptions"]["userData"];
                if(!empty($custom_user_data)) {
                    $userData = $custom_user_data;
                } elseif($user_data != "none") {
                    $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "userData/" . $user_data);
                } elseif($user_datas != "none") {
                    $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "userData/" . $user_datas);
                } else {
                    $userData = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . "userData/motd");
                }
                $defaultUser = $params["configoption8"] ? $params["configoption8"] : "admin";
                $vmCreate = $ContaboVM->CreateNewInstance($imageId, $productId, $region, $displayName, $passwordid, $duration, $userData, $defaultUser, $license);
                $ContaboVM->ContaboVM_Log("ContaboVM VM Create", $params, "{\"imageId\": \"" . $imageId . "\", \"productId\": \"" . $productId . "\", \"region\": \"" . $region . "\", \"displayName\": \"" . $displayName . "\", \"rootPassword\": \"" . $passwordid . "\", \"duration\": \"" . $duration . "\", \"license\": \"" . $license . "\" , \"userData\": \"" . $userData . "\", \"defaultUser\": \"" . $defaultUser . "\"}", $vmCreate);
                $instanceStatus = $vmCreate["data"][0]["status"];
                if($instanceStatus == "provisioning" || $instanceStatus == "order_processing") {
                    sleep(20);
                }
                $InstanceData = $ContaboVM->ListinstancesById($vmCreate["data"][0]["instanceId"]);
                if($InstanceData["data"][0]["ipConfig"]["v4"]["ip"]) {
                    $Exists = $ContaboVM->ContaboVM_Select("tblservers", "accesshash", ["accesshash" => $InstanceData["data"][0]["instanceId"], "type" => "ContaboVM"]);
                    if($Exists[0]->accesshash == $InstanceData["data"][0]["instanceId"]) {
                    } else {
                        $ContaboVM->ContaboVM_Insert("tblservers", ["name" => $InstanceData["data"][0]["name"] . " - " . $InstanceData["data"][0]["displayName"] . " - " . $InstanceData["data"][0]["region"], "hostname" => $InstanceData["data"][0]["name"] . " - " . $InstanceData["data"][0]["displayName"], "ipaddress" => $InstanceData["data"][0]["ipConfig"]["v4"]["ip"], "type" => "ContaboVM", "noc" => "Contabo - Region:" . $InstanceData["data"][0]["region"], "accesshash" => $InstanceData["data"][0]["instanceId"] . "_" . $params["configoption9"], "username" => $passwordid, "active" => 0, "maxaccounts" => 1]);
                        $Exist = $ContaboVM->ContaboVM_Select("tblservers", ["accesshash", "id"], ["accesshash" => $InstanceData["data"][0]["instanceId"] . "_" . $params["configoption9"], "type" => "ContaboVM"]);
                        if($Exist[0]->accesshash == $InstanceData["data"][0]["instanceId"]) {
                            $ContaboVM->ContaboVM_Update("tblhosting", ["id" => $params["serviceid"]], ["dedicatedip" => $InstanceData["data"][0]["ipConfig"]["v4"]["ip"], "server" => $Exist[0]->id]);
                        }
                    }
                    if($passwordid != "") {
                        Capsule::table("tblhosting")->where("id", $params["serviceid"])->update(["username" => $defaultUser, "password" => encrypt($generatedpassword)]);
                    }
                    return "success";
                }
                return $vmCreate["message"][0];
        }
    } catch (Exception $e) {
        logModuleCall("ContaboVM", "ContaboVM_CreateAccount", $params, $e->getMessage(), $e->getTraceAsString());
        return $e->getMessage();
    }
}
function ContaboVM_TerminateAccount($params)
{
    if($params["status"] != "Active" && $params["status"] != "Suspended") {
        return "Cannot terminate service";
    }
    try {
        $manager = new WHMCS\Module\Server\ContaboVM\vmManagerAuto($params);
        return $manager->terminate();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
function ContaboVM_SuspendAccount($params)
{
    if($params["status"] == "Terminated") {
        return "Cannot suspend terminated service";
    }
    try {
        $manager = new WHMCS\Module\Server\ContaboVM\vmManagerAuto($params);
        return $manager->suspend();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
function ContaboVM_UnsuspendAccount($params)
{
    if($params["status"] == "Terminated") {
        return "Cannot unsuspend terminated service";
    }
    try {
        $manager = new WHMCS\Module\Server\ContaboVM\vmManagerAuto($params);
        return $manager->unsuspend();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
function ContaboVM_AdminServicesTabFields($params)
{
    try {
        if($params["status"] != "Active") {
            return [];
        }
        WHMCS\Module\Server\ContaboVM\Helper::migrate($params);
        $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
        $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
        $apiKeyId = $params["model"]->serviceProperties->get("projectId|Project ID");
        $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($apiKeyId);
        $_LANG = WHMCS\Module\Server\ContaboVM\Helper::getLang();
        $InstanceData = $ContaboVM->ListinstancesById($instanceId);
        $single = $InstanceData["data"][0];
        $disableOS = $params["configoption4"];
        $isSnapshot = $params["configoption5"];
        $serviceid = $params["serviceid"];
        $userid = $params["userid"];
        if($_REQUEST["subaction"]) {
            $Action = $_REQUEST["subaction"];
            include "Configs/SubAction.php";
        } else {
            include "Configs/Admin.php";
            return ["" . $_LANG["Server_Info"] . "" => $ContaboAdmin];
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
function ContaboVM_ClientArea($params)
{
    try {
        WHMCS\Module\Server\ContaboVM\Helper::clientAreaPrimarySidebarHookContabo($params);
        WHMCS\Module\Server\ContaboVM\Helper::migrate($params);
        $passwordid = $params["model"]->serviceProperties->get("secretId|Secret ID");
        $instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
        $apiKeyId = $params["model"]->serviceProperties->get("projectId|Project ID");
        $ContaboVM = new WHMCS\Module\Server\ContaboVM\ContaboVM($apiKeyId);
        $_LANG = WHMCS\Module\Server\ContaboVM\Helper::getLang();
        $langVarJson = json_encode($_LANG);
        $InstanceData = $ContaboVM->ListinstancesById($instanceId);
        $single = $InstanceData["data"][0];
        $disableOS = $params["configoption4"];
        $isSnapshot = $params["configoption5"];
        $serviceid = $params["serviceid"];
        $userid = $params["userid"];
        $ispaidOs = $params["configoption6"];
        if($_REQUEST["subaction"]) {
            $Action = $_REQUEST["subaction"];
            include "Configs/SubAction.php";
        } else {
            $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . "packages";
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
                }
            } 
            $generatedpassword = $ContaboVM->GetSecretId($passwordid)["data"][0]["value"];
            $ServerInfo = [];
            $ServerInfo["cancelDate"] = date("Y-m-d", strtotime($single["cancelDate"]));
            $ServerInfo["createdDate"] = date("Y-m-d", strtotime($single["createdDate"]));
            $ServerInfo["productType"] = $single["productType"];
            $ServerInfo["cores"] = $single["cpuCores"];
            $ServerInfo["memory"] = $ContaboVM->formatSizeMBtoGB($single["ramMb"]);
            $ServerInfo["disk"] = $ContaboVM->formatSizeMBtoGB($single["diskMb"]);
            $ServerInfo["osType"] = $single["osType"];
            $ServerInfo["region"] = $region;
            $ServerInfo["displayName"] = $single["displayName"];
            $ServerInfo["Status"] = ucfirst($single["status"]);
            $ServerInfo["name"] = $single["name"];
            $ServerInfo["ServerPass"] = $generatedpassword ?? $params["password"];
            $ServerInfo["ServerUser"] = $single["defaultUser"] ?? $params["username"];
            $ServerInfo["ServerIP"] = $single["ipConfig"]["v4"]["ip"];
            $tpl = Capsule::table("tblconfiguration")->where("setting", "=", "Template")->value("value");
            if($tpl == "lagom2") {
                $ctpl = "templates/lagom2.tpl";
            } elseif($tpl == "six") {
                $ctpl = "templates/six.tpl";
            } else {
                $ctpl = "templates/overview.tpl";
            }
            return ["tabOverviewReplacementTemplate" => $ctpl, "templateVariables" => ["ServerInfo" => $ServerInfo, "_LANG" => $_LANG, "disableOS" => $disableOS, "instanceId" => $instanceId, "langVarJson" => $langVarJson, "isSnapshot" => $isSnapshot, "ispaidOs" => $ispaidOs]];
        }
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

?>