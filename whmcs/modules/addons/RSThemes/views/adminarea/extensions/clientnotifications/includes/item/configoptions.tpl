<div class="panel panel--collapse" data-id="{$product->id}">
    {assign var="productId" value=$product->id}
    <div class="collapse-toggle">
        <div class="top__title top__title--widget">
            {$product->group->name} - {$product->name} Configurable Options Filter
        </div>
        <label>
            <div class="switch switch--primary" data-toggle="lu-collapse" data-target="#productOptionsFilters{$product->id}" aria-expanded="true">
                <input class="switch__checkbox" name="service[filters][optionsenabled][{$product->id}]" value="1" type="checkbox" {if $extension && $extension->getItemData("service_filters")->optionsenabled->$productId}checked{/if}>
                <span class="switch__container"><span class="switch__handle"></span></span>
            </div>
        </label>
    </div>
    <div class="collapse {if $extension && $extension->getItemData("service_filters")->optionsenabled->$productId}show{/if}" id="productOptionsFilters{$product->id}">
        {foreach $product->optionsGroups as $groups}
            {foreach $groups as $option}
                {assign var="optionId" value=$option->id}
                <div class="form-group form-group--row form-group--parent {if $groups@first && $option@first}{else}m-t-1x p-t-0x{/if} m-b-0x {if $option@last && $groups@last}{else}p-b-0x{/if} p-3x">
                    <label class="form-label">
                        {$option->optionname}
                    </label>
                    {if $option.optiontype == "1" || $option.optiontype == "2" || $option.optiontype == "3"}
                        <select class="form-control multiselect form-control--basic" name="service[filters][options][{$product->id}][{$option->id}][]" multiple data-selectize-all>
                            <option value="all" {if !$extension || ($extension && in_array("all",$extension->getItemData("service_filters")->options->$productId->$optionId))}selected{/if}>{if $option.optiontype == "1"}All{else}Any{/if}</option>
                            {foreach $option.object as $opt}
                                <option value="{$opt.id}" {if $extension && in_array($opt.id,$extension->getItemData("service_filters")->options->$productId->$optionId)}selected{/if}>{$opt.optionname}</option>
                            {/foreach}
                        </select>
                    {elseif $option.optiontype == "4"}
                        <input class="form-control max-w-248" type="number" placeholder="Min" name="service[filters][options][{$product->id}][{$option->id}][min]" value="{if $extension}{$extension->getItemData("service_filters")->options->$productId->$optionId->min}{/if}">
                        <div class="divider-pause">
                            <div>-</div>
                        </div>
                        <input class="form-control max-w-248" type="number" placeholder="Max" name="service[filters][options][{$product->id}][{$option->id}][max]" value="{if $extension}{$extension->getItemData("service_filters")->options->$productId->$optionId->max}{/if}">
                    {/if}
                </div>    
            {/foreach}
        {/foreach}
    </div>
</div>