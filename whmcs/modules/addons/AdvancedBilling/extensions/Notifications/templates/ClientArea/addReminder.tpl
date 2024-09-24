
<div id="Modal" class="modal fade" role="dialog" >
    <div class="modal-dialog"  style="width: 40%; ">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {if $edit eq 1}
                        {$MGLANG->T('Edit Reminder')}
                    {else}
                        {$MGLANG->T('Add Reminder')}
                        {if $existedReminders && $maxReminders}{$existedReminders}/{$maxReminders}{/if}
                    {/if}
                    </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="notificationsInfo alert alert-info">
                {$MGLANG->T('addReminder helper')}
            </div>
            <form  class="col-md-12 col-sm-12 col-xs-12" style="display: inline-block;"><br>
                <p class="alertMessage"></p>
                <div class="emptyFieldsError alert alert-danger" style="display: none;"><p> {$MGLANG->T("Fill all fields.")}</p></div>
                <div class="numericValuesError alert alert-danger" style="display: none;"><p> {$MGLANG->T("Expected numeric values.")}</p></div>
                <div class="numericValuesErrorNegative alert alert-danger" style="display: none;"><p> {$MGLANG->T("Expected positive values.")}</p></div>
                <div class="form-group">
                    <label>{$MGLANG->T('Name')}</label>
                    <input  class="errorInput form-control" type="text" name="name" {if $remainder.name}value="{$remainder.name}"{/if}/>
                </div>

                <div class="form-group">
                    <label  class="form-inline">{$MGLANG->T('Period of time checking resources back to now')}</label>
                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T("tooltip")}" ></i>
                   <div class="input-group">
                        <input class="errorInput form-control form-inline" name="field[periodFrequency]" type="text" value="{$remainder.periodFrequency}">
                          <div class="input-group-btn">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="periodFrequency" >1 {$MGLANG->T('Hour')}</a></li>
                            <li><a class="periodFrequency" >3 {$MGLANG->T('Hours')}</a></li>
                            <li><a class="periodFrequency" >6 {$MGLANG->T('Hours')}</a></li>
                            <li><a class="periodFrequency" >1 {$MGLANG->T('Day')}</a></li>
                            <li><a class="periodFrequency" >3 {$MGLANG->T('Days')}</a></li>
                            <li><a class="periodFrequency" >1 {$MGLANG->T('Week')}</a></li>
                            <li><a class="periodFrequency" >2 {$MGLANG->T('Weeks')}</a></li>
                          </ul>
                        </div>
                      </div>
                </div>
                <div class="form-group">
                    <label>{$MGLANG->T('Frequently e-mail reminding 1 per')}</label>
                    <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T("tooltip")}" ></i>
                    <div class="input-group">
                        <input class="errorInput form-control form-inline" name="field[mailFrequency]" type="text" value="{$remainder.mailFrequency}">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="mailFrequency" >1 {$MGLANG->T('Hour')}</a></li>
                                <li><a class="mailFrequency" >3 {$MGLANG->T('Hours')}</a></li>
                                <li><a class="mailFrequency" >6 {$MGLANG->T('Hours')}</a></li>
                                <li><a class="mailFrequency" >1 {$MGLANG->T('Day')}</a></li>
                                <li><a class="mailFrequency" >3 {$MGLANG->T('Days')}</a></li>
                                <li><a class="mailFrequency" >1 {$MGLANG->T('Week')}</a></li>
                                <li><a class="mailFrequency" >2 {$MGLANG->T('Weeks')}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <input type="button" class="btn btn-success"  id="addReminder" data-id="{if $remainder.id }{$remainder.id}{/if}"  value="{$MGLANG->T('Confirm')}"/>
                <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->T('Close')}</button>
            </div>
        </div>
    </div>
</div>
{literal}
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
{/literal}

