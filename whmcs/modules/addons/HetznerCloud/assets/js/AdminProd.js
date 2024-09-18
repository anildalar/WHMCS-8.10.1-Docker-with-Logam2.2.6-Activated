
$(document).ready(function(){
  var url_string = window.location.href;
    var urls = new URL(url_string);
    var serviceid = urls.searchParams.get("id");
    var serverid = urls.searchParams.get("serverid");

    $(".viewgraph").change(function() {
            var graphtype = $(this).find('option:selected').val();
            ViewGrapgh_Metrics(graphtype);
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          var target = $(e.target).attr("href") // activated tab
          if(target == '#graph'){
            ViewGrapgh_Metrics('current');
          }
        });

serverStatus();

var OSImageTable = $("#OSImageTable").DataTable({
              destroy: true,
                    "ajax": {
                        "url": hcloudaddonmoduleURL,
                        "type": "POST",
                        data: { serviceaction:"getOperatingSystems", serverid:serverid, projectid:serviceid },
                    },
                    "info": false,
                    "columnDefs": [{ "orderable": false, "targets": 2 }],
                    "length": false,
                    "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                  "iDisplayLength": 5,
                  "bLengthChange":false,
                    scrollX: false,
                    language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                            processing: true,
                            searching: true,
                            autoWidth: false,
                            "order": [],
 });
 var RescueImageTable = $("#RescueImageTable").DataTable({
               destroy: true,
                     "ajax": {
                         "url": hcloudaddonmoduleURL,
                         "type": "POST",
                         data: { serviceaction:"getRescueSystem", serverid:serverid, projectid:serviceid },
                     },
                     "info": false,
                     "columnDefs": [{ "orderable": false, "targets": 1 }],
                     "length": false,
                     scrollX: false,
                     "bLengthChange":false,
                     language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                             processing: true,
                             searching: true,
                             autoWidth: false,
                             "order": [],
  });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          var target = $(e.target).attr("href") // activated tab
          if(target == '#otheract'){
firewallStatus();
var VMFloatingIP = $("#VMFloatingIP").DataTable({
  destroy: true,
  "ajax": {
    "url": hcloudaddonmoduleURL,
    "type": "POST",
    data: { serviceaction:"getFloatingIPInfo", serverid:serverid, projectid:serviceid },
  },
  "info": false,
  "columnDefs": [{ "orderable": false, "targets": 4 }],
  "length": false,
  scrollX: false,
  "bLengthChange":false,
  language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
  processing: true,
  searching: true,
  autoWidth: false
});

var ViewPrimaryIP = $("#ViewPrimaryIP").DataTable({
  destroy: true,
  "ajax": {
    "url": hcloudaddonmoduleURL,
    "type": "POST",
    data: { serviceaction:"getPrimaryIPInfo", serverid:serverid, projectid:serviceid },
  },
  "info": false,
  "columnDefs": [{ "orderable": false, "targets": 3 }],
  "length": false,
  "bLengthChange":false,
  scrollX: false,
  language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
  processing: true,
  searching: true,
  autoWidth: false,
  "order": [],
});

//2020.6
var VolumeTable = $("#VolumeTable").DataTable({
          destroy: true,
                "ajax": {
                    "url": hcloudaddonmoduleURL,
                    "type": "POST",
                    data: { serviceaction:"getSingleVolInfo", serverid:serverid, projectid:serviceid },
                },
                "info": false,
                "columnDefs": [{ "orderable": false, "targets": 3}],
                "length": false,
                scrollX: false,
                "bLengthChange":false,
                language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                        processing: true,
                        searching: true,
                        autoWidth: false,
                        "order": [],
                    });
//2020.6
var IsoImageTable = $("#IsoImageTable").DataTable({
          destroy: true,
                "ajax": {
                    "url": hcloudaddonmoduleURL,
                    "type": "POST",
                    data: { serviceaction:"getISOs", serverid:serverid, projectid:serviceid },
                },
                "info": false,
                "columnDefs": [{ "orderable": false, "targets": 1 }],
                "length": false,
                "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
              "iDisplayLength": 5,
              "bLengthChange":false,
                scrollX: false,
                language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                        processing: true,
                        searching: true,
                        autoWidth: false,
                        "order": [],
                    });

//2020.6
var BackUpTable = $("#BackUpTable").DataTable({
  destroy: true,
        "ajax": {
            "url": hcloudaddonmoduleURL,
            "type": "POST",
            data: { serviceaction:"getSingleServerBackup", serverid:serverid, projectid:serviceid },
        },
        "info": false,
        "columnDefs": [{ "orderable": false, "targets": 4 }],
        "length": false,
        scrollX: false,
        "bLengthChange":false,
        language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                processing: true,
                searching: true,
                autoWidth: false,
                bLengthChange: false,
                "order": [],
            });

          }
          });
