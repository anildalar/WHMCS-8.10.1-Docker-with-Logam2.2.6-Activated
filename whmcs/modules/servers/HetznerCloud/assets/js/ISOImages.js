
$(document).ready(function(){
    $.post({
     url: window.location.href,
     data: { subaction:'AjaxServerStatus' },
     success:function(response){
       var parsed = JSON.parse(response);
       if( parsed.iso == 'yes' ){
        $("#isoidshow").show();
       } else {
        $("#isoidshow").hide();
       }
     }
    });
loadIsoImages();

  });

  function loadIsoImages(){
    var IsoImageTable = $("#IsoImageTable").DataTable({
                  destroy: true,
                        "ajax": {
                            "url": window.location.href,
                            "type": "POST",
                            data: { subaction:"getISOs" },
                        },
                        "info": false,
                        "columnDefs": [{ "orderable": false, "targets": 1 }],
                        "bLengthChange":false,
                        "length": false,
                        scrollX: false,
                        language: {processing: "<img src='modules/addons/HetznerCloud/assets/img/spinner.svg'> "+langVar.Loading},
                                processing: true,
                                searching: true,
                                autoWidth: false,
                                "order": [],
     });
  }

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
          WHMCS.http.jqClient.jsonPost({
            url: window.location.href,
            data: { subaction:'ISOAttachDetach', ActType:'detach_iso' },
            success: function(serveraction){
              $("#isoidshow").hide();
              $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
                vNotify.success({
                text:langVar.istmgmt.dsuccess,
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
            WHMCS.http.jqClient.jsonPost({
              url: window.location.href,
              data: { subaction:'ISOAttachDetach', ActType:'attach_iso',  IsoName:isoimg },
              success: function(serveraction){
                $("#isoidshow").show();
                $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
                  vNotify.success({
                  text:langVar.istmgmt.asuccess,
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
              WHMCS.http.jqClient.jsonPost({
                url: window.location.href,
                data: { subaction:'ISOAttachDetach', ActType:'detach_iso' },
                success: function(serveraction){
                  $("#isoidshow").hide();
                  $("#IsoImageTable").DataTable().ajax.reload().columns.adjust();
                    vNotify.success({
                    text:langVar.istmgmt.dsuccess,
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
