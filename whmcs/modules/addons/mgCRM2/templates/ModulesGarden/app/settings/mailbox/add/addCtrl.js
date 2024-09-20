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
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com> / < >
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
        'mailboxAddController',
        ['$rootScope', '$scope', '$stateParams', 'ngDialog', '$q', 'blockUI', '$state', '$translate', '$http', 'ngDialog', 'mailboxParams',
function( $rootScope,   $scope,   $stateParams,   ngDialog,   $q,   blockUI,   $state,   $translate,   $http,   ngDialog ,  mailboxParams)
{
    $scope.scopeMessages   = [];
    $scope.mailboxFormBlock    = blockUI.instances.get('mailboxForm');
    
    $scope.model = {
        encryption: "0",
        receive_method: 'pop3',
        receive_folder: 'INBOX'
    };
    
    // cached data
    $scope.cached = {};
    
    /////////////////////////////
    // Perform actions on initialize these controller
    /////////////////////////////
    // manipulate to handle global change outside form (isolated scope from smart table module)
    $scope.rawData   = [];
    //copy the references (you could clone ie angular.copy but then have to go through a dirty checking for the matches)
    $scope.displayed = [].concat($scope.rawData);
    
    // containers for some overall stats
    $scope.itemsByPage = 10;
    $scope.itemsOffset = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr = 0;
    $scope.itemsTotal = 0;
    $scope.emailInUse = false;

    $scope.params = {};
    // just focus admin selector
    $scope.setFocusAdmin = function() {
        $scope.$broadcast('setFocusAdmin');
    };
    
    $scope.updateTotalStats = function(paginationData)
    {
        $scope.itemsTotal   = paginationData.totalItemCount;
        $scope.itemsFirstNr = paginationData.start + 1;
        $scope.itemsLastNr  = $scope.itemsFirstNr + paginationData.number - 1;
        if($scope.itemsLastNr > $scope.itemsTotal) {
            $scope.itemsLastNr = $scope.itemsTotal;
        }
    }
    
    var initForm = function ()
    {
        $scope.params = mailboxParams.get();
        
        // when we recieve it
        $scope.params.then(function(response) {
            // assign
            $scope.params = response.data;
            // play with initial params etc
            parseFormOnInitialize();
            
        }, function(error) {
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    }
    
    initForm();
    
    
    var parseFormOnInitialize = function ()
    {
        // mark admin
        for (var i = 0; i < $scope.params.admins.length; i++) 
        {
            if($scope.params.admins[i].id == $scope.params.currentAdmin.id) {
                $scope.model.admin_id = $scope.params.admins[i];
            }
        }
    }

    $scope.callServer = function callServer(tableState) 
    {
        // start blockui indicator    
        $scope.leadsTable.start();


        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/mailbox/resources/query/json', params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.leadsTable.stop();
              
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
        
    };
    
    // helper for foreach
    $scope.getRowData = function(row, column) {
        return row[column.id];
    }
    
    $scope.addMailboxFormSubmit = function()
    {
        $scope.mailboxFormBlock.start();
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        var params = angular.copy($scope.model);

        // send query
        res = $http.post($rootScope.settings.config.apiURL + '/mailbox/create/json', params);

        res.then(function(response) {

            // show message just in case
            $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });

            $rootScope.mailboxCreated = true;
            
            $state.go('settings.mailbox.list');
            return;

        },function(response) {
            var errorMessage = response.data.msg + '';
            if (response.status === 409 && errorMessage.includes('SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry')) {
                $scope.emailInUse = true;
            }

            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });

        }).finally(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.mailboxFormBlock.stop();
        });
    };

}]);