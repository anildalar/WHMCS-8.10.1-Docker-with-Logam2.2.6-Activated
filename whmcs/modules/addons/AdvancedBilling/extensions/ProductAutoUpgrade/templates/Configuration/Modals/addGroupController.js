{literal}
<script type="text/javascript">
var APU_AddGroup = {

    init: function(){
        
        $(".btnCreateGroup").on("click", function(e){
            APU_AddGroup.submit();
        });
        
        $("#enableConfigOp").on('switchChange.bootstrapSwitch', function(event, state) {
            APU_AddGroup.toggleOptionGroup(state);
        });
        
        $("#newProductId").on("change", function(){
            APU_AddGroup.getConfigOptionsForProduct();
        });
    },

    resetForm: function()
    {
        $("#enableConfigOp").bootstrapSwitch('state', false, false);
        $("#newGroupName").val('');
        $("#newProductId").val($("#newProductId option:first").val());
        $("#newConfGroupId").attr("disabled", true);
        APU_AddGroup.getConfigOptionsForProduct();
    },

    submit: function()
    {
        APU_AddGroup.validate();
        
        if($(".validationError").first().length == 0)
        {
            var data = $("#newGroupForm").serialize();
            postAJAX(
                "Configuration|AddNewGroup",  
                data,
                'extensionPage=ProductAutoUpgrade&json',
                "addGroupAlertMsg",
                function(result){
                    if(result == 'success')
                    {
                        APU_Configuration.GroupTable.fnDraw();
                        $('#newGroupModal').modal('hide');
                        APU_AddGroup.resetForm();
                    }
                }
            );
        }
    },
    
    toggleOptionGroup: function(state)
    {
        if(state) {
            APU_AddGroup.getConfigOptionsForProduct();
            $("#newConfGroupId").closest(".row").slideDown();
            $("#newConfGroupId").attr("disabled", false);
        }
        else {
            $("#newConfGroupId").closest(".row").slideUp();
            $("#newConfGroupId").attr("disabled", true);
        }
    },
    
    getConfigOptionsForProduct: function()
    {
        var pid = $("#newProductId").val();
        
        postAJAX("Configuration|getConfigOptionGroup", 
            {'pid': pid},
            'extensionPage=ProductAutoUpgrade&json', 
            null,
            function(result){
                $("#newConfGroupId").empty();
                
                $.each(result.groups, function(index, group){
                    $("#newConfGroupId").append("<option value="+group.id+">"+group.name+"</option>");
                });
        });
    },
    
    validate: function()
    {
        $(".validationError").remove();
        var errortxt = "<span class='validationError text-danger'>{/literal}{$MGLANG->T('Invalid value provided')}{literal}</span>";
        if(! $("#newGroupName").val())
        {
            $("#newGroupName").after(errortxt);
        }
    }
}
APU_AddGroup.init();
</script>
{/literal}