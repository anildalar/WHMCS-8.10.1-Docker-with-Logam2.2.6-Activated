<div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 70%">

        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">#{$invoice->id} {$MGLANG->T('Invoice Details')}</h3>
                <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
            </div>
            <div class="modal-loader"></div>
            <div class="modal-body">
                <form id="invoiceDetails" >
                    <input hidden name="invoiceId" value="{$invoice->id}"/>
                    <div class="invoiceDetails">
                        <div class="row">
                            <div class="col-sm-3 text-right">
                                {$MGLANG->T('Client')}
                            </div>
                            <div class="col-sm-9">
                                <a href="clientssummary.php?userid={$client->id}">{$client->firstname} {$client->lastname}</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 text-right">
                                {$MGLANG->T('Invoice Date')}
                            </div>
                            <div class="col-sm-9">
                                <input name="date" value="{$invoice->date}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 text-right">
                                {$MGLANG->T('Invoice Due Date')}
                            </div>
                            <div class="col-sm-9">
                                <input name="dueDate" value="{$invoice->dueDate}">
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td style="width: 70%">{$MGLANG->T('Description')}</td>
                                <td>{$MGLANG->T('Amount')}</td>
                                <td>{$MGLANG->T('Taxed')}</td>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$items key=key item=item}
                                <tr>
                                    <td><input name="item[{$key}][description]" value="{$item["description"]}" style="width: 90%"></td>
                                    <td><input name="item[{$key}][amount]"      value="{$item["amount"]}" style="width: 60%">{$currency->suffix}</td>
                                    <td><input name="item[{$key}][taxed]"       value="{$item["taxed"]}" type="checkbox" {if $item["taxed"]}checked{/if}></td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
              <button id="saveInvoiceDetailsBtn" class="btn btn-success btn-inverse" data-dismiss="modal">{$MGLANG->T('Save')}</button>
              <button class="btn btn-danger" data-dismiss="modal">{$MGLANG->T('Cancel')}</button>
            </div>
        </div>
    </div>
</div>

{literal}                
<style>
    .invoiceDetails{
        font-size: 14px !important;
    }
    
    .invoiceDetails div{
        margin-bottom: 5px;
    }

</style>
<script type="text/javascript">
    
    $("#saveInvoiceDetailsBtn").click(function(){
        var values = $("#invoiceDetails").serializeArray();
        postAJAX("invoices|saveInvoiceDetails", values, "json", "resultMessage");
    });
    
    function initModal()
    {
        $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
        {
            $('#Modal').modal('show');
            $('.modal-loader').hide();
        });
    }
</script>
{/literal}   