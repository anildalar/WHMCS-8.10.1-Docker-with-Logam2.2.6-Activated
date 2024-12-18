<link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/announcements.css" />
{if isset($supportpalPages) && $supportpalPages['announcements'] == "modern"}
	{include file="templates/supportpal/announcements-modern.tpl"}
{else}
    {include file='templates/supportpal/article_search.tpl' section=announcements}
    <div class="announcements-list list-group list-group-lg">
        {section name=item loop=$data.articles}
            <div class="announcement-item list-group-item list-group-item-link" data-lagom-href="announcements.php?announcement={$data.articles[item].id|escape}-{$data.articles[item].slug|escape}">
                <span class="announcement-date"><i class="ls ls-calendar"></i>{$data.articles[item].published_at|escape}</span>
                <h3 class="list-group-item-heading">{$data.articles[item].title|escape}</h3>
                <ul class="details">
                    <li>
                        <span class="announcement-date"><i class="ls ls-folder"></i></span>
                        <ul class="item-list">
                            {section name=category loop=$data.articles[item].categories}
                                {if $data.articles[item].categories[category].public}
                                    <li><a href="announcements.php?category={$data.articles[item].categories[category].id|escape}-{$data.articles[item].categories[category].slug|escape}">{$data.articles[item].categories[category].name|escape}</a></li>
                                {/if}
                            {/section}
                        </ul>
                    </li>
                    {if $data.articles[item].tags}
                        <li>
                            <span class="announcement-date"><i class="ls ls-ticket-tag"></i></span>
                            <ul class="item-list">
                                    {* <li><a href="announcements.php?tag={$data.articles[item].tags[tag].id|escape}-{$data.articles[item].tags[tag].slug|escape}">Testowu Test</a></li> *}
                                {section name=tag loop=$data.articles[item].tags}
                                    <li><a href="announcements.php?tag={$data.articles[item].tags[tag].id|escape}-{$data.articles[item].tags[tag].slug|escape}">{$data.articles[item].tags[tag].name|escape}</a></li>
                                {/section}
                            </ul>
                        </li>
                    {/if}
                </ul>
                <div class="list-group-item-text">
                    {$data.articles[item].excerpt|escape}
                </div>
                <div class="announcement-footer  list-group-item-footer">
                    <span class="btn btn-sm btn-primary-faded">
                        {$LANG.readmore}
                    </span>
                    
                </div>
            </div>
        {sectionelse}
            <div class="message message-no-data message-no-border">
                <div class="message-image">
                    {include file="$template/includes/common/svg-icon.tpl" icon="article"}
                </div>
                <h6 class="message-title">{$LANG.noannouncements}</h6>
            </div>
        {/section}
        {include file='templates/supportpal/pagination.tpl'}
    </div>
    <div class="text-center">
        <a href="{$supportpalUrl}announcements/{if $category}category/{$category|escape}/{elseif $tag}tag/{$tag|escape}/{/if}rss" class="btn btn-default m-b-3x m-t-3x">
            <i class="fa fas fa-rss icon-rss"></i>&nbsp; {$LANG.announcementsrss}
        </a>
    </div>
{/if}        