{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/supportpal/includes/supportpal_breadcrumbs.tpl"}
{/block}

{block name="template-tabs"}
    {include file="adminarea/extensions/supportpal/includes/supportpal_tabs.tpl"}
{/block}

{block name="template-content"}
    {assign var="iconsPath" value="./../../../../../../../templates/{$themeName}/assets/svg-icon"}
    <form 
        class="block" 
        action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "saveSettings"])}" 
        method="POST"
    >
        <div class="block__body">
            <div class="section">
                <h3 class="section__title">
                    Knowledgebase Category
                </h3>
                <div class="section__body">
                    <div 
                        class="widget__body panel" 
                        data-kb-categories
                    >       
                        <label class="form-label text-default neg-m-b-1x">
                            Graphic
                            {include file="adminarea/includes/helpers/tooltip.tpl" tooltip="Assign graphics to Knowledgebase category ID (it only works with `modern` view of knowledgebase page)"}
                        </label>
                                    
                        <div class="kb-category-row">
                            {if isset($extension->getPageSettings()->kbcategories) && is_array($extension->getPageSettings()->kbcategories) && $extension->getPageSettings()->kbcategories|@count > 0}
                                {foreach $extension->getPageSettings()->kbcategories as $kbcategoryItem}                                
                                    <div 
                                        class="kb-category-item media media--field media--sm" 
                                        data-kb-category-item
                                        data-index="{$kbcategoryItem->id}"                                 
                                        data-assets-url="{$whmcsURL}/templates/{$themeName}/assets"
                                    >
                                        <input type="hidden" name="kbcategory[id][]" value="{$kbcategoryItem->id}">
                                        <div class="media__content" >
                                            <a 
                                                class="media__upload {if $kbcategoryItem->icon != "" || $kbcategoryItem->predefinedIcon != "" || $kbcategoryItem->media != ""}is-hidden{/if}" 
                                                data-toggle="lu-modal" 
                                                data-target="#menuIconModal"
                                                data-kb-category-item-icon-button
                                                data-kb-category-item-icon-new
                                                href="#"
                                            >
                                                <div class="media__upload-content">
                                                    <i class="media__icon ls ls-upload"></i>
                                                    <strong class="media__title p-md">Click to choose icon</strong>
                                                </div>
                                            </a>
                                            <div class="media__body {if $kbcategoryItem->icon == "" && $kbcategoryItem->predefinedIcon == ""  && $kbcategoryItem->media == ""}is-hidden{/if}" data-kb-category-item-icon-content>
                                                <i class="{if $kbcategoryItem->icon == ""}is-hidden{else}{$kbcategoryItem->icon}{/if}" data-kb-category-item-icon></i>
                                                <div class="media__predefined-icon media__predefined-icon--sp {if $kbcategoryItem->predefinedIcon == ""}is-hidden{/if}" data-kb-category-item-predefined-icon>
                                                    {if $kbcategoryItem->predefinedIcon && file_exists("{$whmcsDir}/templates/{$themeName}/assets/svg-icon/{$kbcategoryItem->predefinedIcon}")}
                                                        {include file="{$iconsPath}/{$kbcategoryItem->predefinedIcon}"}    
                                                    {/if}
                                                </div>
                                                <div class="media__predefined-media {if $kbcategoryItem->media == ""}is-hidden{/if}" data-kb-category-item-media>
                                                    {if $kbcategoryItem->media}
                                                        <img src="{$whmcsURL}/templates/{$themeName}/assets/img/page-manager/{$kbcategoryItem->media}" />    
                                                    {/if}
                                                </div>
                                                <input type="hidden" name="kbcategory[icon][]" value="{$kbcategoryItem->icon}" data-kb-category-item-icon-value>
                                                <input type="hidden" name="kbcategory[predefined_icon][]" value="{$kbcategoryItem->predefinedIcon}" data-kb-category-item-predefined-icon-value>
                                                <input type="hidden" name="kbcategory[media][]" value="{$kbcategoryItem->media}" data-kb-category-item-media-value>
                                            </div>
                                            <div class="media__footer">                                                                                        
                                                <span class="media__name" data-kb-category-item-icon-name>
                                                    Cat Id: <input name="kbcategory[kbid][]" type="number" class="form-control form-control--xs" value="{$kbcategoryItem->kbId}" data-kb-category-id>
                                                </span>
                                                <span class="btn btn--icon btn--link btn--xs" data-toggle="lu-modal" data-target="#menuIconModal" data-kb-category-item-icon-button>
                                                    <i class="btn__icon lm lm-pen tooltip drop-target" data-toggle="lu-tooltip" data-title="Edit"></i>
                                                </span>
                                                <a class="btn btn--icon btn--link btn--xs" data-toggle="lu-modal" data-target="#deleteKnowledgebaseIconItem" data-kb-category-item-icon-remove>
                                                    <i class="btn__icon lm lm-trash tooltip drop-target" data-toggle="lu-tooltip" data-title="Remove"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            {/if}   
                            <div 
                                class="kb-category-item kb-category-item--new media media--field media--sm" 
                                data-kb-category-item-new
                                data-index="{if isset($extension->getPageSettings()->kbcategories) && is_array($extension->getPageSettings()->kbcategories)}{$extension->getPageSettings()->kbcategories|@count}{else}0{/if}"                                 
                                data-assets-url="{$whmcsURL}/templates/{$themeName}/assets"
                            >                                
                                <a 
                                    class="media__upload"                                         
                                    href="#"
                                >
                                    <div class="media__upload-content">
                                        <i class="media__icon ls ls-plus"></i>
                                        <strong class="media__title p-md">Add New</strong>
                                    </div>
                                </a>
                            </div>        
                        </div>
                        <div class="row m-t-2x">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12 m-b-0x">
                                <label class="form-label text-default">
                                    Columns
                                    {include file="adminarea/includes/helpers/tooltip.tpl" tooltip="Select the number of columns to display categories"}
                                </label>
                                <select class="form-control" name="kbcategoriesCols[col]">
                                    <option value="1" {if isset($extension->getPageSettings()->kbcategoriesCols->col) && $extension->getPageSettings()->kbcategoriesCols->col == "1"}selected{/if}>1</option>
                                    <option value="2" {if isset($extension->getPageSettings()->kbcategoriesCols->col) && $extension->getPageSettings()->kbcategoriesCols->col == "2"}selected{/if}>2</option>
                                    <option value="3" {if isset($extension->getPageSettings()->kbcategoriesCols->col) && $extension->getPageSettings()->kbcategoriesCols->col == "3"}selected{/if}>3</option>
                                    <option value="4" {if (isset($extension->getPageSettings()->kbcategoriesCols->col) && $extension->getPageSettings()->kbcategoriesCols->col == "4") || !isset($extension->getPageSettings()->kbcategoriesCols->col)}selected{/if}>4</option>
                                    <option value="5" {if isset($extension->getPageSettings()->kbcategoriesCols->col) && $extension->getPageSettings()->kbcategoriesCols->col == "5"}selected{/if}>5</option>
                                </select>
                            </div>
                        </div>        
                   </div>
                </div>
            </div>
            <div class="section">
                <h3 class="section__title">
                    View Ticket
                </h3>
                <div class="section__body">
                    <div class="widget__body panel">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-6 col-sm-12 m-b-0x">
                                <label class="form-label text-default">
                                    Ticket Reply Order
                                    {include file="adminarea/includes/helpers/tooltip.tpl" tooltip="Select the order in which ticket messages are shown, ascending where the latest message is last or descending where the latest message is first."}
                                    
                                </label>
                                <select class="form-control" name="viewticket[sorting]">
                                    <option value="asc" {if isset($extension->getPageSettings()->viewticket->sorting) && $extension->getPageSettings()->viewticket->sorting == "asc"}selected{/if}>Ascending</option>
                                    <option value="desc" {if (isset($extension->getPageSettings()->viewticket->sorting) && $extension->getPageSettings()->viewticket->sorting == "desc") || !isset($extension->getPageSettings()->viewticket->sorting)}selected{/if}>Descending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
        </div>
    </form>    
{/block}

{block name="template-actions"}
    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>
                    <button class="btn {if $template->getVersion()|intval >= 2}btn--primary{else}btn--success{/if}" data-form="submit">
                        <span class="btn__text">Save Changes</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--outline btn--default" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'settings'])}">
                        <span class="btn__text">Cancel</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="template-modals"}
    {include file="adminarea/extensions/supportpal/includes/icon-modal.tpl"}
    {include file="adminarea/extensions/supportpal/includes/knowledgebase-icon-item-remove.tpl"}
{/block}

{block name="template-scripts"}
    <script type="text/javascript" src="{$helper->extensionAdminScript('supportpal', 'supportpal.js')}"></script>
{/block}