
$(document).ready(function(){
loadServerOS();
loadRescueOS();
  });
function loadServerOS() {
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
                      "aLengthMenu": [[10, 25, -1], [10, 25, "All"]],
                    "iDisplayLength": 10,
                    "bLengthChange":false,
                      scrollX: false,
                      language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                              processing: true,
                              searching: true,
                              autoWidth: false,
                              "order": [],
   });
}

function loadRescueOS() {
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
                      "bLengthChange":false,
                      scrollX: false,
                      language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                              processing: true,
                              searching: true,
                              autoWidth: false,
                              "order": [],
   });
}

function vmRescueModeReboot() {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.rescue.title,
  content: langVar.rescue.rebootsure+" ?",
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
          data: { subaction:'AjaxReboot' },
          success: function(serveraction){
            $("#RescueImageTable").DataTable().ajax.reload().columns.adjust();
            if(serveraction.action.error === null){
              $("#resdis").hide();
              vNotify.success({
              text:langVar.rescuerebootsuccess,
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
              text:serveraction.action.error.message,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:'DisableRescue' },
          success: function(serveraction){
            $("#RescueImageTable").DataTable().ajax.reload().columns.adjust();
            if(serveraction.action.error === null){
              vNotify.success({
              text:langVar.rescuedissuccess,
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
              text:langVar.rescuederror,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:"EnableRescue", RescueOS:rescueID },
          success: function(serveraction){
            $("#RescueImageTable").DataTable().ajax.reload().columns.adjust();
            if(serveraction.action.error === null){
              $("#resdis").show();
              vNotify.success({
              text:langVar.rescuepasssuccess + " : " + serveraction.root_password,
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
              text:langVar.rescueperror,
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
        WHMCS.http.jqClient.jsonPost({
          url: window.location.href,
          data: { subaction:"Rebuild", LinuxOS:osID },
          success: function(serveraction){
            if(serveraction.action.error === null){
              $("#resdis").show();
              vNotify.success({
              text:langVar.osinstallsuccess +" : "+ serveraction.root_password,
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
              text:langVar.osinstallerror,
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