//2020.6
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

  function firewallStatus(){
    var url = new URL(window.location.href);
    var serverid = url.searchParams.get("serverid");
    var accountId = url.searchParams.get("id");
    var firewalls = $("#firewalls").DataTable({
      destroy: true,
            "ajax": {
                "url": hcloudaddonmoduleURL,
                "type": "POST",
                data: { serviceaction:"getFirewall", serverid:serverid, projectid:accountId },
            },
            "info": false,
            "columnDefs": [{ "orderable": false, "targets": 5 }],
            "bLengthChange":false,
            "length": false,
            scrollX: false,
            language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                    processing: true,
                    searching: true,
                    autoWidth: false,
                    bLengthChange: false,
                    "order": [],
                });
  }


    function addFirewallRule() {
      var url = new URL(window.location.href);
      var serverid = url.searchParams.get("serverid");
      var accountId = url.searchParams.get("id");
    $.confirm({
      type: "blue",
      columnClass: "medium",
      title: langVar.firewallmgmt,
      content: ""+
      "<form action=\'\' class=\'formName\'>" +
      "<div class=\'form-group\'>" +
    "<label>"+langVar.IP_Address+" with CIDR. Use 0.0.0.0/0 to allow all IPv4 addresses and ::/0 to allow all IPv6 addresses.</label>" +
    "<input type=\'text\' class=\'form-control\' id=\'ip\' required />" +

    "<label>"+langVar.firewallprotocol+"</label>" +
    "<select id=\'protocol\' class=\'form-control\'>" +
  "<option value=\'tcp\'>TCP</option>" +
  "<option value=\'udp\'>UDP</option>" +
  "<option value=\'icmp\'>ICMP</option>" +
  "</select>" +

  "<label>"+langVar.firewallportdesc+"</label>" +
  "<input type=\'text\' class=\'form-control\' id=\'port\' required />" +

  "<label>"+langVar.firewallsourcedest+"</label>" +
  "<select id=\'source\' class=\'form-control\'>" +
  "<option value=\'in\'>Inbound</option>" +
  "<option value=\'out\'>Outbound</option>" +
  "</select>" +

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
          var ip = this.$content.find("#ip").val();
          var protocol = this.$content.find("#protocol").val();
          var port = this.$content.find("#port").val();
          var source = this.$content.find("#source").val();

          if(!ip) {$.alert('Please enter ip with CIDR'); return false; }
          if(!protocol) {$.alert('Please select protocol'); return false; }
          if(!port) {$.alert('Please provide port number'); return false; }
          if(!source) {$.alert('Please provide IP Type'); return false; }

          $("#custom-loader").show();
  WHMCS.http.jqClient.jsonPost({
    url: hcloudaddonmoduleURL,
    data: { serviceaction:'ajaxfirewallAdd', ip:ip, protocol:protocol, port:port, source:source, serverid:serverid, projectid:accountId },
    success: function(serveraction){
    if(serveraction.success == 'true'){
       $("#firewalls").DataTable().ajax.reload().columns.adjust();
       jQuery.growl.notice( {
           title: '',
           message: langVar.actionSuccess,
         });
    $("#custom-loader").hide();
    } else {
      jQuery.growl.warning( {
          title: '',
          message: serveraction.message,
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



    function firewallDelete(firewallId) {
      var url = new URL(window.location.href);
      var serverid = url.searchParams.get("serverid");
      var accountId = url.searchParams.get("id");
    $.confirm({
      type: "blue",
      columnClass: "small",
      title: langVar.firewallmgmt,
      content: langVar.Firewall_Delete_Sure+" ?",
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
              url: hcloudaddonmoduleURL,
              data: { serviceaction:'ajaxfirewallDel', firewallId:firewallId, serverid:serverid, projectid:accountId},
              success: function(serveraction){
                console.log(serveraction);
                if(serveraction.success == 'true'){
                   $("#firewalls").DataTable().ajax.reload().columns.adjust();
                   jQuery.growl.notice( {
                     title: '',
                     message: langVar.actionSuccess,
                   });
                $("#custom-loader").hide();
                } else {
                  jQuery.growl.warning( {
                      title: '',
                      message: serveraction.message,
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


function PrimaryIPv4PTR(serverid, ipv4, accountId) {
           $.confirm({
             type: "blue",
             columnClass: "col-md-6 col-md-offset-3",
             title: langVar.PrimaryIPrDesc,
             content: ""+
             "<form action=\'\' class=\'formName\'>" +
             "<div class=\'form-group\'>" +
           "<label>"+langVar.Reverse_DNS_Valie+": "+ipv4+"</label>" +
           "<input type=\'text\' class=\'form-control\' id=\'iprdns\' required />" +
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
                   var iprdns = this.$content.find('#iprdns').val();
                   if(!iprdns){
                       $.alert(langVar.ipdnsrequired+': '+ipv4);
                       return false;
                   }
                   $("#custom-loader").show();
                   $.ajax({
                    url: hcloudaddonmoduleURL,
                    type: 'post',
                    data: { serviceaction:'AjaxReverseDNS', serverid:serverid, projectid:accountId, ip:ipv4, rdns:iprdns },
                    success:function(response){
                      $("#custom-alert-message").html(langVar.PrimaryRDNSChange);
                      $("#AdminMsg").removeClass().addClass('successbox').show();
                      $("#ViewPrimaryIP").DataTable().ajax.reload().columns.adjust();
                      $("#custom-loader").hide();
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
  //2020.6
function SingleIPv6PTR(serverid, ipv6, accountId) {
           $.confirm({
             type: "blue",
             columnClass: "col-md-6 col-md-offset-3",
             title: langVar.PrimaryIP6rDesc,
             content: ""+
             "<form action=\'\' class=\'formName\'>" +
             "<div class=\'form-group\'>" +
           "<label>"+langVar.Reverse_DNS_Valie+": "+ipv6+"</label>" +
           "<input type=\'text\' class=\'form-control\' id=\'iprdns\' required />" +
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
                   var iprdns = this.$content.find('#iprdns').val();
                   if(!iprdns){
                       $.alert(langVar.ipdnsrequired+': '+ipv6);
                       return false;
                   }
                   $("#custom-loader").show();
                   $.ajax({
                    url: hcloudaddonmoduleURL,
                    type: 'post',
                    data: { serviceaction:'AjaxReverseDNS', serverid:serverid, projectid:accountId, ip:ipv6, rdns:iprdns },
                    success:function(response){
                      $("#custom-alert-message").html(langVar.Primaryv6RDNSChange);
                      $("#AdminMsg").removeClass().addClass('successbox').show();
                      $("#ViewPrimaryIP").DataTable().ajax.reload().columns.adjust();
                      $("#custom-loader").hide();
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

//2020.6
  function ViewGrapgh_Metrics(graphtype) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var serverid = url.searchParams.get("serverid");
    var projectid = url.searchParams.get("id");
    $("#custom-loader").show();
      $.ajax({
          url: hcloudaddonmoduleURL,
          type: 'post',
          data: { serviceaction:'AjaxViewGraph', graphtype:graphtype, projectid:projectid, serverid:serverid },
        }).done(function(response){
          var parsed = JSON.parse(response);
            $('#CPU').html('<div id="graph1"></div>' + parsed.cpu);
            $('#Throughput').html('<div id="graph2"></div>' + parsed.disk_throughput);
            $('#IOPS').html('<div id="graph3"></div>' + parsed.disk_iops);
            $('#PPS').html('<div id="graph4"></div>' + parsed.network_pps);
            $('#Traffic').html('<div id="graph5"></div>' + parsed.network_bandwidth);
            $("#custom-loader").hide();
        });
      };
//2020.7

function RebuildOS(projectId, serverid, osID, OSDesc) {
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
        $.post( hcloudaddonmoduleURL,
          { serviceaction:'Rebuild', LinuxOS:osID, serverid:serverid, projectid:projectId  })
        .done(function( data ) {
          var parsed = JSON.parse(data);
          if(parsed.action.error === null){
          $("#custom-alert-message").html(langVar.osinstallsuccess +" : "+ parsed.root_password);
          $("#AdminMsg").removeClass().addClass('successbox').show();
          $("#srv_root").val(parsed.root_password).show();

          $.ajax({
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxServerBuildImg', projectid:projectId, serverid:serverid, imgOSID:osID },
           success:function(response){
             var parsed = JSON.parse(response);
             if (parsed.osimg != 'noneos') {
          $("#osimg > img").attr("src", '../modules/servers/HetznerCloud/assets/img/' + parsed.osimg + '.svg').show();
          $("#osimg > img").attr("alt", parsed.osdes).show();
          $("#osdes").html(parsed.osdes).show();
                 } else {
          $("#osimg > img").attr("src", '../modules/servers/HetznerCloud/assets/img/noneos.svg').show();
          $("#osimg > img").attr("alt", parsed.osdes).show();
          $("#osdes").html(parsed.osdes).show();
                 }
           }
          });

          } else {
          $("#custom-alert-message").html(langVar.osinstallerror);
          $("#AdminPanel").removeClass('successbox').addClass('errorbox').show();
          }
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

//2020.6
  function serverStatus() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var serverid = url.searchParams.get("serverid");
    var projectid = url.searchParams.get("id");
    $("#custom-loader").show();
    $.ajax({
     url: hcloudaddonmoduleURL,
     type: 'post',
     data: { serviceaction:'AjaxServerStatus', projectid:projectid, serverid:serverid },
     success:function(response){
       var parsed = JSON.parse(response);

       if (parsed.osimg != 'noneos') {
  $("#osimg > img").attr("src", '../modules/servers/HetznerCloud/assets/img/' + parsed.osimg + '.svg').show();
  $("#osimg > img").attr("alt", parsed.osdes).show();
  $("#osdes").html(parsed.osdes).show();
           } else {
  $("#osimg > img").attr("src", '../modules/servers/HetznerCloud/assets/img/noneos.svg').show();
  $("#osimg > img").attr("alt", parsed.osdes).show();
  $("#osdes").html(parsed.osdes).show();
           }

         if( parsed.srvstatus == 'on' ){
          $("#offdisplay").show();
         } else {
          $("#ondisplay").show();
         }
         if( parsed.srvdeletion == 'yes' ){
          $("#dpdisplay").show();
         } else {
          $("#endisplay").show();
         }

         if( parsed.iso == 'yes' ){
          $("#isoidshow").show();
         } else {
          $("#isoidshow").hide();
         }

         if( parsed.backup == 'yes' ){
          $("#BackupStatusEnable").hide();
          $("#BackupStatusDisable").show();
         } else {
          $("#BackupStatusEnable").show();
          $("#BackupStatusDisable").hide();
         }

         if( parsed.rescue == 'yes' ){
          $("#rescuedisbtn").show();
          $("#hcrpassword").show();
         } else {
          $("#rescuedisbtn").hide();
          $("#hcrpassword").hide();
         }
         $("#custom-loader").hide();
     }

    });
  };

//2020.6
  function vmReboot(serverid, accountId) {
  $.confirm({
    type: "blue",
    title: langVar.Server_Reboot,
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
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxReboot', serverid:serverid, projectid:accountId },
          }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.action.error === null){
           $("#custom-alert-message").html(langVar.vmRebootSuccess);
           $("#AdminMsg").removeClass().addClass('successbox').show();
           } else {
           $("#custom-alert-message").html(langVar.vmRebootError);
           $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
           }
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

  //2020.6
  function vmReset(serverid, accountId) {
  $.confirm({
    type: "blue",
    title: langVar.Server_Reset,
    content: langVar.Reset_Message+" ?",
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
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxReset', serverid:serverid, projectid:accountId },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.action.error === null){
           $("#custom-alert-message").html(langVar.vmResetSuccess);
           $("#AdminMsg").removeClass().addClass('successbox').show();
           } else {
           $("#custom-alert-message").html(langVar.vmResetError);
           $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
           }
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
//2020.6
  function vmPowerOff(serverid, accountId) {
  $.confirm({
    type: "red",
    title: langVar.PowerOff_Server,
    columnClass: "col-md-6 col-md-offset-2",
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
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxPowerOff', serverid:serverid, projectid:accountId },
         }).done(function(response){
           $("#custom-alert-message").html(langVar.vmPowerOffSuccess);
           $("#AdminMsg").removeClass().addClass('successbox').show();
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
//2020.6
  function vmPowerOn(serverid, accountId) {
  $.confirm({
    type: "blue",
    title: langVar.PowerOn_Server,
    columnClass: "col-md-6 col-md-offset-2",
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
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxPowerOn', serverid:serverid, projectid:accountId },
         }).done(function(response){
           $("#custom-alert-message").html(langVar.vmPowerOnSuccess);
           $("#AdminMsg").removeClass().addClass('successbox').show();
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
//2020.6
  function vmPassReset(serverid, accountId) {
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
          $.ajax({
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'PasswordReset', serverid:serverid, projectid:accountId },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.result == 'complete'){
           $("#custom-alert-message").html(langVar.vmPassResetSucess);
           $('#srv_root').val(parsed.message).show();
           $("#AdminMsg").removeClass().addClass('successbox').show();
           } else {
           $("#custom-alert-message").html(parsed.message);
           $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
           }
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
//2020.6
  function vmEnableProtection(serverid, accountId) {
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
          $.ajax({
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxProtection', serverid:serverid, projectid:accountId, type:'enable' },
         }).done(function(response){
           $("#custom-alert-message").html(langVar.vmProEnable);
           $("#AdminMsg").removeClass().addClass('successbox').show();
           $("#custom-loader").hide();
           $(window).scrollTop(0);
           $('#dpdisplay').show();
           $('#endisplay').hide();
           $("#delete_windows").removeClass('status-field pending').addClass('status-field completed').html('enabled').show();
           $("#rebuild_windows").removeClass('status-field pending').addClass('status-field completed').html('enabled').show();
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
//2020.6
  function vmDisableProtection(serverid, accountId) {
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
          $.ajax({
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxProtection', serverid:serverid, projectid:accountId, type:'disable' },
         }).done(function(response){
           $("#custom-alert-message").html(langVar.vmProDisable);
           $("#AdminMsg").removeClass().addClass('successbox').show();
           $("#custom-loader").hide();
           $(window).scrollTop(0);
           $('#dpdisplay').hide();
           $('#endisplay').show();
           $("#delete_windows").removeClass('status-field completed').addClass('status-field pending').html('disabled').show();
           $("#rebuild_windows").removeClass('status-field completed').addClass('status-field pending').html('disabled').show();
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
//2020.6
  function vmOpenConsole(serverid, accountId) {
  $.confirm({
    type: "blue",
    title: langVar.ConsoleDialog,
    content: langVar.consolesure+" ?",
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
        window.open(hcloudaddonmoduleURL+'&subaction=novnc&serverid='+serverid+'&id='+accountId, '','width=900,height=640');
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

  //2020.6
    function vmVolumeCreate(serverid, accountId) {
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
            $.ajax({
             url: hcloudaddonmoduleURL,
             type: 'post',
             data: { serviceaction:'CreateVolume', volsize:volsize, format:volformat, serverid:serverid, projectid:accountId },
             success:function(response){
               $("#custom-alert-message").html(langVar.volCreateSuccess);
               $("#AdminMsg").removeClass().addClass('successbox').show();
               $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
               $("#custom-loader").hide();
               $(window).scrollTop(0);
               $('.VolCrt').hide();
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
    //2020.6
      function vmVolumeDescChange(volid, serverid, accountId) {
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
              $.ajax({
               url: hcloudaddonmoduleURL,
               type: 'post',
               data: { serviceaction:'VolumeAction', serverid:serverid, projectid:accountId, volid:volid, volname:voldesc, type:'namechange' },
               success:function(response){
                 $("#custom-alert-message").html(langVar.volDescChangeSuccess);
                 $("#AdminMsg").removeClass().addClass('successbox').show();
                 $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
                 $("#custom-loader").hide();
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
      //2020.6
        function vmVolumeProtectActivate(volid, serverid, accountId) {
        $.confirm({
          type: "red",
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
                $.ajax({
                 url: hcloudaddonmoduleURL,
                 type: 'post',
                 data: { serviceaction:'VolumeAction', serverid:serverid, projectid:accountId, volid:volid, type:'volenable' },
               }).done(function(response){
                 $("#custom-alert-message").html(langVar.volProSuccess);
                 $("#AdminMsg").removeClass().addClass('successbox').show();
                 $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
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
        //2020.6
          function vmVolumeProtectDeActivate(volid, serverid, accountId) {
          $.confirm({
            type: "red",
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
                  $.ajax({
                   url: hcloudaddonmoduleURL,
                   type: 'post',
                   data: { serviceaction:'VolumeAction', serverid:serverid, projectid:accountId, volid:volid, type:'voldisable' },
                 }).done(function(response){
                   $("#custom-alert-message").html(langVar.volProDisSuccess);
                   $("#AdminMsg").removeClass().addClass('successbox').show();
                   $("#VolumeTable").DataTable().ajax.reload().columns.adjust();
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
//2020.6
  function HostUpdateAjax(serverid, accountId) {
    var hostval = $(".hostnamein").val();
    if(!hostval){
        $.alert(langVar.HostnaedRequired);
        return false;
    }
  $.confirm({
    type: "red",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.HostDialog,
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
            url: hcloudaddonmoduleURL,
            type: 'post',
            data : { serviceaction:'HostnameUpdate', hostname:hostval, serverid:serverid, projectid:accountId },
          }).done(function(response){
            $("#custom-alert-message").html(langVar.HostnameupdatedSuccess);
            $("#AdminMsg").removeClass().addClass('successbox').show();
            $('.hostnameup').text(hostval).show();
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

//2020.7
function vmRescueModeDis() {
  $.confirm({
    columnClass: "col-md-6 col-md-offset-3",
      type: "blue",
        title: langVar.rescue.title,
        icon: "fas fa-chart-network",
        content: langVar.resDisMessage,
        buttons: {
            formSubmit: {
                text: "<i class=\'fa fa-check-circle\'></i> " +langVar.GotIt,
                btnClass: "btn-primary",
                action: function () {
                }
            },
        },
    });
};

function vmRescueMode(projectId, serverid, rescueID) {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.rescue.title,
  content: langVar.rescue.enrescue+" ?",
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
        $.post( hcloudaddonmoduleURL,
          { serviceaction:"EnableRescue", RescueOS:rescueID, serverid:serverid, projectid:projectId })
        .done(function( response ) {
          var parsed = JSON.parse(response);
          if(parsed.action.error === null){
          $("#custom-alert-message").html(langVar.rescuepasssuccess + " : " + parsed.root_password);
          $("#AdminMsg").removeClass().addClass('successbox').show();
          $("#rescuedisbtn").show();
          $("#hcrpassword").show();
          $("#hcloudpass").val(parsed.root_password).show();
          } else {
          $("#custom-alert-message").html(langVar.rescueperror);
          $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
          }
          $("#RescueImageTable").DataTable().ajax.reload().columns.adjust();
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

function vmRescueModeDisable(projectId, serverid) {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.rescue.title,
  content: langVar.rescue.disrescue+" ?",
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
        $.post( hcloudaddonmoduleURL,
          { serviceaction:"DisableRescue", serverid:serverid, projectid:projectId })
        .done(function( response ) {
          var parsed = JSON.parse(response);
          if(parsed.action.error === null){
          $("#custom-alert-message").html(langVar.rescuedissuccess);
          $("#AdminMsg").removeClass().addClass('successbox').show();
          $("#rescuedisbtn").hide();
          $("#hcrpassword").hide();
          } else {
          $("#custom-alert-message").html(langVar.rescuederror);
          $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
          }
          $("#RescueImageTable").DataTable().ajax.reload().columns.adjust();
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

//2020.6
  function rdnsresetipv4(serverid, ipv4, rdnsvalue, accountId) {
  $.confirm({
    type: "blue",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.ResetPrimaryIP,
    content: langVar.reversePTRReset+" ?",
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
          var ip = ipv4;
          var split_ip = ip.split(".");
          var split_ip0 = split_ip[0];
          var split_ip1 = split_ip[1];
          var split_ip2 = split_ip[2];
          var split_ip3 = split_ip[3];
          var value = 'static.' + split_ip3 + '.' + split_ip2 + '.' + split_ip1 + '.' + split_ip0 + '.' + rdnsvalue; //
          $('.iprdnseditv4').show();
          $('.iprdnseditv4').text(value).show();
          $('.iprdnstxteditv4').val(value);
          $.ajax({
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxReverseDNS', serverid:serverid, projectid:accountId, ip:ip, rdns:value },
           success:function(response){
             $("#custom-alert-message").html(langVar.PrimeIPv4Reset);
             $("#AdminMsg").removeClass().addClass('successbox').show();
             $("#ViewPrimaryIP").DataTable().ajax.reload().columns.adjust();
             $("#custom-loader").hide();
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
//2020.6
  function Globev6Submit(serverid, ipv6, accountId) {
    $.confirm({
        type: "blue",
        columnClass: "col-md-8 col-md-offset-2",
          title: langVar.IP_Title,
          icon: "fas fa-chart-network",
          content: ""+
          "<label>"+langVar.IPv6Globe_Message+"</label>" +
          "<form action=\'\' class=\'formName\'>" +
          "<div class=\'input-group form-group\'>" +
          "<span class=\'input-group-addon\'>"+ipv6+"</span>"+
          "<input type=\'text\' placeholder=\'"+langVar.IPv6_Address+"\' class=\'form-control\' id=\'Globev6\' required />" +
          "</div>" +
          "<div class=\'form-group\'>" +
        "<label>"+langVar.Reverse_DNS_Valie+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.RDNS_Value+"\' class=\'form-control\' id=\'Globev6RDNS\' required />" +
          "</div>"+
          "</form>",
          buttons: {
              formSubmit: {
                  text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
                  btnClass: "btn-primary",
                  action: function () {
                      var ip6 = this.$content.find("#Globev6").val();
                      if(!ip6){
                          $.alert(langVar.ipv6req);
                          return false;
                      }
                      var reverse = this.$content.find("#Globev6RDNS").val();
                      if(!reverse){
                          $.alert(langVar.reversevalue);
                          return false;
                      }
                      var ip = ipv6 + ip6;
                      $("#custom-loader").show();
                      $.ajax({
                       url: hcloudaddonmoduleURL,
                       type: 'post',
                       data: { serviceaction:'AjaxReverseDNS', serverid:serverid, projectid:accountId, ip:ip, rdns:reverse },
                       success:function(response){
                         $("#custom-alert-message").html(langVar.ipv6reversedone);
                         $("#AdminMsg").removeClass().addClass('successbox').show();
                         $("#ViewPrimaryIP").DataTable().ajax.reload().columns.adjust();
                         $("#custom-loader").hide();
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
          },
      });
  };
//2020.6
  function AddFloatIP(serverid, accountId) {
    $.confirm({
        type: "blue",
          title: langVar.IP_Title,
          icon: "fas fa-chart-network",
          content: ""+
          "<form action=\'\' class=\'formName\'>" +
          "<div class=\'form-group\'>" +
          "<label>"+langVar.IPAddress.Select+"</label>" +
          "<select id=\'IPtype\' class=\'form-control\'>" +
          "<option value=\'\'>"+langVar.SelectIPType+"</option>" +
        "<option value=\'ipv4\'>"+langVar.IPAddress.v4+"</option>" +
        "<option value=\'ipv6\'>"+langVar.IPAddress.v6+"</option>" +
        "</select>" +
          "</div>" +
          "</form>",
          buttons: {
              formSubmit: {
                  text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
                  btnClass: "btn-primary",
                  action: function () {
                      var iptype = this.$content.find("#IPtype").val();
                      if(!iptype){
                          $.alert(langVar.selectIPtypes);
                          return false;
                      }
                      $("#custom-loader").show();
                      $.ajax({
                       url: hcloudaddonmoduleURL,
                       type: 'post',
                       data: { serviceaction:'AjaxAddFloatIP', serverid:serverid, projectid:accountId, IPtype:iptype },
                     }).done(function(response){
                       var parsed = JSON.parse(response);
                       if(parsed.result == 'complete'){
                       $("#custom-alert-message").html(langVar.FIPAdded);
                       $("#AdminMsg").removeClass().addClass('successbox').show();
                       } else {
                       $("#custom-alert-message").html(langVar.FIPAError);
                       $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                     }
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
          },
      });
  };
//2020.6
  function showinstruction(ip) {
    $.confirm({
      columnClass: "col-md-6 col-md-offset-3",
        type: "blue",
          title: langVar.IP_Title,
          icon: "fas fa-chart-network",
          content: ""+
          langVar.FloatingIP_Ins+"<br />"+
          "<strong>"+langVar.FloatingIP_Command+"</strong><br />"+
          "<pre>$ sudo ip addr add " + ip + " dev eth0</pre>" +
          langVar.FloatingIP_Ins_Reboot,
          buttons: {
              formSubmit: {
                  text: "<i class=\'fa fa-check-circle\'></i> " +langVar.GotIt,
                  btnClass: "btn-primary",
                  action: function () {
                  }
              },
          },
      });
  };
//2020.6
  function disableprofloIp(ipid, serverid, accountId) {
  $.confirm({
    type: "blue",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.DisFlDialog,
    content: langVar.DisProSecure+" ?",
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
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxFloatingIP', projectid:accountId, serverid:serverid, floatipid:ipid, type:'disable'},
           success:function(response){
             $("#custom-alert-message").html(langVar.FlIPDisSuccess);
             $("#AdminMsg").removeClass().addClass('successbox').show();
             $("#VMFloatingIP").DataTable().ajax.reload().columns.adjust();
             $("#custom-loader").hide();
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
//2020.6
  function enableprofloIp(ipid, serverid, accountId) {
  $.confirm({
    type: "blue",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.EnFlDialog,
    content: langVar.EnbProSecure+" ?",
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
           url: hcloudaddonmoduleURL,
           type: 'post',
           data: { serviceaction:'AjaxFloatingIP', projectid:accountId, serverid:serverid, floatipid:ipid, type:'enable'},
           success:function(response){
             $("#custom-alert-message").html(langVar.FlIPSuccess);
             $("#AdminMsg").removeClass().addClass('successbox').show();
             $("#VMFloatingIP").DataTable().ajax.reload().columns.adjust();
             $("#custom-loader").hide();
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
//2020.6
  function ResetIpFlDNS(ipid, serverid, ips, rdnsvalue, accountId) {
  $.confirm({
    type: "blue",
    columnClass: "col-md-6 col-md-offset-3",
    title: langVar.ResetFlDialog,
    content: langVar.reversePTRReset+" ?",
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
        var ip = ips;
        var split_ip = ip.split(".");
        var split_ip0 = split_ip[0];
        var split_ip1 = split_ip[1];
        var split_ip2 = split_ip[2];
        var split_ip3 = split_ip[3];
        var value = 'static.' + split_ip3 + '.' + split_ip2 + '.' + split_ip1 + '.' + split_ip0 + '.' + rdnsvalue;
        $("#custom-loader").show();
        $.ajax({
         url: hcloudaddonmoduleURL,
         type: 'post',
         data: { serviceaction:'AjaxFloatingIP', projectid:accountId, serverid:serverid, floatipid:ipid, type:'rdns',  ip:ip, floatiprdns:value },
         success:function(response){
           $("#custom-alert-message").html(langVar.FloatingRDNSSuccess);
           $("#AdminMsg").removeClass().addClass('successbox').show();
           $("#VMFloatingIP").DataTable().ajax.reload().columns.adjust();
           $("#custom-loader").hide();
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

  //2020.6
    function EnableBackup(serverid, accountId) {
    $.confirm({
      type: "blue",
      columnClass: "col-md-6 col-md-offset-3",
      title: langVar.backup.CloudVMBackups,
      content: langVar.Enb_Backup_Sure+" ?",
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
             url: hcloudaddonmoduleURL,
             type: 'post',
             data: { serviceaction:'EnableBackups', serverid:serverid, projectid:accountId },
             success:function(response){
               $("#custom-alert-message").html(langVar.BackEnbSuccess);
               $("#AdminMsg").removeClass().addClass('successbox').show();
               $("#custom-loader").hide();
               $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
               $("#BackupStatusEnable").hide();
               $("#BackupStatusDisable").show();
               $("#backup_window").removeClass('status-field completed').addClass('status-field pending').html('enabled').show();
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

    //2020.6
      function DisableBackup(serverid, accountId) {
      $.confirm({
        type: "blue",
        columnClass: "col-md-6 col-md-offset-3",
        title: langVar.backup.CloudVMBackups,
        content: langVar.Dis_Backup_Sure+" ? <br />"+langVar.Dis_Backup_Warning,
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
               url: hcloudaddonmoduleURL,
               type: 'post',
               data: { serviceaction:'DisableBackups', serverid:serverid, projectid:accountId },
               success:function(response){
                 $("#custom-alert-message").html(langVar.BackDisSuccess);
                 $("#AdminMsg").removeClass().addClass('successbox').show();
                 $("#custom-loader").hide();
                 $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
                 $("#BackupStatusEnable").show();
                 $("#BackupStatusDisable").hide();
                 $("#backup_window").removeClass('status-field pending').addClass('status-field completed').html('disabled').show();
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

      //2020.6
        function CreateBackup(serverid, accountId) {
        $.confirm({
          type: "blue",
          columnClass: "col-md-6 col-md-offset-3",
          title: langVar.backup.CloudVMBackups,
          content: langVar.Backup_Create_Sure+" ?",
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
                 url: hcloudaddonmoduleURL,
                 type: 'post',
                 data: { serviceaction:'CreateBackup', serverid:serverid, projectid:accountId },
                 success:function(response){
                   $("#custom-alert-message").html(langVar.BackCreateSuccess);
                   $("#AdminMsg").removeClass().addClass('successbox').show();
                   $("#custom-loader").hide();
                   $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
                   $("#BackupStatusDisable").hide();
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

        //2020.6
          function BackupRemove(backupid, serverid, accountId) {
          $.confirm({
            type: "blue",
            columnClass: "col-md-6 col-md-offset-3",
            title: langVar.backup.CloudVMBackups,
            content: langVar.Backup_Delete_Sure+" ?",
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
                   url: hcloudaddonmoduleURL,
                   type: 'post',
                   data: { serviceaction:'DeleteBackup', BackupID:backupid, serverid:serverid, projectid:accountId },
                   success:function(response){
                     $("#custom-alert-message").html(langVar.BackupRemoveSuccess);
                     $("#AdminMsg").removeClass().addClass('successbox').show();
                     $("#custom-loader").hide();
                     $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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

          //2020.6
            function BackupRestore(backupid, serverid, accountId) {
            $.confirm({
              type: "blue",
              columnClass: "col-md-6 col-md-offset-3",
              title: langVar.backup.CloudVMBackups,
              content: langVar.Backup_Restore_Sure+" ?",
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
                     url: hcloudaddonmoduleURL,
                     type: 'post',
                     data: { serviceaction:'RestoreBackup', BackupResID:backupid, serverid:serverid, projectid:accountId },
                     success:function(response){
                       $("#custom-alert-message").html(langVar.BackupRestoredSuccess);
                       $("#AdminMsg").removeClass().addClass('successbox').show();
                       $("#custom-loader").hide();
                       $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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

            //2020.6
              function generalISODetach(serverid, accountId) {
              $.confirm({
                type: "blue",
                columnClass: "col-md-6 col-md-offset-3",
                title: langVar.istmgmt.title,
                content: langVar.istmgmt.gdasure+" ?",
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
                       url: hcloudaddonmoduleURL,
                       type: 'post',
                       data: { serviceaction:'ISOAttachDetach', ActType:'detach_iso', serverid:serverid, projectid:accountId },
                       success:function(response){
                         $("#custom-alert-message").html(langVar.istmgmt.dsuccess);
                         $("#AdminMsg").removeClass().addClass('successbox').show();
                         $("#custom-loader").hide();
                         $("#isoidshow").hide();
                         $("#iso_windows").removeClass('status-field completed').addClass('status-field pending').html('no').show();
                         $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
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

              //2020.6
                function isoattach(isoimg, serverid, accountId) {
                $.confirm({
                  type: "blue",
                  title: langVar.istmgmt.title,
                  content: langVar.istmgmt.asure+" ?",
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
                        $.post( hcloudaddonmoduleURL,
                          { serviceaction:"ISOAttachDetach", ActType:"attach_iso",  IsoName:isoimg, serverid:serverid, projectid:accountId })
                        .done(function( data ) {
                          $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
                          $("#custom-alert-message").html(langVar.istmgmt.asuccess);
                          $("#isoidshow").show();
                          $("#AdminMsg").removeClass().addClass('successbox').show();
                          $("#iso_windows").removeClass("status-field completed").addClass("status-field pending").html("no").show();
                          $("#custom-loader").hide();
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

                //2020.6
                  function isodetach(serverid, accountId) {
                  $.confirm({
                    type: "blue",
                    title: langVar.istmgmt.title,
                    content: langVar.istmgmt.dasure+" ?",
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
                          $.post( hcloudaddonmoduleURL,
                            { serviceaction:"ISOAttachDetach", ActType:"detach_iso", serverid:serverid, projectid:accountId })
                          .done(function( data ) {
                            $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
                            $("#custom-alert-message").html(langVar.istmgmt.dsuccess);
                            $("#isoidshow").hide();
                            $("#AdminMsg").removeClass().addClass('successbox').show();
                            $("#iso_windows").removeClass("status-field completed").addClass("status-field pending").html("no").show();
                            $("#custom-loader").hide();
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

                  //2020.6
                  function vmFlIPDescChange(flid, serverid, accountId) {
                   $.confirm({
                     type: "blue",
                     title: langVar.FloatingIPDesc,
                     columnClass: "col-md-6 col-md-offset-3",
                     content: ""+
                     "<form action=\'\' class=\'formName\'>" +
                     "<div class=\'form-group\'>" +
                   "<label>"+langVar.flnamechange+"</label>" +
                   "<input type=\'text\' class=\'form-control\' id=\'flname\' required />" +
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
                           var flname = this.$content.find('#flname').val();
                           if(!flname){
                               $.alert(langVar.flnamerequired);
                               return false;
                           }
                           $("#custom-loader").show();
                           $.ajax({
                            url: hcloudaddonmoduleURL,
                            type: 'post',
                            data: { serviceaction:'AjaxFloatingIP', type:'des', floatipid:flid, floatipdes:flname, projectid:accountId, serverid:serverid },
                            success:function(response){
                              $("#custom-alert-message").html(langVar.FloatDescChangeSuccess);
                              $("#AdminMsg").removeClass().addClass('successbox').show();
                              $("#VMFloatingIP").DataTable().ajax.reload().columns.adjust();
                              $("#custom-loader").hide();
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

                  //2020.6
                function vmFlIPPTRChange(flip, flid, serverid, accountId) {
                           $.confirm({
                             type: "blue",
                             columnClass: "col-md-6 col-md-offset-3",
                             title: langVar.FloatingIPrDesc,
                             content: ""+
                             "<form action=\'\' class=\'formName\'>" +
                             "<div class=\'form-group\'>" +
                           "<label>"+langVar.Reverse_DNS_Valie+": "+flip+"</label>" +
                           "<input type=\'text\' class=\'form-control\' id=\'flrdns\' required />" +
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
                                   var flrdns = this.$content.find('#flrdns').val();
                                   if(!flrdns){
                                       $.alert(langVar.flrdnsrequired+': '+flip);
                                       return false;
                                   }
                                   $("#custom-loader").show();
                                   $.ajax({
                                    url: hcloudaddonmoduleURL,
                                    type: 'post',
                                    data: { serviceaction:'AjaxFloatingIP', projectid:accountId, serverid:serverid, floatipid:flid, type:'rdns',  ip:flip, floatiprdns:flrdns },
                                    success:function(response){
                                      $("#custom-alert-message").html(langVar.FloatRDNSChange);
                                      $("#AdminMsg").removeClass().addClass('successbox').show();
                                      $("#VMFloatingIP").DataTable().ajax.reload().columns.adjust();
                                      $("#custom-loader").hide();
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
