
$(document).ready(function(){
  firewallStatus();
  //Add Above
  });

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
          language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
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
    vNotify.success({
    text:langVar.actionSuccess,
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
                vNotify.success({
                text:langVar.actionSuccess,
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
