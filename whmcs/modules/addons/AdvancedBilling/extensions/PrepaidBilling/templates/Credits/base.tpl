<div id="MGPanel" class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('User Credits')}</h3>
    </div>
  <div class="panel-body">
    <table class="table table-hover">
        <thead>
            <tr>
                <td>{$MGLANG->T("Client Name")}</td>
                <td>{$MGLANG->T("Hosting")}</td>
                <td>{$MGLANG->T("Internal Credit")}</td>
                <td>{$MGLANG->T("Already Paid For Hosting")}</td>
                <td>{$MGLANG->T("Action")}</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>
</div>
        
{literal}
    <script type="text/javascript">       
        
        function initButtons()
        {
            $(".refundBtn").click(function(){
            var userId = $(this).data("userid");
            var hostingId = $(this).data("hostingid");
            postAJAX("credits|makeRefund", 
                {'userId' : userId, 'hostingId': hostingId, 'extensionPage': 'PrepaidBilling'},
                'json',
                "resultMessage",
                function(result){
                    if(result == "success")
                    {
                        var tr = $('.client_'+userId+'_hosting_'+hostingId).find('td:eq(2)');
                        tr.html(0);
                    }
                });
            });
        }
        
        jQuery(document).ready(function(){

            
            jQuery("#MGPanel table").dataTable({
                bProcessing: true,
                bServerSide: true,
                searching: false,
                autoWidth: false,
                sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=credits&mg-action=getClientCreditsList&json=1&extensionPage=PrepaidBilling",
                fnDrawCallback: function(){
                    initButtons();
                 },
                columns: [
                    { orderable: true, targets: 0 },
                    { orderable: true, targets: 0 },
                    { orderable: true, targets: 0 },
                    { orderable: true, targets: 0 },
                    { orderable: false, targets: 0 }
                  ],
                bPaginate: true,
                pagingType: "simple_numbers",
                LengthMenu: [
                    [10, 25, 50, 75, 100],
                    [10, 25, 50, 75, 100]
                ],
                iDisplayLength: 10,
                sDom: 't<"table-bottom"<"row"<"col-sm-6"l><"col-sm-6"pL>>>'
            });
        });
    </script>
{/literal}