<div class="row" {if $style.display}style="display:{$style.display};"{/if}>
    {if $label}
        <label for="{$name}" class="col-sm-3 control-label">{$MGLANG->T($label)}</label>
    {/if}
    <div class="col-sm-{$style.colWidth}">
        <select class="form-control {$style.additionalClass}" {if $multiple}multiple="multiple"{/if} id="{$id}" name="{$name}{if $multiple}[]{/if}" {if $readonly||$disabled}disabled="disabled"{/if} {foreach from=$data key=dataKey item=dataValue}data-{$dataKey}="{$dataValue}"{/foreach}>
            {foreach from=$options key=opValue item=option }
                <option value="{$opValue}" {if $multiple}{if in_array($opValue,$value)}selected{/if}{else}{if $opValue==$value}selected{/if}{/if}>
                        {$option}
                </option>
            {/foreach}
        </select>
        {if $description }
          <span class="help-block">{$MGLANG->T($description)}</span>
        {/if}
    </div>
</div>
