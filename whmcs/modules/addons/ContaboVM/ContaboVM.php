<?php
use WHMCS\Database\Capsule;
if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
function ContaboVM_config()
{
    return ["name" => "Contabo Cloud", "version" => "2024.4", "author" => "Your Company", "description" => "Contabo Cloud Automation for WHMCS</a>", "language" => "english", "fields" => ["whmcsmodule_key" => ["FriendlyName" => "Module License", "Type" => "text", "Size" => "40", "Description" => "License Key"], "contabo_customos" => ["FriendlyName" => "Disable Custom OS", "Type" => "yesno", "Description" => "Disable Custom OS to be used for VPS rebuild"], "contabo_autoplans" => ["FriendlyName" => "Automatically Get Plans", "Type" => "yesno", "Description" => "Automatically get available plans from <a href=\"https://api.contabo.com/#tag/Instances/operation/createInstance\" target=\\\"_blank\\\">Contabo Create Instance API page</a>"]]];
}
function ContaboVM_activate()
{
    try {
        if(!Capsule::table("tblservers")->where(["name" => "None", "hostname" => "contabo.cloud.automation", "ipaddress" => "127.0.0.1", "type" => "ContaboVM", "active" => 1])->value("active")) {
            Capsule::table("tblservers")->insert(["name" => "None", "hostname" => "contabo.cloud.automation", "ipaddress" => "127.0.0.1", "type" => "ContaboVM", "active" => 1, "maxaccounts" => 200, "secure" => "on", "noc" => "Contabo"]);
        }
        if(!Capsule::schema()->hasTable("mod_contabo_project")) {
            Capsule::schema()->create("mod_contabo_project", function ($table) {
                $table->increments("id");
                $table->text("projectName");
                $table->text("clientId");
                $table->text("clientSecret");
                $table->text("clientAPIUser");
                $table->text("clientPass");
            });
        }
        if(!Capsule::schema()->hasTable("mod_contabo_server")) {
            Capsule::schema()->create("mod_contabo_server", function ($table) {
                $table->increments("id");
                $table->text("userid");
                $table->text("serviceid");
                $table->text("secreitid");
                $table->text("password");
                $table->text("instanceid");
            });
        }
        if(!Capsule::schema()->hasTable("mod_contabo_config")) {
            Capsule::schema()->create("mod_contabo_config", function ($table) {
                $table->text("setting");
                $table->text("value");
            });
            Capsule::table("mod_contabo_config")->insert([["setting" => "deldb", "value" => ""]]);
        }
    } catch (Exception $ex) {
        logActivity("Contabo Cloud Automation Activation error: " . $ex->getMessage());
    }
    return ["status" => "success", "description" => "Module has been activated successfully. Click configuration to start configuring the Contabo Cloud module options."];
}
function ContaboVM_deactivate()
{
    try {
        $deldb = Capsule::table("mod_contabo_config")->where(["setting" => "deldb"])->first();
        if($deldb->value) {
            Capsule::schema()->dropIfExists("mod_contabo_server");
            Capsule::schema()->dropIfExists("mod_contabo_config");
            Capsule::schema()->dropIfExists("mod_contabo_project");
        }
    } catch (Exception $ex) {
        logActivity("Contabo Cloud Automation Deactivation error: " . $ex->getMessage());
    }
    return ["status" => "success", "description" => "Module has been deactivated successfully."];
}
function ContaboVM_upgrade()
{
    if(!Capsule::schema()->hasTable("mod_contabo_project")) {
        Capsule::schema()->create("mod_contabo_project", function ($table) {
            $table->increments("id");
            $table->text("projectName");
            $table->text("clientId");
            $table->text("clientSecret");
            $table->text("clientAPIUser");
            $table->text("clientPass");
        });
    }
}
function ContaboVM_output($vars)
{
    $LANG = $vars["_lang"];
    $modulelink = $vars["modulelink"];
    $version = $vars["version"];
    $HCloudLicense = new WHMCS\Module\Server\ContaboVM\ContaboVM("0");
    if($vars["whmcsmodule_key"]) {
        $vars["license"] = $HCloudLicense->Get_ContaboVMLicenseCheck();
    }
    switch ($vars["license"]["results"]["status"]) {
        case "Active":
            if($_REQUEST["ltype"] == "license") {
                $ltype = " class=\"active\"";
            } elseif($_REQUEST["secrets"] == "secrets") {
                $stype = " class=\"active\"";
            } elseif($_REQUEST["views"] == "vps") {
                $vtype = " class=\"active\"";
            } else {
                $home = " class=\"active\"";
            }
            if($_REQUEST["ltype"]) {
                include "app/header.php";
                include "app/contabo.php";
            } elseif($_REQUEST["secrets"]) {
                include "app/header.php";
                include "app/secrets.php";
            } elseif($_REQUEST["subaction"]) {
                if(ob_get_length()) {
                    ob_clean();
                }
                include "core/ProJectAction.php";
            } elseif($_REQUEST["views"]) {
                include "app/header.php";
                include "app/views.php";
            } else {
                include "app/header.php";
                include "app/main.php";
            }
            break;
        default:
            if($vars["license"]["results"]["status"] == "Invalid") {
                echo "<div class=\"errorbox\">The exact error is: " . $vars["license"]["results"]["message"] . ".</div>";
            } else {
                echo "<div class=\"errorbox\">Don't forget your license key</div>";
            }
            include "app/footer.php";
    }
}

?>