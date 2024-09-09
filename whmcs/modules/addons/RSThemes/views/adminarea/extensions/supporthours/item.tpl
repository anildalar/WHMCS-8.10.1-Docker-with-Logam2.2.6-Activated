{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl"}
{/block}

{block name="template-content"}
    <form 
        id="supportHoursForm" 
        action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "save"])}" 
        data-ajax-url="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "save"])}"
        method="POST"
        data-check-unsaved-changes
    >
        <input value="{$extension->getItemData("id")}" class="form-control " type="hidden" name="id">
        <input type="hidden" value="saveOperatingHours" name="action">
        <div class="block">
            <div class="block__body">
                <div class="section">
                    <h3 class="section__title">
                        Operating Hours
                        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['operating_hours']}
                    </h3>
                    <div class="panel panel--collapse widget widget--support of-visible">
                        <label class="widget__top top m-b-0x">
                            <h6 class="top__title">
                                Operating Hours
                            </h6>
                        </label>
                        <div class="widget__body">
                            <div class="widget__content">
                                <div class="form-group form-group--row">
                                    <label class="form-label">
                                        Operating days
                                        {if $extension->getTooltips()->item['operating_hours']['operating_days']}
                                            {if isset($extension->getTooltips()->item['operating_hours']['operating_days']['url']) && $extension->getTooltips()->item['operating_hours']['operating_days']['url'] != ""}
                                                {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['operating_hours']['operating_days']['url']}' target='_blank'>Learn More</a>"}
                                            {else}
                                                {assign var="popoverFooter" value=false}
                                            {/if}
                                            {include 
                                                file="adminarea/includes/helpers/popover.tpl" 
                                                popoverClasses="notification__popover popover__top"
                                                popoverBody="{$extension->getTooltips()->item['operating_hours']['operating_days']['content']}"
                                                popoverFooter="{$popoverFooter}"
                                            }
                                        {/if}
                                    </label>
                                    <select class="form-control form-control--sm multiselect form-control--basic display-pages" name="settings[days][]" id="sidebar-pages" multiple data-selectize-all>
                                        <option value="all" {if !isset($extension->getItemData("days")) || !is_array($extension->getItemData("days")) || count($extension->getItemData("days")) == 0 || in_array('all',$extension->getItemData("days"))}selected{/if}>All</option>
                                        <option value="mon" {if is_array($extension->getItemData("days")) && in_array("mon",$extension->getItemData("days"))}selected{/if}>Monday</option>
                                        <option value="tue" {if is_array($extension->getItemData("days")) && in_array("tue",$extension->getItemData("days"))}selected{/if}>Tuesday</option>
                                        <option value="wed" {if is_array($extension->getItemData("days")) && in_array("wed",$extension->getItemData("days"))}selected{/if}>Wednesday</option>
                                        <option value="thu" {if is_array($extension->getItemData("days")) && in_array("thu",$extension->getItemData("days"))}selected{/if}>Thursday</option>
                                        <option value="fri" {if is_array($extension->getItemData("days")) && in_array("fri",$extension->getItemData("days"))}selected{/if}>Friday</option>
                                        <option value="sat" {if is_array($extension->getItemData("days")) && in_array("sat",$extension->getItemData("days"))}selected{/if}>Saturday</option>
                                        <option value="sun" {if is_array($extension->getItemData("days")) && in_array("sun",$extension->getItemData("days"))}selected{/if}>Sunday</option>
                                    </select>
                                </div>
                                <div class="form-group form-group--row" data-working-hours-container>
                                    <label class="form-label">
                                        Working hours
                                        {if $extension->getTooltips()->item['operating_hours']['working_hours']}
                                            {if isset($extension->getTooltips()->item['operating_hours']['working_hours']['url']) && $extension->getTooltips()->item['operating_hours']['working_hours']['url'] != ""}
                                                {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['operating_hours']['working_hours']['url']}' target='_blank'>Learn More</a>"}
                                            {else}
                                                {assign var="popoverFooter" value=false}
                                            {/if}
                                            {include 
                                                file="adminarea/includes/helpers/popover.tpl" 
                                                popoverClasses="notification__popover popover__top"
                                                popoverBody="{$extension->getTooltips()->item['operating_hours']['working_hours']['content']}"
                                                popoverFooter="{$popoverFooter}"
                                            }
                                        {/if}
                                    </label>
                                    <div class="d-flex form-display-hours">
                                        <select class="form-control time-select w-100" name="settings[work_hours_begin]" data-working-hours-begin {if $extension->getItemData('all_day')}disabled{/if}>
                                            {foreach $extension->getTimeOptions($extension->getItemData('work_hours_begin')) as $timeOption}
                                                <option value="{$timeOption['value']}" {if $timeOption['selected']} selected{/if}>{$timeOption['label']}</option>
                                            {/foreach}
                                        </select>
                                        <div class="divider-pause">
                                            <div>-</div>
                                        </div>
                                        <select class="form-control time-select w-100" name="settings[work_hours_end]" data-working-hours-end {if $extension->getItemData('all_day')}disabled{/if}>
                                            {foreach $extension->getTimeOptions($extension->getItemData('work_hours_end')) as $timeOption}
                                                <option value="{$timeOption['value']}" {if $timeOption['selected']} selected{/if}>{$timeOption['label']}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                    <label class="m-l-2x is-pointer d-flex align-items-center">    
                                        <span class="d-flex align-items-center form-text m-b-0x m-r-2x">
                                            All day
                                            {if $extension->getTooltips()->item['operating_hours']['all_day']}
                                                {if isset($extension->getTooltips()->item['operating_hours']['all_day']['url']) && $extension->getTooltips()->item['operating_hours']['all_day']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['operating_hours']['all_day']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['operating_hours']['all_day']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </span>                                
                                        <div class="switch switch--primary">
                                            <input type="hidden" name="settings[all_day]" value="0">
                                            <input class="switch__checkbox" name="settings[all_day]" value="1" type="checkbox" {if $extension->getItemData('all_day')}checked=""{/if} data-working-hours-all-day>
                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                        </div>     
                                    </label>
                                </div>
                                <div class="form-group form-group--row">
                                    <label class="is-pointer">
                                        <span class="form-label">
                                            Apply holidays
                                            {if $extension->getTooltips()->item['operating_hours']['apply_holidays']}
                                                {if isset($extension->getTooltips()->item['operating_hours']['apply_holidays']['url']) && $extension->getTooltips()->item['operating_hours']['apply_holidays']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['operating_hours']['apply_holidays']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['operating_hours']['apply_holidays']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </span>
                                        <div class="switch switch--primary">
                                            <input type="hidden" name="settings[apply_holidays]" value="0">
                                            <input class="switch__checkbox" name="settings[apply_holidays]" value="1" type="checkbox" {if $extension->getItemData('apply_holidays') || $extension->getItemData('apply_holidays') != "0"}checked=""{/if}>
                                            <span class="switch__container"><span class="switch__handle"></span></span>
                                        </div>  
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__sidebar block__sidebar--md">
                <div class="section">
                    <h3 class="section__title">
                        Settings
                        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['settings']}
                    </h3>
                    <div class="section__body">
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    General
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group" data-support-hours-translation-container>
                                        <label class="form-label">
                                            <span class="text-default form-text d-flex align-items-center">
                                                Name
                                                {if $extension->getTooltips()->item['settings']['general']['name']}
                                                    {if isset($extension->getTooltips()->item['settings']['general']['name']['url']) && $extension->getTooltips()->item['settings']['general']['name']['url'] != ""}
                                                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['settings']['general']['name']['url']}' target='_blank'>Learn More</a>"}
                                                    {else}
                                                        {assign var="popoverFooter" value=false}
                                                    {/if}
                                                    {include 
                                                        file="adminarea/includes/helpers/popover.tpl" 
                                                        popoverClasses="notification__popover popover__top"
                                                        popoverBody="{$extension->getTooltips()->item['settings']['general']['name']['content']}"
                                                        popoverFooter="{$popoverFooter}"
                                                    }
                                                {/if}
                                            </span>
                                            <a 
                                                class="form-label__translate" 
                                                href="#supportHoursTranslationModal" 
                                                data-support-hours-translation 
                                                data-toggle="lu-modal" 
                                                data-backdrop="static" 
                                                data-keyboard="false"
                                            >
                                                Translate
                                            </a>
                                        </label>
                                        <div class="form-group">
                                            <input 
                                                type="text"
                                                lu-required
                                                class="form-control" 
                                                data-support-hours-translation-input 
                                                value="{$extension->getItemData("name")}" 
                                                data-ajax-url="{$helper->url('Page@updateSeoTranslations',['templateName'=>$template->getMainName()])}"
                                            >
                                            <input 
                                                type="hidden" 
                                                class="form-control" 
                                                data-support-hours-translation-value 
                                                name="settings[name]" 
                                                value="{$extension->getTranslationData("name")}"
                                            >
                                            <span class="form-feedback is-hidden">{$lang.general.field_required}</span>  
                                        </div>
                                    </div>

                                    <div class="form-group d-flex">
                                        <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x" style="flex-grow: 1">
                                            Activate instance
                                            {if $extension->getTooltips()->item['settings']['general']['activate_instance']}
                                                {if isset($extension->getTooltips()->item['settings']['general']['activate_instance']['url']) && $extension->getTooltips()->item['settings']['general']['activate_instance']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['settings']['general']['activate_instance']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['settings']['general']['activate_instance']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </span>
                                        <label>
                                            <div class="switch switch--primary">
                                                <input type="hidden" name="settings[activated]" value=0>
                                                <input class="switch__checkbox" name="settings[activated]" value="1" type="checkbox" {if $extension->getItemData("activated")}checked{/if}>
                                                <span class="switch__container"><span class="switch__handle"></span></span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget panel of-visible">
                            <label class="widget__top top">
                                <div class="top__title">
                                    Display
                                </div>
                            </label>
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group">
                                        <span class="form-label text-default form-text m-r-2x " style="flex-grow: 1">
                                            Support department
                                            {if $extension->getTooltips()->item['settings']['display']['support_departments']}
                                                {if isset($extension->getTooltips()->item['settings']['display']['support_departments']['url']) && $extension->getTooltips()->item['settings']['display']['support_departments']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['settings']['display']['support_departments']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['settings']['display']['support_departments']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </span>
                                        <select class="form-control form-control--sm multiselect form-control--basic display-pages" name="settings[departments][]" multiple data-selectize-all>
                                            <option value="all" {if !isset($extension->getItemData("departments")) || !is_array($extension->getItemData("departments")) || count($extension->getItemData("departments")) == 0 || in_array('all',$extension->getItemData("departments"))}selected{/if}>All</option>
                                            {foreach $extension->getSupportDepartments() as $department}
                                            <option {if is_array($extension->getItemData("departments")) && in_array($department->id,$extension->getItemData("departments"))}selected{/if} value="{$department->id}">{$department->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{/block}

{block name="template-scripts"}
    <script type="text/javascript" src="{$helper->extensionAdminScript('supporthours', 'support-hours.js')}"></script>
{/block}

{block name="template-actions"}
    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>                    
                    <button 
                        class="btn btn--primary" 
                        type="button"
                        data-check-unsaved-changes
                        data-changes-save="#supportHoursForm"
                        data-form-validate="#supportHoursForm"
                    >
                        <span class="btn__text">Save Changes</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--outline btn--default" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'settings'])}">
                        <span class="btn__text">Cancel</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
                <div class="m-l-a">
                    <a class="btn btn--outline btn--default" href="#modal-delete-item" data-toggle="lu-modal" data-check-unsaved-changes>
                        <span class="btn__text">Delete</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="template-modals"}
    {include file="adminarea/extensions/supporthours/includes/name-translation-modal.tpl" type="item" label="Support Hours - Item Name Translation"}
    {include file="adminarea/includes/modals/save-confirmation.tpl"}
    {include file="adminarea/includes/modals/unsaved-changes.tpl"}
    <div id="modal-delete-item" class="modal">
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
                    <a class="btn btn--danger" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'id' => $extension->getItemData("id"), 'exaction' => "delete"])}">
                        Delete
                    </a>
                    <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">Cancel</span></button>
                </div>
            </div>
        </div>
    </div>
{/block}
