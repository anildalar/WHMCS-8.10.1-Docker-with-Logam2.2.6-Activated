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
        'contactsListCtrl',
        ['$rootScope', '$scope', '$stateParams', 'ngDialog', '$q', 'blockUI', '$state', 'tableColumns', '$translate', '$http', 'statesConfig', 'ngDialog', 'cachedListData', 'dynamicType',
function( $rootScope,   $scope,   $stateParams,   ngDialog,   $q,   blockUI,   $state,   tableColumns,   $translate,   $http,   statesConfig,   ngDialog,   cachedListData,   dynamicType)
{
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    $scope.IsItArchive        = statesConfig.IsItArchive;
    $scope.contactTypeID      = dynamicType.id;
    
    $scope.scopeMessages = [];
    $scope.tableColumnsParsed       = [];
    $scope.tableColumnsParsedMapped = [];
    $scope.requestCampaign          = '';
    $scope.selectedLabels = [];
    $scope.selectedAction = {id: 1};

    $scope.massactionAll  = false;
    $scope.showMassAction = false;
    $scope.massaction     = {};
    $scope.currentAdminID  = $rootScope.currentAdminID;
    
    // smart table data containers
    $scope.rawData      = [];
    $scope.displayed    = [];
    $scope.persistName  = 'ContactsTable-'+statesConfig.contactTypeID;
    $scope.country      = [];
    
    
    // containers for some overall stats
    $scope.itemsByPage  = 10;
    $scope.itemsOffset  = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr  = 0;
    $scope.itemsTotal   = 0;
    
    // variables for use by dynamic client filter
    $scope.dummysearchforclient = '';
    $scope.searchedClients      = [];
    
    // blockui
    $scope.leadsTableBlock = blockUI.instances.get('leadsTableBlock');
    // cached data for filters
    
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
    cachedListData.data.admins.sort(sorter);
    
    $scope.cached = {
        admins:     cachedListData.data.admins,
        statuses:   cachedListData.data.statuses,
        campaigns:  cachedListData.data.campaigns,
        labels:     cachedListData.data.labels,
    };
    
    $http.post($rootScope.settings.config.apiURL + '/contacts/getCountres/json', []).then(function(result) 
    {
        $scope.country = result.data.country;
    });

    /////////////////////////////
    //    
    // INITIALIZE THIS
    /////////////////////////////

    localStorage.removeItem($scope.persistName);
    
    
    
    // manipulate to handle global change outside form (isolated scope from smart table module)
    // neat but works :D
    var savedState = JSON.parse(localStorage.getItem($scope.persistName));
    $scope.displayFilters = false;
    if( savedState != null && typeof(savedState) == 'object' ) {
        if(typeof(savedState.search) == 'object') {
            if(typeof(savedState.search.predicateObject) == 'object') 
            {
                if(Object.keys(savedState.search.predicateObject).length > 0 ) {
                    if(typeof(savedState.search.predicateObject.$) != 'undefined' && Object.keys(savedState.search.predicateObject).length == 1) {
                        $scope.displayFilters = false;
                    } else {
                        $scope.displayFilters = true;
                    }
                }
            }
        }
    }

    $scope.findCountry = function(key)
    {
        if (key in $scope.country) {
            return $scope.country[key].name;
        }
        return '';
    }
    
    /**
     * As we got defined contact type and each onte there are diferent columns possible
     * needs to parse it to friendly format
     */
    function parseColumnsData()
    {
        var defaultSort  = true;
        for (var i = 0; i < tableColumns.data.length; i++) 
        {
            tmp = {};
            $scope.tableColumnsParsed[i] = tmp;

            if(typeof tableColumns.data[i].id != 'undefined') {
                tmp             = tableColumns.data[i];
                tmp.fieldType   = 'dynamic';
                tmp.id          = 'field_' + tableColumns.data[i].id;
                tmp.name        = tableColumns.data[i].name;
                tmp.sort        = defaultSort;
            } else {
                tmp.fieldType   = 'static';
                tmp.id          = tableColumns.data[i];
                tmp.name        = tableColumns.data[i];
                tmp.sort        = defaultSort;
            }
            defaultSort = false;
            $scope.tableColumnsParsed[i] = tmp;
        }
        
        $scope.tableColumnsParsedMapped = $scope.tableColumnsParsed.map(function(obj) {
            return obj.id
        });
    }
    parseColumnsData(); // do it only once
    
    

    /////////////////////////////
    //    
    // SMART TABLE
    /////////////////////////////
    
    // stats for pagination and overall
    $scope.updateTotalStats = function(paginationData)
    {
        $scope.itemsTotal   = paginationData.totalItemCount;
        $scope.itemsFirstNr = paginationData.start + 1;
        $scope.itemsLastNr  = $scope.itemsFirstNr + paginationData.number - 1;
        
        if($scope.itemsLastNr > $scope.itemsTotal) {
            $scope.itemsLastNr = $scope.itemsTotal;
        }
    }
    
    
    // obtain data from backend
    $scope.callServer = function callServer(tableState) 
    {
        // start blockui indicator    
        $scope.leadsTableBlock.start();

        var pagination       = tableState.pagination;
        var start            = pagination.start     || 0;    // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number    || 10;   // Number of entries showed per page.

        if ($rootScope.$root.searchContactByPhoneGlobal != undefined) {
            $scope.contactTypeID = 0;
            tableState.search = {
                predicateObject : {}
            };
            tableState.search.predicateObject.phone = $rootScope.$root.searchContactByPhoneGlobal;
            tableState.search.predicateObject.type = 0;
            //$rootScope.$root.searchContactByPhoneGlobal = undefined;
        }
        // addintiona parameters (not related strictly to smart table)
        var params = {
            start:      start,
            number:     number,
            params:     tableState,
            // our app custom params :)
            columns:    $scope.tableColumnsParsedMapped,
            campaign:   $scope.requestCampaign,
            type:       $scope.contactTypeID,
        };
            
        if( $scope.IsItArchive === true) {
            url = $rootScope.settings.config.apiURL + '/contacts/archive/query/json';
        } else {
            url = $rootScope.settings.config.apiURL + '/contacts/table/query/json';
        }
        
        // come on give me data from backend
        $http.post(url, params).then(function(result) 
        {
            if (result.data.total == 1 && $rootScope.$root.searchContactByPhoneGlobal != undefined) {
                $rootScope.$root.searchContactByPhoneGlobal = undefined;
                $state.go('contacts.details.summary', {id:result.data.data[0].id});
            } else {
                // update controller container for data from response
                $scope.displayed = result.data.data;
                $scope.massactionAll = false;
                $scope.showMassAction = false;
                $scope.massaction    = {};
                
                $.each($scope.displayed, function ( key, value ) {
                    $scope.massaction[value.id] = false;
                });
                
                // stop blockui indicator    
                $scope.leadsTableBlock.stop();

                //set the number of pages so the pagination can update
                tableState.pagination.totalItemCount = result.data.total;
                tableState.pagination.numberOfPages  = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);

                // update stats
                $scope.updateTotalStats(tableState.pagination);
                if ($rootScope.$root.searchContactByPhoneGlobal != undefined) {
                    $rootScope.$root.searchContactByPhoneGlobal = undefined;
                }
            }
            

        }, function(error) {
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };
    
    $scope.$watchCollection('massaction', function () {
        var isTrue = false;
        $.each($scope.massaction, function ( key, value ) {
            if (value == true) {
                isTrue = true;
            }
        });
        
        if (isTrue == true) {
            $scope.showMassAction = true;
        } else {
            $scope.showMassAction = false;
        }
    });
    
    $scope.$watch('massactionAll', function () {
        if ($scope.massactionAll) {
            $.each($scope.massaction, function ( key ) {
                $scope.massaction[key] = true;
            });
            $scope.showMassAction = true;
        } else {
            $.each($scope.massaction, function ( key ) {
                $scope.massaction[key] = false;
            });
            $scope.showMassAction = false;
        }
    });
    
    
    /////////////////////////////
    //    
    // SMART TABLE - RENDER CONTENT
    /////////////////////////////
    
    
    // helper for foreach
    $scope.getRowData = function(row, column) {
        return row[column.id];
    }
    
    // specific for status
    $scope.getStatusLabel = function($statusID)
    {
        for(i=0; i < $scope.cached.statuses.length; i++) {
            if($statusID == $scope.cached.statuses[i].id) {
                return '<span class="label" style="background-color: ' + $scope.cached.statuses[i].color + ';">' + $scope.cached.statuses[i].name + '</span>';
            }
        }
    }
    
    // specific for status
    $scope.getLabelItems = function(labelsIds)
    {
        $string = '';
        labelsIds = JSON.parse("[" + labelsIds + "]");
        for(i=0; i < labelsIds.length; i++) {
            for(j=0; j < $scope.cached.labels.length; j++) {
                if(labelsIds[i] == $scope.cached.labels[j].id) {
                    $string += '<span class="label" style="background-color: #' + $scope.cached.labels[j].color + '; color:' + $scope.cached.labels[j].labelColor + ';">' + $scope.cached.labels[j].name + '</span>';
                }
            }
        }
        
        return $string;
    }
    
    
    
    /////////////////////////////
    //    
    // SMART TABLE - DYNAMIC FILTER FOR ASSIGNED CLIENT
    /////////////////////////////

    // ajax select client For Select
    $scope.refreshClietns =  function(query) 
    {
        // just skip on init ot when there is nothing in form
        if(query == '') return true;
        // obtain clientsfrom backend
        res = $http.post($rootScope.settings.config.apiURL + '/helpers/select/clients/json', {
            query: query
        });
        // when we recieve it update results container
        res.then(function(data) {
            $scope.searchedClients = data.data.results;
        });
    };
  
    // just focus client selector
    $scope.setFocusClient = function() {
        $scope.$broadcast('setFocusClient');
    };
    
    // kinda hack to force reload table once client has been changed
    $scope.ForceUpdateSearchForClient = function() {
        angular.element('#awesome-hiddenc-lient-search').trigger('input');
    };
    
    
    
    
    /////////////////////////////
    //    
    // Delete  > move to trashed .-.-
    /////////////////////////////
    $scope.deleteResource = function(id) {
        // triger confirm dialog
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "archive.record.message" | translate }}</h2>\
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
            res = $http.post($rootScope.settings.config.apiURL + '/lead/' + id + '/softDelete/json');
        
            res.then(function(response) {
                
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);
            },function(response) {
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    };
    
    /////////////////////////////
    //    
    // Delete  > move to trashed .-.-
    /////////////////////////////
    $scope.forceDeleteResource = function(id) {
        // triger confirm dialog
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.record.message" | translate }}</h2>\
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
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);
            },function(response) {
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    };
    
    
    /////////////////////////////
    //    
    // restore lead basically remove deleted flag
    /////////////////////////////
    $scope.restoreResource = function(id)
    {
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
            res = $http.post($rootScope.settings.config.apiURL + '/lead/' + id + '/restore/json');

            res.then(function(response) {
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});

                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);
            },function(response) {

                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
        });
    };

    
    
    
    /////////////////////////////
    //    
    // CONVERTER RECORDS TO OTHER TYPE
    /////////////////////////////


    /////////////////////////////
    // Convert this resource to other type
    /////////////////////////////
    $scope.convertToType = function(id, what) {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        var params = {
            type_id: what
        };
        
        // send query
        return $http.post($rootScope.settings.config.apiURL + '/lead/' + id + '/updateSingleParam/json', params).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            angular.element('#main-table-global-search').trigger('input');
            addMassege(response.data.status, response.data.msg);
            return true;
        }, function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});           
        });
        
        
    };
    
    
    /////////////////////////////
    //    
    // set up watcher that will keep it updated within backend
    /////////////////////////////
    var campaignChangerWatcher = $scope.$watch('requestCampaign', function(newVal, oldVal) {
        if(newVal == null && oldVal == null || newVal ==  oldVal) { return;}
        
        $scope.ForceUpdateSearchForClient();
        
    });
    
    
    /////////////////////////////
    // CLEANERS
    // when scope will be destroned, to avoid memory leaks
    // clear watchers/timeouts/intervals etc
    /////////////////////////////
    $scope.$on('$destroy', function () {
        // since we use watcher to check if priority has been changed
        campaignChangerWatcher();
    });
    
    
    $scope.clicktest = function(yyy) {
        $state.transitionTo('contacts.list', {contactTypeID: yyy}, {location:false, notify: true});
    };
    
    
    /////////////////////////////
    //    
    // MASSACTION _+_+_+_
    /////////////////////////////
    
    addMassege = function (status, massage) {
        $scope.scopeMessages.push({
            type:    status,
            title:   status == 'success' ? "Success!" : "Error!",
            content: massage
        });
    }
    
    getMassIds = function () {
        var ids = [];
        $.each($scope.massaction, function (id, status) {
            if (status) {
                ids.push(id);
            }
        });
        
        return ids;
    }
    
    $scope.changePriority = function(id) {
                
        var params = {
            id: id,
            resourceIds: getMassIds()
        };
        $scope.$emit('loadingNotification', {type: 'progress'});
        res = $http.post($rootScope.settings.config.apiURL + '/contacts/change/priority/json', params);

        res.then(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            angular.element('#main-table-global-search').trigger('input');
            addMassege(response.data.status, response.data.msg);

        },function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
        });
    };
    
    $scope.removeToConfirm = function(id, name) {
        
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "change.contactType.title" | translate }}</h2>\
                <p>{{ "convert.contact.partMessage" | translate }} <b>' + name + '</b> ?</p>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            var params = {
                id: id,
                resourceIds: getMassIds()
            };
            $scope.$emit('loadingNotification', {type: 'progress'});
            res = $http.post($rootScope.settings.config.apiURL + '/contacts/change/type/json', params);
        
            res.then(function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);

            },function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    };
    
    $scope.changeStatusTo = function(id) {
        
        var params = {
            id: id,
            resourceIds: getMassIds()
        };
        $scope.$emit('loadingNotification', {type: 'progress'});
        res = $http.post($rootScope.settings.config.apiURL + '/contacts/change/status/json', params);

        res.then(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);

        },function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
        });
    };
    
    $scope.deleteClients = function() {
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.clients.title" | translate }}</h2>\
                <p>{{ "delete.clients.message" | translate }}</p>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            var params = {
                resourceIds: getMassIds()
            };
            $scope.$emit('loadingNotification', {type: 'progress'});
            res = $http.post($rootScope.settings.config.apiURL + '/lead/forceDelete/json', params);
        
            res.then(function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);

            },function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    };
    
    $scope.assignToConfirm = function(id, fullName) {
        
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "assign.admin.title" | translate }}</h2>\
                <p>{{ "change.admin.partMessage" | translate }} <b>' + fullName + '</b> ?</p>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            var params = {
                id: id,
                resourceIds: getMassIds()
            };
            $scope.$emit('loadingNotification', {type: 'progress'});
            res = $http.post($rootScope.settings.config.apiURL + '/contacts/assign/admin/json', params);
        
            res.then(function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);

            },function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    };
    
    $scope.rescheduleConfirm = function() {
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/contacts/list/modals/reschedule.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {
                massaction:  getMassIds(),
                usedatatime: !$rootScope.settings.config.app.followups_per_day
            },
            controller: ['$scope', '$rootScope', '$http', function($scope, $rootScope, $http) {
                
                $scope.reschedue = {};
                $scope.withDataOpen = false;
                $scope.dataOpen = false;
                // global for datapicker
                $scope.datapicker = {
                    options: {
                        showWeeks: false,
                        startingDay: $rootScope.settings.config.app.defaultWeekDay
                    }
                };
                updateData = function () {
                    $scope.reschedue = {
                        ids: $scope.ngDialogData.massaction,
                        withData: new Date(),
                        date: new Date()
                    };
                }
                updateData();

                if($scope.ngDialogData.usedatatime === true) {
                    $scope.datapicker.format = 'yyyy-MM-dd HH:mm';
                    $scope.datapicker.enabletime = true;
                } else {
                    $scope.datapicker.format = 'yyyy-MM-dd';
                    $scope.datapicker.enabletime = false;
                }
                
                
                $scope.FormSubmit = function()
                {
                    $scope.$emit('loadingNotification', {type: 'progress'});
                    
                    var params = $scope.reschedue;
                    params.withData = moment(moment(params.withData).format('YYYY-MM-DD')).format('X');
                    params.date = moment(params.date).format();
                    updateData();
                    $http.post($rootScope.settings.config.apiURL + '/contacts/reschedule/json', params).then(function(result) {

                        $scope.$emit('loadingNotification', {type: 'finished'}); 
                        addMassege(result.data.status, result.data.msg);                                               
                    }).finally(function() {
                        $scope.closeThisDialog(0);
                        angular.element('#main-table-global-search').trigger('input');
                    });
                };
            }]
        });
    };
    
    $scope.rescheduleOnAdminConfirm = function() {
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/contacts/list/modals/rescheduleOnAdmin.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {
                massaction:  getMassIds(),
                usedatatime: !$rootScope.settings.config.app.followups_per_day,
                admins: $scope.cached.admins
            },
            controller: ['$scope', '$rootScope', '$http', function($scope, $rootScope, $http) {
                
                $scope.reschedue = {};
                $scope.adminList = $scope.ngDialogData.admins;
                $scope.dataOpen = false;
                // global for datapicker
                $scope.datapicker = {
                    options: {
                        showWeeks: false,
                        startingDay: $rootScope.settings.config.app.defaultWeekDay
                    }
                };

                updateData = function () {
                    $scope.reschedue = {
                        ids: $scope.ngDialogData.massaction,
                        withAdmin: {},
                        withData: new Date(),
                        date: new Date()
                    };
                    if ($scope.adminList.length > 0) {
                        $scope.reschedue.withAdmin = $scope.adminList[0];
                    }
                }
                updateData();

                if($scope.ngDialogData.usedatatime === true) {
                    $scope.datapicker.format = 'yyyy-MM-dd HH:mm';
                    $scope.datapicker.enabletime = true;
                } else {
                    $scope.datapicker.format = 'yyyy-MM-dd';
                    $scope.datapicker.enabletime = false;
                }
                
                
                $scope.FormSubmit = function()
                {
                    $scope.$emit('loadingNotification', {type: 'progress'});
                    
                    var params = $scope.reschedue;               
                    params.withData = moment(moment(params.withData).format('YYYY-MM-DD')).format('X');
                    params.date = moment(params.date).format();
                    updateData();
                    $http.post($rootScope.settings.config.apiURL + '/contacts/reschedule/on/admin/json', params).then(function(result) {

                        $scope.$emit('loadingNotification', {type: 'finished'});
                        addMassege(result.data.status, result.data.msg);                                                  
                    }).finally(function() {
                        $scope.closeThisDialog(0);
                        angular.element('#main-table-global-search').trigger('input');
                        
                    });
                };
            }]
        });
    };
    
    $scope.moveToArchiveClients = function () {
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "archive.clients.title" | translate }}</h2>\
                <p>{{ "archive.clients.message" | translate }}</p>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            var params = {
                resourceIds: getMassIds()
            };
            $scope.$emit('loadingNotification', {type: 'progress'});
            res = $http.post($rootScope.settings.config.apiURL + '/lead/moveToArchiveClients/json', params);
        
            res.then(function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);

            },function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    }
    
    $scope.restoreFromArchiveClients = function () {
        ngDialog.openConfirm({
            template:'\
                <h2>{{ "restore.clients.title" | translate }}</h2>\
                <p>{{ "restore.clients.message" | translate }}</p>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            
            var params = {
                resourceIds: getMassIds()
            };
            $scope.$emit('loadingNotification', {type: 'progress'});
            res = $http.post($rootScope.settings.config.apiURL + '/lead/restoreFromArchiveClients/json', params);
        
            res.then(function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                angular.element('#main-table-global-search').trigger('input');
                addMassege(response.data.status, response.data.msg);

            },function(response) {
                $scope.$emit('loadingNotification', {type: 'finished'});
            });
    
        });
    }
        
        
    $scope.invertColor = function (hex) {
        if (hex.indexOf('#') === 0) {
            hex = hex.slice(1);
        }
        // convert 3-digit hex to 6-digits.
        if (hex.length === 3) {
            hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
        }
        if (hex.length !== 6) {
            return '#000000';
        }
        // invert color components
        var r = (255 - parseInt(hex.slice(0, 2), 16)).toString(16);
        var g = (255 - parseInt(hex.slice(2, 4), 16)).toString(16);
        var b = (255 - parseInt(hex.slice(4, 6), 16)).toString(16);
        // pad each with zeros and return
        return '#' + $scope.padZero(r) + $scope.padZero(g) + $scope.padZero(b);
    }

    $scope.padZero = function (str, len) {
        len = len || 2;
        var zeros = new Array(len).join('0');
        return (zeros + str).slice(-len);
    }

    $scope.massReassignLabels = function() {
        $scope.modal = ngDialog.open({
            template: $rootScope.settings.config.rootDir + '/app/contacts/list/modals/changeLabel.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {
                massaction: getMassIds(),
                labels: $scope.cached.labels
            },
            controller: ['$scope', '$rootScope', '$http', function($scope, $rootScope, $http) {

                $scope.labelLists = $scope.ngDialogData.labels;

                $scope.actionLists = [
                    {id: 1, name: ''},
                    {id: 2, name: ''},
                    {id: 3, name: ''}
                ];

                $translate('resource.text.massaction.changeLabel.add').then(t => {
                    $scope.actionLists[0].name = t;
                })

                $translate('resource.text.massaction.changeLabel.change').then(t => {
                    $scope.actionLists[1].name = t;
                })

                $translate('resource.text.massaction.changeLabel.remove').then(t => {
                    $scope.actionLists[2].name = t;
                })

                $scope.selectedAction = $scope.actionLists[0];
                $scope.FormSubmit = () => {
                    $scope.$emit('loadingNotification', {type: 'progress'});

                    if ($scope.selectedLabels === undefined
                        && ($scope.selectedAction.id === 1 || $scope.selectedAction.id === 3 )) return;

                    const params = {
                        massAction: getMassIds(),
                        selectedLabels: $scope.selectedLabels,
                        action: $scope.selectedAction
                    };

                    $http
                        .post($rootScope.settings.config.apiURL + '/contacts/reassign/labels/json', params)
                        .then(result => {
                            addMassege(result.data.status, result.data.msg);
                            $scope.$emit('loadingNotification', {type: 'finished'});
                        })
                        .finally(() => {
                            $scope.closeThisDialog(0);
                            angular.element('#main-table-global-search').trigger('input');
                        });
                }
            }]
        })
    }
}]);