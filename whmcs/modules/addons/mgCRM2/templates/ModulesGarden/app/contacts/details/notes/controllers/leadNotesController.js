/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



angular.module("mgCRMapp").controller(
        'leadNotesController',
        ['$scope', '$state', '$stateParams', 'notesService', 'blockUI', 'ngDialog',
function( $scope, $state, $stateParams, notesService, blockUI, ngDialog)
{
    /////////////////////////////
    //    
    // INITIALIZE CONTAINERS ETC    
    /////////////////////////////
    // container for new note object
    $scope.newNoteContent = null;
    // show/hide new note form :D
    $scope.newNoteVisible = true;
    // determinate if form means add note or edit (if false)
    $scope.formModeAdd = true;
    $scope.currentlyEditedID = null;
    // container for notes
    $scope.notes = [];
    $scope.showHidden = false;
    // messages 
    $scope.scopeMessages = [];

    $scope.admins = [];
    $scope.adminsTemp = [];

    var activeIndex = 0;
    var mentionOffset = 0;
    var buttonActions = ['ArrowUp', 'ArrowDown', 'Enter', 'Tab', 'Shift', 'Control'];
    
    /**
     * Submit new note to backend
     */
    $scope.submitNoteForm = function()
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        $scope.newFormWorking = true;
        
        // send query
        res = notesService.addNew($stateParams.id, $scope.newNoteContent).then(function(response) 
        {
            // plain update container with added note
            $scope.notes.push(response.data.new);
            
            // cleare form
            $scope.newNoteContent = null;
            
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newFormWorking = false;
            
            $scope.scopeMessages.push({
                    type: 'success',
                    title: "Success!",
                    content: response.data.msg ? response.data.msg : 'The new note has been created successfully',
                });
        }, function(response) {
            $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: response.data.msg ? response.data.msg : 'error occured',
                });
            return response.data.msg ? response.data.msg : 'error occured';
        });
    };
        
        
    // Get the reference to the block service.
    $scope.notesContainer = blockUI.instances.get('notesContainer');
        
    
    // just function to obtain permisions roles
    getNotes = function()
    {
        // Start blocking the table
        $scope.notesContainer.start();

        if($scope.showHidden === true) {
            // obtain roles from backend
            $scope.notes = notesService.getWithDeleted({resourceID: $stateParams.id});
        } else {
            // obtain roles from backend
            $scope.notes = notesService.get({resourceID: $stateParams.id});
        }

        // when we recieve it
        $scope.notes.$promise.then(function(data) {
            $scope.notes = data;
            // on init get that roles
            $scope.notesContainer.stop();
        }, function(error) {
            // on init get that roles
            $scope.notesContainer.stop();
        });
    };
    // trigger on init
    getNotes();

    getAdmins = function()
    {
        $scope.notesContainer.start();

        if ($scope.admins.length == 0) {
            $scope.admins = notesService.getAdmins({resourceID: $stateParams.id});
            $scope.admins.$promise.then(function(data) {
                $scope.admins = data;
                initMentions();
            }, function(error) {
                $scope.notesContainer.stop();
            });
        }

        $scope.notesContainer.stop();
    };
    // trigger on init
    getAdmins();

    initMentions = function()
    {
        $("text-angular div[contenteditable=true]").keydown(function(event) {
            checkPressedKey(event);
        });
    };

    checkPressedKey = function(event)
    {
        var itemsList = $("ul.angular-mentions-list");

        if (event.key === '@') {
            itemsList.show();
            var caretPosition = getCaretPos(event);
            itemsList.css('left', caretPosition[0]);
            itemsList.css('top', caretPosition[1] + 10);
            mentionOffset = 0;
            $scope.adminsTemp = $scope.admins;
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

    getCaretPos = function(e)
    {
        var x = 0;
        var y = 0;

        var isSupported = typeof window.getSelection !== "undefined";

        if (isSupported) {
            var selection = window.getSelection();
            if (selection.rangeCount !== 0) {
                var range = selection.getRangeAt(0).cloneRange();
                range.collapse(true);
                var rect = range.getClientRects()[0];
                if (rect) {
                    x = rect.left;
                    y = rect.top;
                }
            }
        }

        return [x, y];
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
        var tetContainer = $("text-angular div[contenteditable=true] p").last()[0];
        var range = document.createRange();
        var sel = window.getSelection();

        tetContainer.innerText = tetContainer.innerText.substring(0, tetContainer.innerText.length - mentionOffset) + adminFull;

        range.setStart(tetContainer, 1);
        range.collapse(true);

        sel.removeAllRanges();
        sel.addRange(range);

        $("ul.angular-mentions-list").hide();
    };
    
    // turn off/on display hidden records and obtain it from backend again
    $scope.triggerShowHidden = function() {
        $scope.showHidden = !$scope.showHidden;
        getNotes();
    };
    
    /**
     * helper might be usefull
     */
    function getNoteByID(noteID)
    {
        
        for (var i = 0; i < $scope.notes.length; i++) 
        {
            if( noteID == $scope.notes[i].id ) {
                return $scope.notes[i];
            }
        }   
        
        return false;
    };
    
    
    
    /////////////////////////////
    // DELETE
    /////////////////////////////
    $scope.triggerDeleteNote = function(noteID, force)
    {
        if(force === true) {
            msg = '{{ "delete.note.message" | translate }}';
            msgok = 'The note has been deleted successfully';
        } else {
            msg = '{{ "hide.note.message" | translate }}';
            msgok = 'The note has been hidden successfully';
        }
        
        // triger confirm dialog
        $scope.confirmDeleteDialog = ngDialog.openConfirm({
            template:'\
                <h2>' + msg + '</h2>\
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

            // send query
            note = getNoteByID(noteID);
            
            if(force === true) {
                res = notesService.forceDelete({id: note.id, resource_id:note.resource_id});
            } else {
                res = notesService.softDelete({id: note.id, resource_id:note.resource_id});
            }
        
            res.$promise.then(function(response) {
                // loading indicator as compleate
                $scope.$emit('loadingNotification', {type: 'finished'});
            
                var index = $scope.notes.indexOf(note);
                
                if(force === true) {
                    $scope.notes.splice(index, 1);     
                } else {
                    $scope.notes[index].updated_at = response.updated_at;
                    $scope.notes[index].deleted_at = response.deleted_at ? response.deleted_at : null;
                }
                
                $scope.scopeMessages.push({
                    type: 'success',
                    title: "Success!",
                    content: msgok,
                });


            },function(response) {
                $scope.scopeMessages.push({
                    type: 'danger',
                    title: "Error!",
                    content: response.data.msg ? response.data.msg : response.statusText,
                });

            });
    
        });
    }
    
    /**
     * Restore hidden note
     */
    $scope.triggerRestoreNote = function(noteID)
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});

        // send query
        note = getNoteByID(noteID);
        
        res = notesService.restore(note);

        res.$promise.then(function(response) {
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            var index = $scope.notes.indexOf(note);
            
            $scope.notes[index].updated_at = response.updated_at;
            $scope.notes[index].deleted_at = null;


        },function(response) {
            $scope.scopeMessages.push({
                type: 'danger',
                title: "Error!",
                content: response.data.msg ? response.data.msg : response.statusText,
            });

        });
    };
    
    
    /**
     * Trigger edit
     */
    $scope.triggerEditNote = function(noteID)
    {
        $scope.formModeAdd       = false;
        $scope.currentlyEditedID = noteID;
        
        note = getNoteByID($scope.currentlyEditedID);
        $scope.newNoteContent = note.content;
    };
    
    /**
     * Save edited note to backend
     */
    $scope.submitEditedForm = function()
    {
        // push loading indicator
        $scope.$emit('loadingNotification', {type: 'progress'});
        $scope.newFormWorking = true;
        
        note = getNoteByID($scope.currentlyEditedID);
        note.content = $scope.newNoteContent;
        
        // send query
        res = notesService.update(note).$promise.then(function(response) 
        {
            var index = $scope.notes.indexOf(note);
            $scope.notes[index] = response.note;
            
            // cleare form
            $scope.cancelEditForm();
            
            // loading indicator as compleate
            $scope.$emit('loadingNotification', {type: 'finished'});
            $scope.newFormWorking = false;
            $scope.scopeMessages.push({
                type: 'success',
                title: "Success!",
                content: 'The note has been edited successfully',
            });

        }, function(response) {
            // push message to editable (that module handle show this error in form)
            return response.data.msg ? response.data.msg : 'error occured';
        });
    };
    
    /**
     * Cancel edit form
     */
    $scope.cancelEditForm = function()
    {
        $scope.currentlyEditedID       = null; 
        $scope.formModeAdd             = true;
        $scope.newNoteContent   = null;
    };
    
    $scope.textAngularOptions = {}
}]);