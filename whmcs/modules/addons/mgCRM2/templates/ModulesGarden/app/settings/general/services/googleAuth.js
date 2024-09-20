


/**
 * factory service to manage statuses groups
 */
mgCRMapp.factory(
        "googleService", 
        ['$resource', '$rootScope', '$http',
function( $resource,   $rootScope,   $http) 
{
    var container = $resource($rootScope.settings.config.apiURL + '/settings/general/auth/google/json',{}, 
    {
        authGoogle: {
            method: 'POST', 
            responseType: 'json',
        }
    });
   
    return container;
    
}]);
