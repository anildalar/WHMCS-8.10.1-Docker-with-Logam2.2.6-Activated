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
        "ResourceStatusesGroups", 
       ['$resource', '$rootScope', '$http',
function($resource, $rootScope, $http) 
{
    var container = $resource($rootScope.settings.config.apiURL + '/settings/fieldgroups/json', {}, 
    {
        query: {
            method: 'GET', 
            cache: false,
            isArray: true,
            responseType: 'json',
        },
        save: {
            url: $rootScope.settings.config.apiURL + '/settings/fieldgroups/add/json',
            method: 'POST',
            isArray: false,
            cache: false,
            responseType: 'json',
        },
        update: {
            method: 'POST', 
            isArray: false,
            cache: false,
            responseType: 'json',
        },
        delete: {
            url: $rootScope.settings.config.apiURL + '/settings/fieldgroups/:id/delete/json',
            method: 'POST',
            isArray: false,
            cache: false,
            responseType: 'json',
        },
    });

    container.updateSingleParam = function(id, $param, value) 
    {
        var params = {};
        params[$param] = value;

        return $http.post($rootScope.settings.config.apiURL + '/settings/fieldgroups/' + id + '/json', params);
    };
    
    container.reorder = function(newOrder) 
    {
        var params = {};
        params['order'] = newOrder;

        return $http.post($rootScope.settings.config.apiURL + '/settings/fieldgroups/reorder/json', params);
    };

    return container;
    
}]);