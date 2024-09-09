{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl"}
{/block}

{block name="template-tabs"}
    {include file="adminarea/extensions/supporthours/includes/support_hours_tabs.tpl"}
{/block}

{block name="template-content"}
    <div class="section">
    <h3 class="section__title">
        Settings
        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->settings['settings']}
    </h3>
        <div class="section-body panel">
            <form 
                id="supportHoursForm"
                action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName()])}"
                data-ajax-url="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName()])}"
                method="POST"
                data-check-unsaved-changes
            >
                <div class="form-group form-group--row">
                    <label class="form-label">
                        Display on
                        {if $extension->getTooltips()->settings['settings']['display_on']}
                            {if isset($extension->getTooltips()->settings['settings']['display_on']['url']) && $extension->getTooltips()->settings['settings']['display_on']['url'] != ""}
                                {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->settings['settings']['display_on']['url']}' target='_blank'>Learn More</a>"}
                            {else}
                                {assign var="popoverFooter" value=false}
                            {/if}
                            {include 
                                file="adminarea/includes/helpers/popover.tpl" 
                                popoverClasses="notification__popover popover__top"
                                popoverBody="{$extension->getTooltips()->settings['settings']['display_on']['content']}"
                                popoverFooter="{$popoverFooter}"
                            }
                        {/if}
                    </label>
                    <select class="form-control form-control--sm multiselect form-control--basic display-pages" name="settings[displayed_on][]" id="sidebar-pages" multiple data-selectize-all>
                        <option value="all" {if in_array("all",$extension->getDisplayedOnPages())}selected{/if}>All Support Pages</option>
                        <option value="supportticketslist" {if in_array("supportticketslist",$extension->getDisplayedOnPages())}selected{/if}>Support Ticket List</option>
                        <option value="viewticket" {if in_array("viewticket",$extension->getDisplayedOnPages())}selected{/if}>View Support Ticket</option>
                        <option value="supportticketsubmit-steptwo" {if in_array("supportticketsubmit-steptwo",$extension->getDisplayedOnPages())}selected{/if}>Open Support Ticket</option>
                        <option value="supportticketsubmit-stepone" {if in_array("supportticketsubmit-stepone",$extension->getDisplayedOnPages())}selected{/if}>Support Departments</option>
                    </select>
                </div>
                <div class="form-group form-group--row">
                    <label class="form-label">
                        Time zone
                        {if $extension->getTooltips()->settings['settings']['time_zone']}
                            {if isset($extension->getTooltips()->settings['settings']['time_zone']['url']) && $extension->getTooltips()->settings['settings']['time_zone']['url'] != ""}
                                {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->settings['settings']['time_zone']['url']}' target='_blank'>Learn More</a>"}
                            {else}
                                {assign var="popoverFooter" value=false}
                            {/if}
                            {include 
                                file="adminarea/includes/helpers/popover.tpl" 
                                popoverClasses="notification__popover popover__top"
                                popoverBody="{$extension->getTooltips()->settings['settings']['time_zone']['content']}"
                                popoverFooter="{$popoverFooter}"
                            }
                        {/if}
                    </label>
                    <select class="form-control" name="settings[timezone]">
                        {foreach $extension->getTimeZones() as $timezone}
                            <option value="{$timezone['label']}" {if $timezone['selected']} selected {/if}>{$timezone['label']}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group form-group--row">
                    <label class="form-label">
                        Time format
                        {if $extension->getTooltips()->settings['settings']['time_format']}
                            {if isset($extension->getTooltips()->settings['settings']['time_format']['url']) && $extension->getTooltips()->settings['settings']['time_format']['url'] != ""}
                                {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->settings['settings']['time_format']['url']}' target='_blank'>Learn More</a>"}
                            {else}
                                {assign var="popoverFooter" value=false}
                            {/if}
                            {include 
                                file="adminarea/includes/helpers/popover.tpl" 
                                popoverClasses="notification__popover popover__top"
                                popoverBody="{$extension->getTooltips()->settings['settings']['time_format']['content']}"
                                popoverFooter="{$popoverFooter}"
                            }
                        {/if}
                    </label>
                   <select class="form-control" name="settings[timeformat]">
                        <option value="g:i A" {if $extension->getExtensionSettings("timeformat") == "g:i A"} selected {/if}>g:i A (ex. 12:50 am)</option>
                        <option value="G:i" {if $extension->getExtensionSettings("timeformat") == "G:i"} selected {/if}>HH:mm (ex. 14:00)</option>
                    </select>
                </div>
                <div class="form-group form-group--row">
                    <label class="is-pointer">
                        <span class="form-label">
                            Show status
                            {if $extension->getTooltips()->settings['settings']['show_status']}
                                {if isset($extension->getTooltips()->settings['settings']['show_status']['url']) && $extension->getTooltips()->settings['settings']['show_status']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->settings['settings']['show_status']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover popover__top"
                                    popoverBody="{$extension->getTooltips()->settings['settings']['show_status']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            {/if}
                        </span>    
                        <div class="switch switch--success">
                            <input type="hidden" name="settings[status]" value="0">
                            <input class="switch__checkbox" name="settings[status]" value="1" type="checkbox" {if $extension->getExtensionSettingValue('status')} checked {/if}>
                            <span class="switch__container"><span class="switch__handle {if $template->getVersion()|intval >= 2}switch__handle--v2{/if}"></span></span>
                        </div>
                    </label>
                </div> 
                <input type="hidden" name="action" value="saveSettings">
            </form>
        </div>
    </div>
{/block}

{block name="template-scripts"}
    <script type="text/javascript" src="{$helper->extensionAdminScript('supporthours', 'support-hours.js')}"></script>
{/block}

{block name="template-modals"}
    {include file="adminarea/includes/modals/save-confirmation.tpl"}
    {include file="adminarea/includes/modals/unsaved-changes.tpl"}
{/block}


{block name="template-actions"}
    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <button 
                class="btn btn--primary" 
                type="button"
                data-changes-save="#supportHoursForm"  
                data-check-unsaved-changes
            >
                <span class="btn__text">Save Changes</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <a class="btn btn--outline btn--default" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName()])}">
                <span class="btn__text">Cancel</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
{/block}
