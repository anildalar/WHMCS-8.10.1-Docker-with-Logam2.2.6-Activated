<div class="panel panel-primary">
    <div class="panel-body">
        {$MGLANG->T('Product Auto Upgrade extension allows you to automatically resize your clients\' hostings. In this section you can create new groups of rules or manage the existing ones. Each group contains a set of rules that will be used for scaling services.')}
    </div>
</div>

        
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Manage Exisitng Groups')}</h3>
    </div>
  <div class="panel-body">
    <table id="groupsTable" class="table table-hover">
        <thead>
            <tr>
                <td>{$MGLANG->T('#ID')}</td>
                <td>{$MGLANG->T('Name')}</td>
                <td>{$MGLANG->T('Submodule')}</td>
                <td>{$MGLANG->T('Configure Option Group Name')}</td>
                <td>{$MGLANG->T('Status')}</td>
                <td style="width: 30%">{$MGLANG->T('Actions')}</td>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
  </div>
</div>

<div class="row-fluid text-center">
    <button id="newGroupSubmitButtom" on-click="" class="btn btn-success btn-inverse btn-large">{$MGLANG->T('Create New Group')}</button>
</div>

{* Create group modal*}
{include file='../Configuration/Modals/addGroup.tpl'}

<div id="Modal"></div>
<div id="modalLoader" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-loader"></div>
        </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-content" style="top: 25%; width: 20%; left: 40%; overflow: visible">
        <div class="modal-header">
            
        </div>
        <div class="modal-body">
            <h3><b>{$MGLANG->T('Are you sure?')}</b></h3>
            <span class="help-block">
                {$MGLANG->T('All options within this group will be deleted')}
            </span>
        </div>
        <div class="modal-footer">
            <button id="deleteGroupBtn" type="button" data-dismiss="modal" class="btn btn-danger btn-inverse">{$MGLANG->T('Delete')}</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">{$MGLANG->T('Cancel')}</button>
        </div>
    </div>
</div>

{literal}
<style type="text/css">
    .addNewGroupPanel .row
    {
        margin-top: 10px;
    }
</style>
{/literal}

{include file='../Configuration/baseController.js'}