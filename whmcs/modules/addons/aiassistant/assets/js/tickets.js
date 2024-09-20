$(document).ready(function () {
    function ai_get_replay_text(element) {
        if (element.data('replay-id') === 'ticket') {
            $('#ai_hidden_type').val('ticket');
            $('#ai_request_text').val($('#ai_ticket_hidden').val());
            $('#ai_request_text').attr('rows', 15);
            $('#aiassistant_modal').modal('show');
            return true;
        }
        $('#ai_hidden_type').val('ask');
        $('#ai_request_text').attr('rows', 5);
        $('.editbtns' + element.data('replay-id')).find('img').css('display', 'inline');
        $.ajax({
            url: "supporttickets.php",
            type: "POST",
            data: {action: 'getmsg', ref: element.data('replay-id'), token: csrfToken},
            success: function (result) {
                $('#ai_request_text').val(result);
                $('.editbtns' + element.data('replay-id')).find('img').css('display', 'none');
                $('#aiassistant_modal').modal('show');
            },
            error: function (err) {
                $('.editbtns' + element.data('replay-id')).find('img').css('display', 'none');
                alert(err);
            }
        });
    }

    function ai_ask_question_text() {
        $('#ai_error_result').hide();
        $('#ai_success_result').hide();
        $('#ai_add_response').hide();
        $('#ai_ask_text').hide();
        $('#ai_loading').show();
        $.ajax({
            url: "addonmodules.php?module=aiassistant", type: "POST", data: {
                action: 'ask',
                markdown: true,
                ask_for: $('#ai_hidden_type').val(),
                text: $('#ai_request_text').val(),
                token: csrfToken
            }, success: function (result) {
                if (result.result === "success") {
                    $('#ai_response_text').val(result.text);
                    $('#ai_add_response').show();
                    $('#ai_success_result').show();
                } else {
                    $('#ai_error_message').html(result.text);
                    $('#ai_error_result').show();
                }
                $('#ai_loading').hide();
                $('#ai_ask_text').show();
            }, error: function (err) {
                $('#ai_loading').hide();
                $('#ai_ask_text').show();
            }
        });
    }

    $('div#ticketreplies').children('div').each(function (index, value) {
        if (!$(this).hasClass('staff')) {
            var ai_replay_id = $(this).find('[class*=editbtns]').attr('class').replace('editbtns', '');
            $(this).find('.tools').append('<div style="margin-top: 5px"><button type="button" class="btn btn-sm btn-xs btn-small btn-success ai_replay_item" data-replay-id="' + ai_replay_id + '" ><i class="fas fa-robot"></i> Replay with AI</button></div>');
        }
    });
    $('#tab0').find('.md-controls').before('<div class="btn-group"><button class="btn-default btn-sm btn ai_replay_item" data-replay-id="ticket" type="button" ><i class="fas fa-robot"></i>  Get AI Assistance</button></div><div class="btn-group"><button class="btn-default btn-sm btn ai_replay_item" data-replay-id="0" type="button" ><i class="fas fa-robot"></i> Ask AI </button></div>');
    $('.ai_replay_item').click(function () {
        $('#ai_add_response').hide();
        $('#ai_error_result').hide();
        $('#ai_success_result').hide();
        ai_get_replay_text($(this));
    });

    $('#ai_ask').click(function () {
        ai_ask_question_text()
    });

    $('#ai_add_response').click(function () {
        if ($('#ai_hidden_type').val() === 'ticket') {
            $("#replymessage").val('');
            $("#replymessage").val($('#ai_response_text').val());
        } else {
            $("#replymessage").val($('#ai_response_text').val() + "\n" + $("#replymessage").val());
        }
        $('#aiassistant_modal').modal('hide');
        $('html, body').animate({
            scrollTop: parseInt($("#replymessage").offset().top)
        }, 500);
    });
});