// *************************************************************************
// * Hetzner Server Automation                                             *
// * Copyright (c) WHMCSModule Networks. All Rights Reserved.              *
// * Version: 2022.4                                                       *
// * Build Date: 19 November 2022                                          *
// *************************************************************************
// * Email: sales@whmcsmodule.net                                          *
// * Website: https://www.whmcsmodule.net                                  *
// *************************************************************************
$(document).ready(function(){
cronStatus();

  $("#CronJobTable").DataTable({
    destroy: true,
    "ajax": {
              "url": hetznerURL,
              "type": "POST",
              data: { projectaction:"getOrderInformation" },
          },
    "info": false,
    "columnDefs": [{ "orderable": false, "targets": 3 }],
    language: {
      processing: "<img src='../modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
    },
    "length": false,
    scrollX: true,
    processing: true,
    searching: true,
    autoWidth: false
  });

  $("#HomeAccountTable").DataTable({
  		destroy: true,
  		"ajax": {
  			"url": hetznerURL,
  			"type": "POST",
  			data: {
  				projectaction: "getProjects"
  			},
  		},
  		"info": false,
  		"columnDefs": [{
  			"orderable": false,
  			"targets": 3
  		}],
  		"length": false,
  		scrollX: false,
  		language: {
  			processing: "<img src='../modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
  		},
  		processing: true,
  		searching: true,
  		autoWidth: false,
  		"order": [],
  	});

    var url_string = window.location.href;
      var urls = new URL(url_string);
      var projectId = urls.searchParams.get("id");
      var page = urls.searchParams.get("page");
      if(page){
        var pages = page;
      } else {
        var pages = 1;
      }
    $("#ServersViewTable").DataTable({
    		destroy: true,
    		"ajax": {
    			"url": hetznerURL,
    			"type": "POST",
    			data: {
    				projectaction: "getServers", projectId:projectId, pages:pages
    			},
    		},
    		"info": false,
    		"columnDefs": [{
    			"orderable": false,
    			"targets": 7
    		}],
    		"length": false,
    		scrollX: false,
    		language: {
    			processing: "<img src='../modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
    		},
    		processing: true,
    		searching: true,
    		autoWidth: false,
        "ordering": false,
        "bLengthChange": false,
        "bPaginate": false,
    		"order": [],
    	});

      $("#WHMCSProductTable").DataTable({
      		destroy: true,
      		"ajax": {
      			"url": hetznerURL,
      			"type": "POST",
      			data: {
      				projectaction: "getProdServices"
      			},
      		},
      		"info": false,
      		"columnDefs": [{
      			"orderable": false,
      			"targets": 4
      		}],
      		"length": false,
      		scrollX: false,
      		language: {
      			processing: "<img src='../modules/addons/hetzner/assets/img/spinner.svg'> " + langVar.Loading
      		},
      		processing: true,
      		searching: true,
      		autoWidth: false,
          "ordering": false,
          "bLengthChange": false,
          "bPaginate": false,
      		"order": [],
      	});

//Add above
});

function cronStatus() {
$("#hetzner-loader").show();
$.ajax({
 url: hetznerURL,
 type: 'post',
 data: { projectaction:'cronJobStatus'},
 success:function(response){
var parsed = JSON.parse(response);
if(parsed.jobs == 'pending'){
$("#jobclass").addClass('alert-danger').show();
$("#fontasm").addClass('fas fa-times').show();
$(".cronstats").html(parsed.jobStatus).show();
$(".lastrun").html(parsed.jobLast).show();
} else{
$("#jobclass").addClass('alert-success').show();
$("#fontasm").addClass('fas fa-check').show();
$(".cronstats").html(parsed.jobStatus).show();
$(".lastrun").html(parsed.jobLast).show();
}
$("#hetzner-loader").hide();
 }
});
};

