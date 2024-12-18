<ol class="breadcrumb">
    {foreach $breadcrumb as $item}
        {if $breadcrumbSubCategory && !$search}
             <li>
                <a href="{$item.link}">
                    {$item.label}
                </a>
            </li>
        {else}
             <li {if $item@last} class="active"{/if}>
                {if !$item@last}
                    <a href="{$item.link}">
                {/if}
                    {$item.label}
                {if !$item@last}
                    </a>
                {/if}
            </li>
        {/if}
    {/foreach}
    {if $breadcrumbSubCategory && !$search}
        <li class="active">{$breadcrumbSubCategory}</li>
    {/if}
</ol>