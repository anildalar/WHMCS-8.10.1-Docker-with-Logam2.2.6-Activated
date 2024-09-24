<?php

namespace MGModule\AdvancedBilling\submodules\openstack;

use MGModule\AdvancedBilling\submodules\openstack\interfaces\VirtualMachineInterface;
use MGModule\AdvancedBilling\submodules\openstack\machines\VirtualMachine;
use MGModule\AdvancedBilling\submodules\openstack\machines\VirtualMachineV2;

class Helper
{
    const OPENSTACK_VPS             = 'OpenStackVPS';
    const OPENSTACK_VPS_CLOUD       = 'OpenStackVpsCloud';

    const OPENSTACK_V1_FACTORY_PATH = '\OpenStack\Factory';
    const OPENSTACK_V2_FACTORY_PATH = '\ModulesGarden\Servers\OpenStackVpsCloud\App\Libs\OpenstackVPS\Factory';

    /**
     * Check if the version of OpenStack VPS module is equal to or higher than 2.0.0
     *
     * @return bool|int
     * @throws \Exception
     */
    public static function isVersion2OrHigher()
    {
        $fileFromV2 = dirname(dirname(dirname(dirname(__DIR__)))) . DIRECTORY_SEPARATOR . 'servers' . DIRECTORY_SEPARATOR. 'OpenStackVpsCloud'. DIRECTORY_SEPARATOR.'OpenStackVpsCloud.php';
        if (file_exists($fileFromV2))
        {
            return true;
        }

        return false;
    }

    /**
     * Return module name depend on version of module
     *
     * @return string
     * @throws \Exception
     */
    public static function getModuleName()
    {
        return self::isVersion2OrHigher() ? self::OPENSTACK_VPS_CLOUD : self::OPENSTACK_VPS;
    }

    /**
     * Return VirtualMachineInterface
     *
     * @param $tenantID
     * @param $vmId
     * @return VirtualMachineInterface
     */
    public static function getVmByModuleVersion($tenantID, $vmId)
    {
        return self::isVersion2OrHigher() ? new VirtualMachineV2($tenantID, $vmId) : new VirtualMachine($tenantID, $vmId);
    }

    /**
     * Return query to get tenant ID depend on module version
     */
    public static function getTenantIdQuery()
    {
        if (!self::isVersion2OrHigher())
        {
            return "SELECT value FROM mg_openstackvps_product WHERE product_id = ? AND setting = 'tenantID'";
        }

        return "SELECT OpenStackVpsCloud_Servers.endpoint 
                                                        FROM tblproducts
                                                               JOIN tblservergroupsrel ON tblproducts.servergroup = tblservergroupsrel.groupid      
                                                               JOIN OpenStackVpsCloud_Servers ON tblservergroupsrel.serverid = OpenStackVpsCloud_Servers.serverID
                                                        WHERE tblproducts.id = ? AND
                                                              OpenStackVpsCloud_Servers.service = 'tenantID'";
    }
}