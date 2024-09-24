{if $userLoggedIn}
    {if !$cartPage}
        <div id="PrepaidBilling_Panel" class="panel panel-default" style="margin-top:20px">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('Summations')}</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover" style="text-align: center" id="summationsTable">
                    <thead>
                    <tr>
                        <td>{$MGLANG->T('Date')}</td>
                        <td>{$MGLANG->T('Total')}</td>
                        <td>{$MGLANG->T('Action')}</td>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$summations item=summation}
                        <tr>
                            <td>{$summation->date}</td>
                            <td>{$summation->total}</td>
                            <td>
                                <button type="button" class="btn" data-toggle="modal" data-target="#summation{$summation->id}">
                                    {$MGLANG->T('Show Details')}
                                </button>
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>

    <div id="PrepaidBilling_TopUp" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{$MGLANG->T('Top Up Account')}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <label class="control-label col-sm-4">{$MGLANG->T('Credit Balance')}: </label>
                <div class="col-sm-8">{$clientCreditsAmount}</div>
            </div>

            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#topUp1">
                {$MGLANG->T('Top Up Account')}
            </button>
        </div>

        <div class="modal fade" id="topUp1" tabindex="-1" role="dialog" aria-labelledby="topUpLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="topUpLabel">{$MGLANG->T('Top Up Account')}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="topUpAccForm" method="post" action="">
                        <input type="hidden" name="modaction" value="topUpAccount" />
                        <div class="modal-body" style="text-align: center">
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$MGLANG->T('Amount of Credits to Add Up')}: </label>
                                <input class="form-control" id="topUpAmount" name="topUpAmount" type="number" min="1" max="99999999" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{$MGLANG->T('Close')}</button>
                            <button id="topUpAccSubmitBtn" type="submit" class="btn btn-info">{$MGLANG->T('Generate Invoice')} <i class="fas fa-arrow-circle-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {foreach from=$summations item=summation}
        <div class="modal fade" id="summation{$summation->id}" tabindex="-1" role="dialog" aria-labelledby="summation{$summation->id}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="summation{$summation->id}Label">{$MGLANG->T('Summation')} {$summation->date}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td>{$MGLANG->T("Description")}</td>
                                <td>{$MGLANG->T("Price")}</td>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$summationItems[$summation->id] item=summationItem}
                                <tr>
                                    <td>{$summationItem->description}</td>
                                    <td>{$summationItem->amount}</td>
                                </tr>
                            {/foreach}
                            </tbody>
                            <tr>
                                <td></td>
                                <td>{$summation->total}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{$MGLANG->T('Close')}</button>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}

    <literal>
        <script>
            $(document).ready( function () {
                $('#summationsTable').DataTable({
                    "info": false,
                    "columns": [
                        null,
                        null,
                        { "orderable": false, "searchable": false }
                    ]
                });

                $( "#topUpAccSubmitBtn" ).click(function( event ) {
                    if($('#frmConfigureProduct').length > 0) {
                        $(this).find('i').removeClass('fa-arrow-circle-right').addClass('fa-spinner fa-spin');
                        event.preventDefault();
                        $.ajax({
                            url: 'clientarea.php',
                            type: 'POST',
                            data: $('#frmConfigureProduct').serialize(),
                            success: function (data) {
                                $(location).attr('href', 'viewinvoice.php?id=' + data)
                            }
                        });
                    }
                });
            });
        </script>
    </literal>
    {/if}
{/if}
