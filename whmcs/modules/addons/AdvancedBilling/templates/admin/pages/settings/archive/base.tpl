<div class="panel panel-primary">
    <div class="panel-body">{$MGLANG->T('On this page you can find information regarding archived usage records')}.</div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Archive Information')}</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-info">
            <div class="panel-body">
                <label>{$MGLANG->T('Archived Items')}:</label> <span id='archivedAmount'>{$stats.rows}</span><br />
                <label>{$MGLANG->T('Space On Disk')}: </label> <span id='archivedDatasize'>{$stats.size} MB<br />
            </div>
        </div>
        <br />
        <div style="display: ruby-text-container;">
            <label>{$MGLANG->T('Set Flush Archive Interval(Days)')}</label>
            <input id="interval" class="form-control" value="{$interval}" style="margin-left: 10px; width: 100px; display:inline">
            <button id='saveInterval' style="margin-left:  10px;"  class='btn btn-inverse btn-success mg-interval-buttons-pixels'>{$MGLANG->T('Save Interval')}</button>
            <button id='flushArchive' style="margin-left: 10px;"  class='btn btn-inverse btn-info mg-interval-buttons-pixels'>{$MGLANG->T('Flush Now')}</button>
        </div>
    </div>
</div>
 
{literal}
<script type="text/javascript">
    $("#flushArchive").on("click", function(){
        postAJAX("Settings|flushArchive", null, 'json', "resultMessage", function(result){
            if(result === 'success')
            {
                postAJAX("Settings|getArchiveStats", null, 'json', null, function(result){
                    $("#archivedAmount").html(result.rows);
                    $("#archivedDatasize").html(result.size + ' MB');
                });
            }
        });
    });
    
    
    $("#saveInterval").on("click", function(){
        var intervalInput = $("#interval");
        var interval = intervalInput.val();
        intervalInput.parent().removeClass();
        postAJAX("Settings|saveArchiveRemoveInterval", {'interval': interval}, 'json', "resultMessage", function(result){
            
        });
    });
</script>
{/literal}