{if file_exists("templates/$template/oauth/overwrites/layout.tpl")}
    {include file="{$template}/oauth/overwrites/layout.tpl"}   
{else}      
    {include file="{$template}/header.tpl" moveDirUp=true}

    {$content}
       
    {include file="{$template}/footer.tpl"}
{/if}