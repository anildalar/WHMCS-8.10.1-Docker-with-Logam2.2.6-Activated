<div class="modal modal--lg modal--media" id="clientNotificationIconModal" data-modal-client-notification-icon>
    <div class="modal__dialog">
        <form 
            class="modal__content"
            data-load-icons-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
        >
            <div class="modal__top top">
                <h6 class="top__title">
                    {$lang.menu.menu_items.modal.icon.title}
                    {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->modal['icon']}
                </h6>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body" data-modal-client-notification-body>
                {include file="adminarea/extensions/clientnotifications/includes/modal/icon-tabs.tpl" type='client-nofitications'}
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" type="button" data-modal-client-notification-submit>
                    <span class="btn__text">{$lang.general.confirm}</span>
                </button>
                <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                    <span class="btn__text">{$lang.general.cancel}</span>
                </a>
            </div>
        </form>
    </div>
</div>