{assign var="iconLocation" value="./../../../../../../assets/svg-icons"}

<ul class="sortableList list-page-manager list list--sortable {if empty($items)}is-hidden{/if}"
    
    data-item-list="buttons"
    data-section="buttons"
    data-item-list-type="{$listType}"
>
    {if !empty($items)}
        {foreach $items as $key => $item}
            <li class="items-list list__item">
                <div class="list__item-icon i-c-3x icon-{$item['index']} m-l-0x {if !$item['show_icon']}is-hidden{/if}">
                    {if isset($item['font-icon'])}
                        <i class="{$item['font-icon']}"></i>
                    {/if}
                </div>
                <div class="list__item-name" data-name>
                    {if $item['text']}                       
                        {$item['text'][$whmcsLang->value]}
                    {/if}
                </div>
                {if $item['custom_url'] || $item['url']}
                    <div class="list__item-desc" data-desc>
                        {if $item['custom_url']}
                            <a href="{$item['custom_url']}" target="_blank">{$item['custom_url']}</a>
                        {elseif $item['url']}
                            <a href="{$item['url']} " target="_blank">{$item['url']}</a>
                        {/if}
                    </div>
                {/if}
                <div class="list__item-actions">
                    {include file="adminarea/extensions/clientnotifications/includes/item/edit-btn.tpl" classes="btn btn--icon btn--link btn--xs" showModalIconsTabs=$showModalIconsTabs scope=parent}
                    <a
                        class="deleteItem btn btn--icon btn--link btn--xs"
                        href="#deleteItemModal"
                        data-toggle="lu-modal"
                        data-backdrop="static"
                        data-delete-item
                        data-list-name="buttons"
                        data-index="{$item['index']}"
                        data-section="buttons"
                    >
                        <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="Delete Item"></i>
                    </a>
                </div>
            </li>
        {/foreach}
    {/if}
</ul>
<div class="msg msg--simple msg--bordered  {if !empty($items)}is-hidden{/if}" data-item-empty-list="buttons" data-section="buttons">
        <a href="#{$btnAddAction}" class="msg__body"
            data-add-new-item="{$listType}"
            data-list-name="buttons"
            data-new-index="1"
            data-new-position="1"
            data-section="buttons"
            data-toggle="lu-modal"
            data-backdrop="static"
            data-keyboard="false"
        >
            <span class="msg__title">No buttons created</span>
            <div class="msg__actions">
                <span class="btn btn--sm btn--link">
                    <i class="btn__icon ls ls-plus"></i>
                    <span class="btn__text">Add new</span>
                </span>
            </div>
        </a>
</div>
