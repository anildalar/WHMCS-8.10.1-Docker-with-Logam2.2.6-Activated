<?php


namespace MGModule\AdvancedBilling\submodules\openstack\machines;


use MGModule\AdvancedBilling\submodules\openstack\interfaces\VirtualMachineInterface;

class VirtualMachineV2 implements VirtualMachineInterface
{
    /**
     * Gnocchi virtual machine id
     *
     * @var String
     */
    protected $id;

    /**
     * OpenStack VPS instance
     */
    protected $vps;

    /**
     * VirtualMachineV2 constructor.
     * @param $tenatId
     * @param $vmid
     */
    public function __construct($tenantId, $vmId)
    {
        $this->vps = new \ModulesGarden\Servers\OpenStackVpsCloud\App\Libs\Models\VPSModel($tenantId, $vmId);

        $this->id = $vmId;
    }

    public function listBackups()
    {
        $backupManager = new \ModulesGarden\Servers\OpenStackVpsCloud\App\Libs\Services\VirtualMachine\Managers\BackupsManager($this->id);

        return $backupManager->listBackups();
    }

    /**
     * @return array
     */
    public function getIPsCount()
    {
        $networkInterfaceManager = new \ModulesGarden\Servers\OpenStackVpsCloud\App\Libs\Services\VirtualMachine\Managers\NetworkInterfacesManager($this->id);

        $result =
            [
                "fixed"     => 0,
                "floating"  => 0
            ];

        foreach($networkInterfaceManager->listInterfaces() as $interface)
        {
            $result["fixed"]    += $interface->getFixedIP()     ? 1 : 0;
            $result["floating"] += $interface->getFloatingIP()  ? 1 : 0;
        }

        return $result;
    }

    /**
     * @return int
     */
    public function getVcpus()
    {
        return $this->vps->getFlavor()->getVcpus();
    }

    /**
     * @return string|void
     */
    public function getStatus()
    {
        return $this->vps->getStatus();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
