<div id="MGPanel" class="panel panel-default MGPanelExtension">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Resource Usage Chart')}
            <a class="pull-right" href="#" id="showUsageRecordsGraph">{$MGLANG->T('Show')}</a>
            <a class="pull-right" href="#" style="display: none;" id="hideUsageRecordsGraph">{$MGLANG->T('Hide')}</a>
        </h3>
    </div>

    <div class="panel-body" id="usageRecordsGraph" style="display: none;">
        {if $dataFilteringType == 'dropdown'}
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 graphs-date-label">
                <label class="label-control pull-right">{$MGLANG->T('Resources')}</label>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-8 col-xs-8">
                <div class="form-group">
                    <select class="form-control" id="resourcesoption">
                        {assign var=unit value="null"}
                        {foreach from=$resources key=k  item=resource}

                            {if $unit eq 'null'}{assign var=unit value=$resource.unit }{/if}
                            {if $k eq 0}
                                <option data-unit="{$resource.unit}" value='{$resource.name}' selected>
                                    {$MGLANG->missingLangT($resource.friendlyName)} ({$MGLANG->missingLangT($resource.unit)})
                                </option>
                            {else}
                                <option data-unit="{$resource.unit}" value='{$resource.name}'>
                                    {$MGLANG->missingLangT($resource.friendlyName)} ({$MGLANG->missingLangT($resource.unit)})
                                </option>
                            {/if}

                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 graphs-date-label">
                <label class="label-control pull-right">{$MGLANG->T('From')}</label>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-8 col-xs-8">
                <div class="form-group">
                    <div class='input-group date' id='startDate'>
                        <input type='text' class="form-control" value="{$defaultStartDate}"/>
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 graphs-date-label">
                <label class="label-control pull-right">{$MGLANG->T('To')}</label>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-8 col-xs-8">
                <div class="form-group">
                    <div class='input-group date' id='endDate'>
                        <input type='text' class="form-control" value="{$defaultEndDate}"/>
                        <span class="input-group-addon">
                             <span class="fa fa-calendar"></span>
                         </span>
                    </div>
                </div>
            </div>
        </div>

        {else}
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 graphs-date-label">
                <label class="label-control pull-right">{$MGLANG->T('From')}</label>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9">
                <div class="form-group">
                    <div class='input-group date' id='startDate'>
                        <input type='text' class="form-control" value="{$defaultStartDate}"/>
                        <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 graphs-date-label">
                <label class="label-control pull-right">{$MGLANG->T('To')}</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9">
                <div class="form-group">
                    <div class='input-group date' id='endDate'>
                        <input type='text' class="form-control" value="{$defaultEndDate}"/>
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <label class="label-control">{$MGLANG->T('Resources')}</label>
        </div>

        <div class="row">
            <fieldset id="resources" style="display: inline-block;">
                {assign var=unit value="null"}
                {foreach from=$resources item=resource}
                    {if $unit eq 'null'}{assign var=unit value=$resource.unit }{/if}
                    <div class="col-md-4">
                        <label>
                            <input type='checkbox' class="graph-input" data-unit="{$resource.unit}" value='{$resource.name}' {*if $resource.unit eq $unit}checked="checked"{else}disabled{/if*} />
                            {$MGLANG->missingLangT($resource.friendlyName)} ({$MGLANG->missingLangT($resource.unit)})
                        </label>
                    </div>
                {/foreach}
            </fieldset>
        </div>

        {/if}
        <div class="row">
            <div class="chart" style="min-height: 500px; position: relative;">

            </div>
        </div>
    </div>
</div>

{literal}
    <style>
        #MGPanel .row {
            margin-bottom: 10px;
        }
        .tick line{
            opacity: 0.2;
        }

        #resources{
            width: 90%;
            margin: 0 30px;
        }

        #resources label
        {
            display: inline !important;
            font-weight: normal;
        }

        .legend rect {
            fill:white;
            stroke:black;
            opacity:0.8;
        }

    </style>
{/literal}



{literal}
    <script>
        $(function(){
            $("#showUsageRecordsGraph").click(function(event){
                event.preventDefault();
                $(this).hide();
                $("#hideUsageRecordsGraph").show();
                $("#usageRecordsGraph").show();
                updateGraph();
            });

            $("#hideUsageRecordsGraph").click(function(event){
                event.preventDefault();
                $(this).hide();
                $("#showUsageRecordsGraph").show();
                $("#usageRecordsGraph").hide();
                updateGraph();
            });
        });
    </script>
{/literal}

