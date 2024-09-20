/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



angular.module("mgCRMapp").controller(
        'leadFollowupController',
        ['$rootScope', '$scope', '$state', '$stateParams', 'followupService', '$http', 'blockUI', 'ngDialog',
function( $rootScope,   $scope,   $state,   $stateParams,   followupService,   $http,   blockUI,   ngDialog)
{
    $scope.newFormVisible = true; // lets say on init :d
    
    // model container for new followup
    $scope.newFollowup = new followupService;
    // settings from resolve
    $scope.settings    = {};
    $scope.settings.datapicker    = {};
    $scope.scopeMessages = [];
    $scope.waringMessages = [];
    $scope.convertToInt = function(id)
    {         
        return parseInt(id, 10);     
    };
    $scope.formData = {
        departments: [],
        admins: [],
        templates: {
            admin: [],
            client: [],
            sms: [],
        },
        followup: {
            types: [],
        },
    };
    $scope.newFollowupContainer = blockUI.instances.get('newFollowupContainer');
    
    $scope.followupDataOpen = false;
    
    $scope.closeNote = function()
    {
        $scope.newFollowupResult.done = false;
    }
    
    // parse some initial info to use in form after
    parseSettings = function(){
        $scope.settings.usedatatime         = !$rootScope.settings.config.app.followups_per_day;
        $scope.settings.showAdminReminers   = true;
        $scope.settings.showClientReminers  = false;
        $scope.settings.sms                 = $rootScope.settings.config.integrations.sms_center;
        
        $scope.settings.admins          = ['Awesome Admin', 'John Travolta', 'Albert Surykatka'];
        $scope.settings.types           = ['conference', 'meeting', 'reminder to contect', 'call'];
        $scope.settings.templates       = ['#45 Followup Reminder - create', '#47 Followup Reminder - date', '#49 Followup Reminder - before'];
        $scope.settings.smstemplates    = ['#50 SMS Reminder - create', '#51 SMS Reminder - date', '#52 SMS Reminder - before'];
        
        $scope.settings.beforeOptions   = [
            {key: 'minutes', name:'Minutes'}, 
            {key: 'hours', name:'Hours'}, 
            {key: 'days', name:'Days'}
        ];
    
    };
    parseSettings(); // trigger on init
    
    //
    setUpForm = function()
    {
        // global for datapicker
        $scope.settings.datapicker.options = {
            showWeeks: false,
            startingDay: $rootScope.settings.config.app.defaultWeekDay
        };
        
        if($scope.settings.usedatatime === true) {
            $scope.settings.datapicker.format = 'yyyy-MM-dd HH:mm';
            $scope.settings.datapicker.enabletime = true;
            $scope.newFollowup.date  = moment(new Date()).toDate();
            
            
        } else {
            $scope.settings.datapicker.format = 'yyyy-MM-dd';
            $scope.settings.datapicker.enabletime = false;
            $scope.newFollowup.date = moment([]).format("YYYY-MM-DD");
        }
        

        if($scope.formData.templates.admin.length > 0) {
            firstAdminTpl = $scope.convertToInt($scope.formData.templates.admin[0].id);
        } else {
            firstAdminTpl = null;
        }
        if($scope.formData.templates.client.length > 0) {
            firstClietnTpl = $scope.convertToInt($scope.formData.templates.client[0].id);
        } else {
            firstClietnTpl = null;
        }
        if($scope.formData.templates.sms.length > 0) {
            firstSmsTpl = $scope.convertToInt($scope.formData.templates.sms[0].id);
        } else {
            firstSmsTpl = null;
        }
        $scope.newFollowup.description = "";
        $scope.newFollowup.admin = $rootScope.currentAdminID;
        
        if($scope.formData.followup.types.length > 0) {
            $scope.newFollowup.type = $scope.convertToInt($scope.formData.followup.types[0].id);
        }

        if($scope.formData.followup.statuses.length > 0) {
            $scope.newFollowup.status = $scope.convertToInt($scope.formData.followup.statuses[0].id);
        }
        
        $scope.newFollowup.admin_reminders = {
                on_create: {
                    email: {
                        enable: true,
                        admin: $rootScope.currentAdminID,
                        template: firstAdminTpl,
                        cc:  null,
                        bcc:  null,
                        reply:   $rootScope.currentAdminID,
                    },
                    sms: {
                        enable: false,
                        template: firstAdminTpl,
                        admin: $rootScope.currentAdminID,
                    },
                },
                for_date: {
                    email: {
                        enable: true,
                        admin: $rootScope.currentAdminID,
                        template: firstAdminTpl,
                        cc:  null,
                        bcc:  null,
                        reply:   $rootScope.currentAdminID,
                    },
                    sms: {
                        enable: false,
                        template: firstAdminTpl,
                        admin: $rootScope.currentAdminID,
                    },
                },
                before_date: {
                    email: {
                        enable: true,
                        admin: $rootScope.currentAdminID,
                        before: $scope.settings.beforeOptions[0].key,
                        template: firstAdminTpl,
                        amount: 5,
                    },
                    sms: {
                        enable: false,
                        admin: $rootScope.currentAdminID,
                        template: firstAdminTpl,
                        before: $scope.settings.beforeOptions[0].key,
                        amount: 5,
                    },
                },
            };
        $scope.newFollowup.client_reminders = {
                on_create: {
                    email: {
                        enable: true,
                        template: firstClietnTpl,
                        cc:  null,
                        bcc:  null,
                        reply:   $rootScope.currentAdminID,
                    },
                    sms: {
                        enable: false,
                        template: firstClietnTpl,
                    },
                },
                for_date: {
                    email: {
                        enable: true,
                        template: firstClietnTpl,
                        cc:  null,
                        bcc:  null,
                        reply:   $rootScope.currentAdminID,
                    },
                    sms: {
                        enable: false,
                        template: firstClietnTpl,
                    },
                },
                before_date: {
                    email: {
                        enable: true,
                        before: $scope.settings.beforeOptions[0].key,
                        template: firstClietnTpl,
                        amount: 5,
                    },
                    sms: {
                        enable: false,
                        before: $scope.settings.beforeOptions[0].key,
                        template: firstClietnTpl,
                        amount: 5,
                    },
                },
            };
        
        

    };
//    setUpForm(); // trigger on init
    $scope.submitted = false;
    
    $scope.formData = {
        departments: [],
        admins: [],
        followup: {
            types: [],
        },
        templates: {
            admin: [],
            client: [],
            sms: [],
        },
    };
    getDataForFormsInBackground = function()
    {
        
        // come on give me data from backend
        $http.get($rootScope.settings.config.apiURL + '/helpers/lead/background/followups/json', {
            cache: true,
        }).then(function(result) 
        {
            $scope.formData.departments         = result.data.departments;
            $scope.formData.admins              = result.data.admins;
            $scope.formData.followup.types      = result.data.followup.types;
            $scope.formData.followup.statuses   = result.data.followup.statuses;
            $scope.formData.templates.admin     = result.data.templates.admin;
            $scope.formData.templates.sms       = result.data.templates.sms;
            $scope.formData.templates.client    = result.data.templates.client;
            checkTemplates();
            setUpForm();
            
//            if($scope.formData.departments.length) {
//                $scope.modelSentEmail.from      = $scope.formData.departments[0].id;
//            }
        });
    };
    getDataForFormsInBackground();
    
    checkTemplates = function()
    {
        if ($scope.formData.templates.admin.length == 0) {
            $scope.waringMessages.push({
                type:   'warning',
                title:   "Warning!",
                content: "<h4 class='note-title'>Warning!</h4>You don't have any email templates. Add a new <a href='" + $rootScope.settings.config.appAdminDir + "configemailtemplates.php'>here</a>.",
            });
        } else {
            $scope.waringMessages = [];
        }
    }
    
    $scope.newFollowupResult = {};
    // trigger on submit
    $scope.newFollowupFormSubmit = function ()
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        $scope.newFollowupContainer.start();
        
        if($scope.newFollowup.date == null) {
            $scope.newFollowup.date = moment().format($scope.settings.datapicker.format.toUpperCase());
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newFollowupContainer.stop();
            $scope.scopeMessages.push({
                type:   'warning',
                title:   "Warning!",
                content: 'Please, Correct date (etc. "2017-12-21 23:59", "2017-12-21", "2017-12-21 00:01")',
            });
            return ;
        }
        // send query
        res = $scope.newFollowup.$save({resource_id: $stateParams.id}).then(function(response) 
        {
            $scope.newFollowupResult.error  = false;
            
            // triger refresh smart table
            $('#followups-table-search').trigger('input');
            
            $scope.newFollowup = new followupService;
            setUpForm();
        }, function(response) {
            $scope.newFollowupResult.error  = response.data.msg;
        }).finally(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newFollowupContainer.stop();
            
            $scope.newFollowupResult.done   = true;
            
            $timeout(function() {
                $scope.newFollowupResult.done   = false;
            }, 8000);
            
        });
    };

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
        var tableState = {};
        var pagination = {};
        var isSuccess = false;
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
                for(i=0; i < $scope.displayed.length; i++) 
                {
                    if($scope.displayed[i].id == followup.id) {
                        $scope.displayed.splice(i, 1);
                    }
                }
                // update pages
                pagination = {
                    number: $scope.itemsByPage,
                    nomberOfPages: Math.ceil(($scope.itemsTotal - 1) / $scope.itemsByPage),
                    start: ($scope.itemsFirstNr -1 == $scope.itemsTotal - 1 && ($scope.itemsTotal - 1) % $scope.itemsByPage == 0) ? $scope.itemsFirstNr -1 - $scope.itemsByPage : $scope.itemsFirstNr - 1 ,
                    totalItemCount: $scope.itemsTotal - 1
                };
            
                tableState = {
                    pagination: pagination,
                    search: {},
                    sort: {}
                };
                if ($scope.itemsFirstNr -1 != $scope.itemsTotal - 1) {
                    $scope.callServer(tableState);
                } else {
                    isSuccess = true;
                }
                $scope.$emit('loadingNotification', {type: 'finished'});
                
                // show message just in case
                $scope.scopeMessages.push({
                    type:    'success',
                    title:   "Success!",
                    content:  'The follow-up has been deleted successfully',
                });
                
            }, function(error) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                // show message just in case
                $scope.scopeMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: error.data.msg ? error.data.msg : error.statusText,
                });
            }).finally(function(response) {
                if (isSuccess) {
                    // triger refresh smart table
                    $('#followups-table-search').trigger('input');
                }
            });
//                
    
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
                followup:    followup,
                admins:      $scope.$parent.admins,
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
                        
                        
//                        $rootScope.$broadcast('followupMessageShow');
                        
                    }).finally(function() {
                        $scope.closeThisDialog(0);
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
}]);
