<!-- Modal -->
<div id="aiassistant_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{$NNMLANG['aiassistant']}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">{$NNMLANG['text']}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="ai_request_text" name="ai_request_text">{$NNM_ticket_text}</textarea>
                        </div>
                    </div>
                    <div class="form-group" id="ai_success_result" style="display: none">
                        <label class="control-label col-sm-2" for="email">{$NNMLANG['airesponse']}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="ai_response_text" name=""></textarea>
                        </div>
                    </div>
                    <div class="form-group" id="ai_error_result" style="display: none;">
                        <label class="control-label col-sm-2" for="errors">{$NNMLANG['error']}</label>
                        <div class="col-sm-10">
                            <p id="ai_error_message"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-primary" id="ai_ask">
                                <span id="ai_loading" style="display: none"><i class="fas fa-spinner fa-spin"></i> {$NNMLANG['loading']} </span>
                                <span id="ai_ask_text">{$NNMLANG['sendtoai']}</span>
                            </button>
                            <button type="button" style="display: none" class="btn btn-success" id="ai_add_response">
                                {$NNMLANG['responsetoeditor']}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<textarea id="ai_ticket_hidden" style="display: none;visibility: hidden">{$NNM_ticket_text}</textarea>
<input type="hidden" name="ai_hidden_type" value="question" id="ai_hidden_type">
<script type="text/javascript" src="../modules/addons/aiassistant/assets/js/{{$jsfile}}"></script>