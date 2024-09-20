/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



angular.module("mgCRMapp").controller(
        'leadFilesController',
        ['$scope', '$rootScope', '$state', '$stateParams', 'blockUI', '$http', 'leadMainDetailsData', '$timeout', 'ngDialog', 'AclService',
function( $scope,   $rootScope,   $state,   $stateParams,   blockUI,   $http,   leadMainDetailsData,   $timeout,   ngDialog,   AclService)
{
    $scope.mainData = leadMainDetailsData;
    // messages 
    $scope.scopeMessages = [];
    $scope.maxUploadFileSize = null;
    
    $http.get($rootScope.settings.config.apiURL + '/lead/info/file/json', {}).then(function(result) 
    {
        $scope.maxUploadFileSize = result.data;
    }, function(error) {
        $scope.scopeMessages.push({
            type:   'danger',
            title:   "Error!",
            content: error.data.msg ? error.data.msg : error.statusText,
        });
    });
    
    $scope.uploadFileFormBox = blockUI.instances.get('uploadFileFormBox');
    $scope.logsTable = blockUI.instances.get('leadOrdersTable');
    
    $scope.displayFilters = false;
    $scope.rawData   = [];
    $scope.displayed = [];
    
    
    // containers for some overall stats
    $scope.itemsByPage = 10;
    $scope.itemsOffset = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr = 0;
    $scope.itemsTotal = 0;

    if(!AclService.can('resources.view_files')) {
        $state.go('dashboard');
        $rootScope.$broadcast('AclNoAccess', {rule: 'resources.view_files'});
        return;
    }
    
    $scope.closeNote = function()
    {
        $scope.uploadFileFormDone = false;
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
        $scope.logsTable.start();


        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
            

        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/files/json', params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.logsTable.stop();
              
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
    
    
    
    /**
     * Send email!
     * 
     * @returns {undefined}
     */
    $scope.uploadFileFormSubmit = function()
    {
        $scope.uploadFileFormBox.start();
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        var fileForm = new FormData();

        var files = $('#files').prop('files');   // forgive me for using jquery :D

        for(i=0; i<files.length; i++) {
            fileForm.append("files[]", files[i]);
        }
        
        fileForm.append("description", $('#filedescr').val());
        
        // come on give me data from backend
        $http.post(
                $rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/files/upload/json', 
                fileForm,
                {
                    withCredentials: true,
                    headers: {'Content-Type': undefined },
                    transformRequest: angular.identity
                })
        .then(function(response) {
            
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.uploadFileFormBox.stop();
            
            $scope.uploadFileFormDone     = true;
            
            angular.element('#file-main-search').trigger('input');
            
            
            $timeout(function() {
                $scope.uploadFileFormDone = false
            }, 8000);

        }, function(response) {

            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.uploadFileFormBox.stop();
            $scope.uploadFileFormDone     = false;
            
            //if (!( $scope.scopeMessages.length > 0 && $scope.scopeMessages.filter(function (value) { return value.type == 'danger'; }).length > 0))
             // show message just in case
                $scope.scopeMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });
        });
    };
    
    
    /**
     * for delete file
     */
    $scope.triggerDeleteFile = function(file)
    {
        var tableState = {};
        var pagination = {};
        var isSuccess = false;
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.file.message" | translate }}</h2>\
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
            $http.post($rootScope.settings.config.apiURL + '/lead/'+ file.resource_id +'/files/'+ file.id +'/delete/json', {
                cache: false,
                isArray: true
            }).then(function(result) 
            {
                for(i=0; i < $scope.displayed.length; i++) 
                {
                    if($scope.displayed[i].id == file.id) {
                        $scope.displayed.splice(i, 1);
                    }
                }
                
                $scope.$emit('loadingNotification', {type: 'finished'});
                
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
                // show message just in case
                $scope.scopeMessages.push({
                    type:    'success',
                    title:   "Success!",
                    content:  'The file has been deleted successfully',
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
                    angular.element('#file-main-search').trigger('input');
                }
            });
//                
    
        });
    }
    
    
}]);