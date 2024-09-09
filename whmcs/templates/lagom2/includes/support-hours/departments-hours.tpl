{foreach from=$supportHours item=hoursInstance}
    {assign var=displayOnDepartment value=false}
    {assign var=hoursDepartments value=','|explode:$hoursInstance.departments|replace:'"':''|replace:'[':''|replace:']':''}
    {foreach from=$hoursDepartments item=departmentId}
        {if $departmentId == $department.id || $departmentId == "all"}
            {assign var=displayOnDepartment value=true}
        {/if}
    {/foreach}
    {if $displayOnDepartment}
        <div class="support-time">
            <span class="operating-desc">{$rslang->trans('extensions.operating_hours')}</span>
            {if $hoursInstance.holiday.active == true && $hoursInstance.applyHolidays}
                <label 
                    class="label label-danger label-support-close m-b-0x" 
                    data-toggle="tooltip" 
                    data-html="true" 
                    data-title="{if $hoursInstance.holiday.holiday->holidays_begin == $hoursInstance.holiday.holiday->holidays_end}{$rsSupportHoursLang->trans('general.holiday_one_day')|sprintf2:$hoursInstance.holiday.holiday->name}{else}{$rsSupportHoursLang->trans('general.holidays')|sprintf2:$hoursInstance.holiday.holiday->holidays_begin:$hoursInstance.holiday.holiday->holidays_end:$hoursInstance.holiday.holiday->name}{/if}"
                >
                    {$rsSupportHoursLang->trans('general.closed')}
                    <i class="ls ls-info-circle m-l-1x"></i>
                </label>
            {elseif $hoursInstance.workingNow == true && $hoursInstance.statusDisplay == '1'}
                <label class="label label-success m-b-0x">{$rsSupportHoursLang->trans('general.online')}</label>
            {elseif $hoursInstance.workingNow == false && $hoursInstance.statusDisplay == '1'}
                <label class="label label-danger m-b-0x">{$rsSupportHoursLang->trans('general.offline')}</label>
            {/if}
            <span>
            {if is_array($hoursInstance.days)}
                {$hoursInstance.days.start} - {$hoursInstance.days.end},     
            {else}
                {assign var=supportDays value=','|explode:$hoursInstance.days|replace:' ':''}   
                {foreach from=$supportDays item=supportDay}
                    {$supportDay},   
                {/foreach}
            {/if}
            {if $hoursInstance.allDay}
                {$rsSupportHoursLang->trans('general.available_all_day')}
            {else}
                {$hoursInstance.workhourStartHour} - {$hoursInstance.workhourEndHour} ({$hoursInstance.timezone})
            {/if}    
            </span>
        </div>
    {/if}
{/foreach}