{**************************** 

Client Notifications - Display Rules
1. Page Filter
    1.1. Page Categories
    1.2. Selected Pages
        1.2.1. Custom URL Configuration
    1.3. Excluded Pages    
2. Client Filter
    2.1. Client Status
    2.2. Clients
    2.3. Group
    2.4. Client Country
    2.5. Client Days since registration
3. Services Filter
    3.1. Services
    3.2. Status
    3.3. Servers List
    3.4. Servers groups
    3.5. Billing Cycle
    3.6. Registration Date
    3.7. Next Due Date
    3.8. Days Until Due Date
    3.9. Days After Due Date
4. Configurable Options Filter    
5. Domains Filter
    5.1. TLDs
    5.2. Status
    5.3. Registrar
    5.4. Billing Cycle
    5.5. Registration Date
    5.6. Days Since Activation
    5.7. Expiry Date
    5.8. Days Until Due Date
    5.9. Days After Due Date

*****************************}

<div class="section" data-client-alerts-rules>
    <div class="section__header section__header--counter">
        <h3 class="section__title">
            Display Rules
            {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['display_rules']}
        </h3>
        {* TODO: Wyświetlić tylko dla wcześniej utworzonego elementu + dodać zmienną *}
        {* <div class="affected-info">
            <span class="affected-text">Affected Clients: </span>
            <span class="affected-count">
                {include file="adminarea/includes/helpers/tooltip.tpl" tooltip='Add text in tooltip.php'}
                259
            </span>
        </div> *}
    </div>
    <div class="section__body">

        {* 1. Page Filter *}
        <div class="panel panel--collapse">
            <div class="collapse-toggle">
                <div class="top__title top__title--widget">
                    Page Filters
                    {if isset($extension->getTooltips()->item['page_filters']['main']['url']) && $extension->getTooltips()->item['page_filters']['main']['url'] != ""}
                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['page_filters']['main']['url']}' target='_blank'>Learn More</a>"}
                    {else}
                        {assign var="popoverFooter" value=false}
                    {/if}
                    {include 
                        file="adminarea/includes/helpers/popover.tpl" 
                        popoverClasses="notification__popover"
                        popoverBody="{$extension->getTooltips()->item['page_filters']['main']['content']}"
                        popoverFooter="{$popoverFooter}"
                    }  
                </div>
                <label>
                    <div class="switch switch--primary" data-toggle="lu-collapse" data-target="#pageFilters" aria-expanded="true">
                        <input class="switch__checkbox" name="page[enabled]" value="1" type="checkbox" {if $extension->getItemData("page_filter_enabled")}checked{/if}>
                        <span class="switch__container"><span class="switch__handle"></span></span>
                    </div>
                </label>
            </div>
            {* TODO: Podpiąć display dla pól gdy zmienna z backendu będzie przekazywana *}
            <div class="collapse {if $extension->getItemData("page_filter_enabled")}show{/if}" id="pageFilters" data-page-filter>
                <div class="form-group form-group--parent m-b-0x p-3x">
                    <div class="d-flex flex-column accordion" id="pageFiltersAccordion">

                        {* 1.1. Page Categories *}
                        <div class="form-check">
                            <label class="m-b-0x collapse-label {if $extension->getItemData("page_filters")->filter_type != "selectedCategories" && $extension->getItemData("page_filters")->filter_type}collapsed{/if}" data-name="page_categories" data-toggle="lu-collapse" data-target="#pageCategories" aria-expanded="true" aria-controls="pageCategories">
                                <input class="radio-accordion form-radio" type="radio" name="page[filters][filter_type]" value="selectedCategories" data-page-filter-radio="categories" {if $extension->getItemData("page_filters")->filter_type == "selectedCategories" || !$extension->getItemData("page_filters")->filter_type} checked {/if}>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Page Categories</span>
                            </label>
                        </div>

                        <div id="pageCategories" class="form-group accordion-select p-0x p-l-3x collapse {if $extension->getItemData("page_filters")->filter_type == "selectedCategories" || !$extension->getItemData("page_filters")->filter_type} show {/if}" data-group="page_categories" data-parent="#pageFiltersAccordion">
                            <select class="form-control multiselect form-control--basic" name="page[filters][categories][]" multiple data-selectize-all data-page-filter-select="categories">
                                {foreach $extension->getPages()->categories as $index => $category}
                                    <option value="all" {if !isset($extension->getItemData("page_filters")->categories) || !is_array($extension->getItemData("page_filters")->categories) || count($extension->getItemData("page_filters")->categories) == 0 || in_array('all',$extension->getItemData("page_filters")->categories)}selected{/if}>All</option>
                                    <option value="{$index}" {if is_array($extension->getItemData("page_filters")->categories) && in_array($index,$extension->getItemData("page_filters")->categories)} selected {/if}>{$category}</option>
                                {/foreach}
                            </select>
                        </div>

                        {* 1.2. Selected Pages *}
                        <div class="form-check m-t-2x">
                            <label class="m-b-0x collapse-label {if $extension->getItemData("page_filters")->filter_type != "selectedPages"}collapsed {/if}" data-name="select_pages" data-toggle="lu-collapse" data-target="#selectedPages" aria-expanded="true" aria-controls="selectedPages" >
                                <input class="radio-accordion form-radio" type="radio" name="page[filters][filter_type]" value="selectedPages" data-page-filter-radio="pages" {if $extension->getItemData("page_filters")->filter_type == "selectedPages"} checked {/if}>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Selected Pages</span>
                            </label>
                        </div>
                        <div id="selectedPages" class="form-group accordion-select p-0x p-l-3x collapse {if $extension->getItemData("page_filters")->filter_type == "selectedPages"} show {/if}" data-group="select_pages" data-parent="#pageFiltersAccordion">
                            <select class="form-control multiselect form-control--basic" name="page[filters][pages][]" multiple data-selectize-all data-page-filter-select="pages" data-selectize-custom-url>
                                <option value="all" {if !isset($extension->getItemData("page_filters")->pages) || !is_array($extension->getItemData("page_filters")->pages) || count($extension->getItemData("page_filters")->pages) == 0 || in_array('all',$extension->getItemData("page_filters")->pages)}selected{/if}>All</option>
                                <option value="custom_url" {if is_array($extension->getItemData("page_filters")->pages) && in_array('custom_url',$extension->getItemData("page_filters")->pages)}selected{/if}>Custom URL</option>
                                <option value="divider" disabled="disabled">-</option>
                                {foreach $extension->getPages()->pages as $page}
                                    <option value="{$page['name']}" {if is_array($extension->getItemData("page_filters")->pages) && in_array($page['name'],$extension->getItemData("page_filters")->pages)} selected {/if}>{$page['label']}</option>
                                {/foreach}
                                {*{foreach $extension->getTicketDepartments() as $index=>$name}
                                    <option value="ticket_department_{$index}" {if is_array($extension->getItemData("page_filters")->pages) && in_array("ticket_department_$index",$extension->getItemData("page_filters")->pages)} selected {/if}>Ticket Department - {$name}</option>
                                {/foreach}*}
                            </select>
                            {* 1.2.1 Custom URL Configuration *}
                            <div class="module-notification {if is_array($extension->getItemData("page_filters")->pages) && in_array('custom_url',$extension->getItemData("page_filters")->pages)}{else}is-hidden{/if}" data-custom-url-container data-remove-lang="{$lang.general.remove}">
                                <label class="form-label m-t-2x">
                                    Custom URL Configuration
                                    {if isset($extension->getTooltips()->item['page_filters']['custom_url']['url']) && $extension->getTooltips()->item['page_filters']['custom_url']['url'] != ""}
                                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['page_filters']['custom_url']['url']}' target='_blank'>Learn More</a>"}
                                    {else}
                                        {assign var="popoverFooter" value=false}
                                    {/if}
                                    {include 
                                        file="adminarea/includes/helpers/popover.tpl" 
                                        popoverClasses="notification__popover"
                                        popoverBody="{$extension->getTooltips()->item['page_filters']['custom_url']['content']}"
                                        popoverFooter="{$popoverFooter}"
                                    }  
                                </label>
                                <div class="well module-notification-container">
                                    <label class="form-label">Page URL / Keyword</label>
                                    <div class="module-notification-list" data-custom-url-list>
                                        {if is_array($extension->getItemData("page_filters")->pages) && in_array('custom_url',$extension->getItemData("page_filters")->pages)}
                                            {foreach $extension->getItemData("page_filters")->custom_url->type as $index=>$type}
                                                <div class="module-notification-item" data-custom-url-item data-index="{$index + 1}">
                                                    <div class="module-notification-type">
                                                        <select class="form-control selectized" name="page[filters][custom_url][type][]">
                                                            <option value="contains" {if $type=="contains"}selected="selected"{/if}>Contains</option>
                                                            <option value="is_exactly" {if $type=="is_exactly"}selected="selected"{/if}>Is Exactly</option>
                                                        </select>
                                                    </div>
                                                    <div class="module-notification-url">
                                                        <input type="text" class="form-control" name="page[filters][custom_url][url][]" value="{$extension->getItemData("page_filters")->custom_url->url[$index]}">
                                                    </div>
                                                    <div class="module-notification-remove">
                                                        <button
                                                            type="button"
                                                            class="btn btn--icon btn--link btn--sm"
                                                            href="#modal-delete-url"
                                                            data-toggle="lu-modal"
                                                            data-backdrop="static"
                                                            data-keyboard="false"
                                                            data-custom-url-remove
                                                            data-index="{$index + 1}"
                                                            >
                                                                <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="{$lang.general.remove}"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            {/foreach}
                                        {else}
                                            <div class="module-notification-item" data-custom-url-item data-index="1">
                                                <div class="module-notification-type">
                                                    <select class="form-control selectized" name="page[filters][custom_url][type][]">
                                                        <option value="contains" selected="selected">Contains</option>
                                                        <option value="is_exactly">Is Exactly</option>
                                                    </select>
                                                </div>
                                                <div class="module-notification-url">
                                                    <input type="text" class="form-control" name="page[filters][custom_url][url][]" value="">
                                                </div>
                                                <div class="module-notification-remove">
                                                    <button
                                                            type="button"
                                                            class="btn btn--icon btn--link btn--sm"
                                                            href="#modal-delete-url"
                                                            data-toggle="lu-modal"
                                                            data-backdrop="static"
                                                            data-keyboard="false"
                                                            data-custom-url-remove
                                                            data-index="1"
                                                    >
                                                        <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="{$lang.general.remove}"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        {/if}
                                    </div>
                                    <div class="module-notification-add msg msg--simple msg--bordered m-t-2x">
                                        <a class="msg__body" href="#" data-custom-url-add="custom_url">
                                            <div class="msg__actions m-t-0x">
                                                <span class="btn btn--sm btn--link">
                                                    <i class="btn__icon ls ls-plus"></i>
                                                    <span class="btn__text">Add More</span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {* 1.3. Excluded Pages *}
                        <div class="form-check m-t-2x">
                            <label class="m-b-0x collapse-label {if $extension->getItemData("page_filters")->filter_type != "excludedPages"}collapsed{/if}" data-name="excluded_pages" data-toggle="lu-collapse" data-target="#excludedPages" aria-expanded="true" aria-controls="excludedPages">
                                <input class="radio-accordion form-radio" type="radio" name="page[filters][filter_type]" value="excludedPages" data-page-filter-radio="excluded" {if $extension->getItemData("page_filters")->filter_type == "excludedPages"} checked {/if}>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Excluded Pages</span>
                            </label>
                        </div>
                        <div id="excludedPages" class="form-group accordion-select p-0x p-l-3x collapse {if $extension->getItemData("page_filters")->filter_type == "excludedPages"} show {/if}" data-group="excluded_pages" data-parent="#pageFiltersAccordion">
                            <select class="form-control multiselect form-control--basic" name="page[filters][excluded_pages][]" multiple data-page-filter-select="excluded" data-selectize-custom-url>
                                <option value="custom_url" {if is_array($extension->getItemData("page_filters")->excluded_pages) && in_array('custom_url',$extension->getItemData("page_filters")->excluded_pages)}selected{/if}>Custom URL</option>
                                <option value="divider" disabled="disabled">-</option>
                                <option value="" {if !isset($extension->getItemData("page_filters")->excluded_pages) || !is_array($extension->getItemData("page_filters")->excluded_pages) || count($extension->getItemData("page_filters")->excluded_pages) == 0 || in_array('',$extension->getItemData("page_filters")->excluded_pages)}selected{/if}></option>
                                {foreach $extension->getPages()->pages as $page}
                                    <option value="{$page['name']}" {if is_array($extension->getItemData("page_filters")->excluded_pages) && in_array($page['name'],$extension->getItemData("page_filters")->excluded_pages)} selected {/if}>{$page['label']}</option>
                                {/foreach}
                                {foreach $extension->getTicketDepartments() as $index=>$name}
                                    <option value="ticket_department_{$index}" {if is_array($extension->getItemData("page_filters")->excluded_pages) && in_array("ticket_department_$index",$extension->getItemData("page_filters")->excluded_pages)} selected {/if}>Ticket Department - {$name}</option>
                                {/foreach}
                            </select>
                            {* 1.2.1 Custom URL Configuration *}
                            <div class="module-notification {if is_array($extension->getItemData("page_filters")->excluded_pages) && in_array('custom_url',$extension->getItemData("page_filters")->excluded_pages)}{else}is-hidden{/if}" data-custom-url-container data-remove-lang="{$lang.general.remove}">
                                <label class="form-label m-t-2x">Custom URL Configuration{include file="adminarea/includes/helpers/tooltip.tpl" tooltip=$extension->getTooltips()->item['module_notification']['custom_url_configuration']}</label>
                                <div class="well module-notification-container">
                                    <label class="form-label">Page URL / Keyword</label>
                                    <div class="module-notification-list" data-custom-url-list>
                                        {if is_array($extension->getItemData("page_filters")->excluded_pages) && in_array('custom_url',$extension->getItemData("page_filters")->excluded_pages)}
                                            {foreach $extension->getItemData("page_filters")->excluded_custom_url->type as $index=>$type}
                                                <div class="module-notification-item" data-custom-url-item data-index="{$index + 1}">
                                                    <div class="module-notification-type">
                                                        <select class="form-control selectized" name="page[filters][excluded_custom_url][type][]">
                                                            <option value="contains" {if $type=="contains"}selected="selected"{/if}>Contains</option>
                                                            <option value="is_exactly" {if $type=="is_exactly"}selected="selected"{/if}>Is Exactly</option>
                                                        </select>
                                                    </div>
                                                    <div class="module-notification-url">
                                                        <input type="text" class="form-control" name="page[filters][excluded_custom_url][url][]" value="{$extension->getItemData("page_filters")->excluded_custom_url->url[$index]}">
                                                    </div>
                                                    <div class="module-notification-remove">
                                                        <button
                                                            type="button"
                                                            class="btn btn--icon btn--link btn--sm"
                                                            href="#modal-delete-url"
                                                            data-toggle="lu-modal"
                                                            data-backdrop="static"
                                                            data-keyboard="false"
                                                            data-custom-url-remove
                                                            data-index="{$index + 1}"
                                                            >
                                                                <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="{$lang.general.remove}"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            {/foreach}
                                        {else}
                                            <div class="module-notification-item" data-custom-url-item data-index="1">
                                                <div class="module-notification-type">
                                                    <select class="form-control selectized" name="page[filters][excluded_custom_url][type][]">
                                                        <option value="contains" selected="selected">Contains</option>
                                                        <option value="is_exactly">Is Exactly</option>
                                                    </select>
                                                </div>
                                                <div class="module-notification-url">
                                                    <input type="text" class="form-control" name="page[filters][excluded_custom_url][url][]" value="">
                                                </div>
                                                <div class="module-notification-remove">
                                                    <button
                                                            type="button"
                                                            class="btn btn--icon btn--link btn--sm"
                                                            href="#modal-delete-url"
                                                            data-toggle="lu-modal"
                                                            data-backdrop="static"
                                                            data-keyboard="false"
                                                            data-custom-url-remove
                                                            data-index="1"
                                                    >
                                                        <i class="btn__icon lm lm-trash" data-toggle="lu-tooltip" data-title="{$lang.general.remove}"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        {/if}
                                    </div>
                                    <div class="module-notification-add msg msg--simple msg--bordered m-t-2x">
                                        <a class="msg__body" href="#" data-custom-url-add="excluded_custom_url">
                                            <div class="msg__actions m-t-0x">
                                                <span class="btn btn--sm btn--link">
                                                    <i class="btn__icon ls ls-plus"></i>
                                                    <span class="btn__text">Add More</span>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>

        {* 2. Client Filter *}
        <div class="panel panel--collapse">
            <div class="collapse-toggle">
                <div class="top__title top__title--widget">
                    Client Filters
                    {if isset($extension->getTooltips()->item['client_filter']['main']['url']) && $extension->getTooltips()->item['client_filter']['main']['url'] != ""}
                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['client_filter']['main']['url']}' target='_blank'>Learn More</a>"}
                    {else}
                        {assign var="popoverFooter" value=false}
                    {/if}
                    {include 
                        file="adminarea/includes/helpers/popover.tpl" 
                        popoverClasses="notification__popover"
                        popoverBody="{$extension->getTooltips()->item['client_filter']['main']['content']}"
                        popoverFooter="{$popoverFooter}"
                    }   
                </div>
                <label>
                    <div class="switch switch--primary" data-toggle="lu-collapse" data-target="#clientFilters" aria-expanded="true">
                        <input class="switch__checkbox" name="client[enabled]" value="1" type="checkbox" {if $extension->getItemData("client_filter_enabled")}checked{/if}>
                        <span class="switch__container"><span class="switch__handle"></span></span>
                    </div>
                </label>
            </div>
            <div class="collapse {if $extension->getItemData("client_filter_enabled")}show{/if}" id="clientFilters">
                {* 2.1. Client Status *}
                <div class="form-group form-group--row form-group--parent m-b-0x p-3x p-b-0x" data-client-status>
                    <label class="form-label">
                        Client Status
                    </label>
                    <select class="form-control multiselect form-control--basic" multiple name="client[filters][user][]" data-selectize-all data-client-status-list>
                         <option value="all" {if !is_array($extension->getItemData("client_filters")->user) || count($extension->getItemData("client_filters")->user) == 0 || in_array('all',$extension->getItemData("client_filters")->user)}selected{/if}>All</option>
                         <option value="loggedin" {if is_array($extension->getItemData("client_filters")->user) && in_array("loggedin",$extension->getItemData("client_filters")->user)} selected {/if}>Logged in Client</option>
                         <option value="loggedout" {if is_array($extension->getItemData("client_filters")->user)&& in_array("loggedout",$extension->getItemData("client_filters")->user)} selected {/if}>Logged out Client</option>
                    </select>
                </div>
                {* 2.2. Clients *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x has-loader" data-client-list>
                    <label class="form-label">
                        Client(s)
                    </label>                     
                    <select class="form-control multiselect form-control--basic" name="client[filters][client][]" multiple data-selectize-disable-search data-client-list-select data-ajax-url="{$whmcsURL}/{$adminPath}/index.php?rp=/{$adminPath}/search/client">
                        {foreach $extension->getSelectedItemData("client_filters","client") as $client}
                            <option value="{$client['id']}" selected>{$client['name']}({$client['email']})</option>
                        {/foreach}
                        <option value="all" {if !isset($extension->getItemData("client_filters")->client) || !is_array($extension->getItemData("client_filters")->client) || count($extension->getItemData("client_filters")->client) == 0 || in_array('all',$extension->getItemData("client_filters")->client)}selected{/if}>All</option>
                    </select>
                </div>
                {* 2.3. Group *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Group
                    </label>
                    <select class="form-control multiselect form-control--basic" name="client[filters][groups][]" multiple data-selectize-all>
                        <option value="all" {if !is_array($extension->getItemData("client_filters")->groups) || count($extension->getItemData("client_filters")->groups) == 0 || in_array('all',$extension->getItemData("client_filters")->groups)}selected{/if}>All</option>
                        {foreach $extension->getClientGroups() as $group}
                            <option value="{$group->id}" {if !isset($extension->getItemData("client_filters")->groups) || is_array($extension->getItemData("client_filters")->groups) && in_array($group->id,$extension->getItemData("client_filters")->groups)} selected {/if}>{$group->groupname}</option>
                        {/foreach}
                    </select>
                </div>
                {* 2.4. Client Country *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-b-0x p-t-0x has-loader" data-country-tld-list>
                    <label class="form-label">
                        Client Country
                    </label>
                    <select class="form-control multiselect form-control--basic font-control--all-options" name="client[filters][country][]" multiple data-selectize-disable-search data-country-tld-list-select data-ajax-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/adminApi.php?controller=ClientNotificationsExtension&templateName={$template->getMainName()}&method=getCountries">
                        <option value="all" {if !isset($extension->getItemData("client_filters")->country) || !is_array($extension->getItemData("client_filters")->country) || count($extension->getItemData("client_filters")->country) == 0 || in_array('all',$extension->getItemData("client_filters")->country)}selected{/if}>All</option>
                        {foreach $extension->getSelectedItemData("client_filters","country") as $key => $item}
                            <option value="{$key}" selected>{$item}</option>
                        {/foreach}
                    </select>
                </div>
                {* 2.5. Client Days since registration *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-t-0x ">
                    <label class="form-label">
                        Days Since Signup
                        {if isset($extension->getTooltips()->item['client_filter']['days_since_signup']['url']) && $extension->getTooltips()->item['client_filter']['days_since_signup']['url'] != ""}
                            {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['client_filter']['days_since_signup']['url']}' target='_blank'>Learn More</a>"}
                        {else}
                            {assign var="popoverFooter" value=false}
                        {/if}
                        {include 
                            file="adminarea/includes/helpers/popover.tpl" 
                            popoverClasses="notification__popover"
                            popoverBody="{$extension->getTooltips()->item['client_filter']['days_since_signup']['content']}"
                            popoverFooter="{$popoverFooter}"
                        }
                    </label>
                    <input class="form-control max-w-248" type="number" min="0" name="client[filters][dayssinceregister]" value="{$extension->getItemData("client_filters")->dayssinceregister}" placeholder="Leave empty to ignore "/>
                </div>
            </div> 
        </div>

        {* 3. Services Filter *}
        <div class="panel panel--collapse" data-products-filters>
            <div class="collapse-toggle">
                <div class="top__title top__title--widget">
                    Service Filters
                    {if isset($extension->getTooltips()->item['services_filter']['url']) && $extension->getTooltips()->item['services_filter']['url'] != ""}
                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['services_filter']['url']}' target='_blank'>Learn More</a>"}
                    {else}
                        {assign var="popoverFooter" value=false}
                    {/if}
                    {include 
                        file="adminarea/includes/helpers/popover.tpl" 
                        popoverClasses="notification__popover"
                        popoverBody="{$extension->getTooltips()->item['services_filter']['content']}"
                        popoverFooter="{$popoverFooter}"
                    }
                    <div class="top__title-loggedout">Filter not available for "Logged out clients"</div>
                </div>
                <label>
                    <div class="switch switch--primary" data-toggle="lu-collapse" data-target="#servicesFilters" aria-expanded="true">
                        <input class="switch__checkbox" name="service[enabled]" value="1" type="checkbox" {if $extension->getItemData("service_filter_enabled")}checked{/if}>
                        <span class="switch__container"><span class="switch__handle"></span></span>
                    </div>
                </label>
            </div>
            <div class="collapse {if $extension->getItemData("service_filter_enabled")}show{/if}" id="servicesFilters">
                {* 3.1. Services *}
                <div class="form-group form-group--row form-group--parent m-b-0x p-3x p-b-0x has-loader" data-services-list>
                    <label class="form-label">
                        Services(s)
                    </label>

                    <select class="form-control multiselect form-control--basic" name="service[filters][services][]" multiple data-selectize-disable-search data-services-list-select data-ajax-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/adminApi.php?controller=ClientNotificationsExtension&templateName={$template->getMainName()}&method=getProducts">
                        {* service_filters *}
                        {foreach $extension->getSelectedItemData("service_filters","services") as $key => $item}
                            <option value="{$key}" selected>{$item}</option>
                        {/foreach}
                        <option value="all" {if !isset($extension->getItemData("service_filters")->services) || !is_array($extension->getItemData("service_filters")->services) || count($extension->getItemData("service_filters")->services) == 0 || in_array('all',$extension->getItemData("service_filters")->services)}selected{/if}>All</option>
                    </select>
                </div>

                {* 3.2. Status *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-b-0x p-t-0x p-3x">
                    <label class="form-label">
                        Status
                    </label>
                    <select class="form-control multiselect form-control--basic" name="service[filters][status][]" multiple data-selectize-all>
                        <option value="all" {if !isset($extension->getItemData("service_filters")->status) || !is_array($extension->getItemData("service_filters")->status) || count($extension->getItemData("service_filters")->status) == 0 || in_array('all',$extension->getItemData("service_filters")->status)}selected{/if}>All</option>
                        {foreach $extension->getProductStatus() as $status}
                            <option value="{$status}" {if is_array($extension->getItemData("service_filters")->status) && in_array($status,$extension->getItemData("service_filters")->status)} selected {/if}>{$status}</option>
                        {/foreach}
                    </select>
                </div>

                {* 3.3. Servers List *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-b-0x p-t-0x p-3x" data-server-status>
                    <label class="form-label">
                        Servers List
                    </label>
                    <select class="form-control multiselect form-control--basic" multiple name="service[filters][server][]" data-selectize-all>
                        {foreach $extension->getServers() as $index => $server}
                            <option value="all" {if !isset($extension->getItemData("service_filters")->server) || !is_array($extension->getItemData("service_filters")->server) || count($extension->getItemData("service_filters")->server) == 0 || in_array('all',$extension->getItemData("service_filters")->server)}selected{/if}>All</option>
                            <option value="{$index}" {if is_array($extension->getItemData("service_filters")->server) && in_array($index,$extension->getItemData("service_filters")->server)} selected {/if}>{$server}</option>
                        {/foreach}
                    </select>
                </div>

                {* 3.4. Servers groups *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-b-0x p-t-0x p-3x">
                    <label class="form-label">
                        Server Group(s)
                    </label>
                    <select class="form-control multiselect form-control--basic" multiple name="service[filters][group][]" data-selectize-all>
                        {foreach $extension->getServerGroups() as $index => $server}
                            <option value="all" {if !isset($extension->getItemData("service_filters")->group) || !is_array($extension->getItemData("service_filters")->group) || count($extension->getItemData("service_filters")->group) == 0 || in_array('all',$extension->getItemData("service_filters")->group)}selected{/if}>All</option>
                            <option value="{$index}" {if is_array($extension->getItemData("service_filters")->group) && in_array($index,$extension->getItemData("service_filters")->group)} selected {/if}>{$server}</option>
                        {/foreach}
                    </select>
                </div>

                {* 3.5. Billing Cycle *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-b-0x p-t-0x p-3x">
                    <label class="form-label">
                        Billing Cycle
                    </label>
                    <select class="form-control multiselect form-control--basic" name="service[filters][billing][]" multiple data-selectize-all>
                        <option value="all" {if !isset($extension->getItemData("service_filters")->billing) || !is_array($extension->getItemData("service_filters")->billing) || count($extension->getItemData("service_filters")->billing) == 0 || in_array('all',$extension->getItemData("service_filters")->billing)}selected{/if}>All</option>
                        {foreach $extension->getProductBilling() as $status}
                            <option value="{$status}" {if is_array($extension->getItemData("service_filters")->billing) && in_array($status,$extension->getItemData("service_filters")->billing)} selected {/if}>{$status}</option>
                        {/foreach}
                    </select>
                </div>

                {* 3.6. Registration Date *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-b-0x p-t-0x p-3x form-display-hours">
                    <label class="form-label">
                        Registration Date
                    </label>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="service[filters][reg_date][start]" value="{$extension->getItemData("service_filters")->reg_date->start}"/>
                    </span>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="service[filters][reg_date][end]" value="{$extension->getItemData("service_filters")->reg_date->end}"/>
                    </span>
                </div>

                {* 3.7. Next Due Date *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-b-0x p-t-0x p-3x form-display-hours">
                    <label class="form-label">
                        Next due date
                    </label>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="service[filters][due_date][start]" value="{$extension->getItemData("service_filters")->due_date->start}"/>
                    </span>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="service[filters][due_date][end]" value="{$extension->getItemData("service_filters")->due_date->end}"/>
                    </span>
                </div>

                {* 3.8. Days Until Due Date *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-t-0x p-b-0x p-3x form-display-hours">
                    <label class="form-label">
                        Days until due date
                    </label>
                    <input class="form-control  due-days" type="number" min="0" name="service[filters][days_due][start]" value="{$extension->getItemData("service_filters")->days_due->start}" placeholder="Leave empty to ignore "/>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <input class="form-control due-days" type="number" min="0" name="service[filters][days_due][end]" value="{$extension->getItemData("service_filters")->days_due->end}" placeholder="Leave empty to ignore "/>
                </div>

                {* 3.9. Days After Due Date *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-t-0x p-3x form-display-hours">
                    <label class="form-label">
                        Days after due date
                    </label>
                    <input class="form-control  due-days" type="number" min="0" name="service[filters][days_after][start]" value="{$extension->getItemData("service_filters")->days_after->start}" placeholder="Leave empty to ignore "/>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <input class="form-control due-days" type="number" min="0" name="service[filters][days_after][end]" value="{$extension->getItemData("service_filters")->days_after->end}" placeholder="Leave empty to ignore "/>
                </div>
            </div> 
        </div>

        {* 4. Configurable Options Filter *}
        <div data-configurable-options data-ajax-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/adminApi.php?controller=ClientNotificationsExtension&templateName={$template->getMainName()}&method=getConfigOptions">
            {foreach $extension->getItemData("service_filters")->services as $pid}
                {if $extension->getProductData($pid)->group && $extension->getProductData($pid)->options}
                    {include file="adminarea/extensions/clientnotifications/includes/item/configoptions.tpl" product=$extension->getProductData($pid)}
                {/if}
            {/foreach} 
        </div>
        
        {* 5. Domains Filter *}
        <div class="panel panel--collapse" data-products-filters>
            <div class="collapse-toggle">
                <div class="top__title top__title--widget">
                    Domains Filters
                    {if isset($extension->getTooltips()->item['domains_filter']['url']) && $extension->getTooltips()->item['domains_filter']['url'] != ""}
                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$extension->getTooltips()->item['domains_filter']['url']}' target='_blank'>Learn More</a>"}
                    {else}
                        {assign var="popoverFooter" value=false}
                    {/if}
                    {include 
                        file="adminarea/includes/helpers/popover.tpl" 
                        popoverClasses="notification__popover"
                        popoverBody="{$extension->getTooltips()->item['domains_filter']['content']}"
                        popoverFooter="{$popoverFooter}"
                    } 
                    <div class="top__title-loggedout">Filter not available for "Logged out clients"</div>
                </div>
                <label>
                    <div class="switch switch--primary" data-toggle="lu-collapse" data-target="#domainsFilters" aria-expanded="true">
                        <input class="switch__checkbox" name="domain[enabled]" value="1" type="checkbox" {if $extension->getItemData("domain_filter_enabled")}checked{/if}>
                        <span class="switch__container"><span class="switch__handle"></span></span>
                    </div>
                </label>
            </div>
            <div class="collapse {if $extension->getItemData("domain_filter_enabled")}show{/if}" id="domainsFilters">

                {* 5.1. TLDs *}
                <div class="form-group form-group--row form-group--parent m-b-0x p-3x p-b-0x has-loader" data-country-tld-list>
                    <label class="form-label">
                        TLD(s)
                    </label>
                    <select class="form-control multiselect form-control--basic font-control--all-options" name="domain[filters][tld][]" multiple data-selectize-disable-search data-country-tld-list-select data-ajax-url="{$whmcsURL}/modules/addons/RSThemes/src/Api/adminApi.php?controller=ClientNotificationsExtension&templateName={$template->getMainName()}&method=getTlds">
                        {foreach $extension->getSelectedItemData("domain_filters","tld") as $item}
                            <option value="{$item}" selected>{$item}</option>
                        {/foreach}
                        <option value="all" {if !isset($extension->getItemData("domain_filters")->tld) || !is_array($extension->getItemData("domain_filters")->tld) || count($extension->getItemData("domain_filters")->tld) == 0 || in_array('all',$extension->getItemData("domain_filters")->tld)}selected{/if}>All</option>
                    </select>
                </div>

                {* 5.2. Status *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Status
                    </label>
                    <select class="form-control multiselect form-control--basic" name="domain[filters][status][]" multiple data-selectize-all>
                        {foreach $extension->getDomainStatus() as $status}
                            <option value="all" {if !isset($extension->getItemData("domain_filters")->status) || !is_array($extension->getItemData("domain_filters")->status) || count($extension->getItemData("domain_filters")->status) == 0 || in_array('all',$extension->getItemData("domain_filters")->status)}selected{/if}>All</option>
                            <option value="{$status}" {if is_array($extension->getItemData("domain_filters")->status) && in_array($status,$extension->getItemData("domain_filters")->status)} selected {/if}>{$status}</option>
                        {/foreach}
                    </select>
                </div>

                {* 5.3. Registrar *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Registrar
                    </label>
                    <select class="form-control multiselect form-control--basic" name="domain[filters][registrars][]" multiple data-selectize-all>
                        {foreach $extension->getRegistrars() as $registrar}
                            <option value="all" {if !isset($extension->getItemData("domain_filters")->registrars) || !is_array($extension->getItemData("domain_filters")->registrars) || count($extension->getItemData("domain_filters")->registrars) == 0 || in_array('all',$extension->getItemData("domain_filters")->registrars)}selected{/if}>All</option>
                            <option value="{$registrar->registrar}" {if is_array($extension->getItemData("domain_filters")->registrars) && in_array($registrar->registrar,$extension->getItemData("domain_filters")->registrars)} selected {/if}>{$registrar->registrar}</option>
                        {/foreach}
                    </select>
                </div>

                {* 5.4. Billing Cycle *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Billing Cycle
                    </label>
                    <select class="form-control multiselect form-control--basic" name="domain[filters][cycle][]" multiple data-selectize-all>
                        {foreach $extension->getDomainStatus() as $status}
                            <option value="all" {if !isset($extension->getItemData("domain_filters")->cycle) || !is_array($extension->getItemData("domain_filters")->cycle) || count($extension->getItemData("domain_filters")->cycle) == 0 || in_array('all',$extension->getItemData("domain_filters")->cycle)}selected{/if}>All</option>
                            <option value="{$status}" {if is_array($extension->getItemData("domain_filters")->cycle) && in_array($status,$extension->getItemData("domain_filters")->cycle)} selected {/if}>{$status}</option>
                        {/foreach}
                    </select>
                </div>

                {* 5.5. Registration Date *}
                <div class="form-group form-group--row form-display-hours form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Registration Date
                    </label>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="domain[filters][reg_date][start]" value="{$extension->getItemData("domain_filters")->reg_date->start}"/>
                    </span>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="domain[filters][reg_date][end]" value="{$extension->getItemData("domain_filters")->reg_date->end}"/>
                    </span>
                </div>

                {* 5.6. Days Since Activation *}
                <div class="form-group form-group--row form-display-hours form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Days since activation
                    </label>
                    <input class="form-control due-days" type="number" min="0" name="domain[filters][days_activation][start]" value="{$extension->getItemData("domain_filters")->days_activation->start}" placeholder="Leave empty to ignore"/>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <input class="form-control due-days" type="number" min="0" name="domain[filters][days_activation][end]" value="{$extension->getItemData("domain_filters")->days_activation->end}" placeholder="Leave empty to ignore"/>
                </div>

                {* 5.7. Expiry Date *}
                <div class="form-group form-group--row form-display-hours form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Expiry Date
                    </label>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="domain[filters][due_date][start]" value="{$extension->getItemData("domain_filters")->due_date->start}"/>
                    </span>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <span class="time-select-container">
                        <input class="form-control time-select" type="date" name="domain[filters][due_date][end]" value="{$extension->getItemData("domain_filters")->due_date->end}"/>
                    </span>
                </div>

                {* 5.8. Days Until Due Date *}
                <div class="form-group form-group--row form-display-hours form-group--parent m-t-1x m-b-0x p-3x p-t-0x p-b-0x">
                    <label class="form-label">
                        Days until due date
                    </label>
                    <input class="form-control due-days" type="number" min="0" name="domain[filters][days_due][start]" value="{$extension->getItemData("domain_filters")->days_due->start}" placeholder="Leave empty to ignore"/>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <input class="form-control due-days" type="number" min="0" name="domain[filters][days_due][end]" value="{$extension->getItemData("domain_filters")->days_due->end}" placeholder="Leave empty to ignore"/>
                </div>

                {* 5.9. Days After Due Date *}
                <div class="form-group form-group--row form-group--parent m-t-1x m-b-0x p-t-0x p-3x form-display-hours">
                    <label class="form-label">
                        Days after due date
                    </label>
                    <input class="form-control  due-days" type="number" min="0" name="domain[filters][days_after][start]" value="{$extension->getItemData("domain_filters")->days_after->start}" placeholder="Leave empty to ignore "/>
                    <div class="divider-pause">
                        <div>-</div>
                    </div>
                    <input class="form-control due-days" type="number" min="0" name="domain[filters][days_after][end]" value="{$extension->getItemData("domain_filters")->days_after->end}" placeholder="Leave empty to ignore "/>
                </div>
            </div> 
        </div>
    </div>
</div>