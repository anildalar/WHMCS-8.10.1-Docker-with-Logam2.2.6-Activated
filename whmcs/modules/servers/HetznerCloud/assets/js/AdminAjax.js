
$(document).ready(function(){

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
  osImages();
  rescueImages();

   $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
     var target = $(e.target).attr("href") // activated tab
     if(target == '#otheract'){
  volumeDetails();
  isoImageDetails();
  backupDetails();
  primaryIPs();
  floatingIps();
  firewallStatus();
        }
        });

  //2020.7

var prodstatus = $("#prodstatus").find('option:selected').val();
if(prodstatus == 'Active'){
$("#btnCreate").hide();
$("#btnSuspend").removeClass('btn btn-default').addClass('btn btn-danger btn-labeled suspend btn-sm').show();
$("#btnUnsuspend").hide();
$("#btnTerminate").removeClass('btn btn-default').addClass('btn btn-danger btn-labeled terminate btn-sm').show();
$("#btnChange_Package").removeClass('btn btn-default').addClass('btn btn-warning btn-labeled package btn-sm').show();
}

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

function floatingIps(){
  var floatip = $("#floatip").DataTable({
            destroy: true,
            "ajax": {
              "url": window.location.href,
              "type": "POST",
              data: { subaction:"getFloatingIPInfo" },
            },
            "info": false,
            "columnDefs": [{ "orderable": false, "targets": 3 }],
            "length": false,
            "bLengthChange":false,
            scrollX: false,
            language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
            processing: true,
            searching: true,
            autoWidth: false
});
}

function primaryIPs(){
  var viewip = $("#viewip").DataTable({
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
            language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
            processing: true,
            searching: true,
            autoWidth: false,
            "order": [],
          });
}

