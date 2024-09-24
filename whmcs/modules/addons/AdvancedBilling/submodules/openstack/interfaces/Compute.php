<?php

namespace MGModule\AdvancedBilling\submodules\openstack\interfaces;

use OpenStack\v3\Api\Compute as OpenStackCompute;

/**
 * Description of VPS
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class Compute extends AbstractConnection
{
    /**
     * @var OpenStackCompute
     */
    protected $connection;
}