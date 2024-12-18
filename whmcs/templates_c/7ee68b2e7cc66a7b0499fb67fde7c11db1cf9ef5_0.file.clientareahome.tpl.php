<?php
/* Smarty version 3.1.48, created on 2024-12-13 04:36:08
  from '/var/www/html/templates/lagom2/clientareahome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675bb9b8e86c65_65227138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee68b2e7cc66a7b0499fb67fde7c11db1cf9ef5' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareahome.tpl',
      1 => 1733998025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675bb9b8e86c65_65227138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'outputHomePanels' => 
  array (
    'compiled_filepath' => '/var/www/html/templates_c/7ee68b2e7cc66a7b0499fb67fde7c11db1cf9ef5_0.file.clientareahome.tpl.php',
    'uid' => '7ee68b2e7cc66a7b0499fb67fde7c11db1cf9ef5',
    'call_name' => 'smarty_template_function_outputHomePanels_416271710675bb9b8dc4184_06856658',
  ),
));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panels']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Overdue Invoices" || $_smarty_tpl->tpl_vars['item']->value->getName() == "Domains Expiring Soon") {?>
            <?php $_smarty_tpl->_assignInScope('clienthomealerts', true);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['clienthomealerts']->value && $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['clientareahome']['config']['hideDefaultAlerts'] != '1') {?>
        <div class="client-home-alerts alert-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panels']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['clienthomealertscookies']->value[$_smarty_tpl->tpl_vars['item']->value->getId()])) && ($_smarty_tpl->tpl_vars['item']->value->getName() == "Overdue Invoices" || $_smarty_tpl->tpl_vars['item']->value->getName() == "Unpaid Invoices" || $_smarty_tpl->tpl_vars['item']->value->getName() == "Domains Expiring Soon")) {?>
                        <div class="alert alert-lagom alert-warning alert-faded client-home-alert elooo" data-alert-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"
                            href="<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Overdue Invoices") {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices<?php } else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php?rp=/cart/domain/renew<?php }?>">
                            <span class="alert-icon ls ls-exclamation-circle"></span>
                            <div class="alert-body"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBodyHtml();?>
</div>
                            <div class="alert-actions">
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('btn-link')) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['clientareahome']['config']['showAlertButtons']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Overdue Invoices" || $_smarty_tpl->tpl_vars['item']->value->getName() == "Unpaid Invoices") {?>
                                            <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices" data-boundary="window">
                                                <i class="ls ls-wallet"></i>
                                                <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespaynow'];?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php?rp=/cart/domain/renew" data-boundary="window">
                                                <i class="ls ls-refresh"></i>
                                                <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenew'];?>
</span>
                                            </a>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Overdue Invoices" || $_smarty_tpl->tpl_vars['item']->value->getName() == "Unpaid Invoices") {?>
                                            <a class="btn btn-sm btn-icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices"
                                            data-toggle="tooltip" data-placement="top" data-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespaynow'];?>
"
                                            data-boundary="window"><i class="ls ls-wallet"></i></a>
                                        <?php } else { ?>
                                            <a class="btn btn-sm btn-icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php?rp=/cart/domain/renew"
                                            data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenew'];?>
" data-boundary="window"
                                            data-original-title="" title=""><i class="ls ls-refresh"></i></a>
                                        <?php }?>
                                    <?php }?>

                                <?php }?>
                                <button class="btn btn-sm btn-icon btn-close-alert" type="button" data-dismiss="alert" data-toggle="tooltip"
                                        data-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclose'];?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclose'];?>
"
                                        data-boundary="window"><i class="ls ls-close"></i></button>
                            </div>
                        </div>
                    <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_html']->value[0]['RSMarketConnectServices'], 'addon');
$_smarty_tpl->tpl_vars['addon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['addon']->value['settings']['promotion']['client-home'] == true) {?>
            <?php $_smarty_tpl->_assignInScope('hasDashboardPrormo', true);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['promoSliderExtension']->value && $_smarty_tpl->tpl_vars['promoBannerStatus']->value == '1') {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promo-slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"client-home"), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['hasDashboardPrormo']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/promo-slider/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"client-home"), 0, true);
?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/flashmessage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="tiles swiper-container">
        <div class="row swiper-wrapper">
            <div class="col-md-3 swiper-slide" onclick="window.location='clientarea.php?action=services'">
                <a class="tile" href="clientarea.php?action=services">
                    <div class="tile-icon-absolute"><i class="ls ls-hosting"></i></div>
                    <div class="tile-stat"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['productsnumactive'];?>
</div>
                    <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservices'];?>
</div>
                </a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <div class="col-md-3 swiper-slide" onclick="window.location='clientarea.php?action=domains'">
                    <a class="tile" href="clientarea.php?action=domains">
                        <div class="tile-icon-absolute"><i class="ls ls-dns"></i></div>
                        <div class="tile-stat"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numactivedomains'];?>
</div>
                        <div class="tile-title"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomains'];?>
</div>
                    </a>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['condlinks']->value['affiliates'] && $_smarty_tpl->tpl_vars['clientsstats']->value['isAffiliate']) {?>
                <div class="col-md-3 swiper-slide" onclick="window.location='affiliates.php'">
                    <a class="tile" href="affiliates.php">
                        <div class="tile-icon-absolute"><i class="ls ls-wallet"></i></div>
                        <div class="tile-stat"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numaffiliatesignups'];?>
</div>
                        <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatessignups'];?>
</div>
                    </a>
                </div>
            <?php } else { ?>
                <div class="col-md-3 swiper-slide" onclick="window.location='clientarea.php?action=quotes'">
                    <a class="tile" href="clientarea.php?action=quotes">
                        <div class="tile-icon-absolute"><i class="ls ls-document"></i></div>
                        <div class="tile-stat"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numquotes'];?>
</div>
                        <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotes'];?>
</div>
                    </a>
                </div>
            <?php }?>
            <div class="col-md-3 swiper-slide" onclick="window.location='clientarea.php?action=invoices'">
                <a class="tile" href="clientarea.php?action=invoices">
                    <div class="tile-icon-absolute">
                        <?php if (($_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'] > 0)) {?>
                            <i class="icon-alert ls ls-exclamation-circle text-danger"></i>
                        <?php } else { ?>
                            <i class="icon-default ls ls-document"></i>    
                        <?php }?>
                    </div>
                    <div class="tile-stat <?php if (($_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'] > 0)) {?>text-danger<?php }?>"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'];?>
</div>
                    <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientHomePanels']['unpaidInvoices'];?>
</div>
                </a>
            </div>
            <div class="col-md-3 swiper-slide" onclick="window.location='supporttickets.php'">
                <a class="tile" href="supporttickets.php">
                    <div class="tile-icon-absolute"><i class="ls ls-ticket-tag"></i></div>
                    <div class="tile-stat"><?php if ($_smarty_tpl->tpl_vars['supportPalactiveTicketsNum']->value) {
echo $_smarty_tpl->tpl_vars['supportPalactiveTicketsNum']->value;
} else {
echo $_smarty_tpl->tpl_vars['clientsstats']->value['numactivetickets'];
}?></div>
                    <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>
</div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
   
    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
        <?php $_smarty_tpl->_assignInScope('clientID', $_smarty_tpl->tpl_vars['client']->value['id']);?>
        <div class="table-container">
            <!-- First Section: Ocean VoIP Agent Call Details -->
            <div class="panel-heading">
                <h5 class="panel-title">
                    <i class="fas fa-phone-alt" style="margin-right: 8px;"></i>
                    Reports/Ocean VoIP Agent (CDR)
                </h5>
            </div>
            <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document" style="width:1100px">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailsModalLabel">Call Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Table for displaying call details -->
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Caller</th>
                                        <th>Receiver</th>
                                        <th>Status</th>
                                        <th>Call Duration/BillSec</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="modalCaller">+451248752</td>
                                        <td id="modalReceiver">+84955425</td>
                                        <td id="modalStatus">Answerd</td>
                                        <td id="modalDuration">1min</td>
                                        <td id="modalDate">02/10/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="call-recorder">
                                <button id="playCallRecording" class="btn btn-primary">
                                    <i class="fa fa-play"></i> Play Call Recording
                                </button>
                                <audio id="callRecordingAudio" controls style="display: none; margin-top: 10px; width: 100%;">
                                    <source id="audioSource" src="">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <!-- Call Transcript Section -->
                            <div class="form-group" style="margin-top: 20px;">
                                <label for="callTranscript">Call Transcript</label>
                                <textarea id="callTranscript" class="form-control" rows="6" placeholder="Call transcript will appear here..." readonly></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tableServicesList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="listtable">
                    <div id="tableServicesList_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableServicesList"></label></div>
                        <table id="tableServicesList" class="table tableServiceBoth table-list dataTable no-footer dtr-inline" role="grid">
                            <thead>
                                <tr role="row">
                                    <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="tableServicesList" rowspan="1" colspan="1" aria-label="Product/Service: activate to sort column descending" aria-sort="ascending"><button type="button" class="btn-table-collapse"></button>Caller<span class="sorting-arrows"></span></th>
                                    <th data-priority="3" class="sorting" tabindex="0" aria-controls="tableServicesList" rowspan="1" colspan="1" aria-label="Pricing: activate to sort column ascending">Receiver<span class="sorting-arrows"></span></th>
                                    <th data-priority="5" class="sorting" tabindex="0" aria-controls="tableServicesList" rowspan="1" colspan="1" aria-label="Pricing: activate to sort column ascending">Status<span class="sorting-arrows"></span></th>
                                    <th data-priority="4" class="sorting" tabindex="0" aria-controls="tableServicesList" rowspan="1" colspan="1" aria-label="Next Due Date: activate to sort column ascending">DateTime<span class="sorting-arrows"></span></th>
                                    <th data-priority="2" class="sorting" tabindex="0" aria-controls="tableServicesList" rowspan="1" colspan="1" aria-label="&amp;nbsp;: activate to sort column ascending">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br></br>
            <div class="table-container">
                    <!-- Second Section: AI Assistant for Real Estate Call Details -->
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <i class="fas fa-user-tie" style="margin-right: 8px;"></i>
                            Reports/AI Assistant Real Estate Agent (CDR)
                        </h5>
                    </div>
                    <!-- AI Assistant for Real Estate Table -->
                    <div id="tableServicesListWrapperAIRealEstate" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="listtable">
                            <div id="tableServicesListFilterAIRealEstate" class="dataTables_filter">
                                <label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableServicesListAIRealEstate"></label>
                            </div>
                            <table id="tableServicesListAIRealEstate" class="table tableServiceBoth table-list dataTable no-footer dtr-inline" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th>Caller</th>
                                        <th>Receiver</th>
                                        <th>Status</th>
                                        <th>DateTime</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- AI Assistant for Real Estate Data -->
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <br></br>
                
            <?php echo '<script'; ?>
>
                $(document).ready(function() {
                    var clientID = "<?php echo $_smarty_tpl->tpl_vars['clientID']->value;?>
";

                    // Fetch data once and split it into two arrays based on 'userfield'
                    $.ajax({
                        "url": "https://oceanpbx.club/includes/api/fetchcdrdetails.php",
                        "type": "POST",
                        "data": {
                            action: "GetCDRDetails",
                            accountcode: clientID
                        },
                        success: function(response) {
                            let parsedResponse;
                            try {
                                parsedResponse = typeof response === "string" ? JSON.parse(response) : response;
                            } catch (error) {
                                console.error("Failed to parse response:", error);
                                return;
                            }
                            console.log("parsedResponse",parsedResponse);
                            if (parsedResponse.status === "success") {
                                console.log("data",parsedResponse.data);
                                if (parsedResponse.data.voipAgent.length > 0 ) {
                                    initializeDataTable('#tableServicesList', parsedResponse.data.voipAgent);
                                } else {
                                    $('#tableServicesList tbody').html('<tr><td colspan="5">No VoIP Agent Call Details available.</td></tr>');
                                }
                                if (parsedResponse.data.aiRealEstate.length > 0 ) {
                                    initializeDataTable('#tableServicesListAIRealEstate', parsedResponse.data.aiRealEstate);
                                } else {
                                    $('#tableServicesListAIRealEstate tbody').html('<tr><td colspan="5">No AI Assistant Real Estate Agent Call Details available.</td></tr>');
                                }
                                
                            } else {
                                console.log("Failed to fetch data. Status:", parsedResponse.status);
                            }
                        }
                    });

                    function initializeDataTable(tableId, data) {
                        $(tableId).DataTable({
                            "data": data,
                            "paging": true,
                            "lengthChange": true,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "pageLength": 2,
                            "lengthMenu": [2, 10, 25, 50, 100],
                            "order": [[3, 'desc']],
                            "columns": [
                                { "data": "src" },
                                { "data": "dst" },
                                { "data": "disposition" },
                                { 
                                    "data": "calldate", 
                                    "render": function (data, type, row) {
                                        return formatDate(data);
                                    }
                                },
                                { 
                                    "data": null, 
                                    "render": function (data, type, row) {
                                        return '<div class="dropdown">' +
                                            '<a href="#" class="btn btn-icon dropdown-toggle" data-bs-toggle="dropdown">' +
                                                '<i class="lm lm-more"></i>' +
                                            '</a>' +
                                            '<ul class="dropdown-menu pull-right" role="menu">' +
                                                '<li><a href="#">View Details</a></li>' +
                                            '</ul>' +
                                        '</div>';
                                    }
                                }
                            ],
                            "createdRow": function(row, data) {
                                $(row).attr('role', 'row')
                                    .attr('data-id', data.id)
                                    .attr('data-caller', data.src)
                                    .attr('data-receiver', data.dst)
                                    .attr('data-date', formatDate(data.calldate))
                                    .attr('data-duration', data.billsec)
                                    .attr('data-status', data.disposition)
                                    .attr('data-recording-url', data.recordingfile);
                            },
                            "responsive": true,
                        });
                    }
                   
                    $('.tableServiceBoth').on('click', 'tbody tr', function() {
                        var caller = $(this).data('caller');
                        var receiver = $(this).data('receiver');
                        var date = $(this).data('date');
                        var duration = $(this).data('duration');
                        var status = $(this).data('status');
                        var recordingUrl = $(this).data('recording-url');
                        $('#modalCaller').text(caller);
                        $('#modalReceiver').text(receiver);
                        $('#modalDate').text(date);
                        $('#modalDuration').text(duration);
                        $('#modalStatus').text(status);
                        var parts = date.split(' ')[0].split('/'); 
                        var year = parts[2];
                        var month = parts[0].padStart(2, '0');
                        var day = parts[1].padStart(2, '0');
                        var baseRecordingUrl = 'https://pbx7.oceanpbx.club/files/'; 
                        var recordingUrlBase = baseRecordingUrl + year + '/' + month + '/' + day + '/' + recordingUrl;
                        $('#audioSource').attr('src', recordingUrlBase);
                        $('#callRecordingAudio').show();
                        $('#detailsModal').modal('show');
                    });
                    $('#playCallRecording').on('click', function() {
                        $('#callRecordingAudio')[0].load(); 
                        $('#callRecordingAudio')[0].play(); 
                    });
                });
                function formatDate(dateString) {
                    const date = new Date(dateString);
                    return date.toLocaleDateString() + ' ' + date.toLocaleTimeString();
                }
            <?php echo '</script'; ?>
>
    <?php } else { ?>
        <p>Please log in to view your client information.</p>
    <?php }?>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons_html']->value, 'addon_html', false, 'k');
$_smarty_tpl->tpl_vars['addon_html']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->do_else = false;
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['addon_html']->value) && !strstr($_smarty_tpl->tpl_vars['addon_html']->value,"data-animation-content")) {?>
            <div><?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>
</div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    <div class="client-home-panels row" data-panels-grid>
        
        <div class="col-md-6 column-sizer"></div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panels']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('colspan') && $_smarty_tpl->tpl_vars['item']->value->getName() != "Sitejet Builder") {?>
                <div class="col-md-12">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'outputHomePanels', array(), true);?>

                </div>
                <?php $_smarty_tpl->_assignInScope('panels', $_smarty_tpl->tpl_vars['panels']->value->removeChild($_smarty_tpl->tpl_vars['item']->value->getName()));?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panels']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() != "Overdue Invoices" && $_smarty_tpl->tpl_vars['item']->value->getName() != "Unpaid Invoices" && $_smarty_tpl->tpl_vars['item']->value->getName() != "Domains Expiring Soon") {?>
                <div class="<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Active Products/Services") {?> col-md-12<?php } else { ?>col-md-6 <?php }?>" data-panels-grid-item>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'outputHomePanels', array(), true);?>

                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/ttc_homepage.tpl") && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/ttc_homepageClosed.tpl") && file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/ttc_homepageScript.tpl") && (isset($_smarty_tpl->tpl_vars['TimeTaskManagerAddonIsActive']->value)) && $_smarty_tpl->tpl_vars['TimeTaskManagerAddonIsActive']->value) {?>
        <div>
            <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['template']->value).('/ttc_homepage.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['template']->value).('/ttc_homepageClosed.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['template']->value).('/ttc_homepageScript.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
/* smarty_template_function_outputHomePanels_416271710675bb9b8dc4184_06856658 */
if (!function_exists('smarty_template_function_outputHomePanels_416271710675bb9b8dc4184_06856658')) {
function smarty_template_function_outputHomePanels_416271710675bb9b8dc4184_06856658(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

            <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
"
                 class="panel panel-default panel-accent-<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('color');?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Affiliate Program") {?>panel-affilaite-program panel-info<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Register a New Domain") {?>panel-domain-register<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Recent Support Tickets") {?>panel-support-tickets<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Active Products/Services") {?>panel-active-services<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Sitejet Builder") {?>panel-sitejet-builder<?php }?>  <?php if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}?>"<?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('id');?>
