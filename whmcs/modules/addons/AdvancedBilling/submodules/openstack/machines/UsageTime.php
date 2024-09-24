<?php

namespace MGModule\AdvancedBilling\submodules\openstack\machines;

use MGModule\AdvancedBilling\classes\Logger;

/**
 * Description of UsageTime
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class UsageTime
{
    const TYPE_FLOATING_IP  = "floating";

    const TYPE_FIXED_IP     = "fixed";

    /**
     * Get VPS time usage
     *
     * @return array
     */
    public function getUsage($status, $last)
    {
        $statuses = ['PAUSED', 'SUSPENDED', 'SHUTOFF', 'ACTIVE'];

        $time   = $last ? (time() - strtotime($last)) / 3600 : 0;
        $status = in_array($status, $statuses) ? $status : "SHUTOFF";

        $result =
        [
            "value"    => $time,
            "extended" =>
            [
                $status => $time
            ]
        ];

        return $result;
    }
}