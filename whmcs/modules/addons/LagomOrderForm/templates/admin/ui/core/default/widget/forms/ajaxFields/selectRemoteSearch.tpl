{**********************************************************************
* LagomOrderForm product developed. (2017-10-30)
* *
*
*  CREATED BY MODULESGARDEN       ->       http://modulesgarden.com
*  CONTACT                        ->       contact@modulesgarden.com
*
*
* This software is furnished under a license and may be used and copied
* only  in  accordance  with  the  terms  of such  license and with the
* inclusion of the above copyright notice.  This software  or any other
* copies thereof may not be provided or otherwise made available to any
* other person.  No title to and  ownership of the  software is  hereby
* transferred.
*
*
**********************************************************************}

{**
* @author Sławomir Miśkowicz <slawomir@modulesgarden.com>
*}

<div class="lu-form-group" {if $rawObject->isHideByDefaultIfNoData()}hidden="hidden"{/if}>
    <label class="lu-form-label">
        {if $rawObject->isRawTitle()}{$rawObject->getRawTitle()}{elseif $rawObject->getTitle()}{$MGLANG->T($rawObject->getTitle())}{/if}
        {if $rawObject->getDescription()}
            <i data-title="{$MGLANG->T($rawObject->getDescription())}" data-toggle="lu-tooltip" class="lu-i-c-2x lu-zmdi lu-zmdi-help-outline lu-form-tooltip-helper"></i>
        {/if}
    </label>
    <mg-component-body-{$elementId|strtolower}
        component_id='{$elementId}'
        component_namespace='{$namespace}'
        component_index='{$rawObject->getIndex()}'
        hide_by_default_if_no_data='{$rawObject->isHideByDefaultIfNoData()}'
        {literal}:reload_fields_ids="{{/literal} {$rawObject->wrappReloadIdsToString()} {literal}}"{/literal}
        def_opt_key='{$rawObject->getValue()}'
        {assign var='avValues' value=$rawObject->getAvailableValues()}
        def_opt_val='{$avValues[$rawObject->getValue()]}'
    ></mg-component-body-{$elementId|strtolower}>
    <div class="lu-form-feedback lu-form-feedback--icon" hidden="hidden">
    </div>    
</div>
