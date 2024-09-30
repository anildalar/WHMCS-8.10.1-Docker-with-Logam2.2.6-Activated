<?php

namespace WHMCS\Module\Server\ContaboVM;

if(!defined("WHMCS")) {
    exit("This file cannot be accessed directly");
}
class vmManagerAuto
{
    private $manager;
    private $params;
    private $instanceId;
    private $apiKeyId;
    public function __construct(array $params)
    {
        $this->instanceId = $params["model"]->serviceProperties->get("instanceId|Instance ID");
        $this->apiKeyId = $params["model"]->serviceProperties->get("projectId|Project ID");
        $this->manager = new ContaboVMAuto($this->apiKeyId);
        $this->params = $params;
    }
    public function terminate()
    {
        ini_set("max_execution_time", 600);
        set_time_limit(600);
        $Terminate = $this->manager->CancelinstanceById($this->instanceId);
        $this->manager->ContaboVM_Log("ContaboVM Server Terminate", $this->params, "{\"Instance Id\": \"" . $this->instanceId . "\"}", $Terminate);
        return isset($Terminate["data"][0]["cancelDate"]) ? "success" : $Terminate["message"];
    }
    public function suspend()
    {
        $InstanceShutdown = $this->manager->InstanceShutdown($this->instanceId);
        $this->manager->ContaboVM_Log("ContaboVM Server Suspend", $this->params, "{\"Instance Id\": \"" . $this->instanceId . "\"}", $InstanceShutdown);
        return isset($InstanceShutdown["data"][0]["instanceId"]) ? "success" : $InstanceShutdown["message"];
    }
    public function unsuspend()
    {
        $InstanceStart = $this->manager->InstanceStart($this->instanceId);
        $this->manager->ContaboVM_Log("ContaboVM Server UnSuspend", $this->params, "{\"Instance Id\": \"" . $this->instanceId . "\"}", $InstanceStart);
        return isset($InstanceStart["data"][0]["instanceId"]) ? "success" : $InstanceStart["message"];
    }
}

?>