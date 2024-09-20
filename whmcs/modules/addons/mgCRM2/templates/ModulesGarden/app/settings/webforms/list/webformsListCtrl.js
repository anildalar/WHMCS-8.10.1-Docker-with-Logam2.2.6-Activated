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
 * @author      Paweł Złamaniec <pawel.zl@modulesgarden.com> 
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
        'webformsListCtrl',
        ['$rootScope', 'additionalParams', '$scope', 'blockUI', '$http', 'ngDialog',
function( $rootScope,   additionalParams,   $scope,   blockUI,   $http,   ngDialog)
{
    $scope.webformsTableBlock = blockUI.instances.get('webformsTableBlock');
    $scope.scopeMessages = [];
        
    if($rootScope.webFormCreated)
    {
        $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: 'The web form has been created successfully'
            });
    }
    
    if($rootScope.webformEdited)
    {
        $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: 'The web form has been updated successfully'
            });
    }
        
    $scope.callServer = function callServer(tableState) 
    {
        // start blockui indicator    
        $scope.webformsTableBlock.start();

        var pagination       = tableState.pagination;
        var start            = pagination.start     || 0;    // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number    || 10;   // Number of entries showed per page.

        // addintiona parameters (not related strictly to smart table)
        var params = {
            start:      start,
            number:     number,
            params:     tableState,
        };
            
        url = $rootScope.settings.config.apiURL + '/settings/webforms/table/json';

        // come on give me data from backend
        $http.post(url, params).then(function(result) 
        {
            // update controller container for data from response
            $scope.displayed = result.data.data;
            // stop blockui indicator    
            $scope.webformsTableBlock.stop();
              
            //set the number of pages so the pagination can update
            tableState.pagination.totalItemCount = result.data.total;
            tableState.pagination.numberOfPages  = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);

            // update stats
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
    
    $scope.deleteWebForm = function(id)
    {
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>{{ "delete.webForm.message" | translate }}</h2>\
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
            $http.post($rootScope.settings.config.apiURL + '/settings/webforms/delete/'+ id +'/json', {
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
                    content:  'The web form has been deleted successfully',
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
    
    $scope.showFormHtml = function(id)
    {
        $scope.modal = ngDialog.open({
            templateUrl: additionalParams.templates_root+'/app/settings/webforms/modal/webformHtml.html',
            controller: 'webformHtmlCtrl',
            resolve: {
                
                additionalParams: ['$stateParams', function($stateParams) {
                    return {
                        webform_id: id,
                    };
                }],
                
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                      return $ocLazyLoad.load([
                            additionalParams.templates_root+'/app/settings/webforms/modal/webformHtmlCtrl.js',
                      ]);
                }],
            },
            scope: $scope,
        });
    };
}]);