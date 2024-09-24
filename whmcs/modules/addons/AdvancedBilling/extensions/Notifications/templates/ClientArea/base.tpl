<input id="hostingId" type="hidden" value="{$hostingid}"/>
<input id="productId" type="hidden" value="{$productId}"/>
<div id="MGPanel" class="panel panel-default MGPanelExtension">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Reminders')} 
            <a class="pull-right" href="#" id="showReminders">{$MGLANG->T('Show')}</a>
            <a class="pull-right" href="#" style="display: none;" id="hideReminders">{$MGLANG->T('Hide')}</a>
        </h3>

    </div>

    <div class="panel-body" id="reminders" style="display: none;">
        
        
        <div id="resultMessage"></div>
        
        
        <div class="alert alert-danger" id="extensionAlert" style="display: none"></div>
        <p class="globalAlertMessage"></p>

        <div class="row" id="reminderGroup">
        
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th class="text-center">{$MGLANG->T('Name')}</th>
                        <th class="text-center">{$MGLANG->T('Status')}</th>
                        <th class="text-center">{$MGLANG->T('Period Frequency')}</th>
                        <th class="text-center">{$MGLANG->T('Mailing Frequency')}</th>
                        <th class="text-center">{$MGLANG->T('Options')}</th>
                    </tr>
                </thead>
                {if $reminders}
                <tbody>
                    {foreach from=$reminders item=reminder}
                        <tr class="text-center">
                            <td data-label="name" class="cell-sm-12">
                                {if $reminder.name}{$reminder.name|wordwrap:30:'<br />':true}{/if}
                            </td>
                            <td>
                                <div class="switcher" data-rid="{$reminder.id}" data-status="{$reminder.status}">
                                    <input id="statusSwitcher"  class="bootstrap-switcher" data-rid="{$reminder.id}" data-status="{$reminder.status}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox" {if $reminder.status eq 'enabled'}checked{/if}>
                                </div>
                            </td>
                            <td>
                                {if $reminder.periodFrequency} {$reminder.periodFrequency} {/if}
                            </td>
                            <td>
                                {if $reminder.mailFrequency} {$reminder.mailFrequency} {/if}
                            </td>
                            <td>
                                <div class="row">
                                    <a class="editReminder btn btn-icon"  data-rid="{$reminder.id}" title="{$MGLANG->T('EditIconTitle')}"  ><i class="fa fa-pencil"></i></a>
                                    <a class="makeLimits btn btn-icon" data-hid="{$hostingid}" data-rid="{$reminder.id}" title="{$MGLANG->T('DefineLimitsIconTitle')}" ><i class="fa fa-tasks"></i></a>
                                    <a class="deleteReminder btn btn-icon" data-rid="{$reminder.id}" title="{$MGLANG->T('DeleteIconTitle')}"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    {/foreach}
                 </tbody>
                {/if}
            </table>
            {if !$reminders}
            </table>
                <div class="text-center">
                    {$MGLANG->T('no data')}
                </div>
             {/if}
        </div>

        <div class="text-right">
            <button class="addReminderModal btn btn-success" data-target="#Modal"><i class="fa fa-plus"></i> {$MGLANG->T('Add Reminder')}</button>
            {*<button class="addReminderModal btn btn-success" data-toggle="modal" data-target="#Modal"><i class="fa fa-plus"></i> {$MGLANG->T('Add Reminder')}</button>*}
            {*<button class="btn btn-success" data-toggle="modal" data-target="#Modal"><i class="fa fa-plus"></i> {$MGLANG->T('Add Reminder')}</button>*}
        </div>
    </div>
</div>
{*<div id="Modal"></div>*}
{*<div id="modalLoader" class="modal-loader" style="display: none;"></div>*}
{*<div id="Modal" class="modal fade" role="dialog">*}
    {*<div class="modal-dialog" style="width: 70%">*}
        {*<div class="modal-content">*}
            {*<div class="modal-loader"></div>*}
        {*</div>*}
    {*</div>*}
{*</div>*}

<div id="Modal" class="modal"></div>
<div id="modalLoader" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-loader"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="modules/addons/AdvancedBilling/extensions/Notifications/templates/ClientArea/assets/js/mgNotifications.js"></script>



