<div class="row" style="margin-bottom: 5px; {if $style.display}display:{$style.display};{/if}" >
    {if $label}
        <label for="{$name}" class="col-sm-3 control-label">{$MGLANG->T($label)}</label>
    {/if}
    <div class="{if $style.colWidth}col-sm-{$style.colWidth}{/if}" style="padding-top: 7px;{if $style.custom}{$style.custom}{/if}" {if $id}id="{$id}_{$name}"{/if}>
            <input name="{$name}" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $value}checked{/if}>
        {if $description}
            <span class="help-inline">{$MGLANG->T($description)}</span>
        {/if}
{*        <span class="help-block error-block"{if !$error}style="display:none;"{/if}>{$error}</span>*}
    </div>
</div>

