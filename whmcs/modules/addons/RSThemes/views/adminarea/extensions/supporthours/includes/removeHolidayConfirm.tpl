<div class="modal" id="removeHolidayItem" data-support-hours-holiday-remove-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h6 class="top__title text-danger"></i>Remove Holidays Item</h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>You are trying to remove holidays item, <b class="text-danger">this action can not be undone!</b>. Please confirm, to remove this item completely.</p>
            </div>
            <div class="modal__actions">
                <button class="btn btn--danger" type="button" data-support-hours-holiday-remove-modal-submit data-item="" data-id="">
                    <span class="btn__text">{$lang.general.confirm}</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">{$lang.general.cancel}</span></button>
            </div>
        </div>
    </div>
</div>