<?php

namespace MGModule\AdvancedBilling\submodules\openstack\machines;

use MGModule\AdvancedBilling\classes\Logger;
use MGModule\AdvancedBilling\submodules\openstack\interfaces\VirtualMachineInterface;
use MGModule\AdvancedBilling\submodules\openstack\Resources;
use MGModule\AdvancedBilling\classes\Database;
use OpenStack\v3\Models\VPS as OpenStackVPS;

/**
 * Description of VirtualMachine
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class VirtualMachine extends OpenStackVPS implements VirtualMachineInterface
{
    /**
     * Gnocchi virtual machine id
     *
     * @var String
     */
    protected $id;

    /**
     * VirtualMachine constructor.
     *
     * @param $tenatid
     * @param $vmid
     */
    public function __construct($tenatid, $vmid)
    {
        parent::__construct($tenatid, $vmid);

        $this->id = $vmid;
    }

    public function listBackups()
    {
        return $this->listBackups();
    }

    /**
     * @return array
     */
    public function getIPsCount()
    {
        $result =
            [
                "fixed"     => 0,
                "floating"  => 0
            ];

        $interfaces = $this->listInterfaces();
        foreach($interfaces as $interface)
        {
            $result["fixed"]    += $interface->fixedIP     ? 1 : 0;
            $result["floating"] += $interface->floatingIP  ? 1 : 0;
        }

        return $result;
    }

    /**
     * @return int
     */
    public function getVcpus()
    {
        return $this->flavor()->vcpus;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

}