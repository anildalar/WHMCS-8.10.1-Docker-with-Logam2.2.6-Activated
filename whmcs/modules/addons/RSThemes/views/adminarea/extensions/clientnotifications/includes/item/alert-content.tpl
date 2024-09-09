{**************************** 

Client Notifications - Item - Notification Content
1. Language
2. Title
3. Message
3. Buttons

*****************************}
<div class="section" data-client-alerts-content>
    <h3 class="section__title">
        Notification Content
        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['notification_content']}
    </h3>
    <div class="section__body">
        {* 1. Language *}
        <div class="form-group form-group--language">
            <label for="sectionLanguage" class="form-label">Choose Language To Edit</label>
            <select class="form-control" id="alertLanguage" name="language" data-content-language>
                {foreach $extension->getLanguages() as $whmcsLanguage}
                    <option value="{$whmcsLanguage}" {if $whmcsLanguage == $extension->getCurrentLanguage()}selected{/if}>{ucfirst($whmcsLanguage)}</option>
                {/foreach}
            </select>
        </div>
        <div class="widget panel of-visible">
            <div class="widget__body">
                <div class="widget__content">
                    <div class="section__body">

                        {* 2. Title *}
                        <div class="form-group" data-alert-inputs-container>
                            <label for="section-settings" class="form-label">Title</label>
                            <div id="section-settings" class="titleField">
                                <div class="row">
                                    <div class="col-12">
                                        <input class="form-control" placeholder="Enter alert title" data-alert-input value="{$extension->getItemData("alertContentTitleDefault")}">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="jsonAlertTitleData" name="alertTitle" data-alert-json value='{htmlentities(json_encode($extension->getItemData("alertContentTitle")))}'>
                        </div>

                        {* 3. Message *}
                        <div class="form-group" data-alert-inputs-container>
                            <label for="section-settings" class="form-label">Message</label>
                            <div id="section-settings" class="languageFields">
                                <div class="row m-t-2x">
                                    <div class="col-12">
                                        <textarea class="form-control" data-html-editor name="" data-alert-input >{$extension->getItemData("alertContentTextDefault")}</textarea>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="jsonAlertContentData" name="alertContent" data-alert-json value='{htmlentities(json_encode($extension->getItemData("alertContentText")))}'>
                        </div>

                        {assign var="assetsPath" value="adminarea/../../../../../templates/{$themeName}/assets"}
                        
                        <div class="form-group">
                            <label class="form-label">
                                Icon
                                {if isset($extension->getTooltips()->item['content']['icon']['url']) && $extension->getTooltips()->item['content']['icon']['url'] != ""}
                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['content']['icon']['url']}' target='_blank'>Learn More</a>"}
                                {else}
                                    {assign var="popoverFooter" value=false}
                                {/if}
                                {include 
                                    file="adminarea/includes/helpers/popover.tpl" 
                                    popoverClasses="notification__popover"
                                    popoverBody="{$extension->getTooltips()->item['content']['icon']['content']}"
                                    popoverFooter="{$popoverFooter}"
                                }
                            </label>
                            <div 
                                class="media media--xs media--ah media--field m-t-0x" 
                                data-icon-container                               
                                data-assets-url="{$whmcsURL}/templates/{$themeName}/assets"
                            >
                                <a 
                                    class="media__upload {if $extension->getItemData("alertIcon") || $extension->getItemData("alertPredefinedIcon") || $extension->getItemData("alertPredefinedIllustration") || $extension->getItemData("alertImage")}is-hidden{/if}"
                                    data-toggle="lu-modal"
                                    data-target="#clientNotificationIconModal"
                                    data-icon-button
                                    data-icon-new
                                    href="#"
                                >
                                    <div class="media__upload-content">
                                        <span class="media__title">No graphic assigned</span>
                                        <span class="btn btn--sm btn--link">
                                            <span class="btn__icon">
                                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_6693_2419)">
                                                        <path d="M12.35 7.64999L9.85004 5.14999C9.80515 5.10216 9.75093 5.06404 9.69073 5.03798C9.63053 5.01192 9.56563 4.99847 9.50004 4.99847C9.43444 4.99847 9.36954 5.01192 9.30934 5.03798C9.24914 5.06404 9.19493 5.10216 9.15003 5.14999L5.50003 8.78999L3.85003 7.14999C3.80514 7.10216 3.75093 7.06404 3.69073 7.03798C3.63053 7.01192 3.56563 6.99847 3.50003 6.99847C3.43444 6.99847 3.36954 7.01192 3.30934 7.03798C3.24914 7.06404 3.19493 7.10216 3.15003 7.14999L0.650035 9.64999C0.601998 9.69464 0.563835 9.74884 0.538002 9.80912C0.512168 9.8694 0.499236 9.93442 0.500035 9.99999V11.5C0.500035 11.6326 0.552713 11.7598 0.646482 11.8535C0.74025 11.9473 0.867427 12 1.00003 12H12C12.1326 12 12.2598 11.9473 12.3536 11.8535C12.4474 11.7598 12.5 11.6326 12.5 11.5V7.99999C12.5008 7.93442 12.4879 7.8694 12.4621 7.80912C12.4362 7.74884 12.3981 7.69464 12.35 7.64999Z" fill="#1062FE"></path>
                                                        <path d="M4.5 4C5.60457 4 6.5 3.10457 6.5 2C6.5 0.89543 5.60457 0 4.5 0C3.39543 0 2.5 0.89543 2.5 2C2.5 3.10457 3.39543 4 4.5 4Z" fill="#1062FE"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_6693_2419">
                                                        <rect width="12" height="12" fill="white" transform="translate(0.5)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="btn__text">Assign graphic</span>
                                        </span>
                                    </div>
                                </a>
                                <div 
                                    class="media__content{if !$extension->getItemData("alertIcon") && !$extension->getItemData("alertPredefinedIcon") && !$extension->getItemData("alertPredefinedIllustration") && !$extension->getItemData("alertImage")} is-hidden{/if}"
                                    data-icon-content
                                >
                                    <div class="media__body">
                                        <i class="{if $extension->getItemData("alertIcon")}{$extension->getItemData("alertIcon")}{else}is-hidden{/if} " data-icon></i>
                                        <div class="media__predefined-icon {if !$extension->getItemData("alertPredefinedIcon") && !$extension->getItemData("alertPredefinedIllustration") && !$extension->getItemData("alertImage")}is-hidden{/if} {if $extension->getItemData("alertPredefinedIllustration")}is-illustration{/if}" data-predefined-icon>
                                            {if $extension->getItemData("alertPredefinedIcon") && file_exists("{$whmcsDir}/templates/{$themeName}/assets/svg-icon/{$extension->getItemData("alertPredefinedIcon")}")}
                                                {include file="{$assetsPath}/svg-icon/{$extension->getItemData("alertPredefinedIcon")}"}
                                            {elseif $extension->getItemData("alertPredefinedIllustration") && file_exists("{$whmcsDir}/templates/{$themeName}/assets/svg-illustrations/{$extension->getItemData("alertPredefinedIllustration")}")}
                                                {include file="{$assetsPath}/svg-illustrations/{$extension->getItemData("alertPredefinedIllustration")}"}  
                                            {elseif $extension->getItemData("alertImage")}
                                                <img src="{$whmcsURL}/templates/{$themeName}/assets/img/page-manager/{$extension->getItemData("alertImage")}" alt="{$extension->getItemData("alertImage")}"/>    
                                            {/if}
                                        </div>
                                       
                                        <input type="hidden" name="alertIcon" value="{if $extension->getItemData("alertIcon")}{$extension->getItemData("alertIcon")}{/if}" data-icon-value>
                                        <input type="hidden" name="alertPredefinedIcon" value="{if $extension->getItemData("alertPredefinedIcon")}{$extension->getItemData("alertPredefinedIcon")}{/if}" data-predefined-icon-value>
                                        <input type="hidden" name="alertPredefinedIllustration" value="{if $extension->getItemData("alertPredefinedIllustration")}{$extension->getItemData("alertPredefinedIllustration")}{/if}" data-predefined-illustration-value>
                                        <input type="hidden" name="alertImage" value="{if $extension->getItemData("alertImage")}{$extension->getItemData("alertImage")}{/if}" data-image-value>
                                    </div>
                                    <div class="media__footer">
                                        {if $extension->getItemData("alertIcon")}
                                            {assign var="iconName" value="/"|explode:$extension->getItemData("alertIcon")}
                                        {elseif $extension->getItemData("alertPredefinedIcon")}
                                            {assign var="iconName" value="/"|explode:$extension->getItemData("alertPredefinedIcon")}    
                                        {elseif $extension->getItemData("alertPredefinedIllustration")}
                                            {assign var="iconName" value="/"|explode:$extension->getItemData("alertPredefinedIllustration")}
                                        {elseif $extension->getItemData("alertImage")}
                                            {assign var="iconName" value="/"|explode:$extension->getItemData("alertImage")}
                                        {/if}    
                                        <span class="media__name" data-icon-name >{if $iconName && is_array($iconName)}{$iconName|@end}{/if}</span>
                                        <span 
                                            class="btn btn--icon btn--link btn--xs"
                                            data-toggle="lu-modal"
                                            data-target="#clientNotificationIconModal"
                                            data-icon-button
                                        >
                                            <i 
                                                class="btn__icon lm lm-pen"
                                                data-toggle="lu-tooltip"
                                                data-title="{$lang.general.edit}"
                                            ></i>
                                        </span>
                                        <a 
                                            class="btn btn--icon btn--link btn--xs" 
                                            data-toggle="lu-modal"
                                            data-target="#clientNotificationIconDeleteModal"
                                            data-icon-remove
                                        >
                                            <i 
                                                class="btn__icon lm lm-trash"
                                                data-toggle="lu-tooltip"
                                                data-title="{$lang.general.remove}"
                                            ></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        {* 4. Buttons *}
                        <div class="form-group" data-alert-list-container>
                            <label class="form-label">
                                Buttons
                                <a href="#addNewButtonItemModal" class="btn btn--link btn--success m-l-a p-r-0x {if empty($extension->getItemData("alertContentButtons"))}is-hidden{/if}"
                                   data-add-new-item="button"
                                   data-list-name="buttons"
                                   data-new-index=""
                                   data-new-position="{if is_array($extension->getItemData("alertContentButtons"))}{$extension->getItemData("alertContentButtons")|@count + 1}{else}1{/if}"
                                   data-section="buttons"
                                   data-toggle="lu-modal"
                                   data-backdrop="static"
                                   data-keyboard="false"
                                >
                                    <i class="btn__icon ls ls-plus"></i>
                                    <span class="btn__text">
                                        Add New
                                    </span>
                                </a>
                            </label>
                            {include file='adminarea/extensions/clientnotifications/includes/item/sortable-list.tpl'
                            items=$extension->getItemData("alertContentButtons")
                            btnAddAction='addNewButtonItemModal'
                            btnEditAction='editButtonItemModal'
                            listType='button'
                            }
                            <input type="hidden" data-section="buttons" data-list="buttons"
                                   name="alertButton" value=''>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>