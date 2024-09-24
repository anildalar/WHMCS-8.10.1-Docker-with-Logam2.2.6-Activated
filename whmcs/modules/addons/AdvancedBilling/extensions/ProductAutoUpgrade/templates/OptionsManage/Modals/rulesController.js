{literal}
<script type="text/javascript">
var APU_RulesConfig = {
    init: function()
    {
        APU_RulesConfig.refreshHandlers();
    },
    
    refreshHandlers: function()
    {
        APU_RulesConfig.addResourceHandler();
        APU_RulesConfig.deleteResourceHandler();
    },
    
    addResourceHandler: function()
    {
        $(".addResourceBtn").unbind('click');
            
        $(".addResourceBtn").on('click', function(e)
        {
            e.preventDefault();
            var resource = $("#resourceSelect").val(); 
            
            if(!resource) {
                return;
            }

            var unit = $("#resourceSelect option:selected").data("unit");
            var resourceFriendly = $("#resourceSelect option:selected").text(); 
            $("#resourceSelect option[value='"+resource+"']").prop('disabled', true); 
            $("#resourceSelect option[value='"+resource+"']").prop('style', "color: #CCC"); 
            $("#resourceSelect option:not([disabled])").first().prop("selected", true);
            
            $("#emptyTableInfo").hide();

            var clone = $(".newResourcePrototype tr").clone();
            clone.find("td").first().append(resourceFriendly);
            clone.find("input").first().val(resource);
            clone.find(".newResourceUnit").html(unit);
            clone.find(".deleteBtn").data('resource', resource);

            $("#rulesTable tbody").append(clone);
    
            APU_RulesConfig.refreshHandlers();
        });
    },
    
    deleteResourceHandler: function()
    {
        $(".deleteBtn").unbind('click');
        
        $(".deleteBtn").on("click", function(e)
        {
            e.preventDefault();
            var ruleId = $(this).data('ruleid');
            var resource = $(this).data('resource');

            $("#resourceSelect").find("[value='"+resource+"']").removeAttr("disabled");
            $("#resourceSelect").find("[value='"+resource+"']").prop('style', "color: #333333"); 

            $(this).parent().parent().remove();
        });
    },
    
    saveConfiguration: function()
    {
        if(APU_RulesConfig.validate()) {
           return; 
        }
        
        var optionId = $("#saveBtn").data('optionid');
        var type     = $("#saveBtn").data('type');
        var rules    = $('#rulesForm').serializeArray();
        
        if(rules.length < 1)
        {
            postAJAX("OptionsManage|toggleOption", {optionId: optionId, status: 0}, "extensionPage=ProductAutoUpgrade&json");
            $("tr").each(function(index, element){
                if($(element).data("optionid") == optionId){
                    $(element).find(".statusSwitcher").bootstrapSwitch('state', false, false);
                }
            })
        }
        
        postAJAX("OptionsManage|saveRulesConfiguration", {optionid: optionId, rules: rules, type: type}, "extensionPage=ProductAutoUpgrade&json", "resultMessage");
        $("#Modal").modal("toggle");
    },
    
    validate: function()
    {
        $(".validateError").remove();
        var error = false;
                
        $("#rulesTable input[name='value']").each(function(){
            var input = $(this).val();
            if(!$.isNumeric(input) || input < 1)
            {
                error = true;
                $(this).after("<span class='validateError text-danger'>{/literal}{$MGLANG->T('Invalid Value Provided')}{literal}</span>")
            }
        });
        
        return error;
    },
}

function initModal()
{
    APU_RulesConfig.init();
    $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
    {
        $('#Modal').modal('show');
    });
}
</script>
{/literal}