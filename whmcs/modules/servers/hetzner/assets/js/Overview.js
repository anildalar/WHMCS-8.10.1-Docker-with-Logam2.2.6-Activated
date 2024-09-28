// *************************************************************************
// * Hetzner Server Automation                                             *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2022.4                                                       *
// * Build Date: 19 November 2022                                          *
// *************************************************************************
// * Email: sales@whmcsmodule.net                                          *
// * Website: https://www.whmcsmodule.net                                  *
// *************************************************************************
$(document).ready(function(){

$("#InterfaceTable").DataTable({
  destroy: true,
  "ajax": {
            "url": window.location.href,
            "type": "POST",
            data: { subaction:"getInterfaceInformation" },
        },
  "info": false,
  "columnDefs": [{ "orderable": false, "targets": 4 }],
  language: {
    processing: "<img src='modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
  },
  "length": false,
  processing: true,
  searching: true,
  scrollX: false,
  autoWidth: false
});

  serverStatus();

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

$(".viewgraph").change(function() {
          var graphtype = $(this).find('option:selected').val();
          ViewGrapgh_Metrics(graphtype);
      });


      //storage

      $("#ShowSnapTables").DataTable({
        destroy: true,
        "ajax": {
                  "url": window.location.href,
                  "type": "POST",
                  data: { subaction:"getsnaps" },
              },
        "info": false,
        "columnDefs": [{ "orderable": false, "targets": 4 }],
        language: {
          processing: "<img src='modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
        },
        "length": false,
        processing: true,
        searching: true,
        scrollX: false,
        autoWidth: false
      });

      //2022.2
      $("#ShowSubTables").DataTable({
        destroy: true,
        "ajax": {
                  "url": window.location.href,
                  "type": "POST",
                  data: { subaction:"getSubAccounts" },
              },
        "info": false,
        "columnDefs": [{ "orderable": false, "targets": 2 }],
        language: {
          processing: "<img src='modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
        },
        "length": false,
        processing: true,
        searching: true,
        scrollX: false,
        autoWidth: false
      });

      $("#ShowSnapConfTables").DataTable({
        destroy: true,
        "ajax": {
                  "url": window.location.href,
                  "type": "POST",
                  data: { subaction:"getSnapshotPlan" },
              },
        "info": false,
        "columnDefs": [{ "orderable": false, "targets": 3 }],
        language: {
          processing: "<img src='modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
        },
        "length": false,
        processing: true,
        searching: true,
        scrollX: false,
        autoWidth: false
      });

      $("#firewalltable").DataTable({
        destroy: true,
        "ajax": {
                  "url": window.location.href,
                  "type": "POST",
                  data: { subaction:"getFirewallrules" },
              },
        "info": false,
        "columnDefs": [{ "orderable": false, "targets": 6 }],
        language: {
          processing: "<img src='modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
        },
        "length": false,
        processing: true,
        searching: true,
        scrollX: false,
        autoWidth: false
      });

      //storage

  //Add Above
  });

  function hostchange() {
    $.confirm({
      type: "blue",
      columnClass: 'small',
      title: langVar.disname,
      content:   "<div class=\'form-group\'>" +
      "<label>"+langVar.Server_Name+"</label>" +
      "<input type=\'text\' class=\'form-control\' id=\'srvnametxtedit\' required />" +
        "</div>"  ,
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
            var value = $("#srvnametxtedit").val();
            $("#hetzner-loader").show();
            $.ajax({
             url: window.location.href,
             type: 'post',
             data: { subaction:'AjaxHostNameUpdate', hostname:value },
             success:function(response){
               var parsed = JSON.parse(response);
               if(parsed.success){
                 $("#srvname").html(value).show();
               $("#custom-alert-message").html(parsed.success);
               $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
            //   serverStatus();
               } else {
               $("#custom-alert-message").html(parsed.error);
               $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
               }
               $("#hetzner-loader").hide();
               $(window).scrollTop(0);
             }
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

  function serverStatus() {
  $("#hetzner-loader").show();
  $.ajax({
   url: window.location.href,
   type: 'post',
   data: { subaction:'AjaxServerStatus' },
   success:function(response){
     var parsed = JSON.parse(response);
     if(parsed.storageassigned == 'yes'){
         storageStatus(); // Storage
     }
     if(parsed.firewallstatus == 'yes'){
         $("#firewallInfo").show();
     } else {
       $("#firewallInfo").hide();
     }
     $("#status").html(parsed.Status).show();
     $("#srvname").html(parsed.srvname).show();
     $("#osimage").html(parsed.osimage).show();
     $("#osname").html(parsed.osname).show();
     $("#srvpassword").val(parsed.srvpass).show();
     $("#rescuepassword").val(parsed.respass).show();
     $("#vncpassword").val(parsed.vncpass).show();
     $("#primaryIP").html(parsed.primaryIP).show();
     $("#DC").html(parsed.DC).show();
     $("#VNCIP").html(parsed.VNCIP).show();
     $("#ipv6").html(parsed.ipV6).show();
     $("#HetznerIPv6").html(parsed.ipV6).show();

     $("#bwlimit").html(parsed.bwlimit).show();

     if(parsed.rebootacl != 'on'){
      $("#rebootbtn").show();
    }

     if(parsed.installcancel == 'active'){
      $("#cancelinstallbtn").show();
      $("#RescueOSbtn").hide();
      $("#ServerOSbtn").hide();
      $("#VNCbtn").hide();
      $("#WindowsOSbtn").hide();
      $("#cPanelOSbtn").hide();
      $("#PleskOSbtn").hide();
      $("#wolbtn").hide();
    } else {
      if(parsed.Rescuebtn == 'active'){
        $("#RescueOSbtn").show();
      }
      if(parsed.Serverbtn == 'active'){
        $("#ServerOSbtn").show();
      }

      if(parsed.VNCbtn == 'active'){
        $("#VNCbtn").show();
      }

      if(parsed.WindowsOSbtn == 'active'){
        $("#WindowsOSbtn").show();
      }

      if(parsed.cPanelOSbtn == 'active'){
        $("#cPanelOSbtn").show();
      }

      if(parsed.PleskOSbtn == 'active'){
        $("#PleskOSbtn").show();
      }

      if(parsed.WOLbtn == 'active'){
        $("#wolbtn").show();
      }

      if(parsed.rdnsacl != 'on'){
       $("#ReversePTRManage").show();
     }

      $("#cancelinstallbtn").hide();
    }

if(parsed.Datatraffic){
  $('#traffic_mount').html(parsed.Datatraffic).show();
  jQuery('.viewgraph').append($('<option>', {
      value: parsed.primaryIP+"_daily",
      text:  langVar.Daily
  }));
  jQuery.each(parsed.iplists, function(index1, value1) {
              jQuery('.viewgraph').append($('<option>', {
                  value: value1+"_monthly",
                  text: value1
              }));
      });
      $("#DatatrafficDetails").show();
}


$("#serverinformation").show();
$("#InterfaceInfo").show();
$("#hetzner-loader").hide();

   }
  });
};


function ViewGrapgh_Metrics(graphtype) {
        $("#hetzner-loader").show();
          $.post({
              url: window.location.href,
              data: { subaction:'AjaxViewGraph', graphtype:graphtype },
            }).done(function(response){
              var parsed = JSON.parse(response);
              if(parsed.Datatraffic){
                $('#traffic_mount').html(parsed.Datatraffic).show();
              } else {
                $('#traffic_mount').html(langVar.noDataFound).show();
              }
              $("#hetzner-loader").hide();
            });
          };

function resetReversePTR(iprdns) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Reverse_DNS_Management,
  content: langVar.resetPTRSure,
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxReversePTR', valrdns:'resetPTR', iprdns:iprdns },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(parsed.success);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         $('#InterfaceTable').DataTable().ajax.reload().columns.adjust();
         } else {
         $("#custom-alert-message").html(parsed.error);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
}

function setReversePTR(iprdns) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Reverse_DNS_Management,
  content: ""+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.Reverse_Value+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.Reverse_Value+'" id="valrdns">'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var valrdns = this.$content.find('#valrdns').val();
                  if(!valrdns){
                      $.alert(langVar.setRDNSValue);
                      return false;
                  }
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxReversePTR', valrdns:valrdns, iprdns:iprdns },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(parsed.success);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         $('#InterfaceTable').DataTable().ajax.reload().columns.adjust();
         } else {
         $("#custom-alert-message").html(parsed.error);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
}

function ServerPleskInstall() {
  $.post(window.location.href, { subaction:"AjaxServerStatus" },
function (response) {
var parsed = JSON.parse(response);
if(parsed.PleskOSbtn == 'active'){
  jQuery('#PleskOSDist').append($('<option>', {
      value: "",
      text: parsed.SelOS
  }));
  jQuery.each(parsed.PleskOS.plesk.dist, function(index1, value1) {
              jQuery('#PleskOSDist').append($('<option>', {
                  value: value1,
                  text: value1
              }));
      });
      jQuery('#plesklang').append($('<option>', {
          value: "",
          text: parsed.SelLang
      }));
      jQuery.each(parsed.PleskOS.plesk.lang, function(index1, value1) {
                  jQuery('#plesklang').append($('<option>', {
                      value: value1,
                      text: value1
                  }));
          });
}
  });
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.Plesk_Modal,
  content: ""+
  '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.Plesk_Sure+'</p>'+
  '<p>'+langVar.Plesk_msg+'</p>'+
  '<p><strong>'+langVar.Reboot_MSG+'</strong></p><br/>'+
  '</div>'+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.OS+':</td>'+
  '<td>'+
  '<select class="form-control" id="PleskOSDist">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.Language+':</td>'+
  '<td>'+
  '<select class="form-control" id="plesklang">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var pleskos = this.$content.find('#PleskOSDist').val();
                  if(!pleskos){
                      $.alert(langVar.PleskInvalidOS);
                      return false;
                  }
        var plesklang = this.$content.find('#plesklang').val();
                  if(!plesklang){
                      $.alert(langVar.PleskInvalidLang);
                      return false;
                  }
                  $("#hetzner-loader").show();
                   $("#serverinformation").hide();
                  $.ajax({
                   url: window.location.href,
                   type: 'post',
                   data: { subaction:'AjaxPleskBuild', pleskos:pleskos, plesklang:plesklang },
                 }).done(function(response){
                   var parsed = JSON.parse(response);
                   if(parsed.success){
                   $("#custom-alert-message").html(parsed.success);
                   $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
                   serverStatus();
                   } else {
                   $("#custom-alert-message").html(parsed.error);
                   $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
                   }
                   $("#hetzner-loader").hide();
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
}

function ServercPanelInstall() {
  $.post(window.location.href, { subaction:"AjaxServerStatus" },
function (response) {
var parsed = JSON.parse(response);
if(parsed.cPanelOSbtn == 'active'){
  jQuery('#cPanelOSdist').append($('<option>', {
      value: "",
      text: parsed.SelOS
  }));
  jQuery.each(parsed.cPanelOS.cpanel.dist, function(index1, value1) {
              jQuery('#cPanelOSdist').append($('<option>', {
                  value: value1,
                  text: value1
              }));
      });
      jQuery('#cPanellang').append($('<option>', {
          value: "",
          text: parsed.SelLang
      }));
      jQuery.each(parsed.cPanelOS.cpanel.lang, function(index1, value1) {
                  jQuery('#cPanellang').append($('<option>', {
                      value: value1,
                      text: value1
                  }));
          });
}
  });
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.cPanel_Modal,
  content: ""+
  '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.cPanel_Sure+'</p>'+
  '<p>'+langVar.cPanel_Msg+'</p>'+
  '<p><strong>'+langVar.Reboot_MSG+'</strong></p>'+
  '</div>'+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.OS+':</td>'+
  '<td>'+
  '<select class="form-control" id="cPanelOSdist">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.Language+':</td>'+
  '<td>'+
  '<select class="form-control" id="cPanellang">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var cpanelos = this.$content.find('#cPanelOSdist').val();
                  if(!cpanelos){
                      $.alert(langVar.cPanelInvalidOS);
                      return false;
                  }
        var cpanellang = this.$content.find('#cPanellang').val();
                  if(!cpanellang){
                      $.alert(langVar.cPanelInvalidLang);
                      return false;
                  }
                  $("#hetzner-loader").show();
                   $("#serverinformation").hide();
                  $.ajax({
                   url: window.location.href,
                   type: 'post',
                   data: { subaction:'AjaxcPanelbuild', cpanelos:cpanelos, cpanellang:cpanellang },
                 }).done(function(response){
                   var parsed = JSON.parse(response);
                   if(parsed.success){
                   $("#custom-alert-message").html(parsed.success);
                   $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
                   serverStatus();
                   } else {
                   $("#custom-alert-message").html(parsed.error);
                   $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
                   }
                   $("#hetzner-loader").hide();
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
}

function ServerWOL() {
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.Wake_On_Lan,
  content: '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.WakeonLanQuestion+' ?</p>'+
  '<p>'+langVar.WakeonLanMessage+'</p>'+
  '<p>'+langVar.WakeonLanNote+'</p>'+
  "</div>"  ,
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxServerWOL' },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(parsed.success);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         serverStatus();
         } else {
         $("#custom-alert-message").html(parsed.error);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
}

function WindowsInstallServer() {
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.Server_WinInstallation,
  content: '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.Windows_Warning+'</p>'+
  '<p><strong>'+langVar.Windows_Notice+'</strong></p>'+
  '<p><strong>'+langVar.Reboot_MSG+'</strong></p>'+
  "</div>"  ,
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxWindowsBuild' },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(parsed.success);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         serverStatus();
         } else {
         $("#custom-alert-message").html(parsed.error);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
}

function vncInstallServer() {
  $.post(window.location.href, { subaction:"AjaxServerStatus" },
function (response) {
var parsed = JSON.parse(response);
if(parsed.VNCbtn == 'active'){
  jQuery('#vncOSname').append($('<option>', {
      value: "",
      text: parsed.SelOS
  }));
  jQuery.each(parsed.vncOS.vnc.dist, function(index1, value1) {
              jQuery('#vncOSname').append($('<option>', {
                  value: value1,
                  text: value1
              }));
      });
      jQuery('#vncOSLang').append($('<option>', {
          value: "",
          text: parsed.SelLang
      }));
      jQuery.each(parsed.vncOS.vnc.lang, function(index1, value1) {
                  jQuery('#vncOSLang').append($('<option>', {
                      value: value1,
                      text: value1
                  }));
          });
}
  });
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.VNC_title,
  content: ""+
  '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.VNC_Confirm+'</p>'+
  '<p>'+langVar.VNC_Message+'</p>'+
  '<p><strong>'+langVar.VNC_Reboot+'</strong></p>'+
  '</div>'+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.OS+':</td>'+
  '<td>'+
  '<select class="form-control" id="vncOSname">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.Language+':</td>'+
  '<td>'+
  '<select class="form-control" id="vncOSLang">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var vncos = this.$content.find('#vncOSname').val();
                  if(!vncos){
                      $.alert(langVar.VNCInvalidOS);
                      return false;
                  }
        var vnlang = this.$content.find('#vncOSLang').val();
                  if(!vnlang){
                      $.alert(langVar.VNCInvalidLang);
                      return false;
                  }
                  $("#hetzner-loader").show();
                   $("#serverinformation").hide();
                  $.ajax({
                   url: window.location.href,
                   type: 'post',
                   data: { subaction:'AjaxVNCbuild', vncos:vncos, vnlang:vnlang },
                 }).done(function(response){
                   var parsed = JSON.parse(response);
                   if(parsed.success){
                   $("#custom-alert-message").html(parsed.success);
                   $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
                   serverStatus();
                   } else {
                   $("#custom-alert-message").html(parsed.error);
                   $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
                   }
                   $("#hetzner-loader").hide();
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
}

function LinuxInstall() {
  $.post(window.location.href, { subaction:"AjaxServerStatus" },
function (response) {
var parsed = JSON.parse(response);
if(parsed.Serverbtn == 'active'){
  jQuery('#linuxOSName').append($('<option>', {
      value: "",
      text: parsed.SelOS
  }));
  jQuery.each(parsed.ServerOS, function(index1, value1) {
              jQuery('#linuxOSName').append($('<option>', {
                  value: value1,
                  text: value1
              }));
      });
}
  });
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.Server_Installation,
  content: ""+
  '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.Linux_Confirm+'</p>'+
  '<p>'+langVar.Linux_Notice+'</p>'+
  '<p>'+langVar.Linux_Warning+'</p>'+
  '<p><strong>'+langVar.Reboot_MSG+'</strong></p>'+
  '</div>'+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.OS+':</td>'+
  '<td>'+
  '<select class="form-control" id="linuxOSName">'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var srvlixsos = this.$content.find('#linuxOSName').val();
                  if(!srvlixsos){
                      $.alert(langVar.LinuxInvalidOS);
                      return false;
                  }
        $("#hetzner-loader").show();
         $("#serverinformation").hide();
         $.ajax({
          url: window.location.href,
          type: 'post',
          data: { subaction:'AjaxLinuxBuild', srvlixsos:srvlixsos },
        }).done(function(response){
          var parsed = JSON.parse(response);
          if(parsed.success){
          $("#custom-alert-message").html(parsed.success);
          $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
          serverStatus();
          } else {
          $("#custom-alert-message").html(parsed.error);
          $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
          }
          $("#hetzner-loader").hide();
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
}

function RescueMode() {
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.Rescue_Modal,
  content: ""+
  '<div class="modal-body">'+
  '<p><i class="fa fa-info-circle text-danger" aria-hidden="true"></i> '+langVar.Rescue_Confirm+'</p>'+
  '<p>'+langVar.Rescue_Notice+'</p>'+
  '<p>'+langVar.Rescue_Notice2+'</p>'+
  '<p><strong>'+langVar.Rescue_MSG+'</strong></p>'+
  '</div>'+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.OS+':</td>'+
  '<td>'+
  '<select class="form-control" id="rescueOSname">'+
  '<option value="">'+langVar.SelectOS+'</option>'+
  '<option value="linux">Linux</option>'+
  '<option value="freebsd">FreeBSD 11.2</option>'+
  '<option value="vkvm">vKVM (Buster)</option>'+
  '</select>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var srvresos = this.$content.find('#rescueOSname').val();
                  if(!srvresos){
                      $.alert(langVar.RescueInvalidOS);
                      return false;
                  }
        $("#hetzner-loader").show();
         $("#serverinformation").hide();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxRescue', srvresos:srvresos },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(parsed.success);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         serverStatus();
         } else {
         $("#custom-alert-message").html(parsed.error);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
}

function CancelInstallAccess() {
$.confirm({
  type: "blue",
  columnClass: "col-md-9 col-md-offset-3",
  columnClass: 'medium',
  title: langVar.Cancel_Installation,
  content: langVar.Cancel_Message,
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxCancelInstall' },
        }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(parsed.success);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         serverStatus();
         } else {
         $("#custom-alert-message").html(parsed.error);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
}

  function ServerReboot() {
    $.post(window.location.href, { subaction:"AjaxServerStatus" },
function (response) {
  var parsed = JSON.parse(response);
  if(parsed.rebootacl != 'on'){
   jQuery.each(parsed.ResetGet, function(index1, value1) {
               jQuery('#srvrebootype').append($('<option>', {
                   value: value1.type,
                   text: value1.desc
               }));
       });
  }
    });
  $.confirm({
    type: "blue",
    columnClass: "col-md-9 col-md-offset-3",
    columnClass: 'medium',
    title: langVar.Server_Reboot,
    content: langVar.Reboot_Sure+" <strong>"+langVar.Reset+"</strong> "+langVar.the_Server+" ?<br />"+
    "<strong>"+langVar.Warning+"!:</strong> "+langVar.Reboot_Warning+
    "<table class='table table-bordered table-hover'>"+
    "<tr>"+
    "<td>"+langVar.Reboot_Type+":</td>"+
    "<td>"+
    "<select class='form-control' id='srvrebootype'>"+
    "</select>"+
    "</td>"+
    "</tr>"+
    "</table>",
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
          $("#hetzner-loader").show();
          var srvreboot = $('#srvrebootype').val();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxReboot', srvreboot:srvreboot },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.success){
           $("#custom-alert-message").html(parsed.success);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           serverStatus();
           } else {
           $("#custom-alert-message").html(parsed.error);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
           }
           $("#hetzner-loader").hide();
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
  }

  //Storage
  function storageStatus() {
  $("#hetzner-loader").show();
  $.ajax({
   url: window.location.href,
   type: 'post',
   data: { subaction:'StorageInfo' },
   success:function(response){
     var parsed = JSON.parse(response);
     $.each(parsed, function(key, value){
       $("#"+key).html(value).show();
    });
    if(parsed.SnapshotAuto == "Disabled"){
      $("#enbautosnp").show();
      $("#disautosnp").hide();
      $("#snapautotable").hide();
    } else {
    $("#disautosnp").show();
    $("#enbautosnp").hide();
    $("#snapautotable").show();
    }

    if(parsed.storageId == "Yes"){
      $("#storageInfoShow").show();
      $("#snapInfotable").show();
      $("#subInfotable").show();
    } else {
    $("#storageInfoShow").hide();
    $("#snapInfotable").hide();
    $("#subInfotable").hide();
    }

  $("#hetzner-loader").hide();

   }
  });
  }


  function SnapCreate() {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.createsnapshot,
content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxCreateSnap' },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success){
         $("#custom-alert-message").html(langVar.successmsg);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         $('#ShowSnapTables').DataTable().ajax.reload().columns.adjust();
         } else {
         $("#custom-alert-message").html(langVar.errormsg);
         $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
  }


  function deletesnap(snapId) {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.deletesnap,
  content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxDelSnap', snapId:snapId },
       }).done(function(response){
         var parsed = JSON.parse(response);
         $("#custom-alert-message").html(langVar.successmsg);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         $('#ShowSnapTables').DataTable().ajax.reload().columns.adjust();
         $("#hetzner-loader").hide();
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
  }

  function restoresnap(snapId) {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.restoresnap,
  content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxRollSnap', snapId:snapId },
       }).done(function(response){
         var parsed = JSON.parse(response);
         $("#custom-alert-message").html(langVar.successmsg);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         $('#ShowSnapTables').DataTable().ajax.reload().columns.adjust();
         $("#hetzner-loader").hide();
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
  }


  function snapcomment(snapId) {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.snapcomment,
  content: ""+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.snapcomment+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.snapcomment+'" id="snapcom">'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var snapcoment = this.$content.find('#snapcom').val();
                  if(!snapcoment){
                      $.alert(langVar.snapcomrequired);
                      return false;
                  }
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxCommentSnap', snapcom:snapcoment, snapId:snapId },
       }).done(function(response){
         var parsed = JSON.parse(response);
         $("#custom-alert-message").html(langVar.successmsg);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         $('#ShowSnapTables').DataTable().ajax.reload().columns.adjust();
         $("#hetzner-loader").hide();
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
  }

  function StorageUpdate(sname) {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.updatebox,
  content: ""+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.storename+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.storename+'" id="storename" value="'+sname+'">'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.otherdetails+':</td>'+
  '<td>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableWebDAV"> '+langVar.WebDAV+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableSamba"> '+langVar.Samba+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableSSH"> '+langVar.SSH+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableExternal"> '+langVar.External+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableDissnapshot"> '+langVar.Dissnapshot+'</label></div>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var storename = this.$content.find('#storename').val();
                  if(!storename){
                      $.alert(langVar.namerequired);
                      return false;
                  }
        var webdav = this.$content.find('#enableWebDAV').prop('checked');
        var samba = this.$content.find('#enableSamba').prop('checked');
        var ssh = this.$content.find('#enableSSH').prop('checked');
        var external = this.$content.find('#enableExternal').prop('checked');
        var dissnapshot = this.$content.find('#enableDissnapshot').prop('checked');
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxStoreUpdate', storename:storename, webdav:webdav, samba:samba, ssh:ssh, external:external, dissnapshot:dissnapshot },
       }).done(function(response){
         var parsed = JSON.parse(response);
         $("#custom-alert-message").html(langVar.successmsg);
         $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
         storageStatus();
         $("#hetzner-loader").hide();
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
  }


  //2022.2
  function SubAccCreate() {
  jQuery.post(window.location.href, { subaction:"AjaxlistDir" },
  function (response) {
  var parsed = JSON.parse(response);
  if(parsed.error == "error"){
  $.alert(langVar.DirNotPresent);
  return false;
  } else {
  jQuery('#dirshow').append($('<option>', {
      value: "",
      text: langVar.selectDir
  }));
  jQuery.each(parsed.data, function(index1, value1) {
              jQuery('#dirshow').append($('<option>', {
                  value: value1,
                  text: value1
              }));
      });
  }

  });
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.AddSubAcc,
  content: ""+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
      '<td>'+langVar.Basedirectory+'</td>' +
      '<td><select id="dirshow" class="dirshows form-control"></select></td>' +
      '</tr>' +
  '<tr>'+
  '<td>'+langVar.commentsub+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.storename+'" id="storename" >'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.otherdetails+':</td>'+
  '<td>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableWebDAV"> '+langVar.WebDAV+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableSamba"> '+langVar.Samba+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableSSH"> '+langVar.SSH+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableExternal"> '+langVar.External+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="Readonly"> '+langVar.Readonly+'</label></div>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var storename = this.$content.find('#storename').val();
                  if(!storename){
                      $.alert(langVar.namerequired);
                      return false;
                  }
        var webdav = this.$content.find('#enableWebDAV').prop('checked');
        var samba = this.$content.find('#enableSamba').prop('checked');
        var ssh = this.$content.find('#enableSSH').prop('checked');
        var external = this.$content.find('#enableExternal').prop('checked');
        var readonly = this.$content.find('#Readonly').prop('checked');
        var homedir = this.$content.find('.dirshows').val();
                  if(!homedir){
                      $.alert(langVar.selectDir);
                      return false;
                  }
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxSubAccUpdate', homedir:homedir, comment:storename, webdav:webdav, samba:samba, ssh:ssh, external:external, readonly:readonly },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success == 'success'){
           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           $('#ShowSubTables').DataTable().ajax.reload().columns.adjust();
         } else {
           $("#custom-alert-message").html(langVar.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }

         $("#hetzner-loader").hide();
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
  }

  //2022.2
  function editSubAccount(subname, comment) {
  jQuery.post(window.location.href, { subaction:"AjaxlistDir" },
  function (response) {
  var parsed = JSON.parse(response);
  if(parsed.error == "error"){
  $.alert(langVar.DirNotPresent);
  return false;
  } else {
  jQuery('#dirshow').append($('<option>', {
      value: "",
      text: langVar.selectDir
  }));
  jQuery.each(parsed.data, function(index1, value1) {
              jQuery('#dirshow').append($('<option>', {
                  value: value1,
                  text: value1
              }));
      });
  }

  });
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.EditSubAcc,
  content: ""+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
      '<td>'+langVar.Basedirectory+'</td>' +
      '<td><select id="dirshow" class="dirshows form-control"></select></td>' +
      '</tr>' +
  '<tr>'+
  '<td>'+langVar.commentsub+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.storename+'" id="storename" value="'+comment+'">'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.otherdetails+':</td>'+
  '<td>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableWebDAV"> '+langVar.WebDAV+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableSamba"> '+langVar.Samba+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableSSH"> '+langVar.SSH+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="enableExternal"> '+langVar.External+'</label></div>'+
  '<div class="checkbox"><label><input type="checkbox" id="Readonly"> '+langVar.Readonly+'</label></div>'+
  '</td>'+
  '</tr>'+
  '</table>'  ,
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
        var storename = this.$content.find('#storename').val();
                  if(!storename){
                      $.alert(langVar.namerequired);
                      return false;
                  }
        var webdav = this.$content.find('#enableWebDAV').prop('checked');
        var samba = this.$content.find('#enableSamba').prop('checked');
        var ssh = this.$content.find('#enableSSH').prop('checked');
        var external = this.$content.find('#enableExternal').prop('checked');
        var readonly = this.$content.find('#Readonly').prop('checked');
        var homedir = this.$content.find('.dirshows').val();
                  if(!homedir){
                      $.alert(langVar.selectDir);
                      return false;
                  }
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxSubAccEdit', subname:subname, homedir:homedir, comment:storename, webdav:webdav, samba:samba, ssh:ssh, external:external, readonly:readonly },
       }).done(function(response){
         var parsed = JSON.parse(response);

           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           $('#ShowSubTables').DataTable().ajax.reload().columns.adjust();
         $("#hetzner-loader").hide();
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
  }

  //2022.2
  function resetSubAccount(subname) {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.SubAccMgmt,
  content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxSubReset', subname:subname },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success == 'success'){
           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           $('#ShowSubTables').DataTable().ajax.reload().columns.adjust();
         } else {
           $("#custom-alert-message").html(langVar.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
  }

  //2022.2
  function deleteSubAccount(subname) {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.SubAccMgmt,
  content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxSubDelete', subname:subname },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success == 'success'){
           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           $('#ShowSubTables').DataTable().ajax.reload().columns.adjust();
         } else {
           $("#custom-alert-message").html(langVar.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
  }


  function EnableSnapAuto() {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.EnbAutSnap,
  content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxEnbAutoSnap' },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success == 'success'){
           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           $('#ShowSnapConfTables').DataTable().ajax.reload().columns.adjust();
           $("#snapautotable").show();
           $("#enbautosnp").hide();
           $("#disautosnp").show();
           $("#SnapshotAuto").html(langVar.Enabled).show();
         } else {
           $("#custom-alert-message").html(langVar.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
  }

  function DisableSnapAuto() {
  $.confirm({
  type: "blue",
  columnClass: 'small',
  title: langVar.DisAutSnap,
  content: langVar.actsure+"?",
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
        $("#hetzner-loader").show();
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'AjaxDisAutoSnap' },
       }).done(function(response){
         var parsed = JSON.parse(response);
         if(parsed.success == 'success'){
           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           $("#snapautotable").hide();
           $("#enbautosnp").show();
           $("#disautosnp").hide();
            $("#SnapshotAuto").html(langVar.Disabled).show();
         } else {
           $("#custom-alert-message").html(langVar.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
         }
         $("#hetzner-loader").hide();
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
  }

  function deletefirewallRule(fname) {
  $.confirm({
    type: "blue",
    columnClass: 'small',
    title: langVar.firewallInfo,
    content: langVar.firewalldelsure,
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
          $("#hetzner-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'delFirewallrules', firewallname:fname },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.success){
           $("#custom-alert-message").html(langVar.successmsg);
          $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
      //     $('#firewalltable').DataTable().ajax.reload().columns.adjust();
           } else {
           $("#custom-alert-message").html(parsed.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
           }
           $("#hetzner-loader").hide();
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
  }

  function firewall() {
  $.confirm({
    type: "blue",
    columnClass: 'small',
    title: langVar.firewallact,
    content: langVar.actsure+" ?",
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
          $("#hetzner-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'firewallAction' },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.success){
           $("#custom-alert-message").html(langVar.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           } else {
           $("#custom-alert-message").html(parsed.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
           }
           $("#hetzner-loader").hide();
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
  }

  function addFirewallrules() {
  $.confirm({
    type: "blue",
    columnClass: 'medium',
    title: langVar.firewallact,
    content: ""+
    '<table class="table table-bordered table-hover">'+
    '<tr>'+
    '<td>'+langVar.fname+':</td>'+
    '<td>'+
    '<input type="text" class="form-control" id="fname" >'+
    '</td>'+
    '<td>'+langVar.TCPflags+':</td>'+
    '<td>'+
    '<select id="TCPflags" class="form-control">' +
    '<option value="" selected>null</option>' +
    '<option value="syn">syn</option>' +
    '<option value="ack">ack</option>' +
    '<option value="fin">fin</option>' +
    '<option value="rst">rst</option>' +
    '<option value="psh">psh</option>' +
    '<option value="urg">urg</option>' +
    '</select>' +
    '</td>'+
    '</tr>'+

    '<tr>'+
    '<td>'+langVar.fsource+' '+langVar.IP+':</td>'+
    '<td>'+
    '<input type="text" class="form-control" id="fsourceip" placeholder="0.0.0.0/0">'+
    '</td>'+
    '<td>'+langVar.fsource+' '+langVar.fport+':</td>'+
    '<td>'+
    '<input type="text" class="form-control" id="fsourceport" placeholder="0-65535">'+
    '</td>'+
    '</tr>'+

    '<tr>'+
    '<td>'+langVar.fdest+' '+langVar.IP+':</td>'+
    '<td>'+
    '<input type="text" class="form-control" id="fdestip" placeholder="0.0.0.0/0">'+
    '</td>'+
    '<td>'+langVar.fdest+' '+langVar.fport+':</td>'+
    '<td>'+
    '<input type="text" class="form-control" id="fdestport" placeholder="0-65535">'+
    '</td>'+
    '</tr>'+

    '<tr>'+
    '<td>'+langVar.Protocol+':</td>'+
    '<td>'+
    '<select id="protocol" class="form-control">' +
    '<option value="">*</option>' +
    '<option value="tcp">tcp</option>' +
    '<option value="udp">udp</option>' +
    '<option value="gre">gre</option>' +
    '<option value="icmp" selected>icmp</option>' +
    '<option value="ipip">ipip</option>' +
    '<option value="ah">ah</option>' +
    '<option value="esp">esp</option>' +
    '</select>' +
    '</td>'+
    '<td>'+langVar.fAction+':</td>'+
    '<td>'+
    '<select id="fAction" class="form-control">' +
    '<option value="accept" selected>accept</option>' +
    '<option value="discard">discard</option>' +
    '</select>' +
    '</td>'+
    '</tr>'+

    '</table>'  ,
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
          var fname = $("#fname").val();
          var flags = $("#TCPflags").val();
          var fsourceip = $("#fsourceip").val();
          var fsourceport = $("#fsourceport").val();
          var fdestip = $("#fdestip").val();
          var fdestport = $("#fdestport").val();
          var protocol = $("#protocol").val();
          var fAction = $("#fAction").val();
          $("#hetzner-loader").show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'addFirewallrules', name:fname, tcpflags:flags, action:fAction, protocol:protocol, dstport:fdestport, dstip:fdestip, srcport:fsourceport, srcip:fsourceip },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.success){
           $("#custom-alert-message").html(parsed.successmsg);
           $("#ClientMsg").removeClass('').addClass('alert alert-success').show();
           } else {
           $("#custom-alert-message").html(parsed.errormsg);
           $("#ClientMsg").removeClass('alert alert-success').addClass('alert alert-danger').show();
           }
           $("#hetzner-loader").hide();
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
  }
