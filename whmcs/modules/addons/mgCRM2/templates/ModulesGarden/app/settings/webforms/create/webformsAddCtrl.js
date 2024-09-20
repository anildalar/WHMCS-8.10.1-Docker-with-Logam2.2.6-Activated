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

angular.module("mgCRMapp").controller(
        'webformsAddCtrl',
        ['$rootScope', '$scope', '$http', '$timeout', 'ResourceStatusesGroups', 'ResourceField', 'webformsAddService', '$state',
function( $rootScope,   $scope,   $http,   $timeout,   ResourceStatusesGroups,   ResourceField,   webformsAddService,   $state)
{
    $scope.webform          = new webformsAddService;
    $scope.timeoutDataOpen = false;
    $scope.fieldGroups   = []; 
    $scope.fields        = [];
    $scope.params        = [];
    $scope.scopeMessages = [];
    
    $scope.getFieldGroups = function()
    {
        $scope.fieldGroups = ResourceStatusesGroups.query();
        $scope.fieldGroups.$promise.then(function(data) {
            synchroFieldsMapToGroups();
            
            //Add static required fields!!
            $scope.fieldGroups.push({'id': 0, name: 'Required', color: "#000000", active: true, 
                fields: [
                    {id: 'R3', group_id: 0, name: 'E-mail',   type: 'text',   active: true},
                    {id: 'R4', group_id: 0, name: 'Phone',    type: 'text',   active: true},
                    {id: 'R5', group_id: 0, name: 'Country',  type: 'select', active: true}
                ]});
        }, function(error) {
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
        });
    };
    
    $scope.getFields = function()
    {
        $scope.fields = ResourceField.query();
        $scope.fields.$promise.then(function(data) {
            synchroFieldsMapToGroups();
        }, function(error) {
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
       
    };
    
    function synchroFieldsMapToGroups()
    {
        // just block whatever any of this is empty
        if( $scope.fieldGroups.length == 0 || $scope.fields.length == 0 ) { 
            return; 
        }
        
        for (var i = 0; i < $scope.fieldGroups.length; i++) 
        {
            if(!$scope.fieldGroups[i].fields)
            {
                $scope.fieldGroups[i].fields = [];
            }
            
            for (var j = 0; j < $scope.fields.length; j++) 
            {
                if( $scope.fields[j].group_id == $scope.fieldGroups[i].id ) {
                    $scope.fieldGroups[i].fields.push($scope.fields[j]);
                }
                    
            }
        }    
    }
    
    $scope.sortableOptions = 
    {
        handle: '.mySortableHandler',
        placeholder: "sortableItem",
        connectWith: ".sortableContainer",
        stop: function(e, ui)
        {
            for(var i = 0; i < $scope.webform.fields.length; i++) {
                if(ui.item.sortable.model.id == $scope.webform.fields[i].id ) {
                    $scope.webform.fields[i].custom_name = ui.item.sortable.model.name;
                }
            }
        }
    };
    
    $scope.removeFromForm = function(fieldId)
    {
        //get field
        for(var i = 0; i < $scope.webform.fields.length; i++) {
            if(fieldId == $scope.webform.fields[i].id ) {
                field = $scope.webform.fields[i];
                $scope.webform.fields.splice(i, 1);
            }
        }
        
        //Insert field back to the group
        for(var i = 0; i < $scope.fieldGroups.length; i++) 
        {
            if($scope.fieldGroups[i].id === field.group_id) 
            {
                $scope.fieldGroups[i].fields.push(field);
            }
        };
    };
    
    function convertToInt(string)
    {
        var array = string.split(':').map(Number);
        return array[0] * 3600 + array[1] * 60 + array[2];        
    }
    
    function convertToTime(s)
    {
        var m = Math.floor(s/60);
        s = s - m*60;
        var h = Math.floor(m/60);
        m = m - h*60;
        
        return "" + (( h >= 10 ? h : "0" + h ) + ":" + ( m >= 10 ? m : "0" + m ) + ":" + ( s >= 10 ? s : "0" + s ));
    }
    $scope.timeoutDataOpenClick = function (status)
    {
        $scope.timeoutDataOpen = status;
    };

    $scope.followUpDataOpenClick = function (status)
    {
        $scope.followUpDateOpen = status;
    };
    
    $scope.createWebFormSubmit = function()
    {
        $scope.webform.static.timeout = convertToInt(moment($scope.webform.static.timeout).format("HH:mm:ss"));
        // perform save
        var res = $scope.webform.$save();

        res.then(function(response) {

            $scope.scopeMessages.push({
                type: 'success',
                title: "Success!",
                content: response.msg,
            });
            
            $rootScope.webFormCreated = true;

            $state.go('settings.webforms.list');

        },function(response) {
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
        });
        
    };
    
    
    //init
    initRequiredData = function()
    {        
        $scope.getFields();
        $scope.getFieldGroups();

        $scope.webform.fields = [];
        $scope.webform.static = {};
        $scope.webform.fields.push({id: 'R1', group_id: 0, name: 'First Name', custom_name: 'First Name', type: 'text', active: true});
        $scope.webform.fields.push({id: 'R2', group_id: 0, name: 'Last Name', custom_name: 'Last Name',  type: 'text', active: true});
        $scope.webform.static.followupLabel = {};
        $scope.webform.static.followupStatus = {};

        $scope.params = webformsAddService.get();
        
        $scope.params.then(function(response) {
            $scope.params = response.data;

            $scope.webform.static.followupLabel = $scope.params.followups[0] ?? {};
            $scope.webform.static.followupStatus = $scope.params.followupStatus[0] ?? {};

            for(i=0; i < $scope.contactTypes.length; i++) {
                if($scope.contactTypes[i].active === true) {
                    $scope.webform.contact_type = $scope.contactTypes[i];
                    break;
                }
            }

            for(i=0; i < $scope.params.statuses.length; i++) {
                if($scope.params.statuses[i].active === true) {
                    $scope.webform.status = $scope.params.statuses[i];
                    break;
                }
            }
            
            for (var i = 0; i < $scope.params.admins.length; i++) 
            {
                if($scope.params.admins[i].id == $scope.params.currentAdmin.id) {
                    $scope.webform.assignedAdmin = $scope.params.admins[i];
                }
            }
        });

        $scope.webform.static.timeout = moment("1970-01-01 " + convertToTime(0)).format("YYYY-MM-DD HH:mm:ss");
        $scope.timeoutDataOpen = true;
        $timeout(function() {
            $('tbody tr td a.btn.btn-link').trigger('click');
            $('span.btn-group.pull-right button.btn.btn-sm.btn-success.ng-binding').trigger('click');
        }, 300);
        
    };
    initRequiredData();
}]);