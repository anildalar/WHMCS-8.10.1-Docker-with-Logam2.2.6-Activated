<div class="row" style="margin: 5px">
    {if $label}
        <label for="{$name}" class="col-sm-3 control-label">{$MGLANG->T($label)}</label>
    {/if}

    <div class="{if $style.colWidth}col-sm-{$style.colWidth}{/if}" {if $id}id="{$id}_{$name}"{/if}>
        <div class="checkbox">
                <input type="checkbox" {if $enabled}checked="checked"{/if} name="{$name}" value="{$value}" {if $disabled}disabled="disabled"{/if} {foreach from=$data key=dataKey item=dataValue}data-{$dataKey}="{$dataValue}"{/foreach}/>
        </div>
        {if $description}
            <span class="help-block">{$MGLANG->T($description)}</span>
        {/if}
        <span class="help-block error-block"{if !$error}style="display:none;"{/if}>{$error}</span>
    </div>
</div>