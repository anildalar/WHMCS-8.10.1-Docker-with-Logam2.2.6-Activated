<div class="modal modal--lg" id="editButtonItemModal" data-edit-button-item-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title h6">
                    Edit "Button"
                    {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->modal['button']}
                </h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <form id="editButtonForm" data-edit-button-item-form
            data-ajax-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/adminApi.php?controller=ClientNotificationsExtension&templateName={$template->getMainName()}&method=getButton"
            data-assets-url="{$whmcsURL}/templates/{$themeName}/assets"
            data-load-icons-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body">
                    <div class="form-group">
                        <label class="form-label">Button Size</label>
                        <select class="form-control" data-edit-size name="item[size]" required style="opacity: 1">
                            <option value="xs">Extra Small</option>
                            <option value="sm">Small</option>
                            <option value="default" selected>Default</option>
                            <option value="lg">Large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Style</label>
                        <select class="form-control" data-edit-style name="item[style]" required style="opacity: 1">
                            <option value="solid" selected>Solid</option>
                            <option value="outline">Outline</option>
                            <option value="link">Link</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Type</label>
                        <select class="form-control" data-edit-type name="item[type]" required style="opacity: 1">
                            <option value="primary" selected>Primary</option>
                            <option value="secondary">Secondary</option>
                            <option value="default">Default</option>
                            <option value="info">Info</option>
                            <option value="success">Success</option>
                            <option value="warning">Warning</option>
                            <option value="danger">Danger</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Text</label>
                        <input class="form-control" type="text" name="item[text]" data-edit-text value=""/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Link Type</label>
                        <select
                            class="form-control"
                            name="item[link_type]"
                            data-button-link-type
                            data-edit-link-type
                        >
                            <option value="custom-url" selected>Custom URL</option>
                            <option value="whmcs-page">WHMCS Page</option>
                            <option value="close-element">Close Notification</option>
                        </select>
                    </div>
                    <div class="form-group" data-button-custom-url>
                        <label class="form-label">Button Custom Url</label>
                        <input class="form-control" type="text" name="item[custom_url]" data-custom-url-button-input data-edit-custom-url value=""/>
                    </div>
                    <div class="form-group is-hidden" data-button-linked-page>
                        <label class="form-label">Button Linked Page</label>
                        <select class="form-control" name="item[whmcs_page]" data-linked-page-button-input data-edit-page style="opacity: 1">
                            {foreach $extension->getPages()->pages as $page}
                                <option value="{$page['name']}">{$page['label']}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Custom Classes</label>
                        <input class="form-control" type="text" name="item[custom_classes]" data-edit-custom-classes value=""/>
                    </div>
                    <div class="form-group">                        
                        <label class="form-label is-pointer m-w-360 m-b-0x m-t-2x">
                            <span class="form-text">Open URL In New Window</span>
                            <div class="switch switch--success">
                                <input type="hidden" name="item[target_blank]" value="0" />
                                <input class="switch__checkbox" name="item[target_blank]" value="1" data-edit-target-blank type="checkbox">
                                <span class="switch__container">
                                    <span class="switch__handle"></span>
                                </span>
                            </div>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-label is-pointer m-w-360 m-b-0x m-t-2x"
                               data-toggle="lu-collapse"
                               data-target="#button-edit-modal-tabs">
                            <span class="form-text">Show icon for this item (On/Off)</span>
                            <div class="switch switch--success">
                                <input type="hidden" name="item[show_icon]" value="0" />
                                <input class="switch__checkbox" name="item[show_icon]" value="1" type="checkbox" checked data-show-icon-tabs>
                                <span class="switch__container">
                                    <span class="switch__handle"></span>
                                </span>
                            </div>
                        </label>
                    </div>
                    <div class="collapse show" id="button-edit-modal-tabs" data-product-tabs data-icons-tabs>
                        {include file="adminarea/pages/includes/modal/icon-tabs.tpl" type='button-edit'}
                    </div>
                    <input type="hidden" name="item[list_name]" data-edit-list-name value=""/>
                    <input type="hidden" name="item[index]" data-edit-key value=""/>
                    <input type="hidden" name="item[position]" data-edit-position value=""/>
                    <input type="hidden" name="item[section]" data-edit-section-index value=""/>
                    <input type="hidden" name="item[group]" data-edit-group-index value=""/>
                    <input type="hidden" name="item[hide_modal_icon]" data-list-modal-icon value=""/>

                </div>
                <div class="modal__actions">
                    <button class="btn btn--primary" data-edit-button-item-btn  type="submit" form="editButtonForm">
                        <span class="btn__text">Edit Button</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                        <span class="btn__text">Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>