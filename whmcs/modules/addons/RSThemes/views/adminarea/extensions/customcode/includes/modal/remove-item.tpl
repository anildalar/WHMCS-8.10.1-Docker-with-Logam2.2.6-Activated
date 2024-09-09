<div id="modal-delete-item" class="modal" data-custom-code-modal-remove>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title text-danger">{$lang.extensions.custom_code_modal.title}</h4>
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
                <a class="btn btn--danger" 
                    {if $item}
                        href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'id' => $extension->getItemData("id"), 'exaction' => "delete"])}" 
                    {else}
                        href="#"
                        data-custom-code-modal-remove-confirm
                    {/if}
                    data-btn-loader
                >
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text">
                        Confirm
                    </span>    
                </a>
                <button class="btn btn--outline btn--default" data-dismiss="lu-modal" aria-label="Close">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>