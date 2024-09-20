$(document).ready(function () {
    function ai_get_title_text(element) {
        $('#ai_request_text').val($('input[name=title]').val());
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
            data: {action: 'ask', text: $('#ai_request_text').val(), token: csrfToken},
            success: function (result) {
                if (result.result === "success") {
                    $('#ai_response_text').val(result.text);
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


    $('#tabLink2').click(function () {
        $('#ai_add_response').hide();
        $('#ai_error_result').hide();
        $('#ai_success_result').hide();
        ai_get_title_text($(this));
    });

    $('#ai_ask').click(function () {
        ai_ask_question_text()
    });

});