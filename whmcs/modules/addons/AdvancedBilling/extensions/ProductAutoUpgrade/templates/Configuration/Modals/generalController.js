{literal}
<script type="text/javascript">
var APU_GeneralConfig = {

    init: function(){
        $("[name='clientRulesDisplay']").on('switchChange.bootstrapSwitch', function(event, state)
        {
            APU_GeneralConfig.toggleDisableState($("[name='clientRulesModify']"));
        });

        $("[name='clientIntervalAccountModification']").on('switchChange.bootstrapSwitch', function(event, state)
        {
            if($("[name='timeIntervalOptions']").is(':disabled')) {
                $("[name='timeIntervalOptions']").removeAttr("disabled");
            }
            else {
                $("[name='timeIntervalOptions']").attr("disabled", true);
            }
        });
        
        $("[name='clientIntervalNotificationModification']").on('switchChange.bootstrapSwitch', function(event, state)
        {
            if($("[name='clientNotifyIntervalOptions']").is(':disabled')) {
                $("[name='clientNotifyIntervalOptions']").removeAttr("disabled");
            }
            else {
                $("[name='clientNotifyIntervalOptions']").attr("disabled", true);
            }
        });
    },

    toggleDisableState: function(element)
    {
        if(!element.is(':disabled'))
        {
            element.bootstrapSwitch('state', false, false);
        }

        element.bootstrapSwitch('toggleDisabled', true, true);
    },
    
    saveConfiguration: function()
    {
        var error = APU_GeneralConfig.validate();
        
        var general = {};
        $.each($('#generalConfig').serializeArray(), function() 
        {
            general[this.name] = this.value;
        });
        
        var client = {};
        $.each($('#clientAreaConfig').serializeArray(), function() 
        {
            client[this.name] = this.value;
        });
        
        var autoscaleType = {};
        $.each($('#autoscaleTypeConfig').serializeArray(), function() 
        {
            autoscaleType[this.name] = this.value;
        });
        
        var groupId = $("[name='groupid']").val();
        
        if(!error)
        {
            postAJAX("configuration|saveGroupConfig", 
                    {groupId: groupId, general: general, client: client},
                    "extensionPage=ProductAutoUpgrade&json", 
                    "resultMessage"
            );
            
            $("#Modal").modal('toggle');
        }
    },
    
    validate: function()
    {
        $('.validationError').remove();
        var errortxt = "<span class='validationError text-danger'>{/literal}{$MGLANG->T('Invalid value provided')}{literal}</span>"
        var error = false;
        $("#generalConfig input[type='text']").each(function(){
            if(! $(this).val())
            {
                error = true;
                $(this).after(errortxt);
            }
        });
        
        $("#clientAreaConfig input[type='text']").each(function(){
            if(! $(this).val())
            {
                error = true;
                $(this).after(errortxt);
            }

            if($(this).attr('name') == 'clientIntervalAccountValues')
            {
                str = $(this).val();
                if(str.indexOf("-") <= 0 || str.length <= str.indexOf("-")+1)
                {
                    error = true;
                    $(this).after(errortxt);
                }
            }
        });
        
        $("#autoscaleTypeConfig input[type='text']").each(function(){
            if(! $(this).val())
            {
                error = true;
                $(this).after(errortxt);
            }
            
        });
        
        return error;
    }
}

function initModal(){
    $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
    {
        $('#Modal').modal('show');
        APU_GeneralConfig.init();
    });
}
</script>
{/literal}