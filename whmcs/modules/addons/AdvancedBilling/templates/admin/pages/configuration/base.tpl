
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Add Product')}</h3>
    </div>
    <div class="chooseProductPanel panel-body">
        <div class="row">
            <span class="text-danger bold">{$MGLANG->T('Please Note')}:</span>
            <span>{$MGLANG->T('In order to enable automatic synchronization, please setup a following command line in the cron (5 minutes suggested)')}:</span></br>
            <em style="font-style: italic">{$cronCommandLine}</em></br>
            <span>{$MGLANG->T('and set cron frequency for each product')}.</span>
        </div>
        
        <div class="row" style="margin-top: 25px;">
            {$MGLANG->T('To enable product in Advanced Billing module please select it in field below')}
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-2 text-right" style="line-height: 27px;">
                {$MGLANG->T('Enable Advanced Billing For')}
            </div>
            <div class="col-sm-5">
                <select class="select2" id="chooseProduct">
                    <option value="---">---</option>
                    {foreach from=$products item=product}
                        <option value="{$product->id}">{$product->name}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
</div>

{if $enabledProducts}
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">{$MGLANG->T('Product List')}</h3>
        </div>
      <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>{$MGLANG->T('Product Name')}</td>
                    <td>{$MGLANG->T('Submodule')}</td>
                    <td>{$MGLANG->T('Enabled Extensions')}</td>
                    <td>{$MGLANG->T('Cron Frequency')}</td>
                    <td>{$MGLANG->T('Status')}</td>
                    <td style="width: 30%">{$MGLANG->T('Actions')}</td>
                </tr>
            </thead>
            <tbody >
                {foreach from=$enabledProducts item=product}
                    <tr>
                        <td>{$product->name}</td>
                        <td>{$product->servertype}</td>
                        <td>
                            <div id="EnabledExtensions_{$product->id}" class="text-success">
                                {if $product->enabledExtensions neq '' && $product->enabledExtensions neq []}
                                    {$product->enabledExtensions}
                                {else}
                                    - 
                                {/if}
                            </div>
                        </td>
                        <td>
                                <a href="#" class="editableFrequency" data-type="text" data-pk="{$product->id}">
                                    {if $product->settings.cronFrequency neq ''}{$product->settings.cronFrequency}{else}300{/if} 
                                </a>
                                <span style="margin-left: 5px">({$MGLANG->T('seconds')})</span>
                        </td>
                        <td>
                            <input id="statusSwitcher" data-pid="{$product->id}" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $product->enabled}checked{/if}></td>
                        <td>
                            <a class="openPricingBtn btn btn-gold btn-inverse" data-pid="{$product->id}">{$MGLANG->T('Pricing')}</a>                       
                            <a class="openSettingsBtn btn btn-primary btn-inverse" data-pid="{$product->id}">{$MGLANG->T('Settings')}</a>                       
                            <a class="openItemsBtn btn btn-success btn-inverse"    data-pid="{$product->id}" href="addonmodules.php?module=AdvancedBilling&mg-page=items&mg-action=index&productId={$product->id}">{$MGLANG->T('View Items')}</a>                       
    {*                        <a class="openInvoicesBtn btn btn-info"    data-pid="{$product->id}" href="">{$MGLANG->T('View Invoices')}</a>                       *}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
      </div>
    </div>
{/if}

<div id="Modal"></div>
<div id="modalLoader" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-loader"></div>
        </div>
    </div>
</div>
            
{literal}
<style type="text/css">
    .chooseProductPanel .row{
        font-size: 16px !important;
        margin-left: 10px;
    }
</style>
    
<script type="text/javascript">
    $(".bootstrap-switcher").bootstrapSwitch();
    
    $(".editableFrequency").editable({
            mode: 'inline',
            url: 'addonmodules.php?module=AdvancedBilling&mg-page=configuration&mg-action=changeFrequency&json=1',
            validate: function(value) {
                if(! $.isNumeric(value)) {
                    return '{/literal}{$MGLANG->T('This field accepts numbers only')}{literal}';
                }
                if(value < 180)
                {
                    return "{/literal}{$MGLANG->T('Value can\'t be below 180')}{literal}";
                }
            }
        });
      
    $("#chooseProduct").select2({
        containerCssClass: ' tpx-select2-container select2-grey',
        dropdownCssClass: ' tpx-select2-drop'
    }).on("change", function(e)
    {
        var pid = $(this).val();
        
        if($.isNumeric(pid))
        {
            $('#modalLoader').modal('show');
            postAJAX("Configuration|toggleProduct", {"pid" : pid}, 'json', "resultMessage", function(result){
                if(result == 'success')
                {
                    location.reload();
                }
                $('#modalLoader').modal('hide');
            }, false);
        }
    });
      
    $('.openPricingBtn').click(function(e) 
    {
        var pid = $(this).data('pid');
                  
        getModal('showPricing', {'pid': pid});
    });
    
    
    $('.openSettingsBtn').click(function(e) 
    {
        var pid = $(this).data('pid');
                  
        getModal('showSettings', {'pid': pid});
    }); 
    
    $('.bootstrap-switcher').on('switchChange.bootstrapSwitch', function(event, state) {
        var pid = $(this).data("pid");
        postAJAX("configuration|toggleProduct", {"pid" : pid}, 'json', "resultMessage");
    });
           
    function refreshEnabledExtensions(productId)
    {
        var url = "addonmodules.php?module=AdvancedBilling&mg-page=configuration&mg-action=refreshEnabledExtensions&json=1";

        $.ajax({
            type: "POST",
            url: url,
            async: false,
            data: {'productId': productId},
            success: function(content){
                $("#EnabledExtensions_"+productId).html(content);
            },
            dataType: 'json'
        });
    }
           
    function getModal(action, vars)
    {
        var url = "addonmodules.php?module=AdvancedBilling&mg-page=configuration&mg-action="+action+"&customPage=1";
        
        $('#modalLoader').modal('show');
        $.ajax({
            type: "GET",
            url: url,
            data: vars,
            success: function(content){
                $('#modalLoader').modal('hide');
                $("#Modal").replaceWith(content);
                initModal();
 
            },
            dataType: 'html',
        });

    }
</script>
{/literal}
