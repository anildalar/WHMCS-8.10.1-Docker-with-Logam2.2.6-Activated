$.fn.bootstrapSwitch.defaults.handleWidth = 70;    

function postAJAX(url, data, calltype, container, callbackfunc, async)
{
    var page    = url.substr(0, url.indexOf("|") );
    var action  = url.substr(url.indexOf("|")+1, url.length);
    
    callbackfunc = typeof callbackfunc !== 'undefined' ?  callbackfunc : 0;
    calltype = typeof calltype !== 'undefined' ?  calltype : 0;
    async = typeof async !== 'undefined' ?  async : true;
    
    if(calltype)
    {
        calltype = calltype + "=1";
    }
    
    return $.ajax({
        type: "POST",
        url: "addonmodules.php?module=AdvancedBilling&mg-page="+page+"&"+calltype+"&mg-action="+action,
        data: data,
        async: async,
        success: function(result){
            //var data = $.parseJSON(result);
            $("#"+container+"").html(result.alert);    

            if(callbackfunc)
            {
                callbackfunc(result.result);
            }  
        },
        dataType: 'json',
    });    
}

function customDataTablePagination(mainselector, datatable)
{
    jQuery(mainselector).on('change', '#pagination_select', function(){
        var page = $(this).val() - 1;
        datatable.api().page(page).draw(false);
    });
        
    $(".dataTable").on("draw.dt", function (e) 
    {			 	        
        setCustomPagingSigns.call($(this), datatable.fnPagingInfo().iPage, datatable.fnPagingInfo().iTotalPages);
    })
    .each(function () 
    {
        setCustomPagingSigns.call($(this), datatable.fnPagingInfo().iPage, datatable.fnPagingInfo().iTotalPages); // initialize
    });
}

function setCustomPagingSigns(page, total) 
{
    var wrapper = this.parent();
    var padding = '13.5px';

    //Show input for pages only if there is more then 10
    if(total > 10)
    {
        wrapper.find(".pagination").children().children().css('padding', padding);
        wrapper.find(".pagination").children('.active').replaceWith("<li><span style='padding: 6.5px'><input style='width:45px' id='pagination_select' class='form-control' value='"+(page+1)+"' /></span></li>");
        
        console.log(wrapper.find("#pagination_select"));
        wrapper.find("#pagination_select").parent().css('padding', "6px");
    }
}