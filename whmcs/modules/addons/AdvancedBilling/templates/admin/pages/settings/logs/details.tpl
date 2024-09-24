<div id="MGPanel" class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title" style="line-height: 26px;">
            {$MGLANG->T('File Content')}
            <button class="btn btn-default pull-right" onclick="goBack()">{$MGLANG->T('Back')}</button>
        </h3>
    </div>
    <div class="panel-body">      
        <pre>{$fileContent}</pre>
    </div>
</div>
    
<script type='text/javascript'>
function goBack() {
    window.history.back();
}

</script>