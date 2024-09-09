<div id="modal-delete-url" class="modal" data-remove-custom-url-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger">{$lang.extensions.custom_code_modal.title}</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>{$lang.extensions.custom_code_modal.desc}</p>
            </div>
            <div class="modal__actions">
                <button type="button" class="btn btn--danger" data-remove-custom-url-modal-submit data-index data-group>
                    Delete
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Cancel</span></button>
            </div>
        </div>
    </div>
</div>