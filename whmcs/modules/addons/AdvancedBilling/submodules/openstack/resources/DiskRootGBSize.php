<?php

namespace MGModule\AdvancedBilling\submodules\openstack\resources;

/**
 * Description of DiskRootGBSize
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class DiskRootGBSize extends AbstractResource
{
    /**
     * Resource name in the module
     *
     * @var string
     */
    protected $name = "diskRootGBSize";

    /**
     * Get average value
     *
     * @param $samples
     * @return int|mixed
     */
    public function getValue($samples, $other = [])
    {
        $result = parent::getValue($samples);
        $result /= (!empty($samples) && $samples > 0) ? count($samples) : 1;

        return is_nan($result) ? 0 : $result;
    }
}