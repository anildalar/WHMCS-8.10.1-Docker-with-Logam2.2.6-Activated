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
        'detailsSummaryFollowupsCtrl',
        ['$rootScope', '$scope', '$state', '$stateParams', '$http', 'blockUI', 'ngDialog',
function( $rootScope,   $scope,   $state,   $stateParams,   $http,   blockUI,   ngDialog)
{
    
    
    
    $scope.followupsTable = blockUI.instances.get('followupsTable');
    
    $scope.displayFilters = false;
    $scope.rawData   = [];
    $scope.displayed = [];
    
    
    // containers for some overall stats
    $scope.itemsByPage = 10;
    $scope.itemsOffset = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr = 0;
    $scope.itemsTotal = 0;
    $scope.scopeMessages = [];
    
    $scope.updateTotalStats = function(paginationData)
    {
        $scope.itemsTotal   = paginationData.totalItemCount;
        $scope.itemsFirstNr = paginationData.start + 1;
        $scope.itemsLastNr  = $scope.itemsFirstNr + paginationData.number - 1;
        if($scope.itemsLastNr > $scope.itemsTotal) {
            $scope.itemsLastNr = $scope.itemsTotal;
        }
    }

    $scope.callServer = function callServer(tableState) 
    {
        // start blockui indicator    
        $scope.followupsTable.start();


        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
            

        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/followups/getForTable/json', params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.followupsTable.stop();
              
            //set the number of pages so the pagination can update
            tableState.pagination.totalItemCount = result.data.total;
            tableState.pagination.numberOfPages  = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);
              
            $scope.updateTotalStats(tableState.pagination);

        }, function(error) {
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });

        // helper for foreach
        $scope.getRowData = function(row, column) {
            return row[column.id];
        }
        
    };
    
    
    
    // show remidners
    $scope.showRemindersForFollowup = function($followup)
    {
        ngDialog.open({
            template: $rootScope.settings.config.rootDir + '/app/contacts/details/followups/templates/modals/reminders.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {followup: $followup}
        });
    };
    
    /**
     * for delete followup
     */
    $scope.triggerDeleteFollowup = function(followup)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.followup.message" | translate }}</h2>\
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

            // come on give me data from backend
            $http.post($rootScope.settings.config.apiURL + '/lead/'+ followup.resource_id +'/followups/'+ followup.id +'/delete/json', {
                cache: false,
                isArray: true
            }).then(function(result) 
            {
                
                $scope.$emit('loadingNotification', {type: 'finished'});
                
                // show message just in case
                $scope.scopeMessages.push({
                    type:    'success',
                    title:   "Success!",
                    content:  'The follow-up has been deleted successfully',
                });
                
                // triger refresh smart table
                $('#followups-table-search').trigger('input');
                
            }, function(error) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                // show message just in case
                $scope.scopeMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: error.data.msg ? error.data.msg : error.statusText,
                });
            });
    
        });
    }
    
    
    /**
     * for reschedue
     */
    $scope.triggerFollowupReschedue = function(followup)
    {
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/contacts/details/followups/templates/modals/rescheduleFollowup.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {
                followup: followup,
                admins:   $scope.$parent.admins,
                usedatatime: !$rootScope.settings.config.app.followups_per_day,
            },
            controller: ['$scope', '$rootScope', '$http', '$timeout', function($scope, $rootScope, $http, $timeout) {
                    
                // global for datapicker
                $scope.datapicker = {
                    options: {
                        showWeeks: false,
                        startingDay: $rootScope.settings.config.app.defaultWeekDay
                    }
                };

                if($scope.ngDialogData.usedatatime === true) {
                    $scope.datapicker.format = 'yyyy-MM-dd HH:mm';
                    $scope.datapicker.enabletime = true;
                } else {
                    $scope.datapicker.format = 'yyyy-MM-dd';
                    $scope.datapicker.enabletime = false;
                }
                
                $scope.reschedue = {
                    followup_id: $scope.ngDialogData.followup.id,
                    date: new Date(),
                    updateReminders: true,
                };
            
                $scope.followupReschedueFormSubmit = function()
                {
                    var params = $scope.reschedue;
                    params.date = moment(params.date).format();
                    
                    $http.post($rootScope.settings.config.apiURL + '/lead/'+ $scope.ngDialogData.followup.resource_id +'/followups/'+ $scope.ngDialogData.followup.id +'/reschedue/json', 
                        params
                    ).then(function(result) 
                    {
                        $scope.$emit('loadingNotification', {type: 'finished'});
                        
                    }).finally(function() {
                        $scope.closeThisDialog(0);
                        $rootScope.$broadcast('followupMessageShow');
                    });
                };
                
                $scope.goToFollowEditNow = function()
                {
                    $scope.closeThisDialog(0);
                    
                    $timeout(function() {
                        $scope.$state.go('contacts.details.followup', {id: $scope.ngDialogData.followup.resource_id, followupID: $scope.ngDialogData.followup.id });
                    }, 1000);
                };
            }]
        });
    };
    
    
    $scope.$on('followupMessageShow', function(event) {
        // show message just in case
        $scope.scopeMessages.push({
            type:    'success',
            title:   "Success!",
            content:  'The follow-up has been rescheduled successfully',
        });
    });
}]);