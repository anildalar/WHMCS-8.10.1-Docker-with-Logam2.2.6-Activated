<link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/knowledgebase.css" />
{if isset($supportpalPages) && $supportpalPages['knowledgebase-categories'] == "modern"}
	{include file="templates/supportpal/knowledgebase-modern.tpl" icon="ticket"}
{else}
    {include file='templates/supportpal/article_search.tpl' section=knowledgebase}

    {include file='templates/supportpal/category_list.tpl' categories=$data.categories icon_name=file}

    {include file='templates/supportpal/article_list.tpl' articles=$data.popularArticles icon_name=file mostPopular=true} 
{/if}