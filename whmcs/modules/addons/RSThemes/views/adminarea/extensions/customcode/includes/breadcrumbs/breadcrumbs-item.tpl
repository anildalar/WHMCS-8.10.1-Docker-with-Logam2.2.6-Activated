

<div class="app-main__top">
    <div class="container">
        <div class="top">
            <div class="top__toolbar">
                <a class="btn btn--default btn--outline btn--icon btn--rounded btn--mob-link" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'settings'])}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 19L5 12L12 5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>                
                </a>
            </div>
            <div class="top__content">
                <div class="top__title">
                    <h1 class="top__title-text">
                        <ul class="top__title-text breadcrumb breadcrumb--angle-separator">
                            <li class="breadcrumb__item"><a href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'settings'])}" class="breadcrumb__item-text">Custom Code Manager</a></li>
                            {if $extension->getItemData("name")}
                                <li class="breadcrumb__item"><span class="breadcrumb__item-text">{$extension->getItemData("name")}</span></li>
                            {else}
                                <li class="breadcrumb__item"><span class="breadcrumb__item-text">Add New</span></li>    
                            {/if}
                        </ul>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>