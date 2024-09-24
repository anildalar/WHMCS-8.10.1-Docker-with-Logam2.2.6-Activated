<div class="row {$style.rowClass}" style="margin-bottom: 5px; {if $style.display}display:{$style.display};{/if}" >
    {if $label}
        <label for="{$name}" class="col-sm-3 control-label">{$MGLANG->T($label)}</label>
    {/if}
    <div class="col-sm-{$style.colWidth}">
        <select {if $multiple}multiple="multiple"{/if} id="{$id}" name="{$name}{if $multiple}[]{/if}" {if $readonly||$disabled}disabled="disabled"{/if} {foreach from=$data key=dataKey item=dataValue}data-{$dataKey}="{$dataValue}"{/foreach}>
            {foreach from=$options key=opValue item=option }
                <option value="{$opValue}" {if $multiple}{if in_array($opValue,$value)}selected{/if}{else}{if $opValue==$value}selected{/if}{/if}>
                        {if is_numeric($option)}
                            {$option}
                        {else}
                            {$MGLANG->missingLangT($option)}
                        {/if}
                </option>
            {/foreach}
        </select>
        {if $readonly}
            <input type="hidden" name="{$name}" value="{$value}" />
        {/if}
      {if $description }
        <span class="help-block">{$MGLANG->T($description)}</span>
      {/if}
    {*    <span class="help-block error-block"{if !$error}style="display:none;"{/if}>{$error}</span>*}
      {literal}
        <script type="text/javascript">
            $(document).ready(function(){
                $("#{/literal}{$name}{literal}").select2({
                    containerCssClass: ' tpx-select2-container select2-grey',
                    dropdownCssClass: ' tpx-select2-drop'
                });
            });
            
        {/literal}
            {foreach from=$actions item=action}
                {if $action.script}
                    {$action.script}
                {/if}
                if($("[name='{$name}']").val() == {$action.value})
                {ldelim}
                    ($("[name='{$action.destination}']").parent()).parent().{$action.destAction}();
                {rdelim}
                
                $("[name='{$name}']").{$action.onAction}(function()
                {ldelim}
                    if($(this).val() == {$action.value})
                    {ldelim}
                        ($("[name='{$action.destination}']").parent()).parent().{$action.destAction}();
                    {rdelim}
                {rdelim} 
                );
            {/foreach}
        {literal}
        </script>
      {/literal}
    </div>
</div>
