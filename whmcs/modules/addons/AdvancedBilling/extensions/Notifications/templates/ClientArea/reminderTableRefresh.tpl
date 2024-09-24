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
                            <td class="row">
                                <a class="editReminder btn btn-icon"  data-rid="{$reminder.id}" title="{$MGLANG->T('EditIconTitle')}"  ><i class="fa fa-pencil"></i></a>
                                <a class="makeLimits btn btn-icon" data-hid="{$hostingid}" data-rid="{$reminder.id}" title="{$MGLANG->T('DefineLimitsIconTitle')}"  ><i class="fa fa-tasks"></i></a>
                                <a class="deleteReminder btn btn-icon" data-rid="{$reminder.id}" title="{$MGLANG->T('DeleteIconTitle')}"><i class="fa fa-trash"></i></a>
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

{literal}
    <script>
        $.when($(".bootstrap-switcher").bootstrapSwitch());
    </script>
{/literal}

