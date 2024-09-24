<div class="row">
    {if $label}
        <div class="col-lg-3 col-md-3 col-xs-12">
            <label for="{$formName}_{$name}" class="control-label">{$MGLANG->T($label)}</label>
        </div>
    {/if}
    <div class="{if $style.colWidth}col-sm-{$style.colWidth}{/if} {$style.additionalClass}" style="margin-bottom: 5px;">
        <input name="{$name}" type="password" value="{$value}"  class="form-control" {if $id}id="{$id}"{/if} placeholder="{if $placeholder}{$MGLANG->T($placeholder)}{/if}" style="margin-left: 10px; width:15%;{if $style.custom}{$style.custom}{/if}" {foreach from=$data key=dataKey item=dataValue}data-{$dataKey}="{$dataValue}"{/foreach}>
        {if $description}
            <span class="help-inline">{$MGLANG->T($description)}</span>
        {/if}
    </div>
</div>