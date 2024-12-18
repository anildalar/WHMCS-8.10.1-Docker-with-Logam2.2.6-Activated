import $ from 'jquery';
import '../validation/validator.js';
import '../validation/rules/file-extension.js';
import {addAttachmentToEditor, addCcToEditor} from '../utils/ticket.js';
import '../utils/customfields.js';
import {Page} from '../page.js';

export class SubmitTicketPage extends Page
{
    init()
    {
        this.#validateForm();

        if ($(`#autoAnswerSuggestions`).data(`is-enabled`)) {
            this.#relatedArticlesHandler();
        }

        $(`#sp-extra-attachment`).on(`click`, function () {
            addAttachmentToEditor();
        });

        $(`#sp-extra-cc`).on(`click`, function () {
            addCcToEditor();
        });
    }

    #validateForm()
    {
        $(`#submitticket`).validate({
            rules: this.#getValidationRules(),
            messages: this.#getValidationMessages()
        });
    }

    #getValidationRules()
    {
        return {
            subject: `required`,
            message: `required`,
            'attachments[]': {
                extension: this.setting(`allowed_files`)
            },
            captcha: `required`
        };
    }

    #getValidationMessages()
    {
        return {
            subject: this.lang(`validation_field_required`),
            message: this.lang(`validation_field_required`),
            'attachments[]': this.lang(`validation_file_type`) + ` ` + this.setting(`allowed_files`),
            captcha: this.lang(`validation_field_required`)
        };
    }

    #relatedArticlesHandler()
    {
        let timer, x, term;

        $(`input`).on(`keyup paste`, function () {
            term = $(this).val();

            // If there is an existing XHR, abort it.
            if (x) {
                x.abort();
            }

            // Clear the timer so we don't end up with dupes.
            clearTimeout(timer);

            // Assign timer a new timeout
            timer = setTimeout(function () {
                // Run ajax request and store in x variable (so we can cancel)
                const url = `modules/support/supportpal/relatedarticles.php`;
                x = $.getJSON(url, {term: term}, function (data) {
                    // Check for expected response.
                    if (data.status !== `success` || data.count === 0) {
                        $(`#autoAnswerSuggestions`).addClass(`hidden d-none`);

                        return;
                    }

                    // Remove existing entries
                    $(`#autoAnswerSuggestions .sp-articles p`).remove();

                    // Add each entry and show suggestions
                    $.each(data.data, function (key, val) {
                        const $a = $(`<a>`)
                            .prop(`href`, `knowledgebase.php?id=` + val.id + `-` + val.slug)
                            .prop(`target`, `_blank`)
                            .append($(`<span>`).prop(`class`, `glyphicon glyphicon-file`))
                            .text(val.title);

                        const $excerpt = $(`<div>`)
                            .prop(`class`, `text-muted small`)
                            .text(val.excerpt);

                        $(`#autoAnswerSuggestions .sp-articles`)
                            .append($(`<p>`).append($a).append($excerpt));

                        $(`#autoAnswerSuggestions`).removeClass(`hidden d-none`);
                    });
                });
            }, 1000);
        });
    }
}
