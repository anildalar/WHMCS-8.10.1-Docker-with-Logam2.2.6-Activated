<div id="MGPanel" class="panel panel-primary">
    <div class="panel-heading">
            <h4 class="panel-title">
                {$MGLANG->T('Logs')}
                <div class="pull-right">
                    <label style="color: #FFF">{$MGLANG->T('Logger Type')}</label>
                    <input id="loggerTypeSwitch" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Database')}" data-off-text="{$MGLANG->T('File')}" data-on-color="info" data-off-color="primary"  data-size="mini" data-label-width="15" type="checkbox" {if $databaseLogger eq 'database'}checked{/if}>
                </div>
            </h4>
    </div>
    <div class="panel-body">      
        <table class="table table-hover">
            <thead>
                <tr>
                    <td style="width: 15%">{$MGLANG->T('Date')}</td>
                    <td>{$MGLANG->T('Message')}</td>
                    <td style="width: 15%">{$MGLANG->T('Type')}</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <div class="panel-footer">

    </div>
</div>
        
{literal}          
<style>
    .log-error td{
        background-color: #ffe5e5;
    }
    .log-error td:hover{
        background-color: #ffe5e5;
    }
    .log-critical td{
        color: #ffffff !important;
        background-color:  #ff1a1a
    }
    .log-critical td:hover{
        color: #ffffff !important;
        background-color:  #ff1a1a !important
    }
</style>
    
<script type="text/javascript">
    $(".bootstrap-switcher").bootstrapSwitch();
    
    $("#loggerTypeSwitch").on('switchChange.bootstrapSwitch', function(event, state) {
        postAJAX("settings|toggleLoggerType", {databaseLogger : state}, 'json', "resultMessage", function(){
            location.reload();
        });
    });
    

    var dtable = jQuery('#MGPanel table').dataTable( {
        bProcessing: true,
        bServerSide: true,
        searching: false,
        autoWidth: false,
        sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=settings&mg-action=getLogsList&json=1",
        columns: [
            { name: 'date'  },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 }
          ],
        order: [[0, "desc"]],
        sPaginationType: "simple_numbers",
        LengthMenu: [
            [10, 25, 50, 75, 100],
            [10, 25, 50, 75, 100]
        ],
        "fnDrawCallback": function ()
        {
            customDataTablePagination( '#MGPanel', dtable );
        },
        iDisplayLength: 10,
        sDom: 't<"table-bottom"<"row"<"col-sm-6"l><"col-sm-6"pL>>>'
    });
    
    
</script>
{/literal}   