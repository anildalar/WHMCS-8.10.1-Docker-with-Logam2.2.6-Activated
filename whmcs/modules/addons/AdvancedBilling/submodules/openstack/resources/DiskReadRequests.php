<?php

namespace MGModule\AdvancedBilling\submodules\openstack\resources;

/**
 * Description of DiskReadRequests
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class DiskReadRequests extends AbstractResource
{
    /**
     * Resource name in the module
     *
     * @var string
     */
    protected $name = "diskReadRequests";

    /**
     * Get average value
     *
     * @param $samples
     * @return int|mixed
     */
    public function getValue($samples, $other = [])
    {
        $result = parent::getValue($samples);
        $result /= count($samples) > 0 ? count($samples) : 1;

        return is_nan($result) ? 0 : $result;
    }
}