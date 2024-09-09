<label class="media__item media__item--thumb {if isset($type) && $type=="predefined"}media__item--horizontal{/if}{if isset($comingsoon) && $comingsoon}media__item--comingsoon{/if}" data-media-item="{$name}">
    <div class="media__item-icon" data-label="Soon">
        {if isset($thumb) && $thumb}
            <img src="{$whmcsURL}/templates/{$themeName}/core/cms/sections/config/{$slug}/{$thumb}" alt="{$name}">
        {else}
            <img src="{$helper->img('placeholders/placeholder.png')}" alt="{$name}">
        {/if}
    </div>
    <input class="media__item-input media-icon" type="radio" name="{$inputName}" value="{$value}" {if isset($checked) && $checked}checked{/if}>          
    <span class="media__item-border"></span>
    <span class="media__item-label"></span>
    <div class="media__item-footer">
        <span class="media__item-name">{$name}</span>
        {if isset($originalName) && $originalName}
            <span class="media__item-type">{$originalName}</span>
        {/if}    
    </div>                             
</label>