// *************************************************************************
// * Contabo Cloud Automation                                              *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2024.4                                                       *
// * Build Date: 17 June 2024                                              *
// *************************************************************************
// * Email: sales@whmcsmodule.net                                          *
// * Website: https://www.whmcsmodule.net                                  *
// *************************************************************************
$(document).ready(function(){

  serverStatus();
  osImages();
    primaryIPs();
    logview();
    snapsview();
  //2020.7

var prodstatus = $("#prodstatus").find('option:selected').val();
if(prodstatus == 'Active'){
$("#btnSuspend").removeClass('btn btn-default').addClass('btn btn-danger btn-labeled suspend btn-sm').show();
$("#btnTerminate").removeClass('btn btn-default').addClass('btn btn-danger btn-labeled terminate btn-sm').show();
$("#btnCreate").removeClass("btn btn-default").addClass("btn btn-primary unsuspend btn-labeled suspend btn-sm").show();
$("#btnUnsuspend").removeClass("btn btn-default").addClass("btn btn-primary unsuspend btn-labeled suspend btn-sm").show();
}


  //Add Above
  });

  //2022.1
  function snapsview(){
    var snaps = $("#snaps").DataTable({
              destroy: true,
              "ajax": {
                "url": window.location.href,
                "type": "POST",
                data: { subaction:"getsnapShots" },
              },
              "info": false,
              "columnDefs": [{ "orderable": false, "targets": 4 }],
              "length": false,
              scrollX: false,
              language: {processing: "<img src='../modules/addons/ContaboVM/assets/img/spinner.svg'> "+langVar.Loading},
              processing: true,
              searching: true,
              autoWidth: false,
              "order": [],
            });
  }


  //2022.1
  function logview(){
    var logs = $("#logs").DataTable({
              destroy: true,
              "ajax": {
                "url": window.location.href,
                "type": "POST",
                data: { subaction:"getInstancelogs" },
              },
              "info": false,
              "columnDefs": [{ "orderable": false, "targets": 1 }],
              "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
            "iDisplayLength": 5,
              "length": false,
              scrollX: false,
              language: {processing: "<img src='../modules/addons/ContaboVM/assets/img/spinner.svg'> "+langVar.Loading},
              processing: true,
              searching: true,
              autoWidth: false,
              "order": [],
            });
  }

//2022.1
function primaryIPs(){
  var ShowIPs = $("#ShowIPs").DataTable({
            destroy: true,
            "ajax": {
              "url": window.location.href,
              "type": "POST",
              data: { subaction:"getPrimaryIPInfo" },
            },
            "info": false,
            "columnDefs": [{ "orderable": false, "targets": 3 }],
            "length": false,
            scrollX: false,
            language: {processing: "<img src='../modules/addons/ContaboVM/assets/img/spinner.svg'> "+langVar.Loading},
            processing: true,
            searching: true,
            autoWidth: false,
            "order": [],
          });
}

//2022.1
  function osImages(){
    var OSImageTable = $("#OSImageTable").DataTable({
                  destroy: true,
                        "ajax": {
                            "url": window.location.href,
                            "type": "POST",
                            data: { subaction:"getOperatingSystems" },
                        },
                        "info": false,
                        "columnDefs": [{ "orderable": false, "targets": 2 }],
                        "length": false,
                        "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                      "iDisplayLength": 5,
                        scrollX: false,
                        language: {processing: "<img src='../modules/addons/ContaboVM/assets/img/spinner.svg'> "+langVar.Loading},
                                processing: true,
                                searching: true,
                                autoWidth: false,
                                "order": [],
     });
  }

//General Information 2022.1
function serverStatus() {
  $("#custom-loader").show();
    $.post({
        url: window.location.href,
        data: { subaction:'AjaxServerStatus' },
      }).done(function(response){

    var parsed = JSON.parse(response);
  //  console.log(parsed);

    if (parsed.osimg != 'noneos') {
$("#osimg > img").attr("src", '../modules/servers/ContaboVM/assets/img/' + parsed.osimg + '.svg').show();
$("#osimg > img").attr("alt", parsed.osdes).show();
$("#osdes").html(parsed.osdes).show();
        } else {
$("#osimg > img").attr("src", '../modules/servers/ContaboVM/assets/img/noneos.svg').show();
$("#osimg > img").attr("alt", parsed.osdes).show();
$("#osdes").html(parsed.osdes).show();
        }

    if( parsed.srvstatus == 'on' ){
     $("#offdisplay").show();
     $('#poweroffdisplay').show();
    } else {
     $("#ondisplay").show();
     $('#powerondisplay').show();
    }

    if( parsed.isSnapshot == 'on' ){
     $("#snapdisplay").show();
     $('#snaptables').show();
    } else {
      $("#snapdisplay").hide();
      $('#snaptables').hide();
    }
$("#custom-loader").hide();
  });
};


