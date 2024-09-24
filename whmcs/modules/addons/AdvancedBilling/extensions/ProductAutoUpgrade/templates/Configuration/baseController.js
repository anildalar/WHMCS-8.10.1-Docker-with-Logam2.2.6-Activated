{literal}
<script type="text/javascript">
var APU_Configuration = {
    
    autoscaleDeletedGroup : 0,
    
    init: function()
    {
        $(".bootstrap-switcher").bootstrapSwitch();
        $("#newConfGroupId").closest(".row").hide();
        
        //handlers        
        $("#newGroupSubmitButtom").on('click', function(e){
            e.preventDefault();
            $("#newGroupModal").modal('show');
        });
        
        $("#deleteGroupBtn").on('click', function(){
            APU_Configuration.deleteGroup();
        });
    },
    
    refreshHandlers : function(){
        $(".bootstrap-switcher").bootstrapSwitch(); 

        $(".groupStatusSwitch").unbind('switchChange.bootstrapSwitch');
        $(".groupStatusSwitch").on('switchChange.bootstrapSwitch', function(event, state){
            var state = state;
            var gid = $(this).data('groupid');
            postAJAX("Configuration|toggleGroup", {'gid': gid, 'state': state}, 'extensionPage=ProductAutoUpgrade&json', "resultMessage");
        });
        
        $(".groupStatusSwitch").unbind('click');
        $(".groupDelete").on('click', function(event, state){
            var gid = $(this).data('groupid');
            
            APU_Configuration.autoscaleDeletedGroup = gid;
            $("#confirmModal").modal('show');
        });
        
        $(".generalConfig").unbind('click');
        $(".generalConfig").on('click', function(){
            var gid = $(this).data('groupid');
            APU_Configuration.getModal('Configuration', 'generalConfig', {gid: gid});
        });

        $(".optionsConfig").unbind('click');
        $(".optionsConfig").on('click', function(){
            var gid = $(this).data('groupid');
            APU_Configuration.getModal('OptionsManage', 'optionsConfig', {gid: gid});
        });
    },
        
    createNewGroup: function()
    {
        var data = $("#newGroupForm").serialize();
        postAJAX("Configuration|AddNewGroup",  
                data,
                'extensionPage=ProductAutoUpgrade&json',
                "resultMessage",
                function(result){
                    APU_Configuration.GroupTable.fnDraw();
                });
    },
    
    deleteGroup: function()
    {
        postAJAX("Configuration|removeGroup", {'gid': APU_Configuration.autoscaleDeletedGroup}, 'extensionPage=ProductAutoUpgrade&json', "resultMessage", function(){
            APU_Configuration.GroupTable.fnDraw();
        });
    },
    
    GroupTable: jQuery('#groupsTable').dataTable({
            bProcessing: true,
            bServerSide: true,
            searching: false,
            autoWidth: false,
            sAjaxSource: "addonmodules.php?module=AdvancedBilling&mg-page=configuration&mg-action=getGroupsList&extensionPage=ProductAutoUpgrade&json=1",
            ordering: false,
            bPaginate: true,
            pagingType: "simple_numbers",
            fnDrawCallback: function(){
                
               APU_Configuration.refreshHandlers();
            },
            LengthMenu: [
                [10, 25, 50, 75, 100],
                [10, 25, 50, 75, 100]
            ],
            iDisplayLength: 10,
            sDom: 't<"table-bottom"<"row"<"col-sm-6"l><"col-sm-6"pL>>>'
    }),
    
    getModal: function(page, action, vars)
    {
        var url = "addonmodules.php?module=AdvancedBilling&mg-page="+page+"&mg-action="+action+"&customPage=1&extensionPage=ProductAutoUpgrade";

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
    },
};

APU_Configuration.init();
</script>
{/literal}