/* Cell Department */
{ldelim}
    data: null,
    name: "department",
    "render": function (data, row){        
        var text = '',
            collapseButton = '<button type="button" class="btn-table-collapse"></button>',
            department = data.department;

        text = collapseButton + department;
        return text;
    }
{rdelim},

/* Cell Title */
{ldelim} 
    data: null,
    name: "tid",
    "render": function(data, row){ldelim}
        var text = `<div class="text-primary">#`+data.tid+`</div><span class="small">`+data.title+`</span>`;
        return text;
    {rdelim}
{rdelim},

/* Cell Status */
{ldelim}
    data: null,
    name: "status",
    "render": function(data, row){ldelim}
        {if $RSThemes.addonSettings.show_status_icon == 'displayed' && in_array($templatefile, $iconsPages)}
            var text = `<span class="status status-`+data.status.cssFriendly+` {if $RSThemes.addonSettings.show_status_icon == 'displayed'}dot-hidden{/if}">
                {if $RSThemes.addonSettings.show_status_icon == 'displayed'}
                    <span data-status-icon="`+data.status.cssFriendly+`"></span>
                {/if}
                `+data.status.statusText+`</span>
            `;
        {else}
            var text = `<span class="status" style="--status-color:`+data.status.statusColor+`">`+data.status.statusText+`</span>`;
        {/if}    
        return text;
    {rdelim}
{rdelim},

/* Cell Last Reply */
{ldelim} 
    data: null,
    name: "lastreply",
    "render": function(data, row){ldelim}
        var text = data.normalisedlastreply;
        return text;
    {rdelim}
{rdelim}
{if isset($RSThemes['pages'][$templatefile]) && $RSThemes['pages'][$templatefile]['config']['showManageButton'] == "1"}
,
/* Cell Actions */
{ldelim} 
    data: null,
    name: "actions",
    className: "cell-action",
    "render": function (data, row){ldelim}
        text = `<a href="viewticket.php?tid=`+data.tid+`&c=`+data.c+`" class="btn btn-default btn-sm btn-manage">{$_LANG['manage']}</a>`;
        return text;
    {rdelim}
{rdelim}
{/if}