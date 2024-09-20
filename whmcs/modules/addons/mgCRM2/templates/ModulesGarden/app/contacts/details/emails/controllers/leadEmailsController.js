/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module("mgCRMapp").controller(
        'leadEmailsController',
        ['$scope', '$rootScope', '$state', '$stateParams', 'blockUI', '$http', 'leadMainDetailsData', '$timeout',
function( $scope,   $rootScope,   $state,   $stateParams,   blockUI,   $http, leadMainDetailsData,     $timeout)
{
    $scope.mainData = leadMainDetailsData;
    // messages 
    $scope.scopeMessages = [];
    
    $scope.choseFile = false;
    $scope.formData = {};
    $scope.formData.departments  = [];
    $scope.formData.templates    = [];
    $scope.formData.targetEmails = [];
    $scope.formData.ccTargetEmails = [];
    $scope.formData.bccTargetEmails = [];
    $scope.maxUploadFileSize = null;
    $scope.loadEmailDataFromTpl = function () {
        var templateObj = {};
        $scope.formData.templates.forEach(item => {
            if (item.id == $scope.modelSentEmail.template) {
                templateObj = item;
            }
        });
        $scope.modelSentEmail.subject = templateObj.subject;
        $scope.modelSentEmail.content = templateObj.message;
    }

    $scope.urlApi = $rootScope.settings.config.apiURL;
    $scope.url = $rootScope.settings.config.appAdminUrl;
    
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
    
    $scope.modelSentEmail = {
        to: null,
        cc: null,
        bcc: null,
        template: 'false',
        files: null
    };

    $scope.sendEmailDone     = false;
    $scope.sendEmailProgress = false;
    
    // 
    // BOX
    // 
    $scope.newEmailContainer = blockUI.instances.get('newEmailContainer');
    $scope.leadEmailsTable   = blockUI.instances.get('leadEmailsTable');
    
    $scope.displayFilters = false;
    $scope.rawData   = [];
    $scope.displayed = [];
    
    // containers for some overall stats
    $scope.itemsByPage = 10;
    $scope.itemsOffset = 0;
    $scope.itemsFirstNr = 0;
    $scope.itemsLastNr = 0;
    $scope.itemsTotal = 0;

    $scope.closeNote = function()
    {
        $scope.sendEmailDone = false;
    };
    
    $scope.changeChoseFile = function () {
        $scope.choseFile = true;
    };

    
    $scope.resetFile = function () {
        $scope.modelSentEmail.files = null;
        $scope.choseFile = false;
    };

    $scope.toggleCopyOptions = function()
    {
        $("div.mailCopyOption").toggle();
    };
        
    $scope.updateTotalStats = function(paginationData)
    {
        $scope.itemsTotal   = paginationData.totalItemCount;
        $scope.itemsFirstNr = paginationData.start + 1;
        $scope.itemsLastNr  = $scope.itemsFirstNr + paginationData.number - 1;
        if($scope.itemsLastNr > $scope.itemsTotal) {
            $scope.itemsLastNr = $scope.itemsTotal;
        }
    };

    // helper for foreach
    $scope.getRowData = function(row, column) {
        return row[column.id];
    };
        
    var loadAdminDatail = function ()
    {
        $http.post($rootScope.settings.config.apiURL + '/mailbox/get/params/json', {cache: true, responseType: 'json'}).then(function(result){
            $scope.currentAdminId = result.data.currentAdmin.id;
            
        }, function(error) {
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
        });
    };

    loadAdminDatail();

    $scope.extractIdFromSubject = function (subject) {
        const regex = /#(\d+)\b/;
        const match = subject.match(regex);
        if (match && match[1]) {
            return match[1];
        }

        return null;
    }

    $scope.callServer = function(tableState) 
    {
        // start blockui indicator    
        $scope.leadEmailsTable.start();

        var pagination       = tableState.pagination;
        var start            = pagination.start || 0;     // This is NOT the page number, but the index of item in the list that you want to use to display the table.
        var number           = pagination.number || 10;   // Number of entries showed per page.

        var params = {
            start: start,
            number: number,
            params: tableState,
        };
        
        // come on give me data from backend
        $scope.loadEmails = function() {
                $http.post($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/logs/emails/json', params).then(function (result) {
                    // update controller container for data from response
                    $scope.displayed = result.data.data;
                    // stop blockui indicator
                    $scope.leadEmailsTable.stop();

                    //set the number of pages so the pagination can update
                    tableState.pagination.totalItemCount = result.data.total;
                    tableState.pagination.numberOfPages = Math.ceil(tableState.pagination.totalItemCount / tableState.pagination.number);

                    $scope.updateTotalStats(tableState.pagination);

                }, function (error) {

                    // show message just in case
                    $scope.scopeMessages.push({
                        type: 'danger',
                        title: "Error!",
                        content: error.data.msg ? error.data.msg : error.statusText,
                    });

                });
            };

        setInterval(function(){
            $scope.loadEmails();
        }.bind(this), 60000);

        $scope.loadEmails();
    };

    
    // set up defaults for form
    if(leadMainDetailsData.email != 'undefined' && leadMainDetailsData.email != '') {
        $scope.formData.targetEmails.push(leadMainDetailsData.email);
    }
    if(typeof leadMainDetailsData.client !== undefined && leadMainDetailsData.client != null) {
        if(typeof leadMainDetailsData.client.email !== undefined && leadMainDetailsData.client.email != null && $scope.formData.targetEmails.indexOf(leadMainDetailsData.client.email) == -1 ) {
            $scope.formData.targetEmails.push(leadMainDetailsData.client.email);
        }
    }

    //Testowe przypisanie maili
    $scope.formData.ccTargetEmails.push("test1@modulesgarden.com");
    $scope.formData.ccTargetEmails.push("test2@modulesgarden.com");
    $scope.formData.ccTargetEmails.push("test3@modulesgarden.com");

    $scope.formData.bccTargetEmails.push("testowo1@modulesgarden.com");
    $scope.formData.bccTargetEmails.push("testowo2@modulesgarden.com");
    $scope.formData.bccTargetEmails.push("testowo3@modulesgarden.com");

    $scope.$watch('formData.targetEmails',function () {
        if($scope.formData.targetEmails.length > 0) {
            //$scope.modelSentEmail.to = String($scope.formData.targetEmails[0]);
        }
    });
    
    
    /**
     * Kind of tricky feature
     * there are plenty of data we want to use for fill forms/etc
     * there is no need to wait for whole page to render as we do not obtain it
     * so lets load it in background
     * 
     * // support departments
     * // templates to use
     * 
     */
    getDataForFormsInBackground = function()
    {

        // come on give me data from backend
        $http.get($rootScope.settings.config.apiURL + '/helpers/lead/backgroundFormData/json', {cache: false}).then(function(result) 
        {
            $scope.showLead = result.data.showLeadColumn;

            $scope.formData.templates   = result.data.templates;
            
            if ($scope.formData.departments.length > 0)
            {
                $scope.formData.departments.splice(0,$scope.formData.departments.length);
            }
            $scope.formData.departments = result.data.departments;

            $scope.formData.departments.insert(0, {id:0, number:0, fullemail: result.data.system_email});
            
//            if($scope.formData.templates.length) {
//                $scope.modelSentEmail.template  = $scope.formData.templates[0].id;
//            }
            
            if($scope.formData.departments.length) {
                $scope.modelSentEmail.from  = $scope.formData.departments[result.data.default_mail].number;
            }
            
            if($scope.formData.targetEmails.length > 0) {
                $scope.modelSentEmail.to = String($scope.formData.targetEmails[0]);
            }
        });
    };
    getDataForFormsInBackground();

    /**
     * Popup new window with email details
     * @param {type} id
     * @returns {undefined}
     */
    $scope.showEmailPreviewWindow = function(id, table)
    {
        window.open('crm.php/email/show/'+id+'/table/'+table,'','width=650,height=400,scrollbars=yes');
    };

    /**
     * Send email!
     * 
     * @returns {undefined}
     */
    $scope.sendEmailFormSubmit = function()
    {
        $scope.sendEmailProgress = true;
        $scope.newEmailContainer.start();
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        var emailForm = new FormData();

        if ($scope.modelSentEmail.showMailCopies) {
            emailForm.append("cc", $scope.modelSentEmail.cc);
            emailForm.append("bcc", $scope.modelSentEmail.bcc);
        }
        
        emailForm.append("to", $scope.modelSentEmail.to);

        for (var i = 0; i < $scope.formData.departments.length; i++) {
            if($scope.formData.departments[i].number == $scope.modelSentEmail.from) {
                emailForm.append("from", $scope.formData.departments[i].id);
                if ($scope.formData.departments[i].id != 0) {
                    emailForm.append("from_type_name", $scope.formData.departments[i].type_name);
                }
            }
        }
        emailForm.append("template", $scope.modelSentEmail.template);
        emailForm.append("content", $scope.modelSentEmail.content);
        emailForm.append("subject", $scope.modelSentEmail.subject);

        if($('#files').length)
        {
            var files = $('#files').prop('files');   // forgive me for using jquery :D

            for(i=0; i<files.length; i++) {
                emailForm.append("files[]", files[i]);
            }
        }

        // come on give me data from backend
        $http.post(
                $rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/emails/send/json', 
                emailForm,
                {
                    withCredentials: true,
                    headers: {'Content-Type': undefined },
                    transformRequest: angular.identity
                })
        .then(function(response) {

            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newEmailContainer.stop();

            $scope.sendEmailProgress = false;
            
            // triger refresh smart table
            $('#emails-table-search').trigger('input');

            if(response.data.status === 'error')
            {
                $scope.scopeMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText
                });
            }
            else
            {
                $scope.sendEmailDone     = true;
            }

            $timeout(function() {
                $scope.sendEmailDone = false
            }, 8000);

        }, function(response) {

            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newEmailContainer.stop();
            $scope.sendEmailDone     = false;
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
            
        });
    };
    
    $scope.insertTinyMceVariable = function(variable)
    {
        $scope.$broadcast('$tinymce:inject', variable);
    };
    
    $scope.availableVariables = [
        {
            header: 'Assigned Client',
            show:   true,
            variables: [
                {id: '{$contact.client.id}',            description: 'Client ID'},
                {id: '{$contact.client.firstname}',     description: 'Client First Name'},
                {id: '{$contact.client.lastname}',      description: 'Client Last Name'},
                {id: '{$contact.client.email}',         description: 'Client Email'},
                {id: '{$contact.client.companyname}',   description: 'Client Company Name'},
                {id: '{$contact.client.address1}',      description: 'Client Adress 1'},
                {id: '{$contact.client.address2}',      description: 'Client Adress 1'},
                {id: '{$contact.client.city}',          description: 'Client City'},
                {id: '{$contact.client.state}',         description: 'Client State/Region'},
                {id: '{$contact.client.postcode}',      description: 'Client Postcode'},
                {id: '{$contact.client.country}',       description: 'Client Country'},
                {id: '{$contact.client.phonenumber}',   description: 'Client Phone Number'},
                {id: '{$contact.client.lastlogin}',     description: 'Client Last Login'},
                {id: '{$contact.client.ip}',            description: 'Client Last Login IP'}
            ]
        },
        {
            header: 'System Variables',
            show:   true,
            variables: [
                {id: '{$company_name}', description: 'Company Name'},
                {id: '{$company_domain}', description: 'Company Domain'},
                {id: '{$company_logo_url}', description: 'Company Logo Url'},
                {id: '{$whmcs_url}', description: 'Link To WHMCS'},
                {id: '{$whmcs_link}', description: 'HTML generated Link to WHMCS'},
                {id: '{$whmcs_admin_url}', description: 'Link To WHMCS Adminarea'},
                {id: '{$whmcs_admin_link}', description: 'HTML generated Link to WHMCS Adminarea'},
                {id: '{$signature}', description: 'Global Email Signature'},
                {id: '{$date}', description: 'Date when send'},
                {id: '{$time}', description: 'Date and Time when send'}
            ]
        }
    ];
    
    $scope.tinymceOptions = {
        inline: false,
        plugins : [
                    "advlist autolink lists link image charmap preview hr",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime nonbreaking save table contextmenu directionality",
                    "paste textcolor colorpicker textpattern imagetools"
                ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview | forecolor backcolor",
        skin: 'lightgray',
        theme : 'modern'
    };

}]).directive('bindFile', [function () {
    return {
        require: "ngModel",
        restrict: 'A',
        link: function ($scope, el, attrs, ngModel) {
            el.bind('change', function (event) {
                ngModel.$setViewValue(event.target.files[0]);
                $scope.$apply();
            });
            
            $scope.$watch(function () {
                return ngModel.$viewValue;
            }, function (value) {
                if (!value) {
                    el.val("");
                }
            });
        }
    };
}]);