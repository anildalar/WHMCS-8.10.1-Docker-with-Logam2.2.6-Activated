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
        'detailsSummaryQuickActionTabsCtrl',
        ['$scope', '$rootScope', '$state', '$stateParams', 'leadMainDetailsData', '$http', 'ngDialog', 'AclService', 'blockUI', 'notesService', '$timeout',
function( $scope,   $rootScope,   $state,   $stateParams,   leadMainDetailsData,   $http,   ngDialog,   AclService,   blockUI,   notesService,   $timeout)
{
    $scope.scopeSummaryMessages = [];
    $scope.settings    = {};
    $scope.settings.datapicker    = {};
    $scope.followupDataOpen = false;
    $scope.fieldsDataRaw    = [];
    $scope.maxUploadFileSize = null;

    $scope.adminsTemp = [];

    var activeIndex = 0;
    var mentionOffset = 0;
    var buttonActions = ['ArrowUp', 'ArrowDown', 'Enter', 'Tab', 'Shift', 'Control', 'Alt'];

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
    
    $scope.convertToInt = function(id)
    {         
        return parseInt(id, 10);     
    };
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    
    // contain messages
    $scope.scopeMessages        = [];
    $scope.newNoteContent       = '';
    
    var reFollowupValid = false;
    $scope.newFollowup          = {
        date:   new Date(),
        admin:  $rootScope.currentAdminID
    };
    
    // set up active tab
    if(AclService.can('resources.allow_notes')) {
        $scope.activeTab = 'note';
    } else if(AclService.can('resources.allow_email')) {
        $scope.activeTab = 'email';
    } else if(AclService.can('resources.allow_sms')) {
        $scope.activeTab = 'sms';
    } else if(AclService.can('resources.create_followup')) {
        $scope.activeTab = 'followup';
    } else if(AclService.can('resources.allow_ticket_respose')) {
        $scope.activeTab = 'ticketResponse';
    }
            
    // email
    $scope.newEmailContainer = blockUI.instances.get('newEmailContainer');
    // set up block ui references
    $scope.blockContainers= {};
    $scope.blockContainers.newNote              = blockUI.instances.get('newNoteContainer');
    $scope.blockContainers.newTicketReply       = blockUI.instances.get('newTicketReplyContainer');
    $scope.blockContainers.newFollowupContainer = blockUI.instances.get('newFollowupContainer');
    
    // sms
    $scope.newSmsContainer = blockUI.instances.get('newSmsContainer');
    
    $scope.formData = {
        departments:        [],
        templates:          [],
        targetEmails:       [],
        admins:             []
    };
    $scope.smsPhoneList = [];

    $scope.sendEmailDone     = false;
    $scope.modelSentEmail = {
        to: null,
        template: 'false',
    };
    
    $scope.sendSmsDone     = false;
    $scope.modelSentSms = {
        to: null,
        phonenumber: null,
    };
    
    $scope.sms = {
        view: false,
        error: ""
    };
    
    // just function to obtain permisions roles
    getFieldsWithGroups = function()
    {
        $http.get($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/field/getAll/json')
            .then(function(result) {
                $scope.fieldsDataRaw = result.data.fields;
                $scope.setUpTargetEmailsToForm();
                $scope.setUpAdminsToForm();
            }, function(error) {
        });
    };
    getFieldsWithGroups();
        
    /**
     * initialize some shit from parent states
     * just to set up parameters to choose from form
     */
    $scope.setupDataForms = function()
    {
        
        if ($scope.formData.departments.length > 0) {
            $scope.formData.departments.splice(0,$scope.formData.departments.length);
        }

        $scope.formData.departments = $scope.temp.departments;
        $scope.formData.templates   = $scope.temp.templates.admin;
        $scope.formData.admins   = $scope.temp.admins;

        $scope.formData.departments.insert(0, {id:0, number:0, fullemail: $scope.temp.system_email});

        if($scope.formData.departments.length) {
            $scope.modelSentEmail.from      = $scope.formData.departments[$scope.temp.default_mail].number;
        }
            
    };

    initMentions = function()
    {
        $("textarea.angular-mentions").keydown(function(event) {
            checkPressedKey(event);
        });
    };

    initMentions();

    checkPressedKey = function(event)
    {
        var itemsList = $("ul.angular-mentions-list");

        if (event.key === '@') {
            itemsList.show();
            var caretPosition = getCaretCoordinates();

            itemsList.css('left', caretPosition.left);
            itemsList.css('top', caretPosition.top);
            mentionOffset = 0;
            $scope.adminsTemp = $scope.formData.admins.slice();
        } else if (!itemsList.is(":hidden")) {
            if (event.key.length === 1 && event.key.match(/[a-z]/i)) {
                updateItemsList(event.key.toLowerCase());
                if ($scope.adminsTemp.length === 0) {
                    itemsList.hide();
                }
            } else if (buttonActions.includes(event.key)) {
                event.preventDefault();
                executeActionByKey(event.key);
            } else {
                $scope.adminsTemp = [];
                itemsList.hide();
            }
        }
    };

    getCaretCoordinates = function () {
        var element = document.querySelector("textarea.angular-mentions");
        var rects = element.getBoundingClientRect();
        var position = element.selectionEnd;
        var mirrorDiv = document.getElementById(element.nodeName + '--mirror-div');
        var constantStyleOffset = 15;

        if (!mirrorDiv) {
            mirrorDiv = document.createElement('div');
            mirrorDiv.id = element.nodeName + '--mirror-div';
            document.body.appendChild(mirrorDiv);
        }

        var style = mirrorDiv.style;

        style.whiteSpace = 'pre-wrap';
        style.position = 'absolute';
        style.top = element.offsetTop + 'px';
        style.visibility ='hidden';
        style.overflow = 'hidden';

        mirrorDiv.textContent = element.value.substring(0, position);

        var span = document.createElement('span');
        span.textContent = element.value.substring(position) || '.';
        span.style.backgroundColor = "lightgrey";
        mirrorDiv.appendChild(span);

        return {
            top: span.offsetTop  + rects.top - element.scrollTop + constantStyleOffset,
            left: span.offsetLeft + rects.left + constantStyleOffset,
        };
    };

    updateItemsList = function(pressedKey)
    {
        $scope.adminsTemp = $scope.adminsTemp.filter(function(admin) {
                var adminName = admin.full;
                if (typeof adminName === "string") {
                    adminName = adminName.toLowerCase();
                    if (adminName[mentionOffset] === pressedKey) {
                        return admin;
                    }
                }
        });

        mentionOffset++;
    };

    executeActionByKey = function(pressedKey) {
        switch (pressedKey) {
            case 'ArrowUp':
                if (activeIndex > 0) {
                    activeIndex--;
                    addActiveClassByActiveIndex();
                }
                break;
            case 'ArrowDown':
                if (activeIndex < $scope.adminsTemp.length-1) {
                    activeIndex++;
                    addActiveClassByActiveIndex();
                }
                break;
            case 'Enter':
            case 'Tab':
                selectActiveItem();
        }
    };

    addActiveClassByActiveIndex = function() {
        $("ul.angular-mentions-list li").removeClass('mention-item-active');
        $("ul.angular-mentions-list li[value=" + activeIndex + "]").addClass('mention-item-active');
    };

    selectActiveItem = function() {
        var activeAdminName = $("ul.angular-mentions-list li.mention-item-active a")[0].innerText;
        $scope.selectItemMentionList(activeAdminName);
    };

    $scope.selectItemMentionList = function(adminFull)
    {
        $("textarea.angular-mentions").val(function(i, text) {
            return text.substring(0, text.length - mentionOffset) + adminFull;
        });

        $("ul.angular-mentions-list").hide();
    };
    
    // parse some initial info to use in form after
    parseSettings = function(){
        $scope.settings.usedatatime         = !$rootScope.settings.config.app.followups_per_day;
        $scope.settings.showAdminReminers   = true;
        $scope.settings.showClientReminers  = false;
        $scope.settings.sms                 = $rootScope.settings.config.integrations.sms_center;
        $scope.settings.beforeOptions   = [{key: 'minutes', name:'Minutes'}, {key: 'hours', name:'Hours'}, {key: 'days', name:'Days'}];
    
    
        // global for datapicker
        $scope.settings.datapicker.options = {
            showWeeks: false,
            startingDay: $rootScope.settings.config.app.defaultWeekDay
        };
        
        if($scope.settings.usedatatime === true) {
            $scope.settings.datapicker.format = 'yyyy-MM-dd HH:mm';
            $scope.settings.datapicker.enabletime = true;
        } else {
            $scope.settings.datapicker.format = 'yyyy-MM-dd';
            $scope.settings.datapicker.enabletime = false;
            $scope.newFollowup.date = moment([]).format("YYYY-MM-DD");
        }
    
    };
    parseSettings(); // trigger on init
    
    $scope.closeNote = function()
    {
        $scope.newFollowupResult.done = false;
        $scope.formSubmitTicketDone = false;
        $scope.sendEmailDone = false;
        $scope.sendSmsDone     = false;
        $scope.sms.view = false;
        $scope.sms.error = "";
        $scope.formSubmitNoteDone = false;
    };

    $scope.$on('header_gotTmpData', function(event) {
        $scope.newFollowup.type  = $scope.temp.followupTypes[0].id;
        $scope.newFollowup.status  = $scope.temp.followupStatuses[0].id;

        $scope.setupDataForms();        
    });
    $scope.setupDataForms(); 
    
    if ($scope.temp.followupTypes.length > 0)
    {
        $scope.newFollowup.type  = $scope.temp.followupTypes[0].id;
    }

    if ($scope.temp.followupStatuses.length > 0)
    {
        $scope.newFollowup.status  = $scope.temp.followupStatuses[0].id;
    }
    
    // set up defaults for form
    $scope.setUpTargetEmailsToForm = function()
    {
        $scope.formData.targetEmails = [];
        
        if(typeof leadMainDetailsData.email !== undefined && leadMainDetailsData.email != '') {
            $scope.formData.targetEmails.push(leadMainDetailsData.email);
        }
        if(typeof leadMainDetailsData.client !== undefined && leadMainDetailsData.client != null) {
            if(typeof leadMainDetailsData.client.email !== undefined && leadMainDetailsData.client.email != null && $scope.formData.targetEmails.indexOf(leadMainDetailsData.client.email) == -1 ) {
                $scope.formData.targetEmails.push(leadMainDetailsData.client.email);
            }
        }
        
        if($scope.formData.targetEmails.length) {
            $scope.modelSentEmail.to = $scope.formData.targetEmails[0];
            $scope.modelSentSms.to = $scope.formData.targetEmails[0];
        }
        if(typeof leadMainDetailsData.phone !== undefined && leadMainDetailsData.phone != "") {
            if($scope.smsPhoneList.indexOf(leadMainDetailsData.phone) === -1){
                $scope.smsPhoneList.push(leadMainDetailsData.phone);
            }
            $scope.modelSentSms.phonenumber = leadMainDetailsData.phone;
        }
        if(typeof leadMainDetailsData.client !== undefined
            && leadMainDetailsData.client != null
            && leadMainDetailsData.client.phonenumber != 'undefined'
            && leadMainDetailsData.client.phonenumber != "") {
            if(typeof leadMainDetailsData.client.phonenumber !== undefined && leadMainDetailsData.client.phonenumber != null) {
                if($scope.smsPhoneList.indexOf(leadMainDetailsData.client.phonenumber) === -1){
                    $scope.smsPhoneList.push(leadMainDetailsData.client.phonenumber);
                }
                if ($scope.modelSentSms.phonenumber == null) {
                    $scope.modelSentSms.phonenumber = leadMainDetailsData.client.phonenumber;
                }
            }
        }
        
        for(var $i = 0; $i < $scope.fieldsDataRaw.length; $i++)
        {
            if ($scope.fieldsDataRaw[$i].field_type == 'phone' && $scope.fieldsDataRaw[$i].data && $scope.fieldsDataRaw[$i].data != '')
            {
                $scope.smsPhoneList.push($scope.fieldsDataRaw[$i].data);
                if(typeof $scope.modelSentSms.phonenumber === undefined || $scope.modelSentSms.phonenumber == null) {
                    $scope.modelSentSms.phonenumber = $scope.fieldsDataRaw[$i].data;
                }
            }
        }

        if(reFollowupValid) checkTemplates();
        
    };

    $scope.setUpAdminsToForm = function()
    {
        for (var key in $scope.formData.admins) {
            if ($scope.formData.admins[key].id === 0) {
                $scope.formData.admins.splice(key, 1);
            }
        }
    };

    
    /////////////////////////////
    // TAB ADD NEW NOTE
    /////////////////////////////
    $scope.addNewNote = function() {
        $scope.blockContainers.newNote.start();
        
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        // send query
        res = notesService.addNew($stateParams.id, $scope.newNoteContent).then(function(response) 
        {
            $scope.newNoteContent = '';
            
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $rootScope.$broadcast('summaryNotesTriggerRefresh');
            $scope.blockContainers.newNote.stop();
            
            $scope.formSubmitNoteDone     = true;
            
            $timeout(function() {
                $scope.formSubmitNoteDone = false
            }, 8000);

            
        }, function(response) {
            $scope.formSubmitNoteDone     = true;
            
            // show message just in case
            $scope.scopeMessages.push({
                type:   'danger',
                title:   "Error!",
                content: error.data.msg ? error.data.msg : error.statusText,
            });
            
            $scope.blockContainers.newNote.stop();
        });
        
    };

    $scope.toggleCopyOptions = function()
    {
        $("div.mailCopyOption").toggle();
    };

    /////////////////////////////
    // TAB SEND EMAIL
    /////////////////////////////
    
    /**
     * Send email!
     * 
     * @returns {undefined}
     */
    $scope.sendEmailFormSubmit = function()
    {
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

        if ($scope.modelSentEmail.content != undefined) {
            emailForm.append("content", $scope.modelSentEmail.content);
        }

        if ($scope.modelSentEmail.subject != undefined) {
            emailForm.append("subject", $scope.modelSentEmail.subject);
        }

        if($('#files').length)
        {
            var files = $('#files').prop('files');   // forgive me for using jquery :D

            for(i=0; i<files.length; i++) {
                emailForm.append("files[]", files[i]);
            }
        }

        // console.log($rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/emails/send/json');
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
            
            if(response.data.status === 'success')
            {
                $scope.sendEmailDone     = true;
            
                $timeout(function() {
                $scope.sendEmailDone = false
                }, 8000);
            }
            else
            {
                $scope.sendEmailDone     = false;        
                $scope.scopeSummaryMessages.push({
                    type:   'danger',
                    title:   "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });            
                $timeout(function() {
                    $scope.scopeSummaryMessages.pop();
                }, 8000);
            }
            
        }, function(response) {
            
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newEmailContainer.start();
            $scope.sendEmailDone     = false;
            
            // show message just in case
            $scope.scopeSummaryMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
            
        });
        
        
        
    };
    
    
    /////////////////////////////
    // TAB SEND SMS
    /////////////////////////////
    
    /**
     * Send sms!
     * 
     * @returns {undefined}
     */
    $scope.sendSmsFormSubmit = function()
    {
        $scope.newSmsContainer.start();
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        var smsForm = new FormData();
        
        smsForm.append("to", $scope.modelSentSms.to);
        smsForm.append("phonenumber", $scope.modelSentSms.phonenumber);
        smsForm.append("content", $scope.modelSentSms.content);

        
        // come on give me data from backend
        $http.post(
                $rootScope.settings.config.apiURL + '/lead/' + $stateParams.id + '/sms/send/forcewhmcs/json', 
                smsForm,
                {
                    withCredentials: true,
                    headers: {'Content-Type': undefined },
                    transformRequest: angular.identity
                })
        .then(function(response) {
            
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newSmsContainer.stop();
            
            
            if (response.data.status == "success") {
                $scope.sendSmsDone     = true;

                $timeout(function() {
                    $scope.sendSmsDone = false
                }, 8000);
            } else {
                $scope.sms.error = response.data.msg ? response.data.msg : response.statusText;
                $scope.sms.view = true;
                
                $timeout(function() { 
                    $scope.sms.view = false;
                    $scope.sms.error = '';
                }, 8000);
            }
        }, function(response) {
            
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newSmsContainer.stop();
            $scope.sendSmsDone     = false;

            // show message just in case
            $scope.scopeSummaryMessages.push({
                type:   'danger',
                title:   "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });
            
        });
        
        
        
    };
    
    
    
    /////////////////////////////
    // FOLLOWUP ADD
    /////////////////////////////
    // update backend
    $scope.newFollowupResult = {};
    $scope.newFollowupFormSubmit = function()
    {
        $scope.blockContainers.newFollowupContainer.start();
        
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        if($scope.newFollowup.date == null) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.blockContainers.newFollowupContainer.stop();
            $scope.newFollowupResult.error  = 'Please, Correct date (etc. "2017-12-21 23:59", "2017-12-21", "2017-12-21 00:01")';
            $scope.newFollowupResult.done   = true;
            $scope.newFollowup.date = moment().format($scope.settings.datapicker.format.toUpperCase());
            $timeout(function() {
                $scope.newFollowupResult.done   = false;
            }, 8000);
            return ;
        }
        
        var params = {
            admin: $scope.newFollowup.admin,
            type: $scope.newFollowup.type,
            status: $scope.newFollowup.status,
            description: $scope.newFollowup.description,
            date: moment($scope.newFollowup.date).format()
        };

        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/lead/' + leadMainDetailsData.id + '/followups/addWithoutReminders/json', params)
        .then(function(response) {
            $scope.newFollowupResult.error  = false;
            
            // triger refresh smart table
            $('#followups-table-search').trigger('input');
            
        }, function(response) {
            $scope.newFollowupResult.error  = response.data.msg;
            
        }).finally(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.blockContainers.newFollowupContainer.stop();
            $scope.newFollowup.description = null;
            $scope.newFollowupResult.done   = true;
            
            $timeout(function() {
                $scope.newFollowupResult.done   = false;
            }, 8000);
            
        });
        
    }
    $scope.followupMessages = [];
    
    
    
    
    /////////////////////////////
    // TICKET REPLY
    /////////////////////////////
    $scope.newTicketReply = {
        resource_id: $stateParams.id,
    };
    // update backend
    $scope.newTicketReplyFormSubmit = function()
    {
        $scope.blockContainers.newTicketReply.start();
        
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        
        
        // come on give me data from backend
        $http.post($rootScope.settings.config.apiURL + '/lead/ticket/' + leadMainDetailsData.ticket.id + '/respond/forcewhmcs/json', $scope.newTicketReply)
        .then(function(response) {
            $scope.formSubmitTicketError    = false;
            
        }, function(response) {
            $scope.formSubmitTicketDone     = true;
            $scope.formSubmitTicketError    = response.data.msg;
            
        }).finally(function(response) {
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.blockContainers.newTicketReply.stop();
            
            $scope.formSubmitTicketDone     = true;
            
            $timeout(function() {
                $scope.formSubmitTicketDone = false
            }, 8000);
            
        });
    }
    
    $scope.availableVariables = [
        {
            header: 'Assigned Client',
            show:   true,
            alert:  'These variables might be empty when Mass Email will be sent to Contacts',
            variables: [
                {id: '{$client.id}',            description: 'Client ID'},
                {id: '{$client.firstname}',     description: 'Client First Name'},
                {id: '{$client.lastname}',      description: 'Client Last Name'},
                {id: '{$client.email}',         description: 'Client Email'},
                {id: '{$client.companyname}',   description: 'Client Company Name'},
                {id: '{$client.address1}',      description: 'Client Adress 1'},
                {id: '{$client.address2}',      description: 'Client Adress 1'},
                {id: '{$client.city}',          description: 'Client City'},
                {id: '{$client.state}',         description: 'Client State/Region'},
                {id: '{$client.postcode}',      description: 'Client Postcode'},
                {id: '{$client.country}',       description: 'Client Country'},
                {id: '{$client.phonenumber}',   description: 'Client Phone Number'},
                {id: '{$client.lastlogin}',     description: 'Client Last Login'},
                {id: '{$client.ip}',            description: 'Client Last Login IP'},
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
                {id: '{$time}', description: 'Date and Time when send'},
            ],
        }
    ];
}]);