{**************************** 

Client Notifications - Item - Alert Style
1. Notification State
2. Notification Type
3. Modal Display On
4. Modal On Load Delay
5. Modal Size
6. Alert Button Locations
7. Modal Buttons Location
8. Show Icon
9. Allow closing of the alert by the customer

*****************************}

<div class="section" data-client-alerts-style>
    <h3 class="section__title">
        Notification Style
        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['notification_style']}
    </h3>
    <div class="section__body">
        <div class="widget panel of-visible">
            <div class="widget__body">
                <div class="widget__content">
                    <div class="section__body">
                        {* 1. Notification State *}
                        <div class="form-group">
                            <label class="form-label">
                                Notification State
                                {if isset($extension->getTooltips()->item['style']['state']['url']) && $extension->getTooltips()->item['style']['state']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['state']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['state']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            </label>
                            <select class="form-control" id="alertStyle" name="alertstyle[style]">
                                <option value="info" {if $extension->getItemData("alertstyle")->style == "info"}selected{/if}>Info</option>
                                <option value="success" {if $extension->getItemData("alertstyle")->style == "success"}selected{/if}>Success</option>
                                <option value="danger" {if $extension->getItemData("alertstyle")->style == "danger"}selected{/if}>Danger</option>
                                <option value="warning" {if $extension->getItemData("alertstyle")->style == "warning"}selected{/if}>Warning</option>
                                <option value="default" {if $extension->getItemData("alertstyle")->style == "default"}selected{/if}>Default</option>
                            </select>
                        </div>

                        {* 2. Notification Type *}
                        <div class="form-group">
                            <label class="form-label">
                                Notification Type
                                {if isset($extension->getTooltips()->item['style']['type']['url']) && $extension->getTooltips()->item['style']['type']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['type']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['type']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            </label>
                            
                            <select class="form-control" id="alertType" name="alertstyle[type]" data-alert-type>
                                <option value="default" {if $extension->getItemData("alertstyle")->type == "default"}selected{/if}>Alert</option>
                                {* <option value="floating-top-bar">Floating Top Bar</option>
                                <option value="floating-top-right-box">Floating Top Right Box</option>
                                <option value="floating-bottom-right-box">Floating Bottom Right Box</option>
                                <option value="floating-bottom-bar">Floating Bottom Bar</option> *}
                                <option value="modal" {if $extension->getItemData("alertstyle")->type == "modal"}selected{/if}>Modal</option>
                            </select>
                        </div>

                        {* 3. Modal Display On *}
                        <div class="form-group {if $extension->getItemData("alertstyle")->type != "modal"}is-hidden{/if}" data-alert-modal-display-on>
                            <label class="form-label">
                                Modal Display Trigger
                                {if isset($extension->getTooltips()->item['style']['modal_display_on']['url']) && $extension->getTooltips()->item['style']['modal_display_on']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['modal_display_on']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['modal_display_on']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            </label>
                            
                            <select class="form-control" id="alertType" name="alertstyle[modalDisplayOn]" {if $extension->getItemData("alertstyle")->type != "modal"}disabled{/if} data-alert-modal-display-on-select>
                                <option value="load" {if $extension->getItemData("alertstyle")->modalDisplayOn == "load"}selected{/if}>Page Load</option>
                                <option value="exit" {if $extension->getItemData("alertstyle")->modalDisplayOn == "exit"}selected{/if}>Window Exit Intent</option>
                            </select>
                        </div>

                        {* 4. Modal On Load Delay *}
                        <div class="form-group {if ($extension->getItemData("alertstyle")->modalDisplayOn == "load" || !$extension->getItemData("alertstyle")->modalDisplayOn) && $extension->getItemData("alertstyle")->type == "modal"}{else} is-hidden{/if}" data-alert-modal-display-delay>
                            <label class="form-label">
                                Modal Display Delay
                                {if isset($extension->getTooltips()->item['style']['modal_display_delay']['url']) && $extension->getTooltips()->item['style']['modal_display_delay']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['modal_display_delay']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['modal_display_delay']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            </label>
                            <input class="form-control" type="number" min="0" step="100" name="alertstyle[onLoadDelay]" value="{if $extension->getItemData("alertstyle")->onLoadDelay || $extension->getItemData("alertstyle")->onLoadDelay == "0"}{$extension->getItemData("alertstyle")->onLoadDelay}{else}0{/if}"  placeholder="Enter Delay In Milliseconds"  data-alert-modal-display-delay-input/>
                        </div>

                        {* 5. Modal Size *}
                        <div class="form-group {if $extension->getItemData("alertstyle")->type != "modal"}is-hidden{/if}" data-alert-modal-size>
                            <label class="form-label">
                                Modal Size
                                {if isset($extension->getTooltips()->item['style']['size']['url']) && $extension->getTooltips()->item['style']['size']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['size']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['size']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                } 
                            </label>
                            
                            <select class="form-control" id="alertType" name="alertstyle[modalSize]" data-alert-modal-size-select>
                                <option value="sm" {if $extension->getItemData("alertstyle")->modalSize == "sm"}selected{/if}>Small</option>
                                <option value="md" {if $extension->getItemData("alertstyle")->modalSize == "md"}selected{/if}>Medium</option>
                                <option value="lg" {if $extension->getItemData("alertstyle")->modalSize == "lg"}selected{/if}>Large</option>
                                <option value="xl" {if $extension->getItemData("alertstyle")->modalSize == "xl"}selected{/if}>Extra Large</option>
                            </select>
                        </div>

                        {* 6. Alert Button Locations *}
                        <div class="form-group {if $extension->getItemData("alertstyle")->type == "modal"}is-hidden{/if}" data-alert-button-location>
                            <label class="form-label">
                                Alert Button Locations
                                {if isset($extension->getTooltips()->item['style']['button_location']['url']) && $extension->getTooltips()->item['style']['button_location']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['button_location']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['button_location']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                } 
                            </label>
                            
                            <select class="form-control" id="alertType" name="alertstyle[buttonLocation]" {if $extension->getItemData("alertstyle")->type == "modal"}disabled{/if} data-alert-button-location-select>
                                <option value="right" {if $extension->getItemData("alertstyle")->buttonLocation == "right"}selected{/if}>Right</option>
                                <option value="bottom" {if $extension->getItemData("alertstyle")->buttonLocation == "bottom"}selected{/if}>Bottom</option>
                            </select>
                        </div>

                        {* 7. Modal Buttons Location *}
                        <div class="form-group {if $extension->getItemData("alertstyle")->type != "modal"}is-hidden{/if}" data-alert-modal-button-location>
                            <label class="form-label">
                                Modal Buttons Location
                                {if isset($extension->getTooltips()->item['style']['modal_button_location']['url']) && $extension->getTooltips()->item['style']['modal_button_location']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['modal_button_location']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['modal_button_location']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                } 
                            </label>
                            
                            <select class="form-control" id="alertType" name="alertstyle[modalButtonLocation]" {if $extension->getItemData("alertstyle")->type != "modal"}disabled{/if} data-alert-modal-button-location-select>
                                <option value="left" {if $extension->getItemData("alertstyle")->modalButtonLocation == "left"}selected{/if}>Left</option>
                                <option value="center" {if $extension->getItemData("alertstyle")->modalButtonLocation == "center"}selected{/if}>Center</option>
                                <option value="right" {if $extension->getItemData("alertstyle")->modalButtonLocation == "right"}selected{/if}>Right</option>
                            </select>
                        </div>

                        {* 8. Show Icon *}
                        <div class="form-group d-flex">
                            <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x">
                                Display Default Icons
                                {if isset($extension->getTooltips()->item['style']['display_default_icon']['url']) && $extension->getTooltips()->item['style']['display_default_icon']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['display_default_icon']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['display_default_icon']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }  
                            </span>
                            <label class="m-l-a">
                                <div class="switch switch--primary">
                                    <input type="hidden" value="0" name="alertstyle[displayIcon]" value="0"/>
                                    <input class="switch__checkbox" name="alertstyle[displayIcon]" value="1" type="checkbox" {if $extension->getItemData("alertstyle")->displayIcon || !isset($extension->getItemData("alertstyle")->displayIcon)}checked{/if}>
                                    <span class="switch__container"><span class="switch__handle"></span></span>
                                </div>
                            </label>
                        </div>

                        {* 9. Allow closing of the alert by the customer *}
                        <div class="form-group d-flex m-b-0x">
                            <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x">
                                Display Close Icon
                                {if isset($extension->getTooltips()->item['style']['display_close_icon']['url']) && $extension->getTooltips()->item['style']['display_close_icon']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['display_close_icon']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['style']['display_close_icon']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            </span>
                            <label class="m-l-a" data-toggle="lu-collapse" data-target="#closeAlertsForDays" aria-expanded="true">
                                <div class="switch switch--primary">
                                    <input type="hidden" value="0" name="alertstyle[allowclose]" value="0"/>
                                    <input class="switch__checkbox" name="alertstyle[allowclose]" value="1" type="checkbox" {if $extension->getItemData("alertstyle")->allowclose || !isset($extension->getItemData("alertstyle")->allowclose)}checked{/if}>
                                    <span class="switch__container"><span class="switch__handle"></span></span>
                                </div>
                            </label>
                        </div>
                        <div class="collapse {if $extension->getItemData("alertstyle")->allowclose || !isset($extension->getItemData("alertstyle")->allowclose)}show{/if}" id="closeAlertsForDays">
                            <div class="form-group m-t-1x">
                                <label class="form-label">
                                    Enter Number of Days
                                    {if isset($extension->getTooltips()->item['style']['number_of_days']['url']) && $extension->getTooltips()->item['style']['number_of_days']['url'] != ""}
                                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['style']['number_of_days']['url']}' target='_blank'>Learn More</a>"}
                                    {else}
                                        {assign var="popoverFooter" value=false}
                                    {/if}
                                    {include 
                                        file="adminarea/includes/helpers/popover.tpl" 
                                        popoverClasses="notification__popover"
                                        popoverBody="{$extension->getTooltips()->item['style']['number_of_days']['content']}"
                                        popoverFooter="{$popoverFooter}"
                                    }
                                </label>
                                <div class="row">
                                    <div class="col-12">
                                        <input class="form-control" type="number" min="0" name="alertstyle[days]" value="{if $extension->getItemData("alertstyle")->days || $extension->getItemData("alertstyle")->days == "0"}{$extension->getItemData("alertstyle")->days}{else}0{/if}" placeholder="Enter Number of Days"/>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
