<?php


namespace MGModule\AdvancedBilling\submodules\openstack\machines;


use MGModule\AdvancedBilling\classes\Database;
use MGModule\AdvancedBilling\classes\Logger;
use MGModule\AdvancedBilling\submodules\openstack\interfaces\VirtualMachineInterface;
use MGModule\AdvancedBilling\submodules\openstack\Resources;

class Service
{
    /**
     * @var VirtualMachineInterface
     */
    protected $vm;

    /**
     * Gnocchi virtual machine id
     *
     * @var String
     */
    protected $id;

    /**
     * Open stack submodule resources object
     *
     * @var Resources
     */
    protected $resources;


    /**
     * Service constructor.
     *
     * @param VirtualMachineInterface $vm
     * @param $metrics
     */
    public function __construct(VirtualMachineInterface $vm, $metrics)
    {
         $this->vm = $vm;
         $this->resources = new Resources($metrics);
    }

    /**
     * Get virtual machine metrics
     *
     * @return array
     */
    public function getMetrics()
    {
        $metrics = [];
        foreach($this->resources as $resource)
        {
            //Add only those that we found
            if(!$resource->getGnocchiId())
            {
                $name = $resource->getExpectedName() ?: $resource->getName();
                Logger::info("OpenStack Gnocchi: Resource $name id not found");
            }

            $metrics[$resource->getGnocchiName()] = [
                "id"     => $resource->getGnocchiId(),
                "config" => $resource->getGnocchiConfig()
            ];
        }

        return $metrics;
    }

    /**
     * Get records usage base on samples from gnocchi and VPS data
     *
     * @param $samples
     * @param $last
     * @return array
     */
    public function getUsage($samples, $last)
    {
        $static = $this->getStaticUsage($last);
        foreach($this->resources as $resource)
        {
            $values = $samples[$resource->getGnocchiName()];
            $result[$resource->getName()]["value"] = $resource->getValue($values, $static);
        }

        return array_merge($result, $static);
    }

    /**
     * Get usage from VPS data
     *
     * @param $last
     * @return array
     */
    public function getStaticUsage($last)
    {
        $result =
            [
                "fixedIP"       => ["value" => $this->vm->getIPsCount()["fixed"]],
                "floatingIP"    => ["value" => $this->vm->getIPsCount()["floating"]],
                "backupNumber"  => ["value" => count($this->vm->listBackups())],
                "vcpus"         => ["value" => $this->vm->getVcpus()],

                "hourly"        => (new UsageTime())->getUsage($this->vm->getStatus(), $last)
            ];

        return $result;
    }

    /**
     * Get related service
     *
     * @return bool|object
     */
    public function getRelatedService()
    {
        $hosting = Database::getInstance()->getRow(
            "SELECT tblhosting.id FROM tblhosting
             INNER JOIN tblcustomfieldsvalues ON tblhosting.id = tblcustomfieldsvalues.relid
             INNER JOIN tblcustomfields ON tblcustomfieldsvalues.fieldid = tblcustomfields.id
             WHERE tblcustomfields.fieldname LIKE 'vmID|VM ID' 
             AND tblcustomfieldsvalues.value = ?",
            [$this->vm->getId()]);

        return $hosting;
    }

    /**
     * Check whether virtual machine is connected to service in WHMCS
     *
     * @return boolean
     */
    public function exists()
    {
        return $this->getRelatedService()->id ? true : false;
    }

}