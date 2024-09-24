<div class="row" {if $style.display}style="display:{$style.display};"{/if}>
    {if $label}
        <label for="{$formName}_{$name}" class="control-label col-lg-3 col-md-3 col-xs-12">{if $labelNoLang}{$label}{else}{$MGLANG->T($label)}{/if}</label>
    {/if}
    <div class="{if $style.colWidth}col-sm-{$style.colWidth}{/if} {$style.additionalClass}" style="margin-bottom: 5px;">
        <input name="{$name}" type="text" value="{$value}"  class="form-control" {if $id}id="{$id}"{/if} placeholder="{if $placeholder}{$MGLANG->T($placeholder)}{/if}" style="width:15%;{if $style.custom}{$style.custom}{/if}" {foreach from=$data key=dataKey item=dataValue}data-{$dataKey}="{$dataValue}"{/foreach}>
        {if $description}
            <span class="help-inline">{$MGLANG->T($description)}</span>
        {/if}
    {*      <span class="help-block error-block"{if !$error}style="display:none;"{/if}>{$error}</span>*}
    </div>
</div>