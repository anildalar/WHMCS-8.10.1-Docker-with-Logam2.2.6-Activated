<?php


namespace MGModule\AdvancedBilling\submodules\openstack\interfaces;

/**
 * Interface VirtualMachineInterface
 */
interface VirtualMachineInterface
{
    public function listBackups();

    /**
     * @return int
     */
    public function getVcpus();

    /**
     * Return number of IPs assigned to the machine (fixed IP, floating IP)
     *
     * @return array
     */
    public function getIPsCount();

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getId();
}