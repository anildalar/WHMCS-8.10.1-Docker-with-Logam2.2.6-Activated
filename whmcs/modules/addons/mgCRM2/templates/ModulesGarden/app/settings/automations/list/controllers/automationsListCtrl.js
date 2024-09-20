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
        'automationsListCtrl',
        ['$rootScope', '$scope', '$stateParams', '$http', 'ngDialog', 'blockUI', 
function( $rootScope,   $scope,   $stateParams,   $http,   ngDialog,   blockUI)
{
    $scope.automationTableBlock = blockUI.instances.get('automationsTableBlock');
    // container for action messages
    $scope.scopeMessages = [];


    function convertListData(data)
    {
        data.status = parseInt(data.status);
        return data;
    }

    $scope.callServer = function callServer(tableState) 
    {
        $scope.automationTableBlock.start();
        $scope.$emit('loadingNotification', {type: 'progress'});
        var pagination       = tableState.pagination;
        var start            = pagination.start     || 0;
        var number           = pagination.number    || 10;

        var params = {
            start:      start,
            number:     number,
            params:     tableState,
        };
            
        $http.post($rootScope.settings.config.apiURL + '/settings/automations/table/json', params).then(function(result) {
            $scope.displayed = result.data.data;
            
            $.each($scope.displayed, function (index, value) {
                value = convertListData(value);
                $scope.displayed[index].status = (value.status === 1);
            });
            
            $scope.automationTableBlock.stop();
            tableState.pagination.totalItemCount = result.data.total;
            tableState.pagination.numberOfPages  = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);
            $scope.updateTotalStats(tableState.pagination);
            $scope.$emit('loadingNotification', {type: 'finished'});
        }, function(error) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.error ? error.data.error : error.statusText,
            });
        });
    };
    
    // update role
    $scope.sentModelToUpdate = function(index) 
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        res = $http.post($rootScope.settings.config.apiURL + '/settings/automations/update/'+ $scope.displayed[index].id +'/json', $scope.displayed[index]);
        res.then(function(response) {
            
            $('#main-table-global-search').trigger('input');
            
            $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
            
        },function(response) {

            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });

        }).finally(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
        });
        
    };
    
    // stats for pagination and overall
    $scope.updateTotalStats = function(paginationData)
    {
        $scope.itemsTotal   = paginationData.totalItemCount;
        $scope.itemsFirstNr = paginationData.start + 1;
        $scope.itemsLastNr  = $scope.itemsFirstNr + paginationData.number - 1;
        
        if($scope.itemsLastNr > $scope.itemsTotal) {
            $scope.itemsLastNr = $scope.itemsTotal;
        }
    };
    
    $scope.deleteAutomations = function(id)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.automation.message" | translate }}</h2>\
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
            $http.post($rootScope.settings.config.apiURL + '/settings/automations/delete/'+ id +'/json', {
                cache: false,
                isArray: true
            }).then(function(result) 
            {
                for(i=0; i < $scope.displayed.length; i++) 
                {
                    if($scope.displayed[i].id == id) {
                        $scope.displayed.splice(i, 1);
                    }
                }
                
                $scope.$emit('loadingNotification', {type: 'finished'});
                
                // show message just in case
                $scope.scopeMessages.push({
                    type:    'success',
                    title:   "Success!",
                    content:  'The automation has been deleted successfully'
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
    
        });
    };
}]);
