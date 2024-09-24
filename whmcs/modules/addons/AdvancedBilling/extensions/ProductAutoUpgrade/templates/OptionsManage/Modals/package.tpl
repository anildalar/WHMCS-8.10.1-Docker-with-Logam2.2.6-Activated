<div id="Modal" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header">
                <h3>{$MGLANG->T('Package')}: <b>{$option->name}</b></h3>
            </div>
            <div class="modal-body">
                <div class="row-fluid">
                    <div class="alert alert-info">{$MGLANG->T('Define package configuration which will be set upon switching to this option')}</div>
                </div>
                <div class="row-fluid">
                    <form id='packageConfigForm' data-optionid="{$option->id}">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-xs-12">
                                <label style="line-height: 32px;">{$MGLANG->T('Select Product')}</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <select name="packageId" class="form-control">
                                    {foreach from=$products item=product}
                                        <option {if $option->productId eq $product->id}selected{/if} value="{$product->id}">{$product->name}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-offset-3 col-lg-offset-3'>
                                <div class='help-block'>{$MGLANG->T('In case you do not see the product you wish to upgrade to, make sure it is enabled in the Advanced Billing module under \'Configuration\' tab.')}</div>
                            </div>
                        </div>

                        <hr>

                        {if $group->configOptionGroupId}
                            <table id="confOptionsTable" class="table table-bordered" data-optiongroupid='{$group->configOptionGroupId}'>
                                <thead>
                                    <tr>
                                        <th>{$MGLANG->T("Name")}</th>
                                        <th>{$MGLANG->T("Setting")}</th>
                                        <th>{$MGLANG->T("Actions")}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-prototype style='display: none;'>
                                        <td data-name></td>
                                        <td data-setting></td>
                                        <td data-actions></td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-xs-12">
                                    <label style="line-height: 32px;">{$MGLANG->T('Select Option')}</label>
                                </div>
                                <div class="col-lg-4 col-md-3 col-xs-9">
                                    <select name="configoption" class="form-control">
                                        <option value='empty'>{$MGLANG->T('Please Select')}</option>
                                        {foreach from=$configOptions item=confOp}
                                            <option value="{$confOp->id}">{$confOp->optionname}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-4 col-xs-3">
                                    <button id="addConfigOption" class="btn btn-success btn-inverse btn-sm" style="margin-top: 4px;">{$MGLANG->T('Add')}</button>
                                </div>
                            </div>
                        {/if}
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="APU_packageController.saveConfiguration(); return false;" type="button" data-dismiss="modal" class="btn btn-success btn-inverse">{$MGLANG->T('Save')}</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">{$MGLANG->T('Cancel')}</button>
            </div>
        </div>
    </div>
</div>
{literal}
    <style>
        td {
            border: none;
        }
    </style>
{/literal}
                
                
{include file='Modals/packageController.js'}