<div class="panel panel-primary">
    <div class="panel-body">{$MGLANG->T('Each extension is configured per product, therefore you can use different sets of extensions according to your needs')}.</div>
</div>
    
{if $licenseError}
<div id="alertMessage" class="alert alert-danger">
   {$licenseError}
</div>
{/if}

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Available Extensions')}</h3>
    </div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <td>{$MGLANG->T('Extension')}</td>
                <td>{$MGLANG->T('Type')}</td>
                <td>{$MGLANG->T('Actions')}</td>
            </tr>
        </thead>
        <tbody>
            {foreach from=$extensions item=extension}
                <tr>
                    <td>
                        <b>{$MGLANG->T($extension->friendlyName)}</b><br> 
                        {$MGLANG->T($extension->description)}
                        
                    </td>
                    <td class="text-center">{$extension->type}</td>
                    <td>
                        <input id="statusSwitcher" data-module="{$extension->name}" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $extension->enabled}checked{/if}/>
                        <a data-module="{$extension->name}"  class="configureBtn btn btn-primary">{$MGLANG->T('Configure')}</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
  </div>
</div>
        
<div id="Modal"></div>
          
        
{literal}
    <script type="text/javascript">
        $(".bootstrap-switcher").bootstrapSwitch();
        $(".configureBtn").click(function(e){
            e.preventDefault();

            var extension = $(this).data("module");
            getModal('getExtensionConfiguration', {'extension': extension});
        });
        
        
        $('.bootstrap-switcher').on('switchChange.bootstrapSwitch', function(event, state) {
            var extId = $(this).data("module");
            postAJAX("settings|toggleExtension", {"extension": extId}, 'json', "resultMessage");
        });
        
        
        function getModal(action, vars)
        {
            var url = "addonmodules.php?module=AdvancedBilling&mg-page=settings&mg-action="+action+"&customPage=1";
            $.ajax({
                type: "GET",
                url: url,
                data: vars,
                success: function(content){
                    $("#Modal").replaceWith(content);
                    initModal();
                },
                dataType: 'html',
            });
        }
        
        
    </script>
{/literal}