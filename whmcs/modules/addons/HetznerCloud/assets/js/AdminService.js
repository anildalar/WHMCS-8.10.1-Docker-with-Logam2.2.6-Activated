
$(document).ready(function(){

  var url_string = window.location.href;
    var urls = new URL(url_string);
    var serviceid = urls.searchParams.get("id");

  $('.apikeyedit').click(function(){
   $('.apikeytxtedit').hide();
   $(this).next('.apikeytxtedit').show().focus();
   $(this).hide();
  });

  $('.apiprojectedit').click(function(){
   $('.apiprojecttxtedit').hide();
   $(this).next('.apiprojecttxtedit').show().focus();
   $(this).hide();
  });

  $(".apikeytxtedit").focusout(function(){
   $(this).hide();
   $(this).prev('.apikeyedit').show();
   var value = $(this).val();
   $(this).prev('.apikeyedit').text(value);
   $("#custom-loader").show();
   $.post({
    url: hcloudaddonmoduleURL,
    data: { subaction:'ApiKeyUpdate', apiid:this.id, apikey:value },
    success:function(response){
      var parsed = JSON.parse(response);
      if(parsed.status == 'completed'){
        $("#custom-alert-message").html(langVar.APIUpdated);
        $("#AdminMsg").removeClass().addClass('successbox').show();
        $("#custom-loader").hide();
      } else {
        $("#custom-alert-message").html(langVar.APIUpdateError);
        $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
        $("#custom-loader").hide();
      }
    }
   });
  });

  $(".apiprojecttxtedit").focusout(function(){
   $(this).hide();
   $(this).prev('.apiprojectedit').show();
   var value = $(this).val();
   $(this).prev('.apiprojectedit').text(value);
   $("#custom-loader").show();
   $.post({
    url: hcloudaddonmoduleURL,
    data: { subaction:'ApiKeyNameUpdate', apiid:this.id, apiname:value },
    success:function(response){
      var parsed = JSON.parse(response);
      if(parsed.status == 'completed'){
        $("#custom-alert-message").html(langVar.ProjectUpdated);
        $("#AdminMsg").removeClass().addClass('successbox').show();
        $("#custom-loader").hide();
      } else {
        $("#custom-alert-message").html(langVar.ProjectUpdatedError);
        $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
        $("#custom-loader").hide();
      }
    }
   });
  });
  //Add Above
  });

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
        "<label>"+langVar.API_Key+"</label>" +
        "<input type=\'text\' placeholder=\'"+langVar.API_Key+"\' class=\'form-control\' id=\'Account_API\' required />" +
          "</div>"+
          "</form>",
          buttons: {
              formSubmit: {
                  text: "<i class=\'fa fa-check-circle\'></i> " +langVar.Confirm,
                  btnClass: "btn-primary",
                  action: function () {
                      var name = this.$content.find("#Project_Name").val();
                      if(!name){
                          $.alert(langVar.Project_Name_Add);
                          return false;
                      }
                      var apikey = this.$content.find("#Account_API").val();
                      if(!apikey){
                          $.alert(langVar.Provide_API_Add);
                          return false;
                      }
    // Success Action
    $("#custom-loader").show();
    $.post({
     url: hcloudaddonmoduleURL,
     data: { subaction:'ApiProjectAdd', projectname:name, apikey:apikey },
     success:function(response){
       var parsed = JSON.parse(response);
       if(parsed.message == 'completed'){
         $("#custom-alert-message").html(langVar.APIAdded);
         $("#AdminMsg").removeClass().addClass('successbox').show();
         $("#custom-loader").hide();
       } else if(parsed.message == 'amptyapikey'){
         $("#custom-alert-message").html(langVar.APIEmpty);
         $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
         $("#custom-loader").hide();
       } else if(parsed.message == 'projectnameempty'){
         $("#custom-alert-message").html(langVar.EmpProject);
         $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
         $("#custom-loader").hide();
       } else if(parsed.message == 'projectexist'){
         $("#custom-alert-message").html(langVar.ProjectPresent);
         $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
         $("#custom-loader").hide();
       } else {
         $("#custom-alert-message").html(langVar.APIAddError);
         $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
         $("#custom-loader").hide();
       }
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
        window.location=hcloudaddonmoduleURL+"&views=servers&id="+id;
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

function viewSnapShots(id) {
$.confirm({
  type: "orange",
  title: langVar.Confirmation,
  columnClass: "col-md-6 col-md-offset-3",
  content: langVar.SnapConfirm+" ?",
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
        window.location=hcloudaddonmoduleURL+"&snaps=snapshot&id="+id;
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
$.post(hcloudaddonmoduleURL, { subaction:'ApiProjectDelete', apiid:id },
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

function ManageServer(serverid, accid) {
  var serverid = serverid;
  var accountId = accid;
$.confirm({
  type: "blue",
  title: langVar.Confirmation,
  columnClass: "col-md-6 col-md-offset-3",
  content: langVar.ViewServerConfirm+" ?",
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
        window.location=hcloudaddonmoduleURL+"&servermgm=Manage&serverid="+serverid+"&id="+accountId;
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

function importServer(serverid, accid, name) {
  var serverid = serverid;
  var accountId = accid;
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
        $.post(hcloudaddonmoduleURL, { subaction:'ImportCloud', apiid:accountId, serverid:serverid },
        function (response) {
          var parsed = JSON.parse(response);
          if(parsed.status == 'completed'){
            $("#custom-alert-message").html(langVar.ServerimportSuccess);
            $("#AdminMsg").removeClass().addClass('successbox').show();
            $("#custom-loader").hide();
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
