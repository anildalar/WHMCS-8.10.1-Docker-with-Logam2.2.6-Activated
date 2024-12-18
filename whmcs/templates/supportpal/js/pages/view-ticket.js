import $ from 'jquery';
import '../validation/validator.js';
import '../validation/rules/file-extension.js';
import {addAttachmentToEditor, addCcToEditor} from '../utils/ticket.js';
import '../utils/customfields.js';
import {Page} from '../page.js';

export class ViewTicketPage extends Page
{
    init()
    {
        this.#validateReplyForm();
        this.#validateCustomFieldsForm();

        $(`#sp-extra-attachment`).on(`click`, function () {
            addAttachmentToEditor();
        });

        $(`#sp-extra-cc`).on(`click`, function () {
            addCcToEditor();
        });
    }

    #validateReplyForm()
    {
        $(`#frmReply`)
            // Override WHMCS scripts.min.js
            .off(`submit`)
            .validate({
                rules: {
                    replymessage: `required`,
                    'attachments[]': {
                        extension: this.setting(`allowed_files`),
                    }
                },
                messages: {
                    replymessage: this.lang(`validation_field_required`),
                    'attachments[]': this.lang(`validation_file_type`) + ` ` + this.setting(`allowed_files`)
                }
            });
    }

    #validateCustomFieldsForm()
    {
        $(`#tcf`).validate();
    }
}
