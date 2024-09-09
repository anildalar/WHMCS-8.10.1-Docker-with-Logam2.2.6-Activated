<div class="modal modal--lg" id="addNewButtonItemModal" data-add-new-button-item-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title h6">Add New "Button" {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->modal['button']}</h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <form
                id="addNewButtonForm"
                data-add-new-button-item-form
                data-ajax-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/adminApi.php?controller=ClientNotificationsExtension&templateName={$template->getMainName()}&method=getButton"
                data-assets-url="{$whmcsURL}/templates/{$themeName}/assets"
                data-load-icons-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/clientApi.php?controller=Icon&method=renderTabs&items="
            >
                <div class="modal__body">
                    <div class="form-group"> 
                        <label class="form-label">Button Size</label>
                        <select class="form-control" name="item[size]" required style="opacity: 1" data-default-select-value="default">
                            <option value="xs">Extra Small</option>
                            <option value="sm">Small</option>
                            <option value="default" selected>Default</option>
                            <option value="lg">Large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Style</label>
                        <select class="form-control" name="item[style]" required style="opacity: 1" data-default-select-value="solid">
                            <option value="solid" selected>Solid</option>
                            <option value="outline">Outline</option>
                            <option value="link">Link</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Type</label>
                        <select class="form-control" name="item[type]" required style="opacity: 1" data-default-select-value="primary" >
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
                        <input class="form-control" type="text" name="item[text]" value=""/>
                    </div>
                    <div class="form-group">
                        <label class="form-label form-label--basic">Button Link Type</label>
                        <select class="form-control" name="item[link_type]"data-button-link-type data-default-select-value="custom-url">
                            <option value="custom-url" selected>Custom URL</option>
                            <option value="whmcs-page">WHMCS Page</option>
                            <option value="close-element">Close Notification</option>
                        </select>
                    </div>
                    <div class="form-group" data-button-custom-url>
                        <label class="form-label">Button Custom Url</label>
                        <input class="form-control" type="text" name="item[custom_url]" data-custom-url-button-input value=""/>
                    </div>
                    <div class="form-group is-hidden" data-button-linked-page>
                        <label class="form-label">Button Linked Page</label>
                        <select class="form-control" name="item[whmcs_page]" data-linked-page-button-input>
                            {foreach $extension->getPages()->pages as $page}
                                <option value="{$page['name']}">{$page['label']}</option>
                            {/foreach}
                            {foreach $extension->getTicketDepartments() as $index=>$name}
                                <option value="submitticket.php?step=2&deptid={$index}">Ticket Department - {$name}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Button Custom Classes</label>
                        <input class="form-control" type="text" name="item[custom_classes]" value=""/>
                    </div>
                    <div class="form-group">                        
                        <label class="form-label is-pointer m-w-360 m-b-0x m-t-2x">
                            <span class="form-text">Open URL In New Window</span>
                            <div class="switch switch--success">
                                <input type="hidden" name="item[target_blank]" value="0" />
                                <input class="switch__checkbox" name="item[target_blank]" value="1" type="checkbox">
                                <span class="switch__container">
                                    <span class="switch__handle"></span>
                                </span>
                            </div>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-label is-pointer m-w-360 m-b-0x m-t-2x"
                               data-toggle="lu-collapse"
                               data-target="#button-add-modal-tabs">
                            <span class="form-text">Show icon for this item (On/Off)</span>
                            <div class="switch switch--success">
                                <input type="hidden" name="item[show_icon]" value="0" />
                                <input class="switch__checkbox" name="item[show_icon]" value="1" type="checkbox" data-show-icon-tabs checked>
                                <span class="switch__container">
                                    <span class="switch__handle"></span>
                                </span>
                            </div>
                        </label>
                    </div>
                    <div class="collapse show" id="button-add-modal-tabs" data-product-tabs data-icons-tabs>
                        {include file="adminarea/pages/includes/modal/icon-tabs.tpl" type='button-add'}
                    </div>
                    <input type="hidden" name="item[list_name]" data-list-name value=""/>
                    <input type="hidden" name="item[new_index]" data-list-new-index value=""/>
                    <input type="hidden" name="item[new_position]" data-list-new-position value=""/>
                    <input type="hidden" name="item[section]" data-list-section-index value=""/>
                    <input type="hidden" name="item[group]" data-list-group-index value=""/>
                    <input type="hidden" name="item[hide_modal_icon]" data-list-modal-icon value=""/>
                </div>
                <div class="modal__actions">
                    <button class="btn btn--primary" data-add-new-button-item-btn type="submit" form="addNewButtonForm">
                        <span class="btn__text">Add New Button</span>
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