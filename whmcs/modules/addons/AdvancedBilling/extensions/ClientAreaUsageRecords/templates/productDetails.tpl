{if $resources}
    <div class="panel panel-default MGPanelExtension">
        <div class="panel-heading">
            <h3 class="panel-title">{$MGLANG->T('Usage Records')}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
            {foreach from=$resources item=r}
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-6 text-right">{$MGLANG->missingLangT($r.friendlyName)}</div>
                        <div class="col-xs-6 text-center">
                            {$r.usage} {$MGLANG->missingLangT($r.unit)} ({$r.price})
                            {if $r.extendedPricing}
                                <i rel="tooltip" class="fa fa-question-circle" data-html="true" data-toggle="tooltip2" data-placement="right" title="{foreach from=$r.extendedPricing item=extendedPricing} {$MGLANG->missingLangT($extendedPricing.name)} {number_format($extendedPricing.usage,2)} {$extendedPricing.unit} ({$currency.prefix}{number_format($extendedPricing.price, 2)}{$currency.suffix})<br /> {/foreach}" ></i>
                            {/if}
                        </div>
                    </div>
                </div>
            {/foreach}
            </div>
        </div>
        <div class="clear"></div> 
    </div>
{/if}

{if $resources && $showHistory}
    <script>
        {literal}
            $(function(){
                $("#showUsageRecords").click(function(event){
                    event.preventDefault();
                    $(this).hide();
                    $("#hideUsageRecords").show();
                    $("#usageRecordsTableData").show();
                });
                
                $("#hideUsageRecords").click(function(event){
                    event.preventDefault();
                    $(this).hide();
                    $("#showUsageRecords").show();
                    $("#usageRecordsTableData").hide();
                });
            });
        {/literal}
    </script>
    <div class="panel panel-default MGPanelExtension">
        <div class="panel-heading">
            <h3 class="panel-title">
                {$MGLANG->T('Usage Records History')}
                <a class="pull-right" href="#" style="{if $smarty.request.ABRecordsPage != ''}display: none{/if}" id="showUsageRecords">{$MGLANG->T('Show')}</a>
                <a class="pull-right" href="#" style="{if $smarty.request.ABRecordsPage == ''}display: none{/if}" id="hideUsageRecords">{$MGLANG->T('Hide')}</a>
            </h3>
        </div>
    
        <div class="panel-body" id="usageRecordsTableData" style="font-size: 12px; overflow-x: scroll;{if $smarty.request.ABRecordsPage == ''}display: none;{/if}">
            <table class="table" id="usageRecordsTables" style="font-size: 12px;">
                <thead>
                    <tr>
                        {foreach from=$resources item=r}
                            <th>{$MGLANG->missingLangT($r.friendlyName)}</th>
                        {/foreach}       
                        <th>{$MGLANG->T('Total')}</th>
                        <th>{$MGLANG->T('Date')}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$records item=record}
                        <tr>
                            {foreach from=$resources key=name item=r}
                                <td>
                                    {$record.items[$name].usage}
                                    {if $record.items[$name].price}
                                        ({$record.items[$name].price})
                                    {/if}
                                    {if $record.items[$name].extendedPricing}
                                        <i class="fa fa-question-circle" data-toggle="tooltip2" data-placement="right" data-title="{foreach from=$record.items[$name].extendedPricing key=itemKey item=extendedPricing} {$MGLANG->missingLangT($extendedPricing.name)} {number_format($extendedPricing.usage,2)} {$extendedPricing.unit} ({$currency.prefix}{number_format($extendedPricing.price, 2)}{$currency.suffix})<br /> {/foreach}" ></i>
                                    {/if}
                                </td>
                            {/foreach}
                            <td>{$record.total}</td>
                            <td>{$record.time}</td>
                        </tr>
                    {foreachelse}
                        <tr>
                            <td colspan="{$columnCount}" style="text-align: center"><b>{$MGLANG->T('Nothing to Display')}</b></td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <div style="position: relative; height: 20px">
                {if $prevPage != ''}
                    <a style="float:left" href="clientarea.php?action=productdetails&id={$id}&ABRecordsPage={$prevPage}" class="btn">{$MGLANG->T('Prev')}</a>
                {/if}
                {if $nextPage != ''}
                    <a style="float: right" href="clientarea.php?action=productdetails&id={$id}&ABRecordsPage={$nextPage}" class="btn" >{$MGLANG->T('Next')}</a>
                {/if}
                <div style="text-align: center; padding-top: 5px">
                    {$MGLANG->T('Page')} {$ABRecordsPage} {$MGLANG->T('of')} {if $pagesCount}{$pagesCount}{else}1{/if}
                </div>
            </div>
        </div>
                
    </div>
{/if}

{literal}
    <script>
        $(function () {
            $('[data-toggle="tooltip2"]').tooltip({html:true});
        });
    </script>
{/literal}
