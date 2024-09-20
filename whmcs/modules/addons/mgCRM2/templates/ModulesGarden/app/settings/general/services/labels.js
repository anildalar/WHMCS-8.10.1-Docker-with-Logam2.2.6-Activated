/***************************************************************************************
 *
 * 
 *                  ██████╗██████╗ ███╗   ███╗         Customer
 *                 ██╔════╝██╔══██╗████╗ ████║         Relations
 *                 ██║     ██████╔╝██╔████╔██║         Manager
 *                 ██║     ██╔══██╗██║╚██╔╝██║
 *                 ╚██████╗██║  ██║██║ ╚═╝ ██║         For WHMCS
 *                  ╚═════╝╚═╝  ╚═╝╚═╝     ╚═╝
 * 
 *    
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com> 
 *              
 *                           
 * @link        http://www.docs.modulesgarden.com/CRM_For_WHMCS for documenation
 * @link        http://modulesgarden.com ModulesGarden
 *              Top Quality Custom Software Development
 * @copyright   Copyright (c) ModulesGarden, INBS Group Brand, 
 *              All Rights Reserved (http://modulesgarden.com)
 * 
 * This software is furnished under a license and mxay be used and copied only  in  
 * accordance  with  the  terms  of such  license and with the inclusion of the above 
 * copyright notice.  This software  or any other copies thereof may not be provided 
 * or otherwise made available to any other person.  No title to and  ownership of 
 * the  software is hereby transferred.
 *
 **************************************************************************************/



/**
 * factory service to manage statuses groups
 */
mgCRMapp.factory(
        "ResourceLabels", 
        ['$resource', '$rootScope', '$http',
function( $resource,   $rootScope,   $http) 
{
    var container = $resource($rootScope.settings.config.apiURL + '/settings/general/label/json', {}, 
    {
        create: {
            url: $rootScope.settings.config.apiURL + '/settings/general/label/add/json',
            method: 'POST',
            isArray: false,
            cache: false,
            responseType: 'json'
        }
    });
    
    container.getList = function($params)
    {
        return $http.post($rootScope.settings.config.apiURL + '/settings/general/label/json', $params);
    }
    
    container.delete = function(id)
    {
        return $http.post($rootScope.settings.config.apiURL + '/settings/general/label/' + id + '/delete/json', {}, {isArray: false, cache: false, responseType: 'json'});
    }
    
    container.update = function(id, params)
    {
        return $http.post($rootScope.settings.config.apiURL + '/settings/general/label/' + id + '/json', params);
    }

    container.getSingle = function(id) 
    {
        return $http.get($rootScope.settings.config.apiURL + '/settings/general/label/' + id + '/json', {});
    }
    
    container.reorder = function(newOrder) 
    {
        var params = {};
        params['order'] = newOrder;

        return $http.post($rootScope.settings.config.apiURL + '/settings/general/label/order/json', params);
    }

    return container;
    
}]);