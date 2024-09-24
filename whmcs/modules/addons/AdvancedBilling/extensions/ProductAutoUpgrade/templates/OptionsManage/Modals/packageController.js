{literal}
<script type="text/javascript">
var APU_packageController = {
    
    configOptionsTable: null,
    
    init: function()
    {
        APU_packageController.initDataTable();
        APU_packageController.addConfigOption();
    },
    
    refreshHandlers: function()
    {
        APU_packageController.deleteConfigOption()
    },
    
    saveConfiguration: function()
    {
        var optionId = $("#packageConfigForm").data('optionid');
        var form = $("#packageConfigForm").serializeArray();

        var assoc = {};
        $.each(form, function(index, row){
            assoc[row.name] = row.value;
        });

        assoc['optionid'] = optionId;
    
        postAJAX("OptionsManage|savePackageConfiguration", {data: assoc}, "extensionPage=ProductAutoUpgrade&json", "resultMessage");
    },
    
    addConfigOption: function()
    {
        $("#addConfigOption").on("click", function(e){
            e.preventDefault();
            
            var optionId = $("#packageConfigForm").data('optionid');
            var configoptionId = $("[name='configoption']").val();

            if(configoptionId != 'empty')
            {
                postAJAX("OptionsManage|addPackageOption", {optionid: optionId, configoptionid: configoptionId}, "extensionPage=ProductAutoUpgrade&json", null, function(){
                    APU_packageController.configOptionsTable.fnDraw();
                });
            }
        });      
    },
    
    deleteConfigOption: function()
    {
        $(".btnDeleteConfigOption").on("click", function(e){
            e.preventDefault();
            
            var optionId = $("#packageConfigForm").data('optionid');
            var configoptionId = $(this).data("configoptionid");
 
            postAJAX("OptionsManage|deletePackageOption", {optionid: optionId, configoptionid: configoptionId}, "extensionPage=ProductAutoUpgrade&json", null, function(){
                APU_packageController.configOptionsTable.fnDraw();
            });
        });
    },
    
    initDataTable: function()
    {
        APU_packageController.configOptionsTable = $('#confOptionsTable').dataTable({
            bProcessing: true,
            bServerSide: true,
            searching: false,
            autoWidth: false,
            sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=OptionsManage&mg-action=getPackageOptions&extensionPage=ProductAutoUpgrade&json=1",
            ordering: false,
            bPaginate: false,
            columns: [
                { data: "name" },
                { data: "setting" },
                { data: "actions" }
            ],         
            fnDrawCallback: function(data){
                APU_packageController.disableUsedOptions(data.aoData);
                APU_packageController.refreshHandlers();
            },
            fnServerParams: function(data) {
                    data.push(
                        {name: "optionid", value:  $('#packageConfigForm').data("optionid")}
                    );
            },
            sDom: 't'
        });
    },
    
    disableUsedOptions: function(data)
    {
        $("[name='configoption'] option").each(function(){
            $(this).attr("disabled", false);
            $(this).css("color", "#333333");

            if($(this).val() == 0)
            {
                $(this).remove();
            }
        });
        
        $.each(data, function(index, row){
            var info = row._aData
            $("[name='configoption'] option").each(function(index, row){
                if($(this).val() == info.configoptionid)
                {
                    $(this).attr("disabled", true);
                    $(this).css("color", "#AAA");
                }
            });
        });    
        
        $("[name='configoption']").val('empty');
    },
}

function initModal()
{
    APU_packageController.init();
    $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
    {
        $('#Modal').modal('show');
    });
}
</script>
{/literal}