<?php

namespace MGModule\AdvancedBilling\submodules\openstack\interfaces;

use MGModule\AdvancedBilling\classes\Logger;
use MGModule\AdvancedBilling\core\helpers\Files;
use MGModule\AdvancedBilling\submodules\openstack\Helper;
use MGModule\AdvancedBilling\submodules\openstack\models\Servers;

/**
 * Description of AbstractConnection.php
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class AbstractConnection
{
    /**
     * @var
     */
    protected $connection;

    /**
     * Gnocchi constructor.
     *
     * @param Servers $server
     * @param $tentantid
     * @throws \Exception
     */
    public function __construct(Servers $server, $tentantid)
    {
        $this->init($server, $tentantid);
    }

    /**
     * Call methods on API object
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->connection, $name], $arguments);
    }

    /**
     * Init connection
     *
     * @param Servers $server
     * @param $tentantid
     * @throws \ReflectionException
     */
    protected function init(Servers $server, $tentantid)
    {
        $params = $server->getDetails();

        /**
         * Load tenant depend on module version
         */
        if (Helper::isVersion2OrHigher())
        {
            $tenant = (Helper::OPENSTACK_V2_FACTORY_PATH)::getTenantAsRoot($params['serverid']);
        }
        else
        {
            $tenant = (Helper::OPENSTACK_V1_FACTORY_PATH)::tenantAsRoot($params);
            $tenant->setTenant($tentantid);
        }

        $interface = strtolower((new \ReflectionClass($this))->getShortName());
        $this->connection = $tenant->api()->{$interface}();
    }

    public static function loadOpenStackVps()
    {
        if (!Helper::isVersion2OrHigher())
        {
            require_once Files::getPath(ROOTDIR, "includes", "OpenStack", "OpenStackLoader.php");

            return true;
        }

        $modulesDir = dirname(dirname(dirname(dirname(dirname(__DIR__)))));
        $bootstrap = 'servers' . DIRECTORY_SEPARATOR. 'OpenStackVpsCloud'. DIRECTORY_SEPARATOR. 'core' . DIRECTORY_SEPARATOR . 'Bootstrap.php';
        $openStackVpsBootstrap =  $modulesDir. DIRECTORY_SEPARATOR . $bootstrap;

        if(!file_exists($openStackVpsBootstrap))
        {
            Logger::error('Unable to load OpenStack VPS Submodule!');
            return false;
        }
        require_once $openStackVpsBootstrap;
        return true;
    }
}