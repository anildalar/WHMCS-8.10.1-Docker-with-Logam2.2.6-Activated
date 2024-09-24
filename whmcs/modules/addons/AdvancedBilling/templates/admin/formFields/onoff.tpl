{if $label}
    <label for="{$name}" class="col-sm-3 control-label">{$MGLANG->T($label)}</label>
{/if}
<div class="{if $style.colWidth}col-sm-{$style.colWidth}{/if}">
    <div class="onoffswitch" id="{$id}">
        <input type="checkbox" name="{$name}" value="true" {if $value}checked{/if} class="onoffswitch-checkbox">
        <label class="onoffswitch-label" for="{$name}">
            <span class="onoffswitch-inner" data-before="{$MGLANG->T('enabled')}" data-after="{$MGLANG->T('disabled')}"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
    {if $description}
        <span class="help-block">{$MGLANG->T($description)}</span>
    {/if}
{*    <span class="help-block error-block"{if !$error}style="display:none;"{/if}>{$error}</span>        *}
</div>
