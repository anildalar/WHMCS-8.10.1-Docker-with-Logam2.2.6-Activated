{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/customcode/includes/breadcrumbs/breadcrumbs.tpl"}
{/block}

{block name="template-content"}
    <div class="t-c__top top m-b-3x" data-top-search="" data-toggler-options="toggleClass: is-open;">
        <div class="top__toolbar">
            <h3 class="section__title">
                Code Instances
                {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->list['instances']}
            </h3>
        </div>
        <div class="top__toolbar is-right">
            <div class="top__search input-group">
                <span class="input-group__icon lm lm-search"></span>
                <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="Search..." id="table-search">
            </div>
            <a class="btn btn--primary " href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "item"])}">
                <i class="btn__icon lm lm-plus"></i>
                <span class="btn__text">Add New</span>
            </a>
        </div>
    </div>

    <div class="section">
        <div class="t-c__body t-c__body--boxed">
            <form class="dataTables_wrapper no-footer" action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName()])}" method="POST">
                <table class="t-c__table table mob-table--block dataTable no-footer" id="styles-table" data-services-table data-search-input="#table-search" data-clickable-rows="true" data-responsive="false">
                    <colgroup>
                        <col class="table__col-6">
                        <col class="table__col-6">
                        <col class="table__col-6">
                        <col class="table__col-2">
                        <col class="table__col-0">
                    </colgroup>
                    <thead>
                        <tr role='row'>
                            <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending">
                                <span class="cell-name">Name</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                <span class="cell-name">Location</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                <span class="cell-name">Customer Status</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="sorting_asc" tabindex="0" aria-controls="pages-tableCMS" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                <span class="cell-name">State</span>
                                <span class="sorting-icons-box">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path class="sort-asc" d="M3.50021 4.00159L8.50021 4.00159C8.63282 4.00159 8.75999 3.94891 8.85376 3.85514C8.94753 3.76137 9.00021 3.6342 9.00021 3.50159L9.00021 3.00159C9.00101 2.93601 8.98808 2.87099 8.96224 2.81072C8.93641 2.75044 8.89825 2.69623 8.85021 2.65159L6.35021 0.151587C6.30532 0.103756 6.2511 0.0656343 6.1909 0.0395739C6.13071 0.0135136 6.06581 6.89211e-05 6.00021 6.89268e-05C5.93461 6.89326e-05 5.86971 0.0135136 5.80951 0.0395739C5.74932 0.0656343 5.6951 0.103756 5.65021 0.151587L3.15021 2.65159C3.10217 2.69623 3.06401 2.75044 3.03818 2.81072C3.01234 2.87099 2.99941 2.93601 3.00021 3.00159L3.00021 3.50159C3.00021 3.6342 3.05289 3.76137 3.14666 3.85514C3.24042 3.94891 3.3676 4.00159 3.50021 4.00159Z" fill="#B9BDC5"></path><path class="sort-desc" d="M8.50003 8H3.50003C3.36743 8 3.24025 8.05268 3.14648 8.14645C3.05271 8.24021 3.00003 8.36739 3.00003 8.5V9C2.99924 9.06558 3.01217 9.13059 3.038 9.19087C3.06384 9.25115 3.102 9.30535 3.15004 9.35L5.65003 11.85C5.69493 11.8978 5.74914 11.936 5.80934 11.962C5.86954 11.9881 5.93444 12.0015 6.00003 12.0015C6.06563 12.0015 6.13053 11.9881 6.19073 11.962C6.25093 11.936 6.30514 11.8978 6.35003 11.85L8.85004 9.35C8.89807 9.30535 8.93623 9.25115 8.96207 9.19087C8.9879 9.13059 9.00083 9.06558 9.00003 9V8.5C9.00003 8.36739 8.94736 8.24021 8.85359 8.14645C8.75982 8.05268 8.63264 8 8.50003 8Z" fill="#B9BDC5"></path></g><defs><clipPath id="clip0"><rect width="12" height="12" fill="white"></rect></clipPath></defs></svg>
                                </span>
                            </th>
                            <th class="cell-actions no-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {if $extension->getCustomCodeList()|@count == 0}
                            {* Brak *}
                        {else}
                            {foreach from=$extension->getCustomCodeList() item=code key=k}
                                <tr>
                                    <td class="cell-name">
                                        <b> <a href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'id' => $code->id, 'exaction' => "item"])}">{$code->name}</a></b>
                                    </td>
                                    <td class="cell-scheme">
                                        {$code->location}
                                    </td>
                                    <td class="cell-scheme">
                                        {if $code->client == "all"}
                                            All
                                        {elseif $code->client == "loggedin"}
                                            Logged In
                                        {elseif $code->client == "loggedout"}     
                                            Logged Out
                                        {/if}    
                                    </td>
                                    <td class="cell-scheme">
                                        {if $code->enabled}
                                            <span class="label label--outline label--success">Active</span>
                                        {else}
                                            <span class="label label--outline label--default">Disabled</span>
                                        {/if}
                                    </td>
                                    <td class="cell-actions">
                                        <div class="has-dropdown">
                                            <a class="btn btn--default btn--outline btn--xs" href="" data-toggle="lu-dropdown" data-placement="bottom right" data-custom-code-list-dropdown>
                                                <span class="btn__text is-hidden-mob-down">Actions</span>
                                                <span class="m-l-1x caret"></span>
                                            </a>
                                            <div class="dropdown" data-dropdown-menu>
                                                <div class="dropdown__arrow" data-arrow></div>
                                                <div class="dropdown__menu">
                                                    <ul class="nav">
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'id' => $code->id, 'exaction' => "item"])}">
                                                                <span class="nav__link-icon ls ls-pen"></span>
                                                                <span class="nav__link-text">Manage</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'id' => $code->id, 'exaction' => "status"])}">
                                                                {if !$code->enabled}
                                                                    <span class="nav__link-icon ls ls-check"></span>
                                                                    <span class="nav__link-text">Activate</span>
                                                                {else}
                                                                    <span class="nav__link-icon ls ls-close"></span>
                                                                    <span class="nav__link-text">Deactivate</span>
                                                                {/if}
                                                            </a>
                                                        </li>

                                                        <li class="nav__item" style="min-height: 15px !important;">
                                                            <span style="margin:auto; background-color: lightgray;width: 100%; height: 1px"></span>
                                                        </li>
                                                        <li class="nav__item">
                                                            <a class="nav__link" href="#" data-custom-code-list-remove-item data-ajax-url="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'id' => $code->id, 'exaction' => "delete"])}">
                                                                <span class="nav__link-icon ls ls-trash"></span>
                                                                <span class="nav__link-text">Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {/foreach}
                        {/if}
                    </tbody>
                </table>
            </form>

        </div>
    </div>
{/block}

{block name="template-scripts"}
    <script type="text/javascript" src="{$helper->extensionAdminScript('customcode', 'custom-code.js')}"></script>
{/block}


{block name="template-modals"}
    {include file="adminarea/extensions/customcode/includes/modal/remove-item.tpl"}
{/block}