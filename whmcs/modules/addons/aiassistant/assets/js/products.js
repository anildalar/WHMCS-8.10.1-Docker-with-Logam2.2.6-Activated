$(document).ready(function () {
    let ai_text_type = 'long';

    function ai_get_title_text(element) {
        $('#ai_request_text').val($('input[name=name]').val());
        $('#aiassistant_modal').modal('show');
    }

    function ai_ask_question_text() {
        $('#ai_error_result').hide();
        $('#ai_success_result').hide();
        $('#ai_add_response').hide();
        $('#ai_ask_text').hide();
        $('#ai_loading').show();
        $.ajax({
            url: "addonmodules.php?module=aiassistant",
            type: "POST",
            data: {
                action: 'ask',
                product_description: true,
                description_type: ai_text_type,
                text: $('#ai_request_text').val(),
                token: csrfToken
            },
            success: function (result) {
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
            },
            error: function (err) {
                $('#ai_loading').hide();
                $('#ai_ask_text').show();
            }
        });
    }

    $('textarea[name=shortDescription]').after('<button style="margin-top: 3px" data-type="short" type="button" class="btn btn-sm btn-small btn-success ai_replay_item"><i class="fas fa-robot"></i> Write with AI</button>');
    $('textarea[name=description]').after('<button style="margin-top: 3px" data-type="long"  type="button" class="btn btn-sm btn-small btn-success ai_replay_item"><i class="fas fa-robot"></i> Write with AI</button>');

    $('.ai_replay_item').click(function () {
        ai_text_type = $(this).data('type');
        $('#ai_add_response').hide();
        $('#ai_error_result').hide();
        $('#ai_success_result').hide();
        ai_get_title_text($(this));
    });

    $('#ai_ask').click(function () {
        ai_ask_question_text()
    });

    $('#ai_add_response').click(function () {
        if (ai_text_type == 'long') {
            $("textarea[name='description']").val($('#ai_response_text').val());
        } else {
            $("textarea[name='shortDescription']").val($('#ai_response_text').val());
        }
        $('#aiassistant_modal').modal('hide');
    });
});