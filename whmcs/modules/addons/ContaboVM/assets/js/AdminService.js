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

  var url_string = window.location.href;
    var urls = new URL(url_string);
    var serviceid = urls.searchParams.get("id");
    getProjects();
  //Add Above
  });

  //API Add

function importServer(projectId, serverid, name) {
  var serverid = serverid;
$.confirm({
  type: "blue",
  title: langVar.Confirmation,
  columnClass: "col-md-6 col-md-offset-3",
  content: langVar.importServerConfirm+" "+name+" ?",
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
        $.post(contaboaddonmoduleURL, { subaction:'ImportCloud', serverid:serverid, projectId:projectId },
        function (response) {
          var parsed = JSON.parse(response);
          if(parsed.status == 'completed'){
            $("#custom-alert-message").html(langVar.ServerimportSuccess);
            $("#AdminMsg").removeClass().addClass('successbox').show();
            $("#custom-loader").hide();
            $("#inst"+serverid).hide();
          } else if(parsed.status == 'exist'){
            $("#custom-alert-message").html(langVar.ServerimportExist);
            $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
            $("#custom-loader").hide();
          } else {
            $("#custom-alert-message").html(langVar.ServerimportError);
            $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
            $("#custom-loader").hide();
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
}

function removeSecret(projectId, secretId, name) {
  var secretId = secretId;
  var name = name;
$.confirm({
  type: "blue",
  title: langVar.Confirmation,
  columnClass: "col-md-6 col-md-offset-3",
  content: langVar.secretSure+" "+name+" ?",
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
        $.post(contaboaddonmoduleURL, { subaction:'RemoveSecretId', secretId:secretId, projectId:projectId },
        function (response) {
          var parsed = JSON.parse(response);
          if(parsed.status == 'completed'){
            $("#custom-alert-message").html(langVar.actionSuccess);
            $("#AdminMsg").removeClass().addClass('successbox').show();
            $("#custom-loader").hide();
            $("#tbl"+secretId).hide();
          } else {
            $("#custom-alert-message").html(langVar.actionError);
            $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
            $("#custom-loader").hide();
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
}

function editSecret(projectId, secretId, sname) {
  var secretId = secretId;
  var sname = sname;
$.confirm({
  type: "blue",
  title: langVar.Confirmation,
  columnClass: "col-md-6 col-md-offset-3",
  content: ""+
  '<table class="table table-bordered table-hover">'+
  '<tr>'+
  '<td>'+langVar.Server_Name+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.Server_Name+'" id="sname" value="'+sname+'">'+
  '</td>'+
  '</tr>'+
  '<tr>'+
  '<td>'+langVar.Password+':</td>'+
  '<td>'+
  '<input type="text" class="form-control" placeholder="'+langVar.Password+'" id="spass">'+
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
        var sname = this.$content.find('#sname').val();
                          if(!sname){
                              $.alert(langVar.namequired);
                              return false;
                          }
                          var spass = this.$content.find('#spass').val();
                                            if(!spass){
                                                $.alert(langVar.secretrequired);
                                                return false;
                                            }
        $("#custom-loader").show();
        $.post(contaboaddonmoduleURL, { subaction:'EditSecretId', secretId:secretId, name:sname, value:spass, projectId:projectId },
        function (response) {
          var parsed = JSON.parse(response);
          if(parsed.status == 'completed'){
            $("#custom-alert-message").html(langVar.actionSuccess);
            $("#AdminMsg").removeClass().addClass('successbox').show();
            $("#custom-loader").hide();
            $("#pass"+secretId).html(spass).show();
            $("#name"+secretId).html(sname).show();
          } else {
            $("#custom-alert-message").html(parsed.message);
            $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
            $("#custom-loader").hide();
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
}


//2024.2

  //API Add

  function ProjectAPIAdd() {
    $.confirm({
        type: "blue",
        columnClass: "col-md-8 col-md-offset-2",
          title: langVar.Add_Project_Title,
          icon: "fa fa-code",
          content: ""+
          langVar.Add_Project_Message +
          "<form action=\'\' class=\'formName\'>" +
          "<div class=\'form-group\'>" +
          "<label>"+langVar.Project_Name+"</label>" +
          "<input type=\'text\' placeholder=\'"+langVar.Project_Name+"\' class=\'form-control\' id=\'Project_Name\' required />" +
          "</div>" +
          "<div class=\'form-group\'>" +
          "<label>"+langVar.ClientID+"</label>" +
          "<input type=\'text\' placeholder=\'"+langVar.ClientID+"\' class=\'form-control\' id=\'ClientID\' required />" +
          "</div>"+
          "<div class=\'form-group\'>" +
          "<label>"+langVar.ClientSecret+"</label>" +
          "<input type=\'text\' placeholder=\'"+langVar.ClientSecret+"\' class=\'form-control\' id=\'ClientSecret\' required />" +
          "</div>"+
          "<div class=\'form-group\'>" +
          "<label>"+langVar.APIUser+"</label>" +
          "<input type=\'text\' placeholder=\'"+langVar.APIUser+"\' class=\'form-control\' id=\'APIUser\' required />" +
          "</div>"+
          "<div class=\'form-group\'>" +
          "<label>"+langVar.APIPass+"</label>" +
          "<input type=\'text\' placeholder=\'"+langVar.APIPass+"\' class=\'form-control\' id=\'APIPass\' required />" +
          "</div>"+
          "</form>",
          buttons: {
              formSubmit: {
                  text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
                  btnClass: "btn-primary",
                  action: function () {
                      var name = this.$content.find("#Project_Name").val();
                      var cid = this.$content.find("#ClientID").val();
                      var secret = this.$content.find("#ClientSecret").val();
                      var apiuser = this.$content.find("#APIUser").val();
                      var apipass = this.$content.find("#APIPass").val();

                      const fieldsToValidate = ["#Project_Name", "#ClientID", "#ClientSecret", "#APIUser", "#APIPass"];

                    for (const fieldId of fieldsToValidate) {
                        const value = this.$content.find(fieldId).val();
                        if (!value) {
                            $.alert(langVar.allreq);
                            return false;
                        }
                      }

                      const passregex = /[@#]/;
                      if (!passregex.test(apipass)) {
                          $.alert(langVar.passeror);
                          return false;
                      }

                      const emailregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                      if (!emailregex.test(apiuser)) {
                          $.alert(langVar.maileror);
                          return false;
                      }
    // Success Action
    $("#custom-loader").show();
    $.post({
     url: contaboaddonmoduleURL,
     data: { subaction:'ApiProjectAddEdit', name:name, cid:cid, secret:secret, apiuser:apiuser, apipass:apipass },
     success:function(response){
       var parsed = JSON.parse(response);
       if(parsed.message == 'completed'){
         $("#custom-alert-message").html(langVar.APIAdded);
         $("#AdminMsg").removeClass().addClass('successbox').show();
         $("#custom-loader").hide();
       } else {
         $("#custom-alert-message").html(langVar.APIAddError);
         $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
         $("#custom-loader").hide();
       }
       getProjects();
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
  }


//Del API
//Delete API
function deleteAPI(accountId) {
  var id = accountId;
$.confirm({
  type: "red",
  columnClass: "col-md-6 col-md-offset-3",
  title: langVar.Confirmation,
  content: langVar.ProjectDel+" ?",
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
$.post(contaboaddonmoduleURL, { subaction:'ApiProjectDelete', apiid:id },
function (response) {
  var parsed = JSON.parse(response);
  if(parsed.status == 'completed'){
    $("#custom-alert-message").html(langVar.APIDeleteSuccess);
    $("#AdminMsg").show();
    $("#custom-loader").hide();
    $("."+id+"_project").hide();
  } else {
    $("#custom-alert-message").html(langVar.APIDeleteError);
    $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
    $("#custom-loader").hide();
  }
  getProjects();
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


function ProjectAPIEdit(id, projectName, clientId, secret, user, pass ) {
  $.confirm({
      type: "blue",
      columnClass: "col-md-8 col-md-offset-2",
        title: langVar.Add_Project_Title,
        icon: "fa fa-code",
        content: ""+
        langVar.Add_Project_Message +
        "<form action=\'\' class=\'formName\'>" +
        "<div class=\'form-group\'>" +
        "<label>"+langVar.Project_Name+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.Project_Name+"\' class=\'form-control\' id=\'Project_Name\' required value=\'"+projectName+"\' />" +
        "</div>" +
        "<div class=\'form-group\'>" +
        "<label>"+langVar.ClientID+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.ClientID+"\' class=\'form-control\' id=\'ClientID\' required value=\'"+clientId+"\' />" +
        "</div>"+
        "<div class=\'form-group\'>" +
        "<label>"+langVar.ClientSecret+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.ClientSecret+"\' class=\'form-control\' id=\'ClientSecret\' required value=\'"+secret+"\' />" +
        "</div>"+
        "<div class=\'form-group\'>" +
        "<label>"+langVar.APIUser+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.APIUser+"\' class=\'form-control\' id=\'APIUser\' required value=\'"+user+"\' />" +
        "</div>"+
        "<div class=\'form-group\'>" +
        "<label>"+langVar.APIPass+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.APIPass+"\' class=\'form-control\' id=\'APIPass\' required value=\'"+pass+"\' />" +
        "</div>"+
        "</form>",
        buttons: {
            formSubmit: {
                text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
                btnClass: "btn-primary",
                action: function () {
                    var name = this.$content.find("#Project_Name").val();
                    var cid = this.$content.find("#ClientID").val();
                    var secret = this.$content.find("#ClientSecret").val();
                    var apiuser = this.$content.find("#APIUser").val();
                    var apipass = this.$content.find("#APIPass").val();

                    const fieldsToValidate = ["#Project_Name", "#ClientID", "#ClientSecret", "#APIUser", "#APIPass"];

                  for (const fieldId of fieldsToValidate) {
                      const value = this.$content.find(fieldId).val();
                      if (!value) {
                          $.alert(langVar.allreq);
                          return false;
                      }
                    }

                    const passregex = /[@#]/;
                    if (!passregex.test(apipass)) {
                        $.alert(langVar.passeror);
                        return false;
                    }
  // Success Action
  $("#custom-loader").show();
  $.post({
   url: contaboaddonmoduleURL,
   data: { subaction:'ApiProjectAddEdit', name:name, cid:cid, secret:secret, apiuser:apiuser, apipass:apipass, id:id },
   success:function(response){
     var parsed = JSON.parse(response);
     if(parsed.message == 'completed'){
       $("#custom-alert-message").html(langVar.APIAdded);
       $("#AdminMsg").removeClass().addClass('successbox').show();
       $("#custom-loader").hide();
     } else {
       $("#custom-alert-message").html(langVar.APIAddError);
       $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
       $("#custom-loader").hide();
     }
     getProjects();
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
}

function getProjects(){
  $("#HomeTable").DataTable({
destroy: true,
"ajax": {
          "url": contaboaddonmoduleURL,
          "type": "POST",
          data: { subaction:"getProjects" },
      },
"info": false,
"columnDefs": [{ "orderable": false, "targets": 5 }],
"length": false,
processing: true,
searching: true,
scrollX: false,
autoWidth: false
});
}

//Addon Page based all servers View
function viewServers(id) {
$.confirm({
type: "blue",
title: langVar.Confirmation,
columnClass: "col-md-6 col-md-offset-3",
content: langVar.ProjectViewServerConfirm+" ?",
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
      window.location=contaboaddonmoduleURL+"&views=vps&id="+id;
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

function viewSecrets(id) {
$.confirm({
type: "blue",
title: langVar.Confirmation,
columnClass: "col-md-6 col-md-offset-3",
content: langVar.secretConfirm+" ?",
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
      window.location=contaboaddonmoduleURL+"&secrets=secrets&id="+id;
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
