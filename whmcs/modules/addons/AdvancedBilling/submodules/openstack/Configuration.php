<?php

namespace MGModule\AdvancedBilling\submodules\openstack;

use MGModule\AdvancedBilling\core\helpers\Files;

/**
 * Description of Configuration
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class Configuration
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var Configuration
     */
    protected static $instance;

    /**
     * Create singleton instance
     *
     * @return Configuration
     */
    public static function getInstance()
    {
        if(self::$instance)
        {
            return self::$instance;
        }

        self::$instance = new Configuration();
        return self::$instance;
    }

    /**
     * Get values from configuration file
     *
     * @param mixed ...$name
     * @return mixed
     */
    public static function get(...$name)
    {
        return call_user_func_array([self::getInstance(), "getData"], $name);
    }

    /**
     * Configuration constructor.
     */
    public function __construct()
    {
        $file = Files::getPath(__DIR__, "config.php");
        $this->data = require $file;
    }

    /**
     * Get values from configuration file
     *
     * @param mixed ...$name
     * @return array|mixed
     */
    public function getData(...$name)
    {
        $result = $this->data;
        foreach ($name as $key)
        {
            $result = $result[$key];
        }

        return $result;
    }
}