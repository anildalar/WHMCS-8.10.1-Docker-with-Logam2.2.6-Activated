<?php

namespace MGModule\AdvancedBilling\submodules\openstack\interfaces;

use MGModule\AdvancedBilling\submodules\openstack\models\Servers;
use OpenStack\v3\Api\Gnocchi as OpenStackGnocchi;

/**
 * Description of Gnocchi
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class Gnocchi extends AbstractConnection
{
    /**
     * Gnocchi constructor.
     *
     * @param Servers $server
     * @param $tentantid
     * @throws \Exception
     */
    public function __construct(Servers $server, $tentantid)
    {
        parent::__construct($server, $tentantid);

        //Check the connection
        if(!$this->connection->testEndpoint())
        {
            throw new \Exception("Gnocchi Endpoint is not available");
        }
    }
}