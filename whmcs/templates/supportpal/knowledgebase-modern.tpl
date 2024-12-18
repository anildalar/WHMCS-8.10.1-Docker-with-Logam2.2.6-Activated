<div class="main-banner banner-center banner-home banner-{$siteBannerStyle}">
    <div class="container">
        <div class="banner-content">
            <h2 class="banner-title h2">{$LANG.knowledgebasetitle}</h2>
            {if $tagline && $tagline != "spKbTagline"}
                <p class="banner-desc position-relative" style="bottom: 8px;">{$tagline}</p>
            {/if}
            {include file='templates/supportpal/article_search.tpl' section=knowledgebase}
            {include file="templates/supportpal/breadcrumb.tpl"}
        </div>
    </div>
    {include file="templates/{$template}/includes/common/svg-illustration.tpl" illustration="site/banner-bg"}
</div>
<div class="main-body">
    <div class="container">
        {include file='templates/supportpal/category_list.tpl' categories=$data.categories icon_name=file type="modern"}
        {include file='templates/supportpal/article_list.tpl' articles=$data.popularArticles icon_name=file type="modern" mostPopular=true}
    </div>
</div>