"<?php }?>>
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('btn-link') && $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-text')) {?>
                            <div class="pull-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-link');?>
"
                                   class="btn btn-default bg-color-<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('color');?>
 btn-xs">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('btn-icon')) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-icon');?>
"></i><?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-text');?>

                                </a>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Active Products/Services") {?>
                                <i class="ls ls-hosting"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Recent Support Tickets") {?>
                                <i class="ls ls-ticket-tag"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Recent News") {?>
                                <i class="ls ls-text-cloud"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Affiliate Program") {?>
                                <i class="ls ls-text-cloud"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Register a New Domain") {?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "SitelockLogin") {?>
                                <i class="ls ls-shield"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "SpamexpertsLogin") {?>
                                <i class="ls ls-envelope"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "WeeblyLogin") {?>
                                <i class="ls ls-dashboard"></i>
                            <?php } else { ?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>
                            <?php }?>
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
                    </h5>
                </div>         
                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                    <div class="list-group has-scroll <?php if ($_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class');
}?>">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem');
$_smarty_tpl->tpl_vars['childItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getUri()) {?>
                                <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
"
                                   class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?>
                                   id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                                    <?php if (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareaactive'])."</span>")) {?>
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareaactive'])."'");?>
                                    <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareapending'])."</span>")) {?>    
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareapending'])."'");?>
                                    <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacompleted'])."</span>")) {?>    
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacompleted'])."'");?>
                                    <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareasuspended'])."</span>")) {?>    
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareasuspended'])."'");?>
                                    <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareaterminated'])."</span>")) {?>    
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareaterminated'])."'");?>
                                    <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelled'])."</span>")) {?>    
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareacancelled'])."'");?>
                                    <?php } elseif (strstr($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareafraud'])."</span>")) {?>    
                                        <?php $_smarty_tpl->_assignInScope('childStatus', "title='".((string)$_smarty_tpl->tpl_vars['LANG']->value['clientareafraud'])."'");?>    
                                    <?php }?>
                                    <?php if (strstr($_smarty_tpl->tpl_vars['item']->value->getName(),"Services") || strstr($_smarty_tpl->tpl_vars['item']->value->getName(),"Tickets")) {?>
                                        <?php if (strstr($_smarty_tpl->tpl_vars['item']->value->getName(),"Tickets") && $_smarty_tpl->tpl_vars['ZendeskAddonIsActive']->value) {?>
                                            <span class="status-modern"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),'class="label','class="status'),'status-',''),"background-color","--status-color"),"color:white;",'');?>
