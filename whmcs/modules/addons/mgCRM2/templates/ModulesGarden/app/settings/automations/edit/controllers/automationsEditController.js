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
        'automationsEditController',
        ['$rootScope','$scope', '$stateParams', '$timeout', 'automationData', 'automationsEditService', 'blockUI', '$state', '$http',
function( $rootScope,  $scope,   $stateParams,   $timeout,   automationData,   automationsEditService,   blockUI,   $state,   $http)
{
    $scope.id = $stateParams.id;
    $scope.roodDirParent = $rootScope.settings.config.rootDir;
    
    $scope.formRuleData = {};
    
    $scope.mappingRules = function (rule, order, elementMoveId) {
        var listRules = [];
        if (rule.rules.length > 0) {
            for (var i = 0; rule.rules.length > i; i++)
            {
                if (rule.rules[i].id == elementMoveId) {
                    rule.rules[i].parent_id = rule.id;
                }
                listRules.push($scope.mappingRules(rule.rules[i], i, elementMoveId));
            }
        }
        return {id: rule.id, parent_id: rule.parent_id, order: order, rules: listRules};
    };
    
    $scope.treeOptions = {
        dragStop : function ($args) {
            var elementMoveId = $args.source.nodeScope.$modelValue.id;
            
            var mapping = [];
            for (var i = 0; $scope.rules.length > i; i++)
            {
                if ($scope.rules[i].id == elementMoveId) {
                    $scope.rules[i].parent_id = 0;
                }
                mapping.push($scope.mappingRules($scope.rules[i], i, elementMoveId));
            }
            $http.post($rootScope.settings.config.apiURL + '/settings/automations/update/' + automationData.data.id + '/rulesort/json', {rules: mapping}).then(function(result) 
            {
                $scope.scopeMessages.push({
                    type:    result.data.status,
                    title:   "Success!",
                    content: result.data.msg,
                });
            }, function(error) {

                $scope.scopeMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: error.data.msg ? error.data.msg : error.statusText,
                });

            });
            
        }
    }
    
    loadGeneralData = function (scope) {
        $http.get($rootScope.settings.config.apiURL + '/settings/automations/get/' + automationData.data.id + '/ruleGeneralData/json', {}).then(function(result) 
        {
            $scope.formRuleData = result.data.data;
        }, function(error) {
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };
    loadGeneralData();
    
    $scope.rulesType = [
        {title: 'Empty', rule: 'empty'}, 
        {title: 'Add Reminder',             rule: 'addReminder'},
        {title: 'Add Contact Reminder',             rule: 'addContactReminder'},
        {title: 'Send Email to Assigned Admin',      rule: 'sendEmailToAssignedAdmin'},
        {title: 'Add Follow-up',            rule: 'addFollowUp'},
        {title: 'On Invoice Created', rule: 'onInvoiceCreated'},
        {title: 'On Service Suspension', rule: 'onServiceSuspend'},
        {title: 'On Sending Email', rule: 'onEmailSend'},
        {title: 'Condition `IF` By Field',  rule: 'conditionIf'},
        {title: 'Condition `IF CHANGE` Type',  rule: 'conditionIfChangeType'},
        {title: 'Condition `IF CHANGE` Label', rule: 'conditionIfChangeLabel'},
        {title: 'Condition `IF CHANGE` To Field',  rule: 'conditionIfChange'}, 
        {title: 'Condition `IF NOT` By Field',  rule: 'conditionIfNot'},
        {title: 'Condition `IF` Days After Contact Created`',  rule: 'conditionIfDaysAfterContactCreated'},
        {title: 'Condition `IF CHANGE` Admin',  rule: 'conditionIfChangeAdmin'},
        ];
    
    // container for action messages
    $scope.scopeMessages = [];
    $scope.automation = new automationsEditService;
    $scope.editAutomationFormBox = blockUI.instances.get('editAutomationFormBox');
    $scope.editable = false;
    
    $scope.getRuleTitle = function (rule) {
        for (var i = 0; i < $scope.rulesType.length; i++) {
            if (rule === $scope.rulesType[i].rule) {
                return $scope.rulesType[i].title;
            }
        }
        return rule
    };
    
    $scope.rules = automationData.data.rules;
    initForm = function () {
        $scope.automation.name = automationData.data.name;
        $scope.automation.id = automationData.data.id;
        $scope.automation.status = (parseInt(automationData.data.status) === 1);
    }
    initForm();
    
    /**
     * Send email!
     * 
     * @returns {undefined}
     */
    $scope.automationsFormSubmit = function() {
        $scope.editAutomationFormBox.start();
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        automationData.data.name = $scope.automation.name;
        automationData.data.id   = $scope.automation.id;
        automationData.data.status   = $scope.automation.status ? 1 : 0;
            
        var res = $http.post($rootScope.settings.config.apiURL + '/settings/automations/update/' + automationData.data.id + '/json', $scope.automation);
        res.then(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.editAutomationFormBox.stop();
            
            $scope.scopeMessages.push({
                type:   'success',
                title:   "Success!",
                content: response.data.msg,
            });
            initForm();
        }, function(response) {

            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.editAutomationFormBox.stop();
           
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : (response.data.error ? response.data.error : response.statusText),
            });
        });
    };
    
    $scope.saveAutomationRule = function(rule) {
        $http.post($rootScope.settings.config.apiURL + '/settings/automations/update/' + automationData.data.id + '/rule/' + rule.id + '/json', rule).then(function(result) 
        {
            $scope.scopeMessages.push({
                type:    result.data.status,
                title:   "Success!",
                content: result.data.msg,
            });
        }, function(error) {
            
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    }
    
    $scope.changeRule = function (item) {
        
        $http.post($rootScope.settings.config.apiURL + '/settings/automations/update/' + automationData.data.id + '/rule/' + item.id + '/json', item).then(function(result) 
        {
            $scope.scopeMessages.push({
                type:    result.data.status,
                title:   "Success!",
                content: result.data.msg,
            });
        }, function(error) {
            
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };
    
    $scope.removeRule = function (scope) {
        var nodeData = scope.$modelValue;
        $http.post($rootScope.settings.config.apiURL + '/settings/automations/delete/' + automationData.data.id + '/rule/' + nodeData.id + '/json', nodeData).then(function(result)
        {
            scope.remove();
            $scope.scopeMessages.push({
                type:    result.data.status,
                title:   "Success!",
                content: result.data.msg,
            });
        }, function(error) {
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };

    $scope.toggle = function (scope) {
        scope.toggle();
    };
    

    $scope.newSubItem = function (scope) {
        var nodeData = scope.$modelValue;
        if (!nodeData.rules) {
            nodeData.rules = [];
        }
        var params = {
                parent_id: nodeData.id,
                automation_id: $stateParams.id,
                rule: 'empty',
                data:  {createData: 'test'},
                order: (nodeData.rules ? nodeData.rules.length : 0 )
        };
        
        $http.post($rootScope.settings.config.apiURL + '/settings/automations/create/' + automationData.data.id + '/rule/json', params).then(function(result)
        {
            result.data.data.rules = [];
            nodeData.rules.push(result.data.data);
            $scope.scopeMessages.push({
                type:    result.data.status,
                title:   "Success!",
                content: result.data.msg,
            });
        }, function(error) {
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
        });
    };
    
    $scope.creatRootRule = function () {
        
        var params = {
                parent_id: 0,
                automation_id: $stateParams.id,
                rule: 'empty',
                data:  {createData: 'test'},
                order: ($scope.rules ? $scope.rules.length : 0)
        };
        
        $http.post($rootScope.settings.config.apiURL + '/settings/automations/create/' + automationData.data.id + '/rule/json', params).then(function(result)
        {
            result.data.data.rules = [];
            $scope.rules.push(result.data.data);
            $scope.scopeMessages.push({
                type:    result.data.status,
                title:   "Success!",
                content: result.data.msg,
            });
        }, function(error) {
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
        });
    };

    $scope.collapseAll = function () {
      $scope.$broadcast('angular-ui-tree:collapse-all');
    };

    $scope.expandAll = function () {
      $scope.$broadcast('angular-ui-tree:expand-all');
    };
    
    $scope.findNodes = function () {

    };
    
    searchByTitle = function(item) {
        if (!(item.rule.indexOf($scope.query) == -1)) {
            return true;
        } else if (item.rules.length > 0) {
            return !!item.rules.find(searchByTitle);
        } else {
            return false;
        }
    }
    
    $scope.visible = function (item) {
        return !($scope.query && $scope.query.length > 0
        && !searchByTitle(item));

    };
    
    $scope.getTypeFormFieldById = function ($id) {
        if ($scope.formRuleData && $scope.formRuleData.fields) {
            for (var $i = 0; $i < $scope.formRuleData.fields.length; $i++) {
                if ($scope.formRuleData.fields[$i].id == $id) {
                    return $scope.formRuleData.fields[$i];
                }
            }
        }
        return {
            id: $id,
            type: 'text'
        };
    };
    
}]);
