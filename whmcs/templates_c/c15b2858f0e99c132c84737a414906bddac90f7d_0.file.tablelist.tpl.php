<?php
/* Smarty version 3.1.48, created on 2024-10-02 05:37:06
  from '/var/www/html/templates/lagom2/includes/tablelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcdc024c76a2_21773659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15b2858f0e99c132c84737a414906bddac90f7d' => 
    array (
      0 => '/var/www/html/templates/lagom2/includes/tablelist.tpl',
      1 => 1726738920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcdc024c76a2_21773659 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/tablelist.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/dataTables.responsive.css">   
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"><?php echo '</script'; ?>
>

    <?php if ((isset($_smarty_tpl->tpl_vars['filterColumn']->value)) && $_smarty_tpl->tpl_vars['filterColumn']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        if (typeof(buildFilterRegex) !== "function") {
            function buildFilterRegex(filterValue) {
                if (filterValue.indexOf('&') === -1) {
                    return '[~>]\\s*' + jQuery.fn.dataTable.util.escapeRegex(filterValue) + '\\s*[<~]';
                } else {
                    var tempDiv = document.createElement('div');
                    tempDiv.innerHTML = filterValue;
                    return '\\s*' + jQuery.fn.dataTable.util.escapeRegex(tempDiv.innerText) + '\\s*';
                }
            }
        }
        jQuery(document).ready(function () {
            if($('.main-content').hasClass('status-icons-enabled')){
                jQuery(".view-filter-btns .dropdown-menu a").click(function(e) {
                    var filterValue = jQuery(this).find("span").data('value');
                    var filterText = jQuery(this).find("span.filter-name").html().trim();
                    var filterIcon = jQuery(this).find("span.status-icon").html().trim();
                    var filterStatusClass = jQuery(this).find("span").data('status-class');
                    var filterStatusColor = jQuery(this).data('status-color');
                    var dataTable = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable();
                    var filterValueRegex;
                    $(this).closest('.dropdown-menu').find('.active').removeClass('active');
                    $(this).parent().addClass('active');
                    $(this).closest('.view-filter-btns').find('.dropdown-toggle span.filter-name').html(filterText);
                    $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status-icon').attr('class','status-icon').addClass('status-'+filterStatusClass).html(filterIcon);
                    if (filterValue == "all") {
                        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
).search('').draw();
                        $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').addClass('hidden');
                        } else {
                        if (filterStatusColor != undefined){ 
                            $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').attr('style','--status-color:'+filterStatusColor).removeClass('hidden');
                        } else { 
                            $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').addClass('status-'+filterStatusClass).removeClass('hidden');
                        }

                        if (filterValue != undefined){ 
                            filterValueRegex = buildFilterRegex(filterValue);
                        } else { 
                            filterValueRegex = buildFilterRegex(filterText);
                        }

                        dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
)
                            .search(filterValueRegex, true, false, false)
                            .draw();
                    }
                    // Prevent jumping to the top of the page
                    // when no matching tag is found.
                    e.preventDefault();
                    
                });

            }else{
                jQuery(".view-filter-btns .dropdown-menu a").click(function(e) {
                var filterValue = jQuery(this).find("span").data('value');
                var filterText = jQuery(this).find("span").html().trim();
                var filterStatusClass = jQuery(this).find("span").data('status-class');
                var filterStatusColor = jQuery(this).data('status-color');
                var dataTable = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable();
                var filterValueRegex;

                $(this).closest('.dropdown-menu').find('.active').removeClass('active');
                $(this).parent().addClass('active');
                $(this).closest('.view-filter-btns').find('.dropdown-toggle span:not(.status)').text(filterText);
                if (filterValue == "all") {
                    dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
).search('').draw();
                    $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').addClass('hidden');
                    } else {
                    if (filterStatusColor != undefined){ 
                        $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').attr('style','--status-color:'+filterStatusColor).removeClass('hidden');
                    } else { 
                        $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').attr('class','status').addClass('status-'+filterStatusClass).removeClass('hidden');
                    }

                     if (filterValue != undefined){ 
                        filterValueRegex = buildFilterRegex(filterValue);
                    } else { 
                        filterValueRegex = buildFilterRegex(filterText);
                    }

                    dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
)
                        .search(filterValueRegex, true, false, false)
                        .draw();
                }
                // Prevent jumping to the top of the page
                // when no matching tag is found.
                e.preventDefault();
                
            });
            }
           
        });
       
    

        jQuery(document).ready(function () {
            jQuery(".sidebar .view-filter-btns a").click(function (e) {
                var filterValue = jQuery(this).find("span").not('.badge').html().trim(),
                    dataTable = jQuery('#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
').DataTable(),
                    filterValueRegex;
                if (jQuery(this).hasClass('active')) {
                    <?php if (!(isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value)) || !$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
                        jQuery(this).removeClass('active');                    
                    <?php }?>
                    dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
).search('').draw();
                } else {
                    <?php if (!(isset($_smarty_tpl->tpl_vars['dontControlActiveClass']->value)) || !$_smarty_tpl->tpl_vars['dontControlActiveClass']->value) {?>
                        jQuery('.view-filter-btns .list-group-item').removeClass('active');                    
                        jQuery(this).addClass('active');
                    <?php }?>
                    filterValueRegex = buildFilterRegex(filterValue);
                    dataTable.column(<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
)
                        .search(filterValueRegex, true, false, false)
                        .draw();
                }

                // Prevent jumping to the top of the page when no matching tag is found.
                e.preventDefault();
            });
        });
        <?php echo '</script'; ?>
>   
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function checkAll(){
            let checkAll = $('#selectAll');
            let checkboxes = $('.domids').not(':disabled');
            checkAll.on('ifChecked ifUnchecked', function(e) {
                if (e.type == 'ifChecked') {
                    checkboxes.iCheck('check');
                } else {
                    checkboxes.iCheck('uncheck');
                }
            });
            checkboxes.on('ifChanged', function(e){
                if(checkboxes.filter(':checked').length > 0){
                    $('#domainSelectedCounter').addClass('badge-primary');
                    $('.bottom-action-sticky').removeClass('hidden');           
                }
                else{
                    $('#domainSelectedCounter').removeClass('badge-primary');
                    $('.bottom-action-sticky').addClass('hidden');   
                }
                $('#domainSelectedCounter').text(checkboxes.filter(':checked').length);
                if(checkboxes.filter(':checked').length == checkboxes.length) {
                    checkAll.prop('checked', 'checked');
                } else {
                    checkAll.removeProp('checked');
                }
                checkAll.iCheck('update');
            });
        };

        var alreadyReady = false; // The ready function is being called twice on page load.

        <?php if ($_smarty_tpl->tpl_vars['saveState']->value) {?>
            var saveState = <?php echo $_smarty_tpl->tpl_vars['saveState']->value;?>

        <?php } else { ?>
            var saveState = true;
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_table_cache'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['enable_table_cache'] == "displayed") {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['table_cache_duration']))) {?>
                <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['table_cache_duration'] == "disabled") {?>
                    var saveState = false;
                    var stateDuration = 7200;
                    var noStartFilters = true;
                <?php } else { ?>
                    var stateDuration = <?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['table_cache_duration'];?>

                    var noStartFilters = false;
                <?php }?>
            <?php } else { ?>
                var stateDuration = 7200;
                var noStartFilters = false;
            <?php }?>
        <?php } else { ?>
            var noStartFilters = false;
            var stateDuration = 7200;
        <?php }?>

        jQuery(document).ready( function () {

            var table = jQuery("#table<?php echo $_smarty_tpl->tpl_vars['tableName']->value;?>
").DataTable({
                "dom": '<"listtable"fit>pl',<?php if ((isset($_smarty_tpl->tpl_vars['noPagination']->value)) && $_smarty_tpl->tpl_vars['noPagination']->value) {?>
                "paging": false,<?php }?>
                "info": false,<?php if ((isset($_smarty_tpl->tpl_vars['noSearch']->value)) && $_smarty_tpl->tpl_vars['noSearch']->value) {?>
                "filter": false,<?php }?>
                "responsive": true,
                "oLanguage": {
                    "sEmptyTable":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
                    "sInfo":           "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableshowing'];?>
",
                    "sInfoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableempty'];?>
",
                    "sInfoFiltered":   "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablefiltered'];?>
",
                    "sInfoPostFix":    "",
                    "sInfoThousands":  ",",
                    "sLengthMenu":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablelength'];?>
",
                    "sLoadingRecords": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableloading'];?>
",
                    "sProcessing":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableprocessing'];?>
",
                    "sSearch":         "",
                    "sZeroRecords":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['norecordsfound'];?>
",
                    "oPaginate": {
                        "sFirst":    "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesfirst'];?>
",
                        "sLast":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepageslast'];?>
",
                        "sNext":     "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesnext'];?>
",
                        "sPrevious": "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tablepagesprevious'];?>
"
                    }
                },
                "pageLength": 10,
                "order": [
                    [ <?php if ((isset($_smarty_tpl->tpl_vars['startOrderCol']->value)) && $_smarty_tpl->tpl_vars['startOrderCol']->value) {
echo $_smarty_tpl->tpl_vars['startOrderCol']->value;
} else { ?>0<?php }?>, "asc" ]
                ],
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['tableviewall'];?>
"]
                ],
                "aoColumnDefs": [
                    {
                        "bSortable": false,
                        "aTargets": [ <?php if ((isset($_smarty_tpl->tpl_vars['noSortColumns']->value)) && $_smarty_tpl->tpl_vars['noSortColumns']->value !== '') {
echo $_smarty_tpl->tpl_vars['noSortColumns']->value;
}?> ]
                    },
                    {
                        "sType": "string",
                        "aTargets": [ <?php if ((isset($_smarty_tpl->tpl_vars['filterColumn']->value)) && $_smarty_tpl->tpl_vars['filterColumn']->value) {
echo $_smarty_tpl->tpl_vars['filterColumn']->value;
}?> ]
                    }
                ],
                "stateSave": saveState,
                "stateDuration": stateDuration,
                "autoWidth": false,
            });
               
            <?php if ((isset($_smarty_tpl->tpl_vars['filterColumn']->value)) && $_smarty_tpl->tpl_vars['filterColumn']->value) {?>
            // highlight remembered filter on page re-load
            if (!noStartFilters){
                var rememberedFilterTerm = table.state().columns[<?php echo $_smarty_tpl->tpl_vars['filterColumn']->value;?>
].search.search;
            }
            if (rememberedFilterTerm && !alreadyReady) {
                // This should only run on the first "ready" event.
                if($('.main-content').hasClass('status-icons-enabled')){
                    jQuery(".view-filter-btns a > span").each(function(index) {
                        if (buildFilterRegex(jQuery(this).text().trim()) == rememberedFilterTerm) {
                            var filterValue = jQuery(this).data('value');
                            var filterStatusClass = jQuery(this).data('status-class');
                            var filterStatusColor = jQuery(this).parent().data('status-color');
                            var filterFullStatusClass = 'status-' + filterStatusClass;
                            var ifTicket = jQuery(this).data('status');
                            $(this).closest('li').addClass('active');
                            var icon = $(this).find('.status-icon').html();

                            $(this).closest('.view-filter-btns').find('.dropdown-toggle span:not(.status)').text(jQuery(this).text());
                            $('<span class="status-icon"></span>').insertAfter($(this).closest('.view-filter-btns').find('.dropdown-toggle span.status'));
                            if(ifTicket == 'ticket'){
                                $(this).closest('.view-filter-btns').find('.dropdown-toggle .status-icon').addClass(filterFullStatusClass).attr('data-status', 'ticket').append(icon);
                            }else{
                                $(this).closest('.view-filter-btns').find('.dropdown-toggle .status-icon').addClass(filterFullStatusClass).append(icon);
                            }
                            
                            if (filterStatusColor != 'undefined') {
                                $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').attr('style','--status-color:'+filterStatusColor).removeClass('hidden');
                            } 
                            else {
                                $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').addClass('status-'+filterStatusClass).removeClass('hidden');
                            }
                        }
                    });
                }else{
                    jQuery(".view-filter-btns a span").each(function(index) {
                        if (buildFilterRegex(jQuery(this).text().trim()) == rememberedFilterTerm) {
                            var filterValue = jQuery(this).data('value');
                            var filterStatusClass = jQuery(this).data('status-class');
                            var filterStatusColor = jQuery(this).parent().data('status-color');

                            $(this).closest('li').addClass('active');
                            $(this).closest('.view-filter-btns').find('.dropdown-toggle span:not(.status)').text(jQuery(this).text());
                            if (filterStatusColor != undefined) {
                                $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').attr('style','--status-color:'+filterStatusColor).removeClass('hidden');
                            } 
                            else {
                                $(this).closest('.view-filter-btns').find('.dropdown-toggle span.status').addClass('status-'+filterStatusClass).removeClass('hidden');
                            }
                        }
                    });
                }
            }
            <?php }?>
            alreadyReady = true;
            if ($('#table-search').length > 0 && $('.dataTables_filter').length > 0){
                var searchTableVal = $('.dataTables_filter input').val();
                $('#table-search').val(searchTableVal);
                var searchVal = $('#table-search').val();
                table.search(searchVal, true).draw();
            }

            $('#table-search').on('keyup', function () {
                table.search(this.value, true).draw();
            });
            table.on('draw.dt', function () {
                $('body').find('input:not(.icheck-input):not(.switch__checkbox)').iCheck({
                    checkboxClass: 'checkbox-styled',
                    radioClass: 'radio-styled',
                    increaseArea: '40%'
                });
                checkAll();

            });  

            $('[data-inactive-services-checkbox]').on('change', function(){
                if ($(this)[0].checked === true) {
                    table.column(0).search("lagomshowservice", true, false, false).draw();      
                }
                else {
                    table.column(0).search("", true, false, false).draw();    
                }
            });
            
            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareaproducts") {?>
                <?php if (!$_smarty_tpl->tpl_vars['hideInactiveServices']->value['inactiveServices'] && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServices'] == "1" && !empty($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServicesStatus'])) {?>
                    table.column(0).search("lagomshowservice", true, false, false).draw();    
                <?php } else { ?>
                    table.column(0).search("", true, false, false).draw();     
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientareadomains") {?>
                <?php if (!$_smarty_tpl->tpl_vars['hideInactiveServices']->value['inactiveDomains'] && (isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServices'] == "1" && !empty($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideInactiveServicesStatus'])) {?>
                    table.column(0).search("lagomshowservice", true, false, false).draw();    
                <?php } else { ?>
                    table.column(0).search("", true, false, false).draw();     
                <?php }?>
            <?php }?>
        });

    <?php echo '</script'; ?>
>
<?php }
}
}
