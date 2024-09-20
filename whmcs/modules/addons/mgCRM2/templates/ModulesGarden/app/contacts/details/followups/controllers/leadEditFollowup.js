/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



angular.module("mgCRMapp").controller(
        'leadEditFollowupController',
        ['$scope', '$rootScope', '$state', '$stateParams', 'blockUI', 'ngDialog', '$http', 'singleFollowuprderService', 'singleReminderService',
function( $scope,   $rootScope,   $state,   $stateParams,   blockUI,   ngDialog,   $http,   singleFollowuprderService,   singleReminderService)
{
    
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    
    // just contain single model to push it as create new roles
    $scope.followup                 = {};
    // just for messages
    $scope.scopeMessages            = [];
    $scope.followupDetailsVisible   = true;
    $scope.remindersVisible         = true;
    $scope.isSms                    = $rootScope.settings.config.integrations.sms_center;

    // Get the reference to the block service.
    $scope.followupEditForm         = blockUI.instances.get('followupEditForm');
    $scope.followupReminders        = blockUI.instances.get('followupReminders');

    // container for reminders
    $scope.reminders                = [];
    
    // settings from resolve
    $scope.settings    = {};
    $scope.settings.datapicker    = {};
    $scope.followupDataOpen = false;
    
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
            statuses: [],
        },
    };
    

    /////////////////////////////
    //    
    // GET Followup TO EDIT
    /////////////////////////////
    
    // parse some initial info to use in form after
    parseSettings = function(){
        $scope.settings.usedatatime         = !$rootScope.settings.config.app.followups_per_day;
        $scope.settings.showAdminReminers   = true;
        $scope.settings.showClientReminers  = false;
        $scope.settings.sms                 = true;
        
        $scope.settings.beforeOptions   = [{key: 'minutes', name:'Minutes'}, {key: 'hours', name:'Hours'}, {key: 'days', name:'Days'}];
    
    
        // global for datapicker
        $scope.settings.datapicker.options = {
            showWeeks: false,
            startingDay: $rootScope.settings.config.app.defaultWeekDay
        };
        
        if($scope.settings.usedatatime === true) {
            $scope.settings.datapicker.format = 'yyyy-MM-dd HH:mm';
            $scope.settings.datapicker.enabletime = true;
            
            
        } else {
            $scope.settings.datapicker.format = 'yyyy-MM-dd';
            $scope.settings.datapicker.enabletime = false;
        }
    
    };
    parseSettings(); // trigger on init
    
    
    $scope.followup = singleFollowuprderService.get({id:$stateParams.followupID, resource_id: $stateParams.id});
    // when we recieve it
    $scope.followup.$promise.then(function(data) {
        
    }, function(error) {
        // show message
        $scope.scopeMessages.push({
            type:   'danger',
            title:   "Error!",
            content: error.data.msg ? error.data.msg : error.statusText,
        });
    }).finally(function(response) {
        // maybe do sth on init
        // 
        // trigger on initialize
        $scope.reminderFormReset();
        $scope.followup.updateReminders = true;
        if (!$scope.settings.usedatatime) {
            $scope.followup.date = moment($scope.followup.date).format('YYYY-MM-DD');
        }
    });
    
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
            $scope.formData.followup.statuses      = result.data.followup.statuses;
            $scope.formData.templates.admin     = result.data.templates.admin;
            $scope.formData.templates.sms       = result.data.templates.sms;
            $scope.formData.templates.client    = result.data.templates.client;
            $scope.reminderFormReset();
        });

    };
    getDataForFormsInBackground();
    
    // trigger on submit
    $scope.editFollowupFormSubmit = function ()
    {
        // Start blocking
        $scope.followupEditForm.start();
        
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        $scope.newFormWorking = true;
        //$scope.followup.date = moment($scope.followup.date).format('YYYY-MM-DD hh:mm');
        if($scope.followup.date == null) {
            $scope.followup.date = moment().format($scope.settings.datapicker.format.toUpperCase());
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.followupEditForm.stop();
            $scope.scopeMessages.push({
                type:   'warning',
                title:   "Warning!",
                content: 'Please, Correct date (etc. "2017-12-21 23:59", "2017-12-21", "2017-12-21 00:01")',
            });
            return ;
        }
        // send query
        res = $scope.followup.$save().then(function(response) 
        {
            $scope.followup = response;
            
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.followupEditForm.stop();
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: 'The follow-up has been updated successfully',
            });
            
            
        }, function(response) {
            // push message to editable (that module handle show this error in form)
            return response.data.msg ? response.data.msg : 'error occured';
        });
    };
    
    
    /////////////////////////////
    //    
    // ADD NEW GROUP
    /////////////////////////////
    
    $scope.newReminder = new singleReminderService;
    
    $scope.reminderTable = blockUI.instances.get('reminderTable');
    
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

    $scope.callServer = function (tableState) 
    {
        // start blockui indicator    
        $scope.reminderTable.start();


        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
            

        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/followups/' + $stateParams.followupID + '/reminders/list/json', params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.reminderTable.stop();
              
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
        
    // show modal with new reminder form
    $scope.triggerAddReminderModal = function () {
    
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/contacts/details/followups/templates/modals/addReminder.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            scope: $scope
        });
    };
    
    
    $scope.formSubmitNewBlock   = blockUI.instances.get('formSubmitNewBlock');
    // submit new reminder form
    $scope.remindersubmitted = false;
    $scope.subnutNewReminder = function() 
    {
        $scope.formSubmitDone = false;
        
        // Start blocking
        $scope.formSubmitNewBlock.start();
        
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
//        $scope.newFormWorking = true;
        
        // send query
        res = $scope.newReminder.$save().then(function(response) 
        {
            
            $scope.formSubmitNewBlock.stop();
            $scope.newReminder = new singleReminderService;
            $scope.formSubmitDone = true;
            $scope.remindersubmitted = false;

            $scope.reminderform.$dirty = false;
            $scope.reminderform.$pristine = true;
            $scope.reminderform.$submitted = false;
            
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            $('#reminder-table-search').trigger('input');
            
            // show message just in case
//            $scope.scopeMessages.push({
//                type:   'success',
//                title:   "Success!",
//                content: 'New Reminder-up has been created',
//            });
            
            // trigger on initialize
            $scope.reminderFormReset();
            
        }, function(response) {
            
            $scope.formSubmitNewBlock.stop();
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : 'error occured',
            });
        });
    };
    
    $scope.$watch('newReminder.for',function () {
        if ($scope.newReminder.for == 'client') {
            if ($scope.formData.templates.client.length > 0) {
                $scope.newReminder.template_id = $scope.convertToInt($scope.formData.templates.client[0].id);
            }
        } else if ($scope.newReminder.for == 'admin') {
            if ($scope.formData.templates.admin.length > 0) {
                $scope.newReminder.template_id = $scope.convertToInt($scope.formData.templates.admin[0].id);
            }
        }
    });
    
    // reset new reminder data
    $scope.reminderFormReset = function() {
        $scope.newReminder.resource_id = $scope.followup.resource_id;
        $scope.newReminder.followup_id = $scope.followup.id;
        $scope.newReminder.date = moment(new Date()).format();
        
        if ($scope.formData.admins.length > 0) {
            $scope.newReminder.email = {};
            $scope.newReminder.email.reply = $scope.convertToInt($scope.formData.admins[0].id);
            $scope.newReminder.target_id = $scope.convertToInt($scope.formData.admins[0].id);
        }
    };

    
    $scope.triggerReminderEdit = function($index)
    {
        $scope.editableReminder = new singleReminderService;
        $.each($scope.displayed[$index], function (name, value) {
            $scope.editableReminder[name] = value;
        });
        
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/contacts/details/followups/templates/modals/editReminder.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            scope: $scope
        });
    };
    
    $scope.submitEditReminder = function()
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        // send query
        res = $scope.editableReminder.$save({resource_id: $scope.followup.resource_id}).then(function(response) 
        {
            
            $scope.editableReminder      = {};
            $('#reminder-table-search').trigger('input');
            $scope.modal.close(0);

            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});

            // show message just in case
            $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: 'Reminder has been updated',
            });
            
            // trigger on initialize
            $scope.reminderFormReset();
            
        }, function(response) {
            $scope.modal.close(0);
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : 'error occured',
            });
        });
    };
    
    
    /**
     * for delete followup
     */
    $scope.triggerReminderDelete = function(reminder)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.reminder.message" | translate }}</h2>\
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
            $http.post($rootScope.settings.config.apiURL + '/lead/'+ reminder.followup.resource_id +'/followups/'+ reminder.followup.id +'/reminders/'+ reminder.id +'/delete/json', {
                cache: false,
                isArray: true
            }).then(function(result) 
            {
                
                $scope.$emit('loadingNotification', {type: 'finished'});
                $('#reminder-table-search').trigger('input');
                
                // show message just in case
                $scope.scopeMessages.push({
                    type:    'success',
                    title:   "Success!",
                    content:  'Reminder has been deleted',
                });
                
            }, function(error) {
                $scope.$emit('loadingNotification', {type: 'finished'});
                // show message just in case
                $scope.scopeMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: error.data.msg ? error.data.msg : error.statusText,
                });
            });
//                
    
        });
    }
    
}]);