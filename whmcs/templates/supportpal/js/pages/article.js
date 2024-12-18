import $ from 'jquery';
import '../validation/validator.js';
import {scrollTo} from '../utils/animation.js';
import {Page} from '../page.js';

export class ArticlePage extends Page
{
    constructor(parameters)
    {
        super(parameters);
    }

    init()
    {
        this.#validateCommentForm();
        this.#addCommentHandler();
        this.#cancelCommentHandler();

        // Scroll to comment alert.
        const $commentStatus = $(`.comment-status`);
        if ($commentStatus.length) {
            scrollTo($commentStatus);
        }
    }

    #validateCommentForm()
    {
        $(`#post-comment-form`).validate({
            rules: {
                comment_name: `required`,
                comment_message: `required`,
                captcha: `required`
            },
            messages: {
                comment_name: this.lang(`validation_field_required`),
                comment_message: this.lang(`validation_field_required`),
                captcha: this.lang(`validation_field_required`)
            }
        });
    }

    #addCommentHandler()
    {
        const $addComment = $(`.sp-add-comment`);
        $(`.sp-reply-comment`).on(`click`, function () {
            const comment_id = $(this).data(`id`),
                comment_name = $(this).data(`author-name`);

            $(`#replyDiv`).show();
            $(`#replySpan`).text(`#` + comment_id + ` ` + comment_name);
            $(`input[name=comment_parent_id]`).val(comment_id);

            // Show comment area
            if ($addComment.hasClass(`panel-collapsed`)) {
                $addComment.find(`.panel-heading`).click();
            }

            // Scroll to it
            scrollTo($addComment);
        });
    }

    #cancelCommentHandler()
    {
        $(`.sp-cancel-comment`).on(`click`, function () {
            $(`#replyDiv`).hide();
            $(`#replySpan`).text(``);
            $(`input[name=comment_parent_id]`).val(``);
        });
    }
}
