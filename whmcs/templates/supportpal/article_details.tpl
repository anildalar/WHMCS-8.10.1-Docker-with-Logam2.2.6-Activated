<div class="article panel panel-default">
    <div class="panel-body">
        <div class="article-content">
    {*<ul class="details">
        <li>
            <i class="fa fas fa-calendar"></i>&nbsp; {$data.article.published_at|escape}
        </li>
        <li>
            <i class="fa fas fa-folder"></i>&nbsp;
            <ul class="item-list">
                {section name=category loop=$data.article.categories}
                    {if $data.article.categories[category].public && $data.article.categories[category].parent_public}
                        <li><a href="?category={$data.article.categories[category].id|escape}-{$data.article.categories[category].slug|escape}">{$data.article.categories[category].name|escape}</a></li>
                    {/if}
                {/section}
            </ul>
        </li>
        {if $data.article.tags}
        <li>
            <i class="fa fas fa-tag"></i>&nbsp;
            <ul class="item-list">
                {section name=tag loop=$data.article.tags}
                <li><a href="?tag={$data.article.tags[tag].id|escape}-{$data.article.tags[tag].slug|escape}">{$data.article.tags[tag].name|escape}</a></li>
                {/section}
            </ul>
        </li>
        {/if}
    </ul> *}
