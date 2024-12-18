{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/supportpal/includes/supportpal_breadcrumbs.tpl"}
{/block}

{block name="template-tabs"}
    {include file="adminarea/extensions/supportpal/includes/supportpal_tabs.tpl"}
{/block}

{block name="template-content"}
    <form class="block" action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "savePages"])}" method="POST">
        <div class="block__body">
            {foreach $extension->getPageTempates() key=key item=pageTemplate}
                {if $key == "support-departments"}
                    <div class="section">
                        <h3 class="section__title">
                            Support Departments
                        </h3>
                        <div class="section__body" data-inputs-container="radio">
                            {include file="adminarea/extensions/supportpal/includes/page-template-widget.tpl" pageName="support-departments" layoutName="default" selectedLayout="{$pageTemplate}" layoutLabel="Default" layoutPreview="supportpal/supportpal_preview-departments-default.png"}
                            {include file="adminarea/extensions/supportpal/includes/page-template-widget.tpl" pageName="support-departments" layoutName="boxes" selectedLayout="{$pageTemplate}" layoutLabel="Boxes" layoutPreview="supportpal/supportpal_preview-departments-boxed.png"}   
                        </div>
                    </div>
                {/if}
                {if $key == "knowledgebase-categories"}      
                    <div class="section">
                        <h3 class="section__title">
                            Knowledgebase Categories
                        </h3>
                        <div class="section__body" data-inputs-container="radio">
                            {include file="adminarea/extensions/supportpal/includes/page-template-widget.tpl" pageName="knowledgebase-categories" layoutName="default" selectedLayout="{$pageTemplate}" layoutLabel="Default" layoutPreview="supportpal/supportpal_preview-kb-default.png"}
                            {include file="adminarea/extensions/supportpal/includes/page-template-widget.tpl" pageName="knowledgebase-categories" layoutName="modern" selectedLayout="{$pageTemplate}" layoutLabel="Modern" layoutPreview="supportpal/supportpal_preview-kb-modern.png"}   
                        </div>
                    </div>
                {/if}
                {if $key == "announcements"}    
                    <div class="section">
                        <h3 class="section__title">
                            Announcements
                        </h3>
                        <div class="section__body" data-inputs-container="radio">
                            {include file="adminarea/extensions/supportpal/includes/page-template-widget.tpl" pageName="announcements" layoutName="default" selectedLayout="{$pageTemplate}" layoutLabel="Default" layoutPreview="supportpal/supportpal_preview-announcements-default.png"}
                            {include file="adminarea/extensions/supportpal/includes/page-template-widget.tpl" pageName="announcements" layoutName="modern" selectedLayout="{$pageTemplate}" layoutLabel="Modern" layoutPreview="supportpal/supportpal_preview-announcements-modern.png"}   
                        </div>
                    </div>
                {/if}
            {/foreach}
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
                    <a class="btn btn--outline btn--default" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'pages'])}">
                        <span class="btn__text">Cancel</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="template-scripts"}
{/block}