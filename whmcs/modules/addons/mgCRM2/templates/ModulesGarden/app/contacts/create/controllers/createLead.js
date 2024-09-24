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
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com> / <piotr@sarzynski.org>
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
        'leadsCreateController',
        ['$scope', '$rootScope', 'ngDialog', 'blockUI', 'createLeadService', 'createLeadParams', '$state', 'additionalParams', '$http',
function( $scope,   $rootScope,   ngDialog,   blockUI,   createLeadService,   createLeadParams,   $state,   additionalParams, $http)
{
    
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    
    // new Lead object
    $scope.newLead          = new createLeadService;
    $scope.assignedAdmin    = {};
    $scope.assignedStatus   = {};
    $scope.assignedType     = {};
    $scope.mappings         = {};
    // just for messages
    $scope.scopeMessages    = [];
    // for searched client by ajax
    $scope.searchedClients  = [];
    
    // data resolved from backend
    $scope.params           = {};
    $scope.beforeAdd        = true;
    // Get the reference to the block service.
    $scope.LeadForm = blockUI.instances.get('createLeadForm');
    $scope.ph_numbr = /^(\(?\+?[0-9]*\.?\)?)?[0-9_\-\. \(\)]*$/;
    $scope.submitted = false;

    /**
     * ajax select client For Select
     */
    $scope.refreshClients =  function(query)
    {
        // just skip on init ot when there is nothing in form
        //if(query == '') return true;
        // obtain clientsfrom backend
        res = createLeadParams.searchClient(query);
        // when we recieve it update results container
        res.then(function(data) {
            $scope.params.clients = data.data.results;
        });
    };
    $scope.refreshClients();
    // just focus admin selector
    $scope.setFocusAdmin = function() {
        $scope.$broadcast('setFocusAdmin');
    };
    // just focus client selector
    $scope.setFocusClient = function() {
        $scope.$broadcast('setFocusClient');
    };
    // just focus client selector
    $scope.setFocusType = function() {
        $scope.$broadcast('setFocusType');
    };

    $scope.getMappings = function()
    {
        $http.get($rootScope.settings.config.apiURL+'/settings/fields/map/get/json').then(function ($res) {
            $scope.mappings = $res.data.value;
        });
    };

    $scope.getMappings();
    $scope.updateFields = function($model,$item)
    {
        if ($item === 'Unassigned') {
            $scope.fillFields({});
            return;
        }

        $http.post($rootScope.settings.config.apiURL+'/helpers/select/client/'+$item.id+'/json').then(function ($res) {
            $scope.fillFields($res.data.results);
        });
    };

    $scope.fillFields = function($data)
    {
        if ($data === undefined) return;

        $scope.newLead.static = {};
        $scope.newLead.dynamic = {};       
        for(var whmcsField in $scope.mappings.static)
        {
            var contactField = $scope.mappings.static[whmcsField];
            if($data[whmcsField])
            {
                $scope.newLead.static[contactField] = $data[whmcsField];
            }
        }
        $scope.newLead.static.lastname = $data.lastname;
        if($data.customFields){
            for(var i in $scope.mappings.custom)
            {
                $scope.newLead.dynamic[$scope.mappings.custom[i]] = $data.customFields[i];
            }
        }

    };
    // just focus client selector
    $scope.setFocusCountry = function() {
        $scope.$broadcast('setFocusCountry');
    };
    // just focus client selector
    $scope.setFocusLabels = function() {
        $scope.$broadcast('setFocusLabels');
    };
    $scope.setFocusPhone = function() {
        $scope.$broadcast('setFocusPhone');
    };
    
  
    $scope.$watch('newLead', function()
    {
        var newLeadForm = $("#newLeadForm");
        if (newLeadForm.length && newLeadForm.form)
        {
            newLeadForm.form.valid();
        }
    }, true);

    /**
     * Obtain all params needed to generate this form
     */
    getCreateFormParams = function()
    {

        // obtain from backend
        $scope.params = createLeadParams.get(additionalParams.ticket_id);

        // when we recieve it
        $scope.params.then(function(response) {
            // assign
            $scope.params = response.data;
            if(additionalParams.client_id)
            {
                $scope.params.client = createLeadParams.getByClientId(additionalParams.client_id);
                $scope.params.client.then(function (response) {
                   $scope.params.client = response.data.results;
                    parseFormOnInitialize();

                });
            }

            parseFormOnInitialize();
            // play with initial params etc
            
        }, function(error) {
            
            // show message
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };
    
    /**
     * Just initialize function
     */
    initRequiredData = function()
    {
        // Start blocking the table
        $scope.LeadForm.start();
        
        // trigger to obtain backend data
        getCreateFormParams();
        
        // Stop blocking the table
        $scope.LeadForm.stop();
    };
    // trigger this
    initRequiredData();
    
    /**
     * As we recieve some data lets parse initial state of form
     */
    parseFormOnInitialize = function()
    {
        // mark admin
        for (var i = 0; i < $scope.params.admins.length; i++) 
        {
            if($scope.params.admins[i].id == $scope.params.currentAdmin.id) {
                $scope.newLead.assignedAdmin = $scope.params.admins[i];
            }
        }
        
        
        // parse fields validators to add nesesary atributres

        
        // mark admin
        for (var i = 0; i < $scope.params.fieldGroups.length; i++) 
        {
            group = $scope.params.fieldGroups[i];
            for (var j = 0; j < group.fields.length; j++) 
            {
                field = group.fields[j];
                field.customType = field.type;
                for (var k = 0; k < field.validators.length; k++) 
                {
                    validator = field.validators[k];
                    
                    
                    if(field.type == 'text') 
                    {
                        
                        if(validator.type == 'min') {
                            $scope.params.fieldGroups[i]['fields'][j].min = parseInt(validator.value);
                        } else if(validator.type == 'max') {
                            $scope.params.fieldGroups[i]['fields'][j].max = parseInt(validator.value);
                        } else if(validator.type == 'regex') {
                            $scope.params.fieldGroups[i]['fields'][j].regex = validator.value;
                        } else if(validator.type == 'email') {
                            $scope.params.fieldGroups[i]['fields'][j].customType = 'email';
                        } else if(validator.type == 'url') {
                            $scope.params.fieldGroups[i]['fields'][j].customType = 'url';
                        }
                    }
                    else if(field.type == 'textarea') 
                    {
                        
                        if(validator.type == 'min') {
                            $scope.params.fieldGroups[i]['fields'][j].min = parseInt(validator.value);
                        } else if(validator.type == 'max') {
                            $scope.params.fieldGroups[i]['fields'][j].max = parseInt(validator.value);
                        } else if(validator.type == 'regex') {
                            $scope.params.fieldGroups[i]['fields'][j].regex = validator.value;
                        }
                    }
                    else if(field.type == 'checkbox') 
                    {
                        if(validator.type == 'min') {
                            $scope.params.fieldGroups[i]['fields'][j].min = parseInt(validator.value);
                        } else if(validator.type == 'max') {
                            $scope.params.fieldGroups[i]['fields'][j].max = parseInt(validator.value);
                        }
                    }
                    else if(field.type == 'select' || field.type == 'multiselect') 
                    {
                        $scope.params.fieldGroups[i]['fields'][j].checked = [];
                        if(validator.type == 'min' && parseInt(validator.value) > 1) {
                            $scope.params.fieldGroups[i]['fields'][j].min     = parseInt(validator.value);
                            field.type = 'multiselect';
                        } else if(validator.type == 'max' && parseInt(validator.value) > 1) {
                            $scope.params.fieldGroups[i]['fields'][j].max = validator.value;
                            field.type = 'multiselect';
                        }
                    }
                    
                    if(validator.type == 'required') {
                        $scope.params.fieldGroups[i]['fields'][j].isRequired = true;
                    }

                }
            }
        }
        
        // set up initial mark status, as an first from all available (but needs to be active)
        for(i=0; i < $scope.params.statuses.length; i++) {
            if($scope.params.statuses[i].active === true) {
                $scope.newLead.assignedStatus = $scope.params.statuses[i];
                break;
            }
        }

        // set up initial contact type, as an first from all available (but needs to be active)
        for(i=0; i < $scope.contactTypes.length; i++) {
            if($scope.contactTypes[i].active === true) {
                $scope.newLead.assignedType = $scope.contactTypes[i];
                break;
            }
        }
        
        // set up relation id's injected from link
        if ( additionalParams.ticket_id !== false) {
            $scope.newLead.ticket_id = additionalParams.ticket_id;
            $scope.newLead.assignedClient = $scope.params.client;

            $scope.newLead.static = {};
            $scope.newLead.dynamic = {};
            
            for(let whmcsFieldName in $scope.mappings.static)
            {
                let crmFieldName = $scope.mappings.static[whmcsFieldName];

                if(!crmFieldName)
                {
                    continue;
                }

                if(isNaN(crmFieldName))
                {
                    $scope.newLead.static[crmFieldName] = $scope.params.client[whmcsFieldName];
                }
                else
                {
                    $scope.newLead.dynamic[crmFieldName] = $scope.params.client[whmcsFieldName];
                }
            }

            for(let whmcsFieldName in $scope.mappings.custom)
            {
                let crmFieldName = $scope.mappings.custom[whmcsFieldName];

                if(!crmFieldName)
                {
                    continue;
                }

                if(isNaN(crmFieldName))
                {
                    $scope.newLead.static[crmFieldName] = $scope.params.client.customFields[whmcsFieldName];
                }
                else
                {
                    $scope.newLead.dynamic[crmFieldName] = $scope.params.client.customFields[whmcsFieldName];
                }
            }

        }else if(additionalParams.client_id)
        {
            $scope.newLead.assignedClient = $scope.params.client;
            $scope.newLead.static = {};
            $scope.newLead.dynamic = {};
            $scope.newLead.assignedClient.company = $scope.newLead.assignedClient.companyname;
            for(let whmcsFieldName in $scope.mappings.static)
            {
                let crmFieldName = $scope.mappings.static[whmcsFieldName] ? $scope.mappings.static[whmcsFieldName] : whmcsFieldName;

                if(isNaN(crmFieldName))
                {
                    $scope.newLead.static[crmFieldName] = $scope.params.client[whmcsFieldName];
                }
                else
                {
                    $scope.newLead.dynamic[crmFieldName] = $scope.params.client[whmcsFieldName];
                }
            }

            for(let whmcsFieldName in $scope.mappings.custom)
            {
                let crmFieldName = $scope.mappings.custom[whmcsFieldName];

                if(!crmFieldName)
                {
                    continue;
                }

                if(isNaN(crmFieldName))
                {
                    $scope.newLead.static[crmFieldName] = $scope.params.client.customFields[whmcsFieldName];
                }
                else
                {
                    if($scope.params.client.customFields){
                        $scope.newLead.dynamic[crmFieldName] = $scope.params.client.customFields[whmcsFieldName];
                    }
                }
                }
            }
        
        // set up relation id's injected from link
        if ( additionalParams.params !== false ) {
            $scope.newLead.static = {};
            $.each(additionalParams.params, function(name, element) {
                $scope.newLead.static[name] = element;
            }); 
        }
    
    };
    
    
    
    $scope.toggleOpenDatePicker = function($event,datePicker) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope[datePicker] = !$scope[datePicker];
    };

    function checkDescriptionsLength() {
        if ($scope.newLead.static.short_description) {
            if ($scope.newLead.static.short_description.length > 255) {
                $scope.newLeadForm.short_description.$invalid = true;
                return;
            }
        }

        if ($scope.newLead.static.description) {
            if ($scope.newLead.static.description.length > 1024) {
                $scope.newLeadForm.description.$invalid = true;
                return;
            }
        }
    }

    $scope.setSelectValue = function (field, val) {
        let selectedOption = field.options.find(option => option.value === val);
        if (selectedOption) {
            $scope.newLead.dynamic[field.id] = selectedOption.id;
        }
    }

    $scope.setCheckboxValue = function (field, val, option) {
        if (field && val) {
            if (val === 'on') {
                $scope.newLead.dynamic[field.id] = option;
            }
        }
    }
    
    /////////////////////////////
    //    
    // FORM SUBMIT TRIGGER
    /////////////////////////////
    
    /**
     * Trigerred on form submit action
     * After form validation ;)
     */
    $scope.createLeadFormSubmit = function() 
    {
        checkDescriptionsLength();

        if ($scope.submitted == false && !$scope.newLeadForm.$invalid) {
            $scope.submitted = true;

            var res = $scope.newLead.$save();

            res.then(function(response) {
                $scope.beforeAdd = false;
                // show message
                $scope.scopeMessages.push({
                    type: 'success',
                    title: "Success!",
                    content: response.msg,
                });

                $state.go('contacts.details.summary', {id:response.new.id});

            },function(response) {
                $scope.submitted = false;
                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });

            });
        }
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
    
}]);