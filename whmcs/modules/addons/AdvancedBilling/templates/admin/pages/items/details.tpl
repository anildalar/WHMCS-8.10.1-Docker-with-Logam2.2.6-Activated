<div class="panel panel-primary">
    <div class="panel-body">{$MGLANG->T('Item list will show you current usage counted by the Advanced Billing module for accounts')}.</div>
</div>

<div id="MGPanel" class="panel panel-primary">
    <div class="panel-heading">
        <div id="panelHeader" class="panel-title">
            <a href="clientsservices.php?userid={$account->client->id}&id={$account->hosting->id}">
                #{$account->hosting->id}
            </a> 
            <a href="configproducts.php?action=edit&id={$account->product->id}">
                <b style="margin-left: 1%; color: #FFF">{$account->product->name}</b> 
            </a>
            <a href="clientsservices.php?userid={$account->client->id}&id={$account->hosting->id}">
                <span class="text-danger" style="margin-left: 1%; color: #FFF">{$account->hosting->domain}</span>
            </a>
            <div class="pull-right">
                {if $isReccuringBillingEnabled eq 'on'}<button id="generateInvoiceBtn" class="btn btn-primary" data-hostingid="{$account->hosting->id}">{$MGLANG->T('Generate Invoice')}</button>{/if}
                <button id="openConfirmModalBtn" class="btn btn-danger">{$MGLANG->T('Delete')}</button>
            </div>
        </div>
    </div>
    <div class="panel-body">      
        <table id="recordsTable" class="table table-hover" data-hostingid="{$account->hosting->id}" data-productid='{$account->product->id}'>
            <thead>
                {foreach from=$resources item=resource}
                    <td>{$MGLANG->T($resource.friendlyName)}</td>
                {/foreach}
                <td>{$MGLANG->T('Total')}</td>
                <td>{$MGLANG->T('Date')}</td>
            </thead>
        </table>
    </div>
    <div class="panel-footer">

    </div>
</div>


<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-content" style="width: 50%; top:25%; left: 25%;">
        <div class="modal-header">
            
        </div>
        <div class="modal-body">
            <h3><b>{$MGLANG->T('Are you sure?')}</b></h3>
            <span class="help-block">
                {$MGLANG->T('All currently generated records will be deleted. This action can NOT be undone!')}
            </span>
        </div>
        <div class="modal-footer">
            <button id="deleteItemsDetailsBtn" type="button" data-dismiss="modal" class="btn btn-danger btn-inverse" data-hostingid="{$account->hosting->id}">{$MGLANG->T('Delete')}</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">{$MGLANG->T('Cancel')}</button>
        </div>
    </div>
</div>
                
{literal}        
<style type="text/css">
    #panelHeader a
    {
        font-size: 17px !important;
    }
    
    .hourlyItem
    {
        background-color: #ccffeb !important;
    }
    
    .summary {
        background-color: #e5f6ff;
    }
    
    .summary:hover {
        background-color: #e5f6ff !important;
    }
    
    .summary-top td {
        font-weight: bold !important;
        text-align: center;
    }
</style>


<script type="text/javascript">
    jQuery(document).ready(function(){
        $("#openConfirmModalBtn").click(function(){
            $("#confirmModal").modal('show');
        });
        
        $("#deleteItemsDetailsBtn").click(function(){
            var hostingId = $(this).data("hostingid");

            postAJAX("items|deleteItems", {'hostingId' : hostingId}, 'json', "resultMessage", function(result){
                if(result == "success")
                {              
                    window.location.href="addonmodules.php?module=AdvancedBilling&mg-page=items";
                }
            });
        });
        
        $("#generateInvoiceBtn").click(function(){
            var hostingId = $(this).data("hostingid");

            postAJAX("items|generateInvoice", {'hostingId' : hostingId}, 'json', "resultMessage", function(result){
                if(result == "success")
                {              
                    window.location.href="addonmodules.php?module=AdvancedBilling&mg-page=items";
                }
            });
        });
        
        var hostingId = $("#MGPanel table").data("hostingid");

        jQuery('#MGPanel table').dataTable( {
            bProcessing: true,
            bServerSide: true,
            searching: false,
            autoWidth: false,
            sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=items&mg-action=getDetailsList&json=1&hostingId="+hostingId,
            fnServerParams: function ( aoData ) {
                aoData.push( { "name": "hostingId", "value": hostingId} );
            },
            fnDrawCallback: function(){
                $.ajax({
                    type: "POST",
                    url: "addonmodules.php?module=AdvancedBilling&mg-page=items&mg-action=getSummarizeRow&json=1",
                    data: {'hostingId' : hostingId},
                    success: function(result){
                        $("#recordsTable tbody").append(result[0]);
                    },
                    dataType: 'json',
                });
                
                if ($('#MGPanel table tr').length < 1) {
                    $('.table-bottom').hide();
                }
            },
            ordering: false,
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
 
