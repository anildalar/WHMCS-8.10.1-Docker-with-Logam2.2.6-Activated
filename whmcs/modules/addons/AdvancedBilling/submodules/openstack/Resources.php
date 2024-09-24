<?php

namespace MGModule\AdvancedBilling\submodules\openstack;

use MGModule\AdvancedBilling\core\helpers\Files;

/**
 * Description of Resources
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class Resources implements \Iterator
{
    /**
     * List of resources
     *
     * @var AbstractResource[]
     */
    protected $resources;

    /**
     * Current position for iterator
     *
     * @var int
     */
    protected $position;

    /**
     * Resources constructor.
     *
     * @param $metrics
     */
    public function __construct($metrics)
    {
        $this->load($metrics);
    }

    /**
     * Load resources
     */
    protected function load($metrics)
    {
        $config = Configuration::get("resources");

        $this->resources = $this->getFromFiles();
        foreach($this->resources as $resource)
        {
            //Set metrics ID and name for required resources
            $names = $config[$resource->getName()]["name"];
            foreach ($names as $name)
            {
                if($metrics[$name])
                {
                    $resource->setGnocchiId($metrics[$name]);
                    $resource->setGnocchiName($name);
                    break;
                }
            }

            //Set gnocchi configuration such as aggregation and granularity loaded from configuration file
            $resource->setGnocchiConfig($config[$resource->getName()]["config"]);
        }
    }

    /**
     * Load resources from file
     *
     * @return AbstractResource[]
     */
    protected function getFromFiles()
    {
        $result = [];
        $files  = Files::getFromPath(__DIR__, "resources");

        foreach ($files as $file)
        {
            //skip abstract class
            if(strpos($file, "AbstractResource") !== false)
            {
                continue;
            }

            $basename   = substr(basename($file), 0, -4);
            $classname  = "MGModule\\AdvancedBilling\\submodules\\openstack\\resources\\{$basename}";
            $result[]   = new $classname();
        }

        return $result;
    }

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->resources[$this->position];
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return isset($this->resources[$this->position]);
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->position = 0;
    }
}