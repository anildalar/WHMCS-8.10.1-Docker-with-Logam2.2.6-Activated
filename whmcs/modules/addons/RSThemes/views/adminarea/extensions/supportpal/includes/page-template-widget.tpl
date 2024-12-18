<div class="d-inline-block m-r-2x">
    <div class="widget widget--checkbox widget--page-template {if $selectedLayout == $layoutName}is-active{/if}" data-input>
        <input class="hidden" type="radio" name="{$pageName}" value="{$layoutName}" {if $selectedLayout == $layoutName} checked {/if}/>
        <div class="widget__header">
            <div class="widget__media widget__media--lg">
                <img src="{$helper->img($layoutPreview)}">
            </div>
            <div class="widget__checkbox">
                <img src="{$helper->img('widgets/checkbox.svg')}" alt="">
            </div>
        </div>
        <div class="widget__actions widget__actions--raised flex flex-items-xs-between">
            <div>
                <strong>{$layoutLabel}</strong>
            </div>
            {if $selectedLayout == $layoutName}
                <label class="label label--success label--outline">Active</label>
            {else}
                <label class="label label--default label--outline">Activate</label>
            {/if}
        </div>
    </div>
</div>