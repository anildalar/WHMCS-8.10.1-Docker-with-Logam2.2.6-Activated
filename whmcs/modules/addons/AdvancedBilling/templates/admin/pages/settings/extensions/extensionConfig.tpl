{literal}                
<script type="text/javascript">
    function initModal()
    {
        $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
        {
            $('#Modal').modal('show');
            $('.modal-loader').hide();
        });
    }
        
    $("#saveExtensionConfig").click(function(e)
    {
        var values = $("#{/literal}{$extension->name}{literal}").serializeArray();
        postAJAX("settings|saveExtension", values, "json", "resultMessage");
 
    });
</script>
{/literal}

<div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 70%">

        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{$MGLANG->T('Set Configuration For ')}<b>{$MGLANG->T($extension->friendlyName)}</b></h3>
                <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
            </div>

            <div class="modal-loader"></div>
            <div class="modal-body">
                {$extension->displayExtensionConfiguration()}
            </div>

            <div class="modal-footer">
              <button id="saveExtensionConfig" class="btn btn-success btn-inverse" data-dismiss="modal">{$MGLANG->T('Save')}</button>
              <button class="btn btn-danger" data-dismiss="modal">{$MGLANG->T('Cancel')}</button>
            </div>

        </div>

    </div>
</div> 