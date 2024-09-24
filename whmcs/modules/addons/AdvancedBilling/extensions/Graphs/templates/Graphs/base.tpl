<div class="panel panel-primary">
    <div class="panel-body">{$MGLANG->T('Graph extension allows you to view graphs of usage records for every configured services in Advanced Billing')}.</div>
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
    <table class="table table-hover">
        <thead>
            <td>{$MGLANG->T('Hosting')}</td>
            <td>{$MGLANG->T('Product Name')}</td>
            <td>{$MGLANG->T('Client Name')}</td>
            <td>{$MGLANG->T('Status')}</td>
            <td>{$MGLANG->T('Actions')}</td>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>
</div>
        
{literal} 
<script type="text/javascript">
    var dtable = jQuery('#MGPanel table').dataTable( {
        bProcessing: true,
        bServerSide: true,
        searching: false,
        autoWidth: false,
        sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=graphs&mg-action=getAccountList&extensionPage=Graphs&json=1",
        columns: [
            { targets: 0},
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 }
            // { orderable: false, targets: 0 }
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