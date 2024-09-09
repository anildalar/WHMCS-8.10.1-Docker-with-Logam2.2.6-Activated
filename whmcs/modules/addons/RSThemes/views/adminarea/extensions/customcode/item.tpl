{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/customcode/includes/breadcrumbs/breadcrumbs-item.tpl"}
{/block}

{block name="template-content"}
    <form 
        id="customCodeForm" 
        action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "save"])}" 
        data-ajax-url="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "save"])}"
        method="POST"
        data-check-unsaved-changes
    >
        <input value="{$extension->getItemData("id")}" class="form-control " type="hidden" name="id">
        <div class="block">
            <div class="block__body">
                <div class="section">
                    <h3 class="section__title">
                        Editor
                        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['editor']}
                    </h3>
                    <div class="widget panel widget--editor">
                        <div class="widget__body">
                            <div class="widget__content p-0x" style="position: relative; min-height: 300px;">
                                <input class="editor-value" type="hidden" value="{{$extension->getItemData("value")}}" name="value">
                                <div id="editor">{$extension->getItemData("value")}</div>
                            </div>
                        </div>
                    </div>
                    {if !empty($extension->getItemData("id"))}
                        <p><span class="text-faded">Last Modification: </span><b>{$extension->getItemData("edited")}</b></p>
                    {/if}
                </div>
            </div>
            <div class="block__sidebar block__sidebar--md">
                <div class="section">
                    <h3 class="section__title">Instance Settings
                        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['instance_settings']}
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
                                    <div class="form-group">
                                        <label class="form-label">
                                            Name
                                            {if $extension->getTooltips()->item['general']['name']}
                                                {if isset($extension->getTooltips()->item['general']['name']['url']) && $extension->getTooltips()->item['general']['name']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['general']['name']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['general']['name']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" value="{$extension->getItemData("name")}" lu-required>
                                            <span class="form-feedback is-hidden">{$lang.general.field_required}</span>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x" style="flex-grow: 1">
                                            Activate Instance
                                            {if $extension->getTooltips()->item['general']['activate_instance']}
                                                {if isset($extension->getTooltips()->item['general']['activate_instance']['url']) && $extension->getTooltips()->item['general']['activate_instance']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['general']['activate_instance']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['general']['activate_instance']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </span>
                                        <label>
                                            <div class="switch switch--primary">
                                                <input class="switch__checkbox" name="enabled" value="{$extension->getItemData("enabled")}" type="checkbox" {if $extension->getItemData("enabled")}checked{/if}>
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
                                        <label class="form-label">
                                            Code Location
                                            {if $extension->getTooltips()->item['display']['code_location']}
                                                {if isset($extension->getTooltips()->item['display']['code_location']['url']) && $extension->getTooltips()->item['display']['code_location']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['display']['code_location']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['display']['code_location']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </label>
                                        <select class="form-control code-location-select" name="location" data-custom-code-location-select>
                                            <option {if $extension->getItemData("location") == "ClientAreaHeaderOutput"}selected{/if}>ClientAreaHeaderOutput</option>
                                            <option {if $extension->getItemData("location") == "ClientAreaHeadOutput"}selected{/if}>ClientAreaHeadOutput</option>
                                            <option {if $extension->getItemData("location") == "ClientAreaFooterOutput"}selected{/if}>ClientAreaFooterOutput</option>
                                            <option {if $extension->getItemData("location") == "ClientAreaProductDetailsOutput"}selected{/if}>ClientAreaProductDetailsOutput</option>
                                            <option {if $extension->getItemData("location") == "ShoppingCartCheckoutOutput"}selected{/if}>ShoppingCartCheckoutOutput</option>
                                            <option {if $extension->getItemData("location") == "ShoppingCartConfigureProductAddonsOutput"}selected{/if}>ShoppingCartConfigureProductAddonsOutput</option>
                                            <option {if $extension->getItemData("location") == "ClientAreaDomainDetailsOutput"}selected{/if}>ClientAreaDomainDetailsOutput</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-b-0x">
                                        <label class="form-label">
                                            Customer Status
                                            {if $extension->getTooltips()->item['display']['customer_status']}
                                                {if isset($extension->getTooltips()->item['display']['customer_status']['url']) && $extension->getTooltips()->item['display']['customer_status']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['display']['customer_status']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['display']['customer_status']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </label>
                                        <select class="form-control" name="client">
                                            <option {if $extension->getItemData("client") == "all"}selected{/if} value="all">All</option>
                                            <option {if $extension->getItemData("client") == "loggedin"}selected{/if} value="loggedin">Logged In</option>
                                            <option {if $extension->getItemData("client") == "loggedout"}selected{/if} value="loggedout">Logged Out</option>
                                        </select>
                                    </div>
                                    <div data-custom-code-location-specified-page-container id="specificPageField" class="form-group m-t-2x {if $extension->getItemData("location") == "ClientAreaHeaderOutput" || $extension->getItemData("location") == "ClientAreaHeadOutput" || $extension->getItemData("location") == "ClientAreaFooterOutput" || $extension->getItemData("location") == ""}{else}is-hidden{/if}">
                                        <label class="form-label">
                                            Display on specific pages
                                            {if $extension->getTooltips()->item['display']['display_on_page']}
                                                {if isset($extension->getTooltips()->item['display']['display_on_page']['url']) && $extension->getTooltips()->item['display']['display_on_page']['url'] != ""}
                                                    {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['display']['display_on_page']['url']}' target='_blank'>Learn More</a>"}
                                                {else}
                                                    {assign var="popoverFooter" value=false}
                                                {/if}
                                                {include 
                                                    file="adminarea/includes/helpers/popover.tpl" 
                                                    popoverClasses="notification__popover popover__top"
                                                    popoverBody="{$extension->getTooltips()->item['display']['display_on_page']['content']}"
                                                    popoverFooter="{$popoverFooter}"
                                                }
                                            {/if}
                                        </label>
                                        <select data-custom-code-location-specified-page class="form-control multiselect form-control--basic specific-page-select" name="pages[]" multiple>
                                            <option value="AllPages" {if is_array(json_decode($extension->getItemData("pages"))) && in_array("AllPages", json_decode($extension->getItemData("pages")))} selected{/if} {if empty($extension->getItemData("id"))}selected{/if}>All</option>
                                            {foreach $extension->getVisiblePages() as $page}
                                                <option value="{$page['name']}" {if is_array(json_decode($extension->getItemData("pages"))) && in_array($page['name'], json_decode($extension->getItemData("pages")))} selected{/if}>{$page['label']}</option>
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
    <script type="text/javascript" src="{$helper->extensionAdminScript('customcode', 'ace.min.js')}"></script>
    <script type="text/javascript" src="{$helper->extensionAdminScript('customcode', 'ace.textmate.min.js')}"></script>
    <script>
        ace.config.set('basePath', "{$helper->extensionAdminScript('customcode','')}");
        var editor = ace.edit("editor");

        editor.setTheme("ace/theme/textmate");
        editor.session.setMode("ace/mode/php");
        editor.session.on('change', (e) => {
            document.querySelector('.editor-value').value = editor.getValue()
        });
    </script>
    <script type="text/javascript" src="{$helper->extensionAdminScript('customcode', 'custom-code.js')}"></script>
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
                        data-changes-save="#customCodeForm"
                        data-form-validate="#customCodeForm"
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
    {include file="adminarea/extensions/customcode/includes/modal/remove-item.tpl" item=$extension->getItemData("id")}
    {include file="adminarea/includes/modals/save-confirmation.tpl"}
    {include file="adminarea/includes/modals/unsaved-changes.tpl"}
{/block}