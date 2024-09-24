<?php

namespace MGModule\AdvancedBilling\submodules\openstack\resources;

/**
 * Description of CpuUtil
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class CpuUtil extends AbstractResource
{
    /**
     * Resource name in the module
     *
     * @var string
     */
    protected $name = "cpuUtil";

    /**
     * Parse value
     *
     * @param $samples
     * @return int|mixed|string
     */
    public function getValue($samples, $other = array())
    {
        $time = $usage = 0;
        foreach($samples as $sample)
        {
            $time  += $sample[1];
            $usage += $sample[2];
        }

        $usage /= count($samples) > 0 ? count($samples) : 1;
        $time  /= count($samples) > 0 ? count($samples) : 1;

        $result = $usage / ($time > 0 ? $time : 1) / ($other["vcpus"]["value"] > 0 ? $other["vcpus"]["value"] : 1) / 1000000000;
        return is_nan($result) ? 0 : $result;
    }
}