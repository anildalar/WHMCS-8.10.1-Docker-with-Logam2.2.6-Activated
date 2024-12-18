{if !empty($data.article.attachments)}
    <br />

    <div class="attachments">
    {section name=item loop=$data.article.attachments}
        <a class="btn btn-default btn-sm m-b-1x" href="{$supportpalUrl}{$data.article.types[0].slug|escape}/article/{$data.article.slug|escape}/attachment/{$data.article.attachments[item].upload_hash|escape}">
            <i class="ls ls-download"></i>&nbsp;
            {$data.article.attachments[item].original_name|escape} ({$data.article.attachments[item].upload.size|escape})
        </a><br />
    {/section}
    </div>
{/if}
