<link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/downloads.css" />

{include file='templates/supportpal/article_search.tpl' section=downloads}

{include file='templates/supportpal/category_list.tpl' categories=$data.categories icon_name=download}

{include file='templates/supportpal/article_list.tpl' articles=$data.popularArticles icon_name=download mostPopularDownloads=true}