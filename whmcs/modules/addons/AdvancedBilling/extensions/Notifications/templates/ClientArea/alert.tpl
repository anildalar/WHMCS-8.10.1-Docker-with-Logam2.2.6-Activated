<div id="alertMessage" class="alert alert-{$type}">
    {$MGLANG->T('Notifications',$message)}
</div>

{literal}
    <script type="text/javascript">
        window.setTimeout(function() {
            $("#alertMessage").fadeTo(500, 0).slideUp(500, function()
            {
                $(this).remove(); 
            });
        }, 5000);
    </script>
{/literal}