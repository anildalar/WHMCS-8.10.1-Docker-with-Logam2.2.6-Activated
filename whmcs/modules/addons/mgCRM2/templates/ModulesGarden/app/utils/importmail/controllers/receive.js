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
        'importmailReceiveController',
        ['$rootScope', '$scope', '$stateParams', 'importmailData', 'ngDialog', '$q', 'blockUI', '$state',  '$translate', '$http', 'AclService', '$state',
function( $rootScope,   $scope,   $stateParams,   importmailData,   ngDialog,   $q,   blockUI,   $state,    $translate,   $http,   AclService,   $state)
{
    
    // 
    // BOX
    // 
    $scope.messageTable   = blockUI.instances.get('messageTable');
    
    $scope.displayFilters = false;
    $scope.rawData   = [];
    $scope.displayed = [];
    $scope.url = $rootScope.settings.config.apiURL;
        
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
    
    $scope.$parent.$watch('requestForImportMail', function(newVal, oldVal) {
        if( newVal ==  oldVal && $scope.allowChangeAdmin === true ) { return; }
        angular.element('#messageTableSearch').trigger('input');
    });
    
    // just focus client selector
    $scope.setFocusClient = function() {
        $scope.$broadcast('setFocusClient');
    };
    
    /**
     * ajax select client For Select
     */
    $scope.refreshClietns =  function(query) 
    {
        // just skip on init ot when there is nothing in form
        if(query == '') return true;
        // obtain clientsfrom backend
        res = $http.post($rootScope.settings.config.apiURL + '/helpers/select/resources/json', {
            query: query
        });
        // when we recieve it update results container
        res.then(function(data) {
            $scope.searchedClients = data.data.results;
        });
    };
    
    $scope.ForceUpdateSearchForClient = function()
    {
        angular.element('#awesome-hiddenc-lient-search').trigger('input');
    };
    
    addMassege = function (status, massage) {
        $scope.$parent.scopeMessages.push({
            type:    status,
            title:   status == 'success' ? "Success!" : "Error!",
            content: massage
        });
    }
    
    $scope.openEmailMessageModal = function(row)
    {
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/utils/importmail/templates/modals/sendMail.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {
                input: row,
                templates: importmailData.data.templates.admin
            },
            controller: ['$scope', '$rootScope', '$http', function($scope, $rootScope, $http) {
                $scope.templates = [];
                if ($scope.templates.length == 0)
                {
                    $scope.templates.push({id: 0, full: "Select Template"});
                    $.each($scope.ngDialogData.templates, function (index, element) {
                        $scope.templates.push(element);
                    })
                }
                
                $scope.sendMail = {
                    template_id: 0,
                    to: $scope.ngDialogData.input.from_email,
                    from: $scope.ngDialogData.input.email,
                    subject: "RE: " + $scope.ngDialogData.input.title,
                    message: "\n>" + $scope.ngDialogData.input.content.replace(/[\n\r]/g, '\n> '),
                    mailBoxId: $scope.ngDialogData.input.mail_configuration_id
                };
                
                $scope.FormSubmit = function()
                {
                    $scope.$emit('loadingNotification', {type: 'progress'});
                    
                    var params = $scope.sendMail;
                    params.message = "{literal}" + params.message + '{/literal}';
                    $http.post($rootScope.settings.config.apiURL + '/settings/statuses/importmail/send/json', params).then(function(result) {
                        $scope.$emit('loadingNotification', {type: 'finished'}); 
                        addMassege(result.data.status, result.data.msg);                                               
                    }).finally(function() {
                        $scope.closeThisDialog(0);
                        angular.element('#main-table-global-search').trigger('input');
                    });
                };
            }]
        });
    }
    $scope.removeMessage = function($id)
    {
        ngDialog.openConfirm({
            template:$rootScope.settings.config.rootDir + '/app/utils/importmail/templates/modals/removeEmailConfirm.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false
        }).then(function () {
            $http.post($rootScope.settings.config.apiURL + '/settings/statuses/importmail/remove/'+$id+'/json').then(function () {
                $scope.callServer({pagination:{}});
                $scope.scopeMessages.push({
                    type:    'success',
                    title:   "Success!",
                    content:  'Email has been deleted.',
                });
            });

        },function ($err) {
            $scope.scopeMessages.push({
                type:    'danger',
                title:   'Error',
                content: $err.data.msg,
            });
        });
    };
    /**
     * Popup new window with email details
     * @param {type} id
     * @returns {undefined}
     */
    $scope.showEmailPreviewWindow = function(id)
    {
        window.open('crm.php/email/show/'+id+'/table/READ','','width=650,height=400,scrollbars=yes');
    }
    
    $scope.callServer = function(tableState) 
    {
        $scope.messageTable.start();
        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;
        var number           = pagination.number || 10;
        var params = {
            start: start,
            number: number,
            params: tableState,
            meilboxId: $scope.$parent.requestForImportMail
        };
            
        $http.post($rootScope.settings.config.apiURL + '/settings/statuses/importmail/get/json', params).then(function(result) 
        {
            $scope.displayed = result.data.data;
            $scope.messageTable.stop();
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
    };
}]);