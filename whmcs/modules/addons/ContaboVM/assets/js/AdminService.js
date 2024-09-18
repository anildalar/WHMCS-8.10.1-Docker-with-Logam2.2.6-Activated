// *************************************************************************
// * Contabo Cloud Automation                                              *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2024.1                                                       *
// * Build Date: 20 January 2024                                           *
// *************************************************************************
// * Email: sales@whmcsmodule.net                                          *
// * Website: https://www.whmcsmodule.net                                  *
// *************************************************************************
$(document).ready(function(){

  var url_string = window.location.href;
    var urls = new URL(url_string);
    var serviceid = urls.searchParams.get("id");

  //Add Above
  });

  //API Add

function importServer(serverid, name) {
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
        $.post(contaboaddonmoduleURL, { subaction:'ImportCloud', serverid:serverid },
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

function removeSecret(secretId, name) {
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
        $.post(contaboaddonmoduleURL, { subaction:'RemoveSecretId', secretId:secretId },
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

function editSecret(secretId, sname) {
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
        $.post(contaboaddonmoduleURL, { subaction:'EditSecretId', secretId:secretId, name:sname, value:spass },
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
