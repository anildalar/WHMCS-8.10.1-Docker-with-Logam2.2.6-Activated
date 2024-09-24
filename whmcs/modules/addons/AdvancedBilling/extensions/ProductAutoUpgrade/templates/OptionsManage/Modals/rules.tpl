<div id="Modal" class="modal" role="dialog">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h3>{$MGLANG->T($type)} {$MGLANG->T('rules for')} <b>{$option->name}</b></h3>
            </div>
            <div class="modal-body">
                <form id="rulesForm">
                    <table id="rulesTable" class="table table-hover">
                        <thead>
                            <tr>
                                <td>{$MGLANG->T('Resource Name')}</td>
                                <td>{$MGLANG->T('Comparison Type')}</td>
                                <td>{$MGLANG->T('Threshold')}</td>
                                <td align="center">{$MGLANG->T('Actions')}</td>
                            </tr>
                        </thead>
                        <tbody>
                            {if $rules}
                                {foreach from=$rules item=rule}
                                    {assign resname $rule->resource}
                                    <tr>
                                        <td>
                                            {$resources.$resname.friendlyName}
                                            <input hidden name='resource' value='{$rule->resource}'/>
                                        </td>
                                        <td>
                                            <select class='form-control' name='comparison'>
                                                <option {if $rule->comparison eq '>'}selected{/if} value='>'>></option>
                                                <option {if $rule->comparison eq '>='}selected{/if} value='>='>≥</option>
                                                <option {if $rule->comparison eq '='}selected{/if} value='='>=</option>
                                                <option {if $rule->comparison eq '<='}selected{/if} value='<='>≤</option>
                                                <option {if $rule->comparison eq '<'}selected{/if} value='<'><</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class='form-control' name='threshold' value='{$rule->threshold}'/>
                                        </td>
                                        <td>
                                            <span>{$resources.$resname.unit}</span>
                                        </td>
                                        <td align="center">
                                            <button data-ruleid="{$rule->id}" data-resource="{$rule->resource}" class="deleteBtn btn btn-danger btn-inverse btn-sm">{$MGLANG->T('Delete')}</button>
                                        </td>
                                    </tr>
                                {/foreach}
                            {else}
                                <tr id="emptyTableInfo">
                                    <td colspan="4" class='text-center'>
                                        {$MGLANG->T('No Rules Created')}
                                    <td>
                                </tr>
                            {/if}
                        </tbody>
                    </table>
                </form>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <select id="resourceSelect" class='form-control form-inline pull-right' style='width: 200px'>
                            {foreach from=$resources key=name item=resource}
                                <option {if $resource.disabled}disabled style="color: #CCC"{/if} value="{$resource.name}" data-unit="{$resource.unit}">{$resource.friendlyName}</option>
                            {/foreach}
                                <option hidden></option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <button class="addResourceBtn btn btn-success btn-inverse pull-left">{$MGLANG->T('Add')}</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="saveBtn" onclick="APU_RulesConfig.saveConfiguration();" data-optionid="{$option->id}" data-type="{$type}" class="btn btn-success btn-inverse">{$MGLANG->T('Save')}</button>
                <button data-dismiss="modal" class="btn btn-danger">{$MGLANG->T('Cancel')}</button>
            </div>
        </div>
    </div>
            
    <table class="newResourcePrototype" style="display: none;">
        <tr>
            <td><input hidden name='resource' value=''/></td>
            <td>
                <select class='form-control' name='comparison'>
                    <option value='>'>></option>
                    <option value='>='>≥</option>
                    <option value='='>=</option>
                    <option value='<='>≤</option>
                    <option value='<'><</option>
                </select></td>
            <td><input class='form-control' name='threshold' value=''/></td>
            <td><span class="newResourceUnit"></span></td>
            <td align='center'><button data-resource="" class='deleteBtn btn btn-danger btn-inverse btn-sm'>{$MGLANG->T('Delete')}</button></td>
        </tr>
    </table>
</div>
            
        
{include file='Modals/rulesController.js'}
