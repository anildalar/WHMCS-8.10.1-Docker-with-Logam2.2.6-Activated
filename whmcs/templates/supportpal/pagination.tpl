{if isset($currentPage) && isset($totalPages) && $totalPages > 1}
    <!-- Working out URL -->
    {assign var='url' value='?'}
    {if $smarty.get.category}
        {assign var='url' value=$url|cat:'category='|cat:$smarty.get.category|cat:'&'}
    {/if}
    {if $smarty.get.tag}
        {assign var='url' value=$url|cat:'tag='|cat:$smarty.get.tag|cat:'&'}
    {/if}
    {if $smarty.get.order_by}
        {assign var='url' value=$url|cat:'order_by='|cat:$smarty.get.order_by|cat:'&'}
    {/if}
    {if $smarty.get.direction}
        {assign var='url' value=$url|cat:'direction='|cat:$smarty.get.direction|cat:'&'}
    {/if}

    <div class="dataTables_paginate paging_simple_numbers">
        <ul class="pagination">
            <li class="paginate_button page-item previous {if $currentPage == 1}disabled{/if}">
                <a class="page-link" href="{$url}page={$currentPage|escape - 1}">{$LANG.tablepagesprevious}</a>
            </li>
            {if $currentPage > 2 && $totalPages > 2}
                <li class="paginate_button page-item">
                    <a class="page-link" href="{$url}page={$currentPage|escape - 2}">{$currentPage|escape - 2}</a>
                </li>
            {/if}
            {if $currentPage > 1}
                <li class="paginate_button page-item">
                    <a class="page-link" href="{$url}page={$currentPage|escape - 1}">{$currentPage|escape - 1}</a>
                </li>
            {/if}
            <li class="paginate_button page-item active">
                <a class="page-link" href="{$url}page={$currentPage|escape}">{$currentPage|escape}</a>
            </li>
            {if $totalPages - $currentPage > 0}
                <li class="paginate_button page-item">
                    <a class="page-link" href="{$url}page={$currentPage|escape + 1}">{$currentPage|escape + 1}</a>
                </li>
            {/if}
            {if $totalPages - $currentPage > 1}
                <li class="paginate_button page-item">
                    <a class="page-link" href="{$url}page={$currentPage|escape + 2}">{$currentPage|escape + 2}</a>
                </li>
            {/if}
            <li class="paginate_button page-item next {if $totalPages - $currentPage < 1}disabled{/if}">
                <a class="page-link" href="{$url}page={$currentPage|escape + 1}">{$LANG.tablepagesnext}</a>
            </li>
        </ul>
    </div>
{/if}