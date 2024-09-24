{literal}
<script type="text/javascript">
APU_CAController = {
    init: function()
    {
        $(".bootstrap-switcher").bootstrapSwitch();
        APU_CAController.refreshHandlers();
    },
    
    refreshHandlers: function()
    {
        APU_CAController.togglePanel();
        APU_CAController.toggleRules();
        APU_CAController.toggleHistory();
        APU_CAController.toggleAutoProductUpdate();
        APU_CAController.editRules();
        APU_CAController.saveConfiguration();
    },
    
    togglePanel: function()
    {
        $(".ShowHideConfigurationBtn").unbind("click");
        
        $(".ShowHideConfigurationBtn").on("click", function(){
            var panel = $("#panel_body_configuration");
            if(panel.is(":visible")) {
                $("#panelSwitcherConfEnabled").hide();
                $("#panelSwitcherConfDisabled").show();
                panel.hide();
            }
            else {
                $("#panelSwitcherConfEnabled").show();
                $("#panelSwitcherConfDisabled").hide();
                panel.show();
            }
            
        });
    },
    
    toggleAutoProductUpdate: function()
    {
        $("#panel_switcher").unbind('switchChange.bootstrapSwitch');
        
        $("#panel_switcher").on('switchChange.bootstrapSwitch', function(event, state) {
            if(state)
            {
                $("#enable-autoscale").val(1);
            }
            else
            {
                $("#enable-autoscale").val(0);
            }
        });
    },
    
    toggleRules: function()
    {
        $(".toggleDisplayRules").unbind("click");
        
        $(".toggleDisplayRules").on("click", function(e)
        {
            e.preventDefault();
            if($(this).hasClass("opened"))
            {
                $(this).parents(".tab-pane").find(".manage-rules").hide();
                $(this).html("{/literal}{$MGLANG->T('Show Rules')}{literal}");
                $(this).removeClass("opened");
            }
            else
            {
                $(this).parents(".tab-pane").find(".manage-rules").show();
                $(this).html("{/literal}{$MGLANG->T('Hide Rules')}{literal}");
                $(this).addClass("opened");
            }
        });
    },
    
    toggleHistory: function()
    {
        $("#toggleHistory").unbind("click");
        $("#toggleHistory").on("click", function(e)
        {
            e.preventDefault();
            if($(this).hasClass("opened"))
            {
                $("#ABASHistory").hide();
                $(this).removeClass("opened");
            }
            else
            {
                $("#ABASHistory").show();
                $(this).addClass("opened");
                APU_CAController.showHistory();
            }
        });
    }, 
    
    showHistory: function(page)
    {
        if(page === undefined)
        {
            page = 1;
        }
        
        $('.APUHistory table tbody tr[data-row]').remove();
        $('.APUHistory table tbody').append('<tr data-row><td colspan="5" align="center"><img src="assets/img/loading.gif"/></td><tr>');

        APU_CAController.postAJAX({APUHistoryPage: page, APUHistory: 'show'}, function(result)
        {
            $('.APUHistory table tbody tr').not('tr[data-prototype]').remove();
            $('.APUHistory .pagination li').not('li[data-prototype], li[data-last], li[data-first]').remove();
            if(result.pagesAmount > 0)
            {
                APU_CAController.createPagination(page, result.pagesAmount); 

                $.each(result.records, function( key, row) {
                    APU_CAController.addNotificationRecord(row.updateTime, row.type, row.oldOptionName, row.newOptionName, row.message);
                });
            }
            else
            {
                $('.APUHistory table tbody').append('<tr><td colspan="5" align="center">{/literal}{$MGLANG->T("There is nothing to show")}{literal}</td><tr>');
            }

            $(".APUHistory .pagination li a").unbind("click");
            $(".APUHistory .pagination li a").on('click', function(e){
                e.preventDefault();

                if(!$(this).parent().hasClass('disabled'))
                {
                    var id = jQuery(this).attr('href').replace('#', '');
                    APU_CAController.showHistory(id);
                }
            });
        });
    },         
    
    createPagination: function(page, pagesAmount)
    {
        var max = 10;

        var from = 1;
        var to = pagesAmount;
        var addFirst = false;
        var addLast = false;

        page = parseFloat(page);

        if(pagesAmount > max)
        {
            if(page - max/2 < 0)
            {
                to = max - 1;
                addLast = pagesAmount;
            }
            else if(page + max/2 > pagesAmount)
            {
                addFirst = 1;
                from = page + 3 -(max/2) + (pagesAmount - page - max/2);
                to = pagesAmount;
            }
            else
            {
                addFirst = 1;
                from = page + 3 - (max/2);
                to = page + (max/2) - 2;

                addLast = pagesAmount;
            }
        }

        if(addFirst)
        {
            APU_CAController.addPaginationPageBtn(addFirst);
            APU_CAController.addPaginationPageBtn('...',false,true);
        }

        for(var i=from; i <= to; i++)
        {
            APU_CAController.addPaginationPageBtn(i, (i == page));
        }  

        if(addLast)
        {
            APU_CAController.addPaginationPageBtn('...',false,true);
            APU_CAController.addPaginationPageBtn(addLast);
        }

        if(page > 1)
        {
            $(".APUHistory .pagination li[data-first]").attr('disabled', false);
            $(".APUHistory .pagination li[data-first]").removeClass('disabled');
            $(".APUHistory .pagination li[data-first]").find("a").attr('href', "#" + (page-1));
        }
        else
        {
            $(".APUHistory .pagination li[data-first]").addClass('disabled');
            $(".APUHistory .pagination li[data-first]").attr('disabled', true);
            $(".APUHistory .pagination li[data-first]").find("a").attr('href', "");
        }
        
        if(page < pagesAmount)
        {
            $(".APUHistory .pagination li[data-last]").attr('disabled', false);
            $(".APUHistory .pagination li[data-last]").removeClass('disabled');
            $(".APUHistory .pagination li[data-last]").find("a").attr('href', "#" + (page+1));
        }
        else
        {
            $(".APUHistory .pagination li[data-last]").addClass('disabled');
            $(".APUHistory .pagination li[data-last]").attr('disabled', true);
            $(".APUHistory .pagination li[data-last]").find("a").attr('href', "#");
        }

        $(".pagination").show();
    },
    
    addPaginationPageBtn: function(number, active, disabled)
    {
        var clone = $('.APUHistory .pagination li[data-prototype]').clone();
        clone.removeAttr('style');
        clone.removeAttr('data-prototype');

        clone.find('a').text(number);

        if(number !== '...')
        {
            clone.find('a').attr('href','#'+number);
        }

        if(active)
        {
            clone.addClass('active');
        }

        if(disabled)
        {
            clone.addClass('disabled');
        }

        clone.insertBefore('.APUHistory .pagination li[data-last]');
    },

    addNotificationRecord: function(updateTime, type, oldOption, newOption, message)
    {
        var clone = $(".APUHistory table tbody tr[data-prototype]").clone();
        clone.find('td[data-date]').text(updateTime);
        clone.find('td[data-type]').text(type);
        clone.find('td[data-oldOption]').text(oldOption);
        clone.find('td[data-newOption]').text(newOption);
        clone.find('td[data-status]').text(message);

        clone.removeAttr('data-prototype');
        clone.removeAttr('style');

        $('.APUHistory table tbody').append('<tr data-row>'+clone.html()+'</tr>');
    },
    
    editRules: function()
    {
        $(".editRulesValues").on("click", function(){
            $(this).hide();
            $(this).parent().find("input").show();
            $(this).parent().find("span").hide();
        });
    },
    
    saveConfiguration: function()
    {
        $(".saveConfigurationBtn").on("click", function(e){
            $(".validationError").remove();
            APU_CAController.validate();

            if($(".validationError").length !== 0)
            {
                e.preventDefault();
            }
        });
    },
    
    validate: function()
    {
        $("#ABAutoscale input[name$='[value]']").each(function(){
            if(! $.isNumeric($(this).val()) )
            {
                $(this).after('<span class="validationError" style="color: #800">{/literal}{$MGLANG->T("Provided value is invalid")}{literal}</span>');
            }
        });

        $("#ABAutoscale input[name='autoscale-interval']").each(function(){
            if(! $.isNumeric($(this).val()) )
            {
                $(this).after('<span class="validationError" style="color: #800">{/literal}{$MGLANG->T("Provided value is invalid")}{literal}</span>');
                return;
            }

            var intervalOptions = "{/literal}{$settings->timeIntervalOptions}{literal}";
            var max = parseInt(intervalOptions.substring(intervalOptions.indexOf("-")+1, intervalOptions.length));
            if($(this).val() > max)
            {
                $(this).after('<span class="validationError" style="color: #800">{/literal}{$MGLANG->T("Provided value must be lower then")}{literal} '+max+'</span>');
            }

            var min = parseInt(intervalOptions.substring(0, intervalOptions.indexOf("-")));
            if($(this).val() < min)
            {
                $(this).after('<span class="validationError" style="color: #800">{/literal}{$MGLANG->T("Provided value must be higher then")}{literal} '+min+'</span>');
            }
        });
    },
    
    postAJAX: function(data, callbackfunc)
    {
        callbackfunc = typeof callbackfunc !== 'undefined' ?  callbackfunc : 0;
        return $.ajax({
            type: "POST",
            url: window.location.href,
            data: data,
            dataType: 'json',
            success: function(result){
                if(callbackfunc)
                {
                    callbackfunc(result);
                }  
            }
        });    
    }
}

APU_CAController.init();
</script>
{/literal}