<div id="Modal" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h3><b>{$group->name}</b></h3>
            </div>
            <div class="modal-body">
                <input hidden name="groupid" value="{$group->id}">
                <!-- Tab navs -->
                 <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#generalConfigTab" aria-controls="generalConfigTab" role="tab" data-toggle="tab">{$MGLANG->T('General Configuration')}</a>
                    </li>
                    <li role="presentation">
                        <a href="#clientAreaConfigTab" aria-controls="clientAreaConfigTab" role="tab" data-toggle="tab">{$MGLANG->T('Client Area Configuration')}</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="generalConfigTab">
                        <form id="generalConfig">
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Group Name')}</label>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <input class="form-control text-left" type="text" name="name" value="{$group->name}">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 help-block">
                                    {$MGLANG->T('Name visible only for admins')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Server Type')}</label>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <input class="form-control text-left" type="text" name="type" value="{$group->type}" disabled>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 help-block">
                                    {$MGLANG->T('Supported product type')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Time Interval')}</label>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <input class="form-control text-left" type="text" name="timeInterval" value="{if $config->timeInterval}{$config->timeInterval}{else}10{/if}">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 help-block">
                                    {$MGLANG->T('[min] Defining minimum number of minutes between accounts changes. Used also to calculate the average')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Notification Time Interval')}</label>
                                </div>
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <input class="form-control text-left" type="text" name="clientNotifyInterval" value="{if $config->clientNotifyInterval}{$config->clientNotifyInterval}{else}0{/if}">
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 help-block">
                                    {$MGLANG->T('[min] Defining minimum number of minutes between notifications')}
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="clientAreaConfigTab">
                        <form id="clientAreaConfig">
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Display Client Rules Configuration')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if $config->clientRulesDisplay}checked{/if}  name="clientRulesDisplay" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="mini" data-label-width="15" type="checkbox">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('Enable to display rules configuration in the client area')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Modify Rules Configuration')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if !$config->clientRulesDisplay}disabled{/if} {if $config->clientRulesModify}checked{/if} name="clientRulesModify" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="mini" data-label-width="15" type="checkbox">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('Allow clients to modify the autoscaling rules')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Modify Time Interval')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if $config->timeIntervalOptions}checked{/if} name="clientIntervalAccountModification" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="mini" data-label-width="15" type="checkbox">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('If enabled, clients can adjust time intervals')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Allowed Time Interval Values')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if !$config->timeIntervalOptions}disabled{/if} class="form-control text-left" type="text" name="timeIntervalOptions" value="{if $config->timeIntervalOptions}{$config->timeIntervalOptions}{else}10-30{/if}">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('Define allowed range for interval time (eg. 10-50)')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Enable Notifications')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if $config->clientNotifyEnabled}checked{/if} name="clientNotifyEnabled" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="mini" data-label-width="15" type="checkbox">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('If enabled, clients can manage notifications')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Modify Notifications Time Interval')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if $config->clientNotifyIntervalOptions}checked{/if} name="clientIntervalNotificationModification" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="mini" data-label-width="15" type="checkbox">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('Enable to allow clients to modify time intervals between notifications')}
                                </div>
                            </div>
                            <div class="row" style='margin-bottom: 10px'>
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <label class="control-label text-right" style="line-height: 35px;">{$MGLANG->T('Allowed Notifications Time Interval Values')}</label>
                                </div>
                                <div class="col-sm-12 col-md-2 col-lg-2">
                                    <input {if !$config->clientNotifyIntervalOptions}disabled{/if} class="form-control text-left" type="text" name="clientNotifyIntervalOptions" value="{if $config->clientNotifyIntervalOptions}{$config->clientNotifyIntervalOptions}{else}10-30{/if}">
                                </div>
                                <div class="col-sm-12 col-md-5 col-lg-5 help-block">
                                    {$MGLANG->T('Define allowed range for notifications interval time (eg. 10-50)')}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="APU_GeneralConfig.saveConfiguration();" type="button" class="btn btn-success btn-inverse">{$MGLANG->T('Save')}</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">{$MGLANG->T('Cancel')}</button>
            </div>
        </div>
    </div>
</div>

{include file='../Modals/generalController.js'}