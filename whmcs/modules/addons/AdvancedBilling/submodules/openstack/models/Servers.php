<?php
namespace MGModule\AdvancedBilling\submodules\openstack\models;

use \MGModule\AdvancedBilling\models\AdvancedBilling\Servers as BaseServers;

/**
 * Description of Servers
 *
 * @author Paweł Złamaniec <pawel.zl@modulesgarden.com>
 */
class Servers extends BaseServers
{
    public static function factory($id = null)
    {
        return new Servers($id, '\MGModule\AdvancedBilling\models\AdvancedBilling\servers');
    }

    public function getDetails()
    {
        $params = [
            'serverusername'   => $this->username,
            'serverpassword'   => html_entity_decode(decrypt($this->password)),
            'serverip'         => $this->ipaddress,
            'serverhostname'   => $this->hostname,
            'serversecure'     => $this->secure,
            'serveraccesshash' => $this->accesshash,
            'serverid'         => $this->id,
            'serverport'       => $this->port
        ];

        return $params;
    }
}