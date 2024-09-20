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
 * @author      Paweł Złamaniec <pawel.zl@modulesgarden.com> 
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


mgCRMapp.factory('webformsAddService', 
            ['$rootScope', '$resource', '$http',
    function( $rootScope,   $resource,   $http) 
{
    var container = $resource($rootScope.settings.config.apiURL + '/settings/webforms/create/json', {}, 
    {       
        save: {
            method: 'POST', 
            isArray: false,
            cache: false,
            responseType: 'json',
            withCredentials: true,
        },
    });
    
    container.get = function() 
    {
        return $http.get($rootScope.settings.config.apiURL + '/settings/webforms/create/getParams/json', {
            cache: true,
            responseType: 'json',
        });
    };

    return container;

}]);
