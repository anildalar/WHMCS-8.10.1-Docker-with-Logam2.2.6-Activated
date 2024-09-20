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
        'boardController',
        ['$rootScope', '$scope', 'ngDialog',  'blockUI', '$state',  '$translate', '$http', 'AclService', 'boardService',
function( $rootScope,   $scope,   ngDialog,    blockUI,   $state,    $translate,   $http,   AclService,   boardService)
{
    
    $scope.selectLabels = [];
    $scope.dataLabels = [];
    $scope.dropTargetRemove = null;
    $scope.selectedLabel = null;
    $scope.isAdded = true;
    
    inArray = function (target, array) {
        for(var i = 0; i < array.length; i++) {
            if(array[i] === target) {
                return true;
            }
        }

        return false; 
    }
    
    $scope.reloadData = function () {
        var res = boardService.getLabels();
        
        res.$promise.then(function (data) {
            $scope.dataLabels = data.labelData;
            $scope.selectLabels = data.labelSelect;
        });
    }
    $scope.reloadData();
    
    reloadDataPrivate = function () {
        $scope.reloadData();
    }
    
    $scope.addLableFormSubmit = function () {
        var res = boardService.addLabel($scope.selectedLabel.id);
        
        res.then(function (data) {
            data = data.data;
            if (data.status == 'success') {
                $scope.reloadData();
                $scope.selectedLabel = null;
                $scope.isAdded = false;
            }
        });
    }
    
    $scope.removeLable = function ($id) {
        var res = boardService.removeLabel($id);
        
        res.then(function (data) {
            data = data.data;
            if (data.status == 'success') {
                $scope.reloadData();
                $scope.selectedLabel = null;
                $scope.isAdded = false;
            }
        });
    }
    
    $scope.$watch('selectedLabel', function () {
        if ($scope.selectedLabel && $scope.selectedLabel.id) {
            $scope.isAdded = false;
        }
        else
        {
            $scope.isAdded = true;
        }
    });
    
    /**
     * Trigger dragable order upodate
     * push new order to backend
     */
    updateLabelsOrder = function (clientId)
    {
        var updateLabels = [];
        if ($scope.dropTargetRemove != 0) {
            updateLabels.push($scope.dropTargetRemove);
        }
        
        var map = $scope.dataLabels.map(function(i, indexLabel){
            return {id: i.id, resources: i.recources.map(function(j){
                    if (j.id == clientId && i.id != 0 && !inArray(i.id, updateLabels)) {
                        updateLabels.push(i.id);
                    }
                    return j.id;
            })};
        });
        
        var params = {
            clientId: clientId,
            updateLabels: updateLabels,
            newOrder: map
        };
        
        var res = boardService.updateOrder(params);
        
        res.$promise.then(function () {
            for(var i = 0; i < $scope.dataLabels.length; i++) {
                $scope.dataLabels[i].count = $scope.dataLabels[i].recources.length;
            }
        }, function(response) {
//            $scope.scopeMessages.push({
//                type: 'danger',
//                title: "Error!",
//                content: response.data.msg ? response.data.msg : 'error occured',
//            });

        });
    };
    
    
    /**
     * Just settings for dragable actions
     */
    $scope.sortableOptionsLabel = 
    {
        
        handle: '> .mySortableHandler',
        items: '.sortableItem',
        placeholder: "sortableItem",
        connectWith: ".sortableContainer",
        start: function(e, ui) {
            $scope.dropTargetRemove = $scope.dataLabels[parseInt(ui.item.parent().attr('labelname'))].id;
        },
        stop: function(e, ui) {
            updateLabelsOrder(ui.item.sortable.model.id);
            $scope.dropTargetRemove = null;
        }
    };
    
    
    
     $scope.invertColor = function (hex) {
        if (hex.indexOf('#') === 0) {
            hex = hex.slice(1);
        }
        // convert 3-digit hex to 6-digits.
        if (hex.length === 3) {
            hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
        }
        if (hex.length !== 6) {
            return '#000000';
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
    
    
    $scope.addLabelModal = function() {
        $scope.modal = ngDialog.open({ 
            template: $rootScope.settings.config.rootDir + '/app/board/templates/modals/addLabel.html',
            className: 'ngdialog-theme-default mg-wrapper ngdialog-overlay',
            overlay: false,
            data: {
                labelsList: $scope.selectLabels
            },
            controller: ['$scope', '$rootScope', '$http', 'boardService', function($scope, $rootScope, $http, boardService) {
                
                $scope.selectLabels = $scope.ngDialogData.labelsList;
                
                $scope.selectedLabel = null;
                
                $scope.FormSubmit = function()
                {
                    if ($scope.selectedLabel == null) {
                        return;
                    }
                    
                    $scope.$emit('loadingNotification', {type: 'progress'});
                    var res = boardService.addLabel($scope.selectedLabel.id);
        
                    res.then(function (data) {
                        $scope.$emit('loadingNotification', {type: 'finished'}); 
                        data = data.data;
                        if (data.status == 'success') {
                            reloadDataPrivate();
                            $scope.selectedLabel = null;
                            $scope.closeThisDialog(0);
                        }
                    });
                };
            }]
        });
    };
}]);