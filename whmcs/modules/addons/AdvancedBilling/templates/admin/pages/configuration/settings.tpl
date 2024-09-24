<div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
                <input name="pid" value="{$product->id}" hidden />
                <div class="modal-header">
                    <h3 class="modal-title">{$MGLANG->T('Set Settings For')} <b>{$product->name}</b></h3>
                    <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        {foreach from=$extensions key=index item=extension}
                                <li role="presentation" {if $index eq 0}class="active"{/if}>
                                    <a href="#{$extension->name}Tab" aria-controls="{$extension->name}Tab" role="tab" data-toggle="tab">{$MGLANG->T($extension->friendlyName)}</a>
                                </li>
                        {/foreach}
                        {if $configuration}
                            <li role="presentation">
                                <a href="#moduleSettingsTab" aria-controls="moduleSettingsTab" role="tab" data-toggle="tab">{$MGLANG->T("Module Settings")}</a>
                            </li>
                        {/if}
                        {if $globalSettings}
                            <li role="presentation">
                                <a href="#globalSettingsTab" aria-controls="globalSettingsTab" role="tab" data-toggle="tab">{$MGLANG->T("Global Settings")}</a>
                            </li>
                        {/if}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    {if $extensions or $configuration or $globalSettings}
                        <div role="tabpanel" class="tab-pane" id="moduleSettingsTab">
                            <form id="moduleSettings">
                                {foreach from=$configuration key=name item=field}

                                    <div class='row' style='margin-bottom: 10px'>
                                        <label class="col-sm-3 control-label text-right" style="line-height: 35px;">{$MGLANG->T($field.friendlyName)}</label>
                                        <div class="col-sm-{if $field.style.colWidth}{$field.style.colWidth}{else}9{/if}">
                                            {if $field.type eq 'select'}
                                                <select name="{$name}" class="form-control">
                                                    {foreach from=$field.options item=option key=opValue}
                                                        <option value="{$opValue}" {if $opValue==$field.value}selected{/if}>
                                                            {$option}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            {/if}
                                            {if $field.type eq 'text'}
                                                <input name="{$name}" type="text" value="{$field.value}"  class="form-control" style="width: {if $field.style.width}{$field.style.width}{else}40%{/if}">
                                            {/if}
                                            {if $field.type eq 'password'}
                                                <input name="{$name}" type="password" value="{$field.value}"  class="form-control" style="width: {if $field.style.width}{$field.style.width}{else}40%{/if}">
                                            {/if}
                                        </div>
                                    </div>
                                {/foreach}
                            </form>
                        </div>
                        <div class="alert alert-danger" id="extensionAlert" style="display: none"></div>
                        <div role="tabpanel" class="tab-pane" id="globalSettingsTab">
                            <form id="globalSettings">
                                {foreach from=$globalSettings key=name item=field}

                                    <div class='row' style='margin-bottom: 10px'>
                                        <label class="col-sm-3 control-label text-right" style="line-height: 35px;">{$MGLANG->T($field.friendlyName)}</label>
                                        <div class="col-sm-{if $field.style.colWidth}{$field.style.colWidth}{else}9{/if}">
                                            {if $field.type eq 'select'}
                                                <select name="{$name}" class="form-control">
                                                    {foreach from=$field.options item=option key=opValue}
                                                        <option value="{$opValue}" {if $opValue==$field.value}selected{/if}>
                                                            {$option}
                                                        </option>
                                                    {/foreach}
                                                </select>
                                            {/if}
                                            {if $field.type eq 'text'}
                                                <input name="{$name}" type="text" value="{$field.value}"  class="form-control" style="width: {if $field.style.width}{$field.style.width}{else}40%{/if}">
                                            {/if}
                                            {if $field.type eq 'password'}
                                                <input name="{$name}" type="password" value="{$field.value}"  class="form-control" style="width: {if $field.style.width}{$field.style.width}{else}40%{/if}">
                                            {/if}
                                        </div>
                                    </div>
                                {/foreach}
                            </form>
                        </div>
                        <div class="alert alert-danger" id="extensionAlert" style="display: none"></div>
                        {foreach from=$extensions key=index item=extension}
                            <div role="tabpanel" class="tab-pane {if $index eq 0}active{/if}" id="{$extension->name}Tab">
                                {if $extension->hasProductConfiguration()}
                                    {$extension->displayProductConfiguration()}
                                {else}
                                    <div class="text-center">
                                        <span>{$MGLANG->T('Settings for this extension are not available')}</span>
                                    </div>
                                {/if}
                            </div>
                        {/foreach}
                    {else}
                        {$MGLANG->T('Settings for this module are not available')}
                    {/if}
                    </div>

                  </div>

                <div class="modal-footer">
                  <button id="saveSettingsBtn" class="btn btn-success btn-inverse">{$MGLANG->T('Save')}</button>
                  <button class="btn btn-danger" data-dismiss="modal">{$MGLANG->T('Cancel')}</button>
                </div>
        </div>

    </div>
