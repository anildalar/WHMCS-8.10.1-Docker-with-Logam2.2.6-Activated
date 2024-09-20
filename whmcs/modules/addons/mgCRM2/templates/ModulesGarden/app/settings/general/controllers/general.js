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
        'settingsAbstractGeneralController',
        ['$scope',
function( $scope)
{
    // just for messages
    $scope.scopeMessages        = [];
}]);


angular.module("mgCRMapp").controller(
        'settingsGeneralController',
        ['$rootScope',
            '$scope',
            '$translate',
            '$stateParams',
            '$timeout',
            'ngDialog',
            '$q',
            'blockUI',
            '$http',
            'ResourcefollowupTypes',
            'googleService',
            'ResourceLabels',
            'ResourcefollowupStatuses',
function( $rootScope, $scope, $translate, $stateParams, $timeout, ngDialog, $q, blockUI, $http, ResourcefollowupTypes, googleService, ResourceLabels, ResourcefollowupStatuses )
{
    $scope.googleAuthStyle      = {};
    $scope.googleCalendarStyle  = {};
    $scope.authGoogle = {
        google_radio: 'private'
    };
    var isGoogleAuth = function () {
        if ($scope.settings.followups_synch_provider && $scope.settings.followups_synch_provider.filter(x => x.id == 1).length > 0) {
            $scope.googleAuthStyle = {display: 'block'};
            $scope.googleCalendarStyle = {display: 'block'};
        } else {
            $scope.googleAuthStyle = {display: 'none'};
            $scope.googleCalendarStyle = {display: 'none'};
        }
    };
    
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    $scope.activeTab            = 'overview';
    // crm email templates
    $scope.templates            = [];
    // container for global settings object
    $scope.status               = {};
    $scope.settings = {
        general: {},
        followups: {},
    };
    
    $scope.weekDays = {
        0: { id: 1, name: ''},
        1: { id: 2, name: ''},
        2: { id: 3, name: ''},
        3: { id: 4, name: ''},
        4: { id: 5, name: ''},
        5: { id: 6, name: ''},
        6: { id: 0, name: ''},
    };
    $translate('settings.general.select.defaultWeekDay.monday').then(function (d) { $scope.weekDays[0].name = d;});
    $translate('settings.general.select.defaultWeekDay.tuesday').then(function (d) { $scope.weekDays[1].name = d;});
    $translate('settings.general.select.defaultWeekDay.wednesday').then(function (d) { $scope.weekDays[2].name = d;});
    $translate('settings.general.select.defaultWeekDay.thursday').then(function (d) { $scope.weekDays[3].name = d;});
    $translate('settings.general.select.defaultWeekDay.friday').then(function (d) { $scope.weekDays[4].name = d;});
    $translate('settings.general.select.defaultWeekDay.saturday').then(function (d) { $scope.weekDays[5].name = d;});
    $translate('settings.general.select.defaultWeekDay.sunday').then(function (d) { $scope.weekDays[6].name = d;});

    $scope.syncContact = {
        0: { id: 1, name: ''},
        1: { id: 2, name: ''},
        2: { id: 3, name: ''},
        3: { id: 4, name: ''}
    };
    $translate('settings.general.select.syncContact.default').then(function (d) { $scope.syncContact[0].name = d;});
    $translate('settings.general.select.syncContact.whmcsToCrm').then(function (d) { $scope.syncContact[1].name = d;});
    $translate('settings.general.select.syncContact.crmToWhmcs').then(function (d) { $scope.syncContact[2].name = d;});
    $translate('settings.general.select.syncContact.both').then(function (d) { $scope.syncContact[3].name = d;});

    $scope.email_import_type = {
        0: { id: 1, name: ''},
        1: { id: 2, name: ''},
        2: { id: 3, name: ''},
    };

    $translate('settings.general.select.email_import_type.disabled')
        .then(d => $scope.email_import_type[0].name = d);
    $translate('settings.general.select.email_import_type.lead_id_in_title')
        .then(d => $scope.email_import_type[1].name = d);
    $translate('settings.general.select.email_import_type.separate_conversations')
        .then(d => $scope.email_import_type[2].name = d);
    
    $scope.options_synch_provider = [
        {
            id: 0,
            name: "WHMCS Calendar",
            table: "tblcalendar"
        },
        {
            id: 1,
            name: "Google Calendar",
            table: ""
        }
    ];
    $scope.convertToInt = function(id)
    {
        return parseInt(id, 10);
    };

    // just function to obtain permisions roles
    $scope.getConfig = function()
    {
        // send query
        return $http.get($rootScope.settings.config.apiURL + '/settings/generalWithStatus/json').then(function(response) 
        {
            if( Object.prototype.toString.call( response.data.global ) === '[object Array]' ) {
                $scope.settings = {};
            } else {
                $scope.settings = response.data.global;
            }

            if($scope.settings.enable_email_notification_confirmation == 1){
                $scope.settings.enable_email_notification_confirmation = true;
            } else {
                $scope.settings.enable_email_notification_confirmation = false;
            }

            $scope.settings.calendar_list = response.data.calendar_list;

            if($scope.settings.disable_email_duplicate == 1){
                $scope.settings.disable_email_duplicate = true;
            } else {
                $scope.settings.disable_email_duplicate = false;
            }
            
            if ($scope.settings.followups_create_lead_followup_type === true) {
                $scope.settings.followups_create_lead_followup_type = 1;
            }
            if ($scope.settings.syncContact === undefined) {
                $scope.settings.syncContact = 1;
            } else {
                $scope.settings.syncContact = Number($scope.settings.syncContact);
            }

            if ($scope.settings.defaultWeekDay === undefined) {
                $scope.settings.defaultWeekDay = 1;
            } else {
                $scope.settings.defaultWeekDay = Number($scope.settings.defaultWeekDay);
            }

            if ($scope.settings.email_import_type === undefined) {
                $scope.settings.email_import_type = 1;
            } else {
                $scope.settings.email_import_type = Number($scope.settings.email_import_type);
            }
            
            $scope.status       = response.data.status;
            $scope.templates    = response.data.templates;
            if (!$scope.settings.followups_reschedule_template && $scope.templates.length > 0)
            {
                $scope.settings.followups_reschedule_template = $scope.convertToInt($scope.templates[0].id);
            }

            if ($scope.settings.google_radio && $scope.settings.google_radio != "global") {
                if ($scope.settings.client_id) 
                    $scope.authGoogle.client_id = $scope.settings.client_id;
                if ($scope.settings.client_secret) 
                    $scope.authGoogle.client_secret = $scope.settings.client_secret;
            } else if ($scope.settings.google_radio && $scope.settings.google_radio == "global") {
                $scope.authGoogle.client_secret = "";
                $scope.authGoogle.client_id = "";
            }
            isGoogleAuth();
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
    $scope.getConfig();
    
    $scope.submitGeneralSettings = function()
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        // send query
        return $http.post($rootScope.settings.config.apiURL + '/settings/general/json', $scope.settings).then(function(response) 
        {
            $scope.getConfig();
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
    
    
    $scope.closeNote = function()
    {
        $scope.formSubmitDone = false;
    }

    $scope.closeStatusNote = function()
    {
        $scope.formSubmitStatusDone = false;
    }
    
    $scope.closeFollowupDeletedNote = function()
    {
        $scope.followupDeleteDone = false;
    }

    $scope.closeFollowupStatusDeletedNote = function()
    {
        $scope.followupStatusDeleteDone = false;
    }
    
    
    /////////////////////////////
    //    
    //      LABELS
    //   TYPES MANAGEMENT
    // 
    /////////////////////////////
    // init 
    
    
    $scope.itemsByPage = 10;
    $scope.itemsOffset = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr = 0;
    $scope.itemsTotal = 0;
    
    $scope.labelsData         = [];
    $scope.addLabelForm          = new ResourceLabels();   
    $scope.labelsBlock        = blockUI.instances.get('labelsBlock');
    $scope.formSubmitNewBlockLabel   = blockUI.instances.get('formSubmitNewBlockLabel');
    $scope.submittedLabel = false;
    $scope.displayLabelsFilters = false;
    /**
     * getters
     */
    
    
    /**
     * reset new status data
     */
    addLabelFormReset = function() 
    {
        $scope.addLabelForm.name     = '';
        $scope.addLabelForm.color    = '#000000';
        $scope.submittedLabel = false;
    };
    // trigger on initialize
    addLabelFormReset();
    
    $scope.updateTotalStats = function(paginationData)
    {
        $scope.itemsTotal   = paginationData.totalItemCount;
        $scope.itemsFirstNr = paginationData.start + 1;
        $scope.itemsLastNr  = $scope.itemsFirstNr + paginationData.number - 1;
        if($scope.itemsLastNr > $scope.itemsTotal) {
            $scope.itemsLastNr = $scope.itemsTotal;
        }
    }
    
    /**
     * getters
     */
    $scope.getLabelsData = function(tableState)
    {
        // Start blocking the table witr roles
        $scope.labelsBlock.start
        
        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
        // obtain roles from backend
        var query = ResourceLabels.getList(params);
        // when we recieve it
        query.then(function(data) {
            $scope.labelsData = data.data.data;  
            for (i = 0; i < $scope.labelsData.length; i++) {
                $scope.labelsData[i].color = "#" + $scope.labelsData[i].color;
            } 
            
            tableState.pagination.totalItemCount = data.data.total;
            tableState.pagination.numberOfPages  = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);
              
            $scope.updateTotalStats(tableState.pagination);
        }, function(error) {
            
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        // regardless of type response
        }).finally(function(response) {
            // stop blocking table
            $scope.labelsBlock.stop();
        });
    };
    
    $scope.addLabelFormSubmit = function()
    {
        $scope.formSubmitDone = false;
        // push loading indicator
        $scope.addLabelForm.color = $scope.addLabelForm.color.substr(1);
        
        $scope.formSubmitNewBlockLabel.start();
        $scope.$emit('loadingNotification', {type: 'progress'});
        $scope.addLabelForm.$create(function(result)  {
            
            if(result.status == 'success') {
                $scope.addLabelForm.error  = false;
                $scope.addLabelForm.$dirty = false;
                $scope.addLabelForm.$pristine = true;
                $scope.addLabelForm.$submitted = false;
                $scope.addLabelForm.$submittedLabel = false;
                $scope.formSubmitDone = true;
                $scope.submittedLabel = false;
                
                addLabelFormReset();
                $('#labels-table-search').trigger('input');
                
                
                $timeout(function() {
                    $scope.formSubmitDone   = false;
                }, 8000);
            } else {
                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: result.msg,
                });
            }
            
            $scope.formSubmitNewBlockLabel.stop();
            $scope.$emit('loadingNotification', {type: 'finished'});
        });
    };
    
    
    $scope.enableLabelSubmitted = function () {
        $scope.submittedLabel = true;
        $scope.addLabelFormSubmit();
    }
    
    /**
     * Update single paremeter
     * on direct changes in table (xeditable)
     */
    $scope.sentLabelToUpdate = function(index, params) 
    {
        params.color = params.color.substr(1);
        var res = ResourceLabels.update($scope.labelsData[index].id, params);
        $scope.$emit('loadingNotification', {type: 'progress'});
        res .then(function(response) 
        {
            $scope.labelsData[index].color = "#" + $scope.labelsData[index].color;
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.scopeMessages.push({
                    type: 'success',
                    title: "Success!",
                    content: response.msg
                });
            return true;
        }, function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            // push message to editable (that module handle show this error in form)
            return response.data.msg ? response.data.msg : 'error occured';
        });
        
    };
    
    
    $scope.confirmLabelDelete = function(roleIndex)
    {
        
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.label.message" | translate }}</h2>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            // perform resource delete
            var res = ResourceLabels.delete($scope.labelsData[roleIndex].id);

            res.then(function(response) {
                
                // show message
                $scope.scopeMessages.push({
                    type: 'success',
                    title: "Success!",
                    content: response.data.msg,
                });

                // remove from scope
                $scope.labelsData.splice(roleIndex, 1);

            },function(response) {

                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });

                mgCRM.scrollTo($('#settingsBlockHeader .box'));
            });
    
        });
    }
    
    /**
     * Trigger dragable order upodate
     * push new order to backend
     */
    updateLabelsOrder = function()
    {
        // get new order
        var newOrder = $scope.labelsData.map(function(i){
          return i.id;
        });
        
        // send query
        res = ResourceLabels.reorder(newOrder);
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // maintain response
        res .then(function(response) 
        {
                
            // loading indicator as compleate
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
        
    };
    
    /**
     * Just settings for dragable actions
     */
    $scope.sortableOptionsLabel = 
    {
        handle: '> .mySortableHandler',
        stop: function(e, ui) {
            // after we put element in correct place
            // trigger update new order with backend
            updateLabelsOrder();
        }
    };
    
    /////////////////////////////
    //    
    //      FOLLOW UP's
    //   TYPES & STATUSES MANAGEMENT
    // 
    /////////////////////////////
    // init 
    $scope.newFollowupType      = {};
    $scope.followupTypes        = [];
    $scope.followupTypesBlock   = blockUI.instances.get('followupTypesBlock');

    $scope.newFollowupStatus      = {};
    $scope.followupStatuses        = [];
    $scope.followupStatusesBlock   = blockUI.instances.get('followupStatusesBlock');

    $scope.formSubmitNewBlock   = blockUI.instances.get('formSubmitNewBlock');
    /**
     * getters
     */
    getFollowupTypes = function()
    {
        // Start blocking the table witr roles
        $scope.followupTypesBlock.start();
        // obtain roles from backend
         
        var query = ResourcefollowupTypes.query();

        // when we recieve it
        query.then(function(data) {
            $scope.followupTypes = data.data;
            
        }, function(error) {
            
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        // regardless of type response
        }).finally(function(response) {
            // stop blocking table
            $scope.followupTypesBlock.stop();
            if (!$scope.settings.followups_create_lead_followup_type && $scope.followupTypes.length > 0)
            {
                $scope.settings.followups_create_lead_followup_type = $scope.convertToInt($scope.followupTypes[0].id);
            }
            
        });
    };
    // get on init list
    getFollowupTypes();

    getFollowupStatuses = function()
    {
        // Start blocking the table witr roles
        $scope.followupStatusesBlock.start();
        // obtain roles from backend

        var query = ResourcefollowupStatuses.query();

        // when we recieve it
        query.then(function(data) {
            $scope.followupStatuses = data.data;

        }, function(error) {

            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });

            // regardless of type response
        }).finally(function(response) {
            // stop blocking table
            $scope.followupStatusesBlock.stop();
            if (!$scope.settings.followups_create_lead_followup_status && $scope.followupStatuses.length > 0)
            {
                $scope.settings.followups_create_lead_followup_status = $scope.convertToInt($scope.followupStatuses[0].id);
            }

        });
    };

    getFollowupStatuses();
    
    
    
    /**
     * Submit create new type form
     */
    $scope.submitted = false;
    $scope.addFollowupTypeFormSubmit = function()
    {
        $scope.formSubmitDone = false;
        $scope.formSubmitNewBlock.start();
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        $scope.newFollowupType.$save(function(result) 
        {
            
            if(result.status == 'success') {
                
                $scope.formSubmitDone = true;
                
                $scope.submitted = false;
                
                $scope.addFollowupTypeForm.$dirty = false;
                $scope.addFollowupTypeForm.$pristine = true;
                $scope.addFollowupTypeForm.$submitted = false;
                
                newFollowupFormReset();
                getFollowupTypes();
                $timeout(function() {
                    $scope.formSubmitDone   = false;
                }, 8000);
            } else {
                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: result.msg,
                });
            }
            
            $scope.formSubmitNewBlock.stop();
            $scope.$emit('loadingNotification', {type: 'finished'});
            
        });
    };

    $scope.addFollowupStatusFormSubmit = function()
    {
        $scope.formSubmitStatusDone = false;
        $scope.formSubmitNewBlock.start();
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        $scope.newFollowupStatus.$save(function(result)
        {

            if(result.status == 'success') {

                $scope.formSubmitStatusDone = true;

                $scope.submitted = false;

                $scope.addFollowupStatusForm.$dirty = false;
                $scope.addFollowupStatusForm.$pristine = true;
                $scope.addFollowupStatusForm.$submitted = false;

                newFollowupFormReset();
                getFollowupStatuses();
                $timeout(function() {
                    $scope.formSubmitStatusDone   = false;
                }, 8000);
            } else {
                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: result.msg,
                });
            }

            $scope.formSubmitNewBlock.stop();
            $scope.$emit('loadingNotification', {type: 'finished'});

        });
    };
    
    /**
     * reset new status data
     */
    newFollowupFormReset = function() 
    {
        $scope.newFollowupType          = new ResourcefollowupTypes();   
        $scope.newFollowupType.name     = '';
        $scope.newFollowupType.color    = '#000000';
        $scope.newFollowupType.active   = true;

        $scope.newFollowupStatus          = new ResourcefollowupStatuses();
        $scope.newFollowupStatus.name     = '';
        $scope.newFollowupStatus.color    = '#000000';
        $scope.newFollowupStatus.active   = true;
        
    };

    // trigger on initialize
    newFollowupFormReset();
    
    
    /**
     * Update single paremeter
     * on direct changes in table (xeditable)
     */
    $scope.sentFollowupTypeToUpdate = function(index, name, data) 
    {
        // send query
        res = ResourcefollowupTypes.updateSingleParam($scope.followupTypes[index].id, name, data);
        
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // maintain response
        res .then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            return true;
        }, function(response) {
            // push message to editable (that module handle show this error in form)
            return response.data.msg ? response.data.msg : 'error occured';
        });
        
    };

    $scope.sentFollowupStatusToUpdate = function(index, name, data)
    {
        // send query
        res = ResourcefollowupStatuses.updateSingleParam($scope.followupStatuses[index].id, name, data);

        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // maintain response
        res .then(function(response)
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            return true;
        }, function(response) {
            // push message to editable (that module handle show this error in form)
            return response.data.msg ? response.data.msg : 'error occured';
        });

    };
    
    /**
     * delete existing type
     * with conrfirmation box
     */
    $scope.confirmFollowupTypeDelete = function(roleIndex)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.followupType.message" | translate }}</h2>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
            
        }).then(function(){
            // perform resource delete
            var res = ResourcefollowupTypes.delete($scope.followupTypes[roleIndex].id);

            res.then(function(response) {

                $scope.followupDeleteDone = true;
                // remove from scope
                $scope.followupTypes.splice(roleIndex, 1);

            },function(response) {

                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });

                mgCRM.scrollTo($('#settingsBlockHeader .box'));
            });
        });
    }

    $scope.confirmFollowupStatusDelete = function(roleIndex)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.followupStatus.message" | translate }}</h2>\
                <div class="ngdialog-buttons text-center">\
                    <button type="button" class="ngdialog-button ngdialog-button-secondary" ng-click="closeThisDialog(0)">No</button>\
                    <button type="button" class="ngdialog-button ngdialog-button-primary" ng-click="confirm(1)">Yes</button>\
                </div>',
            plain: true,
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false

        }).then(function(){
            // perform resource delete
            var res = ResourcefollowupStatuses.delete($scope.followupStatuses[roleIndex].id);

            res.then(function(response) {

                $scope.followupStatusDeleteDone = true;
                // remove from scope
                $scope.followupStatuses.splice(roleIndex, 1);

            },function(response) {

                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });

                mgCRM.scrollTo($('#settingsBlockHeader .box'));
            });
        });
    }
    
    
    /**
     * Trigger dragable order upodate
     * push new order to backend
     */
    updateFollowupTypesOrder = function()
    {
        // get new order
        var newOrder = $scope.followupTypes.map(function(i){
          return i.id;
        });
        
        // send query
        res = ResourcefollowupTypes.reorder(newOrder);
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // maintain response
        res .then(function(response) 
        {
                
            // loading indicator as compleate
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
    };

    updateFollowupStatusesOrder = function()
    {
        // get new order
        var newOrder = $scope.followupStatuses.map(function(i){
            return i.id;
        });

        // send query
        res = ResourcefollowupStatuses.reorder(newOrder);
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // maintain response
        res .then(function(response)
        {

            // loading indicator as compleate
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

    };
    
    /**
     * Just settings for dragable actions
     */
    $scope.sortableOptions = 
    {
        handle: '> .mySortableHandler',
        stop: function(e, ui) {
            // after we put element in correct place
            // trigger update new order with backend
            updateFollowupTypesOrder();
            updateFollowupStatusesOrder();
        }
    };
    
    
    $scope.authGoogleSubmit = function()
    {
        var isClick = false;
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        var params = $scope.authGoogle;
        
        /*if (params.google_radio == "global") {
            params.client_id = "571553098531-c45fa4dag5u96k4a0uninvk68vk66eqk.apps.googleusercontent.com";
            params.client_secret = "3_vDFKRUUMgjHbHDCWPNAxy5";
        }*/
        var auth = googleService.authGoogle(params);
        auth.$promise.then(function(response) {
            $scope.redirectUrl = response.url;
            isClick = response.isClick;
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.scopeMessages.push({
                type: 'success',
                title: "Success!",
                content: response.msg,
            });
            
        }, function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            // push scope message
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : 'error occured',
            });
        }).finally(function(response) {
            if (isClick) {
                window.location.assign($scope.redirectUrl);
            }
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
            throw new Error('Invalid HEX color.');
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
    
}]);

