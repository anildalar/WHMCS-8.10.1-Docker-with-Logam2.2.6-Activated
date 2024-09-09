<a
    {* common *}
    class="{$classes}"
    href="#{$btnEditAction}"
    data-edit-item
    data-toggle="lu-modal"
    data-backdrop="static"
    data-keyboard="false"
    data-section="buttons"

    data-key="{$item['index']}"
    data-position="{$item['position']}"
    data-list-name="buttons"
    
    {*Icon types*}
    {if isset($item['show_icon'])}
        data-show-icon="{$item['show_icon']}"
    {/if}
    {if isset($item['font-icon'])}
        data-font-icon="{$item['font-icon']}"
    {/if}
   
    {* buttons *}
    {if isset($item['text'])}
        data-text='{$item['text']|@json_encode}'
    {/if}
    {if isset($item['type'])}
        data-type="{$item['type']}"
    {/if}
    {if isset($item['style'])}
        data-style="{$item['style']}"
    {/if}
    {if isset($item['size'])}
        data-size="{$item['size']}"
    {/if}
    {if isset($item['link_type'])}
        data-link-type="{$item['link_type']}"
    {/if}
    {if isset($item['link_type']) && $item['link_type'] == 'custom-url'}
        data-custom-url="{$item['custom_url']}"
    {/if}
    {if isset($item['link_type']) && $item['link_type'] == 'whmcs-page'}
        data-whmcs-page='{$item['whmcs_page']}'
        data-url="{$item['url']}"
    {/if}
    {if isset($item['custom_classes'])}
        data-custom-classes="{$item['custom_classes']}"
    {/if}
    {if isset($item['target_blank'])}
        data-target-blank="{$item['target_blank']}"
    {/if}
>
    {if $type == "placeholder"}
        <i class="btn__icon ls ls-plus"></i>
    {else}
        <i class="btn__icon ls ls-pen"></i>
    {/if}
</a>
