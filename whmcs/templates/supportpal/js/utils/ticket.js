import $ from 'jquery';

function addAttachmentToEditor()
{
    $(`#fileUploadsContainer`).append(`<input type="file" name="attachments[]" class="form-control" style="margin-top: 0.5rem;" />`)
}

function addCcToEditor()
{
    $(`#ccContainer`).append(`<input type="text" name="cc[]" class="form-control" style="margin-top: 0.75rem;" />`);
}

export {
    addAttachmentToEditor,
    addCcToEditor
}
