<div id="ABNotifications" class="panel panel-default">
    <div class="panel-heading">
        
        <div id="panelTitleNotificationHide">
            <h3 class="panel-title"> 
                {$MGLANG->T('Auto Upgrade Notifications')}  
                {if $notifications->settings->status}
                     <span class="label label-success" style="font-size: 12px;">{$MGLANG->T('Enabled')}</span>
                {else}
                     <span class="label label-danger">{$MGLANG->T('Disabled')}</span> 
                {/if}
                <a href="javascript:" class="ShowHideNotificationBtn pull-right">{$MGLANG->T('Show')}</a>
            </h3>
        </div>
            
        <div id="panelTitleNotificationShow" style="display:none">
            <h3 class="panel-title">
                {$MGLANG->T('Auto Upgrade Notifications')}  
                <input id="notificationSwitcher" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $notifications->settings->status}checked{/if}>   
                <a href="javascript:" class="ShowHideNotificationBtn pull-right"><i class="icon-arrow-up"></i>{$MGLANG->T('Hide')}</a>
            </h3>
        </div>
    </div>


    <div id='NotificationPanel' class="panel-body" style="display: none;">
        <form method="post" action="" id="ABNotifications" class="ABConfigurations">
            <input hidden type="text" name="enable-notifications" class="onoffswitch-checkbox" id="enable-notifications" value='{if $notifications->settings->status}1{/if}'>

            <div class="row" style="margin-bottom: 20px;">
                    <div class="help-block">{$MGLANG->T('Using notification panel you can enable and setup notification emails. When configured rules are met, notification will be sent.')}</div>
            </div>
            <div class="row">
                <table class="resourceConfig table table-bordered" style="font-size: 12px; padding: 5px;">
                    <thead>
                    <tr>
                        <th>{$MGLANG->T('Notifications','Resource')}</th>
                        <th>{$MGLANG->T('Notifications','Comparasion')}</th>
                        <th>{$MGLANG->T('Notifications','Threshold')}</th>
                        <th>{$MGLANG->T('Notifications','Action')}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr data-empty>
                        <td colspan="4" style="text-align:center;">
                            <span>{$MGLANG->T('Notifications','No data to show')}</span>
                        </td>
                    </tr>
                    <tr style="display:none;" data-prototype>
                        <td><div style="line-height: 30px;">+new_frendly_name+</div></td>
                        <td>
                            <select class="form-control input-sm" style="width: 60px;" name="notificationsRules[+new_name+][comparison]">
                                <option value=">">></option>
                                <option value=">=">&ge;</option>
                                <option value="=">=</option>
                                <option value="<=">&le;</option>
                                <option value="<"><</option>
                            </select>
                        </td>
                        <td>
                            <input class="form-control input-sm" type="text" name="notificationsRules[+new_name+][threshold]" value="+threshold+" style="width: 80%; display: inline;" />
                            +unit+
                        </td>
                        <td>
                            <button type="button" name="remove" value="+new_name+" class="btn btn-danger btn-sm"> {$MGLANG->T('Notifications','Remove')}</button>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>


            <div class="row vertical-align-bottom">
               <div class="col-md-4 col-sm-4 col-xs-4 no-padding">
                    <select class="form-control" name="resourceType">
                        {foreach from=$resources item=resource}
                            <option value="{$resource.name}" data-unit="{$resource.unit}">{$resource.friendlyName}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2" style="margin-top: 1px">
                    <button type="button" name="add" class="btn btn-success btn-sm">{$MGLANG->T('Notifications','Add')}</button>
                </div>
                {if $settings->clientNotifyIntervalOptions} 
                    <div class="col-md-6 col-sm-6">
                        <div class="pull-right intervalConfiguration">
                            <div class="control-group pull-right">
                                <label class="control-label" style="float:left;margin:4px;margin-top: 12px" for="ASNotifiTimeInterval">{$MGLANG->T('Time Interval')}</label>
                                <div class="controls" style="float:left;">
                                    <div class="input-prepend input-append">
                                        <input id="ASNotifiTimeInterval" class="form-control" style="width: 70px" data-value name="notify-autoscale-interval" value="{$notifications->settings->timeInterval}" type="number">
                                    </div>
                                </div>
                                <label style="margin:4px;margin-top:12px;">{$MGLANG->T('minutes')}</label>
                                <i class="fa fa-question-circle" data-toggle="tooltip" title="{$MGLANG->T('Notifications','Available range:')}{$settings->clientNotifyIntervalOptions}"></i>
                           </div>
                        </div>
                    </div>
                {else}
                    <div class="col-md-6">
                        <div class="control-group">
                            <label class="control-label pull-right">{$MGLANG->T('Time Interval')} {$settings->clientNotifyInterval} {$MGLANG->T('minutes')|capitalize}</label>
                        </div>
                    </div>
                {/if}
            </div>
            <div class="flex-direction-reverse">
                <button id='ABNotificationsSubmit' type="submit" name="notifications" value="save" class="btn btn-success" style="margin-top: 20px;">{$MGLANG->T('Notifications','Save')}</button>
            </div>
        </form>
    </div>
</div>
            
{* Load Controller *}
{include file='notifications/controller.tpl'}
            