</span>
                                        <?php } else { ?>
                                            <span class="status-modern"><b><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),"background-color","--status-color"),'class="label"','class="status"'),'<span class="label pull-right','<span data-toggle="tooltip" data-title class="label pull-right'),"data-title",$_smarty_tpl->tpl_vars['childStatus']->value)," - ","</b> - ");?>
</span>
                                        <?php }?>
                                    <?php } else { ?>
                                        <span class="status-modern"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['childItem']->value->getLabel(),"background-color","--status-color"),'class="label"','class="status"'),'<span class="label pull-right','<span data-toggle="tooltip" data-title class="label pull-right'),"data-title",$_smarty_tpl->tpl_vars['childStatus']->value);?>
</span>
                                    <?php }?>                                  
                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge() && $_smarty_tpl->tpl_vars['item']->value->getName() == "Active Products/Services" && $_smarty_tpl->tpl_vars['RSThemes']->value['pages']['clientareahome']['config']['hideExpiringIn'] != '1') {?>
                                        <span class="status-expiry text-danger"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge() && $_smarty_tpl->tpl_vars['item']->value->getName() != "Active Products/Services") {?>
                                        <span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span>
                                    <?php }?>
                                </a>
                            <?php } else { ?>
                                <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
"class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?> <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages']['clientareahome']['config']['hideExpiringIn'] == '1') {?>hide-expire-status<?php }?>"
                                     id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                    <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?>&nbsp;<span
                                        class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span>
                                    <?php }?>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>    
                <?php if (!$_smarty_tpl->tpl_vars['item']->value->hasBodyHtml() && !$_smarty_tpl->tpl_vars['item']->value->hasChildren() && $_smarty_tpl->tpl_vars['ZendeskAddonIsActive']->value && strstr($_smarty_tpl->tpl_vars['item']->value->getName(),"Tickets")) {?>
                    <div class="panel-body">
                        <div class="no-data">
                            <div class="no-data-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ticket"), 0, true);
