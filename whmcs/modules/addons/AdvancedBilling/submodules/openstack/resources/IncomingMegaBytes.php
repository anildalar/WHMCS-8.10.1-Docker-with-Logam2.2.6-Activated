<?php

namespace MGModule\AdvancedBilling\submodules\openstack\resources;

/**
 * Description of IncomingBytes
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class IncomingMegaBytes extends AbstractResource
{
    /**
     * Resource name in the module
     *
     * @var string
     */
    protected $name = "incomingMegaBytes";

    /**
     * Calculate from Bytes to Megabytes
     *
     * @param $samples
     * @return int|mixed
     */
    public function getValue($samples, $other = [])
    {
        $result = parent::getLastValue($samples);
        $result /= 1048576;

        return $result;
    }
}