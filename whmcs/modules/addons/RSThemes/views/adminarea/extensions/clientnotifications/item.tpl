{**************************** 

Client Notifications - Item
1. Display Rules
2. Notification Style
3. Notification Content
4. Sidebar
5. Loader
6. Scripts
7. Actions
8. Modals

*****************************}

{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/clientnotifications/includes/breadcrumbs/breadcrumbs-item.tpl"}
{/block}

{block name="template-content"}
    <form id="clientAlertForm" action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "save"])}" method="POST">
        <input value="{$extension->getItemData("id")}" class="form-control " type="hidden" name="id">
        <input value="save" type="hidden" name="exaction">
        <div class="block is-loading">
            <div class="block__body block__body--m-w" data-check-unsaved-changes>
                {* 1. Display Rules *}
                {include file="adminarea/extensions/clientnotifications/includes/item/display-rules.tpl"}

                {* 2. Notification Style *}
                {include file="adminarea/extensions/clientnotifications/includes/item/alert-style.tpl"}

                {* 3. Notification Content *}
                {include file="adminarea/extensions/clientnotifications/includes/item/alert-content.tpl"}
            </div>
            <div class="block__sidebar block__sidebar--md" data-check-unsaved-changes>
                {* 4. Sidebar *}
                {include file="adminarea/extensions/clientnotifications/includes/item/sidebar.tpl"}
            </div>
            {* 5. Loader *}
            <div class="block__loader preloader-container">
                <div class="preloader preloader--lg"></div>
            </div>
        </div>
    </form>
{/block}

{block name="template-scripts"}
    {* 6. Scripts *}
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{$helper->script('plugins/summernote.js')}"></script>
    <script type="text/javascript" src="{$helper->extensionAdminScript('clientnotifications', 'client-notifications.js')}"></script>
{/block}

{block name="template-actions"}
    {* 7. Actions *}
    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>
                    <button class="btn {if $template->getVersion()|intval >= 2}btn--primary{else}btn--success{/if} is-disabled" data-changes-save="#clientAlertForm" data-check-unsaved-changes data-form-validate="#clientAlertForm">
                        <span class="btn__text">Save Changes</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--outline btn--default is-disabled" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'settings'])}">
                        <span class="btn__text">Cancel</span>
                        <span class="btn__preloader preloader"></span>
                    </a>
                </div>
                {if $extension->getItemData("id",0) != 0}
                    <div class="m-l-a">
                        <a class="btn btn--outline btn--default" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'export', 'id'=>$extension->getItemData("id",0)])}">
                            <span class="btn__text">Export</span>
                            <span class="btn__preloader preloader"></span>
                        </a>
                        <a class="btn btn--outline btn--default" href="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => 'duplicate', 'id'=>$extension->getItemData("id",0)])}">
                            <span class="btn__text">Duplicate</span>
                            <span class="btn__preloader preloader"></span>
                        </a>
                        <a class="btn btn--outline btn--default is-disabled" href="#modal-delete-item" data-toggle="lu-modal" data-check-unsaved-changes>
                            <span class="btn__text">Delete</span>
                            <span class="btn__preloader preloader"></span>
                        </a>
                    </div>
                {/if}
            </div>
        </div>
    </div>
{/block}

{block name="template-modals"}
    {* 8. Modals *}
    
    {* Remove Notification *}
    {include file="adminarea/extensions/clientnotifications/includes/modal/delete-alert.tpl"}

    {* Buttons List *}
    {include file="adminarea/extensions/clientnotifications/includes/modal/button-add.tpl"}
    {include file="adminarea/extensions/clientnotifications/includes/modal/button-edit.tpl"}
    {include file="adminarea/extensions/clientnotifications/includes/modal/button-delete.tpl"}
    
    {* Choose Icon *}
    {include file="adminarea/extensions/clientnotifications/includes/modal/icon.tpl"}
    {include file="adminarea/extensions/clientnotifications/includes/modal/icon-remove.tpl"}

    {* Unsaved Changes *}
    {include file="adminarea/includes/modals/unsaved-changes.tpl"}

    {* Save Confirmation *}
    {include file="adminarea/includes/modals/save-confirmation.tpl"}

    {* Custom URL Remove *}
    {include file="adminarea/extensions/clientnotifications/includes/modal/custom-url-remove.tpl"}
{/block}