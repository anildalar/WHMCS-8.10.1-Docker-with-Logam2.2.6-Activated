<div class="panel panel-primary">
    <div class="panel-body">
        {$MGLANG->T('On this page you can find hostings with enabled Auto Product Upgrade. You can take a look into history of account and see how it was changing.')}
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Accounts')}</h3>
    </div>
  <div class="panel-body">
    <table id="accountsTable" class="table table-hover">
        <thead>
            <tr>
                <th>{$MGLANG->T('Hosting ID')}</th>
                <th>{$MGLANG->T('Client')}</th>
                <th>{$MGLANG->T('Product')}</th>
                <th>{$MGLANG->T('Option')}</th>
                <th>{$MGLANG->T('Actions')}</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
  </div>
</div>
            
<div id="Modal"></div>
<div id="modalLoader" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-loader"></div>
        </div>
    </div>
</div>                
                
{literal}
    <style type="text/css">
        .shownVMRows {
            background-color: #961606 !important;
        }
     
        .vmTable{
            background-color: #EEE !important;
        }
        
        .vmRow{
            background-color: #EEE !important;
            border-left: solid 2px #CCC ;
            border-right: solid 2px #CCC ;
            border-bottom: solid 2px #CCC 
        }
        .shown {
            border-left: solid 2px #CCC ;
            border-right: solid 2px #CCC ;
        }
        
        .dataTables_empty{
            text-align: center;
        }
    </style>
    
    <script type="text/javascript">
        var autoscaleHostingIdTableRow;
        
        jQuery(document).ready(function()
        {
            jQuery('#accountsTable').DataTable({
                bProcessing: true,
                bServerSide: true,
                searching: false,
                autoWidth: false,
                sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=accounts&mg-action=getAccountsList&extensionPage=ProductAutoUpgrade&json=1",
                ordering: false,
                bPaginate: true,
                pagingType: "simple_numbers",
                columns: [
                    { data: "hostingId" },
                    { data: "client" },
                    { data: "product" },
                    { data: "option" },
                    {
                        orderable:      false,
                        data:           "actions",
                    }
                ],         
                fnDrawCallback: function(){
                    refreshHandlers();
                },
                LengthMenu: [
                    [10, 25, 50, 75, 100],
                    [10, 25, 50, 75, 100]
                ],
                iDisplayLength: 10,
                sDom: 't<"table-bottom"<"row"<"col-sm-6"l><"col-sm-6"pL>>>'
            });
            
            refreshHandlers();
        });

        function refreshHandlers()
        {               
            $(".viewHistory").unbind("click");
            
            $(".viewHistory").on("click", function(e){
                e.preventDefault();
                var hostingId = $(this).data('hostingid');
                
                getModal("showDetails", {hostingId: hostingId});
            });
        }
        
        function getModal(action, vars)
        {
            var url = "addonmodules.php?module=AdvancedBilling&mg-page=accounts&mg-action="+action+"&customPage=1&extensionPage=ProductAutoUpgrade";

            $('#modalLoader').modal('show');
            $.ajax({
                type: "GET",
                url: url,
                data: vars,
                success: function(content){
                    $('#modalLoader').modal('hide');
                    $("#Modal").replaceWith(content);
                    initModal();
                },
                dataType: 'html'
            });
        }
    </script>
{/literal}