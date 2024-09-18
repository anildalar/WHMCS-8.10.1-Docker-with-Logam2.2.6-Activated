
$(document).ready(function(){
primaryIps();
floatingIps();
  });

  function primaryIps(){
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
              "bLengthChange":false,
              scrollX: false,
              language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
              processing: true,
              searching: true,
              autoWidth: false,
              "order": [],
            });
  }

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
              language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
              processing: true,
              searching: true,
              autoWidth: false
            });
  }

//Floating IP Actions:
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
                   WHMCS.http.jqClient.jsonPost({
                     url: window.location.href,
                     data: { subaction:'AjaxFloatingIP', floatipid:flid, type:'rdns',  ip:flip, floatiprdns:flrdns },
                     success: function(serveraction){
                       $("#floatip").DataTable().ajax.reload().columns.adjust();
                         vNotify.success({
                         text:langVar.FloatRDNSChange,
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
         WHMCS.http.jqClient.jsonPost({
           url: window.location.href,
           data: { subaction:'AjaxFloatingIP', type:'des', floatipid:flid, floatipdes:flname },
           success: function(serveraction){
             $("#floatip").DataTable().ajax.reload().columns.adjust();
               vNotify.success({
               text:langVar.FloatDescChangeSuccess,
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
      WHMCS.http.jqClient.jsonPost({
        url: window.location.href,
        data: { subaction:'AjaxFloatingIP', floatipid:ipid, type:'rdns',  ip:ip, floatiprdns:value },
        success: function(serveraction){
          $("#floatip").DataTable().ajax.reload().columns.adjust();
            vNotify.success({
            text:langVar.FloatingRDNSSuccess,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:'AjaxFloatingIP', floatipid:ipid, type:'enable'},
          success: function(serveraction){
            $("#floatip").DataTable().ajax.reload().columns.adjust();
              vNotify.success({
              text:langVar.FlIPSuccess,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:'AjaxFloatingIP', floatipid:ipid, type:'disable'},
          success: function(serveraction){
            $("#floatip").DataTable().ajax.reload().columns.adjust();
              vNotify.success({
              text:langVar.FlIPDisSuccess,
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
                    WHMCS.http.jqClient.jsonPost({
                      url: window.location.href,
                      data: { subaction:'AjaxAddFloatIP', IPtype:iptype },
                      success: function(serveraction){
                        $("#floatip").DataTable().ajax.reload().columns.adjust();
                        if(serveraction.result == 'complete'){
                          vNotify.success({
                          text:langVar.FIPAdded,
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
                          text:langVar.FIPAError,
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
        },
    });
};


//Primary IP Actions
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
                     WHMCS.http.jqClient.jsonPost({
                       url: window.location.href,
                       data: { subaction:'AjaxReverseDNS', ip:ipv4, rdns:iprdns },
                       success: function(serveraction){
                         $("#viewip").DataTable().ajax.reload().columns.adjust();
                           vNotify.success({
                           text:langVar.PrimaryRDNSChange,
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

                    WHMCS.http.jqClient.jsonPost({
                      url: window.location.href,
                      data: { subaction:'AjaxReverseDNS', ip:ip, rdns:value },
                      success: function(serveraction){
                        $("#viewip").DataTable().ajax.reload().columns.adjust();
                          vNotify.success({
                          text:langVar.PrimeIPv4Reset,
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

function Globev6Submit(ipv6) {
              $.confirm({
                  type: "blue",
                  columnClass: "col-md-6 col-md-offset-2",
                    title: langVar.IP_Title,
                    icon: "fas fa-chart-network",
                    content: ""+
                    "<label>"+langVar.IPv6Globe_Message+"</label>" +
                    "<form action=\'\' class=\'formName\'>" +
                    "<div class=\'input-group\'>" +
                    "<div class=\'input-group-append\'>" +
                    "<span class=\'input-group-text\'>"+ipv6+"</span>"+
                    "</div>" +
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
                                WHMCS.http.jqClient.jsonPost({
                                  url: window.location.href,
                                   data: { subaction:'AjaxReverseDNS', ip:ip, rdns:reverse },
                                  success: function(serveraction){
                                    $("#viewip").DataTable().ajax.reload().columns.adjust();
                                      vNotify.success({
                                      text:langVar.ipv6reversedone,
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
                               WHMCS.http.jqClient.jsonPost({
                                 url: window.location.href,
                                data: { subaction:'AjaxReverseDNS', ip:ipv6, rdns:iprdns },
                                 success: function(serveraction){
                                   $("#viewip").DataTable().ajax.reload().columns.adjust();
                                     vNotify.success({
                                     text:langVar.Primaryv6RDNSChange,
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
