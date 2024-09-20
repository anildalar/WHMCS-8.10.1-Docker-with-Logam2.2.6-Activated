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
        'settingsPersonalFieldsviewController',
        ['$rootScope', '$scope',   '$stateParams',
function( $rootScope,   $scope,     $stateParams)
{
    
}]);

angular.module("mgCRMapp").controller(
        'settingsPersonalController',
        ['$rootScope', '$scope',   '$stateParams',
function( $rootScope,   $scope,     $stateParams)
{
    
}]);

angular.module("mgCRMapp").controller(
        'settingsPersonalAbstractController',
        ['$rootScope', '$scope',   '$stateParams', '$timeout', 'ngDialog', '$q', 'blockUI', '$http', 'settingsFieldViews',
function( $rootScope,   $scope,     $stateParams,   $timeout,   ngDialog,   $q,   blockUI,   $http,   settingsFieldViews)
{
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////

    $scope.currentlyEdit = null;
    // what is active now
    $scope.currentlyActive  = null;
    // plain container for fields
    $scope.fields           = {};
    // plain container for fields
    $scope.AllFields        = [];
    // for raw configs
    $scope.configs          = {};
    $scope.activeTab        = 'personal';
    $scope.scopeMessages    = [];
    $scope.departments      = [];
            
    // just function to obtain permisions roles
    $scope.getConfig = function()
    {
        // obtain roles from backend
        $scope.configs = settingsFieldViews.query();
        
        // when we recieve it
        $scope.configs.$promise.then(function(data) {
            // do sth
            
        }, function(error) {
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };
    $scope.getConfig();
    
    
    
    // just function to obtain permisions roles
    $scope.getAllFields = function()
    {
        // obtain roles from backend
        $scope.AllFields = settingsFieldViews.all();
        
        // when we recieve it
        $scope.AllFields.$promise.then(function(data) {
            // do sth
            
        }, function(error) {
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };
    $scope.getAllFields();

    // plain filter for angular
    $scope.filterAlreadyAdded = function(item) {
        if($scope.currentlyEdit == null) return false;
        exists = ($scope.currentlyEdit.indexOf(item) > -1);
        return !exists;
    };

    // options for sortable
    // kind of tricky with prevent mechanism to not allow drag between two incompatible groups
    // have fun
    $scope.sortableOptions = 
    {
        handle: '.mySortableHandler',
        placeholder: "sortableItem",
        connectWith: ".sortableContainer",
        cancel: ".unsortable",
        beforeStop: function (event, ui) {
            validclass = ($(ui.item[0]).find('span').hasClass('dynamic') == true) ? 'dynamic' : 'static';

            if( ! $(ui.item[0]).closest('.sortableContainer').hasClass(validclass) ) {
                ui.item.sortable.cancel();
            }
        },
        stop: function(e, ui) {
            $scope.$emit('loadingNotification', {type: 'progress'});

            $scope.updateFieldsOrder();

            $scope.$emit('loadingNotification', {type: 'finished'});



        }
    };

    
    $scope.updateFieldsOrder = function()
    {
        res = settingsFieldViews.updateVisible($scope.currentlyActive, $scope.currentlyEdit);
        $scope.$emit('loadingNotification', {type: 'progress'});

        res .then(function(response) 
        {
                
            $scope.$emit('loadingNotification', {type: 'finished'});
            return true;
            
        }, function(response) {
            
            // push scope message
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : 'error occured',
            });

        });
        
        
    }
    
    
    $scope.showConfigFor = function(route)
    {
        
        $scope.currentlyActive = route;
        $scope.currentlyEdit   = $scope.configs[$scope.currentlyActive];
        
        $scope.fields = $scope.AllFields;
        $scope.fields = angular.copy($scope.AllFields);
        
        
        for (var i = 0; i < $scope.currentlyEdit.length; i++) 
        {
            indes = $scope.fields.static.indexOf($scope.currentlyEdit[i]);
            if(indes > -1) {
                $scope.fields.static.splice(indes, 1);
            }
        }   
        
        
        for (var i = 0; i < $scope.currentlyEdit.length; i++) 
        {
            if (typeof($scope.currentlyEdit[i]) == 'object') 
            {
                for (var j = 0; j < $scope.fields.fields.length; j++) 
                {
                    if($scope.fields.fields[j].id == $scope.currentlyEdit[i].id) {
                        $scope.fields.fields.splice(j, 1);
                    }
                }   
                
            }
        }   
    };
    
    $scope.isActive = function(what)
    {
        return $scope.currentlyActive == what;
    }
    
    
    
    //////////////////////////////
    // personal settings
    //////////////////////////////
    
    
    $scope.personalSettings = {};
    
    getPersonalSettings = function()
    {
        // send query
        return $http.get($rootScope.settings.config.apiURL + '/settings/personal/json').then(function(response) 
        {
            
            $scope.personalSettings.avatar       = response.data.avatar;
            $scope.personalSettings.defaultEmail = response.data.defaultEmail;

        }, function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            // push scope message
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : 'error occured',
            });
        });
        
    };
    getPersonalSettings();
    
    getDataForFormsInBackground = function()
    {

        // come on give me data from backend
        $http.get($rootScope.settings.config.apiURL + '/helpers/lead/backgroundFormData/json', {cache: false}).then(function(result) 
        {
            
            if ($scope.departments.length > 0)
            {
                $scope.departments.splice(0,$scope.formData.departments.length);
            }
            $scope.departments = result.data.departments;
            
            $scope.departments.insert(0, {id:0, number:0, fullemail: result.data.system_email, email:result.data.system_email});
            
            $scope.defaultEmail = $scope.departments[0].fullemail;

           

        });
    };
    getDataForFormsInBackground(); 
    
    $scope.personalSettingsFormSubmit = function()
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        var defaultEmail = $('#defaulfEmail').val();
        $.each($scope.departments, function(key, val){

            if(val.fullemail === defaultEmail){
                $scope.personalSettings.defaultEmail = val.fullemail;
            }
        })
        // send query
        return $http.post($rootScope.settings.config.apiURL + '/settings/personal/json', $scope.personalSettings).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            $scope.scopeMessages.push({
                type: 'success',
                title: "Success!",
                content: response.data.msg,
            });
            
        }, function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            // push scope message
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : 'error occured',
            });
        });
    };
  
}]);