</div>

{literal}
<script type="text/javascript">

    function initModal()
    {
        $.when( $(".bootstrap-switcher").bootstrapSwitch() ).done(function()
        {
            $('#Modal').modal('show');
        });

        function getExtensions(toRemove)
        {
            var values = ['CreditBilling', 'FixedPricing', 'RecurringBilling', 'PrepaidBilling'];
            values.splice( $.inArray(toRemove, values), 1 );
            var toReturn = [];
            $.each(values, function (i, value) {
                toReturn.push($("#"+value+ " [name='enable']").bootstrapSwitch('state'));
            });

            return toReturn;
        }

        $("#RecurringBilling [name='enable']").on('switchChange.bootstrapSwitch', function(){

            if($("#RecurringBilling [name='enable']").bootstrapSwitch('state') === true
                && $.inArray(true, getExtensions('RecurringBilling')) != -1)
            {
                $("#RecurringBilling [name='enable']").bootstrapSwitch('state', false);
                showMessageForExtension();
            }
        });

        $("#CreditBilling [name='enable']").on('switchChange.bootstrapSwitch', function(){
            if( $("#CreditBilling [name='enable']").bootstrapSwitch('state') === true
                && $.inArray(true, getExtensions('CreditBilling')) != -1)
            {
                $("#CreditBilling [name='enable']").bootstrapSwitch('state', false);
                showMessageForExtension();
            }
        });

        $("#PrepaidBilling [name='enable']").on('switchChange.bootstrapSwitch', function(){
            if( $("#PrepaidBilling [name='enable']").bootstrapSwitch('state') === true
                && $.inArray(true, getExtensions('PrepaidBilling')) != -1)
            {
                $("#PrepaidBilling [name='enable']").bootstrapSwitch('state', false);
                showMessageForExtension();
            }
        });

        $("#FixedPricing [name='enable']").on('switchChange.bootstrapSwitch', function(){
            if( $("#FixedPricing [name='enable']").bootstrapSwitch('state') === true
                && $.inArray(true, getExtensions('FixedPricing')) != -1)
            {
                $("#FixedPricing [name='enable']").bootstrapSwitch('state', false);
                showMessageForExtension();
            }
        });

        function showMessageForExtension()
        {
            $("#extensionAlert").html("{/literal}{$MGLANG->T("Fixed Pricing, Recurring Billing, Credit Billing and Prepaid Billing cannot be enabled simultaneously")}{literal}");
            $("#extensionAlert").show().delay(3000).fadeOut();
        }


        $("#saveSettingsBtn").click(function(e)
        {
            var error = false;
            var productId = $("[name='pid']").val();

            new Promise(function(resolve)
            {
                var counter = 0;
                $("#Modal form").each(function()
                {
                    error = false;
                    var formId = $(this).attr("id");
                    if(formId != 'moduleSettings' && formId != 'globalSettings') 
                    {
                        var vars = $("#"+formId).serializeArray();
                        vars.push({name: 'extension', value: formId});
                        vars.push({name: 'pid', value: productId});

                        postAJAX("configuration|saveSettings", vars, "json", "", function(result)
                        {
                            if(result == "error")
                            {
                                $("#extensionAlert").html("{/literal}{$MGLANG->T("Validation Error, please check your configuration")}{literal}");
                                $("#extensionAlert").show().delay(3000).fadeOut();

                                error = true;
                            }
                            counter++;
                            if(counter >= $("#Modal form").length -2)
                            {
                                resolve();
                            }
                        });
                    }
                });
            })
            .then(function()
            {

                if(!error)
                {
                    var moduleSettings = $("#moduleSettings").serializeArray();
                    moduleSettings.push({name: 'productId', value : productId});

                    $.when(postAJAX("configuration|saveModuleSettings", moduleSettings, "json", "resultMessage"))
                    .done(function()
                    {
                        refreshEnabledExtensions(productId);
                    });

                    var globalSettings = $("#globalSettings").serializeArray();
                    globalSettings.push({name: 'productId', value : productId});

                    $.when(postAJAX("configuration|saveGlobalSettings", globalSettings, "json", "resultMessage"))
                    .done(function()
                    {
                        refreshEnabledExtensions(productId);
                    });

                    $("#Modal").modal("hide");
                }
            });
       });
    }
</script>
{/literal}
