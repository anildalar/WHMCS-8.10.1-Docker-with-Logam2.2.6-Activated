
$(document).ready(function(){
  var url_string = window.location.href;
    var urls = new URL(url_string);
    var serviceid = urls.searchParams.get("id");
  var SnapTable = $("#SnapTable").DataTable({
    destroy: true,
    "ordering": false,
    "bLengthChange": false,
     "bPaginate": false,
          "ajax": {
              "url": hcloudaddonmoduleURL,
              "type": "POST",
              data: { serviceaction:"getSnapshots", projectid:serviceid },
          },
          "info": false,
          "columnDefs": [{ "orderable": false, "targets": 4 }],
          "length": false,
          scrollX: true,
                  processing: true,
                  searching: true,
                  autoWidth: false
              });
  //Add Above
  });

function createSnapShots(serviceid) {
  var serviceid = serviceid;
  $.ajax({
       url: hcloudaddonmoduleURL,
       type: "post",
       data: { serviceaction:"SnapGetVMs", projectid:serviceid },
       success:function(response){
         var parsed = JSON.parse(response);
            jQuery("#VMImageID").append($("<option>", {
                value: "",
                text: parsed.SelectVM
            }));
            jQuery.each(parsed.VMs, function(index1, value1) {
              if(value1.status == "off"){
                jQuery("#VMImageID").append($("<option>", {
                    value: value1.id,
                    text: value1.name
                }));
              }
                });
       }
      });
          $.confirm({
            type: 'red',
            columnClass: "col-md-8 col-md-offset-2",
              title: langVar.snap.title,
              icon: "fa fa-server",
              content: ' '+
              langVar.snap.takedesc+"<br />" +
              '<form action="" class="formName">' +
              '<div class="form-group">' +
              "<label>"+langVar.server_name+"</label>" +
              '<select id="VMImageID" class="vmimage form-control">' +
              '</select>' +
              '</div>' +
              "<div class=\'form-group\'>" +
              "<label>"+langVar.snap.Desc+"</label>" +
              "<input type=\'text\' placeholder=\'"+langVar.snap.Desc+"\' class=\'form-control\' id=\'SnapDecName\' required />" +
              "</div>" +
              '</form>',
              buttons: {
                  formSubmit: {
                      text: "<i class='fa fa-check-circle'></i> "+ langVar.Confirm,
                      btnClass: 'btn-danger',
                      action: function () {
                          var vmid = this.$content.find('.vmimage').val();
                          if(!vmid){
                              $.alert(langVar.snapselectvm);
                              return false;
                          }
                          var snapname = this.$content.find("#SnapDecName").val();
                          if(!snapname){
                              $.alert(langVar.snapnamerequired);
                              return false;
                          }
                            $("#custom-loader").show();
                          $.post( hcloudaddonmoduleURL, { serviceaction:"SnapCreate", vmid:vmid, snapname:snapname, projectid:serviceid})
                                      .done(function( data ) {
                                          var parsed = JSON.parse(data);
                                          if(parsed.status == "success"){
                                            $("#SnapTable").DataTable().ajax.reload().columns.adjust();
                                            $("#custom-alert-message").html(parsed.message);
                                            $("#AdminMsg").removeClass().addClass("successbox").show();
                                          } else {
                                            $("#SnapTable").DataTable().ajax.reload().columns.adjust();
                                            $("#custom-alert-message").html(parsed.message);
                                            $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
                                          }
                                          $("#custom-loader").hide();
                                      });
                      }
                  },
                  cancelAction: {
                    btnClass: "btn-warning",
                    text: "<i class='fa fa-times-circle'></i> "+langVar.Cancel,
                    action: function(){

                    }
                  }
              },
          });
        }

