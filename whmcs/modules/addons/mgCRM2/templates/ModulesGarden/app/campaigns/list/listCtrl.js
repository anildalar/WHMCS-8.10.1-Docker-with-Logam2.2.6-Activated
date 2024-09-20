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
        'campaignsListController',
        ['$rootScope', '$scope', '$stateParams', '$translate', '$http', 'blockUI', 'isAllowed', 'ngDialog',
function( $rootScope,   $scope,   $stateParams,   $translate,   $http,   blockUI,   isAllowed,   ngDialog)
{
    
    $scope.campaignsTableBlock = blockUI.instances.get('campaignsTable');
    
    $scope.scopeMessages   = [];
    
    $scope.displayFilters = false;
    $scope.rawData   = [];
    $scope.displayed = [];
    
    
    // containers for some overall stats
    $scope.itemsByPage = 10;
    $scope.itemsOffset = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr = 0;
    $scope.itemsTotal = 0;

    if($rootScope.campaignCreated)
    {
        $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: 'The campaign has been created successfully'
            });
    }
    
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
        $scope.campaignsTableBlock.start();


        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };

        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/campaigns/list/json', params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.campaignsTableBlock.stop();
              
            //set the number of pages so the pagination can update
            tableState.pagination.totalItemCount = result.data.total;
            tableState.pagination.numberOfPages  = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);
              
            $scope.updateTotalStats(tableState.pagination);

        }, function(error) {
            
            $scope.campaignsTableBlock.stop();
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });

    };
    
    
    $scope.triggerRefreshCampaignAssignment = function(id)
    {
        $scope.campaignsTableBlock.start();
        $scope.$emit('loadingNotification', {type: 'progress'});

        // send query
        res = $http.get($rootScope.settings.config.apiURL + '/campaigns/refresh/' + id + '/filters/json');

        res.then(function(response) {

            angular.element('#list-campaigns-search').trigger('input');

            // show message just in case
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
            $scope.campaignsTableBlock.stop();
        });
    };
    
    
    $scope.triggerDeleteCampaign = function(id)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.campaign.message" | translate }}</h2>\
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
            $http.post($rootScope.settings.config.apiURL + '/campaigns/delete/'+ id +'/json', {
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
                    content:  'The campaign has been deleted successfully',
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
    };
}]);