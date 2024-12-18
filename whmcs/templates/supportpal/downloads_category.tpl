{include file='templates/supportpal/article_search.tpl' section=downloads}

{include file='templates/supportpal/category_list.tpl' categories=$data.categories icon_name=download}

{include file='templates/supportpal/article_list.tpl' articles=$data.articles icon_name=download downloadsTitle=true categoryTitle=$pagetitle}

{if count($data.articles) > 0}
    <br />

    <!-- Pagination -->
    {include file='templates/supportpal/pagination.tpl'}
{/if}