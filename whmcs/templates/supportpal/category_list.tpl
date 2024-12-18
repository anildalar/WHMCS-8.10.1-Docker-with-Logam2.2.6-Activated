{if $categories|@count}
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">{$LANG2.categories}</h2>
        </div>
        <div class="section-body kb-categories kb-category">
            <div class="list-group {if $type == "modern"} list-group--boxes flex-wrap m-b-0x {if isset($kbcategoriesCols->col)}flex-items-{$kbcategoriesCols->col}{/if}{/if}">
                {section name=cat loop=$categories}
                        <a class="list-group-item has-icon" href="?category={$categories[cat].id|escape}-{$categories[cat].slug|escape}">
                            {if $type == "modern"}
                                {if isset($kbcategoriesicons)}
                                    {foreach $kbcategoriesicons as $kbicon}
                                        {if $categories[cat].id == $kbicon->kbId}
                                            {if $kbicon->predefinedIcon}
                                                {assign var="fileDir" value="templates/{$template}/assets/svg-icon/{$kbicon->predefinedIcon}"}
                                                {if $file_exists=$fileDir}
                                                    {include file=$fileDir}
                                                {/if}  
                                            {elseif $kbicon->media}
                                                <img src="{$WEB_ROOT}/templates/{$template}/assets/img/page-manager/{$kbicon->media}" alt="{$kbicon->media}"/>       
                                            {elseif $kbicon->icon}
                                                 <i class="list-group-item-icon {$kbicon->icon}"></i>
                                            {/if}                      
                                        {/if}
                                    {/foreach}
                                {/if}
                            {else}
                                <i class="list-group-item-icon lm lm-folder"></i>
                            {/if}
                            <div class="list-group-item-body">
                                <div class="list-group-item-heading">
                                    {$categories[cat].name|escape}
                                    {if $categories[cat].count > 0}
                                        &nbsp;<span class="list-group-item-counter">({$categories[cat].count|escape})</span>
                                    {/if}
                                </div>
                            </div>
                        </a>
                {/section}
            </div>
        </div>
    </div>
{/if}