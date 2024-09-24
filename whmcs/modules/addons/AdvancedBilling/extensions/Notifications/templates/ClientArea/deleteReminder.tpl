
<div id="Modal" class="modal fade" role="dialog" >
    <div class="modal-dialog"  style="width: 35%; ">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{$MGLANG->T('Delete Reminder')}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form class="col-md-12 modal-ownForm text-center">
                <label class="col-md-12 form-group"><br>
                    <div class="row">
                    {$MGLANG->T('DeleteQuestion')}{if $reminder.name }{$reminder.name|wordwrap:40:'<br />':true }{/if}?
                </div>
            </label>




        </form>
        <div class="modal-footer">
            <input class="deleteReminderYes btn btn-danger" type="button" data-rid="{$reminder.id}" value="{$MGLANG->T('Confirm')}"/>
            <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->T('Close')}</button> </div>
    </div>
</div>
</div>



