<div id="newGroupModal" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="panel-title">{$MGLANG->T('Add New Autoscaling Group')}</h3>
            </div>
            
            <div class="modal-body">
                <div id="addGroupAlertMsg"></div>
                
                <form id="newGroupForm" action="#" method="POST">
                   <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-12">
                            <label for="newGroupName">{$MGLANG->T('Group Name')}</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <input class="form-control text-left" type="text" id="newGroupName" name="newGroupName">
                        </div>
                        <div class="col-lg-7 col-md-7 col-xs-12">
                            <span class="help-block">{$MGLANG->T('Group name that is visible only for admins.')}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-12">
                            <label for="newProductId">{$MGLANG->T('Product')}</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <select class="form-control" id="newProductId" name="newProductId">
                                {foreach from=$products item=product}
                                    <option value="{$product->id}">{$product->name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="col-lg-7 col-md-7 col-xs-12">
                            <span class="help-block">{$MGLANG->T('Select supported product for new group. Product must be already enabled for Advanced Billing under \'Configuration\' tab.')}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-12">
                            <label>{$MGLANG->T('Confgurable Option Group')}</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <input id="enableConfigOp" class="bootstrap-switcher" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger"  data-size="mini" data-label-width="15" type="checkbox">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-12">
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <select class="form-control" id="newConfGroupId" name="newConfGroupId">
                                    {* Filled With AJAX *}
                            </select> 
                        </div>
                        <div class="col-lg-7 col-md-7 col-xs-12">
                            <span class="help-block">{$MGLANG->T('Select supported configurable option group')}</span>
                        </div>
                    </div>
                    
                </form>
            </div>
            
            <div class="modal-footer">
                <div class="row-fluid">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <button type="button" class="btn btn-success btn-inverse" onclick='APU_AddGroup.submit();'>{$MGLANG->T('Save')}</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->T('Close')}</button>
                    </div>
                </div>
            </div>
                        
        </div>
    </div>
</div>
                        
{literal}
<style type="text/css">
    #newGroupForm .row
    {
        margin-top: 10px;
    }
</style>
{/literal}
                    
                    
{include file='../Modals/addGroupController.js'}