
$(document).ready(function(){
backups();
  backUpStatus();
  //Add Above
  });

function backups(){
  var BackUpTable = $("#BackUpTable").DataTable({
    destroy: true,
          "ajax": {
              "url": window.location.href,
              "type": "POST",
              data: { subaction:"getSingleServerBackup" },
          },
          "info": false,
          "columnDefs": [{ "orderable": false, "targets": 3 }],
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

  function backUpStatus() {
    $.post({
     url: window.location.href,
     data: { subaction:'AjaxServerStatus' },
     success:function(response){
       var parsed = JSON.parse(response);

       if( parsed.backup == 'yes' ){
        $("#BackupStatusEnable").hide();
        $("#BackupStatusDisable").show();
       } else {
        $("#BackupStatusEnable").show();
        $("#BackupStatusDisable").hide();
       }
     }
    });
  };

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
             $("#custom-loader").hide();
             $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
             $("#BackupStatusEnable").show();
             $("#BackupStatusDisable").hide();
             vNotify.success({
             text:langVar.BackDisSuccess,
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
             vNotify.success({
             text:langVar.BackEnbSuccess,
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
             $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
             $("#custom-loader").hide();
             $("#BackupStatusEnable").hide();
             $("#BackupStatusDisable").show();
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
             vNotify.success({
             text:langVar.BackupRestoredSuccess,
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
             $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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
             vNotify.success({
             text:langVar.BackupRemoveSuccess,
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
             $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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
               vNotify.success({
               text:langVar.BackCreateSuccess,
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
            $("#BackupStatusDisable").hide();
             } else {
               vNotify.error({
               text:langVar.BackCreateError,
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
             $("#BackupStatusDisable").show();
             }
             $("#custom-loader").hide();
             $("#BackUpTable").DataTable().ajax.reload().columns.adjust();
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
