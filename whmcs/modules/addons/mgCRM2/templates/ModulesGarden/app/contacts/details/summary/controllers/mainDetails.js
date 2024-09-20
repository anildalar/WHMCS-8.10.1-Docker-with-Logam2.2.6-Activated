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
        'detailsSummaryMainDetailsCtrl',
        ['$scope', '$rootScope', '$state', 'leadMainDetailsData', '$http', 'dynamicType',
function( $scope,   $rootScope,   $state,   leadMainDetailsData,   $http,   dynamicType)
{
    $scope.contactType = dynamicType;
    
    /////////////////////////////
    //
    // (re)ASSIGN CLIETN
    /////////////////////////////
    $scope.searchedClients = [];
    
    // Open modal with reassign ticket
    $scope.openReassignClientOppened = false;
    $scope.openReassignClient = function () {
        $scope.openReassignClientOppened = true;
        $scope.unassign = false;
    };
    
    // ajax select client For Select
    $scope.refreshClients =  function(query) 
    {
        // just skip on init ot when there is nothing in form
        //if(query == '') return true;
        
        // obtain clientsfrom backend
        res = $http.post($rootScope.settings.config.apiURL + '/helpers/select/clients/json', {
            query: query
        });
        // when we recieve it update results container
        res.then(function(data) {
            $scope.searchedClients = data.data.results;
        });
    };
    $scope.refreshClients();
    // just focus ticket selector
    $scope.setFocusClient = function() {
        $scope.$broadcast('setFocusClient');
    };
    
    // update backend
    $scope.reasignClientFormSubmit = function(unassign)
    {
        $scope.modalFormProgress = true;
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // collect params
        var params = {};
        if(unassign === true) {
            params.unassign  = true;
        } else {
            params.client_id = $scope.selectedClient.id;
        }

        // send query
        return $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/reassign/client/json', params).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});

            $scope.mainData.updated_at = response.data.updated_at;
            $scope.mainData.client_id  = response.data.client_id;
            $scope.mainData.client     = response.data.client;
            $scope.openReassignClientOppened  = false;
            $scope.modalFormProgress = false;
            
        }, function(response) {
            
            $scope.modalFormProgress = false;
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
        });
    }

    $scope.filteredCampaigns = [];
    $http.get($rootScope.settings.config.apiURL + '/campaigns/filteredCampaign/json').then(res => {
        $scope.filteredCampaigns = res.data.filteredCampaigns;
    })
    
    /////////////////////////////
    // (re)ASSIGN TICKET
    /////////////////////////////
    $scope.searchedTickets = [];
    /**
     * Open modal with reassign ticket
     */
    $scope.openReassignTicketDisplay = false;
    $scope.openReassignTicket = function () {
        $scope.openReassignTicketDisplay = true;
        $scope.unassignTicket = false;
    };
    
    // ajax select client For Select
    $scope.refreshTickets =  function(query) 
    {
        // just skip on init ot when there is nothing in form
        if(query == '') return true;
        
        // obtain clientsfrom backend
        res = $http.post($rootScope.settings.config.apiURL + '/helpers/select/tickets/json', {
            query: query
        });
        // when we recieve it update results container
        res.then(function(data) {
            $scope.searchedTickets = data.data.results;
        });
    };

    $scope.getTicketChoices = ticket => {
        html = '<b>#' + ticket.tid + '</b> ' + ticket.firstname + ' ' + ticket.lastname + ' ';
        html += ticket.companyname
            ? '(' + ticket.companyname + ') ' + ticket.title
            : ticket.title;

        return html;
    }
  
    // just focus ticket selector
    $scope.setFocusTicket = function() {
        $scope.$broadcast('setFocusTicket');
    };
    
    // update backend
    $scope.reasignTicketFormSubmit = function(unassign)
    {
        $scope.modalFormTicketProgress = true;
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        params = {};
        if(unassign === true) {
            params.unassign  = true;
        } else {
            params.ticket_id = $scope.selectedTicket.id;
        }

        // send query
        return $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/reassign/ticket/json', params).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            $scope.mainData.updated_at = response.data.updated_at;
            $scope.mainData.ticket_id  = response.data.ticket_id;
            $scope.mainData.ticket     = response.data.ticket;

            $scope.modalFormTicketProgress = false;
            $scope.openReassignTicketDisplay = false;
        }, function(response) {
            
            $scope.modalFormTicketProgress = false;
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
        });
    }
    
    // filter for campaigns
    $scope.campaignIsAssigned = function(item) {
        return $scope.mainData.campaigns.indexOf(item.id) > -1;
    };
    
    /////////////////////////////
    //
    // (re)COUNTRY
    /////////////////////////////
    $scope.listCountry = [];
    $scope.openReassignCountryOppened = false;
    $scope.openReassignCountry = function () {
        $scope.openReassignCountryOppened = true;
        $scope.unassign = false;
    };
    
    
    // just focus ticket selector
    $scope.setFocusCountry = function() {
        $scope.$broadcast('setFocusCountry');
    };
    
    // ajax select client For Select
    $scope.loadCountry =  function() 
    {
        // just skip on init ot when there is nothing in form
        //if(query == '') return true;
        // obtain clientsfrom backend
        res = $http.post($rootScope.settings.config.apiURL + '/helpers/select/country/json', {
        });
        // when we recieve it update results container
        res.then(function(data) {
            $scope.listCountry = data.data.results;
            upradeCountryLabel();
        });
    };
    $scope.loadCountry();
    
    var upradeCountryLabel = function () {
        if ($scope.mainData.country) {
            for (var i = 0; i < $scope.listCountry.length; i++) {
                if ($scope.mainData.country == $scope.listCountry[i].code) {
                    $scope.mainData.country = $scope.listCountry[i].name;
                    break;
                } 
            }
        }
    }
    
    // update backend
    $scope.reasignCountryFormSubmit = function(unassign)
    {
        $scope.modalFormProgress = true;
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // collect params
        var params = {};
        if(unassign === true) {
            params.unassign  = true;
        } else {
            params.country = $scope.selectedCountry;
        }

        // send query
        return $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/reassign/country/json', params).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            $scope.mainData.updated_at = response.data.updated_at;
            $scope.mainData.country     = response.data.country;
            upradeCountryLabel();
            $scope.openReassignCountryOppened  = false;

            $scope.modalFormProgress = false;
            
        }, function(response) {
            
            $scope.modalFormProgress = false;
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
        });
    }
    
    
    /////////////////////////////
    //
    // (re)Labels
    /////////////////////////////
    $scope.labelLists = [];
    $scope.openReassignLabelsOppened = false;
    let previousLabels= $scope.mainData.labels;
    $scope.openReassignLabels = function () {
        var newListNumber = $scope.$parent.$parent.temp.labels;
        $scope.labelLists = [];
        $scope.openReassignLabelsOppened = true;
        $scope.unassign = false;
        for (var i = 0; i < $scope.mainData.labels.length; i++) {
            $scope.labelLists.push($scope.mainData.labels[i]);
        }
        for (var i = 0; i < newListNumber.length; i++) {
            if (!$scope.labelLists.some(x => x.id == newListNumber[i].id)) {
                $scope.labelLists.push(newListNumber[i]);
            }
        }
    };

    $scope.dismissLabelsChanges = function () {
        $scope.openReassignLabelsOppened = false;
        $scope.mainData.labels = previousLabels;
    }

    $scope.filtredCampaigns = $scope.mainData.campaigns;
    /////////////////////////////
    //
    // (re)Campaign
    /////////////////////////////
    $scope.campaignLists = [];
    $scope.openReassignCampaignsOppened = false;
    let previousCampaigns = $scope.mainData.campaigns;
    $scope.openReassignCampaigns = function () {
        let campaigns = $scope.$parent.$parent.temp.campaigns
        $scope.campaignLists = [];
        $scope.openReassignCampaignsOppened = true;
        $scope.unassignCampaigns = false;

        campaigns.forEach(c => {
            if (!$scope.mainData.campaigns.some(item => item.id === c.id)) {
                $scope.campaignLists.push(c);
            }
        });
    };

    $scope.dismissCampaignsChanges = () => {
        $scope.openReassignCampaignsOppened = false;
        $scope.mainData.campaigns = previousCampaigns;
    }

    $scope.reaasignCampaignsFormSubmit = function(unassign) {
        $scope.modalFormProgress = true;
        $scope.$emit('loadingNotification', {type: 'progress'});
        previousCampaigns = $scope.mainData.campaigns;

        let params = {};

        if (unassign === true) {
            params.unassign  = true;
            $scope.mainData.campaigns = [];
        } else {
            params.campaigns = $scope.mainData.campaigns.map(c => c.id);
        }

        return $http
            .post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/sync/campaigns/json', {params})
            .then(response => {
                $scope.$emit('loadingNotification', {type: 'finished'});
                $scope.mainData.updated_at = response.data.updated_at;
                $scope.modalFormProgress = false;
                $scope.openReassignCampaignsOppened = false;
            }).catch(response => response.data.msg ? response.data.msg : 'Undefined error');
    }
    
    
    // just focus ticket selector
    $scope.setFocusLabels = function() {
        $scope.$broadcast('setFocusLabels');
    };
    
    // update backend
    $scope.reasignLabelsFormSubmit = function(unassign)
    {
        $scope.modalFormProgress = true;
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        previousLabels = $scope.mainData.labels;

        // collect params
        var params = {};
        if(unassign === true) {
            params.unassign  = true;
            $scope.mainData.labels = [];
        } else {
            params.labels = $scope.mainData.labels;
        }
        // send query
        return $http.post($rootScope.settings.config.apiURL + '/lead/' + $scope.mainData.id + '/reassign/labels/json', params).then(function(response) 
        {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            
            $scope.mainData.updated_at = response.data.updated_at;
            $scope.openReassignLabelsOppened  = false;

            $scope.modalFormProgress = false;
            
        }, function(response) {
            
            $scope.modalFormProgress = false;
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
        });
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