<div class="panel panel-primary">
    <div class="panel-body">{$MGLANG->T('In order to enable you customers to monitor resource usage in product details and pricing in product configuration please do following instruction')}.</div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Display product pricing in product configuration')}</h3>
    </div>
    <div class="panel-body">
        <div class="control-group">
            {$MGLANG->T('In order to enable usage record pricing on order form, open the file')}:        
        </div>
        <pre>your_whmcs/templates/orderforms/{$OrderFormTemplate}/configureproduct.tpl</pre>
        <div class="control-group">
           {$MGLANG->T('Find the following line')}:         
        </div>
        <pre>{literal}{if $productinfo.type eq "server"}{/literal}</pre>
        <div class="control-group">
            {$MGLANG->T('Add this code Before the line')}:
        </div>
        <pre>{literal}{$AdvancedBilling_Integration_Code}{/literal}</pre>
    </div>
</div>

    
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Display usage records')}</h3>
    </div>
    <div class="panel-body">
        
        <div id="detailsContent" class="tab-content">
            
                <div class="control-group">
                    {$MGLANG->T('In order to enable your customers to monitor resource usage, open the file')}:        
                </div>
                <pre>your_whmcs/templates/{$Template}/clientareaproductdetails.tpl</pre>
                <div class="control-group">
                    {$MGLANG->T('Find the following line')}:         
                </div>
                {if $Template === 'twenty-one'}
                    <pre>&lt;div class="tab-pane fade" role="tabpanel" id="tabDownloads"&gt;</pre>
                {elseif $Template === 'lagom' || $Template === 'lagom2'}
                    <pre>&lt;div class="tab-pane" id="Downloads"&gt;</pre>
                {else}
                    <pre>&lt;div class="tab-pane fade in" id="tabDownloads"&gt;</pre>
                {/if}
                <div class="control-group">
                    {$MGLANG->T('Add this code Before the line')}:
                </div>
                <pre>{literal}{$AdvancedBilling_Integration_Code}{/literal}</pre>
            
        </div>

    </div>
</div>
