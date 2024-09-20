/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



angular.module("mgCRMapp").controller(
        'leadTicketsController',
        ['$scope', '$rootScope', '$state', '$stateParams', 'blockUI', '$http', 'leadMainDetailsData',
function( $scope,   $rootScope,   $state,   $stateParams,   blockUI,   $http,   leadMainDetailsData)
{
    $scope.mainData = leadMainDetailsData;
    $scope.resource_id = $stateParams.id;
    // messages 
    $scope.scopeMessages = [];
    
    $scope.ticketsTable = blockUI.instances.get('ticketsTable');
    
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
        $scope.ticketsTable.start();


        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
            

        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/tickets/json', params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.ticketsTable.stop();
              
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
    
    
    $scope.syncQuotes = function()
    {
        
        // come on give me data from backend
        $http.get($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/tickets/sync/json').then(function(result) 
        {
            angular.element('#tickets-main-search').trigger('input');
            
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'success',
                content: result.data.msg,
            });

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
