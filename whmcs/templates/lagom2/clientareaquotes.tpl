{if isset($RSThemes['pages'][$templatefile]) && file_exists($RSThemes['pages'][$templatefile]['fullPath'])}
    {include file=$RSThemes['pages'][$templatefile]['fullPath']}
{else}
    {if $quotes}
        {include file="$template/includes/tablelist.tpl" tableName="QuotesList"  noSortColumns="5" filterColumn="4" ajaxUrl="{$WEB_ROOT}/modules/addons/RSThemes/src/Api/clientApi.php?controller=ClientData&method=getClientQuotes" tableIncludes="quotes"}
        <script type="text/javascript">
            jQuery(document).ready( function ()
            {
                var table = jQuery('#tableQuotesList').removeClass('hidden').DataTable();
                {if $orderby == 'id'}
                    table.order(0, '{$sort}');
                {elseif $orderby == 'date'}
                    table.order(2, '{$sort}');
                {elseif $orderby == 'validuntil'}
                    table.order(3, '{$sort}');
                {elseif $orderby == 'stage'}
                    table.order(4, '{$sort}');
                {/if}
                table.draw();
                {if isset($RSThemes.addonSettings.enable_table_ajax_load) && $RSThemes.addonSettings.enable_table_ajax_load == "enabled"}
                {else}
                    jQuery('.table-container').removeClass('loading');
                    jQuery('#tableLoading').addClass('hidden');
                {/if}
            });
        </script>
        <div class="table-container {if isset($RSThemes.addonSettings.enable_table_ajax_load) && $RSThemes.addonSettings.enable_table_ajax_load == "enabled"}table-container-ajax{/if} loading clearfix">
            <div class="table-top">
                <div class="d-flex">
                    <label>{$LANG.clientareahostingaddonsview}</label>
                    <div class="dropdown view-filter-btns {if $RSThemes.addonSettings.show_status_icon == 'displayed'}iconsEnabled{/if}">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="status hidden"></span>
                            <span class="filter-name">{$rslang->trans('generals.all_entries')}</span>
                            <i class="ls ls-caret"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><span data-value="all">{$rslang->trans('generals.all_entries')}</span></a></li>
                            {foreach key=num item=status from=$RSQuotesStatuses}
                                    <li><a href="#"><span class="status status-{$status.stageClass}" data-value="{$status.stage}" data-status-class="{$status.stageClass}">{$status.stage}</span></a></li>
                            {/foreach}
                        </ul>
                    </div>
                    <button id="clearFilters" class="btn btn-link btn-xs hidden">{$rslang->trans('generals.clear_filters')}<i class="ls ls-close"></i></button>
                </div>  
            </div>
            <table id="tableQuotesList" class="table table-list">
                <colgroup>
                    <col style="width: 0%"/>
                    <col style="width: 45%"/>
                    <col style="width: 20%"/>
                    <col style="width: 20%"/>
                    <col style="width: 15%"/>
                    <col style="width: 0%"/>
                    
                </colgroup>
                <thead>
                    <tr>
                        <th data-priority="1"><button type="button" class="btn-table-collapse"></button>{$LANG.quotenumber}<span class="sorting-arrows"></span></th>
                        <th data-priority="2">{$LANG.quotesubject}<span class="sorting-arrows"></span></th>
                        <th data-priority="6">{$LANG.quotedatecreated}<span class="sorting-arrows"></span></th>
                        <th data-priority="5">{$LANG.quotevaliduntil}<span class="sorting-arrows"></span></th>
                        <th data-priority="4">{$LANG.quotestage}<span class="sorting-arrows"></span></th>
                        <th data-priority="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$quotes item=quote}
                        <tr data-url="viewquote.php?id={$quote.id}">
                            <td><button type="button" class="btn-table-collapse"></button>{$quote.id}</td>
                            <td class="text-light">{$quote.subject}</td>
                            <td class="text-nowrap"><span class="hidden">{$quote.normalisedDateCreated}</span>{$quote.datecreated}</td>
                            <td class="text-nowrap"><span class="hidden">{$quote.normalisedValidUntil}</span>{$quote.validuntil}</td>
                            <td class="text-nowrap"><span class="status status-{$quote.stageClass}">{$quote.stage}</span></td>
                            <td class="text-center">
                                <form method="submit" action="dl.php">
                                    <input type="hidden" name="type" value="q" />
                                    <input type="hidden" name="id" value="{$quote.id}" />
                                    <button type="submit" class="btn btn-icon btn-sm"><i class="ls ls-download"></i></button>
                                </form>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <div class="loader loader-table" id="tableLoading">
                {include file="$template/includes/common/loader.tpl"}  
            </div>
        </div>
    {else}
        <div class="message message-no-data">
            <div class="message-image">
                {include file="$template/includes/common/svg-icon.tpl" icon="invoice"}     
            </div>
            <h6 class="message-title">{$LANG.noquotes}</h6>
            <div class="message-action">
                <a class="btn btn-primary" href="{$WEB_ROOT}/submitticket.php">
                    {$LANG.opennewticket}
                </a>
            </div>
        </div>
    {/if}
{/if}    
