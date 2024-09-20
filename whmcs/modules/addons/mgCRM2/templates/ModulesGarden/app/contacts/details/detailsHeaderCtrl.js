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
        'detailsHeaderCtrl',
        ['$scope', '$rootScope', '$state', '$stateParams', 'leadMainDetailsData', '$http', 'ngDialog', 'AclService', 'leadTypeData',
function( $scope,   $rootScope,   $state,   $stateParams,   leadMainDetailsData,   $http,   ngDialog,   AclService,   leadTypeData)
{
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    $scope.mainData = leadMainDetailsData;
    $scope.newFollowupValid       = false;
    $scope.waringMessages         = [];
    // dynamic variables only for this scope manipulation on the fly
    $scope.temp = {
        departments: [],
        labels: [],
        admins: [],
        statuses: [],
        system_email: null,
        default_mail: 0,
        followupTypes: [],
        followupStatuses: [],
        campaigns: [],
        templates: {
            admin:  [],
            client: [],
            sms:    [],
        },
    };
    countContactType = function () {
        var count = 0;
        for(var i = 0; i<$scope.contactTypes.length; i++) {
            if ($scope.contactTypes[i].active == true)
            {
                count++;
            }
        }
        return count;
    }
    
    $scope.isConvertExist = (countContactType() > 1 ? true : false );
        
    checkTemplates = function()
    {
        if ($scope.temp.templates.admin.length == 0) {
            $scope.newFollowupValid = true;
            $scope.waringMessages.push({
                type:   'warning',
                title:   "Warning!",
                content: "<h4 class='note-title'>Warning!</h4>You don't have any email templates. Add a new <a href='" + $rootScope.settings.config.appAdminDir + "configemailtemplates.php'>here</a>.",
            });
        }
    }
    
    // check!

    if(leadTypeData.name){
        var type = $rootScope.convertToCode(leadTypeData.name);
        if(!AclService.can('resources.not_mine') && $scope.mainData.admin_id != $rootScope.currentAdminID || !$rootScope.hasAccess('leads.' + type)) {
            $state.go('dashboard');
            rootScope.$broadcast('AclNoAccess', {rule: 'resources.not_mine'});
            return;
        }
    }

    //sorter
    //sort admins
    function sortBy(alphabet) {
        return function (a, b) {
          const index_a = alphabet.indexOf(a['full'][0]);
          const index_b = alphabet.indexOf(b['full'][0]);

          if (index_a === index_b) {
            if (a['full'] < b['full']) {
              return -1;
            }
            if (a['full'] > b['full']) {
              return 1;
            }
            return 0;
          }
          return index_a - index_b;
        };
      }
    const sorter = sortBy(
        '*!@_.()#^&%-=+01234567989AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpRrSsŚśTtUuWwXxYyZzŹźŻż'
      );
    
    /////////////////////////////
    // Perform actions on initialize these controller
    /////////////////////////////
    // come on give me data from backend
    $http.get($rootScope.settings.config.apiURL + '/helpers/lead/background/all/json', {
        cache: true,
    }).then(function(result) 
    {
        $scope.temp.statuses            = result.data.statuses;
        $scope.temp.departments         = result.data.departments;
        $scope.temp.default_mail        = result.data.default_mail;
        $scope.temp.admins              = result.data.admins;
        $scope.temp.system_email        = result.data.system_email;
        $scope.temp.followupTypes       = result.data.followupTypes;
        $scope.temp.followupStatuses    = result.data.followupStatuses;
        $scope.temp.templates.admin     = result.data.templates.admin;
        $scope.temp.templates.sms       = result.data.templates.sms;
        $scope.temp.templates.client    = result.data.templates.client;
        $scope.temp.campaigns           = result.data.campaigns;
        $scope.temp.labels              = result.data.labels;
        $scope.temp.admins.sort(sorter);
        $scope.temp.adminsUnassign      = result.data.admins;
        $scope.temp.adminsUnassign.push({id:0, full: '-- Unassign'});

        
        $scope.$broadcast('header_gotTmpData');
        checkTemplates();
    });
    
    
    
    
    /**
     * Simple function trigger update 
     * ONE parameter for resource
     * 
     * mainly these are used for manage static fields
     */
    $scope.updateStatic = function(what, data)
    {
        if (what === 'short_description' && data.length > 255) {
            return 'To long description, max length is 255 characters';
        }

        if (what === 'description' && data.length > 1024) {
            return 'To long description, max length is 1024 characters';
        }

        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        // collect params
        var params = {};
        params[what] = data;
        
        // send query
        return $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/updateSingleParam/json', params).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.mainData.updated_at = response.data.updated_at;

            $scope.mainData[what] = data;
            
            if(what == 'type_id') {
                
                name = 'unknown';
                for(i=0; i< $scope.contactTypes.length; i++) {
                    if(parseInt(data) == $scope.contactTypes[i].id) {
                        name = $scope.contactTypes[i].name;
                    }
                }
                
                // show message
                    $scope.addConvertMessages('success', "Success!", 'The contact has been converted to the ' + name.toLowerCase() + ' type successfully');
                }
            
            return true;
        }, function(response) {
            
            if(what == 'type_id') {
                
                
                // show message
                $scope.addConvertMessages('danger', "Error!", error.data.msg ? error.data.msg : error.statusText);
            }
            
            
            // push message to editable (that module handle show this error in form)
            return response.data.msg ? response.data.msg : 'Undefined error';
        });

    };
    
    
    /////////////////////////////
    // Rating Management
    /////////////////////////////
    // show dynamic priority percentage indicator as it changes
    $scope.priorityChangeOnHover = function(value) {
        if(AclService.can('resources.change_priority') && !!!$scope.mainData.deleted_at) {
            $scope.temp.priorityRating = value;
        }
    };
    // recalculate priority percentage value
    $scope.priorityChangeOnLave = function() {
        $scope.temp.priorityRating = $scope.mainData.priority;
    };
    // trigger on init, based on model value
    $scope.priorityChangeOnLave();
    // set up watcher that will keep it updated within backend
    var priorityChangeWacher = $scope.$watch('mainData.priority', function(newVal, oldVal) {
        if(newVal == null && oldVal == null || newVal ==  oldVal) { return;}
        
        $scope.updateStatic('priority', newVal);
        
    });
    // set up watcher that will keep it updated within backend
    var contacTypeChangerWatch = $scope.$watch('mainData.type_id', function(newVal, oldVal) {
        if(newVal == null && oldVal == null || newVal ==  oldVal) { return;}
        $state.reload();
    });
    
    

    /////////////////////////////
    // Status Change
    /////////////////////////////
    var statusChangeWacher = $scope.$watch('mainData.status_id', function(newVal, oldVal) {
        if (newVal !== oldVal) {
            
            for(i=0; i < $scope.temp.statuses.length; i++)
            {
                if($scope.temp.statuses[i].id == newVal) {
                    $scope.mainData.status = $scope.temp.statuses[i];
                    
                    return $scope.updateStatic('status_id', newVal);
                }
            }
        }
    });
    
    
    /////////////////////////////
    // Change Admin
    /////////////////////////////
    var adminChangeWacher = $scope.$watch('mainData.admin_id', function(newVal, oldVal) {
        if (newVal !== oldVal) {
            
            for(i=0; i < $scope.temp.admins.length; i++)
            {
                if($scope.temp.admins[i].id == newVal) {
                    $scope.mainData.admin = $scope.temp.admins[i];
                    
                    return $scope.updateStatic('admin_id', newVal);
                }
            }
        }
    });


    /////////////////////////////
    // Convert this resource to other type
    /////////////////////////////
    $scope.convertToType = function(what) {
        $scope.updateStatic('type_id', what);
    };
    
    
    /////////////////////////////
    // Delete lead, or at least hide
    /////////////////////////////
    $scope.deleteLead = function() {
        
        // triger confirm dialog
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "archive.contact.message" | translate }}</h2>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            // push loading indicator
            $scope.$emit('loadingNotification', {type: 'progress'});

            // send query
            res = $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/softDelete/json');
        
            res.then(function(response) {

                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});

                if(response.data.deleted_at) {
                    $scope.mainData.deleted_at = response.data.deleted_at;
                }

                // and now we should go to another state lets say lead list
                
                // show message
                $scope.addConvertMessages('success', "Success!", response.data.msg);
                
            },function(response) {

                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
                
                // show message
                $scope.addConvertMessages('danger', "Error!", response.data.msg);
                
            });
    
        });
    };
    
    /////////////////////////////
    // restore lead basically remove deleted flag
    /////////////////////////////
    $scope.restoreLead = function() {
        
        // triger confirm dialog
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "restore.contact.message" | translate }}</h2>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            // push loading indicator
            $scope.$emit('loadingNotification', {type: 'progress'});

            // send query
            res = $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/restore/json');
        
            res.then(function(response) {

                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});

                $scope.mainData.deleted_at = null;
                
                // and now we should go to another state lets say lead list
                // show message
                $scope.addConvertMessages('success', "Success!", response.data.msg);
                
            },function(response) {

                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
                

                // show message
                $scope.addConvertMessages('danger', "Error!", response.data.msg);
            });
    
        });
    };
    
    
    $scope.isArchive = function() {
        return ($scope.mainData.deleted_at === null) ? false : true;
    };
    
    
    
    $scope.getMyAdmin = function(onlyid)
    {
        if(onlyid===true) {
            return $rootScope.currentAdminID; 
        }
        
        for(i=0; i < $scope.temp.admins.length; i++)
        {
            if($rootScope.currentAdminID == $scope.temp.admins[i].id) 
            {
                return $scope.temp.admins[i];
            }
        }
        
        return {};
    }
    


    /////////////////////////////
    // CLEANERS
    // when scope will be destroned, to avoid memory leaks
    // clear watchers/timeouts/intervals etc
    /////////////////////////////
    $scope.$on('$destroy', function () {
        // since we use watcher to check if priority has been changed
        priorityChangeWacher();
        statusChangeWacher();
        adminChangeWacher();
    });
    
    /////////////////////////////
    //    
    // Delete 
    /////////////////////////////
    $scope.forceDeleteResource = function(id, name) {
        // triger confirm dialog
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.resource.partMessage" | translate }} <b>' + name + '</b> ?</h2>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            // push loading indicator
            $scope.$emit('loadingNotification', {type: 'progress'});

            // send query
            res = $http.post($rootScope.settings.config.apiURL + '/lead/' + id + '/forceDelete/delete/json');
        
            res.then(function(response) {
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
                $state.go('contacts.list');

            },function(response) {
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    };
        
}]);