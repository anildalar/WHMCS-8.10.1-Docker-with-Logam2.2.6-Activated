<?php

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
        $this->setCurlOption(CURLOPT_URL, $url);
        $this->setCurlOption(CURLOPT_HTTPGET, true);
        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, "GET");
        return $this->executeRequest();
    }
    protected function post($url, $data = NULL)
    {
        $this->setCurlOption(CURLOPT_URL, $url);
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
        $this->setCurlOption(CURLOPT_URL, $url);
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
        $this->setCurlOption(CURLOPT_URL, $url);
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
        $this->setCurlOption(CURLOPT_URL, $url);
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
class ContaboVMAuto extends ContaboVMClient
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
    public function InstanceStart($instanceId)
    {
        $url = $this->baseUrl . "/compute/instances/" . $instanceId . "/actions/start";
        return $this->post($url);
    }
    public function InstanceShutdown($instanceId)
    {
        $url = $this->baseUrl . "/compute/instances/" . $instanceId . "/actions/shutdown";
        return $this->post($url);
    }
    public function CancelinstanceById($instanceId)
    {
        $url = $this->baseUrl . "/compute/instances/" . $instanceId . "/cancel";
        return $this->post($url);
    }
    public function ContaboVM_Log($action, $params, $request, $response)
    {
        if($_SERVER["HTTP_CLIENT_IP"]) {
            $ipaddress = $_SERVER["HTTP_CLIENT_IP"];
        } elseif($_SERVER["HTTP_X_FORWARDED_FOR"]) {
            $ipaddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif($_SERVER["HTTP_X_FORWARDED"]) {
            $ipaddress = $_SERVER["HTTP_X_FORWARDED"];
        } elseif($_SERVER["HTTP_FORWARDED_FOR"]) {
            $ipaddress = $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif($_SERVER["HTTP_FORWARDED"]) {
            $ipaddress = $_SERVER["HTTP_FORWARDED"];
        } elseif($_SERVER["REMOTE_ADDR"]) {
            $ipaddress = $_SERVER["REMOTE_ADDR"];
        } else {
            $ipaddress = "UNKNOWN";
        }
        logModuleCall("ContaboVMAuto", $action, "service id:" . $params["serviceid"] . " From: " . $ipaddress . " Request Data: " . $request, $response, $response, "UNKNOWN");
    }
}

?>