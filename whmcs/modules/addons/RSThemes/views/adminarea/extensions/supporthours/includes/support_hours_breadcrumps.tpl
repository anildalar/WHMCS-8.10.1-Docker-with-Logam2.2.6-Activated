
<div class="app-main__top">
    <div class="container">
        <div class="top">
            <div class="top__toolbar">
                <a 
                    class="btn btn--default btn--outline btn--icon btn--rounded btn--mob-link" 
                    {if $smarty.get.exaction == 'item'}
                        href="{$helper->url('Template@extension',['templateName'=>$template->getMainName(), 'extension'=> $extension->getLinkName(), 'exaction'=>'settings'])}"
                    {else}
                        href="{$helper->url('Template@extensions',['templateName'=>$template->getMainName()])}"
                    {/if}    
                >
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 19L5 12L12 5" stroke="#393D45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
            <div class="top__content">
                <div class="top__title">{$smarty}
                    <h1 class="top__title-text">
                        <ul class="top__title-text breadcrumb breadcrumb--angle-separator">
                            {if !$name && $smarty.get.exaction != 'item'}<li class="breadcrumb__item"><a class="breadcrumb__item-text" href="{$helper->url('Template@extensions',['templateName'=>$template->getMainName()])}">Extensions</a></li>{/if}
                            {if $smarty.get.exaction != 'item'}
                                <li class="breadcrumb__item"><span class="breadcrumb__item-text">Support Hours</span>
                                    {if $smarty.get.exaction !='client_data_edit' && $smarty.get.exaction !='client_show'}
                                        {if $extension->isActive()}
                                            <span class="label label--outline label--success m-l-2x">Active</span>
                                        {/if}
                                    {/if}
                                </li>
                            {else}
                                <li class="breadcrumb__item"><a class="breadcrumb__item-text" href="{$helper->url('Template@extension',['templateName'=>$template->getMainName(), 'extension'=> $extension->getLinkName(), 'exaction'=>'settings'])}">Support Hours</a></li>
                                {if $extension->getItemData("name")}
                                    <li class="breadcrumb__item"><span class="breadcrumb__item-text">{$extension->getItemData("name")}</span></li>
                                {/if}
                            {/if}
                        </ul>
                    </h1>
                </div>
            </div>
            <div class="top__toolbar {if $smarty.get.exaction == 'item'} hidden{/if}">
                <div class="has-dropdown">
                    <a class="btn btn--default btn--outline" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                        <span class="btn__text">Actions</span>
                        <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                        <span class="btn__icon zmdi zmdi-more-vert is-hidden-mob-up" data-arrow-target></span>
                    </a>
                    <div class="dropdown" data-dropdown-menu>
                        <div class="dropdown__arrow" data-arrow></div>
                        <div class="dropdown__menu">
                            <ul class="nav">
                                {if $extension->isActive()}
                                    <li class="nav__item">
                                        <a class="nav__link" href="#" data-toggle="lu-modal" data-target="#deactivateModal">
                                            <span class="nav__link-icon ls ls-close"></span>
                                            <span class="nav__link-text">Deactivate</span>
                                        </a>
                                    </li>
                                {/if}
                                <li class="nav__item">
                                    <a class="nav__link" href="https://rsstudio.net/my-account/submitticket.php?step=2&deptid=2" target="_blank">
                                        <span class="nav__link-icon lm lm-denied"></span>
                                        <span class="nav__link-text">Report Bug</span>
                                    </a>
                                </li>
                                <li class="nav__divider"></li>
                                <li class="nav__item">
                                    <a class="nav__link" href="https://lagom.rsstudio.net/docs/extensions/support-hours/configuration/" target="_blank">
                                        <span class="nav__link-icon lm lm-book"></span>
                                        <span class="nav__link-text">Docs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {if !$extension->isActive()}
                    <a class="btn btn--primary" href="{$extension->getLink('activate')}">
                        <span class="btn__icon ls ls-check"></span>
                        <span class="btn__text">Activate</span>
                    </a>
                {/if}
            </div>
        </div>
    </div>
</div>

<div class="modal" id="activateModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title h6 m-b-0x">Before activate</h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p class="p-1">Warning, enable backup before activation !</p>
                <div class="text-center">
                    <a href="{$extension->getLink('activate')}" class="btn btn--xlg btn--success">
                        <span class="btn__text">Activate</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--hero" id="deactivateModal">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i>Deactivate Extension</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body">
                <p>Deactivate will stop all functions provided by specific  Lagom theme <br> extension.</p>
                <div class="form-check m-b-0x"> 
                    <label class="m-b-0x">
                        <input onchange="deleteSwitch(this)" type="checkbox" name="deleteAll" id="delete" class="form-checkbox">
                        &nbsp;<span class="form-indicator"></span>
                        <span class="form-text" style="padding-top: 12px;">Clear all data used by this extension: images, files, database entries etc.
                            <span class="font-weight-bold">Removed data cannot be restored!</span></span>
                    </label>
                </div>
            </div>
            <div class="modal__actions">
                <a id="deactivateSwitch" href="{$extension->getLink('deactivate')}" class="btn btn--danger">
                    <span class="btn__text">Yes, Deactivate</span>
                </a>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline"><span class="btn__text">No</span></button>
            </div>
        </div>
    </div>
</div>

<script>
    {literal}
    function deleteSwitch(el) {
        if($(el).is(':checked')){
            $('#deactivateSwitch').attr('href', '{/literal}{$extension->getLink('deactivate')}&delete=1{literal}')
        }else{
            $('#deactivateSwitch').attr('href', '{/literal}{$extension->getLink('deactivate')}{literal}')
        }
    }
    {/literal}
</script>
