<div class="panel panel-primary">
    <div class="panel-body">{$MGLANG->T('Item list will show you current usage counted by the Advanced Billing module for accounts')}.</div>
</div>

<div id="MGPanel" class="panel panel-primary">
    <div class="panel-heading">
        {if $displayForProduct}
            <h3 class="panel-title"  style="line-height: 28px;">
                {$MGLANG->T('Account List')} {$MGLANG->T('For Product')} <b style="color: #fff">{$productName}</b>
                <div class="pull-right">
                    <a class="btn btn-info" href="addonmodules.php?module=AdvancedBilling&mg-page=items">{$MGLANG->T('Show All')}</a>
                </div>
            </h3>
        {else}
            <h3 class="panel-title">{$MGLANG->T('Account List')}</h3>
        {/if}
    </div>
  <div class="panel-body">      
    <table id="accountTable" class="table table-hover">
        <thead>
            <td>{$MGLANG->T('Hosting')}</td>
            <td>{$MGLANG->T('Product Name')}</td>
            <td>{$MGLANG->T('Client Name')}</td>
            <td>{$MGLANG->T('Total Amount')}</td>
            <td>{$MGLANG->T('Last Update')}</td>
            <td>{$MGLANG->T('Actions')}</td>
        </thead>
        <tbody>

        </tbody>
    </table>
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
            <button id="deleteItemsDetailsBtn" type="button" data-dismiss="modal" class="btn btn-danger btn-inverse">{$MGLANG->T('Delete')}</button>
            <button type="button" data-dismiss="modal" class="btn btn-primarys">{$MGLANG->T('Cancel')}</button>
        </div>
    </div>
</div>
            
{literal}
<script type="text/javascript">
    
    var hostingId;
    $(document).on('click', ".openConfirmModalBtn", function(){
        hostingId = $(this).data("hostingid");
        $("#confirmModal").modal('show');

    });
    
    $("#deleteItemsDetailsBtn").click(function(e)
    {
        postAJAX("items|deleteItems", {'hostingId' : hostingId}, 'json', "resultMessage", function(result){
            if(result == "success")
            {
                $('#MGPanel table').DataTable().ajax.reload();
            }
        });
    });

    var productId = {/literal}{if $productId}{$productId}{else}null{/if}{literal}

    var dtable = jQuery('#MGPanel table').dataTable( {
        bProcessing: true,
        bServerSide: true,
        searching: false,
        autoWidth: false,
        order: [[0, "desc"]],
        // order: false,
        // "targets": 'no-sort',
        // "bSort": false,

        sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=items&mg-action=getItems&json=1",
        columns: [
            { targets: 0 },
            // { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 }
        ],

        sPaginationType: "simple_numbers",
        LengthMenu: [
            [10, 25, 50, 75, 100],
            [10, 25, 50, 75, 100]
        ],
        fnServerParams: function ( aoData ) {
            aoData.push( { "name": "productId", "value": productId} );
        },
        "fnDrawCallback": function ()
        {
            customDataTablePagination( '#MGPanel', dtable );
        },
        iDisplayLength: 10,
        sDom: 't<"table-bottom"<"row"<"col-sm-6"l><"col-sm-6"pL>>>'
    });
    
</script>
{/literal}