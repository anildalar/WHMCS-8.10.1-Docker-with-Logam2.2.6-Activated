<div id="Modal" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 40%;">
        <div class="modal-content">
            <div class="modal-header">
                <h3><b>{$MGLANG->T('Changes History')}</b></h3>
            </div>
            <div class="modal-body">
                <table id="historyTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>{$MGLANG->T('Date')}</th>
                            <th>{$MGLANG->T('Type')}</th>
                            <th>{$MGLANG->T('Old Option')}</th>
                            <th>{$MGLANG->T('New Option')}</th>
                            <th>{$MGLANG->T('Message')}</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr data-prototype style='display: none;'>
                            <td data-date></td>
                            <td data-type></td>
                            <td data-oldOption></td>
                            <td data-newOption></td>
                            <td data-status></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer text-center">
                <button type="button" data-dismiss="modal" class="btn btn-default">{$MGLANG->T('Close')}</button>
            </div>
        </div>
    </div>
</div>

{literal}                
<script type="text/javascript">
    function initModal()
    {
        $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
        {
            $('#Modal').modal('show');
        });
    }
    
    $(document).ready(function(){
        jQuery('#historyTable').dataTable({
        bProcessing: true,
        bServerSide: true,
        searching: false,
        autoWidth: false,
        sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=accounts&mg-action=getHistory&extensionPage=ProductAutoUpgrade&json=1&hostingId={/literal}{$hostingId}{literal}",
        ordering: false,
        bPaginate: true,
        pagingType: "simple_numbers",
        columns: [
            { data: "date" },
            { data: "type" },
            { data: "old" },
            { data: "new" },
            { data: "message" }
        ],
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