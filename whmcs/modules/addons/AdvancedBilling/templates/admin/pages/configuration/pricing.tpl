<div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 70%">

        <div class="modal-content">
            {*<form id="pricingForm" >*}
                <input name="pid" value="{$product->id}" hidden />
                <div class="modal-header">
                    <h3 class="modal-title">{$MGLANG->T('Set Pricing For ')}<b>{$product->name}</b></h3>
                    <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
                </div>

                <div class="modal-body">

                    <ul class="nav nav-tabs" role="tablist">
                        {foreach from=$currencies key=index item=currency}
                            <li role="presentation" {if $index eq 0}class="active"{/if}>
                                <a href="#{$currency->code}Tab" aria-controls="{$currency->code}Tab" role="tab" data-toggle="tab">{$currency->code}</a>
                            </li>
                        {/foreach}
                    </ul>

                    <div class="tab-content">

                        {foreach from=$currencies key=index item=currency}
                        <div role="tabpanel" class="tab-pane {if $index eq 0}active{/if}" id="{$currency->code}Tab">
                            <form id="{$currency->code}_{$currency->id}">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>{$MGLANG->T('Usage Record')}</td>
                                        <td>{$MGLANG->T('Free Limit')}</td>
                                        <td>{$MGLANG->T('Price')}</td>
                                        <td>{$MGLANG->T('Display Unit')}</td>
                                        <td>{$MGLANG->T('Status')}</td>
                                        <td>{$MGLANG->T('Type')}</td>
                                        <td>{$MGLANG->T('Configure')}</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach from=$resources key=resourceName item=resource}
                                        <tr>
                                            <td>{$MGLANG->T($resource.friendlyName)} ({$MGLANG->T($resource.unit)})</td>
                                            <td><input name="{{$currency->id}}[{$resource.name}][freeLimit]" type="text" value="{if $resource.pricing.{$currency->id}.freeLimit != ''}{$resource.pricing.{$currency->id}.freeLimit}{else}0{/if}"/></td>
                                            <td>{$currency->prefix}<input name="{{$currency->id}}[{$resource.name}][price]" type="text" value="{if $resource.pricing.{$currency->id}.price != ''}{$resource.pricing.{$currency->id}.price}{else}0{/if}"/>{$currency->suffix}</td>
                                            <td>
                                                <select name="{{$currency->id}}[{$resource.name}][unit]" value="{$resource.pricing.{$currency->id}.unit}">
                                                    {foreach from=$resource.availableUnits key=unitName item=availableUnit}
                                                        <option value="{$unitName}" {if $resource.pricing.{$currency->id}.unit eq $unitName}selected{/if}>{$unitName}</option>
                                                    {/foreach}
                                                </select>
                                            </td>
                                            <td><input name="{{$currency->id}}[{$resource.name}][enabled]" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox"  {if $resource.pricing.{$currency->id}.enabled}checked{/if}></td>
                                            <td>
                                                {if $resource.availableTypes|@count gt 1}
                                                    <select name="{{$currency->id}}[{$resource.name}][type]" value="{$resource.pricing.{$currency->id}.type}">
                                                        {foreach from=$resource.availableTypes key=availableType item=typeName}
                                                            <option value="{$availableType}" {if $resource.pricing.{$currency->id}.type eq $availableType}selected{/if}>{$MGLANG->T($typeName)}</option>
                                                        {/foreach}
                                                    </select>
                                                {else}
                                                    {foreach from=$resource.availableTypes key=availableType item=typeName}
                                                        <input hidden name="{{$currency->id}}[{$resource.name}][type]" value="{$availableType}"/>
                                                        {$MGLANG->T($typeName)}
                                                    {/foreach}
                                                {/if}
                                            </td>
                                            <td>
                                                {if $resource.extendedPricing}
                                                    <button class="configureExtendedPricingBtn btn btn-green-cyan btn-sm  btn-inverse" data-resource="{$resource.name}">{$MGLANG->T('Configure')}</button>
                                                {/if}
                                            </td>
                                        </tr>
                                        {if $resource.extendedPricing}
                                            {foreach from=$resource.extendedPricing key=index item=extended name=extendedPricingLoop}
                                                <tr name="{$resource.name}ExtendedPricing" class="extendedPricing {if $smarty.foreach.extendedPricingLoop.last}extendedPricingLast{/if}" style="display: none;">
                                                    <td>{$extended}</td>
                                                    <td><input name="{{$currency->id}}[{$resource.name}][extendedPricing][{$index}][freeLimit]" type="text" value="{if $resource.pricing.{$currency->id}.extendedPricing.$index.freeLimit != ''}{$resource.pricing.{$currency->id}.extendedPricing.$index.freeLimit}{else}0{/if}"/></td>
                                                    <td>{$currency->prefix}<input name="{{$currency->id}}[{$resource.name}][extendedPricing][{$index}][price]" type="text" value="{if $resource.pricing.{$currency->id}.extendedPricing.$index.price != ''}{$resource.pricing.{$currency->id}.extendedPricing.$index.price}{else}0{/if}"/>{$currency->suffix}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>{$resource.pricing[(int) $index+1].type}</td>
                                                    <td></td>
                                                </tr>
                                            {/foreach}
                                        {/if}
                                    {/foreach}
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    {/foreach}
                    </div>
                </div>

                <div class="modal-footer">
                  <button id="savePricingBtn" class="btn btn-success btn-inverse" data-dismiss="modal">{$MGLANG->T('Save')}</button>
                  <button class="btn btn-danger" data-dismiss="modal">{$MGLANG->T('Cancel')}</button>
                </div>

            {*</form>*}
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
        }

        $(".configureExtendedPricingBtn").click(function(e){
            e.preventDefault();

            var resource = $(this).data("resource");
            var extended = resource + 'ExtendedPricing';
            $("[name='"+extended+"']").toggle();
        });


        // $("#savePricingBtn").click(function(e)
        // {
        //     var values = $("#pricingForm").serializeArray();
        //
        //     postAJAX("configuration|savePricing", values, "json", "resultMessage");
        //
        // });


        $("#savePricingBtn").click(function(e)
        {
            var error = false;
            var productId = $("[name='pid']").val();

            var data = [];
            var vars = [];

            data.push({name: 'pid', value: productId});

            $("#Modal form").each(function()
            {
                error = false;
                var formId = $(this).attr("id");

                if(formId != 'moduleSettings')
                {
                    // console.log(formId);
                    vars = $("#"+formId).serializeArray();
                    // var currencyId = formId.split('_')[1];
                    data = $.merge(data, vars);
                    // data[currencyId] = vars;
                }
            });

            postAJAX("configuration|savePricing", data, "json", "resultMessage");
            // postAJAX("configuration|savePricing", {data: data}, "json", "resultMessage");

        });








    </script>
    {/literal}

</div>
