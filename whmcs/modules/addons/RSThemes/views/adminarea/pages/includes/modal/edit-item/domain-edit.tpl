{************************************************* 

RSThemes - Website Builder - Edit TLD Modal

1. Modal Top
2. Modal Form 
    2.1. TLD
        2.1.1. Choose TLD
    2.2. Hidden Inputs
    2.3. Modal Actions

*************************************************}

<div class="modal" id="editDomainItemModal" data-edit-domain-item-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            {* 1. Modal Top *}
            <div class="modal__top top">
                <h4 class="top__title h6">Edit "TLD" item {include file="adminarea/includes/helpers/docs.tpl" link=$cms_docs->modal['item']['add_edit']['domain']}</h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>

            {* 2. Modal Form *}
            <form 
                id="editDomainForm" 
                data-edit-domain-item-form
                data-ajax-url="{$helper->url('CustomPage@getListItem',['templateName' => $template->getMainName()])}"
            >
                <div class="modal__body overflow-y-visible">
                    {* 2.1. TLD *}
                    <div class="modal__section">
                        {* 2.1.1. Choose TLD *}
                        <div class="form-group">
                            <label class="form-label">
                                Choose TLD
                                {if $cms_tooltips->modal['item']['add_edit']['domain']['choose_tld']['content']}
                                    {if isset($cms_tooltips->modal['item']['add_edit']['domain']['choose_tld']['url']) && $cms_tooltips->modal['item']['add_edit']['domain']['choose_tld']['url'] != ""}
                                        {assign var="popoverFooter" value="<a class='btn btn--secondary btn--xs' href='{$cms_tooltips->modal['item']['add_edit']['domain']['choose_tld']['url']}' target='_blank'>Learn More</a>"}
                                    {else}
                                        {assign var="popoverFooter" value=false}
                                    {/if}
                                    {include 
                                        file="adminarea/includes/helpers/popover.tpl" 
                                        popoverClasses="notification__popover popover__right-top"
                                        popoverBody="{$cms_tooltips->modal['item']['add_edit']['domain']['choose_tld']['content']}"
                                        popoverFooter="{$popoverFooter}"
                                    }
                                {/if}
                            </label>
                            <select class="form-control" name="item[domain]" required data-select-domain>                            
                                {foreach $domains as $domain}
                                    <option value="{$domain->id}">{$domain->extension}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>    

                    {* 2.2. Hidden Inputs *}
                    <input type="hidden" name="item[list_name]" id="itemListName" data-edit-list-name value=""/>
                    <input type="hidden" name="item[key]" id="itemKey" data-edit-key value=""/>
                    <input type="hidden" name="item[position]" id="itemPosition" data-edit-position value=""/>
                    <input type="hidden" name="item[section]" data-edit-section-index value=""/>
                    <input type="hidden" name="item[group]" data-edit-group-index value=""/>
                </div>

                {* 2.3. Modal Actions *}
                <div class="modal__actions">
                    <button class="btn btn--primary" type="submit" form="editDomainForm" data-edit-domain-item-btn>
                        <span class="btn__text">Edit</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                        <span class="btn__text">Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>