function orderExecIndividual(orderid, type) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.IndividualOrderConfirm+" ?",
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
        $("#hetzner-loader").show();
          $.post(hetznerURL, { projectaction:"IndiVidualOrderExec", order: orderid, type: type },
          function (response) {
            var parsed = JSON.parse(response);
            if(parsed.status == "completed"){
              $(".title").html(parsed.ModuleSuccess);
              $("#custom-alert-message").html(parsed.data);
              $("#AdminMsg").removeClass().addClass("successbox").show();
              $("#hetzner-loader").hide();
              $("#CronJobTable").DataTable().ajax.reload().columns.adjust();
            } else {
              $("#custom-alert-message").html(parsed.data);
              $(".title").html(parsed.ModuleError);
              $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
              $("#hetzner-loader").hide();
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

function ExecuteCron() {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.CronAreYouSure+" ?",
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
        $("#hetzner-loader").show();
        $.post({
         url: hetznerURL,
         data: { projectaction:'CronExecute' },
         success:function(response){
           var parsed = JSON.parse(response);
           if(parsed.status == 'completed'){
             $(".title").html(parsed.ModuleSuccess);
             $('#CronJobTable').DataTable().ajax.reload().columns.adjust();
             cronStatus();
             $("#custom-alert-message").html(parsed.result);
             $("#AdminMsg").removeClass().addClass('successbox').show();
             $("#hetzner-loader").hide();
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
  }
});
}

function SRVImport(serverId, projectId) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.Import_Server_sure+" ?",
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
        $("#hetzner-loader").show();
        $.post({
         url: hetznerURL,
         data: { projectaction:'ImportWHMCSServer', serverId:serverId, projectId:projectId },
         success:function(response){
           var parsed = JSON.parse(response);
           if(parsed.status == 'completed'){
             $(".title").html(parsed.ModuleSuccess);
             $("#custom-alert-message").html(parsed.data);
             $("#AdminMsg").removeClass().addClass('successbox').show();
             $("#hetzner-loader").hide();
           } else {
             $("#custom-alert-message").html(parsed.data);
             $(".title").html(parsed.ModuleError);
             $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
             $("#hetzner-loader").hide();
           }
          $('#ServersViewTable').DataTable().ajax.reload().columns.adjust();
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

function buyMarketServers(accountId, oserverid) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.BuyMarketServerConfirm+" ?",
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
        $("#hetzner-loader").show();
          $.post(hetznerURL, { projectaction:"BuyMarketServer", acountid:accountId, oserverid: oserverid },
          function (response) {
            var parsed = JSON.parse(response);
            if(parsed.status == "completed"){
              $(".title").html(parsed.ModuleSuccess);
              $("#custom-alert-message").html(parsed.data);
              $("#AdminMsg").removeClass().addClass("successbox").show();
              $("#hetzner-loader").hide();
            } else {
              $("#custom-alert-message").html(parsed.data);
              $(".title").html(parsed.ModuleError);
              $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
              $("#hetzner-loader").hide();
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

function importStandrdServers(projectid, hproductid, hloc, hprice, hsetup) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.StandardImportSure+" ?",
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
        $("#hetzner-loader").show();
          $.post(hetznerURL,
            { projectaction:"ImportStandardServer", acountid: projectid, hproductid: hproductid, hloc: hloc, hprice: hprice, hsetup: hsetup},
          function (response) {
            var parsed = JSON.parse(response);

            if(parsed.status == "completed"){
              $("#custom-alert-message").html('');
              $(".title").html(parsed.ModuleSuccess);
              $("#custom-alert-message").html(parsed.data);
              $("#AdminMsg").removeClass().addClass("successbox").show();
              $("#hetzner-loader").hide();
            } else {
              $("#custom-alert-message").html('');
              $("#custom-alert-message").html(parsed.data);
              $(".title").html(parsed.ModuleError);
              $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
              $("#hetzner-loader").hide();
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

function importMarketServer(projectid, hproductid, hprice, hsetup) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.MarketImportSure+" ?",
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
        $("#hetzner-loader").show();
          $.post(hetznerURL, { projectaction:"ImportMarketServer", acountid: projectid, oserverid:hproductid, hprice: hprice, hsetup: hsetup},
          function (response) {
            var parsed = JSON.parse(response);

            if(parsed.status == "completed"){
              $(".title").html(parsed.ModuleSuccess);
              $("#custom-alert-message").html(parsed.data);
              $("#AdminMsg").removeClass().addClass("successbox").show();
              $("#hetzner-loader").hide();
            } else {
              $("#custom-alert-message").html(parsed.data);
              $(".title").html(parsed.ModuleError);
              $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
              $("#hetzner-loader").hide();
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


function viewServers(accountId) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
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
        window.location=hetznerURL+"&views=servers&id="+accountId;
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
function viewMarketServers(accountId) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: langVar.ProjectViewMarketServerConfirm+" ?",
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
        window.location=hetznerURL+"&Server=Marketing&id="+accountId;
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
function viewStandardServers(accountId) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
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
        window.location=hetznerURL+"&Server=Standard&id="+accountId;
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
function AccountAdd() {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: "" + langVar.Add_Account_Message +
		"<form action=\'\' class=\'formName\'>" +
    "<table class=\"table table-bordered table-hover\">"+
    "<tr><td>"+langVar.Account_Name+"</td>"+
    '<td><input type="text" class="form-control" id="Account_Name" required/></td>'+
    "</tr>"+
    "<tr>"+
    "<td>"+langVar.Account_User+"</td>"+
    "<td>"+
    "<input type='text' class='form-control' id='Account_User' required/>"+
    "</td>"+
    "</tr>"+
    "<tr>"+
    "<td>"+langVar.Account_Pass+"</td>"+
    "<td>"+
    "<input type='text' class='form-control' id='Account_Pass' required/>"+
    "</td>"+
    "</tr>"+
    "</table>"+
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
        var acname = this.$content.find("#Account_Name").val();
					if(!acname) {
						$.alert(langVar.accountName);
						return false;
					}
					var acuser = this.$content.find("#Account_User").val();
					if(!acuser) {
						$.alert(langVar.acuser);
						return false;
					}
          var acpass = this.$content.find("#Account_Pass").val();
					if(!acpass) {
						$.alert(langVar.acpass);
						return false;
					}

           $("#hetzner-loader").show();
           $.post({
            url: hetznerURL,
            data: { projectaction:'WebAccountAdd', accname:acname, accusr:acuser, accpass:acpass },
            success:function(response){
              var parsed = JSON.parse(response);
              if(parsed.message == 'completed'){
                $(".title").html(parsed.ModuleSuccess);
                $("#custom-alert-message").html(parsed.data);
                $("#AdminMsg").removeClass().addClass('successbox').show();
                $("#hetzner-loader").hide();
              } else if(parsed.message == 'emptyaccname'){
                $("#custom-alert-message").html(parsed.data);
                $(".title").html(parsed.ModuleError);
                $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                $("#hetzner-loader").hide();
              } else if(parsed.message == 'emptyaccusr'){
                $("#custom-alert-message").html(parsed.data);
                $(".title").html(parsed.ModuleError);
                $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                $("#hetzner-loader").hide();
              } else if(parsed.message == 'emptyaccpass'){
                $("#custom-alert-message").html(parsed.data);
                $(".title").html(parsed.ModuleError);
                $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                $("#hetzner-loader").hide();
              } else if(parsed.message == 'projectexist'){
                $("#custom-alert-message").html(parsed.data);
                $(".title").html(parsed.ModuleError);
                $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                $("#hetzner-loader").hide();
              } else if(parsed.message == 'invalidaccount'){
                $("#custom-alert-message").html(parsed.data);
                $(".title").html(parsed.ModuleError);
                $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                $("#hetzner-loader").hide();
              } else {
                $("#custom-alert-message").html(parsed.data);
                $(".title").html(parsed.ModuleError);
                $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                $("#hetzner-loader").hide();
              }
              $('#HomeAccountTable').DataTable().ajax.reload().columns.adjust();
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
function projectedit(accountId) {
$.confirm({
  type: "blue",
  columnClass: 'medium',
  title: langVar.Confirmation,
  content: "" + langVar.Add_Account_Message +
		"<form action=\'\' class=\'formName\'>" +
    "<table class=\"table table-bordered table-hover\">"+
    "<tr>"+
    "<td>"+langVar.ctype+"</td>"+
    '<td><select id="ctype" class="form-control">'+
    '<option value="AccountNameUpdate">'+langVar.AccountNameUpdate+'</option>'+
    '<option value="AccountUserUpdate">'+langVar.AccountUserUpdate+'</option>'+
    '<option value="AccountPassUpdate">'+langVar.AccountPassUpdate+'</option>'+
    '</select></td>'+
    "</tr>"+
    "<tr>"+
    "<td>"+langVar.cvalue+"</td>"+
    '<td><input type="text" class="form-control" id="cvalue"/></td>'+
    "</tr>"+
    "</table>"+
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
        var cvalue = this.$content.find("#cvalue").val();
					if(!cvalue) {
						$.alert(langVar.cvalueempty);
						return false;
					}
          var ctype = this.$content.find("#ctype").val();
  					if(!ctype) {
  						$.alert(langVar.ctypeempty);
  						return false;
  					}

            $("#hetzner-loader").show();
            $.post({
             url: hetznerURL,
             data: { projectaction:ctype, acountid:accountId, cvalue:cvalue },
             success:function(response){
               var parsed = JSON.parse(response);
               if(parsed.status == 'completed'){
                 $(".title").html(parsed.ModuleSuccess);
                 $("#custom-alert-message").html(parsed.data);
                 $("#AdminMsg").removeClass().addClass('successbox').show();
                 $("#hetzner-loader").hide();
               } else {
                 $("#custom-alert-message").html(parsed.data);
                 $(".title").html(parsed.ModuleError);
                 $("#AdminMsg").removeClass('successbox').addClass('errorbox').show();
                 $("#hetzner-loader").hide();
               }
               $('#HomeAccountTable').DataTable().ajax.reload().columns.adjust();
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
//2020.7
function projectdel(accountId) {
$.confirm({
  type: "blue",
  title: langVar.Confirmation,
  content: langVar.ProjectDel+" ?",
  columnClass: 'medium',
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
        $("#hetzner-loader").show();
          $.post(hetznerURL, { projectaction:"ApiProjectDelete", acountid:accountId },
          function (response) {
            var parsed = JSON.parse(response);
            if(parsed.status == "completed"){
              $(".title").html(parsed.ModuleSuccess);
              $("#custom-alert-message").html(parsed.data);
              $("#AdminMsg").removeClass().addClass("successbox").show();
              $("#hetzner-loader").hide();
            } else {
              $("#custom-alert-message").html(parsed.data);
              $(".title").html(parsed.ModuleError);
              $("#AdminMsg").removeClass("successbox").addClass("errorbox").show();
              $("#hetzner-loader").hide();
            }
            $('#HomeAccountTable').DataTable().ajax.reload().columns.adjust();
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
