{extends file="adminarea/includes/layout.tpl"}

{block name="template-heading"}
    {include file="adminarea/extensions/cms/includes/breadcrumbs.tpl"}
{/block}

{block name="template-tabs"}
    {include file="adminarea/extensions/cms/includes/tabs.tpl"}
{/block}

{block name="template-content"}
    <div class="block">
        <div class="block__body">
            <div class="section">
                <h3 class="section__title">Settings</h3>
                <div class="panel">
                    <form id="cmsSave" action="{$helper->url('Template@extension',['templateName' => $template->getMainName(), 'extension' => $extension->getLinkName(), 'exaction' => "save"])}" method="POST">
                        <div class="form-group p-t-2x">
                            <label class="form-label">
                                History limit
                            </label>
                            <input class="form-control" type="text" name="config[history_limit]" value="{$extension->getHistoryLimit()}"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="block__sidebar info-sidebar-block info-sidebar-block--cms">
            <div class="widget widget--lg">
                <a class="widget__media has-overlay info-sidebar-widget">
                    {include file="adminarea/info/includes/sidebar-logo-lagom-2.tpl"}
                    {include file="adminarea/info/includes/sidebar-lines.tpl"}
                </a>
            </div>
        </div>
    </div>
{/block}

{block name="template-actions"}
    {* 7. Actions *}
    <div class="app-main__actions app-main__actions--support">
        <div class="container">
            <div class="d-flex justify-space-between w-100">
                <div>
                    <button class="btn {if $template->getVersion()|intval >= 2}btn--primary{else}btn--success{/if}" form="cmsSave">
                        <span class="btn__text">Save Changes</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
{/block}