<div id="Modal" class="modal fade" role="dialog" >
    <div class="limiterModal modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{$reminder.name} - {$MGLANG->T('Define limits')}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="notificationsInfo alert alert-info">
                <p>{$MGLANG->T('limiter helper')}</p>
                <p>{$MGLANG->T('limiter helper second')}</p>
                
            </div>
            {if $nopricing}
                <h4 class="alert alert-info text-center">{$MGLANG->T('Notifications', 'noPricingDefinied')}</h4>
            {else}
            
            <form class="modal-ownForm form-group col-md-12 col-xs-12 col-sm-12">
                <div class="numericValuesError alertMessage alertMessage-mg-notification alert alert-danger" style="display: none">         <p> {$MGLANG->T("Expected numeric values.")}</p></div>
                <div class="numericValuesErrorNegative alertMessage alertMessage-mg-notification alert alert-danger" style="display: none" ><p> {$MGLANG->T("Expected positive values.")}</p></div>
            
                {foreach from=$resources item=resource}
                    <div class="limiterFriendlyName text-right col-xs-5">
                        <input type="hidden" name="ids[{$resource.name}]" value="{$resource.limit.id}" />
                        <label class="limitFriendlyNameOverFlow">
                            {$resource.friendlyName }<small>  ({if $resource.usage}{$resource.usage}{else}0{/if} {if $resource.unit} {$resource.unit}{/if} {$MGLANG->T("used")})</small>  
                        </label>
                    </div>
                    <div class="limiterCondition col-xs-2 text-center">
                        <label>
                            <select name="selects[{$resource.name}]" class="form-control" >
                                <option value=">" selected>></option>
                                <option value=">=" {if $resource.limit.conditional eq ">=" }selected{/if}>>=</option>
                                <option value ="=" {if $resource.limit.conditional eq "=" }selected{/if}>=</option>
                                
                                
                            </select>
                        </label>
                    </div>
                    <div class="limiterValue col-xs-5 pull-left">
                        <label>
                            <input class="errorInput form-control" name="fields[{$resource.name}]" type="text" {if $resource.limit.value}value="{$resource.limit.value}" {else} value="0" {/if} style="width: 100% !important;" /> 
                        </label>
                    </div>
                {/foreach}
            </form>
            {/if}
            <div class="modal-footer">
                {if !$nopricing}
                <input type="button" class="btn btn-success" id="resourcesLimit" data-rid="{$reminder.id}" value="{$MGLANG->T('Confirm')}"/>
                {/if}
                <button type="button" class="btn btn-default"  data-dismiss="modal">{$MGLANG->T('Close')}</button>
            </div>
        </div>
    </div>
</div>
