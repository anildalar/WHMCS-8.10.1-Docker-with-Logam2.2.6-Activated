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
        "ResourceField", 
       ['$resource', '$rootScope', '$http',
function($resource, $rootScope, $http) 
{
    var container = $resource($rootScope.settings.config.apiURL + '/settings/fields/json', {}, 
    {
        query: {
            method: 'GET', 
            cache: false,
            isArray: true,
            responseType: 'json',
        },
        save: {
            url: $rootScope.settings.config.apiURL + '/settings/fields/add/json',
            method: 'POST',
            isArray: false,
            cache: false,
            responseType: 'json',
        },
        update: {
            method: 'POST', 
            url: $rootScope.settings.config.apiURL + '/settings/fields/:id/json',
            isArray: false,
            cache: false,
            responseType: 'json',
        },
        delete: {
            url: $rootScope.settings.config.apiURL + '/settings/fields/:id/delete/json',
            method: 'POST',
            isArray: false,
            cache: false,
            responseType: 'json',
        },
        get: {
            url: $rootScope.settings.config.apiURL + '/settings/fields/:id/json',
            method: 'GET', 
            isArray: false,
            cache: false,
            responseType: 'json',
//            transformResponse: function(data) {
//
//                data.id         = parseInt(data.id);
//                data.order      = parseInt(data.order);
//                data.group_id   = parseInt(data.group_id);
//                data.active     = Boolean(data.active);
//                
//                return data;
//            },
        }
    });

    container.updateSingleParam = function(id, $param, value) 
    {
        var params = {};
        params[$param] = value;

        return $http.post($rootScope.settings.config.apiURL + '/settings/fields/' + id + '/json', params);
    }
    
    container.updateManyParam = function($model) 
    {
        var id = $model.id;
        var params = {
            active: $model.active,
            description: $model.description,
            name: $model.name,
            type: $model.type,
        };

        return $http.post($rootScope.settings.config.apiURL + '/settings/fields/' + id + '/json', params);
    }
    
    container.reorder = function(newOrder) 
    {
        var params = {};
        params['order'] = newOrder;

        return $http.post($rootScope.settings.config.apiURL + '/settings/fields/reorder/json', params);
    }

    return container;
    
}]);