{**************************** 

Client Notifications - Item Sidebar
1. General
2. Display Time
3. Last Modification

*****************************}

<div class="section section--sticky" data-alert-settings>
    <h3 class="section__title">
        Settings
        {include file="adminarea/includes/helpers/docs.tpl" link=$extension->getDocs()->item['settings']}
    </h3>
    <div class="section__body">
        {* 1. General *}
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
                        </label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{$extension->getItemData("name")}" lu-required>
                            <span class="form-feedback is-hidden">This field is required</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">
                            Custom Class
                        </label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="custom_class" value="{$extension->getItemData("custom_class")}">
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <span class="form-label text-default form-text m-r-2x m-t-0x m-b-0x">
                            Publish notification
                        </span>
                        <label class="m-l-a">
                            <div class="switch switch--primary">
                                <input class="switch__checkbox" name="enabled" value="{$extension->getItemData("enabled")}" type="checkbox" {if $extension->getItemData("enabled")}checked{/if}>
                                <span class="switch__container"><span class="switch__handle"></span></span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        {* 2. Display Time *}
        <div class="panel panel--collapse" data-alert-date-container>
            <div class="collapse-toggle">
                <div class="top__title top__title--widget">
                    Display Time
                </div>
                <label>
                    <div class="switch switch--primary" data-toggle="lu-collapse" data-target="#displayTime" aria-expanded="true">
                        <input class="switch__checkbox" name="date[enabled]" value="1" type="checkbox" {if $extension->getItemData("date")->enabled}checked{/if} data-alert-dates-checkbox>
                        <span class="switch__container"><span class="switch__handle"></span></span>
                    </div>
                </label>
            </div>
            <div class="collapse {if $extension->getItemData("date")->enabled}show{/if}" id="displayTime">
                <div class="form-group display-time-start form-group--parent m-b-0x p-3x p-b-0x">
                    <label class="form-label">Start Date</label>
                    <span class="time-select-container">
                        <input class="form-control time-select w-100" type="datetime-local" name="date[start]" value="{$extension->getItemData("date")->start}" data-alert-dates-input/>
                    </span>
                </div>
                <div class="form-group display-time-end form-group--parent m-t-1x m-b-0x p-3x p-t-0x">
                    <label class="form-label">End Date</label>
                    <span class="time-select-container">
                        <input class="form-control time-select w-100" type="datetime-local" name="date[end]" value="{$extension->getItemData("date")->end}" data-alert-dates-input/>
                    </span>
                </div>
            </div> 
        </div>

        {* 3. Last Modification and Author*}
        {if $extension->getItemData("id") != ""}
            <div class="last-modification">
                <span class="last-text">Last Modification:</span><span> {$extension->getItemData("edited")} By {$extension->getItemData("editedBy")}</span>
            </div>
        {/if}
    </div>
</div>