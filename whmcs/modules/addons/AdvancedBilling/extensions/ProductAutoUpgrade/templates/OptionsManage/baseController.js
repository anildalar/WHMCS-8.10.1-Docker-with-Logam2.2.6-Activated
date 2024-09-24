{literal}
<script type="text/javascript">
var APU_OptionsConfig = {
    
    init: function()
    {
        APU_OptionsConfig.refreshHandlers();
    },
    
    refreshHandlers: function()
    {
        $(".bootstrap-switcher").bootstrapSwitch();

        APU_OptionsConfig.addNewOptionHandler();
        APU_OptionsConfig.configTopRulesHandler();
        APU_OptionsConfig.configBottomRulesHandler();
        APU_OptionsConfig.configPackageHandler();
        APU_OptionsConfig.configDescriptionHandler();
        APU_OptionsConfig.toogleOptionHandler();
        APU_OptionsConfig.deleteHandler();
        APU_OptionsConfig.sortableHandler();
        
        APU_OptionsConfig.removeUnusedButtonsRules();
    },
    
    saveGroupOptionsHandler: function()
    {
        var sort = [];
        $("#sortable tr").each(function(index, element){
            sort.push($(element).data('optionid'));
        });

        postAJAX("OptionsManage|saveGroupOptions", {options: sort}, "extensionPage=ProductAutoUpgrade&json", 'resultMessage');
    },
    
    configTopRulesHandler: function()
    {
        $("[name='top-rules']").unbind('click');
        
        $("[name='top-rules']").on('click', function()
        {
            var optionid = $(this).data('optionid');
            var groupid = $("table").data('groupid');
            APU_OptionsConfig.getModal("rulesConfiguration", {optionid: optionid, groupid: groupid, type: "top"});
        });
    },
    
    configBottomRulesHandler: function()
    {
        $("[name='bottom-rules']").unbind('click');
        
        $("[name='bottom-rules']").on('click', function()
        {
            var optionid = $(this).data('optionid');
            var groupid = $("table").data('groupid');
            APU_OptionsConfig.getModal("rulesConfiguration", {optionid: optionid, groupid: groupid, type: "bottom"});
        });
    },
    
    configPackageHandler: function()
    {
        $("[name='packageConfiguration']").on('click', function()
        {
            var optionid = $(this).data('optionid');
            var groupid = $("table").data('groupid');
            APU_OptionsConfig.getModal("packageConfiguration", {optionid: optionid, groupid: groupid});
        });
    },
    
    configDescriptionHandler: function()
    {
        $("[name='description']").on('click', function()
        {
            var optionid = $(this).data('optionid');
            APU_OptionsConfig.getModal("descriptionConfiguration", {optionid: optionid});
        });  
    },
    
    toogleOptionHandler: function(){
        $(".statusSwitcher").unbind('switchChange.bootstrapSwitch');
        $(".statusSwitcher").on('switchChange.bootstrapSwitch', function(event, state) {
            var optionid = $(this).data('optionid');
            
            postAJAX("OptionsManage|toggleOption", {optionid: optionid, state: state}, "extensionPage=ProductAutoUpgrade&json", 'resultMessage', function(result){
                if(result.status != 'success')
                {
                    $("#sortable tr").each(function(index, element){
                       if($(element).data("optionid") == result.optionid)
                       {
                           $(element).find(".statusSwitcher").bootstrapSwitch('state', false, false);
                       }
                    });
                }
            }); 
        });
    },
    
    deleteHandler: function()
    {
        $("[name='deleteOptionModal']").on('click', function(e)
        {
            e.preventDefault();
            var optionid = $(this).data('optionid');

            $('#confirmModal').modal('show');
            $("#deleteOptionBtn").on('click', function(e)
            {
                postAJAX("OptionsManage|deleteOption", {optionid: optionid}, "extensionPage=ProductAutoUpgrade&json", 'resultMessage', 
                    function(result)
                    {
                        if(result.status == 'success')
                        {
                            //This is not the best way to do that!
                            $("#sortable tr").each(function(index, element){
                                if($(element).data("optionid") == result.optionid){
                                    element.remove();
                                }
                            });
                            
                            APU_OptionsConfig.refreshHandlers();
                        }
                    }
                );
            });
        });
    },
    
    addNewOptionHandler: function(){
        $("#addNewOptionBtn").unbind('click');
        
        $("#addNewOptionBtn").on('click', function()
        {
            var gid  = $(this).data('groupid');
            var name = $("[name='newOptionName']").val();
            postAJAX("OptionsManage|addNewOption", {gid: gid, name: name}, "extensionPage=ProductAutoUpgrade&json", 'resultMessage',
                function(result)
                {
                    if(result.success)
                    {
                        var clone  = $(".newOptionPrototype tr").clone();
                        clone.data("optionid", result.optionid);
                        clone.find(".editableOptionName").data("pk", result.optionid);
                        clone.find(".editableOptionName").html(result.name);
                        clone.find(".rulesBtn[name='top-rules']").data("optionid", result.optionid);
                        clone.find(".rulesBtn[name='bottom-rules']").data("optionid", result.optionid);
                        clone.find("[name='packageConfiguration']").data("optionid", result.optionid);
                        clone.find("[name='description']").data("optionid", result.optionid);
                        clone.find(".statusSwitcher").data("optionid", result.optionid);
                        clone.find(".statusSwitcher").addClass("bootstrap-switcher");
                        clone.find("[name='deleteOptionModal']").data("optionid", result.optionid);

                        $(".newOptionPlaceholder").before(clone);
                        APU_OptionsConfig.refreshHandlers();
                    }
                }
            );
        });
    },
    
    sortableHandler: function(){
        $("#sortable").sortable({
            cancel: '.newOptionPlaceholder',
            update: function( event, ui ) 
            {
                var orderArray = [];
                $.each($('.table tbody tr'),function(index,value)
                { 
                    orderArray.push({ id: $(this).find('button').data('optionid'), order: value.sectionRowIndex });
                });

                APU_OptionsConfig.removeUnusedButtonsRules();
            }
        });
    },
    
    removeUnusedButtonsRules: function()
    {
        //Show All
        $("#sortable tr").find("[name='top-rules']").show();
        $("#sortable tr").find("[name='bottom-rules']").show();
        
        //Hide first and last
        $("#sortable tr").first().find("[name='top-rules']").hide();
        $("#sortable tr").eq(-2).find("[name='bottom-rules']").hide();
    },
    
    getModal: function(action, vars)
    {
        var url = "addonmodules.php?module=AdvancedBilling&mg-page=OptionsManage&mg-action="+action+"&customPage=1&extensionPage=ProductAutoUpgrade";
        
        $('#modalLoader').modal('show');
        $.ajax({
            type: "GET",
            url: url,
            data: vars,
            success: function(content){
                $('#modalLoader').modal('hide');
                $("#Modal").replaceWith(content);
                initModal();
            },
            dataType: 'html'
        });
    }
}

APU_OptionsConfig.init();
</script>
{/literal}