$(document).ready(function () {
    $('.add-new-rule').click(function () {
        $('#add_edit_form1').get(0).reset();
        $('#rule_edit_id').val('');
        $('#action_type').val('add');
    });

    $('.edit_rule_button').click(function () {
        var data = $(this).data('resource');
        $('#rule_edit_id').val(data.id);
        $('#ai_prompt').val(data.prompt);
        $('#ai_completion').val(data.completion);
        $('#action_type').val('edit');
        $('#create-new-edit-rule-modal').modal('show');
    });

    $('#ai_train_start_button').click(function () {
        $('#ai_error_results').hide();
        $('#ai_start_loader').show();
        $(this).prop('disabled', 'disabled');
        $.ajax({
            url: "addonmodules.php?module=aiassistant&c=train&a=start",
            type: "POST",
            data: {model: $('#ai_model').val(), suffix: $('#ai_suffix').val()},
            success: function (result) {
                if (result.result !== 'success') {
                    $('#ai_error_results').html(result.text);
                    $('#ai_error_results').show();
                } else {
                    $('#ai_error_results').hide();
                    $('#nnmform1').hide();
                    $('#ai_success_results').html(result.text);
                    $('#ai_success_results').show();
                }

                $('#ai_start_loader').hide();
                $('#ai_train_start_button').removeAttr('disabled');
            },
            error: function (err) {
                $('#ai_error_results').html(err.text);
                $('#ai_error_results').show();
                $('#ai_start_loader').hide();
                $('#ai_train_start_button').removeAttr('disabled');
            }
        });
    });
    $('input[type=radio][name=knowledgebase_type]').change(function () {
        if (this.value === 'selected') {
            $('#knowledgebase_type_selected_area').show();
        } else if (this.value === 'all') {
            $('#knowledgebase_type_selected_area').hide();
        }
    });
});