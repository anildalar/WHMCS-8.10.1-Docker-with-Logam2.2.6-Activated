<div class="panel panel-primary">
    <div class="panel-body">
        {$MGLANG->T('On this page you can set up rules for the selected product. These rules will be used by the extension to determine which service should be changed. Service will be changed according to the parameters set in rules options if the condition of either downgrade rules or upgrade rules has been met.')}
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('Configuration for group')} <b style='color: #FFF;'>#{$group->id} {$group->name}</b></h3>
    </div>

    <div class="panel-body">      
        <table class="table" data-groupid="{$group->id}">
            <tbody id="sortable">
                {foreach from=$options key=key item=option}
                <tr data-optionid="{$option->id}" style='text-align: right;'>
                    <td>
                        <i style="font-size:20px" class="glyphicon glyphicon-move"></i>
                    </td>
                    <td>
                        <a href="#" class="editableOptionName" data-type="text" data-pk="{$option->id}" style="font-size: 17px;">
                            {$option->name} 
                        </a>
                    </td>
                    <td>
                        <button name="top-rules" data-optionid="{$option->id}" class="rulesBtn btn btn-primary btn-inverse btn-sm pull-left">
                            <i class="glyphicon glyphicon-chevron-up"></i> {$MGLANG->T('Upgrade Rules')}
                        </button>
                        <button name="bottom-rules" data-optionid="{$option->id}" class="rulesBtn btn btn-primary btn-inverse btn-sm pull-right">
                            <i class="glyphicon glyphicon-chevron-down"></i> {$MGLANG->T('Downgrade Rules')}
                        </button>
                    </td>
                    <td class="text-center">
                        <input {if $option->status eq 1}checked{/if} data-status="0" class="bootstrap-switcher statusSwitcher" data-optionid="{$option->id}" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="small" data-label-width="15" type="checkbox">
                    </td>
                    <td>
                        <button name="packageConfiguration" data-optionid="{$option->id}" class="btn btn-primary btn-inverse btn-sm">
                            <i class="glyphicon glyphicon-cog"></i> {$MGLANG->T('Package')}
                        </button>
                        <button name="description" data-optionid="{$option->id}" class="btn btn-default btn-inverse btn-sm">
                            <i class="glyphicon glyphicon-pencil"></i> {$MGLANG->T('Description')}
                        </button>
                        <button type="button" name="deleteOptionModal" class="btn btn-danger btn-inverse btn-sm" data-optionid="{$option->id}"><i class="glyphicon glyphicon-remove"></i> {$MGLANG->T('Delete')}</button>
                    </td>
                </tr>
                {/foreach}
                {* PLACE FOR NEW OPTION*}
                <tr class="newOptionPlaceholder">
                    <td></td>
                    <td>
                        <input class="form-control" type="text" name="newOptionName" value="" placeholder="Option Friendly Name"/>
                    </td>
                    <td></td>
                    <td class="text-center"></td>
                    <td>
                        <button id="addNewOptionBtn" class="btn btn-success btn-inverse" data-groupid="{$group->id}">{$MGLANG->T('Add New Option')}</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <button onclick="APU_OptionsConfig.saveGroupOptionsHandler();" type="button" class="btn btn-success btn-inverse">{$MGLANG->T('Save Order')}</button>
        <button onclick="window.history.back(); return false;" type="button" class="btn btn-default">{$MGLANG->T('Go Back')}</button>
    </div>
</div>

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
                {$MGLANG->T('All settings related to this option will be deleted')}
            </span>
        </div>
        <div class="modal-footer">
            <button id="deleteOptionBtn" type="button" data-dismiss="modal" class="btn btn-danger btn-inverse">{$MGLANG->T('Delete')}</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">{$MGLANG->T('Cancel')}</button>
        </div>
    </div>
</div>
        
<table class="newOptionPrototype" data-prototype style="display: none;">
    <tr data-optionid="" style='text-align: right;'>
        <td>
            <i style="font-size:20px" class="glyphicon glyphicon-move"></i>
        </td>
        <td>
            <a href="#" class="editableOptionName" data-type="text" data-pk="" style="font-size: 17px;">
                 
            </a>
        </td>
        <td>
            <button name="top-rules" data-optionid="" class="rulesBtn btn btn-primary btn-inverse btn-sm pull-left">
                <i class="glyphicon glyphicon-chevron-up"></i> {$MGLANG->T('Upgrade Rules')}
            </button>
            <button name="bottom-rules" data-optionid="" class="rulesBtn btn btn-primary btn-inverse btn-sm pull-right">
                <i class="glyphicon glyphicon-chevron-down"></i> {$MGLANG->T('Downgrade Rules')}
            </button>
        </td>
        <td class="text-center">
            <input  data-status="0" class="statusSwitcher" data-optionid="" data-on-text="{$MGLANG->T('Enabled')}" data-off-text="{$MGLANG->T('Disabled')}" data-on-color="success" data-off-color="danger" data-size="small" data-label-width="15" type="checkbox">
        </td>
        <td>
            <button name="packageConfiguration" data-optionid="" class="btn btn-primary btn-inverse btn-sm">
                <i class="glyphicon glyphicon-cog"></i> {$MGLANG->T('Package')}
            </button>
            <button name="description" data-optionid="" class="btn btn-default btn-inverse btn-sm">
                <i class="glyphicon glyphicon-pencil"></i> {$MGLANG->T('Description')}
            </button>
            <button type="button" name="deleteOptionModal" class="btn btn-danger btn-inverse btn-sm" data-optionid=""><i class="glyphicon glyphicon-remove"></i> {$MGLANG->T('Delete')}</button>
        </td>
    </tr>
</table>
        
{include file='baseController.js'}