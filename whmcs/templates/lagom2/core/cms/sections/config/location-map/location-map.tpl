<div class="site-section section-{$theme} section-location{if $custom_class} {$custom_class}{/if}">
    {include file="{$smarty.current_dir}/../../common/anchor.tpl"} 
    <div class="container">
        {if $title}
            <h2 class="section-title">{$title|unescape:'html'}</h2>
        {/if}
        {if $subtitle}
            <p class="section-subtitle">{$subtitle|unescape:'html'}</p>
        {/if}
        {if $graphic.graphic}
            <div class="section-content">
                <div class="locations-map">
                    
                    <div class="locations-map-bg">
                        {if $locations}
                            {$locations = ","|explode:$locations}
                            <div class="locations-map-pins">
                                {foreach $locations as $location}
                                    {$location = "-"|explode:$location}
                                    <div class="location-pin location-{$location[0]|lower}">
                                        <div class="location-map-dot"> 
                                            <span class="mobile-dot"></span>
                                        </div>
                                        <div class="location-name">{$location[0]}
                                            {if $location[1]}
                                                <span class="location-name-country">, {$location[1]}</span> 
                                            {/if}
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        {/if}
                        {include file="{$smarty.current_dir}/../../common/graphic.tpl" 
                            graphic=$graphic.graphic
                            type=$graphic.type
                        }
                    </div>
                </div>
            </div>
        {/if}
        {if $buttons}
            <div class="section-actions">
                <div class="section-actions-buttons">
                    {foreach $buttons as $button}
                        {include file="{$smarty.current_dir}/../../common/button.tpl"}
                    {/foreach}
                </div>
            </div>
        {/if}
    </div>   
</div> 