//Edit Snapshot Description
function editProtection(snapId, serviceid) {
  $.confirm({
      type: "blue",
        title: langVar.snap.title,
        icon: "fa fa-code",
        content: ""+
        "<form action=\'\' class=\'formName\'>" +
        "<div class=\'form-group\'>" +
        "<label>"+langVar.snap.Desc+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.snap.Desc+"\' class=\'form-control\' id=\'snapIDdesc\' required />" +
        "</div>" +
        "</form>",
        buttons: {
            formSubmit: {
                text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
                btnClass: "btn-primary",
                action: function () {
                    var snapdesc = this.$content.find("#snapIDdesc").val();
                    if(!snapdesc){
                        $.alert(langVar.snapdescrequired);
                        return false;
                    }
  // Success Action
  $("#custom-loader").show();
  $.post( hcloudaddonmoduleURL, { serviceaction:"SnapDescEdit", snapdesc:snapdesc, snapID:snapId, projectid:serviceid})
  .done(function( data ) {
    var parsed = JSON.parse(data);
    if(parsed.status == "success"){
      $("#SnapTable").DataTable().ajax.reload().columns.adjust();
      $("#custom-alert-message").html(parsed.message);
      $("#AdminMsg").removeClass().addClass("successbox").show();
    } else {
      $("#SnapTable").DataTable().ajax.reload().columns.adjust();
      $("#custom-alert-message").html(parsed.message);
      $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
    }
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
        },
    });
}

//Snap Protection Add - working
function addProtection(snapId, serviceid) {
$.confirm({
  type: "blue",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.snap.title,
  content: langVar.snapenableprtn.proceedMessage+" ?",
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
        $.post( hcloudaddonmoduleURL, { serviceaction:"SnapProtection", acttype:"Enable", snapID:snapId, projectid:serviceid})
        .done(function( data ) {
            var parsed = JSON.parse(data);
            if(parsed.status == "success"){
              $("#SnapTable").DataTable().ajax.reload().columns.adjust();
              $("#custom-alert-message").html(parsed.message);
              $("#AdminMsg").removeClass().addClass("successbox").show();
            } else {
              $("#SnapTable").DataTable().ajax.reload().columns.adjust();
              $("#custom-alert-message").html(parsed.message);
              $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
            }
            $("#custom-loader").hide();
        });
}
},
cancelAction: {
  btnClass: "btn-danger",
  text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
  action: function(){}
}
}
});
}

//Remove Protection of Snap
function removeProtection(snapId, serviceid) {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.snap.title,
  content: langVar.snapdisprtn.proceedMessage+" ?",
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
        $.post( hcloudaddonmoduleURL, { serviceaction:"SnapProtection", acttype:"Disable", snapID:snapId, projectid:serviceid})
        .done(function( data ) {
          var parsed = JSON.parse(data);
          if(parsed.status == "success"){
            $("#SnapTable").DataTable().ajax.reload().columns.adjust();
            $("#custom-alert-message").html(parsed.message);
            $("#AdminMsg").removeClass().addClass("successbox").show();
          } else {
            $("#SnapTable").DataTable().ajax.reload().columns.adjust();
            $("#custom-alert-message").html(parsed.message);
            $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
          }
          $("#custom-loader").hide();
        });
}
},
cancelAction: {
  btnClass: "btn-danger",
  text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
  action: function(){}
}
}
});
}

//Remove Snapshot
function deleteSnap(snapId, serviceid) {
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.snap.title,
  content: langVar.snapDel.proceedMessage+" ?",
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
        $.post( hcloudaddonmoduleURL, { serviceaction:"SnapDelete", snapID:snapId, projectid:serviceid})
        .done(function( data ) {
          var parsed = JSON.parse(data);
            $("#SnapTable").DataTable().ajax.reload().columns.adjust();
            $("#custom-alert-message").html(parsed.message);
            $("#AdminMsg").removeClass().addClass("successbox").show();
          $("#custom-loader").hide();
        });
}
},
cancelAction: {
  btnClass: "btn-danger",
  text: "<i class=\'fa fa-times-circle\'></i> "+langVar.Cancel,
  action: function(){}
}
}
});
}
