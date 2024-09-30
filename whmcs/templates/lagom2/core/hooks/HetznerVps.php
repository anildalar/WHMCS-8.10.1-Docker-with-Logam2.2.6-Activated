<?php

add_hook('ClientAreaSidebars', 1, function($vars) {
    $primarySidebar = Menu::primarySidebar();

    if ($primarySidebar && !is_null($primarySidebar->getChild('managementHetznerVps'))) {
        $hetznerSidebar = $primarySidebar->getChild('managementHetznerVps');
        if (!is_null($hetznerSidebar->getChild('backups'))){
            $hetznerSidebar->getChild('backups')->setIcon('fa-ticket lm lm-backup');
        }
        if (!is_null($hetznerSidebar->getChild('console'))){
            $hetznerSidebar->getChild('console')->setIcon('fa-ticket lm lm-php-admin');
        }
        if (!is_null($hetznerSidebar->getChild('firewalls'))){
            $hetznerSidebar->getChild('firewalls')->setIcon('fa-ticket ls ls-shield');
        }
        if (!is_null($hetznerSidebar->getChild('floatingIPs'))){
            $hetznerSidebar->getChild('floatingIPs')->setIcon('fa-ticket ls ls-rss');
        }
        if (!is_null($hetznerSidebar->getChild('graphs'))){
            $hetznerSidebar->getChild('graphs')->setIcon('fa-ticket lm lm-line-graph');
        }
        if (!is_null($hetznerSidebar->getChild('isos'))){
            $hetznerSidebar->getChild('isos')->setIcon('fa-ticket ls ls-image');
        }
        if (!is_null($hetznerSidebar->getChild('rebuild'))){
            $hetznerSidebar->getChild('rebuild')->setIcon('fa-ticket ls ls-refresh');
        }
        if (!is_null($hetznerSidebar->getChild('reverseDNS'))){
            $hetznerSidebar->getChild('reverseDNS')->setIcon('fa-ticket ls ls-configure');
        }
        if (!is_null($hetznerSidebar->getChild('snapshots'))){
            $hetznerSidebar->getChild('snapshots')->setIcon('fa-ticket ls ls-smartphone');
        }

    }
});