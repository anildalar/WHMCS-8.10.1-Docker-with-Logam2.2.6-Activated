<div id="ABAutoscale" class="panel panel-default">
    <div class="panel-heading">
        {* CONFIGURATION DISABLED *}
        <div id="panelSwitcherConfDisabled">
            <h3 class="panel-title"> 
                {$MGLANG->T('Auto Upgrade')}  
                {if $settings->status}
                     <span class="label label-success" style="font-size: 12px;">{$MGLANG->T('Enabled')}</span> {if !empty($optionHelper->getOptionName($account->optionId))}<span class="label label-default">{$optionHelper->getOptionName($account->optionId)}</span>{/if}
                {else}
                     <span class="label label-danger">{$MGLANG->T('Disabled')}</span> 
                {/if}
                <a href="javascript:" class="ShowHideConfigurationBtn pull-right">{$MGLANG->T('Show')}</a>
            </h3>
        </div>

        {* CONFIGURATION ENABLED *}
        <div id="panelSwitcherConfEnabled" style="display:none">
            <h3 class="panel-title">
                {$MGLANG->T('Auto Upgrade')}  
                <input id="panel_switcher" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $settings->status}checked{/if}>   
                <a href="javascript:" class="ShowHideConfigurationBtn pull-right"><i class="icon-arrow-up"></i>{$MGLANG->T('Hide')}</a>
            </h3>
        </div>
    </div>
    <div id="panel_body_configuration" class='panel-body' style="display: none">
        <form method="post" action="" id="ABAutoscale" class="ABConfigurations">
            <input hidden type="text" name="enable-autoscale" id="enable-autoscale" {if $settings->status}value='1'{/if}>
            <div class="row" style="margin-bottom: 20px; margin-left: 0;">
                <div class="col-md-12">
                    <div class="help-block">{$MGLANG->T('You can use these settings to autoscale your service. When resource usage rules are met, your hosting will be automaticaly upgraded or downgraded to the first available option.')}</div>
                </div>
            </div>
            {if $settings->timeIntervalOptions}
                <div class="row intervalConfiguration">
                    <div class="control-group">
                        <div class="col-md-3">
                            <label class="control-label" style="line-height: 30px;" for="ASTimeInterval">{$MGLANG->T('Time Interval')}</label>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" id="ASTimeInterval" data-value name="autoscale-interval" value="{$settings->timeInterval}" type="number">
                        </div>        
                        <div class="col-md-5">
                            <span class="help-block">{$MGLANG->T('Available range: ')}{$settings->timeIntervalOptions} {$MGLANG->T('minutes')}</span>
                        </div>
                   </div>
                </div>
            {else}
                <div class="row intervalConfiguration">
                    <div class="control-group">
                        <div class="col-md-12">
                            <label class="control-label">{$MGLANG->T('Time Interval')} {$settings->timeInterval} {$MGLANG->T('minutes')|capitalize}</label>
                        </div>
                    </div>
                </div>
            {/if}
            <div class="ASConfiguration">
                {if $error}
                    <div class="alert alert-{$error.type}">
                        <button type="button" class="close" >&times;</button>
                        <strong>{$error.message}</strong>
                    </div>
                {/if}
                <div style="margin-bottom:15px;"></div>
                {if $group->status}
                    <ul class="nav nav-tabs responsive-tabs-sm row">
                        {foreach from=$options item=option}
                            <li role="presentation" class="nav-item">
                                <a class="nav-link {if $option->id == $account->optionId}active{/if}" href="#option-{$option->id}" aria-controls="option-{$option->id}" role="tab" data-toggle="tab" style="{if $option->id == $account->optionId}color:black{else}{if !$option->status}color:grey{/if}{/if}">
                                    {$option->name}
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                    <div class="options-content contentTabs tab-content row" style="margin-bottom: 20px;">
                        {foreach from=$options item=option}
                                <div role="tabpanel" class='tab-pane width-max {if $option->id == $account->optionId}active{/if}' id="option-{$option->id}">
                                    <div style="margin-top: 10px;">
                                        <div class="col-md-2 col-sm-2 col-xs-2 padding-left-0"> <h4 style="margin-top: 0px;">{$option->name}</h4> </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2"> {if $option->id == $account->optionId} <span class="label label-default">{$MGLANG->T('Current Option')}</span> {/if} </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6"> 
                                           {if $settings->clientRulesDisplay} 
                                                <a href="#" class="toggleDisplayRules btn btn-default btn-xs pull-right">{$MGLANG->T('Show Rules')}</a> 
                                            {/if}
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2"> <input class="bootstrap-switcher" id="enable-{$option->id}" name="autoscale-oenable[{$option->id}]" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $option->status}checked{/if}> </div>
                                    </div>
                                    <div style="color: #999999">
                                        {$optionHelper->getDescription($option->id, $language)}
                                    </div>
                                        {if $settings->clientRulesDisplay}
                                            <div class="manage-rules" style="display:none;">
                                                <div class="col-md-12 padding-left-0">
                                                    <table class="table table-bordered table-hover" style="font-size: 12px; padding: 5px;">
                                                        <colgroup>
                                                            <col/>
                                                            <col/>
                                                            <col/>
                                                        </colgroup>
                                                        <tr>
                                                            <th>{$MGLANG->T('Resource')}</th>
                                                            <th>{$MGLANG->T('Upgrade Rules')}</th>
                                                            <th>{$MGLANG->T('Downgrade Rules')}</th>
                                                        </tr>
                                                        {foreach from=$optionHelper->getRules($option->id, $account->hostingId) item=rule}
                                                            <tr>
                                                                <td>
                                                                    {foreach from=$resources item=res}
                                                                        {if $res.name == $rule->resource}
                                                                            {$res.friendlyName}
                                                                            {assign 'currentRes' $res}
                                                                        {/if}
                                                                    {/foreach}
                                                                </td>
                                                                <td>
                                                                    {if $rule->type eq 'top'}
                                                                        {if $rule->comparison == '<='}
                                                                            &le;
                                                                        {elseif $rule->comparison == '>='}
                                                                            &ge;
                                                                        {else}
                                                                            {$rule->comparison}
                                                                        {/if}
                                                                        <span>{$rule->threshold}</span> 
                                                                        {if $settings->clientRulesModify}
                                                                            <input type="text" name="topRuleThreshold[{$option->id}][{$rule->resource}]" value="{$rule->threshold}" style="display:none; font-size: 12px;" />
                                                                        {/if}
                                                                        
                                                                        {$currentRes.unit}
                                                                        {if $settings->clientRulesModify}
                                                                            <i class="editRulesValues fa fa-edit pull-right"></i>
                                                                        {/if}
                                                                    {/if}
                                                                </td>
                                                                <td>
                                                                    {if $rule->type eq 'bottom'}
                                                                        {if $rule->comparison == '<='}
                                                                            &le;
                                                                        {elseif $rule->comparison == '>='}
                                                                            &ge;
                                                                        {else}
                                                                            {$rule->comparison}
                                                                        {/if}


                                                                        <span>{$rule->threshold}</span> 
                                                                        {if $settings->clientRulesModify}
                                                                            <input type="text" name="bottomRuleThreshold[{$option->id}][{$rule->resource}]" value="{$rule->threshold}" style="display:none; font-size: 12px;" />
                                                                        {/if}
                                                                        {$currentRes.unit}
                                                                        
                                                                        {if $settings->clientRulesModify}
                                                                            <i class="editRulesValues fa fa-edit pull-right"></i>
                                                                        {/if}
                                                                    {/if}
                                                                </td>
                                                            </tr>
                                                        {/foreach}
                                                    </table>
                                                </div>
                                            </div>
                                        {/if}
                                </div>
                        {/foreach}
                    </div>
                    {include file='history.tpl'}
                    <div class="row flex-direction-reverse">
                        <button type="submit" class="saveConfigurationBtn btn btn-success" name="autoscale" value="save">{$MGLANG->T('Save Configuration')}</button>
                    </div>
                {else}
                    <div class="row flex-direction-reverse">
                        <button type="submit" class="saveConfigurationBtn btn btn-success" name="autoscale" value="save">{$MGLANG->T('Save Configuration')}</button>
                    </div>
                {/if}
            </div>
        </form>
    </div>
</div>
          
{if $settings->clientNotifyEnabled}
    {* Notifications *}
    {include file='notifications/base.tpl'}
{/if}

{* Load Controller *}
{include file='controller.tpl'}

