{literal}
<script type="text/javascript">
APU_Notifications = {
    init: function()
    {
        var addConfiguration = {/literal}{$notifications->getExistingRules()|@json_encode}{literal};
        for(x in addConfiguration)
        {
            var rule = addConfiguration[x];
            APU_Notifications.addOption(rule.resource,rule.friendlyName,rule.comparison.replace(/&lt;/g,'<').replace(/&gt;/g,'>'),rule.threshold, rule.unit);
        }
        
        APU_Notifications.toggleNotificationPanel();
        APU_Notifications.toggleEnable();
        APU_Notifications.addRuleHandler();
        APU_Notifications.removeRuleHandler();
        
        APU_Notifications.sendForm();
    },
    
    toggleNotificationPanel: function()
    {
        $(".ShowHideNotificationBtn").unbind("click");
        
        $(".ShowHideNotificationBtn").on("click", function(){
            var panel = $("#NotificationPanel");
            if(panel.is(":visible")) {
                $("#panelTitleNotificationShow").hide();
                $("#panelTitleNotificationHide").show();
                panel.hide();
            }
            else {
                $("#panelTitleNotificationShow").show();
                $("#panelTitleNotificationHide").hide();
                panel.show();
            }
            
        });
    },
            
    toggleEnable: function()
    {
        $("#notificationSwitcher").unbind('switchChange.bootstrapSwitch');
        
        $("#notificationSwitcher").on('switchChange.bootstrapSwitch', function(event, state) {
            if(state)
            {
                $("#enable-notifications").val(1);
            }
            else
            {
                $("#enable-notifications").val(0);
            }
        });
    },
    
    addRuleHandler: function()
    {
        $('#ABNotifications button[name=add]').click(function(){
            APU_Notifications.addOption(
            $('#ABNotifications select[name=resourceType] option:selected').val(),
            $('#ABNotifications select[name=resourceType] option:selected').text(),
            '<',
            10,
            $('#ABNotifications select[name=resourceType] option:selected').data('unit'));
        });
    },
    
    removeRuleHandler: function()
    {
        $('#ABNotifications').on('click','button[name=remove]',function(){
            $('#ABNotifications select[name=resourceType] option[value="' +jQuery(this).val()+ '"]').removeAttr('disabled');
            $(this).closest('tr').remove();
            if($('#ABNotifications table tbody tr').not('tr[data-empty]').not('tr[data-prototype]').size() < 1)
            {
                $('#ABNotifications table tbody tr[data-empty]').show();
            }
        });
    },
    
    addOption: function(name, friendlyName, comparison, threshold, unit)
    {
        if(name === undefined)
        {
            return false;
        }

        if($('#ABNotifications select[name=resourceType] option[value="'+name+'"]').val() === undefined)
        {
            return false;
        }

        var clone = $('#ABNotifications table.resourceConfig tr[data-prototype]').clone()

        clone = clone.html();
        clone = clone.replace(/\+new_name\+/g,name);
        clone = clone.replace(/\+new_frendly_name\+/g,friendlyName);
        clone = clone.replace(/\+threshold\+/g,threshold);
        clone = clone.replace(/\+unit\+/g,unit);

        $('#ABNotifications table.resourceConfig tbody').append('<tr data-name="'+name+'">'+clone+'</tr>');
        $('#ABNotifications table.resourceConfig tbody tr[data-name="'+name+'"] select[name$="[comparison]"]').val(comparison);

        $('#ABNotifications table.resourceConfig tbody tr[data-empty]').hide();

        $('#ABNotifications select[name=resourceType] option[value="'+name+'"]').attr('disabled','disabled');
        $('#ABNotifications select[name=resourceType]').val(jQuery('#ABNotifications select[name=resourceType] option').not('*[disabled]').val());
    },
            
    sendForm: function()
    {
        $("#ABNotificationsSubmit").on("click", function(e){
            $(".validationError").remove();
            APU_Notifications.validate();

            if($(".validationError").length !== 0)
            {
                e.preventDefault();
            }
        });
    },
    
    validate: function()
    {
        $("#ABNotifications input[name$='[value]']").each(function(){
            if(! $.isNumeric($(this).val()) )
            {
                $(this).after('<span class="validationError" style="color: #800">{/literal}{$MGLANG->T("Provided value is invalid")}{literal}</span>');
            }
        });

        $("#ABNotifications input[name$='notify-autoscale-interval']").each(function(){
            if(! $.isNumeric($(this).val()) )
            {
                $(".intervalConfiguration").after('<span class="validationError pull-right" style="color: #800">{/literal}{$MGLANG->T("Provided value is invalid")}{literal}</span>');
                return;
            }

            var intervalOptions = "{/literal}{$settings->clientNotifyIntervalOptions}{literal}";
            var max = parseInt(intervalOptions.substring(intervalOptions.indexOf("-")+1, intervalOptions.length));
            if($(this).val() > max)
            {
                $(".intervalConfiguration").after('<span class="validationError pull-right" style="color: #800">{/literal}{$MGLANG->T("Provided value must be lower then")}{literal} '+max+'</span>');
            }

            var min = parseInt(intervalOptions.substring(0, intervalOptions.indexOf("-")));
            if($(this).val() < min)
            {
                $(".intervalConfiguration").after('<span class="validationError pull-right" style="color: #800">{/literal}{$MGLANG->T("Provided value must be higher then")}{literal} '+min+'</span>');
            }
        });
    },

}

APU_Notifications.init();
{/literal}
</script>