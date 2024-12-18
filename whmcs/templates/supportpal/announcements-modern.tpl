<div class="main-banner banner-center banner-home banner-{$siteBannerStyle} banner--overflow">
    <div class="container">
        <div class="banner-content">
            <h2 class="banner-title h2">{$LANG.announcementstitle}</h2>
            {if $tagline && $tagline != "spAnnoucementsTagline"}
                <p class="banner-desc position-relative" style="bottom: 64px;">{$tagline}</p>
            {/if}
        </div>
    </div>
    {include file="templates/{$template}/includes/common/svg-illustration.tpl" illustration="site/banner-bg"}
</div>
<div class="main-body p-t-0x">
    <div class="container">
        <div class="announcements-toolbar">
            <div class="dropdown-filter">
                <span>Filter</span>
                <div class="dropdown view-filter-btns">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="status hidden"></span>
                        <span>{$rslang->trans('generals.all_entries')}</span>
                        <i class="ls ls-caret"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="announcements.php"><span>{$rslang->trans('generals.all_entries')}</span></a></li>
                        {foreach $data.categories as $category}  
                            <li><a href="announcements.php?category={$category.id}"><span>{$category.name}</span></a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            <div class="tld-toolbar">
                <form role="form" method="post" action="announcements.php">
                    <div class="tld-search search-group">
                        <div class="search-field">
                            <div class="search-field-icon"><i class="lm lm-search"></i></div>
                            <input class="form-control" type="text" id="inputKnowledgebaseSearch" name="search" placeholder="{$LANG2.selfservice_search}" value="{$search|escape}" />
                        </div>
                    </div>
                </form>
            </div> 
        </div>
        <div class="announcements-list list-group list-group-lg list-boxed">
            {section name=item loop=$data.articles}
                <div class="announcement-item list-group-item list-group-item-link" data-lagom-href="announcements.php?announcement={$data.articles[item].id|escape}-{$data.articles[item].slug|escape}">
                    <h3 class="list-group-item-heading">{$data.articles[item].title|escape}</h3>
        
                    <div class="list-group-item-text">
                        {$data.articles[item].excerpt|escape}
                    </div>
                    <div class="announcement-footer  list-group-item-footer">
                        <span class="btn btn-sm btn-primary-faded">
                            {$LANG.readmore}
                        </span>
                        <span class="announcement-date"><i class="ls ls-calendar"></i>{$data.articles[item].published_at|escape}</span>
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
                    </div>
                </div>
            {sectionelse}
                <div class="message message-no-data">
                    <div class="message-image">
                        {include file="$template/includes/common/svg-icon.tpl" icon="article"}
                    </div>
                    <h6 class="message-title">{$LANG.noannouncements}</h6>
                </div>
            {/section}
            {include file='templates/supportpal/pagination.tpl'}
        </div>
    </div>
</div>