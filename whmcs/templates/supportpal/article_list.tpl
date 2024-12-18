<div class="section">    
    <div class="section-header">
        <h2 class="section-title">
            {if $mostPopular}
                {$LANG2.knowledgebase_popular_articles}
            {elseif $mostPopularDownloads}
                {$LANG2.download_popular_downloads}    
            {elseif $downloadsTitle}
                {$LANG2.download_downloads}    
            {else}
                {$LANG2.knowledgebase_articles}
            {/if}
            {if $categoryTitle && !$search} - {$categoryTitle}{/if}
        </h2>
    </div>
    <div class="section-body kbarticles">
        <div class="list-group">
            {section name=article loop=$articles}
                <a class="list-group-item has-icon" href="?id={$articles[article].id|escape}-{$articles[article].slug|escape}">
                    <i class="list-group-item-icon ls ls-document"></i>
                    <div class="list-group-item-body">
                        <div class="list-group-item-heading">
                            {$articles[article].title|escape}
                        </div>
                        <p class="list-group-item-text">{$articles[article].excerpt|escape}</p>
                    </div>
                </a>
            {sectionelse}
                <div class="message message-no-data message-no-border message-supportpal" style="box-shadow: none;">
                    <div class="message-image">
                        {include file="$template/includes/common/svg-icon.tpl" icon="article"}
                    </div>
                    <h6 class="message-title">{$LANG.knowledgebasenoarticles}</h6>
                </div>
            {/section}
        </div>
    </div>
</div>