<?php

namespace MGModule\AdvancedBilling\submodules\openstack\resources;

/**
 * Description of Memory
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class Memory extends AbstractResource
{
    /**
     * Resource name in the module
     *
     * @var string
     */
    protected $name = "memory";

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