<link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/supportticketlist.css" />
<div class="section">
    <div class="section-header">
        <p class="section-desc">{$LANG.supportticketssystemdescription}</p>
    </div>
    <div class="section-body">
        <link rel="stylesheet" type="text/css" href="{$BASE_PATH_CSS}/dataTables.responsive.css">   
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>
        <div class="table-container loading clearfix">
            <table class="table table-list dataTable">
                <thead>
                    <tr>
                        <th>{$LANG.supportticketssubject}</th>
                        <th style="max-width: 200px;">{$LANG.supportticketsdepartment}</th>
                        <th style="max-width: 150px;">{$LANG.supportticketsstatus}</th>
                        <th style="max-width: 150px;">{$LANG.supportticketsticketurgency}</th>
                        <th style="max-width: 150px;">{$LANG.supportticketsticketlastupdated}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <div class="loader loader-table" id="tableLoading">
                {include file="$template/includes/common/loader.tpl"}   
            </div>
        </div>

        <div class="message message-no-data hidden" id="tableNoData">
            <div class="message-image">
                {include file="$template/includes/common/svg-icon.tpl" icon="ticket"}
            </div>
            <h6 class="message-title">{$rslang->trans('nodata.no_recent_tickets')}</h6>
            <div class="message-action">
                <a class="btn btn-primary" href="{$WEB_ROOT}/submitticket.php">
                    {$LANG.supportticketssubmitticket}
                </a>
            </div>
        </div>
        
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('.dataTable').DataTable({
            ajax: '',
            columnDefs: [
                { orderable: false, targets: [1, 2, 3] }
            ],
            createdRow: function (row, data) {
                $(row).on('click', function (event) {
                    clickableSafeRedirect(event, 'viewticket.php?number=' + data.RowData.number + '&token=' + data.RowData.token, false)
                });
            },
            dom: '<"listtable"fit>pl',
            order: [[4, 'desc']],
            processing: true,
            serverSide: true,
            info: false,
            responsive: true,
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "{$LANG.tableviewall}"]
            ],
            "oLanguage": {ldelim}
                "sEmptyTable":     "{$LANG.norecordsfound}",
                "sInfo":           "{$LANG.tableshowing}",
                "sInfoEmpty":      "{$LANG.tableempty}",
                "sInfoFiltered":   "{$LANG.tablefiltered}",
                "sInfoPostFix":    "",
                "sInfoThousands":  ",",
                "sLengthMenu":     "{$LANG.tablelength}",
                "sLoadingRecords": "{$LANG.tableloading}",
                "sProcessing":     "{$LANG.tableprocessing}",
                "sSearch":         "",
                "sZeroRecords":    "{$LANG.norecordsfound}",
                "oPaginate": {ldelim}
                    "sFirst":    "{$LANG.tablepagesfirst}",
                    "sLast":     "{$LANG.tablepageslast}",
                    "sNext":     "{$LANG.tablepagesnext}",
                    "sPrevious": "{$LANG.tablepagesprevious}"
                {rdelim}
            {rdelim},
            "initComplete": function(data) {
                if (data?.json?.data?.length > 0){
                    jQuery('.table-container').removeClass('loading');
                    jQuery('#tableLoading').addClass('hidden');
                }
                else{
                    jQuery('.table-container').addClass('hidden');
                    jQuery('#tableNoData').removeClass('hidden');
                }
            }
        });
        $('#table-search').on('keyup', function () {
            table.search(this.value, true).draw();
        });
    });
</script>