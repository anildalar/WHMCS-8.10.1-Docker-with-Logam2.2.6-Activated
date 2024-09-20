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


angular.module("mgCRMapp").controller(
        'automationsCreateController',
        ['$scope', '$rootScope', '$http', '$stateParams', 'blockUI', '$state', 'automationsCreateService', '$timeout',
function( $scope,   $rootScope,   $http,   $stateParams,   blockUI,   $state,   automationsCreateService,   $timeout)
{
    $scope.automations = new automationsCreateService;
    $scope.automations.name = '';
    $scope.automations.status = true;
    $scope.scopeMessages = [];
    $scope.createAutomationFormBox = blockUI.instances.get('createAutomationFormBox');
    
    /**
     * Send email!
     * 
     * @returns {undefined}
     */
    $scope.automationsFormSubmit = function()
    {
        $scope.createAutomationFormBox.start();
        $scope.$emit('loadingNotification', {type: 'progress'});
        var res = $scope.automations.$create();
        res.then(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.createAutomationFormBox.stop();
            
            $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: response.msg,
            });
            
            $timeout(function() {
                $state.go('settings.automations.list');
            }, 1500);

        }, function(response) {

            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.createAutomationFormBox.stop();
           
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : (response.data.error ? response.data.error : response.statusText),
            });
        });
    };
}]);
