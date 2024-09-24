<?php

namespace MGModule\AdvancedBilling\submodules\openstack\resources;

use MGModule\AdvancedBilling\core\helpers\Files;

/**
 * Description of AbstractResource
 *
 * @author Paweł Złamaniec
 */
class AbstractResource
{
    /**
     * Resource name in Advanced Billing submodule
     *
     * @var string
     */
    protected $name;

    /**
     * Gnocchi configuration
     *
     * @var mixed
     */
    protected $config;

    /**
     * Gnocchi resource ID
     *
     * @var string
     */
    protected $gnocchiId;

    /**
     * Gnocchi resource name
     *
     * @var string
     */
    protected $gnocchiName;

    /**
     * Get resource name from Advanced Billing submodule
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get aggregation type
     *
     * @return mixed
     */
    public function getGnocchiConfig()
    {
        return $this->config;
    }

    /**
     * Set aggregation type
     *
     * @param $config
     */
    public function setGnocchiConfig($config)
    {
        $this->config = $config;
    }

    /**
     * Get gnocchi resource id that contain the resource value
     *
     * @return string
     */
    public function getGnocchiId()
    {
        return $this->gnocchiId;
    }

    /**
     * Get gnocchi resource names that contain the resource value
     *
     * @return string
     */
    public function getGnocchiName()
    {
        return $this->gnocchiName;
    }

    /**
     * Set gnocchi resource ID
     *
     * @param $id
     * @return $this
     */
    public function setGnocchiId($id)
    {
        $this->gnocchiId = $id;
        return $this;
    }

    /**
     * Set gnocchi resource names
     *
     * @param $name
     * @return $this
     */
    public function setGnocchiName($name)
    {
        $this->gnocchiName = $name;
        return $this;
    }

    /**
     * Get value based on provided sample
     *
     * @param $samples
     * @return int|mixed
     */
    public function getValue($samples, $other = [])
    {
        $result = 0;
        foreach($samples as $sample)
        {
            $result += $sample[2];
        }

        return $result;
    }

    public function getLastValue($samples, $other = [])
    {
        if(!is_array($samples) || count($samples) == 0)
        {
            return 0;
        }
        $last = end($samples);
        return $last[2] ?: 0;
    }

    public function getExpectedName(): string
    {
        $resources = require Files::getPath(ROOTDIR, "modules", "addons", "AdvancedBilling", "submodules", "openstack", "config.php");
        return $resources['resources'][$this->name]['name'][0] ?: '';
    }
}