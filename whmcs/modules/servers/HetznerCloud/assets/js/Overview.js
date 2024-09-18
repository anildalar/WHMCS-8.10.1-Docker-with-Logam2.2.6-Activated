
$(document).ready(function(){
getCloudData();
getVolumeData();

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

//2021.2
function getCloudData(){
  $("#custom-loader").show();
  $.ajax({
   url: window.location.href,
   type: 'post',
   data: { subaction:'AjaxServerStatus' },
   success:function(response){
     var parsed = JSON.parse(response);
     $("#custom-loader").hide();
          if (parsed.osimg != 'noneos') {
    $("#osimg > img").attr("src", 'modules/servers/HetznerCloud/assets/img/' + parsed.osimg + '.svg').show();
    $("#osimg > img").attr("alt", parsed.osdes).show();
    $("#osdes").html(parsed.osdes).show();
              } else {
    $("#osimg > img").attr("src", 'modules/servers/HetznerCloud/assets/img/noneos.svg').show();
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

       if( parsed.rescue == 'yes' ){
        $("#ovrescuedisable").show();
       } else {
        $('#ovrescueenable').show();
       }

       if( parsed.srvdeletion == 'yes' ){
        $("#dpdisplay").show();
        $('#dismodal').show();
        $('#oslininstall').hide();
        $('#osinstalldisplay').hide();
       } else {
        $("#endisplay").show();
        $('#enbmodal').show();
        $('#oslininstall').show();
        $('#osinstalldisplay').show();
       }
   }
  });
};

//2021.2
function getVolumeData(){
  var VolumeTable = $("#VolumeTable").DataTable({
            destroy: true,
                  "ajax": {
                      "url": window.location.href,
                      "type": "POST",
                      data: { subaction:"getSingleVolInfo" },
                  },
                  "info": false,
                  "columnDefs": [{ "orderable": false, "targets": 3}],
                  "bLengthChange":false,
                  "length": false,
                  scrollX: false,
                  language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                          processing: true,
                          searching: true,
                          autoWidth: false,
                          "order": [],
});
}

//2021.2
function vmViewBWGraph() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.ViewBW,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'graphForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.ViewBW_Sure+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'graph\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('graphForm').submit();
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

//2021.2
function vmViewfirewall() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.firewallmgmt,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'firewallForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.Volume_Sure+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'firewall\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('firewallForm').submit();
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

//2021.2
function vmViewBackups() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.Launch_Back,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'BackupForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.Backup_Sure+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'viewbackups\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('BackupForm').submit();
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

//2021.2
function vmViewIPAddress() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.IP_Title,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'IPForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.IP_Sure+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'viewipaddress\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('IPForm').submit();
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

//2021.2
function vmViewOSImages() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.Server_Installation,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'OSForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.Linux_Confirm+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'viewosinstall\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('OSForm').submit();
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

//2021.2
function vmViewRescueImages() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.Rescue_Enable,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'RescueForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.Rescue_Confirm+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'viewrescue\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('RescueForm').submit();
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

//2021.2
function vmViewISOImages() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var serviceid = url.searchParams.get("id");
 $.confirm({
   type: "blue",
   title: langVar.Launch_ISOs,
   columnClass: "col-md-6 col-md-offset-3",
   content: ""+
   "<form method=\'post\' id=\'IsoForm\' target=\'_self\' action=\'"+url_string+"\'>" +
   "<div class=\'form-group\'>" +
   langVar.ISO_Sure+" ? " +
   "<input type=\'hidden\' name=\'id\' value=\'"+serviceid+"\' />"+
   "<input type=\'hidden\' name=\'modop\' value=\'custom\' />"+
   "<input type=\'hidden\' name=\'a\' value=\'isoimages\' />"+
   "</div>"+
   "</form>",
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
        document.getElementById('IsoForm').submit();
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


function DisableRescueMode() {
$.confirm({
  type: "blue",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.Rescue_Disable,
  content: langVar.ResOSSureDis+" ?",
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:'DisableRescue'},
          success: function(serveraction){
            if(serveraction.action.error === null){
              $("#ovrescuedisable").hide();
              $("#ovrescueenable").show();
              vNotify.success({
              text:langVar.RescueModDone,
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
            } else {
              vNotify.error({
              text:langVar.RescueModError,
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
            }
          },
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

function vmDisableProtection() {
$.confirm({
  type: "red",
  columnClass: "col-md-8 col-md-offset-2",
  title: langVar.Disable_Pro_Del_Rebuild,
  content: langVar.Protection_Disable_Sure+" ? <br />"+
  langVar.Protection_Disable_MSG,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
           data: { subaction:'AjaxProtection', type:'disable' },
          success: function(serveraction){
            $('#endisplay').show();
            $('#dpdisplay').hide();
            $('#oslininstall').show();
            $("#delete_windows").removeClass('status-field completed').addClass('status-field pending').html('disabled').show();
            $("#rebuild_windows").removeClass('status-field completed').addClass('status-field pending').html('disabled').show();
              vNotify.success({
              text:langVar.vmProDisable,
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
          },
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

function vmEnableProtection() {
$.confirm({
  type: "red",
  columnClass: "col-md-8 col-md-offset-2",
  title: langVar.Enable_Pro_Del_Rebuild,
  content: langVar.Protection_Enable_Sure+" ? <br />"+
  langVar.Protection_Enable_MSG,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
           data: { subaction:'AjaxProtection', type:'enable' },
          success: function(serveraction){
            $('#oslininstall').hide();
            $('#endisplay').hide();
            $('#dpdisplay').show();
            $("#delete_windows").removeClass('status-field pending').addClass('status-field completed').html('enabled').show();
            $("#rebuild_windows").removeClass('status-field pending').addClass('status-field completed').html('enabled').show();
              vNotify.success({
              text:langVar.vmProEnable,
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
          },
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
           data: { subaction:'AjaxPowerOn' },
          success: function(serveraction){
            $("#offdisplay").show();
            $("#ondisplay").hide();
            $("#serverrun").removeClass('status-field pending').addClass('status-field completed').html('running').show();
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
          },
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
           data: { subaction:'AjaxPowerOff' },
          success: function(serveraction){
            $("#ondisplay").show();
            $("#offdisplay").hide();
            $("#serverrun").removeClass('status-field completed').addClass('status-field pending').html('off').show();
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
          },
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

function vmOpenConsole() {
$.confirm({
  type: "blue",
  columnClass: "col-md-6 col-md-offset-2",
  title: langVar.ConsoleDialog,
  content: langVar.Console_Sure+" ?",
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
      window.open(window.location.href+'&vncAction=novnc', '','width=900,height=640');
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

function vmPassReset() {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.Password_Title,
  content: langVar.Password_Sure+" ?",
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
       WHMCS.http.jqClient.jsonPost({
         url: window.location.href,
         data: { subaction:'PasswordReset' },
         success: function(serveraction){
           console.log(serveraction);
           if(serveraction.result == 'complete'){
            $('#hclpassword').val(parsed.message).show();
             vNotify.success({
             text:langVar.vmPassResetSucess,
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
           } else {
             vNotify.error({
             text:serveraction.message,
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
           }
         },
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

function vmReboot() {
$.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.Server_Reset,
  content: "<form action=\'\' class=\'formName\'>" +
  "<div class=\'form-group\'>" +
  "<label>Reboot Type</label>" +
  '<select id="reboottype" class="form-control">' +
  '<option value="AjaxReboot">Soft Reboot</option>'+
  '<option value="AjaxReset">Hard Reset</option>'+
  '</select>' +
  "</div>",
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
        var reboots = this.$content.find("#reboottype").val();
               if(!reboots) {
                 $.alert('Please select reboot type');
                 return false;
               }
        $("#custom-loader").show();
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:reboots },
          success: function(serveraction){
            if(reboots == 'AjaxReboot'){
              var successMsg = langVar.vmRebootSuccess;
              var successError = langVar.vmRebootError;
            } else {
              var successMsg = langVar.vmResetSuccess;
              var successError = langVar.vmResetError;
            }
            if(serveraction.action.error === null){
              vNotify.success({
              text:successMsg,
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
            } else {
              vNotify.error({
              text:successError,
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
            }
          },
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



  function vmVolumeProtectDeActivate(volid) {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.Volume_Title,
    content: langVar.volProDisSure+" ?",
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
          WHMCS.http.jqClient.jsonPost({
            url: window.location.href,
             data: { subaction:'VolumeAction', volid:volid, type:'voldisable' },
            success: function(serveraction){
              $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
                vNotify.success({
                text:langVar.volProDisSuccess,
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
            },
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

  function vmVolumeProtectActivate(volid) {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.Volume_Title,
    content: langVar.volProEnbSure+" ?",
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
          WHMCS.http.jqClient.jsonPost({
            url: window.location.href,
             data: { subaction:'VolumeAction', volid:volid, type:'volenable' },
            success: function(serveraction){
              $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
                vNotify.success({
                text:langVar.volProSuccess,
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
            },
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

  function vmVolumeDescChange(volid) {
  $.confirm({
    type: "blue",
    title: langVar.Volume_Title,
    content: ""+
    "<form action=\'\' class=\'formName\'>" +
    "<div class=\'form-group\'>" +
  "<label>"+langVar.volume.name+"</label>" +
  "<input type=\'text\' class=\'form-control\' id=\'voldesc\' required />" +
    "</div>"+
    "</form>",
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
          var voldesc = this.$content.find('#voldesc').val();
          if(!voldesc){
              $.alert(langVar.volDescreq);
              return false;
          }
          $("#custom-loader").show();
          WHMCS.http.jqClient.jsonPost({
            url: window.location.href,
             data: { subaction:'VolumeAction', volid:volid, volname:voldesc, type:'namechange' },
            success: function(serveraction){
              $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
                vNotify.success({
                text:langVar.volDescChangeSuccess,
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
            },
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

  function vmVolumeCreate() {
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.Volume_Title,
    content: ""+
    langVar.Volume_Format +
    "<form action=\'\' class=\'formName\'>" +
    "<div class=\'form-group\'>" +
    "<label>"+langVar.Volume_filesystem+"</label>" +
    '<select id="volformat" class="form-control">' +
    '<option value="">'+langVar.SelFileType+'</option>'+
    '<option value="ext4">EXT4</option>'+
    '<option value="xfs">XFS</option>'+
    '</select>' +
    "</div>" +
    "<div class=\'form-group\'>" +
  "<label>"+langVar.volume.DiskSize+"</label>" +
  "<input type=\'text\' class=\'form-control\' id=\'volsize\' required />" +
    "</div>"+
    "</form>",
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
          var volformat = this.$content.find('#volformat').val();
          if(!volformat){
              $.alert(langVar.volFormat);
              return false;
          }
          var volsize = this.$content.find("#volsize").val();
          if(!volsize){
              $.alert(langVar.emptyvolsize);
              return false;
          }
          if (!(volsize >= 10)) {
            $.alert(langVar.invalidsize);
            return false;
          }
          $("#custom-loader").show();
          WHMCS.http.jqClient.jsonPost({
            url: window.location.href,
            data: { subaction:'CreateVolume', volsize:volsize, format:volformat },
            success: function(serveraction){
              $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
              $('.VolCrt').hide();
                vNotify.success({
                text:langVar.volCreateSuccess,
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
            },
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
