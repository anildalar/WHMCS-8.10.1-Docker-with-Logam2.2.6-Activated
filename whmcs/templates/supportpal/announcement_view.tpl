{if !isset($data.article)}
    {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.announcement_not_allowed}
{else}
    <link rel="stylesheet" type="text/css" media="screen" href="templates/supportpal/dist/announcements.css" />
    <!-- Details about article -->
    {include file='templates/supportpal/article_details.tpl'}

    {$data.article.purified_text}

    <!-- Attachments -->
    {include file='templates/supportpal/article_attachments.tpl'}

    <!-- Print and share via options -->
    {include file='templates/supportpal/article_options.tpl'}

    <!-- Comments Section -->
    {include file='templates/supportpal/comments.tpl'}
{/if}