?> 
                            </div>
                            <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_recent_tickets');?>
</div>
                            <a href="submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml()) {?>
                    <div class="panel-body <?php if (($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml() && $_smarty_tpl->tpl_vars['ZendeskAddonIsActive']->value && $_smarty_tpl->tpl_vars['item']->value->hasChildren() && strstr($_smarty_tpl->tpl_vars['item']->value->getName(),"Tickets")) || ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml() && $_smarty_tpl->tpl_vars['item']->value->hasChildren() && strstr($_smarty_tpl->tpl_vars['item']->value->getName(),"Services"))) {?>hidden<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Recent News") {?>
                            <div class="no-data">
                                <div class="no-data-icon">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"article"), 0, true);
?> 
                                </div>
                                <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_recent_news');?>
</div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Recent Support Tickets") {?>
                            <div class="no-data">
                                <div class="no-data-icon">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ticket"), 0, true);
?> 
                                </div>
                                <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_recent_tickets');?>
</div>
                                <a href="submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Active Products/Services") {?>
                            <div class="no-data">
                                <div class="no-data-icon">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"service"), 0, true);
?>                                    
                                </div>
                                <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_active_services');?>
</div>
                                <a href="cart.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</a>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == "Unpaid Invoices" && $_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'] == "0") {?>
                            <div class="no-data">
                                <div class="no-data-icon">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invoice"), 0, true);
?>                                     
                                </div>
                                <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_unpaid_invoices');?>
</div>
                            </div>
                        <?php } else { ?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->getBodyHtml(),'name="domain"','name="domain" placeholder="domain name"'),'domain name',$_prefixVariable1);?>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Register a New Domain") {?>
                                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['transferExtend'];?>
*</p>
                            <?php }?>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['item']->value->hasChildren() && $_smarty_tpl->tpl_vars['item']->value->getName() == "Recent News") {?>
                    <div class="panel-body">
                        <div class="no-data">
                            <div class="no-data-icon">
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"article"), 0, true);
?> 
                            </div>
                            <div class="text-light"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('nodata.no_recent_news');?>
</div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->hasFooterHtml()) {?>
                    <div class="panel-footer">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->getFooterHtml();?>

                    </div>
                <?php }?>
            </div>
        <?php
}}
/*/ smarty_template_function_outputHomePanels_416271710675bb9b8dc4184_06856658 */
}
