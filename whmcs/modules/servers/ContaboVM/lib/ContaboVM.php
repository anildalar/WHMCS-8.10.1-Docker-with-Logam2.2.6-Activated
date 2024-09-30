<?php
//place this file in modules/servers/contabovm/lib
namespace WHMCS\Module\Server\ContaboVM;
use WHMCS\Database\Capsule;

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
class ContaboVMClient
{
    private $curl;
    private $curlOptions = [];
    protected $httpHeader = [];
    protected $baseUrl;
    protected $ClientId;
    protected $ClientSecret;
    protected $ClientUser;
    protected $ClientPassword;
    public function __construct($url, $verbose = false)
    {
        $this->baseUrl = rtrim($url, "/");
        $this->curl = curl_init();
        $this->setCurlOption(CURLOPT_RETURNTRANSFER, true);
        $this->setCurlOption(CURLOPT_VERBOSE, $verbose);
    }
    protected function setCurlOption($option, $value)
    {
        $this->curlOptions[$option] = $value;
    }
    protected function getCurlOption($option)
    {
        return isset($this->curlOptions[$option]) ? $this->curlOptions[$option] : NULL;
    }
    public function setHttpHeader($name, $value)
    {
        $this->httpHeader[] = $name . ": " . $value;
    }
    protected function get($url)
    {
        $this->setCurlOption(CURLOPT_URL, $this->baseUrl . $url);
        $this->setCurlOption(CURLOPT_HTTPGET, true);
        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, "GET");
        return $this->executeRequest();
    }
    protected function post($url, $data = NULL)
    {
        $this->setCurlOption(CURLOPT_URL, $this->baseUrl . $url);
        $this->setCurlOption(CURLOPT_POST, true);
        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, "POST");
        if($data) {
            $this->setHttpHeader("Content-Type", "application/json");
            $this->setCurlOption(CURLOPT_POSTFIELDS, json_encode($data));
        }
        return $this->executeRequest();
    }
    protected function put($url, $data = NULL)
    {
        $this->setCurlOption(CURLOPT_URL, $this->baseUrl . $url);
        $this->setCurlOption(CURLOPT_HTTPGET, true);
        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, "PUT");
        if($data) {
            $this->setHttpHeader("Content-Type", "application/json");
            $this->setCurlOption(CURLOPT_POSTFIELDS, json_encode($data));
        }
        return $this->executeRequest();
    }
    protected function patch($url, $data = NULL)
    {
        $this->setCurlOption(CURLOPT_URL, $this->baseUrl . $url);
        $this->setCurlOption(CURLOPT_HTTPGET, true);
        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, "PATCH");
        $this->setHttpHeader("Content-Type", "application/json");
        if($data) {
            $this->setCurlOption(CURLOPT_POSTFIELDS, json_encode($data));
        }
        return $this->executeRequest();
    }
    protected function delete($url, $data = NULL)
    {
        $this->setCurlOption(CURLOPT_URL, $this->baseUrl . $url);
        $this->setCurlOption(CURLOPT_HTTPGET, true);
        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, "DELETE");
        if($data) {
            $this->setHttpHeader("Content-Type", "application/json");
            $this->setCurlOption(CURLOPT_POSTFIELDS, json_encode($data));
        }
        return $this->executeRequest();
    }
    protected function executeRequest()
    {
        $this->setCurlOption(CURLOPT_HTTPHEADER, array_values($this->httpHeader));
        curl_setopt_array($this->curl, $this->curlOptions);
        $response = curl_exec($this->curl);
        $response_code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        return ["response_code" => $response_code, "response" => $response];
    }
}
class ContaboVM extends ContaboVMClient
{
    public function __construct($projectId)
    {
        if($projectId != "0") {
            $projectDetails = Capsule::table("mod_contabo_project")->where(["id" => $projectId])->first();
            $this->ClientId = $projectDetails->clientId;
            $this->ClientSecret = decrypt($projectDetails->clientSecret);
            $this->ClientUser = decrypt($projectDetails->clientAPIUser);
            $this->ClientPassword = decrypt($projectDetails->clientPass);
        }
        $url = "https://api.contabo.com/v1/";
        parent::__construct($url);
        $this->setHttpHeader("Authorization", "Bearer " . $this->call_auth_token());
        $this->setHttpHeader("X-Request-Id", $this->guidv4());
        $this->setHttpHeader("X-Trace-Id", rand(10000, 99999));
    }
    public function call_auth_token()
    {
        $data = ["client_id" => $this->ClientId, "client_secret" => $this->ClientSecret, "username" => $this->ClientUser, "password" => $this->ClientPassword, "grant_type" => "password"];
        $call = curl_init();
        curl_setopt($call, CURLOPT_URL, "https://auth.contabo.com/auth/realms/contabo/protocol/openid-connect/token");
        curl_setopt($call, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($call, CURLOPT_POST, true);
        curl_setopt($call, CURLOPT_POSTFIELDS, http_build_query($data));
        $headers = [];
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        curl_setopt($call, CURLOPT_HTTPHEADER, $headers);
        $AuthToken = curl_exec($call);
        $Json_Decode_Token = json_decode($AuthToken, true);
        return $Json_Decode_Token["access_token"];
    }
    public function guidv4($data = NULL)
    {
        $data = PHP_MAJOR_VERSION < 7 ? openssl_random_pseudo_bytes(16) : random_bytes(16);
        $data[6] = chr(ord($data[6]) & 15 | 64);
        $data[8] = chr(ord($data[8]) & 63 | 128);
        return vsprintf("%s%s-%s-%s-%s-%s%s%s", str_split(bin2hex($data), 4));
    }
    protected function executeRequest()
    {
        if($this->ContaboVM_LicenseCheck() == "Active") {
            $result = parent::executeRequest();
            if($result["response"] === false) {
                logActivity("Contabo WHMCS Module - not reachable to the provider api");
            }
            if(empty($result["response"])) {
                $response = logActivity("Contabo WHMCS Module - response is empty");
            } else {
                $response = json_decode($result["response"], true);
            }
            if($response === NULL) {
                logActivity("Contabo WHMCS Module - response can not be decoded, please upgrade curl");
            }
            return $response;
        }
        return $this->ContaboVM_LicenseCheck();
    }
    public function ContaboVM_LicenseCheck()
    {
        $status = self::Get_ContaboVMLicenseCheck();
        return $status["results"]["status"];
    }
    public function get_ContaboVMLicenseInfo_config()
    {
        $ContaboVMLicenseInfo_config = [];
        $ContaboVMLicenseInfo_config["LocalKey"] = Capsule::table("tblconfiguration")->where(["setting" => "contabovm_localkey"])->value("value");
        $ContaboVMLicenseInfo_config["RemoteKey"] = Capsule::table("tbladdonmodules")->where(["setting" => "whmcsmodule_key", "module" => "ContaboVM"])->value("value");
        return $ContaboVMLicenseInfo_config;
    }
    public function get_ContaboVM_prekey()
    {
        return ["ContaboCloud-Owned", "ContaboCloud-Yearly"];
    }
    public function Get_ContaboVMLicenseCheck()
    {
            $bizname = Capsule::table('tblconfiguration')->where('setting', 'CompanyName')->value('value');
            $bizemail = Capsule::table('tblconfiguration')->where('setting', 'Email')->value('value');
            $License["results"]["status"]          = "Active";
            $License["results"]["message"]         = "Valid";
            $License['results']['Productname']     = "Contabo Cloud";
            $License['results']['registeredname']  = $bizemail;
            $License['results']['companyname']     = $bizname;

            return $License;
    }

    public function createProductAddon($pid, $addonName, $moduleName, $description)
    {
        $getAddonPackges_linked = Capsule::table("tbladdons")->where("name", "like", $addonName)->first();
        if(empty($getAddonPackges_linked)) {
            $createCustomAddonArr = ["packages" => $pid, "name" => $addonName, "showorder" => 1, "description" => $description, "module" => $moduleName];
            $createAddon = Capsule::table("tbladdons")->insert($createCustomAddonArr);
        } else {
            $packages = $getAddonPackges_linked->packages;
            $packages_array = explode(",", $packages);
            if(!in_array($pid, $packages_array)) {
                array_push($packages_array, $pid);
                $productID_added_packages = implode(",", $packages_array);
                Capsule::table("tbladdons")->where("name", "like", $addonName)->update(["packages" => $productID_added_packages, "showorder" => 1]);
            }
        }
    }
    public function generateconfigoption($optname, $descname, $id, $data, $monthly)
    {
        $prodName = Capsule::table("tblproducts")->where("id", $id)->value("name");
        $addconfigrablegroupname = "ContaboVM-" . $prodName . "-Product Id-" . $id;
        $addconfigurableoptionname = $optname . "|" . $descname;
        $optiontype = "1";
        $qtyminimum = "";
        $qtymaximum = "";
        $configurableoptionresult = Capsule::table("tblproductconfiglinks")->where("pid", $id)->get();
        $configurableoptionlinkresult = Capsule::table("tblproductconfiggroups")->where("name", $addconfigrablegroupname)->value("id");
        if(empty($configurableoptionlinkresult)) {
            $configurablegroupid = Capsule::table("tblproductconfiggroups")->insertGetId(["name" => $addconfigrablegroupname, "description" => $addconfigrablegroupname]);
            Capsule::table("tblproductconfiglinks")->insertGetId(["gid" => $configurablegroupid, "pid" => $id]);
            $configid = Capsule::table("tblproductconfigoptions")->insertGetId(["gid" => $configurablegroupid, "optionname" => $addconfigurableoptionname, "optiontype" => $optiontype, "qtyminimum" => $qtyminimum, "qtymaximum" => $qtymaximum, "order" => "", "hidden" => ""]);
            foreach ($data as $key => $n) {
                $tblpricing_rel_id[] = Capsule::table("tblproductconfigoptionssub")->insertGetId(["configid" => $configid, "optionname" => $key . "|" . $n, "sortorder" => "", "hidden" => ""]);
            }
            $datas = Capsule::table("tblcurrencies")->orderBy("code", "DESC")->get();
            foreach ($datas as $data) {
                $curr_id = $data->id;
                $curr_code = $data->code;
                $currenciesarray[$curr_id] = $curr_code;
            }
            foreach ($tblpricing_rel_id as $tdval) {
                $isOption = Capsule::table("tblproductconfigoptionssub")->where("configid", $configid)->where("id", $tdval)->value("optionname");
                foreach ($currenciesarray as $curr_id => $currency) {
                    if($isOption == "none|none") {
                        Capsule::table("tblpricing")->insert(["type" => "configoptions", "currency" => $curr_id, "relid" => $tdval, "monthly" => ""]);
                    } else {
                        $monthlys = "";
                        Capsule::table("tblpricing")->insert(["type" => "configoptions", "currency" => $curr_id, "relid" => $tdval, "monthly" => $monthlys]);
                    }
                }
            }
        } else {
            $configurablegroupid = Capsule::table("tblproductconfiggroups")->where("name", $addconfigrablegroupname)->value("id");
            $configid = Capsule::table("tblproductconfigoptions")->insertGetId(["gid" => $configurablegroupid, "optionname" => $addconfigurableoptionname, "optiontype" => $optiontype, "qtyminimum" => $qtyminimum, "qtymaximum" => $qtymaximum, "order" => "", "hidden" => ""]);
            foreach ($data as $key => $n) {
                $tblpricing_rel_id[] = Capsule::table("tblproductconfigoptionssub")->insertGetId(["configid" => $configid, "optionname" => $key . "|" . $n, "sortorder" => "", "hidden" => ""]);
            }
            $datas = Capsule::table("tblcurrencies")->orderBy("code", "DESC")->get();
            foreach ($datas as $data) {
                $curr_id = $data->id;
                $curr_code = $data->code;
                $currenciesarray[$curr_id] = $curr_code;
            }
            foreach ($tblpricing_rel_id as $tdval) {
                $isOption = Capsule::table("tblproductconfigoptionssub")->where("configid", $configid)->where("id", $tdval)->value("optionname");
                foreach ($currenciesarray as $curr_id => $currency) {
                    if($isOption == "none|none") {
                        Capsule::table("tblpricing")->insert(["type" => "configoptions", "currency" => $curr_id, "relid" => $tdval, "monthly" => ""]);
                    } else {
                        $monthlys = "";
                        Capsule::table("tblpricing")->insert(["type" => "configoptions", "currency" => $curr_id, "relid" => $tdval, "monthly" => $monthlys]);
                    }
                }
            }
        }
    }
    public function CurrencyConvertAPI($fromCurrency, $toCurrency, $amount)
    {
        $amount_from_db = Capsule::table("tblcurrencies")->where("code", $toCurrency)->get();
        $exhangeRate_whmcs = json_decode($amount_from_db, true)[0]["rate"];
        $convertedAmount = (int) $amount * (int) $exhangeRate_whmcs;
        return ["convertedAmount" => round($convertedAmount, 2)];
    }
    public function Listinstances()
    {
        return $this->get("/compute/instances");
    }
    public function countSecrets()
    {
        return $this->get("/secrets")["_pagination"]["totalElements"];
    }
    public function countInstances()
    {
        return $this->get("/compute/instances")["_pagination"]["totalElements"];
    }
    public function secretGetAll($page, $per_page)
    {
        return $this->get("/secrets?page=" . $page . "&size=" . $per_page);
    }
    public function serverGetAll($page, $per_page)
    {
        return $this->get("/compute/instances?page=" . $page . "&size=" . $per_page);
    }
    public function CreateNewInstance($imageId, $productId, $region, $displayName, $rootPassword, $period, $userData, $defaultUser, $license = NULL)
    {
        if($license) {
            $postData["license"] = $license;
        }
        $postData["imageId"] = $imageId;
        $postData["productId"] = $productId;
        $postData["region"] = $region;
        $postData["displayName"] = $displayName;
        $postData["rootPassword"] = (int) $rootPassword;
        $postData["userData"] = $userData;
        $postData["defaultUser"] = $defaultUser;
        $postData["period"] = $period;
        return $this->post("/compute/instances", $postData);
    }
    public function ChangeInstancePassword($rootPassword, $instanceId)
    {
        $postData["rootPassword"] = (int) $rootPassword;
        return $this->post("/compute/instances/" . $instanceId . "/actions/resetPassword", $postData);
    }
    public function InstanceRescueMode($rootPassword, $instanceId, $userData)
    {
        $postData["rootPassword"] = (int) $rootPassword;
        $postData["userData"] = $userData;
        return $this->post("/compute/instances/" . $instanceId . "/actions/rescue", $postData);
    }
    public function ListinstancesById($instanceId)
    {
        return $this->get("/compute/instances/" . $instanceId);
    }
    public function UpdateDisplayName($instanceId, $displayName)
    {
        return $this->patch("/compute/instances/" . $instanceId, ["displayName" => $displayName]);
    }
    public function ReinstallInstace($instanceId, $imageId, $rootPassword, $userData, $defaultUser)
    {
        return $this->put("/compute/instances/" . $instanceId, ["imageId" => $imageId, "userData" => $userData, "defaultUser" => $defaultUser, "rootPassword" => (int) $rootPassword]);
    }
    public function CancelinstanceById($instanceId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/cancel");
    }
    public function UpgradinginstanceById($instanceId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/upgrade", ["privateNetworking" => ""]);
    }
    public function retrieveInstancesAuditsList($instanceId)
    {
        return $this->get("/compute/instances/actions/audits?instanceId=" . $instanceId . "&size=100");
    }
    public function InstanceStart($instanceId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/actions/start");
    }
    public function InstanceRestart($instanceId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/actions/restart");
    }
    public function InstanceStop($instanceId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/actions/stop");
    }
    public function InstanceShutdown($instanceId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/actions/shutdown");
    }
    public function ListSnapshotsById($instanceId)
    {
        return $this->get("/compute/instances/" . $instanceId . "/snapshots");
    }
    public function CreateSnapshot($instanceId, $name)
    {
        return $this->post("/compute/instances/" . $instanceId . "/snapshots", ["name" => $name . "-" . date("d-m-Y"), "description" => $name . "-" . date("d-m-Y")]);
    }
    public function RetriveSnapshotsById($instanceId, $snapshotId)
    {
        return $this->get("/compute/instances/" . $instanceId . "/snapshots/" . $snapshotId);
    }
    public function UpdateSnapshotById($instanceId, $name, $snapshotId)
    {
        return $this->patch("/compute/instances/" . $instanceId . "/snapshots/" . $snapshotId, ["name" => $name, "description" => $name]);
    }
    public function DeleteSnapshotsById($instanceId, $snapshotId)
    {
        return $this->delete("/compute/instances/" . $instanceId . "/snapshots/" . $snapshotId);
    }
    public function RollbackSnapshotsById($instanceId, $snapshotId)
    {
        return $this->post("/compute/instances/" . $instanceId . "/snapshots/" . $snapshotId . "/rollback");
    }
    public function retrieveSnapshotsAuditsList($instanceId)
    {
        return $this->get("/compute/snapshots/audits?instanceId=" . $instanceId . "&size=100");
    }
    public function ListImages()
    {
        return $this->get("/compute/images?size=100");
    }
    public function ListImagesStandard()
    {
        return $this->get("/compute/images?size=100&standardImage=true");
    }
    public function CreateCustomImage($name, $url, $osType, $version)
    {
        return $this->post("/compute/images", ["name" => $name, "description" => $name, "url" => $url, "osType" => $osType, "version" => $version]);
    }
    public function getImageDetailsById($imageId)
    {
        return $this->get("/compute/images/" . $imageId);
    }
    public function UpdateImageById($imageId, $name)
    {
        return $this->patch("/compute/images/" . $imageId, ["name" => $name, "description" => $name]);
    }
    public function DeleteImageById($imageId)
    {
        return $this->delete("/compute/images/" . $imageId);
    }
    public function getImagestatistics()
    {
        return $this->get("/compute/images/stats");
    }
    public function getImageAuditlist()
    {
        return $this->get("/compute/images/audits?size=10");
    }
    public function ListSecrets()
    {
        return $this->get("/secrets?size=100");
    }
    public function ListSecretByName($name)
    {
        return $this->get("/secrets?name=" . $name);
    }
    public function GetSecretId($secretId)
    {
        return $this->get("/secrets/" . $secretId);
    }
    public function CreateNewSecret($name, $value)
    {
        return $this->post("/secrets", ["type" => "password", "name" => $name, "value" => $value]);
    }
    public function UpdateSecretById($secretId, $name, $value)
    {
        return $this->patch("/secrets/" . $secretId, ["name" => $name, "value" => $value]);
    }
    public function DeleteSecret($secretId)
    {
        return $this->delete("/secrets/" . $secretId);
    }
    public function contabo_random_str()
    {
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $specialChars = "!-_*&\$#@+";
        $password = "";
        $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];
        $password .= $lowercase[random_int(0, strlen($lowercase) - 1)];
        for ($i = 0; $i < 3; $i++) {
            $password .= $numbers[random_int(0, strlen($numbers) - 1)];
        }
        while (strlen($password) < 19) {
            $password .= $uppercase[random_int(0, strlen($uppercase) - 1)];
        }
        return str_shuffle($password);
    }
    public function isStrongPassword($password)
    {
        if(!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[!-_*&\$#@+]/", $password)) {
            return false;
        }
        if(preg_match_all("/[0-9]/", $password) < 3 && (preg_match_all("/[0-9]/", $password) != 1 || preg_match_all("/[!-_*&\$#@+]/", $password) < 2)) {
            return false;
        }
        return true;
    }
    public function ContaboVM_Insert($tblName, $value)
    {
        return Capsule::table($tblName)->insert($value);
    }
    public function ContaboVM_Update($tblName, $where, $value)
    {
        return Capsule::table($tblName)->where($where)->update($value);
    }
    public function ContaboVM_Select($tblName, $select, $where)
    {
        return Capsule::table($tblName)->select($select)->where($where)->get();
    }
    public function ContaboVM_Delete($tblName, $where)
    {
        return Capsule::table($tblName)->where($where)->delete();
    }
    public function ContaboVM_Log($action, $params, $request, $response)
    {
        $ipaddress = $_SERVER["HTTP_CLIENT_IP"] ?? $_SERVER["HTTP_X_FORWARDED_FOR"] ?? $_SERVER["HTTP_X_FORWARDED"] ?? $_SERVER["HTTP_FORWARDED_FOR"] ?? $_SERVER["HTTP_FORWARDED"] ?? $_SERVER["REMOTE_ADDR"] ?? "UNKNOWN";
        logModuleCall("ContaboVM", $action, "service id:" . $params["serviceid"] . " From: " . $ipaddress . " Request Data: " . $request, $response, $response, "UNKNOWN");
    }
    public function formatSizeBytestoTB($bytes)
    {
        return round($bytes / 1024 / 1024 / 1024 / 1024, 2);
    }
    public function formatSizeBytestoMB($bytes)
    {
        return round($bytes / 1024 / 1024, 2);
    }
    public function formatSizeMBtoGB($mb)
    {
        return round($mb / 1024, 2);
    }
    public function formatBytes($bytes)
    {
        $unit = ["B", "KB", "MB", "GB", "TB"];
        $exp = floor(log($bytes, 1024)) | 0;
        return round($bytes / pow(1024, $exp)) . " " . $unit[$exp];
    }
    public function contaboVM_OS_Match($OS)
    {
        $osMapping = ["/CentOS/" => "centos", "/Arch Linux/" => "archlinux", "/Fedora/" => "fedora", "/openSUSE/" => "opensuse", "/Nextcloud/" => "nextcloud", "/LAMP/" => "lamp", "/Debian/" => "debian", "/Ubuntu/" => "ubuntu", "/cPanel/" => "cpanel", "/Plesk/" => "plesk", "/Windows/" => "windows", "/Alma/" => "almalinux", "/Rocky/" => "rockylinux", "/FreeBSD/" => "freebsd"];
        foreach ($osMapping as $pattern => $platform) {
            if(preg_match($pattern, $OS)) {
                return $platform;
            }
        }
        return "other";
    }
}

?>