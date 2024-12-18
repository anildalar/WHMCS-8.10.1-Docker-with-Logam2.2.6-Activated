{if !isset($data.article)}
    {include file="$template/includes/alert.tpl" type="danger" textcenter=true hide=false msg=$LANG2.download_not_allowed}
{else}
    <!-- Details about article -->
    {include file='templates/supportpal/article_details.tpl'}

    {$data.article.purified_text}
    <br />
    <!-- Attachments -->
    {include file='templates/supportpal/article_attachments.tpl'}

    <!-- Print and share via options -->
    {include file='templates/supportpal/article_options.tpl'}

    <!-- Comments Section -->
    {include file='templates/supportpal/comments.tpl'}

    {literal}
        <style>
            .kb-rate-article .btn-social{
                border-radius: 100%;
                width: 40px;
                min-width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0;
            }
            .kb-rate-article .btn-social i{
                display: flex;
                color: #b9bdc5;
            }
            .kb-rate-article .btn-social:hover i{
                color: #1062fe;
            }
        </style>
    {/literal}
{/if}