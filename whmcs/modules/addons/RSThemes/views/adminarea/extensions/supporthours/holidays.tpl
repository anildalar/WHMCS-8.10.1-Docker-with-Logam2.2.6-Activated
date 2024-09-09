{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/supporthours/includes/support_hours_breadcrumps.tpl"}
{/block}

{block name="template-tabs"}
    {include file="adminarea/extensions/supporthours/includes/support_hours_tabs.tpl"}
{/block}

{block name="template-content"}
    <div class="section" data-check-unsaved-changes data-support-hours-holidays>
        <div class="section__header d-flex">
            <h3 class="section__title">
                Holidays
                {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->holidays['holidays']}
            </h3>
            <button type="button" class="m-l-a btn btn--primary" data-support-hours-holidays-add="{$extension->getExtensionHolidays()|@count + 1}"><i class="btn__icon lm lm-plus"></i><span class="btn__text">Add New</span></button>
        </div>
        <form 
            class="section__body panel"
            action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName()])}" 
            data-ajax-url="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName()])}"
            data-check-unsaved-changes
            method="post" 
            name="" 
            id="holidaysForm"
        >
            <input type="hidden" name="action" value="saveHolidays">
            <ul class="holiday-list" data-support-hours-holidays-list>
                {if $extension->getExtensionHolidays()|@count > 0}
                    {foreach $extension->getExtensionHolidays() as $holiday}
                        <li class="holiday-list__item" data-support-hours-holidays-list-item="{$holiday@index}">
                            <input type="hidden" name="holiday[id][]" value="{$holiday->id}" data-support-hours-holidays-list-item-id>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-b-0x" data-support-hours-translation-container>
                                        <input 
                                            class="form-control form-control--name" 
                                            value="{$holiday->name}" 
                                            data-support-hours-translation-input
                                            data-ajax-url="{$helper->url('Page@updateSeoTranslations',['templateName'=>$template->getMainName()])}"
                                            placeholder="Enter holiday name"
                                            lu-required
                                        >
                                        <input 
                                            type="hidden" name="holiday[name][]" 
                                            value="{$holiday->json}" 
                                            data-support-hours-translation-value
                                        >
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
                                        <span class="form-feedback is-hidden">{$lang.general.field_required}</span>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="times-container">
                                        <div class="time-col">
                                            <span class="time-select-container">
                                                <input type="date" class="form-control time-select" name="holiday[start][]" value="{$holiday->holidays_begin}"/>
                                            </span>
                                        </div>
                                        <div class="form-separator">
                                            -
                                        </div>
                                        <div class="time-col time-col--end">
                                            <span class="time-select-container">
                                                <input type="date" class="form-control time-select" name="holiday[end][]" value="{$holiday->holidays_end}"/>
                                            </span>
                                        </div>
                                        <div class="btn-col">
                                            <a 
                                                class="btn btn--icon btn--link btn--holiday" 
                                                href="#" 
                                                data-toggle="lu-modal" 
                                                data-target="#removeHolidayItem"
                                                data-support-hours-holidays-list-item-remove
                                            >
                                                <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="Delete holiday period"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    {/foreach}
                {/if}

                <li class="holiday-list__item" data-support-hours-holidays-list-item="{$extension->getExtensionHolidays()|@count}">
                    <input type="hidden" name="holiday[id][]" value="" data-support-hours-holidays-list-item-id>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group m-b-0x" data-support-hours-translation-container>
                                <input 
                                    class="form-control form-control--name" 
                                    value="" 
                                    data-support-hours-translation-input
                                    {if $extension->getExtensionHolidays()|@count == 0}
                                        lu-required
                                    {/if}
                                    data-ajax-url="{$helper->url('Page@updateSeoTranslations',['templateName'=>$template->getMainName()])}"
                                    placeholder="Enter holiday name"
                                >
                                <input 
                                    type="hidden" name="holiday[name][]" 
                                    value="" 
                                    data-support-hours-translation-value
                                >
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
                                <span class="form-feedback is-hidden">{$lang.general.field_required}</span>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="times-container times-container--base">
                                <div class="time-col">
                                    <span class="time-select-container">
                                        <input type="date" class="form-control time-select" name="holiday[start][]" value=""/>
                                    </span>
                                </div>
                                <div class="form-separator">
                                    -
                                </div>
                                <div class="time-col time-col--end">
                                    <span class="time-select-container">
                                        <input type="date" class="form-control time-select" name="holiday[end][]" value=""/>
                                    </span>
                                </div>
                                <div class="btn-col">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button 
                type="button" 
                data-changes-save="#holidaysForm" 
                data-form-validate="#holidaysForm"
                data-check-unsaved-changes 
                class="btn btn--primary m-r-2x"
            >
                <span class="btn__text">Save Changes</span>
            </button>
            <button 
                type="button" 
                data-support-hours-holidays-add="{$extension->getExtensionHolidays()|@count + 1}" 
                class="btn btn--secondary"
            >
                <i class="btn__icon lm lm-plus"></i>
                <span class="btn__text">Add New</span>
            </button>
        </form>
    </div>
{/block}

{block name="template-actions"}
{/block}

{block name="template-scripts"}
    <script type="text/javascript" src="{$helper->extensionAdminScript('supporthours', 'support-hours.js')}"></script>
{/block}


{block name="template-modals"}
    {* Unsaved Changes *}
    {include file="adminarea/includes/modals/unsaved-changes.tpl"}

    {* Save Confirmation *}
    {include file="adminarea/includes/modals/save-confirmation.tpl"}

    {* Remove Item *}
    {include file="adminarea/extensions/supporthours/includes/removeHolidayConfirm.tpl"}

    {* Translation Modal*}
    {include file="adminarea/extensions/supporthours/includes/name-translation-modal.tpl" type="holiday" label="Support Hours - Holiday Name Translation"}
{/block}
