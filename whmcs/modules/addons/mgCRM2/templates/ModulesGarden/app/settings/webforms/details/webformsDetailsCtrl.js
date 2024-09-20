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
        'webformsDetailsCtrl',
        ['$rootScope', '$timeout', '$stateParams', '$scope', '$http', 'ResourceStatusesGroups', 'ResourceField', 'webformsEditService', '$state',
function( $rootScope,   $timeout,   $stateParams,   $scope,   $http,   ResourceStatusesGroups,   ResourceField,   webformsEditService,   $state)
{
    $scope.webform          = new webformsEditService;
    $scope.timeoutDataOpen = false;

    $scope.fieldGroups      = []; 
    $scope.fields           = [];
   
    $scope.scopeMessages = [];
    
    $scope.getFieldGroups = function()
    {
        
        $scope.fieldGroups = ResourceStatusesGroups.query();
        $scope.fieldGroups.$promise.then(function(data) {
            synchroFieldsMapToGroups();
            
            //Add static required fields!!
            $scope.fieldGroups.push({'id': 0, name: 'Required', color: "#000000", active: true});
            $scope.fieldGroups[$scope.fieldGroups.length-1].fields = [];
            $scope.fieldGroups[$scope.fieldGroups.length-1].fields.push({id: 'R1', group_id: 0, name: 'First Name', custom_name: 'First Name', type: 'text', order: 0, active: true});
            $scope.fieldGroups[$scope.fieldGroups.length-1].fields.push({id: 'R2', group_id: 0, name: 'Last Name', custom_name: 'Last Name',  type: 'text', order: 0, active: true});
            $scope.fieldGroups[$scope.fieldGroups.length-1].fields.push({id: 'R3', group_id: 0, name: 'E-mail',     type: 'text',   order: 1, active: true});
            $scope.fieldGroups[$scope.fieldGroups.length-1].fields.push({id: 'R4', group_id: 0, name: 'Phone',      type: 'text',   order: 2, active: true});
            $scope.fieldGroups[$scope.fieldGroups.length-1].fields.push({id: 'R5', group_id: 0, name: 'Country',    type: 'select', order: 3, active: true});

            $scope.params = webformsEditService.get();
            $scope.params.then(function(response) 
            {
                $scope.params = response.data;
                $scope.loadWebFrom();
            });

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

    $scope.timeoutDataOpenClick = function (status)
    {
        $scope.timeoutDataOpen = status;
    };

    $scope.followUpDataOpenClick = function (status)
    {
        $scope.followUpDateOpen = status;
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
    
    $scope.saveWebFormSubmit = function()
    {
        $scope.webform.static.timeout = convertToInt(moment($scope.webform.static.timeout).format("HH:mm:ss"));
        
        var res = $scope.webform.$save();

        res.then(function(response) {

            $scope.scopeMessages.push({
                type: 'success',
                title: "Success!",
                content: response.msg,
            });
            
            $rootScope.webformEdited = true;

            $state.go('settings.webforms.list');

        },function(response) {
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
        });
    };
    
    function convertToTime(s)
    {
        var m = Math.floor(s/60);
        s = s - m*60;
        var h = Math.floor(m/60);
        m = m - h*60;
        
        return "" + (( h >= 10 ? h : "0" + h ) + ":" + ( m >= 10 ? m : "0" + m ) + ":" + ( s >= 10 ? s : "0" + s ));
    }
    
    $scope.loadWebFrom = function()
    {
        $http.get($rootScope.settings.config.apiURL + '/settings/webforms/'+$stateParams.id+'/details/json', {
            cache: false,
        }).then(function(result) 
        {
            $scope.webform.static = result.data.static;

            $scope.webform.static.duplicate_email = $scope.webform.static && $scope.webform.static.duplicate_email == 1;
            $scope.webform.static.createFollowup = $scope.webform.static && $scope.webform.static.createFollowup == 1;

            for(var i=0; i<result.data.fields.length; i++)
            {
                transferFieldToForm(result.data.fields[i].field_id, result.data.fields[i].custom_name);
            }
            
            for(var i=0; i < $scope.contactTypes.length; i++) {
                if($scope.contactTypes[i].id == result.data.static.type_id) {
                    $scope.webform.contact_type = $scope.contactTypes[i];
                    break;
                }
            }

            for(i=0; i < $scope.params.statuses.length; i++) {
                if($scope.params.statuses[i].id == result.data.static.status_id) {
                    $scope.webform.status = $scope.params.statuses[i];
                    break;
                }
            }
            
            for (var i = 0; i < $scope.params.admins.length; i++) 
            {
                if($scope.params.admins[i].id == result.data.static.admin_id) {
                    $scope.webform.assignedAdmin = $scope.params.admins[i];
                }
            }

            for (var i = 0; i < $scope.params.followups.length; i++)
            {
                if($scope.params.followups[i].id == result.data.static.followupLabel) {
                    $scope.webform.static.followupLabel = $scope.params.followups[i];
                }
            }

            for (var i = 0; i < $scope.params.followupStatus.length; i++)
            {
                if($scope.params.followupStatus[i].id == result.data.static.followupStatus) {
                    $scope.webform.static.followupStatus = $scope.params.followupStatus[i];
                }
            }

            if ($scope.webform.static.followupStatus === null) {
                $scope.webform.static.followupStatus = $scope.params.followupStatus[0] ?? {};
            }

            $scope.webform.admins = result.data.static.admins;
            
            $scope.webform.static.timeout = moment("1970-01-01 " + convertToTime($scope.webform.static.timeout)).format("YYYY-MM-DD HH:mm:ss");
            $scope.timeoutDataOpen = true;
            $timeout(function() {
                $('tbody tr td a.btn.btn-link').trigger('click');
                $('span.btn-group.pull-right button.btn.btn-sm.btn-success.ng-binding').trigger('click');
            }, 300);
        });
        
    };
    
    function transferFieldToForm(id, custom_name)
    {
        for (var i = 0; i < $scope.fieldGroups.length; i++) 
        {
            if( typeof($scope.fieldGroups[i].fields) != 'undefined' && $scope.fieldGroups[i].fields.length > 0 ) 
            {
                for (var j = 0; j < $scope.fieldGroups[i].fields.length; j++) 
                {
                    if( id == $scope.fieldGroups[i].fields[j].id ) {
                        var field = $scope.fieldGroups[i].fields[j];
                        field.custom_name = custom_name;
                        $scope.webform.fields.push(field);
                        $scope.fieldGroups[i].fields.splice(j, 1);
                    }
                }
            }
        }   
    }
    
    //init
    initRequiredData = function()
    {
        $scope.getFields();
        $scope.getFieldGroups();
        
        $scope.webform.fields = [];
    };
    initRequiredData();
}]);