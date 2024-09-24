<div class="panel panel-primary">
    <div class="panel-body">
        {$MGLANG->T('Awaiting Invoices means, that it will not be generated until you confirm that manually')}.</br>
        {$MGLANG->T('This is the best way to avoid any unwanted invoices for your clients and test the possibilities of Advanced Billing module. To enable this feature, please edit your Products in Configuration page and disable "Autogenerate Invoice" option.')}
    </div>
</div>

<div id="MGPanel">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Awaiting Invoices')}</h3>
    </div>
  <div class="panel-body">      
    <table id="invoiceTable" class="table table-hover">
        <thead>
            <td>{$MGLANG->T('Client Name')}</td>
            <td>{$MGLANG->T('Hosting')}</td>
            <td>{$MGLANG->T('Product Name')}</td>
            <td>{$MGLANG->T('Total')}</td>
            <td>{$MGLANG->T('Invoice Date')}</td>
            <td>{$MGLANG->T('Invoice Due Date')}</td>
            <td>{$MGLANG->T('Actions')}</td>
        </thead>
        <tbody>
            {*{if $invoices->count() > 0}*}
                {*{foreach from=$invoices item=invoice}*}
                    {*<tr name="{$invoice->id}">*}
                        {*<td><a href="clientssummary.php?userid={$invoice->client->id}">{$invoice->client->firstname} {$invoice->client->lastname}</td>*}
                        {*<td><a href="clientsservices.php?userid={$invoice->client->id}&id={$invoice->hosting->id}">#{$invoice->hosting->id} {$invoice->hosting->domain}</a></td>*}
                        {*<td><a href="configproducts.php?action=edit&id={$invoice->product->id}">{$invoice->product->name}</a></td>*}
                        {*<td>{$currency->prefix}{$invoice->total} {$currency->suffix}</td>*}
                        {*<td>{$invoice->date}</td>*}
                        {*<td>{$invoice->dueDate}</td>*}
                        {*<td>*}
                            {*<a class="generateInvoiceBtn btn btn-success btn-inverse" data-invoiceid="{$invoice->id}">{$MGLANG->T('Generate')}</a>*}
                            {*<a class="showInvoiceDetailsBtn btn btn-info btn-inverse" data-invoiceid="{$invoice->id}">{$MGLANG->T('Show Details')}</a>*}
                            {*<a class="openConfirmModalBtn btn btn-danger btn-inverse" data-invoiceid="{$invoice->id}">{$MGLANG->T('Delete')}</a>*}
                        {*</td>*}
                    {*</tr>*}
                {*{/foreach}*}
            {*{else}*}
                {*<td colspan="7">{$MGLANG->T('Nothing to display')}</td>*}
            {*{/if}*}
        </tbody>
    </table>
  </div>
</div>
</div>
               
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-content col-lg-5 col-sm-6 col-xs-8" style="width 50%; top: 25%; left: 25%;">
        <div class="modal-header">
            
        </div>
        <div class="modal-body">
            <h3><b>{$MGLANG->T('Are you sure?')}</b></h3>
            <span class="help-block">
                {$MGLANG->T('Selected Invoice will be deleted. This action can NOT be undone!')}
            </span>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="deleteInvoiceBtn btn btn-danger btn-inverse">{$MGLANG->T('Delete')}</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">{$MGLANG->T('Cancel')}</button>
        </div>
    </div>
</div>
        
<div id="Modal"></div>

<div id="modalLoader" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%;">
        <div class="modal-content">
            <div class="modal-loader"></div>
        </div>
    </div>
</div>
{*{include file='history.tpl'}*}
        
{literal}    
<script type="text/javascript">

    var dtable = jQuery('#MGPanel table').dataTable( {
        bProcessing: true,
        bServerSide: true,
        searching: false,
        autoWidth: false,
        "targets": 'no-sort',
        "bSort": false,
        sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=invoices&mg-action=getInvoices&json=1",
        columns: [
            { orderable: true, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
            { orderable: false, targets: 0 },
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


    $(document).on('click',".generateInvoiceBtn", function()
    {
        var invoiceId = $(this).data("invoiceid");
        modalState('show');
        postAJAX("invoices|generateInvoice", {invoiceId: invoiceId}, 'json', 'resultMessage', function(result){

            var rows = $("#invoiceTable tbody tr").length;
            if(rows == 1)
            {
                $("tr[name='"+invoiceId+"']").html({/literal}'<td colspan="7">{$MGLANG->T('Nothing to display')}</td>'{literal});
            }
            else
            {
                $("tr[name='"+invoiceId+"']").html('');
            }
            modalState('hide');
            $('#MGPanel table').DataTable().ajax.reload();
        });
    });
    
    $(document).on('click',".showInvoiceDetailsBtn", function()
    {
        var invoiceId = $(this).data("invoiceid");
        getModal({'invoiceId': invoiceId});
    });
        
    function getModal(vars)
    {
        var url = "addonmodules.php?module=AdvancedBilling&mg-page=invoices&mg-action=showDetails&customPage=1";
        modalState('show');
        $.ajax({
            type: "GET",
            url: url,
            data: vars,
            success: function(content){
                modalState('hide');
                $("#Modal").replaceWith( content );
                initModal();
            },
            dataType: 'html'
        });
    }

    function modalState(state)
    {
        if(state == 'show')
        {
            $('#modalLoader').modal('show');
            $('.modal-loader').show();
        }
        else if(state == 'hide')
        {
            $('#modalLoader').modal('hide');
        }
    }

    var invoiceId;
    $(document).on("click" , ".openConfirmModalBtn", function(){
        invoiceId = $(this).data("invoiceid");
        $(".deleteInvoiceBtn").attr("data-invoiceid", invoiceId);

        $("#confirmModal").modal('show');

    });
    
    $(".deleteInvoiceBtn").click(function(){

        postAJAX("invoices|deleteInvoice", {'invoiceId' : invoiceId}, 'json', "resultMessage", function(result){
            if(result == "success")
            {

                var rows = $("#invoiceTable tbody tr").length;
                if(rows == 1)
                {
                    $("tr[name='"+invoiceId+"']").html({/literal}'<td colspan="7">{$MGLANG->T('Nothing to display')}</td>'{literal});
                }
                else
                {
                    $("tr[name='"+invoiceId+"']").html('');
                }
                $('#MGPanel table').DataTable().ajax.reload();
            }
        });
    });



</script>
{/literal}