{literal}
<script type="text/javascript">
    $(function () {
        $('#startDate').datetimepicker({
            format: "YYYY-MM-DD"
        });
        $('#endDate').datetimepicker({
            format: "YYYY-MM-DD",
            useCurrent: false //Important! See issue #1075
        });
        $("#startDate").on("dp.change", function (e) {
            $('#endDate').data("DateTimePicker").minDate(e.date);
        });
        $("#endDate").on("dp.change", function (e) {
            $('#startDate').data("DateTimePicker").maxDate(e.date);
        });
        $('#startDate').data("DateTimePicker").useCurrent('month');
        $('#endDate').data("DateTimePicker").useCurrent('day');
    });

    $("#resources input").on("click", function(){
        if($(this).is(":checked"))
        {
            var checkedUnit = $(this).data('unit');
            $("#resources input").each(function(){
                if($(this).data('unit') !== checkedUnit)
                {
                    $(this).attr("checked", false);
                }
            });
        }
        else
        {
            if($("#resources input:checked").length < 1)
            {
                $("#resources input").each(function(){
                    $(this).attr("disabled", false);
                });
            }
        }
    });

    $("#MGPanel input").on("click", function(){
        updateGraph();
    });

    $("#MGPanel select").on("change", function() {
        updateGraph_select();
    });

    $("#startDate, #endDate").on("dp.change",function(){
        updateGraph_select();
        updateGraph();
    });

    function updateGraph()
    {
        $('.chart').empty();
        $('.chart').html('<div class="text-center" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 50%;"><i class="fa fa-spinner fa-spin" style="font-size:50px"></i></div>');

        var hostingId = getUrlParameter("id");
        var startDate = $("#startDate input").val();
        var endDate   = $("#endDate input").val();
        var unit      = $("#resources input:checked").first().data("unit");
        var resources = [];


        $("#resources input:checked").each(function(){
            resources.push($(this).val());
        });

        if(!resources.length){
            resources.push($("#resourcesoption").val());
        }

        postAJAXGraphs('getChartData', {id: hostingId, resources: resources, startDate: startDate, endDate: endDate}, function(result){
            if(result.length)
            {
                $('.chart').empty();
                drawGraph('.chart', result, unit);
            }
            else
            {
                $(".chart").html('<div class="text-center" style="margin-top: 100px;">{/literal}{$MGLANG->T('No data to show')}{literal}</div>');
            }
        });
    }

    function updateGraph_select()
    {
        $('.chart').empty();
        $('.chart').html('<div class="text-center" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 50%;"><i class="fa fa-spinner fa-spin" style="font-size:50px"></i></div>');

        var hostingId = getUrlParameter("id");
        var startDate = $("#startDate input").val();
        var endDate   = $("#endDate input").val();
        var unit      = $("#resourcesoption").find(':selected').data("unit");
        var resources = [];

        resources.push($("#resourcesoption").val());

        if(!resources.length){
            resources.push($("#resourcesoption").val());
        }

        postAJAXGraphs('getChartData', {id: hostingId, resources: resources, startDate: startDate, endDate: endDate}, function(result){
            if(result.length)
            {
                $('.chart').empty();
                drawGraph('.chart', result, unit);
            }
            else
            {
                $(".chart").html('<div class="text-center" style="margin-top: 100px;">{/literal}{$MGLANG->T('No data to show')}{literal}</div>');
            }
        });
    }

    function postAJAXGraphs(action, data, callbackfunc)
    {
        callbackfunc = typeof callbackfunc !== 'undefined' ?  callbackfunc : 0;
        return $.ajax({
            type: "POST",
            url: "index.php?m=AdvancedBilling&extensionPage=Graphs&page=clientArea&json=1&mg-action="+action,
            data: data,
            dataType: 'json',
            success: function(result){
                if(callbackfunc)
                {
                    callbackfunc(result.result);
                }
            }
        });
    }

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
</script>
{/literal}


{* GRAPH *}
<link rel="stylesheet" href="modules/addons/AdvancedBilling/extensions/Graphs/assets/css/graphAA.css">
<script src="modules/addons/AdvancedBilling/extensions/Graphs/assets/js/d3.min.js"></script>
<script src="modules/addons/AdvancedBilling/extensions/Graphs/assets/js/graphAA.js"></script>

{* DATA PICKER *}
<script type="text/javascript" src="modules/addons/AdvancedBilling/extensions/Graphs/assets/js/moment.js"></script>
<script type="text/javascript" src="modules/addons/AdvancedBilling/extensions/Graphs/assets/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="modules/addons/AdvancedBilling/extensions/Graphs/assets/css/bootstrap-datetimepicker.min.css" />