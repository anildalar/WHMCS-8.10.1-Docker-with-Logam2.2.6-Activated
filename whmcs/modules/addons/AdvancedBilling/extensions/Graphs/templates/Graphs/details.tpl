<div id="MGPanel" class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Line Chart For')} 
            <a href="configproducts.php?action=edit&id={$product->id}">
                <b style="color: #FFF; font-size: 17px;">{$product->name}</b> 
            </a>
            <a href="clientsservices.php?userid={$hosting->userid}&id={$hosting->id}">
                <span class="text-danger" style="color: #FFF; font-size: 15px;">{$hosting->domain}</span>
            </a>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <input hidden id="hosting" value="{$hosting->id}"/>                    
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <label class="label-control pull-right" style="line-height: 35px;">{$MGLANG->T('Date From')}</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="form-group">
                                 <div class='input-group date' id='startDate'>
                                     <input type='text' class="form-control" value="{$defaultStartDate}" />
                                     <span class="input-group-addon">
                                         <span class="fa fa-calendar"></span>
                                     </span>
                                 </div>
                             </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <label class="label-control pull-right" style="line-height: 35px;">{$MGLANG->T('Date To')}</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="form-group">
                                 <div class='input-group date' id='endDate'>
                                     <input type='text' class="form-control" value="{$defaultEndDate}" />
                                     <span class="input-group-addon">
                                         <span class="fa fa-calendar"></span>
                                     </span>
                                 </div>
                             </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <label class="label-control pull-right">{$MGLANG->T('Resources')}</label>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <fieldset id="resources">
                                {assign var=unit value="null"}
                                {foreach from=$resources item=resource}
                                    <div class="checkbox-group">
                                    {if $unit eq 'null'}{assign var=unit value=$resource.unit }{/if}
                                        <label>
                                            <input type='checkbox' data-unit="{$resource.unit}" value='{$resource.name}' {if $resource.unit eq $unit}checked="checked"{else}disabled{/if} style="margin-bottom: 2px;" /> 
                                            {$MGLANG->T($resource.friendlyName)}
                                        </label><br />
                                    </div>
                                {/foreach}
                            </fieldset>
                        </div>
                    </div>
            </div>    
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="chart"></div>
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

    .checkbox-group
    {
        margin-bottom: 10px;
    }
    
    .checkbox-group label
    {
        display: inline !important;
        font-weight: normal;
    }
    
    .legend rect {
      fill:white;
      stroke:black;
      opacity:0.8;
    }
    /*#resources{*/
        /*width: 100% !important;*/
    /*}*/
    #resources label {
    display: block;
    padding-left: 15px;
    text-indent: -15px;
    }
    #resources input {
    width: 13px;
    height: 13px;
    padding: 0;
    margin:0;
    vertical-align: bottom;
    position: relative;
    top: -1px;
    *overflow: hidden;
}
</style>
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
                    $(this).attr("disabled", true);
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
    $("#startDate, #endDate").on("dp.change",function(){
        updateGraph();
    });

    function updateGraph()
    {
        var hostingId = $("#hosting").val();
        var startDate = $("#startDate input").val();
        var endDate   = $("#endDate input").val();
        var unit      = $("#resources input:checked").first().data("unit");
        var resources = [];

        $("#resources input:checked").each(function(){
            resources.push($(this).val());
        });
        
        postAJAX("Graphs|getChartData", {hostingId: hostingId,  resources: resources, startDate: startDate, endDate: endDate}, "extensionPage=Graphs&json", '', function(result){
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
</script>
{/literal}


{* GRAPH *}
<link rel="stylesheet" href="../modules/addons/AdvancedBilling/extensions/Graphs/assets/css/graphAA.css">
<script src="../modules/addons/AdvancedBilling/extensions/Graphs/assets/js/d3.min.js"></script>
<script src="../modules/addons/AdvancedBilling/extensions/Graphs/assets/js/graphAA.js"></script>

{* DATA PICKER *}
<script type="text/javascript" src="../modules/addons/AdvancedBilling/extensions/Graphs/assets/js/moment.js"></script>
<script type="text/javascript" src="../modules/addons/AdvancedBilling/extensions/Graphs/assets/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="../modules/addons/AdvancedBilling/extensions/Graphs/assets/css/bootstrap-datetimepicker.min.css" />