function RebuildOS(osID, OSDesc, secretId) {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.osinstalltitle,
  content: langVar.osinstallsure+": "+OSDesc+" ?",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.post( window.location.href,
          { subaction:"Rebuild", LinuxOS:osID, secretId:secretId })
        .done(function( data ) {
        //  console.log(data);
          jQuery.growl.notice( {
           title: '',
           message: langVar.osinstallsuccess,
         });
          $("#OSImageTable").DataTable().ajax.reload().columns.adjust();
          $("#custom-loader").hide();
          $(window).scrollTop(0);
        });
      }
    },
    cancelAction: {
      btnClass: "btn-danger",
      text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
      action: function(){

      }
    }
  }
});
};


//Hostname Update
function HostUpdateAjax() {
  var hostval = $(".hostnamein").val();
  if(!hostval){
      $.alert(langVar.HostnaedRequired);
      return false;
  }
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.Hostname_Update,
  content: langVar.HostUpdateSure+": "+hostval+" ?",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.ajax({
          url: window.location.href,
          type: 'post',
          data : { subaction:'HostnameUpdate', hostname:hostval },
        }).done(function(response){
          jQuery.growl.notice( {
           title: '',
           message: langVar.HostnameupdatedSuccess,
         });
          $('#disname').text(hostval).show();
          $(".hostnamein").val('');
          $("#custom-loader").hide();
          $(window).scrollTop(0);
        });
      }
    },
    cancelAction: {
      btnClass: "btn-danger",
      text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
      action: function(){

      }
    }
  }
});
};

//2024.3
function vmRescue() {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-2",
  title: langVar.Enable_Rescue,
  content: langVar.Enable_Rescue_Msg+" .",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'Rescue' },
       }).done(function(response){
          jQuery.growl.notice( {
            title: '',
            message: langVar.Disable_Rescue_success,
         });
         $("#custom-loader").hide();
         $(window).scrollTop(0);
       });
      }
    },
    cancelAction: {
      btnClass: "btn-danger",
      text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
      action: function(){

      }
    }
  }
});
};

//2022.1
function vmReboot() {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-2",
  title: langVar.Server_Reset,
  content: langVar.Reboot_Message+" ?",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxReboot' },
       }).done(function(response){
          jQuery.growl.notice( {
            title: '',
            message: langVar.vmRebootSuccess,
         });
         $("#custom-loader").hide();
         $(window).scrollTop(0);
       });
      }
    },
    cancelAction: {
      btnClass: "btn-danger",
      text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
      action: function(){

      }
    }
  }
});
};

//2022.1
  function vmPowerOff() {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-2",
    title: langVar.PowerOff_Server,
    content: langVar.PowerOff_Server_Sure+" ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxPowerOff' },
         }).done(function(response){
            jQuery.growl.notice( {
              title: '',
              message: langVar.vmPowerOffSuccess,
           });
           $("#custom-loader").hide();
           $(window).scrollTop(0);
           $("#ondisplay").show();
           $("#offdisplay").hide();
           $("#serverrun").removeClass('status-field completed').addClass('status-field pending').html('off').show();
         });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
        action: function(){

        }
      }
    }
  });
  };

//2022.1
  function vmPowerOn() {
  $.confirm({
    type: "blue",
    columnClass: "col-md-6 col-md-offset-2",
    title: langVar.PowerOn_Server,
    content: langVar.PowerOn_Server_Sure+" ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxPowerOn' },
         }).done(function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.vmPowerOnSuccess,
          });
           $("#custom-loader").hide();
           $(window).scrollTop(0);
           $("#offdisplay").show();
           $("#ondisplay").hide();
           $("#serverrun").removeClass('status-field pending').addClass('status-field completed').html('running').show();
         });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
        action: function(){

        }
      }
    }
  });
  };


  function deleteSnap(instance, snapId) {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.SnapshotAction,
    content: langVar.SnapshotSure+" ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.post( window.location.href,
            { subaction:"SnapAction", instance:instance, snapId:snapId, snapact:"delete" })
          .done(function( data ) {
            jQuery.growl.notice( {
             title: '',
             message: langVar.snapactsuccess,
           });
            $("#snaps").DataTable().ajax.reload().columns.adjust();
            $("#custom-loader").hide();
            $(window).scrollTop(0);
          });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
        action: function(){

        }
      }
    }
  });
  };

  function rollbackSnap(instance, snapId) {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.SnapshotAction,
    content: langVar.SnapshotSure+" ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.post( window.location.href,
            { subaction:"SnapAction", instance:instance, snapId:snapId, snapact:"rollback" })
          .done(function( data ) {
            jQuery.growl.notice( {
             title: '',
             message: langVar.snapactsuccess,
           });
            $("#custom-loader").hide();
            $(window).scrollTop(0);
          });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
        action: function(){

        }
      }
    }
  });
  };

  function vmSnapshot(instance, snapname) {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.SnapshotAction,
    content: langVar.SnapshotSure+" ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> "+langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.post( window.location.href,
            { subaction:"SnapAction", instance:instance, snapname:snapname, snapact:"snapcreate" })
          .done(function( data ) {
            jQuery.growl.notice( {
             title: '',
             message: langVar.snapactsuccess,
           });
            $("#snaps").DataTable().ajax.reload().columns.adjust();
            $("#custom-loader").hide();
            $(window).scrollTop(0);
          });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
        action: function(){

        }
      }
    }
  });
  };
