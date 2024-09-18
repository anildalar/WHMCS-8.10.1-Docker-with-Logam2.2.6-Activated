
$(document).ready(function(){

  $(".viewgraph").change(function() {
          var graphtype = $(this).find('option:selected').val();
          ViewGrapgh_Metrics(graphtype);
      });
ViewGrapgh_Metrics('current');

});

function ViewGrapgh_Metrics(graphtype) {
  $("#custom-loader").show();
    $.post({
        url: window.location.href,
        data: { subaction:'AjaxViewGraph', graphtype:graphtype },
      }).done(function(response){
        var parsed = JSON.parse(response);
          $('#CPU').html('<div id="graph1" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.cpu);
          $('#Throughput').html('<div id="graph2" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.disk_throughput);
          $('#IOPS').html('<div id="graph3" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.disk_iops);
          $('#PPS').html('<div id="graph4" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.network_pps);
          $('#Traffic').html('<div id="graph5" style="height: 370px; width: 100%;margin-top:40px;"></div>' + parsed.network_bandwidth);
          $("#custom-loader").hide();
      });
    };
