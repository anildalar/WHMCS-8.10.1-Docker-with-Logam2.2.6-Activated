<div id="Modal" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h3>{$MGLANG->T('Option Description')}: <b>{$option->name}</b></h3>
            </div>
            <div class="modal-body">
                <form id="descriptionForm" data-optionid="{$option->id}">
                    <ul class="navigationTabs nav nav-tabs" role="tablist">
                        {if !$descriptions->isEmpty()}
                            {foreach from=$descriptions key=index item=description}
                                <li role="presentation" {if $index eq 0}class="active"{/if}>
                                    <a href="#description{$description->language}Tab" aria-controls="description{$description->language}Tab" data-tabid="description{$description->language}Tab" data-tablang="{$description->language}" role="tab" data-toggle="tab"><span>{$description->language|ucfirst}</span> <i class="glyphicon glyphicon-remove"></i></a>
                                </li>
                            {/foreach}
                        {else}
                            <li role="presentation"class="active">
                                <a href="#descriptionEnglishTab" aria-controls="descriptionEnglishTab" data-tabid="descriptionEnglishTab" data-tablang="English" role="tab" data-toggle="tab"><span>English</span> <i class="glyphicon glyphicon-remove"></i></a>
                            </li>
                        {/if}
                    </ul>

                    <!-- Tab panes -->
                        <div class="contentTabs tab-content">
                            {if !$descriptions->isEmpty()}
                                {foreach from=$descriptions key=index item=description}
                                    <div role="tabpanel" class="tab-pane {if $index eq 0}active{/if}" id="description{$description->language}Tab">
                                        <textarea class="form-control" style="width: 100%;height:250px; margin-bottom: 10px" name="{$description->language}">{$description->content}</textarea>
                                    </div>
                                {/foreach}
                            {else}
                                <div role="tabpanel" class="tab-pane active" id="descriptionEnglishTab">
                                    <textarea class="form-control" style="width: 100%;height:250px; margin-bottom: 10px" name="English"></textarea>
                                </div>
                            {/if}
                        </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <select class='form-control form-inline pull-right' id="langSelect" style='width: 200px'>
                                {foreach from=$languages item=language}
                                    <option name="{$language}" value="{$language}">{$language}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <button class="addDescriptionLangBtn btn btn-success btn-inverse pull-left">{$MGLANG->T('Add')}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="saveBtn btn btn-success btn-inverse">{$MGLANG->T('Save')}</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">{$MGLANG->T('Cancel')}</button>
            </div>
        </div>
    </div>
</div>
            
{literal}                
<script type="text/javascript">
    refreshHandlers();

    function initModal()
    {
        $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
        {
            $('#Modal').modal('show');
        });
        
        {/literal}
            {if $descriptions->isEmpty()}
                $("#langSelect option[name='English']").prop('disabled', true); 
                $("#langSelect option[name='English']").prop('style', "color: #CCC"); 
            {else}
                {foreach from=$descriptions item=description}
                    $("#langSelect option[name='{$description->language}']").prop('disabled', true); 
                    $("#langSelect option[name='{$description->language}']").prop('style', "color: #CCC"); 
                {/foreach}
            {/if}
            $("#langSelect option:not([disabled])").first().prop("selected", true);
        {literal}
    }
    
    function refreshHandlers()
    {
        $(".navigationTabs").unbind("click");
        $(".saveBtn").unbind("click");
        $(".addDescriptionLangBtn").unbind("click");

        //Remove Lang
        $(".navigationTabs").on("click", 'i', function(e)
        {
            var id = $(this).parent().data('tabid');
            var language = $(this).parent().data('tablang');
            var changeActive = false;
            
            if($(this).parent().parent().hasClass("active"))
            {
                changeActive = true;
            }
            
            $("#"+id).remove();
            $(this).parent().parent().remove();
            
            if(changeActive)
            {
                $(".navigationTabs li").last().addClass('active');
                $(".contentTabs div").last().addClass('active');    
            }
            
            $("#langSelect option[name='"+language+"']").removeProp('disabled', true); 
            $("#langSelect option[name='"+language+"']").prop('style', "color: #000"); 

            var optionId = $("#descriptionForm").data("optionid");
            postAJAX("OptionsManage|deleteDescription", {optionId: optionId, language: language}, "extensionPage=ProductAutoUpgrade&json", null);
        });
        
        $(".addDescriptionLangBtn").on('click', function(e)
        {
            e.preventDefault();
            var language = $("#langSelect").val(); 
            if(!language){
                return;
            }
            
            $("#langSelect option[name='"+language+"']").prop('disabled', true); 
            $("#langSelect option[name='"+language+"']").prop('style', "color: #CCC"); 
            $("#langSelect option:not([disabled])").first().prop("selected", true);
            
            $("#noDescriptionInfo").hide();

            $(".navigationTabs").append('<li role="presentation"><a href="#description'+language+'Tab" aria-controls="description'+language+'Tab" data-tabid="description'+language+'Tab" data-tablang="'+language+'" role="tab" data-toggle="tab"><span>'+language+'</span> <i class="glyphicon glyphicon-remove"></i></a></li>');
            $(".contentTabs").append('<div role="tabpanel" class="tab-pane" id="description'+language+'Tab"><textarea class="form-control" style="width: 100%; height:250px; margin-bottom: 10px" name="'+language+'"></textarea></div>');

            $(".navigationTabs [class='active']").removeClass('active');
            $(".navigationTabs li").last().addClass('active');

            $(".contentTabs [class='tab-pane active']").removeClass('active');
            $(".contentTabs div").last().addClass('active');

            refreshHandlers();
        });
        
        $(".saveBtn").on('click', function(){
            var optionId = $("#descriptionForm").data("optionid");
            var descriptions = {};
            $.each($('#descriptionForm').serializeArray(), function() 
            {
                descriptions[this.name] = this.value;
            });
            
            postAJAX("OptionsManage|saveDescriptionConfiguration", {optionid: optionId, descriptions: descriptions}, "extensionPage=ProductAutoUpgrade&json", "resultMessage");
        });
    }
    

    
</script>
{/literal}   