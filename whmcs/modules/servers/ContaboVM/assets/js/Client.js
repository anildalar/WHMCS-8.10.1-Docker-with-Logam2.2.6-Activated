// *************************************************************************
// * Contabo Cloud Automation                                              *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2024.1                                                       *
// * Build Date: 20 January 2024                                           *
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

    $('[data-toggle="password"]').each(function () {
        var input = $(this);
        var eye_btn = $(this).parent().find('.input-group-text');
        eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
        eye_btn.on('click', function () {
            if (eye_btn.hasClass('input-password-hide')) {
                eye_btn.removeClass('input-password-hide').addClass('input-password-show');
                eye_btn.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash')
                input.attr('type', 'text');
            } else {
                eye_btn.removeClass('input-password-show').addClass('input-password-hide');
                eye_btn.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye')
                input.attr('type', 'password');
            }
        });
    });
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
              language: {processing: "<img src='modules/addons/ContaboVM/assets/img/spinner.svg'> "  + langVar.Loading},
              processing: true,
              searching: true,
              autoWidth: false,
              responsive: true,
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
              language: {processing: "<img src='modules/addons/ContaboVM/assets/img/spinner.svg'> " + langVar.Loading},
              processing: true,
              searching: true,
              autoWidth: false,
              responsive: true,
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
            language: {processing: "<img src='modules/addons/ContaboVM/assets/img/spinner.svg'> "  + langVar.Loading},
            processing: true,
            searching: true,
            autoWidth: false,
            responsive: true,
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
                            data: { subaction:"getOperatingSystem" },
                        },
                        "info": false,
                        "columnDefs": [{ "orderable": false, "targets": 2 }],
                        "length": false,
                        "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                      "iDisplayLength": 5,
                        scrollX: false,
                        language: {processing: "<img src='modules/addons/ContaboVM/assets/img/spinner.svg'> " + langVar.Loading},
                                processing: true,
                                searching: true,
                                autoWidth: false,
                                responsive: true,
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

    if (parsed.osimg != 'noneos') {
$("#osimg > img").attr("src", './modules/servers/ContaboVM/assets/img/' + parsed.osimg + '.svg').show();
$("#osimg > img").attr("alt", parsed.osdes).show();
$("#osdes").html(parsed.osdes).show();
        } else {
$("#osimg > img").attr("src", './modules/servers/ContaboVM/assets/img/noneos.svg').show();
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
  title: langVar.InstanceRebuild,
  content: langVar.osinstallsure + " : "+OSDesc+" ?",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.post( window.location.href,
          { subaction:"Rebuild", LinuxOS:osID, secretId:secretId })
        .done(function( data ) {
        //  console.log(data);
         vNotify.success({
              text: langVar.RebuildComplete,
              title:'',
              fadeInDuration: 1000,
              fadeOutDuration: 1000,
              fadeInterval: 50,
              visibleDuration: 10000,
              postHoverVisibleDuration: 500,
              position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
              sticky: false,
              showClose: true
            });
          $("#OSImageTable").DataTable().ajax.reload().columns.adjust();
          $("#custom-loader").hide();
          $(window).scrollTop(0);
        });
      }
    },
    cancelAction: {
      btnClass: "btn-danger",
      text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
  title: langVar.HostnameUpdate,
  content: langVar.HostUpdateSure + " : "+hostval+" ?",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.ajax({
          url: window.location.href,
          type: 'post',
          data : { subaction:'HostnameUpdate', hostname:hostval },
        }).done(function(response){
         vNotify.success({
              text: langVar.HostUpComplete,
              title:'',
              fadeInDuration: 1000,
              fadeOutDuration: 1000,
              fadeInterval: 50,
              visibleDuration: 10000,
              postHoverVisibleDuration: 500,
              position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
              sticky: false,
              showClose: true
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
      text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
  title:  langVar.Server_Reset,
  content: langVar.Reboot_Message + "?",
  escapeKey: "cancelAction",
  icon: "fa fa-question-circle",
  animation: "scale",
  closeAnimation: "scale",
  opacity: 0.5,
  backgroundDismiss: true,
  buttons: {
    confirm: {
      btnClass: "btn-success",
      text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
      action: function(){
        $("#custom-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxReboot' },
       }).done(function(response){
         vNotify.success({
              text:langVar.irs,
              title:'',
              fadeInDuration: 1000,
              fadeOutDuration: 1000,
              fadeInterval: 50,
              visibleDuration: 10000,
              postHoverVisibleDuration: 500,
              position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
              sticky: false,
              showClose: true
            });
         $("#custom-loader").hide();
         $(window).scrollTop(0);
       });
      }
    },
    cancelAction: {
      btnClass: "btn-danger",
      text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
    content: langVar.PowerOff_Server_Sure + "?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxPowerOff' },
         }).done(function(response){
           vNotify.success({
                text:langVar.vmPowerOffSuccess,
                title:'',
                fadeInDuration: 1000,
                fadeOutDuration: 1000,
                fadeInterval: 50,
                visibleDuration: 10000,
                postHoverVisibleDuration: 500,
                position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
                sticky: false,
                showClose: true
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
        text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
    content: langVar.PowerOn_Server_Sure +"?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxPowerOn' },
         }).done(function(response){
          vNotify.success({
               text:langVar.vmPowerOnSuccess,
               title:'',
               fadeInDuration: 1000,
               fadeOutDuration: 1000,
               fadeInterval: 50,
               visibleDuration: 10000,
               postHoverVisibleDuration: 500,
               position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
               sticky: false,
               showClose: true
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
        text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
    content: langVar.SnapshotSure + " ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.post( window.location.href,
            { subaction:"SnapAction", instance:instance, snapId:snapId, snapact:"delete" })
          .done(function( data ) {
           vNotify.success({
                text: langVar.snapactsuccess,
                title:'',
                fadeInDuration: 1000,
                fadeOutDuration: 1000,
                fadeInterval: 50,
                visibleDuration: 10000,
                postHoverVisibleDuration: 500,
                position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
                sticky: false,
                showClose: true
              });
            $("#snaps").DataTable().ajax.reload().columns.adjust();
            $("#custom-loader").hide();
            $(window).scrollTop(0);
          });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
    content: langVar.SnapshotSure + " ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.post( window.location.href,
            { subaction:"SnapAction", instance:instance, snapId:snapId, snapact:"rollback" })
          .done(function( data ) {
            vNotify.success({
                 text: langVar.snapactsuccess,
                 title:'',
                 fadeInDuration: 1000,
                 fadeOutDuration: 1000,
                 fadeInterval: 50,
                 visibleDuration: 10000,
                 postHoverVisibleDuration: 500,
                 position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
                 sticky: false,
                 showClose: true
               });
            $("#custom-loader").hide();
            $(window).scrollTop(0);
          });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
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
    content: langVar.SnapshotSure + " ?",
    escapeKey: "cancelAction",
    icon: "fa fa-question-circle",
    animation: "scale",
    closeAnimation: "scale",
    opacity: 0.5,
    backgroundDismiss: true,
    buttons: {
      confirm: {
        btnClass: "btn-success",
        text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
        action: function(){
          $("#custom-loader").show();
          $.post( window.location.href,
            { subaction:"SnapAction", instance:instance, snapname:snapname, snapact:"snapcreate" })
          .done(function( data ) {
            vNotify.success({
                 text: langVar.snapactsuccess,
                 title:'',
                 fadeInDuration: 1000,
                 fadeOutDuration: 1000,
                 fadeInterval: 50,
                 visibleDuration: 10000,
                 postHoverVisibleDuration: 500,
                 position: "topRight", // topLeft, bottomLeft, bottomRight, center, topRight
                 sticky: false,
                 showClose: true
               });
            $("#snaps").DataTable().ajax.reload().columns.adjust();
            $("#custom-loader").hide();
            $(window).scrollTop(0);
          });
        }
      },
      cancelAction: {
        btnClass: "btn-danger",
        text: "<i class=\'fa fa-times-circle\'></i> " +langVar.Cancel,
        action: function(){

        }
      }
    }
  });
  };