function backupDetails(){
  var BackUpTable = $("#BackUpTable").DataTable({
    destroy: true,
          "ajax": {
              "url": window.location.href,
              "type": "POST",
              data: { subaction:"getSingleServerBackup" },
          },
          "info": false,
          "columnDefs": [{ "orderable": false, "targets": 3 }],
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

function isoImageDetails(){
  var IsoImageTable = $("#IsoImageTable").DataTable({
                destroy: true,
                      "ajax": {
                          "url": window.location.href,
                          "type": "POST",
                          data: { subaction:"getISOs" },
                      },
                      "info": false,
                      "columnDefs": [{ "orderable": false, "targets": 1 }],
                      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                    "iDisplayLength": 5,
                      "length": false,
                      scrollX: false,
                      language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                              processing: true,
                              searching: true,
                              autoWidth: false,
                              "order": [],
   });
}

function volumeDetails(){
    var VolumeTable = $("#VolumeTable").DataTable({
              destroy: true,
                    "ajax": {
                        "url": window.location.href,
                        "type": "POST",
                        data: { subaction:"getSingleVolInfo" },
                    },
                    "info": false,
                    "columnDefs": [{ "orderable": false, "targets": 3}],
                    "length": false,
                    scrollX: false,
                    language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                            processing: true,
                            searching: true,
                            autoWidth: false,
                            "order": [],
  });
  }

  function rescueImages(){
    var RescueImageTable = $("#RescueImageTable").DataTable({
                  destroy: true,
                        "ajax": {
                            "url": window.location.href,
                            "type": "POST",
                            data: { subaction:"getRescueSystem" },
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
  }

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
                        language: {processing: "<img src='../modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                                processing: true,
                                searching: true,
                                autoWidth: false,
                                "order": [],
     });
  }

  function firewallStatus(){
    var firewalls = $("#firewalls").DataTable({
      destroy: true,
            "ajax": {
                "url": window.location.href,
                "type": "POST",
                data: { subaction:"getFirewall" },
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
    url: window.location.href,
    data: { subaction:'ajaxfirewallAdd', ip:ip, protocol:protocol, port:port, source:source },
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
              url: window.location.href,
              data: { subaction:'ajaxfirewallDel', firewallId:firewallId},
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

//General Information
function serverStatus() {
    $.post({
        url: window.location.href,
        data: { subaction:'AjaxServerStatus' },
      }).done(function(response){

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

    if( parsed.iso == 'yes' ){
     $("#isoidshow").show();
    } else {
     $("#isoidshow").hide();
    }

    if( parsed.srvstatus == 'on' ){
     $("#offdisplay").show();
     $('#poweroffdisplay').show();
    } else {
     $("#ondisplay").show();
     $('#powerondisplay').show();
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

  });
};
//OS Installation
function RebuildOS(osID, OSDesc) {
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
          { subaction:"Rebuild", LinuxOS:osID })
        .done(function( data ) {
          var parsed = JSON.parse(data);
          if(parsed.action.error === null){
          jQuery.growl.notice( {
           title: '',
           message: langVar.osinstallsuccess +" : "+ parsed.root_password,
         });
          $("#inputPassword").val(parsed.root_password).show();
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxServerBuildImg', imgOSID:osID },
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
            jQuery.growl.warning( {
          title: '',
          message: langVar.osinstallerror,
        });
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

//Rescue Mode
function vmRescueModeDisable() {
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
        $.post( window.location.href,
          { subaction:"DisableRescue" })
        .done(function( response ) {
          var parsed = JSON.parse(response);
          if(parsed.action.error === null){
            jQuery.growl.notice( {
           title: '',
           message: langVar.rescuedissuccess,
         });
          $("#rescuedisbtn").hide();
          $("#hcrpassword").hide();
          } else {
            jQuery.growl.warning( {
           title: '',
           message: langVar.rescuederror,
         });
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

function vmRescueMode(rescueID) {
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
        $.post( window.location.href,
          { subaction:"EnableRescue", RescueOS:rescueID })
        .done(function( response ) {
          var parsed = JSON.parse(response);
          if(parsed.action.error === null){
          jQuery.growl.notice( {
             title: '',
             message: langVar.rescuepasssuccess + " : " + parsed.root_password,
           });
          $("#rescuedisbtn").show();
          $("#hcrpassword").show();
          $("#hcloudpass").val(parsed.root_password).show();
          } else {
            jQuery.growl.warning( {
          title: '',
          message: langVar.rescueperror,
        });
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
          data : { serviceaction:'HostnameUpdate', hostname:hostval },
        }).done(function(response){
          jQuery.growl.notice( {
           title: '',
           message: langVar.HostnameupdatedSuccess,
         });
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

//Bandwidth ViewGrapgh_Metrics
function ViewGrapgh_Metrics(graphtype) {
  $("#custom-loader").show();
    $.post({
        url: window.location.href,
        data: { subaction:'AjaxViewGraph', graphtype:graphtype },
      }).done(function(response){
          var parsed = JSON.parse(response);
          $('#CPU').html('<div id="graph1" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.cpu);
          $('#Throughput').html('<div id="graph2" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.disk_throughput);
          $('#IOPS').html('<div id="graph3" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.disk_iops);
          $('#PPS').html('<div id="graph4" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.network_pps);
          $('#Traffic').html('<div id="graph5" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.network_bandwidth);
          $("#custom-loader").hide();
      });
    };

//Volumne Management
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
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'VolumeAction', volid:volid, type:'voldisable' },
       }).done(function(response){
         jQuery.growl.notice( {
          title: '',
          message: langVar.volProDisSuccess,
        });
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
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'VolumeAction', volid:volid, type:'volenable' },
       }).done(function(response){
         jQuery.growl.notice( {
          title: '',
          message: langVar.volProSuccess,
        });
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
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'VolumeAction', volid:volid, volname:voldesc, type:'namechange' },
         success:function(response){
           jQuery.growl.notice( {
            title: '',
            message: langVar.volDescChangeSuccess,
          });
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
        $.ajax({
         url: window.location.href,
         type: 'post',
         data: { subaction:'CreateVolume', volsize:volsize, format:volformat },
         success:function(response){
           jQuery.growl.notice( {
            title: '',
            message: langVar.volCreateSuccess,
          });
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

//Iso Image Management
function generalISODetach() {
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
         url: window.location.href,
         type: 'post',
         data: { subaction:'ISOAttachDetach', ActType:'detach_iso' },
         success:function(response){
           jQuery.growl.notice( {
            title: '',
            message: langVar.istmgmt.dsuccess,
          });
           $("#custom-loader").hide();
           $("#isoidshow").hide();
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
  function isoattach(isoimg) {
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
          $.post( window.location.href,
            { subaction:"ISOAttachDetach", ActType:"attach_iso",  IsoName:isoimg })
          .done(function( data ) {
            jQuery.growl.notice( {
           title: '',
           message: langVar.istmgmt.asuccess,
         });
            $("#isoidshow").show();
            $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
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
    function isodetach() {
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
            $.post( window.location.href,
              { subaction:"ISOAttachDetach", ActType:"detach_iso" })
            .done(function( data ) {
            $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
              $("#isoidshow").hide();
              jQuery.growl.notice( {
           title: '',
           message: langVar.istmgmt.dsuccess,
         });
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

//Backup Management
function DisableBackup() {
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
         url: window.location.href,
         type: 'post',
         data: { subaction:'DisableBackups' },
         success:function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.BackDisSuccess,
          });
           $("#custom-loader").hide();
           $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
           $("#BackupStatusEnable").show();
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

function EnableBackup() {
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
          url: window.location.href,
         type: 'post',
         data: { subaction:'EnableBackups' },
         success:function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.BackEnbSuccess,
          });
           $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
           $("#custom-loader").hide();
           $("#BackupStatusEnable").hide();
           $("#BackupStatusDisable").show();
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

function BackupRestore(backupid) {
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
         url: window.location.href,
         type: 'post',
         data: { subaction:'RestoreBackup', BackupResID:backupid },
         success:function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.BackupRestoredSuccess,
          });
           $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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

function BackupRemove(backupid) {
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
         url: window.location.href,
         type: 'post',
         data: { subaction:'DeleteBackup', BackupID:backupid },
         success:function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.BackupRemoveSuccess,
          });
           $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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

function CreateBackup() {
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
         url: window.location.href,
         type: 'post',
         data: { subaction:'CreateBackup' },
         success:function(response){
           var parsed = JSON.parse(response);
           if( parsed.image.id ){
          jQuery.growl.notice( {
            title: '',
            message: langVar.BackCreateSuccess,
         });
          $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
          $("#BackupStatusDisable").hide();
           } else {
           jQuery.growl.warning( {
             title: '',
             message: langVar.BackCreateError,
          });
           $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
           $("#BackupStatusDisable").show();
           }
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
//Floating IP Address
function vmFlIPPTRChange(flip, flid) {
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
                    "url": window.location.href,
                    type: 'post',
                    data: { subaction:'AjaxFloatingIP', floatipid:flid, type:'rdns', ip:flip, floatiprdns:flrdns },
                    success:function(response){
                      jQuery.growl.notice( {
                        title: '',
                        message: langVar.FloatRDNSChange,
                     });
                      $("#floatip").DataTable().ajax.reload().columns.adjust();
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

function vmFlIPDescChange(flid) {
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
          "url": window.location.href,
          type: 'post',
          data: { subaction:'AjaxFloatingIP', type:'des', floatipid:flid, floatipdes:flname },
          success:function(response){
            jQuery.growl.notice( {
              title: '',
              message: langVar.FloatDescChangeSuccess,
           });
            $("#floatip").DataTable().ajax.reload().columns.adjust();
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

function ResetIpFlDNS(ipid, ips, rdnsvalue) {
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
       "url": window.location.href,
       type: 'post',
       data: { subaction:'AjaxFloatingIP', floatipid:ipid, type:'rdns',  ip:ip, floatiprdns:value },
       success:function(response){
        jQuery.growl.notice( {
          title: '',
          message: langVar.FloatingRDNSSuccess,
       });
         $("#floatip").DataTable().ajax.reload().columns.adjust();
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

function enableprofloIp(ipid) {
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
         "url": window.location.href,
         type: 'post',
         data: { subaction:'AjaxFloatingIP', floatipid:ipid, type:'enable'},
         success:function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.FlIPSuccess,
          });
           $("#floatip").DataTable().ajax.reload().columns.adjust();
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

function disableprofloIp(ipid) {
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
         "url": window.location.href,
         type: 'post',
         data: { subaction:'AjaxFloatingIP', floatipid:ipid, type:'disable'},
         success:function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.FlIPDisSuccess,
          });
           $("#floatip").DataTable().ajax.reload().columns.adjust();
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

function AddFloatIP() {
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
                     "url": window.location.href,
                     type: 'post',
                     data: { subaction:'AjaxAddFloatIP', IPtype:iptype },
                   }).done(function(response){
                     var parsed = JSON.parse(response);
                     if(parsed.result == 'complete'){
                     jQuery.growl.notice( {
                       title: '',
                       message: langVar.FIPAdded,
                    });
                     $("#floatip").DataTable().ajax.reload().columns.adjust();
                     } else {
                     jQuery.growl.warning( {
                       title: '',
                       message: langVar.FIPAError,
                    });
                     $("#floatip").DataTable().ajax.reload().columns.adjust();
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
//Primary IPs and IPv6
function PrimaryIPv4PTR(ipv4) {
             $.confirm({
               type: "blue",
               columnClass: "col-md-6 col-md-offset-3",
               title: langVar.PrimaryIPrDesc,
               content: ""+
               "<form action=\'\' class=\'formName\'>" +
               "<div class=\'form-group\'>" +
             "<label>"+langVar.Reverse_DNS_Value+": "+ipv4+"</label>" +
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
                    url: window.location.href,
                      type: 'post',
                      data: { subaction:'AjaxReverseDNS', ip:ipv4, rdns:iprdns },
                      success:function(response){
                        jQuery.growl.notice( {
                          title: '',
                          message: langVar.PrimaryRDNSChange,
                       });
                        $("#viewip").DataTable().ajax.reload().columns.adjust();
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

function rdnsresetipv4(ipv4, rdnsvalue) {
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
                    $.ajax({
                     url: window.location.href,
                     type: 'post',
                     data: { subaction:'AjaxReverseDNS', ip:ip, rdns:value },
                     success:function(response){
                       jQuery.growl.notice( {
                         title: '',
                         message: langVar.PrimeIPv4Reset,
                      });
                       $("#viewip").DataTable().ajax.reload().columns.adjust();
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

function Globev6Submit(ipv6) {
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
                                 url: window.location.href,
                                 type: 'post',
                                 data: { subaction:'AjaxReverseDNS', ip:ip, rdns:reverse },
                                 success:function(response){
                                   jQuery.growl.notice( {
                                     title: '',
                                     message: langVar.ipv6reversedone,
                                  });
                                   $("#viewip").DataTable().ajax.reload().columns.adjust();
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

function SingleIPv6PTR(ipv6) {
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
                                url: window.location.href,
                                type: 'post',
                                data: { subaction:'AjaxReverseDNS', ip:ipv6, rdns:iprdns },
                                success:function(response){
                                  jQuery.growl.notice( {
                                    title: '',
                                    message: langVar.Primaryv6RDNSChange,
                                 });
                                  $("#viewip").DataTable().ajax.reload().columns.adjust();
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


//Server Actions - 2020.7
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
          $.ajax({
          url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxProtection', type:'disable' },
         }).done(function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.vmProDisable,
          });
           $("#custom-loader").hide();
           $(window).scrollTop(0);
           $('#endisplay').show();
           $('#dpdisplay').hide();
           $('#oslininstall').show();
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
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'AjaxProtection', type:'enable' },
         }).done(function(response){
           jQuery.growl.notice( {
             title: '',
             message: langVar.vmProEnable,
          });
           $("#custom-loader").hide();
           $(window).scrollTop(0);
           $('#endisplay').hide();
           $('#dpdisplay').show();
           $('#oslininstall').hide();
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

  function vmReboot() {
  $.confirm({
    type: "blue",
    columnClass: 'small',
    columnClass: "col-md-6 col-md-offset-2",
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
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:reboots },
          }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.action.error === null){
             if(reboots == 'AjaxReboot'){
               var successMsg = langVar.vmRebootSuccess;
               var successError = langVar.vmRebootError;
             } else {
               var successMsg = langVar.vmResetSuccess;
               var successError = langVar.vmResetError;
             }
           jQuery.growl.notice( {
             title: '',
             message: successMsg,
          });
           } else {
             jQuery.growl.warning( {
               title: '',
               message: successError,
            });
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

  function vmOpenConsole() {
  $.confirm({
    type: "blue",
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
          $.ajax({
           url: window.location.href,
           type: 'post',
           data: { subaction:'PasswordReset' },
         }).done(function(response){
           var parsed = JSON.parse(response);
           if(parsed.result == 'complete'){
           $('#inputPassword').val(parsed.message).show();
           jQuery.growl.notice( {
             title: '',
             message: langVar.vmPassResetSucess,
          });
           } else {
           jQuery.growl.warning( {
             title: '',
             message: parsed.message,
          });
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
